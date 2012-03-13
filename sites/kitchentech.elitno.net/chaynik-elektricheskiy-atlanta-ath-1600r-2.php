<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-atlanta-ath-1600r-2.php","хлебопечка украина");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-atlanta-ath-1600r-2.php", $nick, $comment);
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
		<title>хлебопечка украина Чайник электрический Atlanta ATH-752  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка украина, пылесос tomas twin, где отремонтировать утюг, стоимость соковыжималки, спагетти в мультиварке, как приготовить в аэрогриле овощи, кофемашина krups dolce gusto, делонги кофемашина примадонна, хлебопечки донецк, купить капельную кофеварку, форум микроволновая печь, тостер philips hd 2586, посоветуйте хлебопечку, тесто в хлебопечке kenwood,  ремонт хлебопечки мулинекс">
		<meta name="description" content="хлебопечка украина Набор из электрического чайника Atlanta ATH-752 объемом 1литр, мощностью 1000 Вт...">
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
						<a class="photo" href="photos/f529cddb8b0b7bbdfe7eea8e3d43b5b1.jpeg" title="хлебопечка украина Чайник электрический Atlanta ATH-752"><img src="photos/f529cddb8b0b7bbdfe7eea8e3d43b5b1.jpeg" alt="хлебопечка украина Чайник электрический Atlanta ATH-752" title="хлебопечка украина Чайник электрический Atlanta ATH-752 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-ddg-click-and-mix-2900r.php"><img src="photos/795ef5ec8b21fcb23efce51ba4b9959a.jpeg" alt="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix" title="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix"></a><h2>Блендер погружной Moulinex DD406G42 Click and Mix</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-processor-redmond-rfp-2990r.php"><img src="photos/470cf0a1bfd5b3c4e3890030dcd4cf8d.jpeg" alt="где отремонтировать утюг Кухонный процессор Redmond  RFP-3901" title="где отремонтировать утюг Кухонный процессор Redmond  RFP-3901"></a><h2>Кухонный процессор Redmond  RFP-3901</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-550r.php"><img src="photos/ccf51377f0419f271513b485782fac2b.jpeg" alt="стоимость соковыжималки Кофемолка Maxima MCG-1602" title="стоимость соковыжималки Кофемолка Maxima MCG-1602"></a><h2>Кофемолка Maxima MCG-1602</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка украина Чайник электрический Atlanta ATH-752</h1>
						<div class="tb"><p>Цена: от <span class="price">1600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18118.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Набор из электрического чайника Atlanta ATH-752 объемом 1литр, мощностью 1000 Вт и чайника для заваривания из термостойкого стекла. Электрический чайник имеет закрытую спираль из нержавеющей стали и фильтр от накипи. Абсолютно безопасен: выключается при закипании и не включается при отсутствии воды. Заварной керамический чайник имеет функцию подогрева.</p><p><b>Характеристики:</b></p><ul type=disc><li>В комплекте: электрический чайник и заварной чайник <li>Объем: 1 л <li>Мощность: 1000 Вт <li>Нагревательный элемент: закрытая спираль <li>Блокировка включения без воды <li>Автоматическое выключение </li></ul><p><b>Производитель: Китай</b></p> хлебопечка украина</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b4972945a0247403022f6df03f16440c.jpeg" alt="спагетти в мультиварке Пароварка-блендер Philips Avent 85300" title="спагетти в мультиварке Пароварка-блендер Philips Avent 85300"><div class="box" page="parovarkablender-philips-avent-5600r"><span class="title">спагетти в мультиварке Пароварка-блендер Philips Avent 85300</span><p>от <span class="price">5600</span> руб.</p></div></li>
						<li><img src="photos/86f0983e51433a2aeee203a14fbe12b2.jpeg" alt="как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг" title="как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг"><div class="box" page="ad-sfkc-torgovye-vesy-do-kg-10800r"><span class="title">как приготовить в аэрогриле овощи A&D SF-15KC Торговые весы до 15кг</span><p>от <span class="price">10800</span> руб.</p></div></li>
						<li><img src="photos/10045e221774030a9f06ef65dc2f63de.jpeg" alt="кофемашина krups dolce gusto Фритюрница Tefal Minute snack FF1024" title="кофемашина krups dolce gusto Фритюрница Tefal Minute snack FF1024"><div class="box" page="frityurnica-tefal-minute-snack-ff-2220r"><span class="title">кофемашина krups dolce gusto Фритюрница Tefal Minute snack FF1024</span><p>от <span class="price">2220</span> руб.</p></div></li>
						<li><img src="photos/46a5120709bf99f581bc7ea7569bd649.png" alt="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902" title="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902"><div class="box" page="hlebopech-redmond-rbmm-3990r"><span class="title">делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li class="large"><img src="photos/9fa2c66d96aa7d709453ef3a635c60c2.jpeg" alt="хлебопечки донецк Чайник электрический Moulinex BY5200 2 л" title="хлебопечки донецк Чайник электрический Moulinex BY5200 2 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-2650r"><span class="title">хлебопечки донецк Чайник электрический Moulinex BY5200 2 л</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/65194d520ec7c4edb8d9ad44bcaa26a1.jpeg" alt="купить капельную кофеварку Чайник электрический Maxima MК-105" title="купить капельную кофеварку Чайник электрический Maxima MК-105"><div class="box" page="chaynik-elektricheskiy-maxima-mk-550r"><span class="title">купить капельную кофеварку Чайник электрический Maxima MК-105</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li class="large"><img src="photos/b4a95c8a4ccd80ea8dd5b10c9fcfd32c.jpeg" alt="форум микроволновая печь Чайник электрический Maxima MК-112" title="форум микроволновая печь Чайник электрический Maxima MК-112"><div class="box" page="chaynik-elektricheskiy-maxima-mk-790r"><span class="title">форум микроволновая печь Чайник электрический Maxima MК-112</span><p>от <span class="price">790</span> руб.</p></div></li>
						<li><img src="photos/90ff0542b35952759822563a08374b1f.jpeg" alt="тостер philips hd 2586 Чайник электрический Maxima MК- M191 (в цвете)" title="тостер philips hd 2586 Чайник электрический Maxima MК- M191 (в цвете)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-v-cvete-990r"><span class="title">тостер philips hd 2586 Чайник электрический Maxima MК- M191 (в цвете)</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/0b3cd91064942c75434bb396eaa4e0d2.jpeg" alt="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический" title="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-1990r"><span class="title">посоветуйте хлебопечку Redmond RK-M121D Чайник электрический</span><p>от <span class="price">1990</span> руб.</p></div></li>
						<li><img src="photos/4c770d02fca0640e0452b9df7c46a9e0.jpeg" alt="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)" title="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbshaah-1550r"><span class="title">тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/94de14730b416ab6939a25c5af76e14e.jpeg" alt="пылесос thomas genius s2 Парогенератор Lelit PS11N" title="пылесос thomas genius s2 Парогенератор Lelit PS11N"><div class="box" page="parogenerator-lelit-psn-12000r"><span class="title">пылесос thomas genius s2 Парогенератор Lelit PS11N</span><p>от <span class="price">12000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-atlanta-ath-1600r-2.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-atlanta-ath-1600r-2.php")) require_once "comments/chaynik-elektricheskiy-atlanta-ath-1600r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-atlanta-ath-1600r-2.php" method="post" onsubmit="return checkForm(this)">
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