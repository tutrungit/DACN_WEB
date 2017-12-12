<?php
include "config.php";
include "autoload.php";
$obj = new Ctdh();
$ma = $_GET["ma"];
$imei = $_GET["imei"];
$data = $obj->delete($ma, $imei);
header("location:themctdh.php");