<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("epilyator-braun-1600r.php","фен самый лучший");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("epilyator-braun-1600r.php", $nick, $comment);
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
		<title>фен самый лучший Эпилятор Braun 3170  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="фен самый лучший, триммер champion, зеркало недорого, триммер bosch, сочинение на тему зеркало, эпиляторы браун цены, мини солярий для лица купить, боковое зеркало шкода, эпилятор philips hp 6576, мебельное зеркало, куплю весы электронные напольные, выпуклое зеркало, простое зеркало, ионизатор воды купить,  массаж в астане">
		<meta name="description" content="фен самый лучший Эпилятор с двумя режимами скорости от немецкого производителя Braun с двойной ма...">
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
						<a class="photo" href="photos/42929badcb24d376fc96e8ca95b59c8e.jpeg" title="фен самый лучший Эпилятор Braun 3170"><img src="photos/42929badcb24d376fc96e8ca95b59c8e.jpeg" alt="фен самый лучший Эпилятор Braun 3170" title="фен самый лучший Эпилятор Braun 3170 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-wbpma-35000r.php"><img src="photos/d7ec75485f093187b978e38d5d2724a5.jpeg" alt="триммер champion Профессиональные электронные весы Tanita WB-100PMA" title="триммер champion Профессиональные электронные весы Tanita WB-100PMA"></a><h2>Профессиональные электронные весы Tanita WB-100PMA</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-elektronnye-omron-hn-1700r.php"><img src="photos/1c286fb4a2f394536fb915a6d87649a7.jpeg" alt="зеркало недорого Весы бытовые электронные OMRON HN-283" title="зеркало недорого Весы бытовые электронные OMRON HN-283"></a><h2>Весы бытовые электронные OMRON HN-283</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-sv-3000r.php"><img src="photos/5e9b4cd093153df88b137e4b04257a76.jpeg" alt="триммер bosch Анализатор жира (состава тела) Tanita BC-542 (SV)" title="триммер bosch Анализатор жира (состава тела) Tanita BC-542 (SV)"></a><h2>Анализатор жира (состава тела) Tanita BC-542 (SV)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>фен самый лучший Эпилятор Braun 3170</h1>
						<div class="tb"><p>Цена: от <span class="price">1600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12026.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Эпилятор с двумя режимами скорости от немецкого производителя Braun с двойной массажной системой осуществляет мягкую эпиляцию. 20 пинцетов тщательно и деликатно удаляют волоски прямо у корня.</p><p>Уникальная система SoftLift приподнимает и удаляет с корнем даже волоски с длиной не больше 0.5 мм и те, которые плотно прилегают к телу. Два ряда специальных роликов массируют кожу до и после эпиляции для уменьшения ее чувствительности. В комплекте идут щеточка для очистки и футляр.</p><p><b>Характеристики: </b></p><ul type=disc><li>Тип: эпилятор <li>Число скоростей: 2 <li>Питание: от сети <li>Количество пинцетов: 20 <li>Система SoftLift: есть <li>Подсветка: нет <li>Использование с применением пены: нет <li>Насадки: массажер <li>В комплекте: щетка для очистки, футляр</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> фен самый лучший</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a73d45afb658e85145cdbbf609c3a636.jpeg" alt="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард" title="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард"><div class="box" page="stayler-corioliss-s-krasnyy-leopard-4500r"><span class="title">сочинение на тему зеркало Стайлер Corioliss С1 красный леопард</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/adc8c79d7ed866b242f75ff41255c3ae.jpeg" alt="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830" title="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r"><span class="title">эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/0b842281306633c8ae0a56a5ee94d808.jpeg" alt="мини солярий для лица купить Зеркало настольное Rosenberg S-2083" title="мини солярий для лица купить Зеркало настольное Rosenberg S-2083"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-500r"><span class="title">мини солярий для лица купить Зеркало настольное Rosenberg S-2083</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/e8ce6906fe484bd61dc8b90eb5a3df4a.jpeg" alt="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S" title="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S"><div class="box" page="poyasmiostimulyator-slendertone-flex-s-1500r"><span class="title">боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/d74d7c30f76ca3dc8493a83104fd72b9.jpeg" alt="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8" title="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8"><div class="box" page="applikator-lyapko-odinarnyy-780r"><span class="title">эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8</span><p>от <span class="price">780</span> руб.</p></div></li>
						<li class="large"><img src="photos/08f3884e56446c62ad73af91ace63c80.jpeg" alt="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20" title="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2350r"><span class="title">мебельное зеркало Гидромассажная ванночка для ног Beurer FB20</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/a881720fb288bef785b8ec593e51d624.jpeg" alt="куплю весы электронные напольные Гидромассажная ванночка для ног Beurer FB14" title="куплю весы электронные напольные Гидромассажная ванночка для ног Beurer FB14"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-1750r"><span class="title">куплю весы электронные напольные Гидромассажная ванночка для ног Beurer FB14</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/bb0c160ca62b650921d1a14315a10ae6.jpeg" alt="выпуклое зеркало Массажер д/глаз ZENET TL-EMY-B" title="выпуклое зеркало Массажер д/глаз ZENET TL-EMY-B"><div class="box" page="massazher-dglaz-zenet-tlemyb-2350r"><span class="title">выпуклое зеркало Массажер д/глаз ZENET TL-EMY-B</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li><img src="photos/84eee8a483abbf8942e6c3b1d6dca4df.jpeg" alt="простое зеркало Массажная подушка Beurer MG 120 шиацу" title="простое зеркало Массажная подушка Beurer MG 120 шиацу"><div class="box" page="massazhnaya-podushka-beurer-mg-shiacu-2900r"><span class="title">простое зеркало Массажная подушка Beurer MG 120 шиацу</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/f2a381b1d13e277f597cdb5028212274.jpeg" alt="корпус зеркала заднего вида Насадка для зубных щеток Omron Point Brush SB-090" title="корпус зеркала заднего вида Насадка для зубных щеток Omron Point Brush SB-090"><div class="box" page="nasadka-dlya-zubnyh-schetok-omron-point-brush-sb-430r"><span class="title">корпус зеркала заднего вида Насадка для зубных щеток Omron Point Brush SB-090</span><p>от <span class="price">430</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("epilyator-braun-1600r.php", 0, -4); if (file_exists("comments/epilyator-braun-1600r.php")) require_once "comments/epilyator-braun-1600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="epilyator-braun-1600r.php" method="post" onsubmit="return checkForm(this)">
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