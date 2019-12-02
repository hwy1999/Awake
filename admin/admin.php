<!doctype html>
<html lang="ch">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="左右结构项目，属于大人员的社交工具">
        <meta name="keywords" content="左右结构项目 社交 占座 ">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>n ss!w ! 餐厅后台管理</title>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function() {
                $(".meun-item").click(function() {
                    $(".meun-item").removeClass("meun-item-active");
                    $(this).addClass("meun-item-active");
                    var itmeObj = $(".meun-item").find("img");
                    itmeObj.each(function() {
                        var items = $(this).attr("src");
                        items = items.replace("_grey.png", ".png");
                        items = items.replace(".png", "_grey.png")
                        $(this).attr("src", items);
                    });
                    var attrObj = $(this).find("img").attr("src");
                    ;
                    attrObj = attrObj.replace("_grey.png", ".png");
                    $(this).find("img").attr("src", attrObj);
                });
                $("#topAD").click(function() {
                    $("#topA").toggleClass(" glyphicon-triangle-right");
                    $("#topA").toggleClass(" glyphicon-triangle-bottom");
                });
                $("#topBD").click(function() {
                    $("#topB").toggleClass(" glyphicon-triangle-right");
                    $("#topB").toggleClass(" glyphicon-triangle-bottom");
                });
                $("#topCD").click(function() {
                    $("#topC").toggleClass(" glyphicon-triangle-right");
                    $("#topC").toggleClass(" glyphicon-triangle-bottom");
                });
                $(".toggle-btn").click(function() {
                    $("#leftMeun").toggleClass("show");
                    $("#rightContent").toggleClass("pd0px");
                })
            })
        </script>
        <!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/slide.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/flat-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.nouislider.css">
    </head>

    <body>
        <div id="wrap">
            <!-- 左侧菜单栏目块 -->
            <div class="leftMeun" id="leftMeun">
                <div id="logoDiv">
                    <p id="logoP"><img id="logo" alt="左右结构项目" src="images/logo.png"><span>n ss!w ! 餐厅</span></p>
                </div>
                <div id="personInfor">
                    <p id="userName">管理员</p>
                    <p><span>yangxp@qq.com</span> More Templates</p>
                    <p>
                        <a href="../index.html">退出登录</a>
                    </p>
                </div>
                <div class="meun-title">后台管理</div>
                <div class="meun-item" href="#char" aria-controls="char" role="tab" data-toggle="tab"><img src="images/icon_chara_grey.png">管理员管理</div>
                <div class="meun-item" href="#user" aria-controls="user" role="tab" data-toggle="tab"><img src="images/icon_user_grey.png">用户管理</div>
                <div class="meun-title">订桌管理</div>
                <div class="meun-item" href="#scho" aria-controls="scho" role="tab" data-toggle="tab"><img src="images/icon_house_grey.png">订桌管理</div>
                <div class="meun-item" href="#sitt" aria-controls="sitt" role="tab" data-toggle="tab"><img src="images/icon_char_grey.png">座位管理</div>
            </div>
            <!-- 右侧具体内容栏目 -->
            <div id="rightContent">
                <a class="toggle-btn" id="nimei">
                    <i class="glyphicon glyphicon-align-justify"></i>
                </a>
                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- 管理员管理模块 -->
                    <div role="tabpanel" class="tab-pane" id="char">

                        <div class="check-div">
                            <button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addChar">添加管理员</button>
                        </div>
                        <div class="data-div">
                            <div class="row tableHeader">
                                <div class="col-xs-1 ">
                                    工号
                                </div>
                                <div class="col-xs-4">
                                    管理员名
                                </div>
                                <div class="col-xs-5">
                                    密码
                                </div>
                                <div class="col-xs-2">
                                    操作
                                </div>
                            </div>
                            <?php 
   							//数据库名字
  							 include("../assets/php/conn.php");

  							 $sql1="select id,name,pwd from adm_login";
   							$res=mysqli_query($connID,$sql1);
	
	 						  // 关联数组
 							 while($row=mysqli_fetch_array($res)){
								echo '<div class="tablebody">';
								echo '<div class="row">';
								echo '<div class="col-xs-1 ">';
								printf ("%s",$row["id"]);
								echo '</div>';
								echo '<div class="col-xs-4 ">';
								printf ("%s",$row["name"]);
								echo '</div>';
								echo '<div class="col-xs-5 ">';
								printf ("%s",$row["pwd"]);
								echo '</div>';
								echo '<div class="col-xs-2">
                                <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#changeChar">修改</button>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteChar">删除</button>
                            </div>';
								echo '</div>';
								echo '</div>';
  							}
							// 释放结果集
							mysqli_free_result($res);
	 
							mysqli_close($connID);
							?>


                </div>
                <!--页码块-->
                <footer class="footer">
                    <ul class="pagination">
                        <li>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                            页
                        </li>
                        <li class="gray">
                            共20页
                        </li>
                        <li>
                            <i class="glyphicon glyphicon-menu-left">
                            </i>
                        </li>
                        <li>
                            <i class="glyphicon glyphicon-menu-right">
                            </i>
                        </li>
                    </ul>
                </footer>
                <!--增加管理员弹出窗口-->
                <div class="modal fade" id="addChar" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">添加管理员</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form class="form-horizontal" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <div class="form-group ">
                                            <label for="sName" class="col-xs-3 control-label">工号：</label>
                                            <div class="col-xs-6 ">
                                                <input type="" class="form-control input-sm duiqi" id="sName" placeholder="" name="id">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sLink" class="col-xs-3 control-label">管理员名：</label>
                                            <div class="col-xs-6 ">
                                                <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sOrd" class="col-xs-3 control-label">密码：</label>
                                            <div class="col-xs-6">
                                                <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="" name="pwd">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                            <button type="submit1" class="btn btn-xs btn-green" name="submit1" >保 存</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
