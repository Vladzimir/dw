<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-vitek-vt-1050r.php","зеркала королев");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-vitek-vt-1050r.php", $nick, $comment);
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
		<title>зеркала королев Фен Vitek VT-2262  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="зеркала королев, тонкое зеркало, весы cas электронные, сочинение на тему зеркало, аппарат для вакуумного массажа, мини солярий для лица купить, построение изображения в зеркале, инфракрасный массаж, двойное зеркало, косметика для солярия интернет магазин, накладки на зеркала 2114, массаж википедия, электробритвы мужские купить, установка боковых зеркал,  зеркало стоматологическое">
		<meta name="description" content="зеркала королев Фен Vitek VT-2262 сочетает в себе безупречный баланс веса с эргономичной ручкой,...">
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
						<a class="photo" href="photos/fe21e6506e33786f24be8409558d7b64.jpeg" title="зеркала королев Фен Vitek VT-2262"><img src="photos/fe21e6506e33786f24be8409558d7b64.jpeg" alt="зеркала королев Фен Vitek VT-2262" title="зеркала королев Фен Vitek VT-2262 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-um-1400r.php"><img src="photos/bc02e0075087def17d8a206ec6d6015c.jpeg" alt="тонкое зеркало Весы электронные напольные с анализатором жира Tanita UM-070" title="тонкое зеркало Весы электронные напольные с анализатором жира Tanita UM-070"></a><h2>Весы электронные напольные с анализатором жира Tanita UM-070</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-2750r.php"><img src="photos/7dbc33322e4439b0f562bbaf80476cbb.jpeg" alt="весы cas электронные Анализатор жира (состава тела) Tanita BC-575" title="весы cas электронные Анализатор жира (состава тела) Tanita BC-575"></a><h2>Анализатор жира (состава тела) Tanita BC-575</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-s-krasnyy-leopard-4500r.php"><img src="photos/a73d45afb658e85145cdbbf609c3a636.jpeg" alt="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард" title="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард"></a><h2>Стайлер Corioliss С1 красный леопард</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>зеркала королев Фен Vitek VT-2262</h1>
						<div class="tb"><p>Цена: от <span class="price">1050</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_10865.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Фен V</b><b>itek</b><b> VT-2262 </b>сочетает в себе безупречный баланс веса с эргономичной ручкой, форма которой позволяет избежать переутомления руки. Модель обладает 5 режимами работы, независимой регулировкой нагрева и воздушного потока и защитой от перегрева. В комплекте идет диффузор и концентратор.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Тип: обычный фен <li>Мощность: 1800Вт <li>Количество режимов: 5 <li>Независимая регулировка нагрева и воздушного потока: есть <li>Дополнительные режимы: подача холодного воздуха <li>В комплекте: диффузор, концентратор <li>Защита от перегрева: есть</li></ul><p> </p><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> зеркала королев</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5c5fbc08f4578545307c561d516fe2c8.jpeg" alt="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand" title="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand"><div class="box" page="glamurnaya-palochka-dlya-zavivki-volos-corioliss-glamour-wand-3080r"><span class="title">аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand</span><p>от <span class="price">3080</span> руб.</p></div></li>
						<li><img src="photos/0b842281306633c8ae0a56a5ee94d808.jpeg" alt="мини солярий для лица купить Зеркало настольное Rosenberg S-2083" title="мини солярий для лица купить Зеркало настольное Rosenberg S-2083"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-500r"><span class="title">мини солярий для лица купить Зеркало настольное Rosenberg S-2083</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/e302a52396d03041a39ed52588cd8a9a.jpeg" alt="построение изображения в зеркале Раскладной массажный стол US Medica Super Light линейка Sumo Line" title="построение изображения в зеркале Раскладной массажный стол US Medica Super Light линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-super-light-lineyka-sumo-line-15000r"><span class="title">построение изображения в зеркале Раскладной массажный стол US Medica Super Light линейка Sumo Line</span><p>от <span class="price">15000</span> руб.</p></div></li>
						<li><img src="photos/e739e0447a80415b64bfebe7c6b9a813.jpeg" alt="инфракрасный массаж Аппликатор Ляпко Двойной 5,8" title="инфракрасный массаж Аппликатор Ляпко Двойной 5,8"><div class="box" page="applikator-lyapko-dvoynoy-1490r"><span class="title">инфракрасный массаж Аппликатор Ляпко Двойной 5,8</span><p>от <span class="price">1490</span> руб.</p></div></li>
						<li class="large"><img src="photos/d59acc6853a5ac65d4a0ba3df89a8509.jpeg" alt="двойное зеркало Массажер антицеллюлитный Beurer CM50" title="двойное зеркало Массажер антицеллюлитный Beurer CM50"><div class="box" page="massazher-anticellyulitnyy-beurer-cm-2000r"><span class="title">двойное зеркало Массажер антицеллюлитный Beurer CM50</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/bea75616ebe33c954c6ddf8f2c004348.jpeg" alt="косметика для солярия интернет магазин Массажер для тела Beurer MG158" title="косметика для солярия интернет магазин Массажер для тела Beurer MG158"><div class="box" page="massazher-dlya-tela-beurer-mg-1750r"><span class="title">косметика для солярия интернет магазин Массажер для тела Beurer MG158</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li class="large"><img src="photos/a98d9154ffd23dc6de7d9ef0755c16c9.jpeg" alt="накладки на зеркала 2114 Массажер ZENET TL-FMQ-D" title="накладки на зеркала 2114 Массажер ZENET TL-FMQ-D"><div class="box" page="massazher-zenet-tlfmqd-11900r"><span class="title">накладки на зеркала 2114 Массажер ZENET TL-FMQ-D</span><p>от <span class="price">11900</span> руб.</p></div></li>
						<li><img src="photos/7e9947d6fb09feafff538d8cade1a9ad.jpeg" alt="массаж википедия Массажер для глаз Gezatone iSee360 Air Tracktion" title="массаж википедия Массажер для глаз Gezatone iSee360 Air Tracktion"><div class="box" page="massazher-dlya-glaz-gezatone-isee-air-tracktion-4000r"><span class="title">массаж википедия Массажер для глаз Gezatone iSee360 Air Tracktion</span><p>от <span class="price">4000</span> руб.</p></div></li>
						<li><img src="photos/e01d2dae2f575f567f13f00f34017217.jpeg" alt="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья" title="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья"><div class="box" page="mashinka-dlya-bikini-dizayna-gezatone-dp-s-nasadkoy-dlya-britya-1500r"><span class="title">электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/f7810eeae3245b2809b14907b94ee4e0.jpeg" alt="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос" title="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-1240r"><span class="title">установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li><img src="photos/bddc6e6efaf0b03c628143bf9a4ec50d.jpeg" alt="толкование снов зеркало Фен Vitesse VS-943 зеленый" title="толкование снов зеркало Фен Vitesse VS-943 зеленый"><div class="box" page="fen-vitesse-vs-zelenyy-640r"><span class="title">толкование снов зеркало Фен Vitesse VS-943 зеленый</span><p>от <span class="price">640</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-vitek-vt-1050r.php", 0, -4); if (file_exists("comments/fen-vitek-vt-1050r.php")) require_once "comments/fen-vitek-vt-1050r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-vitek-vt-1050r.php" method="post" onsubmit="return checkForm(this)">
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