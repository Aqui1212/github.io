<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>report</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<input type="date">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style type="text/css">
.nav {
	overflow: hidden;
	width: 1250px;    
        margin: 0 auto;
	padding: 0;
	display: flex;
}

.nav li {
	list-style: none;
}

.nav li a {
	display: block;
	width: 250px;
	height: 40px;
	text-align: center;
	color: white;
	font-size: 14px;
	line-height: 2.8;
	background: gray;
	text-decoration: none;
	box-sizing: border-box;
}

.nav>li:hover>a {
	color: brown;
}

.nav li ul {
	width: 200px;
	display: none;
	margin-left: -40px;
	position: absolute;
}

.nav>li li:hover>a {
	color: gray;
}

.nav li ul li a {
	border-top: 1px solid #eee;
}

.content {
	width: 1280px;
	height: 480px;
	background: #eee;
	margin: 0 auto;
	padding: 10px;
	text-align: left;
	box-sizing: border-box;
}
</style>
<style>
table {
    margin-left: auto;
    margin-right: auto;
}
</style>
	<ul class="nav">
		<li><a href="#">Aqui</a></li>
		<li><a href="#">mypage</a>
		   <ul><li><a href="#">Log in</a></li></ul></li>
		<li><a href="#">develop</a>
		   <ul><li><a href="#">develop</a></li></ul></li>
                <li><a href="#">develop</a></li>
		<li><a href="#">develop</a></li>
		<li><a href="#">develop</a></li>
	</ul>
        <script>
		$(function() {
			var nav = $('.nav');
			$('li', nav).mouseover(function(e) {
				$('ul', this).stop().slideDown('fast');
			}).mouseout(function(e) {
				$('ul', this).stop().slideUp('fast');
			});
		});
	</script>
</head>
<body>

<header>
<?php 
$logfile = "./counter.log";
$counter = 0;
if( $fn = @fopen($logfile, 'r') ) {
 $counter = trim(fgets($fn));
 fclose($fn);
}
print( ++$counter . "人目のお客様です<br>");
 if( $fn = @fopen($logfile, 'w') ) {
 fwrite( $fn, $counter);
 fclose($fn);
}?>
 <form class="navbar-form" role="search">
        <div class="input-group">
<div style="text-align: center;"><img src="images/mega.jpg" width="600" height="400" alt="">
        </div><ul class="nav"></nav>
</div>
</header>

<div class="content">
   <form method="get" action="select.html">
        <table border="1" 　cellspadding="10">
            <tr>
                <caption>situation</caption>
                <th colspan="2">now</th>
                <td class="rainy">
                    <script type="text/javascript"> 
                        var weeks = new Array('日', '月', '火', '水', '木', '金', '土');
                        var now = new Date();
                        var year = now.getYear(); // 年
                        var month = now.getMonth() + 1; // 月
                        var day = now.getDate(); // 日
                        var week = weeks[now.getDay()]; // 曜日
                        var hour = now.getHours(); // 時
                        var min = now.getMinutes(); // 分
                        var sec = now.getSeconds(); // 秒
                        if (year < 2000) { year += 1900; }
                        // 数値が1桁の場合、頭に0を付けて2桁で表示する指定
                        if (month < 10) { month = "0" + month; }
                        if (day < 10) { day = "0" + day; }
                        if (hour < 10) { hour = "0" + hour; }
                        if (min < 10) { min = "0" + min; }
                        if (sec < 10) { sec = "0" + sec; }
                        // 表示開始
                        document.write('day time：<b>' + year + '年' + month + '月' + day + '日（' + week + '）');
                        document.write(hour + '時' + min + '分' + sec + '秒</b>');
                        // 表示終了
                        // -->
                    </script>
          </td>
            <tr>
                <th colspan="2">where</th>
                <td class="rainy">
                    <div class="map-wrapper">
                        <div class="googlemap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207578.68804604618!2d139.99962151640625!3d35.6174451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60228531b1451f71%3A0xca8d10b88023fab4!2z5qCq5byP5Lya56S-IOOCr-ODquOCqOOCpOODiOOCqOODs-ODh-OCow!5e0!3m2!1sja!2sjp!4v1627543014714!5m2!1sja!2sjp"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </td>
            </tr>
            <form method="post" action="check.php"></form>  
        </table>
    </form>


<footer>
<div class="card_body" style="display: gray;">
<span class="msft">&#169; 2024 </span>
<ul class="items"><li class="item">
<a id="privacy" href="//go.microsoft.com/fwlink/?LinkId=521839" role="link" class="">

</footer>

</body>
</html>

                
