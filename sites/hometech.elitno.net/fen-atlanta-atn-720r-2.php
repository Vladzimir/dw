<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atn-720r-2.php","rowenta ep эпилятор");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atn-720r-2.php", $nick, $comment);
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
		<title>rowenta ep эпилятор Фен Atlanta АТН-865  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="rowenta ep эпилятор, аппарат для вакуумного массажа, предлагаю массаж, зеркала содержание, таро зеркало судьбы, зеркала passat b5, фен щетка с насадками, солярий для дома, массаж в гомеле, боковое зеркало шкода, массаж лица соболь, зеркало toyota corolla, сонник зеркало разбитое, черное зеркало 2 ключ,  зеркала толщина">
		<meta name="description" content="rowenta ep эпилятор Фен Atlanta АТН-865 – стильный и доступный прибор голубого цвета для сушки волос...">
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
						<a class="photo" href="photos/73724a05bae5cd52f1287e49c524aba2.jpeg" title="rowenta ep эпилятор Фен Atlanta АТН-865"><img src="photos/73724a05bae5cd52f1287e49c524aba2.jpeg" alt="rowenta ep эпилятор Фен Atlanta АТН-865" title="rowenta ep эпилятор Фен Atlanta АТН-865 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/glamurnaya-palochka-dlya-zavivki-volos-corioliss-glamour-wand-3080r.php"><img src="photos/5c5fbc08f4578545307c561d516fe2c8.jpeg" alt="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand" title="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand"></a><h2>Гламурная палочка для завивки волос Corioliss Glamour Wand</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1430r.php"><img src="photos/ebe73366b541ce25ab906d91486c2572.jpeg" alt="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм" title="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм"></a><h2>Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-2500r.php"><img src="photos/752941af4eaf49d0a8ab980390b78c28.jpeg" alt="зеркала содержание Зеркало  Beurer BS 69 косметическое" title="зеркала содержание Зеркало  Beurer BS 69 косметическое"></a><h2>Зеркало  Beurer BS 69 косметическое</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>rowenta ep эпилятор Фен Atlanta АТН-865</h1>
						<div class="tb"><p>Цена: от <span class="price">720</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19829.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-865 – стильный и доступный прибор голубого цвета для сушки волос мощностью 1600 Вт, со складывающейся ручкой. Имеет два уровня интенсивности сушки и шнур с защитой от выкручивания. Не скользит в руках, благодаря специальному покрытию. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Складывающаяся ручка; <li>Защита от перегрева; <li>Два уровня интенсивности сушки; <li>Специальное противоскользящие покрытие; <li>Соответствует американским и европейским нормам безопасности; <li>Мощность 1600W; <li>230V, 50Hz <li>12 x 7.5 x 18 см </li></ul><p><strong>Производитель: США</strong></p> rowenta ep эпилятор</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9f4d1e4a07cba1591e2c0c9fd27f1538.jpeg" alt="таро зеркало судьбы Ирригатор полости рта Waterpik WP-360" title="таро зеркало судьбы Ирригатор полости рта Waterpik WP-360"><div class="box" page="irrigator-polosti-rta-waterpik-wp-2700r"><span class="title">таро зеркало судьбы Ирригатор полости рта Waterpik WP-360</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/4ecc47a27288157fda50f0e8dd0a17e6.jpeg" alt="зеркала passat b5 Маникюрно-педикюрный набор Beurer MP60 (3 насадки)" title="зеркала passat b5 Маникюрно-педикюрный набор Beurer MP60 (3 насадки)"><div class="box" page="manikyurnopedikyurnyy-nabor-beurer-mp-nasadki-1750r"><span class="title">зеркала passat b5 Маникюрно-педикюрный набор Beurer MP60 (3 насадки)</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/60233d887bfea99df519473001b1958f.jpeg" alt="фен щетка с насадками Валик треугольный L66H25 USM-008" title="фен щетка с насадками Валик треугольный L66H25 USM-008"><div class="box" page="valik-treugolnyy-lh-usm-1800r"><span class="title">фен щетка с насадками Валик треугольный L66H25 USM-008</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li><img src="photos/ce6a955d13728ae3fcdf117ddcdd8d60.jpeg" alt="солярий для дома Массажное кресло Yamaguchi YA-2500" title="солярий для дома Массажное кресло Yamaguchi YA-2500"><div class="box" page="massazhnoe-kreslo-yamaguchi-ya-210000r"><span class="title">солярий для дома Массажное кресло Yamaguchi YA-2500</span><p>от <span class="price">210000</span> руб.</p></div></li>
						<li class="large"><img src="photos/cccc1362e9d5a3d5ef09f8d62f196587.jpeg" alt="массаж в гомеле Миостимулятор для мышц живота Beurer EM 35" title="массаж в гомеле Миостимулятор для мышц живота Beurer EM 35"><div class="box" page="miostimulyator-dlya-myshc-zhivota-beurer-em-2000r"><span class="title">массаж в гомеле Миостимулятор для мышц живота Beurer EM 35</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/e8ce6906fe484bd61dc8b90eb5a3df4a.jpeg" alt="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S" title="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S"><div class="box" page="poyasmiostimulyator-slendertone-flex-s-1500r"><span class="title">боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/a96ae3566c75021eb37743cc8caf6ff5.jpeg" alt="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5" title="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5"><div class="box" page="applikator-lyapko-valik-licevoy-720r"><span class="title">массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/db98c04ce84416d39676eb45e61bf9d6.jpeg" alt="зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования" title="зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования"><div class="box" page="fotoepilyator-rio-ipl-dlya-domashnego-ispolzovaniya-26900r"><span class="title">зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования</span><p>от <span class="price">26900</span> руб.</p></div></li>
						<li><img src="photos/e69da6f2452895f2eb5bd226ad7e5f3c.jpeg" alt="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord" title="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord"><div class="box" page="fen-valera-swiss-turbo-rc-rotocord-2920r"><span class="title">сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord</span><p>от <span class="price">2920</span> руб.</p></div></li>
						<li><img src="photos/ab76ce58be7faa3b2bb322663097fd26.jpeg" alt="черное зеркало 2 ключ Фен Atlanta АТН-883" title="черное зеркало 2 ключ Фен Atlanta АТН-883"><div class="box" page="fen-atlanta-atn-380r"><span class="title">черное зеркало 2 ключ Фен Atlanta АТН-883</span><p>от <span class="price">380</span> руб.</p></div></li>
						<li><img src="photos/df60e9368f4af47e5694b1e1f79f6d7a.jpeg" alt="массаж при астме Фен Vitesse VS-943" title="массаж при астме Фен Vitesse VS-943"><div class="box" page="fen-vitesse-vs-640r"><span class="title">массаж при астме Фен Vitesse VS-943</span><p>от <span class="price">640</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atn-720r-2.php", 0, -4); if (file_exists("comments/fen-atlanta-atn-720r-2.php")) require_once "comments/fen-atlanta-atn-720r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atn-720r-2.php" method="post" onsubmit="return checkForm(this)">
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