<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-maxima-mhb-1090r.php","вертикальный парогенератор");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-maxima-mhb-1090r.php", $nick, $comment);
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
		<title>вертикальный парогенератор Блендер Maxima MHB-0229  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вертикальный парогенератор, bierhof кухонный комбайн, грудка в пароварке, рецепты для пароварки тефаль, мультиварка скороварка landlife, что приготовить в мультиварке, манник в мультиварке панасоник, аэрогриль hotter economy, пылесос thomas s1, чайник электрический тефаль, купить пылесос зелмер, книга рецептов для хлебопечки, микроволновая печь saturn, panasonic блендер,  мясорубка с овощерезкой">
		<meta name="description" content="вертикальный парогенератор Блендер maxima,  мощностью 400 Вт, позволит Вам быстро измельчить продукты для с...">
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
						<a class="photo" href="photos/c18872267b9c6c7f4de2b2c0d2d5e8a8.jpeg" title="вертикальный парогенератор Блендер Maxima MHB-0229"><img src="photos/c18872267b9c6c7f4de2b2c0d2d5e8a8.jpeg" alt="вертикальный парогенератор Блендер Maxima MHB-0229" title="вертикальный парогенератор Блендер Maxima MHB-0229 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-73690r.php"><img src="photos/502f3c027327d4b33adc28c2b2f5d085.jpeg" alt="bierhof кухонный комбайн Кофемашина Nivona NICR850 CafeRomatica" title="bierhof кухонный комбайн Кофемашина Nivona NICR850 CafeRomatica"></a><h2>Кофемашина Nivona NICR850 CafeRomatica</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-600r.php"><img src="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" alt="грудка в пароварке Кофемолка  ATH-272" title="грудка в пароварке Кофемолка  ATH-272"></a><h2>Кофемолка  ATH-272</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskaya-kofemolka-krasnaya-bodum-bistro-euro-5730r.php"><img src="photos/a685203e8ea8fb080bb213d2c8d8a964.jpeg" alt="рецепты для пароварки тефаль Электрическая кофемолка красная Bodum BISTRO 10903-294EURO" title="рецепты для пароварки тефаль Электрическая кофемолка красная Bodum BISTRO 10903-294EURO"></a><h2>Электрическая кофемолка красная Bodum BISTRO 10903-294EURO</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вертикальный парогенератор Блендер Maxima MHB-0229</h1>
						<div class="tb"><p>Цена: от <span class="price">1090</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20478.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Блендер maxima,  мощностью 400 Вт, позволит Вам быстро измельчить продукты для салата или для  любого другого блюда. Нож для измельчения продуктов из высококачественной  нержавеющей стали, и металлическая насадка прослужат Вам в течение долгого  времени.</p><p><strong>Характеристики:</strong></p><ul><li>Мощность: до 400Вт;</li><li>Тип: погружной;</li><li>2 скорости;</li><li>Измельчитель;</li><li>Крепление на стену;</li><li>Корпус: пластик;</li><li>Погружная часть: металл.</li></ul><p><strong>Производитель:</strong><strong> Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong><br><strong>Гарантия: 12 месяцев</strong></p> вертикальный парогенератор</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b61be34fe70b570a69e06c3fa76d4fff.jpeg" alt="мультиварка скороварка landlife Мясорубка Redmond RMG-1201" title="мультиварка скороварка landlife Мясорубка Redmond RMG-1201"><div class="box" page="myasorubka-redmond-rmg-3490r"><span class="title">мультиварка скороварка landlife Мясорубка Redmond RMG-1201</span><p>от <span class="price">3490</span> руб.</p></div></li>
						<li><img src="photos/bd86985191b900e717a6f18b17266152.jpeg" alt="что приготовить в мультиварке Пароварка Binatone FS-404 White Green" title="что приготовить в мультиварке Пароварка Binatone FS-404 White Green"><div class="box" page="parovarka-binatone-fs-white-green-1895r"><span class="title">что приготовить в мультиварке Пароварка Binatone FS-404 White Green</span><p>от <span class="price">1895</span> руб.</p></div></li>
						<li><img src="photos/1f738d1ec8329b2501736d61b71f3914.jpeg" alt="манник в мультиварке панасоник Пароварка Tefal Invent VC1014" title="манник в мультиварке панасоник Пароварка Tefal Invent VC1014"><div class="box" page="parovarka-tefal-invent-vc-3930r"><span class="title">манник в мультиварке панасоник Пароварка Tefal Invent VC1014</span><p>от <span class="price">3930</span> руб.</p></div></li>
						<li><img src="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" alt="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный" title="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1790r"><span class="title">аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li class="large"><img src="photos/c73e008984140d52a15fd324bddeb59f.jpeg" alt="пылесос thomas s1 Чайник электрический Vitek VT-1141" title="пылесос thomas s1 Чайник электрический Vitek VT-1141"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r-2"><span class="title">пылесос thomas s1 Чайник электрический Vitek VT-1141</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/396dcef56ae58a2fdd710c34b32d6011.jpeg" alt="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)" title="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r-2"><span class="title">чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/67898b31f2a00b51820f96bc789fed43.jpeg" alt="купить пылесос зелмер Чайник электрический Maxima MК- M281" title="купить пылесос зелмер Чайник электрический Maxima MК- M281"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-760r"><span class="title">купить пылесос зелмер Чайник электрический Maxima MК- M281</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" alt="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118" title="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1999r"><span class="title">книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118</span><p>от <span class="price">1999</span> руб.</p></div></li>
						<li><img src="photos/2e45225f75584b99ef16cc23171266ef.jpeg" alt="микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л" title="микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1740r"><span class="title">микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л</span><p>от <span class="price">1740</span> руб.</p></div></li>
						<li><img src="photos/a72d69a17b01ae0c39e3992b04fd72d5.jpeg" alt="panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)" title="panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)"><div class="box" page="soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r"><span class="title">panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li><img src="photos/6d6e50224259e87ee797b3ec79edf80e.jpeg" alt="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP" title="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP"><div class="box" page="ploskaya-universalnaya-nasadka-v-upakovke-dyson-flat-out-head-retail-np-2190r"><span class="title">борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP</span><p>от <span class="price">2190</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-maxima-mhb-1090r.php", 0, -4); if (file_exists("comments/blender-maxima-mhb-1090r.php")) require_once "comments/blender-maxima-mhb-1090r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-maxima-mhb-1090r.php" method="post" onsubmit="return checkForm(this)">
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