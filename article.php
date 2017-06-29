<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width,initial-scale=1"/>
    <title>文字</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <link href="flexbox.css" type="text/css" rel="stylesheet" />
    <script rel="script" type="application/javascript" src="js/scrollFunc.js"></script>
    <script src="http://lib.sinaapp.com/js/jquery/3.1.0/jquery-3.1.0.js "></script>
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
            <li class="nav-list-item"><a href="./article.php">文字</a></li>
            <li class="nav-list-item"><a href="./photography.php">相片</a></li>
            <li class="nav-list-item"><a href="./cms.php">关于</a></li>
        </ul>
    </nav>

    <header class="flex-enable">
            <p >文字</p>
    </header>

    <main>
            <p class="main-title">九</p>
            <p>
                细数一下，我好像挺久没更新博客了，虽然也没啥人看，但也得例行一下，对吧。
                暑假刚刚开始了三四天，见完了该见的人，赴完了该赴， 是时候写点最近几个月心里所想的了。
                我从懂事以来，一直患有一个致命的，令人反感的坏毛病，就是总喜欢教育别人，或者是老爱对别人指指点点。如果对方是熟人还好，若是关系不熟的话就闹尴尬了。即使你的出发点是好的，说出来的话是对的，对方也很大几率会不爽。也许他不喜欢被打断，也许他不想被教育，也许他根本就不喜欢你这个人。确实，这事儿你不不能怪他，每个人都有拒绝被教育的权利。即使你是对的，但身为一个十几二十岁的小屁孩，老是主动地去给别人指点江山，这事儿不能算错，但着实不妥。
                认识到这个问题的严重性了，我也就减少了在公共场合里提出自己建议的频率，除非别人主动问到。所以一些很久没见过我的人会觉得这小子竟然沉默起来了，听说最近流行「忧郁」风……哈哈。
                为了改掉这个坏毛病，我决定短时间（一两年内）不写任何一篇「指点江山」、「教育他人」的文章，我写小说。
                写小说总可以吧？既然教育别人不妥，那我改写故事。小说有一个好处，就是你爱咋写就咋写，你可以述说不喜欢的一切，你还可以讽刺谁谁谁，夫复何求呀。
                这个博客网站可能在能遇见的一两年内不能更新，看到这篇文章的你大可忘记这个域名了。因为我基本没对外推广这个博客网站，所以也没多少读者。基于这个原因，「停更」就来得更从容了。
                在「停更」的日子里，我会汲取更多自己喜欢的东西，完成人生的第一部小说，然后把它塞进抽屉里。
                永远记得，你能看到这篇文章，那是我难能可贵的幸运。
                细数一下，我好像挺久没更新博客了，虽然也没啥人看，但也得例行一下，对吧。
                暑假刚刚开始了三四天，见完了该见的人，赴完了该赴，是时候写点最近几个月心里所想的了。
                我从懂事以来，一直患有一个致命的，令人反感的坏毛病，就是总喜欢教育别人，或者是老爱对别人指指点点。如果对方是熟人还好，若是关系不熟的话就闹尴尬了。即使你的出发点是好的，说出来的话是对的，对方也很大几率会不爽。也许他不喜欢被打断，也许他不想被教育，也许他根本就不喜欢你这个人。确实，这事儿你不不能怪他，每个人都有拒绝被教育的权利。即使你是对的，但身为一个十几二十岁的小屁孩，老是主动地去给别人指点江山，这事儿不能算错，但着实不妥。
                认识到这个问题的严重性了，我也就减少了在公共场合里提出自己建议的频率，除非别人主动问到。所以一些很久没见过我的人会觉得这小子竟然沉默起来了，听说最近流行「忧郁」风……哈哈。
                为了改掉这个坏毛病，我决定短时间（一两年内）不写任何一篇「指点江山」、「教育他人」的文章，我写小说。
                写小说总可以吧？既然教育别人不妥，那我改写故事。小说有一个好处，就是你爱咋写就咋写，你可以述说不喜欢的一切，你还可以讽刺谁谁谁，夫复何求呀。
                这个博客网站可能在能遇见的一两年内不能更新，看到这篇文章的你大可忘记这个域名了。因为我基本没对外推广这个博客网站，所以也没多少读者。基于这个原因，「停更」就来得更从容了。
                在「停更」的日子里，我会汲取更多自己喜欢的东西，完成人生的第一部小说，然后把它塞进抽屉里。
                永远记得，你能看到这篇文章，那是我难能可贵的幸运。
                2016/7/19 家中
            </p>
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