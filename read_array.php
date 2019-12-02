
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head>

<body>
<?php 
   //数据库名字
   include("assets/php/conn.php");

   $sql1="select id,name,pwd from adm_login";
   $res=mysqli_query($connID,$sql1);
	
	   // 关联数组
  while($row=mysqli_fetch_array($res)){
	 //  $rows[]=$row;
	printf ("%s",$row["id"]);
	printf ("%s",$row["name"]);
	printf ("%s",$row["pwd"]);
	echo '<br>';
  }
	// 释放结果集
	mysqli_free_result($res);
	 
	mysqli_close($connID);
?>
</body>
</html>