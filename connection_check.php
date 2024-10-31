<?php
$con=mysqli_connect("localhost:3307","root","","php_stud")
if($con==null)
{
    echo "connection fail".mysqli_error();
}
else{
    echo "connection success";
}