<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitek-vt-1010r.php","блендер пароварка td7000");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitek-vt-1010r.php", $nick, $comment);
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
		<title>блендер пароварка td7000 Чайник электрический Vitek VT-1154  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="блендер пароварка td7000, хлебопечка ру рецепты, кофемолка moulinex, стоимость соковыжималки, фритюрница philips отзывы, пылесос с электрощеткой, смазочный утюг, вафельница орешек 4, аэрогриль поларис отзывы, мультиварка панасоник sr tmh18, куриное филе в пароварке, измерение электромагнитного излучения, блендер vita mix, рецепты для хлебопечки борк,  термопот toshiba">
		<meta name="description" content="блендер пароварка td7000 Стильный электрический чайник Vitek VT-1154 в прочном корпусе из нержавеющей ста...">
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
						<a class="photo" href="photos/cfef38cef319ef880fc0959319ecdb34.jpeg" title="блендер пароварка td7000 Чайник электрический Vitek VT-1154"><img src="photos/cfef38cef319ef880fc0959319ecdb34.jpeg" alt="блендер пароварка td7000 Чайник электрический Vitek VT-1154" title="блендер пароварка td7000 Чайник электрический Vitek VT-1154 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/oksiochistitel-ot-nakipi-swirl-hg-90r.php"><img src="photos/b1940086e49964580ca58fbacc9f1c79.jpeg" alt="хлебопечка ру рецепты Окси-очиститель от накипи Swirl, 2х15г" title="хлебопечка ру рецепты Окси-очиститель от накипи Swirl, 2х15г"></a><h2>Окси-очиститель от накипи Swirl, 2х15г</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-3290r.php"><img src="photos/77a7b9eee8f1b767f7912a55eb9e902b.jpeg" alt="кофемолка moulinex Блендер Redmond RHB-2904" title="кофемолка moulinex Блендер Redmond RHB-2904"></a><h2>Блендер Redmond RHB-2904</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-550r.php"><img src="photos/ccf51377f0419f271513b485782fac2b.jpeg" alt="стоимость соковыжималки Кофемолка Maxima MCG-1602" title="стоимость соковыжималки Кофемолка Maxima MCG-1602"></a><h2>Кофемолка Maxima MCG-1602</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>блендер пароварка td7000 Чайник электрический Vitek VT-1154</h1>
						<div class="tb"><p>Цена: от <span class="price">1010</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8408.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Стильный <b>электрический чайник Vitek VT-1154</b> в прочном корпусе из нержавеющей стали станет незаменимым помощником на вашей кухне. Среди его достоинств можно отметить: скрытый нагревательный элемент, съемный фильтр от накипи, а также систему автоотключения при закипании и защиту от перегрева. Удобная откидывающаяся крышка.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 1000Вт </li><li>Нагревательный элемент: скрытый </li><li>Объем: 0,5л </li><li>Материал корпуса: нержавеющая сталь </li><li>Индикатор уровня воды: есть </li><li>Автоотключение при закипании воды: есть </li><li>Защита от перегрева: блокировка включения при отсутствии воды </li><li>Световой индикатор работы: есть </li><li>Удобная откидывающаяся крышка </li><li>Электропитание двойное: 120В ~60Гц и 230В~50Гц</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> блендер пароварка td7000</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/cd757289d24d4d7e98d5fef52b1c314b.jpeg" alt="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)" title="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)"><div class="box" page="mikrovolnovaya-pech-vitek-sr-3990r"><span class="title">фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/872dadec17e7e9283341241f27cccee5.jpeg" alt="пылесос с электрощеткой Zauber Пароварка  S-530" title="пылесос с электрощеткой Zauber Пароварка  S-530"><div class="box" page="zauber-parovarka-s-1440r"><span class="title">пылесос с электрощеткой Zauber Пароварка  S-530</span><p>от <span class="price">1440</span> руб.</p></div></li>
						<li><img src="photos/53d96832eb34bb57a7f20e415ffd59f8.jpeg" alt="смазочный утюг Тостер Russell Hobbs Cottage, арт. 18260-57" title="смазочный утюг Тостер Russell Hobbs Cottage, арт. 18260-57"><div class="box" page="toster-russell-hobbs-cottage-art-2690r"><span class="title">смазочный утюг Тостер Russell Hobbs Cottage, арт. 18260-57</span><p>от <span class="price">2690</span> руб.</p></div></li>
						<li><img src="photos/d7869500a03daf3749520ba97157adc1.jpeg" alt="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno" title="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno"><div class="box" page="hlebopechka-moulinex-ow-uno-4990r"><span class="title">вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li class="large"><img src="photos/601488d11fe95f07b0e7e96c29a4ca5c.jpeg" alt="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White" title="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-magic-white-1100r"><span class="title">аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li class="large"><img src="photos/85911164b0086dda5108661c861dc16a.jpeg" alt="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л" title="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л"><div class="box" page="chaynik-elektricheskiy-tefal-delfina-be-l-950r"><span class="title">мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/c75538a0a02b722bb4d5b9c47eb925e7.jpeg" alt="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л" title="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesse-inox-bi-l-2570r"><span class="title">куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л</span><p>от <span class="price">2570</span> руб.</p></div></li>
						<li><img src="photos/663e4c317fe5187d7f962aa4403e4d2c.jpeg" alt="измерение электромагнитного излучения Электрический чайник Zauber Z-370" title="измерение электромагнитного излучения Электрический чайник Zauber Z-370"><div class="box" page="elektricheskiy-chaynik-zauber-z-1900r"><span class="title">измерение электромагнитного излучения Электрический чайник Zauber Z-370</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/5698b5516003bb90b12e44c09c465d2a.jpeg" alt="блендер vita mix Чайник электрический Maxima MK-G301" title="блендер vita mix Чайник электрический Maxima MK-G301"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-1390r"><span class="title">блендер vita mix Чайник электрический Maxima MK-G301</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li><img src="photos/557cbb94f1e22c2ffcbdf56f26cfcf68.jpeg" alt="рецепты для хлебопечки борк Чайник электрический  Vitesse VS-101 1,7л, кремовый" title="рецепты для хлебопечки борк Чайник электрический  Vitesse VS-101 1,7л, кремовый"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-kremovyy-1120r"><span class="title">рецепты для хлебопечки борк Чайник электрический  Vitesse VS-101 1,7л, кремовый</span><p>от <span class="price">1120</span> руб.</p></div></li>
						<li><img src="photos/162f6d9ea92d5d3a2efc137f3c8bea41.jpeg" alt="кофемашина la cimbali Электрический чайник Atlanta АТН-788" title="кофемашина la cimbali Электрический чайник Atlanta АТН-788"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1350r"><span class="title">кофемашина la cimbali Электрический чайник Atlanta АТН-788</span><p>от <span class="price">1350</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitek-vt-1010r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitek-vt-1010r.php")) require_once "comments/chaynik-elektricheskiy-vitek-vt-1010r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitek-vt-1010r.php" method="post" onsubmit="return checkForm(this)">
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