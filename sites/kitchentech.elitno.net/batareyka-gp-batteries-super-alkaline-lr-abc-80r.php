<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("batareyka-gp-batteries-super-alkaline-lr-abc-80r.php","микроволновая печь candy");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("batareyka-gp-batteries-super-alkaline-lr-abc-80r.php", $nick, $comment);
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
		<title>микроволновая печь candy Батарейка GP Batteries Super alkaline LR6 15A-BC4  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="микроволновая печь candy, микроволновая печь польза, пылесборники для пылесосов philips, тольятти мультиварка, аэрогриль форум, хлебопечка хлеб из гречневой муки, мультиварка minute cook, аэрогриль hotter economy, хлебопечки донецк, пылесос bork v500, греется пылесос, мясорубка белвар отзывы, доска для парогенератора, хлебопечка советы,  какие дрожжи лучше для хлебопечки">
		<meta name="description" content="микроволновая печь candy Батарейки типа АА от марки GP Batteries изготовлены по алкалиновой технологии пр...">
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
						<a class="photo" href="photos/e19a6a84ed749d263503c61eb89d253b.jpeg" title="микроволновая печь candy Батарейка GP Batteries Super alkaline LR6 15A-BC4"><img src="photos/e19a6a84ed749d263503c61eb89d253b.jpeg" alt="микроволновая печь candy Батарейка GP Batteries Super alkaline LR6 15A-BC4" title="микроволновая печь candy Батарейка GP Batteries Super alkaline LR6 15A-BC4 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-krasnaya-29530r.php"><img src="photos/39e04c91cf56d7c949379d4f2e2d6076.jpeg" alt="микроволновая печь польза Автоматическая кофемашина Melitta CAFFEO Lattea, красная" title="микроволновая печь польза Автоматическая кофемашина Melitta CAFFEO Lattea, красная"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea, красная</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-ci-serebristaya-65999r.php"><img src="photos/1eb9b0b00689e076b5895b91684c957e.jpeg" alt="пылесборники для пылесосов philips Автоматическая кофемашина Melitta CAFFEO CI, серебристая" title="пылесборники для пылесосов philips Автоматическая кофемашина Melitta CAFFEO CI, серебристая"></a><h2>Автоматическая кофемашина Melitta CAFFEO CI, серебристая</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-maxima-mcg-650r.php"><img src="photos/833ae77791168206a3b151985fda9a0b.jpeg" alt="тольятти мультиварка Кофемолка Maxima MCG-0316" title="тольятти мультиварка Кофемолка Maxima MCG-0316"></a><h2>Кофемолка Maxima MCG-0316</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>микроволновая печь candy Батарейка GP Batteries Super alkaline LR6 15A-BC4</h1>
						<div class="tb"><p>Цена: от <span class="price">80</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16531.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Батарейки типа АА от марки GP Batteries изготовлены по алкалиновой технологии производства и не содержат ртути. Они обладают энергоемкостью в несколько раз превышающей солевые элементы питания. Можно использовать для электронных игрушек, цифровой техники, фонариков, пультов управления и т.д. В комплекте 4 штуки.</p><p><b>Характеристики:</b></p><ul type=disc><li>Технология производства: алкалиновая <li>Типоразмер: AA <li>Напряжение: 1.5V <li>Не содержат кадмия и ртути - экологически чистый продукт. <li>Обладают повышенной электрической емкостью. <li>Батарейки идеально подходят для устройств с высоким потреблением энергии. <li>Особенно эффективны в изделиях с высоким током потребления, таких как плееры, фонари, фотовспышки, электронные игрушки, переносные ТВ и т.д.</li></ul><p><b>Производитель:</b> GP Batteries.</p><p><b>Страна:</b> Гонконг.</p> микроволновая печь candy</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8c0aa6f2022172974ae917a715c05f94.jpeg" alt="аэрогриль форум Пароварка Vitek VT-1550N SR" title="аэрогриль форум Пароварка Vitek VT-1550N SR"><div class="box"><a href="http://kitchentech.elitno.net/parovarka-vitek-vtn-sr-2200r.php"><h3 class="title">аэрогриль форум Пароварка Vitek VT-1550N SR</h3><p>от <span class="price">2200</span> руб.</p></a></div></li>
						<li><img src="photos/7ffc20dc8107b2fc1365cfb7486e823a.jpeg" alt="хлебопечка хлеб из гречневой муки Индукционная плита Kitfort KT-101" title="хлебопечка хлеб из гречневой муки Индукционная плита Kitfort KT-101"><div class="box" page="indukcionnaya-plita-kitfort-kt-2700r"><span class="title">хлебопечка хлеб из гречневой муки Индукционная плита Kitfort KT-101</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/96ffa32e5276885766eccd4b00ddf567.jpeg" alt="мультиварка minute cook Соковыжималка цитрусовая дизайнерская Zauber X-860" title="мультиварка minute cook Соковыжималка цитрусовая дизайнерская Zauber X-860"><div class="box" page="sokovyzhimalka-citrusovaya-dizaynerskaya-zauber-x-1550r"><span class="title">мультиварка minute cook Соковыжималка цитрусовая дизайнерская Zauber X-860</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" alt="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный" title="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1790r"><span class="title">аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li class="large"><img src="photos/9fa2c66d96aa7d709453ef3a635c60c2.jpeg" alt="хлебопечки донецк Чайник электрический Moulinex BY5200 2 л" title="хлебопечки донецк Чайник электрический Moulinex BY5200 2 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-2650r"><span class="title">хлебопечки донецк Чайник электрический Moulinex BY5200 2 л</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/aad075f22e1967e01f21286f7d5da33a.jpeg" alt="пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом" title="пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом"><div class="box" page="chaynik-vitek-vt-s-keramicheskim-korpusom-3450r"><span class="title">пылесос bork v500 Чайник Vitek VT-1161 с керамическим корпусом</span><p>от <span class="price">3450</span> руб.</p></div></li>
						<li class="large"><img src="photos/f529cddb8b0b7bbdfe7eea8e3d43b5b1.jpeg" alt="греется пылесос Чайник электрический Atlanta ATH-752" title="греется пылесос Чайник электрический Atlanta ATH-752"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-1600r-2"><span class="title">греется пылесос Чайник электрический Atlanta ATH-752</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/10b8ffb3398d2d300d11c2e37221e09e.jpeg" alt="мясорубка белвар отзывы Чайник электрический Maxima МК-G114" title="мясорубка белвар отзывы Чайник электрический Maxima МК-G114"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-990r"><span class="title">мясорубка белвар отзывы Чайник электрический Maxima МК-G114</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/b29beb2174e6fe7aaeffea7945e79604.jpeg" alt="доска для парогенератора Аккумуляторы GP Batteries Rechargeable 2700 мАч 270AAHC-UC2 PET-G" title="доска для парогенератора Аккумуляторы GP Batteries Rechargeable 2700 мАч 270AAHC-UC2 PET-G"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aahcuc-petg-480r"><span class="title">доска для парогенератора Аккумуляторы GP Batteries Rechargeable 2700 мАч 270AAHC-UC2 PET-G</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/cc9208f636d59db8c6c0a8ac95064dc7.jpeg" alt="хлебопечка советы Шланг подачи воды c фильтром Karcher 4.440-238.0" title="хлебопечка советы Шланг подачи воды c фильтром Karcher 4.440-238.0"><div class="box" page="shlang-podachi-vody-c-filtrom-karcher-1750r"><span class="title">хлебопечка советы Шланг подачи воды c фильтром Karcher 4.440-238.0</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/fdcb89c9c94f7f3223bb9f8f472f7a54.jpeg" alt="пылесос zelmer цена Пятновыводитель Dyson Dyzolv" title="пылесос zelmer цена Пятновыводитель Dyson Dyzolv"><div class="box" page="pyatnovyvoditel-dyson-dyzolv-790r"><span class="title">пылесос zelmer цена Пятновыводитель Dyson Dyzolv</span><p>от <span class="price">790</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("batareyka-gp-batteries-super-alkaline-lr-abc-80r.php", 0, -4); if (file_exists("comments/batareyka-gp-batteries-super-alkaline-lr-abc-80r.php")) require_once "comments/batareyka-gp-batteries-super-alkaline-lr-abc-80r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="batareyka-gp-batteries-super-alkaline-lr-abc-80r.php" method="post" onsubmit="return checkForm(this)">
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