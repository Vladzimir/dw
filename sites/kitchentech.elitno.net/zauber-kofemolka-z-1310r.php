<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zauber-kofemolka-z-1310r.php","измельчитель viking");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zauber-kofemolka-z-1310r.php", $nick, $comment);
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
		<title>измельчитель viking Zauber Кофемолка  Z-490  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="измельчитель viking, печенье песочное через мясорубку, мультиварка виконте купить, рецепты для хлебопечки с фото, гайка для мясорубки, пакеты для пылесоса, микроволновая печь daewoo koc, самоочистка аэрогриля, хлебопечка германия, устройство блендера, соковыжималка садовая, тесто в хлебопечке kenwood, магазин запчастей для мясорубок, пылесос ролсен,  картофельное пюре в блендере">
		<meta name="description" content="измельчитель viking Классическая кофемолка Z-490, от шведской компании Zauber, с жерновой системой п...">
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
						<a class="photo" href="photos/9249d045a56a8d6e38902f959401f604.jpeg" title="измельчитель viking Zauber Кофемолка  Z-490"><img src="photos/9249d045a56a8d6e38902f959401f604.jpeg" alt="измельчитель viking Zauber Кофемолка  Z-490" title="измельчитель viking Zauber Кофемолка  Z-490 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-hrom-3290r.php"><img src="photos/34e123d55d60377ab16c1ebb8978b506.jpeg" alt="печенье песочное через мясорубку Блендер Redmond RHB-2904 (хром)" title="печенье песочное через мясорубку Блендер Redmond RHB-2904 (хром)"></a><h2>Блендер Redmond RHB-2904 (хром)</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-lattea-violet-35700r.php"><img src="photos/2c16cbe8f56a0f4bc3c211204b3a9f27.jpeg" alt="мультиварка виконте купить Эспрессо-кофемашина Melitta Caffeo Lattea Violet (4.0009.93)" title="мультиварка виконте купить Эспрессо-кофемашина Melitta Caffeo Lattea Violet (4.0009.93)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Lattea Violet (4.0009.93)</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-lounge-black-45500r.php"><img src="photos/f5887b3a092904b4c854c36d9035df19.jpeg" alt="рецепты для хлебопечки с фото Эспрессо-кофемашина Melitta Caffeo Lounge Black (4.0009.87)" title="рецепты для хлебопечки с фото Эспрессо-кофемашина Melitta Caffeo Lounge Black (4.0009.87)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Lounge Black (4.0009.87)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>измельчитель viking Zauber Кофемолка  Z-490</h1>
						<div class="tb"><p>Цена: от <span class="price">1310</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_17425.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Классическая кофемолка Z-490, от шведской компании Zauber, с жерновой системой помола. Вас приятно удивит наличие таймера и высокая вместимость. Обладает высокой скоростью помола. Герметичная крышка сохраняет запах кофе, есть дополнительная ёмкость для молотого кофе. Разборную конструкцию удобно чистить и использовать. Поверхности соприкосновения с пищей выполнены из пищевой гигиенической стали Food-Friend.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Потребляемая мощность: 100 Ватт <li>Система помола: Жернова <li>Вместимость: 250 г <li>Регулировка степени помола: есть <li>Таймер: есть <li>Особенности: Пищевая гигиеническая сталь Food-Friend <li>Гарантия: 25 мес </li></ul><p><b>Производитель: Швеция</b></p> измельчитель viking</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7b187fd4378c608b22128c42fc646041.jpeg" alt="гайка для мясорубки Эспрессо-кофемашина Melitta Caffeo Solo Pure Black (4.0009.95)" title="гайка для мясорубки Эспрессо-кофемашина Melitta Caffeo Solo Pure Black (4.0009.95)"><div class="box" page="espressokofemashina-melitta-caffeo-solo-pure-black-27000r"><span class="title">гайка для мясорубки Эспрессо-кофемашина Melitta Caffeo Solo Pure Black (4.0009.95)</span><p>от <span class="price">27000</span> руб.</p></div></li>
						<li><img src="photos/2cdb40f493d1b8360833641d1048d5de.jpeg" alt="пакеты для пылесоса Мясорубка Braun G1300 MN WH" title="пакеты для пылесоса Мясорубка Braun G1300 MN WH"><div class="box" page="myasorubka-braun-g-mn-wh-4980r"><span class="title">пакеты для пылесоса Мясорубка Braun G1300 MN WH</span><p>от <span class="price">4980</span> руб.</p></div></li>
						<li><img src="photos/82af66b2cc61bc47984a0dc33b3b0565.jpeg" alt="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310" title="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310"><div class="box" page="sokovyzhimalka-atlanta-ath-1050r"><span class="title">микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/948f1a9b44ef51dbbf106577d1753c25.jpeg" alt="самоочистка аэрогриля Соковыжималка" title="самоочистка аэрогриля Соковыжималка"><div class="box" page="sokovyzhimalka-3320r"><span class="title">самоочистка аэрогриля Соковыжималка</span><p>от <span class="price">3320</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3fae48615963478f00e0c05f3baa485.jpeg" alt="хлебопечка германия Электрический чайник  Zauber R-380" title="хлебопечка германия Электрический чайник  Zauber R-380"><div class="box" page="elektricheskiy-chaynik-zauber-r-1830r"><span class="title">хлебопечка германия Электрический чайник  Zauber R-380</span><p>от <span class="price">1830</span> руб.</p></div></li>
						<li class="large"><img src="photos/0c8f8180d11bb1b314126b1e547c3319.jpeg" alt="устройство блендера Чайник электрический  Vitesse VS-131 1,7 л" title="устройство блендера Чайник электрический  Vitesse VS-131 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1220r"><span class="title">устройство блендера Чайник электрический  Vitesse VS-131 1,7 л</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li class="large"><img src="photos/a73fe1f79d4e2459d6da89e07445f626.jpeg" alt="соковыжималка садовая Электрический чайник Atlanta АТН-738" title="соковыжималка садовая Электрический чайник Atlanta АТН-738"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-520r"><span class="title">соковыжималка садовая Электрический чайник Atlanta АТН-738</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/4c770d02fca0640e0452b9df7c46a9e0.jpeg" alt="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)" title="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbshaah-1550r"><span class="title">тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/ed6cccd8ae597a978fe91c415f9d06d3.jpeg" alt="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)" title="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-135r"><span class="title">магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)</span><p>от <span class="price">135</span> руб.</p></div></li>
						<li><img src="photos/b423fb6caec639a7de8db20512fac098.jpeg" alt="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas" title="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r"><span class="title">пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/ab56eb3e56d0f0d6cbcdc267b86f71a7.jpeg" alt="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257" title="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-2800r"><span class="title">панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257</span><p>от <span class="price">2800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zauber-kofemolka-z-1310r.php", 0, -4); if (file_exists("comments/zauber-kofemolka-z-1310r.php")) require_once "comments/zauber-kofemolka-z-1310r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zauber-kofemolka-z-1310r.php" method="post" onsubmit="return checkForm(this)">
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