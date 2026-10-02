<?php

include 'db_hospital.php';

$pid = $_POST['patient_id'];
$n = $_POST['patient_name'];
$a = $_POST['age'];
$g = $_POST['gender'];
$p = $_POST['mobile'];

$objup = new Database();
$r = $objup->updatepatient($pid, $n, $a, $g, $p);

if($r)
{
    header('Location:viewpatient.php?msg = Updated Successfully !! ');
}
else
{
    header('Location:viewpatient.php?msg = Not Updated !! ');
}


?>