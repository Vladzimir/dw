<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("meteostanciya-meteolight-6530r.php","согласователь работы кондиционеров");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("meteostanciya-meteolight-6530r.php", $nick, $comment);
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
		<title>согласователь работы кондиционеров Метеостанция Meteolight 877  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="согласователь работы кондиционеров, кондиционеры в петербурге, водонагреватели форум, вентилятор накладной, конвекторы отопления отзывы, как уменьшить скорость вентилятора, как почистить вентилятор в ноутбуке, производство тепловых пушек, инструкция кондиционер скачать, бальзам кондиционер, аналоговые метеостанции, вентилятор термостойкий, кондиционер обогреватель, монтаж и продажа кондиционеров,  кондиционеры канального типа">
		<meta name="description" content="согласователь работы кондиционеров Метеостанция Meteolight 877 представляет собой уникальную погодную станцию с мяг...">
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
						<a class="photo" href="photos/dc9cdb3ca26e6d0a713ef0ea01e0f300.jpeg" title="согласователь работы кондиционеров Метеостанция Meteolight 877"><img src="photos/dc9cdb3ca26e6d0a713ef0ea01e0f300.jpeg" alt="согласователь работы кондиционеров Метеостанция Meteolight 877" title="согласователь работы кондиционеров Метеостанция Meteolight 877 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-comfort-9200r.php"><img src="photos/a49bf9e3d787ee5c763bc1bcb3d8958b.jpeg" alt="кондиционеры в петербурге Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Comfort 2020" title="кондиционеры в петербурге Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Comfort 2020"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Comfort 2020</h2></li>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-zenet-nsg-3290r.php"><img src="photos/989829160dc296b512e26d3690ecd900.jpeg" alt="водонагреватели форум Карбоновый обогреватель ZENET NS-900G" title="водонагреватели форум Карбоновый обогреватель ZENET NS-900G"></a><h2>Карбоновый обогреватель ZENET NS-900G</h2></li>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-zenet-smbt-2890r.php"><img src="photos/7083061770ff56bfe4b02a345dcc2c47.jpeg" alt="вентилятор накладной Карбоновый обогреватель ZENET SMB-60T" title="вентилятор накладной Карбоновый обогреватель ZENET SMB-60T"></a><h2>Карбоновый обогреватель ZENET SMB-60T</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>согласователь работы кондиционеров Метеостанция Meteolight 877</h1>
						<div class="tb"><p>Цена: от <span class="price">6530</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_5107.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Метеостанция Meteolight 877 </b>представляет собой уникальную погодную станцию с мягкой люминесцентной подсветкой дисплея, которая способна автоматически меняться в зависимости от вашего настроения или прогноза погоды. Благодаря встроенной системе IRMS, можно включить подсветку и режим snooze (повтор сигнала будильника), проведя рукой рядом со станцией. На большом удобном ЖК-дисплее можно увидеть фазы луны, относительное расположение луны и солнца, время восхода для определенного города (функция доступна и для российских городов). Модель выполнена в элегантном гладком корпусе с металлическим основанием. Станцию можно установить на столе или повесить на стену.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Пpoгнoз пoгoды: cимвoльный, aнимaциoнный; <li>Цифpoвoй бapoмeтp, дaвлeниe p(aтм) в мм pт.cт.; <li>Лунный кaлeндapь; <li>Teмпepaтуpa в пoмeщeнии, диaпaзoн t, °C: от 0 до +50; <li>Teмпepaтуpa зa oкнoм, диaпaзoн t, °C: от -50 до +70; <li>Paзpeшeниe t, °C: 0,1; <li>Выносной термосенсор у радиодатчика; <li>Oтнocитeльнaя влaжнocть вoздуxa в пoмeщeнии f, %Rh: 20~99; <li>Paзpeшeниe f, %Rh: 1; <li>Пaмять мин. и мaкc. зapeгиcтpиpoвaнныx тeмпepaтуp; <li>Koличecтвo дoпoлнитeльныx paдиoдaтчикoв (пocтaвляютcя oтдeльнo): 5; <li>Чacы, будильник, кaлeндapь; <li>Пoдcвeткa диcплeя; <li>Цвет корпуса: черный; <li>Размер: 275х100х45 мм.</li></ul><p><b>Комплектация:</b></p><p><b></b></p><ul type=disc><li>Бaзoвaя cтaнция; <li>Рaдиoдaтчик (передача данных на расстояние до 75 метров); <li>Сетевой адаптер; <li>Инcтpукция. </li></ul><p><b></b></p><b>Страна:</b> Швеция. согласователь работы кондиционеров</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/60bbbf503cc1f54478f2063da8fc6ed7.jpeg" alt="конвекторы отопления отзывы Конвектор Ballu Plaza BEP|E-1000" title="конвекторы отопления отзывы Конвектор Ballu Plaza BEP|E-1000"><div class="box" page="konvektor-ballu-plaza-bepe-3600r"><span class="title">конвекторы отопления отзывы Конвектор Ballu Plaza BEP|E-1000</span><p>от <span class="price">3600</span> руб.</p></div></li>
						<li><img src="photos/1ff0ca0351f3f5c5ae6bbd6676de7627.jpeg" alt="как уменьшить скорость вентилятора Радиатор масляный Timberk TOR 31.2509 ED I" title="как уменьшить скорость вентилятора Радиатор масляный Timberk TOR 31.2509 ED I"><div class="box" page="radiator-maslyanyy-timberk-tor-ed-i-2620r"><span class="title">как уменьшить скорость вентилятора Радиатор масляный Timberk TOR 31.2509 ED I</span><p>от <span class="price">2620</span> руб.</p></div></li>
						<li><img src="photos/5a722243fe0d4bdaed6d1be8e66a9f23.jpeg" alt="как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I" title="как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I"><div class="box" page="maslyanyy-radiator-timberk-tor-mg-i-1850r"><span class="title">как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/5e1acb133dee7908889f7853f02ceb0a.jpeg" alt="производство тепловых пушек Масляный обогреватель Vitek VT-1723" title="производство тепловых пушек Масляный обогреватель Vitek VT-1723"><div class="box" page="maslyanyy-obogrevatel-vitek-vt-2820r"><span class="title">производство тепловых пушек Масляный обогреватель Vitek VT-1723</span><p>от <span class="price">2820</span> руб.</p></div></li>
						<li class="large"><img src="photos/5ab32c38a332cc62db91f2e9f8b78743.jpeg" alt="инструкция кондиционер скачать Assistant AH-1976 Метеостанция" title="инструкция кондиционер скачать Assistant AH-1976 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-2370r"><span class="title">инструкция кондиционер скачать Assistant AH-1976 Метеостанция</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li class="large"><img src="photos/a01db44cda068009da1951bb464b1916.jpeg" alt="бальзам кондиционер Обогреватель Бархатный сезон «Парусник»" title="бальзам кондиционер Обогреватель Бархатный сезон «Парусник»"><div class="box" page="obogrevatel-barhatnyy-sezon-«parusnik»-880r"><span class="title">бальзам кондиционер Обогреватель Бархатный сезон «Парусник»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/ed983113b39d06d18310c4cf9623b56e.jpeg" alt="аналоговые метеостанции Настенный тепловентилятор Neoclima KPT-20-A8" title="аналоговые метеостанции Настенный тепловентилятор Neoclima KPT-20-A8"><div class="box" page="nastennyy-teploventilyator-neoclima-kpta-2450r"><span class="title">аналоговые метеостанции Настенный тепловентилятор Neoclima KPT-20-A8</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li><img src="photos/f9eaa5b8986cdd2920eb77f5d5c25994.jpeg" alt="вентилятор термостойкий Тепловентилятор керамический Vitesse VS-882" title="вентилятор термостойкий Тепловентилятор керамический Vitesse VS-882"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-1700r"><span class="title">вентилятор термостойкий Тепловентилятор керамический Vitesse VS-882</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li><img src="photos/f10c15039e78f4d59fa0e355bb473278.jpeg" alt="кондиционер обогреватель Увлажнитель воздуха Beurer LB50" title="кондиционер обогреватель Увлажнитель воздуха Beurer LB50"><div class="box" page="uvlazhnitel-vozduha-beurer-lb-3500r"><span class="title">кондиционер обогреватель Увлажнитель воздуха Beurer LB50</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li><img src="photos/6954189b05aa4e95df5af4cf0242d5ed.jpeg" alt="монтаж и продажа кондиционеров Электрогрелка Beurer HK35" title="монтаж и продажа кондиционеров Электрогрелка Beurer HK35"><div class="box" page="elektrogrelka-beurer-hk-1550r"><span class="title">монтаж и продажа кондиционеров Электрогрелка Beurer HK35</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/2a2428e5e671208d94798fcf6ab9957c.png" alt="метеостанции интернет магазин Электрическая грелка ИНКОР 40x50 cм" title="метеостанции интернет магазин Электрическая грелка ИНКОР 40x50 cм"><div class="box" page="elektricheskaya-grelka-inkor-x-cm-550r"><span class="title">метеостанции интернет магазин Электрическая грелка ИНКОР 40x50 cм</span><p>от <span class="price">550</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("meteostanciya-meteolight-6530r.php", 0, -4); if (file_exists("comments/meteostanciya-meteolight-6530r.php")) require_once "comments/meteostanciya-meteolight-6530r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="meteostanciya-meteolight-6530r.php" method="post" onsubmit="return checkForm(this)">
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