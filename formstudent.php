<?php
$n=$_POST['email'];
$c=$_POST['password'];
$con=mysqli_connect("localhost", "root","abc123","12std");
$sql="INSERT INTO studentsdetails (Student_Name, Student_Class) values('$n','$c')";
$r=mysqli_query($con, $sql);
if($r)
{
    echo" USER DETAILS ADDED SUCCESSFULLY";
}
else
{
    echo "STUDENTS DETAILS NOT ADDED";
}   
?>