<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("teploventilyator-neoclima-fh-700r.php","кондиционер на авео");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("teploventilyator-neoclima-fh-700r.php", $nick, $comment);
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
		<title>кондиционер на авео Тепловентилятор Neoclima FH-15  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кондиционер на авео, водонагреватель габариты, центральные кондиционеры wolf, инструмент для монтажа кондиционеров, дополнительный вентилятор охлаждения, дизельная тепловая пушка master, обороты вентилятора видеокарты, замена ремня кондиционера, теплоотдача конвекторов, водонагреватель power, аристон водонагреватели pro eco, обогреватель инфракрасный ик, компрессор кондиционера форд фокус, кондиционер для серверной,  кондиционеры канального типа">
		<meta name="description" content="кондиционер на авео Тепловентилятор Neoclima FH-15 имеет мощность 2000 Вт и работает от напряжения в...">
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
						<a class="photo" href="photos/67084118d5753838baadc3c476e16214.jpeg" title="кондиционер на авео Тепловентилятор Neoclima FH-15"><img src="photos/67084118d5753838baadc3c476e16214.jpeg" alt="кондиционер на авео Тепловентилятор Neoclima FH-15" title="кондиционер на авео Тепловентилятор Neoclima FH-15 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-zenet-nsa-2990r.php"><img src="photos/b2a079211d43e716c4a2f8b039902b03.jpeg" alt="водонагреватель габариты Карбоновый обогреватель ZENET NS-1200A" title="водонагреватель габариты Карбоновый обогреватель ZENET NS-1200A"></a><h2>Карбоновый обогреватель ZENET NS-1200A</h2></li>
							<li><a href="http://klimattech.elitno.net/neoclima-nozhki-na-kolesikah-240r.php"><img src="photos/0b364f87831da5b1b0340083d6502d32.jpeg" alt="центральные кондиционеры wolf NEOCLIMA ножки на колесиках" title="центральные кондиционеры wolf NEOCLIMA ножки на колесиках"></a><h2>NEOCLIMA ножки на колесиках</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-e-3190r.php"><img src="photos/18c34c6e827f90d958d75c38996085f7.jpeg" alt="инструмент для монтажа кондиционеров Конвектор Timberk TEC.E1 E 2000" title="инструмент для монтажа кондиционеров Конвектор Timberk TEC.E1 E 2000"></a><h2>Конвектор Timberk TEC.E1 E 2000</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кондиционер на авео Тепловентилятор Neoclima FH-15</h1>
						<div class="tb"><p>Цена: от <span class="price">700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16453.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Тепловентилятор </b><b>Neoclima FH-15</b> имеет мощность 2000 Вт и работает от напряжения в 220 Вт. Этот прибор отлично подойдет для обогрева небольших по площади, до двадцати квадратных метров, помещений. Он не сжигает кислород и не сушит воздух при работе. Имеет механическое управление, в качестве нагревательного элемента служит электрическая спираль. Имеет два режима работы, регулируемый термостат, а также защиту от перегрева. </p><p><b>Технические характеристики</b>:</p><ul type=\disc\><li>две ступени мощности: 1.0/2.0 кВт </li><li>управление: механическое </li><li>нагревательный элемент: электрическая спираль </li><li>напряжение: 220 В </li><li>режим холодного обдува </li><li>регулируемый термостат </li><li>автоматическое поддержание температуры </li><li>защита от перегрева </li><li>световой индикатор работы</li></ul><p><b>Гарантия</b>: 1 год</p><p><b>Производитель</b>: Neoclima</p><p><b>Страна</b>: Китай</p> кондиционер на авео</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/2bec9b241af0d7e85d36a38042643437.jpeg" alt="дополнительный вентилятор охлаждения Кондиционер сплит-система Timberk AC TIM 12HDN S1" title="дополнительный вентилятор охлаждения Кондиционер сплит-система Timberk AC TIM 12HDN S1"><div class="box"><a href="http://klimattech.elitno.net/kondicioner-splitsistema-timberk-ac-tim-hdn-s-21780r.php"><h3 class="title">дополнительный вентилятор охлаждения Кондиционер сплит-система Timberk AC TIM 12HDN S1</h3><p>от <span class="price">21780</span> руб.</p></a></div></li>
						<li><img src="photos/b1e761d740cae58b4b6393acdd9fb6d7.jpeg" alt="дизельная тепловая пушка master Проекционная погодная станция RST 32712" title="дизельная тепловая пушка master Проекционная погодная станция RST 32712"><div class="box" page="proekcionnaya-pogodnaya-stanciya-rst-2310r"><span class="title">дизельная тепловая пушка master Проекционная погодная станция RST 32712</span><p>от <span class="price">2310</span> руб.</p></div></li>
						<li><img src="photos/2c7942395b1748c90ff5b7a79b70f229.jpeg" alt="обороты вентилятора видеокарты Тепловая пушка Ballu BPH-3.000" title="обороты вентилятора видеокарты Тепловая пушка Ballu BPH-3.000"><div class="box" page="teplovaya-pushka-ballu-bph-3400r"><span class="title">обороты вентилятора видеокарты Тепловая пушка Ballu BPH-3.000</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li><img src="photos/b8fee8729e6225b37952d37bd9c110a9.jpeg" alt="замена ремня кондиционера Климатический комплекс Sharp KC-860E" title="замена ремня кондиционера Климатический комплекс Sharp KC-860E"><div class="box" page="klimaticheskiy-kompleks-sharp-kce-18400r"><span class="title">замена ремня кондиционера Климатический комплекс Sharp KC-860E</span><p>от <span class="price">18400</span> руб.</p></div></li>
						<li class="large"><img src="photos/66e0aa1057db078ec30260e7078f7d70.jpeg" alt="теплоотдача конвекторов Очиститель воздуха Neoclima NAP" title="теплоотдача конвекторов Очиститель воздуха Neoclima NAP"><div class="box" page="ochistitel-vozduha-neoclima-nap-7000r"><span class="title">теплоотдача конвекторов Очиститель воздуха Neoclima NAP</span><p>от <span class="price">7000</span> руб.</p></div></li>
						<li class="large"><img src="photos/c0fcd29b5049a2d3de0ef6c0b57282fd.jpeg" alt="водонагреватель power Ультразвуковой увлажнитель воздуха Redmond RHF-3303" title="водонагреватель power Ультразвуковой увлажнитель воздуха Redmond RHF-3303"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-redmond-rhf-3990r"><span class="title">водонагреватель power Ультразвуковой увлажнитель воздуха Redmond RHF-3303</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li class="large"><img src="photos/caeada24682b551780cda21639931f8d.jpeg" alt="аристон водонагреватели pro eco Ультразвуковой увлажнитель Electrolux EHU 4515D" title="аристон водонагреватели pro eco Ультразвуковой увлажнитель Electrolux EHU 4515D"><div class="box" page="ultrazvukovoy-uvlazhnitel-electrolux-ehu-d-4950r"><span class="title">аристон водонагреватели pro eco Ультразвуковой увлажнитель Electrolux EHU 4515D</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/529d01653dbf042175d64e352c3bb2e4.jpeg" alt="обогреватель инфракрасный ик Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель" title="обогреватель инфракрасный ик Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель"><div class="box" page="timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-240r"><span class="title">обогреватель инфракрасный ик Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель</span><p>от <span class="price">240</span> руб.</p></div></li>
						<li><img src="photos/b96cf70721ff62fc726fbf7570b0c26e.jpeg" alt="компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301" title="компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301"><div class="box" page="uvlazhnitel-vozduha-redmond-rhf-3690r"><span class="title">компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301</span><p>от <span class="price">3690</span> руб.</p></div></li>
						<li><img src="photos/771e29e896f7ce0ffaac8f209d3a2130.jpeg" alt="кондиционер для серверной Электрогрелка Microlife FH 80" title="кондиционер для серверной Электрогрелка Microlife FH 80"><div class="box" page="elektrogrelka-microlife-fh-1240r"><span class="title">кондиционер для серверной Электрогрелка Microlife FH 80</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li><img src="photos/9fb808ff39f0da5251df2623e483ea3f.jpeg" alt="компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN" title="компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN"><div class="box" page="kamin-komplekt-dimplex-palermo-cfpwn-26605r"><span class="title">компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN</span><p>от <span class="price">26605</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("teploventilyator-neoclima-fh-700r.php", 0, -4); if (file_exists("comments/teploventilyator-neoclima-fh-700r.php")) require_once "comments/teploventilyator-neoclima-fh-700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="teploventilyator-neoclima-fh-700r.php" method="post" onsubmit="return checkForm(this)">
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