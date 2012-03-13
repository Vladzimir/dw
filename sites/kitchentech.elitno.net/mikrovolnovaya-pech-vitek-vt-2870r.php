<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikrovolnovaya-pech-vitek-vt-2870r.php","вафельница supra");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikrovolnovaya-pech-vitek-vt-2870r.php", $nick, $comment);
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
		<title>вафельница supra Микроволновая печь Vitek VT-1692  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вафельница supra, отважный тостер скачать, купить блендер bosch, лестничные перила, пылесос с водным фильтром, схема пылесоса самсунг, куриное филе в пароварке, чайник электрический тефаль, мультиварка daewoo dmc 200, тостер philips hd, курица с грибами в мультиварке, мясорубка помощница отзывы, купить миксер в минске, пароварка chicco,  пылесос самсунг sc отзывы">
		<meta name="description" content="вафельница supra Микроволновая печь Vitek VT-1692 – незаменимый элемент на современной кухне, вед...">
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
						<a class="photo" href="photos/d4a3d850ff4d12f0511b4f02c450fad7.jpeg" title="вафельница supra Микроволновая печь Vitek VT-1692"><img src="photos/d4a3d850ff4d12f0511b4f02c450fad7.jpeg" alt="вафельница supra Микроволновая печь Vitek VT-1692" title="вафельница supra Микроволновая печь Vitek VT-1692 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-4150r.php"><img src="photos/09368438bc3c0f6d8d6445abd5f08674.jpeg" alt="отважный тостер скачать Микроволновая печь Vitek VT-1693" title="отважный тостер скачать Микроволновая печь Vitek VT-1693"></a><h2>Микроволновая печь Vitek VT-1693</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-atlanta-ath-510r.php"><img src="photos/90a7d250cd580e7f7dad10ef41c4fe3e.jpeg" alt="купить блендер bosch Миксер Atlanta ATH-280" title="купить блендер bosch Миксер Atlanta ATH-280"></a><h2>Миксер Atlanta ATH-280</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-russell-hobbs-desire-art-1290r.php"><img src="photos/7e647600a38b01c48fb301e5b6c41520.jpeg" alt="лестничные перила Миксер Russell Hobbs Desire, арт. 18507-56" title="лестничные перила Миксер Russell Hobbs Desire, арт. 18507-56"></a><h2>Миксер Russell Hobbs Desire, арт. 18507-56</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вафельница supra Микроволновая печь Vitek VT-1692</h1>
						<div class="tb"><p>Цена: от <span class="price">2870</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8271.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Микроволновая печь <b>Vitek VT-1692</b> – незаменимый элемент на современной кухне, ведь она может разогреть и приготовить пищу за считанные минуты. Среди достоинств модели можно перечислить: антипригарное покрытие камеры, функция размораживания на весу, 5 режимов мощности. Стеклянная дверца декорирована изящным орнаментом. Тип управления механический.</p><p><b>Технические характеристики:</b></p><ul type=\disc\><li>Объем: 20л </li><li>5 режимов мощности </li><li>Таймер на 35 минут </li><li>Механическое управление </li><li>Функция размораживания по весу </li><li>Стеклянный вращающийся столик диаметром 245 мм </li><li>Антипригарное покрытие камеры </li><li>Стеклянная дверца с орнаментом </li><li>Удобное открывание дверцы </li><li>Сигнал завершения приготовления </li><li>Выходная мощность: 800Вт </li><li>Потребляемая мощность: 1270Вт </li><li>Электропитание: 220 В, ~50 Гц</li></ul><p><b>Производитель: </b>Vitek.</p><p><b>Страна: </b>Россия.</p> вафельница supra</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a8857bffd481b9dda4b86f6d3c6ed123.jpeg" alt="пылесос с водным фильтром Пароварка Vitek VT-1555" title="пылесос с водным фильтром Пароварка Vitek VT-1555"><div class="box" page="parovarka-vitek-vt-1400r"><span class="title">пылесос с водным фильтром Пароварка Vitek VT-1555</span><p>от <span class="price">1400</span> руб.</p></div></li>
						<li><img src="photos/d5827497ec49ae3fe3cb85705f428a83.jpeg" alt="схема пылесоса самсунг Соковыжималка Atlanta ATH-311" title="схема пылесоса самсунг Соковыжималка Atlanta ATH-311"><div class="box" page="sokovyzhimalka-atlanta-ath-1060r"><span class="title">схема пылесоса самсунг Соковыжималка Atlanta ATH-311</span><p>от <span class="price">1060</span> руб.</p></div></li>
						<li><img src="photos/c75538a0a02b722bb4d5b9c47eb925e7.jpeg" alt="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л" title="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesse-inox-bi-l-2570r"><span class="title">куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л</span><p>от <span class="price">2570</span> руб.</p></div></li>
						<li><img src="photos/396dcef56ae58a2fdd710c34b32d6011.jpeg" alt="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)" title="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r-2"><span class="title">чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/1ce3d92d8e0391534b2eb43fa514d9a4.jpeg" alt="мультиварка daewoo dmc 200 Чайник электрический Redmond RK-М119" title="мультиварка daewoo dmc 200 Чайник электрический Redmond RK-М119"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-2690r"><span class="title">мультиварка daewoo dmc 200 Чайник электрический Redmond RK-М119</span><p>от <span class="price">2690</span> руб.</p></div></li>
						<li class="large"><img src="photos/0e0d48622ca21267b7347abd2a6edbfa.jpeg" alt="тостер philips hd Redmond RK-M120D Чайник электрический" title="тостер philips hd Redmond RK-M120D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-4950r"><span class="title">тостер philips hd Redmond RK-M120D Чайник электрический</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/d5bfaa3b5f694911004b112b3792a6d5.jpeg" alt="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130" title="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130"><div class="box" page="komplekt-filtrovmeshkov-karcher-480r"><span class="title">курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/457d4b7f3e82f96ca3e9bfa507402a8c.jpeg" alt="мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)" title="мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r"><span class="title">мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/14869a38df9662e7970cc9dcb59c8e70.jpeg" alt="купить миксер в минске Пылесос моющий Thomas Vario 20 S" title="купить миксер в минске Пылесос моющий Thomas Vario 20 S"><div class="box" page="pylesos-moyuschiy-thomas-vario-s-6190r"><span class="title">купить миксер в минске Пылесос моющий Thomas Vario 20 S</span><p>от <span class="price">6190</span> руб.</p></div></li>
						<li><img src="photos/2ff9a2b5a9fe0fab492b8e041d2f7740.jpeg" alt="пароварка chicco Пылесос Thomas Inox 1560 Sf" title="пароварка chicco Пылесос Thomas Inox 1560 Sf"><div class="box" page="pylesos-thomas-inox-sf-17820r"><span class="title">пароварка chicco Пылесос Thomas Inox 1560 Sf</span><p>от <span class="price">17820</span> руб.</p></div></li>
						<li><img src="photos/7850ec1f7f17c681ccafb6a0e80e0aff.jpeg" alt="микроволновая печь vitek Утюг паровой Tefal Aquaspeed Ultracord FV5250" title="микроволновая печь vitek Утюг паровой Tefal Aquaspeed Ultracord FV5250"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-2490r"><span class="title">микроволновая печь vitek Утюг паровой Tefal Aquaspeed Ultracord FV5250</span><p>от <span class="price">2490</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikrovolnovaya-pech-vitek-vt-2870r.php", 0, -4); if (file_exists("comments/mikrovolnovaya-pech-vitek-vt-2870r.php")) require_once "comments/mikrovolnovaya-pech-vitek-vt-2870r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikrovolnovaya-pech-vitek-vt-2870r.php" method="post" onsubmit="return checkForm(this)">
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