<?php 

function alert($tip = "", $type = "", $url = "") {
    $js = "<script>";
    if ($tip)
        $js .= "alert('" . $tip . "');";
    switch ($type) {
        case "close" : //关闭页面
            $js .= "window.close();";
            break;
        case "back" : //返回
            $js .= "history.back(-1);";
            break;
        case "refresh" : //刷新
            $js .= "parent.location.reload();";
            break;
        case "top" : //框架退出
            if ($url)
                $js .= "top.location.href='" . $url . "';";
            break;
        case "jump" : //跳转
            if ($url)
                $js .= "window.location.href='" . $url . "';";
            break;
        default :
            break;
    }
    $js .= "</script>";
    echo $js;
    if ($type) {
        exit();
    }
}

$servername = "localhost:8880";
$username = "root";
$password = "w456456.";
$dbname = "graduater";
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$name = $phonenum = "";
$name = $_POST["name"];
$phonenum = $_POST["phonenum"];

session_start();

//$sql = "UPDATE student SET name={$name} WHERE username=03016303";
$sql = "INSERT INTO student (username) 
VALUES ('03016304')";
mysqli_query($conn,"SET NAMES utf8");
$value = mysqli_query($conn,"UPDATE student SET name='$name',phonenum={$phonenum} WHERE username={$_SESSION['username']}");
$conn->close();
if($value){
alert("修改成功！",$type="jump",'change.html');
}else{
alert("出现故障！",$type="jump",'change.html');
}




?>