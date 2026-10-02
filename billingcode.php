<?php

include 'db_hospital.php';

$objbill = new Database();

$p = $_POST["patient_id"];
$c = $_POST["consultation_fee"];
$m = $_POST["medicine_charge"];
$s = $_POST["payment_status"];
$d = $_POST["bill_date"];

$t = $c + $m;

$r = $objbill->addbill($p, $c, $m, $t, $s, $d);

if($r)
{
    header('Location:viewbilling.php');
}
else
{
    header('Location:add_billing.php?msg=record not inserted !! 😖');
}

?>