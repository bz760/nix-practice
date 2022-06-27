<?php

namespace App;

class TemplateEngine
{
    public function renderTemplate(string $template, array $params = [], string $layout = 'layout')
    {
        extract($params);
        ob_start();
        $tplPath = ROOT.'app/views/templates/'.$template.'.php';
        try {
            isFileExists($tplPath);
        } catch (Exceptions\FileNotFoundException $e) {
            $e->errorMessage();
            ob_end_clean();
            exit();
        }
        try {
            include $tplPath; // template выведется в буфер
        } catch (\ParseError $e) {
            echo 'ParseError: '.$e->getMessage();
        }
        $content = ob_get_clean();
        $layoutPath = ROOT.'app/views/layouts/'.$layout.'.php';
        try {
            isFileExists($layoutPath);
        } catch (Exceptions\FileNotFoundException $e) {
            $e->errorMessage();
            exit();
        }
        try {
            include $layoutPath;
        } catch (\ParseError $e) {
            echo 'ParseError: '.$e->getMessage();
        }
    }
}