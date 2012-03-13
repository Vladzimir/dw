<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sokovyzhimalka-maxima-mj-blender-2190r.php","кофемашина примадонна");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sokovyzhimalka-maxima-mj-blender-2190r.php", $nick, $comment);
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
		<title>кофемашина примадонна Соковыжималка Maxima MJ-049 + блендер  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофемашина примадонна, тольятти мультиварка, продам мультиварку, контрольная закупка пылесос, пельмени в мультиварке на пару, электрическая мультиварка, блендер braun mr 530 ca, кофеварка tefal express, пароварка тефаль цена, какие лучше микроволновые печи, аэрогриль рецепты картофель, кофеварка дольче густо отзывы, баклажаны в пароварке, ремонт микроволновых печей самсунг,  парогенератор видео">
		<meta name="description" content="кофемашина примадонна Соковыжималка Maxima, мощностью 600 Вт, позволит Вам начать день со стаканчика  ...">
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
						<a class="photo" href="photos/cba9fd30236faeadb264f6621c9544f6.jpeg" title="кофемашина примадонна Соковыжималка Maxima MJ-049 + блендер"><img src="photos/cba9fd30236faeadb264f6621c9544f6.jpeg" alt="кофемашина примадонна Соковыжималка Maxima MJ-049 + блендер" title="кофемашина примадонна Соковыжималка Maxima MJ-049 + блендер -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-650r.php"><img src="photos/833ae77791168206a3b151985fda9a0b.jpeg" alt="тольятти мультиварка Кофемолка Maxima MCG-0316" title="тольятти мультиварка Кофемолка Maxima MCG-0316"></a><h2>Кофемолка Maxima MCG-0316</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-atlanta-ath-530r.php"><img src="photos/35ee696c1c92edfebad75db4602c2861.jpeg" alt="продам мультиварку Миксер Atlanta ATH-283" title="продам мультиварку Миксер Atlanta ATH-283"></a><h2>Миксер Atlanta ATH-283</h2></li>
							<li><a href="http://kitchentech.elitno.net/bodum-bistro-euro-elektricheskiy-mikser-2740r.php"><img src="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" alt="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер" title="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер"></a><h2>Bodum BISTRO 11151-01EURO Электрический миксер</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофемашина примадонна Соковыжималка Maxima MJ-049 + блендер</h1>
						<div class="tb"><p>Цена: от <span class="price">2190</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20596.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Соковыжималка Maxima, мощностью 600 Вт, позволит Вам начать день со стаканчика  свежевыжитого сока. А с помощью входящего в комплект блендера, Вы сможете  приготовить вкусный и полезный коктейль. Объем контейнера для сока составляет  250 мл. Устройство оснащено двумя скоростными режимами и режимом Pulse. В целях безопасности,  производитель предусмотрел защиту от случайного запуска.  Уровень шума, создаваемого при работе  соковыжималки, не превышает 65 dB.</p><p><br><strong>Характеристики:</strong></p><ul><li>Мощность: 600 Вт;</li><li>Обороты в минуту: 21500;</li><li>Контейнер для сока: 250 мл;</li><li>Контейнер для жмыха: 750 мл;</li><li>Чаша блендера: 1500 мл;</li><li>Тип управления: механический;</li><li>2 скоростных режима;</li><li>Режим Pulse;</li><li>Защита от случайного запуска;</li><li>Уровень шума: менее 65 dB;</li></ul><p><strong>Производитель:</strong><strong> Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong><br><strong>Гарантия: 12 месяцев</strong></p> кофемашина примадонна</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7b810f6db4d02163ddaea09283048313.jpeg" alt="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый" title="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый"><div class="box" page="elektricheskiy-mikser-bodum-bistro-euro-belyy-2740r"><span class="title">пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/35ebdf1eb3139cf89fe5f6240c399711.jpeg" alt="электрическая мультиварка Йогуртница Maxima MYM-0154" title="электрическая мультиварка Йогуртница Maxima MYM-0154"><div class="box" page="yogurtnica-maxima-mym-990r"><span class="title">электрическая мультиварка Йогуртница Maxima MYM-0154</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/aca42b878e4277b1730672f4f845a597.jpeg" alt="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black" title="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black"><div class="box" page="chaynik-elektricheskiy-binatone-nk-black-1200r"><span class="title">блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/7c9f70f739cded90e6e6da5bcbc9e960.jpeg" alt="кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный" title="кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r"><span class="title">кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный</span><p>от <span class="price">1910</span> руб.</p></div></li>
						<li class="large"><img src="photos/fd3d354d6633b81b504bbc499f3c5989.jpeg" alt="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый" title="пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-zheltyy-1120r"><span class="title">пароварка тефаль цена Чайник электрический Vitek VT-1139 желтый</span><p>от <span class="price">1120</span> руб.</p></div></li>
						<li class="large"><img src="photos/27a529eb06db7d79aab6d5d214852413.jpeg" alt="какие лучше микроволновые печи Minamoto R03 (AAA)" title="какие лучше микроволновые печи Minamoto R03 (AAA)"><div class="box" page="minamoto-r-aaa-4r"><span class="title">какие лучше микроволновые печи Minamoto R03 (AAA)</span><p>от <span class="price">4</span> руб.</p></div></li>
						<li class="large"><img src="photos/7bfc4f4031d68720fdce5209cf8c8c0d.jpeg" alt="аэрогриль рецепты картофель Мини-весы Tanita 1479V" title="аэрогриль рецепты картофель Мини-весы Tanita 1479V"><div class="box" page="minivesy-tanita-v-3000r"><span class="title">аэрогриль рецепты картофель Мини-весы Tanita 1479V</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/d360b8a0c7da5c2048584c84686650a7.jpeg" alt="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)" title="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-55r"><span class="title">кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)</span><p>от <span class="price">55</span> руб.</p></div></li>
						<li><img src="photos/916a75c3d4cbc8ec64d3ba505b733ba5.jpeg" alt="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312" title="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312"><div class="box" page="vozdushnyy-filtr-redmond-hepafiltr-rv-390r"><span class="title">баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/de0ae611994f30f17a2187f2f1b20950.jpeg" alt="ремонт микроволновых печей самсунг Пылесос Dyson all floors DC 24" title="ремонт микроволновых печей самсунг Пылесос Dyson all floors DC 24"><div class="box" page="pylesos-dyson-all-floors-dc-26990r-2"><span class="title">ремонт микроволновых печей самсунг Пылесос Dyson all floors DC 24</span><p>от <span class="price">26990</span> руб.</p></div></li>
						<li><img src="photos/b5afd7c51355e06ff913b79a852afc55.jpeg" alt="пылесос с электрощеткой Утюг Binatone SI-4040 Blue" title="пылесос с электрощеткой Утюг Binatone SI-4040 Blue"><div class="box" page="utyug-binatone-si-blue-1600r"><span class="title">пылесос с электрощеткой Утюг Binatone SI-4040 Blue</span><p>от <span class="price">1600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sokovyzhimalka-maxima-mj-blender-2190r.php", 0, -4); if (file_exists("comments/sokovyzhimalka-maxima-mj-blender-2190r.php")) require_once "comments/sokovyzhimalka-maxima-mj-blender-2190r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sokovyzhimalka-maxima-mj-blender-2190r.php" method="post" onsubmit="return checkForm(this)">
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