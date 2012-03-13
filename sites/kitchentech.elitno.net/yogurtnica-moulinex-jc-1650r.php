<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("yogurtnica-moulinex-jc-1650r.php","хлебопечка цельнозерновой");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("yogurtnica-moulinex-jc-1650r.php", $nick, $comment);
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
		<title>хлебопечка цельнозерновой Йогуртница Moulinex JC1  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка цельнозерновой, грудка в пароварке, утюг какой фирмы лучше, пельменное тесто в хлебопечке, стоит ли покупать мультиварку, запеканка в хлебопечке, аэрогриль hotter 1037, утюг tefal с парогенератором, инструкция хлебопечка bork, аэрогриль рецепты картофель, brand аэрогриль, лучшие рецепты для мультиварки, запчасти для пароварки, парогенератор aeg,  работа аэрогриля">
		<meta name="description" content="хлебопечка цельнозерновой Йогуртница Moulinex поможет вам быстро и без особых усилий приготовить аппетитны...">
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
						<a class="photo" href="photos/5b5325f46d1563794a5b9b1bbec3af49.jpeg" title="хлебопечка цельнозерновой Йогуртница Moulinex JC1"><img src="photos/5b5325f46d1563794a5b9b1bbec3af49.jpeg" alt="хлебопечка цельнозерновой Йогуртница Moulinex JC1" title="хлебопечка цельнозерновой Йогуртница Moulinex JC1 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-600r.php"><img src="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" alt="грудка в пароварке Кофемолка  ATH-272" title="грудка в пароварке Кофемолка  ATH-272"></a><h2>Кофемолка  ATH-272</h2></li>
							<li><a href="http://kitchentech.elitno.net/bodum-bistro-euro-elektricheskiy-mikser-zelenyy-2740r.php"><img src="photos/ff295724863185ff22e2c85236f25515.jpeg" alt="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый" title="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый"></a><h2>Bodum BISTRO 11151-565EURO Электрический миксер зеленый</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-maxima-mmg-2690r.php"><img src="photos/83b963fc4661f051cc9c631952fa196f.jpeg" alt="пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212" title="пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212"></a><h2>Мясорубка Maxima MMG-0212</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка цельнозерновой Йогуртница Moulinex JC1</h1>
						<div class="tb"><p>Цена: от <span class="price">1650</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12014.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Йогуртница Moulinex</b> поможет вам быстро и без особых усилий приготовить аппетитный и полезный йогурт в домашних условиях. Это отличный экономный вариант для тех, кто не представляет свой ежедневный рацион без кисломолочных продуктов. Для того чтобы приготовить любимое лакомство достаточно иметь 1 л молока и один натуральный йогурт, который будет служить закваской. Модель обладает мощностью 12 Вт, механическим таймером. </p><p>Йогуртница оснащена 7-ю баночками объемом 150 г с закручивающимися крышками, на которых с помощью специального маркера выставляется дата приготовления йогурта, чтобы контролировать его срок годности. Благодаря особой форме крышки плотно зафиксированы и не соприкасаются друг с другом, что исключает возможность разбития баночек при переноске или хранении. Готовый йогурт может храниться до 10 дней.</p><p><b>Характеристики:</b></p><ul type=\disc\><li>Мощность: 12 Вт; </li><li>Объем баночек для йогурта: 150 г; </li><li>7 баночек для йогурта с закручивающимися крышками; </li><li>Маркер срока годности на крышках; </li><li>Механический таймер.</li></ul><p><b>Производитель:</b> Moulinex.</p><p><b>Страна:</b> Франция.</p><p><b>Гарантия:</b> 2 года.</p> хлебопечка цельнозерновой</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5bf48f17b0c0a7ecdd4b2ccc867e6baf.jpeg" alt="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191" title="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191"><div class="box" page="elektroplita-indukcionnaya-atlanta-ath-1300r"><span class="title">стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/5ccb08af67b9142dd99b94ec6317943c.jpeg" alt="запеканка в хлебопечке Чайник электрический Maxima MK-G311" title="запеканка в хлебопечке Чайник электрический Maxima MK-G311"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-1650r"><span class="title">запеканка в хлебопечке Чайник электрический Maxima MK-G311</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/e9322568d654cf02152dc451f13376f9.jpeg" alt="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный" title="аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1950r"><span class="title">аэрогриль hotter 1037 Чайник электрический  Vitesse VS-113 1,5л красный</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/7f879f1e565356e4de3c725635f57ee6.jpeg" alt="утюг tefal с парогенератором Зарядное устройство GP Batteries PB360GS-UE1" title="утюг tefal с парогенератором Зарядное устройство GP Batteries PB360GS-UE1"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbgsue-270r"><span class="title">утюг tefal с парогенератором Зарядное устройство GP Batteries PB360GS-UE1</span><p>от <span class="price">270</span> руб.</p></div></li>
						<li class="large"><img src="photos/5ba6b51a5b7372f52a4d19e9b0a65db5.jpeg" alt="инструкция хлебопечка bork Детектор скрытых видеокамер BugHunter Dvideo" title="инструкция хлебопечка bork Детектор скрытых видеокамер BugHunter Dvideo"><div class="box" page="detektor-skrytyh-videokamer-bughunter-dvideo-6950r"><span class="title">инструкция хлебопечка bork Детектор скрытых видеокамер BugHunter Dvideo</span><p>от <span class="price">6950</span> руб.</p></div></li>
						<li class="large"><img src="photos/7bfc4f4031d68720fdce5209cf8c8c0d.jpeg" alt="аэрогриль рецепты картофель Мини-весы Tanita 1479V" title="аэрогриль рецепты картофель Мини-весы Tanita 1479V"><div class="box" page="minivesy-tanita-v-3000r"><span class="title">аэрогриль рецепты картофель Мини-весы Tanita 1479V</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li class="large"><img src="photos/26befd04ebef6df7b3db2c4e6ee2357f.jpeg" alt="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)" title="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r-2"><span class="title">brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/bf71bbc1609948054c42cfa52f5f228d.jpeg" alt="лучшие рецепты для мультиварки Набор мешков-пылесборников 50 (790-012) для Thomas" title="лучшие рецепты для мультиварки Набор мешков-пылесборников 50 (790-012) для Thomas"><div class="box" page="nabor-meshkovpylesbornikov-dlya-thomas-1100r"><span class="title">лучшие рецепты для мультиварки Набор мешков-пылесборников 50 (790-012) для Thomas</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/eb12162abf9f68b1f020c54d55eeb406.jpeg" alt="запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM" title="запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM"><div class="box" page="sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r"><span class="title">запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM</span><p>от <span class="price">7800</span> руб.</p></div></li>
						<li><img src="photos/b81f4815d2a9df868070af2d7b1533ee.jpeg" alt="парогенератор aeg Утюг Vitek VT-1209" title="парогенератор aeg Утюг Vitek VT-1209"><div class="box" page="utyug-vitek-vt-1100r"><span class="title">парогенератор aeg Утюг Vitek VT-1209</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/d7f319eafa0a03def3b072699daeccdd.jpeg" alt="утюг в туле Утюг Vitek VT-1235" title="утюг в туле Утюг Vitek VT-1235"><div class="box" page="utyug-vitek-vt-970r"><span class="title">утюг в туле Утюг Vitek VT-1235</span><p>от <span class="price">970</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("yogurtnica-moulinex-jc-1650r.php", 0, -4); if (file_exists("comments/yogurtnica-moulinex-jc-1650r.php")) require_once "comments/yogurtnica-moulinex-jc-1650r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="yogurtnica-moulinex-jc-1650r.php" method="post" onsubmit="return checkForm(this)">
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