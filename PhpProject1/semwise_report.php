<html>
    <head>
        <style>
            select
            {
                font-family: Georgia;
                color: blue;
                border-style: solid groove;
            }
           table
            {
                font-family: Georgia;
            }
            th
            {
                font-size: 16px;
                color: blue;
            }
            td
            {
                font-size: 12px;
            }
            body
            {
                font-family: georgia;
                font-size: 16px;
                color: blue;
            }
        </style>
    </head>
    <br>
<h2 align='center'></h2><br><br>
    <form name="f1" action="" method="post">
       <p align="center">
       Please Select the sem:
        <select name="sem" OnChange="f1.submit()">
        <option value="-1">Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select></p>
    <br><br>
    </form>
    <div>
<?php

error_reporting(E_ERROR | E_PARSE);
include 'connect_db.php';

$sem1=$_POST['sem'];

$query="select * from student where sem='$sem1'";
trim($query);
$query=stripcslashes($query);
$query_html=htmlspecialchars($query);

display($query);

function display($sql_query)
{
 $query=$sql_query;
 $result=mysql_query($query);
 print "<table border='1' align='center' cellspacing='4'><caption><h2></h2></caption>";
 print "<tr>";
 $num_rows=mysql_num_rows($result);
 $row=mysql_fetch_array($result);
 $num_fields=mysql_num_fields($result);
 $keys=array_keys($row);
 for($index=0; $index<$num_fields; $index++)
     print "<th>".$keys[2*$index+1]."</th>";
     print "</tr>";

 for($row_num=0; $row_num<$num_rows; $row_num++){
     print "<tr>";
     $values=array_values($row);
     for($index=0; $index<$num_fields; $index++)
     {
         $value=htmlspecialchars($values[2*$index+1]);
         print "<th>".$value."</th>";
     }
     print "</tr>";
     $row=mysql_fetch_array($result);
}
print "</table>";
}

?>
        </div>
</html>