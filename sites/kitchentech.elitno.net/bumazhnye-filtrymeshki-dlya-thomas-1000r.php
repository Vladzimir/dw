<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("bumazhnye-filtrymeshki-dlya-thomas-1000r.php","на пару без пароварки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("bumazhnye-filtrymeshki-dlya-thomas-1000r.php", $nick, $comment);
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
		<title>на пару без пароварки Бумажные фильтры-мешки 200 (787-100) для Thomas  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="на пару без пароварки, кофеварка френч пресс, рецепт курицы в мультиварке, рецепт пиццы в хлебопечке, капсулы для кофемашины купить, купить блендер bosch, куриные грудки в мультиварке, пакеты для пылесоса, тканевый мешок для пылесоса, вафельница орешек 4, аэрогриль поларис отзывы, стоит ли покупать мультиварку, пылесос для сухой чистки, кофеварка дольче густо отзывы,  пылесосы филлипс">
		<meta name="description" content="на пару без пароварки Бумажные фильтры-мешки выпускаются в упаковке из пяти штук. Они отличаются высок...">
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
						<a class="photo" href="photos/b423fb6caec639a7de8db20512fac098.jpeg" title="на пару без пароварки Бумажные фильтры-мешки 200 (787-100) для Thomas"><img src="photos/b423fb6caec639a7de8db20512fac098.jpeg" alt="на пару без пароварки Бумажные фильтры-мешки 200 (787-100) для Thomas" title="на пару без пароварки Бумажные фильтры-мешки 200 (787-100) для Thomas -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-redmond-rfp-5390r.php"><img src="photos/eeb9eab6db603b9616a92fc025537c6c.jpeg" alt="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903" title="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903"></a><h2>Кухонный комбайн Redmond  RFP-3903</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-750r.php"><img src="photos/4a8644a2c29f22e2d9c92389f96ff2ab.jpeg" alt="рецепт курицы в мультиварке Кухонный комбайн ATH-350" title="рецепт курицы в мультиварке Кухонный комбайн ATH-350"></a><h2>Кухонный комбайн ATH-350</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskaya-kofemolka-bodum-bistro-euro-belaya-5730r.php"><img src="photos/7182cc256e7e3343e3aec4d550f1f314.jpeg" alt="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая" title="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая"></a><h2>Электрическая кофемолка Bodum BISTRO 10903-913EURO белая</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>на пару без пароварки Бумажные фильтры-мешки 200 (787-100) для Thomas</h1>
						<div class="tb"><p>Цена: от <span class="price">1000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14807.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Бумажные фильтры-мешки выпускаются в упаковке из пяти штук. Они отличаются высокой прочностью, совместимы с моделями пылесосов фирмы Thomas: 820/920/1020/INOX 1220/1220 plus/1220 S/1520 plus/POWER BOY 1218/1218 plus/1518/Hobby Vac/Hobby 1000/JUNIOR 1216/1516.</p><p><b>Характеристики:</b></p><ul type=disc><li>Количество: 5 шт; </li><li>Материал: бумага.</li></ul><p><b>Подходят к моделям пылесосов: </b></p><ul type=disc><li>THOMAS 820/920/1020/INOX 1220/1220 plus/1220 S/1520 plus/POWER BOY 1218/1218 plus/1518/Hobby Vac/Hobby 1000/JUNIOR 1216/1516.</li></ul><p><b>Производитель:</b> Thomas.</p> на пару без пароварки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/35e035621354934f31343d7d8a4fd49b.jpeg" alt="капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф" title="капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф"><div class="box" page="kuhonnyy-kombayn-moulinex-fp-master-shef-4350r"><span class="title">капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф</span><p>от <span class="price">4350</span> руб.</p></div></li>
						<li><img src="photos/90a7d250cd580e7f7dad10ef41c4fe3e.jpeg" alt="купить блендер bosch Миксер Atlanta ATH-280" title="купить блендер bosch Миксер Atlanta ATH-280"><div class="box" page="mikser-atlanta-ath-510r"><span class="title">купить блендер bosch Миксер Atlanta ATH-280</span><p>от <span class="price">510</span> руб.</p></div></li>
						<li><img src="photos/47aa32b114cfa34725d4752f07527890.jpeg" alt="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502" title="куриные грудки в мультиварке Мультиварка Redmond RMC-M4502"><div class="box" page="multivarka-redmond-rmcm-4990r"><span class="title">куриные грудки в мультиварке Мультиварка Redmond RMC-M4502</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li><img src="photos/2cdb40f493d1b8360833641d1048d5de.jpeg" alt="пакеты для пылесоса Мясорубка Braun G1300 MN WH" title="пакеты для пылесоса Мясорубка Braun G1300 MN WH"><div class="box" page="myasorubka-braun-g-mn-wh-4980r"><span class="title">пакеты для пылесоса Мясорубка Braun G1300 MN WH</span><p>от <span class="price">4980</span> руб.</p></div></li>
						<li class="large"><img src="photos/56cb596182a024c5be877e612e6462d8.jpeg" alt="тканевый мешок для пылесоса Пароварка Atlanta АТН-605" title="тканевый мешок для пылесоса Пароварка Atlanta АТН-605"><div class="box" page="parovarka-atlanta-atn-1050r-2"><span class="title">тканевый мешок для пылесоса Пароварка Atlanta АТН-605</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li class="large"><img src="photos/d7869500a03daf3749520ba97157adc1.jpeg" alt="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno" title="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno"><div class="box" page="hlebopechka-moulinex-ow-uno-4990r"><span class="title">вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li class="large"><img src="photos/601488d11fe95f07b0e7e96c29a4ca5c.jpeg" alt="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White" title="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-magic-white-1100r"><span class="title">аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/5a4405159d0c690183630df2cbdbbd36.jpeg" alt="стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л" title="стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1620r"><span class="title">стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л</span><p>от <span class="price">1620</span> руб.</p></div></li>
						<li><img src="photos/92677a851872ec83258943db2c5f8e10.jpeg" alt="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л" title="пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-reminisce-ki-l-2370r-2"><span class="title">пылесос для сухой чистки Чайник электрический Tefal Reminisce KI2016 1,7 л</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li><img src="photos/d360b8a0c7da5c2048584c84686650a7.jpeg" alt="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)" title="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-55r"><span class="title">кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)</span><p>от <span class="price">55</span> руб.</p></div></li>
						<li><img src="photos/569a7a448800e6c331839b4f1803d826.jpeg" alt="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502" title="бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502"><div class="box" page="moyuschiy-koncentrat-thomas-protex-l-520r"><span class="title">бетоносмеситель миксер Моющий концентрат Thomas Protex 1 л 787-502</span><p>от <span class="price">520</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("bumazhnye-filtrymeshki-dlya-thomas-1000r.php", 0, -4); if (file_exists("comments/bumazhnye-filtrymeshki-dlya-thomas-1000r.php")) require_once "comments/bumazhnye-filtrymeshki-dlya-thomas-1000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="bumazhnye-filtrymeshki-dlya-thomas-1000r.php" method="post" onsubmit="return checkForm(this)">
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