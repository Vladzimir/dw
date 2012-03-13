<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mashinka-dlya-strizhki-vitesse-vs-700r-2.php","массаж белорусская");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mashinka-dlya-strizhki-vitesse-vs-700r-2.php", $nick, $comment);
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
		<title>массаж белорусская Машинка для стрижки Vitesse VS-384  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж белорусская, сочинение на тему зеркало, зеркало заднего вида мерседес, массаж слепых, предлагаю массаж, утюжки для завивки волос, расческа фен отзывы, институт массажа и косметологии, картридж для электробритвы, токи дарсонваля, электронное зеркало, даньков зеркала, общий массаж тела, химическая завивка на короткие волосы,  косметология массаж">
		<meta name="description" content="массаж белорусская Профессиональная универсальная машинка для стрижки Vitesse  VS-384 обеспечит отл...">
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
						<a class="photo" href="photos/c075b8e44047484b111fe1dd6dacdc93.jpeg" title="массаж белорусская Машинка для стрижки Vitesse VS-384"><img src="photos/c075b8e44047484b111fe1dd6dacdc93.jpeg" alt="массаж белорусская Машинка для стрижки Vitesse VS-384" title="массаж белорусская Машинка для стрижки Vitesse VS-384 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-s-krasnyy-leopard-4500r.php"><img src="photos/a73d45afb658e85145cdbbf609c3a636.jpeg" alt="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард" title="сочинение на тему зеркало Стайлер Corioliss С1 красный леопард"></a><h2>Стайлер Corioliss С1 красный леопард</h2></li>
							<li><a href="http://hometech.elitno.net/ployka-professionalnyy-stilist-vitesse-vs-1100r.php"><img src="photos/16b9d005139a5fe78fcd77455b12971a.jpeg" alt="зеркало заднего вида мерседес Плойка Профессиональный стилист Vitesse VS-922" title="зеркало заднего вида мерседес Плойка Профессиональный стилист Vitesse VS-922"></a><h2>Плойка Профессиональный стилист Vitesse VS-922</h2></li>
							<li><a href="http://hometech.elitno.net/karat-de-darsonval-s-chetyrmya-smennymi-nasadkami-2990r.php"><img src="photos/43322e66f76e6634ad9a2abdfb261bdb.jpeg" alt="массаж слепых КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками" title="массаж слепых КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками"></a><h2>КАРАТ ДЕ-212 Дарсонваль с четырьмя сменными насадками</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж белорусская Машинка для стрижки Vitesse VS-384</h1>
						<div class="tb"><p>Цена: от <span class="price">700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21128.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Профессиональная универсальная машинка для стрижки Vitesse  VS-384 обеспечит отличный результат без лишних усилий с вашей стороны. Машинка  для стрижки Vitesse VS-384 имеет 4 насадки и 5 установок длины, что позволит  выбрать формат стрижки. нужный именно вам. Особенностью данной модели является  настройка длины стрижки сменой насадок. Прибор работает от сети. В комплект с машинкой  для стрижки Vitesse VS-384 входит футляр для хранения и перевозки, щеточка для  чистки, масло, петля для подвешивания и ножницы.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Тип: универсальная;</li><li>Питание: от сети;</li><li>Число установок длины: 5;</li><li>Количество насадок: 4;</li><li>Длина стрижки: 3 - 12 мм;</li><li>В комплекте: ножницы, футляр для хранения и перевозки, петля для       подвешивания, щеточка для чистки, масло;</li><li>Особенности: настройка длины стрижки сменой насадок;</li></ul><p><strong>Производитель: Франция</strong></p> массаж белорусская</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ebe73366b541ce25ab906d91486c2572.jpeg" alt="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм" title="предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм"><div class="box"><a href="http://hometech.elitno.net/schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1430r.php"><h3 class="title">предлагаю массаж Щипцы для завивки Babyliss 2361CE i-Pro 200 19 мм</h3><p>от <span class="price">1430</span> руб.</p></a></div></li>
						<li><img src="photos/0771169db5e24831fbf44ff7fabc016d.jpeg" alt="утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)" title="утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)"><div class="box" page="manikyurnyy-nabor-beurer-mp-nasadok-1550r"><span class="title">утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/08e4b83a03d978d9f74e3f0763b49dd6.jpeg" alt="расческа фен отзывы Раскладной массажный стол US Medica Bora-Bora линейка SPA" title="расческа фен отзывы Раскладной массажный стол US Medica Bora-Bora линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-borabora-lineyka-spa-24400r"><span class="title">расческа фен отзывы Раскладной массажный стол US Medica Bora-Bora линейка SPA</span><p>от <span class="price">24400</span> руб.</p></div></li>
						<li><img src="photos/abde1a7164344d09d53992486a50887a.jpeg" alt="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA" title="институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-malibu-lineyka-spa-31500r"><span class="title">институт массажа и косметологии Раскладной массажный стол US Medica Malibu линейка SPA</span><p>от <span class="price">31500</span> руб.</p></div></li>
						<li class="large"><img src="photos/2c25dbb509feb3825290d2d56dd8e055.jpeg" alt="картридж для электробритвы Стационарный массажный стол US Medica Olimp" title="картридж для электробритвы Стационарный массажный стол US Medica Olimp"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-olimp-42000r"><span class="title">картридж для электробритвы Стационарный массажный стол US Medica Olimp</span><p>от <span class="price">42000</span> руб.</p></div></li>
						<li class="large"><img src="photos/bec9e8295f1e9d6ddde62809095885c2.jpeg" alt="токи дарсонваля Миостимулятор  Beurer EM 38 для спины" title="токи дарсонваля Миостимулятор  Beurer EM 38 для спины"><div class="box" page="miostimulyator-beurer-em-dlya-spiny-2400r"><span class="title">токи дарсонваля Миостимулятор  Beurer EM 38 для спины</span><p>от <span class="price">2400</span> руб.</p></div></li>
						<li class="large"><img src="photos/e3a813514433641f393edfdb0982bd86.jpeg" alt="электронное зеркало Массажер для тела Beurer MG80" title="электронное зеркало Массажер для тела Beurer MG80"><div class="box" page="massazher-dlya-tela-beurer-mg-2550r"><span class="title">электронное зеркало Массажер для тела Beurer MG80</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li><img src="photos/991e5918a98c4f174a34a2f80873edbd.jpeg" alt="даньков зеркала Массажная накидка шиатсу  Beurer MG190" title="даньков зеркала Массажная накидка шиатсу  Beurer MG190"><div class="box" page="massazhnaya-nakidka-shiatsu-beurer-mg-5500r"><span class="title">даньков зеркала Массажная накидка шиатсу  Beurer MG190</span><p>от <span class="price">5500</span> руб.</p></div></li>
						<li><img src="photos/2c7a77c230be7b8e97a075b819c83be5.jpeg" alt="общий массаж тела Солярий для лица Efbe-Schott 836" title="общий массаж тела Солярий для лица Efbe-Schott 836"><div class="box" page="solyariy-dlya-lica-efbeschott-5000r"><span class="title">общий массаж тела Солярий для лица Efbe-Schott 836</span><p>от <span class="price">5000</span> руб.</p></div></li>
						<li><img src="photos/315fceab69c6c513c80a5c9bf34f9fb0.jpeg" alt="химическая завивка на короткие волосы BaByliss E842XE Триммер" title="химическая завивка на короткие волосы BaByliss E842XE Триммер"><div class="box" page="babyliss-exe-trimmer-1520r"><span class="title">химическая завивка на короткие волосы BaByliss E842XE Триммер</span><p>от <span class="price">1520</span> руб.</p></div></li>
						<li><img src="photos/f98698f167b448092a3ab477739f68fd.jpeg" alt="солярий в новосибирске Фен Braun HD710" title="солярий в новосибирске Фен Braun HD710"><div class="box" page="fen-braun-hd-2240r"><span class="title">солярий в новосибирске Фен Braun HD710</span><p>от <span class="price">2240</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mashinka-dlya-strizhki-vitesse-vs-700r-2.php", 0, -4); if (file_exists("comments/mashinka-dlya-strizhki-vitesse-vs-700r-2.php")) require_once "comments/mashinka-dlya-strizhki-vitesse-vs-700r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mashinka-dlya-strizhki-vitesse-vs-700r-2.php" method="post" onsubmit="return checkForm(this)">
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