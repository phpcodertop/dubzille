<?php
@ session_start();
 include_once("../admin/connection.php");
 switch($_REQUEST["txtAction"])
 {
	case "1":
	 $sql="Select * from admin where (username ='$_REQUEST[txtUsername]' AND password = '$_REQUEST[txtPassword]')";		
	$Rows=mysql_query($sql);
	 $Row = mysql_fetch_array($Rows);
	  if($Row != null)
	  {
	  	$_SESSION['username']=$Row['username'];
		$_SESSION['user_ID']=$Row['ID'];
		$_SESSION['admin_name']=$Row['admin_name'];
		$_SESSION['password']=$Row['password'];
		
	  	header("Location:admin_index.php");
	  }
   break;
  }
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>dubizzle script- Log In</title>
<link rel="stylesheet" id="login-css" href="league_files/login.css" type="text/css" media="all">
<link rel="stylesheet" id="colors-fresh-css" href="league_files/colors-fresh.css" type="text/css" media="all">
<meta name="robots" content="noindex,nofollow">

	<script>
	function Enter_Ckick()
	{
	     document.getElementById("txtAction").value="1";
	}
	</script>

</head>
<body class="login">
<div id="login"><h1><a href="adminlogin.php" title="dubizzle script">dubizzle script</a></h1>

<form id="frmLogin" name="frmLogin" action="adminlogin.php" method="POST">
<input type="hidden" name="txtAction" id="txtAction" value="-1"/>

	<p>
		<label>Username<br>
		<input name="txtUsername" id="txtUsername" class="input" size="20" type="text"></label>
	</p>
	<p>
		<label>Password<br>
		<input name="txtPassword" id="txtPassword" class="input" value="" size="20"  type="password"></label>
	</p>

	<p class="submit">
		<input name="btnLogin" id="btnLogin" onClick="Enter_Ckick()" class="button-primary" value="Admin Login" tabindex="100" type="submit">
	</p>
	
</form>




	</div>




</body></html>
