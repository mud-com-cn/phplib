<?php
require_once('./include/ansi.php');
require_once('./adm/config.php');
require_once(MUD_LIB.'/adm/app.php');
$app = new App();
$app->setup();
$app->SERVER_D->back_end();
?>
