<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("toster-atlanta-ath-740r.php","мясо с овощами в мультиварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("toster-atlanta-ath-740r.php", $nick, $comment);
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
		<title>мясо с овощами в мультиварке Тостер Atlanta ATH-237  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мясо с овощами в мультиварке, мясорубка в посудомойке, как убрать блеск от утюга, мясорубка binatone, аэрогриль форум, кухня микроволновой печи, моющий пылесос для дома, утюг с парогенератором delonghi, десерты в блендере, самодельный пылесос, hyla пылесос цена, мясорубка помощница, горошница в мультиварке, парогенератор aeg,  пылесос самсунг sc отзывы">
		<meta name="description" content="мясо с овощами в мультиварке Тостер Atlanta ATH-237 – стильный и доступный прибор, который превратит обычный ...">
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
						<a class="photo" href="photos/5cd90ccf1383ae054567f8f62fe579ca.jpeg" title="мясо с овощами в мультиварке Тостер Atlanta ATH-237"><img src="photos/5cd90ccf1383ae054567f8f62fe579ca.jpeg" alt="мясо с овощами в мультиварке Тостер Atlanta ATH-237" title="мясо с овощами в мультиварке Тостер Atlanta ATH-237 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/aerogril-maxima-mag-2290r.php"><img src="photos/50504b425a4036964e7c0cdd2137107c.jpeg" alt="мясорубка в посудомойке Аэрогриль Maxima MAG-0247" title="мясорубка в посудомойке Аэрогриль Maxima MAG-0247"></a><h2>Аэрогриль Maxima MAG-0247</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-moulinex-fp-adventio-4350r.php"><img src="photos/83b6a1cde8ae8331d8aaec70b8a93652.jpeg" alt="как убрать блеск от утюга Кухонный комбайн Moulinex FP60314 Адвентио" title="как убрать блеск от утюга Кухонный комбайн Moulinex FP60314 Адвентио"></a><h2>Кухонный комбайн Moulinex FP60314 Адвентио</h2></li>
							<li><a href="http://kitchentech.elitno.net/parovarka-tefal-simply-invents-vc-3990r.php"><img src="photos/cf93342053e92b125e6f4adca7e47bbe.jpeg" alt="мясорубка binatone Пароварка Tefal Simply Invents VC1017" title="мясорубка binatone Пароварка Tefal Simply Invents VC1017"></a><h2>Пароварка Tefal Simply Invents VC1017</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мясо с овощами в мультиварке Тостер Atlanta ATH-237</h1>
						<div class="tb"><p>Цена: от <span class="price">740</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19689.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Тостер Atlanta ATH-237 – стильный и доступный прибор, который превратит обычный холодный хлеб в теплый и хрустящий. Рассчитан на одновременное приготовление двух ломтиков. Имеет функцию разморозки и подогрева, а также подставку для хлеба. Снабжен поддоном для крошек. Безопасен, благодаря автоматическому отключению в случае перегрева. Время поджаривания вы можете выбрать сами.</p><p>Характеристики:</p><ul type=disc><li>Подставка для булочек <li>На два ломтика хлеба <li>Регулятор времени поджаривания <li>Функция разморозки <li>Функция подогрева <li>Поддон для крошек <li>Автоматическое отключение <li>Защита от перегрева <li>Удобное хранения шнура <li>Мощность 800 Вт <li>230 В, 50 Гц <li>27 x 17 x 17 см </li></ul><p><strong>Производитель: США</strong><strong> </strong></p> мясо с овощами в мультиварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8c0aa6f2022172974ae917a715c05f94.jpeg" alt="аэрогриль форум Пароварка Vitek VT-1550N SR" title="аэрогриль форум Пароварка Vitek VT-1550N SR"><div class="box" page="parovarka-vitek-vtn-sr-2200r"><span class="title">аэрогриль форум Пароварка Vitek VT-1550N SR</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/d13e770b0f20ea7295762dcccfd88ddd.jpeg" alt="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда" title="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда"><div class="box" page="elektroplitka-indukcionnaya-maxima-mic-posuda-1790r"><span class="title">кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/b6d12be4b9eb96a31c69e83c45163c6c.jpeg" alt="моющий пылесос для дома Чайник электрический Atlanta ATH-751" title="моющий пылесос для дома Чайник электрический Atlanta ATH-751"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-1600r"><span class="title">моющий пылесос для дома Чайник электрический Atlanta ATH-751</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/89368a4d8b53495528b047bf143af4e5.jpeg" alt="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623" title="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-690r"><span class="title">утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li class="large"><img src="photos/133af075f6993e048350b753f5c2c798.jpeg" alt="десерты в блендере Электрический чайник Atlanta АТН-727" title="десерты в блендере Электрический чайник Atlanta АТН-727"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r-2"><span class="title">десерты в блендере Электрический чайник Atlanta АТН-727</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li class="large"><img src="photos/168b510551b7b82d928917487d7b9c68.jpeg" alt="самодельный пылесос Батарейка GP Batteries Super alkaline LR03 24A-BC2" title="самодельный пылесос Батарейка GP Batteries Super alkaline LR03 24A-BC2"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-45r-2"><span class="title">самодельный пылесос Батарейка GP Batteries Super alkaline LR03 24A-BC2</span><p>от <span class="price">45</span> руб.</p></div></li>
						<li class="large"><img src="photos/d50a3dd0a5055f1b90b2cf35609b3ff0.jpeg" alt="hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС" title="hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС"><div class="box" page="nitrattester-nitratomer-soeks-5290r"><span class="title">hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС</span><p>от <span class="price">5290</span> руб.</p></div></li>
						<li><img src="photos/0cd736da9ac10dc7bbde0f3b6049ff52.jpeg" alt="мясорубка помощница Воздушный фильтр Redmond H10RV-308" title="мясорубка помощница Воздушный фильтр Redmond H10RV-308"><div class="box" page="vozdushnyy-filtr-redmond-hrv-390r"><span class="title">мясорубка помощница Воздушный фильтр Redmond H10RV-308</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/6f1dc0aa11d1eda2d816fefb2df4a739.jpeg" alt="горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2" title="горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2"><div class="box" page="pylesos-moyuschiy-thomas-hygiene-plus-t-19460r"><span class="title">горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2</span><p>от <span class="price">19460</span> руб.</p></div></li>
						<li><img src="photos/b81f4815d2a9df868070af2d7b1533ee.jpeg" alt="парогенератор aeg Утюг Vitek VT-1209" title="парогенератор aeg Утюг Vitek VT-1209"><div class="box" page="utyug-vitek-vt-1100r"><span class="title">парогенератор aeg Утюг Vitek VT-1209</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/dad55c3e820faa7adb3396e1681091d7.jpeg" alt="рецепты для миксера Утюг Vitek VT-1255" title="рецепты для миксера Утюг Vitek VT-1255"><div class="box" page="utyug-vitek-vt-1350r"><span class="title">рецепты для миксера Утюг Vitek VT-1255</span><p>от <span class="price">1350</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("toster-atlanta-ath-740r.php", 0, -4); if (file_exists("comments/toster-atlanta-ath-740r.php")) require_once "comments/toster-atlanta-ath-740r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="toster-atlanta-ath-740r.php" method="post" onsubmit="return checkForm(this)">
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