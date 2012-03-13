<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vosk-dlya-depilyacii-rica-bananovyy-v-kartridzhe-ml-150r.php","фен braun satin hair");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vosk-dlya-depilyacii-rica-bananovyy-v-kartridzhe-ml-150r.php", $nick, $comment);
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
		<title>фен braun satin hair Воск для депиляции Rica, банановый в картридже 100 мл  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="фен braun satin hair, массаж при гайморите, медовый массаж отзывы, эпиляторы браун цены, солярий сан сити, тайский массаж в самаре, массаж коломенская, экзотический массаж, ровента фен щетка цена, массаж конечностей, каталог зеркал, самостоятельный массаж лица, ионизатор воды из серебра, эпиляторы применение,  машинки для стрижки волос thrive">
		<meta name="description" content="фен braun satin hair Кремообразный воск для депиляции светло-желтого цвета содержит в своем составе э...">
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
						<a class="photo" href="photos/eced31968733a84b4149112c9946e503.jpeg" title="фен braun satin hair Воск для депиляции Rica, банановый в картридже 100 мл"><img src="photos/eced31968733a84b4149112c9946e503.jpeg" alt="фен braun satin hair Воск для депиляции Rica, банановый в картридже 100 мл" title="фен braun satin hair Воск для депиляции Rica, банановый в картридже 100 мл -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-2400r.php"><img src="photos/2b0830cb971a08fbcbc59104f1b6f567.jpeg" alt="массаж при гайморите Анализатор жира (состава тела) Tanita BC-540" title="массаж при гайморите Анализатор жира (состава тела) Tanita BC-540"></a><h2>Анализатор жира (состава тела) Tanita BC-540</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-xstyle-3470r.php"><img src="photos/62f22bbdc8f17106e4896866b5a83f55.jpeg" alt="медовый массаж отзывы Выпрямитель Valera X-Style 645.01" title="медовый массаж отзывы Выпрямитель Valera X-Style 645.01"></a><h2>Выпрямитель Valera X-Style 645.01</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-350r.php"><img src="photos/adc8c79d7ed866b242f75ff41255c3ae.jpeg" alt="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830" title="эпиляторы браун цены Электрощипцы для выпрямления волос Atlanta АТН-830"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-830</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>фен braun satin hair Воск для депиляции Rica, банановый в картридже 100 мл</h1>
						<div class="tb"><p>Цена: от <span class="price">150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14404.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Кремообразный воск для депиляции светло-желтого цвета содержит в своем составе экстракт банана, витамин С и диоксид титана. Препарат не только быстро и эффективно удаляет нежелательные волосы, но и активно питает и увлажняет кожу.</p><p>Уникальный состав хорошо снимает покраснение, препятствует появления пигментации и морщин и активно питает кожный покров. Для использования средства, необходимо предварительно разогреть картридж в специальном нагревателе. Температура плавления воска +37С, при ее достижении субстанцию наносят на кожу роликом в направлении роста волос, после чего снимают в противоположном направлении при помощи полосок для эпиляции.</p><p><b>Характеристики:</b></p><ul type=disc><li>В составе: экстракт банана, витамин С, диоксид титана <li>Тип кожи: для всех типов кожи <li>Температура плавления +37С</li></ul><p><b>Производитель:</b> RICA S.p.a.</p><p><b>Страна:</b> Италия.</p> фен braun satin hair</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a4916afed5e89e4f7b9b3539fdd5dbae.jpeg" alt="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835" title="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835"><div class="box" page="elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-700r"><span class="title">солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/2f9a3ffb10b1f6db25db2e1360f39b48.jpeg" alt="тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое" title="тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое"><div class="box" page="zerkalo-dvustoronnee-valera-kosmeticheskoe-1530r"><span class="title">тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое</span><p>от <span class="price">1530</span> руб.</p></div></li>
						<li><img src="photos/f55d8efc38dd27166eefe179a3e555a4.jpeg" alt="массаж коломенская Зеркало настольное Rosenberg S-2084" title="массаж коломенская Зеркало настольное Rosenberg S-2084"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-890r"><span class="title">массаж коломенская Зеркало настольное Rosenberg S-2084</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/2d366b96963f05922aa6b4a18209076a.jpeg" alt="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"><div class="box" page="parodontologicheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r"><span class="title">экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li class="large"><img src="photos/92ff75b9dfa5ef091ca17cf4b292a150.jpeg" alt="ровента фен щетка цена Термопояс для похудения Trimmer" title="ровента фен щетка цена Термопояс для похудения Trimmer"><div class="box" page="termopoyas-dlya-pohudeniya-trimmer-300r"><span class="title">ровента фен щетка цена Термопояс для похудения Trimmer</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li class="large"><img src="photos/170780b58e3b6d00de22deb7936fbf1b.jpeg" alt="массаж конечностей Расческа-вибромассажер Massage Hair Brush" title="массаж конечностей Расческа-вибромассажер Massage Hair Brush"><div class="box" page="rascheskavibromassazher-massage-hair-brush-100r"><span class="title">массаж конечностей Расческа-вибромассажер Massage Hair Brush</span><p>от <span class="price">100</span> руб.</p></div></li>
						<li class="large"><img src="photos/c247036e9dbe0b43a67b23bfb43ff648.jpeg" alt="каталог зеркал Массажная подушка ZENET TL-2002-D" title="каталог зеркал Массажная подушка ZENET TL-2002-D"><div class="box" page="massazhnaya-podushka-zenet-tld-750r"><span class="title">каталог зеркал Массажная подушка ZENET TL-2002-D</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li><img src="photos/ae9da361619c92f9a8cf3fb8e35d98ca.jpeg" alt="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг" title="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг"><div class="box" page="corioliss-brush-collection-ionnyy-termobrashing-630r"><span class="title">самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/5f5038653f3c2015ec2e5347d9b0e3ea.jpeg" alt="ионизатор воды из серебра Электрическая зубная щетка FlexCare HX 6982-10" title="ионизатор воды из серебра Электрическая зубная щетка FlexCare HX 6982-10"><div class="box" page="elektricheskaya-zubnaya-schetka-flexcare-hx-4700r"><span class="title">ионизатор воды из серебра Электрическая зубная щетка FlexCare HX 6982-10</span><p>от <span class="price">4700</span> руб.</p></div></li>
						<li><img src="photos/4f0d44e7cb6c743895b0e58779c7d5e8.jpeg" alt="эпиляторы применение Зубная щетка коробка BRAUN VITALITY Эксперт" title="эпиляторы применение Зубная щетка коробка BRAUN VITALITY Эксперт"><div class="box" page="zubnaya-schetka-korobka-braun-vitality-ekspert-1060r"><span class="title">эпиляторы применение Зубная щетка коробка BRAUN VITALITY Эксперт</span><p>от <span class="price">1060</span> руб.</p></div></li>
						<li><img src="photos/a035fa7eaf2998d538038ae314f79442.jpeg" alt="зеркало горизонтальное Эпилятор Braun 5180 Xelle" title="зеркало горизонтальное Эпилятор Braun 5180 Xelle"><div class="box" page="epilyator-braun-xelle-2450r"><span class="title">зеркало горизонтальное Эпилятор Braun 5180 Xelle</span><p>от <span class="price">2450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vosk-dlya-depilyacii-rica-bananovyy-v-kartridzhe-ml-150r.php", 0, -4); if (file_exists("comments/vosk-dlya-depilyacii-rica-bananovyy-v-kartridzhe-ml-150r.php")) require_once "comments/vosk-dlya-depilyacii-rica-bananovyy-v-kartridzhe-ml-150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vosk-dlya-depilyacii-rica-bananovyy-v-kartridzhe-ml-150r.php" method="post" onsubmit="return checkForm(this)">
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