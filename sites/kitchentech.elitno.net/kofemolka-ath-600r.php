<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kofemolka-ath-600r.php","как варить кофе в кофеварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kofemolka-ath-600r.php", $nick, $comment);
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
		<title>как варить кофе в кофеварке Кофемолка  ATH-272  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="как варить кофе в кофеварке, пылесос thomas genius s2, покупка мультиварки, контрольная закупка пылесос, гречневая каша в мультиварке, мультиварка рецепты картофель, самоочистка аэрогриля, scarlett утюг отзывы, продам вафельницу, книга рецептов для хлебопечки, bamix блендер отзывы, запчасти для блендера braun, запчасти пылесос томас, аэрогриль рецепты картофель,  рецепты для мультиварки dex">
		<meta name="description" content="как варить кофе в кофеварке Кофемолка Atlanta АТН-272 с ротационным ножом вместимостью 65 грамм и мощностью ...">
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
						<a class="photo" href="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" title="как варить кофе в кофеварке Кофемолка  ATH-272"><img src="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" alt="как варить кофе в кофеварке Кофемолка  ATH-272" title="как варить кофе в кофеварке Кофемолка  ATH-272 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2180r.php"><img src="photos/a1f8cd769afd06226b32e6fb44474c86.jpeg" alt="пылесос thomas genius s2 Блендер Redmond RHB-2908" title="пылесос thomas genius s2 Блендер Redmond RHB-2908"></a><h2>Блендер Redmond RHB-2908</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-s-grilem-moulinex-mw-parovarka-l-nerzhaveyuschaya-stal-7000r.php"><img src="photos/3f9ea91ea855b5f87eaf160e0a74622e.jpeg" alt="покупка мультиварки Микроволновая печь с грилем Moulinex MW533031 пароварка, 23 л, нержавеющая сталь" title="покупка мультиварки Микроволновая печь с грилем Moulinex MW533031 пароварка, 23 л, нержавеющая сталь"></a><h2>Микроволновая печь с грилем Moulinex MW533031 пароварка, 23 л, нержавеющая сталь</h2></li>
							<li><a href="http://kitchentech.elitno.net/bodum-bistro-euro-elektricheskiy-mikser-2740r.php"><img src="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" alt="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер" title="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер"></a><h2>Bodum BISTRO 11151-01EURO Электрический миксер</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>как варить кофе в кофеварке Кофемолка  ATH-272</h1>
						<div class="tb"><p>Цена: от <span class="price">600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19596.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Кофемолка Atlanta АТН-272 с ротационным ножом вместимостью 65 грамм и мощностью 180 Вт оснащена регулировкой степени помола, поэтому вы сможете подобрать степень измельчения в зависимости от своих предпочтений. Для безопасности кофемолка имеет блокировку включения при снятой крышке и приспособление для намотки шнура.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Вместимость: 65 грамм <li>Мощность: 180 Вт <li>Система помола: ротационный нож </li></ul><p><strong>Производитель: США</strong></p> как варить кофе в кофеварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8472253b416100a0ed111bb9484a2b5a.jpeg" alt="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л" title="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л"><div class="box" page="morozhenica-montiss-kimm-l-1900r"><span class="title">гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/65e8a544a49b70285af00e3f7637c4af.jpeg" alt="мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная" title="мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная"><div class="box" page="myasorubka-meat-grinder-f-sverhlegkaya-udaroprochnaya-500r"><span class="title">мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/948f1a9b44ef51dbbf106577d1753c25.jpeg" alt="самоочистка аэрогриля Соковыжималка" title="самоочистка аэрогриля Соковыжималка"><div class="box" page="sokovyzhimalka-3320r"><span class="title">самоочистка аэрогриля Соковыжималка</span><p>от <span class="price">3320</span> руб.</p></div></li>
						<li><img src="photos/3eefca7b285e5c7425033f0997c9145b.jpeg" alt="scarlett утюг отзывы Чайник электрический Vitek VT-1104" title="scarlett утюг отзывы Чайник электрический Vitek VT-1104"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r"><span class="title">scarlett утюг отзывы Чайник электрический Vitek VT-1104</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/47745aa09108a6bfabc67b839ea476bd.jpeg" alt="продам вафельницу Чайник электрический Vitek VT-1114" title="продам вафельницу Чайник электрический Vitek VT-1114"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1030r"><span class="title">продам вафельницу Чайник электрический Vitek VT-1114</span><p>от <span class="price">1030</span> руб.</p></div></li>
						<li class="large"><img src="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" alt="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118" title="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1999r"><span class="title">книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118</span><p>от <span class="price">1999</span> руб.</p></div></li>
						<li class="large"><img src="photos/795752aa9995ffddbd65e841f9d26c51.jpeg" alt="bamix блендер отзывы Чайник электрический  Vitesse VS-139 1,7л" title="bamix блендер отзывы Чайник электрический  Vitesse VS-139 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1820r"><span class="title">bamix блендер отзывы Чайник электрический  Vitesse VS-139 1,7л</span><p>от <span class="price">1820</span> руб.</p></div></li>
						<li><img src="photos/e766dc7a6c0cf1b164fee2cb011a81f8.jpeg" alt="запчасти для блендера braun Чайник Vitek VT-1163" title="запчасти для блендера braun Чайник Vitek VT-1163"><div class="box" page="chaynik-vitek-vt-990r"><span class="title">запчасти для блендера braun Чайник Vitek VT-1163</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/140994d3679b87017beef134272baa56.jpeg" alt="запчасти пылесос томас Чайник дисковый керамический 1,7л, цветы Zauber ECO-340" title="запчасти пылесос томас Чайник дисковый керамический 1,7л, цветы Zauber ECO-340"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-cvety-zauber-eco-1790r"><span class="title">запчасти пылесос томас Чайник дисковый керамический 1,7л, цветы Zauber ECO-340</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/7bfc4f4031d68720fdce5209cf8c8c0d.jpeg" alt="аэрогриль рецепты картофель Мини-весы Tanita 1479V" title="аэрогриль рецепты картофель Мини-весы Tanita 1479V"><div class="box" page="minivesy-tanita-v-3000r"><span class="title">аэрогриль рецепты картофель Мини-весы Tanita 1479V</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/ef2885939f9c24bf748f6b2d7462e40b.jpeg" alt="блендер бош купить Щетка для уборки твердых поверхностей Dyson Articulating Hard Floor Tool Retail" title="блендер бош купить Щетка для уборки твердых поверхностей Dyson Articulating Hard Floor Tool Retail"><div class="box" page="schetka-dlya-uborki-tverdyh-poverhnostey-dyson-articulating-hard-floor-tool-retail-1790r"><span class="title">блендер бош купить Щетка для уборки твердых поверхностей Dyson Articulating Hard Floor Tool Retail</span><p>от <span class="price">1790</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kofemolka-ath-600r.php", 0, -4); if (file_exists("comments/kofemolka-ath-600r.php")) require_once "comments/kofemolka-ath-600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kofemolka-ath-600r.php" method="post" onsubmit="return checkForm(this)">
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