<?php
include 'db_hospital.php';

$objpatient = new Database();

$n = $_POST["patient_name"];
$a = $_POST["age"];
$g = $_POST["gender"];
$m = $_POST["mobile"];

if(!preg_match("/^[a-zA-Z ]+$/", $n))
{
    header('Location:add_patient.php?msg=Please enter only alphabetical character in patient name !!');
}
else
{
    $r = $objpatient->addpatient($n,$a,$g,$m);

    if($r)
    {
        header('Location:viewpatient.php');
    }
    else
    {
        header('Location:add_patient.php?msg=record not inserted !! 😖');
    }
}


?>