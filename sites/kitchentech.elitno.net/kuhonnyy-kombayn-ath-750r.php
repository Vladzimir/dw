<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kuhonnyy-kombayn-ath-750r.php","функции мясорубки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kuhonnyy-kombayn-ath-750r.php", $nick, $comment);
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
		<title>функции мясорубки Кухонный комбайн ATH-350  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="функции мясорубки, экспресс кофеварка, трубочки в вафельнице, сервисный центр пылесосов, тыква в мультиварке, рецепты для хлебопечки с фото, язык в аэрогриле, обслуживание пылесоса, мультиварка акции, ремень для хлебопечки, мультиварка мэджик пот, бытовой утюг, овощи гриль в аэрогриле, пылесос вертикальный,  аэрогриль vitesse vs 408">
		<meta name="description" content="функции мясорубки Измельчитель Atlanta ATH-350 с прозрачным резервуаром и измельчителем, емкостью ...">
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
						<a class="photo" href="photos/4a8644a2c29f22e2d9c92389f96ff2ab.jpeg" title="функции мясорубки Кухонный комбайн ATH-350"><img src="photos/4a8644a2c29f22e2d9c92389f96ff2ab.jpeg" alt="функции мясорубки Кухонный комбайн ATH-350" title="функции мясорубки Кухонный комбайн ATH-350 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/miniblender-elektricheskiy-philips-avent-s-naborom-dlya-prigotovleniya-prikorma-2630r.php"><img src="photos/e108698677b9a90b7d512a1822cd82a7.jpeg" alt="экспресс кофеварка Миниблендер электрический Philips Avent с набором для приготовления прикорма 85210" title="экспресс кофеварка Миниблендер электрический Philips Avent с набором для приготовления прикорма 85210"></a><h2>Миниблендер электрический Philips Avent с набором для приготовления прикорма 85210</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-tefal-prepline-hb-1860r.php"><img src="photos/6fb862aaf5b6b711f34b689e2d685231.jpeg" alt="трубочки в вафельнице Блендер погружной Tefal Prepline HB7151" title="трубочки в вафельнице Блендер погружной Tefal Prepline HB7151"></a><h2>Блендер погружной Tefal Prepline HB7151</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-550r.php"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="сервисный центр пылесосов Блендер Atlanta АТН-338" title="сервисный центр пылесосов Блендер Atlanta АТН-338"></a><h2>Блендер Atlanta АТН-338</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>функции мясорубки Кухонный комбайн ATH-350</h1>
						<div class="tb"><p>Цена: от <span class="price">750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19602.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Измельчитель Atlanta ATH-350 с прозрачным резервуаром и измельчителем, емкостью 400 миллилитров, мощностью 280 Вт – ваш недорогой помощник на кухне. Теперь вам не нужно проводить часы на кухне, нарезая, например, овощи для салата, ведь измельчитель сделает всю работу за вас в считанные минуты. Для улучшения циркуляции продукта использована система ассиметричных ножек. Удобен для мытья.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Емкость: 0,4 литра <li>Мощность: 280 Вт </li></ul><p><strong>Производитель: США</strong></p> функции мясорубки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/6dd18dbc3abd740bf749993f0923000d.jpeg" alt="тыква в мультиварке Блендер Maxima MHB-0329" title="тыква в мультиварке Блендер Maxima MHB-0329"><div class="box" page="blender-maxima-mhb-1290r"><span class="title">тыква в мультиварке Блендер Maxima MHB-0329</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li><img src="photos/f5887b3a092904b4c854c36d9035df19.jpeg" alt="рецепты для хлебопечки с фото Эспрессо-кофемашина Melitta Caffeo Lounge Black (4.0009.87)" title="рецепты для хлебопечки с фото Эспрессо-кофемашина Melitta Caffeo Lounge Black (4.0009.87)"><div class="box" page="espressokofemashina-melitta-caffeo-lounge-black-45500r"><span class="title">рецепты для хлебопечки с фото Эспрессо-кофемашина Melitta Caffeo Lounge Black (4.0009.87)</span><p>от <span class="price">45500</span> руб.</p></div></li>
						<li><img src="photos/eb4618ce7491ec77cbaa3b4b7dd675cb.jpeg" alt="язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)" title="язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)"><div class="box" page="espressokofemashina-melitta-caffeo-solo-pure-white-28530r"><span class="title">язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)</span><p>от <span class="price">28530</span> руб.</p></div></li>
						<li><img src="photos/b6481108ed00fa262329eb9b4a9a7836.jpeg" alt="обслуживание пылесоса Микроволновая печь Vitek VT-1694" title="обслуживание пылесоса Микроволновая печь Vitek VT-1694"><div class="box" page="mikrovolnovaya-pech-vitek-vt-3650r"><span class="title">обслуживание пылесоса Микроволновая печь Vitek VT-1694</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li class="large"><img src="photos/b11b426009f0167e5ff93f5aa64ca56d.jpeg" alt="мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л" title="мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1650r"><span class="title">мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li class="large"><img src="photos/46f63d5550ab774c363b5ff4ba202c31.jpeg" alt="ремень для хлебопечки Чайник электрический Maxima MK- M191" title="ремень для хлебопечки Чайник электрический Maxima MK- M191"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-990r"><span class="title">ремень для хлебопечки Чайник электрический Maxima MK- M191</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/51ac41098d88811e7ab3241e4fa31a8c.jpeg" alt="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA" title="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aaahcuc-petgaaa-300r"><span class="title">мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/100a2bcb8188ff9463a9e3368c849858.jpeg" alt="бытовой утюг Набор для уборки в автомобиле Dyson Car Cleaning Kit" title="бытовой утюг Набор для уборки в автомобиле Dyson Car Cleaning Kit"><div class="box" page="nabor-dlya-uborki-v-avtomobile-dyson-car-cleaning-kit-2790r"><span class="title">бытовой утюг Набор для уборки в автомобиле Dyson Car Cleaning Kit</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li><img src="photos/d8b76d5d925f2e48955ce7204e57a699.jpeg" alt="овощи гриль в аэрогриле Набор для профилактики аллергии Dyson Allergy Kit Retail" title="овощи гриль в аэрогриле Набор для профилактики аллергии Dyson Allergy Kit Retail"><div class="box" page="nabor-dlya-profilaktiki-allergii-dyson-allergy-kit-retail-2490r"><span class="title">овощи гриль в аэрогриле Набор для профилактики аллергии Dyson Allergy Kit Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/08939404bc185a897cf2a335ea28842f.jpeg" alt="пылесос вертикальный Пылесос Redmond RV-308" title="пылесос вертикальный Пылесос Redmond RV-308"><div class="box" page="pylesos-redmond-rv-7990r"><span class="title">пылесос вертикальный Пылесос Redmond RV-308</span><p>от <span class="price">7990</span> руб.</p></div></li>
						<li><img src="photos/dcfd8cc55439cd877d074c0e060c75d4.jpeg" alt="качество пылесосов Пылесос Vitek VT-1809 красный" title="качество пылесосов Пылесос Vitek VT-1809 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-2600r"><span class="title">качество пылесосов Пылесос Vitek VT-1809 красный</span><p>от <span class="price">2600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kuhonnyy-kombayn-ath-750r.php", 0, -4); if (file_exists("comments/kuhonnyy-kombayn-ath-750r.php")) require_once "comments/kuhonnyy-kombayn-ath-750r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kuhonnyy-kombayn-ath-750r.php" method="post" onsubmit="return checkForm(this)">
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