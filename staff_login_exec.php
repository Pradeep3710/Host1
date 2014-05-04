<?php


  session_start();
 include 'connect_db.php';
// username and password sent from form
 $myusername=$_POST['uname'];
 $mypassword=$_POST['password'];


 if($myusername==''&& $mypassword=='')
 {
     echo "<script>
    alert('Please Enter Username and password');
    window.location.href='staff_login_form.php';
    </script>";

 }
 else
 {
// To protect MySQL injection (more detail about MySQL injection)
 $myusername = stripslashes($myusername);
 $mypassword = stripslashes($mypassword);
 $myusername = mysql_real_escape_string($myusername);
 $mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM staff WHERE username='$myusername' and password='$mypassword'";
 $result=mysql_query($sql);
 
// Mysql_num_row is counting table row
 $count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
                        session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['password'];
			$_SESSION['SESS_MEMBER_NAME'] = $member['username'];
			session_write_close();
                       header("location:staff_login_success.php");
 }
 else {

 echo "<script>
alert('Invalid Username or password');
window.location.href='staff_login_form.php';
</script>";
session_write_close();
 //echo "Wrong Username or Password";
}

}
 ?>
