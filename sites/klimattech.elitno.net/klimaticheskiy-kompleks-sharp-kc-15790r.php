<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("klimaticheskiy-kompleks-sharp-kc-15790r.php","руководство по эксплуатации кондиционера");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("klimaticheskiy-kompleks-sharp-kc-15790r.php", $nick, $comment);
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
		<title>руководство по эксплуатации кондиционера Климатический комплекс Sharp KC-840  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="руководство по эксплуатации кондиционера, вентилятор процессора программа, фильтр кондиционера приора, водонагреватели ariston shuttle, инфракрасные обогреватели вред, аристон водонагреватели pro eco, водонагреватель 100 л, скачать конвектор для psp, кондиционеры на холод, дезинфекция кондиционеров, вентилятор радиатора ваз 2110, куда заливать кондиционер, водяные тепловентиляторы, газовая тепловая пушка master,  замена кондиционера на климат">
		<meta name="description" content="руководство по эксплуатации кондиционера Климатический комплекс Sharp являет собой настоящий шедевр. Он выполнен в оригин...">
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
						<a class="photo" href="photos/079ceb0c1a4671e91e0d11ed1a8b9787.jpeg" title="руководство по эксплуатации кондиционера Климатический комплекс Sharp KC-840"><img src="photos/079ceb0c1a4671e91e0d11ed1a8b9787.jpeg" alt="руководство по эксплуатации кондиционера Климатический комплекс Sharp KC-840" title="руководство по эксплуатации кондиционера Климатический комплекс Sharp KC-840 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-ax-i-2700r.php"><img src="photos/56bd6d1cb04e7d799bfeed68b851b2f9.jpeg" alt="вентилятор процессора программа Радиатор масляный Timberk TOR 22 AX I" title="вентилятор процессора программа Радиатор масляный Timberk TOR 22 AX I"></a><h2>Радиатор масляный Timberk TOR 22 AX I</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-obogrevatel-vitek-vt-2890r.php"><img src="photos/4de881e86bde9b35ed9fb139eb2b1c30.jpeg" alt="фильтр кондиционера приора Масляный обогреватель Vitek VT-1705" title="фильтр кондиционера приора Масляный обогреватель Vitek VT-1705"></a><h2>Масляный обогреватель Vitek VT-1705</h2></li>
							<li><a href="http://klimattech.elitno.net/termogigrometr-cifrovoy-rst-825r.php"><img src="photos/fe91a31089c8058c33724d6ef127f188.jpeg" alt="водонагреватели ariston shuttle Термогигрометр цифровой RST 06017" title="водонагреватели ariston shuttle Термогигрометр цифровой RST 06017"></a><h2>Термогигрометр цифровой RST 06017</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>руководство по эксплуатации кондиционера Климатический комплекс Sharp KC-840</h1>
						<div class="tb"><p>Цена: от <span class="price">15790</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_15996.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Климатический комплекс </b><b>Sharp</b> являет собой настоящий шедевр. Он выполнен в оригинальном обтекаемом корпусе из необычного на вид пластика, снабжен удобным дисплеем с яркой подсветкой, оснащен уникальной технологией Plasmacluster для наиболее качественной и эффективной очистки воздуха. Максимальный объем очищаемого комплексом воздуха составляет 210 куб/час, что соответствует площади помещения примерно в 26 кв.м. В модели предусмотрено инверторное управление с тремя режимами автоматической работы при различных уровнях скорости вращения вентилятора и уровня шума.</p><p>Конструкция KC-840 включает четыре фильтра: предварительной очистки, моющийся угольный с дезодорирующим эффектом, для предотвращения конденсата и НЕРА. Комплекс снабжен функцией увлажнения воздуха, для чего предусмотрен специальный трехлитровый резервуар для воды с индикацией уровня наполненности. Максимальная скорость увлажнения воздуха равна 450 мл/ч. Чувствительный к различным уровням пыли, температуры и влажности сенсор способен работать как в автоматическом, так и в ручном режиме.</p><p><b>Характеристики:</b></p><ul type=disc><li>Тип: воздухоочиститель с функцией увлажнения; <li>Площадь помещения: 26 м2; <li>Максимальный объем очищаемого воздуха: 210 м3/ч; <li>Максимальная скорость увлажнения воздуха: 450 мл/ч; <li>Объем емкости: 3 л; <li>3 скорости работы вентилятора: максимальная/средняя/низкая; <li>Технология ионизации и очистки воздуха Plasmacluster: генерация положительных и отрицательных ионов; <li>Энергосберегающее инверторное управление; <li>Сенсоры: пыли, определения температуры и влажности; <li>Режимы работы: очистка воздуха, очистка и увлажнение, «Ионный дождь», «Цветочная пыльца», автоматический; <li>Фильтрация: предварительная очистка, моющийся дезодорирующий из активированного угля, фильтр конденсата, HEPA-фильтр; <li>Цветовая индикация пыли (5 ступеней) и влажности: загрязнения воздуха, вкл./выкл. Подсветки, режима ионизации Plasmacluster, уровня воды; <li>Уровень шума в режиме очищения воздуха ( макс./сред./мин.): 45/34/15 дБ; <li>Срок службы HEPA фильтров: HEPA - 5 лет, дезодорирующий моющийся - 5 лет, увлажняющий - 2 года; <li>Габариты (ШхГхВ): 36x23,3x55 см; <li>Вес: 8 кг.</li></ul><p><b>Производитель:</b> Sharp.</p><p><b>Страна:</b> Япония.</p><p><b>Гарантия:</b> 1 год.</p> руководство по эксплуатации кондиционера</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/f06cbcf8fc84e22661b7889248dc2d8e.jpeg" alt="инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06" title="инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06"><div class="box" page="teploventilyator-neoclima-fh-650r"><span class="title">инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06</span><p>от <span class="price">650</span> руб.</p></div></li>
						<li><img src="photos/7a1a82479c04d8e202cb444f94ed9635.jpeg" alt="аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4" title="аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-hh-1200r"><span class="title">аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/b8f26fb8089fd535d1b75c7490f71704.jpeg" alt="водонагреватель 100 л Тепловая пушка Ballu BPH-5.000C" title="водонагреватель 100 л Тепловая пушка Ballu BPH-5.000C"><div class="box" page="teplovaya-pushka-ballu-bphc-4200r"><span class="title">водонагреватель 100 л Тепловая пушка Ballu BPH-5.000C</span><p>от <span class="price">4200</span> руб.</p></div></li>
						<li><img src="photos/8c0dbfa87212eb427e3b8a222777f9a8.jpeg" alt="скачать конвектор для psp Очиститель-увлажнитель воздуха Атмос Аква-2800" title="скачать конвектор для psp Очиститель-увлажнитель воздуха Атмос Аква-2800"><div class="box" page="ochistiteluvlazhnitel-vozduha-atmos-akva-3370r"><span class="title">скачать конвектор для psp Очиститель-увлажнитель воздуха Атмос Аква-2800</span><p>от <span class="price">3370</span> руб.</p></div></li>
						<li class="large"><img src="photos/040ec11d51cb385fda44e4f5e4e3d7d4.jpeg" alt="кондиционеры на холод Очиститель-ионизатор воздуха Атмос HG-504" title="кондиционеры на холод Очиститель-ионизатор воздуха Атмос HG-504"><div class="box" page="ochistitelionizator-vozduha-atmos-hg-2150r"><span class="title">кондиционеры на холод Очиститель-ионизатор воздуха Атмос HG-504</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li class="large"><img src="photos/abf419963c883e1fd11bb247dd4a7d69.jpeg" alt="дезинфекция кондиционеров Мойка воздуха Electrolux EHAW 7515D" title="дезинфекция кондиционеров Мойка воздуха Electrolux EHAW 7515D"><div class="box" page="moyka-vozduha-electrolux-ehaw-d-15450r-2"><span class="title">дезинфекция кондиционеров Мойка воздуха Electrolux EHAW 7515D</span><p>от <span class="price">15450</span> руб.</p></div></li>
						<li class="large"><img src="photos/9e0669e9ee2513798e2fc54bd56ad351.jpeg" alt="вентилятор радиатора ваз 2110 ZENET HDL-969 Очиститель-ароматизатор" title="вентилятор радиатора ваз 2110 ZENET HDL-969 Очиститель-ароматизатор"><div class="box" page="zenet-hdl-ochistitelaromatizator-2950r"><span class="title">вентилятор радиатора ваз 2110 ZENET HDL-969 Очиститель-ароматизатор</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/153a3374b1c5b8cbcad4ae2bc5926877.jpeg" alt="куда заливать кондиционер Электрогрелка Beurer HK120 xxl" title="куда заливать кондиционер Электрогрелка Beurer HK120 xxl"><div class="box" page="elektrogrelka-beurer-hk-xxl-2450r"><span class="title">куда заливать кондиционер Электрогрелка Beurer HK120 xxl</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li><img src="photos/67e3897c53598e5e910b41c2be5021c2.jpeg" alt="водяные тепловентиляторы Камин Комплект Dimplex Vianna DELUXE" title="водяные тепловентиляторы Камин Комплект Dimplex Vianna DELUXE"><div class="box" page="kamin-komplekt-dimplex-vianna-deluxe-22223r"><span class="title">водяные тепловентиляторы Камин Комплект Dimplex Vianna DELUXE</span><p>от <span class="price">22223</span> руб.</p></div></li>
						<li><img src="photos/4932c3d5df2963674b5e293235a03ab0.jpeg" alt="газовая тепловая пушка master Камин Комплект Dimplex Grenada CFP3685O" title="газовая тепловая пушка master Камин Комплект Dimplex Grenada CFP3685O"><div class="box" page="kamin-komplekt-dimplex-grenada-cfpo-24414r"><span class="title">газовая тепловая пушка master Камин Комплект Dimplex Grenada CFP3685O</span><p>от <span class="price">24414</span> руб.</p></div></li>
						<li><img src="photos/9fb808ff39f0da5251df2623e483ea3f.jpeg" alt="компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN" title="компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN"><div class="box" page="kamin-komplekt-dimplex-palermo-cfpwn-26605r"><span class="title">компьютерный вентилятор Камин Комплект Dimplex Palermo CFP3831WN</span><p>от <span class="price">26605</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("klimaticheskiy-kompleks-sharp-kc-15790r.php", 0, -4); if (file_exists("comments/klimaticheskiy-kompleks-sharp-kc-15790r.php")) require_once "comments/klimaticheskiy-kompleks-sharp-kc-15790r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="klimaticheskiy-kompleks-sharp-kc-15790r.php" method="post" onsubmit="return checkForm(this)">
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