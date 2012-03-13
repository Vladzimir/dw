<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("meteostanciya-rst-1600r.php","двигатель вентилятора печки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("meteostanciya-rst-1600r.php", $nick, $comment);
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
		<title>двигатель вентилятора печки Метеостанция RST 05738  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="двигатель вентилятора печки, тепловентилятор профтепло, куплю кондиционер панасоник, кондиционеры медея, электрокамины в минске, кондиционер свежий воздух, самые лучшие кондиционеры, водонагреватели аристон 200, аналоговые метеостанции, отсек для кондиционера, установка газового водонагревателя, контроль скорости вентиляторов, вентилятор отопителя 2108, ручки кондиционера,  кондиционеры канального типа">
		<meta name="description" content="двигатель вентилятора печки Новая метеостанция от известного шведского производителя RST станет приятным и п...">
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
						<a class="photo" href="photos/68b382e936534163a53827a42a82a120.jpeg" title="двигатель вентилятора печки Метеостанция RST 05738"><img src="photos/68b382e936534163a53827a42a82a120.jpeg" alt="двигатель вентилятора печки Метеостанция RST 05738" title="двигатель вентилятора печки Метеостанция RST 05738 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-rs-v-6400r.php"><img src="photos/0ddd4bda0d0ebdb557f302b9bb3c5c58.jpeg" alt="тепловентилятор профтепло Водонагреватель Timberk SWH RS1 50 V" title="тепловентилятор профтепло Водонагреватель Timberk SWH RS1 50 V"></a><h2>Водонагреватель Timberk SWH RS1 50 V</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tec-mec-r-in-2630r.php"><img src="photos/f4e9d710fbd678faac0f6dff57612f7b.jpeg" alt="куплю кондиционер панасоник Конвектор Timberk TEC MEC R7.15 IN" title="куплю кондиционер панасоник Конвектор Timberk TEC MEC R7.15 IN"></a><h2>Конвектор Timberk TEC MEC R7.15 IN</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecpf-m-in-2140r.php"><img src="photos/5d7d89a1625889d24c0e54577aff3f32.jpeg" alt="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN" title="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN"></a><h2>Конвектор электрический Timberk TEC.PF1 М IN</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>двигатель вентилятора печки Метеостанция RST 05738</h1>
						<div class="tb"><p>Цена: от <span class="price">1600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_13724.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Новая метеостанция от известного шведского производителя RST станет приятным и полезным приобретением для себя или роскошным и нужным подарком для близких. Она принадлежит к престижной серии, выполнена с эксклюзивным дисплеем, покрытым акриловым стеклом с «диамантами», в элегантном, непринужденно изящном корпусе. На дисплее отображаются показатели атмосферного давления, температуры и прогноза погоды. Сердцем метеостанции служит традиционно высокоточный механизм RST, собранный вручную и прошедший тщательную калибровку на фабрике. </p><p><b>Характеристики:</b></p><ul type=disc><li>Диапазон измерения р (атм.): 710~790 мм рт.ст.; <li>Размер (корпус/дисплей): ш 15.5 мм; <li>Цвет корпуса: белый.</li></ul><p><b>Производитель:</b> RST.</p><p><b>Страна:</b> Швеция.</p><p><b>Гарантия:</b> 1 год.</p> двигатель вентилятора печки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/4bbfb43fc647def81c47401047af9d23.jpeg" alt="электрокамины в минске Сплит-система NeoClima NS/NU-HAV091R4" title="электрокамины в минске Сплит-система NeoClima NS/NU-HAV091R4"><div class="box"><a href="http://klimattech.elitno.net/splitsistema-neoclima-nsnuhavr-17500r.php"><h3 class="title">электрокамины в минске Сплит-система NeoClima NS/NU-HAV091R4</h3><p>от <span class="price">17500</span> руб.</p></a></div></li>
						<li><img src="photos/3eeda3242ec91559c0efb8195ed63fc0.jpeg" alt="кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR" title="кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR"><div class="box" page="maslyanyy-radiator-timberk-tor-rr-2180r-2"><span class="title">кондиционер свежий воздух Масляный радиатор Timberk TOR 31.1807 RR</span><p>от <span class="price">2180</span> руб.</p></div></li>
						<li><img src="photos/dc588af274ff42d1adeb63b74d58b910.jpeg" alt="самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177" title="самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177"><div class="box" page="termometr-cifrovoy-avtomobilnyy-rst-art-460r"><span class="title">самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177</span><p>от <span class="price">460</span> руб.</p></div></li>
						<li><img src="photos/99f5f4572be3577df15f74d4b197b54c.jpeg" alt="водонагреватели аристон 200 Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02251" title="водонагреватели аристон 200 Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02251"><div class="box" page="cifrovoy-termometr-s-radiodatchikom-v-stile-iphone-rst-1250r"><span class="title">водонагреватели аристон 200 Цифровой термометр с радиодатчиком в стиле iPhone 4 RST 02251</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li class="large"><img src="photos/ed983113b39d06d18310c4cf9623b56e.jpeg" alt="аналоговые метеостанции Настенный тепловентилятор Neoclima KPT-20-A8" title="аналоговые метеостанции Настенный тепловентилятор Neoclima KPT-20-A8"><div class="box" page="nastennyy-teploventilyator-neoclima-kpta-2450r"><span class="title">аналоговые метеостанции Настенный тепловентилятор Neoclima KPT-20-A8</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li class="large"><img src="photos/bd6d0623b7469a7fd12ea78624452923.jpeg" alt="отсек для кондиционера Очиститель воздуха Neoclima NAP-300 белый" title="отсек для кондиционера Очиститель воздуха Neoclima NAP-300 белый"><div class="box" page="ochistitel-vozduha-neoclima-nap-belyy-5500r"><span class="title">отсек для кондиционера Очиститель воздуха Neoclima NAP-300 белый</span><p>от <span class="price">5500</span> руб.</p></div></li>
						<li class="large"><img src="photos/a37a839ea3abe560e6a1639aee6f7491.jpeg" alt="установка газового водонагревателя Воздухоочиститель Redmond RAC-3702" title="установка газового водонагревателя Воздухоочиститель Redmond RAC-3702"><div class="box" page="vozduhoochistitel-redmond-rac-3990r"><span class="title">установка газового водонагревателя Воздухоочиститель Redmond RAC-3702</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/f95f1f590bff20e345147b7932efb228.jpeg" alt="контроль скорости вентиляторов Очиститель воздуха Ballu AP-430 F5" title="контроль скорости вентиляторов Очиститель воздуха Ballu AP-430 F5"><div class="box" page="ochistitel-vozduha-ballu-ap-f-6450r"><span class="title">контроль скорости вентиляторов Очиститель воздуха Ballu AP-430 F5</span><p>от <span class="price">6450</span> руб.</p></div></li>
						<li><img src="photos/84b0b05cf769ebedabf2bba53955e7e8.jpeg" alt="вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue" title="вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-blue-3630r"><span class="title">вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue</span><p>от <span class="price">3630</span> руб.</p></div></li>
						<li><img src="photos/7306344adf61ae8e6f46c280e9e05c4c.jpeg" alt="ручки кондиционера Камин Dimplex Vega" title="ручки кондиционера Камин Dimplex Vega"><div class="box" page="kamin-dimplex-vega-38186r"><span class="title">ручки кондиционера Камин Dimplex Vega</span><p>от <span class="price">38186</span> руб.</p></div></li>
						<li><img src="photos/1da829ba214e242ac0953c641d6e6269.jpeg" alt="горизонтальный водонагреватель Электроодеяло Beurer HD50" title="горизонтальный водонагреватель Электроодеяло Beurer HD50"><div class="box" page="elektroodeyalo-beurer-hd-3000r"><span class="title">горизонтальный водонагреватель Электроодеяло Beurer HD50</span><p>от <span class="price">3000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("meteostanciya-rst-1600r.php", 0, -4); if (file_exists("comments/meteostanciya-rst-1600r.php")) require_once "comments/meteostanciya-rst-1600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="meteostanciya-rst-1600r.php" method="post" onsubmit="return checkForm(this)">
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