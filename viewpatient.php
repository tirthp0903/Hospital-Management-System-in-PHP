






<?php

include 'db_hospital.php';

$objview = new Database();
$r = $objview->viewpatient();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View Patients</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Patient Management</h2>

    <h4 class="mb-3">List Of Patients</h4>

    <?php

    if($r->num_rows > 0)
    {

        echo '<table class="table table-bordered table-striped text-center shadow">';


        // Search Row
        echo '<tr class="table-light">

                <td colspan="6">

                    <form action="searchpatient.php"
                          method="post"
                          class="d-flex justify-content-center">

                        <input type="text"
                               name="searchpatient"
                               class="form-control me-2"
                               placeholder="Search Patient..."
                               style="max-width:400px;"
                               required>

                        <input type="submit"
                               value="Search"
                               class="btn btn-primary">

                    </form>

                </td>

              </tr>';


        // Heading Row
        echo '<tr class="table-dark">

                <th>Patient ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Mobile</th>
                <th>Action</th>

              </tr>';


        // Patient Records
        while($data = mysqli_fetch_array($r))
        {

            echo '<tr>';

            echo '<td>'.$data['patient_id'].'</td>';

            echo '<td>'.$data['p_name'].'</td>';

            echo '<td>'.$data['p_age'].'</td>';

            echo '<td>'.$data['gender'].'</td>';

            echo '<td>'.$data['mobile'].'</td>';

            echo '<td>
                    <a href="editpatient.php?pid='.$data['patient_id'].'"
                       class="btn btn-warning btn-sm">
                       Edit
                    </a>
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