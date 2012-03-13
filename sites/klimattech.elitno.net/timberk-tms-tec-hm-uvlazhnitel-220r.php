<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("timberk-tms-tec-hm-uvlazhnitel-220r.php","вентилятор подпора");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("timberk-tms-tec-hm-uvlazhnitel-220r.php", $nick, $comment);
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
		<title>вентилятор подпора Timberk TMS TEC 05.HM Увлажнитель  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вентилятор подпора, компьютерный вентилятор, как установить водонагреватель, обогреватель с вентилятором, очиститель увлажнитель воздуха sharp, куплю кондиционер панасоник, скачать dvd конвектор, обогреватель уличный, фреон для кондиционеров, газовые обогреватели бытовые, как снять вентилятор отопителя, водонагреватель термекс 50л, сколько потребляет кондиционер, проточный водонагреватель stiebel,  лучшие накопительные водонагреватели">
		<meta name="description" content="вентилятор подпора Увлажнитель Timberk TMS TEC 05.HM для конвекторов Timberk серии TEC PS2. Он уста...">
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
						<a class="photo" href="photos/dcbf0b1a09446b0768f079fe16310b82.jpeg" title="вентилятор подпора Timberk TMS TEC 05.HM Увлажнитель"><img src="photos/dcbf0b1a09446b0768f079fe16310b82.jpeg" alt="вентилятор подпора Timberk TMS TEC 05.HM Увлажнитель" title="вентилятор подпора Timberk TMS TEC 05.HM Увлажнитель -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-9300r.php"><img src="photos/35b2fe70a1765525d3d6054a51ce0cd9.jpeg" alt="компьютерный вентилятор Водонагреватель Timberk SWH FS6 50 H" title="компьютерный вентилятор Водонагреватель Timberk SWH FS6 50 H"></a><h2>Водонагреватель Timberk SWH FS6 50 H</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-6700r.php"><img src="photos/64e6a0aa12ee7c4e37f74cc626b96b1c.jpeg" alt="как установить водонагреватель Водонагреватель Timberk SWH FS2 30 H" title="как установить водонагреватель Водонагреватель Timberk SWH FS2 30 H"></a><h2>Водонагреватель Timberk SWH FS2 30 H</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-fast-6900r.php"><img src="photos/42405fc3a6c3e6273deac9cc9bc63dec.jpeg" alt="обогреватель с вентилятором Водонагреватель Neoclima FAST 30" title="обогреватель с вентилятором Водонагреватель Neoclima FAST 30"></a><h2>Водонагреватель Neoclima FAST 30</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вентилятор подпора Timberk TMS TEC 05.HM Увлажнитель</h1>
						<div class="tb"><p>Цена: от <span class="price">220</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18294.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Увлажнитель Timberk TMS TEC 05.HM для конвекторов Timberk серии TEC PS2. Он устанавливается с помощью специальных кронштейнов на заднюю панель конвектора. Вода, налитая внутрь испаряется под воздействием теплового излучения и насыщает воздух. В помещениях, где воздух слишком сухой кислород плохо попадает в систему кровообращения и у людей появляется усталость и истощение. С этими недугами и борется успешно увлажнитель воздуха. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Для конвекторов Timberk серии TEC PS2. <li>Цвет: белый </li></ul><p><strong>Производитель: Швеция</strong></p> вентилятор подпора</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/78a4770ecd1d41fed364230526a418a5.jpeg" alt="очиститель увлажнитель воздуха sharp Инфракрасный обогреватель Sinbo" title="очиститель увлажнитель воздуха sharp Инфракрасный обогреватель Sinbo"><div class="box" page="infrakrasnyy-obogrevatel-sinbo-1900r"><span class="title">очиститель увлажнитель воздуха sharp Инфракрасный обогреватель Sinbo</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/f4e9d710fbd678faac0f6dff57612f7b.jpeg" alt="куплю кондиционер панасоник Конвектор Timberk TEC MEC R7.15 IN" title="куплю кондиционер панасоник Конвектор Timberk TEC MEC R7.15 IN"><div class="box" page="konvektor-timberk-tec-mec-r-in-2630r"><span class="title">куплю кондиционер панасоник Конвектор Timberk TEC MEC R7.15 IN</span><p>от <span class="price">2630</span> руб.</p></div></li>
						<li><img src="photos/2599294d2213c14ab14e0ed6c32724a2.jpeg" alt="скачать dvd конвектор Кондиционер Ballu BSG-18H" title="скачать dvd конвектор Кондиционер Ballu BSG-18H"><div class="box" page="kondicioner-ballu-bsgh-24180r"><span class="title">скачать dvd конвектор Кондиционер Ballu BSG-18H</span><p>от <span class="price">24180</span> руб.</p></div></li>
						<li><img src="photos/1a87ff4189a729f8dc8c5cf8924c172f.jpeg" alt="обогреватель уличный Маслонаполненный радиатор Timberk TOR 21.2512 AC" title="обогреватель уличный Маслонаполненный радиатор Timberk TOR 21.2512 AC"><div class="box" page="maslonapolnennyy-radiator-timberk-tor-ac-2600r"><span class="title">обогреватель уличный Маслонаполненный радиатор Timberk TOR 21.2512 AC</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li class="large"><img src="photos/60f2591c3e62805a3970da1e2f6fa7df.jpeg" alt="фреон для кондиционеров Масляный радиатор Timberk  TOR 21.1206 HB I" title="фреон для кондиционеров Масляный радиатор Timberk  TOR 21.1206 HB I"><div class="box" page="maslyanyy-radiator-timberk-tor-hb-i-1810r"><span class="title">фреон для кондиционеров Масляный радиатор Timberk  TOR 21.1206 HB I</span><p>от <span class="price">1810</span> руб.</p></div></li>
						<li class="large"><img src="photos/ed3de5e5ad2bc8f5e762a3fb96398102.jpeg" alt="газовые обогреватели бытовые Assistant AH-1976 Метеостанция" title="газовые обогреватели бытовые Assistant AH-1976 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-4980r"><span class="title">газовые обогреватели бытовые Assistant AH-1976 Метеостанция</span><p>от <span class="price">4980</span> руб.</p></div></li>
						<li class="large"><img src="photos/f2c4271f8351e070194359abb53c123d.jpeg" alt="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»" title="как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»"><div class="box" page="obogrevatel-barhatnyy-sezon-«babochki»-880r"><span class="title">как снять вентилятор отопителя Обогреватель Бархатный сезон «Бабочки»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li><img src="photos/ee2384c60dc4d2c93a6ce9944531154a.jpeg" alt="водонагреватель термекс 50л Тепловентилятор Timberk TFH T15TL.D" title="водонагреватель термекс 50л Тепловентилятор Timberk TFH T15TL.D"><div class="box" page="teploventilyator-timberk-tfh-ttld-1100r"><span class="title">водонагреватель термекс 50л Тепловентилятор Timberk TFH T15TL.D</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/2a05199d1918d024cc342ed2eb784eb2.jpeg" alt="сколько потребляет кондиционер Очиститель воздуха колонный Ballu AP350 с пультом ДУ" title="сколько потребляет кондиционер Очиститель воздуха колонный Ballu AP350 с пультом ДУ"><div class="box" page="ochistitel-vozduha-kolonnyy-ballu-ap-s-pultom-du-33570r"><span class="title">сколько потребляет кондиционер Очиститель воздуха колонный Ballu AP350 с пультом ДУ</span><p>от <span class="price">33570</span> руб.</p></div></li>
						<li><img src="photos/8431705897587dd3b76f37d2dd61f575.jpeg" alt="проточный водонагреватель stiebel Увлажнитель ZENET 2720" title="проточный водонагреватель stiebel Увлажнитель ZENET 2720"><div class="box" page="uvlazhnitel-zenet-3850r"><span class="title">проточный водонагреватель stiebel Увлажнитель ZENET 2720</span><p>от <span class="price">3850</span> руб.</p></div></li>
						<li><img src="photos/5c11708815961fee7eed3b7791a7e12a.jpeg" alt="установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный" title="установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный"><div class="box" page="electrolux-efp-w-rc-elektrokamin-nastennyy-16330r"><span class="title">установка инфракрасных обогревателей Electrolux  EFP W - 1250RC Электрокамин настенный</span><p>от <span class="price">16330</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("timberk-tms-tec-hm-uvlazhnitel-220r.php", 0, -4); if (file_exists("comments/timberk-tms-tec-hm-uvlazhnitel-220r.php")) require_once "comments/timberk-tms-tec-hm-uvlazhnitel-220r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="timberk-tms-tec-hm-uvlazhnitel-220r.php" method="post" onsubmit="return checkForm(this)">
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