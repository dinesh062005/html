<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      a{  
        padding-right: 25px;
        text-decoration:none;
        color: brown;
      }
      #hd 
      {
           background-color: yellow;
      }
    </style>
</head>
<body>
<div id="hd"><center>
        <h2>Student Details
            
        </h2>
        <div id="nav">
        <a href="home.html">Home</a>
        <a href="new_student.html">New student</a>
        <a href="modify_student.html">Modify student</a>
        <a href="delete_student.html">Delete student</a>
        <a href="read.php">View student</a>
        </div>
        </div>
        <br>
    </center>
        <?php

$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
$sql="select * from stu_det";
$res=$conn->query($sql);
if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['id'].'</td>';
      echo '<td>'.$row['name'].'</td>';
      echo '<td>'.$row['contact'].'</td>';
      echo '<td>'.$row['address'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>