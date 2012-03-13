<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blendermaxima-mhb-760r.php","отзывы пылесос sinbo");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blendermaxima-mhb-760r.php", $nick, $comment);
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
		<title>отзывы пылесос sinbo БлендерMaxima MHB-0629  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="отзывы пылесос sinbo, zelmer мясорубка отзывы, рецепт курицы в мультиварке, соковыжималка для моркови, продажа моющих пылесосов, капсулы для кофемашины купить, фритюрница philips отзывы, куриные грудки в мультиварке, микроволновая печь daewoo koc, профессиональные утюги, запчасти для блендера braun, пылесос вертикальный, аэрогриль vitesse vs 408, запчасти для кофемашины,  мультиварка кенвуд">
		<meta name="description" content="отзывы пылесос sinbo Блендер Maxima,  мощностью 500 Вт, выполнен из пластика в сочетании с металличес...">
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
						<a class="photo" href="photos/29743842b370217cef729ce30e8386c4.jpeg" title="отзывы пылесос sinbo БлендерMaxima MHB-0629"><img src="photos/29743842b370217cef729ce30e8386c4.jpeg" alt="отзывы пылесос sinbo БлендерMaxima MHB-0629" title="отзывы пылесос sinbo БлендерMaxima MHB-0629 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-russell-hobbs-allure-art-5490r.php"><img src="photos/ac0d13475c79f9c87e6f514f3140de60.jpeg" alt="zelmer мясорубка отзывы Блендер Russell Hobbs Allure, арт. 18276-56" title="zelmer мясорубка отзывы Блендер Russell Hobbs Allure, арт. 18276-56"></a><h2>Блендер Russell Hobbs Allure, арт. 18276-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-750r.php"><img src="photos/4a8644a2c29f22e2d9c92389f96ff2ab.jpeg" alt="рецепт курицы в мультиварке Кухонный комбайн ATH-350" title="рецепт курицы в мультиварке Кухонный комбайн ATH-350"></a><h2>Кухонный комбайн ATH-350</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-680r.php"><img src="photos/6e844ec2051132de84c89f71f9ba6d6a.jpeg" alt="соковыжималка для моркови Кухонный комбайн ATH-360" title="соковыжималка для моркови Кухонный комбайн ATH-360"></a><h2>Кухонный комбайн ATH-360</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>отзывы пылесос sinbo БлендерMaxima MHB-0629</h1>
						<div class="tb"><p>Цена: от <span class="price">760</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20487.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Блендер Maxima,  мощностью 500 Вт, выполнен из пластика в сочетании с металлической погружной  частью. Управление блендера механическое. Есть функция турборежима. Пять регулируемых  скоростей.</p><p><br><strong>Характеристики:</strong></p><ul><li>Тип: погружной;</li><li>Мощность: 500 Вт;</li><li>5 скоростей;</li><li>Турбо режим;</li><li>Корпус: пластик;</li><li>Погружная часть: металл.</li></ul><p><strong>Производитель: </strong><strong>Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong><br><strong>Гарантия: 12 месяцев</strong></p> отзывы пылесос sinbo</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c9a7a5b3ad41669087cce987bbc510ac.jpeg" alt="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)" title="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)"><div class="box" page="espressokofemashina-melitta-caffeo-bar-44180r"><span class="title">продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)</span><p>от <span class="price">44180</span> руб.</p></div></li>
						<li><img src="photos/35e035621354934f31343d7d8a4fd49b.jpeg" alt="капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф" title="капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф"><div class="box" page="kuhonnyy-kombayn-moulinex-fp-master-shef-4350r"><span class="title">капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф</span><p>от <span class="price">4350</span> руб.</p></div></li>
						<li><img src="photos/cd757289d24d4d7e98d5fef52b1c314b.jpeg" alt="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)" title="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)"><div class="box" page="mikrovolnovaya-pech-vitek-sr-3990r"><span class="title">фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/b8600793aec4a8059c2de0136a79b6b1.jpeg" alt="куриные грудки в мультиварке Пароварка Redmond RST-1103" title="куриные грудки в мультиварке Пароварка Redmond RST-1103"><div class="box" page="parovarka-redmond-rst-2390r"><span class="title">куриные грудки в мультиварке Пароварка Redmond RST-1103</span><p>от <span class="price">2390</span> руб.</p></div></li>
						<li class="large"><img src="photos/82af66b2cc61bc47984a0dc33b3b0565.jpeg" alt="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310" title="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310"><div class="box" page="sokovyzhimalka-atlanta-ath-1050r"><span class="title">микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li class="large"><img src="photos/8d898eca4e96ee4a2fd539403a61a2e7.jpeg" alt="профессиональные утюги Соковыжималка для цитрусовых" title="профессиональные утюги Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-1500r"><span class="title">профессиональные утюги Соковыжималка для цитрусовых</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/e766dc7a6c0cf1b164fee2cb011a81f8.jpeg" alt="запчасти для блендера braun Чайник Vitek VT-1163" title="запчасти для блендера braun Чайник Vitek VT-1163"><div class="box" page="chaynik-vitek-vt-990r"><span class="title">запчасти для блендера braun Чайник Vitek VT-1163</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/08939404bc185a897cf2a335ea28842f.jpeg" alt="пылесос вертикальный Пылесос Redmond RV-308" title="пылесос вертикальный Пылесос Redmond RV-308"><div class="box" page="pylesos-redmond-rv-7990r"><span class="title">пылесос вертикальный Пылесос Redmond RV-308</span><p>от <span class="price">7990</span> руб.</p></div></li>
						<li><img src="photos/2fefc92a511ec2a4cec4d67efd9d8253.jpeg" alt="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter" title="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter"><div class="box" page="pylesos-thomas-genius-s-eco-aquafilter-9660r"><span class="title">аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter</span><p>от <span class="price">9660</span> руб.</p></div></li>
						<li><img src="photos/43e27fa2f560b206710e5912c17032bf.jpeg" alt="запчасти для кофемашины Утюг Vitek VT-1244" title="запчасти для кофемашины Утюг Vitek VT-1244"><div class="box" page="utyug-vitek-vt-1450r"><span class="title">запчасти для кофемашины Утюг Vitek VT-1244</span><p>от <span class="price">1450</span> руб.</p></div></li>
						<li><img src="photos/517e5c14445485917f65d44ac20c8bd1.jpeg" alt="хлебопечка клатроник Утюг паровой Tefal Prima FV2115" title="хлебопечка клатроник Утюг паровой Tefal Prima FV2115"><div class="box" page="utyug-parovoy-tefal-prima-fv-1330r"><span class="title">хлебопечка клатроник Утюг паровой Tefal Prima FV2115</span><p>от <span class="price">1330</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blendermaxima-mhb-760r.php", 0, -4); if (file_exists("comments/blendermaxima-mhb-760r.php")) require_once "comments/blendermaxima-mhb-760r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blendermaxima-mhb-760r.php" method="post" onsubmit="return checkForm(this)">
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