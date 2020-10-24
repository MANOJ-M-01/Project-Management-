<?php
include('connection.php');
$msg = "";
if (isset($_POST['submit'])) {
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($connection, "select * from users where email='$email';");
    if (mysqli_num_rows($result)) {
        $msg = "Email already exists";
    } else {
        mysqli_query($connection, "insert into users values('$email','$password');");
        session_start();
        $_SESSION['email'] = $email;
        header("Location:home.html");
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
    <title>Create account</title>
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

background-color: #fcdab8;
background-image: url("Image/Transperant Pattern/light-sketch.png");
border-radius:20px;
width:200px;
}
.t2
{
font-size:50px;
}
</style>
<body>
    <div class="container col-lg-5 col-sm-12 col-md-5">
        <div class="display-3 text-center  mt-3 t2">Create a New User</div>
        <form action="createaccount.php" method="post">
            <div class="card m-3 p-3 a">
                <h3 class="text-danger"><?php echo $msg; ?></h3>
                <h1>Enter Details</h1>
                
                <input required placeholder="email" type="email" name="email" id="" class="form-control mb-3">
                <input required placeholder="password" type="password" name="password" id="" class="form-control mb-3">
                <input class="t" name="submit" type="submit" value="Create an account" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>