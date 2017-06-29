<?php
/**
 * Created by PhpStorm.
 * User: zhuyu
 * Date: 2017/5/26
 * Time: 14:17
 */
$conn = mysqli_connect("localhost","root","","test");
if(!$conn)
{
    die('Could not connect:'.mysqli_error($conn));
}
$conn ->set_charset('utf-8');