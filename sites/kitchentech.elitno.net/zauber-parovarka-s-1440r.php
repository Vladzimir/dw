<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zauber-parovarka-s-1440r.php","хлебопечка покрытие");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zauber-parovarka-s-1440r.php", $nick, $comment);
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
		<title>хлебопечка покрытие Zauber Пароварка  S-530  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка покрытие, электрочайники из нержавейки, кофеварка clatronic, тольятти мультиварка, эльдорадо кофемашины, соковыжималка филипс, блендер в одессе, описание пылесоса, бамбуковая пароварка, нож для мясорубки kenwood, слоеное тесто в аэрогриле, аренда промышленного пылесоса, бытовой утюг, мясорубки отечественные,  картофельное пюре в блендере">
		<meta name="description" content="хлебопечка покрытие Пароварка S-530 от шведской компании Zauber. В первую очередь нужно отметить при...">
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
						<a class="photo" href="photos/872dadec17e7e9283341241f27cccee5.jpeg" title="хлебопечка покрытие Zauber Пароварка  S-530"><img src="photos/872dadec17e7e9283341241f27cccee5.jpeg" alt="хлебопечка покрытие Zauber Пароварка  S-530" title="хлебопечка покрытие Zauber Пароварка  S-530 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2080r.php"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="электрочайники из нержавейки Блендер Redmond RHB-2907" title="электрочайники из нержавейки Блендер Redmond RHB-2907"></a><h2>Блендер Redmond RHB-2907</h2></li>
							<li><a href="http://kitchentech.elitno.net/zauber-kofemolka-z-1310r.php"><img src="photos/9249d045a56a8d6e38902f959401f604.jpeg" alt="кофеварка clatronic Zauber Кофемолка  Z-490" title="кофеварка clatronic Zauber Кофемолка  Z-490"></a><h2>Zauber Кофемолка  Z-490</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-650r.php"><img src="photos/833ae77791168206a3b151985fda9a0b.jpeg" alt="тольятти мультиварка Кофемолка Maxima MCG-0316" title="тольятти мультиварка Кофемолка Maxima MCG-0316"></a><h2>Кофемолка Maxima MCG-0316</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка покрытие Zauber Пароварка  S-530</h1>
						<div class="tb"><p>Цена: от <span class="price">1440</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_17427.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Пароварка S-530 от шведской компании Zauber. В первую очередь нужно отметить приятный и необычный дизайн, с применением экологически чистого пластика. Для любителей здорового питания многое предусмотрено – есть перфорированные поддоны для яиц, подставка для риса. А воду можно подливать прямо во время приготовления. Поверхности соприкосновения с пищей выполнены из пищевой гигиенической стали Food-Friend.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Управление: механическое <li>Количество ярусов: 3 <li>Общий объем: 3 л. <li>Потребляемая мощность: 430 Вт <li>Материал корпуса нерж: Сталь <li>Материал паровых корзин: Прозрачный пластик. <li>Долив воды во время приготовления: Да <li>Углубления для варки яиц: Да <li>Особенности: Пищевая гигиеническая сталь Food-Friend <li>Гарантия: 25 мес. </li></ul><p><b>Производитель: Швеция</b></p> хлебопечка покрытие</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5e475c33aea662be8e01a1f2443fb6c0.jpeg" alt="эльдорадо кофемашины Микроволновая печь Vitek VT-1684" title="эльдорадо кофемашины Микроволновая печь Vitek VT-1684"><div class="box" page="mikrovolnovaya-pech-vitek-vt-3870r"><span class="title">эльдорадо кофемашины Микроволновая печь Vitek VT-1684</span><p>от <span class="price">3870</span> руб.</p></div></li>
						<li><img src="photos/e3e70209e76fc59518f6178cf23e1266.jpeg" alt="соковыжималка филипс Тостер Redmond RT-M401" title="соковыжималка филипс Тостер Redmond RT-M401"><div class="box" page="toster-redmond-rtm-1850r"><span class="title">соковыжималка филипс Тостер Redmond RT-M401</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/64a1e17046b7c97f3413bb1bcacb4f30.jpeg" alt="блендер в одессе Чайник экспресс Binatone EEJ-1555 White" title="блендер в одессе Чайник экспресс Binatone EEJ-1555 White"><div class="box" page="chaynik-ekspress-binatone-eej-white-2600r"><span class="title">блендер в одессе Чайник экспресс Binatone EEJ-1555 White</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li><img src="photos/cfef38cef319ef880fc0959319ecdb34.jpeg" alt="описание пылесоса Чайник электрический Vitek VT-1154" title="описание пылесоса Чайник электрический Vitek VT-1154"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1010r"><span class="title">описание пылесоса Чайник электрический Vitek VT-1154</span><p>от <span class="price">1010</span> руб.</p></div></li>
						<li class="large"><img src="photos/3e5de65e23113a4dedb018c90159e3df.jpeg" alt="бамбуковая пароварка Чайник электрический  Vitesse VS-115 1,7л стальной" title="бамбуковая пароварка Чайник электрический  Vitesse VS-115 1,7л стальной"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-stalnoy-1360r"><span class="title">бамбуковая пароварка Чайник электрический  Vitesse VS-115 1,7л стальной</span><p>от <span class="price">1360</span> руб.</p></div></li>
						<li class="large"><img src="photos/4aa517f040bb8f7cdf25d41fea297b7f.jpeg" alt="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781" title="нож для мясорубки kenwood Электрический чайник Atlanta АТН-781"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1000r"><span class="title">нож для мясорубки kenwood Электрический чайник Atlanta АТН-781</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li class="large"><img src="photos/b28d3e929be020189d8c25424817be16.jpeg" alt="слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO" title="слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO"><div class="box" page="elektricheskiy-chaynik-l-zelenyy-bodum-bistro-euro-2270r"><span class="title">слоеное тесто в аэрогриле Электрический чайник 1л зеленый Bodum BISTRO 11154-565EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/61cc3edb3bfd24a6709976ba33646660.jpeg" alt="аренда промышленного пылесоса Зарядное устройство GP Batteries PB350GS-UE1" title="аренда промышленного пылесоса Зарядное устройство GP Batteries PB350GS-UE1"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbgsue-340r"><span class="title">аренда промышленного пылесоса Зарядное устройство GP Batteries PB350GS-UE1</span><p>от <span class="price">340</span> руб.</p></div></li>
						<li><img src="photos/100a2bcb8188ff9463a9e3368c849858.jpeg" alt="бытовой утюг Набор для уборки в автомобиле Dyson Car Cleaning Kit" title="бытовой утюг Набор для уборки в автомобиле Dyson Car Cleaning Kit"><div class="box" page="nabor-dlya-uborki-v-avtomobile-dyson-car-cleaning-kit-2790r"><span class="title">бытовой утюг Набор для уборки в автомобиле Dyson Car Cleaning Kit</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li><img src="photos/b19d13e15e623a65d384ae31dfb72492.jpeg" alt="мясорубки отечественные Утюг Vitek VT-1203 серый" title="мясорубки отечественные Утюг Vitek VT-1203 серый"><div class="box" page="utyug-vitek-vt-seryy-940r"><span class="title">мясорубки отечественные Утюг Vitek VT-1203 серый</span><p>от <span class="price">940</span> руб.</p></div></li>
						<li><img src="photos/5c8ca3c5b3cad9622fdcc96bde1be1b9.jpeg" alt="мультиварка кенвуд Atlanta ATH-432 Утюг" title="мультиварка кенвуд Atlanta ATH-432 Утюг"><div class="box" page="atlanta-ath-utyug-450r"><span class="title">мультиварка кенвуд Atlanta ATH-432 Утюг</span><p>от <span class="price">450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zauber-parovarka-s-1440r.php", 0, -4); if (file_exists("comments/zauber-parovarka-s-1440r.php")) require_once "comments/zauber-parovarka-s-1440r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zauber-parovarka-s-1440r.php" method="post" onsubmit="return checkForm(this)">
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