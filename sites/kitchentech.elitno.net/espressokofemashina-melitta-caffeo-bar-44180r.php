<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("espressokofemashina-melitta-caffeo-bar-44180r.php","мясорубка ролсен");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("espressokofemashina-melitta-caffeo-bar-44180r.php", $nick, $comment);
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
		<title>мясорубка ролсен Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мясорубка ролсен, блендер philips hr1615, выбор микроволновой печи, выпечка в хлебопечке мулинекс, грибы в мультиварке, картофельный хлеб в хлебопечке, блендер braun mr 530 ca, фильтр для пылесоса thomas twin, хлебопечка германия, рецепты для хлебопечки борк, daewoo микроволновая печь инструкция, бетоносмеситель миксер, пылесос ролсен, mini пылесос,  возможности блендера">
		<meta name="description" content="мясорубка ролсен Эспрессо-кофемашина Melitta Caffeo Bar черного цвета на тесте «Хороший совет» пр...">
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
						<a class="photo" href="photos/c9a7a5b3ad41669087cce987bbc510ac.jpeg" title="мясорубка ролсен Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)"><img src="photos/c9a7a5b3ad41669087cce987bbc510ac.jpeg" alt="мясорубка ролсен Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)" title="мясорубка ролсен Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68) -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-cc-4920r.php"><img src="photos/0c50b7e39e50ca19abd7fa5476ddc943.jpeg" alt="блендер philips hr1615 Блендер Braun MR-730 CC" title="блендер philips hr1615 Блендер Braun MR-730 CC"></a><h2>Блендер Braun MR-730 CC</h2></li>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-krasnyy-4155r.php"><img src="photos/0b57a5fa2564b3001e847ebdd45ce976.jpeg" alt="выбор микроволновой печи Вспениватель Melitta Cremio красный" title="выбор микроволновой печи Вспениватель Melitta Cremio красный"></a><h2>Вспениватель Melitta Cremio красный</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikser-atlanta-ath-670r.php"><img src="photos/78465bcfeecb4716f9891b6cf30f9b2b.jpeg" alt="выпечка в хлебопечке мулинекс Миксер Atlanta ATH-290" title="выпечка в хлебопечке мулинекс Миксер Atlanta ATH-290"></a><h2>Миксер Atlanta ATH-290</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мясорубка ролсен Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)</h1>
						<div class="tb"><p>Цена: от <span class="price">44180</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19184.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Эспрессо-кофемашина Melitta Caffeo Bar черного цвета на тесте «Хороший совет» при сравнении кофеавтоматов CAFFEO получила оценку «Лучшая молочная пена».С ее помощью вы без труда приготовите прекрасную молочную пену: установленный с левой стороны венчик взбивает именно то количество пены, которое вам нужно, удобно и просто прямо в стакане. В результате вы получите совершенную мелкопористую пену в качестве основы для различных кофейных напитков. В сравнении с другими системами для взбивания пены этот венчик особенно легко чистится – его достаточно снять и положить в посудомоечную машину. </p><p><b>Характеристики:</b></p><ul type=disc><li>эспрессо <li>автоматическая <li>для зернового и молотого кофе <li>кофемолка с регулировкой степени помола <li>контроль крепости кофе <li>настройка температуры <li>регулировка порции воды </li></ul><p><b>Производитель: Германия</b></p> мясорубка ролсен</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/07f90c95ce6a7ffe3129c0eb4bb8942c.jpeg" alt="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146" title="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146"><div class="box"><a href="http://kitchentech.elitno.net/elektroplitka-indukcionnaya-maxima-mic-1590r.php"><h3 class="title">грибы в мультиварке Электроплитка индукционная Maxima MIC-0146</h3><p>от <span class="price">1590</span> руб.</p></a></div></li>
						<li><img src="photos/9187d3c933faddcbcce7af0525ae7732.jpeg" alt="картофельный хлеб в хлебопечке Весы электронные AND SK-20KD" title="картофельный хлеб в хлебопечке Весы электронные AND SK-20KD"><div class="box" page="vesy-elektronnye-and-skkd-7100r"><span class="title">картофельный хлеб в хлебопечке Весы электронные AND SK-20KD</span><p>от <span class="price">7100</span> руб.</p></div></li>
						<li><img src="photos/aca42b878e4277b1730672f4f845a597.jpeg" alt="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black" title="блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black"><div class="box" page="chaynik-elektricheskiy-binatone-nk-black-1200r"><span class="title">блендер braun mr 530 ca Чайник электрический Binatone NK-7700 Black</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/c737b54864f365f17a12fbd2acc0e1ac.jpeg" alt="фильтр для пылесоса thomas twin Чайник электрический Vitek VT-1134" title="фильтр для пылесоса thomas twin Чайник электрический Vitek VT-1134"><div class="box" page="chaynik-elektricheskiy-vitek-vt-900r"><span class="title">фильтр для пылесоса thomas twin Чайник электрический Vitek VT-1134</span><p>от <span class="price">900</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3fae48615963478f00e0c05f3baa485.jpeg" alt="хлебопечка германия Электрический чайник  Zauber R-380" title="хлебопечка германия Электрический чайник  Zauber R-380"><div class="box" page="elektricheskiy-chaynik-zauber-r-1830r"><span class="title">хлебопечка германия Электрический чайник  Zauber R-380</span><p>от <span class="price">1830</span> руб.</p></div></li>
						<li class="large"><img src="photos/557cbb94f1e22c2ffcbdf56f26cfcf68.jpeg" alt="рецепты для хлебопечки борк Чайник электрический  Vitesse VS-101 1,7л, кремовый" title="рецепты для хлебопечки борк Чайник электрический  Vitesse VS-101 1,7л, кремовый"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-kremovyy-1120r"><span class="title">рецепты для хлебопечки борк Чайник электрический  Vitesse VS-101 1,7л, кремовый</span><p>от <span class="price">1120</span> руб.</p></div></li>
						<li class="large"><img src="photos/0acc9f01a71196d6ab7726b81327e74c.jpeg" alt="daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717" title="daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-390r"><span class="title">daewoo микроволновая печь инструкция Электрический чайник Atlanta АТН-717</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/569a7a448800e6c331839b4f1803d826.jpeg" alt="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502" title="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502"><div class="box" page="moyuschiy-koncentrat-thomas-protex-l-520r"><span class="title">бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li><img src="photos/b423fb6caec639a7de8db20512fac098.jpeg" alt="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas" title="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r"><span class="title">пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/28da988d46134dfe1236e7598e0579cc.jpeg" alt="mini пылесос Турбощетка Redmond  RV-308" title="mini пылесос Турбощетка Redmond  RV-308"><div class="box" page="turboschetka-redmond-rv-390r"><span class="title">mini пылесос Турбощетка Redmond  RV-308</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/292e6011285b984f12ba49506a158a8f.jpeg" alt="пылесос филипс 9174 Пылесос Redmond RV-309" title="пылесос филипс 9174 Пылесос Redmond RV-309"><div class="box" page="pylesos-redmond-rv-5490r"><span class="title">пылесос филипс 9174 Пылесос Redmond RV-309</span><p>от <span class="price">5490</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("espressokofemashina-melitta-caffeo-bar-44180r.php", 0, -4); if (file_exists("comments/espressokofemashina-melitta-caffeo-bar-44180r.php")) require_once "comments/espressokofemashina-melitta-caffeo-bar-44180r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="espressokofemashina-melitta-caffeo-bar-44180r.php" method="post" onsubmit="return checkForm(this)">
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