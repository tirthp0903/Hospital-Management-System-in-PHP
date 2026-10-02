<?php

include 'db_hospital.php';

$objview = new Database();
$r = $objview->viewbill();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View Bills</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Bill Management</h2>

    <h4 class="mb-3">List Of Bills</h4>

    <?php

    if($r->num_rows > 0)
    {

        echo '<table class="table table-bordered table-striped text-center shadow">';


        echo '<tr class="table-light">

                <td colspan="8">

                    <form action="searchbill.php" method="post" class="d-flex justify-content-center">

                        <select name="payment_status"
                                class="form-select me-2"
                                style="max-width:250px;">

                            <option value="">select Status</option>
                            <option value="Paid">Paid</option>
                            <option value="Pending">Pending</option>

                        </select>

                        <input type="submit"
                               value="Search"
                               class="btn btn-primary">

                    </form>

                </td>

              </tr>';


        echo '<tr class="table-dark">

                <th>Bill ID</th>
                <th>Patient ID</th>
                <th>Patient Name</th>
                <th>Consultation Fee</th>
                <th>Medicine Charge</th>
                <th>Total Amount</th>
                <th>Payment Status</th>
                <th>Action</th>

              </tr>';



        while($data = mysqli_fetch_array($r))
        {

            echo '<tr>';
            echo '<td>'.$data['bill_id'].'</td>';
            echo '<td>'.$data['patient_id'].'</td>';
            echo '<td>'.$data['p_name'].'</td>';
            echo '<td>₹ '.$data['consultation_fee'].'</td>';
            echo '<td>₹ '.$data['medicine_charge'].'</td>';
            echo '<td>
                    <strong>₹ '.$data['total_amount'].'</strong>
                  </td>';

            echo '<td>'.$data['payment_status'].'</td>';

            echo '<td>
                    <a href="deletebill.php?bid='.$data['bill_id'].'"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm(\'Are you sure you want to delete this bill?\');">
                       Delete
                    </a>
                  </td>';

            echo '</tr>';

        }

        echo '</table>';

    }

    else
    {

        echo '<div class="alert alert-warning text-center">
                No Bill Records Found !!
              </div>';

    }

    ?>

</div>

</body>

</html>