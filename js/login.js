$(document).ready(function(){
	$("#login").click(function(event) {
		var name = $("#username").val();
		var pwd = $("#password").val();
		if(name=="")
		{
		   alert("用户名不能为空！");
		}
		else if(pwd=="")
		{
		   alert("密码不能为空！");
		}
		else if(pwd!="" && pwd.length < 6){
			alert("密码不能小于6位！");
		}
		else if(name!="" && pwd !="" && pwd.length >= 6)
		{
			if(name == "03016330" && pwd == "000000"){
				alert("登录成功！");
				window.location.href="home.html";
			}
			else{
				alert("用户名或密码错误！");
				window.location.href = "index.html";
			}
			var user = $("input[type='radio']:checked").val();
			var type = 0;
			if(user == "学生"){
				type = 0;
			}
			else if(user == "项目负责人"){
				type = 2;
			}
	
			var data = {
					"user":name,
					"pwd":pwd,
					"type":type
			};

		$.post("/practice_system/logintest",data,function(data, textStatus, xhr)
		{

			if(textStatus=="success")
			{
				if(data[0]["returnflag"]=="1")
				{
					setCookie("user",name,1);
					setCookie("SESSIONID",data[0]["SESSIONID"],1);
					setCookie("type",type,1);
					switch (type) {
						case 0:   
							window.location = "practice_system/html/TeacherIndex.html";
							break;
						case 1:
							
							window.location = "practice_system/html/TeacherIndex.html";
							break;
						case 2:
							
							window.location = "practice_system/html/ProjectorIndex.html";
							break;
						default:
							alert("未知错误!");
							// statements_def
							break;
					}
				}
				else
				{
					alert("用户名或密码错误！");
				}
			}
			else
			{
				alert("服务器错误！");
			}
		});

		}
	});
});