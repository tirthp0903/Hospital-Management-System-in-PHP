<?php
// logout valu
if(isset($_GET["message"]))
    {
        echo $_GET["message"];
    }
?>

<?php
    if(isset($_GET["msg"]))
    {
        echo '<div class="alert alert-danger text-center">'. $_GET["msg"]. '</div>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.8-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card h-100">
                    <h3 class="text-center bg-primary text-white p-3">Admin Login</h3>
                    
                    

                    <div class="card-body">
                        <form action="logincode.php" method="post">
                            <div class="mb-3">
                                <label for="">Username : </label>
                                <input type="text" name="username" placeholder="Enter Username" class="form-control" required id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Password : </label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control" required id="">
                            </div>

                            <div>
                                <input type="submit" name="login" value="login" class="bg-success text-white form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>