 <?php

session_start();
$adnm = $_SESSION['adminname'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">

        <div class="container">

            <span class="navbar-brand mb-0 h1">
                Hospital Management System
            </span>

            <span class="text-white">
                Welcome, <?php echo $adnm; ?>
            </span>

        </div>
    </nav>

    <h2 class="text-center p-3">Admin Dashboard</h2>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card h-100 p-3 shadow">
                    <img src="patient.jpg" width="90" height="90" class="mx-auto" alt="">
                    <div class="card-body text-center">
                        <h5>Patient Management</h5>
                        <p>Manage patients</p>
                        <a href="add_patient.php" class="btn btn-primary">Manage Patient</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 p-3 shadow">
                    <img src="doctor.webp" width="90" height="90" class="mx-auto" alt="">
                    <div class="card-body text-center">
                        <h5>Doctor Management</h5>
                        <p>Manage doctors</p>
                        <a href="add_doctor.php" class="btn btn-success">Manage Doctor</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 p-3 shadow">
                    <img src="appointment1.png" width="90" height="90" class="mx-auto" alt="">
                    <div class="card-body text-center">
                        <h5>Appointments Management</h5>
                        <p>Manage appointments</p>
                        <a href="add_appointment.php" class="btn btn-danger">Manage Appoinments</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 p-3 shadow">
                    <img src="bill.png" width="90" height="90" class="mx-auto" alt="">
                    <div class="card-body text-center">
                        <h5>Billing Management</h5>
                        <p>Manage billing</p>
                        <a href="add_billing.php" class="btn btn-warning">Manage Billing</a>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="text-center mt-5">
            <a href="logout.php" class="btn btn-outline-danger shadow">-> Logout</a>
        </div>

    </div><br><br><br>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-1">&copy; 2026 Hospital Management System | All Rights Reserved</p>
        </div>
    </footer>



</body>
</html>