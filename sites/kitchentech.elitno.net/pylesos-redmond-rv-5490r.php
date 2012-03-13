<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("pylesos-redmond-rv-5490r.php","кухонные весы scarlett");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("pylesos-redmond-rv-5490r.php", $nick, $comment);
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
		<title>кухонные весы scarlett Пылесос Redmond RV-309  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кухонные весы scarlett, кофемолка moulinex, рецепт батона для хлебопечки, что можно делать блендером, рецепты кофе в кофемашине, щетка для пылесоса electrolux, аэрогриль поларис отзывы, красноярск микроволновая печь, стоит ли покупать мультиварку, пылесос для сухой чистки, кофемашина saeco xsmall, фильтр для пылесоса самсунг, блендер рецепты видео, блендер vita mix,  печенье через мясорубку рецепт">
		<meta name="description" content="кухонные весы scarlett Redmond RV-309 – мощная и функциональная модель пылесоса от известного американс...">
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
						<a class="photo" href="photos/292e6011285b984f12ba49506a158a8f.jpeg" title="кухонные весы scarlett Пылесос Redmond RV-309"><img src="photos/292e6011285b984f12ba49506a158a8f.jpeg" alt="кухонные весы scarlett Пылесос Redmond RV-309" title="кухонные весы scarlett Пылесос Redmond RV-309 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-3290r.php"><img src="photos/77a7b9eee8f1b767f7912a55eb9e902b.jpeg" alt="кофемолка moulinex Блендер Redmond RHB-2904" title="кофемолка moulinex Блендер Redmond RHB-2904"></a><h2>Блендер Redmond RHB-2904</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektroplitka-maxima-mes-880r.php"><img src="photos/2e2056e7ef45f5df85840ea8253e7c4c.jpeg" alt="рецепт батона для хлебопечки Электроплитка Maxima MES-0252-2" title="рецепт батона для хлебопечки Электроплитка Maxima MES-0252-2"></a><h2>Электроплитка Maxima MES-0252-2</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-binatone-mgr-white-3700r.php"><img src="photos/060f95312423ba3e968eaf23618bd36d.jpeg" alt="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White" title="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White"></a><h2>Мясорубка электрическая Binatone MGR-3040 White</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кухонные весы scarlett Пылесос Redmond RV-309</h1>
						<div class="tb"><p>Цена: от <span class="price">5490</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19656.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Redmond RV-309 – мощная и функциональная модель пылесоса от известного американского производителя. Технология фильтрации «Мультициклон (8+1)» обеспечит высокую мощность всасывания пыли и максимальную фильтрацию – качество уборки больше не зависит от степени наполнения пылесборника и засорения фильтров. Кроме того, устройство этой модели пылесоса включает в себя разные системы защиты двигателя: плавный пуск двигателя, система отключения при перегреве. Также в комплектацию пылесоса входит турбощетка.</p><p><b>Характеристики:</b></p><ul type=disc><li>Технология фильтрации «Мультициклон 8+1»; <li>Максимальная мощность: 1800 Вт; <li>Системы защиты двигателя: плавный пуск двигателя, система отключения при перегреве; <li>Емкость контейнера для пыли: 2.0 л; <li>Система фильтрации: многоступенчатая циклоническая HEPA, фильтр: H10; <li>Автоматическая смотка шнура; <li>Радиус действия: 10 метров; <li>Насадка для уборки паркета; <li>Турбощетка; </li></ul><p><b>Изготовитель: США</b></p><p><b>Производитель: Китай</b></p> кухонные весы scarlett</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/03c71bbf8b5f2d86f3ae6ce6e9e77e58.jpeg" alt="рецепты кофе в кофемашине Фритюрница Vitek VT-1531 белая" title="рецепты кофе в кофемашине Фритюрница Vitek VT-1531 белая"><div class="box"><a href="http://kitchentech.elitno.net/frityurnica-vitek-vt-belaya-2950r.php"><h3 class="title">рецепты кофе в кофемашине Фритюрница Vitek VT-1531 белая</h3><p>от <span class="price">2950</span> руб.</p></a></div></li>
						<li><img src="photos/d0af4bd740dd75cf948a8f00224c2bee.jpeg" alt="щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White" title="щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-white-1080r"><span class="title">щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White</span><p>от <span class="price">1080</span> руб.</p></div></li>
						<li><img src="photos/601488d11fe95f07b0e7e96c29a4ca5c.jpeg" alt="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White" title="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-magic-white-1100r"><span class="title">аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/d816a9ba34d3c4cbee3c0f60a1fb92cf.jpeg" alt="красноярск микроволновая печь Чайник электрический Vitek VT-1158" title="красноярск микроволновая печь Чайник электрический Vitek VT-1158"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1770r"><span class="title">красноярск микроволновая печь Чайник электрический Vitek VT-1158</span><p>от <span class="price">1770</span> руб.</p></div></li>
						<li class="large"><img src="photos/5a4405159d0c690183630df2cbdbbd36.jpeg" alt="стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л" title="стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1620r"><span class="title">стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л</span><p>от <span class="price">1620</span> руб.</p></div></li>
						<li class="large"><img src="photos/92677a851872ec83258943db2c5f8e10.jpeg" alt="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л" title="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-reminisce-ki-l-2370r-2"><span class="title">пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li class="large"><img src="photos/20a6a481b9a3a072fa1293146dcb1ec9.jpeg" alt="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter" title="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-super-s-aquafilter-10520r"><span class="title">кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter</span><p>от <span class="price">10520</span> руб.</p></div></li>
						<li><img src="photos/db8d0d28b1b05f19385269d855039f58.jpeg" alt="фильтр для пылесоса самсунг Пылесос с аквафильтром Vitek VT-1833" title="фильтр для пылесоса самсунг Пылесос с аквафильтром Vitek VT-1833"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-5580r"><span class="title">фильтр для пылесоса самсунг Пылесос с аквафильтром Vitek VT-1833</span><p>от <span class="price">5580</span> руб.</p></div></li>
						<li><img src="photos/7e736b7b32dea00ff19d5eefa59427b8.jpeg" alt="блендер рецепты видео Пылесос Thomas Power Pack 1620" title="блендер рецепты видео Пылесос Thomas Power Pack 1620"><div class="box" page="pylesos-thomas-power-pack-4300r"><span class="title">блендер рецепты видео Пылесос Thomas Power Pack 1620</span><p>от <span class="price">4300</span> руб.</p></div></li>
						<li><img src="photos/2784b5cdf9478bbd2439685d61179e80.jpeg" alt="блендер vita mix Сушилка для рук AEG Haustehnik HE 181" title="блендер vita mix Сушилка для рук AEG Haustehnik HE 181"><div class="box" page="sushilka-dlya-ruk-aeg-haustehnik-he-5900r"><span class="title">блендер vita mix Сушилка для рук AEG Haustehnik HE 181</span><p>от <span class="price">5900</span> руб.</p></div></li>
						<li><img src="photos/ab56eb3e56d0f0d6cbcdc267b86f71a7.jpeg" alt="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257" title="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-2800r"><span class="title">панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257</span><p>от <span class="price">2800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("pylesos-redmond-rv-5490r.php", 0, -4); if (file_exists("comments/pylesos-redmond-rv-5490r.php")) require_once "comments/pylesos-redmond-rv-5490r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="pylesos-redmond-rv-5490r.php" method="post" onsubmit="return checkForm(this)">
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