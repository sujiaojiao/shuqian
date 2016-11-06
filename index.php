<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>
<?php
	define("APP_PATH",realpath(__DIR__));//当前应用程序目录
	//引入函数库
	require_once "index1.php";	
	$username = $_POST['username'];
	$userphone = $_POST['userphone'];
	$Btn = $_POST['submit'];
	function initDbConnect(){
		
		global $link;
		$link = mysqli_connect("localhost","root","","sujiao");
		
		$sql = "INSERT INTO user(u_name,u_phone) VALUES('张wu','18999999000')";
		mysqli_query($link,"set names utf8");
	    $result = mysqli_query($link,$sql);
	    print_r($result) ; 		
    		 if(mysqli_connect_errno()){
    		       	die("连接失败:".mysqli_connect_error($link));
    		   }
    		   if($result){
				echo "lianjie成功";
			}else{
				echo "lianjie失败";
			}
//  		   mysqli_query($link,"set names utf8");
    		       
	}
	if($Btn){
		initDbConnect();
}
	

?>
</body>
</html>