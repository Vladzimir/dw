<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-redmond-rkm-white-1190r.php","умный пылесос");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-redmond-rkm-white-1190r.php", $nick, $comment);
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
		<title>умный пылесос Чайник электрический Redmond  RK-М117 white  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="умный пылесос, dolce gusto кофеварка, magic pot мультиварка, самый дорогой пылесос, мультиварка redmond 4504, мультиварка ярославль, самоочистка аэрогриля, маленькие соковыжималки, хлебопечка panasonic 255 купить, мультиварка акции, микроволновые печи с духовкой, мультиварка мэджик пот, уха в мультиварке, кофемашина philips hd 8745,  аэрогриль vitesse vs 408">
		<meta name="description" content="умный пылесос Электрический чайник RK-М117 нейтрального дизайна легко впишется в любой интерье...">
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
						<a class="photo" href="photos/823ffa497493bf85b62e76ddeebc1296.jpeg" title="умный пылесос Чайник электрический Redmond  RK-М117 white"><img src="photos/823ffa497493bf85b62e76ddeebc1296.jpeg" alt="умный пылесос Чайник электрический Redmond  RK-М117 white" title="умный пылесос Чайник электрический Redmond  RK-М117 white -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-29530r.php"><img src="photos/ce24725d95df3bf470057f25a41297ef.jpeg" alt="dolce gusto кофеварка Автоматическая кофемашина Melitta CAFFEO Lattea" title="dolce gusto кофеварка Автоматическая кофемашина Melitta CAFFEO Lattea"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-mikser-krasnyy-bodum-bistro-euro-2740r.php"><img src="photos/be6b78c2525e9286d015556c4db7013b.jpeg" alt="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO" title="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO"></a><h2>Электрический миксер красный Bodum BISTRO 11151-294EURO</h2></li>
							<li><a href="http://kitchentech.elitno.net/multivarka-moulinex-ce-minute-cook-5850r.php"><img src="photos/8b7adfef9e224f5e6ff3fcdd084f6869.jpeg" alt="самый дорогой пылесос Мультиварка Moulinex CE4000 Minute Cook" title="самый дорогой пылесос Мультиварка Moulinex CE4000 Minute Cook"></a><h2>Мультиварка Moulinex CE4000 Minute Cook</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>умный пылесос Чайник электрический Redmond  RK-М117 white</h1>
						<div class="tb"><p>Цена: от <span class="price">1190</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18654.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник RK-М117 нейтрального дизайна легко впишется в любой интерьер, а его функциональность и удобство, несомненно, придутся Вам по вкусу. Корпус из жаропрочного пластика, спираль из нержавеющей стали, мощность 2000Вт – полтора литра воды вскипит за пару минут, шкала уровня воды, украшение в виде подсветки, удобное хранение шнура, блокировка крышки (можно не бояться облиться кипятком при случайном открытии) – все это делает этот чайник прекрасным решением для любой кухни. </p><p><b>Характеристики:</b></p><ul type=disc><li>Мощность: 2000 Вт; <li>Емкость: 1.7 л; <li>Покрытие нагревательного элемента: нержавеющая сталь; <li>Корпус: пластик; <li>Автоматическое выключение при закипании; <li>Индикация включения; <li>Шкала уровня воды; <li>Подсветка воды; <li>Блокировка крышки; <li>Отсек для шнура 0,75м; <li>Цвет: белый. </li></ul><p><b>Производитель: США</b></p><p><b>Гарантия: 1 год</b></p> умный пылесос</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/696c3eff6d4752e21e651f3d4b34c0a7.jpeg" alt="мультиварка redmond 4504 Мясорубка Redmond RMG-1204" title="мультиварка redmond 4504 Мясорубка Redmond RMG-1204"><div class="box" page="myasorubka-redmond-rmg-3290r"><span class="title">мультиварка redmond 4504 Мясорубка Redmond RMG-1204</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/9b1d673d9b457ad6c9a587ce93c1d42a.jpeg" alt="мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003" title="мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003"><div class="box" page="parovarka-tefal-vitacuisine-compact-vc-3530r"><span class="title">мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003</span><p>от <span class="price">3530</span> руб.</p></div></li>
						<li><img src="photos/948f1a9b44ef51dbbf106577d1753c25.jpeg" alt="самоочистка аэрогриля Соковыжималка" title="самоочистка аэрогриля Соковыжималка"><div class="box" page="sokovyzhimalka-3320r"><span class="title">самоочистка аэрогриля Соковыжималка</span><p>от <span class="price">3320</span> руб.</p></div></li>
						<li><img src="photos/fe37fe3249ac15c2c7299f94675336f3.jpeg" alt="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO" title="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO"><div class="box" page="toster-chernyy-bodum-bistro-euro-3660r"><span class="title">маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li class="large"><img src="photos/0f5208729d1f126a03ea2f6dcc581158.jpeg" alt="хлебопечка panasonic 255 купить Хлебопечка Moulinex OW502430" title="хлебопечка panasonic 255 купить Хлебопечка Moulinex OW502430"><div class="box" page="hlebopechka-moulinex-ow-7500r"><span class="title">хлебопечка panasonic 255 купить Хлебопечка Moulinex OW502430</span><p>от <span class="price">7500</span> руб.</p></div></li>
						<li class="large"><img src="photos/b11b426009f0167e5ff93f5aa64ca56d.jpeg" alt="мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л" title="мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1650r"><span class="title">мультиварка акции Чайник электрический Tefal VitesseS BF66204 1,7 л</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li class="large"><img src="photos/06055c0461eed094ac9207cd105de4ec.jpeg" alt="микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO" title="микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO"><div class="box" page="elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2740r"><span class="title">микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/51ac41098d88811e7ab3241e4fa31a8c.jpeg" alt="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA" title="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aaahcuc-petgaaa-300r"><span class="title">мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/bf1db2ec9a55f45d9ef32e836546d600.jpeg" alt="уха в мультиварке Пылесос моющий Thomas Super 30 S" title="уха в мультиварке Пылесос моющий Thomas Super 30 S"><div class="box" page="pylesos-moyuschiy-thomas-super-s-9020r"><span class="title">уха в мультиварке Пылесос моющий Thomas Super 30 S</span><p>от <span class="price">9020</span> руб.</p></div></li>
						<li><img src="photos/daa26c20552b4c54039ad44aa7ab957b.jpeg" alt="кофемашина philips hd 8745 Пылесос Thomas Inox 1530" title="кофемашина philips hd 8745 Пылесос Thomas Inox 1530"><div class="box" page="pylesos-thomas-inox-6310r"><span class="title">кофемашина philips hd 8745 Пылесос Thomas Inox 1530</span><p>от <span class="price">6310</span> руб.</p></div></li>
						<li><img src="photos/a24b7e04e12ea5cc75354fc2b5ebd18d.jpeg" alt="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный" title="фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный"><div class="box" page="pylesos-vitek-vt-chernyy-2600r"><span class="title">фильтры для моющего пылесоса Пылесос Vitek VT-1809 черный</span><p>от <span class="price">2600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-redmond-rkm-white-1190r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-redmond-rkm-white-1190r.php")) require_once "comments/chaynik-elektricheskiy-redmond-rkm-white-1190r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-redmond-rkm-white-1190r.php" method="post" onsubmit="return checkForm(this)">
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