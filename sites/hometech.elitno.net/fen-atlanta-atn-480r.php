<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atn-480r.php","заточить ножи для машинки стрижки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atn-480r.php", $nick, $comment);
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
		<title>заточить ножи для машинки стрижки Фен Atlanta АТН-87  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="заточить ножи для машинки стрижки, установка фена, массаж октябрьская, мастер массажа, фен хуан дань цун, зеркала альбом, водительское зеркало, фен для собак, электробритва браун отзывы, насадки для эпилятора braun, электронные весы scarlett, массаж для любимого, купить эпилятор philips, электронные весы bosch,  массаж рекомендации">
		<meta name="description" content="заточить ножи для машинки стрижки Фен Atlanta АТН-87 – доступный прибор с эргономичным дизайном фиолетового цвета ...">
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
						<a class="photo" href="photos/8490dc8415f0687c14c5a68af1ed5b29.jpeg" title="заточить ножи для машинки стрижки Фен Atlanta АТН-87"><img src="photos/8490dc8415f0687c14c5a68af1ed5b29.jpeg" alt="заточить ножи для машинки стрижки Фен Atlanta АТН-87" title="заточить ножи для машинки стрижки Фен Atlanta АТН-87 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-bc-15000r.php"><img src="photos/535cb54616c54017545d11b351ebbf9b.jpeg" alt="установка фена Профессиональные электронные весы Tanita BC-545" title="установка фена Профессиональные электронные весы Tanita BC-545"></a><h2>Профессиональные электронные весы Tanita BC-545</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-diagnosticheskie-beurer-bg-2000r.php"><img src="photos/7cc3da826513a2ff00ab64d42d081c24.jpeg" alt="массаж октябрьская Весы электронные напольные диагностические  Beurer BG 75" title="массаж октябрьская Весы электронные напольные диагностические  Beurer BG 75"></a><h2>Весы электронные напольные диагностические  Beurer BG 75</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-tanita-um-sv-2500r.php"><img src="photos/d6db423a639701cbcc72448f073ae3bd.jpeg" alt="мастер массажа Анализатор жира Tanita UM-030 (SV)" title="мастер массажа Анализатор жира Tanita UM-030 (SV)"></a><h2>Анализатор жира Tanita UM-030 (SV)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>заточить ножи для машинки стрижки Фен Atlanta АТН-87</h1>
						<div class="tb"><p>Цена: от <span class="price">480</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19834.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-87 – доступный прибор с эргономичным дизайном фиолетового цвета для сушки волос мощностью 500 Вт. Имеет два уровня интенсивности сушки и шнур с защитой от выкручивания. Не скользит в руках, благодаря специальному покрытию. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности. Снабжен петлей для подвешивания.</p><p><strong>Характеристики:</strong></p><ul><li>Эргономичный дизайн <li>Защита от перегрева <li>Два уровня интенсивности сушки <li>Две насадки <li>Петля для подвешивания <li>Шнур с защитой от выкручивания <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует европейским нормам безопасности <li>Мощность 500W <li>230V, 50Hz </li></ul><p><strong>Производитель: США</strong></p> заточить ножи для машинки стрижки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ed07bb00209565173c6a467ccac26ddc.jpeg" alt="фен хуан дань цун Выпрямитель для волос Braun ES2" title="фен хуан дань цун Выпрямитель для волос Braun ES2"><div class="box" page="vypryamitel-dlya-volos-braun-es-3030r"><span class="title">фен хуан дань цун Выпрямитель для волос Braun ES2</span><p>от <span class="price">3030</span> руб.</p></div></li>
						<li><img src="photos/453dcbd53e683e2622b408d4ea19e1cc.jpeg" alt="зеркала альбом Зеркало Beurer BS05 косметическое" title="зеркала альбом Зеркало Beurer BS05 косметическое"><div class="box" page="zerkalo-beurer-bs-kosmeticheskoe-550r"><span class="title">зеркала альбом Зеркало Beurer BS05 косметическое</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/19a369233df7f920d9736295c23d4a31.jpeg" alt="водительское зеркало Раскладной массажный стол US Medica Marino линейка Sumo Line" title="водительское зеркало Раскладной массажный стол US Medica Marino линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-marino-lineyka-sumo-line-17500r"><span class="title">водительское зеркало Раскладной массажный стол US Medica Marino линейка Sumo Line</span><p>от <span class="price">17500</span> руб.</p></div></li>
						<li><img src="photos/54851ee54bf22158b2c9520830c25070.jpeg" alt="фен для собак Электроды для миостимуляторов Omron" title="фен для собак Электроды для миостимуляторов Omron"><div class="box" page="elektrody-dlya-miostimulyatorov-omron-1250r"><span class="title">фен для собак Электроды для миостимуляторов Omron</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li class="large"><img src="photos/0f804e21b3b864128c310dab356b8737.jpeg" alt="электробритва браун отзывы Массажёр Фараон-М" title="электробритва браун отзывы Массажёр Фараон-М"><div class="box" page="massazher-faraonm-260r"><span class="title">электробритва браун отзывы Массажёр Фараон-М</span><p>от <span class="price">260</span> руб.</p></div></li>
						<li class="large"><img src="photos/c721b9b283ded68e35bca2c1efd68136.jpeg" alt="насадки для эпилятора braun Солярий для лица Efbe-Schott 838 с цветными лампами" title="насадки для эпилятора braun Солярий для лица Efbe-Schott 838 с цветными лампами"><div class="box" page="solyariy-dlya-lica-efbeschott-s-cvetnymi-lampami-7700r"><span class="title">насадки для эпилятора braun Солярий для лица Efbe-Schott 838 с цветными лампами</span><p>от <span class="price">7700</span> руб.</p></div></li>
						<li class="large"><img src="photos/eced31968733a84b4149112c9946e503.jpeg" alt="электронные весы scarlett Воск для депиляции Rica, банановый в картридже 100 мл" title="электронные весы scarlett Воск для депиляции Rica, банановый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-bananovyy-v-kartridzhe-ml-150r"><span class="title">электронные весы scarlett Воск для депиляции Rica, банановый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/c075b8e44047484b111fe1dd6dacdc93.jpeg" alt="массаж для любимого Машинка для стрижки Vitesse VS-384" title="массаж для любимого Машинка для стрижки Vitesse VS-384"><div class="box" page="mashinka-dlya-strizhki-vitesse-vs-700r-2"><span class="title">массаж для любимого Машинка для стрижки Vitesse VS-384</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/945c138743c182a77eab0350446922cc.jpeg" alt="купить эпилятор philips Триммер Babyliss E600XE для стрижки волос в носу и ушах" title="купить эпилятор philips Триммер Babyliss E600XE для стрижки волос в носу и ушах"><div class="box" page="trimmer-babyliss-exe-dlya-strizhki-volos-v-nosu-i-ushah-590r"><span class="title">купить эпилятор philips Триммер Babyliss E600XE для стрижки волос в носу и ушах</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/b4125ac25898fc0a0ddba303502b0286.jpeg" alt="электронные весы bosch Фен-щетка Binatone HAS-450 Purple" title="электронные весы bosch Фен-щетка Binatone HAS-450 Purple"><div class="box" page="fenschetka-binatone-has-purple-600r"><span class="title">электронные весы bosch Фен-щетка Binatone HAS-450 Purple</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/257d5cc5ea2f5b29c6970128a18fb88b.jpeg" alt="зеркала заднего вида bmw Фен-щетка Babyliss 2715E 700 Вт" title="зеркала заднего вида bmw Фен-щетка Babyliss 2715E 700 Вт"><div class="box" page="fenschetka-babyliss-e-vt-1520r"><span class="title">зеркала заднего вида bmw Фен-щетка Babyliss 2715E 700 Вт</span><p>от <span class="price">1520</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atn-480r.php", 0, -4); if (file_exists("comments/fen-atlanta-atn-480r.php")) require_once "comments/fen-atlanta-atn-480r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atn-480r.php" method="post" onsubmit="return checkForm(this)">
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