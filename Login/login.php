<?php
$con=mysqli_connect("localhost","root","","test");
if(!$con)
{
    die("Connection Failed".mysqli_connect_error());
}
$a=$_POST['luser'];
$b=$_POST['lpass'];
$sql="select * from facebook where username='$a' and password='$b'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$count=mysqli_num_rows($res);
if($count==1)
{
    echo"LOG IN SUCCESSFULL";
}
else
{
    echo"LOG IN FAILURE";
}
?>