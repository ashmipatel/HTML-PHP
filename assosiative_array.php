<?php
$edata=array("eid"=>101,"ename"=>"ashmi","sal"=>25000);
echo "emp id:." .$edata['eid'];
echo "<br>";

echo "emp name :." .$edata['ename'];
echo "<br>";

echo "emp salary:." .$edata['sal'];
echo "<br>";
echo "employee data are define as underwhich <br>";
foreach($edata as $ans )
{
   
    echo $ans;
}
?>