<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
  //session_start();
  header("content-type:text/html;charset=utf-8");
  //数据库名字
  include("conn.php");
  
  echo "你输入的用户名和密码是：";  
  $data0=$_POST["name"]; //将传递过来的数据赋给$data
  echo $data0;
  $data1=$_POST["email"]; //将传递过来的数据赋给$data
  echo $data1;
  $data2=$_POST["phone"]; //将传递过来的数据赋给$data
  $data3=$_POST["name"]; //将传递过来的数据赋给$data，原本name

  $data4=$_POST["date"]; //将传递过来的数据赋给$data
  $data5=$_POST["massage"]; //将传递过来的数据赋给$data
 
  $sql = mysqli_query($connID,"insert into reservation(name,email,phone,people,date,massage) values('$data0','$data1','$data2','$data3','$data4','$data5');");
  if(mysqli_num_rows($sql)>0){
   $_SESSION['name'] = $name;
   $_SESSION['time'] = time();
   echo"<script>alert('登录成功');location='../products.html';</script>";
 }
  else{
	  
	  echo"<script>alert('用户名或密码错误')location='../login.html';</script>";
   
  }

 
?>
</body>
</html>