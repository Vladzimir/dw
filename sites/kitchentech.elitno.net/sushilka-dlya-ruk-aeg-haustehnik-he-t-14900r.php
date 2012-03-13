<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sushilka-dlya-ruk-aeg-haustehnik-he-t-14900r.php","zigmund shtain мультиварка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sushilka-dlya-ruk-aeg-haustehnik-he-t-14900r.php", $nick, $comment);
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
		<title>zigmund shtain мультиварка Сушилка для рук AEG Haustehnik HE 260 T  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="zigmund shtain мультиварка, похудеть с пароваркой, соковыжималка для моркови, кофемашина philips hd 8745, грудка в пароварке, микроволновые печи elenberg, запчасти пылесос томас, капсульные кофемашины bosch, щетка для пылесоса electrolux, сколько стоит пылесос, шампунь для пылесоса, как блендером сделать пюре, кофеварки домашние, ржаная мука для хлебопечки,  пылесос компрессор отзывы">
		<meta name="description" content="zigmund shtain мультиварка Эффективная сушилка для рук HE 260 T немецкого производства в прочном брызгозащи...">
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
						<a class="photo" href="photos/4cb4f2589649db6c2900122f369a69d4.jpeg" title="zigmund shtain мультиварка Сушилка для рук AEG Haustehnik HE 260 T"><img src="photos/4cb4f2589649db6c2900122f369a69d4.jpeg" alt="zigmund shtain мультиварка Сушилка для рук AEG Haustehnik HE 260 T" title="zigmund shtain мультиварка Сушилка для рук AEG Haustehnik HE 260 T -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofeynoe-zerno-v-gorkom-shokolade-melitta-60r.php"><img src="photos/fb507058255502712acd55f26151d977.png" alt="похудеть с пароваркой Кофейное зерно в горьком шоколаде Melitta" title="похудеть с пароваркой Кофейное зерно в горьком шоколаде Melitta"></a><h2>Кофейное зерно в горьком шоколаде Melitta</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-680r.php"><img src="photos/6e844ec2051132de84c89f71f9ba6d6a.jpeg" alt="соковыжималка для моркови Кухонный комбайн ATH-360" title="соковыжималка для моркови Кухонный комбайн ATH-360"></a><h2>Кухонный комбайн ATH-360</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-ci-silver-76390r.php"><img src="photos/c1f8cc6aba8e400d609d0ece06ae850b.jpeg" alt="кофемашина philips hd 8745 Эспрессо-кофемашина Melitta Caffeo CI Silver (4.0009.98)" title="кофемашина philips hd 8745 Эспрессо-кофемашина Melitta Caffeo CI Silver (4.0009.98)"></a><h2>Эспрессо-кофемашина Melitta Caffeo CI Silver (4.0009.98)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>zigmund shtain мультиварка Сушилка для рук AEG Haustehnik HE 260 T</h1>
						<div class="tb"><p>Цена: от <span class="price">14900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19513.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Эффективная сушилка для рук HE 260 T немецкого производства в прочном брызгозащитном корпусе, обладающая высокой мощностью, низким уровнем шума и полной автоматикой бесконтактного включения: инфракрасный электронный датчик срабатывает при приближении рук.</p><p><b>Характеристики: </b></p><ul type=disc><li>Мощность 1.8 кВт; </li><li>Воздушный поток ~ 250 м3/ час </li><li>Прочный пластиковый корпус; </li><li>Оптический сенсор; </li><li>Автоматическое отключение; </li><li>Минимальный уровень шума – 68 дБ </li><li>Особенности: размеры (ВxШxГ) 25x24x23 cм; вес: 2.6 кг.</li></ul><p> </p><p><b>Производитель: Германия</b></p><b>Гарантия: 5 лет</b> zigmund shtain мультиварка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" alt="грудка в пароварке Кофемолка  ATH-272" title="грудка в пароварке Кофемолка  ATH-272"><div class="box" page="kofemolka-ath-600r"><span class="title">грудка в пароварке Кофемолка  ATH-272</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/a5bbc6e64af24877cdab95c62f91247a.jpeg" alt="микроволновые печи elenberg Кофемолка ATH-276" title="микроволновые печи elenberg Кофемолка ATH-276"><div class="box" page="kofemolka-ath-450r"><span class="title">микроволновые печи elenberg Кофемолка ATH-276</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/a9b561236bfa7747af43043cb7d43b52.jpeg" alt="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро" title="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро"><div class="box" page="mikrovolnovaya-pech-s-grilem-moulinex-mw-parovarka-l-serebro-6110r"><span class="title">запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро</span><p>от <span class="price">6110</span> руб.</p></div></li>
						<li><img src="photos/151cdbb0e55d78748fdd51a7bbe40bf0.jpeg" alt="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329" title="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329"><div class="box" page="sokovyzhimalka-atlanta-ath-2990r"><span class="title">капсульные кофемашины bosch Соковыжималка Atlanta ATH-329</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li class="large"><img src="photos/d0af4bd740dd75cf948a8f00224c2bee.jpeg" alt="щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White" title="щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-white-1080r"><span class="title">щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White</span><p>от <span class="price">1080</span> руб.</p></div></li>
						<li class="large"><img src="photos/463a93164abee7f214102b8fe77a244c.jpeg" alt="сколько стоит пылесос Чайник электрический Atlanta ATH-690" title="сколько стоит пылесос Чайник электрический Atlanta ATH-690"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-1280r"><span class="title">сколько стоит пылесос Чайник электрический Atlanta ATH-690</span><p>от <span class="price">1280</span> руб.</p></div></li>
						<li class="large"><img src="photos/52100c33edc3ca0743ca02e24c7f8dba.jpeg" alt="шампунь для пылесоса Электрический чайник Atlanta АТН-720" title="шампунь для пылесоса Электрический чайник Atlanta АТН-720"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-550r"><span class="title">шампунь для пылесоса Электрический чайник Atlanta АТН-720</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/8a7e2a46651bfb4c8fa5108f6af45161.jpeg" alt="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02" title="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-9990r"><span class="title">как блендером сделать пюре Детектор жучков BugHunter Professional BH-02</span><p>от <span class="price">9990</span> руб.</p></div></li>
						<li><img src="photos/f08bd4abc7ad4c0cc84da510e6f6c4d3.jpeg" alt="кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт." title="кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт."><div class="box" page="filtr-dlya-pylesosa-vitek-vt-vt-sht-215r"><span class="title">кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт.</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/6ad68580ca9fe51d58dccc0df51b3bb5.jpeg" alt="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter" title="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-aquatherm-aquafilter-16720r"><span class="title">ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter</span><p>от <span class="price">16720</span> руб.</p></div></li>
						<li><img src="photos/f508d547808db2bce707d6b2135eb926.jpeg" alt="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter" title="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-prestige-s-aquafilter-10800r"><span class="title">индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter</span><p>от <span class="price">10800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sushilka-dlya-ruk-aeg-haustehnik-he-t-14900r.php", 0, -4); if (file_exists("comments/sushilka-dlya-ruk-aeg-haustehnik-he-t-14900r.php")) require_once "comments/sushilka-dlya-ruk-aeg-haustehnik-he-t-14900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sushilka-dlya-ruk-aeg-haustehnik-he-t-14900r.php" method="post" onsubmit="return checkForm(this)">
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