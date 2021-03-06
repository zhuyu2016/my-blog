<?
include 'conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width,initial-scale=1" />
    <title>ZHUYU</title>
    <link href="./style.css" type="text/css" rel="stylesheet"/>
    <link href="./flexbox.css" type="text/css" rel="stylesheet" />
    <!--<script rel="script" type="application/javascript" src="./js/errIEbrowser.js"></script>-->
    <script src="http://lib.sinaapp.com/js/jquery/3.1.0/jquery-3.1.0.js "></script>
    <script rel="script" type="application/javascript" src="./js/scrollFunc.js"></script>
    <style>

    </style>
</head>
<body>
<div class="wrapper">
    <nav>
        <!-- menu展开,缩放按钮 -->
        <div class="menu-btn">
            <a href="javascript:void (0)" class="menu-btn-icon btn-icon-menu"></a>

            <a  class="menu-btn-icon menu-title"  href="index.php"></a>
            <div class="clearfix"></div>
        </div>

        <ul class="nav-container-list ">
            <li class="nav-list-item"><a href="./index.php">首页</a></li>
            <li class="nav-list-item"><a href="./article.php?page=1">文字</a></li>
            <li class="nav-list-item"><a href="./photography.php">相片</a></li>
            <li class="nav-list-item"><a href="./admin.php">关于</a></li>
        </ul>
    </nav>
    <header style="background-size: auto;" class="flex-enable flex-one" >

    </header>

    <!-- menu展开,缩放按钮脚本 -->
    <script>

        var btn = document.querySelector('.menu-btn-icon');
        var menu = document.querySelector('.nav-container-list');
        var menuIsCollapse = true;
        btn.onclick = function () {
            menuIsCollapse = !menuIsCollapse;
            if(menuIsCollapse){
                menu.style.display='none';
                btn.classList.remove('btn-icon-close');
                btn.classList.add('btn-icon-menu');
            } else {
                menu.style.display = 'block';
                btn.classList.remove('btn-icon-menu');
                btn.classList.add('btn-icon-close');
            }
        }
    </script>

    <!-- 获取当前视口宽度 -->
    <script>
        var mql = window.matchMedia("(min-width:480px)");
        mql.addListener(mediaChangeHandler);
        mediaChangeHandler(mql);
        function mediaChangeHandler(mql) {
            if(mql.matches){
                menu.style.display = '';
            }
            else{
                if (menuIsCollapse){
                    menu.style.display = 'none';
                }
                else{
                    menu.style.display ='';
                    btn.classList.add('btn-icon-menu');
                }
            }
        }
    </script>
    <footer>
        <p>© 2017 NO RIGHTS RESERVED.&nbsp;&nbsp;&nbsp;DESIGN BY ZHUYU.</p>
    </footer>

</div>
</body>

</html>