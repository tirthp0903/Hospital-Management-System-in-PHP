<?php

include 'db_hospital.php';

if(isset($_GET["msg"]))
{
    echo '<div class="alert alert-danger text-center">'.$_GET["msg"].'</div>';
}

$obj = new Database();

$patients = $obj->viewpatient();
$doctors = $obj->viewdoctor();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Appointment Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Appointment Management</h2>

    <form action="appointmentcode.php" method="post">

        <table class="table table-bordered shadow-lg">

            <tr class="table-primary">
                <th colspan="2" class="text-center"><h3>Add Appointment Details</h3></th>
            </tr>

            <tr>
                <th class="w-25">Patient :</th>
                <td>

                    <select name="patient_id" class="form-select" required>

                        <option value="">Select Patient</option>

                        <?php

                        if($patients->num_rows > 0)
                        {
                            while($data = mysqli_fetch_array($patients))
                            {
                                echo "<option value='".$data['patient_id']."'>"
                                    .$data['p_name'].
                                    "</option>";
                            }
                        }

                        ?>
                    </select>
                </td>
            </tr>


            <tr>
                <th>Doctor :</th>
                <td>

                    <select name="doctor_id" class="form-select" required>

                        <option value="">Select Doctor</option>

                        <?php

                        if($doctors->num_rows > 0)
                        {
                            while($data = mysqli_fetch_array($doctors))
                            {
                                echo "<option value='".$data['doctor_id']."'>"
                                    .$data['d_name'].
                                    "</option>";
                            }
                        }

                        ?>
                    </select>
                </td>
            </tr>


            <tr>
                <th>Appointment Date :</th>
                <td><input type="date" name="appointment_date" class="form-control" required></td>
            </tr>


            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" name="add_appointment" class="btn btn-success px-5">Add Appointment</button>
                    <button type="reset" class="btn btn-secondary px-5 ms-2">Reset</button>
                </td>
            </tr>

        </table>

    </form>

</div>
 
<div class="text-center p-5">
    <button class="btn btn-secondary px-5 ms-2"><a href="viewappointment.php" class="text-white">View appointments</a></button>
</div>

</body>

</html>