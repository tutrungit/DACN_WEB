<?php
include "config.php";
include "autoload.php";
$obj = new Dongdt();
$ma = $_GET["ma"];
$data = $obj->delete($ma);
header("location:themdongdt.php");