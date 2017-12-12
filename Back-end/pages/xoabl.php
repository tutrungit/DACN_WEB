<?php
include "config.php";
include "autoload.php";
$obj = new Binhluan();
$id = $_GET["id"];
$data = $obj->delete($id);
header("location:timbl.php");