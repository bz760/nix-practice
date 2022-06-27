<?php

namespace App;

class TemplateEngine
{
    public function renderTemplate(string $template, array $params = [], string $layout = 'layout')
    {
        extract($params);
        ob_start();
        include ROOT.'app/views/templates/'.$template.'.php'; // template выведется в буфер
        $content = ob_get_clean();
        include ROOT.'app/views/layouts/'.$layout.'.php';
    }
}