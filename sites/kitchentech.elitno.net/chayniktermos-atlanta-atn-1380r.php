<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chayniktermos-atlanta-atn-1380r.php","соковыжималка журавинка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chayniktermos-atlanta-atn-1380r.php", $nick, $comment);
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
		<title>соковыжималка журавинка Чайник-термос  Atlanta АТН-765  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="соковыжималка журавинка, пылесос samsung vc 5853, микроволновые печи liberton, продажа моющих пылесосов, выбор кофемашины, пылесос с водяным фильтром samsung, пакеты для пылесоса, мультиварка redmond 4504, приготовление теста в хлебопечке, мультиварка панасоник sr tmh18, измерение электромагнитного излучения, микроволновая печь saturn, кофеварка полуавтомат, пароварка tefal vc 1016,  диски для кухонного комбайна">
		<meta name="description" content="соковыжималка журавинка Чайник-термос Atlanta АТН-765 – функциональный и стильный кухонный прибор, предн...">
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
						<a class="photo" href="photos/1e8cb522c5d55835b46dcc4fc497881b.jpeg" title="соковыжималка журавинка Чайник-термос  Atlanta АТН-765"><img src="photos/1e8cb522c5d55835b46dcc4fc497881b.jpeg" alt="соковыжималка журавинка Чайник-термос  Atlanta АТН-765" title="соковыжималка журавинка Чайник-термос  Atlanta АТН-765 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhbm-chernyy-3790r.php"><img src="photos/3c3fb3bc3e413c2b55272e4aa6c67fdc.jpeg" alt="пылесос samsung vc 5853 Блендер Redmond RHB-M2904 (черный)" title="пылесос samsung vc 5853 Блендер Redmond RHB-M2904 (черный)"></a><h2>Блендер Redmond RHB-M2904 (черный)</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-zelenyy-3780r.php"><img src="photos/3526059781ecc20c6df37db0e64d10f4.jpeg" alt="микроволновые печи liberton Электрический блендер с аксессуарами Bodum BISTRO K11179-565EURO зеленый" title="микроволновые печи liberton Электрический блендер с аксессуарами Bodum BISTRO K11179-565EURO зеленый"></a><h2>Электрический блендер с аксессуарами Bodum BISTRO K11179-565EURO зеленый</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-bar-44180r.php"><img src="photos/c9a7a5b3ad41669087cce987bbc510ac.jpeg" alt="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)" title="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>соковыжималка журавинка Чайник-термос  Atlanta АТН-765</h1>
						<div class="tb"><p>Цена: от <span class="price">1380</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20012.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Чайник-термос Atlanta АТН-765 – функциональный и стильный кухонный прибор, предназначенный для кипячения и нагревания воды. Его мощность составляет 800 Вт при объеме 2,8 л. Есть функция автоматической и ручной подачи воды. Используется защищенный закрытый нагревательный элемент, который гораздо проще мыть, чем открытую спираль. Безопасен, т. к. имеет защиту от перегрева, а также блокировку включения без воды. Установлена шкала уровня воды и индикатор работы. Соответствует европейским и американским нормам безопасности. Изделие сертифицировано Госстандартом РФ.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Функция автоматической подачи воды <li>Функция автоматического подогрева <li>Шкала уровня воды <li>Автоматическое отключение при закипании <li>Защита от перегрева без воды <li>Индикатор работы <li>Быстрое закипание <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует Европейским нормам безопасности <li>Емкость 2,8 литра <li>Мощность 800W <li>230V, 50Hz <li>27 x 27 x 28 см </li></ul><p><strong>Производитель: США</strong></p> соковыжималка журавинка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/4f2572ea69a163b235386a6893a52b4a.jpeg" alt="выбор кофемашины Прибор для вакуумной упаковки Vacuum Sealer 024V" title="выбор кофемашины Прибор для вакуумной упаковки Vacuum Sealer 024V"><div class="box" page="pribor-dlya-vakuumnoy-upakovki-vacuum-sealer-v-1100r"><span class="title">выбор кофемашины Прибор для вакуумной упаковки Vacuum Sealer 024V</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/50ba0f1ba21fa51f038f164ecd16fe2c.jpeg" alt="пылесос с водяным фильтром samsung Мультиварка электрическая ATLANTA АТН-592" title="пылесос с водяным фильтром samsung Мультиварка электрическая ATLANTA АТН-592"><div class="box" page="multivarka-elektricheskaya-atlanta-atn-3490r"><span class="title">пылесос с водяным фильтром samsung Мультиварка электрическая ATLANTA АТН-592</span><p>от <span class="price">3490</span> руб.</p></div></li>
						<li><img src="photos/2cdb40f493d1b8360833641d1048d5de.jpeg" alt="пакеты для пылесоса Мясорубка Braun G1300 MN WH" title="пакеты для пылесоса Мясорубка Braun G1300 MN WH"><div class="box" page="myasorubka-braun-g-mn-wh-4980r"><span class="title">пакеты для пылесоса Мясорубка Braun G1300 MN WH</span><p>от <span class="price">4980</span> руб.</p></div></li>
						<li><img src="photos/696c3eff6d4752e21e651f3d4b34c0a7.jpeg" alt="мультиварка redmond 4504 Мясорубка Redmond RMG-1204" title="мультиварка redmond 4504 Мясорубка Redmond RMG-1204"><div class="box" page="myasorubka-redmond-rmg-3290r"><span class="title">мультиварка redmond 4504 Мясорубка Redmond RMG-1204</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/d22138cc84c807c5e3a9b5e6c25af3e9.jpeg" alt="приготовление теста в хлебопечке Сэндвич-тостер Redmond RSM-M1402" title="приготовление теста в хлебопечке Сэндвич-тостер Redmond RSM-M1402"><div class="box" page="sendvichtoster-redmond-rsmm-1090r"><span class="title">приготовление теста в хлебопечке Сэндвич-тостер Redmond RSM-M1402</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li class="large"><img src="photos/85911164b0086dda5108661c861dc16a.jpeg" alt="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л" title="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л"><div class="box" page="chaynik-elektricheskiy-tefal-delfina-be-l-950r"><span class="title">мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/663e4c317fe5187d7f962aa4403e4d2c.jpeg" alt="измерение электромагнитного излучения Электрический чайник Zauber Z-370" title="измерение электромагнитного излучения Электрический чайник Zauber Z-370"><div class="box" page="elektricheskiy-chaynik-zauber-z-1900r"><span class="title">измерение электромагнитного излучения Электрический чайник Zauber Z-370</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/2e45225f75584b99ef16cc23171266ef.jpeg" alt="микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л" title="микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1740r"><span class="title">микроволновая печь saturn Чайник электрический  Vitesse VS-132 1,7 л</span><p>от <span class="price">1740</span> руб.</p></div></li>
						<li><img src="photos/8964576110671ffcda667fca45b4c191.jpeg" alt="кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л" title="кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1560r"><span class="title">кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л</span><p>от <span class="price">1560</span> руб.</p></div></li>
						<li><img src="photos/59caa0f57be012636d82040c68bfc641.jpeg" alt="пароварка tefal vc 1016 Батарейка GP Batteries Super alkaline LR6 15A-BC2" title="пароварка tefal vc 1016 Батарейка GP Batteries Super alkaline LR6 15A-BC2"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-45r"><span class="title">пароварка tefal vc 1016 Батарейка GP Batteries Super alkaline LR6 15A-BC2</span><p>от <span class="price">45</span> руб.</p></div></li>
						<li><img src="photos/df4499dd6fe2786e58841593ed771f8f.jpeg" alt="мешки пылесборники для пылесосов Моющий концентрат Thomas Profloor 1 л 790-009" title="мешки пылесборники для пылесосов Моющий концентрат Thomas Profloor 1 л 790-009"><div class="box" page="moyuschiy-koncentrat-thomas-profloor-l-500r"><span class="title">мешки пылесборники для пылесосов Моющий концентрат Thomas Profloor 1 л 790-009</span><p>от <span class="price">500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chayniktermos-atlanta-atn-1380r.php", 0, -4); if (file_exists("comments/chayniktermos-atlanta-atn-1380r.php")) require_once "comments/chayniktermos-atlanta-atn-1380r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chayniktermos-atlanta-atn-1380r.php" method="post" onsubmit="return checkForm(this)">
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