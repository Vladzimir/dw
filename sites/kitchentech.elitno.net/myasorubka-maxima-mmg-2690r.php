<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("myasorubka-maxima-mmg-2690r.php","мясорубка moulinex me 4151");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("myasorubka-maxima-mmg-2690r.php", $nick, $comment);
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
		<title>мясорубка moulinex me 4151 Мясорубка Maxima MMG-0212  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мясорубка moulinex me 4151, микроволновая печь вред, аэрогриль pag 1205d, пылесос прессующий, рецепт пельменей в хлебопечке, грибы в мультиварке, рисование утюгом, блендер philips hr 1617, щетка для пылесоса electrolux, описание пылесоса, микроволновые печи с духовкой, доска для парогенератора, лучшие рецепты для мультиварки, мультиварка dmc 50,  блендер vita mix">
		<meta name="description" content="мясорубка moulinex me 4151 Мясорубка Maxima, мощностью 1200 Вт, станет незаменимым помощником на Вашей  кух...">
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
						<a class="photo" href="photos/83b963fc4661f051cc9c631952fa196f.jpeg" title="мясорубка moulinex me 4151 Мясорубка Maxima MMG-0212"><img src="photos/83b963fc4661f051cc9c631952fa196f.jpeg" alt="мясорубка moulinex me 4151 Мясорубка Maxima MMG-0212" title="мясорубка moulinex me 4151 Мясорубка Maxima MMG-0212 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-omelette-hc-1960r.php"><img src="photos/9b2c766be9aca21d9cbe5748b263718f.jpeg" alt="микроволновая печь вред Блендер Braun MR-120 Omelette HC" title="микроволновая печь вред Блендер Braun MR-120 Omelette HC"></a><h2>Блендер Braun MR-120 Omelette HC</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-fioletovaya-29530r.php"><img src="photos/d992bf4d2cd488df4b63963039c83898.jpeg" alt="аэрогриль pag 1205d Автоматическая кофемашина Melitta CAFFEO Lattea, фиолетовая" title="аэрогриль pag 1205d Автоматическая кофемашина Melitta CAFFEO Lattea, фиолетовая"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea, фиолетовая</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-maxima-mfp-2190r.php"><img src="photos/3ee610b7cf277344aaeccda38d02c2fc.jpeg" alt="пылесос прессующий Кухонный комбайн Maxima MFP-0139" title="пылесос прессующий Кухонный комбайн Maxima MFP-0139"></a><h2>Кухонный комбайн Maxima MFP-0139</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мясорубка moulinex me 4151 Мясорубка Maxima MMG-0212</h1>
						<div class="tb"><p>Цена: от <span class="price">2690</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20502.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Мясорубка Maxima, мощностью 1200 Вт, станет незаменимым помощником на Вашей  кухне! Для безопасности использования в комплекте поставки предусмотрен удобный  толкатель для продуктов и пластиковый лоток для подачи мяса. В комплекте  поставки идут разные насадки, в том числе насадки для приготовления колбасок и  сосисок. Предусмотрена защита от перегрузки и функция «Реверс». Диски для  приготовления фарша перфорированные, с отверстиями разного диаметра.</p><p><br><strong>Характеристики:</strong></p><ul><li>Мощность: 1200 Вт;</li><li>Защита от перегрузки;</li><li>Система реверса;</li><li>Перфорированный диск для фарша;</li><li>Насадка для приготовления колбас;</li><li>Материал: металл/пластик;</li><li>Прорезиненные ножки;</li></ul><p><strong>Производитель:</strong><strong> Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong><br><strong>Гарантия: 12 месяцев</strong></p> мясорубка moulinex me 4151</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d325e4ff8de4614af80db126de07173a.jpeg" alt="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8" title="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8"><div class="box" page="myasorubka-redmond-rmg-6690r"><span class="title">рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8</span><p>от <span class="price">6690</span> руб.</p></div></li>
						<li><img src="photos/07f90c95ce6a7ffe3129c0eb4bb8942c.jpeg" alt="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146" title="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146"><div class="box" page="elektroplitka-indukcionnaya-maxima-mic-1590r"><span class="title">грибы в мультиварке Электроплитка индукционная Maxima MIC-0146</span><p>от <span class="price">1590</span> руб.</p></div></li>
						<li><img src="photos/1f7b9f216facd163cc074eb10bad1faf.jpeg" alt="рисование утюгом Соковыжималка Moulinex BKA1" title="рисование утюгом Соковыжималка Moulinex BKA1"><div class="box" page="sokovyzhimalka-moulinex-bka-2400r"><span class="title">рисование утюгом Соковыжималка Moulinex BKA1</span><p>от <span class="price">2400</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/d0af4bd740dd75cf948a8f00224c2bee.jpeg" alt="щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White" title="щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-white-1080r"><span class="title">щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White</span><p>от <span class="price">1080</span> руб.</p></div></li>
						<li class="large"><img src="photos/cfef38cef319ef880fc0959319ecdb34.jpeg" alt="описание пылесоса Чайник электрический Vitek VT-1154" title="описание пылесоса Чайник электрический Vitek VT-1154"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1010r"><span class="title">описание пылесоса Чайник электрический Vitek VT-1154</span><p>от <span class="price">1010</span> руб.</p></div></li>
						<li class="large"><img src="photos/06055c0461eed094ac9207cd105de4ec.jpeg" alt="микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO" title="микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO"><div class="box" page="elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2740r"><span class="title">микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/b29beb2174e6fe7aaeffea7945e79604.jpeg" alt="доска для парогенератора Аккумуляторы GP Batteries Rechargeable 2700 мАч 270AAHC-UC2 PET-G" title="доска для парогенератора Аккумуляторы GP Batteries Rechargeable 2700 мАч 270AAHC-UC2 PET-G"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aahcuc-petg-480r"><span class="title">доска для парогенератора Аккумуляторы GP Batteries Rechargeable 2700 мАч 270AAHC-UC2 PET-G</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/bf71bbc1609948054c42cfa52f5f228d.jpeg" alt="лучшие рецепты для мультиварки Набор мешков-пылесборников 50 (790-012) для Thomas" title="лучшие рецепты для мультиварки Набор мешков-пылесборников 50 (790-012) для Thomas"><div class="box" page="nabor-meshkovpylesbornikov-dlya-thomas-1100r"><span class="title">лучшие рецепты для мультиварки Набор мешков-пылесборников 50 (790-012) для Thomas</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/3cc5e8332a258bdc15c937c983eab90b.jpeg" alt="мультиварка dmc 50 Пылесос Dyson allergy DC 26" title="мультиварка dmc 50 Пылесос Dyson allergy DC 26"><div class="box" page="pylesos-dyson-allergy-dc-20990r"><span class="title">мультиварка dmc 50 Пылесос Dyson allergy DC 26</span><p>от <span class="price">20990</span> руб.</p></div></li>
						<li><img src="photos/ebd6fc853a788b316468033f41ae3864.jpeg" alt="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22" title="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22"><div class="box" page="pylesos-dyson-motorhead-dc-34990r"><span class="title">мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22</span><p>от <span class="price">34990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("myasorubka-maxima-mmg-2690r.php", 0, -4); if (file_exists("comments/myasorubka-maxima-mmg-2690r.php")) require_once "comments/myasorubka-maxima-mmg-2690r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="myasorubka-maxima-mmg-2690r.php" method="post" onsubmit="return checkForm(this)">
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