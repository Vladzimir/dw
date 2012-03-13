<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vypryamitel-dlya-volos-braun-ess-2530r.php","массаж простаты на дому");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vypryamitel-dlya-volos-braun-ess-2530r.php", $nick, $comment);
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
		<title>массаж простаты на дому Выпрямитель для волос Braun ESS  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж простаты на дому, зеркало войны, зеркала бмв х5, солярий сан сити, ирригатор полости рта braun, картридж для электробритвы, мягкий массаж, электронное зеркало, солярий великий новгород, массаж нижних конечностей, химическая завивка волос крупные локоны, электронные весы дешево, подглядывание в солярии, массаж скрытая смотреть,  машинка для стрижки ровента">
		<meta name="description" content="массаж простаты на дому Профессиональный выпрямитель для волос с плавающими керамическими пластинами с д...">
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
						<a class="photo" href="photos/6320dccf20857c12aa3b605bb831003f.jpeg" title="массаж простаты на дому Выпрямитель для волос Braun ESS"><img src="photos/6320dccf20857c12aa3b605bb831003f.jpeg" alt="массаж простаты на дому Выпрямитель для волос Braun ESS" title="массаж простаты на дому Выпрямитель для волос Braun ESS -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-napolnye-s-analizatorom-zhira-i-vody-gezatone-esga-1200r.php"><img src="photos/43a957bd80b6ff4e3954c5f31015c90c.jpeg" alt="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501" title="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501"></a><h2>Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-babyliss-ste-1790r.php"><img src="photos/56fca94770a317afac3ae4c5325c2d17.jpeg" alt="зеркала бмв х5 Выпрямитель для волос BaByliss ST229E" title="зеркала бмв х5 Выпрямитель для волос BaByliss ST229E"></a><h2>Выпрямитель для волос BaByliss ST229E</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-700r.php"><img src="photos/a4916afed5e89e4f7b9b3539fdd5dbae.jpeg" alt="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835" title="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-835</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж простаты на дому Выпрямитель для волос Braun ESS</h1>
						<div class="tb"><p>Цена: от <span class="price">2530</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_11984.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Профессиональный выпрямитель для волос с плавающими керамическими пластинами с деликатным воздействием, не повредит и не пересушит ваши локоны.</p><p>Среди достоинств модели можно отметить: наличие дисплея, защиту от перегрева, быстрый нагрев (30-90 секунд), автоотключение и специальный холодный наконечник, который не даст вам обжечься. Температурный диапазон в 130С - 200С и 5 различных режимов позволяют подобрать оптимальный вариант работы. </p><p><b>Характеристики: </b></p><ul type=disc><li>Тип: щипцы <li>Количество режимов: 5 <li>Диапазон температур: 130С - 200С <li>В комплекте насадка для выпрямления <li>Покрытие насадок: керамическое <li>Дисплей: есть <li>Длина сетевого шнура: 2м <li>Защита от перегрева: есть <li>Быстрый нагрев стайлера от 30 до 90 секунда <li>Авто - отключение через 30 минут работы <li>Специальный холодный наконечник</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> массаж простаты на дому</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/141cd8baea6e8db6239edb8d6c9e1bdf.jpeg" alt="ирригатор полости рта braun Комплект пародонтальных насадок к ирригатору (2 шт) DONFEEL OR-820M" title="ирригатор полости рта braun Комплект пародонтальных насадок к ирригатору (2 шт) DONFEEL OR-820M"><div class="box" page="komplekt-parodontalnyh-nasadok-k-irrigatoru-sht-donfeel-orm-270r"><span class="title">ирригатор полости рта braun Комплект пародонтальных насадок к ирригатору (2 шт) DONFEEL OR-820M</span><p>от <span class="price">270</span> руб.</p></div></li>
						<li><img src="photos/2c25dbb509feb3825290d2d56dd8e055.jpeg" alt="картридж для электробритвы Стационарный массажный стол US Medica Olimp" title="картридж для электробритвы Стационарный массажный стол US Medica Olimp"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-olimp-42000r"><span class="title">картридж для электробритвы Стационарный массажный стол US Medica Olimp</span><p>от <span class="price">42000</span> руб.</p></div></li>
						<li><img src="photos/582bcb29ca20130c2748b22d513bbded.jpeg" alt="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)" title="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)"><div class="box" page="poyasmiostimulyator-dvuhkanalnyy-abtronic-x-bez-gelya-1500r"><span class="title">мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/e3a813514433641f393edfdb0982bd86.jpeg" alt="электронное зеркало Массажер для тела Beurer MG80" title="электронное зеркало Массажер для тела Beurer MG80"><div class="box" page="massazher-dlya-tela-beurer-mg-2550r"><span class="title">электронное зеркало Массажер для тела Beurer MG80</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li class="large"><img src="photos/131e52acd4018df8f469d0b420949fb3.jpeg" alt="солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L" title="солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L"><div class="box" page="vibromassazher-clear-fit-life-beauty-cf-l-7490r"><span class="title">солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L</span><p>от <span class="price">7490</span> руб.</p></div></li>
						<li class="large"><img src="photos/a3331b51ae07cba95c43ef802a9f621a.jpeg" alt="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61" title="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61"><div class="box" page="massazher-dlya-nog-bodykraft-fm-12990r"><span class="title">массаж нижних конечностей Массажер для ног BODYKRAFT FM-61</span><p>от <span class="price">12990</span> руб.</p></div></li>
						<li class="large"><img src="photos/5811756c6fd41ce9cafcc5b01b7c35da.jpeg" alt="химическая завивка волос крупные локоны Машинка для депиляции и стрижки волос и бороды beauty and health (Триммер Just a Trim)" title="химическая завивка волос крупные локоны Машинка для депиляции и стрижки волос и бороды beauty and health (Триммер Just a Trim)"><div class="box" page="mashinka-dlya-depilyacii-i-strizhki-volos-i-borody-beauty-and-health-trimmer-just-a-trim-690r"><span class="title">химическая завивка волос крупные локоны Машинка для депиляции и стрижки волос и бороды beauty and health (Триммер Just a Trim)</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/68c5ed4efd2baf3bd4ba5079f66017fc.jpeg" alt="электронные весы дешево Солярий для лица Efbe-Schott 826" title="электронные весы дешево Солярий для лица Efbe-Schott 826"><div class="box" page="solyariy-dlya-lica-efbeschott-4800r"><span class="title">электронные весы дешево Солярий для лица Efbe-Schott 826</span><p>от <span class="price">4800</span> руб.</p></div></li>
						<li><img src="photos/0cb3f14d82c590ca1830a52fdee51586.jpeg" alt="подглядывание в солярии BAMPITS 057A Заколка для придания объема" title="подглядывание в солярии BAMPITS 057A Заколка для придания объема"><div class="box" page="bampits-a-zakolka-dlya-pridaniya-obema-400r"><span class="title">подглядывание в солярии BAMPITS 057A Заколка для придания объема</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/ce51f4efb2afc504cf5b3a55b1bc269e.jpeg" alt="массаж скрытая смотреть Триммер BaByliss E830XE" title="массаж скрытая смотреть Триммер BaByliss E830XE"><div class="box" page="trimmer-babyliss-exe-1790r"><span class="title">массаж скрытая смотреть Триммер BaByliss E830XE</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/4d14f143b5be3fa914764db01c50d2b4.jpeg" alt="заточка ножей машинки для стрижки Фен Atlanta АТН-860" title="заточка ножей машинки для стрижки Фен Atlanta АТН-860"><div class="box" page="fen-atlanta-atn-500r"><span class="title">заточка ножей машинки для стрижки Фен Atlanta АТН-860</span><p>от <span class="price">500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vypryamitel-dlya-volos-braun-ess-2530r.php", 0, -4); if (file_exists("comments/vypryamitel-dlya-volos-braun-ess-2530r.php")) require_once "comments/vypryamitel-dlya-volos-braun-ess-2530r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vypryamitel-dlya-volos-braun-ess-2530r.php" method="post" onsubmit="return checkForm(this)">
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