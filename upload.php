<?php
<<<<<<< HEAD

if (isset($_POST['upload'])) {

    move_uploaded_file($_FILES['previews_img_input']['tmp_name'], 'upload/' . time() . '_' . $_FILES['previews_img_input']['name']);

    include_once 'conn.php';
    $img_name = time() . '_' . $_FILES['previews_img_input']['name'];
    $createtime = date("Y-m-d H:i:s");

    $insert_sql = "INSERT INTO img(img_name,createtime)VALUE('$img_name','$createtime') ";
    if (!mysqli_query($conn, $insert_sql)) {
        echo '<script>alert("error")</script>';};

    mysqli_close($conn);
    exit;
}
=======
/**
 * Created by PhpStorm.
 * User: zhuyu
 * Date: 2017/6/19
 * Time: 16:36
 */

//控制上传文件的类型，大小
if($_FILES["img_file"]["error"]){
    echo $_FILES["file"]["error"];
}
else{
    if(($_FILES["img_file"]["type"]=="image/jpeg" || $_FILES["img_file"]=="image/png") && $_FILES["img_file"]["size"]<1024000){
        //找到文件存放的位置
        $filename = "./img/".date("YmdHis").$_FILES["img_file"]["name"];
        //转换编码格式
        $filename=iconv("UTF-8","gb2312",$filename);
        //判断文件是否存在
        if(file_exists($filename)){
            echo "此文件已存在！";
        }
        else{
            //保存文件
            move_uploaded_file($_FILES["img_file"]["tmp_name"],$filename);
        }

    }
    else{
        echo "文件类型不正确！";
    }
}
>>>>>>> origin/master
