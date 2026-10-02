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

    <title>Doctor Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Doctor Management</h2>

    <form action="doctorcode.php" method="post">

        <table class="table table-bordered shadow-lg">

            <tr class="table-primary">
                <th colspan="2" class="text-center"><h3>Add Doctor Details</h3></th>
            </tr>

            <tr>
                <th class="w-25">Doctor Name :</th>
                <td><input type="text" name="doctor_name" class="form-control" placeholder="Enter doctor name" required></td>
            </tr>

            <tr>
                <th>Specialization :</th>
                <td>
                    <select name="specialization" class="form-select" required>
                        <option value="">Select Specialization</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Dentist">Dentist</option>
                        <option value="gynecologist">Gynecologist</option>
                        <option value="Dermatologist">Dermatologist</option>
                        <option value="Neurologist">Neurologist</option>
                        <option value="General Physician">General Physician</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Mobile :</th>
                <td><input type="tel" name="mobile" class="form-control" placeholder="Enter mobile number" maxlength="10" required></td>
            </tr>

            <tr>
                <th>Fees :</th>
                <td><input type="number" name="fees" class="form-control" placeholder="Enter consultation fees" required></td>
            </tr>

            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" name="add_doctor" class="btn btn-success px-5">Add Doctor</button>
                    <button type="reset" class="btn btn-secondary px-5 ms-2">Reset</button>
                </td>
            </tr>

        </table>

    </form>

</div>

<div class="text-center p-5">
    <button class="btn btn-secondary px-5 ms-2"><a href="viewdoctor.php" class="text-white">View Doctors</a></button>
</div>

</body>
</html>