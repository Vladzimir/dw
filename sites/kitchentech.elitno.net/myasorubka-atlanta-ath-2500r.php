<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("myasorubka-atlanta-ath-2500r.php","хлебопечка panasonic sd 257");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("myasorubka-atlanta-ath-2500r.php", $nick, $comment);
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
		<title>хлебопечка panasonic sd 257 Мясорубка  Atlanta ATH-370  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка panasonic sd 257, пылесборники для пылесосов philips, тольятти мультиварка, запчасти пылесос томас, подобрать пылесос, спагетти в мультиварке, пылесос с водным фильтром, рецепты кофе в кофемашине, измельчитель сучьев, шампунь для пылесоса, сравнение блендеров, пароварка газовая купить, сосиски в мультиварке, качество пылесосов,  какие дрожжи лучше для хлебопечки">
		<meta name="description" content="хлебопечка panasonic sd 257 Электрическая мясорубка Atlanta ATH-370 в современном дизайне с системой реверса...">
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
						<a class="photo" href="photos/32c26854e293b25040685f60b879a50b.jpeg" title="хлебопечка panasonic sd 257 Мясорубка  Atlanta ATH-370"><img src="photos/32c26854e293b25040685f60b879a50b.jpeg" alt="хлебопечка panasonic sd 257 Мясорубка  Atlanta ATH-370" title="хлебопечка panasonic sd 257 Мясорубка  Atlanta ATH-370 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-ci-serebristaya-65999r.php"><img src="photos/1eb9b0b00689e076b5895b91684c957e.jpeg" alt="пылесборники для пылесосов philips Автоматическая кофемашина Melitta CAFFEO CI, серебристая" title="пылесборники для пылесосов philips Автоматическая кофемашина Melitta CAFFEO CI, серебристая"></a><h2>Автоматическая кофемашина Melitta CAFFEO CI, серебристая</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-650r.php"><img src="photos/833ae77791168206a3b151985fda9a0b.jpeg" alt="тольятти мультиварка Кофемолка Maxima MCG-0316" title="тольятти мультиварка Кофемолка Maxima MCG-0316"></a><h2>Кофемолка Maxima MCG-0316</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-s-grilem-moulinex-mw-parovarka-l-serebro-6110r.php"><img src="photos/a9b561236bfa7747af43043cb7d43b52.jpeg" alt="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро" title="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро"></a><h2>Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка panasonic sd 257 Мясорубка  Atlanta ATH-370</h1>
						<div class="tb"><p>Цена: от <span class="price">2500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19612.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрическая мясорубка Atlanta ATH-370 в современном дизайне с системой реверса мощностью 1000 W. Встроенная система реверса позволяет проворачивать шнек (спираль, прокручивающая фарш) в обратном направлении. Тем самым, вы сможете легко избавиться от намотавшихся жил, без необходимости разбора мясорубки. В комплекте идет 2 насадки. Корпус имеет гигиеническое покрытие. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Реверс <li>Современный дизайн <li>В комплекте дополнительные насадки <li>Корпус с гигиеничным покрытием <li>Высокая производительность <li>Рецепты приготовления кеббе <li>Изделие сертифицировано Госстандартом Украины <li>Соответствует европейским и американским нормам безопасности <li>Мощность 1000 W / 230V, 50Hz </li></ul><p><strong>Производитель: США</strong></p> хлебопечка panasonic sd 257</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a1d1eae985fdaf6c44e33d639f78a926.jpeg" alt="подобрать пылесос Ручной миксер и измельчитель Vitesse VS-248" title="подобрать пылесос Ручной миксер и измельчитель Vitesse VS-248"><div class="box"><a href="http://kitchentech.elitno.net/ruchnoy-mikser-i-izmelchitel-vitesse-vs-2550r.php"><h3 class="title">подобрать пылесос Ручной миксер и измельчитель Vitesse VS-248</h3><p>от <span class="price">2550</span> руб.</p></a></div></li>
						<li><img src="photos/b4972945a0247403022f6df03f16440c.jpeg" alt="спагетти в мультиварке Пароварка-блендер Philips Avent 85300" title="спагетти в мультиварке Пароварка-блендер Philips Avent 85300"><div class="box" page="parovarkablender-philips-avent-5600r"><span class="title">спагетти в мультиварке Пароварка-блендер Philips Avent 85300</span><p>от <span class="price">5600</span> руб.</p></div></li>
						<li><img src="photos/a8857bffd481b9dda4b86f6d3c6ed123.jpeg" alt="пылесос с водным фильтром Пароварка Vitek VT-1555" title="пылесос с водным фильтром Пароварка Vitek VT-1555"><div class="box" page="parovarka-vitek-vt-1400r"><span class="title">пылесос с водным фильтром Пароварка Vitek VT-1555</span><p>от <span class="price">1400</span> руб.</p></div></li>
						<li><img src="photos/03c71bbf8b5f2d86f3ae6ce6e9e77e58.jpeg" alt="рецепты кофе в кофемашине Фритюрница Vitek VT-1531 белая" title="рецепты кофе в кофемашине Фритюрница Vitek VT-1531 белая"><div class="box" page="frityurnica-vitek-vt-belaya-2950r"><span class="title">рецепты кофе в кофемашине Фритюрница Vitek VT-1531 белая</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li class="large"><img src="photos/7b0ef0b12e5f66ec7582c9396725bc92.jpeg" alt="измельчитель сучьев Чайник электрический Vitek VT-1120" title="измельчитель сучьев Чайник электрический Vitek VT-1120"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1150r"><span class="title">измельчитель сучьев Чайник электрический Vitek VT-1120</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li class="large"><img src="photos/52100c33edc3ca0743ca02e24c7f8dba.jpeg" alt="шампунь для пылесоса Электрический чайник Atlanta АТН-720" title="шампунь для пылесоса Электрический чайник Atlanta АТН-720"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-550r"><span class="title">шампунь для пылесоса Электрический чайник Atlanta АТН-720</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li class="large"><img src="photos/41efedb38089aeb46a210ce7ff30eedc.jpeg" alt="сравнение блендеров Детектор жучков BugHunter Professional BH-01" title="сравнение блендеров Детектор жучков BugHunter Professional BH-01"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-7990r"><span class="title">сравнение блендеров Детектор жучков BugHunter Professional BH-01</span><p>от <span class="price">7990</span> руб.</p></div></li>
						<li><img src="photos/e754a7b0b0a20443433494bbd5f5ba8d.jpeg" alt="пароварка газовая купить Пылесборник Vitek VT-1851 5шт." title="пароварка газовая купить Пылесборник Vitek VT-1851 5шт."><div class="box" page="pylesbornik-vitek-vt-sht-190r"><span class="title">пароварка газовая купить Пылесборник Vitek VT-1851 5шт.</span><p>от <span class="price">190</span> руб.</p></div></li>
						<li><img src="photos/9e96bced898e611bddc3653f39cf1ccf.jpeg" alt="сосиски в мультиварке Пылесос KARCHER WD 3.300 M EU-I" title="сосиски в мультиварке Пылесос KARCHER WD 3.300 M EU-I"><div class="box" page="pylesos-karcher-wd-m-eui-4490r"><span class="title">сосиски в мультиварке Пылесос KARCHER WD 3.300 M EU-I</span><p>от <span class="price">4490</span> руб.</p></div></li>
						<li><img src="photos/dcfd8cc55439cd877d074c0e060c75d4.jpeg" alt="качество пылесосов Пылесос Vitek VT-1809 красный" title="качество пылесосов Пылесос Vitek VT-1809 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-2600r"><span class="title">качество пылесосов Пылесос Vitek VT-1809 красный</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li><img src="photos/53cb90a2ebb4ca3e913558aa9650be1d.jpeg" alt="пылесос bosch 82425 Пылесос Thomas Inox 1520 Plus" title="пылесос bosch 82425 Пылесос Thomas Inox 1520 Plus"><div class="box" page="pylesos-thomas-inox-plus-4730r"><span class="title">пылесос bosch 82425 Пылесос Thomas Inox 1520 Plus</span><p>от <span class="price">4730</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("myasorubka-atlanta-ath-2500r.php", 0, -4); if (file_exists("comments/myasorubka-atlanta-ath-2500r.php")) require_once "comments/myasorubka-atlanta-ath-2500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="myasorubka-atlanta-ath-2500r.php" method="post" onsubmit="return checkForm(this)">
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