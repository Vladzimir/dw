<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("konvektor-timberk-tece-m-2800r.php","вентилятор печки приора");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("konvektor-timberk-tece-m-2800r.php", $nick, $comment);
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
		<title>вентилятор печки приора Конвектор Timberk TEC.E1 M 2000  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вентилятор печки приора, комплектация кондиционера, как снять вентилятор отопителя, купить инфракрасный газовый обогреватель, самостоятельная установка кондиционера, какой кондиционер лучше, водонагреватель 100 л, тепловая завеса фрико, обогреватели ветерок, отзывы о кондиционерах, вентилятор радиатора ваз 2110, установка кондиционера зимой, обогреватель с вентилятором, вентилятор для корпуса компьютера,  газовая тепловая пушка master">
		<meta name="description" content="вентилятор печки приора Timberk TEC.E1 M 2000 – недорогой конвектор мощностью 2000 Вт с механическим тер...">
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
						<a class="photo" href="photos/90d8d7517ead95b1e1e49971103b31a0.jpeg" title="вентилятор печки приора Конвектор Timberk TEC.E1 M 2000"><img src="photos/90d8d7517ead95b1e1e49971103b31a0.jpeg" alt="вентилятор печки приора Конвектор Timberk TEC.E1 M 2000" title="вентилятор печки приора Конвектор Timberk TEC.E1 M 2000 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/proekcionnaya-pogodnaya-stanciya-rst-meteo-projection-2795r.php"><img src="photos/12485926afc73168e4834d775eada405.jpeg" alt="комплектация кондиционера Проекционная погодная станция RST 32703 Meteo projection 703" title="комплектация кондиционера Проекционная погодная станция RST 32703 Meteo projection 703"></a><h2>Проекционная погодная станция RST 32703 Meteo projection 703</h2></li>
							<li><a href="http://klimattech.elitno.net/obogrevatel-barhatnyy-sezon-«babochki»-880r.php"><img src="photos/f2c4271f8351e070194359abb53c123d.jpeg" alt="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»" title="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»"></a><h2>Обогреватель Бархатный сезон «Бабочки»</h2></li>
							<li><a href="http://klimattech.elitno.net/infrakrasnyy-teploventilyator-neoclima-hh-950r.php"><img src="photos/c35fa3f98dfe8950c7663d96b0b841fd.jpeg" alt="купить инфракрасный газовый обогреватель Инфракрасный тепловентилятор Neoclima HH10" title="купить инфракрасный газовый обогреватель Инфракрасный тепловентилятор Neoclima HH10"></a><h2>Инфракрасный тепловентилятор Neoclima HH10</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вентилятор печки приора Конвектор Timberk TEC.E1 M 2000</h1>
						<div class="tb"><p>Цена: от <span class="price">2800</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18170.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Timberk TEC.E1 M 2000 – недорогой конвектор мощностью 2000 Вт с механическим термостатом специально разработанный как экономичный вариант с минимальным использованием электронных плат управления. Но, не смотря на это, конвектор защищен от перегрева и совершенно безопасен в использовании. Он не накапливает пыль и не выжигает кислород, а высокий класс защиты от влаги IP24 позволяет использовать конвектор даже во влажных помещениях.</p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220-240/50 <li>Мощность: 2000 Вт <li>Размеры с ножками: 540х340х330 <li>Ососбенности: Три режима нагрева </li></ul><p><b>Производитель: Швеция</b></p> вентилятор печки приора</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/07be9912d91dc60bfafc0da4fada6376.jpeg" alt="самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04" title="самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-nqh-390r"><span class="title">самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/c1fe9260de97ac5d8658504d30013ba0.jpeg" alt="какой кондиционер лучше Тепловентилятор Atlanta ATH-105" title="какой кондиционер лучше Тепловентилятор Atlanta ATH-105"><div class="box" page="teploventilyator-atlanta-ath-700r"><span class="title">какой кондиционер лучше Тепловентилятор Atlanta ATH-105</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/b8f26fb8089fd535d1b75c7490f71704.jpeg" alt="водонагреватель 100 л Тепловая пушка Ballu BPH-5.000C" title="водонагреватель 100 л Тепловая пушка Ballu BPH-5.000C"><div class="box" page="teplovaya-pushka-ballu-bphc-4200r"><span class="title">водонагреватель 100 л Тепловая пушка Ballu BPH-5.000C</span><p>от <span class="price">4200</span> руб.</p></div></li>
						<li><img src="photos/079ceb0c1a4671e91e0d11ed1a8b9787.jpeg" alt="тепловая завеса фрико Климатический комплекс Sharp KC-840" title="тепловая завеса фрико Климатический комплекс Sharp KC-840"><div class="box" page="klimaticheskiy-kompleks-sharp-kc-15790r"><span class="title">тепловая завеса фрико Климатический комплекс Sharp KC-840</span><p>от <span class="price">15790</span> руб.</p></div></li>
						<li class="large"><img src="photos/70ff9e86256306e32dffb6a5f1466008.jpeg" alt="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800" title="обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800"><div class="box" page="ochistiteluvlazhnitel-vozduha-atmos-akva-1950r"><span class="title">обогреватели ветерок Очиститель-увлажнитель воздуха Атмос Аква-800</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/28872bf4a200912283403ccfcdb3c796.jpeg" alt="отзывы о кондиционерах Увлажнитель Atlanta АТН-160" title="отзывы о кондиционерах Увлажнитель Atlanta АТН-160"><div class="box" page="uvlazhnitel-atlanta-atn-700r"><span class="title">отзывы о кондиционерах Увлажнитель Atlanta АТН-160</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li class="large"><img src="photos/9e0669e9ee2513798e2fc54bd56ad351.jpeg" alt="вентилятор радиатора ваз 2110 ZENET HDL-969 Очиститель-ароматизатор" title="вентилятор радиатора ваз 2110 ZENET HDL-969 Очиститель-ароматизатор"><div class="box" page="zenet-hdl-ochistitelaromatizator-2950r"><span class="title">вентилятор радиатора ваз 2110 ZENET HDL-969 Очиститель-ароматизатор</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/2586fb68ec1a45fc9c5b24e305da4b22.jpeg" alt="установка кондиционера зимой Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха" title="установка кондиционера зимой Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха"><div class="box" page="timberk-thu-ul-a-uvlazhnitel-i-aromatizator-vozduha-1600r"><span class="title">установка кондиционера зимой Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/cad9340fab92aa85ffc59e5d750e5fa0.jpeg" alt="обогреватель с вентилятором Электрогрелка Beurer TM78" title="обогреватель с вентилятором Электрогрелка Beurer TM78"><div class="box" page="elektrogrelka-beurer-tm-1600r"><span class="title">обогреватель с вентилятором Электрогрелка Beurer TM78</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/c8852d9018feeaf23f4c40bb843b8d78.jpeg" alt="вентилятор для корпуса компьютера Электрогрелка Beurer HK63" title="вентилятор для корпуса компьютера Электрогрелка Beurer HK63"><div class="box" page="elektrogrelka-beurer-hk-1950r"><span class="title">вентилятор для корпуса компьютера Электрогрелка Beurer HK63</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/998c8fbeb09f1a5b36f55e00d62d9435.png" alt="водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy" title="водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy"><div class="box" page="elektrogrelka-beurer-hk-cosy-2800r"><span class="title">водонагреватели в краснодаре Электрогрелка Beurer HK115 Cosy</span><p>от <span class="price">2800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("konvektor-timberk-tece-m-2800r.php", 0, -4); if (file_exists("comments/konvektor-timberk-tece-m-2800r.php")) require_once "comments/konvektor-timberk-tece-m-2800r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="konvektor-timberk-tece-m-2800r.php" method="post" onsubmit="return checkForm(this)">
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