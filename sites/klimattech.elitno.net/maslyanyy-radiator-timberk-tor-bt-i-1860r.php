<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("maslyanyy-radiator-timberk-tor-bt-i-1860r.php","монтаж конвектора");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("maslyanyy-radiator-timberk-tor-bt-i-1860r.php", $nick, $comment);
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
		<title>монтаж конвектора Масляный радиатор Timberk TOR 21.1206 BT I  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="монтаж конвектора, обогреватель с вентилятором, инфракрасные обогреватели для теплиц, вентилятор охлаждения калина, тепловая пушка hintek, водонагреватели vaillant, автомобильный кондиционер зимой, тепловая пушка дизельная аренда, кондиционеры для микроавтобусов, вентилятор ваз 21102, водонагреватель аристон цена, видео конвектор movavi, кондиционер для серверной, установка инфракрасных обогревателей,  где купить тепловую пушку">
		<meta name="description" content="монтаж конвектора Масляный радиатор Timberk TOR 21.1206 BT I с ультратонким дизайном (ширина секци...">
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
						<a class="photo" href="photos/07bf4a882204122da512e5a23fa24df7.jpeg" title="монтаж конвектора Масляный радиатор Timberk TOR 21.1206 BT I"><img src="photos/07bf4a882204122da512e5a23fa24df7.jpeg" alt="монтаж конвектора Масляный радиатор Timberk TOR 21.1206 BT I" title="монтаж конвектора Масляный радиатор Timberk TOR 21.1206 BT I -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-fast-6900r.php"><img src="photos/42405fc3a6c3e6273deac9cc9bc63dec.jpeg" alt="обогреватель с вентилятором Водонагреватель Neoclima FAST 30" title="обогреватель с вентилятором Водонагреватель Neoclima FAST 30"></a><h2>Водонагреватель Neoclima FAST 30</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-slim-6350r.php"><img src="photos/df88674debddbba6547d083f5d9d509a.jpeg" alt="инфракрасные обогреватели для теплиц Водонагреватель Neoclima Slim 50" title="инфракрасные обогреватели для теплиц Водонагреватель Neoclima Slim 50"></a><h2>Водонагреватель Neoclima Slim 50</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-mobilnyy-timberk-ac-tim-h-p-22800r.php"><img src="photos/23f3cf9b829bf9ea8c9049b93628f3cb.jpeg" alt="вентилятор охлаждения калина Кондиционер мобильный Timberk AC TIM 09H P1" title="вентилятор охлаждения калина Кондиционер мобильный Timberk AC TIM 09H P1"></a><h2>Кондиционер мобильный Timberk AC TIM 09H P1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>монтаж конвектора Масляный радиатор Timberk TOR 21.1206 BT I</h1>
						<div class="tb"><p>Цена: от <span class="price">1860</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18207.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Масляный радиатор Timberk TOR 21.1206 BT I с ультратонким дизайном (ширина секций 110 мм) и встроенным ионизатором воздуха. Предназначен для обогрева помещений в холодное время года. Он имеет регулируемый термостат и индикатор режимов работы, а также три ступени мощности нагрева. Установлены механизм защиты от пыли и замерзания. 6 секций, мощность 1200 Вт. Функция автоматического климат-контроля поддерживает установленную вами температуру в помещении. </p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220-230/50 <li>Мощность: 1200 Вт <li>Размеры с ножками: : 705х150х345 см <li>Вес: 7,1 кг </li></ul><p><b>Производитель: Швеция</b></p> монтаж конвектора</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3b3d62d33b746ad7a881bc361403117a.jpeg" alt="тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I" title="тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I"><div class="box" page="radiator-maslyanyy-timberk-tor-bt-i-2200r"><span class="title">тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/1ea7ff8c7ed815a8f66def82d7b1f7e5.jpeg" alt="водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R" title="водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R"><div class="box" page="maslyanyy-obogrevatel-atlanta-atnr-2390r"><span class="title">водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R</span><p>от <span class="price">2390</span> руб.</p></div></li>
						<li><img src="photos/91508bf60f212bb3a2e98ddcc6c1eeb6.jpeg" alt="автомобильный кондиционер зимой NEOCLIMA NWH-D1 Тепловентиляторы" title="автомобильный кондиционер зимой NEOCLIMA NWH-D1 Тепловентиляторы"><div class="box" page="neoclima-nwhd-teploventilyatory-2380r"><span class="title">автомобильный кондиционер зимой NEOCLIMA NWH-D1 Тепловентиляторы</span><p>от <span class="price">2380</span> руб.</p></div></li>
						<li><img src="photos/82995395f4c5b857d2a196e995f28a79.jpeg" alt="тепловая пушка дизельная аренда Тепловентилятор электрический напольный Timberk TFH T20FSN.PQ" title="тепловая пушка дизельная аренда Тепловентилятор электрический напольный Timberk TFH T20FSN.PQ"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfsnpq-2650r"><span class="title">тепловая пушка дизельная аренда Тепловентилятор электрический напольный Timberk TFH T20FSN.PQ</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/1ec83e9cb7df4ee11f0d144649ef201f.jpeg" alt="кондиционеры для микроавтобусов Переносная тепловая пушка Timberk TIH R1 3M" title="кондиционеры для микроавтобусов Переносная тепловая пушка Timberk TIH R1 3M"><div class="box" page="perenosnaya-teplovaya-pushka-timberk-tih-r-m-2970r"><span class="title">кондиционеры для микроавтобусов Переносная тепловая пушка Timberk TIH R1 3M</span><p>от <span class="price">2970</span> руб.</p></div></li>
						<li class="large"><img src="photos/13c365abeb3c53f68e792acf11131b89.jpeg" alt="вентилятор ваз 21102 Мойка воздуха Electrolux EHAW 6515" title="вентилятор ваз 21102 Мойка воздуха Electrolux EHAW 6515"><div class="box" page="moyka-vozduha-electrolux-ehaw-12750r"><span class="title">вентилятор ваз 21102 Мойка воздуха Electrolux EHAW 6515</span><p>от <span class="price">12750</span> руб.</p></div></li>
						<li class="large"><img src="photos/f582d095ca5f4d9ee39dfd4a1564b1bc.jpeg" alt="водонагреватель аристон цена Увлажнитель воздуха Vitesse VS-867" title="водонагреватель аристон цена Увлажнитель воздуха Vitesse VS-867"><div class="box" page="uvlazhnitel-vozduha-vitesse-vs-8750r"><span class="title">водонагреватель аристон цена Увлажнитель воздуха Vitesse VS-867</span><p>от <span class="price">8750</span> руб.</p></div></li>
						<li><img src="photos/344f068a3cddce171f547a26cf89a0f9.jpeg" alt="видео конвектор movavi Мойка воздуха Boneco 1355N" title="видео конвектор movavi Мойка воздуха Boneco 1355N"><div class="box" page="moyka-vozduha-boneco-n-9300r"><span class="title">видео конвектор movavi Мойка воздуха Boneco 1355N</span><p>от <span class="price">9300</span> руб.</p></div></li>
						<li><img src="photos/771e29e896f7ce0ffaac8f209d3a2130.jpeg" alt="кондиционер для серверной Электрогрелка Microlife FH 80" title="кондиционер для серверной Электрогрелка Microlife FH 80"><div class="box" page="elektrogrelka-microlife-fh-1240r"><span class="title">кондиционер для серверной Электрогрелка Microlife FH 80</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li><img src="photos/5c11708815961fee7eed3b7791a7e12a.jpeg" alt="установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный" title="установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный"><div class="box" page="electrolux-efp-w-rc-elektrokamin-nastennyy-16330r"><span class="title">установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный</span><p>от <span class="price">16330</span> руб.</p></div></li>
						<li><img src="photos/e585d1e72485c3e967023a9b09b2259c.jpeg" alt="тепловые пушки хабаровск Камин Dimplex Obsidian" title="тепловые пушки хабаровск Камин Dimplex Obsidian"><div class="box" page="kamin-dimplex-obsidian-29735r"><span class="title">тепловые пушки хабаровск Камин Dimplex Obsidian</span><p>от <span class="price">29735</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("maslyanyy-radiator-timberk-tor-bt-i-1860r.php", 0, -4); if (file_exists("comments/maslyanyy-radiator-timberk-tor-bt-i-1860r.php")) require_once "comments/maslyanyy-radiator-timberk-tor-bt-i-1860r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="maslyanyy-radiator-timberk-tor-bt-i-1860r.php" method="post" onsubmit="return checkForm(this)">
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