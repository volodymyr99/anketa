<?php
//use models\Sluhach;
require_once "config.php";
$sluh = new models\Sluhach;
$sluh->prov();
$sl = new controllers\Sluhach;
$sl->prov();


?>