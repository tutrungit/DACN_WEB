<?php
include "config.php";
include "autoload.php";
$obj = new Nhanvien();
$ma = $_GET["ma"];
$data = $obj->delete($ma);
header("location:themnv.php");