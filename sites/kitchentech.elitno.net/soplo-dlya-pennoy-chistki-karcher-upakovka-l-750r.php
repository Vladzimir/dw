<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r.php","мультиварки в петербурге");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r.php", $nick, $comment);
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
		<title>мультиварки в петербурге Сопло для пенной чистки Karcher (упаковка 0,6 л)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мультиварки в петербурге, мешки для пылесоса vax, гречневая каша в мультиварке, где купить утюг, ремонт пылесосов бош, венчики для миксера, аэрогриль pag 1205d, бамбуковая пароварка, кофемашины оптом, десерты в блендере, купить лопатку для хлебопечки, мультиварка скороварка land life, кофеварка форум, сколько стоит соковыжималка,  бытовая техника пылесосы">
		<meta name="description" content="мультиварки в петербурге Вашему вниманию предлагается насадка для бесконтактного очищения, которая в танд...">
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
						<a class="photo" href="photos/a72d69a17b01ae0c39e3992b04fd72d5.jpeg" title="мультиварки в петербурге Сопло для пенной чистки Karcher (упаковка 0,6 л)"><img src="photos/a72d69a17b01ae0c39e3992b04fd72d5.jpeg" alt="мультиварки в петербурге Сопло для пенной чистки Karcher (упаковка 0,6 л)" title="мультиварки в петербурге Сопло для пенной чистки Karcher (упаковка 0,6 л) -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-2770r.php"><img src="photos/4a49eabd132fa073a575c3edfbe7b80b.jpeg" alt="мешки для пылесоса vax Микроволновая печь Vitek VT-1681" title="мешки для пылесоса vax Микроволновая печь Vitek VT-1681"></a><h2>Микроволновая печь Vitek VT-1681</h2></li>
							<li><a href="http://kitchentech.elitno.net/morozhenica-montiss-kimm-l-1900r.php"><img src="photos/8472253b416100a0ed111bb9484a2b5a.jpeg" alt="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л" title="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л"></a><h2>Мороженица Montiss KIM5405M 1,1 л</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-vitek-vt-3000r.php"><img src="photos/96e6df28f6faf8e98beab83007c46a57.jpeg" alt="где купить утюг Мясорубка электрическая Vitek VT-1673" title="где купить утюг Мясорубка электрическая Vitek VT-1673"></a><h2>Мясорубка электрическая Vitek VT-1673</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мультиварки в петербурге Сопло для пенной чистки Karcher (упаковка 0,6 л)</h1>
						<div class="tb"><p>Цена: от <span class="price">750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_4222.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вашему вниманию предлагается насадка для бесконтактного очищения, которая в тандеме с аппаратом высокого давления позволяет наносить пенные моющие вещества на различные поверхности. Пенное сопло можно смело использовать при мойке грузовых и легковых машин, мотоциклов, велосипедов, бассейнов, садовых дорожек и дачного инвентаря. </p><p>Применяя это устройство, вы сократите время на очистку объекта, сэкономите моющее средство и доберетесь до самых труднодоступных участков. Пенное сопло подходит для всех бытовых минимоек Керхер.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Высокая скорость нанесения пены </li><li>Возможность изменять угол распыления от 0 до 40 градусов </li><li>Объем контейнера: 0,6 л </li><li>Возможность дозировки средства </li><li>Вращающееся сопло для регулировки уровня распыления </li><li>Прозрачный контейнер</li></ul><p><strong>Производитель: </strong>Karcher (Германия)</p> мультиварки в петербурге</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5150ac82725ad8b6206019fefda496f4.jpeg" alt="ремонт пылесосов бош A&D NP-20KS Порционные весы" title="ремонт пылесосов бош A&D NP-20KS Порционные весы"><div class="box"><a href="http://kitchentech.elitno.net/ad-npks-porcionnye-vesy-7150r.php"><h3 class="title">ремонт пылесосов бош A&D NP-20KS Порционные весы</h3><p>от <span class="price">7150</span> руб.</p></a></div></li>
						<li><img src="photos/8be60bf8ecb8c08e6df4d6b339b40b58.jpeg" alt="венчики для миксера Чайник электрический Atlanta ATH-759" title="венчики для миксера Чайник электрический Atlanta ATH-759"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-990r-2"><span class="title">венчики для миксера Чайник электрический Atlanta ATH-759</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/823ffa497493bf85b62e76ddeebc1296.jpeg" alt="аэрогриль pag 1205d Чайник электрический Redmond  RK-М117 white" title="аэрогриль pag 1205d Чайник электрический Redmond  RK-М117 white"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-white-1190r"><span class="title">аэрогриль pag 1205d Чайник электрический Redmond  RK-М117 white</span><p>от <span class="price">1190</span> руб.</p></div></li>
						<li><img src="photos/3e5de65e23113a4dedb018c90159e3df.jpeg" alt="бамбуковая пароварка Чайник электрический  Vitesse VS-115 1,7л стальной" title="бамбуковая пароварка Чайник электрический  Vitesse VS-115 1,7л стальной"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-stalnoy-1360r"><span class="title">бамбуковая пароварка Чайник электрический  Vitesse VS-115 1,7л стальной</span><p>от <span class="price">1360</span> руб.</p></div></li>
						<li class="large"><img src="photos/78965fa03e391297ff5141e1ed5d2961.jpeg" alt="кофемашины оптом Электрический чайник Atlanta АТН-721" title="кофемашины оптом Электрический чайник Atlanta АТН-721"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r"><span class="title">кофемашины оптом Электрический чайник Atlanta АТН-721</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li class="large"><img src="photos/133af075f6993e048350b753f5c2c798.jpeg" alt="десерты в блендере Электрический чайник Atlanta АТН-727" title="десерты в блендере Электрический чайник Atlanta АТН-727"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r-2"><span class="title">десерты в блендере Электрический чайник Atlanta АТН-727</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li class="large"><img src="photos/ab56fe42ec3af82144d9f5eb1f80eb4c.jpeg" alt="купить лопатку для хлебопечки Мини весы Tangent KP-103" title="купить лопатку для хлебопечки Мини весы Tangent KP-103"><div class="box" page="mini-vesy-tangent-kp-1200r"><span class="title">купить лопатку для хлебопечки Мини весы Tangent KP-103</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/351be0717cadb3b074e20c4a4dccbf50.jpeg" alt="мультиварка скороварка land life Мини весы Momert 6000" title="мультиварка скороварка land life Мини весы Momert 6000"><div class="box" page="mini-vesy-momert-1600r"><span class="title">мультиварка скороварка land life Мини весы Momert 6000</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/e53e12ffaa33b8893df2fec4f59e9123.jpeg" alt="кофеварка форум Пылесос Vitek VT-1838" title="кофеварка форум Пылесос Vitek VT-1838"><div class="box" page="pylesos-vitek-vt-3400r"><span class="title">кофеварка форум Пылесос Vitek VT-1838</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li><img src="photos/b82293cd9bb86384904268699e41b0f9.jpeg" alt="сколько стоит соковыжималка Пылесос Thomas Power Pack 1630 Se" title="сколько стоит соковыжималка Пылесос Thomas Power Pack 1630 Se"><div class="box" page="pylesos-thomas-power-pack-se-7010r"><span class="title">сколько стоит соковыжималка Пылесос Thomas Power Pack 1630 Se</span><p>от <span class="price">7010</span> руб.</p></div></li>
						<li><img src="photos/daa26c20552b4c54039ad44aa7ab957b.jpeg" alt="кофемашина philips hd 8745 Пылесос Thomas Inox 1530" title="кофемашина philips hd 8745 Пылесос Thomas Inox 1530"><div class="box" page="pylesos-thomas-inox-6310r"><span class="title">кофемашина philips hd 8745 Пылесос Thomas Inox 1530</span><p>от <span class="price">6310</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r.php", 0, -4); if (file_exists("comments/soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r.php")) require_once "comments/soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="soplo-dlya-pennoy-chistki-karcher-upakovka-l-750r.php" method="post" onsubmit="return checkForm(this)">
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