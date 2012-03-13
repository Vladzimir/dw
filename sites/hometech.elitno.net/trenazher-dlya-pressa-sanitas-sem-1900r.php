<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("trenazher-dlya-pressa-sanitas-sem-1900r.php","триммер 1000");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("trenazher-dlya-pressa-sanitas-sem-1900r.php", $nick, $comment);
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
		<title>триммер 1000 Тренажер для пресса Sanitas SEM30  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="триммер 1000, читать книгу зеркало, фен щетка цена, эпиляторы браун цены, чувственный массаж, дарсонваль для лица, сколько в крови держится фен, мягкий массаж, ирригатор цена, каталог зеркал, дарсонваль противопоказания, куплю зеркало в ванную, фен строительный bosch, сетчатая электробритва,  зеркала на логан">
		<meta name="description" content="триммер 1000 Вы любите спорт и следите за своей фигурой? В таком случае  ценным приобретением...">
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
						<a class="photo" href="photos/6d4dd781ff315f609772a193ec85e622.jpeg" title="триммер 1000 Тренажер для пресса Sanitas SEM30"><img src="photos/6d4dd781ff315f609772a193ec85e622.jpeg" alt="триммер 1000 Тренажер для пресса Sanitas SEM30" title="триммер 1000 Тренажер для пресса Sanitas SEM30 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-ess-2530r.php"><img src="photos/6320dccf20857c12aa3b605bb831003f.jpeg" alt="читать книгу зеркало Выпрямитель для волос Braun ESS" title="читать книгу зеркало Выпрямитель для волос Braun ESS"></a><h2>Выпрямитель для волос Braun ESS</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-600r.php"><img src="photos/c27a4d89a2f0dd3ef16052fa67829ba2.jpeg" alt="фен щетка цена Зеркало Beurer BS 29  косметическое" title="фен щетка цена Зеркало Beurer BS 29  косметическое"></a><h2>Зеркало Beurer BS 29  косметическое</h2></li>
							<li><a href="http://hometech.elitno.net/pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php"><img src="photos/5a23805b006653a6cc417fee14de0eae.jpeg" alt="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста" title="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста"></a><h2>Прибор для получения «Живой» и «Мертвой» воды Мелеста</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>триммер 1000 Тренажер для пресса Sanitas SEM30</h1>
						<div class="tb"><p>Цена: от <span class="price">1900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26023.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вы любите спорт и следите за своей фигурой? В таком случае  ценным приобретением для вас станет тренажер для пресса. Тренажер для пресса  Sanitas SEM30 от немецкой компании-производителя имеет гибкий пояс с лентой  оптимального размера, регулируемую интенсивность нагрузки и целых 5 программ  тренировок! Кроме того. Данный тренажер привлекателен внешне – за счет удачного  сочетания черного и синего цветов. </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Гибкий       пояс с лентой-липучкой; </li>   <li>Размер       пояса: объем талии от 70 до140 см; </li>   <li>Специальные       контактные электроды (не требуется контактный гель или запасные       электроды); </li>   <li>5       программ тренировок (22 - 31 минута); </li>   <li>Регулируемая       интенсивность: от 0 до 25;</li>   <li>Выходная       частота: 30 - 80 Гц Hz; </li>   <li>Длительность       импульсов: 200 мкс на фазу;</li>   <li>Цвет:       черный/синий.</li> </ul> <p><strong>Производитель:  Sanitas (Германия)</strong><br>     <strong>Гарантия: 1 год</strong></p> триммер 1000</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c225afb28f1b6e082ea5b6d0dfd8a7ac.jpeg" alt="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)" title="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)"><div class="box" page="beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r"><span class="title">чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/fe041902a5ae67f02c11b97827de200a.jpeg" alt="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA" title="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-titan-lineyka-spa-34000r"><span class="title">дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA</span><p>от <span class="price">34000</span> руб.</p></div></li>
						<li><img src="photos/394000ec0f3455ebe103d8192764620a.jpeg" alt="сколько в крови держится фен Массажное кресло Anatomico Leonardo" title="сколько в крови держится фен Массажное кресло Anatomico Leonardo"><div class="box" page="massazhnoe-kreslo-anatomico-leonardo-107000r"><span class="title">сколько в крови держится фен Массажное кресло Anatomico Leonardo</span><p>от <span class="price">107000</span> руб.</p></div></li>
						<li><img src="photos/582bcb29ca20130c2748b22d513bbded.jpeg" alt="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)" title="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)"><div class="box" page="poyasmiostimulyator-dvuhkanalnyy-abtronic-x-bez-gelya-1500r"><span class="title">мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/ce1d55bfc4c54022422846b14975fcfd.jpeg" alt="ирригатор цена Массажер Beurer MG 310" title="ирригатор цена Массажер Beurer MG 310"><div class="box" page="massazher-beurer-mg-14000r"><span class="title">ирригатор цена Массажер Beurer MG 310</span><p>от <span class="price">14000</span> руб.</p></div></li>
						<li class="large"><img src="photos/c247036e9dbe0b43a67b23bfb43ff648.jpeg" alt="каталог зеркал Массажная подушка ZENET TL-2002-D" title="каталог зеркал Массажная подушка ZENET TL-2002-D"><div class="box" page="massazhnaya-podushka-zenet-tld-750r"><span class="title">каталог зеркал Массажная подушка ZENET TL-2002-D</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li class="large"><img src="photos/935fc905a1cb4968deda57e9f3d264e8.jpeg" alt="дарсонваль противопоказания Машинка для стрижки волос и бороды Babyliss E930XE" title="дарсонваль противопоказания Машинка для стрижки волос и бороды Babyliss E930XE"><div class="box" page="mashinka-dlya-strizhki-volos-i-borody-babyliss-exe-1890r"><span class="title">дарсонваль противопоказания Машинка для стрижки волос и бороды Babyliss E930XE</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li><img src="photos/d8f63990242e9c9f3d5c4cfc322b0bcb.jpeg" alt="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции" title="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции"><div class="box" page="beurer-hl-pribor-svetovoy-epilyacii-18500r"><span class="title">куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции</span><p>от <span class="price">18500</span> руб.</p></div></li>
						<li><img src="photos/9fe714da2d9406c3a47e4f226e874bb7.jpeg" alt="фен строительный bosch Триммер Valera 619.01 для коррекции бровей и стрижки волос в области носа и ушей" title="фен строительный bosch Триммер Valera 619.01 для коррекции бровей и стрижки волос в области носа и ушей"><div class="box" page="trimmer-valera-dlya-korrekcii-brovey-i-strizhki-volos-v-oblasti-nosa-i-ushey-820r"><span class="title">фен строительный bosch Триммер Valera 619.01 для коррекции бровей и стрижки волос в области носа и ушей</span><p>от <span class="price">820</span> руб.</p></div></li>
						<li><img src="photos/73724a05bae5cd52f1287e49c524aba2.jpeg" alt="сетчатая электробритва Фен Atlanta АТН-865" title="сетчатая электробритва Фен Atlanta АТН-865"><div class="box" page="fen-atlanta-atn-720r-2"><span class="title">сетчатая электробритва Фен Atlanta АТН-865</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/f858c82b10a39109d5171ba0356b80f7.jpeg" alt="правильный массаж живота Фен Vitesse VS-943 сиреневый" title="правильный массаж живота Фен Vitesse VS-943 сиреневый"><div class="box" page="fen-vitesse-vs-sirenevyy-640r"><span class="title">правильный массаж живота Фен Vitesse VS-943 сиреневый</span><p>от <span class="price">640</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("trenazher-dlya-pressa-sanitas-sem-1900r.php", 0, -4); if (file_exists("comments/trenazher-dlya-pressa-sanitas-sem-1900r.php")) require_once "comments/trenazher-dlya-pressa-sanitas-sem-1900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="trenazher-dlya-pressa-sanitas-sem-1900r.php" method="post" onsubmit="return checkForm(this)">
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