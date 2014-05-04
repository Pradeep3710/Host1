<?php
	require_once('auth.php');
?>
<html>
    <head>
     <title>Reset staff password</title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/loginmodule.css">
    <body onload="reset_passForm.usn.value='<?php echo $_SESSION['SESS_MEMBER_NAME'];?>'">
        <br><br>
        <form id="reset_passForm" name="reset_passForm" method="post" action="<?php ?>">
    <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>Username</th>
      <td><input name="uname" type="text" class="textfield" id="usn" onfocus="this.blur" readonly="true"/></td>
    </tr>
    <tr>
      <th>Enter Current Password<font color="#FF0000">*</font></th>
      <td><input name="currpass" type="password" class="textfield" id="currpass" placeholder="current password"/></td>
    </tr>
    <tr>
      <th>New Password<font color="#FF0000">*</font></th>
      <td><input type="password" id="pwd" name="pwd"  class="textfield" placeholder="new password"/></td>
    </tr>
    <tr>
      <th>Re-enter New Password<font color="#FF0000">*</font></th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" placeholder="confirm password"/></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Update"/></td>
     
    </tr>
  </table>
</form>

<?php
$errflag=false;
if(isset($_POST['submit']))
{
        $uname = clean($_POST['uname']);
	$currpass =clean($_POST['currpass']);
	$pass1= clean($_POST['pwd']);
        $cpass=clean($_POST['cpassword']);

        if($uname==''||$pass1==''||$cpass==''||$currpass=='')
        {
            echo "<script>
            alert('Please Fill all the details!!!');";
            //window.location.href='reset_stud_pass.php'
            echo "</script> ";
            $errflag = true;

        }
        if($uname!='')
        {
            include 'connect_db.php';
            $sql="select * from staff where username='$uname' and password='$currpass'";
            $result=mysql_query($sql);
            $row=mysql_num_rows($result);

            if($row!=1)
            {
                echo "<script>
                alert('Invalid Current password');";
               // window.location.href='reset_stud_pass.php'
               echo "</script> ";
                $errflag = true;
            }

        }
        if( strcmp($pass1, $cpass) != 0 )
            {
		echo "<script>
                alert('password Does't match!!!');";
                //window.location.href='stud_pass_reset.php'
                echo "</script>";
                $errflag = true;
	    }


        if($errflag==false)
            {
                include 'connect_db.php';
                $query="update staff SET password='$pass1' where username='$uname'";
                trim($query);
                $query=stripcslashes($query);
                $query_html=htmlspecialchars($query);
                $result=mysql_query($query);
                $row=mysql_affected_rows();
                if(!$row)
                {
                    echo "<script>
                    alert('Password Update failed try Again!!!');
                   </script> ";
                    //       window.location.href='reset_staff_pass.php'
                }
                else
                {
                    echo "<script>";
                    echo "alert('Password is successfully updated');   
                    </script> ";
                //window.location.href='staff_login_success.php'

                }
           }
}
function clean($str)
{
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);

}
?>
</body>
</html>