<?php
include "Employee.php";
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
        <div class="card w-50 mx-auto mb-3">
            <div class="card-header bg bg-success">
                <p class="text-white display-6 fs-3"> Net Income Calculator</p>
            </div>
            <div class="card-body">
                <form action="" method="post" class="">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" class="form-control mb-3">

                    <div class="mt-3">
                        <label for="position">Position</label>
                        <div>
                            <input type="radio" name="position" value="staff" id=""> Staff
                            <input type="radio" name="position" value="admin" id=""> Admin
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="civil_status">Civil Status</label>
                        <div>
                            <input type="radio" name="civil_status" value="single" id=""> Single
                            <input type="radio" name="civil_status" value="married" id=""> Married
                        </div>
                    </div>
                    <br>
                    <label for="emp_status">Employment Status</label>
                    <select name="emp_status" id="" class="form-control">
                        <option selected>Choose Status</option>
                        <option value="Contractual">Contractual</option>
                        <option value="probationary">Probationary</option>
                        <option value="regular">Regular</option>
                    </select>
                    <br>
                    <label for="hrs_worked">No,of Hours Worked</label>
                    <input type="number" name="hrs_worked" id="" class="form-control">
                    <button type="submit" name="btn-submit" class="btn btn-success w-100 mt-3">Compute</button>
                </form>
            </div>
        </div>
        <?php
        if (isset($_POST['btn-submit'])) {
            // $name = $_POST['name'];
            // $position = $_POST['position'];
            // $civil_status = $_POST['civil_status'];
            // $emp_status = $_POST['emp_status'];
            // $hrs_worked = $_POST['hrs_worked'];

            $employee = new Employee($_POST['name'], $_POST['civil_status'], $_POST['position'], $_POST['emp_status'], $_POST['hrs_worked']);

        ?>
            <div class="card w-50 mx-auto">
                <div class="card-body">
                    <div>Name: <span class="fw-bold"><?= $employee->getName() ?></span></div>
                    <div>Regular pay:<?= $employee->calRegulerpay() ?></div>
                    <div>Overtime pay:<?= $employee->calovertimePay() ?></div>
                    <div class="text-danger">Healthcare:<?= $employee->sethealthCare('civil_status') ?></div>
                    <div class="text-danger">Tax:<?= $employee->calTax() ?></div>
                    <div class="fs-5 fw-bold">Net Income:<?= round($employee->netIncome()) ?></div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>