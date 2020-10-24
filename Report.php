<?php
    $connection=new mysqli("localhost","root","","subin");
$status=$_POST['status'];

    $sql_query=mysqli_query($connection,"select project_id,project_name,status from addproject where status='$status'; ");
echo "<table><thead><th>Project ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<th>Project Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<th>Status &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
</thead>";
while($row=mysqli_fetch_row($sql_query))
{
	echo "<tr>";
 	echo  "<td>" .$row[0]."\r</td>";
	echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
	echo "</tr>";
}
echo "</table>";

?>