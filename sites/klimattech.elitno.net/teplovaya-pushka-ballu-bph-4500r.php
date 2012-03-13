<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("teplovaya-pushka-ballu-bph-4500r.php","продажа водонагревателей");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("teplovaya-pushka-ballu-bph-4500r.php", $nick, $comment);
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
		<title>продажа водонагревателей Тепловая пушка Ballu BPH-5.000  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="продажа водонагревателей, изменение скорости вентилятора, вентиляторы москва, подшипник шкива кондиционера, водонагреватели газовые котлы, кондиционеры mitsubishi msc, вентилятор печки шевроле нива, замена ремня кондиционера, радиатор кондиционера тойота, неисправности дизельных тепловых пушек, напольный тепловентилятор, водонагреватель косвенного нагрева, ремонт кондиционеров минск, кондиционеры россии,  схема тепловых завес">
		<meta name="description" content="продажа водонагревателей Тепловая пушка Ballu BPH-5.000 – обогревающее устройство от ведущего производите...">
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
						<a class="photo" href="photos/a15f4e79a9ab78189c7570ce9332e0e2.jpeg" title="продажа водонагревателей Тепловая пушка Ballu BPH-5.000"><img src="photos/a15f4e79a9ab78189c7570ce9332e0e2.jpeg" alt="продажа водонагревателей Тепловая пушка Ballu BPH-5.000" title="продажа водонагревателей Тепловая пушка Ballu BPH-5.000 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-v-8250r.php"><img src="photos/29df31b1a80551ac8eb5421d8d609494.jpeg" alt="изменение скорости вентилятора Водонагреватель Timberk SWH FS3 50 V" title="изменение скорости вентилятора Водонагреватель Timberk SWH FS3 50 V"></a><h2>Водонагреватель Timberk SWH FS3 50 V</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-protochnyy-thermex-stream-combi-cr-2160r.php"><img src="photos/61644888826ed4288214b529bb8fcb31.jpeg" alt="вентиляторы москва Водонагреватель проточный Thermex 350 Stream (combi cr)" title="вентиляторы москва Водонагреватель проточный Thermex 350 Stream (combi cr)"></a><h2>Водонагреватель проточный Thermex 350 Stream (combi cr)</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-fh-2400r.php"><img src="photos/4d4e0371d8d0ed651ca8a5a344baf781.jpeg" alt="подшипник шкива кондиционера Масляный радиатор Timberk TOR FH" title="подшипник шкива кондиционера Масляный радиатор Timberk TOR FH"></a><h2>Масляный радиатор Timberk TOR FH</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>продажа водонагревателей Тепловая пушка Ballu BPH-5.000</h1>
						<div class="tb"><p>Цена: от <span class="price">4500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_6147.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Тепловая пушка Ballu </b><b>BPH-5.000 </b>– обогревающее устройство от ведущего производителя климатический техники, предназначенное для периодического или постоянного обогрева или просушки помещений разного назначения, это может быть магазин, мастерская, склад, гараж, кафе, киоск и др. Надежный и малошумный двигатель гарантирует долговечность их работы в любых условиях. Устойчивая ручка-подставка предполагает установку прибора в любом удобном месте. Нагревательным элементом в тепловой пушке служит высокоэффективный трубчатый ТЭН из нержавеющей стали, обеспечивающий быстрое достижение заданной температуры. Модель предусматривает ступенчатое регулирование мощности нагрева и возможность работы в режиме вентиляции. Терморегулятор и термостат категорически исключают возможность перегрева.</p><p><b>Особенности:</b></p><ul type=\disc\><li>Удобная система управления; </li><li>Режимы работы: вентиляция (без обогрева), вентиляция + частичный обогрев (мощность 2500 Вт), вентиляция + полный обогрев (мощность 5000 Вт); </li><li>Антикоррозионное покрытие; </li><li>Специальная ручка-подставка; </li><li>Надежный и бесшумный двигатель; </li><li>Возможность работы без нагрева; </li><li>Терморегулятор; </li><li>Двойная система тепловой защиты; </li><li>Современный дизайн; </li><li>Пожаробезопасность; </li><li>Длительный срок эксплуатации.</li></ul><p><b>Технические характеристики:</b></p><ul type=\disc\><li>Мощность ступеней: 0/2,5/4,5 кВт; </li><li>Производительность: 400 куб.м/час; </li><li>Нагревательный элемент: тэн/220; </li><li>Размеры: 39,5х42х34,5 см; </li><li>Вес: 7,5 кг.</li></ul><p><b></b></p><p><b>Производитель: </b>Ballu.</p><p><b>Гарантия: </b>2 года.</p> продажа водонагревателей</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d08a3769d6472d1c5dcfdd9b96e9984a.jpeg" alt="водонагреватели газовые котлы Масляный обогреватель  Atlanta АТН-2001" title="водонагреватели газовые котлы Масляный обогреватель  Atlanta АТН-2001"><div class="box"><a href="http://klimattech.elitno.net/maslyanyy-obogrevatel-atlanta-atn-1700r.php"><h3 class="title">водонагреватели газовые котлы Масляный обогреватель  Atlanta АТН-2001</h3><p>от <span class="price">1700</span> руб.</p></a></div></li>
						<li><img src="photos/1a98b0778506d9dd122d14b12759578e.jpeg" alt="кондиционеры mitsubishi msc Термометр цифровой  с большим дисплеем, дом-улица  RST comfort link, арт. 02402" title="кондиционеры mitsubishi msc Термометр цифровой  с большим дисплеем, дом-улица  RST comfort link, арт. 02402"><div class="box" page="termometr-cifrovoy-s-bolshim-displeem-domulica-rst-comfort-link-art-920r"><span class="title">кондиционеры mitsubishi msc Термометр цифровой  с большим дисплеем, дом-улица  RST comfort link, арт. 02402</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/61545de486a23a298d9b80e7b1e02ec9.jpeg" alt="вентилятор печки шевроле нива Термометр рамный RST 01588" title="вентилятор печки шевроле нива Термометр рамный RST 01588"><div class="box" page="termometr-ramnyy-rst-555r"><span class="title">вентилятор печки шевроле нива Термометр рамный RST 01588</span><p>от <span class="price">555</span> руб.</p></div></li>
						<li><img src="photos/b8fee8729e6225b37952d37bd9c110a9.jpeg" alt="замена ремня кондиционера Климатический комплекс Sharp KC-860E" title="замена ремня кондиционера Климатический комплекс Sharp KC-860E"><div class="box" page="klimaticheskiy-kompleks-sharp-kce-18400r"><span class="title">замена ремня кондиционера Климатический комплекс Sharp KC-860E</span><p>от <span class="price">18400</span> руб.</p></div></li>
						<li class="large"><img src="photos/2a798441d3a8079d87fa43127b95c04f.jpeg" alt="радиатор кондиционера тойота Очиститель воздуха  Атмос Вент 1501" title="радиатор кондиционера тойота Очиститель воздуха  Атмос Вент 1501"><div class="box" page="ochistitel-vozduha-atmos-vent-3300r"><span class="title">радиатор кондиционера тойота Очиститель воздуха  Атмос Вент 1501</span><p>от <span class="price">3300</span> руб.</p></div></li>
						<li class="large"><img src="photos/ed8414818b7c475649f027cd4302c512.jpeg" alt="неисправности дизельных тепловых пушек Очиститель воздуха Neoclima NAP-03 белый" title="неисправности дизельных тепловых пушек Очиститель воздуха Neoclima NAP-03 белый"><div class="box" page="ochistitel-vozduha-neoclima-nap-belyy-7650r"><span class="title">неисправности дизельных тепловых пушек Очиститель воздуха Neoclima NAP-03 белый</span><p>от <span class="price">7650</span> руб.</p></div></li>
						<li class="large"><img src="photos/ed20b32445a2986dff602bce8017d840.jpeg" alt="напольный тепловентилятор Увлажнитель воздуха Redmond RHF-3302" title="напольный тепловентилятор Увлажнитель воздуха Redmond RHF-3302"><div class="box" page="uvlazhnitel-vozduha-redmond-rhf-1990r"><span class="title">напольный тепловентилятор Увлажнитель воздуха Redmond RHF-3302</span><p>от <span class="price">1990</span> руб.</p></div></li>
						<li><img src="photos/1207fa1e309f2bbd09993c4a2e11b6cd.jpeg" alt="водонагреватель косвенного нагрева Увлажнитель ZENET 2760" title="водонагреватель косвенного нагрева Увлажнитель ZENET 2760"><div class="box" page="uvlazhnitel-zenet-1650r"><span class="title">водонагреватель косвенного нагрева Увлажнитель ZENET 2760</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/b1acb9ed9413521abfc46164dce8f49d.jpeg" alt="ремонт кондиционеров минск Мойка воздуха Boneco Air-O-Swiss 2055" title="ремонт кондиционеров минск Мойка воздуха Boneco Air-O-Swiss 2055"><div class="box" page="moyka-vozduha-boneco-airoswiss-13500r"><span class="title">ремонт кондиционеров минск Мойка воздуха Boneco Air-O-Swiss 2055</span><p>от <span class="price">13500</span> руб.</p></div></li>
						<li><img src="photos/4d6b2fff8611e7b3727f48fc3096f47f.jpeg" alt="кондиционеры россии Электрогрелка Beurer HKM60" title="кондиционеры россии Электрогрелка Beurer HKM60"><div class="box" page="elektrogrelka-beurer-hkm-2450r"><span class="title">кондиционеры россии Электрогрелка Beurer HKM60</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li><img src="photos/4dcae2ac49971cd164ffd59a570da502.jpeg" alt="тепловентиляторы промышленные Electrolux   EFP W - 1300RRC Электрокамин настенный" title="тепловентиляторы промышленные Electrolux   EFP W - 1300RRC Электрокамин настенный"><div class="box" page="electrolux-efp-w-rrc-elektrokamin-nastennyy-19630r"><span class="title">тепловентиляторы промышленные Electrolux   EFP W - 1300RRC Электрокамин настенный</span><p>от <span class="price">19630</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("teplovaya-pushka-ballu-bph-4500r.php", 0, -4); if (file_exists("comments/teplovaya-pushka-ballu-bph-4500r.php")) require_once "comments/teplovaya-pushka-ballu-bph-4500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="teplovaya-pushka-ballu-bph-4500r.php" method="post" onsubmit="return checkForm(this)">
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