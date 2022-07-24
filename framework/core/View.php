<?php

namespace Framework\core;

use Framework\exception\FileNotFoundException;

class View
{
    /**
     * @param string $template
     * @param array $p Parameters
     * @param string $layout
     */
    public function render(string $template, array $p = [], string $layout = 'layout')
    {
        extract($p);
        ob_start();
        $tplPath = ROOT.'app/view/template/'.$template.'.php';
        try {
            isFileExists($tplPath);
            include $tplPath; // template виведеться у буфер виводу
            $content = ob_get_clean();
            $layoutPath = ROOT.'app/view/layout/'.$layout.'.php';
            isFileExists($layoutPath);
            include $layoutPath;
        } catch (FileNotFoundException $e) {
            $e->errorMessage();
            ob_end_clean();
            exit;
        } catch (\ParseError $e) {
            echo 'ParseError: '.$e->getMessage();
        }
    }
}