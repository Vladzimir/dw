<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vesy-bytovye-tanita-hd-3700r.php","магазин соляриев");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vesy-bytovye-tanita-hd-3700r.php", $nick, $comment);
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
		<title>магазин соляриев Весы бытовые Tanita HD-357  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="магазин соляриев, белая кожа солярий, зеркало напротив кровати, курсы массажа стоимость, зеркало под подушку, весы электронные настольные, эпилятор для лица, электронное зеркало, зеркало стальное, установка фена, кузя заколдованное зеркало, подглядывание в солярии, ремонт фенов в москве, солярий в новосибирске,  заточка ножей машинки для стрижки">
		<meta name="description" content="магазин соляриев Бытовые весы, несомненно, придутся кстати в любом доме.  Бытовые электронные вес...">
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
						<a class="photo" href="photos/07ef3c12017d28c1e6e84a22589adc62.jpeg" title="магазин соляриев Весы бытовые Tanita HD-357"><img src="photos/07ef3c12017d28c1e6e84a22589adc62.jpeg" alt="магазин соляриев Весы бытовые Tanita HD-357" title="магазин соляриев Весы бытовые Tanita HD-357 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/nabor-dlya-irrigatorov-replacement-jet-tips-brje-750r.php"><img src="photos/e6980300706af5c5f92d2f981ed0d61f.jpeg" alt="белая кожа солярий Набор для ирригаторов  REPLACEMENT Jet Tips BRJ-4E" title="белая кожа солярий Набор для ирригаторов  REPLACEMENT Jet Tips BRJ-4E"></a><h2>Набор для ирригаторов  REPLACEMENT Jet Tips BRJ-4E</h2></li>
							<li><a href="http://hometech.elitno.net/poyassauna-dlya-pohudeniya-sauna-belt-690r.php"><img src="photos/be41cad5680b07f0b91fdd49a1969dba.jpeg" alt="зеркало напротив кровати Пояс-сауна для похудения Sauna Belt" title="зеркало напротив кровати Пояс-сауна для похудения Sauna Belt"></a><h2>Пояс-сауна для похудения Sauna Belt</h2></li>
							<li><a href="http://hometech.elitno.net/valik-polukruglyy-lh-usm-1200r.php"><img src="photos/8df4f8dbcfb00ce4c5c74af768f58cb0.jpeg" alt="курсы массажа стоимость Валик полукруглый L60H11 USM-002" title="курсы массажа стоимость Валик полукруглый L60H11 USM-002"></a><h2>Валик полукруглый L60H11 USM-002</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>магазин соляриев Весы бытовые Tanita HD-357</h1>
						<div class="tb"><p>Цена: от <span class="price">3700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_25676.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Бытовые весы, несомненно, придутся кстати в любом доме.  Бытовые электронные весы Tanita HD-357  имеют жидкокристаллический дисплей (2,7 см), сверхтонкий корпус и способны при этом  выдерживать нагрузку до 180   кг. Кроме того, бытовые весы Tanita HD-357 могут стать настоящим украшением  вашего дома – данная модель привлекательна внешне за счет насыщенного красного  цвета корпуса.<strong></strong></p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:       электронные;</li>   <li>Дизайнерская       модель;</li>   <li>Сверхтонкий       корпус;</li>   <li>Материал       корпуса: стекло;</li>   <li>Максимальная       нагрузка: 180 кг;</li>   <li>Точность       измерения: 0,01 кг;</li>   <li>ЖК       дисплей (2,7 см);</li>   <li>Цвет:       красный.</li> </ul> <p><strong>Производитель: Tanita  (Япония)</strong></p> <strong>Гарантия:  3 года</strong> магазин соляриев</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/42e1865e341001a29240b4af1430f064.jpeg" alt="зеркало под подушку Массажное кресло Yamaguchi YA-2100 3D Power" title="зеркало под подушку Массажное кресло Yamaguchi YA-2100 3D Power"><div class="box" page="massazhnoe-kreslo-yamaguchi-ya-d-power-115000r"><span class="title">зеркало под подушку Массажное кресло Yamaguchi YA-2100 3D Power</span><p>от <span class="price">115000</span> руб.</p></div></li>
						<li><img src="photos/b840670e7655c80242a9697a1d40b297.jpeg" alt="весы электронные настольные Аппликатор Ляпко Спутник 5,8" title="весы электронные настольные Аппликатор Ляпко Спутник 5,8"><div class="box" page="applikator-lyapko-sputnik-330r"><span class="title">весы электронные настольные Аппликатор Ляпко Спутник 5,8</span><p>от <span class="price">330</span> руб.</p></div></li>
						<li><img src="photos/ab88833e4637905c1c689b34620dfa36.gif" alt="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко" title="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко"><div class="box" page="applikatorpoyas-universalnyy-shag-igl-mm-segmenta-lyapko-1670r"><span class="title">эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко</span><p>от <span class="price">1670</span> руб.</p></div></li>
						<li><img src="photos/e3a813514433641f393edfdb0982bd86.jpeg" alt="электронное зеркало Массажер для тела Beurer MG80" title="электронное зеркало Массажер для тела Beurer MG80"><div class="box" page="massazher-dlya-tela-beurer-mg-2550r"><span class="title">электронное зеркало Массажер для тела Beurer MG80</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li class="large"><img src="photos/5c6f38767cbe78cc7cf3904289557c01.jpeg" alt="зеркало стальное Гидромассажная ванночка для ног Beurer FB25" title="зеркало стальное Гидромассажная ванночка для ног Beurer FB25"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2650r"><span class="title">зеркало стальное Гидромассажная ванночка для ног Beurer FB25</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/c44922d1ce093fa2b3e6d1218ae0b483.jpeg" alt="установка фена Массажная подушка Beurer MG145" title="установка фена Массажная подушка Beurer MG145"><div class="box" page="massazhnaya-podushka-beurer-mg-3050r"><span class="title">установка фена Массажная подушка Beurer MG145</span><p>от <span class="price">3050</span> руб.</p></div></li>
						<li class="large"><img src="photos/e1f8df1d0cae6e5bc21336622bf3ba88.jpeg" alt="кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850" title="кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-450r"><span class="title">кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/0cb3f14d82c590ca1830a52fdee51586.jpeg" alt="подглядывание в солярии BAMPITS 057A Заколка для придания объема" title="подглядывание в солярии BAMPITS 057A Заколка для придания объема"><div class="box" page="bampits-a-zakolka-dlya-pridaniya-obema-400r"><span class="title">подглядывание в солярии BAMPITS 057A Заколка для придания объема</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/94d139f73d58b1e6125c92b3eccea25e.jpeg" alt="ремонт фенов в москве Горячая бритва Corioliss Heat Razor" title="ремонт фенов в москве Горячая бритва Corioliss Heat Razor"><div class="box" page="goryachaya-britva-corioliss-heat-razor-5400r"><span class="title">ремонт фенов в москве Горячая бритва Corioliss Heat Razor</span><p>от <span class="price">5400</span> руб.</p></div></li>
						<li><img src="photos/f98698f167b448092a3ab477739f68fd.jpeg" alt="солярий в новосибирске Фен Braun HD710" title="солярий в новосибирске Фен Braun HD710"><div class="box" page="fen-braun-hd-2240r"><span class="title">солярий в новосибирске Фен Braun HD710</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/c34916d8556e9636259427d5254b715e.jpeg" alt="тайский массаж фото Фен Braun HD770" title="тайский массаж фото Фен Braun HD770"><div class="box" page="fen-braun-hd-2750r"><span class="title">тайский массаж фото Фен Braun HD770</span><p>от <span class="price">2750</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vesy-bytovye-tanita-hd-3700r.php", 0, -4); if (file_exists("comments/vesy-bytovye-tanita-hd-3700r.php")) require_once "comments/vesy-bytovye-tanita-hd-3700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vesy-bytovye-tanita-hd-3700r.php" method="post" onsubmit="return checkForm(this)">
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