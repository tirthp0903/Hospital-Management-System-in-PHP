<?php

include 'db_hospital.php';

if(isset($_GET['bid']))
{
    $bid = $_GET['bid'];
}

$objdelete = new Database();

$r = $objdelete->deletebill($bid);

if($r)
{
    header('Location:viewbilling.php');
}
else
{
    header('Location:viewbilling.php?msg=record not Deleted !!');
}

?>