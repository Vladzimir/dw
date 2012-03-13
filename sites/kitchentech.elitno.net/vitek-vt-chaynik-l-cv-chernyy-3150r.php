<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vitek-vt-chaynik-l-cv-chernyy-3150r.php","мясорубка бриз купить");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vitek-vt-chaynik-l-cv-chernyy-3150r.php", $nick, $comment);
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
		<title>мясорубка бриз купить Vitek VT-1113 чайник, 1,7 л, цв. черный  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мясорубка бриз купить, распродажа пылесосов, обслуживание пылесоса, продам мультиварку, грибы в мультиварке, рисование утюгом, делонги кофемашина примадонна, scarlett утюг отзывы, аэрогриль hotter economy, мультиварка описание, шампунь для пылесоса, лучший пылесос с аквафильтром, ржаная мука для хлебопечки, кофемашина saeco xsmall,  бесплатные рецепты для пароварки">
		<meta name="description" content="мясорубка бриз купить Технические характеристики:Мощность: 2200Вт Нагревательный элемент: скрытый Пово...">
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
						<a class="photo" href="photos/6ecc580d026584b3c4a5294019191ac2.jpeg" title="мясорубка бриз купить Vitek VT-1113 чайник, 1,7 л, цв. черный"><img src="photos/6ecc580d026584b3c4a5294019191ac2.jpeg" alt="мясорубка бриз купить Vitek VT-1113 чайник, 1,7 л, цв. черный" title="мясорубка бриз купить Vitek VT-1113 чайник, 1,7 л, цв. черный -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3550r.php"><img src="photos/7b88076a90f90c4718597a4ab977cb0a.jpeg" alt="распродажа пылесосов Микроволновая печь Vitek VT-1682" title="распродажа пылесосов Микроволновая печь Vitek VT-1682"></a><h2>Микроволновая печь Vitek VT-1682</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3650r.php"><img src="photos/b6481108ed00fa262329eb9b4a9a7836.jpeg" alt="обслуживание пылесоса Микроволновая печь Vitek VT-1694" title="обслуживание пылесоса Микроволновая печь Vitek VT-1694"></a><h2>Микроволновая печь Vitek VT-1694</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-atlanta-ath-530r.php"><img src="photos/35ee696c1c92edfebad75db4602c2861.jpeg" alt="продам мультиварку Миксер Atlanta ATH-283" title="продам мультиварку Миксер Atlanta ATH-283"></a><h2>Миксер Atlanta ATH-283</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мясорубка бриз купить Vitek VT-1113 чайник, 1,7 л, цв. черный</h1>
						<div class="tb"><p>Цена: от <span class="price">3150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21680.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 2200Вт </li><li>Нагревательный элемент: скрытый </li><li>Поворачивающийся корпус: 360° </li><li>Объем: 1,7л </li><li>Стеклянная сенсорная панель (Touch control)</li><li>Функция подержания температуры</li><li>Материал корпуса: стекло</li><li>Защита от перегрева</li><li>Автоотключение при закипании воды </li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> мясорубка бриз купить</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/07f90c95ce6a7ffe3129c0eb4bb8942c.jpeg" alt="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146" title="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146"><div class="box" page="elektroplitka-indukcionnaya-maxima-mic-1590r"><span class="title">грибы в мультиварке Электроплитка индукционная Maxima MIC-0146</span><p>от <span class="price">1590</span> руб.</p></div></li>
						<li><img src="photos/1f7b9f216facd163cc074eb10bad1faf.jpeg" alt="рисование утюгом Соковыжималка Moulinex BKA1" title="рисование утюгом Соковыжималка Moulinex BKA1"><div class="box" page="sokovyzhimalka-moulinex-bka-2400r"><span class="title">рисование утюгом Соковыжималка Moulinex BKA1</span><p>от <span class="price">2400</span> руб.</p></div></li>
						<li><img src="photos/46a5120709bf99f581bc7ea7569bd649.png" alt="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902" title="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902"><div class="box" page="hlebopech-redmond-rbmm-3990r"><span class="title">делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/3eefca7b285e5c7425033f0997c9145b.jpeg" alt="scarlett утюг отзывы Чайник электрический Vitek VT-1104" title="scarlett утюг отзывы Чайник электрический Vitek VT-1104"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r"><span class="title">scarlett утюг отзывы Чайник электрический Vitek VT-1104</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" alt="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный" title="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1790r"><span class="title">аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li class="large"><img src="photos/01e798cd02e35629810cab1b511976bc.jpeg" alt="мультиварка описание Чайник электрический Tefal Reminisce KI201540 1,7 л" title="мультиварка описание Чайник электрический Tefal Reminisce KI201540 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-reminisce-ki-l-2370r"><span class="title">мультиварка описание Чайник электрический Tefal Reminisce KI201540 1,7 л</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li class="large"><img src="photos/52100c33edc3ca0743ca02e24c7f8dba.jpeg" alt="шампунь для пылесоса Электрический чайник Atlanta АТН-720" title="шампунь для пылесоса Электрический чайник Atlanta АТН-720"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-550r"><span class="title">шампунь для пылесоса Электрический чайник Atlanta АТН-720</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/d509d0771406a8c20b2506d316fad0aa.jpeg" alt="лучший пылесос с аквафильтром Чайник Melitta Look Aqua Vario" title="лучший пылесос с аквафильтром Чайник Melitta Look Aqua Vario"><div class="box" page="chaynik-melitta-look-aqua-vario-2838r"><span class="title">лучший пылесос с аквафильтром Чайник Melitta Look Aqua Vario</span><p>от <span class="price">2838</span> руб.</p></div></li>
						<li><img src="photos/6ad68580ca9fe51d58dccc0df51b3bb5.jpeg" alt="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter" title="ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-aquatherm-aquafilter-16720r"><span class="title">ржаная мука для хлебопечки Пылесос моющий Thomas Twin Aquatherm + Aquafilter</span><p>от <span class="price">16720</span> руб.</p></div></li>
						<li><img src="photos/20a6a481b9a3a072fa1293146dcb1ec9.jpeg" alt="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter" title="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-super-s-aquafilter-10520r"><span class="title">кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter</span><p>от <span class="price">10520</span> руб.</p></div></li>
						<li><img src="photos/a24b7e04e12ea5cc75354fc2b5ebd18d.jpeg" alt="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный" title="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный"><div class="box" page="pylesos-vitek-vt-chernyy-2600r"><span class="title">фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный</span><p>от <span class="price">2600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vitek-vt-chaynik-l-cv-chernyy-3150r.php", 0, -4); if (file_exists("comments/vitek-vt-chaynik-l-cv-chernyy-3150r.php")) require_once "comments/vitek-vt-chaynik-l-cv-chernyy-3150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vitek-vt-chaynik-l-cv-chernyy-3150r.php" method="post" onsubmit="return checkForm(this)">
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