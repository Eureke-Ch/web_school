<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>能源与环境学院毕业生记录</title> 
<style>

body {
    margin: 0;
}
.clear{
        clear:both;
    }
.topmenu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #777;
}
.topmenu li {
    float: left;
}
.topmenu li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}
.topmenu li a:hover {
    background-color: #222;
}
.topmenu li a.active {
    color: white;
    background-color: #4CAF50;
}

</style>
</head>
<body>
    <script type="text/javascript" src="me.js" ></script>
<ul class="topmenu">
  <li><a href="home.html">首页</a></li>
  <li><a href="info.php" class="active">个人信息查看</a></li>
  <li><a href="change.html">个人信息修改</a></li>
  <li><a href="search.php">信息查询</a></li>
  <li><a href="pwdchange.html">密码修改</a></li>
</ul>
<!------------------------------------------------------------------------------------------------------>
<h2 align="center">个人信息表</h2>

<table style="border: 1px;margin: 0 auto;background: snow" width="50%" cellpadding="5" cellspacing="0" >

    <tr>

        <td >姓名</td>
        <td><type="text" style="width:95%">
	<?php 
	session_start();
	echo $_SESSION['name'];
	?>
       </td>

        <td>性别</td>
        <td><type="text" style="width:95%">
	<?php 
	echo $_SESSION['sex'];
	?>
       </td>
   </tr>
    <tr>

        <td>手机号码</td>
       <td><type="text" style="width:95%">
	<?php 
	echo $_SESSION['phonenum'];
	?>
       </td>

        <td>电子邮箱</td>
        <td><type="text" style="width:95%">28183773@163.com</td>
    </tr>

    <tr>

        <td>毕业时间</td>
        <td><style="width: 95%; " type="text">2020</td>

        <td>工作职位</td>
        <td><style="width: 95%; " type="text">经理</td>
    </tr>

    <tr>
        <td>工作城市</td>
        <td><style="width: 95%; " type="text">
	<?php 
	echo $_SESSION['work_city'];
	?>
	</td>
        <td>目前月薪</td>
        <td><style="width: 95%; " type="text">20000</td>
    </tr>
</table>

</body>
</html>