<!--                        submit1-->
                        <?php
                        error_reporting(0);//加上error_reporting(0);就不会弹出警告了
                        //数据库名字
                        include("../assets/php/conn.php");
                        $id=$_GET['id'];
                        $name=$_GET['name'];
                        $pwd=$_GET['pwd'];
                        if(isset($_GET["submit1"])){
                            $sql2="insert into adm_login(id,name,pwd) values ('$id','$name','$pwd');";
                            $res=mysqli_query($connID,$sql2);
                            if($res){
                                echo"<script>alert('提交成功');location='admin.php';</script>";
                            }else{
                                echo"<script>alert('提交失败')location='admin.php';</script>";
                            }
                        }
                        ?>

                <!--修改管理员弹出窗口-->
                <div class="modal fade" id="changeChar" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">修改管理员信息</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form class="form-horizontal" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <div class="form-group ">
                                            <label for="sName" class="col-xs-3 control-label">工号：</label>
                                            <div class="col-xs-6 ">
                                                <input type="" class="form-control input-sm duiqi" id="sName" placeholder="" name="id4">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sLink" class="col-xs-3 control-label">管理员名：</label>
                                            <div class="col-xs-6 ">
                                                <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="" name="name4">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sOrd" class="col-xs-3 control-label">密码：</label>
                                            <div class="col-xs-6">
                                                <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="" name="pwd4">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                            <button type="submit6" class="btn btn-xs btn-green" name="submit6">保 存</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
<!--                        submit6-->
                        <?php
                        error_reporting(0);//加上error_reporting(0);就不会弹出警告了
                        //数据库名字
                        include("../assets/php/conn.php");
                        $id=$_GET['id4'];
                        $name=$_GET['name4'];
                        $pwd=$_GET['pwd4'];
                        if(isset($_GET["submit6"])){
                            $sql4="update adm_login set name = '$name',pwd ='$pwd' where id='$id';";
                            $res=mysqli_query($connID,$sql4);
                            if($res){
                                echo"<script>alert('提交成功');location='admin.php';</script>";
                            }else{
                                echo"<script>alert('提交失败')location='admin.php';</script>";
                            }
                        }
                        ?>
                <!--弹出删除权限警告窗口-->
                <div class="modal fade" id="deleteChar" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <form class="form-horizontal" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    确定要删除该权限？删除后不可恢复！
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sKnot" class="col-xs-3 control-label">工号：</label>
                                <div class="col-xs-8">
                                    <input type="" class="form-control input-sm duiqi" id="sKnot" placeholder="" name="id6">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                <button type="submit8" class="btn btn-xs btn-danger" name="submit8">保 存</button>
                            </div>
                        </div>
                        </form>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
