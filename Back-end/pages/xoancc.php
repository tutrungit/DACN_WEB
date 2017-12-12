<?php
include "config.php";
include "autoload.php";
$obj = new Nhacc();
$ma = $_GET["ma"];
$data = $obj->delete($ma);
header("location:themncc.php");