<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>bill</title>
    <link rel="stylesheet" href="css/style2.css" media="all" />
  </head>
  <body>
<center>
<div class="a">Payment Info</div> <br><br>
<form action="bill.php" method="POST">
<div class="b">
<table>

<tr>
	<td> 
		<input TYPE=checkbox name=Project VALUE=100000 checked>
	</td>	 

	<td>	
		<h1>Project</h1>
	</td>
</tr>

<tr>
	<td> 
		<input TYPE=checkbox name=Registration VALUE=200>
	</td>
	<td>	
		<h1>Registration</h1>
	</td>
</tr>
<tr>
	<td> 
		<input TYPE=checkbox name=Documentation VALUE=10000>
	</td>	 
	<td>	
		<h1>Documentation</h1>
	</td>
</tr>

<tr>
	<td> 
		<input TYPE=checkbox name=Modification VALUE=2070>
	</td>	 
	<td>	
		<h1>Modification</h1>
	</td>
</tr>


</table>
<br> <INPUT TYPE=submit name=submit Value="submit">
</form>
</div>
<br><br><br><br><br>

</center>
</FORM>

<?php
$Project='';
$Registration='';
$Documentation='';
$Modification='';

    if(isset($_POST['submit']))
    {

$Project=((isset($_POST['Project'])) ? $_POST['Project'] : 0);
$Registration=((isset($_POST['Registration'])) ? $_POST['Registration'] : 0);
$Documentation=((isset($_POST['Documentation'])) ? $_POST['Documentation'] : 0);
$Modification=((isset($_POST['Modification'])) ? $_POST['Modification'] : 0);

$tot=$Project+$Registration+$Documentation+$Modification;
echo "<h2 > Project :$Project </h2><br><br>" ;
echo "<h2 >Registration: $Registration </h2><br><br>";
echo "<h2 >Documentation : $Documentation </h2><br><br>";
echo "<h2 >Modification : $Modification </h2><br><br>";
echo "<center> <h2>Total Price : 
$tot </h2></center> ";
}
?>

   
</body>  
</html>  
