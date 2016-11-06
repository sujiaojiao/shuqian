<?php
//	define("APP_PATH",realpath(__DIR__));//当前应用程序目录
	
	$username = $_POST['username'];
	$userphone = $_POST['userphone'];
    function initDbConnect(){
      global $username;		
      global $userphone;
    		$link = mysqli_connect("localhost","root","","sujiao");
	    if(mysqli_connect_errno()){
		   	 die(mysqli_connect_error());
	   }
		 	mysqli_query($link,"set names utf8");
		$sql = "INSERT INTO user(u_name,u_phone) VALUES('$username','$userphone')";
		if(mysqli_query($link,$sql)){
			echo "<script type='text/javascript'>alert('登陆成功！');
//				window.location.href = '1.html';
			</script>";
		}else{
			echo "<script type='text/javascript'>alert('登陆失败！');
//				window.location.href = '1.html';
			</script>";
		}        
	}
		

		initDbConnect();

	

?>