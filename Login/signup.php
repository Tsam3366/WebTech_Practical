<?php
$con=mysqli_connect("localhost","root","","test");
if(!$con)
{
    die("Connection Failed".mysqli_connect_error());
}
$a=$_POST['suser'];
$b=$_POST['spass'];
$sql="insert into facebook values('$a','$b')";
$but=$_POST['sbut'];
if(isset($but))
{
    $res=mysqli_query($con,$sql);
    echo"REGISTRATION SUCCESSFULL";
}

?>