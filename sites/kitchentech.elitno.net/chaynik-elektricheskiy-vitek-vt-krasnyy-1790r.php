<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitek-vt-krasnyy-1790r.php","какую купить пароварку");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitek-vt-krasnyy-1790r.php", $nick, $comment);
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
		<title>какую купить пароварку Чайник электрический Vitek VT-1140 красный  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="какую купить пароварку, panasonic пароварка, фильтр для кофемашины, пылесос samsung sc 4326, блендер bosch msm 6150, чем отличаются кофеварки, соковыжималка profi cook, гречневая каша в мультиварке, как приготовить мясо в пароварке, где купить утюг, сравнить пароварки, блендер philips hr 1617, пылесос автомобильный купить, пароварки в минске,  измельчитель сучьев">
		<meta name="description" content="какую купить пароварку Чайник электрический Vitek VT-1140 в стильном красном корпусе из нержавеющей ста...">
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
						<a class="photo" href="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" title="какую купить пароварку Чайник электрический Vitek VT-1140 красный"><img src="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" alt="какую купить пароварку Чайник электрический Vitek VT-1140 красный" title="какую купить пароварку Чайник электрический Vitek VT-1140 красный -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/filtry-bumazhnye-brigitta-razmer-sht-korichnevye-90r.php"><img src="photos/3f307bdf7da72b9732c65cb87ddaad55.jpeg" alt="panasonic пароварка Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые" title="panasonic пароварка Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые"></a><h2>Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые</h2></li>
							<li><a href="http://kitchentech.elitno.net/bio-ochistitel-ot-nakipi-swirl-hg-90r.php"><img src="photos/08ef4a223c3f3825df8de9b118c05908.jpeg" alt="фильтр для кофемашины Био - очиститель от накипи Swirl, 2х20г" title="фильтр для кофемашины Био - очиститель от накипи Swirl, 2х20г"></a><h2>Био - очиститель от накипи Swirl, 2х20г</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-maxima-mhb-1090r.php"><img src="photos/c18872267b9c6c7f4de2b2c0d2d5e8a8.jpeg" alt="пылесос samsung sc 4326 Блендер Maxima MHB-0229" title="пылесос samsung sc 4326 Блендер Maxima MHB-0229"></a><h2>Блендер Maxima MHB-0229</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>какую купить пароварку Чайник электрический Vitek VT-1140 красный</h1>
						<div class="tb"><p>Цена: от <span class="price">1790</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8399.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Чайник электрический Vitek VT-1140</b> в стильном красном корпусе из нержавеющей стали на дисковой подставке со скрытым нагревательным элементом внутри – превосходный вариант для вашей кухни. Модель имеет съемный фильтр от накипи, а также оснащена системой автоотключения при закипании воды и защитой от перегрева. Объем резервуара 1,7л.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 1850-2200Вт </li><li>Нагревательный элемент: скрытый </li><li>Поворачивающийся корпус: 360° </li><li>Объем: 1,7л </li><li>Материал корпуса: нержавеющая сталь </li><li>Фильтр: съемный фильтр от накипи </li><li>Индикатор уровня воды: есть </li><li>Автоотключение при закипании воды: есть </li><li>Защита от перегрева: есть </li><li>Место для хранения шнура: есть </li><li>Открытые крышки нажатием на кнопку</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> какую купить пароварку</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/422d665429610f080e15aaf4bb75409d.jpeg" alt="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56" title="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56"><div class="box" page="ruchnoy-blender-russell-hobbs-allure-art-2790r"><span class="title">блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li><img src="photos/0c7c7a9daf3721e5976f772ebe4ae9e2.jpeg" alt="чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)" title="чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)"><div class="box" page="espressokofemashina-melitta-caffeo-lattea-red-35700r"><span class="title">чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)</span><p>от <span class="price">35700</span> руб.</p></div></li>
						<li><img src="photos/b3484386aa5de93840c27e2c8187adfa.jpeg" alt="соковыжималка profi cook Мыло-поглотитель неприятных запахов Vitesse VS-1293" title="соковыжималка profi cook Мыло-поглотитель неприятных запахов Vitesse VS-1293"><div class="box" page="mylopoglotitel-nepriyatnyh-zapahov-vitesse-vs-530r"><span class="title">соковыжималка profi cook Мыло-поглотитель неприятных запахов Vitesse VS-1293</span><p>от <span class="price">530</span> руб.</p></div></li>
						<li><img src="photos/8472253b416100a0ed111bb9484a2b5a.jpeg" alt="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л" title="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л"><div class="box" page="morozhenica-montiss-kimm-l-1900r"><span class="title">гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li class="large"><img src="photos/f500afce51554d4e8ccaedd379d383c4.jpeg" alt="как приготовить мясо в пароварке Рисоварка электрическая ATLANTA АТН-590" title="как приготовить мясо в пароварке Рисоварка электрическая ATLANTA АТН-590"><div class="box" page="risovarka-elektricheskaya-atlanta-atn-1500r"><span class="title">как приготовить мясо в пароварке Рисоварка электрическая ATLANTA АТН-590</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/96e6df28f6faf8e98beab83007c46a57.jpeg" alt="где купить утюг Мясорубка электрическая Vitek VT-1673" title="где купить утюг Мясорубка электрическая Vitek VT-1673"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-3000r"><span class="title">где купить утюг Мясорубка электрическая Vitek VT-1673</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li class="large"><img src="photos/a5a944903050174bbca074a40d4e65fa.jpeg" alt="сравнить пароварки Соковыжималка Atlanta ATH-325" title="сравнить пароварки Соковыжималка Atlanta ATH-325"><div class="box" page="sokovyzhimalka-atlanta-ath-520r"><span class="title">сравнить пароварки Соковыжималка Atlanta ATH-325</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/b2f5222e6fab12eeb526363895bfe319.jpeg" alt="пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л" title="пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-950r"><span class="title">пылесос автомобильный купить Чайник электрический  Vitesse VS-138 1,7л</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li><img src="photos/70e82a3bba6b14786d891ffcea703881.jpeg" alt="пароварки в минске Электрический чайник Atlanta АТН-611" title="пароварки в минске Электрический чайник Atlanta АТН-611"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-700r"><span class="title">пароварки в минске Электрический чайник Atlanta АТН-611</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/6ad68580ca9fe51d58dccc0df51b3bb5.jpeg" alt="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter" title="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-aquatherm-aquafilter-16720r"><span class="title">ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter</span><p>от <span class="price">16720</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitek-vt-krasnyy-1790r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitek-vt-krasnyy-1790r.php")) require_once "comments/chaynik-elektricheskiy-vitek-vt-krasnyy-1790r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitek-vt-krasnyy-1790r.php" method="post" onsubmit="return checkForm(this)">
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