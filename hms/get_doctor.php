<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{
 $sql1 = "select doctorName,id from doctors where specilization='".$_POST['specilizationid']."'";
 $sql=mysqli_query($bd, $sql1)?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctorName']); ?></option>
  <?php
}
}


if(!empty($_POST["doctor"])) 
{
  $sql2 = "select docFees from doctors where id='".$_POST['doctor']."'";
 $sql=mysqli_query($bd, $sql2);
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

?>

