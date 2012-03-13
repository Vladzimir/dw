<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-vitek-vt-850r.php","миксер или блендер");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-vitek-vt-850r.php", $nick, $comment);
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
		<title>миксер или блендер Блендер Vitek VT-1452  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="миксер или блендер, купить водяной пылесос, электрочайники из нержавейки, грудка в пароварке, отважный тостер скачать, портативный дозиметр, пельмени в мультиварке на пару, daewoo микроволновая печь инструкция, кофемашины оптом, утюг tefal с парогенератором, как выбрать кофеварку, утюг braun 18895, микроволновые печи в москве, кофеварка форум,  какие есть хлебопечки">
		<meta name="description" content="миксер или блендер Прекрасный погружной блендер Vitek VT-1452 из нержавеющей стали станет отличным ...">
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
						<a class="photo" href="photos/5b1e4d04b939e3a2c1573152ff3f29b5.jpeg" title="миксер или блендер Блендер Vitek VT-1452"><img src="photos/5b1e4d04b939e3a2c1573152ff3f29b5.jpeg" alt="миксер или блендер Блендер Vitek VT-1452" title="миксер или блендер Блендер Vitek VT-1452 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-snake-n-take-900r.php"><img src="photos/3a6f8f5bcd6b4c656110981eb9f3285b.jpeg" alt="купить водяной пылесос Блендер Snake n Take" title="купить водяной пылесос Блендер Snake n Take"></a><h2>Блендер Snake n Take</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2080r.php"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="электрочайники из нержавейки Блендер Redmond RHB-2907" title="электрочайники из нержавейки Блендер Redmond RHB-2907"></a><h2>Блендер Redmond RHB-2907</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-600r.php"><img src="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" alt="грудка в пароварке Кофемолка  ATH-272" title="грудка в пароварке Кофемолка  ATH-272"></a><h2>Кофемолка  ATH-272</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>миксер или блендер Блендер Vitek VT-1452</h1>
						<div class="tb"><p>Цена: от <span class="price">850</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8257.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Прекрасный <b>погружной блендер V</b><b>itek VT-1452</b> из нержавеющей стали станет отличным помощником на кухне. Оригинальный дизайн ножей позволяет готовить ингредиенты для супов, соусов и коктейлей. В комплект также входит пластиковая емкость для смешивания объемом 500 мл с крышкой. Теперь вы сможете использовать в работе даже плоскую посуду, и никаких брызг не будет.</p><p>Компания Vitek – известный производитель бытовой техники и электроники, который сочетает в своей продукции новейшие технологии, европейское качество и надежность по доступной цене. </p><p><b>Технические характеристики:</b></p><ul type=disc><li>Тип: погружной <li>Мощность: 300Вт <li>Управление: механическое <li>Число скоростей: 1 <li>Материал корпуса: пластик <li>Материал погружной части: металл <li>Мерный стакан: есть, объем 0.5 л</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна:</b> Россия.</p> миксер или блендер</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/09368438bc3c0f6d8d6445abd5f08674.jpeg" alt="отважный тостер скачать Микроволновая печь Vitek VT-1693" title="отважный тостер скачать Микроволновая печь Vitek VT-1693"><div class="box" page="mikrovolnovaya-pech-vitek-vt-4150r"><span class="title">отважный тостер скачать Микроволновая печь Vitek VT-1693</span><p>от <span class="price">4150</span> руб.</p></div></li>
						<li><img src="photos/ac8f90b072b89e29e700b07839541017.jpeg" alt="портативный дозиметр Миксер Atlanta ATH-293" title="портативный дозиметр Миксер Atlanta ATH-293"><div class="box" page="mikser-atlanta-ath-480r"><span class="title">портативный дозиметр Миксер Atlanta ATH-293</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/7b810f6db4d02163ddaea09283048313.jpeg" alt="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый" title="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый"><div class="box" page="elektricheskiy-mikser-bodum-bistro-euro-belyy-2740r"><span class="title">пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/0acc9f01a71196d6ab7726b81327e74c.jpeg" alt="daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717" title="daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-390r"><span class="title">daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li class="large"><img src="photos/78965fa03e391297ff5141e1ed5d2961.jpeg" alt="кофемашины оптом Электрический чайник Atlanta АТН-721" title="кофемашины оптом Электрический чайник Atlanta АТН-721"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r"><span class="title">кофемашины оптом Электрический чайник Atlanta АТН-721</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li class="large"><img src="photos/7f879f1e565356e4de3c725635f57ee6.jpeg" alt="утюг tefal с парогенератором Зарядное устройство GP Batteries PB360GS-UE1" title="утюг tefal с парогенератором Зарядное устройство GP Batteries PB360GS-UE1"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbgsue-270r"><span class="title">утюг tefal с парогенератором Зарядное устройство GP Batteries PB360GS-UE1</span><p>от <span class="price">270</span> руб.</p></div></li>
						<li class="large"><img src="photos/022434340143cfbbf0a87e93fd1fc9c0.jpeg" alt="как выбрать кофеварку Щетка для собак Dyson Groom Retail" title="как выбрать кофеварку Щетка для собак Dyson Groom Retail"><div class="box" page="schetka-dlya-sobak-dyson-groom-retail-1690r"><span class="title">как выбрать кофеварку Щетка для собак Dyson Groom Retail</span><p>от <span class="price">1690</span> руб.</p></div></li>
						<li><img src="photos/6a73d6f5ed044b39207ab31ca41595f1.jpeg" alt="утюг braun 18895 Пылесос моющий Thomas Bravo 20" title="утюг braun 18895 Пылесос моющий Thomas Bravo 20"><div class="box" page="pylesos-moyuschiy-thomas-bravo-8050r"><span class="title">утюг braun 18895 Пылесос моющий Thomas Bravo 20</span><p>от <span class="price">8050</span> руб.</p></div></li>
						<li><img src="photos/11c7c6ddf93edcdf0c5e620d5363815f.jpeg" alt="микроволновые печи в москве Пылесос Vitek VT-1844" title="микроволновые печи в москве Пылесос Vitek VT-1844"><div class="box" page="pylesos-vitek-vt-3250r"><span class="title">микроволновые печи в москве Пылесос Vitek VT-1844</span><p>от <span class="price">3250</span> руб.</p></div></li>
						<li><img src="photos/e53e12ffaa33b8893df2fec4f59e9123.jpeg" alt="кофеварка форум Пылесос Vitek VT-1838" title="кофеварка форум Пылесос Vitek VT-1838"><div class="box" page="pylesos-vitek-vt-3400r"><span class="title">кофеварка форум Пылесос Vitek VT-1838</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li><img src="photos/d9b92094264662e2a4b171c525a4ead7.jpeg" alt="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter" title="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter"><div class="box" page="pylesos-thomas-biovac-c-aquafilter-8430r"><span class="title">держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter</span><p>от <span class="price">8430</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-vitek-vt-850r.php", 0, -4); if (file_exists("comments/blender-vitek-vt-850r.php")) require_once "comments/blender-vitek-vt-850r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-vitek-vt-850r.php" method="post" onsubmit="return checkForm(this)">
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