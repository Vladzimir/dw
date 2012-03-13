<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kondicioner-splitsistema-timberk-ac-tim-h-s-15750r.php","аренда кондиционеров");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kondicioner-splitsistema-timberk-ac-tim-h-s-15750r.php", $nick, $comment);
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
		<title>аренда кондиционеров Кондиционер сплит-система Timberk AC TIM 12H S1  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="аренда кондиционеров, скорость вентилятора видеокарты, как использовать кондиционер, вентилятор в ванную комнату, газовый водонагреватель оазис, масляный обогреватель радиатор, крышка вентилятора, метеостанции интернет магазин, газовые обогреватели для дома, инфракрасные обогреватели вред, как работает конвектор, осевой вентилятор купить, проточный водонагреватель цена, как отключить вентилятор,  тепловентиляторы промышленные">
		<meta name="description" content="аренда кондиционеров Кондиционер сплит-система от шведского производителя состоит из внутреннего и на...">
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
						<a class="photo" href="photos/e771907fa85b93a2ee983a348ab4049a.jpeg" title="аренда кондиционеров Кондиционер сплит-система Timberk AC TIM 12H S1"><img src="photos/e771907fa85b93a2ee983a348ab4049a.jpeg" alt="аренда кондиционеров Кондиционер сплит-система Timberk AC TIM 12H S1" title="аренда кондиционеров Кондиционер сплит-система Timberk AC TIM 12H S1 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-3750r.php"><img src="photos/aeb291a43491375be6474e281a07e1e2.jpeg" alt="скорость вентилятора видеокарты Водонагреватель Neoclima EWH 25" title="скорость вентилятора видеокарты Водонагреватель Neoclima EWH 25"></a><h2>Водонагреватель Neoclima EWH 25</h2></li>
							<li><a href="http://klimattech.elitno.net/infrakrasnyy-obogrevatel-neoclima-2400r.php"><img src="photos/682d503f2c4b2e3e1fd33b985785ee9f.jpeg" alt="как использовать кондиционер Инфракрасный обогреватель Neoclima" title="как использовать кондиционер Инфракрасный обогреватель Neoclima"></a><h2>Инфракрасный обогреватель Neoclima</h2></li>
							<li><a href="http://klimattech.elitno.net/plastikovye-nozhki-ensto-ephbas-400r.php"><img src="photos/fe7102f397a7d18b0f5c13253f05e801.jpeg" alt="вентилятор в ванную комнату Пластиковые ножки Ensto EPHBAS1" title="вентилятор в ванную комнату Пластиковые ножки Ensto EPHBAS1"></a><h2>Пластиковые ножки Ensto EPHBAS1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>аренда кондиционеров Кондиционер сплит-система Timberk AC TIM 12H S1</h1>
						<div class="tb"><p>Цена: от <span class="price">15750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12825.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Кондиционер сплит-система от шведского производителя состоит из внутреннего и наружного блоков, работающих на озонобезопасном фреоне R410A. Модель функционирует в четырех различных режимах: охлаждение, обогрев, вентиляция и независимое осушение.</p><p>Среди достоинств можно отметить: бесшумность, систему самодиагностики, удобный LED дисплей и внутрирельефную систему медных трубок, особое строение которой обеспечивает равномерное течение хладагента. Система легко монтируется и демонтируется, имеет интуитивно понятное управление и не требует особого ухода.</p><p><b>Важные особенности:</b></p><ul type=disc><li>озонобезопасный фреон R410A <li>японский компрессор Toshiba <li>ионизатор <li>дополнительный Ion-Silver фильтр <li>многофункциональный LED дисплей</li></ul><p><b>Особенности:</b></p><ul type=disc><li>4 режима работы (Охлаждение, Обогрев - при 7°С, Вентиляция, Независимое осушение) <li>Активный карбоновый фильтр <li>Режимы Intellect Auto, Night Care, Intellect Intensive, Econom <li>Разнонаправленный воздушный поток <li>Таймер включения/выключения <li>Бесшумная работа <li>Наивысший класс энергоэффективности А <li>Автоматический перезапуск <li>Система самодиагностики и защиты <li>Внутрирельефная система медных трубок (медные трубки с внутренними канавками трапецеидальной формы обеспечивают равномерное течение хладагента, увеличивают эффективность теплообмена и снижают энергопотребление) <li>Высокоэффективная форма теплообменника (многорельефные изгибы) <li>Гидрофильная поверхность алюминиевых секций <li>Простейший монтаж: лево/право- стороннее подключение фреоновых труб <li>Широкоугольные жалюзи для увеличения воздушного потока <li>Интеллектуальный пульт дистанционного управления со встроенным блоком памяти <li>Защита от перепадов напряжения (от 185 до 225 В) <li>Микрокомпьютерный контроль (Multi-чип) <li>AntiRust: противокоррозийное покрытие внешнего блока <li>Моющаяся глянцевая панель внутреннего блока <li>Функция блокировки <li>Управляемое направление потока воздуха, разностороннее направление потока <li>Автоматическая разморозка <li>Защита от холодного воздушного потока в режиме обогрева <li>Комфортная опция температурной компенсации</li></ul><p><b>Технические характеристики: </b></p><table border=1 cellspacing=0 cellpadding=0><tbody><tr><td valign=top width=213><p>Название</p></td><td valign=top width=213><p>AC TIM 12H S1-01 (внешний блок)</p></td><td valign=top width=213><p>AC TIM 12H S1 (внутренний блок)</p></td></tr><tr><td valign=top width=213><p>Хладагент</p></td><td valign=top width=213><p>410 A</p></td><td valign=top width=213><p>410 А</p></td></tr><tr><td valign=top width=213><p>Предельное рабочее давление на выходе, мПа</p></td><td valign=top width=213><p>4,2</p></td><td valign=top width=213><p>4,2</p></td></tr><tr><td valign=top width=213><p>Предельное рабочее давление на входе, мПа</p></td><td valign=top width=213><p>1,5</p></td><td valign=top width=213><p>1,5</p></td></tr><tr><td valign=top width=213><p>Электропитание, В/ Гц, л.с.</p></td><td valign=top width=213><p>220-240/ 50, 1</p></td><td valign=top width=213><p>220-240/ 50, 1</p></td></tr><tr><td valign=top width=213><p>Марка компрессора</p></td><td valign=top width=213><p>TOSHIBA ROTARY</p></td><td valign=top width=213><p>TOSHIBA ROTARY</p></td></tr><tr><td valign=top width=213><p>Коэффициент EER</p></td><td valign=top width=213><p>3.01</p></td><td valign=top width=213><p>3,01</p></td></tr><tr><td valign=top width=213><p>Габаритные размеры (ВхШхГ), мм</p></td><td valign=top width=213><p>700х235х535</p></td><td valign=top width=213><p>790х190х275</p></td></tr><tr><td valign=top width=213><p>Вес (нетто), кг</p></td><td valign=top width=213><p>24,5</p></td><td valign=top width=213><p>9</p></td></tr><tr><td valign=top width=213><p>Выходная мощность в режиме охлаждения, BTU/H</p></td><td valign=top width=213><p>12000</p></td><td valign=top width=213><p>12000</p></td></tr><tr><td valign=top width=213><p>Мощность обогрева, BTU/H</p></td><td valign=top width=213><p>12500</p></td><td valign=top width=213><p>12500</p></td></tr><tr><td valign=top width=213><p>Потребляемая мощность (охлаждение), Вт</p></td><td valign=top width=213></td><td valign=top width=213><p>1165</p></td></tr><tr><td valign=top width=213><p>Потребляемая мощность (обогрев), Вт</p></td><td valign=top width=213></td><td valign=top width=213><p>1070</p></td></tr><tr><td valign=top width=213><p>Потребляемая сила тока (охлаждение), А</p></td><td valign=top width=213></td><td valign=top width=213><p>5,2</p></td></tr><tr><td valign=top width=213><p>Потребляемая сила тока (обогрев), А</p></td><td valign=top width=213></td><td valign=top width=213><p>4,6</p></td></tr><tr><td valign=top width=213><p>Номинальная сила тока, А</p></td><td valign=top width=213><p>8,0</p></td><td valign=top width=213><p>8,0</p></td></tr><tr><td valign=top width=213><p>Номинальная мощность, Вт</p></td><td valign=top width=213><p>1500</p></td><td valign=top width=213><p>1500</p></td></tr></tbody></table><p><b>Производитель:</b> Timberk.</p><p><b>Страна:</b> Швеция.</p><p><b>Гарантия: </b>30 месяцев.</p> аренда кондиционеров</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d5f7183bbf44508345cc80372aab5df3.jpeg" alt="газовый водонагреватель оазис Конвектор Timberk TEC.E1 E 1500" title="газовый водонагреватель оазис Конвектор Timberk TEC.E1 E 1500"><div class="box" page="konvektor-timberk-tece-e-2750r"><span class="title">газовый водонагреватель оазис Конвектор Timberk TEC.E1 E 1500</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/fd20bcd726977fbfba1823f40dec4b7d.jpeg" alt="масляный обогреватель радиатор Радиатор масляный Timberk TOR 21.2512 ER I" title="масляный обогреватель радиатор Радиатор масляный Timberk TOR 21.2512 ER I"><div class="box" page="radiator-maslyanyy-timberk-tor-er-i-2810r"><span class="title">масляный обогреватель радиатор Радиатор масляный Timberk TOR 21.2512 ER I</span><p>от <span class="price">2810</span> руб.</p></div></li>
						<li><img src="photos/e576fcb2cb03509d293e70696e451674.jpeg" alt="крышка вентилятора Барометр RST 05295 Роза ветров" title="крышка вентилятора Барометр RST 05295 Роза ветров"><div class="box" page="barometr-rst-roza-vetrov-1500r"><span class="title">крышка вентилятора Барометр RST 05295 Роза ветров</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/6ce8f25c21488d1ca444328673c0a09c.jpeg" alt="метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555" title="метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555"><div class="box" page="pogodnaya-cifrovaya-barometricheskaya-stanciya-s-radiodatchikom-rst-meteo-link-art-2230r"><span class="title">метеостанции интернет магазин Погодная цифровая барометрическая  станция с радиодатчиком RST  Meteo Link, арт. 02555</span><p>от <span class="price">2230</span> руб.</p></div></li>
						<li class="large"><img src="photos/1678b72db68c6229f134eb565404d6f9.jpeg" alt="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»" title="газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»"><div class="box" page="obogrevatel-barhatnyy-sezon-«svechi»-880r"><span class="title">газовые обогреватели для дома Обогреватель Бархатный сезон «Свечи»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/f06cbcf8fc84e22661b7889248dc2d8e.jpeg" alt="инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06" title="инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06"><div class="box" page="teploventilyator-neoclima-fh-650r"><span class="title">инфракрасные обогреватели вред Тепловентилятор Neoclima FH-06</span><p>от <span class="price">650</span> руб.</p></div></li>
						<li class="large"><img src="photos/db962f688bccf711071d0d6ec827ae46.jpeg" alt="как работает конвектор Тепловентилятор керамический Vitesse VS-881" title="как работает конвектор Тепловентилятор керамический Vitesse VS-881"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-2970r"><span class="title">как работает конвектор Тепловентилятор керамический Vitesse VS-881</span><p>от <span class="price">2970</span> руб.</p></div></li>
						<li><img src="photos/c677cbdf547effa33ccd59c33757d17d.jpeg" alt="осевой вентилятор купить Тепловая завеса Ballu BHC-3.000 SB" title="осевой вентилятор купить Тепловая завеса Ballu BHC-3.000 SB"><div class="box" page="teplovaya-zavesa-ballu-bhc-sb-3260r"><span class="title">осевой вентилятор купить Тепловая завеса Ballu BHC-3.000 SB</span><p>от <span class="price">3260</span> руб.</p></div></li>
						<li><img src="photos/ebd821f20caa9cb3fffbcb55a472e7fe.jpeg" alt="проточный водонагреватель цена Комплект фильтров для очистителя воздуха Атмос-Макси" title="проточный водонагреватель цена Комплект фильтров для очистителя воздуха Атмос-Макси"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-960r"><span class="title">проточный водонагреватель цена Комплект фильтров для очистителя воздуха Атмос-Макси</span><p>от <span class="price">960</span> руб.</p></div></li>
						<li><img src="photos/8ed3b3f7fabf8b6c841acf2dff5bea4a.jpeg" alt="как отключить вентилятор Комбайн воздуха ZENET BS-188AE-CW" title="как отключить вентилятор Комбайн воздуха ZENET BS-188AE-CW"><div class="box" page="kombayn-vozduha-zenet-bsaecw-8950r"><span class="title">как отключить вентилятор Комбайн воздуха ZENET BS-188AE-CW</span><p>от <span class="price">8950</span> руб.</p></div></li>
						<li><img src="photos/555884c9ed995600df4b44cdeff2c84a.jpeg" alt="тепловые пушки elitech Электрокамин напольный  Electrolux  EFP F - 200RC" title="тепловые пушки elitech Электрокамин напольный  Electrolux  EFP F - 200RC"><div class="box" page="elektrokamin-napolnyy-electrolux-efp-f-rc-9730r"><span class="title">тепловые пушки elitech Электрокамин напольный  Electrolux  EFP F - 200RC</span><p>от <span class="price">9730</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kondicioner-splitsistema-timberk-ac-tim-h-s-15750r.php", 0, -4); if (file_exists("comments/kondicioner-splitsistema-timberk-ac-tim-h-s-15750r.php")) require_once "comments/kondicioner-splitsistema-timberk-ac-tim-h-s-15750r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kondicioner-splitsistema-timberk-ac-tim-h-s-15750r.php" method="post" onsubmit="return checkForm(this)">
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