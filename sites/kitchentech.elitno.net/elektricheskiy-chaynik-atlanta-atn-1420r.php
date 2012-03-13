<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-atlanta-atn-1420r.php","куплю паровой утюг");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-atlanta-atn-1420r.php", $nick, $comment);
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
		<title>куплю паровой утюг Электрический чайник Atlanta АТН-785  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="куплю паровой утюг, пылесос tomas twin, сервисный центр пылесосов, кофемашина philips hd 8745, ремонт аэрогриля ves, рисование утюгом, кофеварка espresso, кофеварка tefal express, купить кофеварку для дома, какие лучше микроволновые печи, курица с грибами в мультиварке, кофеварка дольче густо отзывы, мясорубка the chemodan clan, индукционная плита вредна,  измельчитель сучьев">
		<meta name="description" content="куплю паровой утюг Электрический чайник Atlanta АТН-785 – стильный кухонный прибор из нержавеющей с...">
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
						<a class="photo" href="photos/66926416069d8d65cb760c1b8131e267.jpeg" title="куплю паровой утюг Электрический чайник Atlanta АТН-785"><img src="photos/66926416069d8d65cb760c1b8131e267.jpeg" alt="куплю паровой утюг Электрический чайник Atlanta АТН-785" title="куплю паровой утюг Электрический чайник Atlanta АТН-785 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-ddg-click-and-mix-2900r.php"><img src="photos/795ef5ec8b21fcb23efce51ba4b9959a.jpeg" alt="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix" title="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix"></a><h2>Блендер погружной Moulinex DD406G42 Click and Mix</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-550r.php"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="сервисный центр пылесосов Блендер Atlanta АТН-338" title="сервисный центр пылесосов Блендер Atlanta АТН-338"></a><h2>Блендер Atlanta АТН-338</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-ci-silver-76390r.php"><img src="photos/c1f8cc6aba8e400d609d0ece06ae850b.jpeg" alt="кофемашина philips hd 8745 Эспрессо-кофемашина Melitta Caffeo CI Silver (4.0009.98)" title="кофемашина philips hd 8745 Эспрессо-кофемашина Melitta Caffeo CI Silver (4.0009.98)"></a><h2>Эспрессо-кофемашина Melitta Caffeo CI Silver (4.0009.98)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>куплю паровой утюг Электрический чайник Atlanta АТН-785</h1>
						<div class="tb"><p>Цена: от <span class="price">1420</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20008.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta АТН-785 – стильный кухонный прибор из нержавеющей стали объемом 1 литр. Его мощность составляет 1090 Вт. Используется защищенный закрытый нагревательный элемент, который гораздо проще мыть, чем открытую спираль. Безопасен, т. к. имеет защиту от перегрева, а также блокировку включения без воды. Предусмотрено место для электрошнура в цокольной подставке. Обладает низким уровнем электропотребления. Соответствует европейским и американским нормам безопасности. Изделие сертифицировано Госстандартом РФ.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Фильтр от накипи <li>Закрытый нагревательный элемент <li>Защита от перегрева без воды <li>Корпус из нержавеющей стали <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует американским и европейским нормам безопасности <li>1,0 л, Мощность 1090W <li>230V, 50Hz <li>22 x 17.3 x 23 см </li></ul><p><strong>Производитель: США</strong></p> куплю паровой утюг</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/076c9c98f1af9b02a64dd68bf22e26cd.jpeg" alt="ремонт аэрогриля ves Пароварка Binatone FS-302 White Blue" title="ремонт аэрогриля ves Пароварка Binatone FS-302 White Blue"><div class="box"><a href="http://kitchentech.elitno.net/parovarka-binatone-fs-white-blue-1760r.php"><h3 class="title">ремонт аэрогриля ves Пароварка Binatone FS-302 White Blue</h3><p>от <span class="price">1760</span> руб.</p></a></div></li>
						<li><img src="photos/1f7b9f216facd163cc074eb10bad1faf.jpeg" alt="рисование утюгом Соковыжималка Moulinex BKA1" title="рисование утюгом Соковыжималка Moulinex BKA1"><div class="box" page="sokovyzhimalka-moulinex-bka-2400r"><span class="title">рисование утюгом Соковыжималка Moulinex BKA1</span><p>от <span class="price">2400</span> руб.</p></div></li>
						<li><img src="photos/ab2f5443010f5db248e8ed93f21ddbdb.jpeg" alt="кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue" title="кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue"><div class="box" page="chaynik-elektricheskiy-binatone-cej-t-magic-thermo-white-blue-1300r"><span class="title">кофеварка espresso Чайник электрический Binatone CEJ-3300 T Magic Thermo White Blue</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/7c9f70f739cded90e6e6da5bcbc9e960.jpeg" alt="кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный" title="кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r"><span class="title">кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный</span><p>от <span class="price">1910</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3ff9d6ec8fde71796646bd977ae1927.jpeg" alt="купить кофеварку для дома Чайник электрический Vitek VT-1147 белый" title="купить кофеварку для дома Чайник электрический Vitek VT-1147 белый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-belyy-1380r"><span class="title">купить кофеварку для дома Чайник электрический Vitek VT-1147 белый</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li class="large"><img src="photos/27a529eb06db7d79aab6d5d214852413.jpeg" alt="какие лучше микроволновые печи Minamoto R03 (AAA)" title="какие лучше микроволновые печи Minamoto R03 (AAA)"><div class="box" page="minamoto-r-aaa-4r"><span class="title">какие лучше микроволновые печи Minamoto R03 (AAA)</span><p>от <span class="price">4</span> руб.</p></div></li>
						<li class="large"><img src="photos/d5bfaa3b5f694911004b112b3792a6d5.jpeg" alt="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130" title="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130"><div class="box" page="komplekt-filtrovmeshkov-karcher-480r"><span class="title">курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/d360b8a0c7da5c2048584c84686650a7.jpeg" alt="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)" title="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-55r"><span class="title">кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)</span><p>от <span class="price">55</span> руб.</p></div></li>
						<li><img src="photos/4cf080cddf806d93288abd396c7938d4.jpeg" alt="мясорубка the chemodan clan Комплект насадок Dyson Tool Kit Retail" title="мясорубка the chemodan clan Комплект насадок Dyson Tool Kit Retail"><div class="box" page="komplekt-nasadok-dyson-tool-kit-retail-2490r"><span class="title">мясорубка the chemodan clan Комплект насадок Dyson Tool Kit Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/f508d547808db2bce707d6b2135eb926.jpeg" alt="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter" title="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-prestige-s-aquafilter-10800r"><span class="title">индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter</span><p>от <span class="price">10800</span> руб.</p></div></li>
						<li><img src="photos/9fd5ef54211079a33ba5cc9bfbb9bfcf.jpeg" alt="купить кофемашину jura Пылесос моющий Thomas Bravo 20 S Aquafilter" title="купить кофемашину jura Пылесос моющий Thomas Bravo 20 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-bravo-s-aquafilter-9270r"><span class="title">купить кофемашину jura Пылесос моющий Thomas Bravo 20 S Aquafilter</span><p>от <span class="price">9270</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-atlanta-atn-1420r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-atlanta-atn-1420r.php")) require_once "comments/elektricheskiy-chaynik-atlanta-atn-1420r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-atlanta-atn-1420r.php" method="post" onsubmit="return checkForm(this)">
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