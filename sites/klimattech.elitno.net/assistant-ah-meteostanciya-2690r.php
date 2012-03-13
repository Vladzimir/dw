<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("assistant-ah-meteostanciya-2690r.php","кондиционеры в курске");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("assistant-ah-meteostanciya-2690r.php", $nick, $comment);
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
		<title>кондиционеры в курске Assistant AH-1973 Метеостанция  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кондиционеры в курске, кондиционеры владивосток, электро конвекторы отопления, конвекторы отопления отзывы, очистка кондиционера, работа на метеостанции, лучший кондиционер для белья, вентилятор процессора программа, как снять вентилятор с процессора, кондиционер калина купить, установщик кондиционеров, конвектор для андроид, вентилятор системы охлаждения двигателя, гидромуфта вентилятора,  скачать программу для вентиляторов">
		<meta name="description" content="кондиционеры в курске Метеостанция Assistant AH-1973 с функцией прогноза погоды, часами, будильником и...">
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
						<a class="photo" href="photos/83ea01d1eaf2c3bcdbc30dbe76b7be74.jpeg" title="кондиционеры в курске Assistant AH-1973 Метеостанция"><img src="photos/83ea01d1eaf2c3bcdbc30dbe76b7be74.jpeg" alt="кондиционеры в курске Assistant AH-1973 Метеостанция" title="кондиционеры в курске Assistant AH-1973 Метеостанция -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-3600r.php"><img src="photos/4a1622af2fb6c2a36801dd777d58d197.jpeg" alt="кондиционеры владивосток Водонагреватель Neoclima EWH 15" title="кондиционеры владивосток Водонагреватель Neoclima EWH 15"></a><h2>Водонагреватель Neoclima EWH 15</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-premium-14500r.php"><img src="photos/c74e47e23d5ccda64c2ecf3f0a77dc13.jpeg" alt="электро конвекторы отопления Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000" title="электро конвекторы отопления Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-ballu-plaza-bepe-3600r.php"><img src="photos/60bbbf503cc1f54478f2063da8fc6ed7.jpeg" alt="конвекторы отопления отзывы Конвектор Ballu Plaza BEP|E-1000" title="конвекторы отопления отзывы Конвектор Ballu Plaza BEP|E-1000"></a><h2>Конвектор Ballu Plaza BEP|E-1000</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кондиционеры в курске Assistant AH-1973 Метеостанция</h1>
						<div class="tb"><p>Цена: от <span class="price">2690</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18320.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Метеостанция Assistant AH-1973 с функцией прогноза погоды, часами, будильником и календарем. Метеостанция не только определяет температуру и давление в комнате и на улице, но и может спроектировать ее на стену или потолок. Корпус оснащен ночной подсветкой, поэтому метеостанция красиво смотрится в темноте, а также трех канальным радиодатчиком с проводным сенсором для измерения температуры на улице. Расстояние действия сигнала радиодатчика до ста метров. Возможно подключение до трех внешних датчиков. </p><p><b>Характеристики:</b></p><ul type=disc><li>Выносной датчик <li>Размеры: 132х122х40 мм <li>Проектор </li></ul><p><b>Производитель: Китай</b></p> кондиционеры в курске</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ddc0aab203cdce31375d769ac0564ff3.jpeg" alt="очистка кондиционера Конвектор Timberk TEC.E1 M 1000" title="очистка кондиционера Конвектор Timberk TEC.E1 M 1000"><div class="box" page="konvektor-timberk-tece-m-2080r"><span class="title">очистка кондиционера Конвектор Timberk TEC.E1 M 1000</span><p>от <span class="price">2080</span> руб.</p></div></li>
						<li><img src="photos/8f1e0d579cfdbf0b239e6a35d6ad3a29.jpeg" alt="работа на метеостанции Радиатор масляный Timberk TOR 21.2009 ER I" title="работа на метеостанции Радиатор масляный Timberk TOR 21.2009 ER I"><div class="box" page="radiator-maslyanyy-timberk-tor-er-i-2350r"><span class="title">работа на метеостанции Радиатор масляный Timberk TOR 21.2009 ER I</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li><img src="photos/ad418635c3099a15e5f149cd7ca4e981.jpeg" alt="лучший кондиционер для белья Радиатор масляный Timberk TOR 21.2009 MG I" title="лучший кондиционер для белья Радиатор масляный Timberk TOR 21.2009 MG I"><div class="box" page="radiator-maslyanyy-timberk-tor-mg-i-2310r"><span class="title">лучший кондиционер для белья Радиатор масляный Timberk TOR 21.2009 MG I</span><p>от <span class="price">2310</span> руб.</p></div></li>
						<li><img src="photos/56bd6d1cb04e7d799bfeed68b851b2f9.jpeg" alt="вентилятор процессора программа Радиатор масляный Timberk TOR 22 AX I" title="вентилятор процессора программа Радиатор масляный Timberk TOR 22 AX I"><div class="box" page="radiator-maslyanyy-timberk-tor-ax-i-2700r"><span class="title">вентилятор процессора программа Радиатор масляный Timberk TOR 22 AX I</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li class="large"><img src="photos/4aae7a800b98d1928517960c641bd529.jpeg" alt="как снять вентилятор с процессора Обогреватель NY 23LA" title="как снять вентилятор с процессора Обогреватель NY 23LA"><div class="box" page="obogrevatel-ny-la-1900r"><span class="title">как снять вентилятор с процессора Обогреватель NY 23LA</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li class="large"><img src="photos/8083c71208f25517314b09f05cf4c1a4.jpeg" alt="кондиционер калина купить Assistant AH-1990 Метеостанция" title="кондиционер калина купить Assistant AH-1990 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-2100r"><span class="title">кондиционер калина купить Assistant AH-1990 Метеостанция</span><p>от <span class="price">2100</span> руб.</p></div></li>
						<li class="large"><img src="photos/8c52fa2425548d5d18bee20992794fb5.jpeg" alt="установщик кондиционеров Комплект фильтров для очистителя воздуха Атмос-Вент-1501" title="установщик кондиционеров Комплект фильтров для очистителя воздуха Атмос-Вент-1501"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-240r"><span class="title">установщик кондиционеров Комплект фильтров для очистителя воздуха Атмос-Вент-1501</span><p>от <span class="price">240</span> руб.</p></div></li>
						<li><img src="photos/f0f3a7d2dd327f3c3358e366d97eb793.jpeg" alt="конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ" title="конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ"><div class="box" page="ochistitelionizator-vozduha-universalnyy-atmos-uvoi-1880r"><span class="title">конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ</span><p>от <span class="price">1880</span> руб.</p></div></li>
						<li><img src="photos/a95d9bc6868aec4505f9e179c9f39708.jpeg" alt="вентилятор системы охлаждения двигателя Воздухоочиститель-ионизатор от табачного дыма AirTec XJ-888" title="вентилятор системы охлаждения двигателя Воздухоочиститель-ионизатор от табачного дыма AirTec XJ-888"><div class="box" page="vozduhoochistitelionizator-ot-tabachnogo-dyma-airtec-xj-1370r"><span class="title">вентилятор системы охлаждения двигателя Воздухоочиститель-ионизатор от табачного дыма AirTec XJ-888</span><p>от <span class="price">1370</span> руб.</p></div></li>
						<li><img src="photos/90c5f09bed9f1d49d0f4bd29524a76c1.jpeg" alt="гидромуфта вентилятора Timberk THU UL 03 A4 Увлажнитель и ароматизатор воздуха" title="гидромуфта вентилятора Timberk THU UL 03 A4 Увлажнитель и ароматизатор воздуха"><div class="box" page="timberk-thu-ul-a-uvlazhnitel-i-aromatizator-vozduha-1600r-4"><span class="title">гидромуфта вентилятора Timberk THU UL 03 A4 Увлажнитель и ароматизатор воздуха</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/9fb808ff39f0da5251df2623e483ea3f.jpeg" alt="компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN" title="компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN"><div class="box" page="kamin-komplekt-dimplex-palermo-cfpwn-26605r"><span class="title">компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN</span><p>от <span class="price">26605</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("assistant-ah-meteostanciya-2690r.php", 0, -4); if (file_exists("comments/assistant-ah-meteostanciya-2690r.php")) require_once "comments/assistant-ah-meteostanciya-2690r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="assistant-ah-meteostanciya-2690r.php" method="post" onsubmit="return checkForm(this)">
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