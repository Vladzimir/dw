<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazhnyy-nabor-beurer-mg-1950r.php","салон массажа киев");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazhnyy-nabor-beurer-mg-1950r.php", $nick, $comment);
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
		<title>салон массажа киев Массажный набор Beurer MG30  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="салон массажа киев, фен хуан дань цун, лифтинг лица в домашних условиях, эпиляторы браун цены, ректальное зеркало, светильники для зеркал, массаж в гомеле, массаж сергиев посад, правильный массаж простаты, хорошие электронные весы, массаж 2 года, зеркало перевод, электронные весы bosch, заточка ножей машинки для стрижки,  держатели для зеркал">
		<meta name="description" content="салон массажа киев Массажный набор Beurer MG30 специально создан для качественного массажа тела, го...">
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
						<a class="photo" href="photos/cf91897ff59703e8e13711725a1fccfc.jpeg" title="салон массажа киев Массажный набор Beurer MG30"><img src="photos/cf91897ff59703e8e13711725a1fccfc.jpeg" alt="салон массажа киев Массажный набор Beurer MG30" title="салон массажа киев Массажный набор Beurer MG30 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-es-3030r.php"><img src="photos/ed07bb00209565173c6a467ccac26ddc.jpeg" alt="фен хуан дань цун Выпрямитель для волос Braun ES2" title="фен хуан дань цун Выпрямитель для волос Braun ES2"></a><h2>Выпрямитель для волос Braun ES2</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-valera-digicurl-2080r.php"><img src="photos/2b3d868aa072c70dee6668606713c73a.jpeg" alt="лифтинг лица в домашних условиях Щипцы для завивки Valera Digicurl 641.25" title="лифтинг лица в домашних условиях Щипцы для завивки Valera Digicurl 641.25"></a><h2>Щипцы для завивки Valera Digicurl 641.25</h2></li>
							<li><a href="http://hometech.elitno.net/pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php"><img src="photos/5a23805b006653a6cc417fee14de0eae.jpeg" alt="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста" title="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста"></a><h2>Прибор для получения «Живой» и «Мертвой» воды Мелеста</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>салон массажа киев Массажный набор Beurer MG30</h1>
						<div class="tb"><p>Цена: от <span class="price">1950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19383.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Массажный набор Beurer MG30 специально создан для качественного массажа тела, головы и лица в домашних условиях. Набор включает в себя три маленьких и удобных массажера в практичном футляре для хранения. Кроме того, данные массажеры оснащены функцией брызгостойкости, с помощью чего использовать их можно даже в ванной. Все массажеры работают на батарейках, которые входят в комплект. </p><p><b>Характеристики:</b></p><ul type=disc><li>Тройной массаж: для тела, для головы, для лица; <li>Мягкий вибромассаж; <li>Инфракрасный подогрев; <li>Практичный футляр для хранения; <li>Брызгостойкость: массажеры пригодны для хранения в ванной; <li>Питание от батареек; <li>Батарейки прилагаются в комплекте; </li></ul><p><b>Производитель: Германия</b></p><p><b>Гарантия: 1 год</b></p> салон массажа киев</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9245f68f4f84fd4f77a399b1043302af.jpeg" alt="ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)" title="ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)"><div class="box" page="nabor-dlya-pedikyura-ped-egg-red-egg-300r"><span class="title">ректальное зеркало Набор для педикюра Пед Эгг (Реd Egg)</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/26722c15de67dde150ff899fe1744f29.jpeg" alt="светильники для зеркал Валик пятиугольный L58H16 USM-009" title="светильники для зеркал Валик пятиугольный L58H16 USM-009"><div class="box" page="valik-pyatiugolnyy-lh-usm-1200r"><span class="title">светильники для зеркал Валик пятиугольный L58H16 USM-009</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/cccc1362e9d5a3d5ef09f8d62f196587.jpeg" alt="массаж в гомеле Миостимулятор для мышц живота Beurer EM 35" title="массаж в гомеле Миостимулятор для мышц живота Beurer EM 35"><div class="box" page="miostimulyator-dlya-myshc-zhivota-beurer-em-2000r"><span class="title">массаж в гомеле Миостимулятор для мышц живота Beurer EM 35</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/109ab999609bcd7a247d413a4e6a9ec7.jpeg" alt="массаж сергиев посад Массажер для спины Beurer MG 230" title="массаж сергиев посад Массажер для спины Beurer MG 230"><div class="box" page="massazher-dlya-spiny-beurer-mg-12000r"><span class="title">массаж сергиев посад Массажер для спины Beurer MG 230</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li class="large"><img src="photos/07e8f52c43849d7cdfb6d82971d9d422.jpeg" alt="правильный массаж простаты Массажер Breo mini" title="правильный массаж простаты Массажер Breo mini"><div class="box" page="massazher-breo-mini-470r"><span class="title">правильный массаж простаты Массажер Breo mini</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li class="large"><img src="photos/20c4dce42cd699155467e91509a5235b.jpeg" alt="хорошие электронные весы Массажер для шеи Beurer MG150" title="хорошие электронные весы Массажер для шеи Beurer MG150"><div class="box" page="massazher-dlya-shei-beurer-mg-4500r"><span class="title">хорошие электронные весы Массажер для шеи Beurer MG150</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/f5800fd3cb018e4ce2e878a7829b57fe.jpeg" alt="массаж 2 года Массажер для ног US Medica Angel Feet" title="массаж 2 года Массажер для ног US Medica Angel Feet"><div class="box" page="massazher-dlya-nog-us-medica-angel-feet-13500r"><span class="title">массаж 2 года Массажер для ног US Medica Angel Feet</span><p>от <span class="price">13500</span> руб.</p></div></li>
						<li><img src="photos/0e36d5a33ba12bef9e55f0ef96a3960d.jpeg" alt="зеркало перевод Прибор гальванический для ухода за кожей Gezatone Beauty Lifting m910" title="зеркало перевод Прибор гальванический для ухода за кожей Gezatone Beauty Lifting m910"><div class="box" page="pribor-galvanicheskiy-dlya-uhoda-za-kozhey-gezatone-beauty-lifting-m-1000r"><span class="title">зеркало перевод Прибор гальванический для ухода за кожей Gezatone Beauty Lifting m910</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/b4125ac25898fc0a0ddba303502b0286.jpeg" alt="электронные весы bosch Фен-щетка Binatone HAS-450 Purple" title="электронные весы bosch Фен-щетка Binatone HAS-450 Purple"><div class="box" page="fenschetka-binatone-has-purple-600r"><span class="title">электронные весы bosch Фен-щетка Binatone HAS-450 Purple</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/4d14f143b5be3fa914764db01c50d2b4.jpeg" alt="заточка ножей машинки для стрижки Фен Atlanta АТН-860" title="заточка ножей машинки для стрижки Фен Atlanta АТН-860"><div class="box" page="fen-atlanta-atn-500r"><span class="title">заточка ножей машинки для стрижки Фен Atlanta АТН-860</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/90fa21a88e7efe788816cbd3a61d1a96.jpeg" alt="дарсонваль купить в спб Фен Vitesse VS-926" title="дарсонваль купить в спб Фен Vitesse VS-926"><div class="box" page="fen-vitesse-vs-1010r"><span class="title">дарсонваль купить в спб Фен Vitesse VS-926</span><p>от <span class="price">1010</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazhnyy-nabor-beurer-mg-1950r.php", 0, -4); if (file_exists("comments/massazhnyy-nabor-beurer-mg-1950r.php")) require_once "comments/massazhnyy-nabor-beurer-mg-1950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazhnyy-nabor-beurer-mg-1950r.php" method="post" onsubmit="return checkForm(this)">
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