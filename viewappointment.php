<?php

// if(isset($_GET['msg']))
// {
//     echo $_GET['msg'];
// }

// include 'db_hospital.php';

// echo "List Of Appointments : ";

// $objview = new Database();

// $r = $objview->viewappointment();

// if($r->num_rows > 0)
// {
//     echo "<table border='1' cellpadding='10' cellspacing='0'>";

//     echo "<tr>
//             <th>Appointment ID</th>
//             <th>Patient ID</th>
//             <th>Patient Name</th>
//             <th>Doctor ID</th>
//             <th>Doctor Name</th>
//             <th>Appointment Date</th>
//             <th></th>
//             <th></th>
//           </tr>";

//     while($data = mysqli_fetch_array($r))
//     {
//         echo "<tr>";
        
//         echo "<td>" . $data['appointment_id'] . "</td>";
//         echo "<td>" . $data['patient_id'] . "</td>";
//         echo "<td>" . $data['p_name'] . "</td>";
//         echo "<td>" . $data['doctor_id'] . "</td>";
//         echo "<td>" . $data['d_name'] . "</td>";
//         echo "<td>" . $data['appointment_date'] . "</td>";
//         echo "<td><a href='deleteappointment.php?aid=" . $data['appointment_id'] . "'>Delete</a></td>";
//         echo "<td><a href='editappointment.php?aid=" . $data['appointment_id'] . "'>Edit</a></td>";
//         echo "</tr>";
//     }

//     echo "</table>";
// }

?>


<?php
include 'db_hospital.php';

if(isset($_GET['msg'])) {
    echo '<div class="alert alert-info text-center">'.$_GET['msg'].'</div>';
}

$objview = new Database();
$r = $objview->viewappointment();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
</head>  

<body class="bg-light">  

<div class="container mt-5">  

    <h2 class="text-center mb-4">Appointment Management</h2>  

    <h4 class="mb-3">List Of Appointments</h4>  

    <?php  
    if($r->num_rows > 0) {  
        echo '<table class="table table-bordered table-striped text-center shadow">';  

        echo '<tr class="table-dark">  
                <th>Appointment ID</th>  
                <th>Patient ID</th>  
                <th>Patient Name</th>  
                <th>Doctor ID</th>  
                <th>Doctor Name</th>  
                <th>Appointment Date</th>  
                <th>Action</th>  
              </tr>';  

        while($data = mysqli_fetch_array($r)) {  
            echo '<tr>';  
            echo '<td>'.$data['appointment_id'].'</td>';  
            echo '<td>'.$data['patient_id'].'</td>';  
            echo '<td>'.$data['p_name'].'</td>';  
            echo '<td>'.$data['doctor_id'].'</td>';  
            echo '<td>'.$data['d_name'].'</td>';  
            echo '<td>'.$data['appointment_date'].'</td>';  
            echo '<td>  
                    <a href="editappointment.php?aid='.$data['appointment_id'].'" class="btn btn-warning btn-sm">Edit</a>  
                    <a href="deleteappointment.php?aid='.$data['appointment_id'].'" class="btn btn-danger btn-sm">Delete</a>  
                  </td>';  
            echo '</tr>';  
        }  

        echo '</table>';  
    } else {  
        echo '<div class="alert alert-warning text-center">  
                No Appointment Records Found !!  
              </div>';  
    }  
    ?>  

</div>  

</body>  
</html>
