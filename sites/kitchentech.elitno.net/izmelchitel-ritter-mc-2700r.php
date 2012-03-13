<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("izmelchitel-ritter-mc-2700r.php","кофемашины для чалд");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("izmelchitel-ritter-mc-2700r.php", $nick, $comment);
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
		<title>кофемашины для чалд Измельчитель Ritter MC 800  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофемашины для чалд, вреден ли аэрогриль, тыква в мультиварке, микроволновые печи elenberg, утюг какой фирмы лучше, как работает кофеварка, блендер philips hr 1617, измельчитель сена, хлебопечки панасоник инструкция, блендер braun mr 530 ca, мультиварка панасоник sr tmh18, бумажные мешки для пылесоса, как использовать пароварку, магазин запчастей для мясорубок,  микроволновая печь электросхема">
		<meta name="description" content="кофемашины для чалд Кухонный комбайн Ritter MC 800 – отличный помощник настоящей хозяйке. Он быстро ...">
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
						<a class="photo" href="photos/b329bc8334f65653dc9ef4683c170e62.jpeg" title="кофемашины для чалд Измельчитель Ritter MC 800"><img src="photos/b329bc8334f65653dc9ef4683c170e62.jpeg" alt="кофемашины для чалд Измельчитель Ritter MC 800" title="кофемашины для чалд Измельчитель Ritter MC 800 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-cc-5730r.php"><img src="photos/a05d83b290d1a3a85756bd16066563b1.jpeg" alt="вреден ли аэрогриль Блендер Braun MR-740 CC" title="вреден ли аэрогриль Блендер Braun MR-740 CC"></a><h2>Блендер Braun MR-740 CC</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-maxima-mhb-1290r.php"><img src="photos/6dd18dbc3abd740bf749993f0923000d.jpeg" alt="тыква в мультиварке Блендер Maxima MHB-0329" title="тыква в мультиварке Блендер Maxima MHB-0329"></a><h2>Блендер Maxima MHB-0329</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-450r.php"><img src="photos/a5bbc6e64af24877cdab95c62f91247a.jpeg" alt="микроволновые печи elenberg Кофемолка ATH-276" title="микроволновые печи elenberg Кофемолка ATH-276"></a><h2>Кофемолка ATH-276</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофемашины для чалд Измельчитель Ritter MC 800</h1>
						<div class="tb"><p>Цена: от <span class="price">2700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1539.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><strong>Кухонный комбайн Ritter MC 800 </strong>– отличный помощник настоящей хозяйке. Он быстро измельчит овощи, фрукты, сыр, замесит тесто и т.п. Аппарат работает от сети, быстро моется вручную или в посудомоечной машине.</p><p><b>Технические характеристики:</b></p><ul><li>Материал емкости: стекло <li>Резиновая подставка <li>Насадка для взбивания <li>Питание: напряжение 220 – 240 В, частота 50 Гц <li>Мощность: 130 Вт </li></ul><p><b>Производство:</b> Германия</p><p><b>Гарантия: </b>2 года </p> кофемашины для чалд</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ff295724863185ff22e2c85236f25515.jpeg" alt="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый" title="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый"><div class="box" page="bodum-bistro-euro-elektricheskiy-mikser-zelenyy-2740r"><span class="title">утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/276b4e96e52e1526338897e899045489.jpeg" alt="как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46" title="как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46"><div class="box" page="keramicheskaya-kastryulya-maruchi-dlya-modeley-rwfz-fz-rbfc-1200r"><span class="title">как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/b563c2d22903c88ab1496d97329bc5bf.jpeg" alt="измельчитель сена Тостер Atlanta ATH-234" title="измельчитель сена Тостер Atlanta ATH-234"><div class="box" page="toster-atlanta-ath-690r"><span class="title">измельчитель сена Тостер Atlanta ATH-234</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li class="large"><img src="photos/0a3cf9abc3fc820de574913fb2ebcdd1.jpeg" alt="хлебопечки панасоник инструкция Vitesse VS-422 Хлебопечка" title="хлебопечки панасоник инструкция Vitesse VS-422 Хлебопечка"><div class="box" page="vitesse-vs-hlebopechka-5200r"><span class="title">хлебопечки панасоник инструкция Vitesse VS-422 Хлебопечка</span><p>от <span class="price">5200</span> руб.</p></div></li>
						<li class="large"><img src="photos/aca42b878e4277b1730672f4f845a597.jpeg" alt="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black" title="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black"><div class="box" page="chaynik-elektricheskiy-binatone-nk-black-1200r"><span class="title">блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/85911164b0086dda5108661c861dc16a.jpeg" alt="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л" title="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л"><div class="box" page="chaynik-elektricheskiy-tefal-delfina-be-l-950r"><span class="title">мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li><img src="photos/977fa3b86531dce2d95f99f061a78e23.jpeg" alt="бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л" title="бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1550r"><span class="title">бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/2604c204c493f1487a5255f83dc099af.jpeg" alt="как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4" title="как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbgsue-1025r"><span class="title">как использовать пароварку Зарядное устройство GP Batteries PB350GS210-UE4</span><p>от <span class="price">1025</span> руб.</p></div></li>
						<li><img src="photos/ed6cccd8ae597a978fe91c415f9d06d3.jpeg" alt="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)" title="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-135r"><span class="title">магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)</span><p>от <span class="price">135</span> руб.</p></div></li>
						<li><img src="photos/ef2885939f9c24bf748f6b2d7462e40b.jpeg" alt="блендер бош купить Щетка для уборки твердых поверхностей Dyson Articulating Hard Floor Tool Retail" title="блендер бош купить Щетка для уборки твердых поверхностей Dyson Articulating Hard Floor Tool Retail"><div class="box" page="schetka-dlya-uborki-tverdyh-poverhnostey-dyson-articulating-hard-floor-tool-retail-1790r"><span class="title">блендер бош купить Щетка для уборки твердых поверхностей Dyson Articulating Hard Floor Tool Retail</span><p>от <span class="price">1790</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("izmelchitel-ritter-mc-2700r.php", 0, -4); if (file_exists("comments/izmelchitel-ritter-mc-2700r.php")) require_once "comments/izmelchitel-ritter-mc-2700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="izmelchitel-ritter-mc-2700r.php" method="post" onsubmit="return checkForm(this)">
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