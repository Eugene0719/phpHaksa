<?php include "header.php" ?>
<?php include "aside_exam.php" ?>

<style>      
   h2{
        margin:20px 20px 40px 20px;
        padding:10px;
        border-bottom:1px solid #ccc;
   }
   table{
       border-collapse:collapse;
   }
   th,td{
       border:1px solid #ccc;       
       text-align:center;
       font-size:13px;
   }   
   .table{
        width:820px;
        margin-left:10px;
   }
   #btn-right{
        text-align:right;        
        margin:10px;
        padding:0 5px;
   }
</style>

<article>

<h2>문제정보</h2>
  
  
  <table class="table">
  	<thead class="thead-dark">
  	<tr>
  		<th>과목번호</th>
  		<th>과목명</th>
  		<th>평가일</th>
  		<th>문제파일</th>
  		<th>답안파일</th>
  		<th>과정명</th>
  	</tr>
  	</thead>
	
	<tbody>
<?php 
include "connect_db.php";

$sql="select subno,name,evaldate,file,file2,d.deptno,dname 
        from subject s,dept d
        where s.deptno=d.deptno
        order by subno desc";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_fields($result);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";        
    echo "<td>{$rows['subno']}</td>";
    echo "<td><a href=exam_form3.php?subno={$rows['subno']}>{$rows['name']}</a></td>";
    echo "<td>{$rows['evaldate']}</td>";
?>
    <td><a href=download.php?file=<?php echo str_replace(' ','+', $rows['file']);?>&path=<?php echo './save/problem/';?>><?php echo $rows['file'];?></a></td>
	<td><a href=download.php?file=<?php echo str_replace(' ','+', $rows['file2']);?>&path=<?php echo './save/answer/';?>><?php echo $rows['file2'];?></a></td>
	
<?php

    echo "<td>{$rows['dname']}</td>";
        
    
    /* $check=$rows['exam'];
    if($check==0){
        echo "<td style='color:red'>미응시</td>";
    }else{
        echo "<td>응시</td>";
    } */
    
    echo "</tr>";
}
?>
	</tbody>
  </table>
  
  <div id="btn-right">
  	<a href="problem_form.php" class="btn btn-info btn-sm">문제등록</a>
  </div>
  
</article>

<?php include "footer.php" ?>

