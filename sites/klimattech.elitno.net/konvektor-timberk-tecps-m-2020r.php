<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("konvektor-timberk-tecps-m-2020r.php","vanguard тепловая пушка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("konvektor-timberk-tecps-m-2020r.php", $nick, $comment);
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
		<title>vanguard тепловая пушка Конвектор Timberk TEC.PS2 M 500  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="vanguard тепловая пушка, конвекторы отопления отзывы, замена радиатора кондиционера, водонагреватели в ижевске, муфта привода вентилятора, бальзам кондиционер, водонагреватель садко, как рассчитать кондиционер, кондиционер форд мондео, отзывы о кондиционерах, установка для заправки кондиционеров, электрокамины декоративные, водонагреватель power, эльдорадо кондиционеры,  водонагреватель haier">
		<meta name="description" content="vanguard тепловая пушка Timberk TEC.PS2 M 500 – недорогой конвектор мощностью 500 Вт с механическим терм...">
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
						<a class="photo" href="photos/3ffe8f5edf569fd82f3547a04fdb540c.jpeg" title="vanguard тепловая пушка Конвектор Timberk TEC.PS2 M 500"><img src="photos/3ffe8f5edf569fd82f3547a04fdb540c.jpeg" alt="vanguard тепловая пушка Конвектор Timberk TEC.PS2 M 500" title="vanguard тепловая пушка Конвектор Timberk TEC.PS2 M 500 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvektor-ballu-plaza-bepe-3600r.php"><img src="photos/60bbbf503cc1f54478f2063da8fc6ed7.jpeg" alt="конвекторы отопления отзывы Конвектор Ballu Plaza BEP|E-1000" title="конвекторы отопления отзывы Конвектор Ballu Plaza BEP|E-1000"></a><h2>Конвектор Ballu Plaza BEP|E-1000</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecpf-m-in-2250r.php"><img src="photos/f44ad2f5610afc7476c1e57bae3c758c.jpeg" alt="замена радиатора кондиционера Конвектор электрический Timberk TEC.PF2 М IN" title="замена радиатора кондиционера Конвектор электрический Timberk TEC.PF2 М IN"></a><h2>Конвектор электрический Timberk TEC.PF2 М IN</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-splitsistema-timberk-ac-tim-h-s-22130r.php"><img src="photos/4c338f54a6b692bf07f08a5f8cacdc2a.jpeg" alt="водонагреватели в ижевске Кондиционер сплит-система Timberk AC TIM 18H S1" title="водонагреватели в ижевске Кондиционер сплит-система Timberk AC TIM 18H S1"></a><h2>Кондиционер сплит-система Timberk AC TIM 18H S1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>vanguard тепловая пушка Конвектор Timberk TEC.PS2 M 500</h1>
						<div class="tb"><p>Цена: от <span class="price">2020</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18179.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Timberk TEC.PS2 M 500 – недорогой конвектор мощностью 500 Вт с механическим термостатом. Предназначен для обогрева помещений в холодное время года. Установлен может быть только в вертикальном положении на вертикальной стене или жесткой горизонтальной поверхности. Конвектор защищен от перегрева и совершенно безопасен в использовании. Он не накапливает пыль и не выжигает кислород, а высокий класс защиты от влаги IP24 позволяет использовать конвектор даже во влажных помещениях. Абсолютно бесшумная работа стандарта Ultra Silence. </p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220-230/50 <li>Мощность: 500 Вт <li>Размеры с ножками: 460х400х550 <li>Вес: 3,9 кг </li></ul><p><b>Производитель: Швеция</b></p> vanguard тепловая пушка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/eaa9d36d06605b97c43cac0412f52c2b.jpeg" alt="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873" title="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873"><div class="box" page="barometr-futbolnyy-myach-rst-art-1750r"><span class="title">муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/a01db44cda068009da1951bb464b1916.jpeg" alt="бальзам кондиционер Обогреватель Бархатный сезон «Парусник»" title="бальзам кондиционер Обогреватель Бархатный сезон «Парусник»"><div class="box" page="obogrevatel-barhatnyy-sezon-«parusnik»-880r"><span class="title">бальзам кондиционер Обогреватель Бархатный сезон «Парусник»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/67084118d5753838baadc3c476e16214.jpeg" alt="водонагреватель садко Тепловентилятор Neoclima FH-15" title="водонагреватель садко Тепловентилятор Neoclima FH-15"><div class="box" page="teploventilyator-neoclima-fh-700r"><span class="title">водонагреватель садко Тепловентилятор Neoclima FH-15</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/b6565f7fad53009fc4307abb9d764c90.jpeg" alt="как рассчитать кондиционер Тепловентилятор Atlanta ATH-105" title="как рассчитать кондиционер Тепловентилятор Atlanta ATH-105"><div class="box" page="teploventilyator-atlanta-ath-550r"><span class="title">как рассчитать кондиционер Тепловентилятор Atlanta ATH-105</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li class="large"><img src="photos/e90ec0ae7077f087cc1e72cdfa25c63c.jpeg" alt="кондиционер форд мондео Очиститель воздуха  Атмос Вент 1103" title="кондиционер форд мондео Очиститель воздуха  Атмос Вент 1103"><div class="box" page="ochistitel-vozduha-atmos-vent-3590r"><span class="title">кондиционер форд мондео Очиститель воздуха  Атмос Вент 1103</span><p>от <span class="price">3590</span> руб.</p></div></li>
						<li class="large"><img src="photos/2415c05e4acf4aa843d9dc13c0afc174.jpeg" alt="отзывы о кондиционерах Очиститель воздуха Атмос Вент 1003" title="отзывы о кондиционерах Очиститель воздуха Атмос Вент 1003"><div class="box" page="ochistitel-vozduha-atmos-vent-4590r"><span class="title">отзывы о кондиционерах Очиститель воздуха Атмос Вент 1003</span><p>от <span class="price">4590</span> руб.</p></div></li>
						<li class="large"><img src="photos/fc4528fada09a576c10fd01202d9b5c1.jpeg" alt="установка для заправки кондиционеров Увлажнитель воздуха ультразвуковой Атмос 2728" title="установка для заправки кондиционеров Увлажнитель воздуха ультразвуковой Атмос 2728"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-atmos-5900r"><span class="title">установка для заправки кондиционеров Увлажнитель воздуха ультразвуковой Атмос 2728</span><p>от <span class="price">5900</span> руб.</p></div></li>
						<li><img src="photos/99871b59fb87db622a27f7be8ddc2ca0.jpeg" alt="электрокамины декоративные Ультразвуковой увлажнитель воздуха Neoclima NHL-700E (Сенсор)" title="электрокамины декоративные Ультразвуковой увлажнитель воздуха Neoclima NHL-700E (Сенсор)"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-neoclima-nhle-sensor-4600r"><span class="title">электрокамины декоративные Ультразвуковой увлажнитель воздуха Neoclima NHL-700E (Сенсор)</span><p>от <span class="price">4600</span> руб.</p></div></li>
						<li><img src="photos/c0fcd29b5049a2d3de0ef6c0b57282fd.jpeg" alt="водонагреватель power Ультразвуковой увлажнитель воздуха Redmond RHF-3303" title="водонагреватель power Ультразвуковой увлажнитель воздуха Redmond RHF-3303"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-redmond-rhf-3990r"><span class="title">водонагреватель power Ультразвуковой увлажнитель воздуха Redmond RHF-3303</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/9b9dec6ba66e5480aa283df2c6786c0d.jpeg" alt="эльдорадо кондиционеры Электрокамин напольный  Electrolux  EFP F - 100" title="эльдорадо кондиционеры Электрокамин напольный  Electrolux  EFP F - 100"><div class="box" page="elektrokamin-napolnyy-electrolux-efp-f-6600r"><span class="title">эльдорадо кондиционеры Электрокамин напольный  Electrolux  EFP F - 100</span><p>от <span class="price">6600</span> руб.</p></div></li>
						<li><img src="photos/e7190e68c9f90f8d159264489893e41d.jpeg" alt="рабочее колесо вентилятора Электрокамин настенный  Electrolux  EFP W - 1100URC" title="рабочее колесо вентилятора Электрокамин настенный  Electrolux  EFP W - 1100URC"><div class="box" page="elektrokamin-nastennyy-electrolux-efp-w-urc-13030r-2"><span class="title">рабочее колесо вентилятора Электрокамин настенный  Electrolux  EFP W - 1100URC</span><p>от <span class="price">13030</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("konvektor-timberk-tecps-m-2020r.php", 0, -4); if (file_exists("comments/konvektor-timberk-tecps-m-2020r.php")) require_once "comments/konvektor-timberk-tecps-m-2020r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="konvektor-timberk-tecps-m-2020r.php" method="post" onsubmit="return checkForm(this)">
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