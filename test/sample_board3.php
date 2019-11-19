<?php
$subno=$_POST['subno'];
$name=$_POST['name'];


echo "번호: ".$subno."<br>";
echo "이름: {$name}<br>";

$conn=mysqli_connect("localhost","root","1111");
mysqli_select_db($conn,'shop_db');

$sql="update subject set name='{$name}' where subno={$subno}";
mysqli_query($conn, $sql);

echo "<script>
        location.replace('sample_board.php')
       </script>";
?>