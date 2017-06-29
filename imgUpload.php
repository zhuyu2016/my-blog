<?php

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
