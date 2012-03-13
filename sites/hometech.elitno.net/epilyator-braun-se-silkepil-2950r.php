<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("epilyator-braun-se-silkepil-2950r.php","дарсонваль в самаре");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("epilyator-braun-se-silkepil-2950r.php", $nick, $comment);
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
		<title>дарсонваль в самаре Эпилятор Braun SE5580 Silkepil  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="дарсонваль в самаре, солярий сан сити, стихи на фене, утреннее солнце массаж, лицензия на массаж, бигуди роскошные локоны, физиотерапия в стоматологии, светильники для зеркал, пятна после солярия, массаж лица соболь, где купить бигуди, насадки для машинки для стрижки, набор для выпрямления волос, мебельное зеркало,  бигуди золотые локоны">
		<meta name="description" content="дарсонваль в самаре Немецкий эпилятор позволит вам добиться хороших результатов уже через несколько ...">
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
						<a class="photo" href="photos/ce48007e53de932316ffde88f545aaa5.jpeg" title="дарсонваль в самаре Эпилятор Braun SE5580 Silkepil"><img src="photos/ce48007e53de932316ffde88f545aaa5.jpeg" alt="дарсонваль в самаре Эпилятор Braun SE5580 Silkepil" title="дарсонваль в самаре Эпилятор Braun SE5580 Silkepil -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-700r.php"><img src="photos/a4916afed5e89e4f7b9b3539fdd5dbae.jpeg" alt="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835" title="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-835</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-vitesse-vs-850r.php"><img src="photos/c13cfae2d70d4aeb7439f115424821b8.jpeg" alt="стихи на фене Щипцы для выпрямления волос Vitesse VS-906" title="стихи на фене Щипцы для выпрямления волос Vitesse VS-906"></a><h2>Щипцы для выпрямления волос Vitesse VS-906</h2></li>
							<li><a href="http://hometech.elitno.net/nasadka-rascheska-dlya-karat-de-darsonval-300r.php"><img src="photos/3b1d3a2501150f3525f392072fa66671.jpeg" alt="утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль" title="утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>дарсонваль в самаре Эпилятор Braun SE5580 Silkepil</h1>
						<div class="tb"><p>Цена: от <span class="price">2950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12033.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Немецкий эпилятор позволит вам добиться хороших результатов уже через несколько минут после применения. Уникальная технология Silkepil с системой Smartlight, а также 40 пинцетов быстро и деликатно обработают необходимую область.</p><p>Отличительной особенностью модели можно отметить наличие специальной подсветки, которая освещает кожу и делает видимыми даже самые незаметные волоски. Насадка EfficiencyPro значительно расширяет площадь воздействия прибора, а интенсивное массирование специальных роликов помогает снизить восприимчивость к выщипыванию. </p><p><b>Характеристики: </b></p><ul type=disc><li>Подсветка SmartLight: есть. Освещает эпилируемую поверхность и делает видимыми даже самые незаметные волоски. <li>Количество пинцетов: 40 <li>Насадка EfficiencyPro: есть <li>Насадка для чувствительных участков тела: для подмышек и области бикини <li>Насадка для точечного удаления волос: для лица и области бикини <li>Количество скоростей: 2 <li>Щеточка для чистки: есть <li>Работает от сети <li>Косметичка: есть <li>Щеточка для чистки: есть</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> дарсонваль в самаре</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3cb8fb7617e327ab1de4f64923d896d1.jpeg" alt="лицензия на массаж Зеркало настольное Rosenberg S-2339" title="лицензия на массаж Зеркало настольное Rosenberg S-2339"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-1050r"><span class="title">лицензия на массаж Зеркало настольное Rosenberg S-2339</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/ea4bc761dd704bb1b832dd0bbcbcac26.jpeg" alt="бигуди роскошные локоны Маникюрный набор Babyliss 8480E (10 насадок)" title="бигуди роскошные локоны Маникюрный набор Babyliss 8480E (10 насадок)"><div class="box" page="manikyurnyy-nabor-babyliss-e-nasadok-1790r"><span class="title">бигуди роскошные локоны Маникюрный набор Babyliss 8480E (10 насадок)</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/565c863a758e1bc3e5c28686264c8804.jpeg" alt="физиотерапия в стоматологии Валик круглый L61D15 USM-003" title="физиотерапия в стоматологии Валик круглый L61D15 USM-003"><div class="box" page="valik-kruglyy-ld-usm-1200r-2"><span class="title">физиотерапия в стоматологии Валик круглый L61D15 USM-003</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/26722c15de67dde150ff899fe1744f29.jpeg" alt="светильники для зеркал Валик пятиугольный L58H16 USM-009" title="светильники для зеркал Валик пятиугольный L58H16 USM-009"><div class="box" page="valik-pyatiugolnyy-lh-usm-1200r"><span class="title">светильники для зеркал Валик пятиугольный L58H16 USM-009</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/85862bf798272aba1c20426529f6a0e7.jpeg" alt="пятна после солярия Массажное кресло Anatomico Verdi" title="пятна после солярия Массажное кресло Anatomico Verdi"><div class="box" page="massazhnoe-kreslo-anatomico-verdi-175000r"><span class="title">пятна после солярия Массажное кресло Anatomico Verdi</span><p>от <span class="price">175000</span> руб.</p></div></li>
						<li class="large"><img src="photos/a96ae3566c75021eb37743cc8caf6ff5.jpeg" alt="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5" title="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5"><div class="box" page="applikator-lyapko-valik-licevoy-720r"><span class="title">массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li class="large"><img src="photos/b8fa68534bca726355bda362e43ac70b.jpeg" alt="где купить бигуди Массажер-подушка Gezatone AMG390 1301099" title="где купить бигуди Массажер-подушка Gezatone AMG390 1301099"><div class="box" page="massazherpodushka-gezatone-amg-3290r"><span class="title">где купить бигуди Массажер-подушка Gezatone AMG390 1301099</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li><img src="photos/ae3ee4c3437d43e701e69a64da50647c.jpeg" alt="насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу" title="насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу"><div class="box" page="kapillyarnyy-massazher-palchiki-shiatsu-120r"><span class="title">насадки для машинки для стрижки Капиллярный массажер Пальчики Шиатсу</span><p>от <span class="price">120</span> руб.</p></div></li>
						<li><img src="photos/782aa0f31386fb09629ab9ef5d11ebc4.jpeg" alt="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)" title="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)"><div class="box" page="massazher-dlya-profilaktiki-varikoza-aviafit-sht-3000r"><span class="title">набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/08f3884e56446c62ad73af91ace63c80.jpeg" alt="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20" title="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2350r"><span class="title">мебельное зеркало Гидромассажная ванночка для ног Beurer FB20</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li><img src="photos/f70ad4629335f36765aeeccf67ffdd64.jpeg" alt="массаж релаксация Термо-коврик для стайлера Corioliss Thermopad" title="массаж релаксация Термо-коврик для стайлера Corioliss Thermopad"><div class="box" page="termokovrik-dlya-staylera-corioliss-thermopad-880r"><span class="title">массаж релаксация Термо-коврик для стайлера Corioliss Thermopad</span><p>от <span class="price">880</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("epilyator-braun-se-silkepil-2950r.php", 0, -4); if (file_exists("comments/epilyator-braun-se-silkepil-2950r.php")) require_once "comments/epilyator-braun-se-silkepil-2950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="epilyator-braun-se-silkepil-2950r.php" method="post" onsubmit="return checkForm(this)">
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