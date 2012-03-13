<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-maxima-mk-550r.php","вафельные трубочки в вафельнице");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-maxima-mk-550r.php", $nick, $comment);
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
		<title>вафельные трубочки в вафельнице Чайник электрический Maxima MК-105  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вафельные трубочки в вафельнице, крышка для микроволновой печи, микроволновая печь рейтинг, как правильно выбрать пароварку, фиксики смотреть пылесос, хлебопечка борк отзывы, продам вафельницу, покупка пылесоса, как пользоваться мультиваркой, рецепт печенья в вафельнице, пароварка tefal 7001, какая мощность у пылесоса, купить рецепты для мультиварки, микроволновая печь bork,  фильтры для моющего пылесоса">
		<meta name="description" content="вафельные трубочки в вафельнице Миниатюрный электрический чайник Maxima MК-105 на 0,4 литра станет прекрасным ре...">
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
						<a class="photo" href="photos/65194d520ec7c4edb8d9ad44bcaa26a1.jpeg" title="вафельные трубочки в вафельнице Чайник электрический Maxima MК-105"><img src="photos/65194d520ec7c4edb8d9ad44bcaa26a1.jpeg" alt="вафельные трубочки в вафельнице Чайник электрический Maxima MК-105" title="вафельные трубочки в вафельнице Чайник электрический Maxima MК-105 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-1090r.php"><img src="photos/23396bca502057564018abfebb4d84d5.jpeg" alt="крышка для микроволновой печи Блендер Redmond RHB-2910" title="крышка для микроволновой печи Блендер Redmond RHB-2910"></a><h2>Блендер Redmond RHB-2910</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-540r.php"><img src="photos/7189b59307d880db0fc6d320b1efc4f4.jpeg" alt="микроволновая печь рейтинг Кофемолка ATH-277" title="микроволновая печь рейтинг Кофемолка ATH-277"></a><h2>Кофемолка ATH-277</h2></li>
							<li><a href="http://kitchentech.elitno.net/parovarka-atlanta-atn-1050r.php"><img src="photos/966c1a147ae7eedce6463b74d364fbff.jpeg" alt="как правильно выбрать пароварку Пароварка Atlanta АТН-602" title="как правильно выбрать пароварку Пароварка Atlanta АТН-602"></a><h2>Пароварка Atlanta АТН-602</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вафельные трубочки в вафельнице Чайник электрический Maxima MК-105</h1>
						<div class="tb"><p>Цена: от <span class="price">550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18596.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Миниатюрный электрический чайник Maxima MК-105 на 0,4 литра станет прекрасным решением для дороги, выезда на дачу или офиса.<br>Классический белый цвет, корпус из жарочного пластика, спираль из нержавеющей стали, автоматическое отключение, шкала воды и подсветка – весь необходимый минимум для отличного чайника. Также в комплекте Вы получаете две удобные чашки.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Мощность 600 Вт; <li>Емкость: 0,4 л; <li>Нагревательный элемент из нержавеющей стали; <li>Корпус из жаропрочного пластика; <li>Автоматическое выключение при закипании; <li>Открытие крышки одним нажатием; <li>Установка на подставку в любом положении; <li>Световая индикация включения; <li>Шкала уровня воды; <li>Две чашки в комплекте. </li></ul><p><strong>Производитель: MAXIMA (Англия)</strong><br><strong>Гарантия: 1 год</strong></p> вафельные трубочки в вафельнице</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/acf412ca70279cda1dfad07d522f7e3c.jpeg" alt="фиксики смотреть пылесос Пароварка Vitesse VS-507" title="фиксики смотреть пылесос Пароварка Vitesse VS-507"><div class="box"><a href="http://kitchentech.elitno.net/parovarka-vitesse-vs-1290r.php"><h3 class="title">фиксики смотреть пылесос Пароварка Vitesse VS-507</h3><p>от <span class="price">1290</span> руб.</p></a></div></li>
						<li><img src="photos/5cd90ccf1383ae054567f8f62fe579ca.jpeg" alt="хлебопечка борк отзывы Тостер Atlanta ATH-237" title="хлебопечка борк отзывы Тостер Atlanta ATH-237"><div class="box" page="toster-atlanta-ath-740r"><span class="title">хлебопечка борк отзывы Тостер Atlanta ATH-237</span><p>от <span class="price">740</span> руб.</p></div></li>
						<li><img src="photos/47745aa09108a6bfabc67b839ea476bd.jpeg" alt="продам вафельницу Чайник электрический Vitek VT-1114" title="продам вафельницу Чайник электрический Vitek VT-1114"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1030r"><span class="title">продам вафельницу Чайник электрический Vitek VT-1114</span><p>от <span class="price">1030</span> руб.</p></div></li>
						<li><img src="photos/a6fb3c6ce325a3d2e51b29fc0035a27d.jpeg" alt="покупка пылесоса Чайник электрический Redmond RK-M107" title="покупка пылесоса Чайник электрический Redmond RK-M107"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1790r"><span class="title">покупка пылесоса Чайник электрический Redmond RK-M107</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li class="large"><img src="photos/1e85a6f32a0f78265e06897930cad48c.jpeg" alt="как пользоваться мультиваркой Электрический чайник Atlanta АТН-660" title="как пользоваться мультиваркой Электрический чайник Atlanta АТН-660"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-650r"><span class="title">как пользоваться мультиваркой Электрический чайник Atlanta АТН-660</span><p>от <span class="price">650</span> руб.</p></div></li>
						<li class="large"><img src="photos/75de77ac7d47967464a4abeb2e9a64d1.jpeg" alt="рецепт печенья в вафельнице Чайник Melitta Look Aqua (Basic)" title="рецепт печенья в вафельнице Чайник Melitta Look Aqua (Basic)"><div class="box" page="chaynik-melitta-look-aqua-basic-2190r"><span class="title">рецепт печенья в вафельнице Чайник Melitta Look Aqua (Basic)</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li class="large"><img src="photos/7c67b6491c0da9489fd3f2ddee3c01b1.jpeg" alt="пароварка tefal 7001 Паровая гладильная система Sofia Lux" title="пароварка tefal 7001 Паровая гладильная система Sofia Lux"><div class="box" page="parovaya-gladilnaya-sistema-sofia-lux-69000r"><span class="title">пароварка tefal 7001 Паровая гладильная система Sofia Lux</span><p>от <span class="price">69000</span> руб.</p></div></li>
						<li><img src="photos/eb7760a68b0b3e85f39c2160100a5731.jpeg" alt="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008" title="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008"><div class="box" page="moyuschiy-koncentrat-thomas-profloor-l-sht-700r"><span class="title">какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/c4ed1ed9a910d5dd5d3b4d4cba707112.jpeg" alt="купить рецепты для мультиварки Насадка для матрасов в упаковке Dyson Mattress Tool Assy Retail NP" title="купить рецепты для мультиварки Насадка для матрасов в упаковке Dyson Mattress Tool Assy Retail NP"><div class="box" page="nasadka-dlya-matrasov-v-upakovke-dyson-mattress-tool-assy-retail-np-1090r"><span class="title">купить рецепты для мультиварки Насадка для матрасов в упаковке Dyson Mattress Tool Assy Retail NP</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/af4db2e11d74fd9a3df56b0b95fb949a.jpeg" alt="микроволновая печь bork Пылесос моющий Thomas Hygiene T2" title="микроволновая печь bork Пылесос моющий Thomas Hygiene T2"><div class="box" page="pylesos-moyuschiy-thomas-hygiene-t-15900r"><span class="title">микроволновая печь bork Пылесос моющий Thomas Hygiene T2</span><p>от <span class="price">15900</span> руб.</p></div></li>
						<li><img src="photos/9fd5ef54211079a33ba5cc9bfbb9bfcf.jpeg" alt="купить кофемашину jura Пылесос моющий Thomas Bravo 20 S Aquafilter" title="купить кофемашину jura Пылесос моющий Thomas Bravo 20 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-bravo-s-aquafilter-9270r"><span class="title">купить кофемашину jura Пылесос моющий Thomas Bravo 20 S Aquafilter</span><p>от <span class="price">9270</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-maxima-mk-550r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-maxima-mk-550r.php")) require_once "comments/chaynik-elektricheskiy-maxima-mk-550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-maxima-mk-550r.php" method="post" onsubmit="return checkForm(this)">
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