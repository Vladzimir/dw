<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-dlya-uhoda-za-kozhey-lica-gezatone-m-5000r.php","магазин эпиляторов");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-dlya-uhoda-za-kozhey-lica-gezatone-m-5000r.php", $nick, $comment);
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
		<title>магазин эпиляторов Массажер для ухода за кожей лица Gezatone m708  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="магазин эпиляторов, лучшая машинка для стрижки волос, солярий купить дешево, продажа машинок для стрижки, нечего на зеркало пенять, акупунктурный массаж, предлагаю массаж, тайский массаж в самаре, построение изображения в зеркале, электробритва philips at750, расческа триммер, женщина перед зеркалом, двигатель фена, купить фен в минске,  домашние лазерные эпиляторы отзывы">
		<meta name="description" content="магазин эпиляторов С массажером Gezatone Вы получите косметический салон прямо у себя дома! С ним м...">
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
						<a class="photo" href="photos/0247c938b69c64f973b5b1fe26680c59.jpeg" title="магазин эпиляторов Массажер для ухода за кожей лица Gezatone m708"><img src="photos/0247c938b69c64f973b5b1fe26680c59.jpeg" alt="магазин эпиляторов Массажер для ухода за кожей лица Gezatone m708" title="магазин эпиляторов Массажер для ухода за кожей лица Gezatone m708 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-happy-stripes-1700r.php"><img src="photos/1d9fb69f8a525aa5b59114c1f14aee5b.jpeg" alt="лучшая машинка для стрижки волос Весы электронные напольные Beurer GS27 happy stripes" title="лучшая машинка для стрижки волос Весы электронные напольные Beurer GS27 happy stripes"></a><h2>Весы электронные напольные Beurer GS27 happy stripes</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-1500r.php"><img src="photos/46a258cf502663e3d7c0b8854b757ddf.jpeg" alt="солярий купить дешево Весы электронные напольные Beurer GS28" title="солярий купить дешево Весы электронные напольные Beurer GS28"></a><h2>Весы электронные напольные Beurer GS28</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-bg-2950r.php"><img src="photos/71c60833c0bdd329311fc5385da9ccc3.gif" alt="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39" title="продажа машинок для стрижки Весы электронные напольные с анализатором жира BG39"></a><h2>Весы электронные напольные с анализатором жира BG39</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>магазин эпиляторов Массажер для ухода за кожей лица Gezatone m708</h1>
						<div class="tb"><p>Цена: от <span class="price">5000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12134.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>С <b>массажером Gezatone</b> Вы получите косметический салон прямо у себя дома! С ним можно самостоятельно проводить различные процедуры по восстановлению тонуса и упругости кожи, ее общему оздоровлению, разглаживанию морщинок, моделированию овала лица. Расслабьтесь и получайте от жизни всё: теперь можно не бояться выражать свои эмоции, смело улыбаться и морщить лоб, грустить и щуриться от солнца – массажер позаботится об устранении морщин. Эффект от использования прибора заметен уже после первой процедуры.</p><p>Миниатюрный многофункциональный аппарат сочетает в себе три популярных эффективных профессиональных методики: гальванические токи, микротоки и микротоки Лотти. Первая методика служит для питания и увлажнения кожи, микротоки осуществляют безоперационную подтяжку кожи лица, а микротоки Лотти превосходно разглаживают морщины. Три сменных насадки осуществляют комфортное воздействие массажера в каждой из этих методик. Достигнутый результат после применения аппарата Gezatone может сохраняться до нескольких месяцев. Также устройство используется для профилактики появления морщин.</p><p><b>Комплектация:</b></p><ul type=disc><li>Аппарат; <li>Сетевой адаптер 1 шт.; <li>Инструкция по эксплуатации; <li>Упаковочная коробка.</li></ul><p><b>Производитель:</b> Gezanne.</p><p><b>Страна:</b> Франция.</p> магазин эпиляторов</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/12c3045da48a854da3c3024e979ea56d.jpeg" alt="нечего на зеркало пенять Анализатор жира (состава тела) Tanita BC-351" title="нечего на зеркало пенять Анализатор жира (состава тела) Tanita BC-351"><div class="box" page="analizator-zhira-sostava-tela-tanita-bc-11790r"><span class="title">нечего на зеркало пенять Анализатор жира (состава тела) Tanita BC-351</span><p>от <span class="price">11790</span> руб.</p></div></li>
						<li><img src="photos/95f83d2fc77a8c1038cbf28dc7b115c0.jpeg" alt="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933" title="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933"><div class="box" page="schipcy-dlya-vypryamleniya-volos-professionalnyy-stilist-vitesse-vs-1130r"><span class="title">акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933</span><p>от <span class="price">1130</span> руб.</p></div></li>
						<li><img src="photos/ebe73366b541ce25ab906d91486c2572.jpeg" alt="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм" title="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм"><div class="box" page="schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1430r"><span class="title">предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм</span><p>от <span class="price">1430</span> руб.</p></div></li>
						<li><img src="photos/2f9a3ffb10b1f6db25db2e1360f39b48.jpeg" alt="тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое" title="тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое"><div class="box" page="zerkalo-dvustoronnee-valera-kosmeticheskoe-1530r"><span class="title">тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое</span><p>от <span class="price">1530</span> руб.</p></div></li>
						<li class="large"><img src="photos/e302a52396d03041a39ed52588cd8a9a.jpeg" alt="построение изображения в зеркале Раскладной массажный стол US Medica Super Light линейка Sumo Line" title="построение изображения в зеркале Раскладной массажный стол US Medica Super Light линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-super-light-lineyka-sumo-line-15000r"><span class="title">построение изображения в зеркале Раскладной массажный стол US Medica Super Light линейка Sumo Line</span><p>от <span class="price">15000</span> руб.</p></div></li>
						<li class="large"><img src="photos/e83780f442fe720f2b4d56bdd2221d0b.jpeg" alt="электробритва philips at750 Валик усеченный круг L64D14 USM-007" title="электробритва philips at750 Валик усеченный круг L64D14 USM-007"><div class="box" page="valik-usechennyy-krug-ld-usm-1200r"><span class="title">электробритва philips at750 Валик усеченный круг L64D14 USM-007</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/6ae208b49a66164eadf1ef675193d7aa.jpeg" alt="расческа триммер Миостимулятор Omron E2 Elite" title="расческа триммер Миостимулятор Omron E2 Elite"><div class="box" page="miostimulyator-omron-e-elite-2810r"><span class="title">расческа триммер Миостимулятор Omron E2 Elite</span><p>от <span class="price">2810</span> руб.</p></div></li>
						<li><img src="photos/824ee45e08163a2c1814ad6f375574d1.png" alt="женщина перед зеркалом Ручной массажер US-Medica Magic Peeling" title="женщина перед зеркалом Ручной массажер US-Medica Magic Peeling"><div class="box" page="ruchnoy-massazher-usmedica-magic-peeling-990r"><span class="title">женщина перед зеркалом Ручной массажер US-Medica Magic Peeling</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/36d6f16e06cc1d8986837d6c2ad71500.jpeg" alt="двигатель фена Машинка для стрижки Atlanta АТН-844" title="двигатель фена Машинка для стрижки Atlanta АТН-844"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-500r"><span class="title">двигатель фена Машинка для стрижки Atlanta АТН-844</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/06a7400bd6489ecdebf0a840f4cfdc3f.jpeg" alt="купить фен в минске Триммер Vitesse VS-382" title="купить фен в минске Триммер Vitesse VS-382"><div class="box" page="trimmer-vitesse-vs-440r"><span class="title">купить фен в минске Триммер Vitesse VS-382</span><p>от <span class="price">440</span> руб.</p></div></li>
						<li><img src="photos/c34916d8556e9636259427d5254b715e.jpeg" alt="тайский массаж фото Фен Braun HD770" title="тайский массаж фото Фен Braun HD770"><div class="box" page="fen-braun-hd-2750r"><span class="title">тайский массаж фото Фен Braun HD770</span><p>от <span class="price">2750</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-dlya-uhoda-za-kozhey-lica-gezatone-m-5000r.php", 0, -4); if (file_exists("comments/massazher-dlya-uhoda-za-kozhey-lica-gezatone-m-5000r.php")) require_once "comments/massazher-dlya-uhoda-za-kozhey-lica-gezatone-m-5000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-dlya-uhoda-za-kozhey-lica-gezatone-m-5000r.php" method="post" onsubmit="return checkForm(this)">
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