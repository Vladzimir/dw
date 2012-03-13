<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-zauber-z-1600r.php","пылесос karcher ds 5600");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-zauber-z-1600r.php", $nick, $comment);
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
		<title>пылесос karcher ds 5600 Электрический чайник  Zauber Z-350  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="пылесос karcher ds 5600, купить блендер кенвуд, купить утюг для волос, запчасти пылесос томас, видео мясорубки мулинекс, отзывы мультиварка kromax, где купить утюг, аэрогриль hotter 1037, измельчитель kenwood, купить кофемашину jura, купить мультиварку в красноярске, бездрожжевой хлеб в хлебопечке, бытовая техника пылесосы, пылесос компрессор отзывы,  печенье через мясорубку рецепт">
		<meta name="description" content="пылесос karcher ds 5600 Чайник Z-350 от шведской компании Zauber имеет стальные стенки корпуса, что увел...">
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
						<a class="photo" href="photos/f2d6d870289f867bca2e3ea0f8531c8e.jpeg" title="пылесос karcher ds 5600 Электрический чайник  Zauber Z-350"><img src="photos/f2d6d870289f867bca2e3ea0f8531c8e.jpeg" alt="пылесос karcher ds 5600 Электрический чайник  Zauber Z-350" title="пылесос karcher ds 5600 Электрический чайник  Zauber Z-350 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-baby-2000r.php"><img src="photos/612bb1b2d8bad8dc8e3250c8f9903851.jpeg" alt="купить блендер кенвуд Блендер Braun MR-320 Baby" title="купить блендер кенвуд Блендер Braun MR-320 Baby"></a><h2>Блендер Braun MR-320 Baby</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-vitesse-vs-1100r.php"><img src="photos/3bdb5a7ebf59a397ed1b6263ffa77483.jpeg" alt="купить утюг для волос Кофемолка Vitesse VS-271" title="купить утюг для волос Кофемолка Vitesse VS-271"></a><h2>Кофемолка Vitesse VS-271</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-s-grilem-moulinex-mw-parovarka-l-serebro-6110r.php"><img src="photos/a9b561236bfa7747af43043cb7d43b52.jpeg" alt="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро" title="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро"></a><h2>Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>пылесос karcher ds 5600 Электрический чайник  Zauber Z-350</h1>
						<div class="tb"><p>Цена: от <span class="price">1600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_17273.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Чайник Z-350 от шведской компании Zauber имеет стальные стенки корпуса, что увеличивает надёжность конструкции и красивую крышку из стекла, что радует глаз. Быстро кипятит воду и имеет удобную автоматическую систему открывания.  Поверхности соприкосновения с водой выполнены из пищевой гигиенической стали Food-Friend</p><p><b>Технические характеристики:</b></p><ul><li>Объём: 1,7 литра</li><li>Потребляемая мощность: 2000 Ватт</li><li>Материал корпуса: Металл</li><li>Тип нагревательного элемента: дисковый нагреватель</li><li>Шкала уровня воды: Есть</li><li>Автоотключение: Есть</li></ul><p><strong>Особенности:</strong></p><ul><li>Запатентованный механизм открывания, съёмный фильтр от накипи</li><li>Система шумоподавления</li><li>Пищевая гигиеническая сталь Food-Friend</li></ul><p><b>Производитель:</b>Швеция</p><p><b>Гарантия:</b>25 месяцев</p> пылесос karcher ds 5600</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/4e7490247492c7ab40236e7400fed0df.jpeg" alt="видео мясорубки мулинекс Мультиварка Redmond RMC-M4503" title="видео мясорубки мулинекс Мультиварка Redmond RMC-M4503"><div class="box"><a href="http://kitchentech.elitno.net/multivarka-redmond-rmcm-2990r.php"><h3 class="title">видео мясорубки мулинекс Мультиварка Redmond RMC-M4503</h3><p>от <span class="price">2990</span> руб.</p></a></div></li>
						<li><img src="photos/6fe5b4190ebaf728c4d5f2d1788f453b.jpeg" alt="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670" title="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-2950r"><span class="title">отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/96e6df28f6faf8e98beab83007c46a57.jpeg" alt="где купить утюг Мясорубка электрическая Vitek VT-1673" title="где купить утюг Мясорубка электрическая Vitek VT-1673"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-3000r"><span class="title">где купить утюг Мясорубка электрическая Vitek VT-1673</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/e9322568d654cf02152dc451f13376f9.jpeg" alt="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный" title="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r"><span class="title">аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/d221c08cbc7532258ec107ff315e3516.jpeg" alt="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)" title="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)"><div class="box" page="personalnyy-dozimetr-dkgd-«grach»-attestovan-v-mchs-rossii-20500r"><span class="title">измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)</span><p>от <span class="price">20500</span> руб.</p></div></li>
						<li class="large"><img src="photos/9fd5ef54211079a33ba5cc9bfbb9bfcf.jpeg" alt="купить кофемашину jura Пылесос моющий Thomas Bravo 20 S Aquafilter" title="купить кофемашину jura Пылесос моющий Thomas Bravo 20 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-bravo-s-aquafilter-9270r"><span class="title">купить кофемашину jura Пылесос моющий Thomas Bravo 20 S Aquafilter</span><p>от <span class="price">9270</span> руб.</p></div></li>
						<li class="large"><img src="photos/510105f381aa497ebe08b03499acd217.jpeg" alt="купить мультиварку в красноярске Пылесос Redmond RV-307" title="купить мультиварку в красноярске Пылесос Redmond RV-307"><div class="box" page="pylesos-redmond-rv-4490r"><span class="title">купить мультиварку в красноярске Пылесос Redmond RV-307</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/7660e64f2f5c029aab5d6fad25c29084.jpeg" alt="бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843" title="бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843"><div class="box" page="pylesos-vitek-3990r"><span class="title">бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/2bc01cf0e5d557324370d108b991f168.jpeg" alt="бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional" title="бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional"><div class="box" page="pylesos-thomas-inox-s-professional-11290r"><span class="title">бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional</span><p>от <span class="price">11290</span> руб.</p></div></li>
						<li><img src="photos/28ebbb0322a7eac61313d0d41391d394.jpeg" alt="пылесос компрессор отзывы Пылесос с аквафильтром Vitek VT-1832 синий" title="пылесос компрессор отзывы Пылесос с аквафильтром Vitek VT-1832 синий"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-siniy-6900r"><span class="title">пылесос компрессор отзывы Пылесос с аквафильтром Vitek VT-1832 синий</span><p>от <span class="price">6900</span> руб.</p></div></li>
						<li><img src="photos/4a1c0420fc8819aad4437c29c4e568bd.jpeg" alt="пылесосы филлипс Утюг паровой Tefal Aquaspeed Ultracord FV5276" title="пылесосы филлипс Утюг паровой Tefal Aquaspeed Ultracord FV5276"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-3050r"><span class="title">пылесосы филлипс Утюг паровой Tefal Aquaspeed Ultracord FV5276</span><p>от <span class="price">3050</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-zauber-z-1600r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-zauber-z-1600r.php")) require_once "comments/elektricheskiy-chaynik-zauber-z-1600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-zauber-z-1600r.php" method="post" onsubmit="return checkForm(this)">
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