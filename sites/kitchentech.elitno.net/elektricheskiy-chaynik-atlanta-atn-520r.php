<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-atlanta-atn-520r.php","вирпул микроволновая печь");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-atlanta-atn-520r.php", $nick, $comment);
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
		<title>вирпул микроволновая печь Электрический чайник Atlanta АТН-738  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вирпул микроволновая печь, преимущества мультиварки, сервисный центр пылесосов, чалдовые кофеварки, грудка в пароварке, как работает кофеварка, микроволновая печь daewoo koc, блендер металлический, чайник электрический тефаль, бумажные мешки для пылесоса, какие лучше микроволновые печи, кофемашина saeco xsmall, купить мультиварку в красноярске, какие дрожжи лучше для хлебопечки,  соковыжималка прессового отжима">
		<meta name="description" content="вирпул микроволновая печь Электрический чайник Atlanta АТН-738 – стильный и доступный кухонный прибор из б...">
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
						<a class="photo" href="photos/a73fe1f79d4e2459d6da89e07445f626.jpeg" title="вирпул микроволновая печь Электрический чайник Atlanta АТН-738"><img src="photos/a73fe1f79d4e2459d6da89e07445f626.jpeg" alt="вирпул микроволновая печь Электрический чайник Atlanta АТН-738" title="вирпул микроволновая печь Электрический чайник Atlanta АТН-738 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-tefal-blde-2660r.php"><img src="photos/a169e670a3a2eab3dd68bb002270cf0f.jpeg" alt="преимущества мультиварки Блендер Tefal BL522D3E" title="преимущества мультиварки Блендер Tefal BL522D3E"></a><h2>Блендер Tefal BL522D3E</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-550r.php"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="сервисный центр пылесосов Блендер Atlanta АТН-338" title="сервисный центр пылесосов Блендер Atlanta АТН-338"></a><h2>Блендер Atlanta АТН-338</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-gourmet-chernaya-43999r.php"><img src="photos/a59c30a3b2d8957f43e9fce5f7b6e0f5.jpeg" alt="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная" title="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO GOURMET, черная</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вирпул микроволновая печь Электрический чайник Atlanta АТН-738</h1>
						<div class="tb"><p>Цена: от <span class="price">520</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19993.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta АТН-738 – стильный и доступный кухонный прибор из белого пластика с прозрачной вставкой. Его мощность составляет 2000 Вт при объеме 1,7 л. Имеет фильтр от накипи и функцию быстрого закипания. В качестве нагревательного элемента установлена открытая спираль из нержавеющей стали. Безопасен, т. к. имеет защиту от перегрева, а также блокировку включения без воды. Предусмотрено место для электрошнура в цокольной подставке. Обладает низким уровнем электропотребления. Соответствует европейским и американским нормам безопасности. Изделие сертифицировано Госстандартом РФ.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Современный дизайн <li>Быстрое закипание <li>Фильтр от накипи <li>Спираль из нержавеющей стали <li>Автоматическое отключение <li>Защита от перегрева без воды <li>Электрошнур в цокольной подставке <li>Индикатор работы <li>Мощность 2000W <li>1.7 л, 230V, 50Hz. <li>20.1 x 14.4 x 23.7 см </li></ul><p><strong>Производитель: США</strong></p> вирпул микроволновая печь</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" alt="грудка в пароварке Кофемолка  ATH-272" title="грудка в пароварке Кофемолка  ATH-272"><div class="box" page="kofemolka-ath-600r"><span class="title">грудка в пароварке Кофемолка  ATH-272</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/276b4e96e52e1526338897e899045489.jpeg" alt="как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46" title="как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46"><div class="box" page="keramicheskaya-kastryulya-maruchi-dlya-modeley-rwfz-fz-rbfc-1200r"><span class="title">как работает кофеварка Керамическая кастрюля Maruchi для моделей RW-FZ46, FZ47, RB-FC46</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/82af66b2cc61bc47984a0dc33b3b0565.jpeg" alt="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310" title="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310"><div class="box" page="sokovyzhimalka-atlanta-ath-1050r"><span class="title">микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/f2d6d870289f867bca2e3ea0f8531c8e.jpeg" alt="блендер металлический Электрический чайник  Zauber Z-350" title="блендер металлический Электрический чайник  Zauber Z-350"><div class="box" page="elektricheskiy-chaynik-zauber-z-1600r"><span class="title">блендер металлический Электрический чайник  Zauber Z-350</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li class="large"><img src="photos/396dcef56ae58a2fdd710c34b32d6011.jpeg" alt="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)" title="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r-2"><span class="title">чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/977fa3b86531dce2d95f99f061a78e23.jpeg" alt="бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л" title="бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1550r"><span class="title">бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li class="large"><img src="photos/27a529eb06db7d79aab6d5d214852413.jpeg" alt="какие лучше микроволновые печи Minamoto R03 (AAA)" title="какие лучше микроволновые печи Minamoto R03 (AAA)"><div class="box" page="minamoto-r-aaa-4r"><span class="title">какие лучше микроволновые печи Minamoto R03 (AAA)</span><p>от <span class="price">4</span> руб.</p></div></li>
						<li><img src="photos/20a6a481b9a3a072fa1293146dcb1ec9.jpeg" alt="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter" title="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-super-s-aquafilter-10520r"><span class="title">кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter</span><p>от <span class="price">10520</span> руб.</p></div></li>
						<li><img src="photos/510105f381aa497ebe08b03499acd217.jpeg" alt="купить мультиварку в красноярске Пылесос Redmond RV-307" title="купить мультиварку в красноярске Пылесос Redmond RV-307"><div class="box" page="pylesos-redmond-rv-4490r"><span class="title">купить мультиварку в красноярске Пылесос Redmond RV-307</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/4cb4f2589649db6c2900122f369a69d4.jpeg" alt="какие дрожжи лучше для хлебопечки Сушилка для рук AEG Haustehnik HE 260 T" title="какие дрожжи лучше для хлебопечки Сушилка для рук AEG Haustehnik HE 260 T"><div class="box" page="sushilka-dlya-ruk-aeg-haustehnik-he-t-14900r"><span class="title">какие дрожжи лучше для хлебопечки Сушилка для рук AEG Haustehnik HE 260 T</span><p>от <span class="price">14900</span> руб.</p></div></li>
						<li><img src="photos/ab56eb3e56d0f0d6cbcdc267b86f71a7.jpeg" alt="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257" title="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-2800r"><span class="title">панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257</span><p>от <span class="price">2800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-atlanta-atn-520r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-atlanta-atn-520r.php")) require_once "comments/elektricheskiy-chaynik-atlanta-atn-520r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-atlanta-atn-520r.php" method="post" onsubmit="return checkForm(this)">
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