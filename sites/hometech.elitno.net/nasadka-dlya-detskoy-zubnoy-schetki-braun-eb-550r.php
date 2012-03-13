<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r.php","бигуди роскошные локоны");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r.php", $nick, $comment);
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
		<title>бигуди роскошные локоны Насадка для детской зубной щетки BRAUN EB10-2  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="бигуди роскошные локоны, электробритва philips 6990, черное зеркало игра торрент, фен щетка цена, укладка волос на бигуди, солярий сыктывкар, институт массажа и косметологии, дарсонваль для лица, приготовление фена, ирригатор donfeel or 820m, аллергия на солярий, зеркала в оправе, купить технический фен, массаж релаксация,  массаж в пятигорске">
		<meta name="description" content="бигуди роскошные локоны Головка насадки Oral-B EB10-2 специально разработана для маленького рта ребенка....">
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
						<a class="photo" href="photos/65ef91f9e39ae9c8e58e13820442b2ca.jpeg" title="бигуди роскошные локоны Насадка для детской зубной щетки BRAUN EB10-2"><img src="photos/65ef91f9e39ae9c8e58e13820442b2ca.jpeg" alt="бигуди роскошные локоны Насадка для детской зубной щетки BRAUN EB10-2" title="бигуди роскошные локоны Насадка для детской зубной щетки BRAUN EB10-2 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atnn-500r.php"><img src="photos/b6a471449cbe12dbfcc99a068c9e41dc.jpeg" alt="электробритва philips 6990 Электрощипцы для выпрямления волос Atlanta АТН-834N" title="электробритва philips 6990 Электрощипцы для выпрямления волос Atlanta АТН-834N"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-834N</h2></li>
							<li><a href="http://hometech.elitno.net/darsonval-premium-klassa-s-nasadkami-ultratek-sd-2450r.php"><img src="photos/6b02b1d6efdd924366aa33cf1f72a17d.jpeg" alt="черное зеркало игра торрент Дарсонваль Премиум класса с 5 насадками Ультратек СД-199" title="черное зеркало игра торрент Дарсонваль Премиум класса с 5 насадками Ультратек СД-199"></a><h2>Дарсонваль Премиум класса с 5 насадками Ультратек СД-199</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-600r.php"><img src="photos/c27a4d89a2f0dd3ef16052fa67829ba2.jpeg" alt="фен щетка цена Зеркало Beurer BS 29  косметическое" title="фен щетка цена Зеркало Beurer BS 29  косметическое"></a><h2>Зеркало Beurer BS 29  косметическое</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>бигуди роскошные локоны Насадка для детской зубной щетки BRAUN EB10-2</h1>
						<div class="tb"><p>Цена: от <span class="price">550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19583.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Головка насадки Oral-B EB10-2 специально разработана для маленького рта ребенка. Сверхмягкая щетина обеспечивает мягкую чистку детских зубов и нежных десен.</p><p>Для эффективной чистки жевательных поверхностей используются выступающие щетинки в середине. Голубые щетинки служат индикатором, позволяющим вам определить, когда стоит сменить насадку и насколько хорошо ребенок чистит зубы (при правильной ежедневной чистке щетинки будут обесцвечиваться на половину через три месяца). Насадка подходит ко всем электрическим зубным щеткам Oral-B (кроме CrossAction Power и Sonic Complete).</p><p><b>Подходит к зубным щеткам:</b></p><ul type=disc><li>Oral-B Triumph <li>Oral-B Professional Care <li>Oral-B Vitality <li>Oral-B Advance Power<b></b> </li></ul><p><b>Производитель: Германия</b></p> бигуди роскошные локоны</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3ccd3a7a537feb526e26b8db85765ae5.jpeg" alt="укладка волос на бигуди Маникюрный набор Sanitas SMA-70" title="укладка волос на бигуди Маникюрный набор Sanitas SMA-70"><div class="box"><a href="http://hometech.elitno.net/manikyurnyy-nabor-sanitas-sma-2500r.php"><h3 class="title">укладка волос на бигуди Маникюрный набор Sanitas SMA-70</h3><p>от <span class="price">2500</span> руб.</p></a></div></li>
						<li><img src="photos/94bfe3dc926e41a7c45fe26ef5a9054d.jpeg" alt="солярий сыктывкар Набор для маникюра и педикюра Laica SA5440 с 11 насадками" title="солярий сыктывкар Набор для маникюра и педикюра Laica SA5440 с 11 насадками"><div class="box" page="nabor-dlya-manikyura-i-pedikyura-laica-sa-s-nasadkami-2810r"><span class="title">солярий сыктывкар Набор для маникюра и педикюра Laica SA5440 с 11 насадками</span><p>от <span class="price">2810</span> руб.</p></div></li>
						<li><img src="photos/abde1a7164344d09d53992486a50887a.jpeg" alt="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA" title="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-malibu-lineyka-spa-31500r"><span class="title">институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA</span><p>от <span class="price">31500</span> руб.</p></div></li>
						<li><img src="photos/fe041902a5ae67f02c11b97827de200a.jpeg" alt="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA" title="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-titan-lineyka-spa-34000r"><span class="title">дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA</span><p>от <span class="price">34000</span> руб.</p></div></li>
						<li class="large"><img src="photos/be933d8d1e85d52fb3b8e981e9e6d19f.jpeg" alt="приготовление фена Подлокотники L73 USM-011" title="приготовление фена Подлокотники L73 USM-011"><div class="box" page="podlokotniki-l-usm-1800r"><span class="title">приготовление фена Подлокотники L73 USM-011</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li class="large"><img src="photos/d7739f4f02ec3d6138894095f85fdbd7.jpeg" alt="ирригатор donfeel or 820m Валик круглый US-Medica ORANGE L64" title="ирригатор donfeel or 820m Валик круглый US-Medica ORANGE L64"><div class="box" page="valik-kruglyy-usmedica-orange-l-1200r"><span class="title">ирригатор donfeel or 820m Валик круглый US-Medica ORANGE L64</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/d183c7f387a6a16832dcadb30c5c244b.jpeg" alt="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)" title="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)"><div class="box" page="massazher-omron-e-tensmiostimulyator-4100r"><span class="title">аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)</span><p>от <span class="price">4100</span> руб.</p></div></li>
						<li><img src="photos/7e234be1c8b9948d4170ebfc4aaf09c9.jpeg" alt="зеркала в оправе Прибор ультразвуковой для ухода за кожей лица и тела Gezatone SuperSonic m350" title="зеркала в оправе Прибор ультразвуковой для ухода за кожей лица и тела Gezatone SuperSonic m350"><div class="box" page="pribor-ultrazvukovoy-dlya-uhoda-za-kozhey-lica-i-tela-gezatone-supersonic-m-2540r"><span class="title">зеркала в оправе Прибор ультразвуковой для ухода за кожей лица и тела Gezatone SuperSonic m350</span><p>от <span class="price">2540</span> руб.</p></div></li>
						<li><img src="photos/c39ef08cf29b8e860e521879ff277e18.jpeg" alt="купить технический фен Подушечки для депиляции Silky Smooth legs полирующие" title="купить технический фен Подушечки для депиляции Silky Smooth legs полирующие"><div class="box" page="podushechki-dlya-depilyacii-silky-smooth-legs-poliruyuschie-200r"><span class="title">купить технический фен Подушечки для депиляции Silky Smooth legs полирующие</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li><img src="photos/f70ad4629335f36765aeeccf67ffdd64.jpeg" alt="массаж релаксация Термо-коврик для стайлера Corioliss Thermopad" title="массаж релаксация Термо-коврик для стайлера Corioliss Thermopad"><div class="box" page="termokovrik-dlya-staylera-corioliss-thermopad-880r"><span class="title">массаж релаксация Термо-коврик для стайлера Corioliss Thermopad</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/9038904b3492c32517b7c821b0f63b8a.jpeg" alt="массаж приморская Vitek VT–1373 Электробритва" title="массаж приморская Vitek VT–1373 Электробритва"><div class="box" page="vitek-vt–-elektrobritva-960r"><span class="title">массаж приморская Vitek VT–1373 Электробритва</span><p>от <span class="price">960</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r.php", 0, -4); if (file_exists("comments/nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r.php")) require_once "comments/nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r.php" method="post" onsubmit="return checkForm(this)">
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