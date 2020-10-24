<?php
include('connection.php');
$msg = "";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($connection, "select * from users where email='$email' and password='$password';");
    if (mysqli_num_rows($result)) {
        session_destroy();
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['cart'] = array();
        header("Location:Home.html");
    } else {
        $msg = "Check your email and password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Log in</title>
</head>
<style>
body
{
background-color: #eeeeec;
background-image: url("Image/Transperant Pattern/light-sketch.png");
}
.a
{
background-color: #fde4cc;
background-image: url("Image/Transperant Pattern/light-sketch.png");
}
.tx
{
color:red;
}
.t
{
width:100px;
background-color: #fcdab8;
background-image: url("Image/Transperant Pattern/light-sketch.png");
}
</style>
<body>
    <div class="container col-lg-5 col-sm-12 col-md-5 mt-4">
        <div class="display-4 text-center mt-3">Project Management</div>
        <form action="index.php" method="post">
            <div class="card m-3 p-3 shadow a">
                <h3 class="text-danger"><?php echo $msg; ?></h3>
                <h1>Employees Must login</h1>
                <input required placeholder="email" type="email" name="email" id="" class="form-control mb-3">
                <input required placeholder="password" type="password" name="password" id="" class="form-control mb-3">
                <input class="t" name="submit" type="submit" value="Log in" class="btn btn-primary">
                <a class="text-center mt-3 tx" href="createaccount.php">Create an account</a>
            </div>
        </form>
    </div>
</body>

</html>