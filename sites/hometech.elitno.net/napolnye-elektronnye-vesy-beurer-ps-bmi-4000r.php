<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("napolnye-elektronnye-vesy-beurer-ps-bmi-4000r.php","технология укладки феном");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("napolnye-elektronnye-vesy-beurer-ps-bmi-4000r.php", $nick, $comment);
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
		<title>технология укладки феном Напольные электронные весы Beurer PS45 BMI  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="технология укладки феном, солярий в твери, лосьон для для солярия, солярий купить дешево, эпиляторы браун цены, весы электронные ювелирные, весы маленькие электронные, хорошие электронные весы, 1000 зеркал, массаж ребенку 6 месяцев, efbe schott солярий, бразильское выпрямление волос отзывы, подогрев зеркал купить, солнечные зеркала,  машинка для стрижки ровента">
		<meta name="description" content="технология укладки феном Beurer PS45 BMI – напольные электронные весы с индикацией индекса массы тела (BM...">
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
						<a class="photo" href="photos/63cbd51c577ee000c18c439d41a34667.jpeg" title="технология укладки феном Напольные электронные весы Beurer PS45 BMI"><img src="photos/63cbd51c577ee000c18c439d41a34667.jpeg" alt="технология укладки феном Напольные электронные весы Beurer PS45 BMI" title="технология укладки феном Напольные электронные весы Beurer PS45 BMI -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-binatone-hs-b-white-nacre-1100r.php"><img src="photos/227e997e0d3487f61648f09e43d5fd98.jpeg" alt="солярий в твери Выпрямитель Binatone HS-4180 B White Nacre" title="солярий в твери Выпрямитель Binatone HS-4180 B White Nacre"></a><h2>Выпрямитель Binatone HS-4180 B White Nacre</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-mateca-m-besprovodnoy-2400r.php"><img src="photos/54daa8c422694960a4b932dac99e46ae.jpeg" alt="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной" title="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной"></a><h2>Выпрямитель Mateca M 769 беспроводной</h2></li>
							<li><a href="http://hometech.elitno.net/corioliss-sxe-stayler-s-dinamikom-5400r.php"><img src="photos/3236b8d5698a5c7c266d5f8f0d9d1ca6.jpeg" alt="солярий купить дешево Corioliss SXE Стайлер с динамиком" title="солярий купить дешево Corioliss SXE Стайлер с динамиком"></a><h2>Corioliss SXE Стайлер с динамиком</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>технология укладки феном Напольные электронные весы Beurer PS45 BMI</h1>
						<div class="tb"><p>Цена: от <span class="price">4000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18274.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Beurer PS45 BMI – напольные электронные весы с индикацией индекса массы тела (BMI) со средним значением и интерпретацией. Они оснащены большим ЖК-дисплеем (25х9 см) с подсветкой. Весы автоматически обновляют данные о возрасте и записывают в 5 ячеек памяти последние изменения для 10 пользователей. Максимальный допустимый вес: 180 кг. Функция автоматического отключения сэкономит заряд батареи.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Максимально допустимый вес 180 кг <li>Большой ЖК-дисплей <li>Индикация перегрузки <li>Батарейки в комплекте <li>Гарантия 3 года </li></ul><p><strong>Производитель: Beurer (Германия)</strong></p> технология укладки феном</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/adc8c79d7ed866b242f75ff41255c3ae.jpeg" alt="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830" title="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r"><span class="title">эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/b22e40d494cd6893112bef0e9fe9ab49.jpeg" alt="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt" title="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt"><div class="box" page="termopoyas-vulkan-vulkan-belt-350r"><span class="title">весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/cf3d408ea107629e3420a5a0b210de54.jpeg" alt="весы маленькие электронные Валик полукруглый L31H7 USM-005" title="весы маленькие электронные Валик полукруглый L31H7 USM-005"><div class="box" page="valik-polukruglyy-lh-usm-1000r"><span class="title">весы маленькие электронные Валик полукруглый L31H7 USM-005</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/20c4dce42cd699155467e91509a5235b.jpeg" alt="хорошие электронные весы Массажер для шеи Beurer MG150" title="хорошие электронные весы Массажер для шеи Beurer MG150"><div class="box" page="massazher-dlya-shei-beurer-mg-4500r"><span class="title">хорошие электронные весы Массажер для шеи Beurer MG150</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/0892325aa704adac2474d537e6a6f60b.jpeg" alt="1000 зеркал Массажер ZENET TL-2006B-A" title="1000 зеркал Массажер ZENET TL-2006B-A"><div class="box" page="massazher-zenet-tlba-1350r"><span class="title">1000 зеркал Массажер ZENET TL-2006B-A</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/5f7618af44e18188fbd9c4ca77b1e376.jpeg" alt="массаж ребенку 6 месяцев Массажер BODYKRAFT M-43" title="массаж ребенку 6 месяцев Массажер BODYKRAFT M-43"><div class="box" page="massazher-bodykraft-m-2690r"><span class="title">массаж ребенку 6 месяцев Массажер BODYKRAFT M-43</span><p>от <span class="price">2690</span> руб.</p></div></li>
						<li class="large"><img src="photos/78dcc0183deafce2449388d025ca7df3.jpeg" alt="efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01" title="efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01"><div class="box" page="mashinka-dlya-strizhki-volos-i-borody-valera-contour-x-ceramic-2190r"><span class="title">efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/b0a6b1ca9fba7303a8eb561892d4f43d.jpeg" alt="бразильское выпрямление волос отзывы Машинка для стрижки  Atlanta АТН-841" title="бразильское выпрямление волос отзывы Машинка для стрижки  Atlanta АТН-841"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-590r"><span class="title">бразильское выпрямление волос отзывы Машинка для стрижки  Atlanta АТН-841</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/b609531b011f62c233bacac89d2daa55.jpeg" alt="подогрев зеркал купить Фен Valera Silent Energy 1600 545.01" title="подогрев зеркал купить Фен Valera Silent Energy 1600 545.01"><div class="box" page="fen-valera-silent-energy-1610r"><span class="title">подогрев зеркал купить Фен Valera Silent Energy 1600 545.01</span><p>от <span class="price">1610</span> руб.</p></div></li>
						<li><img src="photos/be1620073efc9907fdacde9bfe66a8ac.jpeg" alt="солнечные зеркала Стерилизатор для зубных щеток Gezatone t5 130812" title="солнечные зеркала Стерилизатор для зубных щеток Gezatone t5 130812"><div class="box" page="sterilizator-dlya-zubnyh-schetok-gezatone-t-870r"><span class="title">солнечные зеркала Стерилизатор для зубных щеток Gezatone t5 130812</span><p>от <span class="price">870</span> руб.</p></div></li>
						<li><img src="photos/1ed3782a761a5615bc41cb19f8a9861f.jpeg" alt="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph" title="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph"><div class="box" page="zubnaya-schetka-braun-d-dx-triumph-7540r"><span class="title">массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph</span><p>от <span class="price">7540</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("napolnye-elektronnye-vesy-beurer-ps-bmi-4000r.php", 0, -4); if (file_exists("comments/napolnye-elektronnye-vesy-beurer-ps-bmi-4000r.php")) require_once "comments/napolnye-elektronnye-vesy-beurer-ps-bmi-4000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="napolnye-elektronnye-vesy-beurer-ps-bmi-4000r.php" method="post" onsubmit="return checkForm(this)">
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