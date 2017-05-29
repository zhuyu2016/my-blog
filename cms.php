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
    <script rel="script" type="application/javascript" src="./js/scrollFunc.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
            <li class="nav-list-item"><a href="index.php">首页</a></li>
            <li class="nav-list-item"><a href="#">插入文字</a></li>
            <li class="nav-list-item"><a href="#">插入图片</a></li>
        </ul>
    </nav>

    <main class="" style="padding:40px 2px">
        <div class="art-input">
            <p class="cms-title">插入文字</p>
            <form>
                <textarea rows="30" cols="50" name="editor01"></textarea>
                <script type="text/javascript">CKEDITOR.replace('editor01');</script>
                <button type="submit" class="button">提交</button>
            </form>
        </div>
        <div class="img-input">
            <p class="cms-title">插入图片</p>
            <form>
                <div id="upload-img"></div>
                <button type="submit" class="button">提交</button>
            </form>
        </div>
    </main>
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