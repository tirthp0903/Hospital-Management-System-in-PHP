<?php
include 'db_hospital.php';

$dn = $_POST['searchdoctor'];

$objview = new Database();
$r = $objview->searchdoctor($dn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Doctors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
</head>  

<body class="bg-light">  

<div class="container mt-5">  

    <h2 class="text-center mb-4">Doctor Management</h2>  

    <!-- <h4 class="mb-3">List Of Doctors</h4>   -->

    <?php  
    if($r->num_rows > 0)  
    {  
        echo '<table class="table table-bordered table-striped text-center shadow">';  

        echo '<tr class="table-dark">  
                <th>Doctor ID</th>  
                <th>Name</th>  
                <th>Specialization</th>  
                <th>Mobile</th>  
                <th>Fees</th>  
                <th>Action</th>  
              </tr>';  

        while($data = mysqli_fetch_array($r))  
        {  
            echo '<tr>';  
            echo '<td>'.$data['doctor_id'].'</td>';  
            echo '<td>'.$data['d_name'].'</td>';  
            echo '<td>'.$data['specialization'].'</td>';  
            echo '<td>'.$data['mobile'].'</td>';  
            echo '<td>₹ '.$data['fees'].'</td>';  
            echo '<td>  
                    <a href="editdoctor.php?did='.$data['doctor_id'].'" class="btn btn-warning btn-sm">Edit</a>  
                  </td>';  
            echo '</tr>';  
        }  

        echo '</table>';  
    }  
    else  
    {  
        echo '<div class="alert alert-warning text-center">  
                No Doctor Records Found !!  
              </div>';  
    }  
    ?>