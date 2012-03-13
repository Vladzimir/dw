<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sokovyzhimalka-turbo-7790r.php","пылесосы gorenje");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sokovyzhimalka-turbo-7790r.php", $nick, $comment);
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
		<title>пылесосы gorenje Соковыжималка TURBO  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="пылесосы gorenje, аэрогриль воронеж, парогенератор пээ, купить пароварку в интернете, куриные грудки в мультиварке, пылесос samsung sc4520, сравнить пароварки, профессиональные утюги, пылесос thomas s1, ребра в аэрогриле, кофеварка интернет магазин, десерты в блендере, дозиметр соэкс, пылесос филипс 9174,  картофельное пюре в блендере">
		<meta name="description" content="пылесосы gorenje Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых уси...">
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
						<a class="photo" href="photos/4aba59e656a62396ee01dc9ed0a83fa8.jpeg" title="пылесосы gorenje Соковыжималка TURBO"><img src="photos/4aba59e656a62396ee01dc9ed0a83fa8.jpeg" alt="пылесосы gorenje Соковыжималка TURBO" title="пылесосы gorenje Соковыжималка TURBO -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/zauber-kofemolka-x-1250r.php"><img src="photos/13e215c432e654a40129e4a1cdc305f1.jpeg" alt="аэрогриль воронеж Zauber Кофемолка  X-480" title="аэрогриль воронеж Zauber Кофемолка  X-480"></a><h2>Zauber Кофемолка  X-480</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-tefal-storeinn-do-3370r.php"><img src="photos/01c2ca770a8a823b21cf869aea4ab4ac.jpeg" alt="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081" title="парогенератор пээ Кухонный комбайн Tefal Storeinn DO2081"></a><h2>Кухонный комбайн Tefal Storeinn DO2081</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovka-zigmund-shtain-bmo-s-5960r.php"><img src="photos/e00b2c7020a116b6823146ca3337e357.jpeg" alt="купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S" title="купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S"></a><h2>Микроволновка Zigmund & Shtain BMO 01.232 S</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>пылесосы gorenje Соковыжималка TURBO</h1>
						<div class="tb"><p>Цена: от <span class="price">7790</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26309.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Хотите наслаждаться вкусным натуральным соком, не прилагая  для этого особых усилий? Отличное решение для этого – соковыжималка. Соковыжималка  TURBO для цитрусовых изготовлена из качественной нержавеющей стали, имеет  удобную и простую конструкцию. Внешне соковыжималка TURBO представлена в  приятном серебристом цвете. </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Для       цитрусовых;</li>   <li>Материал:       нержавеющая сталь;</li>   <li>Механический       пресс;</li>   <li>Цвет:       серебристый.</li> </ul> <p><strong>Производитель: Россия</strong></p> пылесосы gorenje</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/47aa32b114cfa34725d4752f07527890.jpeg" alt="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502" title="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502"><div class="box" page="multivarka-redmond-rmcm-4990r"><span class="title">куриные грудки в мультиварке Мультиварка Redmond RMC-M4502</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li><img src="photos/7c640af98399cc1caf99796cb169cc20.jpeg" alt="пылесос samsung sc4520 Мясорубка электрическая Vitek VT-1672 серебряная" title="пылесос samsung sc4520 Мясорубка электрическая Vitek VT-1672 серебряная"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-serebryanaya-3650r"><span class="title">пылесос samsung sc4520 Мясорубка электрическая Vitek VT-1672 серебряная</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li><img src="photos/a5a944903050174bbca074a40d4e65fa.jpeg" alt="сравнить пароварки Соковыжималка Atlanta ATH-325" title="сравнить пароварки Соковыжималка Atlanta ATH-325"><div class="box" page="sokovyzhimalka-atlanta-ath-520r"><span class="title">сравнить пароварки Соковыжималка Atlanta ATH-325</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/8d898eca4e96ee4a2fd539403a61a2e7.jpeg" alt="профессиональные утюги Соковыжималка для цитрусовых" title="профессиональные утюги Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-1500r"><span class="title">профессиональные утюги Соковыжималка для цитрусовых</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/c73e008984140d52a15fd324bddeb59f.jpeg" alt="пылесос thomas s1 Чайник электрический Vitek VT-1141" title="пылесос thomas s1 Чайник электрический Vitek VT-1141"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r-2"><span class="title">пылесос thomas s1 Чайник электрический Vitek VT-1141</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/1a5872ce4a924d71272e9d8aacab1a34.jpeg" alt="ребра в аэрогриле Чайник электрический Maxima MК-103" title="ребра в аэрогриле Чайник электрический Maxima MК-103"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r"><span class="title">ребра в аэрогриле Чайник электрический Maxima MК-103</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/2e4cd4da907bfa0983f22c5ac1875ffe.jpeg" alt="кофеварка интернет магазин Электрический чайник Atlanta АТН-663" title="кофеварка интернет магазин Электрический чайник Atlanta АТН-663"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-720r"><span class="title">кофеварка интернет магазин Электрический чайник Atlanta АТН-663</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/133af075f6993e048350b753f5c2c798.jpeg" alt="десерты в блендере Электрический чайник Atlanta АТН-727" title="десерты в блендере Электрический чайник Atlanta АТН-727"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r-2"><span class="title">десерты в блендере Электрический чайник Atlanta АТН-727</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/0c61c04ea066965d61b957c776ac9e0d.jpeg" alt="дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White" title="дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White"><div class="box" page="vertikalnyy-ciklonicheskiy-pylesos-montiss-cvc-white-4850r"><span class="title">дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White</span><p>от <span class="price">4850</span> руб.</p></div></li>
						<li><img src="photos/292e6011285b984f12ba49506a158a8f.jpeg" alt="пылесос филипс 9174 Пылесос Redmond RV-309" title="пылесос филипс 9174 Пылесос Redmond RV-309"><div class="box" page="pylesos-redmond-rv-5490r"><span class="title">пылесос филипс 9174 Пылесос Redmond RV-309</span><p>от <span class="price">5490</span> руб.</p></div></li>
						<li><img src="photos/2784b5cdf9478bbd2439685d61179e80.jpeg" alt="блендер vita mix Сушилка для рук AEG Haustehnik HE 181" title="блендер vita mix Сушилка для рук AEG Haustehnik HE 181"><div class="box" page="sushilka-dlya-ruk-aeg-haustehnik-he-5900r"><span class="title">блендер vita mix Сушилка для рук AEG Haustehnik HE 181</span><p>от <span class="price">5900</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sokovyzhimalka-turbo-7790r.php", 0, -4); if (file_exists("comments/sokovyzhimalka-turbo-7790r.php")) require_once "comments/sokovyzhimalka-turbo-7790r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sokovyzhimalka-turbo-7790r.php" method="post" onsubmit="return checkForm(this)">
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