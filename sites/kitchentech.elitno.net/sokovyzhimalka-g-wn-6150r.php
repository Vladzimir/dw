<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sokovyzhimalka-g-wn-6150r.php","гладить утюгом");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sokovyzhimalka-g-wn-6150r.php", $nick, $comment);
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
		<title>гладить утюгом Соковыжималка G 299-WN  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="гладить утюгом, микроволновая печь рейтинг, кухонный комбайн tefal, как приготовить в аэрогриле овощи, микроволновая печь daewoo koc, quigg хлебопечка, утюг philips 9220, блендер philips hr 1617, чистка микроволновой печи, хлебопечка мистери, утюг для волос профессиональный, бетоносмеситель миксер, какая мощность у пылесоса, мясорубка gorenje,  бездрожжевой хлеб в хлебопечке">
		<meta name="description" content="гладить утюгом Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых уси...">
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
						<a class="photo" href="photos/236219e0f937d3aff2a413880136e4e3.jpeg" title="гладить утюгом Соковыжималка G 299-WN"><img src="photos/236219e0f937d3aff2a413880136e4e3.jpeg" alt="гладить утюгом Соковыжималка G 299-WN" title="гладить утюгом Соковыжималка G 299-WN -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-540r.php"><img src="photos/7189b59307d880db0fc6d320b1efc4f4.jpeg" alt="микроволновая печь рейтинг Кофемолка ATH-277" title="микроволновая печь рейтинг Кофемолка ATH-277"></a><h2>Кофемолка ATH-277</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-tefal-storeinn-do-eae-3570r.php"><img src="photos/33b43228a18b1110c1c8a14516611c99.jpeg" alt="кухонный комбайн tefal Кухонный комбайн Tefal Storeinn DO302 EAE" title="кухонный комбайн tefal Кухонный комбайн Tefal Storeinn DO302 EAE"></a><h2>Кухонный комбайн Tefal Storeinn DO302 EAE</h2></li>
							<li><a href="http://kitchentech.elitno.net/ad-sfkc-torgovye-vesy-do-kg-10800r.php"><img src="photos/86f0983e51433a2aeee203a14fbe12b2.jpeg" alt="как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг" title="как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг"></a><h2>A&D SF-15KC Торговые весы до 15кг</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>гладить утюгом Соковыжималка G 299-WN</h1>
						<div class="tb"><p>Цена: от <span class="price">6150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26305.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых усилий? Отличное решение для этого – соковыжималка. Соковыжималка  G для цитрусовых изготовлена из качественной нержавеющей стали, имеет удобную и  простую конструкцию. Внешне соковыжималка G представлена в приятном серебристом  цвете.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Для       цитрусовых;</li>   <li>Материал:       нержавеющая сталь;</li>   <li>Цвет:       серебристый.</li> </ul> <p><strong>Производитель: Россия</strong></p> гладить утюгом</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/82af66b2cc61bc47984a0dc33b3b0565.jpeg" alt="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310" title="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310"><div class="box" page="sokovyzhimalka-atlanta-ath-1050r"><span class="title">микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/ba4426ec9ff105596978c39d5f7ff4de.jpeg" alt="quigg хлебопечка Соковыжималка для цитрусовых 304-CP" title="quigg хлебопечка Соковыжималка для цитрусовых 304-CP"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-cp-1300r"><span class="title">quigg хлебопечка Соковыжималка для цитрусовых 304-CP</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/f99ea88369bed621a6594f78c2508e9a.jpeg" alt="утюг philips 9220 Электрическая соковыжималка лимонная Bodum BISTRO 11149-565EURO" title="утюг philips 9220 Электрическая соковыжималка лимонная Bodum BISTRO 11149-565EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-limonnaya-bodum-bistro-euro-3340r"><span class="title">утюг philips 9220 Электрическая соковыжималка лимонная Bodum BISTRO 11149-565EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/1e2ee26a34837e1fda12ed6026e21031.jpeg" alt="чистка микроволновой печи Чайник электрический Maxima MК-110" title="чистка микроволновой печи Чайник электрический Maxima MК-110"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r-2"><span class="title">чистка микроволновой печи Чайник электрический Maxima MК-110</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/aa004256b858fb51c2e43e9faff2b9a8.jpeg" alt="хлебопечка мистери Чайник электрический Maxima MК-113" title="хлебопечка мистери Чайник электрический Maxima MК-113"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r-3"><span class="title">хлебопечка мистери Чайник электрический Maxima MК-113</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/ae6aa53dcc9eb32133541922b9ec3b16.jpeg" alt="утюг для волос профессиональный Мини весы Tanita 1579" title="утюг для волос профессиональный Мини весы Tanita 1579"><div class="box" page="mini-vesy-tanita-3900r"><span class="title">утюг для волос профессиональный Мини весы Tanita 1579</span><p>от <span class="price">3900</span> руб.</p></div></li>
						<li><img src="photos/569a7a448800e6c331839b4f1803d826.jpeg" alt="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502" title="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502"><div class="box" page="moyuschiy-koncentrat-thomas-protex-l-520r"><span class="title">бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/eb7760a68b0b3e85f39c2160100a5731.jpeg" alt="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008" title="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008"><div class="box" page="moyuschiy-koncentrat-thomas-profloor-l-sht-700r"><span class="title">какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/ebeb61ea1ddcbebc4d0a7ed9a625842f.jpeg" alt="мясорубка gorenje Бумажные фильтры-мешки 450 (787-114) для Thomas" title="мясорубка gorenje Бумажные фильтры-мешки 450 (787-114) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1150r"><span class="title">мясорубка gorenje Бумажные фильтры-мешки 450 (787-114) для Thomas</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li><img src="photos/d53c2ed7dc8f0cab982dc0b1633d551f.jpeg" alt="желтый пылесос Пылесос Atlanta АТН-3400" title="желтый пылесос Пылесос Atlanta АТН-3400"><div class="box" page="pylesos-atlanta-atn-3400r"><span class="title">желтый пылесос Пылесос Atlanta АТН-3400</span><p>от <span class="price">3400</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sokovyzhimalka-g-wn-6150r.php", 0, -4); if (file_exists("comments/sokovyzhimalka-g-wn-6150r.php")) require_once "comments/sokovyzhimalka-g-wn-6150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sokovyzhimalka-g-wn-6150r.php" method="post" onsubmit="return checkForm(this)">
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