<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vozdushnyy-filtr-redmond-hepafiltr-rv-390r.php","интернет магазин аэрогриль");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vozdushnyy-filtr-redmond-hepafiltr-rv-390r.php", $nick, $comment);
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
		<title>интернет магазин аэрогриль Воздушный фильтр Redmond  HEPA-фильтр RV-312  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="интернет магазин аэрогриль, аппараты для педикюра с пылесосом, кухонный комбайн фото, утюг какой фирмы лучше, гречневая каша в мультиварке, рецепт пельменей в хлебопечке, рецепты для мультиварки viconte, пылесос karcher цена, измельчитель сучьев, микроволновая печь тест, кофемашина krups nescafe dolce gusto, греется пылесос, купить пылесос с контейнером, пароварка газовая купить,  как приготовить хлеб в хлебопечке">
		<meta name="description" content="интернет магазин аэрогриль Данный фильтр, предназначенный для пылесоса RV-312 от компании Redmond., относит...">
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
						<a class="photo" href="photos/916a75c3d4cbc8ec64d3ba505b733ba5.jpeg" title="интернет магазин аэрогриль Воздушный фильтр Redmond  HEPA-фильтр RV-312"><img src="photos/916a75c3d4cbc8ec64d3ba505b733ba5.jpeg" alt="интернет магазин аэрогриль Воздушный фильтр Redmond  HEPA-фильтр RV-312" title="интернет магазин аэрогриль Воздушный фильтр Redmond  HEPA-фильтр RV-312 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-chernyy-4155r.php"><img src="photos/4e6a1db3aa397f67ece5fe8079d3244b.jpeg" alt="аппараты для педикюра с пылесосом Вспениватель Melitta Cremio черный" title="аппараты для педикюра с пылесосом Вспениватель Melitta Cremio черный"></a><h2>Вспениватель Melitta Cremio черный</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-2750r.php"><img src="photos/a778f38f56b1abc67bee8e49c9772547.jpeg" alt="кухонный комбайн фото Микроволновая печь Vitek VT-1691" title="кухонный комбайн фото Микроволновая печь Vitek VT-1691"></a><h2>Микроволновая печь Vitek VT-1691</h2></li>
							<li><a href="http://kitchentech.elitno.net/bodum-bistro-euro-elektricheskiy-mikser-zelenyy-2740r.php"><img src="photos/ff295724863185ff22e2c85236f25515.jpeg" alt="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый" title="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый"></a><h2>Bodum BISTRO 11151-565EURO Электрический миксер зеленый</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>интернет магазин аэрогриль Воздушный фильтр Redmond  HEPA-фильтр RV-312</h1>
						<div class="tb"><p>Цена: от <span class="price">390</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19666.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Данный фильтр, предназначенный для пылесоса RV-312 от компании Redmond., относится к типу НЕРА Н10. Фильтры класса НЕРА Н10 (High Efficiency Particulate Air) способны обеспечить максимально высокую эффективность задержки мельчайших частиц и аллергенов. </p><p><b>Характеристики:</b></p><ul type=disc><li>Тип фильтра: НЕРА Н10 </li></ul><p><b>Изготовитель: США</b></p><p><b>Производитель: Китай</b></p> интернет магазин аэрогриль</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8472253b416100a0ed111bb9484a2b5a.jpeg" alt="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л" title="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л"><div class="box" page="morozhenica-montiss-kimm-l-1900r"><span class="title">гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/d325e4ff8de4614af80db126de07173a.jpeg" alt="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8" title="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8"><div class="box" page="myasorubka-redmond-rmg-6690r"><span class="title">рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8</span><p>от <span class="price">6690</span> руб.</p></div></li>
						<li><img src="photos/602afbefdc154f32c668e628ed57301c.jpeg" alt="рецепты для мультиварки viconte Соковыжималка Maxima MJ-M903" title="рецепты для мультиварки viconte Соковыжималка Maxima MJ-M903"><div class="box" page="sokovyzhimalka-maxima-mjm-1850r"><span class="title">рецепты для мультиварки viconte Соковыжималка Maxima MJ-M903</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/6572a3244fa07fc4dc4c915b3dd0a9ff.jpeg" alt="пылесос karcher цена Хлебопечка Moulinex OW200033" title="пылесос karcher цена Хлебопечка Moulinex OW200033"><div class="box" page="hlebopechka-moulinex-ow-3800r"><span class="title">пылесос karcher цена Хлебопечка Moulinex OW200033</span><p>от <span class="price">3800</span> руб.</p></div></li>
						<li class="large"><img src="photos/7b0ef0b12e5f66ec7582c9396725bc92.jpeg" alt="измельчитель сучьев Чайник электрический Vitek VT-1120" title="измельчитель сучьев Чайник электрический Vitek VT-1120"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1150r"><span class="title">измельчитель сучьев Чайник электрический Vitek VT-1120</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li class="large"><img src="photos/cb5b82e2b4fb8916dd96c68408275e51.jpeg" alt="микроволновая печь тест Чайник электрический Vitek VT-1149 красный" title="микроволновая печь тест Чайник электрический Vitek VT-1149 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1650r"><span class="title">микроволновая печь тест Чайник электрический Vitek VT-1149 красный</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li class="large"><img src="photos/5eacb893fe5269a15baee9e1dcce1404.jpeg" alt="кофемашина krups nescafe dolce gusto Чайник электрический Tefal VitesseS Inox BI962513 1,7 л" title="кофемашина krups nescafe dolce gusto Чайник электрический Tefal VitesseS Inox BI962513 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-inox-bi-l-2990r"><span class="title">кофемашина krups nescafe dolce gusto Чайник электрический Tefal VitesseS Inox BI962513 1,7 л</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li><img src="photos/f529cddb8b0b7bbdfe7eea8e3d43b5b1.jpeg" alt="греется пылесос Чайник электрический Atlanta ATH-752" title="греется пылесос Чайник электрический Atlanta ATH-752"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-1600r-2"><span class="title">греется пылесос Чайник электрический Atlanta ATH-752</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/296e5671e5f65168bbfd694532a2c751.jpeg" alt="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной" title="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-stalnoy-1850r"><span class="title">купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/e754a7b0b0a20443433494bbd5f5ba8d.jpeg" alt="пароварка газовая купить Пылесборник Vitek VT-1851 5шт." title="пароварка газовая купить Пылесборник Vitek VT-1851 5шт."><div class="box" page="pylesbornik-vitek-vt-sht-190r"><span class="title">пароварка газовая купить Пылесборник Vitek VT-1851 5шт.</span><p>от <span class="price">190</span> руб.</p></div></li>
						<li><img src="photos/6d6e50224259e87ee797b3ec79edf80e.jpeg" alt="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP" title="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP"><div class="box" page="ploskaya-universalnaya-nasadka-v-upakovke-dyson-flat-out-head-retail-np-2190r"><span class="title">борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP</span><p>от <span class="price">2190</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vozdushnyy-filtr-redmond-hepafiltr-rv-390r.php", 0, -4); if (file_exists("comments/vozdushnyy-filtr-redmond-hepafiltr-rv-390r.php")) require_once "comments/vozdushnyy-filtr-redmond-hepafiltr-rv-390r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vozdushnyy-filtr-redmond-hepafiltr-rv-390r.php" method="post" onsubmit="return checkForm(this)">
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