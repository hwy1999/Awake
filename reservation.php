<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>jQuery Contact Form Plugin: FFForm</title>
    <link href="egpp_10_ffform/css/demo.css" rel="stylesheet" type="text/css">
    <script src="egpp_10_ffform/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <!--Framework-->
    <script src="egpp_10_ffform/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="egpp_10_ffform/js/jquery-ui.js" type="text/javascript"></script>
    <!--End Framework-->
     <script src="egpp_10_ffform/js/jquery.ffform.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#form').ffform({ animation: 'flip', submitButton: '#submit', validationIndicator: '#validation', errorIndicator: '#error', successIndicator: '#success', 'fields': [{ 'id': 'name', required: true, requiredMsg: 'Name is required', type: 'alpha', validate: true, msg: 'Invalid Name' }, { 'id': 'email', required: true, requiredMsg: 'E-Mail is required', type: 'email', validate: true, msg: 'Invalid E-Mail Address' }, { 'id': 'phone', required: false, type: 'custom', validate: false, msg: 'Invalid Phone #' }, { 'id': 'message', required: false, type: 'text', validate: false, msg: ''}] });
        });
    </script>
</head>
<body style="">
	<?php
		if(isset($_POST["submit"])){ //如果提交了表单
		$data0=$_POST["name"]; //将传递过来的数据赋给$data
		$data1=$_POST["email"]; //将传递过来的数据赋给$data
		$data2=$_POST["phone"]; //将传递过来的数据赋给$data
		$data3=$_POST["people"]; //将传递过来的数据赋给$data，数据库people
		$data4=$_POST["date"]; //将传递过来的数据赋给$data
		$data5=$_POST["massage"]; //将传递过来的数据赋给$data
	?>
    
    <section id="getintouch" class="bounceIn animated">
        <div class="container" style="border-bottom: 0;">
            <h1>
                <span style="color:#FC0">GET STARTED NOW — IT'S FREE!</span>
            </h1>
        </div>
        <div class="container">
            <form class="contact" action="#" method="post" id="form">
            <div class="row clearfix">
                <div class="lbl">
                    <label for="name">
                        Name</label>
                </div>
                <div class="ctrl">
                    <input type="text" id="name" name="name" data-required="true" data-validation="text"
                        data-msg="Invalid Name" value="<?php echo $data0; //输出获得的数据?>" readonly="readonly">
                </div>
            </div>
            <div class="row clearfix">
                <div class="lbl">
                    <label for="email">
                        E-Mail</label>
                </div>
                <div class="ctrl">
                    <input type="text" id="email" name="email" data-required="true" data-validation="email"
                        data-msg="Invalid E-Mail" value="<?php echo $data1; //输出获得的数据?>" readonly="readonly">
                </div>
            </div>
            <div class="row clearfix">
                <div class="lbl">
                    <label for="email">
                        Phone</label>
                </div>
                <div class="ctrl">
                    <input type="text" id="phone" name="phone" data-required="true" data-validation="custom"
                        data-msg="Invalid Phone #" value="<?php echo $data2; //输出获得的数据?>" readonly="readonly">
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="lbl">
                    <label for="subject">
                        People</label>
                </div>
                <div class="ctrl">
                    <input type="text" name="subject" id="subject" value="<?php echo $data3; //输出获得的数据?>" readonly="readonly">
                </div>
            </div>
            <div class="row clearfix">
                <div class="lbl">
                    <label for="subject">
                        Date</label>
                </div>
                <div class="ctrl">
                    <input type="text" name="subject" id="subject" value="<?php echo $data4; //输出获得的数据?>" readonly="readonly">
                </div>
            </div>
            <div class="row clearfix">
                <div class="lbl">
                    <label for="message">
                        Message</label>
                </div>
                <div class="ctrl">
                    <textarea id="message" name="message" rows="6" cols="10" readonly="readonly"><?php echo $data5; //输出获得的数据?> </textarea>
                </div>
            </div>
            <div class="row  clearfix">
                <div class="span10 offset2">
                    <input type="submit" name="submit" id="submit" class="submit" value="确 定" formmethod="post">
                    <input type="reset" name="reset" id="reset" class="submit" value="取 消" onclick="window.location.href = 'index.html'">
                </div>
            </div>
            
           <?php
			error_reporting(0);//加上error_reporting(0);就不会弹出警告了
   			//数据库名字
			include("assets/php/conn.php");
    		if(isset($_POST["submit"])){
				$sql1="insert into reservation(name,email,phone,people,date,massage) values('$data0','$data1','$data2','$data3','$data4','$data5')";
				$res=mysqli_query($connID,$sql1);
				echo $res;
				// 释放结果集
			mysqli_free_result($res);
			mysqli_close($connID);
 	 		}else{
				echo"<script>alert('提交失败')location='index.html';</script>";
			}
			?>
	   		
        	</form> 
        </div>
    </section>
    <?php
    }
	?>
</body>
</html>