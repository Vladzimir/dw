<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-maxima-mk-760r.php","хлебопечка мистери");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-maxima-mk-760r.php", $nick, $comment);
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
		<title>хлебопечка мистери Чайник электрический Maxima MК-103  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка мистери, похудеть с пароваркой, электрическая мультиварка, лучший пылесос самсунг, капсульные кофемашины bosch, каша на воде в мультиварке, как разобрать утюг, как разобрать кофемолку, кофеварка интернет магазин, ржаная мука для хлебопечки, утюг braun 18895, соковыжималка juice, сколько стоит соковыжималка, фильтры для моющего пылесоса,  возможности блендера">
		<meta name="description" content="хлебопечка мистери Электрический чайник Maxima MК-103 – это простота и элегантность в корпусе из жа...">
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
						<a class="photo" href="photos/1a5872ce4a924d71272e9d8aacab1a34.jpeg" title="хлебопечка мистери Чайник электрический Maxima MК-103"><img src="photos/1a5872ce4a924d71272e9d8aacab1a34.jpeg" alt="хлебопечка мистери Чайник электрический Maxima MК-103" title="хлебопечка мистери Чайник электрический Maxima MК-103 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofeynoe-zerno-v-gorkom-shokolade-melitta-60r.php"><img src="photos/fb507058255502712acd55f26151d977.png" alt="похудеть с пароваркой Кофейное зерно в горьком шоколаде Melitta" title="похудеть с пароваркой Кофейное зерно в горьком шоколаде Melitta"></a><h2>Кофейное зерно в горьком шоколаде Melitta</h2></li>
							<li><a href="http://kitchentech.elitno.net/yogurtnica-maxima-mym-990r.php"><img src="photos/35ebdf1eb3139cf89fe5f6240c399711.jpeg" alt="электрическая мультиварка Йогуртница Maxima MYM-0154" title="электрическая мультиварка Йогуртница Maxima MYM-0154"></a><h2>Йогуртница Maxima MYM-0154</h2></li>
							<li><a href="http://kitchentech.elitno.net/parovarka-redmond-rstm-2950r.php"><img src="photos/2881dd3b520a8310bcadebe542a3493a.jpeg" alt="лучший пылесос самсунг Пароварка Redmond RST-M1104" title="лучший пылесос самсунг Пароварка Redmond RST-M1104"></a><h2>Пароварка Redmond RST-M1104</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка мистери Чайник электрический Maxima MК-103</h1>
						<div class="tb"><p>Цена: от <span class="price">760</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18592.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Maxima MК-103 – это простота и элегантность в корпусе из жаропрочного пластика. Спираль из нержавеющей стали, мощность 2000Вт – полтора литра воды вскипит за пару минут, а специальный фильтр защитит от накипи. <br>Дополнительными плюсами являются красивая внутренняя подсветка и удобное хранение шнура.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Мощность: 2000 Вт; <li>Емкость: 1,5 л; <li>Нагревательный элемент из нержавеющей стали; <li>Корпус из жаропрочного пластика; <li>Автоматическое выключение при закипании; <li>Фильтр от накипи; <li>Открытие крышки одним нажатием; <li>Световой индикатор работы; <li>Внутренняя подсветка двух цветов: красная и синяя; <li>Шкала уровня воды; <li>Удобное хранение шнура. </li></ul><p><strong>Производитель: MAXIMA (Англия)</strong><br><strong>Гарантия: 1 год</strong></p> хлебопечка мистери</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/151cdbb0e55d78748fdd51a7bbe40bf0.jpeg" alt="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329" title="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329"><div class="box"><a href="http://kitchentech.elitno.net/sokovyzhimalka-atlanta-ath-2990r.php"><h3 class="title">капсульные кофемашины bosch Соковыжималка Atlanta ATH-329</h3><p>от <span class="price">2990</span> руб.</p></a></div></li>
						<li><img src="photos/480398a0d650a7b1a9641ca193d5ca18.jpeg" alt="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л" title="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-2350r"><span class="title">каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li><img src="photos/c094c1a0c632dcd5f1edee8671f05107.jpeg" alt="как разобрать утюг Чайник электрический Maxima MК- M211" title="как разобрать утюг Чайник электрический Maxima MК- M211"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-1090r"><span class="title">как разобрать утюг Чайник электрический Maxima MК- M211</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/dd1f2c3f8afff6bfc6d7833a3fe581f3.jpeg" alt="как разобрать кофемолку Чайник электрический  Vitesse VS-108 1,7л" title="как разобрать кофемолку Чайник электрический  Vitesse VS-108 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1970r"><span class="title">как разобрать кофемолку Чайник электрический  Vitesse VS-108 1,7л</span><p>от <span class="price">1970</span> руб.</p></div></li>
						<li class="large"><img src="photos/2e4cd4da907bfa0983f22c5ac1875ffe.jpeg" alt="кофеварка интернет магазин Электрический чайник Atlanta АТН-663" title="кофеварка интернет магазин Электрический чайник Atlanta АТН-663"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-720r"><span class="title">кофеварка интернет магазин Электрический чайник Atlanta АТН-663</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li class="large"><img src="photos/6ad68580ca9fe51d58dccc0df51b3bb5.jpeg" alt="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter" title="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-aquatherm-aquafilter-16720r"><span class="title">ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter</span><p>от <span class="price">16720</span> руб.</p></div></li>
						<li class="large"><img src="photos/6a73d6f5ed044b39207ab31ca41595f1.jpeg" alt="утюг braun 18895 Пылесос моющий Thomas Bravo 20" title="утюг braun 18895 Пылесос моющий Thomas Bravo 20"><div class="box" page="pylesos-moyuschiy-thomas-bravo-8050r"><span class="title">утюг braun 18895 Пылесос моющий Thomas Bravo 20</span><p>от <span class="price">8050</span> руб.</p></div></li>
						<li><img src="photos/52337874dcd8ef0b9c93b02b2fe2cfac.jpeg" alt="соковыжималка juice Пылесос Thomas Power Pack 1630" title="соковыжималка juice Пылесос Thomas Power Pack 1630"><div class="box" page="pylesos-thomas-power-pack-5240r"><span class="title">соковыжималка juice Пылесос Thomas Power Pack 1630</span><p>от <span class="price">5240</span> руб.</p></div></li>
						<li><img src="photos/b82293cd9bb86384904268699e41b0f9.jpeg" alt="сколько стоит соковыжималка Пылесос Thomas Power Pack 1630 Se" title="сколько стоит соковыжималка Пылесос Thomas Power Pack 1630 Se"><div class="box" page="pylesos-thomas-power-pack-se-7010r"><span class="title">сколько стоит соковыжималка Пылесос Thomas Power Pack 1630 Se</span><p>от <span class="price">7010</span> руб.</p></div></li>
						<li><img src="photos/a24b7e04e12ea5cc75354fc2b5ebd18d.jpeg" alt="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный" title="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный"><div class="box" page="pylesos-vitek-vt-chernyy-2600r"><span class="title">фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li><img src="photos/b5afd7c51355e06ff913b79a852afc55.jpeg" alt="пылесос с электрощеткой Утюг Binatone SI-4040 Blue" title="пылесос с электрощеткой Утюг Binatone SI-4040 Blue"><div class="box" page="utyug-binatone-si-blue-1600r"><span class="title">пылесос с электрощеткой Утюг Binatone SI-4040 Blue</span><p>от <span class="price">1600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-maxima-mk-760r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-maxima-mk-760r.php")) require_once "comments/chaynik-elektricheskiy-maxima-mk-760r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-maxima-mk-760r.php" method="post" onsubmit="return checkForm(this)">
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