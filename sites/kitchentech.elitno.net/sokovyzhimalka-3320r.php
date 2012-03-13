<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sokovyzhimalka-3320r.php","мясорубка гамма");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sokovyzhimalka-3320r.php", $nick, $comment);
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
		<title>мясорубка гамма Соковыжималка  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мясорубка гамма, борщ в мультиварке панасоник, какой моющий пылесос выбрать, где купить ручную мясорубку, чистка микроволновой печи, форум микроволновая печь, таблетки для очистки кофемашины, пылесос витек с аквафильтром, как варить гречку в пароварке, купить лопатку для хлебопечки, принцип работы кофемашины, мясорубку panasonic купить, бытовая техника пылесосы, микроволновая печь vitek,  трубка для пылесоса">
		<meta name="description" content="мясорубка гамма Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых уси...">
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
						<a class="photo" href="photos/948f1a9b44ef51dbbf106577d1753c25.jpeg" title="мясорубка гамма Соковыжималка"><img src="photos/948f1a9b44ef51dbbf106577d1753c25.jpeg" alt="мясорубка гамма Соковыжималка" title="мясорубка гамма Соковыжималка -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/mikser-moulinex-hm-easy-max-2050r.php"><img src="photos/5254af3bd6ab9ae98e8b312cfa811acd.jpeg" alt="борщ в мультиварке панасоник Миксер Moulinex HM5500 Easy Max" title="борщ в мультиварке панасоник Миксер Moulinex HM5500 Easy Max"></a><h2>Миксер Moulinex HM5500 Easy Max</h2></li>
							<li><a href="http://kitchentech.elitno.net/sokovyzhimalka-atlanta-ath-1010r.php"><img src="photos/d2b0cc36c62095fdc525b7665e50506c.jpeg" alt="какой моющий пылесос выбрать Соковыжималка Atlanta ATH-321" title="какой моющий пылесос выбрать Соковыжималка Atlanta ATH-321"></a><h2>Соковыжималка Atlanta ATH-321</h2></li>
							<li><a href="http://kitchentech.elitno.net/chaynik-elektricheskiy-binatone-mej-mat-metal-1500r.php"><img src="photos/16c51a83d3b90dc92106b51b933b769e.jpeg" alt="где купить ручную мясорубку Чайник электрический Binatone MEJ-1780 Mat Metal" title="где купить ручную мясорубку Чайник электрический Binatone MEJ-1780 Mat Metal"></a><h2>Чайник электрический Binatone MEJ-1780 Mat Metal</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мясорубка гамма Соковыжималка</h1>
						<div class="tb"><p>Цена: от <span class="price">3320</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26304.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых усилий? Отличное решение для этого – соковыжималка. Соковыжималка  JJ для цитрусовых изготовлена из качественной нержавеющей стали, имеет удобную  и простую конструкцию. Внешне соковыжималка JJ представлена в приятном  серебристом цвете.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Для       цитрусовых;</li>   <li>Материал:       нержавеющая сталь;</li>   <li>Цвет:       серебристый.</li> </ul> <p><strong>Производитель: Россия</strong></p> мясорубка гамма</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/1e2ee26a34837e1fda12ed6026e21031.jpeg" alt="чистка микроволновой печи Чайник электрический Maxima MК-110" title="чистка микроволновой печи Чайник электрический Maxima MК-110"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r-2"><span class="title">чистка микроволновой печи Чайник электрический Maxima MК-110</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/b4a95c8a4ccd80ea8dd5b10c9fcfd32c.jpeg" alt="форум микроволновая печь Чайник электрический Maxima MК-112" title="форум микроволновая печь Чайник электрический Maxima MК-112"><div class="box" page="chaynik-elektricheskiy-maxima-mk-790r"><span class="title">форум микроволновая печь Чайник электрический Maxima MК-112</span><p>от <span class="price">790</span> руб.</p></div></li>
						<li><img src="photos/ed1507cb4c766d544261d1f0cc2c6466.jpeg" alt="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764" title="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764"><div class="box" page="chayniktermos-atlanta-atn-1570r"><span class="title">таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764</span><p>от <span class="price">1570</span> руб.</p></div></li>
						<li><img src="photos/5693cfb54e3dd38a9bb80b0d7d894cdb.jpeg" alt="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)" title="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)"><div class="box" page="otkryvalka-hand-free-opener-can-opener-470r"><span class="title">пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li class="large"><img src="photos/c8d95936ceb77257c40da032828b68b2.jpeg" alt="как варить гречку в пароварке Батарейка GP Batteries Super alkaline 6LF22 1604A-BC1" title="как варить гречку в пароварке Батарейка GP Batteries Super alkaline 6LF22 1604A-BC1"><div class="box" page="batareyka-gp-batteries-super-alkaline-lf-abc-100r"><span class="title">как варить гречку в пароварке Батарейка GP Batteries Super alkaline 6LF22 1604A-BC1</span><p>от <span class="price">100</span> руб.</p></div></li>
						<li class="large"><img src="photos/ab56fe42ec3af82144d9f5eb1f80eb4c.jpeg" alt="купить лопатку для хлебопечки Мини весы Tangent KP-103" title="купить лопатку для хлебопечки Мини весы Tangent KP-103"><div class="box" page="mini-vesy-tangent-kp-1200r"><span class="title">купить лопатку для хлебопечки Мини весы Tangent KP-103</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/e961b6308ccdf7d3b60d75fd50d3cfe9.jpeg" alt="принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU" title="принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU"><div class="box" page="poroshok-dlya-suhoy-chistki-kovrovyh-pokrytiy-dyson-zorb-pouch-uk-eu-890r"><span class="title">принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/07ba23dd2664a1f6554e1b4f71151996.jpeg" alt="мясорубку panasonic купить Пылесос моющий Thomas Compact 20 R" title="мясорубку panasonic купить Пылесос моющий Thomas Compact 20 R"><div class="box" page="pylesos-moyuschiy-thomas-compact-r-7790r"><span class="title">мясорубку panasonic купить Пылесос моющий Thomas Compact 20 R</span><p>от <span class="price">7790</span> руб.</p></div></li>
						<li><img src="photos/2bc01cf0e5d557324370d108b991f168.jpeg" alt="бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional" title="бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional"><div class="box" page="pylesos-thomas-inox-s-professional-11290r"><span class="title">бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional</span><p>от <span class="price">11290</span> руб.</p></div></li>
						<li><img src="photos/7850ec1f7f17c681ccafb6a0e80e0aff.jpeg" alt="микроволновая печь vitek Утюг паровой Tefal Aquaspeed Ultracord FV5250" title="микроволновая печь vitek Утюг паровой Tefal Aquaspeed Ultracord FV5250"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-2490r"><span class="title">микроволновая печь vitek Утюг паровой Tefal Aquaspeed Ultracord FV5250</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/4a1c0420fc8819aad4437c29c4e568bd.jpeg" alt="пылесосы филлипс Утюг паровой Tefal Aquaspeed Ultracord FV5276" title="пылесосы филлипс Утюг паровой Tefal Aquaspeed Ultracord FV5276"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-3050r"><span class="title">пылесосы филлипс Утюг паровой Tefal Aquaspeed Ultracord FV5276</span><p>от <span class="price">3050</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sokovyzhimalka-3320r.php", 0, -4); if (file_exists("comments/sokovyzhimalka-3320r.php")) require_once "comments/sokovyzhimalka-3320r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sokovyzhimalka-3320r.php" method="post" onsubmit="return checkForm(this)">
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