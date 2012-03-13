<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitesse-vs-l-belyy-1080r.php","треска в мультиварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitesse-vs-l-belyy-1080r.php", $nick, $comment);
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
		<title>треска в мультиварке Чайник электрический  Vitesse VS-102 2,3л, белый  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="треска в мультиварке, курица во фритюрнице, распродажа пылесосов, промышленный пылесос цена, запчасти для утюгов, утюг philips 4420, пылесос thomas отзывы, блендер металлический, купить капельную кофеварку, блендер vita mix, таблетки для очистки кофемашины, измельчитель kenwood, магазин запчастей для мясорубок, кашеварка panasonic,  плов в мультиварке супра">
		<meta name="description" content="треска в мультиварке Электрический чайник классического дизайна Vitesse VS-102 мощностью в 2000Вт  ле...">
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
						<a class="photo" href="photos/ad9a939cae5c8a1c68f17220dbb422a8.jpeg" title="треска в мультиварке Чайник электрический  Vitesse VS-102 2,3л, белый"><img src="photos/ad9a939cae5c8a1c68f17220dbb422a8.jpeg" alt="треска в мультиварке Чайник электрический  Vitesse VS-102 2,3л, белый" title="треска в мультиварке Чайник электрический  Vitesse VS-102 2,3л, белый -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-vitek-vt-2750r.php"><img src="photos/d3bcfc3d08cc302406de89eb814d0d80.jpeg" alt="курица во фритюрнице Кухонный комбайн Vitek VT-1622" title="курица во фритюрнице Кухонный комбайн Vitek VT-1622"></a><h2>Кухонный комбайн Vitek VT-1622</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3550r.php"><img src="photos/7b88076a90f90c4718597a4ab977cb0a.jpeg" alt="распродажа пылесосов Микроволновая печь Vitek VT-1682" title="распродажа пылесосов Микроволновая печь Vitek VT-1682"></a><h2>Микроволновая печь Vitek VT-1682</h2></li>
							<li><a href="http://kitchentech.elitno.net/yogurtnica-moulinex-jc-1650r.php"><img src="photos/5b5325f46d1563794a5b9b1bbec3af49.jpeg" alt="промышленный пылесос цена Йогуртница Moulinex JC1" title="промышленный пылесос цена Йогуртница Moulinex JC1"></a><h2>Йогуртница Moulinex JC1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>треска в мультиварке Чайник электрический  Vitesse VS-102 2,3л, белый</h1>
						<div class="tb"><p>Цена: от <span class="price">1080</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19595.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник классического дизайна Vitesse VS-102 мощностью в 2000Вт  легко вскипятит 2,3 литра воды за несколько минут, специальный фильтр защитит  от накипи, а автоматическая блокировка не включит чайник без воды, также удобно хранить шнур в специальном отсеке.<br></p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Объем:  2.3 л;</li><li>Мощность: 2000 Вт;</li><li>Тип нагревательного элемента: закрытая спираль (центральный контакт);</li><li>Материал корпуса: пластик;</li><li>Блокировка включения без воды;</li><li>Фильтр;</li><li>Индикатор уровня воды;</li><li>Индикация включения;</li><li>Отсек для шнура.</li></ul><p><strong>Производитель: КНР</strong><br><strong>Гарантия: 1 год</strong><strong></strong></p> треска в мультиварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/785647aa8682372d107781ac6f9a4974.jpeg" alt="запчасти для утюгов Мультиварка Redmond RMC-M4504" title="запчасти для утюгов Мультиварка Redmond RMC-M4504"><div class="box" page="multivarka-redmond-rmcm-4490r"><span class="title">запчасти для утюгов Мультиварка Redmond RMC-M4504</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/8e06126566eae5ed349414b3b9cfd8ea.jpeg" alt="утюг philips 4420 Мультиварка Maruchi RB-FC46" title="утюг philips 4420 Мультиварка Maruchi RB-FC46"><div class="box" page="multivarka-maruchi-rbfc-2500r"><span class="title">утюг philips 4420 Мультиварка Maruchi RB-FC46</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/8e4c77fcf3cd711bd8454688ff0f7bc7.jpeg" alt="пылесос thomas отзывы Чайник электрический Vitek VT-1159" title="пылесос thomas отзывы Чайник электрический Vitek VT-1159"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1900r"><span class="title">пылесос thomas отзывы Чайник электрический Vitek VT-1159</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/f2d6d870289f867bca2e3ea0f8531c8e.jpeg" alt="блендер металлический Электрический чайник  Zauber Z-350" title="блендер металлический Электрический чайник  Zauber Z-350"><div class="box" page="elektricheskiy-chaynik-zauber-z-1600r"><span class="title">блендер металлический Электрический чайник  Zauber Z-350</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li class="large"><img src="photos/65194d520ec7c4edb8d9ad44bcaa26a1.jpeg" alt="купить капельную кофеварку Чайник электрический Maxima MК-105" title="купить капельную кофеварку Чайник электрический Maxima MК-105"><div class="box" page="chaynik-elektricheskiy-maxima-mk-550r"><span class="title">купить капельную кофеварку Чайник электрический Maxima MК-105</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li class="large"><img src="photos/5698b5516003bb90b12e44c09c465d2a.jpeg" alt="блендер vita mix Чайник электрический Maxima MK-G301" title="блендер vita mix Чайник электрический Maxima MK-G301"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-1390r"><span class="title">блендер vita mix Чайник электрический Maxima MK-G301</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li class="large"><img src="photos/ed1507cb4c766d544261d1f0cc2c6466.jpeg" alt="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764" title="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764"><div class="box" page="chayniktermos-atlanta-atn-1570r"><span class="title">таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764</span><p>от <span class="price">1570</span> руб.</p></div></li>
						<li><img src="photos/d221c08cbc7532258ec107ff315e3516.jpeg" alt="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)" title="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)"><div class="box" page="personalnyy-dozimetr-dkgd-«grach»-attestovan-v-mchs-rossii-20500r"><span class="title">измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)</span><p>от <span class="price">20500</span> руб.</p></div></li>
						<li><img src="photos/ed6cccd8ae597a978fe91c415f9d06d3.jpeg" alt="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)" title="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-135r"><span class="title">магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)</span><p>от <span class="price">135</span> руб.</p></div></li>
						<li><img src="photos/f9a55510217a53f128abac36303fad21.jpeg" alt="кашеварка panasonic Пылесос Dyson all floors DC 22" title="кашеварка panasonic Пылесос Dyson all floors DC 22"><div class="box" page="pylesos-dyson-all-floors-dc-26990r"><span class="title">кашеварка panasonic Пылесос Dyson all floors DC 22</span><p>от <span class="price">26990</span> руб.</p></div></li>
						<li><img src="photos/dcfd8cc55439cd877d074c0e060c75d4.jpeg" alt="качество пылесосов Пылесос Vitek VT-1809 красный" title="качество пылесосов Пылесос Vitek VT-1809 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-2600r"><span class="title">качество пылесосов Пылесос Vitek VT-1809 красный</span><p>от <span class="price">2600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitesse-vs-l-belyy-1080r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitesse-vs-l-belyy-1080r.php")) require_once "comments/chaynik-elektricheskiy-vitesse-vs-l-belyy-1080r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitesse-vs-l-belyy-1080r.php" method="post" onsubmit="return checkForm(this)">
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