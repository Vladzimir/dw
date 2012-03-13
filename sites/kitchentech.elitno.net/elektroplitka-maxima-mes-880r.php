<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektroplitka-maxima-mes-880r.php","водный пылесос");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektroplitka-maxima-mes-880r.php", $nick, $comment);
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
		<title>водный пылесос Электроплитка Maxima MES-0252-2  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="водный пылесос, приготовление теста в хлебопечке, стоимость соковыжималки, купить пароварку в интернете, белоруссия соковыжималка, пылесосы с аквафильтром soteco, ребра в аэрогриле, микроволновая печь saturn, очистка кофеварки, блендер philips hr 2860, чем отличаются пылесосы, солянка в мультиварке, желтый пылесос, мясорубка kenwood mg510,  чайник или термопот">
		<meta name="description" content="водный пылесос Электроплитка Maxima, мощностью 1000 Вт, отличное решение для дома или дачи.  Ко...">
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
						<a class="photo" href="photos/2e2056e7ef45f5df85840ea8253e7c4c.jpeg" title="водный пылесос Электроплитка Maxima MES-0252-2"><img src="photos/2e2056e7ef45f5df85840ea8253e7c4c.jpeg" alt="водный пылесос Электроплитка Maxima MES-0252-2" title="водный пылесос Электроплитка Maxima MES-0252-2 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-ci-chernaya-65999r.php"><img src="photos/46d0cfd29014c8ec4bfb9c09c292bb23.jpeg" alt="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная" title="приготовление теста в хлебопечке Автоматическая кофемашина Melitta CAFFEO CI, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO CI, черная</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-550r.php"><img src="photos/ccf51377f0419f271513b485782fac2b.jpeg" alt="стоимость соковыжималки Кофемолка Maxima MCG-1602" title="стоимость соковыжималки Кофемолка Maxima MCG-1602"></a><h2>Кофемолка Maxima MCG-1602</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovka-zigmund-shtain-bmo-s-5960r.php"><img src="photos/e00b2c7020a116b6823146ca3337e357.jpeg" alt="купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S" title="купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S"></a><h2>Микроволновка Zigmund & Shtain BMO 01.232 S</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>водный пылесос Электроплитка Maxima MES-0252-2</h1>
						<div class="tb"><p>Цена: от <span class="price">880</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20649.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электроплитка Maxima, мощностью 1000 Вт, отличное решение для дома или дачи.  Корпус выполнен из прочного металла, а спиральный нагревательный элемент  выполнен из высококачественной стали. Для простоты эксплуатации электроплитка  покрыта прочным легкоочищающимся термостойким эмалевым покрытием. В целях  безопасности предусмотрена защита от перегрева.</p><p><br><strong>Характеристики:</strong></p><ul><li>Тип плиты: электрическая;</li><li>Количество конфорок: 2;</li><li>Цвет: черный;</li><li>Мощность 1000 Вт;</li><li>Диаметр конфорки: 145 мм;</li><li>Металлический корпус;</li><li>Плавная регулировка температуры;</li><li>Светодиодная индикация работы;</li><li>Спиральный нагревательный элемент из  высококачественной стали;</li><li>Прочное легкоочищаемое термостойкое эмалевое  покрытие;</li><li>Защита от перегрева.</li></ul><p><strong>Производитель: </strong><strong>Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong><br><strong>Гарантия: 12 месяцев</strong></p> водный пылесос</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/32c26854e293b25040685f60b879a50b.jpeg" alt="белоруссия соковыжималка Мясорубка  Atlanta ATH-370" title="белоруссия соковыжималка Мясорубка  Atlanta ATH-370"><div class="box" page="myasorubka-atlanta-ath-2500r"><span class="title">белоруссия соковыжималка Мясорубка  Atlanta ATH-370</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/78e004a504b51dca5b370513a73854ac.jpeg" alt="пылесосы с аквафильтром soteco Мясорубка  Atlanta ATH-373" title="пылесосы с аквафильтром soteco Мясорубка  Atlanta ATH-373"><div class="box" page="myasorubka-atlanta-ath-2150r"><span class="title">пылесосы с аквафильтром soteco Мясорубка  Atlanta ATH-373</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li><img src="photos/1a5872ce4a924d71272e9d8aacab1a34.jpeg" alt="ребра в аэрогриле Чайник электрический Maxima MК-103" title="ребра в аэрогриле Чайник электрический Maxima MК-103"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r"><span class="title">ребра в аэрогриле Чайник электрический Maxima MК-103</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/2e45225f75584b99ef16cc23171266ef.jpeg" alt="микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л" title="микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1740r"><span class="title">микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л</span><p>от <span class="price">1740</span> руб.</p></div></li>
						<li class="large"><img src="photos/22d30b7337c9635a9decf8a39fad0a54.jpeg" alt="очистка кофеварки Электрический чайник Atlanta АТН-793" title="очистка кофеварки Электрический чайник Atlanta АТН-793"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1420r-2"><span class="title">очистка кофеварки Электрический чайник Atlanta АТН-793</span><p>от <span class="price">1420</span> руб.</p></div></li>
						<li class="large"><img src="photos/16e3783a13e306fc3fd90925cbbcc384.jpeg" alt="блендер philips hr 2860 Электрический чайник 1.5л красный Bodum Bistro 11138-294EURO" title="блендер philips hr 2860 Электрический чайник 1.5л красный Bodum Bistro 11138-294EURO"><div class="box" page="elektricheskiy-chaynik-l-krasnyy-bodum-bistro-euro-2740r"><span class="title">блендер philips hr 2860 Электрический чайник 1.5л красный Bodum Bistro 11138-294EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li class="large"><img src="photos/da3b8026757740acd31c2844cf598d4a.jpeg" alt="чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4" title="чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-80r-2"><span class="title">чем отличаются пылесосы Батарейка GP Batteries Super alkaline LR03 24A-BC4</span><p>от <span class="price">80</span> руб.</p></div></li>
						<li><img src="photos/39b908a415c11ffadfa5f63c6981b9e7.jpeg" alt="солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail" title="солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail"><div class="box" page="universalnaya-miniturboschetka-v-upakovke-dyson-mini-turbine-head-ir-cl-retail-2290r"><span class="title">солянка в мультиварке Универсальная минитурбощетка в упаковке Dyson Mini Turbine Head Ir Cl Retail</span><p>от <span class="price">2290</span> руб.</p></div></li>
						<li><img src="photos/d53c2ed7dc8f0cab982dc0b1633d551f.jpeg" alt="желтый пылесос Пылесос Atlanta АТН-3400" title="желтый пылесос Пылесос Atlanta АТН-3400"><div class="box" page="pylesos-atlanta-atn-3400r"><span class="title">желтый пылесос Пылесос Atlanta АТН-3400</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li><img src="photos/ebd6fc853a788b316468033f41ae3864.jpeg" alt="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22" title="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22"><div class="box" page="pylesos-dyson-motorhead-dc-34990r"><span class="title">мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22</span><p>от <span class="price">34990</span> руб.</p></div></li>
						<li><img src="photos/eb12162abf9f68b1f020c54d55eeb406.jpeg" alt="запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM" title="запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM"><div class="box" page="sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r"><span class="title">запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM</span><p>от <span class="price">7800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektroplitka-maxima-mes-880r.php", 0, -4); if (file_exists("comments/elektroplitka-maxima-mes-880r.php")) require_once "comments/elektroplitka-maxima-mes-880r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektroplitka-maxima-mes-880r.php" method="post" onsubmit="return checkForm(this)">
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