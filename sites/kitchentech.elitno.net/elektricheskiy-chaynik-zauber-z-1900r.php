<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-zauber-z-1900r.php","пылесосы с аквафильтром thomas");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-zauber-z-1900r.php", $nick, $comment);
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
		<title>пылесосы с аквафильтром thomas Электрический чайник Zauber Z-370  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="пылесосы с аквафильтром thomas, продажа моющих пылесосов, стоимость соковыжималки, контрольная закупка пылесос, magic pot мультиварка, пакеты для пылесоса, схема пылесоса самсунг, блендер braun mr 530 ca, мультиварка панасоник sr tmh18, курица в микроволновой печи, карандаш для чистки утюга, курица с грибами в мультиварке, магазин запчастей для мясорубок, диски для кухонного комбайна,  фильтры для моющего пылесоса">
		<meta name="description" content="пылесосы с аквафильтром thomas Чайник Z-370 от шведской компании Zauber имеет выполнен в слегка утончёно строго...">
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
						<a class="photo" href="photos/663e4c317fe5187d7f962aa4403e4d2c.jpeg" title="пылесосы с аквафильтром thomas Электрический чайник Zauber Z-370"><img src="photos/663e4c317fe5187d7f962aa4403e4d2c.jpeg" alt="пылесосы с аквафильтром thomas Электрический чайник Zauber Z-370" title="пылесосы с аквафильтром thomas Электрический чайник Zauber Z-370 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-bar-44180r.php"><img src="photos/c9a7a5b3ad41669087cce987bbc510ac.jpeg" alt="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)" title="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-550r.php"><img src="photos/ccf51377f0419f271513b485782fac2b.jpeg" alt="стоимость соковыжималки Кофемолка Maxima MCG-1602" title="стоимость соковыжималки Кофемолка Maxima MCG-1602"></a><h2>Кофемолка Maxima MCG-1602</h2></li>
							<li><a href="http://kitchentech.elitno.net/bodum-bistro-euro-elektricheskiy-mikser-2740r.php"><img src="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" alt="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер" title="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер"></a><h2>Bodum BISTRO 11151-01EURO Электрический миксер</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>пылесосы с аквафильтром thomas Электрический чайник Zauber Z-370</h1>
						<div class="tb"><p>Цена: от <span class="price">1900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_17275.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Чайник Z-370 от шведской компании Zauber имеет выполнен в слегка утончёно строгом стиле. Пользуясь им, вы никогда не обожжетесь о корпус, так как благодаря вакуумной системе он не нагревается при закипании. Поверхности соприкосновения с водой выполнены из пищевой гигиенической стали Food-Friend.</p><p><b>Технические характеристики:</b></p><ul><li>Объём: 1,5 литра</li><li>Потребляемая мощность: 2000 Ватт</li><li>Материал корпуса: Алюминий серебристого цвета</li><li>Тип нагревательного элемента: Скрытый дисковый нагреватель</li><li>Шкала уровня воды: Есть</li><li>Автоотключение: Есть</li></ul><p><b>Особенности:</b></p><ul><li>Запатентованный механизм открывания</li><li>Съемный фильтр от накипи</li><li>Система шумоподавления</li><li>Установка на подставку 360°</li><li>Пищевая гигиеническая сталь Food-Friend</li></ul><p><b>Производитель:</b>Швеция</p><p><b>Гарантия:</b>25 месяцев</p> пылесосы с аквафильтром thomas</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/be6b78c2525e9286d015556c4db7013b.jpeg" alt="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO" title="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO"><div class="box" page="elektricheskiy-mikser-krasnyy-bodum-bistro-euro-2740r"><span class="title">magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/2cdb40f493d1b8360833641d1048d5de.jpeg" alt="пакеты для пылесоса Мясорубка Braun G1300 MN WH" title="пакеты для пылесоса Мясорубка Braun G1300 MN WH"><div class="box" page="myasorubka-braun-g-mn-wh-4980r"><span class="title">пакеты для пылесоса Мясорубка Braun G1300 MN WH</span><p>от <span class="price">4980</span> руб.</p></div></li>
						<li><img src="photos/d5827497ec49ae3fe3cb85705f428a83.jpeg" alt="схема пылесоса самсунг Соковыжималка Atlanta ATH-311" title="схема пылесоса самсунг Соковыжималка Atlanta ATH-311"><div class="box" page="sokovyzhimalka-atlanta-ath-1060r"><span class="title">схема пылесоса самсунг Соковыжималка Atlanta ATH-311</span><p>от <span class="price">1060</span> руб.</p></div></li>
						<li><img src="photos/aca42b878e4277b1730672f4f845a597.jpeg" alt="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black" title="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black"><div class="box" page="chaynik-elektricheskiy-binatone-nk-black-1200r"><span class="title">блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/85911164b0086dda5108661c861dc16a.jpeg" alt="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л" title="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л"><div class="box" page="chaynik-elektricheskiy-tefal-delfina-be-l-950r"><span class="title">мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/79f71cb685066d8f2b6475b4d2f70156.jpeg" alt="курица в микроволновой печи Чайник электрический Atlanta ATH-757" title="курица в микроволновой печи Чайник электрический Atlanta ATH-757"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-990r"><span class="title">курица в микроволновой печи Чайник электрический Atlanta ATH-757</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/ab7fd4cacdc88b690decc0d20bd53770.jpeg" alt="карандаш для чистки утюга Чайник-термос Atlanta АТН-768" title="карандаш для чистки утюга Чайник-термос Atlanta АТН-768"><div class="box" page="chayniktermos-atlanta-atn-1700r"><span class="title">карандаш для чистки утюга Чайник-термос Atlanta АТН-768</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li><img src="photos/d5bfaa3b5f694911004b112b3792a6d5.jpeg" alt="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130" title="курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130"><div class="box" page="komplekt-filtrovmeshkov-karcher-480r"><span class="title">курица с грибами в мультиварке Комплект фильтров-мешков Karcher 6.959-130</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/ed6cccd8ae597a978fe91c415f9d06d3.jpeg" alt="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)" title="магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-135r"><span class="title">магазин запчастей для мясорубок Фильтры для пылесоса Vitek VT-1855 (VT-1825)</span><p>от <span class="price">135</span> руб.</p></div></li>
						<li><img src="photos/6eaac51c54fbf44dce471193ec6d5c18.jpeg" alt="диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail" title="диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail"><div class="box" page="nabor-dlya-udaleniya-pyaten-s-kovrovyh-pokrytiy-i-myagkoy-mebeli-dyson-party-cleanup-kit-ir-cl-retail-2490r"><span class="title">диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/59a8dfc6750ee21e49e7e4126ec09217.jpeg" alt="измельчитель сучьев Пылесос Dyson all floors DC 25" title="измельчитель сучьев Пылесос Dyson all floors DC 25"><div class="box" page="pylesos-dyson-all-floors-dc-28990r"><span class="title">измельчитель сучьев Пылесос Dyson all floors DC 25</span><p>от <span class="price">28990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-zauber-z-1900r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-zauber-z-1900r.php")) require_once "comments/elektricheskiy-chaynik-zauber-z-1900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-zauber-z-1900r.php" method="post" onsubmit="return checkForm(this)">
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