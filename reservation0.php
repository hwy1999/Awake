<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<?php
if(isset($_POST["submit"])){ //如果提交了表单
$data0=$_POST["name"]; //将传递过来的数据赋给$data
$data1=$_POST["email"]; //将传递过来的数据赋给$data
$data2=$_POST["phone"]; //将传递过来的数据赋给$data
$data3=$_POST["people"]; //将传递过来的数据赋给$data，原本name
$data4=$_POST["date"]; //将传递过来的数据赋给$data
$data5=$_POST["massage"]; //将传递过来的数据赋给$data
?>

<form action="assets/php/reservation_db.php" method="post">
<table width="560" height="192" bordercolor="#ACD2DB" bgcolor="#ACD2DB" class="big_td">
<tr><td width="100" bgcolor="#deebef" >您的订餐信息</td></tr>
<tr>
<td width="100" bgcolor="#deebef" scope="col">姓名：</td>
<td height="25" scope="col" bgcolor="#deebef">&nbsp; &nbsp; <?php echo $data0; //输出获得的数据?></td>
</tr>
<tr>
<td width="100" bgcolor="#deebef" scope="col">邮箱： </td>
<td bgcolor="#DEEBEF" scope="col">&nbsp; &nbsp; <?php echo $data1; //输出获得的数据 ?></td>
</tr>
<tr>
<td width="100" bgcolor="#deebef" scope="col">电话：</td>
<td height="104" bgcolor="#DEEBEF" scope="col">&nbsp; &nbsp; <?php echo $data2; //输出获得的数据
 ?></td>
</tr>
<tr>
<td width="100" bgcolor="#deebef" scope="col">人数：</td>
<td height="25" scope="col" bgcolor="#deebef">&nbsp; &nbsp; <?php echo $data3; //输出获得的数据?></td>
</tr>
<tr>
<td width="100" bgcolor="#deebef" scope="col">日期：</td>
<td height="25" scope="col" bgcolor="#deebef">&nbsp; &nbsp; <?php echo $data4; //输出获得的数据?></td>
</tr>
<tr>
<td width="100" bgcolor="#deebef" scope="col">备注：</td>
<td height="25" scope="col" bgcolor="#deebef">&nbsp; &nbsp; <?php echo $data5; //输出获得的数据?></td>
</tr>
<tr>
<td><input type="button" value="确认" formmethod="post"></td>
<!--我的注释<td><input type="reset" value="取消" formaction="index.html"></td>-->
<td><input type="reset" value="取消" onclick="window.location.href='index.html'"></td>

</tr>
</table>
</form>
<?php
} 
 //session_start();
  header("content-type:text/html;charset=utf-8");
  //数据库名字
  include("assets/php/conn.php");
	if(isset($_POST["button"])){
	$sql="insert into reservation(name,email,phone,people,date,massage) values('$data0','$data1','$data2','$data3','$data4','$data5')"; 
	echo $data0; 
	$result=mysqli_query($connID,$sql);
	echo $result;
    if($result){
   	  echo"<script>alert('提交成功');location='index.html';</script>";
	 }else{
	  echo"<script>alert('提交失败')location='index.html';</script>";
 	 }
 }
?>

</body>
</html>