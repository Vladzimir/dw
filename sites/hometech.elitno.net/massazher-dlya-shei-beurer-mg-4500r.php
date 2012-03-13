<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-dlya-shei-beurer-mg-4500r.php","последствия массажа");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-dlya-shei-beurer-mg-4500r.php", $nick, $comment);
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
		<title>последствия массажа Массажер для шеи Beurer MG150  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="последствия массажа, солярий для мужчин, сгорела в солярии что делать, девочки в солярии, шкафчик для ванной с зеркалом, эпилятор ровента отзывы, электробритва браун отзывы, эпилятор силк эпил, антирадар зеркало, асахи массаж для тела, массаж обертывание, фен строительный профессиональный, маникюр педикюр москва, массаж для любимого,  массаж женщин смотреть бесплатно">
		<meta name="description" content="последствия массажа Beurer MG150 – массажер для шейного-плечевого отдела позволяющий делать похлопыв...">
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
						<a class="photo" href="photos/20c4dce42cd699155467e91509a5235b.jpeg" title="последствия массажа Массажер для шеи Beurer MG150"><img src="photos/20c4dce42cd699155467e91509a5235b.jpeg" alt="последствия массажа Массажер для шеи Beurer MG150" title="последствия массажа Массажер для шеи Beurer MG150 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/nasadka-rektalnaya-dlya-karat-de-darsonval-300r.php"><img src="photos/e2ac51ffcae3a37ef4e6be1787c2bf43.jpeg" alt="солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль" title="солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-babyliss-e-mm-1070r.php"><img src="photos/a628ce07765b38bcd292b95d0bfc0368.jpeg" alt="сгорела в солярии что делать Щипцы для завивки Babyliss 2319E 19 мм" title="сгорела в солярии что делать Щипцы для завивки Babyliss 2319E 19 мм"></a><h2>Щипцы для завивки Babyliss 2319E 19 мм</h2></li>
							<li><a href="http://hometech.elitno.net/babyliss-e-zerkalo-s-i-kratnym-uvelicheniem-1340r.php"><img src="photos/77f53115128928974f2537ac5528713b.jpeg" alt="девочки в солярии Babyliss 8435Е Зеркало с 5-и кратным увеличением" title="девочки в солярии Babyliss 8435Е Зеркало с 5-и кратным увеличением"></a><h2>Babyliss 8435Е Зеркало с 5-и кратным увеличением</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>последствия массажа Массажер для шеи Beurer MG150</h1>
						<div class="tb"><p>Цена: от <span class="price">4500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18278.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Beurer MG150 – массажер для шейного-плечевого отдела позволяющий делать похлопывающий, глубокий, интенсивный массаж шеи и плеч, мощностью 60 Вт. Он имеет удобную ручку и шесть программ массажа. С помощью Beurer MG150 можно делать целенаправленный массаж в самых труднодоступных участках шейно-плечевого отдела. Снимает напряжение в глубоких слоях мышц.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>6 программ массажа</li><li>Практичная ручка</li><li>Возможно использование без рук</li><li>Автоматическое отключение</li><li>Вес: 2,4 кг</li><li>Номинальная мощность: 60 Вт</li><li>Питание: от сети 220 В</li><li>Размеры в упаковке (длина/ширина/высота): 0,415x0,23x0,11 м</li><li>Вес в упаковке: 2,8 кг</li></ul><p><strong>Производство Германия</strong></p><p><strong>Гарантия 2 года</strong></p> последствия массажа</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/547f3143a4cadabab99b7c9561803f70.jpeg" alt="шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX." title="шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX."><div class="box" page="dental-resources-neytralnaya-ftoristaya-zubnaya-pasta-neutral-rx-540r"><span class="title">шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li><img src="photos/73a821d3ad225325ed956d5e193b7846.jpeg" alt="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line" title="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-sakura-lineyka-sumo-line-24900r"><span class="title">эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line</span><p>от <span class="price">24900</span> руб.</p></div></li>
						<li><img src="photos/0f804e21b3b864128c310dab356b8737.jpeg" alt="электробритва браун отзывы Массажёр Фараон-М" title="электробритва браун отзывы Массажёр Фараон-М"><div class="box" page="massazher-faraonm-260r"><span class="title">электробритва браун отзывы Массажёр Фараон-М</span><p>от <span class="price">260</span> руб.</p></div></li>
						<li><img src="photos/0d9343dd6acb58ca14845e35f6eccd11.jpeg" alt="эпилятор силк эпил Массажер Nozomi MH-102" title="эпилятор силк эпил Массажер Nozomi MH-102"><div class="box" page="massazher-nozomi-mh-1390r"><span class="title">эпилятор силк эпил Массажер Nozomi MH-102</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li class="large"><img src="photos/99c6930539a5dbb19e5a1ae959e6833b.jpeg" alt="антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)" title="антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)"><div class="box" page="vakuumnyy-massazher-celluless-anticellyulit-1600r"><span class="title">антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li class="large"><img src="photos/bc2944ee563c3b24a06eaacc9776c3c3.jpeg" alt="асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST" title="асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST"><div class="box" page="massazher-medicinskiy-nozomi-mh-icst-1850r"><span class="title">асахи массаж для тела Массажер медицинский Nozomi MH-103 ICST</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/5dd95fcbd77902411af3599387a4ddf5.jpeg" alt="массаж обертывание Массажер для головы Мурашка Антистресс" title="массаж обертывание Массажер для головы Мурашка Антистресс"><div class="box" page="massazher-dlya-golovy-murashka-antistress-200r"><span class="title">массаж обертывание Массажер для головы Мурашка Антистресс</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li><img src="photos/e80e018f5a3b9a5d3aab17626d1428ec.png" alt="фен строительный профессиональный Массажная подушка Beurer MG140" title="фен строительный профессиональный Массажная подушка Beurer MG140"><div class="box" page="massazhnaya-podushka-beurer-mg-2900r"><span class="title">фен строительный профессиональный Массажная подушка Beurer MG140</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/bcabcf5532aacefb2fe352cc581c70f2.jpeg" alt="маникюр педикюр москва Подушка массажная BODYKRAFT С-31G" title="маникюр педикюр москва Подушка массажная BODYKRAFT С-31G"><div class="box" page="podushka-massazhnaya-bodykraft-sg-3290r"><span class="title">маникюр педикюр москва Подушка массажная BODYKRAFT С-31G</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/c075b8e44047484b111fe1dd6dacdc93.jpeg" alt="массаж для любимого Машинка для стрижки Vitesse VS-384" title="массаж для любимого Машинка для стрижки Vitesse VS-384"><div class="box" page="mashinka-dlya-strizhki-vitesse-vs-700r-2"><span class="title">массаж для любимого Машинка для стрижки Vitesse VS-384</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/88894b08c861cb5305303cf8ba8908c8.jpeg" alt="бигуди своими руками Фен Babyliss D121E 1900 Вт" title="бигуди своими руками Фен Babyliss D121E 1900 Вт"><div class="box" page="fen-babyliss-de-vt-1000r"><span class="title">бигуди своими руками Фен Babyliss D121E 1900 Вт</span><p>от <span class="price">1000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-dlya-shei-beurer-mg-4500r.php", 0, -4); if (file_exists("comments/massazher-dlya-shei-beurer-mg-4500r.php")) require_once "comments/massazher-dlya-shei-beurer-mg-4500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-dlya-shei-beurer-mg-4500r.php" method="post" onsubmit="return checkForm(this)">
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