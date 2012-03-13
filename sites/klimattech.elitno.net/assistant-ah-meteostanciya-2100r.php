<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("assistant-ah-meteostanciya-2100r.php","водонагреватель 30 л");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("assistant-ah-meteostanciya-2100r.php", $nick, $comment);
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
		<title>водонагреватель 30 л Assistant AH-1990 Метеостанция  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="водонагреватель 30 л, бытовые инфракрасные обогреватели, водонагреватель баня, водонагреватели саратов, кондиционер ваз приора, спрей кондиционер elseve, вентилятор hp pavilion dv6, шум вентилятора печки, схема регулятора оборотов вентилятора, кондиционеры для микроавтобусов, водонагреватель накопительный цена, вентилятор системы охлаждения двигателя, маркировка вентиляторов, как разобрать водонагреватель,  тепловые пушки хабаровск">
		<meta name="description" content="водонагреватель 30 л Цифровая ультратонкая метеостанция Assistant AH-1990 с функцией прогноза погоды,...">
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
						<a class="photo" href="photos/8083c71208f25517314b09f05cf4c1a4.jpeg" title="водонагреватель 30 л Assistant AH-1990 Метеостанция"><img src="photos/8083c71208f25517314b09f05cf4c1a4.jpeg" alt="водонагреватель 30 л Assistant AH-1990 Метеостанция" title="водонагреватель 30 л Assistant AH-1990 Метеостанция -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-bt-i-1950r.php"><img src="photos/7c8bd16774bf9fee3455010ae392ebb1.jpeg" alt="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I" title="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I"></a><h2>Радиатор масляный Timberk TOR 21.1507 BT I</h2></li>
							<li><a href="http://klimattech.elitno.net/obogrevatel-ny-la-1500r.php"><img src="photos/055ebba3bd14161bb9de9bf4750fdd50.jpeg" alt="водонагреватель баня Обогреватель NY 15LA" title="водонагреватель баня Обогреватель NY 15LA"></a><h2>Обогреватель NY 15LA</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-obogrevatel-vitek-vt-bk-2850r.php"><img src="photos/f20c87437fcfbe2b1fc5c70c57532af2.jpeg" alt="водонагреватели саратов Масляный обогреватель Vitek VT-2104 BK" title="водонагреватели саратов Масляный обогреватель Vitek VT-2104 BK"></a><h2>Масляный обогреватель Vitek VT-2104 BK</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>водонагреватель 30 л Assistant AH-1990 Метеостанция</h1>
						<div class="tb"><p>Цена: от <span class="price">2100</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18324.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Цифровая ультратонкая метеостанция Assistant AH-1990 с функцией прогноза погоды, часами, будильником и календарем. Прогноз погоды отображается с помощью пяти иконок (гроза, дождь, облачно, переменная облачность, солнечно). Также есть индикатор изменения давления и влажности. При этом толщина метеостанции составляет всего 12 сантиметров. Следите за погодой в доме и на улице.</p><p><b>Характеристики:</b></p><ul type=disc><li>Символьный прогноз погоды <li>Часы, будильник <li>Размеры: 125х125х12 мм </li></ul><p><b>Производитель: Китай</b></p> водонагреватель 30 л</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5e2e6155fa93a73389d35af4c02cfb37.jpeg" alt="кондиционер ваз приора Цифровой термометр для пластиковых окон RST Comfort link S413" title="кондиционер ваз приора Цифровой термометр для пластиковых окон RST Comfort link S413"><div class="box" page="cifrovoy-termometr-dlya-plastikovyh-okon-rst-comfort-link-s-1195r"><span class="title">кондиционер ваз приора Цифровой термометр для пластиковых окон RST Comfort link S413</span><p>от <span class="price">1195</span> руб.</p></div></li>
						<li><img src="photos/a956489cec5b1098b61f3714b18bd317.jpeg" alt="спрей кондиционер elseve Assistant AH-1976 Метеостанция" title="спрей кондиционер elseve Assistant AH-1976 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-2550r"><span class="title">спрей кондиционер elseve Assistant AH-1976 Метеостанция</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li><img src="photos/da0d2486c80d1951d5a0ec899d81e766.jpeg" alt="вентилятор hp pavilion dv6 Timberk TFH S20TL.SN Настенный тепловентилятор" title="вентилятор hp pavilion dv6 Timberk TFH S20TL.SN Настенный тепловентилятор"><div class="box" page="timberk-tfh-stlsn-nastennyy-teploventilyator-1520r"><span class="title">вентилятор hp pavilion dv6 Timberk TFH S20TL.SN Настенный тепловентилятор</span><p>от <span class="price">1520</span> руб.</p></div></li>
						<li><img src="photos/bba52d000c0ded20d7489586f37c2237.jpeg" alt="шум вентилятора печки Тепловентилятор керамический Vitesse VS-852" title="шум вентилятора печки Тепловентилятор керамический Vitesse VS-852"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-1740r"><span class="title">шум вентилятора печки Тепловентилятор керамический Vitesse VS-852</span><p>от <span class="price">1740</span> руб.</p></div></li>
						<li class="large"><img src="photos/2cd95fd7e6a6c358ce5a5720f3641573.jpeg" alt="схема регулятора оборотов вентилятора Тепловентилятор керамический Vitesse VS-883" title="схема регулятора оборотов вентилятора Тепловентилятор керамический Vitesse VS-883"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-1560r"><span class="title">схема регулятора оборотов вентилятора Тепловентилятор керамический Vitesse VS-883</span><p>от <span class="price">1560</span> руб.</p></div></li>
						<li class="large"><img src="photos/1ec83e9cb7df4ee11f0d144649ef201f.jpeg" alt="кондиционеры для микроавтобусов Переносная тепловая пушка Timberk TIH R1 3M" title="кондиционеры для микроавтобусов Переносная тепловая пушка Timberk TIH R1 3M"><div class="box" page="perenosnaya-teplovaya-pushka-timberk-tih-r-m-2970r"><span class="title">кондиционеры для микроавтобусов Переносная тепловая пушка Timberk TIH R1 3M</span><p>от <span class="price">2970</span> руб.</p></div></li>
						<li class="large"><img src="photos/027c1d302dc81e47a00047ed6472d894.jpeg" alt="водонагреватель накопительный цена Очиститель-ионизатор автомобильный 724" title="водонагреватель накопительный цена Очиститель-ионизатор автомобильный 724"><div class="box" page="ochistitelionizator-avtomobilnyy-730r"><span class="title">водонагреватель накопительный цена Очиститель-ионизатор автомобильный 724</span><p>от <span class="price">730</span> руб.</p></div></li>
						<li><img src="photos/a95d9bc6868aec4505f9e179c9f39708.jpeg" alt="вентилятор системы охлаждения двигателя Воздухоочиститель-ионизатор от табачного дыма AirTec XJ-888" title="вентилятор системы охлаждения двигателя Воздухоочиститель-ионизатор от табачного дыма AirTec XJ-888"><div class="box" page="vozduhoochistitelionizator-ot-tabachnogo-dyma-airtec-xj-1370r"><span class="title">вентилятор системы охлаждения двигателя Воздухоочиститель-ионизатор от табачного дыма AirTec XJ-888</span><p>от <span class="price">1370</span> руб.</p></div></li>
						<li><img src="photos/f7b651727c936b973e40b0fd646bb983.jpeg" alt="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703" title="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703"><div class="box" page="vozduhoochistitel-redmond-rac-8990r"><span class="title">маркировка вентиляторов Воздухоочиститель Redmond RAC-3703</span><p>от <span class="price">8990</span> руб.</p></div></li>
						<li><img src="photos/0f95b087193487a63727348036a2144b.jpeg" alt="как разобрать водонагреватель Воздухоочиститель Beurer LW110" title="как разобрать водонагреватель Воздухоочиститель Beurer LW110"><div class="box" page="vozduhoochistitel-beurer-lw-9000r"><span class="title">как разобрать водонагреватель Воздухоочиститель Beurer LW110</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li><img src="photos/9cc3a3ceb02e758ecf8288587202781f.jpeg" alt="вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D" title="вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D"><div class="box" page="moyka-vozduha-electrolux-ehaw-d-15450r-3"><span class="title">вентилятор асинхронный Мойка воздуха Electrolux EHAW 7525D</span><p>от <span class="price">15450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("assistant-ah-meteostanciya-2100r.php", 0, -4); if (file_exists("comments/assistant-ah-meteostanciya-2100r.php")) require_once "comments/assistant-ah-meteostanciya-2100r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="assistant-ah-meteostanciya-2100r.php" method="post" onsubmit="return checkForm(this)">
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