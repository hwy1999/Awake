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
        error_reporting(0);//加上error_reporting(0);就不会弹出警告了
        //数据库名字
        include("../assets/php/conn.php");
        $u_name=$_GET['u_name'];
        if(isset($_GET["submit6"])){
            $sql5="select * from reservation where phone like '%$u_name%';";
            $res=mysqli_query($connID,$sql5);
            if($res){

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
            }else{
                echo"<script>alert('无此用户');</script>";
            }// 释放结果集
            mysqli_free_result($res);
            mysqli_close($connID);
        }
        ?>
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
