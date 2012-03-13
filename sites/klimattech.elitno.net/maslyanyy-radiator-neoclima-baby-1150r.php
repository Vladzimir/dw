<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("maslyanyy-radiator-neoclima-baby-1150r.php","самый лучший конвектор");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("maslyanyy-radiator-neoclima-baby-1150r.php", $nick, $comment);
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
		<title>самый лучший конвектор Масляный радиатор Neoclima Baby  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="самый лучший конвектор, тепловентилятор пушка, водонагреватели в краснодаре, очистка кондиционера, предохранитель кондиционера, вентилятор охлаждения калина, изготовитель вентиляторов, фильтр для вентилятора, режим обогрева кондиционер, vanguard тепловая пушка, бытовые кондиционеры сплит системы, гидромуфта вентилятора, кондиционер на фольксваген, программа подбора вентиляторов,  скачать бесплатно dvd конвектор">
		<meta name="description" content="самый лучший конвектор Масляный радиатор Neoclima имеет небольшие габариты, что позволяет удобно размес...">
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
						<a class="photo" href="photos/b9f6a629b44f6b0ab4e2ef0711a1dad7.jpeg" title="самый лучший конвектор Масляный радиатор Neoclima Baby"><img src="photos/b9f6a629b44f6b0ab4e2ef0711a1dad7.jpeg" alt="самый лучший конвектор Масляный радиатор Neoclima Baby" title="самый лучший конвектор Масляный радиатор Neoclima Baby -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-5660r.php"><img src="photos/429ce124c8e747a48410ea6afe40a1e1.jpeg" alt="тепловентилятор пушка Водонагреватель Neoclima EWH 150" title="тепловентилятор пушка Водонагреватель Neoclima EWH 150"></a><h2>Водонагреватель Neoclima EWH 150</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-premium-43900r.php"><img src="photos/c7777a69f8a67cf3e3719a3ab82f8c47.png" alt="водонагреватели в краснодаре Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 6000" title="водонагреватели в краснодаре Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 6000"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 6000</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-m-2080r.php"><img src="photos/ddc0aab203cdce31375d769ac0564ff3.jpeg" alt="очистка кондиционера Конвектор Timberk TEC.E1 M 1000" title="очистка кондиционера Конвектор Timberk TEC.E1 M 1000"></a><h2>Конвектор Timberk TEC.E1 M 1000</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>самый лучший конвектор Масляный радиатор Neoclima Baby</h1>
						<div class="tb"><p>Цена: от <span class="price">1150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16508.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Масляный радиатор </b><b>Neoclima</b> имеет небольшие габариты, что позволяет удобно разместить его в ограниченном пространстве. У прибора имеется специальная ручка для комфортной транспортировки, а для надежной установки – устойчивые крепления. Для простоты управления радиатор снабжен световым индикатором работы и регулятором мощности. <b>Масляный радиатор </b><b>Neoclima</b> имеет защиту от перегрева.</p><p><b>Технические характеристики</b>:</p><ul type=\disc\><li>Компактные размеры; </li><li>Напряжение: 220 В; </li><li>Управление: механическое; </li><li>Регулируемый термостат; </li><li>Световой индикатор работы; </li><li>Защита от перегрева; </li><li>Модель NC 1207-B: количество секций – 7, мощность – 0.7 кВт; </li><li>Модель NC 1209-B: количество секций – 9, мощность – 0.9 кВт.</li></ul><p><b>Гарантия</b>: 1 год</p><p><b>Производитель</b>: Neoclima</p><p><b>Страна</b>: Китай</p> самый лучший конвектор</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7630b1e6dccadaf1f4a39299c06f31be.jpeg" alt="предохранитель кондиционера Конвектор Timberk TEC.E1 E 1000" title="предохранитель кондиционера Конвектор Timberk TEC.E1 E 1000"><div class="box"><a href="http://klimattech.elitno.net/konvektor-timberk-tece-e-2360r.php"><h3 class="title">предохранитель кондиционера Конвектор Timberk TEC.E1 E 1000</h3><p>от <span class="price">2360</span> руб.</p></a></div></li>
						<li><img src="photos/23f3cf9b829bf9ea8c9049b93628f3cb.jpeg" alt="вентилятор охлаждения калина Кондиционер мобильный Timberk AC TIM 09H P1" title="вентилятор охлаждения калина Кондиционер мобильный Timberk AC TIM 09H P1"><div class="box" page="kondicioner-mobilnyy-timberk-ac-tim-h-p-22800r"><span class="title">вентилятор охлаждения калина Кондиционер мобильный Timberk AC TIM 09H P1</span><p>от <span class="price">22800</span> руб.</p></div></li>
						<li><img src="photos/cbc44bc22b112f1d3347aec6358c74a8.gif" alt="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520" title="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520"><div class="box" page="pogodnaya-animacionnaya-stanciya-rst-meteolight-art-6090r"><span class="title">изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520</span><p>от <span class="price">6090</span> руб.</p></div></li>
						<li><img src="photos/a15f4e79a9ab78189c7570ce9332e0e2.jpeg" alt="фильтр для вентилятора Тепловая пушка Ballu BPH-5.000" title="фильтр для вентилятора Тепловая пушка Ballu BPH-5.000"><div class="box" page="teplovaya-pushka-ballu-bph-4500r"><span class="title">фильтр для вентилятора Тепловая пушка Ballu BPH-5.000</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/0fada83330f8f908ee7f1c8b4ca94373.jpeg" alt="режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103" title="режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-360r"><span class="title">режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103</span><p>от <span class="price">360</span> руб.</p></div></li>
						<li class="large"><img src="photos/66bc8545418b36ff4f9e041b54df6f3a.jpeg" alt="vanguard тепловая пушка Увлажнитель воздуха ультразвуковой Ballu UHB-900M" title="vanguard тепловая пушка Увлажнитель воздуха ультразвуковой Ballu UHB-900M"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-ballu-uhbm-5070r"><span class="title">vanguard тепловая пушка Увлажнитель воздуха ультразвуковой Ballu UHB-900M</span><p>от <span class="price">5070</span> руб.</p></div></li>
						<li class="large"><img src="photos/2daf4ac580074c48b9f81c6b2c52404b.jpeg" alt="бытовые кондиционеры сплит системы Увлажнитель воздуха Beurer LB44" title="бытовые кондиционеры сплит системы Увлажнитель воздуха Beurer LB44"><div class="box" page="uvlazhnitel-vozduha-beurer-lb-3000r"><span class="title">бытовые кондиционеры сплит системы Увлажнитель воздуха Beurer LB44</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/90c5f09bed9f1d49d0f4bd29524a76c1.jpeg" alt="гидромуфта вентилятора Timberk THU UL 03 A4 Увлажнитель и ароматизатор воздуха" title="гидромуфта вентилятора Timberk THU UL 03 A4 Увлажнитель и ароматизатор воздуха"><div class="box" page="timberk-thu-ul-a-uvlazhnitel-i-aromatizator-vozduha-1600r-4"><span class="title">гидромуфта вентилятора Timberk THU UL 03 A4 Увлажнитель и ароматизатор воздуха</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/d9fab04b9d740f2a98c07791e33ad613.jpeg" alt="кондиционер на фольксваген Камин Комплект Dimplex Verona CFP3798WN" title="кондиционер на фольксваген Камин Комплект Dimplex Verona CFP3798WN"><div class="box" page="kamin-komplekt-dimplex-verona-cfpwn-24414r"><span class="title">кондиционер на фольксваген Камин Комплект Dimplex Verona CFP3798WN</span><p>от <span class="price">24414</span> руб.</p></div></li>
						<li><img src="photos/70f6960cecdf1abff008176a5480b04e.jpeg" alt="программа подбора вентиляторов Камин Dimplex Modern SP 16" title="программа подбора вентиляторов Камин Dimplex Modern SP 16"><div class="box" page="kamin-dimplex-modern-sp-67295r"><span class="title">программа подбора вентиляторов Камин Dimplex Modern SP 16</span><p>от <span class="price">67295</span> руб.</p></div></li>
						<li><img src="photos/e585d1e72485c3e967023a9b09b2259c.jpeg" alt="тепловые пушки хабаровск Камин Dimplex Obsidian" title="тепловые пушки хабаровск Камин Dimplex Obsidian"><div class="box" page="kamin-dimplex-obsidian-29735r"><span class="title">тепловые пушки хабаровск Камин Dimplex Obsidian</span><p>от <span class="price">29735</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("maslyanyy-radiator-neoclima-baby-1150r.php", 0, -4); if (file_exists("comments/maslyanyy-radiator-neoclima-baby-1150r.php")) require_once "comments/maslyanyy-radiator-neoclima-baby-1150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="maslyanyy-radiator-neoclima-baby-1150r.php" method="post" onsubmit="return checkForm(this)">
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