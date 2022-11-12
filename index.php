<?php
declare(strict_types=1);

require_once("src\controller\Controller.php");
require_once("src\Request.php");

$Request = new Request($_GET, $_POST);

$controller = new Controller($Request);
$controller->run();