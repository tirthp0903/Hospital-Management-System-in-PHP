<?php
session_start();
include 'db_hospital.php';

$obj = new Database();

// Data from login form
$u = $_POST["username"];
$p = $_POST["password"];

$r = $obj->login($u,$p);

if($r->num_rows > 0)
{
    $data = mysqli_fetch_row($r);
    $_SESSION['adminname'] = $data[0];
    header('Location:dashboard.php');
}
else
{
    header('Location:loginadmin.php?msg=login unsuccess !! ');
}

?>