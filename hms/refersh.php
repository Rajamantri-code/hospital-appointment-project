<?php 
$conn = mysqli_connect("localhost","root","","hms");

$sql = "select * from doctorspecilization";
$query = mysqli_query($conn, $sql);
$str = "";

while($row=mysqli_fetch_assoc($query)){
    $str .= "<option value='{$row['id']}'>{$row['specilization']}</option>";
}

echo $str;
echo "<script>alert('$str');</script>";

?>

<script type="text/javascript">
	$(document).ready(function(){
		function loadData(){
			$.ajax({
				url : "refersh.php",
				type : "POST",
				success : function(data){	
						$("#Doctorspecialization").append(data);	
				}
			});
		}
		loadData();
	});
</script>