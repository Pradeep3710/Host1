
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
        <form action="<?php ?>" method="post">
        <h2 align="center">Removing student details</h2>
        <p align="center">
            Please Enter Student USN:<input type="text" name="del_usn" size="25px" placeholder="usn">
        <br>
        <br>
        <input type="submit" value="Delete" name="submit">
        <input type="reset" value="Clear" name="submit">
        </p>
        </form>
<?php


if(isset($_POST['submit']))
{
    $usn=$_POST['del_usn'];

    if($usn=='')
    {
        echo "<script>
            alert('Please Enter any USN!!!');  
            </script> ";
      //window.location.href='remove_stud.php'

    }
    else {


    include 'connect_db.php';
    $query="delete from student where USN='$usn'";
    trim($query);
    $query=stripcslashes($query);
    $query_html=htmlspecialchars($query);

    $result=mysql_query($query);
    $row=mysql_affected_rows();
    if(!$row)
    {
        echo "<script>
            alert('Please enter a valid USN!!!');
            </script> ";
    }
    else
        {
        echo "<script>";
        echo "alert('Student is successfully removed from database');
            </script> ";
    }
}
}

?>
</body>
</html>