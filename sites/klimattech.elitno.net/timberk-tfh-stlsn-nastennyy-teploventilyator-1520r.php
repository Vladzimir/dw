<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("timberk-tfh-stlsn-nastennyy-teploventilyator-1520r.php","вентилятор zalman zm f3");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("timberk-tfh-stlsn-nastennyy-teploventilyator-1520r.php", $nick, $comment);
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
		<title>вентилятор zalman zm f3 Timberk TFH S20TL.SN Настенный тепловентилятор  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вентилятор zalman zm f3, купить вентилятор отопителя, вентилятор для сауны, электрокамины видео, магазин вентиляторов, умывальник с водонагревателем, вентиляторы в новосибирске, ленор кондиционер для белья, как снять вентилятор отопителя, профессиональные кондиционеры, бесплатный конвектор музыки, самостоятельная установка кондиционера, вентиляторы осевые вытяжные, козырек для кондиционера,  вентиляторы для сушилок">
		<meta name="description" content="вентилятор zalman zm f3 Настенный тепловентилятор Timberk TFH S20TL.SN мощностью 2000 Вт предназначен дл...">
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
						<a class="photo" href="photos/da0d2486c80d1951d5a0ec899d81e766.jpeg" title="вентилятор zalman zm f3 Timberk TFH S20TL.SN Настенный тепловентилятор"><img src="photos/da0d2486c80d1951d5a0ec899d81e766.jpeg" alt="вентилятор zalman zm f3 Timberk TFH S20TL.SN Настенный тепловентилятор" title="вентилятор zalman zm f3 Timberk TFH S20TL.SN Настенный тепловентилятор -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-v-11150r.php"><img src="photos/894dc4b38ab54e686b826978c93253a1.jpeg" alt="купить вентилятор отопителя Водонагреватель Timberk SWH FS5 80 V" title="купить вентилятор отопителя Водонагреватель Timberk SWH FS5 80 V"></a><h2>Водонагреватель Timberk SWH FS5 80 V</h2></li>
							<li><a href="http://klimattech.elitno.net/konvekcionnyy-radiator-timberk-trra-el-3270r.php"><img src="photos/07893d42fc243f8aca2666e180d908a8.jpeg" alt="вентилятор для сауны Конвекционный радиатор Timberk TRR.A EL" title="вентилятор для сауны Конвекционный радиатор Timberk TRR.A EL"></a><h2>Конвекционный радиатор Timberk TRR.A EL</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-mobilnyy-timberk-ac-tim-h-p-16820r.php"><img src="photos/63d85360a779c85d11760c785e50cdb5.jpeg" alt="электрокамины видео Кондиционер мобильный Timberk AC TIM 9H P2" title="электрокамины видео Кондиционер мобильный Timberk AC TIM 9H P2"></a><h2>Кондиционер мобильный Timberk AC TIM 9H P2</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вентилятор zalman zm f3 Timberk TFH S20TL.SN Настенный тепловентилятор</h1>
						<div class="tb"><p>Цена: от <span class="price">1520</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18292.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Настенный тепловентилятор Timberk TFH S20TL.SN мощностью 2000 Вт предназначен для обогревания небольших помещений площадью до 22 квадратных метров. Его можно использовать в ванной комнате, в том числе и для сушки полотенец. В комплекте идет полетенцесушитель. Несколько режимов работы: теплый, холодный, горячий воздух и двухуровневая защита от перегрева. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Напряжение-частота: 220-230/50 <li>Режимы мощности: 1000/2000 Вт <li>Габариты: 429х313х113 мм <li>Вес: 2,78 кг </li></ul><p><strong>Производитель: Швеция</strong></p> вентилятор zalman zm f3</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b72f28795628f1732b5b30e56652c320.jpeg" alt="магазин вентиляторов Масляный радиатор Timberk TOR 31 ED I" title="магазин вентиляторов Масляный радиатор Timberk TOR 31 ED I"><div class="box" page="maslyanyy-radiator-timberk-tor-ed-i-2300r"><span class="title">магазин вентиляторов Масляный радиатор Timberk TOR 31 ED I</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li><img src="photos/d9ebfc2db4ed0018ab47b10a0b9a9748.jpeg" alt="умывальник с водонагревателем Масляный радиатор Timberk TOR 31.1706 EH I" title="умывальник с водонагревателем Масляный радиатор Timberk TOR 31.1706 EH I"><div class="box" page="maslyanyy-radiator-timberk-tor-eh-i-2240r"><span class="title">умывальник с водонагревателем Масляный радиатор Timberk TOR 31.1706 EH I</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/d56c530320845cbca4f70555561669c0.jpeg" alt="вентиляторы в новосибирске Барометр Охотник ПогодникЪ, арт. 07358" title="вентиляторы в новосибирске Барометр Охотник ПогодникЪ, арт. 07358"><div class="box" page="barometr-ohotnik-pogodnik-art-1820r"><span class="title">вентиляторы в новосибирске Барометр Охотник ПогодникЪ, арт. 07358</span><p>от <span class="price">1820</span> руб.</p></div></li>
						<li><img src="photos/9b04ef8c5762d78ff90223509686854b.jpeg" alt="ленор кондиционер для белья Погодная цифровая барометрическая станция RST Meteo Link, арт. 02552" title="ленор кондиционер для белья Погодная цифровая барометрическая станция RST Meteo Link, арт. 02552"><div class="box" page="pogodnaya-cifrovaya-barometricheskaya-stanciya-rst-meteo-link-art-1835r"><span class="title">ленор кондиционер для белья Погодная цифровая барометрическая станция RST Meteo Link, арт. 02552</span><p>от <span class="price">1835</span> руб.</p></div></li>
						<li class="large"><img src="photos/f2c4271f8351e070194359abb53c123d.jpeg" alt="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»" title="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»"><div class="box" page="obogrevatel-barhatnyy-sezon-«babochki»-880r"><span class="title">как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/4cb207aae88a45db69ae7e61202374e5.jpeg" alt="профессиональные кондиционеры Тепловентилятор Timberk TFH S20NFM" title="профессиональные кондиционеры Тепловентилятор Timberk TFH S20NFM"><div class="box" page="teploventilyator-timberk-tfh-snfm-850r"><span class="title">профессиональные кондиционеры Тепловентилятор Timberk TFH S20NFM</span><p>от <span class="price">850</span> руб.</p></div></li>
						<li class="large"><img src="photos/70c70b7625471597901e2a4d38fd77ec.jpeg" alt="бесплатный конвектор музыки Тепловентилятор настенный Timberk TFH W200.TR" title="бесплатный конвектор музыки Тепловентилятор настенный Timberk TFH W200.TR"><div class="box" page="teploventilyator-nastennyy-timberk-tfh-wtr-2060r"><span class="title">бесплатный конвектор музыки Тепловентилятор настенный Timberk TFH W200.TR</span><p>от <span class="price">2060</span> руб.</p></div></li>
						<li><img src="photos/07be9912d91dc60bfafc0da4fada6376.jpeg" alt="самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04" title="самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-nqh-390r"><span class="title">самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/62e02467d931962a606906e72d1a0eda.jpeg" alt="вентиляторы осевые вытяжные Очиститель воздуха Атмос Макси" title="вентиляторы осевые вытяжные Очиститель воздуха Атмос Макси"><div class="box" page="ochistitel-vozduha-atmos-maksi-8750r"><span class="title">вентиляторы осевые вытяжные Очиститель воздуха Атмос Макси</span><p>от <span class="price">8750</span> руб.</p></div></li>
						<li><img src="photos/cc8e6593e30b4b2269157a1333a6a22e.jpeg" alt="козырек для кондиционера Увлажнитель воздуха ультразвуковой Атмос 2710" title="козырек для кондиционера Увлажнитель воздуха ультразвуковой Атмос 2710"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-atmos-4950r"><span class="title">козырек для кондиционера Увлажнитель воздуха ультразвуковой Атмос 2710</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/42ef4ed773db3af070e58991dc6661ef.jpeg" alt="кондиционер типа сплит Электрогрелка для спины и шеи Beurer HK55 EASY FIX" title="кондиционер типа сплит Электрогрелка для спины и шеи Beurer HK55 EASY FIX"><div class="box" page="elektrogrelka-dlya-spiny-i-shei-beurer-hk-easy-fix-1900r"><span class="title">кондиционер типа сплит Электрогрелка для спины и шеи Beurer HK55 EASY FIX</span><p>от <span class="price">1900</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("timberk-tfh-stlsn-nastennyy-teploventilyator-1520r.php", 0, -4); if (file_exists("comments/timberk-tfh-stlsn-nastennyy-teploventilyator-1520r.php")) require_once "comments/timberk-tfh-stlsn-nastennyy-teploventilyator-1520r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="timberk-tfh-stlsn-nastennyy-teploventilyator-1520r.php" method="post" onsubmit="return checkForm(this)">
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