<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikser-atlanta-ath-480r.php","кофеварка tefal express");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikser-atlanta-ath-480r.php", $nick, $comment);
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
		<title>кофеварка tefal express Миксер Atlanta ATH-293  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофеварка tefal express, кофеварка френч пресс, мультиварка скороварка moulinex, эльдорадо кофемашины, magic pot мультиварка, спагетти в мультиварке, ремонт аэрогриля ves, неисправности пылесосов, утюг philips 9220, мультиварка куку 1054, десерты в блендере, купить блендер braun mr 6550, пылесосы в гродно, микроволновые печи в москве,  кофемашины verobar">
		<meta name="description" content="кофеварка tefal express Ручной миксер Atlanta ATH-293 черного цвета с 5 скоростями и режимом «турбо», 2 ...">
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
						<a class="photo" href="photos/ac8f90b072b89e29e700b07839541017.jpeg" title="кофеварка tefal express Миксер Atlanta ATH-293"><img src="photos/ac8f90b072b89e29e700b07839541017.jpeg" alt="кофеварка tefal express Миксер Atlanta ATH-293" title="кофеварка tefal express Миксер Atlanta ATH-293 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-redmond-rfp-5390r.php"><img src="photos/eeb9eab6db603b9616a92fc025537c6c.jpeg" alt="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903" title="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903"></a><h2>Кухонный комбайн Redmond  RFP-3903</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-lattea-silverwhite-34975r.php"><img src="photos/6fa7808f592c05532d5148c220952ba1.jpeg" alt="мультиварка скороварка moulinex Эспрессо-кофемашина Melitta Caffeo Lattea Silver-White (4.0009.94)" title="мультиварка скороварка moulinex Эспрессо-кофемашина Melitta Caffeo Lattea Silver-White (4.0009.94)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Lattea Silver-White (4.0009.94)</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3870r.php"><img src="photos/5e475c33aea662be8e01a1f2443fb6c0.jpeg" alt="эльдорадо кофемашины Микроволновая печь Vitek VT-1684" title="эльдорадо кофемашины Микроволновая печь Vitek VT-1684"></a><h2>Микроволновая печь Vitek VT-1684</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофеварка tefal express Миксер Atlanta ATH-293</h1>
						<div class="tb"><p>Цена: от <span class="price">480</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19611.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Ручной миксер Atlanta ATH-293 черного цвета с 5 скоростями и режимом «турбо», 2 насадками (венчик для взбивания и крюки для теста). Он объединяет в себе хорошее качество, современный дизайн, удобство и комфорт. С таким миксером вы откроете для себя много новых разнообразных блюд. Он компактный, поэтому не займет много места на кухне. Имеет 5 скоростей и кнопку для легкого извлечения насадок, а также ручку со специальным нескользящим покрытием. Обладает мощностью 160 Вт. Поставляется с двумя комплектами металлических насадок. Выполнен из пластика.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Компактные размеры <li>Удобная открытая ручка <li>2 комплекта металлических насадок (венчик для взбивания, крюки для теста) <li>Кнопка легкого извлечения насадок <li>5 скоростей плюс турбо <li>Безопасная блокировка насадок <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует европейским и американским нормам безопасности <li>Мощность 160W <li>230V, 50Hz <li>Материал корпуса пластик </li></ul><p><strong>Производитель: США</strong></p> кофеварка tefal express</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/be6b78c2525e9286d015556c4db7013b.jpeg" alt="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO" title="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO"><div class="box" page="elektricheskiy-mikser-krasnyy-bodum-bistro-euro-2740r"><span class="title">magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/b4972945a0247403022f6df03f16440c.jpeg" alt="спагетти в мультиварке Пароварка-блендер Philips Avent 85300" title="спагетти в мультиварке Пароварка-блендер Philips Avent 85300"><div class="box" page="parovarkablender-philips-avent-5600r"><span class="title">спагетти в мультиварке Пароварка-блендер Philips Avent 85300</span><p>от <span class="price">5600</span> руб.</p></div></li>
						<li><img src="photos/076c9c98f1af9b02a64dd68bf22e26cd.jpeg" alt="ремонт аэрогриля ves Пароварка Binatone FS-302 White Blue" title="ремонт аэрогриля ves Пароварка Binatone FS-302 White Blue"><div class="box" page="parovarka-binatone-fs-white-blue-1760r"><span class="title">ремонт аэрогриля ves Пароварка Binatone FS-302 White Blue</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li><img src="photos/d448221fb31de53331e54cfd2a79b68f.jpeg" alt="неисправности пылесосов A&D NP-2000S Порционные весы" title="неисправности пылесосов A&D NP-2000S Порционные весы"><div class="box" page="ad-nps-porcionnye-vesy-4320r"><span class="title">неисправности пылесосов A&D NP-2000S Порционные весы</span><p>от <span class="price">4320</span> руб.</p></div></li>
						<li class="large"><img src="photos/f99ea88369bed621a6594f78c2508e9a.jpeg" alt="утюг philips 9220 Электрическая соковыжималка лимонная Bodum BISTRO 11149-565EURO" title="утюг philips 9220 Электрическая соковыжималка лимонная Bodum BISTRO 11149-565EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-limonnaya-bodum-bistro-euro-3340r"><span class="title">утюг philips 9220 Электрическая соковыжималка лимонная Bodum BISTRO 11149-565EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li class="large"><img src="photos/f12c67c091dc7674e75925e27c6ee910.jpeg" alt="мультиварка куку 1054 Чайник электрический Vitek VT-1101 черный" title="мультиварка куку 1054 Чайник электрический Vitek VT-1101 черный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-chernyy-2150r"><span class="title">мультиварка куку 1054 Чайник электрический Vitek VT-1101 черный</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li class="large"><img src="photos/133af075f6993e048350b753f5c2c798.jpeg" alt="десерты в блендере Электрический чайник Atlanta АТН-727" title="десерты в блендере Электрический чайник Atlanta АТН-727"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r-2"><span class="title">десерты в блендере Электрический чайник Atlanta АТН-727</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/df7a2601f4d7471689f34a2d1cbcf14f.jpeg" alt="купить блендер braun mr 6550 Электрический чайник 1,5л зеленый Bodum BISTRO 11138-565EURO" title="купить блендер braun mr 6550 Электрический чайник 1,5л зеленый Bodum BISTRO 11138-565EURO"><div class="box" page="elektricheskiy-chaynik-l-zelenyy-bodum-bistro-euro-2740r"><span class="title">купить блендер braun mr 6550 Электрический чайник 1,5л зеленый Bodum BISTRO 11138-565EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/759cc36b06e68665280825b9c45b38c7.jpeg" alt="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO" title="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO"><div class="box" page="elektricheskiy-chaynik-l-krasnyy-bodum-bistro-euro-2270r"><span class="title">пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/11c7c6ddf93edcdf0c5e620d5363815f.jpeg" alt="микроволновые печи в москве Пылесос Vitek VT-1844" title="микроволновые печи в москве Пылесос Vitek VT-1844"><div class="box" page="pylesos-vitek-vt-3250r"><span class="title">микроволновые печи в москве Пылесос Vitek VT-1844</span><p>от <span class="price">3250</span> руб.</p></div></li>
						<li><img src="photos/edc4236e3a4947da96211057e15ad9d5.jpeg" alt="держатель для пылесоса Пылесос Vitek VT-1847 красный" title="держатель для пылесоса Пылесос Vitek VT-1847 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-3650r"><span class="title">держатель для пылесоса Пылесос Vitek VT-1847 красный</span><p>от <span class="price">3650</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikser-atlanta-ath-480r.php", 0, -4); if (file_exists("comments/mikser-atlanta-ath-480r.php")) require_once "comments/mikser-atlanta-ath-480r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikser-atlanta-ath-480r.php" method="post" onsubmit="return checkForm(this)">
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