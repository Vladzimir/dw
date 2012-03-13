<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("timberk-tgh-sm-gazovyy-obogrevatel-3350r.php","ремонт тепловентиляторов");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("timberk-tgh-sm-gazovyy-obogrevatel-3350r.php", $nick, $comment);
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
		<title>ремонт тепловентиляторов Timberk TGH 4200 SM1 Газовый обогреватель  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="ремонт тепловентиляторов, газовый водонагреватель оазис, дополнительный вентилятор охлаждения, бытовые инфракрасные обогреватели, вентилятор процессора программа, сдвоенные вентиляторы, угловые порталы для электрокаминов, установка кондиционеров харьков, автомобильный кондиционер зимой, конвекторы электрические nobo, тепловые завесы подбор, чертеж кондиционера, электрическая схема вентилятора, водонагреватель накопительный цена,  водонагреватель electrolux ewh 50 centurio">
		<meta name="description" content="ремонт тепловентиляторов Газовый обогреватель Timberk TGH 4200 SM1В этом газовом инфракрасном обогревател...">
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
						<a class="photo" href="photos/f3246275eec08979f9b2a0c787db4136.jpeg" title="ремонт тепловентиляторов Timberk TGH 4200 SM1 Газовый обогреватель"><img src="photos/f3246275eec08979f9b2a0c787db4136.jpeg" alt="ремонт тепловентиляторов Timberk TGH 4200 SM1 Газовый обогреватель" title="ремонт тепловентиляторов Timberk TGH 4200 SM1 Газовый обогреватель -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-e-2750r.php"><img src="photos/d5f7183bbf44508345cc80372aab5df3.jpeg" alt="газовый водонагреватель оазис Конвектор Timberk TEC.E1 E 1500" title="газовый водонагреватель оазис Конвектор Timberk TEC.E1 E 1500"></a><h2>Конвектор Timberk TEC.E1 E 1500</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-splitsistema-timberk-ac-tim-hdn-s-21780r.php"><img src="photos/2bec9b241af0d7e85d36a38042643437.jpeg" alt="дополнительный вентилятор охлаждения Кондиционер сплит-система Timberk AC TIM 12HDN S1" title="дополнительный вентилятор охлаждения Кондиционер сплит-система Timberk AC TIM 12HDN S1"></a><h2>Кондиционер сплит-система Timberk AC TIM 12HDN S1</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-bt-i-1950r.php"><img src="photos/7c8bd16774bf9fee3455010ae392ebb1.jpeg" alt="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I" title="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I"></a><h2>Радиатор масляный Timberk TOR 21.1507 BT I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>ремонт тепловентиляторов Timberk TGH 4200 SM1 Газовый обогреватель</h1>
						<div class="tb"><p>Цена: от <span class="price">3350</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16967.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Газовый обогреватель Timberk TGH 4200 SM1</p><p>В этом газовом инфракрасном обогревателе задействованы керамические панели, что создает эффект открытого пламени и делает обогреватель визуально схожим с камином. Благодаря используемой системе инфракрасного излучения, в помещении не выгорает кислород, происходит нагрев предметов, а не воздуха. Предметы отдают тепло Вам, а в помещении при этом не становится душно.</p><p>Газовый обогреватель недорог в обслуживании и экологически безвреден, потому что функционирует на пропан-бутане. Газ заправляется в 15-килограммовые баллоны. Газовый обогреватель TGH 4200 M1 очень компактный и мобильный благодаря установленным роликам, поэтому данному полезному прибору достаточно легко выбрать подходящее место в Вашем доме.</p><p>Обогреватель TGH 4200 M1 может использоваться во всех бытовых и хозяйственных постройках, дачах, загородных домах, коттеджах, гаражах. Единственным ограничением является использование в непроветриваемых помещения, а также помещениях меньше 10мІ. Прибор прекрасно сочетает в себе приемлемую цену и высокое качество.</p><p><b>Особенности:</b></p><ul type=\disc\><li>Трех-секционная керамическая горелка с последовательным стартом;</li><li>Пьезоэлектрический розжиг пламени;</li><li>Защита от опрокидывания: датчик падения;</li><li>Датчик превышения углекислого газа;</li><li>Отключение подачи газа при отсутствии пламени;</li><li>Металлический корпус обогревателя покрыт синтетической пожаробезопасной эмалью;</li><li>Газовый обогреватель работает на сжиженном газе;</li><li>Колесики для свободного перемещения прибора;</li><li>Ниша для установки газового баллона.</li><li>В комплекте – газовый редуктор и шланг 60см.</li></ul><p><b>Характеристики:</b></p><ul type=\disc\><li>Площадь обогрева: до 60 мІ</li><li>Мощность:</li>- Макс. (high): 4,2 кВт.<br>- Средний. (medium): 2.8 кВт<br>- Мин. (low): 1,4 кВт<li>Удельный расход газа: 0,300 кг/час</li><li>Используемое топливо: пропан-бутан G 30</li><li>Давление газа: 3,0 кПа</li><li>Размеры: 575х400х300 мм</li><li>Вес: 7,4 кг</li></ul><p><b>Гарантия</b><b>:</b>12 месяцев.</p><p><b>Производитель:</b> Швеция</p> ремонт тепловентиляторов</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/56bd6d1cb04e7d799bfeed68b851b2f9.jpeg" alt="вентилятор процессора программа Радиатор масляный Timberk TOR 22 AX I" title="вентилятор процессора программа Радиатор масляный Timberk TOR 22 AX I"><div class="box" page="radiator-maslyanyy-timberk-tor-ax-i-2700r"><span class="title">вентилятор процессора программа Радиатор масляный Timberk TOR 22 AX I</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/c2de30b57a5c75c5b9251fcabe80c0c9.jpeg" alt="сдвоенные вентиляторы Обогреватель NY 20LF" title="сдвоенные вентиляторы Обогреватель NY 20LF"><div class="box" page="obogrevatel-ny-lf-1950r-2"><span class="title">сдвоенные вентиляторы Обогреватель NY 20LF</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/d79649a425c5ea057fe49bbabcdd9e61.jpeg" alt="угловые порталы для электрокаминов Проекционная погодная станция RST 32704" title="угловые порталы для электрокаминов Проекционная погодная станция RST 32704"><div class="box" page="proekcionnaya-pogodnaya-stanciya-rst-2970r"><span class="title">угловые порталы для электрокаминов Проекционная погодная станция RST 32704</span><p>от <span class="price">2970</span> руб.</p></div></li>
						<li><img src="photos/b5e41c2a0d829fc1efe57e1e63ba0ab3.jpeg" alt="установка кондиционеров харьков Обогреватель Бархатный сезон «Карета»" title="установка кондиционеров харьков Обогреватель Бархатный сезон «Карета»"><div class="box" page="obogrevatel-barhatnyy-sezon-«kareta»-880r"><span class="title">установка кондиционеров харьков Обогреватель Бархатный сезон «Карета»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/91508bf60f212bb3a2e98ddcc6c1eeb6.jpeg" alt="автомобильный кондиционер зимой NEOCLIMA NWH-D1 Тепловентиляторы" title="автомобильный кондиционер зимой NEOCLIMA NWH-D1 Тепловентиляторы"><div class="box" page="neoclima-nwhd-teploventilyatory-2380r"><span class="title">автомобильный кондиционер зимой NEOCLIMA NWH-D1 Тепловентиляторы</span><p>от <span class="price">2380</span> руб.</p></div></li>
						<li class="large"><img src="photos/76050fccc40ec2957a70f5c9581d0609.jpeg" alt="конвекторы электрические nobo Тепловентилятор Atlanta ATH-102" title="конвекторы электрические nobo Тепловентилятор Atlanta ATH-102"><div class="box" page="teploventilyator-atlanta-ath-350r"><span class="title">конвекторы электрические nobo Тепловентилятор Atlanta ATH-102</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li class="large"><img src="photos/de737b6fd7d544c30d2420caa143e179.jpeg" alt="тепловые завесы подбор Тепловентилятор Atlanta ATH-105" title="тепловые завесы подбор Тепловентилятор Atlanta ATH-105"><div class="box" page="teploventilyator-atlanta-ath-1050r"><span class="title">тепловые завесы подбор Тепловентилятор Atlanta ATH-105</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/19665b1d21cfc492b8c9bd9d28c78994.jpeg" alt="чертеж кондиционера Тепловая завеса Ballu BHC-5.000 SB" title="чертеж кондиционера Тепловая завеса Ballu BHC-5.000 SB"><div class="box" page="teplovaya-zavesa-ballu-bhc-sb-5050r"><span class="title">чертеж кондиционера Тепловая завеса Ballu BHC-5.000 SB</span><p>от <span class="price">5050</span> руб.</p></div></li>
						<li><img src="photos/3f74405f4008f8791249a19f5ed24fa4.jpeg" alt="электрическая схема вентилятора Тепловая пушка Ballu BPH-3.000C" title="электрическая схема вентилятора Тепловая пушка Ballu BPH-3.000C"><div class="box" page="teplovaya-pushka-ballu-bphc-3250r"><span class="title">электрическая схема вентилятора Тепловая пушка Ballu BPH-3.000C</span><p>от <span class="price">3250</span> руб.</p></div></li>
						<li><img src="photos/027c1d302dc81e47a00047ed6472d894.jpeg" alt="водонагреватель накопительный цена Очиститель-ионизатор автомобильный 724" title="водонагреватель накопительный цена Очиститель-ионизатор автомобильный 724"><div class="box" page="ochistitelionizator-avtomobilnyy-730r"><span class="title">водонагреватель накопительный цена Очиститель-ионизатор автомобильный 724</span><p>от <span class="price">730</span> руб.</p></div></li>
						<li><img src="photos/438788f499846bd44790eaf8455868a6.jpeg" alt="датчик для метеостанции Увлажнитель воздуха ультразвуковой Boneco AOS U650" title="датчик для метеостанции Увлажнитель воздуха ультразвуковой Boneco AOS U650"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-aos-u-7830r"><span class="title">датчик для метеостанции Увлажнитель воздуха ультразвуковой Boneco AOS U650</span><p>от <span class="price">7830</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("timberk-tgh-sm-gazovyy-obogrevatel-3350r.php", 0, -4); if (file_exists("comments/timberk-tgh-sm-gazovyy-obogrevatel-3350r.php")) require_once "comments/timberk-tgh-sm-gazovyy-obogrevatel-3350r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="timberk-tgh-sm-gazovyy-obogrevatel-3350r.php" method="post" onsubmit="return checkForm(this)">
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