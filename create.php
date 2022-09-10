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
    session_start();

    if (isset($_SESSION['errors'])) {
        //print_r($_SESSION['errors']);
        echo '<ul>';
        foreach ($_SESSION['errors'] as $key => $error) {
            //echo '<li>The ' . $key . ' Field ' . $error . '</li>';
        }
        //echo '</ul>';
    }
    ?>
    <div class="container p-5">
        <h2 class="text-center text-info">Online Form Apply</h2>
        <form action="./store.php" method="post">
            <div class="col-md-12 d-flex">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <label for="id" class="mt-5">Id <span class="text-danger h4">*</span></label>
                            <input type="number" name="id" class="form-control" placeholder="Endter Product Id" value="<?= $_SESSION['old']['id'] ?? null ?>">
                            <small class="text-danger"><?= $_SESSION['errors']['id'] ?? null ?> </small><br>

                            <label for="name" class="mt-5">Your Name<span class="text-danger h4">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Endter Product Name" value="<?= $_SESSION['old']['name'] ?? null ?>">
                            <small class="text-danger"><?= $_SESSION['errors']['name'] ?? null ?> </small><br>

                            <label for="father-name" class="mt-5">Father Name <span class="text-danger h4">*</span></label>
                            <input type="text" class="form-control" name="father name" placeholder="Endter Father Name" value="<?= $_SESSION['old']['father_name'] ?? null ?>">
                            <small class="text-danger"><?= $_SESSION['errors']['father_name'] ?? null ?> </small><br>

                            <label for="mother name" class="mt-5">Mother Name <span class="text-danger h4">*</span></label>
                            <input type="text" class="form-control" name="mother name" placeholder="Endter Mother Name" value="<?= $_SESSION['old']['mother_name'] ?? null ?>">
                            <small class="text-danger"><?= $_SESSION['errors']['mother_name'] ?? null ?> </small><br>

                            <label for="collage" class="mt-5">Collage <span class="text-danger h4">*</span></label>
                            <input type="text" class="form-control" name="collage" placeholder="Endter collage Name" value="<?= $_SESSION['old']['collage'] ?? null ?>">
                            <small class="text-danger"><?= $_SESSION['errors']['collage'] ?? null ?> </small><br>

                            <label for="depertment" class="mt-5">Depertment <span class="text-danger h4">*</span></label>
                            <input type="text" class="form-control" name="depertment" placeholder="Endter depertment Name" value="<?= $_SESSION['old']['depertment'] ?? null ?>">
                            <small class="text-danger"><?= $_SESSION['errors']['depertment'] ?? null ?> </small><br>

                            <label for="gpa" class="mt-5">Your GPA <span class="text-danger h4">*</span></label>
                            <input type="text" class="form-control" name="gpa" placeholder="Endter GPA Name" value="<?= $_SESSION['old']['gpa'] ?? null ?>">
                            <small class="text-danger"><?= $_SESSION['errors']['gpa'] ?? null ?> </small><br>

                            <label for="address" class="mt-5">Your Courrent Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Endter Address Name">

                            <div class="text-center mt-5">
                                <button class="btn btn-primary w-100" class="mt-5">Apply Now</button>
                                <button disabled class="btn btn-danger w-100" class="mt-5">Cancle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php
    if (isset($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    }
    ?>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>