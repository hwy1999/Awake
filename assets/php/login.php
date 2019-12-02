<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head>

<body>
<?php 
  //session_start();
  header("content-type:text/html;charset=utf-8");
  //数据库名字
  include("conn.php");
  
//  if(isset($_REQUEST["submit"])){ 
    
  $name = $_POST['name'];
  //echo $name;
  $pwd = $_POST['pwd'];
  //echo $pwd;
   //$sql = mysqli_query($connID,"select * from login where name='$name' and pwd='$pwd';");
   $sql ="select * from login where name='$name' and pwd='$pwd';";
   $res=mysqli_query($connID,$sql1);
	echo $res;
	
   //echo "你输入的用户名和密码是：";
  if(mysqli_num_rows($sql)>0){
	  
   $_SESSION['name'] = $name;
   $_SESSION['time'] = time();
   echo"<script>alert('登录成功');location='../products.html';</script>";
 }
  else{
	  
	  echo"<script>alert('用户名或密码错误')location='../login.html';</script>";
   
  }
  
 /*  }
  echo $pwd;*/
 
  
  
 
?>
</body>
</html>