<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-250r.php","водяные тепловые пушки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-250r.php", $nick, $comment);
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
		<title>водяные тепловые пушки Timberk TMS 07.HD3 Увлажнитель воздуха и полотенцесушитель  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="водяные тепловые пушки, электрокамины в минске, кондиционеры кассетного типа, вакуумирование кондиционера, медные трубки для кондиционеров, бесплатно без смс скачать конвектор, вентиляция кондиционеры, замена масляного радиатора, кондиционеры маквей, вентилятор термостойкий, осевой вентилятор купить, вентилятор glacialtech igloo, вентилятор радиальный цена, обслуживание кондиционеров цена,  колонка водонагреватель">
		<meta name="description" content="водяные тепловые пушки Увлажнитель воздуха и полотенцесушитель Timberk TMS 07.HD3 для конвекторов Timbe...">
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
						<a class="photo" href="photos/0078f87242afe28a9c08a972bf45a466.jpeg" title="водяные тепловые пушки Timberk TMS 07.HD3 Увлажнитель воздуха и полотенцесушитель"><img src="photos/0078f87242afe28a9c08a972bf45a466.jpeg" alt="водяные тепловые пушки Timberk TMS 07.HD3 Увлажнитель воздуха и полотенцесушитель" title="водяные тепловые пушки Timberk TMS 07.HD3 Увлажнитель воздуха и полотенцесушитель -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/splitsistema-neoclima-nsnuhavr-17500r.php"><img src="photos/4bbfb43fc647def81c47401047af9d23.jpeg" alt="электрокамины в минске Сплит-система NeoClima NS/NU-HAV091R4" title="электрокамины в минске Сплит-система NeoClima NS/NU-HAV091R4"></a><h2>Сплит-система NeoClima NS/NU-HAV091R4</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-ac-1800r.php"><img src="photos/5f85c6442525c86595a794bbc303fa83.jpeg" alt="кондиционеры кассетного типа Масляный радиатор Timberk TOR 21 AC" title="кондиционеры кассетного типа Масляный радиатор Timberk TOR 21 AC"></a><h2>Масляный радиатор Timberk TOR 21 AC</h2></li>
							<li><a href="http://klimattech.elitno.net/obogrevatel-ny-lf-1950r.php"><img src="photos/c9386d59c1539e6337f9db268ce3bbb6.jpeg" alt="вакуумирование кондиционера Обогреватель NY 17LF" title="вакуумирование кондиционера Обогреватель NY 17LF"></a><h2>Обогреватель NY 17LF</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>водяные тепловые пушки Timberk TMS 07.HD3 Увлажнитель воздуха и полотенцесушитель</h1>
						<div class="tb"><p>Цена: от <span class="price">250</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18297.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Увлажнитель воздуха и полотенцесушитель Timberk TMS 07.HD3 для конвекторов Timberk серий TEC.PF2…2000 IN, TEC.PS1…1500 IN, TEC.PS1…2000 IN, TEC.PS1…2500 IN. Они могут быть установлены как вместе, так и по отдельности. Увлажнитель наполняется водой, после чего она начинает испаряться, делая воздух более влажным, тем самым снимая усталость. Сушилка для полотенца может использоваться небольшими полотенцами, подходящими по размеру.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Для конвекторов Timberk серии TEC.PF2…2000 IN, TEC.PS1…1500 IN, TEC.PS1…2000 IN, TEC.PS1…2500 IN. <li>Цвет: белый </li></ul><p><strong>Производитель: Швеция</strong></p> водяные тепловые пушки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/1c70596d527600fd0e8aad170ecca469.jpeg" alt="медные трубки для кондиционеров Термометр цифровой  уличный на липучке, арт. 01288" title="медные трубки для кондиционеров Термометр цифровой  уличный на липучке, арт. 01288"><div class="box"><a href="http://klimattech.elitno.net/termometr-cifrovoy-ulichnyy-na-lipuchke-art-650r-2.php"><h3 class="title">медные трубки для кондиционеров Термометр цифровой  уличный на липучке, арт. 01288</h3><p>от <span class="price">650</span> руб.</p></a></div></li>
						<li><img src="photos/14f5338daa10664920b3ada5ca4106e0.jpeg" alt="бесплатно без смс скачать конвектор Гигрометр Momert 1756" title="бесплатно без смс скачать конвектор Гигрометр Momert 1756"><div class="box" page="gigrometr-momert-690r"><span class="title">бесплатно без смс скачать конвектор Гигрометр Momert 1756</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/cf23fd07b6aac462b7c4085a35435137.jpeg" alt="вентиляция кондиционеры Тепловентилятор Timberk TFH T15PTS.VE" title="вентиляция кондиционеры Тепловентилятор Timberk TFH T15PTS.VE"><div class="box" page="teploventilyator-timberk-tfh-tptsve-1730r"><span class="title">вентиляция кондиционеры Тепловентилятор Timberk TFH T15PTS.VE</span><p>от <span class="price">1730</span> руб.</p></div></li>
						<li><img src="photos/2e7eaee61cf998d8e7f977231e61dee7.jpeg" alt="замена масляного радиатора Тепловентилятор NEOCLIMA NCTN-5L" title="замена масляного радиатора Тепловентилятор NEOCLIMA NCTN-5L"><div class="box" page="teploventilyator-neoclima-nctnl-3200r"><span class="title">замена масляного радиатора Тепловентилятор NEOCLIMA NCTN-5L</span><p>от <span class="price">3200</span> руб.</p></div></li>
						<li class="large"><img src="photos/dc025c12b462d53777cc586a428ad588.jpeg" alt="кондиционеры маквей Инфракрасный тепловентилятор Neoclima NCH-02" title="кондиционеры маквей Инфракрасный тепловентилятор Neoclima NCH-02"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-nch-2050r"><span class="title">кондиционеры маквей Инфракрасный тепловентилятор Neoclima NCH-02</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li class="large"><img src="photos/f9eaa5b8986cdd2920eb77f5d5c25994.jpeg" alt="вентилятор термостойкий Тепловентилятор керамический Vitesse VS-882" title="вентилятор термостойкий Тепловентилятор керамический Vitesse VS-882"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-1700r"><span class="title">вентилятор термостойкий Тепловентилятор керамический Vitesse VS-882</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li class="large"><img src="photos/c677cbdf547effa33ccd59c33757d17d.jpeg" alt="осевой вентилятор купить Тепловая завеса Ballu BHC-3.000 SB" title="осевой вентилятор купить Тепловая завеса Ballu BHC-3.000 SB"><div class="box" page="teplovaya-zavesa-ballu-bhc-sb-3260r"><span class="title">осевой вентилятор купить Тепловая завеса Ballu BHC-3.000 SB</span><p>от <span class="price">3260</span> руб.</p></div></li>
						<li><img src="photos/8e7cf513a767fff9bb3803c99a15db7b.jpeg" alt="вентилятор glacialtech igloo Увлажнитель воздуха ультразвуковой Vitek VT-1763" title="вентилятор glacialtech igloo Увлажнитель воздуха ультразвуковой Vitek VT-1763"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-vitek-vt-2900r"><span class="title">вентилятор glacialtech igloo Увлажнитель воздуха ультразвуковой Vitek VT-1763</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/b117424fdb1286034c7adae3701e4ea7.jpeg" alt="вентилятор радиальный цена Увлажнитель ZENET JSS-13301A" title="вентилятор радиальный цена Увлажнитель ZENET JSS-13301A"><div class="box" page="uvlazhnitel-zenet-jssa-2280r"><span class="title">вентилятор радиальный цена Увлажнитель ZENET JSS-13301A</span><p>от <span class="price">2280</span> руб.</p></div></li>
						<li><img src="photos/693a99dd43e888c6cfabc3e4a08460c4.jpeg" alt="обслуживание кондиционеров цена Электрогрелка для ног  Элит (Сапог с меховой отделкой Гулливер)" title="обслуживание кондиционеров цена Электрогрелка для ног  Элит (Сапог с меховой отделкой Гулливер)"><div class="box" page="elektrogrelka-dlya-nog-elit-sapog-s-mehovoy-otdelkoy-gulliver-970r"><span class="title">обслуживание кондиционеров цена Электрогрелка для ног  Элит (Сапог с меховой отделкой Гулливер)</span><p>от <span class="price">970</span> руб.</p></div></li>
						<li><img src="photos/b07401453a010a3b07eb7e8971ba5a93.jpeg" alt="вентилятор охлаждения ваз 2109 Электрогрелка Beurer HK110" title="вентилятор охлаждения ваз 2109 Электрогрелка Beurer HK110"><div class="box" page="elektrogrelka-beurer-hk-2180r"><span class="title">вентилятор охлаждения ваз 2109 Электрогрелка Beurer HK110</span><p>от <span class="price">2180</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-250r.php", 0, -4); if (file_exists("comments/timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-250r.php")) require_once "comments/timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-250r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-250r.php" method="post" onsubmit="return checkForm(this)">
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