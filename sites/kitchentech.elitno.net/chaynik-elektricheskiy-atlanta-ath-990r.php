<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-atlanta-ath-990r.php","мультиварка pmc 0512ad");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-atlanta-ath-990r.php", $nick, $comment);
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
		<title>мультиварка pmc 0512ad Чайник электрический Atlanta ATH-757  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мультиварка pmc 0512ad, аэрогриль воронеж, отважный тостер скачать, белоруссия соковыжималка, хлебопечка в техносиле, купить кофемашину bosch, блендер philips hr 1617, какой пылесос самый лучший, пылесос для сбора стружки, пылесос karcher цена, где купить ручную мясорубку, купить кофеварку для дома, микроволновая печь курица, блендер philips hr 2860,  микроволновая печь электросхема">
		<meta name="description" content="мультиварка pmc 0512ad Керамический электрический чайник Atlanta ATH-757 белого цвета с красно-желтым р...">
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
						<a class="photo" href="photos/79f71cb685066d8f2b6475b4d2f70156.jpeg" title="мультиварка pmc 0512ad Чайник электрический Atlanta ATH-757"><img src="photos/79f71cb685066d8f2b6475b4d2f70156.jpeg" alt="мультиварка pmc 0512ad Чайник электрический Atlanta ATH-757" title="мультиварка pmc 0512ad Чайник электрический Atlanta ATH-757 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/zauber-kofemolka-x-1250r.php"><img src="photos/13e215c432e654a40129e4a1cdc305f1.jpeg" alt="аэрогриль воронеж Zauber Кофемолка  X-480" title="аэрогриль воронеж Zauber Кофемолка  X-480"></a><h2>Zauber Кофемолка  X-480</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-4150r.php"><img src="photos/09368438bc3c0f6d8d6445abd5f08674.jpeg" alt="отважный тостер скачать Микроволновая печь Vitek VT-1693" title="отважный тостер скачать Микроволновая печь Vitek VT-1693"></a><h2>Микроволновая печь Vitek VT-1693</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-atlanta-ath-2500r.php"><img src="photos/32c26854e293b25040685f60b879a50b.jpeg" alt="белоруссия соковыжималка Мясорубка  Atlanta ATH-370" title="белоруссия соковыжималка Мясорубка  Atlanta ATH-370"></a><h2>Мясорубка  Atlanta ATH-370</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мультиварка pmc 0512ad Чайник электрический Atlanta ATH-757</h1>
						<div class="tb"><p>Цена: от <span class="price">990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18121.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Керамический электрический чайник Atlanta ATH-757 белого цвета с красно-желтым рисунком объемом 1,2 литра, мощностью 1200 Вт с закрытой спиралью из нержавеющей стали в качестве нагревательного элемента и фильтром от накипи. Абсолютно безопасен: выключается при закипании и не включается при отсутствии воды. </p><p><b>Характеристики:</b></p><ul type=disc><li>Объем: 1,2 л <li>Мощность: 1200 Вт <li>Нагревательный элемент: закрытая спираль <li>Блокировка включения без воды <li>Автоматическое выключение </li></ul><p><b>Производитель: Китай</b></p> мультиварка pmc 0512ad</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/bbb4b27b3d39658b85227dbb77539d16.jpeg" alt="хлебопечка в техносиле Весы электронные для багажа Beurer LS 10" title="хлебопечка в техносиле Весы электронные для багажа Beurer LS 10"><div class="box" page="vesy-elektronnye-dlya-bagazha-beurer-ls-1100r"><span class="title">хлебопечка в техносиле Весы электронные для багажа Beurer LS 10</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/60dff82992355ef436c4e763a78c1f99.jpeg" alt="купить кофемашину bosch Соковыжималка для цитрусовых" title="купить кофемашину bosch Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-760r"><span class="title">купить кофемашину bosch Соковыжималка для цитрусовых</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/27ce5b772a93a2336124e9a6817baf03.jpeg" alt="какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000" title="какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000"><div class="box" page="frityurnica-tefal-actifry-fz-7700r"><span class="title">какой пылесос самый лучший Фритюрница Tefal Actifry FZ7000</span><p>от <span class="price">7700</span> руб.</p></div></li>
						<li class="large"><img src="photos/25bac4b45e0e97c9b045c0e23eb08977.jpeg" alt="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»" title="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»"><div class="box" page="hlebopechka-binatone-bm-black-s-funkciey-«domashniy-pekar»-4500r"><span class="title">пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/6572a3244fa07fc4dc4c915b3dd0a9ff.jpeg" alt="пылесос karcher цена Хлебопечка Moulinex OW200033" title="пылесос karcher цена Хлебопечка Moulinex OW200033"><div class="box" page="hlebopechka-moulinex-ow-3800r"><span class="title">пылесос karcher цена Хлебопечка Moulinex OW200033</span><p>от <span class="price">3800</span> руб.</p></div></li>
						<li class="large"><img src="photos/16c51a83d3b90dc92106b51b933b769e.jpeg" alt="где купить ручную мясорубку Чайник электрический Binatone MEJ-1780 Mat Metal" title="где купить ручную мясорубку Чайник электрический Binatone MEJ-1780 Mat Metal"><div class="box" page="chaynik-elektricheskiy-binatone-mej-mat-metal-1500r"><span class="title">где купить ручную мясорубку Чайник электрический Binatone MEJ-1780 Mat Metal</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/b3ff9d6ec8fde71796646bd977ae1927.jpeg" alt="купить кофеварку для дома Чайник электрический Vitek VT-1147 белый" title="купить кофеварку для дома Чайник электрический Vitek VT-1147 белый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-belyy-1380r"><span class="title">купить кофеварку для дома Чайник электрический Vitek VT-1147 белый</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li><img src="photos/512406297c427f82b1d1c5105c28994a.jpeg" alt="микроволновая печь курица Чайник электрический Moulinex BY5001 1,7 л" title="микроволновая печь курица Чайник электрический Moulinex BY5001 1,7 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-2060r"><span class="title">микроволновая печь курица Чайник электрический Moulinex BY5001 1,7 л</span><p>от <span class="price">2060</span> руб.</p></div></li>
						<li><img src="photos/16e3783a13e306fc3fd90925cbbcc384.jpeg" alt="блендер philips hr 2860 Электрический чайник 1.5л красный Bodum Bistro 11138-294EURO" title="блендер philips hr 2860 Электрический чайник 1.5л красный Bodum Bistro 11138-294EURO"><div class="box" page="elektricheskiy-chaynik-l-krasnyy-bodum-bistro-euro-2740r"><span class="title">блендер philips hr 2860 Электрический чайник 1.5л красный Bodum Bistro 11138-294EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/d221c08cbc7532258ec107ff315e3516.jpeg" alt="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)" title="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)"><div class="box" page="personalnyy-dozimetr-dkgd-«grach»-attestovan-v-mchs-rossii-20500r"><span class="title">измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)</span><p>от <span class="price">20500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-atlanta-ath-990r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-atlanta-ath-990r.php")) require_once "comments/chaynik-elektricheskiy-atlanta-ath-990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-atlanta-ath-990r.php" method="post" onsubmit="return checkForm(this)">
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