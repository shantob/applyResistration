<?php
// $id = $_GET['id'];
// echo $id;
include_once './vendor/autoload.php';


use Project\Controllers\Apply;

$applylist = new Apply();
$applyInfo = $applylist->show($_GET['id']);
//print_r($foodInfo);
//header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container p-2">
        <div class="card-body mt-3">

            <h2 class="text-center py-3 bg-info">Apply Information</h2>
            <hr>
            <div class="card">
                <div class="card-body p-3">
                    <h4>The Id is - <?= $applyInfo['id'] ?></h4>
                    <h4>The Name is - <?= $applyInfo['name'] ?></h4>
                    <h4>The Father Name is - <?= $applyInfo['father_name'] ?></h4>
                    <h4>The Mother Name is - <?= $applyInfo['mother_name'] ?></h4>
                    <h4>The Collage is - <?= $applyInfo['collage'] ?></h4>
                    <h4>The Depertment is - <?= $applyInfo['depertment'] ?></h4>
                    <h4>The GPA is - <?= $applyInfo['gpa'] ?></h4>
                    <h4>The Address is - <?= $applyInfo['address'] ?></h4>
                </div>
                <a href="index.php"><button class="btn btn-warning text-center">Apply List </button></a>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>