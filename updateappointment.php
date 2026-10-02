<?php

include 'db_hospital.php';

$aid = $_POST['appointment_id'];
$pid = $_POST['patient_id'];
$did = $_POST['doctor_id'];
$d = $_POST['appointment_date'];

$objup = new Database();

$r = $objup->updateappointment($aid, $pid, $did, $d);

if($r)
{
    header('Location:viewappointment.php?msg=Updated Successfully !!');
}
else
{
    header('Location:viewappointment.php?msg=Not Updated !!');
}

?>