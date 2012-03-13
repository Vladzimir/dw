<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-maxima-mhb-870r.php","картошка с мясом в аэрогриле");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-maxima-mhb-870r.php", $nick, $comment);
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
		<title>картошка с мясом в аэрогриле Блендер Maxima MHB-0429  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="картошка с мясом в аэрогриле, термопот rolsen, электрочайники из нержавейки, курица во фритюрнице, кухонный комбайн tefal, утюг какой фирмы лучше, запчасти для утюгов, фиксики смотреть пылесос, пылесос энергия, блендер philips hr 1617, утюг с тефлоновым покрытием, мясорубка помощница отзывы, кофемашина saeco xsmall, запчасти для пароварки,  соковыжималка россошанка">
		<meta name="description" content="картошка с мясом в аэрогриле Блендер Maxima  станет незаменимым помощником на Вашей кухне. Стальной нож позво...">
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
						<a class="photo" href="photos/08c15d1f7a465f949f829449dc3e88eb.jpeg" title="картошка с мясом в аэрогриле Блендер Maxima MHB-0429"><img src="photos/08c15d1f7a465f949f829449dc3e88eb.jpeg" alt="картошка с мясом в аэрогриле Блендер Maxima MHB-0429" title="картошка с мясом в аэрогриле Блендер Maxima MHB-0429 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/bioochistitel-ot-nakipi-swirl-zhidkiy-ml-185r.php"><img src="photos/314533fc5d95948fd5a6724fd21e3005.jpeg" alt="термопот rolsen Био-очиститель от накипи Swirl (жидкий), 250 мл" title="термопот rolsen Био-очиститель от накипи Swirl (жидкий), 250 мл"></a><h2>Био-очиститель от накипи Swirl (жидкий), 250 мл</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2080r.php"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="электрочайники из нержавейки Блендер Redmond RHB-2907" title="электрочайники из нержавейки Блендер Redmond RHB-2907"></a><h2>Блендер Redmond RHB-2907</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-vitek-vt-2750r.php"><img src="photos/d3bcfc3d08cc302406de89eb814d0d80.jpeg" alt="курица во фритюрнице Кухонный комбайн Vitek VT-1622" title="курица во фритюрнице Кухонный комбайн Vitek VT-1622"></a><h2>Кухонный комбайн Vitek VT-1622</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>картошка с мясом в аэрогриле Блендер Maxima MHB-0429</h1>
						<div class="tb"><p>Цена: от <span class="price">870</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20481.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Блендер Maxima  станет незаменимым помощником на Вашей кухне. Стальной нож позволит измельчить  любые продукты. Эргономичный дизайн с прорезиненными кнопками обеспечит  удобство управления. Насадка блендера выполнена из металла. Предусмотрены две  скорости работы.</p><p><br><strong>Характеристики:</strong></p><ul><li>Тип: погружной;</li><li>Мощность: 400 Вт;</li><li>Чаша, 500 мл;</li><li>2 скорости работы;</li><li>Прорезиненные кнопки;</li><li>Нож из нержавеющей стали;</li><li>Корпус: пластик;</li><li>Погружная часть: металл.</li></ul><p><strong>Производитель: </strong><strong>Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong><br><strong>Гарантия: 12 месяцев</strong></p> картошка с мясом в аэрогриле</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/33b43228a18b1110c1c8a14516611c99.jpeg" alt="кухонный комбайн tefal Кухонный комбайн Tefal Storeinn DO302 EAE" title="кухонный комбайн tefal Кухонный комбайн Tefal Storeinn DO302 EAE"><div class="box" page="kuhonnyy-kombayn-tefal-storeinn-do-eae-3570r"><span class="title">кухонный комбайн tefal Кухонный комбайн Tefal Storeinn DO302 EAE</span><p>от <span class="price">3570</span> руб.</p></div></li>
						<li><img src="photos/ff295724863185ff22e2c85236f25515.jpeg" alt="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый" title="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый"><div class="box" page="bodum-bistro-euro-elektricheskiy-mikser-zelenyy-2740r"><span class="title">утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/785647aa8682372d107781ac6f9a4974.jpeg" alt="запчасти для утюгов Мультиварка Redmond RMC-M4504" title="запчасти для утюгов Мультиварка Redmond RMC-M4504"><div class="box" page="multivarka-redmond-rmcm-4490r"><span class="title">запчасти для утюгов Мультиварка Redmond RMC-M4504</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/acf412ca70279cda1dfad07d522f7e3c.jpeg" alt="фиксики смотреть пылесос Пароварка Vitesse VS-507" title="фиксики смотреть пылесос Пароварка Vitesse VS-507"><div class="box" page="parovarka-vitesse-vs-1290r"><span class="title">фиксики смотреть пылесос Пароварка Vitesse VS-507</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li class="large"><img src="photos/236219e0f937d3aff2a413880136e4e3.jpeg" alt="пылесос энергия Соковыжималка G 299-WN" title="пылесос энергия Соковыжималка G 299-WN"><div class="box" page="sokovyzhimalka-g-wn-6150r"><span class="title">пылесос энергия Соковыжималка G 299-WN</span><p>от <span class="price">6150</span> руб.</p></div></li>
						<li class="large"><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/9886fb8aa4d27a4c0947d702e96f79ee.jpeg" alt="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291" title="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-760r-2"><span class="title">утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/457d4b7f3e82f96ca3e9bfa507402a8c.jpeg" alt="мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)" title="мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r"><span class="title">мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/20a6a481b9a3a072fa1293146dcb1ec9.jpeg" alt="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter" title="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-super-s-aquafilter-10520r"><span class="title">кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter</span><p>от <span class="price">10520</span> руб.</p></div></li>
						<li><img src="photos/eb12162abf9f68b1f020c54d55eeb406.jpeg" alt="запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM" title="запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM"><div class="box" page="sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r"><span class="title">запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM</span><p>от <span class="price">7800</span> руб.</p></div></li>
						<li><img src="photos/b81f4815d2a9df868070af2d7b1533ee.jpeg" alt="парогенератор aeg Утюг Vitek VT-1209" title="парогенератор aeg Утюг Vitek VT-1209"><div class="box" page="utyug-vitek-vt-1100r"><span class="title">парогенератор aeg Утюг Vitek VT-1209</span><p>от <span class="price">1100</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-maxima-mhb-870r.php", 0, -4); if (file_exists("comments/blender-maxima-mhb-870r.php")) require_once "comments/blender-maxima-mhb-870r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-maxima-mhb-870r.php" method="post" onsubmit="return checkForm(this)">
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