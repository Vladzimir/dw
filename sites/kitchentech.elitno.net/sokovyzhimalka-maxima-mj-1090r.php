<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sokovyzhimalka-maxima-mj-1090r.php","morphy richards хлебопечка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sokovyzhimalka-maxima-mj-1090r.php", $nick, $comment);
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
		<title>morphy richards хлебопечка Соковыжималка Maxima MJ-059  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="morphy richards хлебопечка, выбор микроволновой печи, поломки микроволновых печей, лестничные перила, что приготовить в мультиварке, вафельница орешек 4, кофеварка espresso, пылесос витек с аквафильтром, хлебопечка советы, магазин запчастей для мясорубок, кофеварка дольче густо отзывы, мясорубка помощница, сколько стоит моющий пылесос, кубань 8 вафельница,  работа аэрогриля">
		<meta name="description" content="morphy richards хлебопечка Начните день со стаканчика свежего сока! Соковыжималка Maxima, мощностью 260 Вт,...">
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
						<a class="photo" href="photos/a5a669656630312240d0cb17c653dfea.jpeg" title="morphy richards хлебопечка Соковыжималка Maxima MJ-059"><img src="photos/a5a669656630312240d0cb17c653dfea.jpeg" alt="morphy richards хлебопечка Соковыжималка Maxima MJ-059" title="morphy richards хлебопечка Соковыжималка Maxima MJ-059 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-krasnyy-4155r.php"><img src="photos/0b57a5fa2564b3001e847ebdd45ce976.jpeg" alt="выбор микроволновой печи Вспениватель Melitta Cremio красный" title="выбор микроволновой печи Вспениватель Melitta Cremio красный"></a><h2>Вспениватель Melitta Cremio красный</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3300r.php"><img src="photos/b4cdab793f8c554f9150b177db178b02.jpeg" alt="поломки микроволновых печей Микроволновая печь Vitek VT-1683" title="поломки микроволновых печей Микроволновая печь Vitek VT-1683"></a><h2>Микроволновая печь Vitek VT-1683</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-russell-hobbs-desire-art-1290r.php"><img src="photos/7e647600a38b01c48fb301e5b6c41520.jpeg" alt="лестничные перила Миксер Russell Hobbs Desire, арт. 18507-56" title="лестничные перила Миксер Russell Hobbs Desire, арт. 18507-56"></a><h2>Миксер Russell Hobbs Desire, арт. 18507-56</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>morphy richards хлебопечка Соковыжималка Maxima MJ-059</h1>
						<div class="tb"><p>Цена: от <span class="price">1090</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20599.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Начните день со стаканчика свежего сока! Соковыжималка Maxima, мощностью 260 Вт,  оснащена защитой от протекания, что поможет сохранить чистоту на Вашей кухне.  Для повышения прочности и долговечности устройства материал сетки-фильтра  выполнен из нержавеющей стали. Объем стаканчика для сока 400 мл, объем  контейнера для жмыха 400 мл. В целях безопасности предусмотрена функция защиты  от случайного включения и прорезиненные ножки, для большей устойчивости на  поверхности. Уровень шума работающей соковыжималки не превышает 70 дБ.</p><p><br><strong>Характеристики:</strong></p><ul><li>Тип управления: механический;</li><li>Мощность: 260 Вт;</li><li>Частота вращения двигателя: 10 000 об/мин;</li><li>Объем стаканчика для сока: 400 мл;</li><li>Объем контейнера для жмыха: 400 мл;</li><li>Защита от протекания;</li><li>Защита от случайного включения;</li><li>Автоматический выброс жмыха;</li><li>Материал сетки фильтра: нержавеющая сталь;</li><li>Прорезиненные ножки;</li><li>Уровень шума: менее 70 дБ.</li></ul><p><strong>Производитель: </strong><strong>Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong><br><strong>Гарантия: 12 месяцев</strong></p> morphy richards хлебопечка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/bd86985191b900e717a6f18b17266152.jpeg" alt="что приготовить в мультиварке Пароварка Binatone FS-404 White Green" title="что приготовить в мультиварке Пароварка Binatone FS-404 White Green"><div class="box" page="parovarka-binatone-fs-white-green-1895r"><span class="title">что приготовить в мультиварке Пароварка Binatone FS-404 White Green</span><p>от <span class="price">1895</span> руб.</p></div></li>
						<li><img src="photos/d7869500a03daf3749520ba97157adc1.jpeg" alt="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno" title="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno"><div class="box" page="hlebopechka-moulinex-ow-uno-4990r"><span class="title">вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li><img src="photos/ab2f5443010f5db248e8ed93f21ddbdb.jpeg" alt="кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue" title="кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue"><div class="box" page="chaynik-elektricheskiy-binatone-cej-t-magic-thermo-white-blue-1300r"><span class="title">кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/5693cfb54e3dd38a9bb80b0d7d894cdb.jpeg" alt="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)" title="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)"><div class="box" page="otkryvalka-hand-free-opener-can-opener-470r"><span class="title">пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li class="large"><img src="photos/cc9208f636d59db8c6c0a8ac95064dc7.jpeg" alt="хлебопечка советы Шланг подачи воды c фильтром Karcher 4.440-238.0" title="хлебопечка советы Шланг подачи воды c фильтром Karcher 4.440-238.0"><div class="box" page="shlang-podachi-vody-c-filtrom-karcher-1750r"><span class="title">хлебопечка советы Шланг подачи воды c фильтром Karcher 4.440-238.0</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li class="large"><img src="photos/ed6cccd8ae597a978fe91c415f9d06d3.jpeg" alt="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)" title="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-135r"><span class="title">магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)</span><p>от <span class="price">135</span> руб.</p></div></li>
						<li class="large"><img src="photos/d360b8a0c7da5c2048584c84686650a7.jpeg" alt="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)" title="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-55r"><span class="title">кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)</span><p>от <span class="price">55</span> руб.</p></div></li>
						<li><img src="photos/0cd736da9ac10dc7bbde0f3b6049ff52.jpeg" alt="мясорубка помощница Воздушный фильтр Redmond H10RV-308" title="мясорубка помощница Воздушный фильтр Redmond H10RV-308"><div class="box" page="vozdushnyy-filtr-redmond-hrv-390r"><span class="title">мясорубка помощница Воздушный фильтр Redmond H10RV-308</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/39a5505798446240c306b0610cc8e434.jpeg" alt="сколько стоит моющий пылесос Пылесос Vitek VT-1834" title="сколько стоит моющий пылесос Пылесос Vitek VT-1834"><div class="box" page="pylesos-vitek-vt-5890r"><span class="title">сколько стоит моющий пылесос Пылесос Vitek VT-1834</span><p>от <span class="price">5890</span> руб.</p></div></li>
						<li><img src="photos/4fbb8e89e08e4c6965da2c5a458072d3.jpeg" alt="кубань 8 вафельница Пылесос Vitek VT-1836 красный" title="кубань 8 вафельница Пылесос Vitek VT-1836 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-3600r"><span class="title">кубань 8 вафельница Пылесос Vitek VT-1836 красный</span><p>от <span class="price">3600</span> руб.</p></div></li>
						<li><img src="photos/7e736b7b32dea00ff19d5eefa59427b8.jpeg" alt="блендер рецепты видео Пылесос Thomas Power Pack 1620" title="блендер рецепты видео Пылесос Thomas Power Pack 1620"><div class="box" page="pylesos-thomas-power-pack-4300r"><span class="title">блендер рецепты видео Пылесос Thomas Power Pack 1620</span><p>от <span class="price">4300</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sokovyzhimalka-maxima-mj-1090r.php", 0, -4); if (file_exists("comments/sokovyzhimalka-maxima-mj-1090r.php")) require_once "comments/sokovyzhimalka-maxima-mj-1090r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sokovyzhimalka-maxima-mj-1090r.php" method="post" onsubmit="return checkForm(this)">
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