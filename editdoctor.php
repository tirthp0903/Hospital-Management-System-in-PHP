<?php

include 'db_hospital.php';

if(isset($_GET['did']))
{
    $did = $_GET['did'];
}

$objfetch = new Database();
$r = $objfetch->fetchdoctor($did);

if($r->num_rows > 0)
{
    $data =mysqli_fetch_array($r);
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

    <h2 class="text-center mb-4">Doctor Management</h2>

    <form action="updatedoctor.php" method="post">

        <table class="table table-bordered shadow-lg">

            <tr class="table-primary">
                <th colspan="2" class="text-center"><h3>Update Doctor Details</h3></th>
            </tr>

            <tr>
                <th class="w-25">Doctor id :</th>
                <td><input type="text" name="doctor_id" class="form-control" value="<?php echo $data['doctor_id']; ?> " required></td>
            </tr>

            <tr>
                <th class="w-25">Doctor Name :</th>
                <td><input type="text" name="doctor_name" class="form-control" value="<?php echo $data['d_name']; ?> " required></td>
            </tr>

            <tr>
                <th>Specialization :</th>
                <td>
                    <select name="specialization" class="form-select" required>
                        <option value="Cardiologist" <?php if($data['specialization'] == "Cardiologist") echo "selected"; ?>>Cardiologist</option>
                        <option value="Dentist" <?php if($data['specialization'] == "Dentist") echo "selected"; ?>>Dentist</option>
                        <option value="gynecologist" <?php if($data['specialization'] == "gynecologist") echo "selected"; ?>>Gynecologist</option>
                        <option value="Dermatologist" <?php if($data['specialization'] == "Dermatologist") echo "selected"; ?>>Dermatologist</option>
                        <option value="Neurologist" <?php if($data['specialization'] == "Neurologist") echo "selected"; ?>>Neurologist</option>
                        <option value="General Physician" <?php if($data['specialization'] == "General Physician") echo "selected"; ?>>General Physician</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Mobile :</th>
                <td><input type="tel" name="mobile" class="form-control" value="<?php echo $data['mobile']; ?> " maxlength="10" required></td>
            </tr>

            <!-- <tr>
                <th>Fees :</th>
                <td><input type="number" name="fees" class="form-control" value="<?php echo $data['fees']; ?> " required></td>
            </tr> -->

            <!-- Uper vala fees ma ?> pachi ek space che etle fees display thase nai kem ke type="number" ma space important che -->
            <tr>
                <th>Fees :</th>
                <td><input type="number" name="fees" class="form-control" value="<?php echo $data['fees']; ?>" required></td>
            </tr>

            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" name="updatedoctor.php" class="btn btn-success px-5">Update doctor</button>
                </td>
            </tr>

        </table>

    </form>

</div>
</body>
</html>


<?php
}

?>