<!--                        submit8-->
                        <?php
                        error_reporting(0);//加上error_reporting(0);就不会弹出警告了
                        //数据库名字
                        include("../assets/php/conn.php");
                        $id=$_GET['id6'];
                        if(isset($_GET["submit8"])){
                            $sql6="Delete from adm_login where id='$id';";
                            $res=mysqli_query($connID,$sql6);
                            if($res){
                                echo"<script>alert('提交成功');location='admin.php';</script>";
                            }else{
                                echo"<script>alert('提交失败')location='admin.php';</script>";
                            }
                        }
                        ?>
            </div>

                    <!--用户管理模块-->
                    <div role="tabpanel" class="tab-pane" id="user">
                        <div class="check-div form-inline">
                            <div class="col-xs-3">
                                <button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addUser">添加用户 </button>
                            </div>
                            <form  method="get" action="select_user.php">
                            <div class="col-xs-4">
                                <input type="text" class="form-control input-sm" placeholder="输入文字搜索" name="u_name">
                                <button class="btn btn-white btn-xs " type="submit5" name="submit5">查 询 </button>
                            </div>
                            </form>


                        </div>
                        <div class="data-div">
                                <div class="row tableHeader">
                                    <div class="col-xs-2 ">
                                        号码
                                    </div>
                                    <div class="col-xs-2">
                                        用户名
                                    </div>
                                    <div class="col-xs-2">
                                        电话
                                    </div>
                                    <div class="col-xs-2">
                                        密码
                                    </div>
                                    <div class="col-xs-2">
                                        操作
                                    </div>
                                </div>
                            <?php 
  								//session_start();
 								 //header("content-type:text/html;charset=utf-8");
  								//数据库名字
  								include("../assets/php/conn.php");
							//  if(isset($_REQUEST["submit"])){
    							$sql1="select id,name,phone,pwd from user_login";
    							$res=mysqli_query($connID,$sql1);
								// 关联数组
  								while($row=mysqli_fetch_array($res)){
								echo '<div class="tablebody">';
								echo '<div class="row">';
								echo '<div class="col-xs-2 ">';
								printf ("%s",$row["id"]);
								echo '</div>';
								echo '<div class="col-xs-2">';
								printf ("%s",$row["name"]);
								echo '</div>';
								echo '<div class="col-xs-2">';
								printf ("%s",$row["phone"]);
								echo '</div>';
								echo '<div class="col-xs-2">';
								printf ("%s",$row["pwd"]);
								echo '</div>';
								echo '<div class="col-xs-2">
                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#reviseUser">修改</button>
                                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteUser">删除</button>
                                    </div>';
									echo '</div>';
									echo '</div>';
  								}
								// 释放结果集
								mysqli_free_result($res);
								mysqli_close($connID);
							?>

                        </div>
                        <!--页码块-->
                        <footer class="footer">
                            <ul class="pagination">
                                <li>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    页
                                </li>
                                <li class="gray">
                                    共20页
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-menu-left">
                                    </i>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-menu-right">
                                    </i>
                                </li>
                            </ul>
                        </footer>

                        <!--弹出添加用户窗口-->
                        <div class="modal fade" id="addUser" role="dialog" aria-labelledby="gridSystemModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="gridSystemModalLabel">添加用户</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form class="form-horizontal" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                                <div class="form-group ">
                                                    <label for="sName" class="col-xs-3 control-label">号码：</label>
                                                    <div class="col-xs-8 ">
                                                        <input type="" class="form-control input-sm duiqi" id="sName" placeholder="" name="id2">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sLink" class="col-xs-3 control-label">姓名：</label>
                                                    <div class="col-xs-8 ">
                                                        <input type="" class="form-control input-sm duiqi" id="sLink" placeholder="" name="name2">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sOrd" class="col-xs-3 control-label">电话：</label>
                                                    <div class="col-xs-8">
                                                        <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="" name="phone2">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sKnot" class="col-xs-3 control-label">密码：</label>
                                                    <div class="col-xs-8">
                                                        <input type="" class="form-control input-sm duiqi" id="sKnot" placeholder="" name="pwd2">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                                    <button type="submit2" class="btn btn-xs btn-green" name="submit2">保 存</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
