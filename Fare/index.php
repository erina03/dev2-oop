<?php
include "Fare.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <div class="card w-50 mx-auto">
            <div class="card-header text-center">FARE</div>
            <div class="card-body">
                <form action="" method="post" class="text-center">
                    <input type="number" name="age" id="" placeholder="Age" class="form-control mb-3">
                    <input type="number" name="distance" id="" placeholder="Distance(km)"  class="form-control">

                    <button type="submit" name="btn-compute" class="btn btn-outline-primary mt-3">compute</button>
                </form>
                <?php
                if(isset($_POST['btn-compute'])){
                    $age = $_POST['age'];
                    $distance = $_POST['distance'];

                    $fare = new Fare;

                    $fare ->setDetails($age,$distance);
                    echo $fare->getDetails();

                   $fare ->callCalulate($age,$distance);
                   ?>
                   <div class="text-danger">Fare:
                    <?= $fare->callCalulate(); ?>
                    yen
                   </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>