<?php
// $id = $_GET['id'];
// echo $id;
include_once './vendor/autoload.php';


use Project\Controllers\Apply;

$applylist = new Apply();
$applylist->destroy($_GET['id']);
header('location: index.php');
