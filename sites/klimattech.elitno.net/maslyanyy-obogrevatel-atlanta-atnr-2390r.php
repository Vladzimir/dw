<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("maslyanyy-obogrevatel-atlanta-atnr-2390r.php","техническое обслуживание кондиционеров");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("maslyanyy-obogrevatel-atlanta-atnr-2390r.php", $nick, $comment);
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
		<title>техническое обслуживание кондиционеров Масляный обогреватель Atlanta АТН-2006R  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="техническое обслуживание кондиционеров, магазин вентиляторов, водонагреватели ariston shuttle, профессиональные кондиционеры, инфракрасные обогреватели вред, электрический масляный радиатор, какой кондиционер лучше, водонагреватели в ижевске, потребление кондиционера, гудит вентилятор печки, вентилятор отопителя 2108, где купить электрокамин, очистители и увлажнители воздуха отзывы, номера кондиционеров,  скачать бесплатно dvd конвектор">
		<meta name="description" content="техническое обслуживание кондиционеров Масляный обогреватель Atlanta АТН-2006R выполненный в современном дизайне с 7 се...">
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
						<a class="photo" href="photos/1ea7ff8c7ed815a8f66def82d7b1f7e5.jpeg" title="техническое обслуживание кондиционеров Масляный обогреватель Atlanta АТН-2006R"><img src="photos/1ea7ff8c7ed815a8f66def82d7b1f7e5.jpeg" alt="техническое обслуживание кондиционеров Масляный обогреватель Atlanta АТН-2006R" title="техническое обслуживание кондиционеров Масляный обогреватель Atlanta АТН-2006R -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-ed-i-2300r.php"><img src="photos/b72f28795628f1732b5b30e56652c320.jpeg" alt="магазин вентиляторов Масляный радиатор Timberk TOR 31 ED I" title="магазин вентиляторов Масляный радиатор Timberk TOR 31 ED I"></a><h2>Масляный радиатор Timberk TOR 31 ED I</h2></li>
							<li><a href="http://klimattech.elitno.net/termogigrometr-cifrovoy-rst-825r.php"><img src="photos/fe91a31089c8058c33724d6ef127f188.jpeg" alt="водонагреватели ariston shuttle Термогигрометр цифровой RST 06017" title="водонагреватели ariston shuttle Термогигрометр цифровой RST 06017"></a><h2>Термогигрометр цифровой RST 06017</h2></li>
							<li><a href="http://klimattech.elitno.net/teploventilyator-timberk-tfh-snfm-850r.php"><img src="photos/4cb207aae88a45db69ae7e61202374e5.jpeg" alt="профессиональные кондиционеры Тепловентилятор Timberk TFH S20NFM" title="профессиональные кондиционеры Тепловентилятор Timberk TFH S20NFM"></a><h2>Тепловентилятор Timberk TFH S20NFM</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>техническое обслуживание кондиционеров Масляный обогреватель Atlanta АТН-2006R</h1>
						<div class="tb"><p>Цена: от <span class="price">2390</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19657.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Масляный обогреватель Atlanta АТН-2006R выполненный в современном дизайне с 7 секциями, 3 уровнями мощности и вентилятором, который быстро распределит тепло по всему помещению. Снабжен термостатом, который автоматически будет держать выбранную температуру в комнате. Абсолютно безопасен, так как защищен от перегрева и имеет евровилку с заземлением и световой индикатор включения. Максимальная мощность 2000 Вт.<br><br><strong>Характеристики:</strong></p><ul type=disc><li>7-секционный масляный обогреватель <li>Современный дизайн <li>3 уровня мощности - 650 Вт, 950 Вт, 1600Вт <li>Вентилятор 400 Вт <li>Термостат – автоматический контроль температуры <li>Защита от перегрева <li>Колеса – легкое передвижение <li>Евровилка с заземлением <li>Световой индикатор включения <li>Максимальная мощность 2000 Вт <li>220-240 В, 50-60 Гц </li></ul><p><strong>Производитель: США</strong></p> техническое обслуживание кондиционеров</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/f06cbcf8fc84e22661b7889248dc2d8e.jpeg" alt="инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06" title="инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06"><div class="box"><a href="http://klimattech.elitno.net/teploventilyator-neoclima-fh-650r.php"><h3 class="title">инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06</h3><p>от <span class="price">650</span> руб.</p></a></div></li>
						<li><img src="photos/037eb596ac62f4774a56e071c5bfc844.jpeg" alt="электрический масляный радиатор Тепловентилятор электрический настенный Timberk TFH W250.RX" title="электрический масляный радиатор Тепловентилятор электрический настенный Timberk TFH W250.RX"><div class="box" page="teploventilyator-elektricheskiy-nastennyy-timberk-tfh-wrx-2750r"><span class="title">электрический масляный радиатор Тепловентилятор электрический настенный Timberk TFH W250.RX</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/c1fe9260de97ac5d8658504d30013ba0.jpeg" alt="какой кондиционер лучше Тепловентилятор Atlanta ATH-105" title="какой кондиционер лучше Тепловентилятор Atlanta ATH-105"><div class="box" page="teploventilyator-atlanta-ath-700r"><span class="title">какой кондиционер лучше Тепловентилятор Atlanta ATH-105</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/3338a70d0dd00d6d7b4a328665ef2b1c.jpeg" alt="водонагреватели в ижевске Тепловентилятор керамический Vitesse VS-885" title="водонагреватели в ижевске Тепловентилятор керамический Vitesse VS-885"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-1590r"><span class="title">водонагреватели в ижевске Тепловентилятор керамический Vitesse VS-885</span><p>от <span class="price">1590</span> руб.</p></div></li>
						<li class="large"><img src="photos/3e107257dc07d447862012397052efed.jpeg" alt="потребление кондиционера Комплект фильтров для очистителя воздуха Атмос-Макси-200" title="потребление кондиционера Комплект фильтров для очистителя воздуха Атмос-Макси-200"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-1650r"><span class="title">потребление кондиционера Комплект фильтров для очистителя воздуха Атмос-Макси-200</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li class="large"><img src="photos/6979b1afba03d302c00e31baabc61d13.jpeg" alt="гудит вентилятор печки Очиститель-ионизатор воздуха Атмос Мини" title="гудит вентилятор печки Очиститель-ионизатор воздуха Атмос Мини"><div class="box" page="ochistitelionizator-vozduha-atmos-mini-1190r"><span class="title">гудит вентилятор печки Очиститель-ионизатор воздуха Атмос Мини</span><p>от <span class="price">1190</span> руб.</p></div></li>
						<li class="large"><img src="photos/84b0b05cf769ebedabf2bba53955e7e8.jpeg" alt="вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue" title="вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-blue-3630r"><span class="title">вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue</span><p>от <span class="price">3630</span> руб.</p></div></li>
						<li><img src="photos/2404258926d8fd6dbbfeb11b6f521d94.jpeg" alt="где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135" title="где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-5730r"><span class="title">где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135</span><p>от <span class="price">5730</span> руб.</p></div></li>
						<li><img src="photos/8733d0878200d7ec5734f716e840146f.jpeg" alt="очистители и увлажнители воздуха отзывы Увлажнитель ZENET JSS-37501" title="очистители и увлажнители воздуха отзывы Увлажнитель ZENET JSS-37501"><div class="box" page="uvlazhnitel-zenet-jss-3970r"><span class="title">очистители и увлажнители воздуха отзывы Увлажнитель ZENET JSS-37501</span><p>от <span class="price">3970</span> руб.</p></div></li>
						<li><img src="photos/f08421488a7bd6f20d3e09733f279f3d.jpeg" alt="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04" title="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r"><span class="title">номера кондиционеров Уличный газовый обогреватель ITM Sunny 04</span><p>от <span class="price">23800</span> руб.</p></div></li>
						<li><img src="photos/571628073e03a9f6c42ddfd32a49d174.jpeg" alt="реле вентилятора отопителя Электрогрелка для ног Элит (Сапог)" title="реле вентилятора отопителя Электрогрелка для ног Элит (Сапог)"><div class="box" page="elektrogrelka-dlya-nog-elit-sapog-740r"><span class="title">реле вентилятора отопителя Электрогрелка для ног Элит (Сапог)</span><p>от <span class="price">740</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("maslyanyy-obogrevatel-atlanta-atnr-2390r.php", 0, -4); if (file_exists("comments/maslyanyy-obogrevatel-atlanta-atnr-2390r.php")) require_once "comments/maslyanyy-obogrevatel-atlanta-atnr-2390r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="maslyanyy-obogrevatel-atlanta-atnr-2390r.php" method="post" onsubmit="return checkForm(this)">
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