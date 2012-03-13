<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r.php","курсы монтажников кондиционеров");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r.php", $nick, $comment);
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
		<title>курсы монтажников кондиционеров Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="курсы монтажников кондиционеров, конвектор файлов скачать, кондиционеры медея, замена датчика включения вентилятора, кондиционер для стирки, кондиционеры с притоком свежего воздуха, производство тепловых пушек, обогреватель с вентилятором, silent канальный вентилятор, конвектор для андроид, кондиционер liebert hiross, расчет тепловых пушек, кондиционеры монтаж обслуживание, тепловые пушки elitech,  горизонтальный водонагреватель">
		<meta name="description" content="курсы монтажников кондиционеров В холодное время года особенно важно сохранить в доме тепло и уют – именно для э...">
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
						<a class="photo" href="photos/e7e905bc6a32503c02bab2534a7c54ae.jpeg" title="курсы монтажников кондиционеров Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)"><img src="photos/e7e905bc6a32503c02bab2534a7c54ae.jpeg" alt="курсы монтажников кондиционеров Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)" title="курсы монтажников кондиционеров Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт) -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-zenet-nsd-3290r.php"><img src="photos/c576fcbd2f89e5045b6588a5eed2aa00.jpeg" alt="конвектор файлов скачать Карбоновый обогреватель ZENET NS-600D" title="конвектор файлов скачать Карбоновый обогреватель ZENET NS-600D"></a><h2>Карбоновый обогреватель ZENET NS-600D</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecpf-m-in-2140r.php"><img src="photos/5d7d89a1625889d24c0e54577aff3f32.jpeg" alt="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN" title="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN"></a><h2>Конвектор электрический Timberk TEC.PF1 М IN</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tecps-m-2550r.php"><img src="photos/fcad3e5278faf77d6e029ba9d4a486e0.jpeg" alt="замена датчика включения вентилятора Конвектор Timberk TEC.PS2 M 1500" title="замена датчика включения вентилятора Конвектор Timberk TEC.PS2 M 1500"></a><h2>Конвектор Timberk TEC.PS2 M 1500</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>курсы монтажников кондиционеров Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)</h1>
						<div class="tb"><p>Цена: от <span class="price">900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20763.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>В холодное время года особенно важно сохранить в доме тепло и уют – именно для этого и создан электрожилет ИНКОР. Электрический жилет ИНКОР обладает оптимальными размерами (40х70 см), а его четырехпозиционный переключатель режимов позволит вам выбрать именно ту степень тепла, которую вы хотите. Подарите себе тепло вместе с ИНКОР. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Размер: 400х700 мм; <li>Потребляемая мощность: 60 Вт.; <li>Четырехпозиционный переключатель режимов; </li></ul><p><strong>Производитель: Россия</strong></p> курсы монтажников кондиционеров</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/df83a32478b53e9d4c8710306a81f907.jpeg" alt="кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1" title="кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1"><div class="box" page="kondicioner-splitsistema-timberk-ac-tim-h-s-12460r"><span class="title">кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1</span><p>от <span class="price">12460</span> руб.</p></div></li>
						<li><img src="photos/2d755ba67d6963af4bfdecaeda94cdc3.jpeg" alt="кондиционеры с притоком свежего воздуха Масляный радиатор Timberk TOR 21 HB I" title="кондиционеры с притоком свежего воздуха Масляный радиатор Timberk TOR 21 HB I"><div class="box" page="maslyanyy-radiator-timberk-tor-hb-i-1850r"><span class="title">кондиционеры с притоком свежего воздуха Масляный радиатор Timberk TOR 21 HB I</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/5e1acb133dee7908889f7853f02ceb0a.jpeg" alt="производство тепловых пушек Масляный обогреватель Vitek VT-1723" title="производство тепловых пушек Масляный обогреватель Vitek VT-1723"><div class="box" page="maslyanyy-obogrevatel-vitek-vt-2820r"><span class="title">производство тепловых пушек Масляный обогреватель Vitek VT-1723</span><p>от <span class="price">2820</span> руб.</p></div></li>
						<li><img src="photos/d7bb7ba0387c2b78ce872333ecc5b5b3.jpeg" alt="обогреватель с вентилятором Термометр цифровой RST, арт. 02100" title="обогреватель с вентилятором Термометр цифровой RST, арт. 02100"><div class="box" page="termometr-cifrovoy-rst-art-550r"><span class="title">обогреватель с вентилятором Термометр цифровой RST, арт. 02100</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li class="large"><img src="photos/b5fd51a19760d14477030f4e11efdd42.jpeg" alt="silent канальный вентилятор Инфракрасный тепловентилятор Neoclima HH11 A" title="silent канальный вентилятор Инфракрасный тепловентилятор Neoclima HH11 A"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-hh-a-1500r"><span class="title">silent канальный вентилятор Инфракрасный тепловентилятор Neoclima HH11 A</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/f0f3a7d2dd327f3c3358e366d97eb793.jpeg" alt="конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ" title="конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ"><div class="box" page="ochistitelionizator-vozduha-universalnyy-atmos-uvoi-1880r"><span class="title">конвектор для андроид Очиститель-ионизатор воздуха универсальный Атмос УВОИ</span><p>от <span class="price">1880</span> руб.</p></div></li>
						<li class="large"><img src="photos/4bdbf4fd5e302cc8f1510bfa80efbb12.jpeg" alt="кондиционер liebert hiross Очиститель-ионизатор воздуха Атмос Про" title="кондиционер liebert hiross Очиститель-ионизатор воздуха Атмос Про"><div class="box" page="ochistitelionizator-vozduha-atmos-pro-3460r"><span class="title">кондиционер liebert hiross Очиститель-ионизатор воздуха Атмос Про</span><p>от <span class="price">3460</span> руб.</p></div></li>
						<li><img src="photos/a921edf7bcf105a9c929a4490d990fd3.jpeg" alt="расчет тепловых пушек Ультразвуковой увлажнитель воздуха Redmond RHF-3303" title="расчет тепловых пушек Ультразвуковой увлажнитель воздуха Redmond RHF-3303"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-redmond-rhf-5990r"><span class="title">расчет тепловых пушек Ультразвуковой увлажнитель воздуха Redmond RHF-3303</span><p>от <span class="price">5990</span> руб.</p></div></li>
						<li><img src="photos/d102068cd605cb764603ec30314cddf0.jpeg" alt="кондиционеры монтаж обслуживание Электросапог  ИНКОР" title="кондиционеры монтаж обслуживание Электросапог  ИНКОР"><div class="box" page="elektrosapog-inkor-790r"><span class="title">кондиционеры монтаж обслуживание Электросапог  ИНКОР</span><p>от <span class="price">790</span> руб.</p></div></li>
						<li><img src="photos/555884c9ed995600df4b44cdeff2c84a.jpeg" alt="тепловые пушки elitech Электрокамин напольный  Electrolux  EFP F - 200RC" title="тепловые пушки elitech Электрокамин напольный  Electrolux  EFP F - 200RC"><div class="box" page="elektrokamin-napolnyy-electrolux-efp-f-rc-9730r"><span class="title">тепловые пушки elitech Электрокамин напольный  Electrolux  EFP F - 200RC</span><p>от <span class="price">9730</span> руб.</p></div></li>
						<li><img src="photos/dd7c21129f4be8a364dfc4acc454580a.jpeg" alt="где купить тепловую пушку Камин-портал (классика, Opti-myst, Cambridge) Dimplex Pierre Luxe" title="где купить тепловую пушку Камин-портал (классика, Opti-myst, Cambridge) Dimplex Pierre Luxe"><div class="box" page="kaminportal-klassika-optimyst-cambridge-dimplex-pierre-luxe-17900r"><span class="title">где купить тепловую пушку Камин-портал (классика, Opti-myst, Cambridge) Dimplex Pierre Luxe</span><p>от <span class="price">17900</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r.php", 0, -4); if (file_exists("comments/elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r.php")) require_once "comments/elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r.php" method="post" onsubmit="return checkForm(this)">
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