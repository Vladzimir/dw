<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("bioochistitel-ot-nakipi-swirl-zhidkiy-ml-185r.php","обзор кухонных комбайнов");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("bioochistitel-ot-nakipi-swirl-zhidkiy-ml-185r.php", $nick, $comment);
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
		<title>обзор кухонных комбайнов Био-очиститель от накипи Swirl (жидкий), 250 мл  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="обзор кухонных комбайнов, блендер philips hr1615, хорошая кухня мультиварка, крышка для микроволновой печи, кофемолка moulinex, купить электрическую кофеварку, парогенератор пээ, турбощетка для пылесоса dyson, блендер braun 570, купить капельную кофеварку, чайник электрический тефаль, нож для мясорубки kenwood, мультиварка мэджик пот, инструкция хлебопечка bork,  пылесос филипс 9174">
		<meta name="description" content="обзор кухонных комбайнов Жидкий Био-очиститель Swirl создан специально для  эффективной очистки от накипи...">
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
						<a class="photo" href="photos/314533fc5d95948fd5a6724fd21e3005.jpeg" title="обзор кухонных комбайнов Био-очиститель от накипи Swirl (жидкий), 250 мл"><img src="photos/314533fc5d95948fd5a6724fd21e3005.jpeg" alt="обзор кухонных комбайнов Био-очиститель от накипи Swirl (жидкий), 250 мл" title="обзор кухонных комбайнов Био-очиститель от накипи Swirl (жидкий), 250 мл -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-cc-4920r.php"><img src="photos/0c50b7e39e50ca19abd7fa5476ddc943.jpeg" alt="блендер philips hr1615 Блендер Braun MR-730 CC" title="блендер philips hr1615 Блендер Braun MR-730 CC"></a><h2>Блендер Braun MR-730 CC</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-dd-3350r.php"><img src="photos/b48d978d3a6e9e560ddd3f28a86214f1.jpeg" alt="хорошая кухня мультиварка Блендер погружной Moulinex DD906143" title="хорошая кухня мультиварка Блендер погружной Moulinex DD906143"></a><h2>Блендер погружной Moulinex DD906143</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-1090r.php"><img src="photos/23396bca502057564018abfebb4d84d5.jpeg" alt="крышка для микроволновой печи Блендер Redmond RHB-2910" title="крышка для микроволновой печи Блендер Redmond RHB-2910"></a><h2>Блендер Redmond RHB-2910</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>обзор кухонных комбайнов Био-очиститель от накипи Swirl (жидкий), 250 мл</h1>
						<div class="tb"><p>Цена: от <span class="price">185</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26588.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Жидкий Био-очиститель Swirl создан специально для  эффективной очистки от накипи кофеварок, чайников и автоматических кофемашин. Объем:  250 мл.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Для       очистки от накипи;</li>   <li>Для       всех типов кофеварок, чайников и автоматических кофемашин;</li>   <li>Объем:       250 мл.</li> </ul> <p><strong>Производитель: Swirl  (Германия)</strong></p> обзор кухонных комбайнов</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/77a7b9eee8f1b767f7912a55eb9e902b.jpeg" alt="кофемолка moulinex Блендер Redmond RHB-2904" title="кофемолка moulinex Блендер Redmond RHB-2904"><div class="box" page="blender-redmond-rhb-3290r"><span class="title">кофемолка moulinex Блендер Redmond RHB-2904</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/197b288168a6454a97f75d0fce3ea362.jpeg" alt="купить электрическую кофеварку Электросушка Maxima MFD-0155" title="купить электрическую кофеварку Электросушка Maxima MFD-0155"><div class="box" page="elektrosushka-maxima-mfd-990r"><span class="title">купить электрическую кофеварку Электросушка Maxima MFD-0155</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/01c2ca770a8a823b21cf869aea4ab4ac.jpeg" alt="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081" title="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081"><div class="box" page="kuhonnyy-kombayn-tefal-storeinn-do-3370r"><span class="title">парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081</span><p>от <span class="price">3370</span> руб.</p></div></li>
						<li><img src="photos/451a747bf2e464db6624d3824215adbf.jpeg" alt="турбощетка для пылесоса dyson Bodum BISTRO 11149-913EURO Электрическая соковыжималка белая" title="турбощетка для пылесоса dyson Bodum BISTRO 11149-913EURO Электрическая соковыжималка белая"><div class="box" page="bodum-bistro-euro-elektricheskaya-sokovyzhimalka-belaya-3340r"><span class="title">турбощетка для пылесоса dyson Bodum BISTRO 11149-913EURO Электрическая соковыжималка белая</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li class="large"><img src="photos/bdf8f9bd66e96c1684451b1f1e782b63.jpeg" alt="блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO" title="блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO"><div class="box" page="toster-limonnyy-bodum-bistro-euro-3660r"><span class="title">блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li class="large"><img src="photos/65194d520ec7c4edb8d9ad44bcaa26a1.jpeg" alt="купить капельную кофеварку Чайник электрический Maxima MК-105" title="купить капельную кофеварку Чайник электрический Maxima MК-105"><div class="box" page="chaynik-elektricheskiy-maxima-mk-550r"><span class="title">купить капельную кофеварку Чайник электрический Maxima MК-105</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li class="large"><img src="photos/396dcef56ae58a2fdd710c34b32d6011.jpeg" alt="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)" title="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r-2"><span class="title">чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/4aa517f040bb8f7cdf25d41fea297b7f.jpeg" alt="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781" title="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1000r"><span class="title">нож для мясорубки kenwood Электрический чайник Atlanta АТН-781</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/51ac41098d88811e7ab3241e4fa31a8c.jpeg" alt="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA" title="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aaahcuc-petgaaa-300r"><span class="title">мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/5ba6b51a5b7372f52a4d19e9b0a65db5.jpeg" alt="инструкция хлебопечка bork Детектор скрытых видеокамер BugHunter Dvideo" title="инструкция хлебопечка bork Детектор скрытых видеокамер BugHunter Dvideo"><div class="box" page="detektor-skrytyh-videokamer-bughunter-dvideo-6950r"><span class="title">инструкция хлебопечка bork Детектор скрытых видеокамер BugHunter Dvideo</span><p>от <span class="price">6950</span> руб.</p></div></li>
						<li><img src="photos/510105f381aa497ebe08b03499acd217.jpeg" alt="купить мультиварку в красноярске Пылесос Redmond RV-307" title="купить мультиварку в красноярске Пылесос Redmond RV-307"><div class="box" page="pylesos-redmond-rv-4490r"><span class="title">купить мультиварку в красноярске Пылесос Redmond RV-307</span><p>от <span class="price">4490</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("bioochistitel-ot-nakipi-swirl-zhidkiy-ml-185r.php", 0, -4); if (file_exists("comments/bioochistitel-ot-nakipi-swirl-zhidkiy-ml-185r.php")) require_once "comments/bioochistitel-ot-nakipi-swirl-zhidkiy-ml-185r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="bioochistitel-ot-nakipi-swirl-zhidkiy-ml-185r.php" method="post" onsubmit="return checkForm(this)">
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