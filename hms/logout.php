<?php
session_start();
include('include/config.php');
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
$sql1 = "update userlog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1";
mysqli_query($bd, $sql1);
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="./user-login.php";
</script>
