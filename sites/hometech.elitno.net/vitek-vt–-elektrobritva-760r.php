<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vitek-vt–-elektrobritva-760r.php","goldwell выпрямление волос");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vitek-vt–-elektrobritva-760r.php", $nick, $comment);
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
		<title>goldwell выпрямление волос Vitek VT–1372 Электробритва  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="goldwell выпрямление волос, херсон массаж, аппарат для вакуумного массажа, лампы для солярия купить, весы электронные ювелирные, институт массажа и косметологии, дарсонваль для лица, фокин массаж, консультации трихолога, фен щетка с насадками, сколько в крови держится фен, что делать в солярии, выпрямление волос кератином отзывы, куплю триммер в москве,  массаж приморская">
		<meta name="description" content="goldwell выпрямление волос Vitek VT-1372 – сеточная электробритва для сухого и влажно бритья с двумя бритве...">
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
						<a class="photo" href="photos/026146071679bc7bdf272dd210c1a076.jpeg" title="goldwell выпрямление волос Vitek VT–1372 Электробритва"><img src="photos/026146071679bc7bdf272dd210c1a076.jpeg" alt="goldwell выпрямление волос Vitek VT–1372 Электробритва" title="goldwell выпрямление волос Vitek VT–1372 Электробритва -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-flexa-2950r.php"><img src="photos/761f0ad81569062a7e0ab609f4286969.jpeg" alt="херсон массаж Выпрямитель Valera Flexa 646.01" title="херсон массаж Выпрямитель Valera Flexa 646.01"></a><h2>Выпрямитель Valera Flexa 646.01</h2></li>
							<li><a href="http://hometech.elitno.net/glamurnaya-palochka-dlya-zavivki-volos-corioliss-glamour-wand-3080r.php"><img src="photos/5c5fbc08f4578545307c561d516fe2c8.jpeg" alt="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand" title="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand"></a><h2>Гламурная палочка для завивки волос Corioliss Glamour Wand</h2></li>
							<li><a href="http://hometech.elitno.net/lozhka-dlya-chistki-yazyka-tce-k-irrigatoru-waterpik-wpe-wpe-sht-400r.php"><img src="photos/2329dcbac292ecd0d78d4e254bf209df.jpeg" alt="лампы для солярия купить Ложка для чистки языка TC-100E к ирригатору Waterpik WP100E, WP360E (2 шт.)" title="лампы для солярия купить Ложка для чистки языка TC-100E к ирригатору Waterpik WP100E, WP360E (2 шт.)"></a><h2>Ложка для чистки языка TC-100E к ирригатору Waterpik WP100E, WP360E (2 шт.)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>goldwell выпрямление волос Vitek VT–1372 Электробритва</h1>
						<div class="tb"><p>Цена: от <span class="price">760</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18342.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Vitek VT-1372 – сеточная электробритва для сухого и влажно бритья с двумя бритвенными головками и питанием от сети. Корпус защищен от воды. Есть триммер для комбинированного бритья или стрижки длинных волос. Для безопасной перевозки предусмотрена дорожная блокировка, а также защитная крышка и дорожный чехол. В комплект входит щеточка для чистка. </p><p><b>Характеристики:</b></p><ul type=disc><li>Система бритья: сеточная <li>Способ бритья: сухое / влажное <li>Система питания: от сети <li>Количество бритвенных головок: 2 <li>Водонепроницаемый корпус <li>Триммер <li>Индикация зарядки <li>Дорожная блокировка <li>Комплектация защитная крышка, дорожный чехол, щеточка для чистки </li></ul><p><b>Проиводитель: Австрия</b></p> goldwell выпрямление волос</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b22e40d494cd6893112bef0e9fe9ab49.jpeg" alt="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt" title="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt"><div class="box" page="termopoyas-vulkan-vulkan-belt-350r"><span class="title">весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/abde1a7164344d09d53992486a50887a.jpeg" alt="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA" title="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-malibu-lineyka-spa-31500r"><span class="title">институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA</span><p>от <span class="price">31500</span> руб.</p></div></li>
						<li><img src="photos/fe041902a5ae67f02c11b97827de200a.jpeg" alt="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA" title="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-titan-lineyka-spa-34000r"><span class="title">дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA</span><p>от <span class="price">34000</span> руб.</p></div></li>
						<li><img src="photos/db50f056381f7d55d9462e3f852c618b.jpeg" alt="фокин массаж Стационарный массажный стол US Medica Profi" title="фокин массаж Стационарный массажный стол US Medica Profi"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-profi-85000r"><span class="title">фокин массаж Стационарный массажный стол US Medica Profi</span><p>от <span class="price">85000</span> руб.</p></div></li>
						<li class="large"><img src="photos/28b4768c3cdb0ef358b594b4e291437d.jpeg" alt="консультации трихолога Стационарный массажный стол US-Medica Sumo Professional" title="консультации трихолога Стационарный массажный стол US-Medica Sumo Professional"><div class="box" page="stacionarnyy-massazhnyy-stol-usmedica-sumo-professional-29500r"><span class="title">консультации трихолога Стационарный массажный стол US-Medica Sumo Professional</span><p>от <span class="price">29500</span> руб.</p></div></li>
						<li class="large"><img src="photos/60233d887bfea99df519473001b1958f.jpeg" alt="фен щетка с насадками Валик треугольный L66H25 USM-008" title="фен щетка с насадками Валик треугольный L66H25 USM-008"><div class="box" page="valik-treugolnyy-lh-usm-1800r"><span class="title">фен щетка с насадками Валик треугольный L66H25 USM-008</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li class="large"><img src="photos/394000ec0f3455ebe103d8192764620a.jpeg" alt="сколько в крови держится фен Массажное кресло Anatomico Leonardo" title="сколько в крови держится фен Массажное кресло Anatomico Leonardo"><div class="box" page="massazhnoe-kreslo-anatomico-leonardo-107000r"><span class="title">сколько в крови держится фен Массажное кресло Anatomico Leonardo</span><p>от <span class="price">107000</span> руб.</p></div></li>
						<li><img src="photos/12b08f535454eb45912e69bb12756cf3.jpeg" alt="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070" title="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070"><div class="box" page="anticellyulitnyy-vibromassazher-gezatone-skulptor-tela-amg-2000r"><span class="title">что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/9547fcca4fcaaeea1c99d9d955e1ecd8.jpeg" alt="выпрямление волос кератином отзывы Массажер для ног US Medica Acupuncture FM-70" title="выпрямление волос кератином отзывы Массажер для ног US Medica Acupuncture FM-70"><div class="box" page="massazher-dlya-nog-us-medica-acupuncture-fm-21000r"><span class="title">выпрямление волос кератином отзывы Массажер для ног US Medica Acupuncture FM-70</span><p>от <span class="price">21000</span> руб.</p></div></li>
						<li><img src="photos/5d92120d3065dfcf7d5f91af9dd4ca58.jpeg" alt="куплю триммер в москве Массажная накидка ZENET TL-2007-Z" title="куплю триммер в москве Массажная накидка ZENET TL-2007-Z"><div class="box" page="massazhnaya-nakidka-zenet-tlz-4950r"><span class="title">куплю триммер в москве Массажная накидка ZENET TL-2007-Z</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/68c5ed4efd2baf3bd4ba5079f66017fc.jpeg" alt="электронные весы дешево Солярий для лица Efbe-Schott 826" title="электронные весы дешево Солярий для лица Efbe-Schott 826"><div class="box" page="solyariy-dlya-lica-efbeschott-4800r"><span class="title">электронные весы дешево Солярий для лица Efbe-Schott 826</span><p>от <span class="price">4800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vitek-vt–-elektrobritva-760r.php", 0, -4); if (file_exists("comments/vitek-vt–-elektrobritva-760r.php")) require_once "comments/vitek-vt–-elektrobritva-760r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vitek-vt–-elektrobritva-760r.php" method="post" onsubmit="return checkForm(this)">
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