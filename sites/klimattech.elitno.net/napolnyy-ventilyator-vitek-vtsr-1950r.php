<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("napolnyy-ventilyator-vitek-vtsr-1950r.php","принцип работы конвектора");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("napolnyy-ventilyator-vitek-vtsr-1950r.php", $nick, $comment);
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
		<title>принцип работы конвектора Напольный вентилятор Vitek VT-1908SR  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="принцип работы конвектора, купить кондиционер в спб, тепловые пушки хабаровск, как использовать кондиционер, канальные кондиционеры mitsubishi, замена датчика включения вентилятора, технология кондиционеров, фильтр кондиционера приора, газовый конвектор инструкция, аристон водонагреватели pro eco, как рассчитать кондиционер, теплоотдача конвекторов, автомобильный газовый обогреватель, как подобрать вентилятор,  питание вентиляторов компьютера">
		<meta name="description" content="принцип работы конвектора Напольный вентилятор Vitek отлично подойдет для размещения дома, в офисе или люб...">
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
						<a class="photo" href="photos/58b964965d25a7923cd66e7408993d7b.jpeg" title="принцип работы конвектора Напольный вентилятор Vitek VT-1908SR"><img src="photos/58b964965d25a7923cd66e7408993d7b.jpeg" alt="принцип работы конвектора Напольный вентилятор Vitek VT-1908SR" title="принцип работы конвектора Напольный вентилятор Vitek VT-1908SR -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-8050r.php"><img src="photos/0b7242a019f1f6f431e50702cc1f4e77.jpeg" alt="купить кондиционер в спб Водонагреватель Timberk SWH FS6 30 H" title="купить кондиционер в спб Водонагреватель Timberk SWH FS6 30 H"></a><h2>Водонагреватель Timberk SWH FS6 30 H</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-7750r.php"><img src="photos/31c206cb5d507160b76af6f9958365a3.jpeg" alt="тепловые пушки хабаровск Водонагреватель Timberk SWH FS2 50 H" title="тепловые пушки хабаровск Водонагреватель Timberk SWH FS2 50 H"></a><h2>Водонагреватель Timberk SWH FS2 50 H</h2></li>
							<li><a href="http://klimattech.elitno.net/infrakrasnyy-obogrevatel-neoclima-2400r.php"><img src="photos/682d503f2c4b2e3e1fd33b985785ee9f.jpeg" alt="как использовать кондиционер Инфракрасный обогреватель Neoclima" title="как использовать кондиционер Инфракрасный обогреватель Neoclima"></a><h2>Инфракрасный обогреватель Neoclima</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>принцип работы конвектора Напольный вентилятор Vitek VT-1908SR</h1>
						<div class="tb"><p>Цена: от <span class="price">1950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_15833.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Напольный вентилятор </b><b>Vitek</b> отлично подойдет для размещения дома, в офисе или любом другом общественном месте. Он сочетает в себе стильный современный эргономичный дизайн, высокую функциональность, проверенное качество и привлекательную цену. Прибор выполнен в серебристом пластиковом корпусе, с защитной решеткой на лопастях, имеет механическое управление. Предусмотрено три разных скоростных режима, автоматический поворот (угол поворота - 90°) и регулировка наклона.</p><p><b>Характеристики:</b></p><ul type=\disc\><li>Тип: напольный; </li><li>Рабочий механизм: осевой; </li><li>Управление: механическое; </li><li>Мощность: 60 Вт; </li><li>Количество скоростей: 3, ступенчатая регулировка; </li><li>Регулировка наклона; </li><li>Регулировка высоты; </li><li>Автоматический поворот; </li><li>Угол поворота: 90°; </li><li>Защитная решетка; </li><li>Диаметр лопастей: 40 см; </li><li>Таймер: нет; </li><li>Материал корпуса: пластик; </li><li>Цвет: серебристый.</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна:</b> Россия.</p><p><b>Гарантия:</b> 1 год.</p> принцип работы конвектора</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a7228c23da87296938f4149b6ef4b2ce.jpeg" alt="канальные кондиционеры mitsubishi Инфракрасный обогреватель электрический Timberk TCH A1" title="канальные кондиционеры mitsubishi Инфракрасный обогреватель электрический Timberk TCH A1"><div class="box" page="infrakrasnyy-obogrevatel-elektricheskiy-timberk-tch-a-2250r"><span class="title">канальные кондиционеры mitsubishi Инфракрасный обогреватель электрический Timberk TCH A1</span><p>от <span class="price">2250</span> руб.</p></div></li>
						<li><img src="photos/fcad3e5278faf77d6e029ba9d4a486e0.jpeg" alt="замена датчика включения вентилятора Конвектор Timberk TEC.PS2 M 1500" title="замена датчика включения вентилятора Конвектор Timberk TEC.PS2 M 1500"><div class="box" page="konvektor-timberk-tecps-m-2550r"><span class="title">замена датчика включения вентилятора Конвектор Timberk TEC.PS2 M 1500</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li><img src="photos/fa85dda66f5e6e8c0e413d3d9959f6e7.jpeg" alt="технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4" title="технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4"><div class="box" page="splitsistema-neoclima-nsnuhahinr-21900r"><span class="title">технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4</span><p>от <span class="price">21900</span> руб.</p></div></li>
						<li><img src="photos/4de881e86bde9b35ed9fb139eb2b1c30.jpeg" alt="фильтр кондиционера приора Масляный обогреватель Vitek VT-1705" title="фильтр кондиционера приора Масляный обогреватель Vitek VT-1705"><div class="box" page="maslyanyy-obogrevatel-vitek-vt-2890r"><span class="title">фильтр кондиционера приора Масляный обогреватель Vitek VT-1705</span><p>от <span class="price">2890</span> руб.</p></div></li>
						<li class="large"><img src="photos/96e61a0d5200c050b3722138b0532ddd.jpeg" alt="газовый конвектор инструкция Термометр оконный (спиртовой) для всех типов окон RST 02069" title="газовый конвектор инструкция Термометр оконный (спиртовой) для всех типов окон RST 02069"><div class="box" page="termometr-okonnyy-spirtovoy-dlya-vseh-tipov-okon-rst-170r"><span class="title">газовый конвектор инструкция Термометр оконный (спиртовой) для всех типов окон RST 02069</span><p>от <span class="price">170</span> руб.</p></div></li>
						<li class="large"><img src="photos/7a1a82479c04d8e202cb444f94ed9635.jpeg" alt="аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4" title="аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-hh-1200r"><span class="title">аристон водонагреватели pro eco Инфракрасный тепловентилятор Neoclima HH10-4</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/b6565f7fad53009fc4307abb9d764c90.jpeg" alt="как рассчитать кондиционер Тепловентилятор Atlanta ATH-105" title="как рассчитать кондиционер Тепловентилятор Atlanta ATH-105"><div class="box" page="teploventilyator-atlanta-ath-550r"><span class="title">как рассчитать кондиционер Тепловентилятор Atlanta ATH-105</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/66e0aa1057db078ec30260e7078f7d70.jpeg" alt="теплоотдача конвекторов Очиститель воздуха Neoclima NAP" title="теплоотдача конвекторов Очиститель воздуха Neoclima NAP"><div class="box" page="ochistitel-vozduha-neoclima-nap-7000r"><span class="title">теплоотдача конвекторов Очиститель воздуха Neoclima NAP</span><p>от <span class="price">7000</span> руб.</p></div></li>
						<li><img src="photos/405d5911ad12b16b53a257c9f4ed86c2.jpeg" alt="автомобильный газовый обогреватель Ультразвуковой увлажнитель воздуха Neoclima NHL-901E (Электроника)" title="автомобильный газовый обогреватель Ультразвуковой увлажнитель воздуха Neoclima NHL-901E (Электроника)"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-neoclima-nhle-elektronika-4900r"><span class="title">автомобильный газовый обогреватель Ультразвуковой увлажнитель воздуха Neoclima NHL-901E (Электроника)</span><p>от <span class="price">4900</span> руб.</p></div></li>
						<li><img src="photos/72bc50c1d64423e85ecfe64af3ba880f.jpeg" alt="как подобрать вентилятор Камин Классический очаг Dimplex Horton Black" title="как подобрать вентилятор Камин Классический очаг Dimplex Horton Black"><div class="box" page="kamin-klassicheskiy-ochag-dimplex-horton-black-17685r"><span class="title">как подобрать вентилятор Камин Классический очаг Dimplex Horton Black</span><p>от <span class="price">17685</span> руб.</p></div></li>
						<li><img src="photos/e54b9857f46cfbd9b11c8676b8c1a816.jpeg" alt="вентилятор охлаждения не выключается Электропростынь Microlife FH 422" title="вентилятор охлаждения не выключается Электропростынь Microlife FH 422"><div class="box" page="elektroprostyn-microlife-fh-3790r"><span class="title">вентилятор охлаждения не выключается Электропростынь Microlife FH 422</span><p>от <span class="price">3790</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("napolnyy-ventilyator-vitek-vtsr-1950r.php", 0, -4); if (file_exists("comments/napolnyy-ventilyator-vitek-vtsr-1950r.php")) require_once "comments/napolnyy-ventilyator-vitek-vtsr-1950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="napolnyy-ventilyator-vitek-vtsr-1950r.php" method="post" onsubmit="return checkForm(this)">
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