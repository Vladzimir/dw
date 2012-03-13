<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("ochischayuschie-tabletki-dlya-avtomaticheskih-kofemashin-melitta-h-gr-370r.php","кофеварка dolce");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("ochischayuschie-tabletki-dlya-avtomaticheskih-kofemashin-melitta-h-gr-370r.php", $nick, $comment);
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
		<title>кофеварка dolce Очищающие таблетки для автоматических  кофемашин Melitta, 4х1,8 гр  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофеварка dolce, тольятти мультиварка, что можно делать блендером, пельменное тесто в хлебопечке, пылесос энергия, измельчитель сена, блендер бош купить, маленькие соковыжималки, делонги кофемашина примадонна, микроволновая печь тест, утюг с парогенератором delonghi, мультиварка скороварка land life, кофеварка vitek 1513, мешки пылесборники для пылесосов,  многоразовые мешки для пылесоса">
		<meta name="description" content="кофеварка dolce Очищающие таблетки Melitta созданы специально для эффективного  удаления кофейны...">
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
						<a class="photo" href="photos/c837cf8a6f827b86526eb547764fa786.jpeg" title="кофеварка dolce Очищающие таблетки для автоматических  кофемашин Melitta, 4х1,8 гр"><img src="photos/c837cf8a6f827b86526eb547764fa786.jpeg" alt="кофеварка dolce Очищающие таблетки для автоматических  кофемашин Melitta, 4х1,8 гр" title="кофеварка dolce Очищающие таблетки для автоматических  кофемашин Melitta, 4х1,8 гр -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-650r.php"><img src="photos/833ae77791168206a3b151985fda9a0b.jpeg" alt="тольятти мультиварка Кофемолка Maxima MCG-0316" title="тольятти мультиварка Кофемолка Maxima MCG-0316"></a><h2>Кофемолка Maxima MCG-0316</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-binatone-mgr-white-3700r.php"><img src="photos/060f95312423ba3e968eaf23618bd36d.jpeg" alt="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White" title="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White"></a><h2>Мясорубка электрическая Binatone MGR-3040 White</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-maxima-mmg-2690r.php"><img src="photos/83b963fc4661f051cc9c631952fa196f.jpeg" alt="пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212" title="пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212"></a><h2>Мясорубка Maxima MMG-0212</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофеварка dolce Очищающие таблетки для автоматических  кофемашин Melitta, 4х1,8 гр</h1>
						<div class="tb"><p>Цена: от <span class="price">370</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26573.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Очищающие таблетки Melitta созданы специально для эффективного  удаления кофейных жиров и масел со всех частей кофемашины. Таблетки  предназначены для автоматический кофемашин. Форма выпуска данного товара: 4  таблетки по 1,8 гр. </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Форма:       таблетки;</li>   <li>Для       автоматический кофемашин;</li>   <li>Для       очистки от кофейных масел;</li>   <li>4       таблетки по 1,8 гр.</li> </ul> <p><strong>Производитель:  Melitta (Германия)</strong></p> кофеварка dolce</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/236219e0f937d3aff2a413880136e4e3.jpeg" alt="пылесос энергия Соковыжималка G 299-WN" title="пылесос энергия Соковыжималка G 299-WN"><div class="box" page="sokovyzhimalka-g-wn-6150r"><span class="title">пылесос энергия Соковыжималка G 299-WN</span><p>от <span class="price">6150</span> руб.</p></div></li>
						<li><img src="photos/b563c2d22903c88ab1496d97329bc5bf.jpeg" alt="измельчитель сена Тостер Atlanta ATH-234" title="измельчитель сена Тостер Atlanta ATH-234"><div class="box" page="toster-atlanta-ath-690r"><span class="title">измельчитель сена Тостер Atlanta ATH-234</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/76b45e609e76d0f51a02bc816db807a1.jpeg" alt="блендер бош купить Тостер Maxima MT-014" title="блендер бош купить Тостер Maxima MT-014"><div class="box" page="toster-maxima-mt-540r"><span class="title">блендер бош купить Тостер Maxima MT-014</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li><img src="photos/fe37fe3249ac15c2c7299f94675336f3.jpeg" alt="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO" title="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO"><div class="box" page="toster-chernyy-bodum-bistro-euro-3660r"><span class="title">маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li class="large"><img src="photos/46a5120709bf99f581bc7ea7569bd649.png" alt="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902" title="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902"><div class="box" page="hlebopech-redmond-rbmm-3990r"><span class="title">делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li class="large"><img src="photos/cb5b82e2b4fb8916dd96c68408275e51.jpeg" alt="микроволновая печь тест Чайник электрический Vitek VT-1149 красный" title="микроволновая печь тест Чайник электрический Vitek VT-1149 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1650r"><span class="title">микроволновая печь тест Чайник электрический Vitek VT-1149 красный</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li class="large"><img src="photos/89368a4d8b53495528b047bf143af4e5.jpeg" alt="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623" title="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-690r"><span class="title">утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/351be0717cadb3b074e20c4a4dccbf50.jpeg" alt="мультиварка скороварка land life Мини весы Momert 6000" title="мультиварка скороварка land life Мини весы Momert 6000"><div class="box" page="mini-vesy-momert-1600r"><span class="title">мультиварка скороварка land life Мини весы Momert 6000</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/565e52ebc108aee0062c9aab0f314cab.jpeg" alt="кофеварка vitek 1513 Парогенератор Lelit PG024N" title="кофеварка vitek 1513 Парогенератор Lelit PG024N"><div class="box" page="parogenerator-lelit-pgn-16700r"><span class="title">кофеварка vitek 1513 Парогенератор Lelit PG024N</span><p>от <span class="price">16700</span> руб.</p></div></li>
						<li><img src="photos/df4499dd6fe2786e58841593ed771f8f.jpeg" alt="мешки пылесборники для пылесосов Моющий концентрат Thomas Profloor 1 л 790-009" title="мешки пылесборники для пылесосов Моющий концентрат Thomas Profloor 1 л 790-009"><div class="box" page="moyuschiy-koncentrat-thomas-profloor-l-500r"><span class="title">мешки пылесборники для пылесосов Моющий концентрат Thomas Profloor 1 л 790-009</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/7e736b7b32dea00ff19d5eefa59427b8.jpeg" alt="блендер рецепты видео Пылесос Thomas Power Pack 1620" title="блендер рецепты видео Пылесос Thomas Power Pack 1620"><div class="box" page="pylesos-thomas-power-pack-4300r"><span class="title">блендер рецепты видео Пылесос Thomas Power Pack 1620</span><p>от <span class="price">4300</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("ochischayuschie-tabletki-dlya-avtomaticheskih-kofemashin-melitta-h-gr-370r.php", 0, -4); if (file_exists("comments/ochischayuschie-tabletki-dlya-avtomaticheskih-kofemashin-melitta-h-gr-370r.php")) require_once "comments/ochischayuschie-tabletki-dlya-avtomaticheskih-kofemashin-melitta-h-gr-370r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="ochischayuschie-tabletki-dlya-avtomaticheskih-kofemashin-melitta-h-gr-370r.php" method="post" onsubmit="return checkForm(this)">
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