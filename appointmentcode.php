<?php

include 'db_hospital.php';

$objappointment = new Database();

// Data from appointment form
$p = $_POST["patient_id"];
$d = $_POST["doctor_id"];
$date = $_POST["appointment_date"];

$r = $objappointment->addappointment($p, $d, $date);

if($r)
{
    header('Location:viewappointment.php');
}
else
{
    header('Location:add_appointment.php?msg=record not inserted !! 😖');
}

?>