<?php

include 'db_hospital.php';

$pn = $_POST['searchpatient'];

$objview = new Database();
$r = $objview->searchpatient($pn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Patient Management</h2>

    <h4 class="mb-3">List Of Patients</h4>

    <?php

    if($r->num_rows > 0)
    {

        echo '<table class="table table-bordered table-striped text-center shadow">';

        echo '<tr class="table-dark">

                <th>Patient ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Mobile</th>
                <th>Action</th>

              </tr>';


        while($data = mysqli_fetch_array($r))
        {

            echo '<tr>';

            echo '<td>'.$data['patient_id'].'</td>';
            echo '<td>'.$data['p_name'].'</td>';
            echo '<td>'.$data['p_age'].'</td>';
            echo '<td>'.$data['gender'].'</td>';
            echo '<td>'.$data['mobile'].'</td>';

            echo '<td>
                    <a href="editpatient.php?pid='.$data['patient_id'].'" class="btn btn-warning btn-sm"> Edit</a>
                  </td>';
            echo '</tr>';

        }

        echo '</table>';

    }

    else
    {
        echo '<div class="alert alert-warning text-center">
                No Patient Records Found !!
              </div>';
    }

    ?>

</div>
</body>
</html>