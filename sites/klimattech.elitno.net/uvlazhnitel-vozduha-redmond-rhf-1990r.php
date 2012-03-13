<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("uvlazhnitel-vozduha-redmond-rhf-1990r.php","тепловая водяная пушка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("uvlazhnitel-vozduha-redmond-rhf-1990r.php", $nick, $comment);
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
		<title>тепловая водяная пушка Увлажнитель воздуха Redmond RHF-3302  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="тепловая водяная пушка, двухфазный кондиционер, форум кондиционер для квартиры, как уменьшить скорость вентилятора, вентилятор радиатора работает постоянно, как установить водонагреватель, газовые обогреватели для дома, инфракрасные обогреватели вред, аристон водонагреватели pro eco, конвекторы электрические nobo, avi конвектор скачать бесплатно, кондиционер panasonic купить, компрессор кондиционера форд фокус, переходник питания для вентилятора,  электропростынь купить">
		<meta name="description" content="тепловая водяная пушка Элегантный дизайн позволяет стать этому увлажнителю настоящим украшением интерье...">
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
						<a class="photo" href="photos/ed20b32445a2986dff602bce8017d840.jpeg" title="тепловая водяная пушка Увлажнитель воздуха Redmond RHF-3302"><img src="photos/ed20b32445a2986dff602bce8017d840.jpeg" alt="тепловая водяная пушка Увлажнитель воздуха Redmond RHF-3302" title="тепловая водяная пушка Увлажнитель воздуха Redmond RHF-3302 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-11150r.php"><img src="photos/ec9df32df27167c30ec235a667bd8ecb.jpeg" alt="двухфазный кондиционер Водонагреватель Timberk SWH FS2 100 H" title="двухфазный кондиционер Водонагреватель Timberk SWH FS2 100 H"></a><h2>Водонагреватель Timberk SWH FS2 100 H</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-comfort-h-10400r.php"><img src="photos/cb9160b6c3e193f875f5082c6e8d7f90.jpeg" alt="форум кондиционер для квартиры Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 2024 H" title="форум кондиционер для квартиры Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 2024 H"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 2024 H</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-ed-i-2620r.php"><img src="photos/1ff0ca0351f3f5c5ae6bbd6676de7627.jpeg" alt="как уменьшить скорость вентилятора Радиатор масляный Timberk TOR 31.2509 ED I" title="как уменьшить скорость вентилятора Радиатор масляный Timberk TOR 31.2509 ED I"></a><h2>Радиатор масляный Timberk TOR 31.2509 ED I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>тепловая водяная пушка Увлажнитель воздуха Redmond RHF-3302</h1>
						<div class="tb"><p>Цена: от <span class="price">1990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18665.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Элегантный дизайн позволяет стать этому увлажнителю настоящим украшением интерьера. Эффективность в работе, качественная сборка, тишина в работе, удобная настройка и автоматика, и при всем невысокая цена – все это делает этот прибор настоящим сокровищем.</p><ul type=\disc\><li>Мощность 25 Вт; </li><li>Автоматическое выключение при отсутствии воды; </li><li>Объем резервуара для воды: 2,8 л; </li><li>Расход воды 280 мл/ч; </li><li>Регулятор интенсивности работы; </li><li>Индикатор работы.<b></b> </li></ul><p><b>Производитель: США</b></p><p><b>Гарантия: 1 год</b></p> тепловая водяная пушка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/741070210b8c3ce914b86f831bacb64f.jpeg" alt="вентилятор радиатора работает постоянно Масляный радиатор Timberk TOR 21.2512 MG I" title="вентилятор радиатора работает постоянно Масляный радиатор Timberk TOR 21.2512 MG I"><div class="box" page="maslyanyy-radiator-timberk-tor-mg-i-2840r"><span class="title">вентилятор радиатора работает постоянно Масляный радиатор Timberk TOR 21.2512 MG I</span><p>от <span class="price">2840</span> руб.</p></div></li>
						<li><img src="photos/ad0835909603c49137f2b5d7613cae24.jpeg" alt="как установить водонагреватель Погодная  анимационная станция  RST  Meteolight IQ777 , арт. 02777" title="как установить водонагреватель Погодная  анимационная станция  RST  Meteolight IQ777 , арт. 02777"><div class="box" page="pogodnaya-animacionnaya-stanciya-rst-meteolight-iq-art-6300r"><span class="title">как установить водонагреватель Погодная  анимационная станция  RST  Meteolight IQ777 , арт. 02777</span><p>от <span class="price">6300</span> руб.</p></div></li>
						<li><img src="photos/1678b72db68c6229f134eb565404d6f9.jpeg" alt="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»" title="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»"><div class="box" page="obogrevatel-barhatnyy-sezon-«svechi»-880r"><span class="title">газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/f06cbcf8fc84e22661b7889248dc2d8e.jpeg" alt="инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06" title="инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06"><div class="box" page="teploventilyator-neoclima-fh-650r"><span class="title">инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06</span><p>от <span class="price">650</span> руб.</p></div></li>
						<li class="large"><img src="photos/7a1a82479c04d8e202cb444f94ed9635.jpeg" alt="аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4" title="аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-hh-1200r"><span class="title">аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/76050fccc40ec2957a70f5c9581d0609.jpeg" alt="конвекторы электрические nobo Тепловентилятор Atlanta ATH-102" title="конвекторы электрические nobo Тепловентилятор Atlanta ATH-102"><div class="box" page="teploventilyator-atlanta-ath-350r"><span class="title">конвекторы электрические nobo Тепловентилятор Atlanta ATH-102</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li class="large"><img src="photos/d0d6142b9db6d6cb4ffb5a6023288c8b.png" alt="avi конвектор скачать бесплатно ZENET Доп. фильтр для 2516/2720/2728" title="avi конвектор скачать бесплатно ZENET Доп. фильтр для 2516/2720/2728"><div class="box" page="zenet-dop-filtr-dlya-280r"><span class="title">avi конвектор скачать бесплатно ZENET Доп. фильтр для 2516/2720/2728</span><p>от <span class="price">280</span> руб.</p></div></li>
						<li><img src="photos/a8db72b23169e460f3adf9b13f9fbb91.jpeg" alt="кондиционер panasonic купить Очиститель воздуха Neoclima NAP-01 черный" title="кондиционер panasonic купить Очиститель воздуха Neoclima NAP-01 черный"><div class="box" page="ochistitel-vozduha-neoclima-nap-chernyy-7650r"><span class="title">кондиционер panasonic купить Очиститель воздуха Neoclima NAP-01 черный</span><p>от <span class="price">7650</span> руб.</p></div></li>
						<li><img src="photos/b96cf70721ff62fc726fbf7570b0c26e.jpeg" alt="компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301" title="компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301"><div class="box" page="uvlazhnitel-vozduha-redmond-rhf-3690r"><span class="title">компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301</span><p>от <span class="price">3690</span> руб.</p></div></li>
						<li><img src="photos/0c9aac822b8725f8d45b17d95fcd0468.jpeg" alt="переходник питания для вентилятора Грелка для ног Beurer FWM40" title="переходник питания для вентилятора Грелка для ног Beurer FWM40"><div class="box" page="grelka-dlya-nog-beurer-fwm-2050r"><span class="title">переходник питания для вентилятора Грелка для ног Beurer FWM40</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li><img src="photos/7086461bbbdce969fa5d518c69cf34de.jpeg" alt="расходники для кондиционеров Грелка Beurer HK65 Aroma" title="расходники для кондиционеров Грелка Beurer HK65 Aroma"><div class="box" page="grelka-beurer-hk-aroma-3400r"><span class="title">расходники для кондиционеров Грелка Beurer HK65 Aroma</span><p>от <span class="price">3400</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("uvlazhnitel-vozduha-redmond-rhf-1990r.php", 0, -4); if (file_exists("comments/uvlazhnitel-vozduha-redmond-rhf-1990r.php")) require_once "comments/uvlazhnitel-vozduha-redmond-rhf-1990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="uvlazhnitel-vozduha-redmond-rhf-1990r.php" method="post" onsubmit="return checkForm(this)">
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