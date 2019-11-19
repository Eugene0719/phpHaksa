<?php
$filename=$_FILES['file']['name'];
$filename=iconv('UTF-8','UTF-8',$filename);

//파일업로드
$dir = "./save/problem/";
$savedir=$dir.$filename;

if(move_uploaded_file($_FILES['file']['tmp_name'],$savedir)){
    echo "업로드 성공";
}
else{
    echo "업로드 실패";
}

//--------------------------------------

$filename2=$_FILES['file2']['name'];
$filename2=iconv('UTF-8','UTF-8',$filename2);

//파일업로드
$dir2 = "./save/problem/";
$savedir2=$dir2.$filename;

if(move_uploaded_file($_FILES['file2']['tmp_name'],$savedir2)){
    echo "업로드 성공";
}
else{
    echo "업로드 실패";
}
?>