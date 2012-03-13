<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vesy-elektronnye-napolnye-beurer-gs-spiegelled-steklo-2600r.php","фен panasonic");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vesy-elektronnye-napolnye-beurer-gs-spiegelled-steklo-2600r.php", $nick, $comment);
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
		<title>фен panasonic Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="фен panasonic, камера в зеркале, экзотический массаж, дарсонваль для лица, солярий для дома, гадание на свечах и зеркале, хромированные зеркала, ионизатор воды купить, модели фенов, самостоятельный массаж лица, бигуди на голове, дрель для маникюра и педикюра, солярий в новосибирске, массаж в астане,  бирюков массаж">
		<meta name="description" content="фен panasonic Модель Beurer GS46 Spiegel-LED представляет собой весы с зеркальным светодиодом,...">
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
						<a class="photo" href="photos/648e5c85fd28c2211dee143be1d4f432.jpeg" title="фен panasonic Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)"><img src="photos/648e5c85fd28c2211dee143be1d4f432.jpeg" alt="фен panasonic Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)" title="фен panasonic Весы электронные напольные Beurer GS46 Spiegel-LED (стекло) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-esc-3290r.php"><img src="photos/df863701f3cd17b55cc8ae2e380269e1.jpeg" alt="камера в зеркале Выпрямитель для волос Braun ES3-C" title="камера в зеркале Выпрямитель для волос Braun ES3-C"></a><h2>Выпрямитель для волос Braun ES3-C</h2></li>
							<li><a href="http://hometech.elitno.net/parodontologicheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php"><img src="photos/2d366b96963f05922aa6b4a18209076a.jpeg" alt="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"></a><h2>Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</h2></li>
							<li><a href="http://hometech.elitno.net/raskladnoy-massazhnyy-stol-us-medica-titan-lineyka-spa-34000r.php"><img src="photos/fe041902a5ae67f02c11b97827de200a.jpeg" alt="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA" title="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA"></a><h2>Раскладной массажный стол US Medica Titan линейка SPA</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>фен panasonic Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)</h1>
						<div class="tb"><p>Цена: от <span class="price">2600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1026.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Модель </b><b>Beurer </b><b>GS46 </b><b>Spiegel-</b><b>LED</b> представляет собой весы с зеркальным светодиодом, который встроен в дисплей. Дизайнерское решение, цветовая гамма металлик и, конечно, зеркальный эффект светящихся цифр обращает на себя внимание. Платформа весов выполнена из высококачественной нержавеющей стали и имеет покрытие Antifingerprint, которые защищает весы от некрасивых отпечатков пальцев.</p><p><b>Технические характеристики:</b></p><ul><li>Материал корпуса: стекло+металл <li>LED дисплей с зеркальным эффектом <li>Размер платформы: 320 x 320 мм <li>Высота цифр: 30 мм <li>Цена деления: 100 г <li>Предел взвешивания: 150 кг</li></ul><p><b>Производитель:</b> Beurer (Германия)</p><p><b>Гарантия:</b> 3 года</p> фен panasonic</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ce6a955d13728ae3fcdf117ddcdd8d60.jpeg" alt="солярий для дома Массажное кресло Yamaguchi YA-2500" title="солярий для дома Массажное кресло Yamaguchi YA-2500"><div class="box" page="massazhnoe-kreslo-yamaguchi-ya-210000r"><span class="title">солярий для дома Массажное кресло Yamaguchi YA-2500</span><p>от <span class="price">210000</span> руб.</p></div></li>
						<li><img src="photos/baa708c812902442c1208631338bc40c.jpeg" alt="гадание на свечах и зеркале Массажер для тела с ИК прогревом и съемной ручкой Gezatone AMG105 1301059" title="гадание на свечах и зеркале Массажер для тела с ИК прогревом и съемной ручкой Gezatone AMG105 1301059"><div class="box" page="massazher-dlya-tela-s-ik-progrevom-i-semnoy-ruchkoy-gezatone-amg-2200r"><span class="title">гадание на свечах и зеркале Массажер для тела с ИК прогревом и съемной ручкой Gezatone AMG105 1301059</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/eb869f90a5f3f5c904615d9c1da045f4.jpeg" alt="хромированные зеркала Гидромассажная ванночка с турбо-массажем Laica BF2011" title="хромированные зеркала Гидромассажная ванночка с турбо-массажем Laica BF2011"><div class="box" page="gidromassazhnaya-vannochka-s-turbomassazhem-laica-bf-4000r"><span class="title">хромированные зеркала Гидромассажная ванночка с турбо-массажем Laica BF2011</span><p>от <span class="price">4000</span> руб.</p></div></li>
						<li><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li class="large"><img src="photos/d6d662f1051663df0b15aa06e33f4f63.jpeg" alt="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365" title="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-ionicultratonic-m-2100r"><span class="title">модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365</span><p>от <span class="price">2100</span> руб.</p></div></li>
						<li class="large"><img src="photos/ae9da361619c92f9a8cf3fb8e35d98ca.jpeg" alt="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг" title="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг"><div class="box" page="corioliss-brush-collection-ionnyy-termobrashing-630r"><span class="title">самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li class="large"><img src="photos/fcd83a4c7808450baa40295368adf3c5.jpeg" alt="бигуди на голове Гель перед депиляцией Rica, с экстрактом хлопка 250мл" title="бигуди на голове Гель перед депиляцией Rica, с экстрактом хлопка 250мл"><div class="box" page="gel-pered-depilyaciey-rica-s-ekstraktom-hlopka-ml-600r"><span class="title">бигуди на голове Гель перед депиляцией Rica, с экстрактом хлопка 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/28886b03e89546aaad247ad2b7068c95.jpeg" alt="дрель для маникюра и педикюра Фен Vitek VT-2264 Diamond" title="дрель для маникюра и педикюра Фен Vitek VT-2264 Diamond"><div class="box" page="fen-vitek-vt-diamond-1200r"><span class="title">дрель для маникюра и педикюра Фен Vitek VT-2264 Diamond</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/f98698f167b448092a3ab477739f68fd.jpeg" alt="солярий в новосибирске Фен Braun HD710" title="солярий в новосибирске Фен Braun HD710"><div class="box" page="fen-braun-hd-2240r"><span class="title">солярий в новосибирске Фен Braun HD710</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/1ed3782a761a5615bc41cb19f8a9861f.jpeg" alt="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph" title="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph"><div class="box" page="zubnaya-schetka-braun-d-dx-triumph-7540r"><span class="title">массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph</span><p>от <span class="price">7540</span> руб.</p></div></li>
						<li><img src="photos/d9d4dc3f414993bdfe85b748c627ab41.jpeg" alt="машинка для стрижки ровента Зубная щетка звуковая Omron Sonic Style 458" title="машинка для стрижки ровента Зубная щетка звуковая Omron Sonic Style 458"><div class="box" page="zubnaya-schetka-zvukovaya-omron-sonic-style-4500r"><span class="title">машинка для стрижки ровента Зубная щетка звуковая Omron Sonic Style 458</span><p>от <span class="price">4500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vesy-elektronnye-napolnye-beurer-gs-spiegelled-steklo-2600r.php", 0, -4); if (file_exists("comments/vesy-elektronnye-napolnye-beurer-gs-spiegelled-steklo-2600r.php")) require_once "comments/vesy-elektronnye-napolnye-beurer-gs-spiegelled-steklo-2600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vesy-elektronnye-napolnye-beurer-gs-spiegelled-steklo-2600r.php" method="post" onsubmit="return checkForm(this)">
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