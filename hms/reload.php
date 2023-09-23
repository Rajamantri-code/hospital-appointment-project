<?php 
$conn = mysqli_connect("localhost","root","","hms");

$sql = "select * from doctors where specilization= '".$_POST["DT"]."' ORDER BY doctorName";
$query = mysqli_query($conn, $sql);
$str = '';

while($row=mysqli_fetch_assoc($query)){
    $str .= "<option value='{$row['id']}'>{$row['doctorName']}</option>";
}

echo $str;
echo "<script>alert('$str');</script>";

?>