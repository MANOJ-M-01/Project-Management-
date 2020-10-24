<?php
    $connection=new mysqli("localhost","root","","subin");
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
  
    $query="INSERT INTO AddWorker values('$ID','$name','$email','$phone');";
    mysqli_query($connection,$query);
    header('location: AddWorker.html');
?>
