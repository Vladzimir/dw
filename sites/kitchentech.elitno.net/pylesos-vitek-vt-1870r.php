<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("pylesos-vitek-vt-1870r.php","сырники в мультиварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("pylesos-vitek-vt-1870r.php", $nick, $comment);
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
		<title>сырники в мультиварке Пылесос Vitek VT-1805  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="сырники в мультиварке, хорошая кухня мультиварка, микроволновая печь рейтинг, вафельница со сменными, пылесборники для пылесосов philips, лампа для аэрогриля, мультиварка ярославль, где купить ручную мясорубку, каша на воде в мультиварке, блендер металлический, фритюрница philips, карандаш для чистки утюга, дозиметр радиоактивности, держатель для пылесоса,  утюг с парогенератором купить">
		<meta name="description" content="сырники в мультиварке Пыль – настоящая проблема современной цивилизации. Не успеешь оглянуться, а она ...">
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
						<a class="photo" href="photos/e0fdfa431cfe6b47b04ad11ff4f6a218.jpeg" title="сырники в мультиварке Пылесос Vitek VT-1805"><img src="photos/e0fdfa431cfe6b47b04ad11ff4f6a218.jpeg" alt="сырники в мультиварке Пылесос Vitek VT-1805" title="сырники в мультиварке Пылесос Vitek VT-1805 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-dd-3350r.php"><img src="photos/b48d978d3a6e9e560ddd3f28a86214f1.jpeg" alt="хорошая кухня мультиварка Блендер погружной Moulinex DD906143" title="хорошая кухня мультиварка Блендер погружной Moulinex DD906143"></a><h2>Блендер погружной Moulinex DD906143</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-29100r.php"><img src="photos/2431167ee356158b218044f94d3599e4.jpeg" alt="микроволновая печь рейтинг Кофемашина Nivona NICR630 CafeRomatica" title="микроволновая печь рейтинг Кофемашина Nivona NICR630 CafeRomatica"></a><h2>Кофемашина Nivona NICR630 CafeRomatica</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-bistro-bordeaux-47860r.php"><img src="photos/6b889eff1ae3a6014c4090d445e03c04.jpeg" alt="вафельница со сменными Эспрессо-кофемашина Melitta Bistro Bordeaux (4.000933)" title="вафельница со сменными Эспрессо-кофемашина Melitta Bistro Bordeaux (4.000933)"></a><h2>Эспрессо-кофемашина Melitta Bistro Bordeaux (4.000933)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>сырники в мультиварке Пылесос Vitek VT-1805</h1>
						<div class="tb"><p>Цена: от <span class="price">1870</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8274.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Пыль – настоящая проблема современной цивилизации. Не успеешь оглянуться, а она тут как тут. Большую часть пыли накапливают ковровые покрытия. В этом случае, к нам на помощь приходит пылесос <b>V</b><b>itek VT-1805</b>. Современная модель в стильном корпусе прекрасно справится со своей работой, благодаря четырем ступеням фильтрации и универсальной щетке с переключателем «ковер/пол». Дополнительно в комплекте идет 3 бумажных мешка.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Максимальная мощность: 1600Вт <li>Мощность всасывание: 300Вт <li>Система фильтрации: 4 ступени <li>Матерчатый мешок для сбора пыли: 2л <li>Автоматическая смотка шнура: есть <li>Универсальная щетка с переключателем \ковер/пол\: есть <li>Комбинированная щетка для пыли / щелевая насадка <li>Дополнительно: 3 бумажных мешка</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна:</b> Россия.</p> сырники в мультиварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/1eb9b0b00689e076b5895b91684c957e.jpeg" alt="пылесборники для пылесосов philips Автоматическая кофемашина Melitta CAFFEO CI, серебристая" title="пылесборники для пылесосов philips Автоматическая кофемашина Melitta CAFFEO CI, серебристая"><div class="box"><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-ci-serebristaya-65999r.php"><h3 class="title">пылесборники для пылесосов philips Автоматическая кофемашина Melitta CAFFEO CI, серебристая</h3><p>от <span class="price">65999</span> руб.</p></a></div></li>
						<li><img src="photos/c2ec0f6a659b8874d2e6e8a30149501a.jpeg" alt="лампа для аэрогриля Мультиварка Maruchi  RW-FZ45F" title="лампа для аэрогриля Мультиварка Maruchi  RW-FZ45F"><div class="box" page="multivarka-maruchi-rwfzf-2700r"><span class="title">лампа для аэрогриля Мультиварка Maruchi  RW-FZ45F</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/9b1d673d9b457ad6c9a587ce93c1d42a.jpeg" alt="мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003" title="мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003"><div class="box" page="parovarka-tefal-vitacuisine-compact-vc-3530r"><span class="title">мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003</span><p>от <span class="price">3530</span> руб.</p></div></li>
						<li><img src="photos/16c51a83d3b90dc92106b51b933b769e.jpeg" alt="где купить ручную мясорубку Чайник электрический Binatone MEJ-1780 Mat Metal" title="где купить ручную мясорубку Чайник электрический Binatone MEJ-1780 Mat Metal"><div class="box" page="chaynik-elektricheskiy-binatone-mej-mat-metal-1500r"><span class="title">где купить ручную мясорубку Чайник электрический Binatone MEJ-1780 Mat Metal</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/480398a0d650a7b1a9641ca193d5ca18.jpeg" alt="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л" title="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-2350r"><span class="title">каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/f2d6d870289f867bca2e3ea0f8531c8e.jpeg" alt="блендер металлический Электрический чайник  Zauber Z-350" title="блендер металлический Электрический чайник  Zauber Z-350"><div class="box" page="elektricheskiy-chaynik-zauber-z-1600r"><span class="title">блендер металлический Электрический чайник  Zauber Z-350</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li class="large"><img src="photos/9b828fe53dfca2c4781201b615fd512e.jpeg" alt="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий" title="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belosiniy-920r"><span class="title">фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/ab7fd4cacdc88b690decc0d20bd53770.jpeg" alt="карандаш для чистки утюга Чайник-термос Atlanta АТН-768" title="карандаш для чистки утюга Чайник-термос Atlanta АТН-768"><div class="box" page="chayniktermos-atlanta-atn-1700r"><span class="title">карандаш для чистки утюга Чайник-термос Atlanta АТН-768</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li><img src="photos/c0a2e2be0cab06fcd64d43478c95622c.jpeg" alt="дозиметр радиоактивности Пылесос моющий Thomas Twin TT Aquafilter" title="дозиметр радиоактивности Пылесос моющий Thomas Twin TT Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-tt-aquafilter-14900r"><span class="title">дозиметр радиоактивности Пылесос моющий Thomas Twin TT Aquafilter</span><p>от <span class="price">14900</span> руб.</p></div></li>
						<li><img src="photos/d9b92094264662e2a4b171c525a4ead7.jpeg" alt="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter" title="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter"><div class="box" page="pylesos-thomas-biovac-c-aquafilter-8430r"><span class="title">держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter</span><p>от <span class="price">8430</span> руб.</p></div></li>
						<li><img src="photos/03817b6f2ca60ce9b5c33914a6a1ea52.jpeg" alt="сколько стоит моющий пылесос Пылесос Thomas Genius Aquafilter" title="сколько стоит моющий пылесос Пылесос Thomas Genius Aquafilter"><div class="box" page="pylesos-thomas-genius-aquafilter-9480r"><span class="title">сколько стоит моющий пылесос Пылесос Thomas Genius Aquafilter</span><p>от <span class="price">9480</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("pylesos-vitek-vt-1870r.php", 0, -4); if (file_exists("comments/pylesos-vitek-vt-1870r.php")) require_once "comments/pylesos-vitek-vt-1870r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="pylesos-vitek-vt-1870r.php" method="post" onsubmit="return checkForm(this)">
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