
<html>
<head>
    <title>Staff Login</title>
    <style>
        .box{margin-top: 100px; margin-bottom: 10px; background-color:#CCCCCC;
             margin-left: 200px; margin-right: 100px; width:900px; height:300px;
        }
        .head
        {
          font-family: georgia;
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
           <h4 class="head">WEL-COME TO STAFF LOGIN</h4>
   <div id="orngnavi">
   </div>
</div>

<div id="maincontentbody">
<table width="100%" border="0" align="center" class="body" style="height:400px;">
<tr>
<td width="100%" valign="top"  align="center">
<br/>
<form name="LoginForm" method="post" action="staff_login_exec.php">
      <table width="800" border="0" align="center">
            <tr>
                <td align="right" class="contTxt"></td>
            </tr>
      </table>
    <table width="450" border="0" align="center">
          <tr>
            <td colspan="1" class="borderB" height="25"><h3>
              <hr>
              </h3></td>
          </tr>
          <tr>
              <td width="40%">
               <table width="50%" border="0" align="center" class="contTxt">
                <tr>
                <td width="50%">Staff Name
                    <font class=starmand align="absmiddle">*</font></td>
                <td width="50%"><input type="text" name="uname" class="txtfld" autocomplete="off" size="12" placeholder="name"/>
                  </td>
              </tr>
                <tr>
                <td>Password
                    <font class=starmand align="absmiddle">*</font></td>
                <td><input type="password" name="password" size="12" value="" class="txtfld" placeholder="password">
                  </td>
              </tr>
                <tr>
                    <td width="20%" align="left"><input type="submit" name="Submit" value="Sign in" class="buttonSubmit"></td>&nbsp;
                    <td width="20%" align="center"><input type="reset" name="clear" value="Clear" class="buttonSubmit"></td>
              </tr>
              </table>
              </td>
          </tr>
           </table>
              </form>
      </table>
</div>
</div>
</div>
</body>
</html>
