<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atnn-450r.php","фитнес солярий");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atnn-450r.php", $nick, $comment);
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
		<title>фитнес солярий Фен Atlanta АТН-882N  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="фитнес солярий, лучшая электрическая зубная щетка, лазерный эпилятор домашний купить, насадки для машинки для стрижки волос, зеркала альбом, эпиляторы браун цены, весы электронные ювелирные, пятна после солярия, зеркало на опель астра, справочник по массажу, солярий шоколад, осмотр гинекологическим зеркалом, лифтинг массаж, триммер для волос в носу,  зеркала толщина">
		<meta name="description" content="фитнес солярий Фен Atlanta АТН-882N – доступный прибор с эргономичным дизайном для сушки волос ...">
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
						<a class="photo" href="photos/2fc7af019baa319a2dcc770556eb82e7.jpeg" title="фитнес солярий Фен Atlanta АТН-882N"><img src="photos/2fc7af019baa319a2dcc770556eb82e7.jpeg" alt="фитнес солярий Фен Atlanta АТН-882N" title="фитнес солярий Фен Atlanta АТН-882N -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-dlya-snizheniya-vesa-and-uc-3640r.php"><img src="photos/94c2cfbe1c9fd99ef2bfe885e1ad802a.jpeg" alt="лучшая электрическая зубная щетка Весы электронные напольные для снижения веса AND UC-322" title="лучшая электрическая зубная щетка Весы электронные напольные для снижения веса AND UC-322"></a><h2>Весы электронные напольные для снижения веса AND UC-322</h2></li>
							<li><a href="http://hometech.elitno.net/nasadka-rogatka-dlya-karat-de-darsonval-300r.php"><img src="photos/7be8c940f8b8240aa8ad50f75f612fb6.jpeg" alt="лазерный эпилятор домашний купить Насадка Рогатка для КАРАТ ДЕ-212 Дарсонваль" title="лазерный эпилятор домашний купить Насадка Рогатка для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка Рогатка для КАРАТ ДЕ-212 Дарсонваль</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-babyliss-e-mm-1070r-2.php"><img src="photos/58f879fc7c3b36b7e8f23db41babefe6.jpeg" alt="насадки для машинки для стрижки волос Щипцы для завивки Babyliss 2325E 25 мм" title="насадки для машинки для стрижки волос Щипцы для завивки Babyliss 2325E 25 мм"></a><h2>Щипцы для завивки Babyliss 2325E 25 мм</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>фитнес солярий Фен Atlanta АТН-882N</h1>
						<div class="tb"><p>Цена: от <span class="price">450</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19876.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-882N – доступный прибор с эргономичным дизайном для сушки волос мощностью 1200 Вт со складной ручкой. Имеет два уровня интенсивности сушки, две насадки и шнур с защитой от выкручивания. Не скользит в руках, благодаря специальному покрытию. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности. Снабжен петлей для подвешивания.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Складывающаяся ручка; <li>Две насадки в комплекте; <li>Защита от перегрева; <li>Два уровня интенсивности сушки; <li>Специальное противоскользящие покрытие; <li>Соответствует американским и европейским нормам безопасности; <li>Мощность 1200W; <li>230V, 50Hz <li>17.5 x 7.5 x 21 см </li></ul><p><strong>Производитель: США</strong></p> фитнес солярий</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/453dcbd53e683e2622b408d4ea19e1cc.jpeg" alt="зеркала альбом Зеркало Beurer BS05 косметическое" title="зеркала альбом Зеркало Beurer BS05 косметическое"><div class="box" page="zerkalo-beurer-bs-kosmeticheskoe-550r"><span class="title">зеркала альбом Зеркало Beurer BS05 косметическое</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/5a23805b006653a6cc417fee14de0eae.jpeg" alt="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста" title="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста"><div class="box" page="pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r"><span class="title">эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста</span><p>от <span class="price">1190</span> руб.</p></div></li>
						<li><img src="photos/b22e40d494cd6893112bef0e9fe9ab49.jpeg" alt="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt" title="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt"><div class="box" page="termopoyas-vulkan-vulkan-belt-350r"><span class="title">весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/85862bf798272aba1c20426529f6a0e7.jpeg" alt="пятна после солярия Массажное кресло Anatomico Verdi" title="пятна после солярия Массажное кресло Anatomico Verdi"><div class="box" page="massazhnoe-kreslo-anatomico-verdi-175000r"><span class="title">пятна после солярия Массажное кресло Anatomico Verdi</span><p>от <span class="price">175000</span> руб.</p></div></li>
						<li class="large"><img src="photos/234e7f009134ec4e716a50e2c790eb7e.jpeg" alt="зеркало на опель астра Аппликатор Ляпко Коврик 6,8" title="зеркало на опель астра Аппликатор Ляпко Коврик 6,8"><div class="box" page="applikator-lyapko-kovrik-2720r"><span class="title">зеркало на опель астра Аппликатор Ляпко Коврик 6,8</span><p>от <span class="price">2720</span> руб.</p></div></li>
						<li class="large"><img src="photos/b16f5dd60e772a6b43b2dac886e1a632.jpeg" alt="справочник по массажу Массажер Beurer MG 16 - цвет зеленый" title="справочник по массажу Массажер Beurer MG 16 - цвет зеленый"><div class="box" page="massazher-beurer-mg-cvet-zelenyy-500r"><span class="title">справочник по массажу Массажер Beurer MG 16 - цвет зеленый</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li class="large"><img src="photos/3f058fca0af13e434cdaba91b5eca059.jpeg" alt="солярий шоколад Шарф массажный NAP Massage Wrap" title="солярий шоколад Шарф массажный NAP Massage Wrap"><div class="box" page="sharf-massazhnyy-nap-massage-wrap-670r"><span class="title">солярий шоколад Шарф массажный NAP Massage Wrap</span><p>от <span class="price">670</span> руб.</p></div></li>
						<li><img src="photos/1ac6b469cdeb6921a5e0268ec37a3b66.jpeg" alt="осмотр гинекологическим зеркалом Пояс массажный BODYKRAFT B2-12" title="осмотр гинекологическим зеркалом Пояс массажный BODYKRAFT B2-12"><div class="box" page="poyas-massazhnyy-bodykraft-b-3290r"><span class="title">осмотр гинекологическим зеркалом Пояс массажный BODYKRAFT B2-12</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/1cd3b762effe11ede74f59ecb96b91a5.jpeg" alt="лифтинг массаж Массажер для ног Beurer FM 16" title="лифтинг массаж Массажер для ног Beurer FM 16"><div class="box" page="massazher-dlya-nog-beurer-fm-630r"><span class="title">лифтинг массаж Массажер для ног Beurer FM 16</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/6d48bec212af26655fd41e486d8ba53a.jpeg" alt="триммер для волос в носу Массажная накидка на сидение с нагревом BODYCRAFT К-52" title="триммер для волос в носу Массажная накидка на сидение с нагревом BODYCRAFT К-52"><div class="box" page="massazhnaya-nakidka-na-sidenie-s-nagrevom-bodycraft-k-9690r"><span class="title">триммер для волос в носу Массажная накидка на сидение с нагревом BODYCRAFT К-52</span><p>от <span class="price">9690</span> руб.</p></div></li>
						<li><img src="photos/af8481ceec103dd0cc1ed7ecb1e56b05.jpeg" alt="массаж октябрьская Чистящая насадка Philips HX6011 - 02 для Sonicare Flex Care, 1шт." title="массаж октябрьская Чистящая насадка Philips HX6011 - 02 для Sonicare Flex Care, 1шт."><div class="box" page="chistyaschaya-nasadka-philips-hx-dlya-sonicare-flex-care-sht-400r"><span class="title">массаж октябрьская Чистящая насадка Philips HX6011 - 02 для Sonicare Flex Care, 1шт.</span><p>от <span class="price">400</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atnn-450r.php", 0, -4); if (file_exists("comments/fen-atlanta-atnn-450r.php")) require_once "comments/fen-atlanta-atnn-450r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atnn-450r.php" method="post" onsubmit="return checkForm(this)">
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