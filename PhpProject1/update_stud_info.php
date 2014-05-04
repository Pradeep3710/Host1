<?php
	require_once('auth.php');
?>
<html>
     <link rel="stylesheet" type="text/css" href="css/loginmodule.css">
    <body onload="update_loginForm.usn.value='<?php echo $_SESSION['SESS_MEMBER_ID'];?>'">
   <form id="update_loginForm" name="update_loginForm" method="post" action=" ">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>USN</th>
      <td><input name="usn" type="text" class="textfield" id="usn" onfocus="this.blur" readonly="true"/></td>
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
    <tr><td>&nbsp;</td></tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Update"/></td>
    </tr>
  </table>
</form>
<?php
function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
if(isset($_POST['Submit']))
{
       
	$usn = clean($_POST['usn']);
	$name =clean($_POST['name']);
	$sem = clean($_POST['sem']);
        $email=clean($_POST['email']);
        $dept= clean($_POST['dept']);
        $year= clean($_POST['year']);
echo"<script>alert('$usn')</script> ";
    if($usn==''||$name==''||$sem==''||$email==''||$dept==''||$year=='')
    {
        echo "<script>
            alert('Please Fill all the details!!!');
            window.location.href='update_stud_info.php'
            </script> ";
    }
    else {

     
        
    include 'connect_db.php';
    $query="update student SET name='$name',sem=$sem,email='$email',dept='$dept', year=$year where USN='$usn'";
    trim($query);
    $query=stripcslashes($query);
    $query_html=htmlspecialchars($query);

    $result=mysql_query($query);
    $row=mysql_affected_rows();
    if(!$row)
    {
        echo "<script>
            alert('Update failed try Again!!!');
            window.location.href='update_stud._info.php'
            </script> ";
    }
    else
        {
        echo "<script>";
        echo "alert('Student info is successfully updated');
            window.location.href='stud_login_success.php'
            </script> ";
    }
}
}
?>
</body>
</html>