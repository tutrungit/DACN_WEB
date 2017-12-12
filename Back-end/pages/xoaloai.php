<?php
include "config.php";
include "autoload.php";
$obj = new Loaidt();
$ma = $_GET["ma"];
$data = $obj->delete($ma);
header("location:themloaidt.php");