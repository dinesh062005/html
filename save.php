<?php
$host='localhost';
$user='root';
$pass='';
$db='student';
$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success';
$id=$_POST['id'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$address=$_POST['address'];

$sql="insert into stu_det(id,name,contact,address) values('$id','$name','$contact','$address')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success';
}
else
{
    echo 'Error';
}

$conn->close();
?>