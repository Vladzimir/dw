<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("neoclima-nozhki-na-kolesikah-240r.php","вентилятор печки цена");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("neoclima-nozhki-na-kolesikah-240r.php", $nick, $comment);
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
		<title>вентилятор печки цена NEOCLIMA ножки на колесиках  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вентилятор печки цена, монтаж кондиционеров в москве, конвектор видео в mp4 бесплатно, scarlett инфракрасный обогреватель, проточный промышленный водонагреватель, водонагреватель electrolux smartfix, водонагреватели в краснодаре, комплектация кондиционера, водонагреватель реал, водонагреватель газовый vektor, водонагреватели baxi, водонагреватели аристон 100, вентилятор для воздуховода, ремонт кондиционеров минск,  замена кондиционера на климат">
		<meta name="description" content="вентилятор печки цена Ножки на колесиках Neoclima предназначены для напольной установки конвекторов се...">
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
						<a class="photo" href="photos/0b364f87831da5b1b0340083d6502d32.jpeg" title="вентилятор печки цена NEOCLIMA ножки на колесиках"><img src="photos/0b364f87831da5b1b0340083d6502d32.jpeg" alt="вентилятор печки цена NEOCLIMA ножки на колесиках" title="вентилятор печки цена NEOCLIMA ножки на колесиках -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/srednevolnovyy-infrakrasnyy-obogrevatel-iwq-1900r.php"><img src="photos/67a6917e75e2d249213621846f6b966a.jpeg" alt="монтаж кондиционеров в москве Средневолновый инфракрасный обогреватель IWQ 120" title="монтаж кондиционеров в москве Средневолновый инфракрасный обогреватель IWQ 120"></a><h2>Средневолновый инфракрасный обогреватель IWQ 120</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-led-r-in-3220r.php"><img src="photos/de56a071ca1190260819c688068be1ef.jpeg" alt="конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN" title="конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN"></a><h2>Конвектор Timberk LED R12.20 IN</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecps-le-2250r.php"><img src="photos/760071ee7145929fec75dc82c8e21e40.jpeg" alt="scarlett инфракрасный обогреватель Конвектор электрический Timberk TEC.PS2 LE" title="scarlett инфракрасный обогреватель Конвектор электрический Timberk TEC.PS2 LE"></a><h2>Конвектор электрический Timberk TEC.PS2 LE</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вентилятор печки цена NEOCLIMA ножки на колесиках</h1>
						<div class="tb"><p>Цена: от <span class="price">240</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_16228.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Ножки на колесиках </b><b>Neoclima</b> предназначены для напольной установки конвекторов серии Dolce и Comforte. В комплект входит две ножки белого цвета. Отличаются прочностью и надежностью.</p><p><b>Производитель</b>: Neoclima</p><p><b>Страна</b>: Украина</p> вентилятор печки цена</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7e0e51321071e0a35e5a20d61f799bef.jpeg" alt="проточный промышленный водонагреватель Кондиционер сплит-система Timberk AC TIM 09H S1" title="проточный промышленный водонагреватель Кондиционер сплит-система Timberk AC TIM 09H S1"><div class="box" page="kondicioner-splitsistema-timberk-ac-tim-h-s-14720r"><span class="title">проточный промышленный водонагреватель Кондиционер сплит-система Timberk AC TIM 09H S1</span><p>от <span class="price">14720</span> руб.</p></div></li>
						<li><img src="photos/5f7616cd0b65aed3035b8a63448b966a.jpeg" alt="водонагреватель electrolux smartfix Гигрометр Boneco A7254" title="водонагреватель electrolux smartfix Гигрометр Boneco A7254"><div class="box" page="gigrometr-boneco-a-1350r"><span class="title">водонагреватель electrolux smartfix Гигрометр Boneco A7254</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li><img src="photos/84494cd79e9ba1c8e97a5e697cbf2909.jpeg" alt="водонагреватели в краснодаре Керамический тепловентилятор Vitek VT-1734" title="водонагреватели в краснодаре Керамический тепловентилятор Vitek VT-1734"><div class="box" page="keramicheskiy-teploventilyator-vitek-vt-1290r"><span class="title">водонагреватели в краснодаре Керамический тепловентилятор Vitek VT-1734</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li><img src="photos/ea17d502d818fa1bac7491d11b492af6.jpeg" alt="комплектация кондиционера Комплект фильтров для очистителя воздуха Атмос-Вент-801" title="комплектация кондиционера Комплект фильтров для очистителя воздуха Атмос-Вент-801"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-150r"><span class="title">комплектация кондиционера Комплект фильтров для очистителя воздуха Атмос-Вент-801</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li class="large"><img src="photos/8715a2f096ad000778af417d553ba5fd.jpeg" alt="водонагреватель реал Увлажнитель воздуха ультразвуковой Черепаха B.Well WH-100" title="водонагреватель реал Увлажнитель воздуха ультразвуковой Черепаха B.Well WH-100"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-cherepaha-bwell-wh-1650r"><span class="title">водонагреватель реал Увлажнитель воздуха ультразвуковой Черепаха B.Well WH-100</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li class="large"><img src="photos/cb2bd36e5b426ebd6b01cac1b1667c9e.jpeg" alt="водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H" title="водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-ballu-uhbh-4170r"><span class="title">водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H</span><p>от <span class="price">4170</span> руб.</p></div></li>
						<li class="large"><img src="photos/0497d2d5473f5c88eb81f2a8dec78470.jpeg" alt="водонагреватели baxi Ультразвуковой увлажнитель воздуха Neoclima NHL-910M (Механика)" title="водонагреватели baxi Ультразвуковой увлажнитель воздуха Neoclima NHL-910M (Механика)"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-neoclima-nhlm-mehanika-3960r"><span class="title">водонагреватели baxi Ультразвуковой увлажнитель воздуха Neoclima NHL-910M (Механика)</span><p>от <span class="price">3960</span> руб.</p></div></li>
						<li><img src="photos/80633934bc2b2e0d2881d68e66fa2ada.jpeg" alt="водонагреватели аристон 100 Ультразвуковой увлажнитель Electrolux EHU 3510D" title="водонагреватели аристон 100 Ультразвуковой увлажнитель Electrolux EHU 3510D"><div class="box" page="ultrazvukovoy-uvlazhnitel-electrolux-ehu-d-5550r"><span class="title">водонагреватели аристон 100 Ультразвуковой увлажнитель Electrolux EHU 3510D</span><p>от <span class="price">5550</span> руб.</p></div></li>
						<li><img src="photos/158f0fdc3403b5cc7ac27a1d36fec5f3.jpeg" alt="вентилятор для воздуховода ZENET JSS-12501 Увлажнитель" title="вентилятор для воздуховода ZENET JSS-12501 Увлажнитель"><div class="box" page="zenet-jss-uvlazhnitel-1500r"><span class="title">вентилятор для воздуховода ZENET JSS-12501 Увлажнитель</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/b1acb9ed9413521abfc46164dce8f49d.jpeg" alt="ремонт кондиционеров минск Мойка воздуха Boneco Air-O-Swiss 2055" title="ремонт кондиционеров минск Мойка воздуха Boneco Air-O-Swiss 2055"><div class="box" page="moyka-vozduha-boneco-airoswiss-13500r"><span class="title">ремонт кондиционеров минск Мойка воздуха Boneco Air-O-Swiss 2055</span><p>от <span class="price">13500</span> руб.</p></div></li>
						<li><img src="photos/7306344adf61ae8e6f46c280e9e05c4c.jpeg" alt="ручки кондиционера Камин Dimplex Vega" title="ручки кондиционера Камин Dimplex Vega"><div class="box" page="kamin-dimplex-vega-38186r"><span class="title">ручки кондиционера Камин Dimplex Vega</span><p>от <span class="price">38186</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("neoclima-nozhki-na-kolesikah-240r.php", 0, -4); if (file_exists("comments/neoclima-nozhki-na-kolesikah-240r.php")) require_once "comments/neoclima-nozhki-na-kolesikah-240r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="neoclima-nozhki-na-kolesikah-240r.php" method="post" onsubmit="return checkForm(this)">
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