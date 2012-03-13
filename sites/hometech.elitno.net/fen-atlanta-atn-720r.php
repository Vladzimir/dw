<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atn-720r.php","массаж октябрьское поле");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atn-720r.php", $nick, $comment);
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
		<title>массаж октябрьское поле Фен Atlanta АТН-864  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж октябрьское поле, модели дарсонваль, ректальное зеркало, круглосуточный солярий, институт массажа и косметологии, токовое зеркало, подглядывание в солярии, где научиться массажу, триммер для женщин, набор для выпрямления волос, химическая завивка волос крупные локоны, серебряный ионизатор для воды, дрель для маникюра и педикюра, комоды с зеркалом фото,  зеркало горизонтальное">
		<meta name="description" content="массаж октябрьское поле Фен Atlanta АТН-864 – стильный и доступный прибор черного цвета для сушки волос ...">
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
						<a class="photo" href="photos/9b24354d91fc7d0efe4ae6ea4a04db99.jpeg" title="массаж октябрьское поле Фен Atlanta АТН-864"><img src="photos/9b24354d91fc7d0efe4ae6ea4a04db99.jpeg" alt="массаж октябрьское поле Фен Atlanta АТН-864" title="массаж октябрьское поле Фен Atlanta АТН-864 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/gezanne-gezatone-esg-vesy-napolnye-s-opredeleniem-strukturnogo-sostava-tela-1400r.php"><img src="photos/31cc855160f557432254f6c738cb3ac2.jpeg" alt="модели дарсонваль Gezanne Gezatone ESG2805 Весы напольные с определением структурного состава тела" title="модели дарсонваль Gezanne Gezatone ESG2805 Весы напольные с определением структурного состава тела"></a><h2>Gezanne Gezatone ESG2805 Весы напольные с определением структурного состава тела</h2></li>
							<li><a href="http://hometech.elitno.net/nabor-dlya-pedikyura-ped-egg-red-egg-300r.php"><img src="photos/9245f68f4f84fd4f77a399b1043302af.jpeg" alt="ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)" title="ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)"></a><h2>Набор для педикюра Пед Эгг (Реd Egg)</h2></li>
							<li><a href="http://hometech.elitno.net/raskladnoy-massazhnyy-stol-us-medica-samurai-lineyka-sumo-line-10900r.php"><img src="photos/a773900794ca3cfff643e6a1344e2568.jpeg" alt="круглосуточный солярий Раскладной массажный стол US Medica Samurai линейка Sumo Line" title="круглосуточный солярий Раскладной массажный стол US Medica Samurai линейка Sumo Line"></a><h2>Раскладной массажный стол US Medica Samurai линейка Sumo Line</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж октябрьское поле Фен Atlanta АТН-864</h1>
						<div class="tb"><p>Цена: от <span class="price">720</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19826.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-864 – стильный и доступный прибор черного цвета для сушки волос мощностью 2000 Вт, со складывающейся ручкой. Имеет два уровня интенсивности сушки и шнур с защитой от выкручивания. Не скользит в руках, благодаря специальному покрытию. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Защита от перегрева; <li>Два уровня интенсивности сушки; <li>Специальное противоскользящие покрытие; <li>Соответствует американским и европейским нормам безопасности; <li>Мощность 2000W; <li>230V, 50Hz <li>31 х 9.5 х 27 см </li></ul><p><strong>Производитель: США</strong></p>ой от выкручивания. массаж октябрьское поле</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/abde1a7164344d09d53992486a50887a.jpeg" alt="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA" title="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-malibu-lineyka-spa-31500r"><span class="title">институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA</span><p>от <span class="price">31500</span> руб.</p></div></li>
						<li><img src="photos/4fee583b28523356ab511a1884e9a027.jpeg" alt="токовое зеркало Миостимулятор Beurer EM80" title="токовое зеркало Миостимулятор Beurer EM80"><div class="box" page="miostimulyator-beurer-em-3500r"><span class="title">токовое зеркало Миостимулятор Beurer EM80</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li><img src="photos/92c16d267d16556f4f9df2ed4ab4d8db.jpeg" alt="подглядывание в солярии Аппликатор Ляпко Шанс 4,9" title="подглядывание в солярии Аппликатор Ляпко Шанс 4,9"><div class="box" page="applikator-lyapko-shans-760r"><span class="title">подглядывание в солярии Аппликатор Ляпко Шанс 4,9</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/921b5abf5fd22743c43409e559d706e6.jpeg" alt="где научиться массажу Гидромассажер для ванны Sanitas SLS 30" title="где научиться массажу Гидромассажер для ванны Sanitas SLS 30"><div class="box" page="gidromassazher-dlya-vanny-sanitas-sls-3500r"><span class="title">где научиться массажу Гидромассажер для ванны Sanitas SLS 30</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li class="large"><img src="photos/009fd98d06242ce12bfb8e391acb85ea.jpeg" alt="триммер для женщин Массажер-подушка Gezatone AMG392 1301100" title="триммер для женщин Массажер-подушка Gezatone AMG392 1301100"><div class="box" page="massazherpodushka-gezatone-amg-2490r"><span class="title">триммер для женщин Массажер-подушка Gezatone AMG392 1301100</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li class="large"><img src="photos/782aa0f31386fb09629ab9ef5d11ebc4.jpeg" alt="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)" title="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)"><div class="box" page="massazher-dlya-profilaktiki-varikoza-aviafit-sht-3000r"><span class="title">набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li class="large"><img src="photos/5811756c6fd41ce9cafcc5b01b7c35da.jpeg" alt="химическая завивка волос крупные локоны Машинка для депиляции и стрижки волос и бороды beauty and health (Триммер Just a Trim)" title="химическая завивка волос крупные локоны Машинка для депиляции и стрижки волос и бороды beauty and health (Триммер Just a Trim)"><div class="box" page="mashinka-dlya-depilyacii-i-strizhki-volos-i-borody-beauty-and-health-trimmer-just-a-trim-690r"><span class="title">химическая завивка волос крупные локоны Машинка для депиляции и стрижки волос и бороды beauty and health (Триммер Just a Trim)</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/8676d0e4c45969a1bbeebba6cd9d6f4f.jpeg" alt="серебряный ионизатор для воды Солярий для лица Efbe-Schott 838" title="серебряный ионизатор для воды Солярий для лица Efbe-Schott 838"><div class="box" page="solyariy-dlya-lica-efbeschott-7000r"><span class="title">серебряный ионизатор для воды Солярий для лица Efbe-Schott 838</span><p>от <span class="price">7000</span> руб.</p></div></li>
						<li><img src="photos/28886b03e89546aaad247ad2b7068c95.jpeg" alt="дрель для маникюра и педикюра Фен Vitek VT-2264 Diamond" title="дрель для маникюра и педикюра Фен Vitek VT-2264 Diamond"><div class="box" page="fen-vitek-vt-diamond-1200r"><span class="title">дрель для маникюра и педикюра Фен Vitek VT-2264 Diamond</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/65ef91f9e39ae9c8e58e13820442b2ca.jpeg" alt="комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2" title="комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2"><div class="box" page="nasadka-dlya-detskoy-zubnoy-schetki-braun-eb-550r"><span class="title">комоды с зеркалом фото Насадка для детской зубной щетки BRAUN EB10-2</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/6e5d590192a5181703e803b0b6645d0c.jpeg" alt="игры салон красоты маникюр педикюр Зубная щётка OMRON Sonic Style 450 (HT-B450-E)" title="игры салон красоты маникюр педикюр Зубная щётка OMRON Sonic Style 450 (HT-B450-E)"><div class="box" page="zubnaya-schetka-omron-sonic-style-htbe-3000r"><span class="title">игры салон красоты маникюр педикюр Зубная щётка OMRON Sonic Style 450 (HT-B450-E)</span><p>от <span class="price">3000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atn-720r.php", 0, -4); if (file_exists("comments/fen-atlanta-atn-720r.php")) require_once "comments/fen-atlanta-atn-720r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atn-720r.php" method="post" onsubmit="return checkForm(this)">
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