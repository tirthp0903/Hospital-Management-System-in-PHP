<?php

if(isset($_GET["msg"]))
{
    echo '<div class="alert alert-danger text-center">'.$_GET["msg"].'</div>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Patient Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Patient Management</h2>

    <form action="patientcode.php" method="post">

        <table class="table table-bordered shadow-lg">

            <tr class="table-primary">
                <th colspan="2" class="text-center"><h3>Add Patient Details</h3></th>
            </tr>

            <tr>
                <th class="w-25">Patient Name :</th>
                <td><input type="text" name="patient_name" class="form-control" placeholder="Enter patient name" required></td>
            </tr>

            <tr>
                <th>Age :</th>
                <td><input type="number" name="age" class="form-control" placeholder="Enter age" required></td>
            </tr>

            <tr>
                <th>Gender :</th>
                <td>
                    <input type="radio" name="gender" value="Male"> Male 
                    <input type="radio" name="gender" value="Female"> Female
                </td>
            </tr>

            <tr>
                <th>Mobile :</th>
                <td><input type="tel" name="mobile" class="form-control" placeholder="Enter mobile number" maxlength="10" required></td>
            </tr>

            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" name="add_patient" class="btn btn-success px-5">Add Patient</button>
                    <button type="reset" class="btn btn-secondary px-5 ms-2">Reset</button>
                </td>
            </tr>

        </table>

    </form>

</div>

<div class="text-center p-5">
    <button class="btn btn-secondary px-5 ms-2"><a href="viewpatient.php" class="text-white">View Patients</a></button>
</div>

</body>
</html>