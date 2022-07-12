<?php

namespace Framework\Entity;

use Framework\Exception\FileNotFoundException;
use ParseError;

class TemplateEngine
{
    public function renderTemplate(string $template, array $params = [], string $layout = 'layout')
    {
        extract($params);
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
            exit();
        } catch (ParseError $e) {
            echo 'ParseError: '.$e->getMessage();
        }
    }
}
