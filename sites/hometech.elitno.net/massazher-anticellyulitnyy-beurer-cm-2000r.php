<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-anticellyulitnyy-beurer-cm-2000r.php","киев курсы массажа");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-anticellyulitnyy-beurer-cm-2000r.php", $nick, $comment);
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
		<title>киев курсы массажа Массажер антицеллюлитный Beurer CM50  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="киев курсы массажа, смотреть в зеркало ночью, зеркала на ауди а6, массаж набережные челны, фен щетка с насадками, косметика из индии, сочинение на тему зеркало, сайбер зеркало, паспарту купить, купить солярий вертикальный, костюм для lpg массажа купить, пройти курсы массажа, весы электронные самара, тайский массаж фото,  зеркало стоматологическое">
		<meta name="description" content="киев курсы массажа Антицеллюлитный массажер от известного немецкого производителя Beurer прост и уд...">
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
						<a class="photo" href="photos/d59acc6853a5ac65d4a0ba3df89a8509.jpeg" title="киев курсы массажа Массажер антицеллюлитный Beurer CM50"><img src="photos/d59acc6853a5ac65d4a0ba3df89a8509.jpeg" alt="киев курсы массажа Массажер антицеллюлитный Beurer CM50" title="киев курсы массажа Массажер антицеллюлитный Beurer CM50 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-diagnosticheskie-beurer-bf-3950r.php"><img src="photos/7deb3c43d421becd353bfd38cffd8fa1.jpeg" alt="смотреть в зеркало ночью Весы электронные диагностические Beurer BF66" title="смотреть в зеркало ночью Весы электронные диагностические Beurer BF66"></a><h2>Весы электронные диагностические Beurer BF66</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-mini-root-lifter-chernyy-2650r.php"><img src="photos/793f5e34425900f9f8cb0286c947d677.jpeg" alt="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный" title="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный"></a><h2>Стайлер Corioliss Mini Root Lifter черный</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-kosmetologicheskoe-s-podsvetkoy-lm-1100r.php"><img src="photos/c6583d1d53fcdff921f052e4d4a020d2.jpeg" alt="массаж набережные челны Зеркало косметологическое с подсветкой LM110 1301203" title="массаж набережные челны Зеркало косметологическое с подсветкой LM110 1301203"></a><h2>Зеркало косметологическое с подсветкой LM110 1301203</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>киев курсы массажа Массажер антицеллюлитный Beurer CM50</h1>
						<div class="tb"><p>Цена: от <span class="price">2000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14617.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Антицеллюлитный массажер от известного немецкого производителя Beurer прост и удобен в использовании. Он обладает стильным современным дизайном, компактной эргономичной формой, удобной индивидуально настраиваемой ручкой. Уже после нескольких сеансов эффективного массажа соединительных тканей с этим прибором ощутимо улучшается упругость кожи. Модель снабжена двумя режимами интенсивности массажа.</p><p><b>Характеристики:</b></p><ul type=disc><li>Ощутимо улучшает упругость кожи; </li><li>Эффективный массаж соединительных тканей; </li><li>Стимулирует кровоток в коже; </li><li>Простота использования в домашних условиях; </li><li>2 уровня интенсивности массажа; </li><li>Ручка настраивается индивидуально; </li><li>Эргономичная форма; </li><li>Вес (с блоком питания): 292 гр.</li></ul><p><b>Производитель:</b> Beurer.</p><p><b>Страна:</b> Германия.</p><p><b>Гарантия:</b> 2 года</p> киев курсы массажа</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/60233d887bfea99df519473001b1958f.jpeg" alt="фен щетка с насадками Валик треугольный L66H25 USM-008" title="фен щетка с насадками Валик треугольный L66H25 USM-008"><div class="box" page="valik-treugolnyy-lh-usm-1800r"><span class="title">фен щетка с насадками Валик треугольный L66H25 USM-008</span><p>от <span class="price">1800</span> руб.</p></div></li>
						<li><img src="photos/9465b0dca2e8fe2c49ae1e6021d20f1e.gif" alt="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)" title="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)"><div class="box" page="al-volshebnaya-lenta-zdorove-segmentov-5230r"><span class="title">косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)</span><p>от <span class="price">5230</span> руб.</p></div></li>
						<li><img src="photos/e1856897eeea415e6cba2ceb17732435.jpeg" alt="сочинение на тему зеркало Обруч-тренажер  FITNESS HOOP Evo Gezatone 131101" title="сочинение на тему зеркало Обруч-тренажер  FITNESS HOOP Evo Gezatone 131101"><div class="box" page="obruchtrenazher-fitness-hoop-evo-gezatone-850r"><span class="title">сочинение на тему зеркало Обруч-тренажер  FITNESS HOOP Evo Gezatone 131101</span><p>от <span class="price">850</span> руб.</p></div></li>
						<li><img src="photos/be181278ce9e9fb11b74a0b43f3149c0.jpeg" alt="сайбер зеркало Гидромассажер для ванны Montiss WBS6230M (эффект джакузи) с функцией озонирования" title="сайбер зеркало Гидромассажер для ванны Montiss WBS6230M (эффект джакузи) с функцией озонирования"><div class="box" page="gidromassazher-dlya-vanny-montiss-wbsm-effekt-dzhakuzi-s-funkciey-ozonirovaniya-3480r"><span class="title">сайбер зеркало Гидромассажер для ванны Montiss WBS6230M (эффект джакузи) с функцией озонирования</span><p>от <span class="price">3480</span> руб.</p></div></li>
						<li class="large"><img src="photos/b873fdbadf195aed2e807dd6c213c186.jpeg" alt="паспарту купить Вибромассажер HOUSE FIT НМ-3004" title="паспарту купить Вибромассажер HOUSE FIT НМ-3004"><div class="box" page="vibromassazher-house-fit-nm-6000r"><span class="title">паспарту купить Вибромассажер HOUSE FIT НМ-3004</span><p>от <span class="price">6000</span> руб.</p></div></li>
						<li class="large"><img src="photos/aca1d35fc1577b5f5c3bf95fe2236e75.jpeg" alt="купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50" title="купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-4950r"><span class="title">купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/369fa02b2fd1e0a8a6d3480c85fe998d.jpeg" alt="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки" title="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки"><div class="box" page="atlanta-atn-mashinka-dlya-strizhki-590r"><span class="title">костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/31368c22596515c6979410da5dab3354.jpeg" alt="пройти курсы массажа Машинки для стрижки Valera 642.01" title="пройти курсы массажа Машинки для стрижки Valera 642.01"><div class="box" page="mashinki-dlya-strizhki-valera-2200r"><span class="title">пройти курсы массажа Машинки для стрижки Valera 642.01</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/1c7dd7572d7c21e0bd7ee9e060517e54.jpeg" alt="весы электронные самара Лазерный эпилятор Rio Salon Laser для домашнего использования" title="весы электронные самара Лазерный эпилятор Rio Salon Laser для домашнего использования"><div class="box" page="lazernyy-epilyator-rio-salon-laser-dlya-domashnego-ispolzovaniya-10000r"><span class="title">весы электронные самара Лазерный эпилятор Rio Salon Laser для домашнего использования</span><p>от <span class="price">10000</span> руб.</p></div></li>
						<li><img src="photos/7f172dccdb7126c4af36384b087444bb.jpeg" alt="тайский массаж фото Фен Valera Excel Pro 2000 561.08-I" title="тайский массаж фото Фен Valera Excel Pro 2000 561.08-I"><div class="box" page="fen-valera-excel-pro-i-1860r"><span class="title">тайский массаж фото Фен Valera Excel Pro 2000 561.08-I</span><p>от <span class="price">1860</span> руб.</p></div></li>
						<li><img src="photos/90fa21a88e7efe788816cbd3a61d1a96.jpeg" alt="дарсонваль купить в спб Фен Vitesse VS-926" title="дарсонваль купить в спб Фен Vitesse VS-926"><div class="box" page="fen-vitesse-vs-1010r"><span class="title">дарсонваль купить в спб Фен Vitesse VS-926</span><p>от <span class="price">1010</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-anticellyulitnyy-beurer-cm-2000r.php", 0, -4); if (file_exists("comments/massazher-anticellyulitnyy-beurer-cm-2000r.php")) require_once "comments/massazher-anticellyulitnyy-beurer-cm-2000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-anticellyulitnyy-beurer-cm-2000r.php" method="post" onsubmit="return checkForm(this)">
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