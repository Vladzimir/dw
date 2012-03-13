<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atn-450r.php","солярий мулатка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atn-450r.php", $nick, $comment);
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
		<title>солярий мулатка Фен Atlanta АТН-86  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="солярий мулатка, тайский массаж бесплатно, вакансии маникюр педикюр, домашний эпилятор отзывы, ирригатор waterpik ultra, массаж медом антицеллюлитный, дарсонваль для лица, фокин массаж, фен щетка bosch pha, фен для собак, сетка для электробритвы braun, куплю триммер в москве, электрическая зубная щетка орал би, амфетамин последствия,  массаж в пятигорске">
		<meta name="description" content="солярий мулатка Фен Atlanta АТН-86 – стильный и доступный прибор для сушки волос мощностью 500 В...">
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
						<a class="photo" href="photos/1ad6a3b32c59fb28206bf73e4dc30b08.jpeg" title="солярий мулатка Фен Atlanta АТН-86"><img src="photos/1ad6a3b32c59fb28206bf73e4dc30b08.jpeg" alt="солярий мулатка Фен Atlanta АТН-86" title="солярий мулатка Фен Atlanta АТН-86 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnyy-analizator-sostava-tela-tanita-sc-60000r.php"><img src="photos/e587ff8ffd5e0a34c406f0eff8e7fc05.jpeg" alt="тайский массаж бесплатно Профессиональный анализатор состава тела Tanita SC-330" title="тайский массаж бесплатно Профессиональный анализатор состава тела Tanita SC-330"></a><h2>Профессиональный анализатор состава тела Tanita SC-330</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-bmi-2600r.php"><img src="photos/09cdbe94dd4282881ebf10408413f6e1.jpeg" alt="вакансии маникюр педикюр Весы электронные напольные Beurer GS49 BMI" title="вакансии маникюр педикюр Весы электронные напольные Beurer GS49 BMI"></a><h2>Весы электронные напольные Beurer GS49 BMI</h2></li>
							<li><a href="http://hometech.elitno.net/zauber-elektronnye-napolnye-vesy-eco-1580r-2.php"><img src="photos/3b8c8a335cc3e56920ea3baf010f9e39.jpeg" alt="домашний эпилятор отзывы Zauber Электронные напольные весы  ECO-150" title="домашний эпилятор отзывы Zauber Электронные напольные весы  ECO-150"></a><h2>Zauber Электронные напольные весы  ECO-150</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>солярий мулатка Фен Atlanta АТН-86</h1>
						<div class="tb"><p>Цена: от <span class="price">450</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19823.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-86 – стильный и доступный прибор для сушки волос мощностью 500 Вт, выполненный в эргономичном дизайне. Имеет два уровня интенсивности сушки и шнур с защитой от выкручивания. Снабжен петлей для подвешивания. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Эргономичный дизайн; <li>Защита от перегрева; <li>Два уровня интенсивности сушки; <li>Вращение-фиксация насадки; <li>Петля для подвешивания; <li>Шнур с защитой от выкручивания; <li>Изделие сертифицировано Госстандартом РФ; <li>Соответствует европейским нормам безопасности; <li>Мощность 500W; <li>220-240V, 50Hz  </li></ul><p><strong>Производитель: США</strong></p> солярий мулатка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/da109c8ab3a7beebe47279ad431dfe0e.jpeg" alt="ирригатор waterpik ultra Весы электронные напольные Beurer GS37 (кожа) Glamour" title="ирригатор waterpik ultra Весы электронные напольные Beurer GS37 (кожа) Glamour"><div class="box" page="vesy-elektronnye-napolnye-beurer-gs-kozha-glamour-2750r"><span class="title">ирригатор waterpik ultra Весы электронные напольные Beurer GS37 (кожа) Glamour</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/15986a54082f98b80f57966a0faabc05.jpeg" alt="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"><div class="box" page="standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r"><span class="title">массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/fe041902a5ae67f02c11b97827de200a.jpeg" alt="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA" title="дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-titan-lineyka-spa-34000r"><span class="title">дарсонваль для лица Раскладной массажный стол US Medica Titan линейка SPA</span><p>от <span class="price">34000</span> руб.</p></div></li>
						<li><img src="photos/db50f056381f7d55d9462e3f852c618b.jpeg" alt="фокин массаж Стационарный массажный стол US Medica Profi" title="фокин массаж Стационарный массажный стол US Medica Profi"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-profi-85000r"><span class="title">фокин массаж Стационарный массажный стол US Medica Profi</span><p>от <span class="price">85000</span> руб.</p></div></li>
						<li class="large"><img src="photos/5fa952e080e3e36a9d80c7732a2a4665.png" alt="фен щетка bosch pha Массажное кресло Anatomico Amerigo" title="фен щетка bosch pha Массажное кресло Anatomico Amerigo"><div class="box" page="massazhnoe-kreslo-anatomico-amerigo-114000r"><span class="title">фен щетка bosch pha Массажное кресло Anatomico Amerigo</span><p>от <span class="price">114000</span> руб.</p></div></li>
						<li class="large"><img src="photos/54851ee54bf22158b2c9520830c25070.jpeg" alt="фен для собак Электроды для миостимуляторов Omron" title="фен для собак Электроды для миостимуляторов Omron"><div class="box" page="elektrody-dlya-miostimulyatorov-omron-1250r"><span class="title">фен для собак Электроды для миостимуляторов Omron</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li class="large"><img src="photos/36576e883789273d56cbf397e3ca9ef9.jpeg" alt="сетка для электробритвы braun Массажер роликовый Чемпион" title="сетка для электробритвы braun Массажер роликовый Чемпион"><div class="box" page="massazher-rolikovyy-chempion-410r"><span class="title">сетка для электробритвы braun Массажер роликовый Чемпион</span><p>от <span class="price">410</span> руб.</p></div></li>
						<li><img src="photos/5d92120d3065dfcf7d5f91af9dd4ca58.jpeg" alt="куплю триммер в москве Массажная накидка ZENET TL-2007-Z" title="куплю триммер в москве Массажная накидка ZENET TL-2007-Z"><div class="box" page="massazhnaya-nakidka-zenet-tlz-4950r"><span class="title">куплю триммер в москве Массажная накидка ZENET TL-2007-Z</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/604fac3d6bc90d1a626b6fb1f84938bc.jpeg" alt="электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383" title="электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383"><div class="box" page="mashinka-dlya-strizhki-vitesse-vs-700r"><span class="title">электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/be5252022170b85ea15c275b961b75f2.jpeg" alt="амфетамин последствия Фен Valera Swiss Nano 6000RC Rotocord" title="амфетамин последствия Фен Valera Swiss Nano 6000RC Rotocord"><div class="box" page="fen-valera-swiss-nano-rc-rotocord-2960r"><span class="title">амфетамин последствия Фен Valera Swiss Nano 6000RC Rotocord</span><p>от <span class="price">2960</span> руб.</p></div></li>
						<li><img src="photos/c2cf0bf512fa2b305c7aafb76cac52bb.jpeg" alt="обогрев зеркал заднего вида Фен Braun SPI C2000" title="обогрев зеркал заднего вида Фен Braun SPI C2000"><div class="box" page="fen-braun-spi-c-2540r"><span class="title">обогрев зеркал заднего вида Фен Braun SPI C2000</span><p>от <span class="price">2540</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atn-450r.php", 0, -4); if (file_exists("comments/fen-atlanta-atn-450r.php")) require_once "comments/fen-atlanta-atn-450r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atn-450r.php" method="post" onsubmit="return checkForm(this)">
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