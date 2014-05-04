<?php
	require_once('auth.php');
?>
<html>
    <head>
        <style>
            iframe
              {
                width:650px;
                height:400px;
              }
        </style>
      <title>Student Page</title>
    </head>
<br>
<h1></h1>
<table width=1000 height=480 id=linkname border=0 bgcolor=#f8f8f8 align="center">
<tr bgcolor=#6495ED>
  <td width=200 height=30><p align="center"><a href="stud_login_success.php"><font color=white size=2 face=arial>Home</font></a></p></td>
   <td colspan=2>
    <table bgcolor=#6495ED border=0 width=490>
     <tr>
      <td width=200> &nbsp;<font size=4 color=white>H</font>i welcome, <?php echo $_SESSION['SESS_MEMBER_NAME'];?> </td>
      <td align="right">
       </td>
     </tr>
    </table>
   </td>
</tr>
<tr>
<td width=200 valign=top bgcolor="#6495ED">
<table bgcolor=#6495ED width=100% id=tabletext border=0>
<tr>
  <td align=center>
   <table bgcolor=#6495ED width=90% id=tabletext border=0 align=center >
   <tr ><td>&nbsp; </td></tr>
   <tr ><td><hr color=white> </td></tr>
   <tr><td>&nbsp;</td></tr>
   <tr height=30>  <td><a href="update_stud_info.php" target="myIframe"> <b>Update information</b></a></td></tr>
   <tr height=30>  <td><a href="reset_stud_pass.php" target="myIframe"> <b>Reset Password</b></a></td></tr>
   <tr ><td><hr color=white> </td></tr>
   <tr><td>&nbsp;</td></tr>
   <tr height=30><td align=center><a href="logout.php"><h2><font color=white> LOGOUT</font></h2></a></td></tr></table>
  </td>
</tr></table>
</td>
<td>
    <table bgcolor=white width=100% height="100%" id=tabletext border=0>
<tr>
  <td align=center>
       <iframe src="wel_come_staff.php" name="myIframe" frameborder="0"></iframe>
  </td>
</tr></table>
    </td>
</tr>
</table>
</html>


