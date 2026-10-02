<?php

include 'db_hospital.php';

if(isset($_GET['aid']))
{
    $aid = $_GET['aid'];
}

$objdelete = new Database();

$r = $objdelete->deleteappointment($aid);

if($r)
{
    header('Location:viewappointment.php');
}
else
{
    header('Location:viewappointment.php?msg=record not Deleted !!');
}

?>