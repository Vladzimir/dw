<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kofemolka-ath-450r.php","парогенератор для турецкой бани");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kofemolka-ath-450r.php", $nick, $comment);
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
		<title>парогенератор для турецкой бани Кофемолка ATH-276  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="парогенератор для турецкой бани, микроволновая печь вред, кофеварка delonghi eco 310, пылесос sc 4760h33, компактная микроволновая печь, микроволновая печь рейтинг, соковыжималка profi cook, кофемолка bosch, ремонт мясорубок мулинекс, мультиварка супра инструкция, пылесос автомобильный купить, термопот toshiba, кофеварка в киеве, мини соковыжималка,  держатель для пылесоса">
		<meta name="description" content="парогенератор для турецкой бани Недорогая белая кофемолка Atlanta АТН-276 с ротационным ножом вместимостью 75 гр...">
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
						<a class="photo" href="photos/a5bbc6e64af24877cdab95c62f91247a.jpeg" title="парогенератор для турецкой бани Кофемолка ATH-276"><img src="photos/a5bbc6e64af24877cdab95c62f91247a.jpeg" alt="парогенератор для турецкой бани Кофемолка ATH-276" title="парогенератор для турецкой бани Кофемолка ATH-276 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-omelette-hc-1960r.php"><img src="photos/9b2c766be9aca21d9cbe5748b263718f.jpeg" alt="микроволновая печь вред Блендер Braun MR-120 Omelette HC" title="микроволновая печь вред Блендер Braun MR-120 Omelette HC"></a><h2>Блендер Braun MR-120 Omelette HC</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-2400r.php"><img src="photos/c875beb952f9d6580895bee02e6ce554.jpeg" alt="кофеварка delonghi eco 310 Блендер Braun MX-2000" title="кофеварка delonghi eco 310 Блендер Braun MX-2000"></a><h2>Блендер Braun MX-2000</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-3910r.php"><img src="photos/5a6cc5c274d661a65ab52201c3f36a5e.jpeg" alt="пылесос sc 4760h33 Блендер Braun MX-2050" title="пылесос sc 4760h33 Блендер Braun MX-2050"></a><h2>Блендер Braun MX-2050</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>парогенератор для турецкой бани Кофемолка ATH-276</h1>
						<div class="tb"><p>Цена: от <span class="price">450</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19598.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Недорогая белая кофемолка Atlanta АТН-276 с ротационным ножом вместимостью 75 грамм и мощностью 180 Вт.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Вместимость: 75 грамм <li>Мощность: 180 Вт <li>Система помола: ротационный нож </li></ul><p><strong>Производитель: США</strong></p> парогенератор для турецкой бани</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a7593a9ae0c3505a2632ee9e30dcbbe0.jpeg" alt="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO" title="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO"><div class="box"><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-3780r.php"><h3 class="title">компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO</h3><p>от <span class="price">3780</span> руб.</p></a></div></li>
						<li><img src="photos/2431167ee356158b218044f94d3599e4.jpeg" alt="микроволновая печь рейтинг Кофемашина Nivona NICR630 CafeRomatica" title="микроволновая печь рейтинг Кофемашина Nivona NICR630 CafeRomatica"><div class="box" page="kofemashina-nivona-nicr-caferomatica-29100r"><span class="title">микроволновая печь рейтинг Кофемашина Nivona NICR630 CafeRomatica</span><p>от <span class="price">29100</span> руб.</p></div></li>
						<li><img src="photos/b3484386aa5de93840c27e2c8187adfa.jpeg" alt="соковыжималка profi cook Мыло-поглотитель неприятных запахов Vitesse VS-1293" title="соковыжималка profi cook Мыло-поглотитель неприятных запахов Vitesse VS-1293"><div class="box" page="mylopoglotitel-nepriyatnyh-zapahov-vitesse-vs-530r"><span class="title">соковыжималка profi cook Мыло-поглотитель неприятных запахов Vitesse VS-1293</span><p>от <span class="price">530</span> руб.</p></div></li>
						<li><img src="photos/5ac0b374c54627e297ebdd1a47a1cc62.jpeg" alt="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро" title="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро"><div class="box" page="mikrovolnovaya-pech-s-konvekciey-moulinex-mw-hlebopechka-l-serebro-12050r"><span class="title">кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро</span><p>от <span class="price">12050</span> руб.</p></div></li>
						<li class="large"><img src="photos/dc407a1e2a485cfa91965baf93f3d5ba.jpeg" alt="ремонт мясорубок мулинекс Мясорубка электрическая Moulinex ME6051" title="ремонт мясорубок мулинекс Мясорубка электрическая Moulinex ME6051"><div class="box" page="myasorubka-elektricheskaya-moulinex-me-3820r"><span class="title">ремонт мясорубок мулинекс Мясорубка электрическая Moulinex ME6051</span><p>от <span class="price">3820</span> руб.</p></div></li>
						<li class="large"><img src="photos/5a34cc2772e0feae9df6932b7f043259.jpeg" alt="мультиварка супра инструкция Чайник электрический Atlanta ATH-758" title="мультиварка супра инструкция Чайник электрический Atlanta ATH-758"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-940r"><span class="title">мультиварка супра инструкция Чайник электрический Atlanta ATH-758</span><p>от <span class="price">940</span> руб.</p></div></li>
						<li class="large"><img src="photos/b2f5222e6fab12eeb526363895bfe319.jpeg" alt="пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л" title="пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-950r"><span class="title">пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li><img src="photos/403a4b4ef798c09cf151962161efdcea.jpeg" alt="термопот toshiba Электрический чайник металлический ATLANTA ATH-784, зеленый" title="термопот toshiba Электрический чайник металлический ATLANTA ATH-784, зеленый"><div class="box" page="elektricheskiy-chaynik-metallicheskiy-atlanta-ath-zelenyy-880r"><span class="title">термопот toshiba Электрический чайник металлический ATLANTA ATH-784, зеленый</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/ef5f34c264e9ba8f2acfacd6c8c1863a.jpeg" alt="кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330" title="кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-golubye-cvety-zauber-eco-1760r"><span class="title">кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li><img src="photos/8201fb734cec793db96d43f2e27a6cc4.jpeg" alt="мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail" title="мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail"><div class="box" page="nabor-dlya-doma-dyson-home-cleaning-kit-retail-2490r"><span class="title">мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/64dc96f26f782ba3e39f0fd329fa03d0.jpeg" alt="видео хлебопечка панасоник Пылесос Thomas Power Pack 1620 C" title="видео хлебопечка панасоник Пылесос Thomas Power Pack 1620 C"><div class="box" page="pylesos-thomas-power-pack-c-4740r"><span class="title">видео хлебопечка панасоник Пылесос Thomas Power Pack 1620 C</span><p>от <span class="price">4740</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kofemolka-ath-450r.php", 0, -4); if (file_exists("comments/kofemolka-ath-450r.php")) require_once "comments/kofemolka-ath-450r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kofemolka-ath-450r.php" method="post" onsubmit="return checkForm(this)">
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