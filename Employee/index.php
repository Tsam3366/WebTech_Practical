<html>
<head>
    <title>
        Ababeel Enterprise
    </title>
    <style>

    </style>
</head>

<body>
    <form method="POST" align="center">
        EMPLOYEE DETAILS<br><br>
        Employee Id:<input type="number" name="id"><br><br>
        Employee Name:<input type="text" name="name"><br><br>
        Salary:<input type="text" name="salary"><br><br>
        Address:<input type="text" name="add"><br><br>
        <input type="submit" value="Insert" name="sub">
        <input type="submit" value="View" name="vsub">
        <input type="submit" value="Delete" name="dsub">
        <input type="submit" value="Update" name="usub">
    </form>
</body>

</html>
<?php
    $con=mysqli_connect("localhost","root","","test");
    if(!$con)
    {
        die("Failed to connect:".mysqli_connect_error());
    }
if(isset($_POST['sub']))
 {
    
    $a=$_POST['id'];
    $b=$_POST['name'];
    $c=$_POST['salary'];
    $d=$_POST['add'];
    $ins="INSERT INTO emp VALUES ($a,'$b',$c,'$d')";
    $res=mysqli_query($con,$ins);
 }
if(isset($_POST['vsub']))
{
    
    $view="SELECT * FROM emp";
    $res=mysqli_query($con,$view);
    echo"<table border=5px>";
    echo"<tr>";
    echo"<th>EMPLOYEE ID</th>";
    echo"<th>EMPLOYEE NAME</th>";
    echo"<th>SALARY</th>";
    echo"<th>ADDRESS</th>";
    echo"</tr>";
    while($row=mysqli_fetch_assoc($res))
    {
        echo"<tr>";
        echo"<td>".$row['emp_id']."</td>";
        echo"<th>".$row['emp_name']."</th>";
        echo"<th>".$row['salary']."</th>";
        echo"<th>".$row['address']."</th>";
        echo"</tr>";
    }
    echo"</table>";
}
//delete query
if(isset($_POST['dsub']))
 {
    
    $a=$_POST['id'];
    $del="DELETE FROM `emp` WHERE emp_id='$a'";
    $res=mysqli_query($con,$del);
}
//Update query
if(isset($_POST['usub']))
 {
    
    $a=$_POST['id'];
    $b=$_POST['name'];
    $c=$_POST['salary'];
    $d=$_POST['add'];
    $upd="UPDATE emp SET emp_name='$b',salary='$c',address='$d' WHERE emp_id='$a'";
    $res=mysqli_query($con,$upd);

}
?>