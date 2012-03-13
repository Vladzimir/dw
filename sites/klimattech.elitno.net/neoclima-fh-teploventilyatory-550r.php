<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("neoclima-fh-teploventilyatory-550r.php","ремонт кондиционеров в москве");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("neoclima-fh-teploventilyatory-550r.php", $nick, $comment);
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
		<title>ремонт кондиционеров в москве NEOCLIMA FH-03 Тепловентиляторы  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="ремонт кондиционеров в москве, печка с кондиционером приора, кондиционеры в петербурге, где купить тепловую пушку, настенные водонагреватели, вентилятор silent design, сдвоенные вентиляторы, водонагреватели аристон 100, scarlett инфракрасный обогреватель, домашние метеостанции rst, вентилятор для жесткого диска, контроль вентиляторов, расходники для кондиционеров, чери амулет кондиционер,  водонагреватель electrolux ewh 50 centurio">
		<meta name="description" content="ремонт кондиционеров в москве Тепловентилятор Neoclima FH-03 предназначен для обогрева небольших помещений пло...">
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
						<a class="photo" href="photos/ab919beb2a8fc47869d21aaee94c925b.jpeg" title="ремонт кондиционеров в москве NEOCLIMA FH-03 Тепловентиляторы"><img src="photos/ab919beb2a8fc47869d21aaee94c925b.jpeg" alt="ремонт кондиционеров в москве NEOCLIMA FH-03 Тепловентиляторы" title="ремонт кондиционеров в москве NEOCLIMA FH-03 Тепловентиляторы -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/timberk-tgh-m-gazovyy-obogrevatel-4800r.php"><img src="photos/5a227f7ac918007c7e016d98a850253b.jpeg" alt="печка с кондиционером приора Timberk TGH 4200 M2 Газовый обогреватель" title="печка с кондиционером приора Timberk TGH 4200 M2 Газовый обогреватель"></a><h2>Timberk TGH 4200 M2 Газовый обогреватель</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-comfort-9200r.php"><img src="photos/a49bf9e3d787ee5c763bc1bcb3d8958b.jpeg" alt="кондиционеры в петербурге Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Comfort 2020" title="кондиционеры в петербурге Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Comfort 2020"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Comfort 2020</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-premium-h-15600r.php"><img src="photos/6b206e756531ae84b6e7c4b13c9f2b3e.jpeg" alt="где купить тепловую пушку Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000 H" title="где купить тепловую пушку Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000 H"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000 H</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>ремонт кондиционеров в москве NEOCLIMA FH-03 Тепловентиляторы</h1>
						<div class="tb"><p>Цена: от <span class="price">550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16451.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Тепловентилятор </b><b>Neoclima FH-03 </b>предназначен для обогрева небольших помещений площадью до двадцати квадратных метров. Вы можете выбрать режим подачи теплого воздуха для обогрева или холодного обдува. <b>Тепловентилятор </b><b>Neoclima FH-03</b> не сушит воздух, а также не сжигает кислород во время работы, поэтому он станет отличным выбором для использования в закрытых помещениях.</p><p><b>Технические характеристики</b>:</p><ul type=\disc\><li>две ступени мощности: 1.0/2.0 кВт </li><li>управление: механическое </li><li>нагревательный элемент: электрическая спираль </li><li>напряжение: 220 В </li><li>режим холодного обдува </li><li>регулируемый термостат </li><li>автоматическое поддержание температуры </li><li>защита от перегрева </li><li>световой индикатор работы</li></ul><p><b>Гарантия</b>: 1 год</p><p><b>Производитель</b>: Neoclima</p><p><b>Страна</b>: Китай</p> ремонт кондиционеров в москве</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/6a901451521ca74d7bab5d6d07bb969d.jpeg" alt="настенные водонагреватели Конвектор электрический Timberk TEC.PS1 M IN" title="настенные водонагреватели Конвектор электрический Timberk TEC.PS1 M IN"><div class="box"><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecps-m-in-2150r.php"><h3 class="title">настенные водонагреватели Конвектор электрический Timberk TEC.PS1 M IN</h3><p>от <span class="price">2150</span> руб.</p></a></div></li>
						<li><img src="photos/071c675657286c6c0cdefdb2c51d339f.jpeg" alt="вентилятор silent design Кондиционер Ballu BSG-24H" title="вентилятор silent design Кондиционер Ballu BSG-24H"><div class="box" page="kondicioner-ballu-bsgh-32750r"><span class="title">вентилятор silent design Кондиционер Ballu BSG-24H</span><p>от <span class="price">32750</span> руб.</p></div></li>
						<li><img src="photos/c2de30b57a5c75c5b9251fcabe80c0c9.jpeg" alt="сдвоенные вентиляторы Обогреватель NY 20LF" title="сдвоенные вентиляторы Обогреватель NY 20LF"><div class="box" page="obogrevatel-ny-lf-1950r-2"><span class="title">сдвоенные вентиляторы Обогреватель NY 20LF</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/bc1daaf95eee8347567dc4da1715dd67.jpeg" alt="водонагреватели аристон 100 Масляный обогреватель  Atlanta АТН-2002" title="водонагреватели аристон 100 Масляный обогреватель  Atlanta АТН-2002"><div class="box" page="maslyanyy-obogrevatel-atlanta-atn-1920r"><span class="title">водонагреватели аристон 100 Масляный обогреватель  Atlanta АТН-2002</span><p>от <span class="price">1920</span> руб.</p></div></li>
						<li class="large"><img src="photos/a917aa3905e6fd88abcea6eeb0319427.jpeg" alt="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759" title="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759"><div class="box" page="keramicheskiy-teploventilyator-vitek-vt-1380r"><span class="title">scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li class="large"><img src="photos/e3833aec18ff0ce36dee7820ee2149ac.jpeg" alt="домашние метеостанции rst Мойка воздуха Electrolux EHAW 6525" title="домашние метеостанции rst Мойка воздуха Electrolux EHAW 6525"><div class="box" page="moyka-vozduha-electrolux-ehaw-12750r-2"><span class="title">домашние метеостанции rst Мойка воздуха Electrolux EHAW 6525</span><p>от <span class="price">12750</span> руб.</p></div></li>
						<li class="large"><img src="photos/0d6a9a2d5d0b8548fdcc53e2a36f2ef1.jpeg" alt="вентилятор для жесткого диска Увлажнитель ZENET 2728" title="вентилятор для жесткого диска Увлажнитель ZENET 2728"><div class="box" page="uvlazhnitel-zenet-4650r"><span class="title">вентилятор для жесткого диска Увлажнитель ZENET 2728</span><p>от <span class="price">4650</span> руб.</p></div></li>
						<li><img src="photos/2b4391db10a68fe6aa7d6bd5452d399a.jpeg" alt="контроль вентиляторов Уличный газовый обогреватель Neoclima 09HW-B" title="контроль вентиляторов Уличный газовый обогреватель Neoclima 09HW-B"><div class="box" page="ulichnyy-gazovyy-obogrevatel-neoclima-hwb-10250r"><span class="title">контроль вентиляторов Уличный газовый обогреватель Neoclima 09HW-B</span><p>от <span class="price">10250</span> руб.</p></div></li>
						<li><img src="photos/7086461bbbdce969fa5d518c69cf34de.jpeg" alt="расходники для кондиционеров Грелка Beurer HK65 Aroma" title="расходники для кондиционеров Грелка Beurer HK65 Aroma"><div class="box" page="grelka-beurer-hk-aroma-3400r"><span class="title">расходники для кондиционеров Грелка Beurer HK65 Aroma</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li><img src="photos/c4148ae6623dea323f635bc927e7a99e.jpeg" alt="чери амулет кондиционер Камин Комплект Dimplex Acadian DFP 20-1060BW" title="чери амулет кондиционер Камин Комплект Dimplex Acadian DFP 20-1060BW"><div class="box" page="kamin-komplekt-dimplex-acadian-dfp-bw-26918r"><span class="title">чери амулет кондиционер Камин Комплект Dimplex Acadian DFP 20-1060BW</span><p>от <span class="price">26918</span> руб.</p></div></li>
						<li><img src="photos/e549e1e5157223b3859f1431efac4165.jpeg" alt="конвекторы электрические форум Очаг Dimplex Cavendish" title="конвекторы электрические форум Очаг Dimplex Cavendish"><div class="box" page="ochag-dimplex-cavendish-55000r"><span class="title">конвекторы электрические форум Очаг Dimplex Cavendish</span><p>от <span class="price">55000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("neoclima-fh-teploventilyatory-550r.php", 0, -4); if (file_exists("comments/neoclima-fh-teploventilyatory-550r.php")) require_once "comments/neoclima-fh-teploventilyatory-550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="neoclima-fh-teploventilyatory-550r.php" method="post" onsubmit="return checkForm(this)">
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