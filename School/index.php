<?php
include "School.php";
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
        <div class="card w-50 mx-auto border-0">
            <div class="card-body">
                <p class="text-center display-6 ">REGISTRATION</p>
                <form action="" method="post" class="">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" placeholder="Enter your name" class="form-control mb-3">

                    <select name="yearlevel" id="" class="form-control">
                        <option selected>Choose your year level</option>
                        <option value="1">year 1</option>
                        <option value="2">year 2</option>
                        <option value="3">year 3</option>
                        <option value="4">year 4</option>
                    </select>

                    <label for="unit">Total Units</label>
                    <input type="number" name="unit" id="" max="23" placeholder="Maximum of 23" class="form-control">
                    <div class="text-center mt-3">
                        <input type="radio" name="choice" value="with" id="">With lab
                        <label for=""></label>
                        <input type="radio" name="choice" value="without" id="">Without lab
                    </div>
                    <button type="submit" name="btn-submit" class="btn btn-secondary w-100 mt-3">submit</button>
                </form>
                <?php
                if(isset($_POST['btn-submit'])){
                    $name=$_POST['name'];
                    $yearlevel= $_POST['yearlevel'];
                    $unit=$_POST['unit'];
                    $choice=$_POST['choice'];

                    $school = new School;
                    $school->setDetails($name,$yearlevel,$unit,$choice);
                    ?>
                    <div>Student name: <span class='fw-bold'><?= $school->getName($name)?></span> </div>
                    <div>Year level: <span class='fw-bold'> <?= $school->getYearlevel($yearlevel)?></span></div>
                    <div>No. of units: <span class='fw-bold'><?= $school->getUnit($unit)?></span></div>
                    <div>Total Price:<span class='fw-bold'><?=$school->calulateFee($yearlevel)?></span></div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>