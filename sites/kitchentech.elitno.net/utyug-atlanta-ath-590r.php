<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("utyug-atlanta-ath-590r.php","бутерброды в аэрогриле");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("utyug-atlanta-ath-590r.php", $nick, $comment);
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
		<title>бутерброды в аэрогриле Утюг Atlanta ATH-422  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="бутерброды в аэрогриле, вреден ли аэрогриль, рецепт пиццы в хлебопечке, парогенератор пээ, кофемолка bosch, рецепты для хлебопечки с сыром, где купить утюг, рисование утюгом, джем в хлебопечке, маленькие соковыжималки, аэрогриль hotter economy, продам хлебопечку, блендер металлический, тостер philips hd 2586,  купить мясорубку панасоник">
		<meta name="description" content="бутерброды в аэрогриле Утюг Atlanta ATH-422 зеленого цвета с пароувлажнителем мощностью 1000 Вт – досту...">
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
						<a class="photo" href="photos/320f64ebbe69f1db4756b8e715b23297.jpeg" title="бутерброды в аэрогриле Утюг Atlanta ATH-422"><img src="photos/320f64ebbe69f1db4756b8e715b23297.jpeg" alt="бутерброды в аэрогриле Утюг Atlanta ATH-422" title="бутерброды в аэрогриле Утюг Atlanta ATH-422 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-cc-5730r.php"><img src="photos/a05d83b290d1a3a85756bd16066563b1.jpeg" alt="вреден ли аэрогриль Блендер Braun MR-740 CC" title="вреден ли аэрогриль Блендер Braun MR-740 CC"></a><h2>Блендер Braun MR-740 CC</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskaya-kofemolka-bodum-bistro-euro-belaya-5730r.php"><img src="photos/7182cc256e7e3343e3aec4d550f1f314.jpeg" alt="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая" title="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая"></a><h2>Электрическая кофемолка Bodum BISTRO 10903-913EURO белая</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-tefal-storeinn-do-3370r.php"><img src="photos/01c2ca770a8a823b21cf869aea4ab4ac.jpeg" alt="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081" title="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081"></a><h2>Кухонный комбайн Tefal Storeinn DO2081</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>бутерброды в аэрогриле Утюг Atlanta ATH-422</h1>
						<div class="tb"><p>Цена: от <span class="price">590</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19697.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Утюг Atlanta ATH-422 зеленого цвета с пароувлажнителем мощностью 1000 Вт – доступный и стильный прибор для глажки с подошвой из нержавеющей стали. Имеет два типа работы: сухой и паровой. Снабжен функцией вертикального пара и прозрачным резервуаром для воды, благодаря которому вы всегда будете знать, сколько воды находится в утюге. Умеет распылять воду для более качественной глажки, а также дополнительно подавать пар.</p><p>Характеристики:</p><ul type=disc><li>Современный дизайн <li>Подошва из нержавеющей стали <li>Сухой или паровой режим глаженья <li>Функция вертикального пара <li>Прозрачный резервуар для воды <li>Функция распыления <li>Дополнительная подача пара <li>Максимальная мощность 1000 Вт <li>230 В, 50 Гц </li></ul><p><strong>Производитель: США</strong></p> бутерброды в аэрогриле</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5ac0b374c54627e297ebdd1a47a1cc62.jpeg" alt="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро" title="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро"><div class="box" page="mikrovolnovaya-pech-s-konvekciey-moulinex-mw-hlebopechka-l-serebro-12050r"><span class="title">кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро</span><p>от <span class="price">12050</span> руб.</p></div></li>
						<li><img src="photos/f522dce957deccc1ec8ad4658577e80b.jpeg" alt="рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330" title="рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330"><div class="box" page="multivarka-moulinex-mk-4170r"><span class="title">рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330</span><p>от <span class="price">4170</span> руб.</p></div></li>
						<li><img src="photos/96e6df28f6faf8e98beab83007c46a57.jpeg" alt="где купить утюг Мясорубка электрическая Vitek VT-1673" title="где купить утюг Мясорубка электрическая Vitek VT-1673"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-3000r"><span class="title">где купить утюг Мясорубка электрическая Vitek VT-1673</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/1f7b9f216facd163cc074eb10bad1faf.jpeg" alt="рисование утюгом Соковыжималка Moulinex BKA1" title="рисование утюгом Соковыжималка Moulinex BKA1"><div class="box" page="sokovyzhimalka-moulinex-bka-2400r"><span class="title">рисование утюгом Соковыжималка Moulinex BKA1</span><p>от <span class="price">2400</span> руб.</p></div></li>
						<li class="large"><img src="photos/395739893470046928b7502ebf2a09eb.jpeg" alt="джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO" title="джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-chernaya-bodum-bistro-euro-3340r"><span class="title">джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li class="large"><img src="photos/fe37fe3249ac15c2c7299f94675336f3.jpeg" alt="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO" title="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO"><div class="box" page="toster-chernyy-bodum-bistro-euro-3660r"><span class="title">маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li class="large"><img src="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" alt="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный" title="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1790r"><span class="title">аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/357a4e7af6a4eca2e30275a2d5d14351.jpeg" alt="продам хлебопечку Чайник электрический Binatone CEJ-1744 White" title="продам хлебопечку Чайник электрический Binatone CEJ-1744 White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-white-880r"><span class="title">продам хлебопечку Чайник электрический Binatone CEJ-1744 White</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/f2d6d870289f867bca2e3ea0f8531c8e.jpeg" alt="блендер металлический Электрический чайник  Zauber Z-350" title="блендер металлический Электрический чайник  Zauber Z-350"><div class="box" page="elektricheskiy-chaynik-zauber-z-1600r"><span class="title">блендер металлический Электрический чайник  Zauber Z-350</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/90ff0542b35952759822563a08374b1f.jpeg" alt="тостер philips hd 2586 Чайник электрический Maxima MК- M191 (в цвете)" title="тостер philips hd 2586 Чайник электрический Maxima MК- M191 (в цвете)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-v-cvete-990r"><span class="title">тостер philips hd 2586 Чайник электрический Maxima MК- M191 (в цвете)</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/27a529eb06db7d79aab6d5d214852413.jpeg" alt="какие лучше микроволновые печи Minamoto R03 (AAA)" title="какие лучше микроволновые печи Minamoto R03 (AAA)"><div class="box" page="minamoto-r-aaa-4r"><span class="title">какие лучше микроволновые печи Minamoto R03 (AAA)</span><p>от <span class="price">4</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("utyug-atlanta-ath-590r.php", 0, -4); if (file_exists("comments/utyug-atlanta-ath-590r.php")) require_once "comments/utyug-atlanta-ath-590r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="utyug-atlanta-ath-590r.php" method="post" onsubmit="return checkForm(this)">
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