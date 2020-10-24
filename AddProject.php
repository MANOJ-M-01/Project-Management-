<?php
    $connection=new mysqli("localhost","root","","subin");
    
    $name=$_POST['name'];
    $head=$_POST['head'];
    $tech=$_POST['tech'];
    $client=$_POST['client'];
    $query="INSERT INTO AddProject values('$s','$name','$head','$tech','$client','Assigned');";
    mysqli_query($connection,$query);
    header('location:AddProject.html');
?>
