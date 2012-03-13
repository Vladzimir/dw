<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("keramicheskiy-teploventilyator-vitek-vt-1290r.php","кондиционеры kentatsu");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("keramicheskiy-teploventilyator-vitek-vt-1290r.php", $nick, $comment);
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
		<title>кондиционеры kentatsu Керамический тепловентилятор Vitek VT-1734  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кондиционеры kentatsu, водонагреватель баня, водонагреватели саратов, муфта привода вентилятора, аналоговые метеостанции, трасса кондиционера, каталог кондиционеров, тепловая завеса фрико, промышленные тепловые завесы, расчет мощности вентилятора, вентилятор отопителя 2108, проточный водонагреватель stiebel, вентиляторы для сушильных камер, водонагреватели в краснодаре,  производители тепловых пушек">
		<meta name="description" content="кондиционеры kentatsu Компактный керамический тепловентилятор Vitek VT-1734 обладает мощностью в 2000В...">
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
						<a class="photo" href="photos/84494cd79e9ba1c8e97a5e697cbf2909.jpeg" title="кондиционеры kentatsu Керамический тепловентилятор Vitek VT-1734"><img src="photos/84494cd79e9ba1c8e97a5e697cbf2909.jpeg" alt="кондиционеры kentatsu Керамический тепловентилятор Vitek VT-1734" title="кондиционеры kentatsu Керамический тепловентилятор Vitek VT-1734 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/obogrevatel-ny-la-1500r.php"><img src="photos/055ebba3bd14161bb9de9bf4750fdd50.jpeg" alt="водонагреватель баня Обогреватель NY 15LA" title="водонагреватель баня Обогреватель NY 15LA"></a><h2>Обогреватель NY 15LA</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-obogrevatel-vitek-vt-bk-2850r.php"><img src="photos/f20c87437fcfbe2b1fc5c70c57532af2.jpeg" alt="водонагреватели саратов Масляный обогреватель Vitek VT-2104 BK" title="водонагреватели саратов Масляный обогреватель Vitek VT-2104 BK"></a><h2>Масляный обогреватель Vitek VT-2104 BK</h2></li>
							<li><a href="http://klimattech.elitno.net/barometr-futbolnyy-myach-rst-art-1750r.php"><img src="photos/eaa9d36d06605b97c43cac0412f52c2b.jpeg" alt="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873" title="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873"></a><h2>Барометр  Футбольный мяч RST, арт. 07873</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кондиционеры kentatsu Керамический тепловентилятор Vitek VT-1734</h1>
						<div class="tb"><p>Цена: от <span class="price">1290</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18454.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Компактный керамический тепловентилятор Vitek VT-1734 обладает мощностью в 2000Вт с двумя температурными режимами обогреет помещение до 15м2. Ненагревающийся керамический корпус предотвратит ожоги, также VT-1734 оснащен системой защиты от перегрева, а встроенный детектор движения отключит обогреватель, если он будет случайно перевернут. <br>Специальная система «Frost Watch» сама включит тепловентилятор, если температура комнаты будет ниже 4°С<br><strong>Характеристики:</strong></p><ul type=disc><li>Мощность 2000 Вт; <li>2-позиционный переключатель нагрева (900/2000 Вт); <li>Площадь обогрева до 15 м2; <li>Приспособление для крепления на стену; <li>Регулировка направления воздушного потока; <li>Режим \Только вентилятор\; <li>Регулируемый термостат; <li>Защита от перегрева; <li>Индикаторы работы; <li>Электропитание 220-240 В, ~ 50 Гц. </li></ul><p><strong>Производитель: Vitek (Россия)</strong><br><strong>Гарантия: 1 год</strong></p> кондиционеры kentatsu</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ed983113b39d06d18310c4cf9623b56e.jpeg" alt="аналоговые метеостанции Настенный тепловентилятор Neoclima KPT-20-A8" title="аналоговые метеостанции Настенный тепловентилятор Neoclima KPT-20-A8"><div class="box" page="nastennyy-teploventilyator-neoclima-kpta-2450r"><span class="title">аналоговые метеостанции Настенный тепловентилятор Neoclima KPT-20-A8</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li><img src="photos/34e7f1a6500988f9a92a4b885e19a4b0.jpeg" alt="трасса кондиционера Timberk TFH T15PTS.V Тепловентилятор" title="трасса кондиционера Timberk TFH T15PTS.V Тепловентилятор"><div class="box" page="timberk-tfh-tptsv-teploventilyator-1330r"><span class="title">трасса кондиционера Timberk TFH T15PTS.V Тепловентилятор</span><p>от <span class="price">1330</span> руб.</p></div></li>
						<li><img src="photos/4d2ac867e7df54f1e11fed2f3ae7442c.jpeg" alt="каталог кондиционеров Nano Картридж-фильтр для воды 12491 для Boneco 7131" title="каталог кондиционеров Nano Картридж-фильтр для воды 12491 для Boneco 7131"><div class="box" page="nano-kartridzhfiltr-dlya-vody-dlya-boneco-720r"><span class="title">каталог кондиционеров Nano Картридж-фильтр для воды 12491 для Boneco 7131</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/079ceb0c1a4671e91e0d11ed1a8b9787.jpeg" alt="тепловая завеса фрико Климатический комплекс Sharp KC-840" title="тепловая завеса фрико Климатический комплекс Sharp KC-840"><div class="box" page="klimaticheskiy-kompleks-sharp-kc-15790r"><span class="title">тепловая завеса фрико Климатический комплекс Sharp KC-840</span><p>от <span class="price">15790</span> руб.</p></div></li>
						<li class="large"><img src="photos/a062675111bea25f0b877b32fa91ef2d.jpeg" alt="промышленные тепловые завесы Очиститель воздуха Boneco P2261" title="промышленные тепловые завесы Очиститель воздуха Boneco P2261"><div class="box" page="ochistitel-vozduha-boneco-p-4200r"><span class="title">промышленные тепловые завесы Очиститель воздуха Boneco P2261</span><p>от <span class="price">4200</span> руб.</p></div></li>
						<li class="large"><img src="photos/d3af6b5dff48e9808505bf8b2af62c8c.jpeg" alt="расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146" title="расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146"><div class="box" page="ultrazvukovoy-uvlazhnitel-boneco-airoswiss-u-1950r"><span class="title">расчет мощности вентилятора Ультразвуковой увлажнитель Boneco Air-O-Swiss U7146</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/84b0b05cf769ebedabf2bba53955e7e8.jpeg" alt="вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue" title="вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-blue-3630r"><span class="title">вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue</span><p>от <span class="price">3630</span> руб.</p></div></li>
						<li><img src="photos/8431705897587dd3b76f37d2dd61f575.jpeg" alt="проточный водонагреватель stiebel Увлажнитель ZENET 2720" title="проточный водонагреватель stiebel Увлажнитель ZENET 2720"><div class="box" page="uvlazhnitel-zenet-3850r"><span class="title">проточный водонагреватель stiebel Увлажнитель ZENET 2720</span><p>от <span class="price">3850</span> руб.</p></div></li>
						<li><img src="photos/c7f39ca4ae7ab043ae60cf2c5864767f.jpeg" alt="вентиляторы для сушильных камер Уличный газовый обогреватель ITM Sunny 950 Inbox" title="вентиляторы для сушильных камер Уличный газовый обогреватель ITM Sunny 950 Inbox"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-inbox-26350r"><span class="title">вентиляторы для сушильных камер Уличный газовый обогреватель ITM Sunny 950 Inbox</span><p>от <span class="price">26350</span> руб.</p></div></li>
						<li><img src="photos/998c8fbeb09f1a5b36f55e00d62d9435.png" alt="водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy" title="водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy"><div class="box" page="elektrogrelka-beurer-hk-cosy-2800r"><span class="title">водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy</span><p>от <span class="price">2800</span> руб.</p></div></li>
						<li><img src="photos/4dbc8cbd8fab8f23d6cfaeca5f2ca7f0.png" alt="домашняя метеостанция купить Электрический матрац ИНКОР (мощность 25 и 40 Вт) 145х50 см" title="домашняя метеостанция купить Электрический матрац ИНКОР (мощность 25 и 40 Вт) 145х50 см"><div class="box" page="elektricheskiy-matrac-inkor-moschnost-i-vt-h-sm-790r"><span class="title">домашняя метеостанция купить Электрический матрац ИНКОР (мощность 25 и 40 Вт) 145х50 см</span><p>от <span class="price">790</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("keramicheskiy-teploventilyator-vitek-vt-1290r.php", 0, -4); if (file_exists("comments/keramicheskiy-teploventilyator-vitek-vt-1290r.php")) require_once "comments/keramicheskiy-teploventilyator-vitek-vt-1290r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="keramicheskiy-teploventilyator-vitek-vt-1290r.php" method="post" onsubmit="return checkForm(this)">
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