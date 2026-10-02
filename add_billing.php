<?php

include 'db_hospital.php';

if(isset($_GET["msg"]))
{
    echo '<div class="alert alert-danger text-center">'.$_GET["msg"].'</div>';
}

$objpatient = new Database();

$r = $objpatient->viewpatient();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Billing Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Billing Management</h2>

    <form action="billingcode.php" method="post">

        <table class="table table-bordered shadow-lg">

            <tr class="table-primary">
                <th colspan="2" class="text-center">
                    <h3>Add Bill Details</h3>
                </th>
            </tr>

            <tr>
                <th class="w-25">Patient :</th>

                <td>
                    <select name="patient_id" class="form-select" required>

                        <option value="">Select Patient</option>

                        <?php

                        if($r->num_rows > 0)
                        {
                            while($data = mysqli_fetch_array($r))
                            {
                                echo "<option value='".$data['patient_id']."'>"
                                    .$data['patient_id']." - ".$data['p_name'].
                                    "</option>";
                            }
                        }

                        ?>

                    </select>
                </td>
            </tr>

            <tr>
                <th>Consultation Fee :</th>
                <td>
                    <input type="number" name="consultation_fee" class="form-control" placeholder="Enter consultation fee" required>
                </td>
            </tr>

            <tr>
                <th>Medicine Charge :</th>
                <td>
                    <input type="number" name="medicine_charge" class="form-control" placeholder="Enter medicine charge" required>
                </td>
            </tr>


            <tr>
                <th>Payment Status :</th>

                <td>
                    <select name="payment_status" class="form-select" required>
                        <option value="">Select Payment Status</option>
                        <option value="Paid">Paid</option>
                        <option value="Pending">Pending</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Bill Date :</th>
                <td><input type="date" name="bill_date"  class="form-control" required></td>
            </tr>

            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" name="add_bill" class="btn btn-success px-5">Add Bill</button>
                    <button type="reset" class="btn btn-secondary px-5 ms-2">Reset</button>
                </td>
            </tr>

        </table>

    </form>

</div>

<div class="text-center p-5">
    <button class="btn btn-secondary px-5 ms-2"><a href="viewbilling.php" class="text-white">View Bills</a></button>
</div>

</body>
</html>