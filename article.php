<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width,initial-scale=1"/>
    <title>文字</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <link href="flexbox.css" type="text/css" rel="stylesheet" />
    <script rel="script" type="application/javascript" src="js/scrollFunc.js"></script>
    <script src="http://lib.sinaapp.com/js/jquery/3.1.0/jquery-3.1.0.js "></script>

    <!--Bootstrap-->


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

    <header class="flex-enable">
        <p >文字</p>
    </header>

    <main>

        <?php
        ///////////
        //数据库连接
        include_once 'conn.php';
        mysqli_query($conn,"set names 'utf8'");
        ///////////
        //假设取出list表中所有数据
        $perNumber = 2; // 每页显示的记录数
        $maxNumber = 3; // 当前页左右显示的页码数
        @$page = $_GET ['page']; // 获得当前的页面值
        $sql_count= "select count(*) from article ";
        $count = mysqli_query($conn,$sql_count); // 获得记录总数

        $result = mysqli_fetch_array($count);
        $totalNumber = $result[0];
        $totalPage = ceil($totalNumber/$perNumber); // 计算出总页数
        if (!isset ($page)) {
            $page = 1;
        } // 如果没有值,则赋值1
        $startCount = ($page - 1) * $perNumber; // 分页开始,根据此方法计算出开始的记录

        // 根据前面的计算出开始的记录和记录数
        $sqq="select * from article ORDER by article_id desc limit $startCount,$perNumber";
        $res=mysqli_query($conn,$sqq);
        $num=mysqli_num_rows($res);

        if($num>0){
            while ($gb_array=mysqli_fetch_array($res)){
                ?>
                <div><p class="main_title"><?=$gb_array["art_title"] ?></p></div>
                <div class="main_body"><?=$gb_array["art_body"] ?></div>
                <hr class="hr"/>
            <?php }}
        else {?>
            <p>暂无记录</p>
        <?php } ?>


        <!-- 页码显示 -->
        <ul class="pagination">
            <?php
            //上一页
            if ($page != 1) {
                $pageMinus = $page-1;
               @ $pageShow.="<li><a href='article.php?page=$pageMinus'>«</a></li>";
            }


            //当前页左边
            for($i=$maxNumber;$i>=1;$i--){
                if(($page - $i) < 1 ) { // 当前页左边花最多 $maxNumber 个数字
                    continue;
                }
                $lastPage=$page-$i;
                $pageShow.="<li><a href='article.php?page=$lastPage'>$lastPage</a></li>";

            }
            //当前页
            $pageShow.="<li><a  href='article.php?page=$page' style='color: black'>$page</a></li>";


            //当前页右边
            for($i=1;$i<=$maxNumber;$i++){
            if(($page + $i) > $totalPage ) { // 当前页右边花最多 $maxNumber 个数字
                break;
            }

                $lastPage=$page+$i;
                $pageShow.="<li><a href='article.php?page=$lastPage'>$lastPage</a></li>";


            }

            //下一页
            if ($page!=$totalPage) {
                $pagePlus = $page+1;
                $pageShow.="<li><a href='article.php?page=$pagePlus'>»</a></li>";
            }

            echo $pageShow;
            mysqli_close($conn);
            ?>
        </ul>

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