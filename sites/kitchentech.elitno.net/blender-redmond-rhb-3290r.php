<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-redmond-rhb-3290r.php","утюг с керамической подошвой");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-redmond-rhb-3290r.php", $nick, $comment);
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
		<title>утюг с керамической подошвой Блендер Redmond RHB-2904  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="утюг с керамической подошвой, приготовление пищи в пароварке, блендер braun 570, блендер braun mr 530 ca, электрические чайники скарлет, пароварка тефаль цена, пылесос для сухой чистки, ремень для хлебопечки, соковыжималка садовая, кофемашина incanto de luxe, продажа мультиварок, бетоносмеситель миксер, уха в мультиварке, купить капельную кофеварку,  ролсен аэрогриль">
		<meta name="description" content="утюг с керамической подошвой Блендер Redmond RHB-M2904 стильного дизайна – многофункциональный прибор, позвол...">
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
						<a class="photo" href="photos/77a7b9eee8f1b767f7912a55eb9e902b.jpeg" title="утюг с керамической подошвой Блендер Redmond RHB-2904"><img src="photos/77a7b9eee8f1b767f7912a55eb9e902b.jpeg" alt="утюг с керамической подошвой Блендер Redmond RHB-2904" title="утюг с керамической подошвой Блендер Redmond RHB-2904 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemashina-philips-saeco-hd-67000r.php"><img src="photos/7d364e47f91214e45b2e2f0dc4bfa3a6.jpeg" alt="приготовление пищи в пароварке Кофемашина Philips Saeco HD 8944 09" title="приготовление пищи в пароварке Кофемашина Philips Saeco HD 8944 09"></a><h2>Кофемашина Philips Saeco HD 8944 09</h2></li>
							<li><a href="http://kitchentech.elitno.net/toster-limonnyy-bodum-bistro-euro-3660r.php"><img src="photos/bdf8f9bd66e96c1684451b1f1e782b63.jpeg" alt="блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO" title="блендер braun 570 Тостер лимонный Bodum BISTRO 10709-565EURO"></a><h2>Тостер лимонный Bodum BISTRO 10709-565EURO</h2></li>
							<li><a href="http://kitchentech.elitno.net/chaynik-elektricheskiy-binatone-nk-black-1200r.php"><img src="photos/aca42b878e4277b1730672f4f845a597.jpeg" alt="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black" title="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black"></a><h2>Чайник электрический Binatone NK-7700 Black</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>утюг с керамической подошвой Блендер Redmond RHB-2904</h1>
						<div class="tb"><p>Цена: от <span class="price">3290</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_25284.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Блендер Redmond RHB-M2904 стильного дизайна – многофункциональный прибор, позволяющий сэкономить массу времени. Множество скоростей, дополнительных режимов, высококачественные лезвия, низкошумность, удобство использования – определенно сделают этот блендер Вашим любимым помощником на кухне.</p> <ul type=disc>    <li>Максимальное количество оборотов без нагрузки 29000 об/мин; </li>    <li>Емкость чаши для измельчения: 1000 мл; </li>    <li>Емкость стакана для смешивания: 1000 мл; </li>    <li>24 скорости работы + “Turbo” режим; </li>    <li>Нож “Power Blade” с четырьмя лезвиями из нержавеющей стали; </li>    <li>Металлическая насадка-блендер, </li>    <li>Насадка-венчик для взбивания; </li>    <li>Эргономичная прорезиненная ручка; </li>    <li>Настольная подставка для всего набора с возможностью крепления на стену; </li>    <li>Низкий уровень шума; </li>    <li>Прорезиненные основания для устойчивости; </li>    <li>Высококачественные ножи из нержавеющей стали. </li> </ul> <p><strong>Производитель: США</strong><br />   <strong>Гарантия: 1 год</strong></p> утюг с керамической подошвой</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c48020be535a5770584db54e47af400d.jpeg" alt="электрические чайники скарлет Чайник электрический Vitek VT-1115 желтый" title="электрические чайники скарлет Чайник электрический Vitek VT-1115 желтый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-zheltyy-1090r"><span class="title">электрические чайники скарлет Чайник электрический Vitek VT-1115 желтый</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/fd3d354d6633b81b504bbc499f3c5989.jpeg" alt="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый" title="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-zheltyy-1120r"><span class="title">пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый</span><p>от <span class="price">1120</span> руб.</p></div></li>
						<li><img src="photos/92677a851872ec83258943db2c5f8e10.jpeg" alt="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л" title="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-reminisce-ki-l-2370r-2"><span class="title">пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li><img src="photos/46f63d5550ab774c363b5ff4ba202c31.jpeg" alt="ремень для хлебопечки Чайник электрический Maxima MK- M191" title="ремень для хлебопечки Чайник электрический Maxima MK- M191"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-990r"><span class="title">ремень для хлебопечки Чайник электрический Maxima MK- M191</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/a73fe1f79d4e2459d6da89e07445f626.jpeg" alt="соковыжималка садовая Электрический чайник Atlanta АТН-738" title="соковыжималка садовая Электрический чайник Atlanta АТН-738"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-520r"><span class="title">соковыжималка садовая Электрический чайник Atlanta АТН-738</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li class="large"><img src="photos/56eef2b8f5929fc5948323a8a5a2e051.jpeg" alt="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)" title="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbs-haah-1220r"><span class="title">кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li class="large"><img src="photos/08f854ed7155a317d7f9ee53182183f6.jpeg" alt="продажа мультиварок Парогенератор Lelit PS21" title="продажа мультиварок Парогенератор Lelit PS21"><div class="box" page="parogenerator-lelit-ps-12650r-2"><span class="title">продажа мультиварок Парогенератор Lelit PS21</span><p>от <span class="price">12650</span> руб.</p></div></li>
						<li><img src="photos/569a7a448800e6c331839b4f1803d826.jpeg" alt="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502" title="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502"><div class="box" page="moyuschiy-koncentrat-thomas-protex-l-520r"><span class="title">бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/bf1db2ec9a55f45d9ef32e836546d600.jpeg" alt="уха в мультиварке Пылесос моющий Thomas Super 30 S" title="уха в мультиварке Пылесос моющий Thomas Super 30 S"><div class="box" page="pylesos-moyuschiy-thomas-super-s-9020r"><span class="title">уха в мультиварке Пылесос моющий Thomas Super 30 S</span><p>от <span class="price">9020</span> руб.</p></div></li>
						<li><img src="photos/f7d34d9031a1da8552cb5d880691212c.jpeg" alt="купить капельную кофеварку Пылесос Redmond RV-312" title="купить капельную кофеварку Пылесос Redmond RV-312"><div class="box" page="pylesos-redmond-rv-8990r"><span class="title">купить капельную кофеварку Пылесос Redmond RV-312</span><p>от <span class="price">8990</span> руб.</p></div></li>
						<li><img src="photos/93023d88a25f41b8fefb8504a248a750.jpeg" alt="соковыжималка tefal отзывы Пылесос Vitek VT-1814" title="соковыжималка tefal отзывы Пылесос Vitek VT-1814"><div class="box" page="pylesos-vitek-vt-2200r"><span class="title">соковыжималка tefal отзывы Пылесос Vitek VT-1814</span><p>от <span class="price">2200</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-redmond-rhb-3290r.php", 0, -4); if (file_exists("comments/blender-redmond-rhb-3290r.php")) require_once "comments/blender-redmond-rhb-3290r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-redmond-rhb-3290r.php" method="post" onsubmit="return checkForm(this)">
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