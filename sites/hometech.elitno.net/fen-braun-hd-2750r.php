<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-braun-hd-2750r.php","завивка на длинные волосы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-braun-hd-2750r.php", $nick, $comment);
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
		<title>завивка на длинные волосы Фен Braun HD770  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="завивка на длинные волосы, лучшая машинка для стрижки волос, маникюр педикюр стоимость, зачем закрывают зеркала, сауна баня массаж, эпилятор ровента отзывы, настройка электронных весов, сетка для электробритвы braun, дарсонваль купить минск, массаж википедия, триммер для бороды philips, купить технический фен, использование эпилятора, косметология массаж,  массаж рекомендации">
		<meta name="description" content="завивка на длинные волосы Фен от немецкого производителя с независимой регулировкой нагрева и воздушного п...">
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
						<a class="photo" href="photos/c34916d8556e9636259427d5254b715e.jpeg" title="завивка на длинные волосы Фен Braun HD770"><img src="photos/c34916d8556e9636259427d5254b715e.jpeg" alt="завивка на длинные волосы Фен Braun HD770" title="завивка на длинные волосы Фен Braun HD770 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-happy-stripes-1700r.php"><img src="photos/1d9fb69f8a525aa5b59114c1f14aee5b.jpeg" alt="лучшая машинка для стрижки волос Весы электронные напольные Beurer GS27 happy stripes" title="лучшая машинка для стрижки волос Весы электронные напольные Beurer GS27 happy stripes"></a><h2>Весы электронные напольные Beurer GS27 happy stripes</h2></li>
							<li><a href="http://hometech.elitno.net/beurer-vesy-bg-2000r.php"><img src="photos/396d7ad790b512ebfc9b60cd3372355c.jpeg" alt="маникюр педикюр стоимость BEURER Весы BG28" title="маникюр педикюр стоимость BEURER Весы BG28"></a><h2>BEURER Весы BG28</h2></li>
							<li><a href="http://hometech.elitno.net/nabor-dlya-manikyura-i-pedikyura-s-nasadkami-gezatone-d-590r.php"><img src="photos/b335395a214a3a546c41305f7ef60066.jpeg" alt="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051" title="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051"></a><h2>Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>завивка на длинные волосы Фен Braun HD770</h1>
						<div class="tb"><p>Цена: от <span class="price">2750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_11987.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен от немецкого производителя с независимой регулировкой нагрева и воздушного потока быстро и деликатно позаботится о ваших волосах. Среди достоинств модели можно отметить: подачу холодного воздуха, ионизацию, 3 режима нагрева и 2 режима интенсивности воздушного потока.</p><p>В комплекте идет специальная насадка-концентратор и диффузор. Первая представляет собой полый цилиндр со сплющенным концом. Ее сопло направляет струю воздуха непосредственно на волосы, что обеспечивает их быструю сушку. Диффузор охватывает большую часть поверхности, идеально подходит для создания пышных причесок.</p><p><b>Характеристики: </b></p><ul type=disc><li>Тип: обычный фен <li>Мощность: 2000Вт <li>Независимая регулировка нагрева и воздушного потока: есть <li>Количество режимов нагрева: 3 <li>Количество режимов интенсивности воздушного потока: 2 <li>Дополнительные режимы: подача холодного воздуха, ионизация <li>В комплекте диффузор, концентратор <li>Конструкция: петля для подвешивания</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> завивка на длинные волосы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/06d523dd34a2cdda28a645a220259d39.jpeg" alt="сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29" title="сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29"><div class="box" page="manikyurnopedikyurnyy-nabor-beurer-mp-nasadok-bs-2000r"><span class="title">сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/73a821d3ad225325ed956d5e193b7846.jpeg" alt="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line" title="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-sakura-lineyka-sumo-line-24900r"><span class="title">эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line</span><p>от <span class="price">24900</span> руб.</p></div></li>
						<li><img src="photos/73a70055e41c8a0be127b4a77a5ed03e.jpeg" alt="настройка электронных весов Массажное кресло Anatomico Marco" title="настройка электронных весов Массажное кресло Anatomico Marco"><div class="box" page="massazhnoe-kreslo-anatomico-marco-86000r"><span class="title">настройка электронных весов Массажное кресло Anatomico Marco</span><p>от <span class="price">86000</span> руб.</p></div></li>
						<li><img src="photos/36576e883789273d56cbf397e3ca9ef9.jpeg" alt="сетка для электробритвы braun Массажер роликовый Чемпион" title="сетка для электробритвы braun Массажер роликовый Чемпион"><div class="box" page="massazher-rolikovyy-chempion-410r"><span class="title">сетка для электробритвы braun Массажер роликовый Чемпион</span><p>от <span class="price">410</span> руб.</p></div></li>
						<li class="large"><img src="photos/907dcd2af7058aef19fefe857a6583b5.jpeg" alt="дарсонваль купить минск Гидромассажная ванна для ног BaByliss 8033E" title="дарсонваль купить минск Гидромассажная ванна для ног BaByliss 8033E"><div class="box" page="gidromassazhnaya-vanna-dlya-nog-babyliss-e-3050r"><span class="title">дарсонваль купить минск Гидромассажная ванна для ног BaByliss 8033E</span><p>от <span class="price">3050</span> руб.</p></div></li>
						<li class="large"><img src="photos/7e9947d6fb09feafff538d8cade1a9ad.jpeg" alt="массаж википедия Массажер для глаз Gezatone iSee360 Air Tracktion" title="массаж википедия Массажер для глаз Gezatone iSee360 Air Tracktion"><div class="box" page="massazher-dlya-glaz-gezatone-isee-air-tracktion-4000r"><span class="title">массаж википедия Массажер для глаз Gezatone iSee360 Air Tracktion</span><p>от <span class="price">4000</span> руб.</p></div></li>
						<li class="large"><img src="photos/d623595f96e96179088db87929856903.jpeg" alt="триммер для бороды philips Машинка для стрижки Atlanta АТН-852" title="триммер для бороды philips Машинка для стрижки Atlanta АТН-852"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-400r-2"><span class="title">триммер для бороды philips Машинка для стрижки Atlanta АТН-852</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/c39ef08cf29b8e860e521879ff277e18.jpeg" alt="купить технический фен Подушечки для депиляции Silky Smooth legs полирующие" title="купить технический фен Подушечки для депиляции Silky Smooth legs полирующие"><div class="box" page="podushechki-dlya-depilyacii-silky-smooth-legs-poliruyuschie-200r"><span class="title">купить технический фен Подушечки для депиляции Silky Smooth legs полирующие</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li><img src="photos/2fd87a77eb352ca0621f915c1a9b541b.jpeg" alt="использование эпилятора Фен Atlanta АТН-882" title="использование эпилятора Фен Atlanta АТН-882"><div class="box" page="fen-atlanta-atn-2930r"><span class="title">использование эпилятора Фен Atlanta АТН-882</span><p>от <span class="price">2930</span> руб.</p></div></li>
						<li><img src="photos/903db6a8dda8fc3e969d37c0855d0ace.jpeg" alt="косметология массаж Фен Vitesse VS-944" title="косметология массаж Фен Vitesse VS-944"><div class="box" page="fen-vitesse-vs-640r-2"><span class="title">косметология массаж Фен Vitesse VS-944</span><p>от <span class="price">640</span> руб.</p></div></li>
						<li><img src="photos/249ba2f65a0c23549126bf59f65e62f2.jpeg" alt="заточка ножей машинки для стрижки Зубная щетка BRAUN VITALITY D12.013DW" title="заточка ножей машинки для стрижки Зубная щетка BRAUN VITALITY D12.013DW"><div class="box" page="zubnaya-schetka-braun-vitality-ddw-1040r"><span class="title">заточка ножей машинки для стрижки Зубная щетка BRAUN VITALITY D12.013DW</span><p>от <span class="price">1040</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-braun-hd-2750r.php", 0, -4); if (file_exists("comments/fen-braun-hd-2750r.php")) require_once "comments/fen-braun-hd-2750r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-braun-hd-2750r.php" method="post" onsubmit="return checkForm(this)">
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