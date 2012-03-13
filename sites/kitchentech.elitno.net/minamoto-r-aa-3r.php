<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("minamoto-r-aa-3r.php","мясорубка аксион купить");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("minamoto-r-aa-3r.php", $nick, $comment);
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
		<title>мясорубка аксион купить Minamoto R6 (AA)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мясорубка аксион купить, микроволновые печи liberton, капельная кофеварка инструкция, крылышки в пароварке, куриные грудки в мультиварке, тканевый мешок для пылесоса, схема пылесоса самсунг, микроволновая печь работа, кофемашины оптом, рецепт печенья в вафельнице, рецепты для мультиварки cuckoo, как использовать пароварку, мешки пылесборники для пылесосов, какой лучше парогенератор,  соковыжималка tefal отзывы">
		<meta name="description" content="мясорубка аксион купить Можно использовать для цифровой техники, фонариков, электронных игрушек, пультов...">
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
						<a class="photo" href="photos/49901359ef2b43e118be22a24f1caa05.jpeg" title="мясорубка аксион купить Minamoto R6 (AA)"><img src="photos/49901359ef2b43e118be22a24f1caa05.jpeg" alt="мясорубка аксион купить Minamoto R6 (AA)" title="мясорубка аксион купить Minamoto R6 (AA) -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-zelenyy-3780r.php"><img src="photos/3526059781ecc20c6df37db0e64d10f4.jpeg" alt="микроволновые печи liberton Электрический блендер с аксессуарами Bodum BISTRO K11179-565EURO зеленый" title="микроволновые печи liberton Электрический блендер с аксессуарами Bodum BISTRO K11179-565EURO зеленый"></a><h2>Электрический блендер с аксессуарами Bodum BISTRO K11179-565EURO зеленый</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-moulinex-fp-6140r.php"><img src="photos/59cc932c7224c4f3a91684264a52c663.jpeg" alt="капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141" title="капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141"></a><h2>Кухонный комбайн Moulinex FP711141</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-s-grilem-moulinex-mw-l-belyy-3890r.php"><img src="photos/1c1d1049958bdd0b6b9f6e6cb13db14b.jpeg" alt="крылышки в пароварке Микроволновая печь с грилем Moulinex MW220131 20 л, белый" title="крылышки в пароварке Микроволновая печь с грилем Moulinex MW220131 20 л, белый"></a><h2>Микроволновая печь с грилем Moulinex MW220131 20 л, белый</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мясорубка аксион купить Minamoto R6 (AA)</h1>
						<div class="tb"><p>Цена: от <span class="price">3</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19175.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Можно использовать для цифровой техники, фонариков, электронных игрушек, пультов управления и т.д.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Солевой элемент <li>Типоразмер: R6/AA <li>Напряжение: 1.5V </li></ul><p><strong>Производитель: Япония</strong></p> мясорубка аксион купить</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/47aa32b114cfa34725d4752f07527890.jpeg" alt="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502" title="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502"><div class="box" page="multivarka-redmond-rmcm-4990r"><span class="title">куриные грудки в мультиварке Мультиварка Redmond RMC-M4502</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li><img src="photos/56cb596182a024c5be877e612e6462d8.jpeg" alt="тканевый мешок для пылесоса Пароварка Atlanta АТН-605" title="тканевый мешок для пылесоса Пароварка Atlanta АТН-605"><div class="box" page="parovarka-atlanta-atn-1050r-2"><span class="title">тканевый мешок для пылесоса Пароварка Atlanta АТН-605</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/d5827497ec49ae3fe3cb85705f428a83.jpeg" alt="схема пылесоса самсунг Соковыжималка Atlanta ATH-311" title="схема пылесоса самсунг Соковыжималка Atlanta ATH-311"><div class="box" page="sokovyzhimalka-atlanta-ath-1060r"><span class="title">схема пылесоса самсунг Соковыжималка Atlanta ATH-311</span><p>от <span class="price">1060</span> руб.</p></div></li>
						<li><img src="photos/ac081ce5674939d79667b2759a2f84a8.jpeg" alt="микроволновая печь работа Bodum BISTRO 10709-913EURO Тостер белый" title="микроволновая печь работа Bodum BISTRO 10709-913EURO Тостер белый"><div class="box" page="bodum-bistro-euro-toster-belyy-3660r"><span class="title">микроволновая печь работа Bodum BISTRO 10709-913EURO Тостер белый</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li class="large"><img src="photos/78965fa03e391297ff5141e1ed5d2961.jpeg" alt="кофемашины оптом Электрический чайник Atlanta АТН-721" title="кофемашины оптом Электрический чайник Atlanta АТН-721"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r"><span class="title">кофемашины оптом Электрический чайник Atlanta АТН-721</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li class="large"><img src="photos/75de77ac7d47967464a4abeb2e9a64d1.jpeg" alt="рецепт печенья в вафельнице Чайник Melitta Look Aqua (Basic)" title="рецепт печенья в вафельнице Чайник Melitta Look Aqua (Basic)"><div class="box" page="chaynik-melitta-look-aqua-basic-2190r"><span class="title">рецепт печенья в вафельнице Чайник Melitta Look Aqua (Basic)</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li class="large"><img src="photos/5b880c439b70bdcfe7580a48a2aa9fb4.jpeg" alt="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник" title="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник"><div class="box" page="melitta-enjoy-aqua-chaynik-0r"><span class="title">рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник</span><p>от <span class="price">0</span> руб.</p></div></li>
						<li><img src="photos/2604c204c493f1487a5255f83dc099af.jpeg" alt="как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4" title="как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbgsue-1025r"><span class="title">как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4</span><p>от <span class="price">1025</span> руб.</p></div></li>
						<li><img src="photos/df4499dd6fe2786e58841593ed771f8f.jpeg" alt="мешки пылесборники для пылесосов Моющий концентрат Thomas Profloor 1 л 790-009" title="мешки пылесборники для пылесосов Моющий концентрат Thomas Profloor 1 л 790-009"><div class="box" page="moyuschiy-koncentrat-thomas-profloor-l-500r"><span class="title">мешки пылесборники для пылесосов Моющий концентрат Thomas Profloor 1 л 790-009</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/512f8d3c0276804b57a2729ea05d9ba6.jpeg" alt="какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas" title="какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas"><div class="box" page="nabor-meshkovpylesbornikov-dlya-thomas-1100r-2"><span class="title">какой лучше парогенератор Набор мешков-пылесборников 35 (787-183) для Thomas</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/f508d547808db2bce707d6b2135eb926.jpeg" alt="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter" title="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-prestige-s-aquafilter-10800r"><span class="title">индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter</span><p>от <span class="price">10800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("minamoto-r-aa-3r.php", 0, -4); if (file_exists("comments/minamoto-r-aa-3r.php")) require_once "comments/minamoto-r-aa-3r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="minamoto-r-aa-3r.php" method="post" onsubmit="return checkForm(this)">
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