<!--                        submit2-->
                        <?php
                        error_reporting(0);//加上error_reporting(0);就不会弹出警告了
                        //数据库名字
                        include("../assets/php/conn.php");
                        $id=$_GET['id2'];
                        $name=$_GET['name2'];
                        $phone=$_GET['phone2'];
                        $pwd=$_GET['pwd2'];
                        if(isset($_GET["submit2"])){
                            $sql3="insert into user_login(id,name,phone,pwd) values ('$id','$name','$phone','$pwd');";
                            $res=mysqli_query($connID,$sql3);
                            if($res){
                                echo"<script>alert('提交成功');location='admin.php';</script>";
                            }else{
                                echo"<script>alert('提交失败')location='admin.php';</script>";
                            }
                        }
                        ?>

                        <!--弹出修改用户窗口-->
                        <div class="modal fade" id="reviseUser" role="dialog" aria-labelledby="gridSystemModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="gridSystemModalLabel">修改用户</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form class="form-horizontal" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                                <div class="form-group ">
                                                    <label for="sName" class="col-xs-3 control-label">号码：</label>
                                                    <div class="col-xs-8 ">
                                                        <input type="" class="form-control input-sm duiqi" id="sName" placeholder="" name="id5">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sLink" class="col-xs-3 control-label">用户名：</label>
                                                    <div class="col-xs-8 ">
                                                        <input type="" class="form-control input-sm duiqi" id="sLink" placeholder="" name="name5">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sOrd" class="col-xs-3 control-label">电话：</label>
                                                    <div class="col-xs-8">
                                                        <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="" name="phone5">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sKnot" class="col-xs-3 control-label">密码：</label>
                                                    <div class="col-xs-8">
                                                        <input type="" class="form-control input-sm duiqi" id="sKnot" placeholder="" name="pwd5">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                                    <button type="submit7" class="btn btn-xs btn-green" name="submit7">保 存</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
<!--                        submit7-->
                        <?php
                        error_reporting(0);//加上error_reporting(0);就不会弹出警告了
                        //数据库名字
                        include("../assets/php/conn.php");
                        $id=$_GET['id5'];
                        $name=$_GET['name5'];
                        $phone=$_GET['phone5'];
                        $pwd=$_GET['pwd5'];
                        if(isset($_GET["submit7"])){
                            $sql5="update user_login set name = '$name',phone='$phone',pwd ='$pwd' where id='$id';";
                            $res=mysqli_query($connID,$sql5);
                            if($res){
                                echo"<script>alert('提交成功');location='admin.php';</script>";
                            }else{
                                echo"<script>alert('提交失败')location='admin.php';</script>";
                            }
                        }
                        ?>

                        <!--弹出删除用户警告窗口-->
                        <div class="modal fade" id="deleteUser" role="dialog" aria-labelledby="gridSystemModalLabel">
                            <div class="modal-dialog" role="document">
                                <form class="form-horizontal" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            确定要删除该用户？删除后不可恢复！
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sKnot" class="col-xs-3 control-label">号码：</label>
                                        <div class="col-xs-8">
                                            <input type="" class="form-control input-sm duiqi" id="sKnot" placeholder="" name="id7">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                        <button type="submit9" class="btn  btn-xs btn-danger" name="submit9">保 存</button>
                                    </div>
                                </div>
                                </form>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
