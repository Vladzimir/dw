<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vodonagrevatel-neoclima-slim-7650r.php","защита водонагревателей");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vodonagrevatel-neoclima-slim-7650r.php", $nick, $comment);
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
		<title>защита водонагревателей Водонагреватель Neoclima Slim 80  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="защита водонагревателей, метеостанция цифровая rst, согласование кондиционера, муфта привода вентилятора, тепловые пушки в саратове, самостоятельная установка кондиционера, газовый нагреватель воздуха, комплектация кондиционера, vanguard тепловая пушка, трубки для кондиционеров, колонка водонагреватель, кондиционеры россии, производители тепловых пушек, заправка кондиционера цена,  конвекторы электрические форум">
		<meta name="description" content="защита водонагревателей Если Вы решили приобрести такой полезный прибор как нагреватель воды, обратите в...">
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
						<a class="photo" href="photos/980468517e8c92ca5c67f3dfd1f314c1.jpeg" title="защита водонагревателей Водонагреватель Neoclima Slim 80"><img src="photos/980468517e8c92ca5c67f3dfd1f314c1.jpeg" alt="защита водонагревателей Водонагреватель Neoclima Slim 80" title="защита водонагревателей Водонагреватель Neoclima Slim 80 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/konvektor-ballu-plaza-bepe-4100r.php"><img src="photos/8649b809c04e744919eb968f3bd579c1.jpeg" alt="метеостанция цифровая rst Конвектор Ballu Plaza BEP|E-1500" title="метеостанция цифровая rst Конвектор Ballu Plaza BEP|E-1500"></a><h2>Конвектор Ballu Plaza BEP|E-1500</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tecps-m-2020r.php"><img src="photos/3ffe8f5edf569fd82f3547a04fdb540c.jpeg" alt="согласование кондиционера Конвектор Timberk TEC.PS2 M 500" title="согласование кондиционера Конвектор Timberk TEC.PS2 M 500"></a><h2>Конвектор Timberk TEC.PS2 M 500</h2></li>
							<li><a href="http://klimattech.elitno.net/barometr-futbolnyy-myach-rst-art-1750r.php"><img src="photos/eaa9d36d06605b97c43cac0412f52c2b.jpeg" alt="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873" title="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873"></a><h2>Барометр  Футбольный мяч RST, арт. 07873</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>защита водонагревателей Водонагреватель Neoclima Slim 80</h1>
						<div class="tb"><p>Цена: от <span class="price">7650</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_15983.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Если Вы решили приобрести такой полезный прибор как нагреватель воды, обратите внимание на <b>водонагреватель Neoclima Slim</b>, который объединяет в себе всё самое необходимое и отвечает всем современным требованиям. Прибор имеет плоскую эргономичную форму, регулятор температуры на лицевой панели, световую индикацию температурного режима. Вместительность водонагревателя составляет 80 литров, мощность – 2,00 кВт. Предусмотрена защита от перегрева, от сухого нагрева, от окисления и от коррозии, увеличенная прочность соединения баков. Продуманный дизайн качественное исполнение обеспечат прибору долгий срок службы.</p><p><b>Характеристики:</b></p><ul type=disc><li>Плоская форма; </li><li>Мелкодисперсионное эмалевое покрытие бака; </li><li>Световая индикация температурного режима; </li><li>Регулятор температуры на лицевой панели; </li><li>Увеличенная прочность соединения баков; </li><li>Защита от коррозии; </li><li>Защита от окисления; </li><li>Защита от сухого нагрева; </li><li>Защита от перегрева; </li><li>Мощность: 2,00 кВт; </li><li>Объем: 80 л; </li><li>Размеры: 53,4х105х28 см.</li></ul><p><b>Производитель:</b> Neoclima.</p><p><b>Страна:</b> Китай.</p><p><b>Гарантия:</b> 3 года.</p> защита водонагревателей</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c4aad0ea2c66d698c02ab05582c08c78.jpeg" alt="тепловые пушки в саратове Термометр цифровой уличный на липучке (арт. 01277)" title="тепловые пушки в саратове Термометр цифровой уличный на липучке (арт. 01277)"><div class="box"><a href="http://klimattech.elitno.net/termometr-cifrovoy-ulichnyy-na-lipuchke-art-650r.php"><h3 class="title">тепловые пушки в саратове Термометр цифровой уличный на липучке (арт. 01277)</h3><p>от <span class="price">650</span> руб.</p></a></div></li>
						<li><img src="photos/07be9912d91dc60bfafc0da4fada6376.jpeg" alt="самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04" title="самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-nqh-390r"><span class="title">самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/d91affcba353aac790416e23f3c66d27.jpeg" alt="газовый нагреватель воздуха Vitek VT-2130 Керамический Тепловентилятор + увлажнитель , 1500Вт" title="газовый нагреватель воздуха Vitek VT-2130 Керамический Тепловентилятор + увлажнитель , 1500Вт"><div class="box" page="vitek-vt-keramicheskiy-teploventilyator-uvlazhnitel-vt-3150r"><span class="title">газовый нагреватель воздуха Vitek VT-2130 Керамический Тепловентилятор + увлажнитель , 1500Вт</span><p>от <span class="price">3150</span> руб.</p></div></li>
						<li><img src="photos/ea17d502d818fa1bac7491d11b492af6.jpeg" alt="комплектация кондиционера Комплект фильтров для очистителя воздуха Атмос-Вент-801" title="комплектация кондиционера Комплект фильтров для очистителя воздуха Атмос-Вент-801"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-150r"><span class="title">комплектация кондиционера Комплект фильтров для очистителя воздуха Атмос-Вент-801</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li class="large"><img src="photos/66bc8545418b36ff4f9e041b54df6f3a.jpeg" alt="vanguard тепловая пушка Увлажнитель воздуха ультразвуковой Ballu UHB-900M" title="vanguard тепловая пушка Увлажнитель воздуха ультразвуковой Ballu UHB-900M"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-ballu-uhbm-5070r"><span class="title">vanguard тепловая пушка Увлажнитель воздуха ультразвуковой Ballu UHB-900M</span><p>от <span class="price">5070</span> руб.</p></div></li>
						<li class="large"><img src="photos/2c1b8774e591d0ea8ba0f99b789d4590.jpeg" alt="трубки для кондиционеров Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха" title="трубки для кондиционеров Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха"><div class="box" page="timberk-thu-ul-a-uvlazhnitel-i-aromatizator-vozduha-1600r-2"><span class="title">трубки для кондиционеров Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li class="large"><img src="photos/0c87e320fea711307029c9c6aafea147.jpeg" alt="колонка водонагреватель Электрогрелка Beurer HK40" title="колонка водонагреватель Электрогрелка Beurer HK40"><div class="box" page="elektrogrelka-beurer-hk-1600r"><span class="title">колонка водонагреватель Электрогрелка Beurer HK40</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/4d6b2fff8611e7b3727f48fc3096f47f.jpeg" alt="кондиционеры россии Электрогрелка Beurer HKM60" title="кондиционеры россии Электрогрелка Beurer HKM60"><div class="box" page="elektrogrelka-beurer-hkm-2450r"><span class="title">кондиционеры россии Электрогрелка Beurer HKM60</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li><img src="photos/3e8a57741f40686130cce0e9aee445a3.png" alt="производители тепловых пушек Электрический матрац ИНКОР (мощность 30 и 60 Вт) 145х75 см" title="производители тепловых пушек Электрический матрац ИНКОР (мощность 30 и 60 Вт) 145х75 см"><div class="box" page="elektricheskiy-matrac-inkor-moschnost-i-vt-h-sm-1000r"><span class="title">производители тепловых пушек Электрический матрац ИНКОР (мощность 30 и 60 Вт) 145х75 см</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/e7e905bc6a32503c02bab2534a7c54ae.jpeg" alt="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)" title="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)"><div class="box" page="elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r"><span class="title">заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)</span><p>от <span class="price">900</span> руб.</p></div></li>
						<li><img src="photos/1026619d91df8acb0ac8ab1a3d3939cf.jpeg" alt="керамическая тепловая пушка Electrolux  EFP W - 1200RRC Электрокамин настенный" title="керамическая тепловая пушка Electrolux  EFP W - 1200RRC Электрокамин настенный"><div class="box" page="electrolux-efp-w-rrc-elektrokamin-nastennyy-16330r"><span class="title">керамическая тепловая пушка Electrolux  EFP W - 1200RRC Электрокамин настенный</span><p>от <span class="price">16330</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vodonagrevatel-neoclima-slim-7650r.php", 0, -4); if (file_exists("comments/vodonagrevatel-neoclima-slim-7650r.php")) require_once "comments/vodonagrevatel-neoclima-slim-7650r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vodonagrevatel-neoclima-slim-7650r.php" method="post" onsubmit="return checkForm(this)">
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