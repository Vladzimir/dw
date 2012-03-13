<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vosk-dlya-depilyacii-rica-rozovyy-s-dioksidom-titana-v-kartridzhe-ml-150r.php","зеркало москвич");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vosk-dlya-depilyacii-rica-rozovyy-s-dioksidom-titana-v-kartridzhe-ml-150r.php", $nick, $comment);
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
		<title>зеркало москвич Воск для депиляции Rica, розовый с диоксидом титана в картридже 100 мл  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="зеркало москвич, маникюр педикюр стоимость, что значит зеркало, зеркало mitsubishi, курсы массажа в нижнем, массаж веником, фокин массаж, массаж и трах, солярий тюмень, монолог зеркала, электробритвы мужские купить, скульптурирующий массаж, пройти курсы массажа, зеркало toyota corolla,  электронные весы bosch">
		<meta name="description" content="зеркало москвич Воск для депиляции розового цвета с кремообразной текстурой обладает противовосп...">
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
						<a class="photo" href="photos/c63254ec5e049efd054a111db6456ead.jpeg" title="зеркало москвич Воск для депиляции Rica, розовый с диоксидом титана в картридже 100 мл"><img src="photos/c63254ec5e049efd054a111db6456ead.jpeg" alt="зеркало москвич Воск для депиляции Rica, розовый с диоксидом титана в картридже 100 мл" title="зеркало москвич Воск для депиляции Rica, розовый с диоксидом титана в картридже 100 мл -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/beurer-vesy-bg-2000r.php"><img src="photos/396d7ad790b512ebfc9b60cd3372355c.jpeg" alt="маникюр педикюр стоимость BEURER Весы BG28" title="маникюр педикюр стоимость BEURER Весы BG28"></a><h2>BEURER Весы BG28</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-volos-atlanta-atn-500r.php"><img src="photos/d3b4eb483f82d34f6a33d99e454414ea.jpeg" alt="что значит зеркало Электрощипцы для волос Atlanta АТН-833" title="что значит зеркало Электрощипцы для волос Atlanta АТН-833"></a><h2>Электрощипцы для волос Atlanta АТН-833</h2></li>
							<li><a href="http://hometech.elitno.net/nasadka-desennaya-dlya-karat-de-darsonval-300r.php"><img src="photos/69b639beb2f9ef078072eb0ad79ca804.jpeg" alt="зеркало mitsubishi Насадка десенная для КАРАТ ДЕ-212 Дарсонваль" title="зеркало mitsubishi Насадка десенная для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка десенная для КАРАТ ДЕ-212 Дарсонваль</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>зеркало москвич Воск для депиляции Rica, розовый с диоксидом титана в картридже 100 мл</h1>
						<div class="tb"><p>Цена: от <span class="price">150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14407.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Воск для депиляции розового цвета с кремообразной текстурой обладает противовоспалительным, успокаивающим и смягчающим действием. Он не только отлично удаляет волосы, но и активно питает кожный покров. Подходит для всех типов кожи. </p><p>Активные ингредиенты розового масла, витамина С и диоксида титана обладают антиоксидантными свойствами, способствующими замедлению процесса старения и повышающими обмен веществ. Для использования средства, необходимо предварительно разогреть картридж в специальном нагревателе. Теплый воск наносят на кожу роликом в направлении роста волос, после чего снимают в противоположном направлении при помощи полосок для эпиляции.</p><p><b>Характеристики:</b></p><ul type=disc><li>В составе: масло розы, витамин С, диоксид титана <li>Тип кожи: для всех типов кожи <li>Температура плавления +37С</li></ul><p><b>Производитель:</b> RICA S.p.a.</p><p><b>Страна:</b> Италия.</p> зеркало москвич</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9b4398884aa836c0acb140840fd7df60.jpeg" alt="курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01" title="курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01"><div class="box" page="nabor-dlya-ukladki-valera-ionic-multistyle-professional-4390r"><span class="title">курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01</span><p>от <span class="price">4390</span> руб.</p></div></li>
						<li><img src="photos/e43553d2ace8478e61c73ac89d87f4c2.jpeg" alt="массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)" title="массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)"><div class="box" page="standartnye-nasadki-dlya-irrigatora-waterpik-jte-sht-350r"><span class="title">массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/db50f056381f7d55d9462e3f852c618b.jpeg" alt="фокин массаж Стационарный массажный стол US Medica Profi" title="фокин массаж Стационарный массажный стол US Medica Profi"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-profi-85000r"><span class="title">фокин массаж Стационарный массажный стол US Medica Profi</span><p>от <span class="price">85000</span> руб.</p></div></li>
						<li><img src="photos/62db52b399d7c20707e01ba738aef4b6.jpeg" alt="массаж и трах Валик круглый мягкий L66D20 USM-006" title="массаж и трах Валик круглый мягкий L66D20 USM-006"><div class="box" page="valik-kruglyy-myagkiy-ld-usm-1200r"><span class="title">массаж и трах Валик круглый мягкий L66D20 USM-006</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/daee302fef3f111d46577290c7b50aa9.jpeg" alt="солярий тюмень Аппликатор Ляпко Спутник 6,2" title="солярий тюмень Аппликатор Ляпко Спутник 6,2"><div class="box" page="applikator-lyapko-sputnik-360r"><span class="title">солярий тюмень Аппликатор Ляпко Спутник 6,2</span><p>от <span class="price">360</span> руб.</p></div></li>
						<li class="large"><img src="photos/b6354d226c8e04e9b88a5ad24218f045.jpeg" alt="монолог зеркала Прибор для ухода за кожей Gezatone Bio Wave m920" title="монолог зеркала Прибор для ухода за кожей Gezatone Bio Wave m920"><div class="box" page="pribor-dlya-uhoda-za-kozhey-gezatone-bio-wave-m-1100r"><span class="title">монолог зеркала Прибор для ухода за кожей Gezatone Bio Wave m920</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li class="large"><img src="photos/e01d2dae2f575f567f13f00f34017217.jpeg" alt="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья" title="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья"><div class="box" page="mashinka-dlya-bikini-dizayna-gezatone-dp-s-nasadkoy-dlya-britya-1500r"><span class="title">электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/48d9ef47ef8da57d09b8d291f9053e9c.jpeg" alt="скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос" title="скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-660r"><span class="title">скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос</span><p>от <span class="price">660</span> руб.</p></div></li>
						<li><img src="photos/31368c22596515c6979410da5dab3354.jpeg" alt="пройти курсы массажа Машинки для стрижки Valera 642.01" title="пройти курсы массажа Машинки для стрижки Valera 642.01"><div class="box" page="mashinki-dlya-strizhki-valera-2200r"><span class="title">пройти курсы массажа Машинки для стрижки Valera 642.01</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/db98c04ce84416d39676eb45e61bf9d6.jpeg" alt="зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования" title="зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования"><div class="box" page="fotoepilyator-rio-ipl-dlya-domashnego-ispolzovaniya-26900r"><span class="title">зеркало toyota corolla Фотоэпилятор Rio IPL8000, для домашнего использования</span><p>от <span class="price">26900</span> руб.</p></div></li>
						<li><img src="photos/c1e44ae0346cc39b27bb78d6ca139c3e.jpeg" alt="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл" title="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл"><div class="box" page="loson-posle-depilyacii-rica-mentolovyy-ml-600r"><span class="title">зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vosk-dlya-depilyacii-rica-rozovyy-s-dioksidom-titana-v-kartridzhe-ml-150r.php", 0, -4); if (file_exists("comments/vosk-dlya-depilyacii-rica-rozovyy-s-dioksidom-titana-v-kartridzhe-ml-150r.php")) require_once "comments/vosk-dlya-depilyacii-rica-rozovyy-s-dioksidom-titana-v-kartridzhe-ml-150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vosk-dlya-depilyacii-rica-rozovyy-s-dioksidom-titana-v-kartridzhe-ml-150r.php" method="post" onsubmit="return checkForm(this)">
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