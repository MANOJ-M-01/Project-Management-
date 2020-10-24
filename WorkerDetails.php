<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Management</title>
<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body { background-color: #eeeeec;
background-image: url("Image/Transperant Pattern/light-sketch.png");
}
        body a { color:#fff;}
table{background-color: #9e9eec;width:90px;height:30px;}
thead {color:green;}
tbody {color:blue;}
tfoot {color:red;}

table, th, td {
  border: 1px solid black;
}

        .container { width:728px; margin:30px auto;}
        .flex-container {
  display: flex;
  width:800px;
  background-color: rgb(4, 26, 48);
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: 10px;
  width:300px;
  padding: 20px;
height:3px;
  font-size: 20px;
text-align:center;
  color:black;
}
.t1
{
    color:black;
    text-decoration: none;
}
.img
{
 width:800px;
height:250px;
 border: 0px solid #ddd;
  border-radius: 4%;
  padding: 5px;
  background-color: white;
  box-shadow: 0 14px 2px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
opacity:0.5;
}

.f
{
width:600px;
}     
.tn
{
font-size:20px;
color:black;
}
   </style>
</head>
<body>
    <div class="container">
        <div class="flex-container">
            <div><a class="t1" href="AddProject.html">AddProjects</a></div>
<div><a class="t1" href="ProjectDetails.php">ProjectDetails</a></div>
            <div><a class="t1" href="AddWorker.html">AddWorker</a></div>

            <div><a class="t1" href="WorkerDetails.php">WorkerDetails</a></div>
            <div><a class="t1" href="Home.html">Home</a></div>
           
          </div>
<div>
<img class="img" src="image\1.jpg" alt="image illa"> 
</div>
        <h1>Worker Details</h1>
     
      <div>
<?php
echo "<head><titl></title></head><br><br>";
$connection=new mysqli("localhost","root","","subin");
$sql_query=mysqli_query($connection,"select * from Addworker");
echo "<table><thead><th>ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<th>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<th>E-mail &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<th>Phone_Number &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th></thead>";
while($row=mysqli_fetch_row($sql_query))
{
	echo "<tr>";
 	echo  "<td>" .$row[0]."\r</td>";
	echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
	echo "</tr>";
}
echo "</table>";

?>
</div> 
    </div>
</body>
</html>