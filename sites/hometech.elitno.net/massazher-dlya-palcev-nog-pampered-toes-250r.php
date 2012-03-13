<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-dlya-palcev-nog-pampered-toes-250r.php","бесплатные курсы массажа");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-dlya-palcev-nog-pampered-toes-250r.php", $nick, $comment);
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
		<title>бесплатные курсы массажа Массажер для пальцев ног Pampered Toes  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="бесплатные курсы массажа, пришла на массаж смотреть, триммер бритва, токи дарсонваля, вконтакте зеркало вход, предлагаю массаж, стайлер для завивки волос braun, купить хороший эпилятор, массаж стопы ребенка, весы электронные acs, куплю весы электронные напольные, электронные весы scarlett, триммер бензиновый husqvarna, сонник зеркало разбитое,  зеркало с полкой для ванной">
		<meta name="description" content="бесплатные курсы массажа Массажер для пальцев ног Pampered Toes приятно расслабит и успокоит ноги после т...">
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
						<a class="photo" href="photos/e19b318cb6be30f4f50f5be72b000917.jpeg" title="бесплатные курсы массажа Массажер для пальцев ног Pampered Toes"><img src="photos/e19b318cb6be30f4f50f5be72b000917.jpeg" alt="бесплатные курсы массажа Массажер для пальцев ног Pampered Toes" title="бесплатные курсы массажа Массажер для пальцев ног Pampered Toes -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-wb-155000r.php"><img src="photos/74f96d002c7070932c6bf46bfe207b40.jpeg" alt="пришла на массаж смотреть Профессиональные электронные весы Tanita WB-630" title="пришла на массаж смотреть Профессиональные электронные весы Tanita WB-630"></a><h2>Профессиональные электронные весы Tanita WB-630</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-exilim-2440r.php"><img src="photos/3e27500e40cc62cf895edc096d8d53b4.jpeg" alt="триммер бритва Выпрямитель Valera Exilim 649.01" title="триммер бритва Выпрямитель Valera Exilim 649.01"></a><h2>Выпрямитель Valera Exilim 649.01</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-professionalnyy-stilist-vitesse-vs-1100r-2.php"><img src="photos/ad47da41148a965d05aa1aedfe6ceaef.jpeg" alt="токи дарсонваля Щипцы для выпрямления волос Профессиональный стилист Vitesse VS-920" title="токи дарсонваля Щипцы для выпрямления волос Профессиональный стилист Vitesse VS-920"></a><h2>Щипцы для выпрямления волос Профессиональный стилист Vitesse VS-920</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>бесплатные курсы массажа Массажер для пальцев ног Pampered Toes</h1>
						<div class="tb"><p>Цена: от <span class="price">250</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_5723.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><strong>Массажер для пальцев ног Pampered Toes </strong>приятно расслабит и успокоит ноги после тяжелого дня. Аппарат имеет абсолютно безопасную гелевую основу, которая благодаря своей гибкости оптимально облегает пальцы ног практически любых размеров. Можно хранить массажер в холодильнике, тогда он снимет отечность, напряжение и усталость. Можно также нагревать его в микроволновке, чтобы улучшить кровообращение и согреть пальцы ног. Попеременное действие (охлажденный-нагретый Pampered Toes) отлично тонизирует сосуды. бесплатные курсы массажа</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ac3c60f4ec3044e4c2c5250cb4b2650e.jpeg" alt="вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль" title="вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-borodavchataya-dlya-karat-de-darsonval-300r"><span class="title">вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/ebe73366b541ce25ab906d91486c2572.jpeg" alt="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм" title="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм"><div class="box" page="schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1430r"><span class="title">предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм</span><p>от <span class="price">1430</span> руб.</p></div></li>
						<li><img src="photos/13b08c422e5d93db5b02db2f9f4cebf3.jpeg" alt="стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)" title="стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)"><div class="box" page="manikyurnopedikyurnyy-nabor-beurer-mp-nasadok-2650r"><span class="title">стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li><img src="photos/bdf8de6c43fee60b8e439a0c6ac204b1.jpeg" alt="купить хороший эпилятор Массажное кресло US Medica Cardio" title="купить хороший эпилятор Массажное кресло US Medica Cardio"><div class="box" page="massazhnoe-kreslo-us-medica-cardio-150000r"><span class="title">купить хороший эпилятор Массажное кресло US Medica Cardio</span><p>от <span class="price">150000</span> руб.</p></div></li>
						<li class="large"><img src="photos/ba9e4c83bef0677448f10a87047b3b54.jpeg" alt="массаж стопы ребенка Массажер Beurer EA34 для акупунктурой терапии" title="массаж стопы ребенка Массажер Beurer EA34 для акупунктурой терапии"><div class="box" page="massazher-beurer-ea-dlya-akupunkturoy-terapii-2850r"><span class="title">массаж стопы ребенка Массажер Beurer EA34 для акупунктурой терапии</span><p>от <span class="price">2850</span> руб.</p></div></li>
						<li class="large"><img src="photos/4b5374ef2a42b13f32ae833077b5a012.jpeg" alt="весы электронные acs Вибромассажер HOUSE FIT НМ-3003" title="весы электронные acs Вибромассажер HOUSE FIT НМ-3003"><div class="box" page="vibromassazher-house-fit-nm-7700r"><span class="title">весы электронные acs Вибромассажер HOUSE FIT НМ-3003</span><p>от <span class="price">7700</span> руб.</p></div></li>
						<li class="large"><img src="photos/a881720fb288bef785b8ec593e51d624.jpeg" alt="куплю весы электронные напольные Гидромассажная ванночка для ног Beurer FB14" title="куплю весы электронные напольные Гидромассажная ванночка для ног Beurer FB14"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-1750r"><span class="title">куплю весы электронные напольные Гидромассажная ванночка для ног Beurer FB14</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/eced31968733a84b4149112c9946e503.jpeg" alt="электронные весы scarlett Воск для депиляции Rica, банановый в картридже 100 мл" title="электронные весы scarlett Воск для депиляции Rica, банановый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-bananovyy-v-kartridzhe-ml-150r"><span class="title">электронные весы scarlett Воск для депиляции Rica, банановый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/411b114c42a782dcb76d7868ef5adbca.jpeg" alt="триммер бензиновый husqvarna Лосьон после депиляции Rica, с экстрактом розы 250мл" title="триммер бензиновый husqvarna Лосьон после депиляции Rica, с экстрактом розы 250мл"><div class="box" page="loson-posle-depilyacii-rica-s-ekstraktom-rozy-ml-600r"><span class="title">триммер бензиновый husqvarna Лосьон после депиляции Rica, с экстрактом розы 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/e69da6f2452895f2eb5bd226ad7e5f3c.jpeg" alt="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord" title="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord"><div class="box" page="fen-valera-swiss-turbo-rc-rotocord-2920r"><span class="title">сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord</span><p>от <span class="price">2920</span> руб.</p></div></li>
						<li><img src="photos/ede11f2c17725c377852bd7c89a582d6.jpeg" alt="солярий в аренду Стерилизатор для зубных щеток Gezatone t4 130811" title="солярий в аренду Стерилизатор для зубных щеток Gezatone t4 130811"><div class="box" page="sterilizator-dlya-zubnyh-schetok-gezatone-t-600r"><span class="title">солярий в аренду Стерилизатор для зубных щеток Gezatone t4 130811</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-dlya-palcev-nog-pampered-toes-250r.php", 0, -4); if (file_exists("comments/massazher-dlya-palcev-nog-pampered-toes-250r.php")) require_once "comments/massazher-dlya-palcev-nog-pampered-toes-250r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-dlya-palcev-nog-pampered-toes-250r.php" method="post" onsubmit="return checkForm(this)">
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