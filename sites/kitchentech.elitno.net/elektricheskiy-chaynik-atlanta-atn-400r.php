<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-atlanta-atn-400r.php","древесные измельчители");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-atlanta-atn-400r.php", $nick, $comment);
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
		<title>древесные измельчители Электрический чайник Atlanta АТН-721  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="древесные измельчители, блендер bosch msm 6150, чоппер измельчитель, вафельница со сменными, кофемашина philips hd 8745, картофель во фритюрнице, эльдорадо кофемашины, фритюрница philips отзывы, пельмени в мультиварке на пару, где купить пароварку, что приготовить в мультиварке, ремонт пылесосов бош, электронная мясорубка, пылесос витек с аквафильтром,  трубка для пылесоса">
		<meta name="description" content="древесные измельчители Электрический чайник Atlanta АТН-721 – компактный и доступный кухонный прибор из...">
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
						<a class="photo" href="photos/78965fa03e391297ff5141e1ed5d2961.jpeg" title="древесные измельчители Электрический чайник Atlanta АТН-721"><img src="photos/78965fa03e391297ff5141e1ed5d2961.jpeg" alt="древесные измельчители Электрический чайник Atlanta АТН-721" title="древесные измельчители Электрический чайник Atlanta АТН-721 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/ruchnoy-blender-russell-hobbs-allure-art-2790r.php"><img src="photos/422d665429610f080e15aaf4bb75409d.jpeg" alt="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56" title="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56"></a><h2>Ручной блендер Russell Hobbs Allure, арт. 18273-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-belyy-bodum-bistro-keuro-3780r.php"><img src="photos/679fdf23622402a201c5b519c3350ce4.jpeg" alt="чоппер измельчитель Электрический блендер с аксессуарами белый Bodum Bistro K11179-913EURO" title="чоппер измельчитель Электрический блендер с аксессуарами белый Bodum Bistro K11179-913EURO"></a><h2>Электрический блендер с аксессуарами белый Bodum Bistro K11179-913EURO</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-bistro-bordeaux-47860r.php"><img src="photos/6b889eff1ae3a6014c4090d445e03c04.jpeg" alt="вафельница со сменными Эспрессо-кофемашина Melitta Bistro Bordeaux (4.000933)" title="вафельница со сменными Эспрессо-кофемашина Melitta Bistro Bordeaux (4.000933)"></a><h2>Эспрессо-кофемашина Melitta Bistro Bordeaux (4.000933)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>древесные измельчители Электрический чайник Atlanta АТН-721</h1>
						<div class="tb"><p>Цена: от <span class="price">400</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19987.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta АТН-721 – компактный и доступный кухонный прибор из белого пластика с голубой прозрачной вставкой. Его мощность составляет 760 Вт, а объемом 0,6 литра. Имеет фильтр от накипи и функцию быстрого закипания. В качестве нагревательного элемента установлена открытая спираль из нержавеющей стали. Безопасен, т. к. имеет защиту от перегрева, а также блокировку включения без воды. Предусмотрено место для электрошнура в цокольной подставке. Обладает низким уровнем электропотребления. Соответствует европейским и американским нормам безопасности. Изделие сертифицировано Госстандартом РФ.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Компактный <li>Фильтр от накипи <li>Объем 0,6 литра <li>Автоматическое отключение <li>Защита от перегрева без воды <li>Световой индикатор работы <li>Быстрое закипание <li>Электрошнур в цокольной подставке <li>230 В, 50 Гц <li>Мощность 760 Вт <li>Соответствует европейским и американским нормам безопасности <li>Изделие сертифицировано Госстандартом РФ <li>17.5 x 11.5 x 19.5 см </li></ul><p><strong>Производитель: США</strong></p> древесные измельчители</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c1f8cc6aba8e400d609d0ece06ae850b.jpeg" alt="кофемашина philips hd 8745 Эспрессо-кофемашина Melitta Caffeo CI Silver (4.0009.98)" title="кофемашина philips hd 8745 Эспрессо-кофемашина Melitta Caffeo CI Silver (4.0009.98)"><div class="box" page="espressokofemashina-melitta-caffeo-ci-silver-76390r"><span class="title">кофемашина philips hd 8745 Эспрессо-кофемашина Melitta Caffeo CI Silver (4.0009.98)</span><p>от <span class="price">76390</span> руб.</p></div></li>
						<li><img src="photos/d1b139f63086ad817c04622c294f1224.jpeg" alt="картофель во фритюрнице Кофеварка  ATH-278" title="картофель во фритюрнице Кофеварка  ATH-278"><div class="box" page="kofevarka-ath-560r"><span class="title">картофель во фритюрнице Кофеварка  ATH-278</span><p>от <span class="price">560</span> руб.</p></div></li>
						<li><img src="photos/5e475c33aea662be8e01a1f2443fb6c0.jpeg" alt="эльдорадо кофемашины Микроволновая печь Vitek VT-1684" title="эльдорадо кофемашины Микроволновая печь Vitek VT-1684"><div class="box" page="mikrovolnovaya-pech-vitek-vt-3870r"><span class="title">эльдорадо кофемашины Микроволновая печь Vitek VT-1684</span><p>от <span class="price">3870</span> руб.</p></div></li>
						<li><img src="photos/cd757289d24d4d7e98d5fef52b1c314b.jpeg" alt="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)" title="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)"><div class="box" page="mikrovolnovaya-pech-vitek-sr-3990r"><span class="title">фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li class="large"><img src="photos/7b810f6db4d02163ddaea09283048313.jpeg" alt="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый" title="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый"><div class="box" page="elektricheskiy-mikser-bodum-bistro-euro-belyy-2740r"><span class="title">пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li class="large"><img src="photos/1a39977506779af8e80d3d2045a86d6b.jpeg" alt="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001" title="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001"><div class="box" page="myasorubka-elektricheskaya-tefal-le-hachoir-me-5100r"><span class="title">где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001</span><p>от <span class="price">5100</span> руб.</p></div></li>
						<li class="large"><img src="photos/bd86985191b900e717a6f18b17266152.jpeg" alt="что приготовить в мультиварке Пароварка Binatone FS-404 White Green" title="что приготовить в мультиварке Пароварка Binatone FS-404 White Green"><div class="box" page="parovarka-binatone-fs-white-green-1895r"><span class="title">что приготовить в мультиварке Пароварка Binatone FS-404 White Green</span><p>от <span class="price">1895</span> руб.</p></div></li>
						<li><img src="photos/5150ac82725ad8b6206019fefda496f4.jpeg" alt="ремонт пылесосов бош A&D NP-20KS Порционные весы" title="ремонт пылесосов бош A&D NP-20KS Порционные весы"><div class="box" page="ad-npks-porcionnye-vesy-7150r"><span class="title">ремонт пылесосов бош A&D NP-20KS Порционные весы</span><p>от <span class="price">7150</span> руб.</p></div></li>
						<li><img src="photos/f056d129bd10f6cbcdccf3b119b91dc8.jpeg" alt="электронная мясорубка Чайник электрический  Vitesse VS-143 стеклянный 1,7л" title="электронная мясорубка Чайник электрический  Vitesse VS-143 стеклянный 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-steklyannyy-l-2280r"><span class="title">электронная мясорубка Чайник электрический  Vitesse VS-143 стеклянный 1,7л</span><p>от <span class="price">2280</span> руб.</p></div></li>
						<li><img src="photos/5693cfb54e3dd38a9bb80b0d7d894cdb.jpeg" alt="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)" title="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)"><div class="box" page="otkryvalka-hand-free-opener-can-opener-470r"><span class="title">пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li><img src="photos/49901359ef2b43e118be22a24f1caa05.jpeg" alt="сколько стоит фритюрница Minamoto R6 (AA)" title="сколько стоит фритюрница Minamoto R6 (AA)"><div class="box" page="minamoto-r-aa-3r"><span class="title">сколько стоит фритюрница Minamoto R6 (AA)</span><p>от <span class="price">3</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-atlanta-atn-400r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-atlanta-atn-400r.php")) require_once "comments/elektricheskiy-chaynik-atlanta-atn-400r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-atlanta-atn-400r.php" method="post" onsubmit="return checkForm(this)">
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