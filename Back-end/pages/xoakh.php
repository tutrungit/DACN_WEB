<?php
include "config.php";
include "autoload.php";
$obj = new Khachhang();
$ma = $_GET["ma"];
$data = $obj->delete($ma);
header("location:themkh.php");