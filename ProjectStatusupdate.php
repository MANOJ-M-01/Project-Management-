<?php
    $connection=new mysqli("localhost","root","","subin");
$status=$_POST['status'];
    $pid=$_POST['pid'];
    $sql_query=mysqli_query($connection,"UPDATE addproject SET status='$status' WHERE project_id='$pid'; ");
mysqli_query($connection,$query);
    header('location:ProjectStatusupdate.html');
?>