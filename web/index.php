<!DOCTYPE html>
<?php
include ("connection.php");
if(isset($_SESSION['user_id'])){
	echo $_SESSION["user_id"];

	$getuser = "select * from users where userid = '" . $_SESSION["user_id"] . "'";
	$userqry = mysql_query($getuser) or die(mysql_error());
	$userdata = mysql_fetch_assoc($userqry);
	echo $userdata["username"];
}
?>
<html>
	<head>
		<script type='text/javascript' src='/functions/jquery.js'></script>
		<script type='text/javascript' src='/functions/index_func.js'></script>
	</head>
<body>
	
<?php
	include "registration_form.php";
	include "login_form.php";

	
?>
</body>
</html>