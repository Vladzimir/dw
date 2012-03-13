<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("indukcionnaya-plita-kitfort-kt-3000r.php","вафельница со сменными");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("indukcionnaya-plita-kitfort-kt-3000r.php", $nick, $comment);
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
		<title>вафельница со сменными Индукционная плита Kitfort KT-102  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вафельница со сменными, новинки пылесосов, пылесос tomas twin, электрочайники из нержавейки, приготовление пищи в пароварке, стоимость соковыжималки, кухонный комбайн фото, где купить пароварку, купить кофемашину bosch, как выбрать утюг отзывы, аэрогриль поларис отзывы, мультиварка акции, форум микроволновая печь, фритюрница philips,  соковыжималка сатурн">
		<meta name="description" content="вафельница со сменными Индукционная плита Kitfort представляет собой удобное в обращении экономичное ус...">
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
						<a class="photo" href="photos/df340437daa709a0dfc3dc87ab1880bc.jpeg" title="вафельница со сменными Индукционная плита Kitfort KT-102"><img src="photos/df340437daa709a0dfc3dc87ab1880bc.jpeg" alt="вафельница со сменными Индукционная плита Kitfort KT-102" title="вафельница со сменными Индукционная плита Kitfort KT-102 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/ochischayuschie-tabletki-dlya-avtomaticheskih-kofemashin-melitta-h-gr-370r.php"><img src="photos/c837cf8a6f827b86526eb547764fa786.jpeg" alt="новинки пылесосов Очищающие таблетки для автоматических  кофемашин Melitta, 4х1,8 гр" title="новинки пылесосов Очищающие таблетки для автоматических  кофемашин Melitta, 4х1,8 гр"></a><h2>Очищающие таблетки для автоматических  кофемашин Melitta, 4х1,8 гр</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-ddg-click-and-mix-2900r.php"><img src="photos/795ef5ec8b21fcb23efce51ba4b9959a.jpeg" alt="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix" title="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix"></a><h2>Блендер погружной Moulinex DD406G42 Click and Mix</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2080r.php"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="электрочайники из нержавейки Блендер Redmond RHB-2907" title="электрочайники из нержавейки Блендер Redmond RHB-2907"></a><h2>Блендер Redmond RHB-2907</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вафельница со сменными Индукционная плита Kitfort KT-102</h1>
						<div class="tb"><p>Цена: от <span class="price">3000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16762.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Индукционная плита </b><b>Kitfort</b> представляет собой удобное в обращении экономичное устройство для приготовления пищи. Модель отличается лаконичным дизайном – индукционный нагревательный элемент и панель сенсорного управления расположены на одной рабочей поверхности.</p><p>Плита имеет 10 различных режимов мощности от 120 и до 2000 Вт. «Медленный огонь» позволяет готовить продукты как на водяной бане, а на максимальной мощности можно поджарить мясо или вскипятить воду буквально в считанные минуты. Прибор снабжен шестью настроенными программами приготовления пищи.</p><p>Управление плиткой Kitfort осуществляется с помощью сенсорной панели - Вы можете установить режим мощности, выбрать программу приготовления, включить таймер и в любой момент изменить время, оставшееся до отключения. Прибор оснащен функцией, благодаря которой можно узнать количество затраченной на приготовление блюда электроэнергии.</p><p><b>Особенности:</b></p><ul type=disc><li>Лаконичный элегантный дизайн; </li><li>Малые габариты; </li><li>Высокая скорость нагрева; </li><li>Универсальность и удобство в работе; </li><li>Энергоэффективность; </li><li>Безопасность.</li></ul><p><b>Характеристики:</b></p><ul type=disc><li>Мощность: 2000 Вт; </li><li>10 режимов мощности; </li><li>КПД 90%; </li><li>Нагревательный элемент индукционного типа; </li><li>Количество конфорок: 1; </li><li>Сенсорное управление; </li><li>Яркий цифровой дисплей; </li><li>Цифровая панель управления; </li><li>Таймер работы; </li><li>Предназначена для посуды, обладающей ферромагнитными свойствами (распознать такую посуду можно с помощью обычного магнита); </li><li>Функции защиты: защита от перегрева, для предотвращения несчастных случаев плитка автоматически отключается, если в течение 2 часов она не получила никаких команд или отключается через 3 минуты после нагрева до 320 С; </li><li>Цвет: черный; </li><li>Диаметр дна используемой посуды: от 12 до 26 см; </li><li>Размеры (ВхШхГ): 6,3x30,5x38,5 см; </li><li>Вес: 2 кг.</li></ul><p><b>Производитель:</b> Kitfort.</p><p><b>Страна:</b> Китай.</p><p><b>Гарантия:</b> 1 год.</p> вафельница со сменными</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7d364e47f91214e45b2e2f0dc4bfa3a6.jpeg" alt="приготовление пищи в пароварке Кофемашина Philips Saeco HD 8944 09" title="приготовление пищи в пароварке Кофемашина Philips Saeco HD 8944 09"><div class="box" page="kofemashina-philips-saeco-hd-67000r"><span class="title">приготовление пищи в пароварке Кофемашина Philips Saeco HD 8944 09</span><p>от <span class="price">67000</span> руб.</p></div></li>
						<li><img src="photos/ccf51377f0419f271513b485782fac2b.jpeg" alt="стоимость соковыжималки Кофемолка Maxima MCG-1602" title="стоимость соковыжималки Кофемолка Maxima MCG-1602"><div class="box" page="kofemolka-maxima-mcg-550r"><span class="title">стоимость соковыжималки Кофемолка Maxima MCG-1602</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/a778f38f56b1abc67bee8e49c9772547.jpeg" alt="кухонный комбайн фото Микроволновая печь Vitek VT-1691" title="кухонный комбайн фото Микроволновая печь Vitek VT-1691"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2750r"><span class="title">кухонный комбайн фото Микроволновая печь Vitek VT-1691</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/1a39977506779af8e80d3d2045a86d6b.jpeg" alt="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001" title="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001"><div class="box" page="myasorubka-elektricheskaya-tefal-le-hachoir-me-5100r"><span class="title">где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001</span><p>от <span class="price">5100</span> руб.</p></div></li>
						<li class="large"><img src="photos/60dff82992355ef436c4e763a78c1f99.jpeg" alt="купить кофемашину bosch Соковыжималка для цитрусовых" title="купить кофемашину bosch Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-760r"><span class="title">купить кофемашину bosch Соковыжималка для цитрусовых</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/7d63a182df07dd9be547ac2724aeed46.jpeg" alt="как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO" title="как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-krasnaya-bodum-bistro-euro-3340r"><span class="title">как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li class="large"><img src="photos/601488d11fe95f07b0e7e96c29a4ca5c.jpeg" alt="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White" title="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-magic-white-1100r"><span class="title">аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/b11b426009f0167e5ff93f5aa64ca56d.jpeg" alt="мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л" title="мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1650r"><span class="title">мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/b4a95c8a4ccd80ea8dd5b10c9fcfd32c.jpeg" alt="форум микроволновая печь Чайник электрический Maxima MК-112" title="форум микроволновая печь Чайник электрический Maxima MК-112"><div class="box" page="chaynik-elektricheskiy-maxima-mk-790r"><span class="title">форум микроволновая печь Чайник электрический Maxima MК-112</span><p>от <span class="price">790</span> руб.</p></div></li>
						<li><img src="photos/9b828fe53dfca2c4781201b615fd512e.jpeg" alt="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий" title="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belosiniy-920r"><span class="title">фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/0d3ac15ed04e0206963b9102f5ef309b.jpeg" alt="покупать ли мультиварку Парогенератор Lelit PG018" title="покупать ли мультиварку Парогенератор Lelit PG018"><div class="box" page="parogenerator-lelit-pg-24500r"><span class="title">покупать ли мультиварку Парогенератор Lelit PG018</span><p>от <span class="price">24500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("indukcionnaya-plita-kitfort-kt-3000r.php", 0, -4); if (file_exists("comments/indukcionnaya-plita-kitfort-kt-3000r.php")) require_once "comments/indukcionnaya-plita-kitfort-kt-3000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="indukcionnaya-plita-kitfort-kt-3000r.php" method="post" onsubmit="return checkForm(this)">
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