<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("gigrometr-boneco-a-1350r.php","купить кондиционер панасоник");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("gigrometr-boneco-a-1350r.php", $nick, $comment);
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
		<title>купить кондиционер панасоник Гигрометр Boneco A7254  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="купить кондиционер панасоник, портативный кондиционер, обозначение вентиляторов, вентиляторы москва, вентилятор печки шевроле нива, газовый конвектор инструкция, двигатель отопителя вентилятора, типы осевых вентиляторов, проточный водонагреватель цена, вентиляторы осевые вытяжные, водонагреватели baxi, установить кондиционер в квартире, водонагреватель аристон цена, ремонт кондиционеров минск,  регулируемый вентилятор">
		<meta name="description" content="купить кондиционер панасоник Приятный микроклимат дома – основа нашего душевного состояния. Возможно, причина...">
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
						<a class="photo" href="photos/5f7616cd0b65aed3035b8a63448b966a.jpeg" title="купить кондиционер панасоник Гигрометр Boneco A7254"><img src="photos/5f7616cd0b65aed3035b8a63448b966a.jpeg" alt="купить кондиционер панасоник Гигрометр Boneco A7254" title="купить кондиционер панасоник Гигрометр Boneco A7254 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-3910r.php"><img src="photos/f357e7a340a2f5acb1779afd6efa8fbb.jpeg" alt="портативный кондиционер Водонагреватель Neoclima EWH 30" title="портативный кондиционер Водонагреватель Neoclima EWH 30"></a><h2>Водонагреватель Neoclima EWH 30</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-slim-7650r.php"><img src="photos/980468517e8c92ca5c67f3dfd1f314c1.jpeg" alt="обозначение вентиляторов Водонагреватель Neoclima Slim 80" title="обозначение вентиляторов Водонагреватель Neoclima Slim 80"></a><h2>Водонагреватель Neoclima Slim 80</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-protochnyy-thermex-stream-combi-cr-2160r.php"><img src="photos/61644888826ed4288214b529bb8fcb31.jpeg" alt="вентиляторы москва Водонагреватель проточный Thermex 350 Stream (combi cr)" title="вентиляторы москва Водонагреватель проточный Thermex 350 Stream (combi cr)"></a><h2>Водонагреватель проточный Thermex 350 Stream (combi cr)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>купить кондиционер панасоник Гигрометр Boneco A7254</h1>
						<div class="tb"><p>Цена: от <span class="price">1350</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1126.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Приятный микроклимат дома – основа нашего душевного состояния. Возможно, причинами раздраженности, недомоганий, частых головокружений может быть завышенный или заниженный уровень влажности. Измерить насколько разнятся показатели влажности от 50%-60% поможет <strong>гигрометр А7254.</strong> Он точно и быстро зафиксирует температуру в помещении, измерит относительную влажность воздуха. Особенностью прибора является возможность выбора шкалы измерений °C/°F в диапазоне 0°C— 50°C,70°F— 120°F. Удобная индикация на ЖК-дисплее и возможность хранения в памяти максимальных и минимальных температурных показателей служат дополнительными плюсами прибора.</p><p>Примечательно, что электрический гигрометр/термометр A7254 используется со всеми приборами Boneco иAir-O-Swiss.</p><p><b>Особенности:</b></p><ul><li>Возможностью выбора шкалы°C/°F <li>Работает от батарейки 1,5В (ААА). <li>ЖК-дисплей <li>Диапазон 0°C— 50°C,70°F— 120°F. <li>Возможность использования со всем приборами Boneco и Air-O-Swiss.</li></ul><p><b>Производитель:</b> Boneco (Швейцария)</p> купить кондиционер панасоник</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/61545de486a23a298d9b80e7b1e02ec9.jpeg" alt="вентилятор печки шевроле нива Термометр рамный RST 01588" title="вентилятор печки шевроле нива Термометр рамный RST 01588"><div class="box"><a href="http://klimattech.elitno.net/termometr-ramnyy-rst-555r.php"><h3 class="title">вентилятор печки шевроле нива Термометр рамный RST 01588</h3><p>от <span class="price">555</span> руб.</p></a></div></li>
						<li><img src="photos/96e61a0d5200c050b3722138b0532ddd.jpeg" alt="газовый конвектор инструкция Термометр оконный (спиртовой) для всех типов окон RST 02069" title="газовый конвектор инструкция Термометр оконный (спиртовой) для всех типов окон RST 02069"><div class="box" page="termometr-okonnyy-spirtovoy-dlya-vseh-tipov-okon-rst-170r"><span class="title">газовый конвектор инструкция Термометр оконный (спиртовой) для всех типов окон RST 02069</span><p>от <span class="price">170</span> руб.</p></div></li>
						<li><img src="photos/aca66a50e90ffa9820f492ddf3cc3047.jpeg" alt="двигатель отопителя вентилятора Инфракрасный тепловентилятор Neoclima NCH-1.2B" title="двигатель отопителя вентилятора Инфракрасный тепловентилятор Neoclima NCH-1.2B"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-nchb-1920r"><span class="title">двигатель отопителя вентилятора Инфракрасный тепловентилятор Neoclima NCH-1.2B</span><p>от <span class="price">1920</span> руб.</p></div></li>
						<li><img src="photos/9047019d859c516eaff7f68bcdf19600.jpeg" alt="типы осевых вентиляторов Timberk TIH R1 5M Переносная тепловая пушка" title="типы осевых вентиляторов Timberk TIH R1 5M Переносная тепловая пушка"><div class="box" page="timberk-tih-r-m-perenosnaya-teplovaya-pushka-3940r"><span class="title">типы осевых вентиляторов Timberk TIH R1 5M Переносная тепловая пушка</span><p>от <span class="price">3940</span> руб.</p></div></li>
						<li class="large"><img src="photos/ebd821f20caa9cb3fffbcb55a472e7fe.jpeg" alt="проточный водонагреватель цена Комплект фильтров для очистителя воздуха Атмос-Макси" title="проточный водонагреватель цена Комплект фильтров для очистителя воздуха Атмос-Макси"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-960r"><span class="title">проточный водонагреватель цена Комплект фильтров для очистителя воздуха Атмос-Макси</span><p>от <span class="price">960</span> руб.</p></div></li>
						<li class="large"><img src="photos/62e02467d931962a606906e72d1a0eda.jpeg" alt="вентиляторы осевые вытяжные Очиститель воздуха Атмос Макси" title="вентиляторы осевые вытяжные Очиститель воздуха Атмос Макси"><div class="box" page="ochistitel-vozduha-atmos-maksi-8750r"><span class="title">вентиляторы осевые вытяжные Очиститель воздуха Атмос Макси</span><p>от <span class="price">8750</span> руб.</p></div></li>
						<li class="large"><img src="photos/0497d2d5473f5c88eb81f2a8dec78470.jpeg" alt="водонагреватели baxi Ультразвуковой увлажнитель воздуха Neoclima NHL-910M (Механика)" title="водонагреватели baxi Ультразвуковой увлажнитель воздуха Neoclima NHL-910M (Механика)"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-neoclima-nhlm-mehanika-3960r"><span class="title">водонагреватели baxi Ультразвуковой увлажнитель воздуха Neoclima NHL-910M (Механика)</span><p>от <span class="price">3960</span> руб.</p></div></li>
						<li><img src="photos/d430e0528633a6a14c9419c5b7779e1b.jpeg" alt="установить кондиционер в квартире Увлажнитель Atlanta АТН-162" title="установить кондиционер в квартире Увлажнитель Atlanta АТН-162"><div class="box" page="uvlazhnitel-atlanta-atn-900r"><span class="title">установить кондиционер в квартире Увлажнитель Atlanta АТН-162</span><p>от <span class="price">900</span> руб.</p></div></li>
						<li><img src="photos/f582d095ca5f4d9ee39dfd4a1564b1bc.jpeg" alt="водонагреватель аристон цена Увлажнитель воздуха Vitesse VS-867" title="водонагреватель аристон цена Увлажнитель воздуха Vitesse VS-867"><div class="box" page="uvlazhnitel-vozduha-vitesse-vs-8750r"><span class="title">водонагреватель аристон цена Увлажнитель воздуха Vitesse VS-867</span><p>от <span class="price">8750</span> руб.</p></div></li>
						<li><img src="photos/b1acb9ed9413521abfc46164dce8f49d.jpeg" alt="ремонт кондиционеров минск Мойка воздуха Boneco Air-O-Swiss 2055" title="ремонт кондиционеров минск Мойка воздуха Boneco Air-O-Swiss 2055"><div class="box" page="moyka-vozduha-boneco-airoswiss-13500r"><span class="title">ремонт кондиционеров минск Мойка воздуха Boneco Air-O-Swiss 2055</span><p>от <span class="price">13500</span> руб.</p></div></li>
						<li><img src="photos/a4b9dabef5396203f04ebb9fd9ac8e98.jpeg" alt="неисправности тепловой пушки Камин-электропечь Dimplex Nyman" title="неисправности тепловой пушки Камин-электропечь Dimplex Nyman"><div class="box" page="kaminelektropech-dimplex-nyman-10329r"><span class="title">неисправности тепловой пушки Камин-электропечь Dimplex Nyman</span><p>от <span class="price">10329</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("gigrometr-boneco-a-1350r.php", 0, -4); if (file_exists("comments/gigrometr-boneco-a-1350r.php")) require_once "comments/gigrometr-boneco-a-1350r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="gigrometr-boneco-a-1350r.php" method="post" onsubmit="return checkForm(this)">
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