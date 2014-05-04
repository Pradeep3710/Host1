<html>
    <head>
        <style>
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
    <body>

<?php
include 'connect_db.php';

$query="select USN,name,sem,dept,email,year from student";
trim($query);
$query=stripcslashes($query);
$query_html=htmlspecialchars($query);

$result=mysql_query($query);
print "<table border='1' align='center' cellspacing='4'><caption><h2>Student details</h2></caption>";
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
?>
</body>
</html>