<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="css/css1.css" rel="stylesheet" type="text/css" />
 <h4 align="right"><font color="#FF0000">*</font>Mandetory Field</h4>
 <h1 align="center">Registration</h1>
</head>
    <body bgcolor="#CCCCCC">
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 )
            {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>';
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<form id="loginForm" name="loginForm" method="post" action="register-exec.php">

    <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
      <th>USN<font color="#FF0000">*</font> </th>
      <td><input name="usn" type="text" class="textfield" id="usn" placeholder="usn"/></td>
    </tr>
    <tr>
      <th> Name<font color="#FF0000">*</font> </th>
      <td><input name="name" type="text" class="textfield" id="name" placeholder="name"/></td>
    </tr>
    <tr>
      <th width="124">Sem<font color="#FF0000">*</font></th>
      <td width="168"><input name="sem" type="text" class="textfield" id="sem" placeholder="sem"/></td>
    </tr>
    <tr>
      <th width="124">Email<font color="#FF0000">*</font></th>
      <td width="168"><input name="email" type="text" class="textfield" id="email" placeholder="email"/></td>
    </tr>
    <tr>
      <th>Department<font color="#FF0000">*</font></th>
      <td><input type="text" class="textfield" id="dept" name="dept" placeholder="department"/></td>
    </tr>
    <tr>
      <th>Year<font color="#FF0000">*</font></th>
      <td><input name="year" type="text" class="textfield" id="year" placeholder="year"/></td>
    </tr>
    <tr>
      <th>Password<font color="#FF0000">*</font></th>
      <td><input type="password" id="password" name="password"  class="textfield" placeholder="password"/></td>
    </tr>
    <tr>
      <th>Confirm Password<font color="#FF0000">*</font></th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" placeholder="confirm password"/></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Register"/></td>
      <td><input type="reset" name="reset" value="Clear" /></td>
    </tr>
  </table>
</form>
</body>
</html>
