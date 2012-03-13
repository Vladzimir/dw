<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("maslyanyy-obogrevatel-atlanta-atn-1920r.php","тепловая пушка kerona");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("maslyanyy-obogrevatel-atlanta-atn-1920r.php", $nick, $comment);
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
		<title>тепловая пушка kerona Масляный обогреватель  Atlanta АТН-2002  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="тепловая пушка kerona, вентилятор silent design, вентилятор печки ваз 2114, водонагреватель накопительный 100, фреон для кондиционеров, регулировка вентилятора ноутбука, кондиционер panasonic купить, вентилятор системы охлаждения двигателя, где купить электрокамин, эколайн инфракрасные обогреватели, компрессор кондиционера форд фокус, куда заливать кондиционер, хороший вентилятор, куплю кондиционер в интернет магазине,  вентилятор охлаждения не выключается">
		<meta name="description" content="тепловая пушка kerona Масляный обогреватель Atlanta АТН-2002 черного цвета выполненный в современном д...">
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
						<a class="photo" href="photos/bc1daaf95eee8347567dc4da1715dd67.jpeg" title="тепловая пушка kerona Масляный обогреватель  Atlanta АТН-2002"><img src="photos/bc1daaf95eee8347567dc4da1715dd67.jpeg" alt="тепловая пушка kerona Масляный обогреватель  Atlanta АТН-2002" title="тепловая пушка kerona Масляный обогреватель  Atlanta АТН-2002 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/kondicioner-ballu-bsgh-32750r.php"><img src="photos/071c675657286c6c0cdefdb2c51d339f.jpeg" alt="вентилятор silent design Кондиционер Ballu BSG-24H" title="вентилятор silent design Кондиционер Ballu BSG-24H"></a><h2>Кондиционер Ballu BSG-24H</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-sl-i-1680r-2.php"><img src="photos/e8a1c483476d3f6506b671ae7f237889.jpeg" alt="вентилятор печки ваз 2114 Масляный радиатор Timberk TOR 21.1507 SL I" title="вентилятор печки ваз 2114 Масляный радиатор Timberk TOR 21.1507 SL I"></a><h2>Масляный радиатор Timberk TOR 21.1507 SL I</h2></li>
							<li><a href="http://klimattech.elitno.net/obogrevatel-ny-la-1410r.php"><img src="photos/b909b1163884b90e97e4ce11a5f92731.jpeg" alt="водонагреватель накопительный 100 Обогреватель NY 12LA" title="водонагреватель накопительный 100 Обогреватель NY 12LA"></a><h2>Обогреватель NY 12LA</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>тепловая пушка kerona Масляный обогреватель  Atlanta АТН-2002</h1>
						<div class="tb"><p>Цена: от <span class="price">1920</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19655.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Масляный обогреватель Atlanta АТН-2002 черного цвета выполненный в современном дизайне с 7 секциями и 3 уровнями мощности. Снабжен термостатом, который автоматически будет держать выбранную температуру в помещении. Абсолютно безопасен, так как защищен от перегрева и имеет евровилку с заземлением и световой индикатор включения. Максимальная мощность 1500 Вт.<br><br><strong>Характеристики:</strong></p><ul type=disc><li>7-секционный масляный обогреватель <li>Современный дизайн <li>3 уровня мощности – 600 ВТ, 900 Вт, 1500Вт <li>Термостат – автоматический контроль температуры <li>Защита от перегрева <li>Колеса – легкое передвижение <li>Евровилка с заземлением <li>Световой индикатор включения <li>Максимальная мощность 1500 Вт <li>220-240 В, 50-60 Гц </li></ul><p><strong>Производитель: США</strong></p> тепловая пушка kerona</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/60f2591c3e62805a3970da1e2f6fa7df.jpeg" alt="фреон для кондиционеров Масляный радиатор Timberk  TOR 21.1206 HB I" title="фреон для кондиционеров Масляный радиатор Timberk  TOR 21.1206 HB I"><div class="box" page="maslyanyy-radiator-timberk-tor-hb-i-1810r"><span class="title">фреон для кондиционеров Масляный радиатор Timberk  TOR 21.1206 HB I</span><p>от <span class="price">1810</span> руб.</p></div></li>
						<li><img src="photos/d1b635987ce188fc355ca2631ba7ed08.jpeg" alt="регулировка вентилятора ноутбука Увлажняющая губка Filter matt  для увлажнителя воздуха Boneco AIR-O-SWISS E 2441,  арт. 7018" title="регулировка вентилятора ноутбука Увлажняющая губка Filter matt  для увлажнителя воздуха Boneco AIR-O-SWISS E 2441,  арт. 7018"><div class="box" page="uvlazhnyayuschaya-gubka-filter-matt-dlya-uvlazhnitelya-vozduha-boneco-airoswiss-e-art-690r"><span class="title">регулировка вентилятора ноутбука Увлажняющая губка Filter matt  для увлажнителя воздуха Boneco AIR-O-SWISS E 2441,  арт. 7018</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/a8db72b23169e460f3adf9b13f9fbb91.jpeg" alt="кондиционер panasonic купить Очиститель воздуха Neoclima NAP-01 черный" title="кондиционер panasonic купить Очиститель воздуха Neoclima NAP-01 черный"><div class="box" page="ochistitel-vozduha-neoclima-nap-chernyy-7650r"><span class="title">кондиционер panasonic купить Очиститель воздуха Neoclima NAP-01 черный</span><p>от <span class="price">7650</span> руб.</p></div></li>
						<li><img src="photos/a95d9bc6868aec4505f9e179c9f39708.jpeg" alt="вентилятор системы охлаждения двигателя Воздухоочиститель-ионизатор от табачного дыма AirTec XJ-888" title="вентилятор системы охлаждения двигателя Воздухоочиститель-ионизатор от табачного дыма AirTec XJ-888"><div class="box" page="vozduhoochistitelionizator-ot-tabachnogo-dyma-airtec-xj-1370r"><span class="title">вентилятор системы охлаждения двигателя Воздухоочиститель-ионизатор от табачного дыма AirTec XJ-888</span><p>от <span class="price">1370</span> руб.</p></div></li>
						<li class="large"><img src="photos/2404258926d8fd6dbbfeb11b6f521d94.jpeg" alt="где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135" title="где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-5730r"><span class="title">где купить электрокамин Увлажнитель воздуха ультразвуковой Boneco 7135</span><p>от <span class="price">5730</span> руб.</p></div></li>
						<li class="large"><img src="photos/3fd8db2e1066ded4c5fb06cb2660d011.jpeg" alt="эколайн инфракрасные обогреватели Увлажнитель-очиститель ZENET HDL-687" title="эколайн инфракрасные обогреватели Увлажнитель-очиститель ZENET HDL-687"><div class="box" page="uvlazhnitelochistitel-zenet-hdl-3950r"><span class="title">эколайн инфракрасные обогреватели Увлажнитель-очиститель ZENET HDL-687</span><p>от <span class="price">3950</span> руб.</p></div></li>
						<li class="large"><img src="photos/b96cf70721ff62fc726fbf7570b0c26e.jpeg" alt="компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301" title="компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301"><div class="box" page="uvlazhnitel-vozduha-redmond-rhf-3690r"><span class="title">компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301</span><p>от <span class="price">3690</span> руб.</p></div></li>
						<li><img src="photos/153a3374b1c5b8cbcad4ae2bc5926877.jpeg" alt="куда заливать кондиционер Электрогрелка Beurer HK120 xxl" title="куда заливать кондиционер Электрогрелка Beurer HK120 xxl"><div class="box" page="elektrogrelka-beurer-hk-xxl-2450r"><span class="title">куда заливать кондиционер Электрогрелка Beurer HK120 xxl</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li><img src="photos/7fa79ba5afd5a356d2384a367ea9d4dc.jpeg" alt="хороший вентилятор Массажер-электрогрелка Beurer FWM50 для ног" title="хороший вентилятор Массажер-электрогрелка Beurer FWM50 для ног"><div class="box" page="massazherelektrogrelka-beurer-fwm-dlya-nog-2150r"><span class="title">хороший вентилятор Массажер-электрогрелка Beurer FWM50 для ног</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li><img src="photos/66a6e52a08eed91a2ac64a2c769a8af7.jpeg" alt="куплю кондиционер в интернет магазине Электрогрелка для ног Beurer FW20 Cosy (уют)" title="куплю кондиционер в интернет магазине Электрогрелка для ног Beurer FW20 Cosy (уют)"><div class="box" page="elektrogrelka-dlya-nog-beurer-fw-cosy-uyut-1850r"><span class="title">куплю кондиционер в интернет магазине Электрогрелка для ног Beurer FW20 Cosy (уют)</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/e2a750f7f3228f6bebe339717a5d81ec.jpeg" alt="расчет тепловых пушек Камин Классический очаг Dimplex Loxley" title="расчет тепловых пушек Камин Классический очаг Dimplex Loxley"><div class="box" page="kamin-klassicheskiy-ochag-dimplex-loxley-19406r"><span class="title">расчет тепловых пушек Камин Классический очаг Dimplex Loxley</span><p>от <span class="price">19406</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("maslyanyy-obogrevatel-atlanta-atn-1920r.php", 0, -4); if (file_exists("comments/maslyanyy-obogrevatel-atlanta-atn-1920r.php")) require_once "comments/maslyanyy-obogrevatel-atlanta-atn-1920r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="maslyanyy-obogrevatel-atlanta-atn-1920r.php" method="post" onsubmit="return checkForm(this)">
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