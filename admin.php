<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width,initial-scale=1" />
    <title>ZHUYU</title>
    <link href="./style.css" type="text/css" rel="stylesheet"/>
    <link href="./flexbox.css" type="text/css" rel="stylesheet" />
    <!--<script rel="script" type="application/javascript" src="./js/errIEbrowser.js"></script>-->
    <script rel="script" type="application/javascript" src="./js/scrollFunc.js"></script>
<<<<<<< HEAD
    <script src="js/jquery-3.2.1.js "></script>
    <script type="text/javascript" src="./ckEditor/ckeditor.js "></script>
=======
    <script rel="script" type="application/javascript" src="./js/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
>>>>>>> origin/master

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
            <li class="nav-list-item" id="nav-list-art"><a href="javascript:void (0)">插入文字</a></li>
            <li class="nav-list-item" id="nav-list-img"><a href="javascript:void (0)">插入图片</a></li>
        </ul>
    </nav>

    <main class="flex-enable flex-one" style="padding:40px 2px">
        <div class="main-input" id="art-input" style="max-width: 1000px">  <!--插入文章-->
            <p class="cms-title">插入文字</p>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <textarea rows="30" cols="50" name="editor01"></textarea>
                <script type="text/javascript">CKEDITOR.replace('editor01');</script>
                <label for="submit_editor" class="cms_label">提交</label>
                <input type="submit" id="submit_editor"/>
            </form>
        </div>


        <div class="main-input" id="img-input" style="display: none ;max-width: 1000px"><!--插入图片-->
            <p class="cms-title">插入图片</p>
<<<<<<< HEAD
            <div id="upload-img">
                <img id="upload-img-demo" src="./img/camera.png" />
            </div>
            <form enctype="multipart/form-data" method="post">
                <label  class="cms_label" for="previews_img_input"  style="margin-bottom: 20px;width: 50%;">选择</label>
                <input type="file" name="img_file" id="previews_img_input" onchange="showPreview(this)" style="opacity: 0;"/>
                <label  for="submit_img_input" class="cms_label" style="width: 50%;">提交</label>
                <input type="button" name="upload_button" class="button" id="submit_img_input" />
            </form>
        </div>
    </main>

    <!--图片预览-->
    <script>
        function showPreview(source) {
            console.log(source); //获取当前input元素
            var file = source.files[0];
            if(window.FileReader){
                var imgFReader = new FileReader();
                //限定上传文件的类型
                var sReg = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
                if(!sReg.test(file.type)){
                    alert("只允许上传图片文件");
                    return false;
                }
                imgFReader.onloadend = function(e) {
                    document.getElementById("upload-img-demo").src = e.target.result;
                };

                imgFReader.readAsDataURL(file);
            }
            else {
                alert("Not supported by your browser!");
            }
        }
    </script>

    <!--图片上传-->
    <script>
        document.getElementById("submit_img_input").onclick = function() {
            /* FormData 表单数据类 */
            var fd = new FormData();
            var xhr = new XMLHttpRequest();
            fd.append("upload", 1);
            /* 把文件添加到表单里 */
            fd.append("previews_img_input", document.getElementById("previews_img_input").files[0]);
            xhr.open("post", "upload.php", true);
            xhr.onload = function () {
                console.log(xhr.responseText);
            };
            xhr.send(fd);
            alert("上传成功");
        }
    </script>
    
=======
                <div id="upload-img">
                    <img id="upload-img-demo" src="./img/camera.png" />
                </div>
                <label  class="cms_label" for="previews_img_input"  style="margin-bottom: 20px;width: 50%;">选择</label>
                <input type="file" name="img_file" id="previews_img_input" onchange="showPreview(this)" style="opacity: 0;"/>
                <label  for="submit_img_input" class="cms_label" style="width: 50%;">提交</label>
                <input type="submit" name="upload_button" class="button" id="submit_img_input" />
        </div>
    </main>


    <!-- 上传图片及预览 -->
    <script>

        function showPreview(source) {
            console.log(source);//就是这个input元素
            var file = source.files[0];
            if(window.FileReader){
                var oFReader = new FileReader();
                //如果要限定上传文件的类型，可以通过文件选择器获取文件对象并通过type属性来检查文件类型
                var sReg = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

                if(!sReg.test(file.type)){
                    alert("只允许上传图片文件");
                }
                oFReader.onloadend = function(e) {
                    document.getElementById("upload-img-demo").src = e.target.result;
                };

                oFReader.readAsDataURL(file);
            }
        }
        if(window.FileReader) {
           // var fr = new FileReader();


        }
        else {
            alert("Not supported by your browser!");
        }
    </script>



>>>>>>> origin/master
    <!-- 插入文章和插入图片的切换 -->
    <script>
        var art=document.querySelector('#nav-list-art');
        var img=document.querySelector('#nav-list-img');
        var art_display=document.querySelector('#art-input');
        var img_display=document.querySelector('#img-input');
        art.onclick=function () {
            img_display.style.display='none';
            art_display.style.display='';
        }
        img.onclick=function () {
            img_display.style.display='';
            art_display.style.display='none';
        }

    </script>

    <!-- menu展开,缩放按钮脚本 -->
    <script>
        var btn = document.querySelector('.menu-btn-icon');
        var menu = document.querySelector('.nav-container-list');
        var menuIsCollapse = true;
        btn.onclick = function() {
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