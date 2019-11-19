<?php
include "connect_db.php";

$deptno=$_POST['deptno'];
$dname=$_POST['dname'];
$pname=$_POST['pname'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];


$sql="delete from dept 
        where deptno=$deptno";

$res=mysqli_query($conn,$sql);

echo "<script>
    	location.replace('exam4.php');
    	</script>";

?>