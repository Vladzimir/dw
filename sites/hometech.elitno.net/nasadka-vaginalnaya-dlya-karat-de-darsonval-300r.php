<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("nasadka-vaginalnaya-dlya-karat-de-darsonval-300r.php","фитнес массаж");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("nasadka-vaginalnaya-dlya-karat-de-darsonval-300r.php", $nick, $comment);
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
		<title>фитнес массаж Насадка вагинальная для КАРАТ ДЕ-212 Дарсонваль  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="фитнес массаж, девочки в солярии, маникюр педикюр стоимость, замена бокового зеркала, массаж в ярославле, эпиляторы браун цены, мини солярий для лица купить, массаж веником, купить зеркало в спб, массаж инструкция, эпилятор для лица, массаж при заболеваниях, соблазнил массажем, расческа триммер,  фен щетка babyliss отзывы">
		<meta name="description" content="фитнес массаж Медицинский аппарат Дарсонваль пользуется невероятной популярностью во всем мире...">
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
						<a class="photo" href="photos/fe2e571e3ec9d86eec9199812acac221.jpeg" title="фитнес массаж Насадка вагинальная для КАРАТ ДЕ-212 Дарсонваль"><img src="photos/fe2e571e3ec9d86eec9199812acac221.jpeg" alt="фитнес массаж Насадка вагинальная для КАРАТ ДЕ-212 Дарсонваль" title="фитнес массаж Насадка вагинальная для КАРАТ ДЕ-212 Дарсонваль -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-black-flower-1700r.php"><img src="photos/3851332e1073535313e2e6312d13a85e.jpeg" alt="девочки в солярии Весы электронные напольные Beurer GS27 black flower" title="девочки в солярии Весы электронные напольные Beurer GS27 black flower"></a><h2>Весы электронные напольные Beurer GS27 black flower</h2></li>
							<li><a href="http://hometech.elitno.net/beurer-vesy-bg-2000r.php"><img src="photos/396d7ad790b512ebfc9b60cd3372355c.jpeg" alt="маникюр педикюр стоимость BEURER Весы BG28" title="маникюр педикюр стоимость BEURER Весы BG28"></a><h2>BEURER Весы BG28</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-tanita-um-sv-2000r.php"><img src="photos/5fe7b8cbed1da4a369915cce43684931.jpeg" alt="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)" title="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)"></a><h2>Анализатор жира Tanita UM-071 (SV)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>фитнес массаж Насадка вагинальная для КАРАТ ДЕ-212 Дарсонваль</h1>
						<div class="tb"><p>Цена: от <span class="price">300</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_745.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Медицинский аппарат Дарсонваль пользуется невероятной популярностью во всем мире. Прибор предназначен для профилактики и лечения огромного количества всяческих заболеваний. Он очень прост в эксплуатации и практически не имеет противопоказаний. <b>Насадка вагинальная для КАРАТ ДЕ-212 Дарсонваль</b> создана для проведения гинекологических процедур, ее форма и габариты выбраны в соответствии с требованиями их проведения.</p> фитнес массаж</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/25ef57ddaf2ca71d16b13307acd93725.jpeg" alt="массаж в ярославле Анализатор жировой массы Tanita MC-980MA" title="массаж в ярославле Анализатор жировой массы Tanita MC-980MA"><div class="box" page="analizator-zhirovoy-massy-tanita-mcma-669000r"><span class="title">массаж в ярославле Анализатор жировой массы Tanita MC-980MA</span><p>от <span class="price">669000</span> руб.</p></div></li>
						<li><img src="photos/adc8c79d7ed866b242f75ff41255c3ae.jpeg" alt="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830" title="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r"><span class="title">эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/0b842281306633c8ae0a56a5ee94d808.jpeg" alt="мини солярий для лица купить Зеркало настольное Rosenberg S-2083" title="мини солярий для лица купить Зеркало настольное Rosenberg S-2083"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-500r"><span class="title">мини солярий для лица купить Зеркало настольное Rosenberg S-2083</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/e43553d2ace8478e61c73ac89d87f4c2.jpeg" alt="массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)" title="массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)"><div class="box" page="standartnye-nasadki-dlya-irrigatora-waterpik-jte-sht-350r"><span class="title">массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li class="large"><img src="photos/0b1adc14355ab3a2302f6fed24c2179a.jpeg" alt="купить зеркало в спб Комплект насадок к ирригатору (5 шт) DONFEEL OR-900" title="купить зеркало в спб Комплект насадок к ирригатору (5 шт) DONFEEL OR-900"><div class="box" page="komplekt-nasadok-k-irrigatoru-sht-donfeel-or-450r"><span class="title">купить зеркало в спб Комплект насадок к ирригатору (5 шт) DONFEEL OR-900</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li class="large"><img src="photos/b4819229f946baeab966fd9fb7bf8470.jpeg" alt="массаж инструкция Массажное кресло Yamaguchi YA-2800" title="массаж инструкция Массажное кресло Yamaguchi YA-2800"><div class="box" page="massazhnoe-kreslo-yamaguchi-ya-270000r"><span class="title">массаж инструкция Массажное кресло Yamaguchi YA-2800</span><p>от <span class="price">270000</span> руб.</p></div></li>
						<li class="large"><img src="photos/ab88833e4637905c1c689b34620dfa36.gif" alt="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко" title="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко"><div class="box" page="applikatorpoyas-universalnyy-shag-igl-mm-segmenta-lyapko-1670r"><span class="title">эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко</span><p>от <span class="price">1670</span> руб.</p></div></li>
						<li><img src="photos/72b586dfa56f31bfc0f823688b4ab76c.jpeg" alt="массаж при заболеваниях Массажер Beurer MG 16 - цвет красный" title="массаж при заболеваниях Массажер Beurer MG 16 - цвет красный"><div class="box" page="massazher-beurer-mg-cvet-krasnyy-500r"><span class="title">массаж при заболеваниях Массажер Beurer MG 16 - цвет красный</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/f5a755710fa8038f441e31fb91fe98e3.jpeg" alt="соблазнил массажем Массажер BODYKRAFT M-42" title="соблазнил массажем Массажер BODYKRAFT M-42"><div class="box" page="massazher-bodykraft-m-430r"><span class="title">соблазнил массажем Массажер BODYKRAFT M-42</span><p>от <span class="price">430</span> руб.</p></div></li>
						<li><img src="photos/ddeceb0933fcd3947d8b9a4bd8a25da2.jpeg" alt="расческа триммер Подушка массажная BODYKRAFT С-33" title="расческа триммер Подушка массажная BODYKRAFT С-33"><div class="box" page="podushka-massazhnaya-bodykraft-s-4950r"><span class="title">расческа триммер Подушка массажная BODYKRAFT С-33</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/e69da6f2452895f2eb5bd226ad7e5f3c.jpeg" alt="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord" title="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord"><div class="box" page="fen-valera-swiss-turbo-rc-rotocord-2920r"><span class="title">сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord</span><p>от <span class="price">2920</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("nasadka-vaginalnaya-dlya-karat-de-darsonval-300r.php", 0, -4); if (file_exists("comments/nasadka-vaginalnaya-dlya-karat-de-darsonval-300r.php")) require_once "comments/nasadka-vaginalnaya-dlya-karat-de-darsonval-300r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="nasadka-vaginalnaya-dlya-karat-de-darsonval-300r.php" method="post" onsubmit="return checkForm(this)">
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