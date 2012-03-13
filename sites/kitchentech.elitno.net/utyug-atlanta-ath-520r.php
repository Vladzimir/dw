<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("utyug-atlanta-ath-520r.php","блендер горенье");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("utyug-atlanta-ath-520r.php", $nick, $comment);
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
		<title>блендер горенье Утюг Atlanta ATH-440  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="блендер горенье, сервисный центр по ремонту пылесосов, мотор пылесоса самсунг, мешки для пылесоса vax, купить пароварку в интернете, пельмени в мультиварке на пару, джем в хлебопечке, купить вертикальный утюг, блендер philips hr1659, купить блендер braun mr 6550, тесто в хлебопечке kenwood, хлебопечка ow 5004, магазин запчастей для мясорубок, желтый пылесос,  блендер рецепты видео">
		<meta name="description" content="блендер горенье Утюг Atlanta ATH-440 бело-голубого цвета с пароувлажнителем мощностью 1200 Вт – ...">
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
						<a class="photo" href="photos/abc37c7fee5d5155faaa3d71bfdf0c60.jpeg" title="блендер горенье Утюг Atlanta ATH-440"><img src="photos/abc37c7fee5d5155faaa3d71bfdf0c60.jpeg" alt="блендер горенье Утюг Atlanta ATH-440" title="блендер горенье Утюг Atlanta ATH-440 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-vitek-vt-serebryanyy-1950r.php"><img src="photos/ca60273e08388d5c0131f65b9bd68f09.jpeg" alt="сервисный центр по ремонту пылесосов Блендер Vitek VT-1456 серебряный" title="сервисный центр по ремонту пылесосов Блендер Vitek VT-1456 серебряный"></a><h2>Блендер Vitek VT-1456 серебряный</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektroplitka-maxima-mes-550r.php"><img src="photos/99f24579a4151d885006823a70346b26.jpeg" alt="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1" title="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1"></a><h2>Электроплитка Maxima MES-0152-1</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-2770r.php"><img src="photos/4a49eabd132fa073a575c3edfbe7b80b.jpeg" alt="мешки для пылесоса vax Микроволновая печь Vitek VT-1681" title="мешки для пылесоса vax Микроволновая печь Vitek VT-1681"></a><h2>Микроволновая печь Vitek VT-1681</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>блендер горенье Утюг Atlanta ATH-440</h1>
						<div class="tb"><p>Цена: от <span class="price">520</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19750.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Утюг Atlanta ATH-440 бело-голубого цвета с пароувлажнителем мощностью 1200 Вт – стильный прибор для глажки, с подошвой из нержавеющей стали. Имеет функцию парового удара. Иногда для проглаживания сильно пересушенных или толстых тканей не хватает даже максимальной модности постоянного пара. Специально для таких случаев в этом утюге есть паровой удар. При нажатии на кнопку происходит мощная подача пара, находящегося под высоким давлением. Сильный удар горячего пара размягчает волокна и быстро разглаживает даже глубокие складки. А подача вертикального пара позволяет гладить пиджаки, пальто и другие вещи прямо на вешалке или манекене. Чтобы не испортить тонкие ткани использованием пара, предусмотрен распылитель.</p><p>Характеристики:</p><ul type=disc><li>Современный дизайн <li>Подошва из нержавеющей стали <li>Сухой или паровой режим глаженья <li>Функция вертикального пара <li>Прозрачный резервуар для воды <li>Функция распыления <li>Дополнительная подача пара <li>Максимальная мощность 1200 Вт <li>230 В, 50 Гц <li>27 x 12 x 13.8 см </li></ul><p><strong>Производитель: США</strong></p> блендер горенье</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/e00b2c7020a116b6823146ca3337e357.jpeg" alt="купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S" title="купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S"><div class="box" page="mikrovolnovka-zigmund-shtain-bmo-s-5960r"><span class="title">купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S</span><p>от <span class="price">5960</span> руб.</p></div></li>
						<li><img src="photos/7b810f6db4d02163ddaea09283048313.jpeg" alt="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый" title="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый"><div class="box" page="elektricheskiy-mikser-bodum-bistro-euro-belyy-2740r"><span class="title">пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/395739893470046928b7502ebf2a09eb.jpeg" alt="джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO" title="джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-chernaya-bodum-bistro-euro-3340r"><span class="title">джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li><img src="photos/d50e72b2ec5f0dd45f81986f6b14d95a.jpeg" alt="купить вертикальный утюг Тостер Russell Hobbs Jungle Green, арт. 18338-56" title="купить вертикальный утюг Тостер Russell Hobbs Jungle Green, арт. 18338-56"><div class="box" page="toster-russell-hobbs-jungle-green-art-1890r"><span class="title">купить вертикальный утюг Тостер Russell Hobbs Jungle Green, арт. 18338-56</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li class="large"><img src="photos/eb489286225dbbc8037e4654ee2b1544.jpeg" alt="блендер philips hr1659 Чайник электрический Redmond  RK-M114" title="блендер philips hr1659 Чайник электрический Redmond  RK-M114"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-2990r"><span class="title">блендер philips hr1659 Чайник электрический Redmond  RK-M114</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li class="large"><img src="photos/df7a2601f4d7471689f34a2d1cbcf14f.jpeg" alt="купить блендер braun mr 6550 Электрический чайник 1,5л зеленый Bodum BISTRO 11138-565EURO" title="купить блендер braun mr 6550 Электрический чайник 1,5л зеленый Bodum BISTRO 11138-565EURO"><div class="box" page="elektricheskiy-chaynik-l-zelenyy-bodum-bistro-euro-2740r"><span class="title">купить блендер braun mr 6550 Электрический чайник 1,5л зеленый Bodum BISTRO 11138-565EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li class="large"><img src="photos/4c770d02fca0640e0452b9df7c46a9e0.jpeg" alt="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)" title="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbshaah-1550r"><span class="title">тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/7988dddbd843f4e2d125562952a86736.jpeg" alt="хлебопечка ow 5004 Паровая гладильная система TOBI" title="хлебопечка ow 5004 Паровая гладильная система TOBI"><div class="box" page="parovaya-gladilnaya-sistema-tobi-2500r"><span class="title">хлебопечка ow 5004 Паровая гладильная система TOBI</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/ed6cccd8ae597a978fe91c415f9d06d3.jpeg" alt="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)" title="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-135r"><span class="title">магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)</span><p>от <span class="price">135</span> руб.</p></div></li>
						<li><img src="photos/d53c2ed7dc8f0cab982dc0b1633d551f.jpeg" alt="желтый пылесос Пылесос Atlanta АТН-3400" title="желтый пылесос Пылесос Atlanta АТН-3400"><div class="box" page="pylesos-atlanta-atn-3400r"><span class="title">желтый пылесос Пылесос Atlanta АТН-3400</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li><img src="photos/59a8dfc6750ee21e49e7e4126ec09217.jpeg" alt="измельчитель сучьев Пылесос Dyson all floors DC 25" title="измельчитель сучьев Пылесос Dyson all floors DC 25"><div class="box" page="pylesos-dyson-all-floors-dc-28990r"><span class="title">измельчитель сучьев Пылесос Dyson all floors DC 25</span><p>от <span class="price">28990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("utyug-atlanta-ath-520r.php", 0, -4); if (file_exists("comments/utyug-atlanta-ath-520r.php")) require_once "comments/utyug-atlanta-ath-520r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="utyug-atlanta-ath-520r.php" method="post" onsubmit="return checkForm(this)">
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