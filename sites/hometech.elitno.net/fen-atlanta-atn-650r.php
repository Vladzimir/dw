<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atn-650r.php","плечевой массаж");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atn-650r.php", $nick, $comment);
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
		<title>плечевой массаж Фен Atlanta АТН-88  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="плечевой массаж, к чему бьется зеркало, стрижки мужские короткие машинкой, японская электробритва g ke, массаж верхних конечностей, боковое зеркало на тойоту, васичкин массаж, триммер для зоны бикини, зеркало файла, эксплуатация электронных весов, ионизатор воды купить, зеркала в доме, фен на аккумуляторах, зеркало души сочинение,  держатели для зеркал">
		<meta name="description" content="плечевой массаж Фен Atlanta АТН-88 – доступный прибор с эргономичным дизайном зеленого цвета для...">
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
						<a class="photo" href="photos/c8cf21dd7e22c1163270fc605333cbb1.jpeg" title="плечевой массаж Фен Atlanta АТН-88"><img src="photos/c8cf21dd7e22c1163270fc605333cbb1.jpeg" alt="плечевой массаж Фен Atlanta АТН-88" title="плечевой массаж Фен Atlanta АТН-88 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-2450r.php"><img src="photos/fc6f1a57986f092efd97a2c2ca581b49.jpeg" alt="к чему бьется зеркало Весы бытовые Tanita HD-366" title="к чему бьется зеркало Весы бытовые Tanita HD-366"></a><h2>Весы бытовые Tanita HD-366</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-ionic-ceramic-nanosilver-2480r.php"><img src="photos/480350ac2c02c08c2c9a122491ae6bbf.jpeg" alt="стрижки мужские короткие машинкой Выпрямитель Valera Ionic Ceramic Nanosilver 639.01" title="стрижки мужские короткие машинкой Выпрямитель Valera Ionic Ceramic Nanosilver 639.01"></a><h2>Выпрямитель Valera Ionic Ceramic Nanosilver 639.01</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-baby-mini-sxe-2800r.php"><img src="photos/29847e9db78defce39dc91ffe83f7262.jpeg" alt="японская электробритва g ke Стайлер Corioliss Baby Mini SXE" title="японская электробритва g ke Стайлер Corioliss Baby Mini SXE"></a><h2>Стайлер Corioliss Baby Mini SXE</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>плечевой массаж Фен Atlanta АТН-88</h1>
						<div class="tb"><p>Цена: от <span class="price">650</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19837.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-88 – доступный прибор с эргономичным дизайном зеленого цвета для сушки волос мощностью 1000 Вт. Имеет два уровня интенсивности сушки, три насадки и шнур с защитой от выкручивания. Не скользит в руках, благодаря специальному покрытию. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности. Снабжен петлей для подвешивания.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Эргономичный дизайн <li>Защита от перегрева <li>Два уровня интенсивности сушки <li>Режим холодного воздуха <li>Три насадки <li>Петля для подвешивания <li>Шнур с защитой от выкручивания <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует европейским нормам безопасности <li>Мощность 1000W <li>230V, 50Hz  </li></ul><p><strong>Производитель: США</strong></p> плечевой массаж</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/56ea5198cf9112db4bd99627fd631c61.jpeg" alt="массаж верхних конечностей Комплект насадок для КАРАТ ДЕ-212 Дарсонваль" title="массаж верхних конечностей Комплект насадок для КАРАТ ДЕ-212 Дарсонваль"><div class="box"><a href="http://hometech.elitno.net/komplekt-nasadok-dlya-karat-de-darsonval-1200r.php"><h3 class="title">массаж верхних конечностей Комплект насадок для КАРАТ ДЕ-212 Дарсонваль</h3><p>от <span class="price">1200</span> руб.</p></a></div></li>
						<li><img src="photos/b6bb344823584f3fea6f0061dd2edab6.jpeg" alt="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль" title="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-nosovaya-dlya-karat-de-darsonval-300r"><span class="title">боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/74f70e120db119bda19c14b1cbcdb902.jpeg" alt="васичкин массаж Зеркало настольное Rosenberg S-2085" title="васичкин массаж Зеркало настольное Rosenberg S-2085"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-890r-2"><span class="title">васичкин массаж Зеркало настольное Rosenberg S-2085</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/ca66537608944cd4881ffac56a0a3e8e.jpeg" alt="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита" title="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита"><div class="box" page="balzam-dlya-irrigatora-donfeel-profilaktika-parodontoza-i-gingivita-180r"><span class="title">триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита</span><p>от <span class="price">180</span> руб.</p></div></li>
						<li class="large"><img src="photos/31d1296e38d1ca863ab760e3b8349da7.jpeg" alt="зеркало файла Раскладной массажный стол US Medica Tokyo линейка Sumo Line" title="зеркало файла Раскладной массажный стол US Medica Tokyo линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-tokyo-lineyka-sumo-line-27900r"><span class="title">зеркало файла Раскладной массажный стол US Medica Tokyo линейка Sumo Line</span><p>от <span class="price">27900</span> руб.</p></div></li>
						<li class="large"><img src="photos/80751e023e3ff12de485090c14fbecdd.jpeg" alt="эксплуатация электронных весов Валик под шею L35D9 USM-010" title="эксплуатация электронных весов Валик под шею L35D9 USM-010"><div class="box" page="valik-pod-sheyu-ld-usm-1000r"><span class="title">эксплуатация электронных весов Валик под шею L35D9 USM-010</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li class="large"><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/268da259ea6cd611200b950164247b1d.jpeg" alt="зеркала в доме Машинка для стрижки Atlanta АТН-859" title="зеркала в доме Машинка для стрижки Atlanta АТН-859"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-490r"><span class="title">зеркала в доме Машинка для стрижки Atlanta АТН-859</span><p>от <span class="price">490</span> руб.</p></div></li>
						<li><img src="photos/9eba2371b26d150a840e7f4a6794703c.jpeg" alt="фен на аккумуляторах Солярий для лица Efbe-Schott 834" title="фен на аккумуляторах Солярий для лица Efbe-Schott 834"><div class="box" page="solyariy-dlya-lica-efbeschott-4300r"><span class="title">фен на аккумуляторах Солярий для лица Efbe-Schott 834</span><p>от <span class="price">4300</span> руб.</p></div></li>
						<li><img src="photos/dfca6661a960b0148f92eb426cc1620d.jpeg" alt="зеркало души сочинение Лазерный эпилятор Rio X60, портативный со сканирующей функцией" title="зеркало души сочинение Лазерный эпилятор Rio X60, портативный со сканирующей функцией"><div class="box" page="lazernyy-epilyator-rio-x-portativnyy-so-skaniruyuschey-funkciey-2900r"><span class="title">зеркало души сочинение Лазерный эпилятор Rio X60, портативный со сканирующей функцией</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/bfdb0c6dda6fe1a181ec398c6a034691.jpeg" alt="обзор электробритв Лосьон после депиляции Rica, с экстрактом алоэ-вера 250мл" title="обзор электробритв Лосьон после депиляции Rica, с экстрактом алоэ-вера 250мл"><div class="box" page="loson-posle-depilyacii-rica-s-ekstraktom-aloevera-ml-600r"><span class="title">обзор электробритв Лосьон после депиляции Rica, с экстрактом алоэ-вера 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atn-650r.php", 0, -4); if (file_exists("comments/fen-atlanta-atn-650r.php")) require_once "comments/fen-atlanta-atn-650r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atn-650r.php" method="post" onsubmit="return checkForm(this)">
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