<!--                        submit9-->
                        <?php
                        error_reporting(0);//加上error_reporting(0);就不会弹出警告了
                        //数据库名字
                        include("../assets/php/conn.php");
                        $id=$_GET['id7'];
                        if(isset($_GET["submit9"])){
                            $sql7="Delete from user_login where id='$id';";
                            $res=mysqli_query($connID,$sql7);
                            if($res){
                                echo"<script>alert('提交成功');location='admin.php';</script>";
                            }else{
                                echo"<script>alert('提交失败')location='admin.php';</script>";
                            }
                        }
                        ?>
                    </div>

                    <!--订桌管理模块-->
                    <div role="tabpanel" class="tab-pane" id="scho">

                        <div class="check-div form-inline">
                            <div class="col-xs-3">
                                <button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addSchool">添加订桌信息 </button>
                            </div>
                            <form  method="get" action="select_resavation.php">
                            <div class="col-lg-4 col-xs-5">
                                <input type="text" class=" form-control input-sm " placeholder="输入电话号码搜索">
                                <button class="btn btn-white btn-xs " type="submit6" name="submit6">查 询 </button>
                            </div>
                            </form>
                            <div class="col-lg-3 col-lg-offset-1 col-xs-3" style="padding-right: 40px;text-align: right;float: right;">
                                <label for="paixu">排序:&nbsp;</label>
                                <select class="form-control">
                                    <option>时间</option>
                                    <option>人数</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="data-div">
                            <div class="row tableHeader">
                                <div class="col-xs-1 ">
                                    名字
                                </div>
                                <div class="col-xs-2 ">
                                    邮箱
                                </div>
                                <div class="col-xs-2">
                                    电话号码
                                </div>
                                <div class="col-xs-1">
                                    人数
                                </div>
                                <div class="col-xs-2">
                                    日期
                                </div>
                                <div class="col-xs-2">
                                    备注
                                </div>
                                <div class="col-xs-2">
                                    操作
                                </div>
                            </div>
                            <div class="tablebody">
							<?php
                        //session_start();
                       // header("content-type:text/html;charset=utf-8");
  							//数据库名字
  						include("../assets/php/conn.php");
  
						//  if(isset($_REQUEST["submit"])){
  
    					$sql1="select name,email,phone,people,date,massage from reservation";
    					$res=mysqli_query($connID,$sql1);
	   			        // 关联数组
                        while($row=mysqli_fetch_array($res)){
	
       						echo '<div class="row">';
							echo '<div class="col-xs-1 ">';
	                        printf ("%s",$row["name"]);
							echo '</div>';
							echo '<div class="col-xs-2 ">';
							printf ("%s",$row["email"]);
							echo '</div>';
							echo '<div class="col-xs-2 ">';
							printf ("%s",$row["phone"]);
							echo '</div>';
							echo '<div class="col-xs-1 ">';
							printf ("%s",$row["people"]);
							echo '</div>';
							echo '<div class="col-xs-2 ">';
							printf ("%s",$row["date"]);
							echo '</div>';
							echo '<div class="col-xs-2 ">';
							printf ("%s",$row["massage"]);
							echo '</div>';
       						echo ' <div class="col-xs-2">
                                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#reviseSchool">确认</button>
                                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteSchool">删除</button>
                                    </div>';
							echo '</div>';

							
 						 }
							// 释放结果集
						mysqli_free_result($res);
	 
						mysqli_close($connID);
                        ?>

                                
                            </div>

                        </div>
                        <!--页码块-->
                        <footer class="footer">
                            <ul class="pagination">
                                <li>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    页
                                </li>
                                <li class="gray">
                                    共20页
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-menu-left">
                                    </i>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-menu-right">
                                    </i>
                                </li>
                            </ul>
                        </footer>

                        <!--弹出添加订桌窗口-->
                        <div class="modal fade" id="addSchool" role="dialog" aria-labelledby="gridSystemModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="gridSystemModalLabel">姓名</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form class="form-horizontal" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                                <div class="form-group ">
                                                <label for="sName" class="col-xs-3 control-label">姓名：</label>
                                                <div class="col-xs-8 ">
                                                    <input type="" class="form-control input-sm duiqi" id="sName" placeholder="" name="name3">
                                                </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="sName" class="col-xs-3 control-label">邮件：</label>
                                                    <div class="col-xs-8 ">
                                                        <input type="email" class="form-control input-sm duiqi" id="sName" placeholder="" name="email3">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="sName" class="col-xs-3 control-label">电话：</label>
                                                    <div class="col-xs-8 ">
                                                        <input type="" class="form-control input-sm duiqi" id="sName" placeholder="" name="phone3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sLink" class="col-xs-3 control-label">多少人：</label>
                                                    <div class="col-xs-8 ">
                                                        <input type="" class="form-control input-sm duiqi" id="sLink" placeholder="" name="people3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sOrd" class="col-xs-3 control-label">日期：</label>
                                                    <div class="col-xs-8">
                                                        <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="" name="date3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sOrd" class="col-xs-3 control-label">备注：</label>
                                                    <div class="col-xs-8">
                                                        <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="" name="massage3">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                                    <button type="submit3" class="btn btn-xs btn-green" name="submit3">保 存</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
