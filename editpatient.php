<?php

include 'db_hospital.php';

if(isset($_GET['pid']))
{
    $pid = $_GET['pid'];
}

$objfetch = new Database();
$r = $objfetch->fetchpatient($pid);

if($r->num_rows > 0)
{
    $data = mysqli_fetch_array($r);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">

    <h2 class="text-center mb-4">Patient Management</h2>

    <form action="updatepatient.php" method="post">

        <table class="table table-bordered shadow-lg">

            <tr class="table-primary">
                <th colspan="2" class="text-center"><h3>Update Patient Details</h3></th>
            </tr>

            <tr>
                <th class="w-25">Patient id :</th>
                <td><input type="text" name="patient_id" class="form-control" value="<?php echo $data['patient_id']; ?>"  readonly></td>
            </tr>

            <tr>
                <th class="w-25">Patient Name :</th>
                <td><input type="text" name="patient_name" class="form-control" value="<?php echo $data['p_name']; ?>" ></td>
            </tr>

            <tr>
                <th>Age :</th>
                <td><input type="number" name="age" class="form-control" value="<?php echo $data['p_age']; ?>" required></td>
            </tr>

            <tr>
                <th>Gender :</th>
                <td>
                    <input type="radio" name="gender" value="Male"
                    <?php if($data['gender'] == "Male") echo "checked"; ?>> Male  

                    <input type="radio" name="gender" value="Female"
                    <?php if($data['gender'] == "Female") echo "checked"; ?>> Female
                </td>
            </tr>

            <tr>
                <th>Mobile :</th>
                <td><input type="tel" name="mobile" class="form-control" value="<?php echo $data['mobile']; ?>" maxlength="10" required></td>
            </tr>

            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" name="updatepatient" class="btn btn-success px-5">Update patient</button>
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
    echo "Patient Not Update !! ";
}
?>
