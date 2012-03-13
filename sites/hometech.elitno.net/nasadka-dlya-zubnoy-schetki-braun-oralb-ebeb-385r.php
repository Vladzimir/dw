<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("nasadka-dlya-zubnoy-schetki-braun-oralb-ebeb-385r.php","машинки для стрижки волос магазин");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("nasadka-dlya-zubnoy-schetki-braun-oralb-ebeb-385r.php", $nick, $comment);
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
		<title>машинки для стрижки волос магазин Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="машинки для стрижки волос магазин, солярий philips купить, косметическое зеркало купить, массаж слепых, предлагаю массаж, осмотр гинекологическим зеркалом, массаж набережные челны, массаж пальчиков, солярий киров, замена зеркала 2110, зеркало на опель астра, массаж русской девушки, косметика для солярия интернет магазин, ионизатор воды купить,  дарсонваль купить в спб">
		<meta name="description" content="машинки для стрижки волос магазин Новые насадки Oral-B EB17-2 обладают уникальной щетиной FlexiSoft. При контакте ...">
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
						<a class="photo" href="photos/e146d9c559ab30a96ca55f774b626a59.jpeg" title="машинки для стрижки волос магазин Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)"><img src="photos/e146d9c559ab30a96ca55f774b626a59.jpeg" alt="машинки для стрижки волос магазин Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)" title="машинки для стрижки волос магазин Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-ir-remote-steklo-2600r.php"><img src="photos/ef5320c202974eea3fb769add4663d71.jpeg" alt="солярий philips купить Весы электронные напольные Beurer GS43 IR remote (стекло)" title="солярий philips купить Весы электронные напольные Beurer GS43 IR remote (стекло)"></a><h2>Весы электронные напольные Beurer GS43 IR remote (стекло)</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-ps-2100r.php"><img src="photos/d9264ad16a0de4ef44c572b9c1a57a33.jpeg" alt="косметическое зеркало купить Весы электронные напольные Beurer PS24" title="косметическое зеркало купить Весы электронные напольные Beurer PS24"></a><h2>Весы электронные напольные Beurer PS24</h2></li>
							<li><a href="http://hometech.elitno.net/karat-de-darsonval-s-chetyrmya-smennymi-nasadkami-2990r.php"><img src="photos/43322e66f76e6634ad9a2abdfb261bdb.jpeg" alt="массаж слепых КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками" title="массаж слепых КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками"></a><h2>КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>машинки для стрижки волос магазин Насадка для зубной щетки BRAUN Oral-B  EB17-2(EB20-2)</h1>
						<div class="tb"><p>Цена: от <span class="price">385</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19586.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Новые насадки Oral-B EB17-2 обладают уникальной щетиной FlexiSoft. При контакте с водой уникальные волокна щетинок реагируют по-разному, что позволяет им изгибаться.</p><p>Это позволяет оптимизировать воздействие насадки и создает ощущение потрясающе гладкой поверхности зубов после чистки. При этом голубые пучки Interdental Tips легко проникают в пространства между зубами, для еще более эффективной очистки. А голубые щетинки Indicator напомнят Вам о необходимости сменить насадку.</p><p><b>Подходит к зубным щеткам:</b></p><ul type=disc><li>Oral-B Triumph <li>Oral-B Professional Care <li>Oral-B Vitality <li>Oral-B Advance Power<b></b> </li></ul><p><b>Производитель: Германия</b></p> машинки для стрижки волос магазин</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ebe73366b541ce25ab906d91486c2572.jpeg" alt="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм" title="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм"><div class="box" page="schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1430r"><span class="title">предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм</span><p>от <span class="price">1430</span> руб.</p></div></li>
						<li><img src="photos/9f9dc0e1195bb1adbadd2a8107ad8de9.jpeg" alt="осмотр гинекологическим зеркалом Зеркало  Beurer BS 49 косметическое" title="осмотр гинекологическим зеркалом Зеркало  Beurer BS 49 косметическое"><div class="box" page="zerkalo-beurer-bs-kosmeticheskoe-1250r"><span class="title">осмотр гинекологическим зеркалом Зеркало  Beurer BS 49 косметическое</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li><img src="photos/c6583d1d53fcdff921f052e4d4a020d2.jpeg" alt="массаж набережные челны Зеркало косметологическое с подсветкой LM110 1301203" title="массаж набережные челны Зеркало косметологическое с подсветкой LM110 1301203"><div class="box" page="zerkalo-kosmetologicheskoe-s-podsvetkoy-lm-1100r"><span class="title">массаж набережные челны Зеркало косметологическое с подсветкой LM110 1301203</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/0891aaac96a9696aa1419e17da073bfe.jpeg" alt="массаж пальчиков Осеребритель воды Георгий" title="массаж пальчиков Осеребритель воды Георгий"><div class="box" page="oserebritel-vody-georgiy-2880r"><span class="title">массаж пальчиков Осеребритель воды Георгий</span><p>от <span class="price">2880</span> руб.</p></div></li>
						<li class="large"><img src="photos/9a2bc44bf6a5d738109f051af1b10196.jpeg" alt="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M"><div class="box" page="nabor-nazalnyh-nasadok-k-irrigatoru-sht-donfeel-orm-270r"><span class="title">солярий киров Набор назальных насадок к ирригатору (2 шт) DONFEEL OR-820M</span><p>от <span class="price">270</span> руб.</p></div></li>
						<li class="large"><img src="photos/3d4ff223442431b121dd91ae8e45e929.jpeg" alt="замена зеркала 2110 Beurer MC5000 Массажное кресло" title="замена зеркала 2110 Beurer MC5000 Массажное кресло"><div class="box" page="beurer-mc-massazhnoe-kreslo-95000r"><span class="title">замена зеркала 2110 Beurer MC5000 Массажное кресло</span><p>от <span class="price">95000</span> руб.</p></div></li>
						<li class="large"><img src="photos/234e7f009134ec4e716a50e2c790eb7e.jpeg" alt="зеркало на опель астра Аппликатор Ляпко Коврик 6,8" title="зеркало на опель астра Аппликатор Ляпко Коврик 6,8"><div class="box" page="applikator-lyapko-kovrik-2720r"><span class="title">зеркало на опель астра Аппликатор Ляпко Коврик 6,8</span><p>от <span class="price">2720</span> руб.</p></div></li>
						<li><img src="photos/80f522fd41a08647e0c5b4392d78118e.jpeg" alt="массаж русской девушки Массажер для шеи Wrap Neck & Shoulder" title="массаж русской девушки Массажер для шеи Wrap Neck & Shoulder"><div class="box" page="massazher-dlya-shei-wrap-neck-shoulder-2550r"><span class="title">массаж русской девушки Массажер для шеи Wrap Neck & Shoulder</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li><img src="photos/bea75616ebe33c954c6ddf8f2c004348.jpeg" alt="косметика для солярия интернет магазин Массажер для тела Beurer MG158" title="косметика для солярия интернет магазин Массажер для тела Beurer MG158"><div class="box" page="massazher-dlya-tela-beurer-mg-1750r"><span class="title">косметика для солярия интернет магазин Массажер для тела Beurer MG158</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/fcd83a4c7808450baa40295368adf3c5.jpeg" alt="бигуди на голове Гель перед депиляцией Rica, с экстрактом хлопка 250мл" title="бигуди на голове Гель перед депиляцией Rica, с экстрактом хлопка 250мл"><div class="box" page="gel-pered-depilyaciey-rica-s-ekstraktom-hlopka-ml-600r"><span class="title">бигуди на голове Гель перед депиляцией Rica, с экстрактом хлопка 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("nasadka-dlya-zubnoy-schetki-braun-oralb-ebeb-385r.php", 0, -4); if (file_exists("comments/nasadka-dlya-zubnoy-schetki-braun-oralb-ebeb-385r.php")) require_once "comments/nasadka-dlya-zubnoy-schetki-braun-oralb-ebeb-385r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="nasadka-dlya-zubnoy-schetki-braun-oralb-ebeb-385r.php" method="post" onsubmit="return checkForm(this)">
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