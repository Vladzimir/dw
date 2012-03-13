<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php","введение зеркал");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php", $nick, $comment);
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
		<title>введение зеркал Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="введение зеркал, массаж 2 года, зеркала torrent, креатиновое выпрямление волос, херсон массаж, техника медового массажа, зеркало стальное, массаж головы ребенка, каталог зеркал, фен строительный профессиональный, ремонт фенов в москве, самостоятельный массаж лица, куплю зеркало в ванную, зеркало заднего вида 2107,  зеркала на логан">
		<meta name="description" content="введение зеркал Эффективная работа ирригатора обеспечивается качеством применяемой насадки. Так,...">
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
						<a class="photo" href="photos/15986a54082f98b80f57966a0faabc05.jpeg" title="введение зеркал Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"><img src="photos/15986a54082f98b80f57966a0faabc05.jpeg" alt="введение зеркал Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="введение зеркал Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-2800r.php"><img src="photos/b12e567910272f340a2968fe97934736.jpeg" alt="массаж 2 года Весы электронные напольные с анализатором жира Tanita BC-532" title="массаж 2 года Весы электронные напольные с анализатором жира Tanita BC-532"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-532</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-diagnosticheskie-beurer-bf-5900r.php"><img src="photos/680c415f1a8f04e6d0fb6380807493f2.jpeg" alt="зеркала torrent Весы электронные диагностические Beurer BF100" title="зеркала torrent Весы электронные диагностические Beurer BF100"></a><h2>Весы электронные диагностические Beurer BF100</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-s-opredeleniem-procentnogo-soderzhaniya-zhirovoy-tkani-i-vody-vitesse-vs-1430r.php"><img src="photos/3bdce630cf79b35e88f8b0feecf7c439.jpeg" alt="креатиновое выпрямление волос Весы с определением процентного содержания жировой ткани и воды Vitesse VS-603" title="креатиновое выпрямление волос Весы с определением процентного содержания жировой ткани и воды Vitesse VS-603"></a><h2>Весы с определением процентного содержания жировой ткани и воды Vitesse VS-603</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>введение зеркал Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</h1>
						<div class="tb"><p>Цена: от <span class="price">350</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_835.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Эффективная работа ирригатора обеспечивается качеством применяемой насадки. Так, например, щетинки насадки для ирригатора Waterpik WP100E, WP360E проникают и эффективно очищают межзубные промежутки. Также с помощью насадок можно осуществлять гидромассаж десен, что немаловажно в проведении гигиены полости рта. Насадка очищает труднодоступные обычной щетке места от налета, удаляет остатки пищи, улучшает кровообращение десен.</p><p><b>Производитель:</b> Waterpik Technologies (США)</p> введение зеркал</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/761f0ad81569062a7e0ab609f4286969.jpeg" alt="херсон массаж Выпрямитель Valera Flexa 646.01" title="херсон массаж Выпрямитель Valera Flexa 646.01"><div class="box" page="vypryamitel-valera-flexa-2950r"><span class="title">херсон массаж Выпрямитель Valera Flexa 646.01</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/ca3cac97732e962cf09778cd2b8d779d.jpeg" alt="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care." title="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care."><div class="box" page="gel-dlya-domashnego-uhoda-ftorida-olova-home-care-540r"><span class="title">техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li><img src="photos/a4b82820664bbbaf6613208e966c74f1.jpeg" alt="зеркало стальное Пояс массажный Вибро шейп Vibro Shape" title="зеркало стальное Пояс массажный Вибро шейп Vibro Shape"><div class="box" page="poyas-massazhnyy-vibro-sheyp-vibro-shape-1550r"><span class="title">зеркало стальное Пояс массажный Вибро шейп Vibro Shape</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/bd43b02490b7b213cfdadf5f9ffcb1e0.jpeg" alt="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024" title="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024"><div class="box" page="vakuumnyy-massazher-gezatone-vacu-2990r"><span class="title">массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li class="large"><img src="photos/2bafeeb3a10bb6c208d12092d2b70718.jpeg" alt="каталог зеркал Массажер ZENET TL-MHT-A" title="каталог зеркал Массажер ZENET TL-MHT-A"><div class="box" page="massazher-zenet-tlmhta-1850r"><span class="title">каталог зеркал Массажер ZENET TL-MHT-A</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/e80e018f5a3b9a5d3aab17626d1428ec.png" alt="фен строительный профессиональный Массажная подушка Beurer MG140" title="фен строительный профессиональный Массажная подушка Beurer MG140"><div class="box" page="massazhnaya-podushka-beurer-mg-2900r"><span class="title">фен строительный профессиональный Массажная подушка Beurer MG140</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li class="large"><img src="photos/94d139f73d58b1e6125c92b3eccea25e.jpeg" alt="ремонт фенов в москве Горячая бритва Corioliss Heat Razor" title="ремонт фенов в москве Горячая бритва Corioliss Heat Razor"><div class="box" page="goryachaya-britva-corioliss-heat-razor-5400r"><span class="title">ремонт фенов в москве Горячая бритва Corioliss Heat Razor</span><p>от <span class="price">5400</span> руб.</p></div></li>
						<li><img src="photos/ae9da361619c92f9a8cf3fb8e35d98ca.jpeg" alt="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг" title="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг"><div class="box" page="corioliss-brush-collection-ionnyy-termobrashing-630r"><span class="title">самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/d8f63990242e9c9f3d5c4cfc322b0bcb.jpeg" alt="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции" title="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции"><div class="box" page="beurer-hl-pribor-svetovoy-epilyacii-18500r"><span class="title">куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции</span><p>от <span class="price">18500</span> руб.</p></div></li>
						<li><img src="photos/64a5504595f82bd1747433288ef7e72a.jpeg" alt="зеркало заднего вида 2107 Электрическая зубная щетка FlexCare HX 6902-02" title="зеркало заднего вида 2107 Электрическая зубная щетка FlexCare HX 6902-02"><div class="box" page="elektricheskaya-zubnaya-schetka-flexcare-hx-4750r"><span class="title">зеркало заднего вида 2107 Электрическая зубная щетка FlexCare HX 6902-02</span><p>от <span class="price">4750</span> руб.</p></div></li>
						<li><img src="photos/1ed3782a761a5615bc41cb19f8a9861f.jpeg" alt="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph" title="массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph"><div class="box" page="zubnaya-schetka-braun-d-dx-triumph-7540r"><span class="title">массаж в астане Зубная щетка BRAUN D-24 (D-32.546.5x) Triumph</span><p>от <span class="price">7540</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php", 0, -4); if (file_exists("comments/standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php")) require_once "comments/standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php" method="post" onsubmit="return checkForm(this)">
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