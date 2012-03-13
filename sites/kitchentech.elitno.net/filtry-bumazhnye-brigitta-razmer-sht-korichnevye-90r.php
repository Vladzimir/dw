<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("filtry-bumazhnye-brigitta-razmer-sht-korichnevye-90r.php","мультиварка yummy");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("filtry-bumazhnye-brigitta-razmer-sht-korichnevye-90r.php", $nick, $comment);
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
		<title>мультиварка yummy Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мультиварка yummy, преимущества мультиварки, мультиварка паларис, распродажа пылесосов, кофемашина jura impressa c5, продам вафельницу, кофемашина krups nescafe dolce gusto, микроволновая печь saturn, очистка кофеварки, микроволновая печь мощность, кофеварка в киеве, запчасти пылесос томас, мультиварка скороварка moulinex, пароварка chicco,  хлебопечка клатроник">
		<meta name="description" content="мультиварка yummy Бумажные фильтры Brigitta предназначены для заваривания кофе  как в электричеких...">
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
						<a class="photo" href="photos/3f307bdf7da72b9732c65cb87ddaad55.jpeg" title="мультиварка yummy Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые"><img src="photos/3f307bdf7da72b9732c65cb87ddaad55.jpeg" alt="мультиварка yummy Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые" title="мультиварка yummy Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-tefal-blde-2660r.php"><img src="photos/a169e670a3a2eab3dd68bb002270cf0f.jpeg" alt="преимущества мультиварки Блендер Tefal BL522D3E" title="преимущества мультиварки Блендер Tefal BL522D3E"></a><h2>Блендер Tefal BL522D3E</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-bistro-erp-serebristaya-36999r.php"><img src="photos/9fea21248e7566db156b2a08dbe43d4c.jpeg" alt="мультиварка паларис Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая" title="мультиварка паларис Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая"></a><h2>Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3550r.php"><img src="photos/7b88076a90f90c4718597a4ab977cb0a.jpeg" alt="распродажа пылесосов Микроволновая печь Vitek VT-1682" title="распродажа пылесосов Микроволновая печь Vitek VT-1682"></a><h2>Микроволновая печь Vitek VT-1682</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мультиварка yummy Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые</h1>
						<div class="tb"><p>Цена: от <span class="price">90</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26578.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Бумажные фильтры Brigitta предназначены для заваривания кофе  как в электричеких кофеварках, так и с помощью ручных фильтров. Размер фильтра:  2. В упаковке 100 шт.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Для       электрокофеварок;</li>   <li>2       размер;</li> </ul> <ul type=disc>   <li>В       упаковке 100 шт;<strong></strong></li>   <li>Цвет:       коричневый.<strong></strong></li> </ul> <p><strong>Производитель: Brigitta  (Италия)</strong></p> мультиварка yummy</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/35bc2a6ec9e7fd46ce73f8c296c53df9.jpeg" alt="кофемашина jura impressa c5 Чайник электрический Vitek VT-1102 черный" title="кофемашина jura impressa c5 Чайник электрический Vitek VT-1102 черный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-chernyy-2000r"><span class="title">кофемашина jura impressa c5 Чайник электрический Vitek VT-1102 черный</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/47745aa09108a6bfabc67b839ea476bd.jpeg" alt="продам вафельницу Чайник электрический Vitek VT-1114" title="продам вафельницу Чайник электрический Vitek VT-1114"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1030r"><span class="title">продам вафельницу Чайник электрический Vitek VT-1114</span><p>от <span class="price">1030</span> руб.</p></div></li>
						<li><img src="photos/5eacb893fe5269a15baee9e1dcce1404.jpeg" alt="кофемашина krups nescafe dolce gusto Чайник электрический Tefal VitesseS Inox BI962513 1,7 л" title="кофемашина krups nescafe dolce gusto Чайник электрический Tefal VitesseS Inox BI962513 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-inox-bi-l-2990r"><span class="title">кофемашина krups nescafe dolce gusto Чайник электрический Tefal VitesseS Inox BI962513 1,7 л</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li><img src="photos/2e45225f75584b99ef16cc23171266ef.jpeg" alt="микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л" title="микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1740r"><span class="title">микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л</span><p>от <span class="price">1740</span> руб.</p></div></li>
						<li class="large"><img src="photos/22d30b7337c9635a9decf8a39fad0a54.jpeg" alt="очистка кофеварки Электрический чайник Atlanta АТН-793" title="очистка кофеварки Электрический чайник Atlanta АТН-793"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1420r-2"><span class="title">очистка кофеварки Электрический чайник Atlanta АТН-793</span><p>от <span class="price">1420</span> руб.</p></div></li>
						<li class="large"><img src="photos/6ecc580d026584b3c4a5294019191ac2.jpeg" alt="микроволновая печь мощность Vitek VT-1113 чайник, 1,7 л, цв. черный" title="микроволновая печь мощность Vitek VT-1113 чайник, 1,7 л, цв. черный"><div class="box" page="vitek-vt-chaynik-l-cv-chernyy-3150r"><span class="title">микроволновая печь мощность Vitek VT-1113 чайник, 1,7 л, цв. черный</span><p>от <span class="price">3150</span> руб.</p></div></li>
						<li class="large"><img src="photos/ef5f34c264e9ba8f2acfacd6c8c1863a.jpeg" alt="кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330" title="кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-golubye-cvety-zauber-eco-1760r"><span class="title">кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li><img src="photos/140994d3679b87017beef134272baa56.jpeg" alt="запчасти пылесос томас Чайник дисковый керамический 1,7л, цветы Zauber ECO-340" title="запчасти пылесос томас Чайник дисковый керамический 1,7л, цветы Zauber ECO-340"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-cvety-zauber-eco-1790r"><span class="title">запчасти пылесос томас Чайник дисковый керамический 1,7л, цветы Zauber ECO-340</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/96ed77acce770bf04afcf29723d61326.jpeg" alt="мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas" title="мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r-2"><span class="title">мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/2ff9a2b5a9fe0fab492b8e041d2f7740.jpeg" alt="пароварка chicco Пылесос Thomas Inox 1560 Sf" title="пароварка chicco Пылесос Thomas Inox 1560 Sf"><div class="box" page="pylesos-thomas-inox-sf-17820r"><span class="title">пароварка chicco Пылесос Thomas Inox 1560 Sf</span><p>от <span class="price">17820</span> руб.</p></div></li>
						<li><img src="photos/e1389eb03e943fe040843f1f9d6c693c.jpeg" alt="центральный пылесос Утюг Vitek VT-1251 синий" title="центральный пылесос Утюг Vitek VT-1251 синий"><div class="box" page="utyug-vitek-vt-siniy-1500r"><span class="title">центральный пылесос Утюг Vitek VT-1251 синий</span><p>от <span class="price">1500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("filtry-bumazhnye-brigitta-razmer-sht-korichnevye-90r.php", 0, -4); if (file_exists("comments/filtry-bumazhnye-brigitta-razmer-sht-korichnevye-90r.php")) require_once "comments/filtry-bumazhnye-brigitta-razmer-sht-korichnevye-90r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="filtry-bumazhnye-brigitta-razmer-sht-korichnevye-90r.php" method="post" onsubmit="return checkForm(this)">
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