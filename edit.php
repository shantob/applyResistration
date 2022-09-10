<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only Apply Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<?php
    // $id = $_GET['id'];
    // echo $id;
    include_once './vendor/autoload.php';


    use Project\Controllers\Apply;

    $applylist = new Apply();
    $appliInfo = $applylist->show($_GET['id']);
    ?>
    <div class="container p-5">
        <h2 class="text-center text-info">Online Form Apply</h2>
        <form action="./update.php?id=<?= $appliInfo['id'] ?>" method="post">
            <div class="col-md-12 d-flex">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <label for="id" class="mt-5">Id</label>
                            <input type="number" name="id" value="<?= $appliInfo['id'] ?>" class="form-control" placeholder="Endter Product Id">
                            <label for="name" class="mt-5">Your Name</label>
                            <input type="text" class="form-control"value="<?= $appliInfo['name'] ?>"  name="name" placeholder="Endter Product Name">
                            <label for="father_name" class="mt-5">Father Name</label>
                            <input type="text" class="form-control"value="<?= $appliInfo['father_name'] ?>"  name="father name" placeholder="Endter Father Name">
                            <label for="mother name" class="mt-5">Mother Name</label>
                            <input type="text" class="form-control"value="<?= $appliInfo['mother_name'] ?>"  name="mother_name" placeholder="Endter Mother Name">
                            <br><br>
                            <label for="gender">Select Gender   : </label>
                            <br>
                            <input type="radio" name="gender" class="mx-3" value="female">Female
                            <input type="radio" name="gender" class="mx-3" value="male">Male
                            <input type="radio" name="gender" class="mx-3" value="other">Other
                            <br><br>
                            <label for="collage" class="mt-5">Collage</label>
                            <input type="text" class="form-control"value="<?= $appliInfo['collage'] ?>"  name="collage" placeholder="Endter collage Name">
                            <label for="depertment" class="mt-5">Depertment</label>
                            <input type="text"value="<?= $appliInfo['depertment'] ?>"  class="form-control" name="depertment" placeholder="Endter depertment Name">
                            <label for="gpa" class="mt-5">Your GPA</label>
                            <input type="text"value="<?= $appliInfo['gpa'] ?>"  class="form-control" name="gpa" placeholder="Endter GPA Name">
                            <label for="address" class="mt-5">Your Courrent Address</label>
                            <input type="text"value="<?= $appliInfo['address'] ?>"  class="form-control" name="address" placeholder="Endter Address Name">

                            <div class="text-center mt-5">
                            <button class="btn btn-primary w-100" class="mt-5">Update Now</button>
                            <button disabled class="btn btn-danger w-100" class="mt-5">Cancle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>