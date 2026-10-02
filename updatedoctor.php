<?php

include 'db_hospital.php';

$did = $_POST['doctor_id'];
$n = $_POST['doctor_name'];
$s = $_POST['specialization'];
$m = $_POST['mobile'];
$f = $_POST['fees'];

$objup = new Database();
$r = $objup->updatedoctor($did, $n, $s, $m, $f);

if($r)
{
    header('Location:viewdoctor.php?msg = Updated Successfully !! ');
}
else
{
    header('Location:viewdoctor.php?msg = Not Updated !! ');
}


?>