<?php
require_once('application\views\HTMLView.php');
require_once('application\controller\Mainpage.php');

$body = "Test";
$view = new application\views\HTMLView();
$view->echoHTML($body);
