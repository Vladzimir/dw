<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("barometr-ohotnik-pogodnik-art-1820r.php","конвекторы электрические форум");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("barometr-ohotnik-pogodnik-art-1820r.php", $nick, $comment);
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
		<title>конвекторы электрические форум Барометр Охотник ПогодникЪ, арт. 07358  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="конвекторы электрические форум, вентилятор для сауны, газовый водонагреватель вектор, кондиционеры руководство, скачать конвектор на русском языке, датчик вентилятора ваз 2114, уровень шума кондиционера, уличные обогреватели, стоимость монтажа кондиционера, как снять вентилятор отопителя, какой кондиционер лучше, кондиционер panasonic купить, козырек для кондиционера, конвектор видео для psp,  ремонт электрических водонагревателей">
		<meta name="description" content="конвекторы электрические форум Привлекательный дизайн под старину делает эту вещь поистине уникальной. Деревянн...">
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
						<a class="photo" href="photos/d56c530320845cbca4f70555561669c0.jpeg" title="конвекторы электрические форум Барометр Охотник ПогодникЪ, арт. 07358"><img src="photos/d56c530320845cbca4f70555561669c0.jpeg" alt="конвекторы электрические форум Барометр Охотник ПогодникЪ, арт. 07358" title="конвекторы электрические форум Барометр Охотник ПогодникЪ, арт. 07358 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvekcionnyy-radiator-timberk-trra-el-3270r.php"><img src="photos/07893d42fc243f8aca2666e180d908a8.jpeg" alt="вентилятор для сауны Конвекционный радиатор Timberk TRR.A EL" title="вентилятор для сауны Конвекционный радиатор Timberk TRR.A EL"></a><h2>Конвекционный радиатор Timberk TRR.A EL</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecps-le-in-2530r.php"><img src="photos/37369c75abf56d5b9a3ba17dfad98001.jpeg" alt="газовый водонагреватель вектор Конвектор электрический Timberk TEC.PS1 LE IN" title="газовый водонагреватель вектор Конвектор электрический Timberk TEC.PS1 LE IN"></a><h2>Конвектор электрический Timberk TEC.PS1 LE IN</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-e-2200r.php"><img src="photos/d482449dfe96b336d6abb1c349b28838.jpeg" alt="кондиционеры руководство Конвектор Timberk TEC.E1 E 500" title="кондиционеры руководство Конвектор Timberk TEC.E1 E 500"></a><h2>Конвектор Timberk TEC.E1 E 500</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>конвекторы электрические форум Барометр Охотник ПогодникЪ, арт. 07358</h1>
						<div class="tb"><p>Цена: от <span class="price">1820</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1242.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Привлекательный дизайн под старину делает эту вещь поистине уникальной. Деревянный корпус барометра, окаймленный золотой обводкой, смотрится весьма эффектно. Барометр оборудован высокоточным механизмом и дает реальные показания атмосферного давления. Пылепредохранительное стекло дисплея имеет антибликовое покрытие.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Диапазон измерения: 700 – 800 мм рт.ст <li>Размер корпуса/дисплея: 190 х 135 мм <li>Точность хода: ± 2 сек <li>Цвет: махагони, матовая полировка <li>Вес: 200 г</li></ul><p><b>Производитель:</b> RST (Швеция)</p><p><b>Гарантия: </b>12 месяцев</p> конвекторы электрические форум</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/05a37e798c9325c41845088bd9b5b9a3.jpeg" alt="скачать конвектор на русском языке Сплит-система NeoClima NS/NU-HAV071R4" title="скачать конвектор на русском языке Сплит-система NeoClima NS/NU-HAV071R4"><div class="box" page="splitsistema-neoclima-nsnuhavr-16300r"><span class="title">скачать конвектор на русском языке Сплит-система NeoClima NS/NU-HAV071R4</span><p>от <span class="price">16300</span> руб.</p></div></li>
						<li><img src="photos/19a68e8aaac1488b247429400fdfd8f4.jpeg" alt="датчик вентилятора ваз 2114 Радиатор масляный Timberk TOR 51.2509 EZ I" title="датчик вентилятора ваз 2114 Радиатор масляный Timberk TOR 51.2509 EZ I"><div class="box" page="radiator-maslyanyy-timberk-tor-ez-i-3350r"><span class="title">датчик вентилятора ваз 2114 Радиатор масляный Timberk TOR 51.2509 EZ I</span><p>от <span class="price">3350</span> руб.</p></div></li>
						<li><img src="photos/1262130e8464d9c06d7ad2296418cda2.jpeg" alt="уровень шума кондиционера Масляный радиатор Neoclima серия Standart" title="уровень шума кондиционера Масляный радиатор Neoclima серия Standart"><div class="box" page="maslyanyy-radiator-neoclima-seriya-standart-1900r"><span class="title">уровень шума кондиционера Масляный радиатор Neoclima серия Standart</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/b71fd8e694839d507d1ebf508f396381.jpeg" alt="уличные обогреватели Assistant AH-1971 Метеостанция" title="уличные обогреватели Assistant AH-1971 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-1600r"><span class="title">уличные обогреватели Assistant AH-1971 Метеостанция</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li class="large"><img src="photos/046459716f1e2eb91fd049e2bc31557f.jpeg" alt="стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»" title="стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»"><div class="box" page="obogrevatel-barhatnyy-sezon-«kandelyabr»-880r"><span class="title">стоимость монтажа кондиционера Обогреватель Бархатный сезон «Канделябр»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/f2c4271f8351e070194359abb53c123d.jpeg" alt="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»" title="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»"><div class="box" page="obogrevatel-barhatnyy-sezon-«babochki»-880r"><span class="title">как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/c1fe9260de97ac5d8658504d30013ba0.jpeg" alt="какой кондиционер лучше Тепловентилятор Atlanta ATH-105" title="какой кондиционер лучше Тепловентилятор Atlanta ATH-105"><div class="box" page="teploventilyator-atlanta-ath-700r"><span class="title">какой кондиционер лучше Тепловентилятор Atlanta ATH-105</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/a8db72b23169e460f3adf9b13f9fbb91.jpeg" alt="кондиционер panasonic купить Очиститель воздуха Neoclima NAP-01 черный" title="кондиционер panasonic купить Очиститель воздуха Neoclima NAP-01 черный"><div class="box" page="ochistitel-vozduha-neoclima-nap-chernyy-7650r"><span class="title">кондиционер panasonic купить Очиститель воздуха Neoclima NAP-01 черный</span><p>от <span class="price">7650</span> руб.</p></div></li>
						<li><img src="photos/cc8e6593e30b4b2269157a1333a6a22e.jpeg" alt="козырек для кондиционера Увлажнитель воздуха ультразвуковой Атмос 2710" title="козырек для кондиционера Увлажнитель воздуха ультразвуковой Атмос 2710"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-atmos-4950r"><span class="title">козырек для кондиционера Увлажнитель воздуха ультразвуковой Атмос 2710</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/70b6fc4efe029a501ff466b524513770.jpeg" alt="конвектор видео для psp Увлажнитель воздуха Maxima MHF-3301" title="конвектор видео для psp Увлажнитель воздуха Maxima MHF-3301"><div class="box" page="uvlazhnitel-vozduha-maxima-mhf-1190r"><span class="title">конвектор видео для psp Увлажнитель воздуха Maxima MHF-3301</span><p>от <span class="price">1190</span> руб.</p></div></li>
						<li><img src="photos/153a3374b1c5b8cbcad4ae2bc5926877.jpeg" alt="куда заливать кондиционер Электрогрелка Beurer HK120 xxl" title="куда заливать кондиционер Электрогрелка Beurer HK120 xxl"><div class="box" page="elektrogrelka-beurer-hk-xxl-2450r"><span class="title">куда заливать кондиционер Электрогрелка Beurer HK120 xxl</span><p>от <span class="price">2450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("barometr-ohotnik-pogodnik-art-1820r.php", 0, -4); if (file_exists("comments/barometr-ohotnik-pogodnik-art-1820r.php")) require_once "comments/barometr-ohotnik-pogodnik-art-1820r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="barometr-ohotnik-pogodnik-art-1820r.php" method="post" onsubmit="return checkForm(this)">
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