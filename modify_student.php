<?php
$host='localhost';
$user='root';
$pass='';
$db='student';
$conn=new mysqli($host,$user,$pass,$db);
echo'connection success';
$id=$_POST['id'];
$name=$_POST['name'];
//$contact=$_POST['contact'];
//$address=$_POST['address'];
//$sql="insert into stu_det(name,contact,address)values('$name','$contact','$address')";
$sql="update stu_det set name='$name'where id='$id'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data updation Success';
}
else 
{
    echo 'Error';
}

$conn->close();
?>