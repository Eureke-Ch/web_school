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

$username = $password = "";
$username = $_POST["username"];
$password = $_POST["password"];
session_start();
$_SESSION['username']=$username;
if($username=="")
	{
		alert("用户名不能为空!  ",$type="jump",'login.html');
	}elseif($password=="")
	{
		alert("密码不能为空！",$type="jump",'login.html');
	}

$sql = "SELECT * FROM student WHERE username=$username";
mysqli_query($conn,"SET NAMES utf8");
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$_SESSION['name']=$row['name'];
$_SESSION['sex']=$row['sex'];
$_SESSION['work_city']=$row['work_city'];
$_SESSION['phonenum']=$row['phonenum'];




	if($row['password']==$password and strlen($row['password']) == strlen($password) and strlen($row['password']) != ""){
		
		$conn->close();

		header("location:home.html") ;
	}else{
		alert('用户名或密码错误！',$type="back",'login.html');
	}

$conn->close();
?>