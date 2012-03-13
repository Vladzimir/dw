<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("nasadka-palochka-dlya-karat-de-darsonval-300r.php","игра загадка волшебного зеркала");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("nasadka-palochka-dlya-karat-de-darsonval-300r.php", $nick, $comment);
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
		<title>игра загадка волшебного зеркала Насадка Палочка для КАРАТ ДЕ-212 Дарсонваль  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="игра загадка волшебного зеркала, ирригатор waterpik ultra, зеркало игрушка, зеркала на машину, где научиться массажу, массаж в севастополе, женщина перед зеркалом, косметика для солярия интернет магазин, зеркало заднего вида 2110, зеркало с навигатором, акриловое зеркало, зеркало ниссан альмера, новый год в зеркале, заточка ножей машинки для стрижки,  машинка для интимной стрижки">
		<meta name="description" content="игра загадка волшебного зеркала Медицинский аппарат Дарсонваль пользуется невероятной популярностью во всем мире...">
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
						<a class="photo" href="photos/5712abdb0c58f572c0d79788d5ffdca4.jpeg" title="игра загадка волшебного зеркала Насадка Палочка для КАРАТ ДЕ-212 Дарсонваль"><img src="photos/5712abdb0c58f572c0d79788d5ffdca4.jpeg" alt="игра загадка волшебного зеркала Насадка Палочка для КАРАТ ДЕ-212 Дарсонваль" title="игра загадка волшебного зеркала Насадка Палочка для КАРАТ ДЕ-212 Дарсонваль -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-kozha-glamour-2750r.php"><img src="photos/da109c8ab3a7beebe47279ad431dfe0e.jpeg" alt="ирригатор waterpik ultra Весы электронные напольные Beurer GS37 (кожа) Glamour" title="ирригатор waterpik ultra Весы электронные напольные Beurer GS37 (кожа) Glamour"></a><h2>Весы электронные напольные Beurer GS37 (кожа) Glamour</h2></li>
							<li><a href="http://hometech.elitno.net/maska-dlya-nog-baby-foot-1030r.php"><img src="photos/3d4dc7b0b0bda1f2ab085baf1dea3a46.jpeg" alt="зеркало игрушка Маска для ног Baby Foot" title="зеркало игрушка Маска для ног Baby Foot"></a><h2>Маска для ног Baby Foot</h2></li>
							<li><a href="http://hometech.elitno.net/ofisnoe-massazhnoe-kreslo-us-medica-chicago-25000r.php"><img src="photos/f4f525ef8dc957711c174f314a48fb88.jpeg" alt="зеркала на машину Офисное массажное кресло US Medica Chicago" title="зеркала на машину Офисное массажное кресло US Medica Chicago"></a><h2>Офисное массажное кресло US Medica Chicago</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>игра загадка волшебного зеркала Насадка Палочка для КАРАТ ДЕ-212 Дарсонваль</h1>
						<div class="tb"><p>Цена: от <span class="price">300</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_791.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Медицинский аппарат Дарсонваль пользуется невероятной популярностью во всем мире. Прибор предназначен для профилактики и лечения огромного количества всяческих заболеваний. Он очень прост в эксплуатации и практически не имеет противопоказаний. <b>Насадка Палочка для КАРАТ ДЕ-212 Дарсонваль</b> применяется для точечного воздействия на кожу, для лечения заболеваний в различных полостях тела.</p> игра загадка волшебного зеркала</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/921b5abf5fd22743c43409e559d706e6.jpeg" alt="где научиться массажу Гидромассажер для ванны Sanitas SLS 30" title="где научиться массажу Гидромассажер для ванны Sanitas SLS 30"><div class="box"><a href="http://hometech.elitno.net/gidromassazher-dlya-vanny-sanitas-sls-3500r.php"><h3 class="title">где научиться массажу Гидромассажер для ванны Sanitas SLS 30</h3><p>от <span class="price">3500</span> руб.</p></a></div></li>
						<li><img src="photos/9f1f118485079a64f3c566d47f0bfff9.jpeg" alt="массаж в севастополе Скульптор тела массажер Relax & Tone (Релакс энд Тон)" title="массаж в севастополе Скульптор тела массажер Relax & Tone (Релакс энд Тон)"><div class="box" page="skulptor-tela-massazher-relax-tone-relaks-end-ton-1100r"><span class="title">массаж в севастополе Скульптор тела массажер Relax & Tone (Релакс энд Тон)</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/824ee45e08163a2c1814ad6f375574d1.png" alt="женщина перед зеркалом Ручной массажер US-Medica Magic Peeling" title="женщина перед зеркалом Ручной массажер US-Medica Magic Peeling"><div class="box" page="ruchnoy-massazher-usmedica-magic-peeling-990r"><span class="title">женщина перед зеркалом Ручной массажер US-Medica Magic Peeling</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/bea75616ebe33c954c6ddf8f2c004348.jpeg" alt="косметика для солярия интернет магазин Массажер для тела Beurer MG158" title="косметика для солярия интернет магазин Массажер для тела Beurer MG158"><div class="box" page="massazher-dlya-tela-beurer-mg-1750r"><span class="title">косметика для солярия интернет магазин Массажер для тела Beurer MG158</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li class="large"><img src="photos/efecfdd903b36bfb57ecf33e62da8ced.jpeg" alt="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E" title="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E"><div class="box" page="vibromassazher-clear-fit-extra-beauty-cf-e-9490r"><span class="title">зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E</span><p>от <span class="price">9490</span> руб.</p></div></li>
						<li class="large"><img src="photos/72310b366259e325ba7e2f2664841d6e.jpeg" alt="зеркало с навигатором Вибромассажер с инфракрасным излучением BODYKRAFT M-40W" title="зеркало с навигатором Вибромассажер с инфракрасным излучением BODYKRAFT M-40W"><div class="box" page="vibromassazher-s-infrakrasnym-izlucheniem-bodykraft-mw-1750r"><span class="title">зеркало с навигатором Вибромассажер с инфракрасным излучением BODYKRAFT M-40W</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li class="large"><img src="photos/c9b4e69f5bfa41c27bc7caaca943fbb7.jpeg" alt="акриловое зеркало Машинка для стрижки и бикини дизайна 5 в 1 Gezatone DP503" title="акриловое зеркало Машинка для стрижки и бикини дизайна 5 в 1 Gezatone DP503"><div class="box" page="mashinka-dlya-strizhki-i-bikini-dizayna-v-gezatone-dp-1380r"><span class="title">акриловое зеркало Машинка для стрижки и бикини дизайна 5 в 1 Gezatone DP503</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li><img src="photos/c1e44ae0346cc39b27bb78d6ca139c3e.jpeg" alt="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл" title="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл"><div class="box" page="loson-posle-depilyacii-rica-mentolovyy-ml-600r"><span class="title">зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/deb641c0c651e619c7356b65a8874c43.jpeg" alt="новый год в зеркале Фен Valera Swiss Turbo 8200 Ionic Tourmaline" title="новый год в зеркале Фен Valera Swiss Turbo 8200 Ionic Tourmaline"><div class="box" page="fen-valera-swiss-turbo-ionic-tourmaline-3530r"><span class="title">новый год в зеркале Фен Valera Swiss Turbo 8200 Ionic Tourmaline</span><p>от <span class="price">3530</span> руб.</p></div></li>
						<li><img src="photos/4d14f143b5be3fa914764db01c50d2b4.jpeg" alt="заточка ножей машинки для стрижки Фен Atlanta АТН-860" title="заточка ножей машинки для стрижки Фен Atlanta АТН-860"><div class="box" page="fen-atlanta-atn-500r"><span class="title">заточка ножей машинки для стрижки Фен Atlanta АТН-860</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/d217ea2832633ad5dc0567781a6cfc9a.jpeg" alt="делает массаж мужику Чистящая насадка Philips HX6013-02 для Sonicare Flex Care, 3шт HX6011-02" title="делает массаж мужику Чистящая насадка Philips HX6013-02 для Sonicare Flex Care, 3шт HX6011-02"><div class="box" page="chistyaschaya-nasadka-philips-hx-dlya-sonicare-flex-care-sht-hx-1100r"><span class="title">делает массаж мужику Чистящая насадка Philips HX6013-02 для Sonicare Flex Care, 3шт HX6011-02</span><p>от <span class="price">1100</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("nasadka-palochka-dlya-karat-de-darsonval-300r.php", 0, -4); if (file_exists("comments/nasadka-palochka-dlya-karat-de-darsonval-300r.php")) require_once "comments/nasadka-palochka-dlya-karat-de-darsonval-300r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="nasadka-palochka-dlya-karat-de-darsonval-300r.php" method="post" onsubmit="return checkForm(this)">
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