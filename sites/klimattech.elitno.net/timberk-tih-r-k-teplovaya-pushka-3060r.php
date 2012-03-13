<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("timberk-tih-r-k-teplovaya-pushka-3060r.php","устройство дизельная тепловая пушка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("timberk-tih-r-k-teplovaya-pushka-3060r.php", $nick, $comment);
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
		<title>устройство дизельная тепловая пушка Timberk TIH R2 3K Тепловая пушка  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="устройство дизельная тепловая пушка, изменение скорости вентилятора, электро конвекторы отопления, монтаж кондиционеров в москве, метеостанция цифровая rst, уровень шума кондиционера, кондиционер свежий воздух, интернет магазин вентиляторов, стоимость монтажа кондиционера, бальзам кондиционер, портативный кондиционер, scarlett инфракрасный обогреватель, как рассчитать кондиционер, водяные тепловентиляторы,  расчет тепловых пушек">
		<meta name="description" content="устройство дизельная тепловая пушка Переносная тепловая пушка Timberk TIH R1 5M – универсальное устройство для интен...">
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
						<a class="photo" href="photos/d265aeb3654a7b1c45ed9eb9eb6e9234.jpeg" title="устройство дизельная тепловая пушка Timberk TIH R2 3K Тепловая пушка"><img src="photos/d265aeb3654a7b1c45ed9eb9eb6e9234.jpeg" alt="устройство дизельная тепловая пушка Timberk TIH R2 3K Тепловая пушка" title="устройство дизельная тепловая пушка Timberk TIH R2 3K Тепловая пушка -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-v-8250r.php"><img src="photos/29df31b1a80551ac8eb5421d8d609494.jpeg" alt="изменение скорости вентилятора Водонагреватель Timberk SWH FS3 50 V" title="изменение скорости вентилятора Водонагреватель Timberk SWH FS3 50 V"></a><h2>Водонагреватель Timberk SWH FS3 50 V</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-premium-14500r.php"><img src="photos/c74e47e23d5ccda64c2ecf3f0a77dc13.jpeg" alt="электро конвекторы отопления Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000" title="электро конвекторы отопления Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000</h2></li>
							<li><a href="http://klimattech.elitno.net/srednevolnovyy-infrakrasnyy-obogrevatel-iwq-1900r.php"><img src="photos/67a6917e75e2d249213621846f6b966a.jpeg" alt="монтаж кондиционеров в москве Средневолновый инфракрасный обогреватель IWQ 120" title="монтаж кондиционеров в москве Средневолновый инфракрасный обогреватель IWQ 120"></a><h2>Средневолновый инфракрасный обогреватель IWQ 120</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>устройство дизельная тепловая пушка Timberk TIH R2 3K Тепловая пушка</h1>
						<div class="tb"><p>Цена: от <span class="price">3060</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18287.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Переносная тепловая пушка Timberk TIH R1 5M – универсальное устройство для интенсивного обогрева или осушения небольших помещений (садовых строений, гаражей, торговых павильонов) площадью до 35 квадратных метров. Имеет высокий класс электрозащиты, удобную ручку для транспортировки и датчик защиты от перегрева. Влагозащищена, 2 степени мощности. В комплекте идет привод со стандартной вилкой. Нагревательный элемент – оребренный ТЭН. </p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220/50 <li>Режимы мощности: 1500/3000 Вт <li>Вес: не более 5 кг <li>Увеличение температуры воздуха в режиме 2С не менее чем 36С <li>Габариты: 280х205х285 мм </li></ul><p><b>Производитель: Швеция</b></p> устройство дизельная тепловая пушка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8649b809c04e744919eb968f3bd579c1.jpeg" alt="метеостанция цифровая rst Конвектор Ballu Plaza BEP|E-1500" title="метеостанция цифровая rst Конвектор Ballu Plaza BEP|E-1500"><div class="box" page="konvektor-ballu-plaza-bepe-4100r"><span class="title">метеостанция цифровая rst Конвектор Ballu Plaza BEP|E-1500</span><p>от <span class="price">4100</span> руб.</p></div></li>
						<li><img src="photos/1262130e8464d9c06d7ad2296418cda2.jpeg" alt="уровень шума кондиционера Масляный радиатор Neoclima серия Standart" title="уровень шума кондиционера Масляный радиатор Neoclima серия Standart"><div class="box" page="maslyanyy-radiator-neoclima-seriya-standart-1900r"><span class="title">уровень шума кондиционера Масляный радиатор Neoclima серия Standart</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/3eeda3242ec91559c0efb8195ed63fc0.jpeg" alt="кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR" title="кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR"><div class="box" page="maslyanyy-radiator-timberk-tor-rr-2180r-2"><span class="title">кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR</span><p>от <span class="price">2180</span> руб.</p></div></li>
						<li><img src="photos/1e9bd820ceef4e4f379c2ef8bfec1484.jpeg" alt="интернет магазин вентиляторов Обогреватель NY 25LA" title="интернет магазин вентиляторов Обогреватель NY 25LA"><div class="box" page="obogrevatel-ny-la-2200r"><span class="title">интернет магазин вентиляторов Обогреватель NY 25LA</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li class="large"><img src="photos/79d8c81149db7d8b11f2b519ba845cf1.jpeg" alt="стоимость монтажа кондиционера Метеостанция беспроводная Vitek VT-6405" title="стоимость монтажа кондиционера Метеостанция беспроводная Vitek VT-6405"><div class="box" page="meteostanciya-besprovodnaya-vitek-vt-2700r"><span class="title">стоимость монтажа кондиционера Метеостанция беспроводная Vitek VT-6405</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li class="large"><img src="photos/a01db44cda068009da1951bb464b1916.jpeg" alt="бальзам кондиционер Обогреватель Бархатный сезон «Парусник»" title="бальзам кондиционер Обогреватель Бархатный сезон «Парусник»"><div class="box" page="obogrevatel-barhatnyy-sezon-«parusnik»-880r"><span class="title">бальзам кондиционер Обогреватель Бархатный сезон «Парусник»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/b382763055f961e6e914865557944b55.jpeg" alt="портативный кондиционер Инфракрасный тепловентилятор Neoclima HH07" title="портативный кондиционер Инфракрасный тепловентилятор Neoclima HH07"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-hh-1300r"><span class="title">портативный кондиционер Инфракрасный тепловентилятор Neoclima HH07</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/a917aa3905e6fd88abcea6eeb0319427.jpeg" alt="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759" title="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759"><div class="box" page="keramicheskiy-teploventilyator-vitek-vt-1380r"><span class="title">scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li><img src="photos/b6565f7fad53009fc4307abb9d764c90.jpeg" alt="как рассчитать кондиционер Тепловентилятор Atlanta ATH-105" title="как рассчитать кондиционер Тепловентилятор Atlanta ATH-105"><div class="box" page="teploventilyator-atlanta-ath-550r"><span class="title">как рассчитать кондиционер Тепловентилятор Atlanta ATH-105</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/67e3897c53598e5e910b41c2be5021c2.jpeg" alt="водяные тепловентиляторы Камин Комплект Dimplex Vianna DELUXE" title="водяные тепловентиляторы Камин Комплект Dimplex Vianna DELUXE"><div class="box" page="kamin-komplekt-dimplex-vianna-deluxe-22223r"><span class="title">водяные тепловентиляторы Камин Комплект Dimplex Vianna DELUXE</span><p>от <span class="price">22223</span> руб.</p></div></li>
						<li><img src="photos/e549e1e5157223b3859f1431efac4165.jpeg" alt="конвекторы электрические форум Очаг Dimplex Cavendish" title="конвекторы электрические форум Очаг Dimplex Cavendish"><div class="box" page="ochag-dimplex-cavendish-55000r"><span class="title">конвекторы электрические форум Очаг Dimplex Cavendish</span><p>от <span class="price">55000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("timberk-tih-r-k-teplovaya-pushka-3060r.php", 0, -4); if (file_exists("comments/timberk-tih-r-k-teplovaya-pushka-3060r.php")) require_once "comments/timberk-tih-r-k-teplovaya-pushka-3060r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="timberk-tih-r-k-teplovaya-pushka-3060r.php" method="post" onsubmit="return checkForm(this)">
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