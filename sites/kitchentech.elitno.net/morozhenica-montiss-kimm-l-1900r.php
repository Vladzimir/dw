<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("morozhenica-montiss-kimm-l-1900r.php","бефстроганов в мультиварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("morozhenica-montiss-kimm-l-1900r.php", $nick, $comment);
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
		<title>бефстроганов в мультиварке Мороженица Montiss KIM5405M 1,1 л  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="бефстроганов в мультиварке, микроволновая печь выпечка, купить блендер кенвуд, magic pot мультиварка, куриные грудки в мультиварке, где купить утюг, лучший пылесос самсунг, чайник электрический bork, самоочистка аэрогриля, микроволновая печь работа, кофеварка эспрессо krups, утюг с парогенератором delonghi, пылесос витек с аквафильтром, мясорубка the chemodan clan,  фильтр для пылесоса самсунг">
		<meta name="description" content="бефстроганов в мультиварке С мороженицей Montiss Вы сможете порадовать себя и близких, приготовив аппетитно...">
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
						<a class="photo" href="photos/8472253b416100a0ed111bb9484a2b5a.jpeg" title="бефстроганов в мультиварке Мороженица Montiss KIM5405M 1,1 л"><img src="photos/8472253b416100a0ed111bb9484a2b5a.jpeg" alt="бефстроганов в мультиварке Мороженица Montiss KIM5405M 1,1 л" title="бефстроганов в мультиварке Мороженица Montiss KIM5405M 1,1 л -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-vitek-vt-zheltyy-1550r.php"><img src="photos/d71f361113c68c726b32dbc7d37f5931.jpeg" alt="микроволновая печь выпечка Блендер Vitek VT-1453 желтый" title="микроволновая печь выпечка Блендер Vitek VT-1453 желтый"></a><h2>Блендер Vitek VT-1453 желтый</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-baby-2000r.php"><img src="photos/612bb1b2d8bad8dc8e3250c8f9903851.jpeg" alt="купить блендер кенвуд Блендер Braun MR-320 Baby" title="купить блендер кенвуд Блендер Braun MR-320 Baby"></a><h2>Блендер Braun MR-320 Baby</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-mikser-krasnyy-bodum-bistro-euro-2740r.php"><img src="photos/be6b78c2525e9286d015556c4db7013b.jpeg" alt="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO" title="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO"></a><h2>Электрический миксер красный Bodum BISTRO 11151-294EURO</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>бефстроганов в мультиварке Мороженица Montiss KIM5405M 1,1 л</h1>
						<div class="tb"><p>Цена: от <span class="price">1900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14653.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>С мороженицей Montiss Вы сможете порадовать себя и близких, приготовив аппетитное мороженное всего за 15 минут! Необходимо лишь предварительно заморозить чашу, после чего можно готовить мороженое одним нажатием кнопки. Объем чаши – 1,1 л, высота контейнера – 14 см (подходит практически ко всем морозильным камерам). Прибор легко мыть и удобно хранить.</p><p><b>Характеристики:</b></p><ul type=disc><li>Возможность приготовления мороженного за 15 мин; <li>Приготовление одним нажатием, чаша требует предварительной заморозки; <li>220-240 V, 50 Hz, 7 W; <li>Объем: 1,1 л; <li>Вес: 3 кг; <li>Высота контейнера всего 14 см; <li>Подходит практически под все морозильные камеры.</li></ul><p><b>Производитель:</b> Montiss (Нидерланды).</p><p><b>Страна:</b> Китай.</p> бефстроганов в мультиварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/47aa32b114cfa34725d4752f07527890.jpeg" alt="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502" title="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502"><div class="box" page="multivarka-redmond-rmcm-4990r"><span class="title">куриные грудки в мультиварке Мультиварка Redmond RMC-M4502</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li><img src="photos/96e6df28f6faf8e98beab83007c46a57.jpeg" alt="где купить утюг Мясорубка электрическая Vitek VT-1673" title="где купить утюг Мясорубка электрическая Vitek VT-1673"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-3000r"><span class="title">где купить утюг Мясорубка электрическая Vitek VT-1673</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/2881dd3b520a8310bcadebe542a3493a.jpeg" alt="лучший пылесос самсунг Пароварка Redmond RST-M1104" title="лучший пылесос самсунг Пароварка Redmond RST-M1104"><div class="box" page="parovarka-redmond-rstm-2950r"><span class="title">лучший пылесос самсунг Пароварка Redmond RST-M1104</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/cba9fd30236faeadb264f6621c9544f6.jpeg" alt="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер" title="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер"><div class="box" page="sokovyzhimalka-maxima-mj-blender-2190r"><span class="title">чайник электрический bork Соковыжималка Maxima MJ-049 + блендер</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li class="large"><img src="photos/948f1a9b44ef51dbbf106577d1753c25.jpeg" alt="самоочистка аэрогриля Соковыжималка" title="самоочистка аэрогриля Соковыжималка"><div class="box" page="sokovyzhimalka-3320r"><span class="title">самоочистка аэрогриля Соковыжималка</span><p>от <span class="price">3320</span> руб.</p></div></li>
						<li class="large"><img src="photos/ac081ce5674939d79667b2759a2f84a8.jpeg" alt="микроволновая печь работа Bodum BISTRO 10709-913EURO Тостер белый" title="микроволновая печь работа Bodum BISTRO 10709-913EURO Тостер белый"><div class="box" page="bodum-bistro-euro-toster-belyy-3660r"><span class="title">микроволновая печь работа Bodum BISTRO 10709-913EURO Тостер белый</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li class="large"><img src="photos/0fb0d4eda0d01d4692f2fbd689f6f46f.jpeg" alt="кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л" title="кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-1890r"><span class="title">кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li><img src="photos/89368a4d8b53495528b047bf143af4e5.jpeg" alt="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623" title="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-690r"><span class="title">утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/5693cfb54e3dd38a9bb80b0d7d894cdb.jpeg" alt="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)" title="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)"><div class="box" page="otkryvalka-hand-free-opener-can-opener-470r"><span class="title">пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li><img src="photos/4cf080cddf806d93288abd396c7938d4.jpeg" alt="мясорубка the chemodan clan Комплект насадок Dyson Tool Kit Retail" title="мясорубка the chemodan clan Комплект насадок Dyson Tool Kit Retail"><div class="box" page="komplekt-nasadok-dyson-tool-kit-retail-2490r"><span class="title">мясорубка the chemodan clan Комплект насадок Dyson Tool Kit Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/508d5d97fb58fc95875b08492316946f.jpeg" alt="блендер braun mx 2050 Пылесос Dyson allergy dB DC 29" title="блендер braun mx 2050 Пылесос Dyson allergy dB DC 29"><div class="box" page="pylesos-dyson-allergy-db-dc-19990r"><span class="title">блендер braun mx 2050 Пылесос Dyson allergy dB DC 29</span><p>от <span class="price">19990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("morozhenica-montiss-kimm-l-1900r.php", 0, -4); if (file_exists("comments/morozhenica-montiss-kimm-l-1900r.php")) require_once "comments/morozhenica-montiss-kimm-l-1900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="morozhenica-montiss-kimm-l-1900r.php" method="post" onsubmit="return checkForm(this)">
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