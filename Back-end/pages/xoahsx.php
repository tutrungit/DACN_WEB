<?php
include "config.php";
include "autoload.php";
$obj = new Hangsx();
$ma = $_GET["ma"];
$data = $obj->delete($ma);
header("location:themhangsx.php");