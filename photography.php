<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width,initial-scale=1"/>
    <title>相片</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <link href="flexbox.css" type="text/css" rel="stylesheet" />
    <script rel="script" type="application/javascript" src="js/scrollFunc.js"></script>
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
            <li class="nav-list-item"><a href="./cms.php">关于</a></li>
        </ul>
    </nav>
    <header class="flex-enable">
        <p >相片</p>
    </header>

    <!-- 点击图片放大 -->
    <script>
        function expandPhoto() {
            var overlay = document.createElement("div");
            overlay.setAttribute("id","overlay");    //用于标识覆盖层
            overlay.setAttribute("class","overlay"); //用于添加覆盖层的样式
            document.body.appendChild(overlay);

            var img =document.createElement("img");
            img.setAttribute("class","overlay-img");
            img.src = this.getAttribute("src");
            document.getElementById("overlay").appendChild(img);

            img.onclick= restore;
        }

        function restore(){
            document.body.removeChild(document.getElementById("overlay"));
            document.body.removeChild(document.getElementById("img"));
        }

        window.onload = function(){
            var imgs = document.getElementsByTagName("img");
            imgs[0].focus();
            for(var i = 0;i<imgs.length;i++){
                imgs[i].onclick = expandPhoto;
                imgs[i].onkeydown = expandPhoto;
            }

        }




    </script>
    
    <main class="flex-enable flex-justify-space-around flex-wrap">
        <div class="main-photography">
            <img src="http://e.hiphotos.baidu.com/image/pic/item/77094b36acaf2edde7684cc38e1001e93901937a.jpg" />
        </div>
        <div class="main-photography">
            <img src="./img/wallpaper.jpg" />
        </div>
        <div class="main-photography">
            <img src="http://e.hiphotos.baidu.com/image/pic/item/77094b36acaf2edde7684cc38e1001e93901937a.jpg" />
        </div>
        <div class="main-photography">
            <img src="http://e.hiphotos.baidu.com/image/pic/item/77094b36acaf2edde7684cc38e1001e93901937a.jpg" />
        </div>
        <div class="main-photography">
            <img src="http://e.hiphotos.baidu.com/image/pic/item/77094b36acaf2edde7684cc38e1001e93901937a.jpg" />
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
        <p>© 2017 NO RIGHTS RESERVED.&nbsp;&nbsp;DESIGN BY ZHUYU.</p>
    </footer>

</div>
</body>

</html>