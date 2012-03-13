<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("risovarka-elektricheskaya-atlanta-atn-1500r.php","кофемашины для чалд");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("risovarka-elektricheskaya-atlanta-atn-1500r.php", $nick, $comment);
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
		<title>кофемашины для чалд Рисоварка электрическая ATLANTA АТН-590  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофемашины для чалд, купить пароварку в москве, кофеварка philips отзывы, микроволновая печь польза, кухонный комбайн фото, электрическая мультиварка, блендер philips hr 1617, рецепты кофе в кофемашине, делонги кофемашина примадонна, аэрогриль поларис отзывы, продам хлебопечку, ремонт пылесосов samsung, устройство блендера, сладкая выпечка в хлебопечке,  купить мультиварку панасоник">
		<meta name="description" content="кофемашины для чалд Электрическая рисоварка ATLANTA АТН-590 создана специально для приготовления вку...">
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
						<a class="photo" href="photos/f500afce51554d4e8ccaedd379d383c4.jpeg" title="кофемашины для чалд Рисоварка электрическая ATLANTA АТН-590"><img src="photos/f500afce51554d4e8ccaedd379d383c4.jpeg" alt="кофемашины для чалд Рисоварка электрическая ATLANTA АТН-590" title="кофемашины для чалд Рисоварка электрическая ATLANTA АТН-590 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-binatone-nb-black-1750r.php"><img src="photos/33b7a9c07b1ba187d5807d0b266c7389.jpeg" alt="купить пароварку в москве Блендер Binatone NB-7703 Black" title="купить пароварку в москве Блендер Binatone NB-7703 Black"></a><h2>Блендер Binatone NB-7703 Black</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-ddd-3050r.php"><img src="photos/88431db04944e702f33c054454f31139.jpeg" alt="кофеварка philips отзывы Блендер погружной Moulinex DD407D72" title="кофеварка philips отзывы Блендер погружной Moulinex DD407D72"></a><h2>Блендер погружной Moulinex DD407D72</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-krasnaya-29530r.php"><img src="photos/39e04c91cf56d7c949379d4f2e2d6076.jpeg" alt="микроволновая печь польза Автоматическая кофемашина Melitta CAFFEO Lattea, красная" title="микроволновая печь польза Автоматическая кофемашина Melitta CAFFEO Lattea, красная"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea, красная</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофемашины для чалд Рисоварка электрическая ATLANTA АТН-590</h1>
						<div class="tb"><p>Цена: от <span class="price">1500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20670.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрическая рисоварка ATLANTA АТН-590 создана специально для приготовления вкусного рассыпчатого риса. Данная модель обладает не только высокими техническими характеристиками, но эффектным дизайном. Так, значительная вместимость (5 литров) позволит готовить рис даже на большую семью, а защита от перегрева сделает сам процесс приготовления максимально безопасным. Кроме того, рисоварка ATLANTA АТН-590 внешне выполнена в изящном романтичном стиле – ее белый корпус украшен рисунками летних цветов. Безусловно, эта модель станет не только незаменимым помощником для хозяйки на кухне, но и настоящим украшением интерьера. </p><p><b>Характеристики:</b></p><ul type=disc><li>Тип: электрическая; <li>Вместимость: 5 л.; <li>Полезная вместимость чаши: 1,8 л.; <li>Мощность: 700 Вт.; <li>Защита от перегрева; <li>230V; 50Hz <li>Цвет: белый, с рисунком; <li>Вес: 3,2 кг</li> </ul><p><b>Производитель: США</b></p> кофемашины для чалд</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a778f38f56b1abc67bee8e49c9772547.jpeg" alt="кухонный комбайн фото Микроволновая печь Vitek VT-1691" title="кухонный комбайн фото Микроволновая печь Vitek VT-1691"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2750r"><span class="title">кухонный комбайн фото Микроволновая печь Vitek VT-1691</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/35ebdf1eb3139cf89fe5f6240c399711.jpeg" alt="электрическая мультиварка Йогуртница Maxima MYM-0154" title="электрическая мультиварка Йогуртница Maxima MYM-0154"><div class="box" page="yogurtnica-maxima-mym-990r"><span class="title">электрическая мультиварка Йогуртница Maxima MYM-0154</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/03c71bbf8b5f2d86f3ae6ce6e9e77e58.jpeg" alt="рецепты кофе в кофемашине Фритюрница Vitek VT-1531 белая" title="рецепты кофе в кофемашине Фритюрница Vitek VT-1531 белая"><div class="box" page="frityurnica-vitek-vt-belaya-2950r"><span class="title">рецепты кофе в кофемашине Фритюрница Vitek VT-1531 белая</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li class="large"><img src="photos/46a5120709bf99f581bc7ea7569bd649.png" alt="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902" title="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902"><div class="box" page="hlebopech-redmond-rbmm-3990r"><span class="title">делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li class="large"><img src="photos/601488d11fe95f07b0e7e96c29a4ca5c.jpeg" alt="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White" title="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-magic-white-1100r"><span class="title">аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li class="large"><img src="photos/357a4e7af6a4eca2e30275a2d5d14351.jpeg" alt="продам хлебопечку Чайник электрический Binatone CEJ-1744 White" title="продам хлебопечку Чайник электрический Binatone CEJ-1744 White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-white-880r"><span class="title">продам хлебопечку Чайник электрический Binatone CEJ-1744 White</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/a6c36bfdd77b4f18d6fcadc6e3824cf1.jpeg" alt="ремонт пылесосов samsung Чайник электрический  Vitesse VS-127 2л золотой" title="ремонт пылесосов samsung Чайник электрический  Vitesse VS-127 2л золотой"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-zolotoy-960r"><span class="title">ремонт пылесосов samsung Чайник электрический  Vitesse VS-127 2л золотой</span><p>от <span class="price">960</span> руб.</p></div></li>
						<li><img src="photos/0c8f8180d11bb1b314126b1e547c3319.jpeg" alt="устройство блендера Чайник электрический  Vitesse VS-131 1,7 л" title="устройство блендера Чайник электрический  Vitesse VS-131 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1220r"><span class="title">устройство блендера Чайник электрический  Vitesse VS-131 1,7 л</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li><img src="photos/70eaaca49bbd014982b9856679d5c7e6.jpeg" alt="сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO" title="сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO"><div class="box" page="elektricheskiy-chaynik-l-bodum-bistro-euro-2740r"><span class="title">сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/41efedb38089aeb46a210ce7ff30eedc.jpeg" alt="сравнение блендеров Детектор жучков BugHunter Professional BH-01" title="сравнение блендеров Детектор жучков BugHunter Professional BH-01"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-7990r"><span class="title">сравнение блендеров Детектор жучков BugHunter Professional BH-01</span><p>от <span class="price">7990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("risovarka-elektricheskaya-atlanta-atn-1500r.php", 0, -4); if (file_exists("comments/risovarka-elektricheskaya-atlanta-atn-1500r.php")) require_once "comments/risovarka-elektricheskaya-atlanta-atn-1500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="risovarka-elektricheskaya-atlanta-atn-1500r.php" method="post" onsubmit="return checkForm(this)">
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