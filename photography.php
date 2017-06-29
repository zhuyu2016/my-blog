<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width,initial-scale=1"/>
    <title>相片</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <link href="flexbox.css" type="text/css" rel="stylesheet" />
    <script rel="script" type="application/javascript" src="js/scrollFunc.js"></script>
    <script src="./js/jquery-3.1.1.min.js"></script>
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
            <li class="nav-list-item"><a href="./article.php">文字</a></li>
            <li class="nav-list-item"><a href="./photography.php">相片</a></li>
            <li class="nav-list-item"><a href="./admin.php">关于</a></li>
        </ul>
    </nav>
    <header class="flex-enable">
        <p >相片</p>
    </header>


    <main class="flex-enable flex-justify-space-around flex-wrap">
        <!-- 对数据表'img'里的所有图片遍历-->
        <?php
        include_once 'conn.php';
        $query_sql="SELECT * FROM img ORDER BY img_id DESC";
        $result=$conn->query($query_sql);
        if(!$result) exit('查询数据错误：'.mysqli_error());

        while ($gb_array=mysqli_fetch_array($result)){
            $this_img=$gb_array['img_name'];
            ?>
            <div class="main-photography" style="background-image: url('./upload/<?=$gb_array['img_name']?>')"></div>
            <?php
        }

        ?>
    </main>

    <!-- 点击图片放大 -->
    <script>
        $(document).ready(function () {
            $(".main-photography").click(function () {
                var bg_src = $(this).css("background-image").split("\"")[1];
                $("body").append('<div class="overlay"><table class="overlay_table"><tr><td><img class="overlay-img" src="" /></td></tr></table></div>');
                $(".overlay-img").attr("src",bg_src);
                overlay_remove();
            });
            function overlay_remove() {
                $(".overlay").click(function(){
                    $(this).remove();
                    $(this>img).remove();
                })
            }

        })
    </script>

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
        <p>© 2017 NO RIGHTS RESERVED.&nbsp;&nbsp;DESIGN BY ZHUYU.</p>
    </footer>

</div>
</body>

</html>