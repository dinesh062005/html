<?php
$host='localhost';
$user='root';
$pass='';
$db='student';
$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success<br>';

$name=$_POST['name'];

$sql="delete from stu_det where name='$name'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Deletion Success';
}
else
{
    echo 'Error';
}

$conn->close();

?>