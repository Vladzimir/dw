<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mini-vesy-tangent-kp-1300r.php","комбайн bosch с мясорубкой");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mini-vesy-tangent-kp-1300r.php", $nick, $comment);
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
		<title>комбайн bosch с мясорубкой Мини весы Tangent KP-104-200  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="комбайн bosch с мясорубкой, аэрогриль сервисный центр, аппараты для педикюра с пылесосом, мотор пылесоса самсунг, мультиварка ярославль, купить кофемашину bosch, аэрогриль поларис отзывы, кофеварка espresso, кофеварка эспрессо для дома, мультиварка киев купить, мастурбирует пылесосом, пароварка tefal 7001, магазин запчастей для мясорубок, кофеварки домашние,  профессиональные кофемолки">
		<meta name="description" content="комбайн bosch с мясорубкой С помощью мини весов Tangent KP-104-200 вы с легкостью сможете оценить массу люб...">
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
						<a class="photo" href="photos/a6da0d6d0378629b8c50bad1795840bf.jpeg" title="комбайн bosch с мясорубкой Мини весы Tangent KP-104-200"><img src="photos/a6da0d6d0378629b8c50bad1795840bf.jpeg" alt="комбайн bosch с мясорубкой Мини весы Tangent KP-104-200" title="комбайн bosch с мясорубкой Мини весы Tangent KP-104-200 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/zauber-kuhonnyy-kombayn-z-4250r.php"><img src="photos/dbd2c7c20aaeedc830453cfd862f3b68.jpeg" alt="аэрогриль сервисный центр Zauber Кухонный комбайн  Z-890" title="аэрогриль сервисный центр Zauber Кухонный комбайн  Z-890"></a><h2>Zauber Кухонный комбайн  Z-890</h2></li>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-chernyy-4155r.php"><img src="photos/4e6a1db3aa397f67ece5fe8079d3244b.jpeg" alt="аппараты для педикюра с пылесосом Вспениватель Melitta Cremio черный" title="аппараты для педикюра с пылесосом Вспениватель Melitta Cremio черный"></a><h2>Вспениватель Melitta Cremio черный</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektroplitka-maxima-mes-550r.php"><img src="photos/99f24579a4151d885006823a70346b26.jpeg" alt="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1" title="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1"></a><h2>Электроплитка Maxima MES-0152-1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>комбайн bosch с мясорубкой Мини весы Tangent KP-104-200</h1>
						<div class="tb"><p>Цена: от <span class="price">1300</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_211.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>С помощью <strong>мини весов Tangent KP-104-200</strong> вы с легкостью сможете оценить массу любых лекарственных препаратов, продуктов, а также ювелирных изделий и драгоценных камней. <strong>Весы Tangent KP-104-200 </strong>проведут точные измерения, с ними вы можете быть спокойны за передозировку медикаментов. Результаты замеров удобно отображаются на ЖК-дисплее, а по окончанию работы устройство отключится автоматически. Кроме этого прибор имеет режим тарирования, то есть исключения веса посуды. </p><p><strong>Особенности: </strong></p><ul type=disc><li>Контрастный ЖК-дисплей <li>Функция автоотключения (через 10 мин) <li>Функция тарирования (вычет тары) <li>Режим калибровки <li>Единицы измерения: граммы, oz, ozt, dwt <li>Индикация перегрузки <li>Индикация разряда батареи <li>Верхняя крышка предохраняет механизм весов </li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Размер платформы: 75 х 50 мм <li>Размер экрана: 30 х 12 мм <li>Предел взвешивания: 200 г <li>Цена деления: 0,1 г <li>Питание: 1 батарейка CR2032 <li>Габаритные размеры: 130 х 60 х 15 мм <li>Вес: 100,3 г</li></ul><p><strong>В комплект входит:</strong> основное устройство, батарейка, чехол, инструкция.</p><p><strong>Производитель:</strong> Tanita (Япония) </p><p><strong>Гарантия:</strong> 1 год </p> комбайн bosch с мясорубкой</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9b1d673d9b457ad6c9a587ce93c1d42a.jpeg" alt="мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003" title="мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003"><div class="box" page="parovarka-tefal-vitacuisine-compact-vc-3530r"><span class="title">мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003</span><p>от <span class="price">3530</span> руб.</p></div></li>
						<li><img src="photos/60dff82992355ef436c4e763a78c1f99.jpeg" alt="купить кофемашину bosch Соковыжималка для цитрусовых" title="купить кофемашину bosch Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-760r"><span class="title">купить кофемашину bosch Соковыжималка для цитрусовых</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/601488d11fe95f07b0e7e96c29a4ca5c.jpeg" alt="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White" title="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-magic-white-1100r"><span class="title">аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/ab2f5443010f5db248e8ed93f21ddbdb.jpeg" alt="кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue" title="кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue"><div class="box" page="chaynik-elektricheskiy-binatone-cej-t-magic-thermo-white-blue-1300r"><span class="title">кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li class="large"><img src="photos/50b32a99f8069aa25115dc1163e0b555.jpeg" alt="кофеварка эспрессо для дома Чайник электрический Tefal VitesseS BF66234 1,7 л" title="кофеварка эспрессо для дома Чайник электрический Tefal VitesseS BF66234 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1760r"><span class="title">кофеварка эспрессо для дома Чайник электрический Tefal VitesseS BF66234 1,7 л</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li class="large"><img src="photos/1b3cfce3fc4c2602ab4206bda1961e7d.jpeg" alt="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный" title="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belolazurnyy-920r"><span class="title">мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li class="large"><img src="photos/c16b11d86e06570e114bf85b9cd3a864.jpeg" alt="мастурбирует пылесосом Отпариватель одежды ROVUS Garment Steamer" title="мастурбирует пылесосом Отпариватель одежды ROVUS Garment Steamer"><div class="box" page="otparivatel-odezhdy-rovus-garment-steamer-3500r"><span class="title">мастурбирует пылесосом Отпариватель одежды ROVUS Garment Steamer</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li><img src="photos/7c67b6491c0da9489fd3f2ddee3c01b1.jpeg" alt="пароварка tefal 7001 Паровая гладильная система Sofia Lux" title="пароварка tefal 7001 Паровая гладильная система Sofia Lux"><div class="box" page="parovaya-gladilnaya-sistema-sofia-lux-69000r"><span class="title">пароварка tefal 7001 Паровая гладильная система Sofia Lux</span><p>от <span class="price">69000</span> руб.</p></div></li>
						<li><img src="photos/ed6cccd8ae597a978fe91c415f9d06d3.jpeg" alt="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)" title="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-135r"><span class="title">магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)</span><p>от <span class="price">135</span> руб.</p></div></li>
						<li><img src="photos/f08bd4abc7ad4c0cc84da510e6f6c4d3.jpeg" alt="кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт." title="кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт."><div class="box" page="filtr-dlya-pylesosa-vitek-vt-vt-sht-215r"><span class="title">кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт.</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/54b10604c01ad075cc189094150a1393.jpeg" alt="хлебопечка кефир Щетка с мягкой щетиной в упаковке Dyson Soft Dusting Brush Assy Retail NP" title="хлебопечка кефир Щетка с мягкой щетиной в упаковке Dyson Soft Dusting Brush Assy Retail NP"><div class="box" page="schetka-s-myagkoy-schetinoy-v-upakovke-dyson-soft-dusting-brush-assy-retail-np-1390r"><span class="title">хлебопечка кефир Щетка с мягкой щетиной в упаковке Dyson Soft Dusting Brush Assy Retail NP</span><p>от <span class="price">1390</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mini-vesy-tangent-kp-1300r.php", 0, -4); if (file_exists("comments/mini-vesy-tangent-kp-1300r.php")) require_once "comments/mini-vesy-tangent-kp-1300r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mini-vesy-tangent-kp-1300r.php" method="post" onsubmit="return checkForm(this)">
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