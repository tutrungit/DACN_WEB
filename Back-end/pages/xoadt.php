<?php
include "config.php";
include "autoload.php";
$obj = new Dt();
$ma = $_GET["ma"];
$data = $obj->delete($ma);
header("location:themdt.php");