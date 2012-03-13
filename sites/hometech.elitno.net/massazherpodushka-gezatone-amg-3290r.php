<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazherpodushka-gezatone-amg-3290r.php","массаж надежда");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazherpodushka-gezatone-amg-3290r.php", $nick, $comment);
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
		<title>массаж надежда Массажер-подушка Gezatone AMG390 1301099  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж надежда, установка фена, херсон массаж, массаж слепых, фен щетка babyliss отзывы, дренажный массаж, настройка электронных весов, зеркало психология, американское выпрямление волос, установка боковых зеркал, ножи для электробритвы, тайский массаж фото, носовые платочки, корпус зеркала заднего вида,  завивка волос утюжком">
		<meta name="description" content="массаж надежда Массажер-подушка Gezatone AMG390 станет Вашим незаменимым спутником дома, на раб...">
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
						<a class="photo" href="photos/b8fa68534bca726355bda362e43ac70b.jpeg" title="массаж надежда Массажер-подушка Gezatone AMG390 1301099"><img src="photos/b8fa68534bca726355bda362e43ac70b.jpeg" alt="массаж надежда Массажер-подушка Gezatone AMG390 1301099" title="массаж надежда Массажер-подушка Gezatone AMG390 1301099 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-bc-15000r.php"><img src="photos/535cb54616c54017545d11b351ebbf9b.jpeg" alt="установка фена Профессиональные электронные весы Tanita BC-545" title="установка фена Профессиональные электронные весы Tanita BC-545"></a><h2>Профессиональные электронные весы Tanita BC-545</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-flexa-2950r.php"><img src="photos/761f0ad81569062a7e0ab609f4286969.jpeg" alt="херсон массаж Выпрямитель Valera Flexa 646.01" title="херсон массаж Выпрямитель Valera Flexa 646.01"></a><h2>Выпрямитель Valera Flexa 646.01</h2></li>
							<li><a href="http://hometech.elitno.net/karat-de-darsonval-s-chetyrmya-smennymi-nasadkami-2990r.php"><img src="photos/43322e66f76e6634ad9a2abdfb261bdb.jpeg" alt="массаж слепых КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками" title="массаж слепых КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками"></a><h2>КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж надежда Массажер-подушка Gezatone AMG390 1301099</h1>
						<div class="tb"><p>Цена: от <span class="price">3290</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12248.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Массажер-подушка Gezatone AMG390 станет Вашим незаменимым спутником дома, на работе, в автомобиле, поезде и даже самолете. Благодаря своему эргономичному дизайну, она поможет Вам расслабиться в любом месте и обстановке. В подшку встроено 4 массажных ролика с инфракрасным прогревом, увеличивающим эффективность массажа. </p><p><strong>Применение:</strong></p><ul><li>Массаж шеи, спины, плеч и поясницы; <li>Улучшение самочувствие, поднятие тонуса.</li></ul><p><strong>Характеристики: </strong></p><ul type=disc><li>Инфракрасный прогрев; <li>Два направления вращения массажных роликов; <li>Возможность использования в автомобиле; <li>Продолжительность непрерывной работы: 30 минут; <li>Потребляемая мощность: не более 18 Вт.</li></ul><p><strong>В комплект входит:</strong> подушка-массажер, сетевой адаптер, шнур для питания от «прикуривателя» автомобиля, инструкция.</p><p><strong>Производитель:</strong> Gezatone </p><p><b>Страна:</b> Франция</p><p><strong>Гарантия:</strong> 1 год</p> массаж надежда</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/eefabd71c5ced182b3ddd94bf3d47e4e.jpeg" alt="фен щетка babyliss отзывы Набор для маникюра и педикюра с сушкой Gezatone 112D 1301009" title="фен щетка babyliss отзывы Набор для маникюра и педикюра с сушкой Gezatone 112D 1301009"><div class="box" page="nabor-dlya-manikyura-i-pedikyura-s-sushkoy-gezatone-d-990r"><span class="title">фен щетка babyliss отзывы Набор для маникюра и педикюра с сушкой Gezatone 112D 1301009</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/8e0d56e9d9bc332ca7666fce73e0922e.jpeg" alt="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line" title="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-panda-lineyka-sumo-line-35000r"><span class="title">дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line</span><p>от <span class="price">35000</span> руб.</p></div></li>
						<li><img src="photos/73a70055e41c8a0be127b4a77a5ed03e.jpeg" alt="настройка электронных весов Массажное кресло Anatomico Marco" title="настройка электронных весов Массажное кресло Anatomico Marco"><div class="box" page="massazhnoe-kreslo-anatomico-marco-86000r"><span class="title">настройка электронных весов Массажное кресло Anatomico Marco</span><p>от <span class="price">86000</span> руб.</p></div></li>
						<li><img src="photos/4aca7dd74af44ac0b4f6a79b9df1a999.jpeg" alt="зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057" title="зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057"><div class="box" page="mnogofunkcionalnyy-pribor-poyas-zdorovya-gezatone-m-2300r"><span class="title">зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li class="large"><img src="photos/bfb97ea41a55921176d4a3d6c4a2b006.jpeg" alt="американское выпрямление волос Массажная подушка Sanitas SMG141" title="американское выпрямление волос Массажная подушка Sanitas SMG141"><div class="box" page="massazhnaya-podushka-sanitas-smg-3300r"><span class="title">американское выпрямление волос Массажная подушка Sanitas SMG141</span><p>от <span class="price">3300</span> руб.</p></div></li>
						<li class="large"><img src="photos/f7810eeae3245b2809b14907b94ee4e0.jpeg" alt="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос" title="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-1240r"><span class="title">установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li class="large"><img src="photos/6b329b59e2c95c28766254ced4d923f8.jpeg" alt="ножи для электробритвы Фен Valera Action 1800 542.08" title="ножи для электробритвы Фен Valera Action 1800 542.08"><div class="box" page="fen-valera-action-1300r"><span class="title">ножи для электробритвы Фен Valera Action 1800 542.08</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/c34916d8556e9636259427d5254b715e.jpeg" alt="тайский массаж фото Фен Braun HD770" title="тайский массаж фото Фен Braun HD770"><div class="box" page="fen-braun-hd-2750r"><span class="title">тайский массаж фото Фен Braun HD770</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/8500a99a4fd5081d59e0f1449e9b24b5.jpeg" alt="носовые платочки Фен Atlanta АТН-89" title="носовые платочки Фен Atlanta АТН-89"><div class="box" page="fen-atlanta-atn-840r"><span class="title">носовые платочки Фен Atlanta АТН-89</span><p>от <span class="price">840</span> руб.</p></div></li>
						<li><img src="photos/f2a381b1d13e277f597cdb5028212274.jpeg" alt="корпус зеркала заднего вида Насадка для зубных щеток Omron Point Brush SB-090" title="корпус зеркала заднего вида Насадка для зубных щеток Omron Point Brush SB-090"><div class="box" page="nasadka-dlya-zubnyh-schetok-omron-point-brush-sb-430r"><span class="title">корпус зеркала заднего вида Насадка для зубных щеток Omron Point Brush SB-090</span><p>от <span class="price">430</span> руб.</p></div></li>
						<li><img src="photos/b26b8b705749e2a3a6881624851ac218.jpeg" alt="значение массажа Бритва электрическая Vitesse VS-364" title="значение массажа Бритва электрическая Vitesse VS-364"><div class="box" page="britva-elektricheskaya-vitesse-vs-1040r"><span class="title">значение массажа Бритва электрическая Vitesse VS-364</span><p>от <span class="price">1040</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazherpodushka-gezatone-amg-3290r.php", 0, -4); if (file_exists("comments/massazherpodushka-gezatone-amg-3290r.php")) require_once "comments/massazherpodushka-gezatone-amg-3290r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazherpodushka-gezatone-amg-3290r.php" method="post" onsubmit="return checkForm(this)">
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