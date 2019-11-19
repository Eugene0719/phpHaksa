<?php
include "connect_db.php";

$dname=$_POST['dname'];
$pname=$_POST['pname'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];


$sql="insert into dept (dname,pname,sdate,edate)
            values ('$dname','$pname','$sdate','$edate')";

$res=mysqli_query($conn,$sql);
mysqli_close($conn);

echo "<script>
    	location.replace('exam4.php');
    	</script>";

?>