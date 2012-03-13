<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("maslyanyy-obogrevatel-atlanta-atn-1700r.php","купить кондиционер в интернет магазине");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("maslyanyy-obogrevatel-atlanta-atn-1700r.php", $nick, $comment);
		}
		else
		{
			$error = "class=\"error\"";
		}
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>купить кондиционер в интернет магазине Масляный обогреватель  Atlanta АТН-2001  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="купить кондиционер в интернет магазине, купить вентилятор отопителя, устройство водонагревателя термекс, как увеличить скорость вентилятора, конвектор видео в mp4 бесплатно, согласование кондиционера, как почистить вентилятор в ноутбуке, инфракрасные обогреватели ballu, electrolux газовый водонагреватель, какой кондиционер лучше, кондиционер форд мондео, обогреватель инфракрасный ик, тепловые пушки elitech, водонагреватели накопительные отзывы,  вентиляторы для сушки">
		<meta name="description" content="купить кондиционер в интернет магазине Масляный обогреватель Atlanta АТН-2001выполненный в современном дизайне с 7 секц...">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
		<link type="text/css" rel="stylesheet" href="css/lightbox.css">

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/lightbox.min.js"></script>
		<script type="text/javascript" src="js/validator.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<script type="text/javascript">
			$(function(){$('a.photo').lightBox();});

			$(document).ready(function(){
				$(".see-also ul li").hover(
				function(){$(this).children(".box").toggle();},
				function(){$(this).children(".box").toggle();})
			});
		</script>
	</head>
	<body>
		<!-- [CONTAINER] -->
		<div class="container">
			<!-- [HEADER] -->
			<?php require_once "header.php"; ?>			<!-- [END OF HEADER] -->
			<!-- [CONTENT] -->
			<div class="content">
				<div class="product">
					<div class="ls">
						<a class="photo" href="photos/d08a3769d6472d1c5dcfdd9b96e9984a.jpeg" title="купить кондиционер в интернет магазине Масляный обогреватель  Atlanta АТН-2001"><img src="photos/d08a3769d6472d1c5dcfdd9b96e9984a.jpeg" alt="купить кондиционер в интернет магазине Масляный обогреватель  Atlanta АТН-2001" title="купить кондиционер в интернет магазине Масляный обогреватель  Atlanta АТН-2001 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-v-11150r.php"><img src="photos/894dc4b38ab54e686b826978c93253a1.jpeg" alt="купить вентилятор отопителя Водонагреватель Timberk SWH FS5 80 V" title="купить вентилятор отопителя Водонагреватель Timberk SWH FS5 80 V"></a><h2>Водонагреватель Timberk SWH FS5 80 V</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-slim-8350r.php"><img src="photos/e3ac300665006bbafd472165984f115d.jpeg" alt="устройство водонагревателя термекс Водонагреватель Neoclima Slim 150" title="устройство водонагревателя термекс Водонагреватель Neoclima Slim 150"></a><h2>Водонагреватель Neoclima Slim 150</h2></li>
							<li><a href="http://klimattech.elitno.net/srednevolnovye-infrakrasnye-obogrevateli-iwq-2300r.php"><img src="photos/6a97e53654563a1819e95a45cc53350a.jpeg" alt="как увеличить скорость вентилятора Средневолновые инфракрасные обогреватели IWQ 180" title="как увеличить скорость вентилятора Средневолновые инфракрасные обогреватели IWQ 180"></a><h2>Средневолновые инфракрасные обогреватели IWQ 180</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>купить кондиционер в интернет магазине Масляный обогреватель  Atlanta АТН-2001</h1>
						<div class="tb"><p>Цена: от <span class="price">1700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19653.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Масляный обогреватель Atlanta АТН-2001выполненный в современном дизайне с 7 секциями и 3 уровнями мощности. Снабжен термостатом, который автоматически будет держать выбранную температуру в помещении. Абсолютно безопасен, так как защищен от перегрева и имеет евровилку с заземлением и световой индикатор включения. Максимальная мощность 1500 Вт.<br><br><strong>Характеристики:</strong></p><ul type=disc><li>Регулировка мощности <li>Уровни мощности: 1500/900/600 Вт <li>Напряжение 220/230 В <li>7 секций <li>Термостат <li>Механическое управление, регулировка температуры, выключатель со световым индикатором <li>Напольный вариант монтажа <li>Защитные функции отключение при перегреве <li>Отделение для шнура, колесики, ручка </li></ul><p><strong>Производитель: США</strong></p> купить кондиционер в интернет магазине</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/de56a071ca1190260819c688068be1ef.jpeg" alt="конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN" title="конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN"><div class="box"><a href="http://klimattech.elitno.net/konvektor-timberk-led-r-in-3220r.php"><h3 class="title">конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN</h3><p>от <span class="price">3220</span> руб.</p></a></div></li>
						<li><img src="photos/3ffe8f5edf569fd82f3547a04fdb540c.jpeg" alt="согласование кондиционера Конвектор Timberk TEC.PS2 M 500" title="согласование кондиционера Конвектор Timberk TEC.PS2 M 500"><div class="box" page="konvektor-timberk-tecps-m-2020r"><span class="title">согласование кондиционера Конвектор Timberk TEC.PS2 M 500</span><p>от <span class="price">2020</span> руб.</p></div></li>
						<li><img src="photos/5a722243fe0d4bdaed6d1be8e66a9f23.jpeg" alt="как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I" title="как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I"><div class="box" page="maslyanyy-radiator-timberk-tor-mg-i-1850r"><span class="title">как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/62b0d8abdf14922261b995020f3ed829.jpeg" alt="инфракрасные обогреватели ballu Масляный радиатор Timberk TOR 31.1706 ED I" title="инфракрасные обогреватели ballu Масляный радиатор Timberk TOR 31.1706 ED I"><div class="box" page="maslyanyy-radiator-timberk-tor-ed-i-2240r"><span class="title">инфракрасные обогреватели ballu Масляный радиатор Timberk TOR 31.1706 ED I</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li class="large"><img src="photos/eae7f136b39e91a034b59ea5fd29f363.jpeg" alt="electrolux газовый водонагреватель Тепловентилятор Neoclima NWH-A2" title="electrolux газовый водонагреватель Тепловентилятор Neoclima NWH-A2"><div class="box" page="teploventilyator-neoclima-nwha-1820r"><span class="title">electrolux газовый водонагреватель Тепловентилятор Neoclima NWH-A2</span><p>от <span class="price">1820</span> руб.</p></div></li>
						<li class="large"><img src="photos/c1fe9260de97ac5d8658504d30013ba0.jpeg" alt="какой кондиционер лучше Тепловентилятор Atlanta ATH-105" title="какой кондиционер лучше Тепловентилятор Atlanta ATH-105"><div class="box" page="teploventilyator-atlanta-ath-700r"><span class="title">какой кондиционер лучше Тепловентилятор Atlanta ATH-105</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li class="large"><img src="photos/e90ec0ae7077f087cc1e72cdfa25c63c.jpeg" alt="кондиционер форд мондео Очиститель воздуха  Атмос Вент 1103" title="кондиционер форд мондео Очиститель воздуха  Атмос Вент 1103"><div class="box" page="ochistitel-vozduha-atmos-vent-3590r"><span class="title">кондиционер форд мондео Очиститель воздуха  Атмос Вент 1103</span><p>от <span class="price">3590</span> руб.</p></div></li>
						<li><img src="photos/529d01653dbf042175d64e352c3bb2e4.jpeg" alt="обогреватель инфракрасный ик Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель" title="обогреватель инфракрасный ик Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель"><div class="box" page="timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-240r"><span class="title">обогреватель инфракрасный ик Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель</span><p>от <span class="price">240</span> руб.</p></div></li>
						<li><img src="photos/555884c9ed995600df4b44cdeff2c84a.jpeg" alt="тепловые пушки elitech Электрокамин напольный  Electrolux  EFP F - 200RC" title="тепловые пушки elitech Электрокамин напольный  Electrolux  EFP F - 200RC"><div class="box" page="elektrokamin-napolnyy-electrolux-efp-f-rc-9730r"><span class="title">тепловые пушки elitech Электрокамин напольный  Electrolux  EFP F - 200RC</span><p>от <span class="price">9730</span> руб.</p></div></li>
						<li><img src="photos/a5f8fe566b61ce24e2379ab4a0ae140e.jpeg" alt="водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC" title="водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC"><div class="box" page="elektrokamin-nastennyy-electrolux-efp-w-urc-13030r"><span class="title">водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC</span><p>от <span class="price">13030</span> руб.</p></div></li>
						<li><img src="photos/9fb808ff39f0da5251df2623e483ea3f.jpeg" alt="компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN" title="компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN"><div class="box" page="kamin-komplekt-dimplex-palermo-cfpwn-26605r"><span class="title">компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN</span><p>от <span class="price">26605</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("maslyanyy-obogrevatel-atlanta-atn-1700r.php", 0, -4); if (file_exists("comments/maslyanyy-obogrevatel-atlanta-atn-1700r.php")) require_once "comments/maslyanyy-obogrevatel-atlanta-atn-1700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="maslyanyy-obogrevatel-atlanta-atn-1700r.php" method="post" onsubmit="return checkForm(this)">
						<p><textarea name="comment" placeholder="Ваше сообщение здесь"></textarea></p>
						<p><input type="text" name="author" placeholder="*Имя"><input type="text" name="captcha" placeholder="*Код" <?php if(isset($error)) echo "$error"; ?>><img class="captcha" src="captcha.php" alt=""><input type="submit"></p>
					</form>
				</div>
			</div>
			<!-- [END OF CONTENT] -->

			<!-- [FOOTER] -->
			 <?php require_once "footer.php"; ?>			<!-- [END OF FOOTER] -->
		</div>
		<!-- [END OF CONTAINTER] -->
	</body>
</html>