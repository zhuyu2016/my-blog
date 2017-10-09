<?php
/**
 * Created by PhpStorm.
 * User: zhuyu
 * Date: 2017/6/29
 * Time: 16:34
 */
include_once 'conn.php';
$conn->query('SET NAMES UTF8');
if(isset($_POST["art_title"])) {

    if ($title = "") {
        echo('<script>alert("标题不能为空！")</script>');
    } else {
        $title = $_POST["art_title"];
        $body = $_POST["editor01"];
        $createtime = date("Y-m-d H:i:s");
        $insert_sql = "INSERT INTO article(post_time,art_title,art_body) VALUES ('" . $createtime . "','" . $title . "','" . $body . "')";
        mysqli_query($conn, "set names 'utf8'");
        if (mysqli_query($conn, $insert_sql)) {
            echo('<script>alert("' . $title . '")</script>');

        } else {
            echo('<script>alert("提交失败！")</script>');
        }
    }
} else{
    echo('<script>alert("ERROR")</script>');
}
header('Location:article.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"  name="viewport" content="width=device-width,initial-scale=1" />
</head>
<body>
</body>
</html>