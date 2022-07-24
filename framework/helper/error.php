<?php

set_error_handler(
    function ($error_number, $error_msg, $error_file, $error_line) {
        $level_tips = '';
        switch ($error_number) {
            case E_NOTICE:
                $level_tips = 'Notice: ';
                break;
        }
        $error = '<i style="color: blue;">'.$level_tips.$error_msg.' in '.$error_file.' on '.$error_line.'</i>';
        echo $error.PHP_EOL;
    },
    E_ALL
);