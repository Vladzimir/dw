<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("myasorubka-elektricheskaya-vitek-vt-serebryanaya-3650r.php","хлебопечка zelmer");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("myasorubka-elektricheskaya-vitek-vt-serebryanaya-3650r.php", $nick, $comment);
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
		<title>хлебопечка zelmer Мясорубка электрическая Vitek VT-1672 серебряная  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка zelmer, купить мультиварку в москве, кофеварка delonghi eco 310, соковыжималка для моркови, мультиварка supra mcs 4511 рецепты, эльдорадо кофемашины, кофемолка bosch, щетка для пылесоса electrolux, белоруссия соковыжималка, ремонт пылесосов бош, каша на воде в мультиварке, panasonic мясорубка отзывы, рецепты для мультиварки cuckoo, кофемашина saeco xsmall,  блендер рецепты видео">
		<meta name="description" content="хлебопечка zelmer Мясорубка Vitek VT-1672 с мощностью 1100Вт отличается простотой в использовании ...">
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
						<a class="photo" href="photos/7c640af98399cc1caf99796cb169cc20.jpeg" title="хлебопечка zelmer Мясорубка электрическая Vitek VT-1672 серебряная"><img src="photos/7c640af98399cc1caf99796cb169cc20.jpeg" alt="хлебопечка zelmer Мясорубка электрическая Vitek VT-1672 серебряная" title="хлебопечка zelmer Мясорубка электрическая Vitek VT-1672 серебряная -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-omlette-2340r.php"><img src="photos/668c9122471ae31724b2b2dffa8eafbb.jpeg" alt="купить мультиварку в москве Блендер Braun MR-320 Omlette" title="купить мультиварку в москве Блендер Braun MR-320 Omlette"></a><h2>Блендер Braun MR-320 Omlette</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-2400r.php"><img src="photos/c875beb952f9d6580895bee02e6ce554.jpeg" alt="кофеварка delonghi eco 310 Блендер Braun MX-2000" title="кофеварка delonghi eco 310 Блендер Braun MX-2000"></a><h2>Блендер Braun MX-2000</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-680r.php"><img src="photos/6e844ec2051132de84c89f71f9ba6d6a.jpeg" alt="соковыжималка для моркови Кухонный комбайн ATH-360" title="соковыжималка для моркови Кухонный комбайн ATH-360"></a><h2>Кухонный комбайн ATH-360</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка zelmer Мясорубка электрическая Vitek VT-1672 серебряная</h1>
						<div class="tb"><p>Цена: от <span class="price">3650</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8414.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Мясорубка <b>V</b><b>itek</b><b> VT-1672 </b>с мощностью 1100Вт отличается простотой в использовании и станет незаменимым помощником в вашем доме. В комплекте идут: 3 вида дисков для измельчения продуктов, 3 насадки для обработки овощей, а также насадка кеббе для приготовления сосисок. Также в модели предусмотрена система реверса.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 1100Вт <li>3 вида дисков для измельчения продуктов <li>3 насадки для обработки овощей <li>Насадка «кеббе» и приготовления сосисок <li>Функция реверс <li>Диски и ножи из высококачественной стали <li>Металлический лоток <li>Толкатель для продуктов <li>Противоскользящие прорезиненные ножки <li>Ключ, позволяющий быстро разбирать мясорубку</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> хлебопечка zelmer</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/14254c1054a9b51ad0f6053cc6836580.jpeg" alt="мультиварка supra mcs 4511 рецепты Маринатор Food Mixer 9 Minute Marinator" title="мультиварка supra mcs 4511 рецепты Маринатор Food Mixer 9 Minute Marinator"><div class="box"><a href="http://kitchentech.elitno.net/marinator-food-mixer-minute-marinator-1500r.php"><h3 class="title">мультиварка supra mcs 4511 рецепты Маринатор Food Mixer 9 Minute Marinator</h3><p>от <span class="price">1500</span> руб.</p></a></div></li>
						<li><img src="photos/5e475c33aea662be8e01a1f2443fb6c0.jpeg" alt="эльдорадо кофемашины Микроволновая печь Vitek VT-1684" title="эльдорадо кофемашины Микроволновая печь Vitek VT-1684"><div class="box" page="mikrovolnovaya-pech-vitek-vt-3870r"><span class="title">эльдорадо кофемашины Микроволновая печь Vitek VT-1684</span><p>от <span class="price">3870</span> руб.</p></div></li>
						<li><img src="photos/5ac0b374c54627e297ebdd1a47a1cc62.jpeg" alt="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро" title="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро"><div class="box" page="mikrovolnovaya-pech-s-konvekciey-moulinex-mw-hlebopechka-l-serebro-12050r"><span class="title">кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро</span><p>от <span class="price">12050</span> руб.</p></div></li>
						<li><img src="photos/74bbce31ddb28c5063f247363080794a.jpeg" alt="щетка для пылесоса electrolux Чаша для мультиварки Redmond IPRMC-M4502" title="щетка для пылесоса electrolux Чаша для мультиварки Redmond IPRMC-M4502"><div class="box" page="chasha-dlya-multivarki-redmond-iprmcm-990r"><span class="title">щетка для пылесоса electrolux Чаша для мультиварки Redmond IPRMC-M4502</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/32c26854e293b25040685f60b879a50b.jpeg" alt="белоруссия соковыжималка Мясорубка  Atlanta ATH-370" title="белоруссия соковыжималка Мясорубка  Atlanta ATH-370"><div class="box" page="myasorubka-atlanta-ath-2500r"><span class="title">белоруссия соковыжималка Мясорубка  Atlanta ATH-370</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li class="large"><img src="photos/5150ac82725ad8b6206019fefda496f4.jpeg" alt="ремонт пылесосов бош A&D NP-20KS Порционные весы" title="ремонт пылесосов бош A&D NP-20KS Порционные весы"><div class="box" page="ad-npks-porcionnye-vesy-7150r"><span class="title">ремонт пылесосов бош A&D NP-20KS Порционные весы</span><p>от <span class="price">7150</span> руб.</p></div></li>
						<li class="large"><img src="photos/480398a0d650a7b1a9641ca193d5ca18.jpeg" alt="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л" title="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-2350r"><span class="title">каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735" title="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-450r"><span class="title">panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/5b880c439b70bdcfe7580a48a2aa9fb4.jpeg" alt="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник" title="рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник"><div class="box" page="melitta-enjoy-aqua-chaynik-0r"><span class="title">рецепты для мультиварки cuckoo Melitta Enjoy Aqua Чайник</span><p>от <span class="price">0</span> руб.</p></div></li>
						<li><img src="photos/20a6a481b9a3a072fa1293146dcb1ec9.jpeg" alt="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter" title="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-super-s-aquafilter-10520r"><span class="title">кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter</span><p>от <span class="price">10520</span> руб.</p></div></li>
						<li><img src="photos/292e6011285b984f12ba49506a158a8f.jpeg" alt="пылесос филипс 9174 Пылесос Redmond RV-309" title="пылесос филипс 9174 Пылесос Redmond RV-309"><div class="box" page="pylesos-redmond-rv-5490r"><span class="title">пылесос филипс 9174 Пылесос Redmond RV-309</span><p>от <span class="price">5490</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("myasorubka-elektricheskaya-vitek-vt-serebryanaya-3650r.php", 0, -4); if (file_exists("comments/myasorubka-elektricheskaya-vitek-vt-serebryanaya-3650r.php")) require_once "comments/myasorubka-elektricheskaya-vitek-vt-serebryanaya-3650r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="myasorubka-elektricheskaya-vitek-vt-serebryanaya-3650r.php" method="post" onsubmit="return checkForm(this)">
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