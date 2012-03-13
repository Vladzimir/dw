<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("konvektor-timberk-tece-e-2750r.php","водонагреватели deluxe");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("konvektor-timberk-tece-e-2750r.php", $nick, $comment);
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
		<title>водонагреватели deluxe Конвектор Timberk TEC.E1 E 1500  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="водонагреватели deluxe, кондиционеры владивосток, разборка водонагревателя, как увеличить скорость вентилятора, двухфазный кондиционер спрей, водонагреватель нева люкс, осевой вентилятор 200, режим обогрева кондиционер, кондиционер daikin инструкция, домашние метеостанции rst, водонагреватель косвенного нагрева, конденсатор кондиционера, кондиционеры монтаж обслуживание, ручки кондиционера,  замена кондиционера на климат">
		<meta name="description" content="водонагреватели deluxe Timberk TEC.E1 M 1500 – недорогой конвектор мощностью 1500 Вт с электронным терм...">
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
						<a class="photo" href="photos/d5f7183bbf44508345cc80372aab5df3.jpeg" title="водонагреватели deluxe Конвектор Timberk TEC.E1 E 1500"><img src="photos/d5f7183bbf44508345cc80372aab5df3.jpeg" alt="водонагреватели deluxe Конвектор Timberk TEC.E1 E 1500" title="водонагреватели deluxe Конвектор Timberk TEC.E1 E 1500 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-3600r.php"><img src="photos/4a1622af2fb6c2a36801dd777d58d197.jpeg" alt="кондиционеры владивосток Водонагреватель Neoclima EWH 15" title="кондиционеры владивосток Водонагреватель Neoclima EWH 15"></a><h2>Водонагреватель Neoclima EWH 15</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-comfort-9200r-2.php"><img src="photos/0267959fba6bfc5dff610262260ed5e1.jpeg" alt="разборка водонагревателя Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 1524" title="разборка водонагревателя Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 1524"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 1524</h2></li>
							<li><a href="http://klimattech.elitno.net/srednevolnovye-infrakrasnye-obogrevateli-iwq-2300r.php"><img src="photos/6a97e53654563a1819e95a45cc53350a.jpeg" alt="как увеличить скорость вентилятора Средневолновые инфракрасные обогреватели IWQ 180" title="как увеличить скорость вентилятора Средневолновые инфракрасные обогреватели IWQ 180"></a><h2>Средневолновые инфракрасные обогреватели IWQ 180</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>водонагреватели deluxe Конвектор Timberk TEC.E1 E 1500</h1>
						<div class="tb"><p>Цена: от <span class="price">2750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18175.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Timberk TEC.E1 M 1500 – недорогой конвектор мощностью 1500 Вт с электронным термостатом специально разработанный как экономичный вариант с минимальным использованием электронных плат управления. Но, не смотря на это, конвектор защищен от перегрева и совершенно безопасен в использовании. Он не накапливает пыль и не выжигает кислород, а высокий класс защиты от влаги IP24 позволяет использовать конвектор даже во влажных помещениях. </p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220-240/50 <li>Мощность: 1500 Вт <li>Размеры с ножками: 540х340х330 <li>Ососбенности: Три режима нагрева </li></ul><p><b>Производитель: Швеция</b></p> водонагреватели deluxe</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/060b0a0f0f41f23d3959a3a2fead9d8a.jpeg" alt="двухфазный кондиционер спрей Конвектор Timberk TEC O E 1500 IN" title="двухфазный кондиционер спрей Конвектор Timberk TEC O E 1500 IN"><div class="box" page="konvektor-timberk-tec-o-e-in-2850r"><span class="title">двухфазный кондиционер спрей Конвектор Timberk TEC O E 1500 IN</span><p>от <span class="price">2850</span> руб.</p></div></li>
						<li><img src="photos/52a639176807ccf2abb029fa8de7528c.jpeg" alt="водонагреватель нева люкс Обогреватель NY 18LA" title="водонагреватель нева люкс Обогреватель NY 18LA"><div class="box" page="obogrevatel-ny-la-1800r"><span class="title">водонагреватель нева люкс Обогреватель NY 18LA</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li><img src="photos/4e2d7548314327d966c687ae94464765.jpeg" alt="осевой вентилятор 200 Погодная станция  RST (анимационный  цветной дисплей), арт. 02517" title="осевой вентилятор 200 Погодная станция  RST (анимационный  цветной дисплей), арт. 02517"><div class="box" page="pogodnaya-stanciya-rst-animacionnyy-cvetnoy-displey-art-4190r"><span class="title">осевой вентилятор 200 Погодная станция  RST (анимационный  цветной дисплей), арт. 02517</span><p>от <span class="price">4190</span> руб.</p></div></li>
						<li><img src="photos/0fada83330f8f908ee7f1c8b4ca94373.jpeg" alt="режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103" title="режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-360r"><span class="title">режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103</span><p>от <span class="price">360</span> руб.</p></div></li>
						<li class="large"><img src="photos/d29c59aaa8ad70bf5ff7debb5b3ff7d5.jpeg" alt="кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7" title="кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7"><div class="box" page="ochistitel-vozduha-ballu-ap-f-7950r"><span class="title">кондиционер daikin инструкция Очиститель воздуха Ballu AP-430 F7</span><p>от <span class="price">7950</span> руб.</p></div></li>
						<li class="large"><img src="photos/e3833aec18ff0ce36dee7820ee2149ac.jpeg" alt="домашние метеостанции rst Мойка воздуха Electrolux EHAW 6525" title="домашние метеостанции rst Мойка воздуха Electrolux EHAW 6525"><div class="box" page="moyka-vozduha-electrolux-ehaw-12750r-2"><span class="title">домашние метеостанции rst Мойка воздуха Electrolux EHAW 6525</span><p>от <span class="price">12750</span> руб.</p></div></li>
						<li class="large"><img src="photos/1207fa1e309f2bbd09993c4a2e11b6cd.jpeg" alt="водонагреватель косвенного нагрева Увлажнитель ZENET 2760" title="водонагреватель косвенного нагрева Увлажнитель ZENET 2760"><div class="box" page="uvlazhnitel-zenet-1650r"><span class="title">водонагреватель косвенного нагрева Увлажнитель ZENET 2760</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/0078f87242afe28a9c08a972bf45a466.jpeg" alt="конденсатор кондиционера Timberk TMS 07.HD3 Увлажнитель воздуха и полотенцесушитель" title="конденсатор кондиционера Timberk TMS 07.HD3 Увлажнитель воздуха и полотенцесушитель"><div class="box" page="timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-250r"><span class="title">конденсатор кондиционера Timberk TMS 07.HD3 Увлажнитель воздуха и полотенцесушитель</span><p>от <span class="price">250</span> руб.</p></div></li>
						<li><img src="photos/d102068cd605cb764603ec30314cddf0.jpeg" alt="кондиционеры монтаж обслуживание Электросапог  ИНКОР" title="кондиционеры монтаж обслуживание Электросапог  ИНКОР"><div class="box" page="elektrosapog-inkor-790r"><span class="title">кондиционеры монтаж обслуживание Электросапог  ИНКОР</span><p>от <span class="price">790</span> руб.</p></div></li>
						<li><img src="photos/7306344adf61ae8e6f46c280e9e05c4c.jpeg" alt="ручки кондиционера Камин Dimplex Vega" title="ручки кондиционера Камин Dimplex Vega"><div class="box" page="kamin-dimplex-vega-38186r"><span class="title">ручки кондиционера Камин Dimplex Vega</span><p>от <span class="price">38186</span> руб.</p></div></li>
						<li><img src="photos/ff5b486f3cfb58cfb6ea41a27f8e4bf2.jpeg" alt="кондиционеры канального типа Электропростыня Beurer TS20" title="кондиционеры канального типа Электропростыня Beurer TS20"><div class="box" page="elektroprostynya-beurer-ts-1800r"><span class="title">кондиционеры канального типа Электропростыня Beurer TS20</span><p>от <span class="price">1800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("konvektor-timberk-tece-e-2750r.php", 0, -4); if (file_exists("comments/konvektor-timberk-tece-e-2750r.php")) require_once "comments/konvektor-timberk-tece-e-2750r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="konvektor-timberk-tece-e-2750r.php" method="post" onsubmit="return checkForm(this)">
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