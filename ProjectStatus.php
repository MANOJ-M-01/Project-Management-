<?php
    $connection=new mysqli("localhost","root","","subin");
    $pid=$_POST['pid'];
    $sql_query=mysqli_query($connection,"select project_name,status from addproject where Project_ID='$pid' ");
echo "<table><thead><th>Project Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<th>Status &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
</thead>";
while($row=mysqli_fetch_row($sql_query))
{
	echo "<tr>";
 	echo  "<td>" .$row[0]."\r</td>";
	echo "<td>".$row[1]."</td>";

	echo "</tr>";
}
echo "</table>";

?>