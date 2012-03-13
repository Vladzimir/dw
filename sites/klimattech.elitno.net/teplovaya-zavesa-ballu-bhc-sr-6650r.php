<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("teplovaya-zavesa-ballu-bhc-sr-6650r.php","замена вентилятора отопителя ваз");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("teplovaya-zavesa-ballu-bhc-sr-6650r.php", $nick, $comment);
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
		<title>замена вентилятора отопителя ваз Тепловая завеса Ballu BHC-6.000 SR  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="замена вентилятора отопителя ваз, радиатор кондиционера опель, дополнительный вентилятор охлаждения, кондиционеры в зеленограде, самые лучшие кондиционеры, метеостанции интернет магазин, уличные обогреватели, кондиционер основные средства, типы осевых вентиляторов, комплектация кондиционера, кондиционер форд мондео, эколайн инфракрасные обогреватели, обогреватель с вентилятором, выбор водонагревателя,  телефон метеостанции">
		<meta name="description" content="замена вентилятора отопителя ваз Тепловая завеса Ballu BHC-6.000 SR обычно устанавливается горизонтально над двер...">
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
						<a class="photo" href="photos/18af774f568ebba05deb724cf8e7e7cb.jpeg" title="замена вентилятора отопителя ваз Тепловая завеса Ballu BHC-6.000 SR"><img src="photos/18af774f568ebba05deb724cf8e7e7cb.jpeg" alt="замена вентилятора отопителя ваз Тепловая завеса Ballu BHC-6.000 SR" title="замена вентилятора отопителя ваз Тепловая завеса Ballu BHC-6.000 SR -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-7550r.php"><img src="photos/84599f063761d7d5fcdca96fdc3ec00a.jpeg" alt="радиатор кондиционера опель Водонагреватель Timberk SWH FS4 30 H" title="радиатор кондиционера опель Водонагреватель Timberk SWH FS4 30 H"></a><h2>Водонагреватель Timberk SWH FS4 30 H</h2></li>
							<li><a href="http://klimattech.elitno.net/kondicioner-splitsistema-timberk-ac-tim-hdn-s-21780r.php"><img src="photos/2bec9b241af0d7e85d36a38042643437.jpeg" alt="дополнительный вентилятор охлаждения Кондиционер сплит-система Timberk AC TIM 12HDN S1" title="дополнительный вентилятор охлаждения Кондиционер сплит-система Timberk AC TIM 12HDN S1"></a><h2>Кондиционер сплит-система Timberk AC TIM 12HDN S1</h2></li>
							<li><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-ez-i-3640r.php"><img src="photos/a33dead31777e2b36156a508b30befd0.jpeg" alt="кондиционеры в зеленограде Радиатор масляный Timberk TOR 51.2811 EZ I" title="кондиционеры в зеленограде Радиатор масляный Timberk TOR 51.2811 EZ I"></a><h2>Радиатор масляный Timberk TOR 51.2811 EZ I</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>замена вентилятора отопителя ваз Тепловая завеса Ballu BHC-6.000 SR</h1>
						<div class="tb"><p>Цена: от <span class="price">6650</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_6150.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Тепловая завеса Ballu </b><b>BHC-6.000 </b><b>SR</b> обычно устанавливается горизонтально над дверными проемами высотой до 3 м с целью сохранения тепла в зимнее время и прохлады – в летнее. Осуществляется это посредством мощного направленного потока воздуха, создающего «барьер» между двумя температурными зонами. Модель выполнена в современном дизайне, сочетающем в себе неповторимый стиль, высокую функциональность и новейшие технологии. BHC-6.000 SR – энергосберегающее устройство, изготовленное из качественной листовой стали с полимерным покрытием, обладающим антикоррозийной устойчивостью. Нагревательным элементом в приборе служит игольчатый электронагреватель СТИТЧ, с помощью которого тепловая завеса достигает заданной температуры практически моментально. Устройство комплектуется выносным пультом ДУ со встроенным термостатом.</p><p><b>Особенности:</b></p><ul type=disc><li>Режимы работы: вентиляция (без обогрева), обогрев I (мощность 3000 Вт), обогрев II (мощность 6000 Вт); Нагревательный «ститч-элемент»; <li>Мощный тепловой поток; <li>Выносной пульт ДУ с термостатом; <li>Встроенный термостат; <li>Защита от перегрева; <li>Сниженная вибрация; <li>Низкий уровень шума; <li>Антикоррозионная устойчивость; <li>Горизонтальная установка; <li>Длительный срок эксплуатации/</li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Ступени мощности: 0/3000/6000 Вт; <li>Производительность по воздуху: 760 м3/час; <li>Высота монтажа (макс): 3 м; <li>Напряжение: 220 В; <li>Частота: 50 Гц; <li>Ток: 27,5 А; <li>Скорость потока: 6,5 м/с; <li>Повышение температур: 30 °C; <li>Размеры: 108,5х13,5х19 см; <li>Вес: 12 кг. </li></ul><p><b></b></p><p><b>Производитель: </b>Ballu.</p><p><b>Гарантия: </b>2 года.</p> замена вентилятора отопителя ваз</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/dc588af274ff42d1adeb63b74d58b910.jpeg" alt="самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177" title="самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177"><div class="box" page="termometr-cifrovoy-avtomobilnyy-rst-art-460r"><span class="title">самые лучшие кондиционеры Термометр цифровой автомобильный RST, арт. 02177</span><p>от <span class="price">460</span> руб.</p></div></li>
						<li><img src="photos/6ce8f25c21488d1ca444328673c0a09c.jpeg" alt="метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555" title="метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555"><div class="box" page="pogodnaya-cifrovaya-barometricheskaya-stanciya-s-radiodatchikom-rst-meteo-link-art-2230r"><span class="title">метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555</span><p>от <span class="price">2230</span> руб.</p></div></li>
						<li><img src="photos/b71fd8e694839d507d1ebf508f396381.jpeg" alt="уличные обогреватели Assistant AH-1971 Метеостанция" title="уличные обогреватели Assistant AH-1971 Метеостанция"><div class="box" page="assistant-ah-meteostanciya-1600r"><span class="title">уличные обогреватели Assistant AH-1971 Метеостанция</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/60fb08e9a2d0d381196549dbe25211bc.jpeg" alt="кондиционер основные средства Тепловентилятор Neoclima PTC06" title="кондиционер основные средства Тепловентилятор Neoclima PTC06"><div class="box" page="teploventilyator-neoclima-ptc-1100r"><span class="title">кондиционер основные средства Тепловентилятор Neoclima PTC06</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li class="large"><img src="photos/9047019d859c516eaff7f68bcdf19600.jpeg" alt="типы осевых вентиляторов Timberk TIH R1 5M Переносная тепловая пушка" title="типы осевых вентиляторов Timberk TIH R1 5M Переносная тепловая пушка"><div class="box" page="timberk-tih-r-m-perenosnaya-teplovaya-pushka-3940r"><span class="title">типы осевых вентиляторов Timberk TIH R1 5M Переносная тепловая пушка</span><p>от <span class="price">3940</span> руб.</p></div></li>
						<li class="large"><img src="photos/ea17d502d818fa1bac7491d11b492af6.jpeg" alt="комплектация кондиционера Комплект фильтров для очистителя воздуха Атмос-Вент-801" title="комплектация кондиционера Комплект фильтров для очистителя воздуха Атмос-Вент-801"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-150r"><span class="title">комплектация кондиционера Комплект фильтров для очистителя воздуха Атмос-Вент-801</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li class="large"><img src="photos/e90ec0ae7077f087cc1e72cdfa25c63c.jpeg" alt="кондиционер форд мондео Очиститель воздуха  Атмос Вент 1103" title="кондиционер форд мондео Очиститель воздуха  Атмос Вент 1103"><div class="box" page="ochistitel-vozduha-atmos-vent-3590r"><span class="title">кондиционер форд мондео Очиститель воздуха  Атмос Вент 1103</span><p>от <span class="price">3590</span> руб.</p></div></li>
						<li><img src="photos/3fd8db2e1066ded4c5fb06cb2660d011.jpeg" alt="эколайн инфракрасные обогреватели Увлажнитель-очиститель ZENET HDL-687" title="эколайн инфракрасные обогреватели Увлажнитель-очиститель ZENET HDL-687"><div class="box" page="uvlazhnitelochistitel-zenet-hdl-3950r"><span class="title">эколайн инфракрасные обогреватели Увлажнитель-очиститель ZENET HDL-687</span><p>от <span class="price">3950</span> руб.</p></div></li>
						<li><img src="photos/cad9340fab92aa85ffc59e5d750e5fa0.jpeg" alt="обогреватель с вентилятором Электрогрелка Beurer TM78" title="обогреватель с вентилятором Электрогрелка Beurer TM78"><div class="box" page="elektrogrelka-beurer-tm-1600r"><span class="title">обогреватель с вентилятором Электрогрелка Beurer TM78</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/3bdb9911998017ac69edb5fa940a23c9.jpeg" alt="выбор водонагревателя Аксессуар Beurer 140876 (вкладыш для грелки HK65 Relax)" title="выбор водонагревателя Аксессуар Beurer 140876 (вкладыш для грелки HK65 Relax)"><div class="box" page="aksessuar-beurer-vkladysh-dlya-grelki-hk-relax-600r"><span class="title">выбор водонагревателя Аксессуар Beurer 140876 (вкладыш для грелки HK65 Relax)</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/a5f8fe566b61ce24e2379ab4a0ae140e.jpeg" alt="водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC" title="водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC"><div class="box" page="elektrokamin-nastennyy-electrolux-efp-w-urc-13030r"><span class="title">водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC</span><p>от <span class="price">13030</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("teplovaya-zavesa-ballu-bhc-sr-6650r.php", 0, -4); if (file_exists("comments/teplovaya-zavesa-ballu-bhc-sr-6650r.php")) require_once "comments/teplovaya-zavesa-ballu-bhc-sr-6650r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="teplovaya-zavesa-ballu-bhc-sr-6650r.php" method="post" onsubmit="return checkForm(this)">
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