<?php
include "config.php";
include "autoload.php";
$obj = new Dh();
$ma = $_GET["ma"];
$data = $obj->delete($ma);
header("location:themdh.php");