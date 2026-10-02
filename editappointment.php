<?php

include 'db_hospital.php';

if(isset($_GET['aid']))
{
    $aid = $_GET['aid'];
}

$obj = new Database();

$r = $obj->fetchappointment($aid);

$patients = $obj->viewpatient();
$doctors = $obj->viewdoctor();

if($r->num_rows > 0)
{
    $data = mysqli_fetch_array($r);

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

    <form action="updateappointment.php" method="post">

        <table class="table table-bordered shadow-lg">

            <tr class="table-primary">
                <th colspan="2" class="text-center">
                    <h3>Update Appointment Details</h3>
                </th>
            </tr>


            <tr>
                <th class="w-25">Appointment ID :</th>

                <td>
                    <input type="text" name="appointment_id" class="form-control" value="<?php echo $data['appointment_id']; ?>" readonly>
                </td>
            </tr>


            <tr>

                <th>Patient :</th>

                <td>

                    <select name="patient_id" class="form-select" required>

                        <option value="">Select Patient</option>

                        <?php

                        if($patients->num_rows > 0)
                        {
                            while($pdata = mysqli_fetch_array($patients))
                            {
                                ?>

                                <option value="<?php echo $pdata['patient_id']; ?>"

                                    <?php
                                    if($pdata['patient_id'] == $data['patient_id'])
                                    {
                                        echo "selected";
                                    }
                                    ?>
                                >

                                    <?php echo $pdata['p_name']; ?>

                                </option>

                                <?php
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
                            while($ddata = mysqli_fetch_array($doctors))
                            {
                                ?>

                                <option value="<?php echo $ddata['doctor_id']; ?>"

                                    <?php
                                    if($ddata['doctor_id'] == $data['doctor_id'])
                                    {
                                        echo "selected";
                                    }
                                    ?>

                                >

                                    <?php echo $ddata['d_name']; ?>

                                </option>

                                <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>


            <tr>
                <th>Appointment Date :</th>

                <td>
                    <input type="date" name="appointment_date" class="form-control" value="<?php echo $data['appointment_date']; ?>" required>
                </td>
            </tr>


            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" name="updateappointment" class="btn btn-success px-5">Update Appointment</button>
                </td>
            </tr>

        </table>
    </form>

</div>
</body>
</html>

<?php

}
else
{
    echo "Appointment Not Found !!";
}

?>