<!--                        submit3-->
                        <?php
                        error_reporting(0);//加上error_reporting(0);就不会弹出警告了
                        //数据库名字
                        include("../assets/php/conn.php");
                        $name=$_GET['name3'];
                        $email=$_GET['email3'];
                        $phone=$_GET['phone3'];
                        $people=$_GET['people3'];
                        $date=$_GET['date3'];
                        $massage=$_GET['massage3'];
                        if(isset($_GET["submit3"])){
                            $sql3="insert into reservation(name,email,phone,people,date,massage) values('$name','$email','$phone','$people','$date','$massage');";
                            $res=mysqli_query($connID,$sql3);
                            if($res){
                                echo"<script>alert('提交成功');location='admin.php';</script>";
                            }else{
                                echo"<script>alert('提交失败')location='admin.php';</script>";
                            }
                        }
                        ?>

                        <!--弹出修改用户窗口-->
                        <div class="modal fade" id="reviseSchool" role="dialog" aria-labelledby="gridSystemModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="gridSystemModalLabel">发送提示</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            确定要向该用户发送订餐成功信息？
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                        <button type="button" class="btn btn-xs btn-danger">确 认</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->

                        </div>
                        <!-- /.modal -->

                        <!--弹出删除订桌警告窗口-->
                        <div class="modal fade" id="deleteSchool" role="dialog" aria-labelledby="gridSystemModalLabel">
                            <div class="modal-dialog" role="document">
                                <form class="form-horizontal" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="gridSystemModalLabel">删除提示</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            确定要删除该地区？删除后不可恢复！
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sKnot" class="col-xs-3 control-label">电话号码：</label>
                                        <div class="col-xs-8">
                                            <input type="" class="form-control input-sm duiqi" id="sKnot" placeholder="" name="phone8">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                        <button type="submit10" class="btn btn-xs btn-danger" name="submit10">确 认</button>
                                    </div>
                                </div>
                                </form>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <!--                        submit9-->
                        <?php
                        error_reporting(0);//加上error_reporting(0);就不会弹出警告了
                        //数据库名字
                        include("../assets/php/conn.php");
                        $phone=$_GET['phone8'];
                        if(isset($_GET["submit10"])){
                            $sql8="Delete from reservation where phone='$phone';";
                            $res=mysqli_query($connID,$sql8);
                            if($res){
                                echo"<script>alert('提交成功');location='admin.php';</script>";
                            }else{
                                echo"<script>alert('提交失败')location='admin.php';</script>";
                            }
                        }
                        ?>
                    </div>

                    

        </div>
    </div>
</div>
<script src="js/jquery.nouislider.js"></script>

<!-- this page specific inline scripts -->
<script>
                                                //min/max slider
                                                function huadong(my, unit, def, max) {
                                                    $(my).noUiSlider({
                                                        range: [0, max],
                                                        start: [def],
                                                        handles: 1,
                                                        connect: 'upper',
                                                        slide: function() {
                                                            var val = Math.floor($(this).val());
                                                            $(this).find(".noUi-handle").text(
                                                                    val + unit
                                                                    );
                                                            console.log($(this).find(".noUi-handle").parent().parent().html());
                                                        },
                                                        set: function() {
                                                            var val = Math.floor($(this).val());
                                                            $(this).find(".noUi-handle").text(
                                                                    val + unit
                                                                    );
                                                        }
                                                    });
                                                    $(my).val(def, true);
                                                }
                                                huadong('.slider-minmax1', "分钟", "5", 30);
                                                huadong('.slider-minmax2', "分钟", "6", 15);
                                                huadong('.slider-minmax3', "分钟", "10", 60);
                                                huadong('.slider-minmax4', "次", "2", 10);
                                                huadong('.slider-minmax5', "天", "3", 7);
                                                huadong('.slider-minmax6', "天", "8", 10);
</script>
</body>

</html>