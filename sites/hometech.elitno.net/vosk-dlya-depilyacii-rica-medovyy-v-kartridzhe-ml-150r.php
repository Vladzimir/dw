<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r.php","массаж подарочный");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r.php", $nick, $comment);
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
		<title>массаж подарочный Воск для депиляции Rica, медовый в картридже 100 мл  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж подарочный, обучение массажу в москве, успенская зеркала, эпиляторы браун цены, зачем закрывают зеркала, девушка пришла на массаж, эпилятор силк эпил, массаж при заболеваниях, что делать в солярии, соблазнил массажем, скульптурирующий массаж, костюм для lpg массажа купить, старый фен, тайский массаж фото,  косметология массаж">
		<meta name="description" content="массаж подарочный Высококачественный воск для депиляции подходит для всех видов кожи, особенно для...">
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
						<a class="photo" href="photos/cae249c48fcfeacbbf7bd176d817de70.jpeg" title="массаж подарочный Воск для депиляции Rica, медовый в картридже 100 мл"><img src="photos/cae249c48fcfeacbbf7bd176d817de70.jpeg" alt="массаж подарочный Воск для депиляции Rica, медовый в картридже 100 мл" title="массаж подарочный Воск для депиляции Rica, медовый в картридже 100 мл -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/zerkalo-kosmeticheskoe-beurer-bs-2500r.php"><img src="photos/4cce361b40cf14037f52cd99cec2d14c.jpeg" alt="обучение массажу в москве Зеркало косметическое Beurer BS70" title="обучение массажу в москве Зеркало косметическое Beurer BS70"></a><h2>Зеркало косметическое Beurer BS70</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-nastolnoe-rosenberg-s-970r.php"><img src="photos/e273f348f6c5708fd82a881f65351988.jpeg" alt="успенская зеркала Зеркало настольное Rosenberg S-2338" title="успенская зеркала Зеркало настольное Rosenberg S-2338"></a><h2>Зеркало настольное Rosenberg S-2338</h2></li>
							<li><a href="http://hometech.elitno.net/pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php"><img src="photos/5a23805b006653a6cc417fee14de0eae.jpeg" alt="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста" title="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста"></a><h2>Прибор для получения «Живой» и «Мертвой» воды Мелеста</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж подарочный Воск для депиляции Rica, медовый в картридже 100 мл</h1>
						<div class="tb"><p>Цена: от <span class="price">150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14406.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Высококачественный воск для депиляции подходит для всех видов кожи, особенно для усталой и зрелой. Он отлично удаляет нежелательные волосы, питая и смягчая кожный покров, придавая ему эластичность. Температура плавления +37С.</p><p>Активные ингредиенты меда, витамина С и диоксида титана обладают антиоксидантными свойствами, способствующими замедлению процесса старения и повышающими обмен веществ. Для использования средства, необходимо предварительно разогреть картридж в специальном нагревателе. Теплый воск наносят на кожу роликом в направлении роста волос, после чего снимают в противоположном направлении при помощи полосок для эпиляции.</p><p><b>Характеристики:</b></p><ul type=disc><li>В составе: мед, витамин С, диоксид титана <li>Тип кожи: для усталой и зрелой кожи <li>Температура плавления +37С</li></ul><p><b>Производитель:</b> RICA S.p.a.</p><p><b>Страна:</b> Италия.</p> массаж подарочный</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b335395a214a3a546c41305f7ef60066.jpeg" alt="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051" title="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051"><div class="box" page="nabor-dlya-manikyura-i-pedikyura-s-nasadkami-gezatone-d-590r"><span class="title">зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/45f6a3a7c98373d30c8ccb69b3f4f008.jpeg" alt="девушка пришла на массаж Многофункциональный педикюрный набор Bario" title="девушка пришла на массаж Многофункциональный педикюрный набор Bario"><div class="box" page="mnogofunkcionalnyy-pedikyurnyy-nabor-bario-1650r"><span class="title">девушка пришла на массаж Многофункциональный педикюрный набор Bario</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/0d9343dd6acb58ca14845e35f6eccd11.jpeg" alt="эпилятор силк эпил Массажер Nozomi MH-102" title="эпилятор силк эпил Массажер Nozomi MH-102"><div class="box" page="massazher-nozomi-mh-1390r"><span class="title">эпилятор силк эпил Массажер Nozomi MH-102</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li><img src="photos/72b586dfa56f31bfc0f823688b4ab76c.jpeg" alt="массаж при заболеваниях Массажер Beurer MG 16 - цвет красный" title="массаж при заболеваниях Массажер Beurer MG 16 - цвет красный"><div class="box" page="massazher-beurer-mg-cvet-krasnyy-500r"><span class="title">массаж при заболеваниях Массажер Beurer MG 16 - цвет красный</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li class="large"><img src="photos/12b08f535454eb45912e69bb12756cf3.jpeg" alt="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070" title="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070"><div class="box" page="anticellyulitnyy-vibromassazher-gezatone-skulptor-tela-amg-2000r"><span class="title">что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/f5a755710fa8038f441e31fb91fe98e3.jpeg" alt="соблазнил массажем Массажер BODYKRAFT M-42" title="соблазнил массажем Массажер BODYKRAFT M-42"><div class="box" page="massazher-bodykraft-m-430r"><span class="title">соблазнил массажем Массажер BODYKRAFT M-42</span><p>от <span class="price">430</span> руб.</p></div></li>
						<li class="large"><img src="photos/48d9ef47ef8da57d09b8d291f9053e9c.jpeg" alt="скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос" title="скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-660r"><span class="title">скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос</span><p>от <span class="price">660</span> руб.</p></div></li>
						<li><img src="photos/369fa02b2fd1e0a8a6d3480c85fe998d.jpeg" alt="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки" title="костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки"><div class="box" page="atlanta-atn-mashinka-dlya-strizhki-590r"><span class="title">костюм для lpg массажа купить Atlanta АТН-842 Машинка для стрижки</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/cd97bcc69bc590d53dc7bb400d4a398b.jpeg" alt="старый фен Разогреватель для воска Gezatone без базы" title="старый фен Разогреватель для воска Gezatone без базы"><div class="box" page="razogrevatel-dlya-voska-gezatone-bez-bazy-1090r"><span class="title">старый фен Разогреватель для воска Gezatone без базы</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/c34916d8556e9636259427d5254b715e.jpeg" alt="тайский массаж фото Фен Braun HD770" title="тайский массаж фото Фен Braun HD770"><div class="box" page="fen-braun-hd-2750r"><span class="title">тайский массаж фото Фен Braun HD770</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/c5e2bf42df677be8977a7aa9b1c1ff98.jpeg" alt="можно в солярий кормящей маме Фен-щетка Valera Turbo Style 1000 Ionic 603.01-I" title="можно в солярий кормящей маме Фен-щетка Valera Turbo Style 1000 Ionic 603.01-I"><div class="box" page="fenschetka-valera-turbo-style-ionic-i-2080r"><span class="title">можно в солярий кормящей маме Фен-щетка Valera Turbo Style 1000 Ionic 603.01-I</span><p>от <span class="price">2080</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r.php", 0, -4); if (file_exists("comments/vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r.php")) require_once "comments/vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r.php" method="post" onsubmit="return checkForm(this)">
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