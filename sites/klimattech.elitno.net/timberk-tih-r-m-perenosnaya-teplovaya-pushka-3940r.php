<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("timberk-tih-r-m-perenosnaya-teplovaya-pushka-3940r.php","портативная метеостанция");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("timberk-tih-r-m-perenosnaya-teplovaya-pushka-3940r.php", $nick, $comment);
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
		<title>портативная метеостанция Timberk TIH R1 5M Переносная тепловая пушка  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="портативная метеостанция, кондиционеры раменское, как выбрать вентилятор, иколайн инфракрасные обогреватели, обзор вентиляторов, двухфазный кондиционер спрей, конвектор видео в mp4 бесплатно, газовый водонагреватель вектор, водонагреватель нева люкс, спрей кондиционер elseve, реле вентилятора радиатора, обогреватели ветерок, тепловая пушка для натяжных потолков, температура включения вентилятора,  кондиционеры канального типа">
		<meta name="description" content="портативная метеостанция Переносная тепловая пушка Конвектор Timberk TIH R1 5M – универсальное устройство...">
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
						<a class="photo" href="photos/9047019d859c516eaff7f68bcdf19600.jpeg" title="портативная метеостанция Timberk TIH R1 5M Переносная тепловая пушка"><img src="photos/9047019d859c516eaff7f68bcdf19600.jpeg" alt="портативная метеостанция Timberk TIH R1 5M Переносная тепловая пушка" title="портативная метеостанция Timberk TIH R1 5M Переносная тепловая пушка -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-v-7520r.php"><img src="photos/0c5284579f764e54bbcd6bbb6c182d13.jpeg" alt="кондиционеры раменское Водонагреватель Timberk SWH FS1 50 V" title="кондиционеры раменское Водонагреватель Timberk SWH FS1 50 V"></a><h2>Водонагреватель Timberk SWH FS1 50 V</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-4710r.php"><img src="photos/861076b39a899d1e65ace745c382499d.jpeg" alt="как выбрать вентилятор Водонагреватель Neoclima EWH 80" title="как выбрать вентилятор Водонагреватель Neoclima EWH 80"></a><h2>Водонагреватель Neoclima EWH 80</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-comfort-9200r-3.php"><img src="photos/dd75225e26d07955601092405099e715.jpeg" alt="иколайн инфракрасные обогреватели Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 2024" title="иколайн инфракрасные обогреватели Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 2024"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 2024</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>портативная метеостанция Timberk TIH R1 5M Переносная тепловая пушка</h1>
						<div class="tb"><p>Цена: от <span class="price">3940</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18286.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Переносная тепловая пушка Конвектор Timberk TIH R1 5M – универсальное устройство для обогревания помещений до 45 квадратных метров с трубчатым гладким нагревательным элементом. Хит продаж в стильном черном матовом корпусе. Имеет высокий класс электрозащиты, удобную ручку для транспортировки и датчик защиты от перегрева. Влагозащищена, 2 степени мощности. В комплекте идет привод со стандартной вилкой. </p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220/50 <li>Режимы мощности: 1500/3000 Вт <li>Вес: не более 9 кг <li>Увеличение температуры воздуха в режиме 2С не менее чем 36С <li>Габариты: 330х400х300 мм </li></ul><p><b>Производитель: Швеция</b></p> портативная метеостанция</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/551fc35ac68903f8017becf34bc8e439.jpeg" alt="обзор вентиляторов Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 6000 Tower" title="обзор вентиляторов Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 6000 Tower"><div class="box"><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-premium-tower-74900r.php"><h3 class="title">обзор вентиляторов Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 6000 Tower</h3><p>от <span class="price">74900</span> руб.</p></a></div></li>
						<li><img src="photos/060b0a0f0f41f23d3959a3a2fead9d8a.jpeg" alt="двухфазный кондиционер спрей Конвектор Timberk TEC O E 1500 IN" title="двухфазный кондиционер спрей Конвектор Timberk TEC O E 1500 IN"><div class="box" page="konvektor-timberk-tec-o-e-in-2850r"><span class="title">двухфазный кондиционер спрей Конвектор Timberk TEC O E 1500 IN</span><p>от <span class="price">2850</span> руб.</p></div></li>
						<li><img src="photos/de56a071ca1190260819c688068be1ef.jpeg" alt="конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN" title="конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN"><div class="box" page="konvektor-timberk-led-r-in-3220r"><span class="title">конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN</span><p>от <span class="price">3220</span> руб.</p></div></li>
						<li><img src="photos/37369c75abf56d5b9a3ba17dfad98001.jpeg" alt="газовый водонагреватель вектор Конвектор электрический Timberk TEC.PS1 LE IN" title="газовый водонагреватель вектор Конвектор электрический Timberk TEC.PS1 LE IN"><div class="box" page="konvektor-elektricheskiy-timberk-tecps-le-in-2530r"><span class="title">газовый водонагреватель вектор Конвектор электрический Timberk TEC.PS1 LE IN</span><p>от <span class="price">2530</span> руб.</p></div></li>
						<li class="large"><img src="photos/52a639176807ccf2abb029fa8de7528c.jpeg" alt="водонагреватель нева люкс Обогреватель NY 18LA" title="водонагреватель нева люкс Обогреватель NY 18LA"><div class="box" page="obogrevatel-ny-la-1800r"><span class="title">водонагреватель нева люкс Обогреватель NY 18LA</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li class="large"><img src="photos/a956489cec5b1098b61f3714b18bd317.jpeg" alt="спрей кондиционер elseve Assistant AH-1976 Метеостанция" title="спрей кондиционер elseve Assistant AH-1976 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-2550r"><span class="title">спрей кондиционер elseve Assistant AH-1976 Метеостанция</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li class="large"><img src="photos/6d82bb5ef05990e0bcf8a3ff9e749518.jpeg" alt="реле вентилятора радиатора Увлажняющая губка Filter matt  для увлажнителя воздуха Boneco AIR-O-SWISS 2251, арт. 5920" title="реле вентилятора радиатора Увлажняющая губка Filter matt  для увлажнителя воздуха Boneco AIR-O-SWISS 2251, арт. 5920"><div class="box" page="uvlazhnyayuschaya-gubka-filter-matt-dlya-uvlazhnitelya-vozduha-boneco-airoswiss-art-690r"><span class="title">реле вентилятора радиатора Увлажняющая губка Filter matt  для увлажнителя воздуха Boneco AIR-O-SWISS 2251, арт. 5920</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/70ff9e86256306e32dffb6a5f1466008.jpeg" alt="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800" title="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800"><div class="box" page="ochistiteluvlazhnitel-vozduha-atmos-akva-1950r"><span class="title">обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/e76dfeadd933803037b175a3b2975d0d.jpeg" alt="тепловая пушка для натяжных потолков Мойка воздуха с цифровым дисплеем Boneco Air-O-Swiss 2055DR" title="тепловая пушка для натяжных потолков Мойка воздуха с цифровым дисплеем Boneco Air-O-Swiss 2055DR"><div class="box" page="moyka-vozduha-s-cifrovym-displeem-boneco-airoswiss-dr-16500r"><span class="title">тепловая пушка для натяжных потолков Мойка воздуха с цифровым дисплеем Boneco Air-O-Swiss 2055DR</span><p>от <span class="price">16500</span> руб.</p></div></li>
						<li><img src="photos/1e3ec1cf07b142d241380af7d5f60653.jpeg" alt="температура включения вентилятора Электрогрелка Beurer TM 23" title="температура включения вентилятора Электрогрелка Beurer TM 23"><div class="box" page="elektrogrelka-beurer-tm-1400r"><span class="title">температура включения вентилятора Электрогрелка Beurer TM 23</span><p>от <span class="price">1400</span> руб.</p></div></li>
						<li><img src="photos/a5f8fe566b61ce24e2379ab4a0ae140e.jpeg" alt="водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC" title="водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC"><div class="box" page="elektrokamin-nastennyy-electrolux-efp-w-urc-13030r"><span class="title">водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC</span><p>от <span class="price">13030</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("timberk-tih-r-m-perenosnaya-teplovaya-pushka-3940r.php", 0, -4); if (file_exists("comments/timberk-tih-r-m-perenosnaya-teplovaya-pushka-3940r.php")) require_once "comments/timberk-tih-r-m-perenosnaya-teplovaya-pushka-3940r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="timberk-tih-r-m-perenosnaya-teplovaya-pushka-3940r.php" method="post" onsubmit="return checkForm(this)">
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