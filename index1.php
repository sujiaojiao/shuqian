<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>数钱游戏</title>
    <style>
#username,
#userphone {
  border: 1px red solid;
  border-radius: 8px;
  height: 30px;
  width: 48%;
  outline-style: none;
  position: absolute;
  z-index: 4;
  left: 23%;
  background: #f0bc1f;
}
#username {
  top: 120px;
}
#userphone {
  top: 160px;
}
#btn {
  width: 40%;
  height: 40px;
  position: absolute;
  top: 200px;
  left: 27%;
  z-index: 4;
  background: url(img/p1_sub.png);
  -webkit-background-size: 100% 100%;
  border-radius: 12px;
  outline-style: none;
}
    </style>
   <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/animate.css" />
    
</head>
<body>
	<div class="wrap">
<!--第一页-->
		<div class="p1" id="p1">
			<div id="home_page">
				<img class="challenge animated fadeInDown" src="img/tiaozhan.png" />
				<img class="yingqu animated swing" src="img/yingqu.png" />
				<img class="start_game animated infinite pulse" src="img/start_game.png" />
				<img class="shou fadeOut animated infinite" src="img/shou.png" />
				<img class="p1_btns_wrap" src="img/p1_btns_wrap.png" />
				<img class="ranking" src="img/ranking.png" />
				<img class="activity_rule" src="img/activity_rule.png" />
				<img class="prize" src="img/prize.png" />
				<img class="shiyong" src="img/shiyong.png" />
			</div>-->
			<!--填写用户信息-->
			<div id="usermessage" class="user_message">
				<img class="close" src="img/close.png" />
				<form action="index.php" method="post" class="user_date" enctype="multipart/form-data">
					<input id="username" type="text" name="username" placeholder=" 姓名:" /><br />
					<input id="userphone" type="text" name="userphone" placeholder=" 电话:"/><br />
					<input id="btn" type="submit" name="submit" value=" "/>
				</form>
			</div>
		</div>
<!--第二页-->
		<div class="p2" id="p2"></div>
<!--第三页-->
		<div class="p3" id="p3"></div>
		
		<div></div>
		
	</div>
	
</body>
<script>
	var btn = document.getElementById(btn);
	var p1 = document.getElementById(p1);
	btn.onclick = function(){
		p1.style.display = 'none';
	}
</script>
</html>
