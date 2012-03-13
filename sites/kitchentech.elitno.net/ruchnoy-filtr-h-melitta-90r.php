<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("ruchnoy-filtr-h-melitta-90r.php","запасная чаша для мультиварки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("ruchnoy-filtr-h-melitta-90r.php", $nick, $comment);
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
		<title>запасная чаша для мультиварки Ручной фильтр 1х2 Melitta  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="запасная чаша для мультиварки, пароварка на газу, пылесос roomy gold, мультиварка паларис, запчасти пылесос томас, пельмени в мультиварке на пару, мясорубка binatone, приготовление майонеза в блендере, пылесос thomas s1, книга рецептов для хлебопечки, шампунь для пылесоса, panasonic блендер, хлебопечка советы, мини соковыжималка,  соковыжималка juice">
		<meta name="description" content="запасная чаша для мультиварки Специальный фильтр является необходимым аксессуаром к  кофеварке или кофемашине ...">
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
						<a class="photo" href="photos/2bec71f00cc7c477276a701c5ff309a1.jpeg" title="запасная чаша для мультиварки Ручной фильтр 1х2 Melitta"><img src="photos/2bec71f00cc7c477276a701c5ff309a1.jpeg" alt="запасная чаша для мультиварки Ручной фильтр 1х2 Melitta" title="запасная чаша для мультиварки Ручной фильтр 1х2 Melitta -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/ruchnoy-blender-russell-hobbs-desire-art-1290r.php"><img src="photos/1872b2cfd6b28fbd32d0f1258c786690.jpeg" alt="пароварка на газу Ручной блендер Russell Hobbs Desire, арт. 18508-56" title="пароварка на газу Ручной блендер Russell Hobbs Desire, арт. 18508-56"></a><h2>Ручной блендер Russell Hobbs Desire, арт. 18508-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-35190r.php"><img src="photos/df4de2da7d663a4198320cc2af72f271.jpeg" alt="пылесос roomy gold Кофемашина Nivona NICR650 CafeRomatica" title="пылесос roomy gold Кофемашина Nivona NICR650 CafeRomatica"></a><h2>Кофемашина Nivona NICR650 CafeRomatica</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-bistro-erp-serebristaya-36999r.php"><img src="photos/9fea21248e7566db156b2a08dbe43d4c.jpeg" alt="мультиварка паларис Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая" title="мультиварка паларис Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая"></a><h2>Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>запасная чаша для мультиварки Ручной фильтр 1х2 Melitta</h1>
						<div class="tb"><p>Цена: от <span class="price">90</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26312.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Специальный фильтр является необходимым аксессуаром к  кофеварке или кофемашине – именно он позволяет вам в конечном счете получить  напиток с идеальным вкусом и запахом, без лишних примесей. Ручной фильтр 1х2 Melitta  создан специально для вашего наслаждения любимым напитком, он максимально прост  и удобен в использовании; один фильтр рассчитан на две чашки кофе.  Свежеприготовленный кофе может быть еще вкуснее – с ручным фильтром Melitta.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Фильтр       система: 1х2 (Две чашки на один фильтр);</li> </ul> <p><strong>Производитель:  Германия (</strong><strong>Melitta)</strong></p> запасная чаша для мультиварки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a9b561236bfa7747af43043cb7d43b52.jpeg" alt="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро" title="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро"><div class="box"><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-s-grilem-moulinex-mw-parovarka-l-serebro-6110r.php"><h3 class="title">запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро</h3><p>от <span class="price">6110</span> руб.</p></a></div></li>
						<li><img src="photos/7b810f6db4d02163ddaea09283048313.jpeg" alt="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый" title="пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый"><div class="box" page="elektricheskiy-mikser-bodum-bistro-euro-belyy-2740r"><span class="title">пельмени в мультиварке на пару Электрический миксер Bodum BISTRO 11151-913EURO белый</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/cf93342053e92b125e6f4adca7e47bbe.jpeg" alt="мясорубка binatone Пароварка Tefal Simply Invents VC1017" title="мясорубка binatone Пароварка Tefal Simply Invents VC1017"><div class="box" page="parovarka-tefal-simply-invents-vc-3990r"><span class="title">мясорубка binatone Пароварка Tefal Simply Invents VC1017</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/4aba59e656a62396ee01dc9ed0a83fa8.jpeg" alt="приготовление майонеза в блендере Соковыжималка TURBO" title="приготовление майонеза в блендере Соковыжималка TURBO"><div class="box" page="sokovyzhimalka-turbo-7790r"><span class="title">приготовление майонеза в блендере Соковыжималка TURBO</span><p>от <span class="price">7790</span> руб.</p></div></li>
						<li class="large"><img src="photos/c73e008984140d52a15fd324bddeb59f.jpeg" alt="пылесос thomas s1 Чайник электрический Vitek VT-1141" title="пылесос thomas s1 Чайник электрический Vitek VT-1141"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r-2"><span class="title">пылесос thomas s1 Чайник электрический Vitek VT-1141</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" alt="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118" title="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1999r"><span class="title">книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118</span><p>от <span class="price">1999</span> руб.</p></div></li>
						<li class="large"><img src="photos/52100c33edc3ca0743ca02e24c7f8dba.jpeg" alt="шампунь для пылесоса Электрический чайник Atlanta АТН-720" title="шампунь для пылесоса Электрический чайник Atlanta АТН-720"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-550r"><span class="title">шампунь для пылесоса Электрический чайник Atlanta АТН-720</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/a72d69a17b01ae0c39e3992b04fd72d5.jpeg" alt="panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)" title="panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)"><div class="box" page="soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r"><span class="title">panasonic блендер Сопло для пенной чистки Karcher (упаковка 0,6 л)</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li><img src="photos/cc9208f636d59db8c6c0a8ac95064dc7.jpeg" alt="хлебопечка советы Шланг подачи воды c фильтром Karcher 4.440-238.0" title="хлебопечка советы Шланг подачи воды c фильтром Karcher 4.440-238.0"><div class="box" page="shlang-podachi-vody-c-filtrom-karcher-1750r"><span class="title">хлебопечка советы Шланг подачи воды c фильтром Karcher 4.440-238.0</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/8201fb734cec793db96d43f2e27a6cc4.jpeg" alt="мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail" title="мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail"><div class="box" page="nabor-dlya-doma-dyson-home-cleaning-kit-retail-2490r"><span class="title">мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/ebd6fc853a788b316468033f41ae3864.jpeg" alt="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22" title="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22"><div class="box" page="pylesos-dyson-motorhead-dc-34990r"><span class="title">мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22</span><p>от <span class="price">34990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("ruchnoy-filtr-h-melitta-90r.php", 0, -4); if (file_exists("comments/ruchnoy-filtr-h-melitta-90r.php")) require_once "comments/ruchnoy-filtr-h-melitta-90r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="ruchnoy-filtr-h-melitta-90r.php" method="post" onsubmit="return checkForm(this)">
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