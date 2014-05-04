
<html>
<head>
    <title>Student Login</title>
    <style>
        .box{margin-top: 40px; margin-bottom: 10px; background-color: #CCCCCC;
             margin-left: 200px; margin-right: 200px; height:400px;;
        }
    </style>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/Template.css" rel="stylesheet" type="text/css">
<link href="css/content1.css" rel="stylesheet" type="text/css">
<body bgcolor="#6495ED">
<div class="box">
<div class="main">
<div id="header">

</div>
<div class="orngstrip">
    <h4 align="center">WEL-COME TO STUDENT LOGIN</h4>
</div>
    
<div id="maincontentbody">
<table width="100%" border="0" align="center" class="body" style="height:400px;">
<tr>
<td width="100%" valign="top"  align="center">
<br/>
<form name="LoginForm" method="post" action="stud_login_exec.php">
      <table width="800" border="0" align="center">
            <tr>
                <td align="right" class="contTxt"><font class="starmand" align="absmiddle">*</font>Mandatory</td>
            </tr>
      </table>
    <table width="450" border="0" align="center">
          <tr>
            <td colspan="3" class="borderB" height="25"><h3>
               
               <hr>
              </h3></td>
          </tr>
          <tr>
              <td width="60%">
               <table width="90%" border="0" align="center" class="contTxt">
                <tr>
                <td width="50%">USN
                    <font class=starmand align="absmiddle">*</font></td>
                <td width="50%"><input type="text" name="uname" class="txtfld" autocomplete="off" size="12" placeholder="usn"/>
                  </td>
              </tr>
                <tr>
                <td>Password
                    <font class=starmand align="absmiddle">*</font></td>
                <td><input type="password" name="password" size="12" value="" class="txtfld" placeholder="password">
                  </td>
              </tr>
                <tr>
                <td align="right" colspan="2"><input type="submit" name="Submit" value="Sign in" class="buttonSubmit"></td>
                <td>&nbsp;</td>
              </tr>
              </table></td>
            <td width="1%" valign="top"><img src="/beta_images/login_sep.gif" width="3" height="63"></td>
            <td width="39%" valign="top"><table width="90%" border="0" align="center" cellpadding="3" cellspacing="0">
                <tr>
                <td class="contTxt">New User? click here to
                    <a href="register-form.php" class="contTxt">Register</a></td>
              </tr>
              </table></td>
          </tr>
          <tr>
              <td colspan="3"><hr></td>
          </tr>
           </table>
              </form>
      </table>
</div>
</div>
</div>
</body>
</html>