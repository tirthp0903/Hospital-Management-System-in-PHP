<?php
include 'db_hospital.php';

$objpatient = new Database();

$n = $_POST["doctor_name"];
$s = $_POST["specialization"];
$m = $_POST["mobile"];
$f = $_POST["fees"];

if(!preg_match("/^[a-zA-Z ]+$/", $n))
{
    header('Location:add_doctor.php?msg=Please enter only alphabetical character in doctor name !!');
}
else
{
    $r = $objpatient->adddoctor($n,$s,$m,$f);

    if($r)
    {
        header('Location:viewdoctor.php');
    }
    else
    {
        header('Location:add_doctor.php?msg=record not inserted !! 😖');
    }
}

?>