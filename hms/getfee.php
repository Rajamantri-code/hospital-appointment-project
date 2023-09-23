
<?php $mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "hms";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
//mysqli_select_db($mysql_database, $bd);
if($_GET['action']=='doctorid'){
	$docinfo=$_POST['docinfo'];
	$sql1 = "select * from doctors where doctorName=$docinfo";
	$query= mysqli_query($bd, $sql1);
	$array=mysqli_fetch_array($query);
	echo $array['docFees'];
	
	}
	?>