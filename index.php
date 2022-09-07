<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <?php
    session_start();
    $applylist = $_SESSION['applylist'] ?? [];
    //

    if (isset($_SESSION['massage'])) {
    ?>
        <span class="alert alert-success" role="alert"><?= $_SESSION['massage']; ?></span>
    <?php

    }
    unset($_SESSION['massage']);
    ?>

    <a href="create.php"><button class="btn btn-warning text-light mx-5 my-5">Create a Student</button></a>
    <?php
    // session_start();
    // $applylist = $_SESSION['applylist'] ?? [];
    // //

    // if (isset($_SESSION['massage'])) {
    //     echo $_SESSION['massage'];

    //     unset($_SESSION['massage']);
    // }
    ?>

<div class="container">
<div class="card p-1">
    <div class="card-body text-center">
    <table class="table table-hover">
        <tbody>
            <tr>
                <td>#</td>
                <td>Id</td>
                <td>Name</td>
                <td>Father Name</td>
                <td>Mother Name</td>
                <td>Collage</td>
                <td>Depertment</td>
                <td>GPA</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
            <?php
            //if (isset($_SESSION['products'])) {
            //$products = $_SESSION['products'];
            $i = 1;
            foreach ($applylist as $student) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $student['id'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['father_name'] ?></td>
                    <td><?= $student['mother_name'] ?></td>
                    <td><?= $student['collage'] ?></td>
                    <td><?= $student['depertment'] ?></td>
                    <td><?= $student['gpa'] ?></td>
                    <td><?= $student['address'] ?></td>

                    <td>
                        <a href="show.php?id=<?= $student['id'] ?>"><button class="btn btn-info">Show</button></a>
                        <a href="edit.php?id=<?= $student['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                        <a href="delete.php?id=<?= $student['id'] ?>" onclick="return confirm('Are You Sure want to be delete!!!')"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            <?php

            }
            //}
            ?>
        </tbody>

    </table>
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>