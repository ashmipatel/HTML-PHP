<?php
include "connection_check.php";
//$q="insert into student(sid,sname,sadd)values(101,'c1','aaa')";
//$q1="update student set sname='b1' where sid=101";
$r=mysqli_query($con,$q);
$r1=mysqli_query($con,$q);
$q2="select *from student";

$r2=mysqli_query($con,$q2);
$n=mysqli_nu_rows($r);
if($n>0)
{
    while($r1=mysqli_fetch_assoc($r))
    {
        echo "student id: {$r1['sid']}";
    echo"<br>student name: {$r1['sname']}";
    echo"<br>student address:{$r1['sadd']}";
    echo"<br>_____________________________________";
    }
    echo "<br>all record are fetched";
}
else{
    echo "<br> data is not available inside the table";
}
if($r)
{
    echo "record inserted successsfully";
}
if($r1)
{
    echo"<br>record updated"
}
?>