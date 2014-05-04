<?php
//session_start();
// if(!session_is_registered()){
// header("location:staff_login_form.php");
// }
// ?>

 <html>
     <head><title>Staff Home</title></head>
         <style>
             .leftbox
             {
                 margin-top: 20px;
                 background-color: #6495ED;
                 margin-left: 2px;
                 margin-right: 80px;
                 width: 250px;
                 height: 600px;
             }
             .rightbox
             {
                 background-color: white;
                  margin-top: 20px;
                 margin-left: 250px;
                 margin-right: 2px;
                 width:  1150px;
                 height: 600px;
             }
             iframe
              {
                width:1050px;
                height:600px;
              }

         </style>
     </head>
     <h1 align="center">WELCOME TO STUDENT INFORMATION SYSTEM</h1>
     <div class="leftbox">
     <table align="left">
         <tr>
             <th align="left">&nbsp;</th>
         </tr>
         <tr>
             <th align="left"><a href="disp_all_stud.php" target="myIframe"><button>All Student details</button></a></th>
         </tr>
         <tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="semwise_report.php" target="myIframe"><button>Semwise Student Report</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="email_list_semwise.php" target="myIframe"><button>Email wise Student Report</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="remove_stud.php" target="myIframe"><button>Remove a Student</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="comment_on_stud.php" target="myIframe"><button>Comment on student</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="remove_grad_stud.php" target="myIframe"><button>Remove graduated Students</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="reset_staffpass.php" target="myIframe"><button>Reset Password</button></a></th>
         </tr><tr><td><br></td></tr>
         <tr>
             <th align="left"><a href="logout.php"><font color="white" size="10">LOGOUT</font></a></th>
         </tr><tr><td><br></td></tr>
     </table>
      <div class="rightbox">
          <iframe src="wel_come_staff.php" name="myIframe" frameborder="0"></iframe>
       </div>
    </div>
     <body bgcolor="#6495ED">
 </body
 </html>