<?php include "header.php" ?>
<?php include "aside_exam.php" ?>

<?php
$deptno=$_GET['deptno'];

include "connect_db.php";

$sql="select * from dept where deptno={$deptno}";
$result=mysqli_query($conn, $sql);

while($rows=mysqli_fetch_array($result)){
    $dname=$rows['dname'];
    $pname=$rows['pname'];
    $sdate=$rows['sdate'];
    $edate=$rows['edate'];
}
?>

<style>
	table{
        border-collapse:collapse;
	}
	td{
		border:1px solid #ccc;
	}   
</style>

<article>
	<h2>학과정보</h2>

<form name="form" action="" method="post" >
	<input type="hidden" name="deptno" value="<?php echo $deptno;?>">
		
<table>
	<tr>
		<td>과정명</td>
		<td>
			<input type="text" name="dname" value="<?php echo $dname;?>">
		</td>
	</tr>	
	<tr>
		<td>지도교수</td>
		<td>
			<input type="text" name="pname" value="<?php echo $pname;?>">
		</td>
	</tr>
	<tr>
		<td>시작일</td>
		<td>
			<input type="text" name="sdate" value="<?php echo $sdate;?>">
		</td>
	</tr>
	<tr>
		<td>종료일</td>
		<td>
			<input type="text" name="edate" value="<?php echo $edate;?>">
		</td>
	</tr>
		
	<tr>
		<td colspan=2>
			<button type="button" class="btn btn-warning">수정</button> 			
			<button type="button" class="btn btn-primary">목록</button> 
			<button type="button" class="btn btn-danger">삭제</button>
		</td>
	</tr>
</table>
</form>
</article>

<script src="http://code.jquery.com/jquery-latest.js">
</script>
<script>
$(document).ready(function(){
	var formObj=$("form[name='form']");
	
	//수정
	$(".btn-warning").on("click",function(){
		formObj.attr("action","dept_upload_process.php");
		formObj.submit();
	});
	//목록
	$(".btn-primary").on("click",function(){
		formObj.attr("action","exam4.php");		
		formObj.submit();
	});
	//삭제
	$(".btn-danger").on("click",function(){
		formObj.attr("action","dept_delete_process.php");		
		formObj.submit();
	});
});
</script>

<?php include "footer.php" ?>