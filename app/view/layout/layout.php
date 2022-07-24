<?php

use App\model\Auth;

$auth = new Auth();

require ROOT.'app/view/block/header.php';
echo $content;
require ROOT.'app/view/block/footer.php';