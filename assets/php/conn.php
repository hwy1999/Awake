<?php
$host = "localhost";
$userName = "root";
$password = "123";

// 检测连接
if($connID = mysqli_connect($host,$userName,$password)){
		//echo "数据库连接成功";
		}else{
			echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
			}
			 
	if(mysqli_select_db($connID,"mydb")){
		echo "<script type='text/javascript'>alert('数据库选择成功');</script>";
		}
	//中文乱码问题
    //mysqli_query($conn,"set names utf8");
?>