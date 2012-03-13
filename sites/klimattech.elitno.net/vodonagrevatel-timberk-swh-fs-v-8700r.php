<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vodonagrevatel-timberk-swh-fs-v-8700r.php","ремонт тепловентиляторов");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vodonagrevatel-timberk-swh-fs-v-8700r.php", $nick, $comment);
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
		<title>ремонт тепловентиляторов Водонагреватель Timberk SWH FS5 50 V  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="ремонт тепловентиляторов, радиатор кондиционера шевроле, согласование кондиционера, правильные кондиционеры, водонагреватели саратов, замена кондиционера на климат, медные трубки для кондиционеров, самые лучшие кондиционеры, кондиционер калина купить, вентиляторы осевые вытяжные, маркировка вентиляторов, номера кондиционеров, реле вентилятора отопителя, медицинский кондиционер,  ремонт электрических водонагревателей">
		<meta name="description" content="ремонт тепловентиляторов Вертикальный водонагреватель SWH FS5 50 V от известной шведской торговой марки T...">
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
						<a class="photo" href="photos/3037ee2a0653c2d54ed543e897521554.jpeg" title="ремонт тепловентиляторов Водонагреватель Timberk SWH FS5 50 V"><img src="photos/3037ee2a0653c2d54ed543e897521554.jpeg" alt="ремонт тепловентиляторов Водонагреватель Timberk SWH FS5 50 V" title="ремонт тепловентиляторов Водонагреватель Timberk SWH FS5 50 V -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecps-pge-in-2970r.php"><img src="photos/87b035c9a0eaa07e26a1d628a157d4ff.jpeg" alt="радиатор кондиционера шевроле Конвектор электрический Timberk TEC.PS1 PGE IN" title="радиатор кондиционера шевроле Конвектор электрический Timberk TEC.PS1 PGE IN"></a><h2>Конвектор электрический Timberk TEC.PS1 PGE IN</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tecps-m-2020r.php"><img src="photos/3ffe8f5edf569fd82f3547a04fdb540c.jpeg" alt="согласование кондиционера Конвектор Timberk TEC.PS2 M 500" title="согласование кондиционера Конвектор Timberk TEC.PS2 M 500"></a><h2>Конвектор Timberk TEC.PS2 M 500</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-neoclima-slim-1800r.php"><img src="photos/705e4d9962200e2840423f149e09083c.jpeg" alt="правильные кондиционеры Масляный радиатор Neoclima Slim" title="правильные кондиционеры Масляный радиатор Neoclima Slim"></a><h2>Масляный радиатор Neoclima Slim</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>ремонт тепловентиляторов Водонагреватель Timberk SWH FS5 50 V</h1>
						<div class="tb"><p>Цена: от <span class="price">8700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12413.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вертикальный водонагреватель SWH FS5 50 V от известной шведской торговой марки Timberk сочетает в себе роскошный дизайн и качественное исполнение. Он обладает мощностью 2000 Вт, вместимостью 50 литров, оснащен многофункциональным дисплеем, многоуровневым таймером, большим выбором режимов работы, встроенной системой самоконтроля. Модель нагревается около 43-х минут, работает абсолютно бесшумно. Прибор имеет два нагревательных элемента из меди, внутренний бак и другие внутренние компоненты из нержавеющей стали SUS 304. Среди преимуществ водонагревателя можно отметить наличие пульта дистанционного управления.</p><p><b>Особенности:</b></p><ul type=disc><li>Роскошный дизайн; <li>Абсолютно бесшумная работа; <li>2 медных нагревательных элемента, мощностью по 1000 Вт; <li>Внутренний бак и все внутренние компоненты выполнены из нержавеющей стали SUS 304 толщиной 1,2 мм; <li>Магниевый анод для дополнительной защиты бака и шовных соединений; <li>Накопительная емкость из 2-х резервуаров с системой 3-х переливов; <li>Пульт ДУ; <li>Многоуровневый таймер, большой выбор режимов работы; <li>Многофункциональный дисплей с индикацией температуры; <li>Ночной режим работы; <li>Встроенная система самоконтроля; <li>Экологически безопасная термоизоляция из non-CFC пенополиуриетана повышенной плотности с дополнительным слоем полиэтиленового материала; <li>Автоматическая сварка бака по технологии Tungsten Inert Gas (TIG); <li>Технология Guard IX; <li>Информационно-рекламная наклейка; <li>Максимальная комплектация: комбинированный клапан 7 Бар (обратный и предохранительный), электрический шнур с заземлением и УЗО, кронштейны для настенного монтажа. </li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Расположение: вертикальное; <li>Мощность по ступеням: 1,0/ 2,0 кВт; <li>Объем: 50 л; <li>Рабочее давление: 0,7 МПа; <li>Время нагрева: 43 мин (при &#916; 30 Cє); <li>Класс электрозащиты: IPX4; <li>Номинальный ток: 10А, 50Гц; <li>Размеры прибора (ВxШxГ): 87х43х23,5 см; <li>Вес: 13,15 кг.</li></ul><p><b>Производитель:</b> Timberk.</p><p><b>Страна:</b> Швеция.</p><p><b>Гарантия:</b></p><ul type=disc><li>На прибор (накопительная емкость): 60 месяцев; <li>На электрическую часть прибора: 36 месяцев.</li></ul> ремонт тепловентиляторов</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/f20c87437fcfbe2b1fc5c70c57532af2.jpeg" alt="водонагреватели саратов Масляный обогреватель Vitek VT-2104 BK" title="водонагреватели саратов Масляный обогреватель Vitek VT-2104 BK"><div class="box" page="maslyanyy-obogrevatel-vitek-vt-bk-2850r"><span class="title">водонагреватели саратов Масляный обогреватель Vitek VT-2104 BK</span><p>от <span class="price">2850</span> руб.</p></div></li>
						<li><img src="photos/f1394ab4836c70499b30c732fceb9972.jpeg" alt="замена кондиционера на климат Масляный обогреватель Vitek VT-2101 BK" title="замена кондиционера на климат Масляный обогреватель Vitek VT-2101 BK"><div class="box" page="maslyanyy-obogrevatel-vitek-vt-bk-2070r"><span class="title">замена кондиционера на климат Масляный обогреватель Vitek VT-2101 BK</span><p>от <span class="price">2070</span> руб.</p></div></li>
						<li><img src="photos/1c70596d527600fd0e8aad170ecca469.jpeg" alt="медные трубки для кондиционеров Термометр цифровой  уличный на липучке, арт. 01288" title="медные трубки для кондиционеров Термометр цифровой  уличный на липучке, арт. 01288"><div class="box" page="termometr-cifrovoy-ulichnyy-na-lipuchke-art-650r-2"><span class="title">медные трубки для кондиционеров Термометр цифровой  уличный на липучке, арт. 01288</span><p>от <span class="price">650</span> руб.</p></div></li>
						<li><img src="photos/dc588af274ff42d1adeb63b74d58b910.jpeg" alt="самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177" title="самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177"><div class="box" page="termometr-cifrovoy-avtomobilnyy-rst-art-460r"><span class="title">самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177</span><p>от <span class="price">460</span> руб.</p></div></li>
						<li class="large"><img src="photos/8083c71208f25517314b09f05cf4c1a4.jpeg" alt="кондиционер калина купить Assistant AH-1990 Метеостанция" title="кондиционер калина купить Assistant AH-1990 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-2100r"><span class="title">кондиционер калина купить Assistant AH-1990 Метеостанция</span><p>от <span class="price">2100</span> руб.</p></div></li>
						<li class="large"><img src="photos/62e02467d931962a606906e72d1a0eda.jpeg" alt="вентиляторы осевые вытяжные Очиститель воздуха Атмос Макси" title="вентиляторы осевые вытяжные Очиститель воздуха Атмос Макси"><div class="box" page="ochistitel-vozduha-atmos-maksi-8750r"><span class="title">вентиляторы осевые вытяжные Очиститель воздуха Атмос Макси</span><p>от <span class="price">8750</span> руб.</p></div></li>
						<li class="large"><img src="photos/f7b651727c936b973e40b0fd646bb983.jpeg" alt="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703" title="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703"><div class="box" page="vozduhoochistitel-redmond-rac-8990r"><span class="title">маркировка вентиляторов Воздухоочиститель Redmond RAC-3703</span><p>от <span class="price">8990</span> руб.</p></div></li>
						<li><img src="photos/f08421488a7bd6f20d3e09733f279f3d.jpeg" alt="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04" title="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r"><span class="title">номера кондиционеров Уличный газовый обогреватель ITM Sunny 04</span><p>от <span class="price">23800</span> руб.</p></div></li>
						<li><img src="photos/571628073e03a9f6c42ddfd32a49d174.jpeg" alt="реле вентилятора отопителя Электрогрелка для ног Элит (Сапог)" title="реле вентилятора отопителя Электрогрелка для ног Элит (Сапог)"><div class="box" page="elektrogrelka-dlya-nog-elit-sapog-740r"><span class="title">реле вентилятора отопителя Электрогрелка для ног Элит (Сапог)</span><p>от <span class="price">740</span> руб.</p></div></li>
						<li><img src="photos/ce0ce8dde3a0e46f59737689de200a9e.jpeg" alt="медицинский кондиционер Камин-электропечь Dimplex Club" title="медицинский кондиционер Камин-электропечь Dimplex Club"><div class="box" page="kaminelektropech-dimplex-club-8138r"><span class="title">медицинский кондиционер Камин-электропечь Dimplex Club</span><p>от <span class="price">8138</span> руб.</p></div></li>
						<li><img src="photos/c46b368a536f996a7d3d9fb78516cf07.jpeg" alt="водонагреватели в новосибирске Электроодеяло Элит 195x150" title="водонагреватели в новосибирске Электроодеяло Элит 195x150"><div class="box" page="elektroodeyalo-elit-x-1770r"><span class="title">водонагреватели в новосибирске Электроодеяло Элит 195x150</span><p>от <span class="price">1770</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vodonagrevatel-timberk-swh-fs-v-8700r.php", 0, -4); if (file_exists("comments/vodonagrevatel-timberk-swh-fs-v-8700r.php")) require_once "comments/vodonagrevatel-timberk-swh-fs-v-8700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vodonagrevatel-timberk-swh-fs-v-8700r.php" method="post" onsubmit="return checkForm(this)">
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