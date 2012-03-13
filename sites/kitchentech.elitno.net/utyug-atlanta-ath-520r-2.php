<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("utyug-atlanta-ath-520r-2.php","готовим в мультиварке скачать книгу");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("utyug-atlanta-ath-520r-2.php", $nick, $comment);
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
		<title>готовим в мультиварке скачать книгу Утюг Atlanta ATH-470  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="готовим в мультиварке скачать книгу, кофеварка delonghi eco 310, электрочайники из нержавейки, микроволновая печь рейтинг, разборка кофемашины, кофеварка нескафе дольче густо, блендер philips hr 1617, марки микроволновых печей, чайник электрический тефаль, хлебопечка panasonic 256, блендер philips hr1659, пылесос витек с аквафильтром, купить рецепты для мультиварки, микроволновая печь электросхема,  температура утюга">
		<meta name="description" content="готовим в мультиварке скачать книгу Утюг Atlanta ATH-470 бело-зеленого цвета с пароувлажнителем мощностью 2200 Вт – ...">
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
						<a class="photo" href="photos/cd428dd5a0d9bc6681acf973ed19ada0.jpeg" title="готовим в мультиварке скачать книгу Утюг Atlanta ATH-470"><img src="photos/cd428dd5a0d9bc6681acf973ed19ada0.jpeg" alt="готовим в мультиварке скачать книгу Утюг Atlanta ATH-470" title="готовим в мультиварке скачать книгу Утюг Atlanta ATH-470 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-2400r.php"><img src="photos/c875beb952f9d6580895bee02e6ce554.jpeg" alt="кофеварка delonghi eco 310 Блендер Braun MX-2000" title="кофеварка delonghi eco 310 Блендер Braun MX-2000"></a><h2>Блендер Braun MX-2000</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2080r.php"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="электрочайники из нержавейки Блендер Redmond RHB-2907" title="электрочайники из нержавейки Блендер Redmond RHB-2907"></a><h2>Блендер Redmond RHB-2907</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-540r.php"><img src="photos/7189b59307d880db0fc6d320b1efc4f4.jpeg" alt="микроволновая печь рейтинг Кофемолка ATH-277" title="микроволновая печь рейтинг Кофемолка ATH-277"></a><h2>Кофемолка ATH-277</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>готовим в мультиварке скачать книгу Утюг Atlanta ATH-470</h1>
						<div class="tb"><p>Цена: от <span class="price">520</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19751.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Утюг Atlanta ATH-470 бело-зеленого цвета с пароувлажнителем мощностью 2200 Вт – стильный прибор для глажки, с подошвой из нержавеющей стали. Имеет функцию парового удара. Иногда для проглаживания сильно пересушенных или толстых тканей не хватает даже максимальной модности постоянного пара. Специально для таких случаев в этом утюге есть паровой удар. При нажатии на кнопку происходит мощная подача пара, находящегося под высоким давлением. Сильный удар горячего пара размягчает волокна и быстро разглаживает даже глубокие складки. А подача вертикального пара позволяет гладить пиджаки, пальто и другие вещи прямо на вешалке или манекене. Чтобы не испортить тонкие ткани использованием пара, предусмотрен распылитель.</p><p>Характеристики:</p><ul type=disc><li>Современный дизайн <li>Подошва из нержавеющей стали <li>Сухой или паровой режим глаженья <li>Функция вертикального пара <li>Прозрачный резервуар для воды <li>Функция распыления <li>Дополнительная подача пара </li></ul><ul type=disc><li>Максимальная мощность 2200 Вт <li>230 В, 50 Гц <li>31.5 x 12.6 x 15.6 см </li></ul><p><strong>Производитель: США</strong></p> готовим в мультиварке скачать книгу</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/f21bb6b475177e08f0f09714d9a7c1cf.jpeg" alt="разборка кофемашины Микроволновка Zigmund & Shtain BMO 10.342 B" title="разборка кофемашины Микроволновка Zigmund & Shtain BMO 10.342 B"><div class="box" page="mikrovolnovka-zigmund-shtain-bmo-b-14900r"><span class="title">разборка кофемашины Микроволновка Zigmund & Shtain BMO 10.342 B</span><p>от <span class="price">14900</span> руб.</p></div></li>
						<li><img src="photos/5ddb7c0074c19c7852a8997f3b296d03.jpeg" alt="кофеварка нескафе дольче густо Порционные весы NP-5001S" title="кофеварка нескафе дольче густо Порционные весы NP-5001S"><div class="box" page="porcionnye-vesy-nps-5260r"><span class="title">кофеварка нескафе дольче густо Порционные весы NP-5001S</span><p>от <span class="price">5260</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/d6db045bcfab03ae142ac160811c2a0a.jpeg" alt="марки микроволновых печей Чайник электричесукий Atlanta ATH-756" title="марки микроволновых печей Чайник электричесукий Atlanta ATH-756"><div class="box" page="chaynik-elektrichesukiy-atlanta-ath-950r"><span class="title">марки микроволновых печей Чайник электричесукий Atlanta ATH-756</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/396dcef56ae58a2fdd710c34b32d6011.jpeg" alt="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)" title="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r-2"><span class="title">чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/f5d552f595352df6a881129a694e04b1.jpeg" alt="хлебопечка panasonic 256 Чайник электрический Redmond RK-M112" title="хлебопечка panasonic 256 Чайник электрический Redmond RK-M112"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-990r"><span class="title">хлебопечка panasonic 256 Чайник электрический Redmond RK-M112</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/eb489286225dbbc8037e4654ee2b1544.jpeg" alt="блендер philips hr1659 Чайник электрический Redmond  RK-M114" title="блендер philips hr1659 Чайник электрический Redmond  RK-M114"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-2990r"><span class="title">блендер philips hr1659 Чайник электрический Redmond  RK-M114</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li><img src="photos/5693cfb54e3dd38a9bb80b0d7d894cdb.jpeg" alt="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)" title="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)"><div class="box" page="otkryvalka-hand-free-opener-can-opener-470r"><span class="title">пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li><img src="photos/c4ed1ed9a910d5dd5d3b4d4cba707112.jpeg" alt="купить рецепты для мультиварки Насадка для матрасов в упаковке Dyson Mattress Tool Assy Retail NP" title="купить рецепты для мультиварки Насадка для матрасов в упаковке Dyson Mattress Tool Assy Retail NP"><div class="box" page="nasadka-dlya-matrasov-v-upakovke-dyson-mattress-tool-assy-retail-np-1090r"><span class="title">купить рецепты для мультиварки Насадка для матрасов в упаковке Dyson Mattress Tool Assy Retail NP</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/00492fb3046ec485746c0b2d1a1385eb.jpeg" alt="микроволновая печь электросхема Пылесос Thomas Inox 1545 S" title="микроволновая печь электросхема Пылесос Thomas Inox 1545 S"><div class="box" page="pylesos-thomas-inox-s-10410r"><span class="title">микроволновая печь электросхема Пылесос Thomas Inox 1545 S</span><p>от <span class="price">10410</span> руб.</p></div></li>
						<li><img src="photos/b81f4815d2a9df868070af2d7b1533ee.jpeg" alt="парогенератор aeg Утюг Vitek VT-1209" title="парогенератор aeg Утюг Vitek VT-1209"><div class="box" page="utyug-vitek-vt-1100r"><span class="title">парогенератор aeg Утюг Vitek VT-1209</span><p>от <span class="price">1100</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("utyug-atlanta-ath-520r-2.php", 0, -4); if (file_exists("comments/utyug-atlanta-ath-520r-2.php")) require_once "comments/utyug-atlanta-ath-520r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="utyug-atlanta-ath-520r-2.php" method="post" onsubmit="return checkForm(this)">
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