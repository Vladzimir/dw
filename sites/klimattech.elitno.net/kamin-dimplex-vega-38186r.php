<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kamin-dimplex-vega-38186r.php","кондиционер ниссан примера");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kamin-dimplex-vega-38186r.php", $nick, $comment);
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
		<title>кондиционер ниссан примера Камин Dimplex Vega  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кондиционер ниссан примера, предохранитель кондиционера, проточный водонагреватель атмор, компактные кондиционеры, тепловая пушка hintek, масляный обогреватель радиатор, угловые порталы для электрокаминов, уровень шума кондиционера, муфта привода вентилятора, изготовитель вентиляторов, монтаж и продажа кондиционеров, scarlett инфракрасный обогреватель, теплоотдача конвекторов, взрывозащищенные вентиляторы,  замена кондиционера на климат">
		<meta name="description" content="кондиционер ниссан примера Все мы стремимся к комфорту и уюту, особенно если это  касается нашего дома. Как...">
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
						<a class="photo" href="photos/7306344adf61ae8e6f46c280e9e05c4c.jpeg" title="кондиционер ниссан примера Камин Dimplex Vega"><img src="photos/7306344adf61ae8e6f46c280e9e05c4c.jpeg" alt="кондиционер ниссан примера Камин Dimplex Vega" title="кондиционер ниссан примера Камин Dimplex Vega -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-e-2360r.php"><img src="photos/7630b1e6dccadaf1f4a39299c06f31be.jpeg" alt="предохранитель кондиционера Конвектор Timberk TEC.E1 E 1000" title="предохранитель кондиционера Конвектор Timberk TEC.E1 E 1000"></a><h2>Конвектор Timberk TEC.E1 E 1000</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tecps-m-3050r.php"><img src="photos/cdcaff9b41da40fa5a745416f7f2c71e.jpeg" alt="проточный водонагреватель атмор Конвектор Timberk TEC.PS2 M 2000" title="проточный водонагреватель атмор Конвектор Timberk TEC.PS2 M 2000"></a><h2>Конвектор Timberk TEC.PS2 M 2000</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-splitsistema-timberk-ac-tim-h-s-15750r.php"><img src="photos/e771907fa85b93a2ee983a348ab4049a.jpeg" alt="компактные кондиционеры Кондиционер сплит-система Timberk AC TIM 12H S1" title="компактные кондиционеры Кондиционер сплит-система Timberk AC TIM 12H S1"></a><h2>Кондиционер сплит-система Timberk AC TIM 12H S1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кондиционер ниссан примера Камин Dimplex Vega</h1>
						<div class="tb"><p>Цена: от <span class="price">38186</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26405.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Все мы стремимся к комфорту и уюту, особенно если это  касается нашего дома. Как же создать уютную атмосферу в своей квартире и  превратить домашний интерьер в настоящее произведение искусства? Отличное  решение – приобретение настоящего камина! Камин Dimplex Vega (без обогрева) имеет  отличные технические характеристики и удобные габариты, а также специальный  пульт дистанционного управления. Кроме того, камин Dimplex Vega с легкостью может стать  настоящим украшением вашего дома – за счет благородного черного цвета  корпуса.            </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Мощность:       без обогрева;</li>   <li>Габаритные       размеры (ВxШxГ): 47х118,9х19 см;</li>   <li>Установочные       размеры (ВxШxГ): 47х118,9х19 см;</li>   <li>Пульт       ДУ;</li>   <li>Цвет:       черный.</li> </ul> <strong>Производитель:</strong> <strong>Dimplex (Ирландия)</strong> кондиционер ниссан примера</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3b3d62d33b746ad7a881bc361403117a.jpeg" alt="тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I" title="тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I"><div class="box" page="radiator-maslyanyy-timberk-tor-bt-i-2200r"><span class="title">тепловая пушка hintek Радиатор масляный Timberk TOR 21.2009 BT I</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/fd20bcd726977fbfba1823f40dec4b7d.jpeg" alt="масляный обогреватель радиатор Радиатор масляный Timberk TOR 21.2512 ER I" title="масляный обогреватель радиатор Радиатор масляный Timberk TOR 21.2512 ER I"><div class="box" page="radiator-maslyanyy-timberk-tor-er-i-2810r"><span class="title">масляный обогреватель радиатор Радиатор масляный Timberk TOR 21.2512 ER I</span><p>от <span class="price">2810</span> руб.</p></div></li>
						<li><img src="photos/5e1a352ffdddcc3988bebfe5b851296a.jpeg" alt="угловые порталы для электрокаминов Радиатор масляный Timberk Tor 31.3012 EH I" title="угловые порталы для электрокаминов Радиатор масляный Timberk Tor 31.3012 EH I"><div class="box" page="radiator-maslyanyy-timberk-tor-eh-i-3150r"><span class="title">угловые порталы для электрокаминов Радиатор масляный Timberk Tor 31.3012 EH I</span><p>от <span class="price">3150</span> руб.</p></div></li>
						<li><img src="photos/1262130e8464d9c06d7ad2296418cda2.jpeg" alt="уровень шума кондиционера Масляный радиатор Neoclima серия Standart" title="уровень шума кондиционера Масляный радиатор Neoclima серия Standart"><div class="box" page="maslyanyy-radiator-neoclima-seriya-standart-1900r"><span class="title">уровень шума кондиционера Масляный радиатор Neoclima серия Standart</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li class="large"><img src="photos/eaa9d36d06605b97c43cac0412f52c2b.jpeg" alt="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873" title="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873"><div class="box" page="barometr-futbolnyy-myach-rst-art-1750r"><span class="title">муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li class="large"><img src="photos/cbc44bc22b112f1d3347aec6358c74a8.gif" alt="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520" title="изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520"><div class="box" page="pogodnaya-animacionnaya-stanciya-rst-meteolight-art-6090r"><span class="title">изготовитель вентиляторов Погодная анимационная станция RST meteolight 520, арт. 02520</span><p>от <span class="price">6090</span> руб.</p></div></li>
						<li class="large"><img src="photos/84d53e881ff01839a6cd783e68cc4672.jpeg" alt="монтаж и продажа кондиционеров Тепловентилятор настенный Timberk TFH W200.NN" title="монтаж и продажа кондиционеров Тепловентилятор настенный Timberk TFH W200.NN"><div class="box" page="teploventilyator-nastennyy-timberk-tfh-wnn-1850r"><span class="title">монтаж и продажа кондиционеров Тепловентилятор настенный Timberk TFH W200.NN</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/a917aa3905e6fd88abcea6eeb0319427.jpeg" alt="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759" title="scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759"><div class="box" page="keramicheskiy-teploventilyator-vitek-vt-1380r"><span class="title">scarlett инфракрасный обогреватель Керамический тепловентилятор Vitek VT-1759</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li><img src="photos/66e0aa1057db078ec30260e7078f7d70.jpeg" alt="теплоотдача конвекторов Очиститель воздуха Neoclima NAP" title="теплоотдача конвекторов Очиститель воздуха Neoclima NAP"><div class="box" page="ochistitel-vozduha-neoclima-nap-7000r"><span class="title">теплоотдача конвекторов Очиститель воздуха Neoclima NAP</span><p>от <span class="price">7000</span> руб.</p></div></li>
						<li><img src="photos/010650b05d2dfced2c530dcd9b85f4cd.jpeg" alt="взрывозащищенные вентиляторы Электрогрелка для ног Microlife FH 200" title="взрывозащищенные вентиляторы Электрогрелка для ног Microlife FH 200"><div class="box" page="elektrogrelka-dlya-nog-microlife-fh-1690r"><span class="title">взрывозащищенные вентиляторы Электрогрелка для ног Microlife FH 200</span><p>от <span class="price">1690</span> руб.</p></div></li>
						<li><img src="photos/0c9aac822b8725f8d45b17d95fcd0468.jpeg" alt="переходник питания для вентилятора Грелка для ног Beurer FWM40" title="переходник питания для вентилятора Грелка для ног Beurer FWM40"><div class="box" page="grelka-dlya-nog-beurer-fwm-2050r"><span class="title">переходник питания для вентилятора Грелка для ног Beurer FWM40</span><p>от <span class="price">2050</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kamin-dimplex-vega-38186r.php", 0, -4); if (file_exists("comments/kamin-dimplex-vega-38186r.php")) require_once "comments/kamin-dimplex-vega-38186r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kamin-dimplex-vega-38186r.php" method="post" onsubmit="return checkForm(this)">
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