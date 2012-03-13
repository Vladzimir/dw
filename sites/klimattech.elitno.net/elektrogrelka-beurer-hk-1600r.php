<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektrogrelka-beurer-hk-1600r.php","воздушный вентилятор");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektrogrelka-beurer-hk-1600r.php", $nick, $comment);
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
		<title>воздушный вентилятор Электрогрелка Beurer HK40  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="воздушный вентилятор, разборка водонагревателя, электро конвекторы отопления, монтаж кондиционеров в москве, кондиционер для стирки, водонагреватели vaillant, водонагреватель садко, инфракрасные обогреватели уличные, крепление кондиционера, режим обогрева кондиционер, реле вентилятора печки, водонагреватель газовый vektor, тепловентилятор макар, компрессор кондиционера форд фокус,  инфракрасные обогреватели sinbo">
		<meta name="description" content="воздушный вентилятор В холодные времена года важно сохранять ноги в тепле, не дав простуде проникнуть...">
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
						<a class="photo" href="photos/0c87e320fea711307029c9c6aafea147.jpeg" title="воздушный вентилятор Электрогрелка Beurer HK40"><img src="photos/0c87e320fea711307029c9c6aafea147.jpeg" alt="воздушный вентилятор Электрогрелка Beurer HK40" title="воздушный вентилятор Электрогрелка Beurer HK40 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-comfort-9200r-2.php"><img src="photos/0267959fba6bfc5dff610262260ed5e1.jpeg" alt="разборка водонагревателя Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 1524" title="разборка водонагревателя Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 1524"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik  IR Comfort 1524</h2></li>
							<li><a href="http://klimattech.elitno.net/korotkovolnovyy-infrakrasnyy-obogrevatel-aeg-haustehnik-ir-premium-14500r.php"><img src="photos/c74e47e23d5ccda64c2ecf3f0a77dc13.jpeg" alt="электро конвекторы отопления Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000" title="электро конвекторы отопления Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000"></a><h2>Коротковолновый инфракрасный обогреватель AEG Haustehnik IR Premium 2000</h2></li>
							<li><a href="http://klimattech.elitno.net/srednevolnovyy-infrakrasnyy-obogrevatel-iwq-1900r.php"><img src="photos/67a6917e75e2d249213621846f6b966a.jpeg" alt="монтаж кондиционеров в москве Средневолновый инфракрасный обогреватель IWQ 120" title="монтаж кондиционеров в москве Средневолновый инфракрасный обогреватель IWQ 120"></a><h2>Средневолновый инфракрасный обогреватель IWQ 120</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>воздушный вентилятор Электрогрелка Beurer HK40</h1>
						<div class="tb"><p>Цена: от <span class="price">1600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_906.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>В холодные времена года важно сохранять ноги в тепле, не дав простуде проникнуть в ваш организм. <strong>Электрогрелка Beurer HK40 </strong>может стать вашим спутником, дарящим тепло и ощущение уюта. <strong>Beurer HK40 </strong>является абсолютно безопасной. Она оснащена функцией электронного управления и имеет три температурных режима. </p><p>Приятной особенностью данной модели является наличие дисплея с подсветкой и автоматическое отключение, защищающее устройство от перегрева. Имеет водонепроницаемый чехол, который можно стирать в стиральной машине.</p><p><strong>Особенности: </strong></p><ul type=disc><li>3 температурных режима <li>Функция быстрый нагрев <li>Автоотключение через 90 минут <li>Возможность машинной стирки <li>Грелка с влажным теплом <li>BSS система безопасности <li>Электронное управление <li>Работа от сети <li>Стирающийся чехол из хлопка </li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Питание: напряжение 220 В, частота 50 Гц <li>Мощность: 100 Вт <li>Размер: 300 х 400 мм</li></ul><p><strong>В комплект входит:</strong> основное устройство, инструкция.</p><p><strong>Производитель: </strong>Beurer (Германия)</p><p><strong>Гарантия: </strong>2 года</p> воздушный вентилятор</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/df83a32478b53e9d4c8710306a81f907.jpeg" alt="кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1" title="кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1"><div class="box" page="kondicioner-splitsistema-timberk-ac-tim-h-s-12460r"><span class="title">кондиционер для стирки Кондиционер сплит-система Timberk AC TIM 07H S1</span><p>от <span class="price">12460</span> руб.</p></div></li>
						<li><img src="photos/1ea7ff8c7ed815a8f66def82d7b1f7e5.jpeg" alt="водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R" title="водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R"><div class="box" page="maslyanyy-obogrevatel-atlanta-atnr-2390r"><span class="title">водонагреватели vaillant Масляный обогреватель Atlanta АТН-2006R</span><p>от <span class="price">2390</span> руб.</p></div></li>
						<li><img src="photos/67084118d5753838baadc3c476e16214.jpeg" alt="водонагреватель садко Тепловентилятор Neoclima FH-15" title="водонагреватель садко Тепловентилятор Neoclima FH-15"><div class="box" page="teploventilyator-neoclima-fh-700r"><span class="title">водонагреватель садко Тепловентилятор Neoclima FH-15</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/3476d3b7ddc26fb658316c5d977212a7.jpeg" alt="инфракрасные обогреватели уличные Тепловентилятор конвекторный Vitek VT-2141" title="инфракрасные обогреватели уличные Тепловентилятор конвекторный Vitek VT-2141"><div class="box" page="teploventilyator-konvektornyy-vitek-vt-2930r"><span class="title">инфракрасные обогреватели уличные Тепловентилятор конвекторный Vitek VT-2141</span><p>от <span class="price">2930</span> руб.</p></div></li>
						<li class="large"><img src="photos/18af774f568ebba05deb724cf8e7e7cb.jpeg" alt="крепление кондиционера Тепловая завеса Ballu BHC-6.000 SR" title="крепление кондиционера Тепловая завеса Ballu BHC-6.000 SR"><div class="box" page="teplovaya-zavesa-ballu-bhc-sr-6650r"><span class="title">крепление кондиционера Тепловая завеса Ballu BHC-6.000 SR</span><p>от <span class="price">6650</span> руб.</p></div></li>
						<li class="large"><img src="photos/0fada83330f8f908ee7f1c8b4ca94373.jpeg" alt="режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103" title="режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103"><div class="box" page="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosvent-360r"><span class="title">режим обогрева кондиционер Комплект фильтров для очистителя воздуха Атмос-Вент-1103</span><p>от <span class="price">360</span> руб.</p></div></li>
						<li class="large"><img src="photos/2fe8fc76cb7a8e6d1c449b297fc5d429.jpeg" alt="реле вентилятора печки Очиститель-ионизатор воздуха Ballu AP210F3" title="реле вентилятора печки Очиститель-ионизатор воздуха Ballu AP210F3"><div class="box" page="ochistitelionizator-vozduha-ballu-apf-4600r"><span class="title">реле вентилятора печки Очиститель-ионизатор воздуха Ballu AP210F3</span><p>от <span class="price">4600</span> руб.</p></div></li>
						<li><img src="photos/cb2bd36e5b426ebd6b01cac1b1667c9e.jpeg" alt="водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H" title="водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-ballu-uhbh-4170r"><span class="title">водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H</span><p>от <span class="price">4170</span> руб.</p></div></li>
						<li><img src="photos/ad594edcc30f90b13b1c901fc9da569a.jpeg" alt="тепловентилятор макар Ультразвуковой увлажнитель Electrolux EHU 5525D" title="тепловентилятор макар Ультразвуковой увлажнитель Electrolux EHU 5525D"><div class="box" page="ultrazvukovoy-uvlazhnitel-electrolux-ehu-d-7050r-2"><span class="title">тепловентилятор макар Ультразвуковой увлажнитель Electrolux EHU 5525D</span><p>от <span class="price">7050</span> руб.</p></div></li>
						<li><img src="photos/b96cf70721ff62fc726fbf7570b0c26e.jpeg" alt="компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301" title="компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301"><div class="box" page="uvlazhnitel-vozduha-redmond-rhf-3690r"><span class="title">компрессор кондиционера форд фокус Увлажнитель воздуха Redmond RHF-3301</span><p>от <span class="price">3690</span> руб.</p></div></li>
						<li><img src="photos/0f6ed4dc6b74c5c53cedb2ae4b3a2f27.jpeg" alt="вентилятор вытяжной канальный Электроодеяло Beurer HD90" title="вентилятор вытяжной канальный Электроодеяло Beurer HD90"><div class="box" page="elektroodeyalo-beurer-hd-3950r"><span class="title">вентилятор вытяжной канальный Электроодеяло Beurer HD90</span><p>от <span class="price">3950</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektrogrelka-beurer-hk-1600r.php", 0, -4); if (file_exists("comments/elektrogrelka-beurer-hk-1600r.php")) require_once "comments/elektrogrelka-beurer-hk-1600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektrogrelka-beurer-hk-1600r.php" method="post" onsubmit="return checkForm(this)">
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