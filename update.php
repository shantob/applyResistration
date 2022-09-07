<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    echo 'Only Post request are allowed';
    die();
}
// namespace Project;

//include_once "./App/Product.php";
include_once './vendor/autoload.php';


use Project\Controllers\Apply;

$applylist = new Apply();
$applylist->update($_POST, $_GET['id']);
// echo "<pre>";
// print_r($_POST);
//print_r($_GET['id']);
//$editFood->edit($_GET);
 header('location: index.php');
