<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vypryamitel-valera-flexa-2950r.php","массаж в смоленске");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vypryamitel-valera-flexa-2950r.php", $nick, $comment);
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
		<title>массаж в смоленске Выпрямитель Valera Flexa 646.01  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж в смоленске, терапия массаж, косметика из индии, стоимость солярия, ирина красикова массаж, успенская зеркала, лицензия на массаж, массаж веником, зеркало напротив кровати, фокин массаж, электробритва philips at750, правильный массаж простаты, туалетный столик с зеркалом фото, бигуди золотые локоны,  бытовая техника фены">
		<meta name="description" content="массаж в смоленске Выпрямитель Valera Flexa 646.01 создан для профессионального выпрямления волос. ...">
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
						<a class="photo" href="photos/761f0ad81569062a7e0ab609f4286969.jpeg" title="массаж в смоленске Выпрямитель Valera Flexa 646.01"><img src="photos/761f0ad81569062a7e0ab609f4286969.jpeg" alt="массаж в смоленске Выпрямитель Valera Flexa 646.01" title="массаж в смоленске Выпрямитель Valera Flexa 646.01 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-spiegelled-steklo-2600r.php"><img src="photos/648e5c85fd28c2211dee143be1d4f432.jpeg" alt="терапия массаж Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)" title="терапия массаж Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)"></a><h2>Весы электронные напольные Beurer GS46 Spiegel-LED (стекло)</h2></li>
							<li><a href="http://hometech.elitno.net/beurer-ps-bmi-napolnye-elektronnye-vesy-3000r.php"><img src="photos/39daed3d50fe3fa87078060cfa01e362.jpeg" alt="косметика из индии Beurer PS41 BMI Напольные электронные весы" title="косметика из индии Beurer PS41 BMI Напольные электронные весы"></a><h2>Beurer PS41 BMI Напольные электронные весы</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-3700r.php"><img src="photos/07ef3c12017d28c1e6e84a22589adc62.jpeg" alt="стоимость солярия Весы бытовые Tanita HD-357" title="стоимость солярия Весы бытовые Tanita HD-357"></a><h2>Весы бытовые Tanita HD-357</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж в смоленске Выпрямитель Valera Flexa 646.01</h1>
						<div class="tb"><p>Цена: от <span class="price">2950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_7686.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Выпрямитель </b><b>Valera </b><b>Flexa 646.01</b> создан для профессионального выпрямления волос. Прибор оснащен турмалиновыми керамическими пластинами, обеспечивающими равномерное выпрямление волос, делая их гладкими и предотвращая спутывание. Система подпружиненных пластин Floating Plates System обеспечивает идеальное соприкосновение с волосами. Выпрямитель быстро нагревается и остывает, возможный интервал нагрева можно регулировать от 80 до 230°C. Длина шнура 3 метра обеспечивает относительную свободу движений. Приобретая Flexa 646.01, вы получаете стильный дизайн и высокое качество от известного производителя.</p><p><b>Характеристики:</b></p><ul type=disc><li>Мощность: 30 Вт; <li>Турмалиновые керамические пластины; <li>«Плавающие» пластины для благоприятного и более однородного контакта с волосами; <li>Точное и непрерывное электронное регулирование; <li>Сверхбыстрое нагревание и быстрое остывание; <li>Рабочая температура: От 80°C до 230°C; <li>Длина шнура: 3 м.</li></ul><p><b>Производитель: </b>Valera.</p><p><b>Страна:</b> Швейцария. </p><p><b></b></p><p><b>Гарантия: </b>2 года.</p> массаж в смоленске</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a47834e167f88700a1ff6ede56cda638.jpeg" alt="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм" title="ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм"><div class="box" page="schipcy-dlya-zavivki-babyliss-ce-ipro-mm-1750r"><span class="title">ирина красикова массаж Щипцы для завивки Babyliss 2362CE i-Pro 200 25 мм</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/e273f348f6c5708fd82a881f65351988.jpeg" alt="успенская зеркала Зеркало настольное Rosenberg S-2338" title="успенская зеркала Зеркало настольное Rosenberg S-2338"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-970r"><span class="title">успенская зеркала Зеркало настольное Rosenberg S-2338</span><p>от <span class="price">970</span> руб.</p></div></li>
						<li><img src="photos/3cb8fb7617e327ab1de4f64923d896d1.jpeg" alt="лицензия на массаж Зеркало настольное Rosenberg S-2339" title="лицензия на массаж Зеркало настольное Rosenberg S-2339"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-1050r"><span class="title">лицензия на массаж Зеркало настольное Rosenberg S-2339</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/e43553d2ace8478e61c73ac89d87f4c2.jpeg" alt="массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)" title="массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)"><div class="box" page="standartnye-nasadki-dlya-irrigatora-waterpik-jte-sht-350r"><span class="title">массаж веником Стандартные насадки для ирригатора Waterpik JT70E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li class="large"><img src="photos/be41cad5680b07f0b91fdd49a1969dba.jpeg" alt="зеркало напротив кровати Пояс-сауна для похудения Sauna Belt" title="зеркало напротив кровати Пояс-сауна для похудения Sauna Belt"><div class="box" page="poyassauna-dlya-pohudeniya-sauna-belt-690r"><span class="title">зеркало напротив кровати Пояс-сауна для похудения Sauna Belt</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li class="large"><img src="photos/db50f056381f7d55d9462e3f852c618b.jpeg" alt="фокин массаж Стационарный массажный стол US Medica Profi" title="фокин массаж Стационарный массажный стол US Medica Profi"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-profi-85000r"><span class="title">фокин массаж Стационарный массажный стол US Medica Profi</span><p>от <span class="price">85000</span> руб.</p></div></li>
						<li class="large"><img src="photos/e83780f442fe720f2b4d56bdd2221d0b.jpeg" alt="электробритва philips at750 Валик усеченный круг L64D14 USM-007" title="электробритва philips at750 Валик усеченный круг L64D14 USM-007"><div class="box" page="valik-usechennyy-krug-ld-usm-1200r"><span class="title">электробритва philips at750 Валик усеченный круг L64D14 USM-007</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/07e8f52c43849d7cdfb6d82971d9d422.jpeg" alt="правильный массаж простаты Массажер Breo mini" title="правильный массаж простаты Массажер Breo mini"><div class="box" page="massazher-breo-mini-470r"><span class="title">правильный массаж простаты Массажер Breo mini</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li><img src="photos/0b818c5778593d88240657fc3fa330a4.jpeg" alt="туалетный столик с зеркалом фото Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01" title="туалетный столик с зеркалом фото Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01"><div class="box" page="trimmer-dlya-strizhki-volos-v-oblasti-nosa-i-ushey-valera-trimmy-570r"><span class="title">туалетный столик с зеркалом фото Триммер для стрижки волос в области носа и ушей Valera Trimmy 624.01</span><p>от <span class="price">570</span> руб.</p></div></li>
						<li><img src="photos/ab49e365fa99a44636dc99968921bfb0.jpeg" alt="бигуди золотые локоны Фен-щетка Babyliss AS30E 300 Вт" title="бигуди золотые локоны Фен-щетка Babyliss AS30E 300 Вт"><div class="box" page="fenschetka-babyliss-ase-vt-870r"><span class="title">бигуди золотые локоны Фен-щетка Babyliss AS30E 300 Вт</span><p>от <span class="price">870</span> руб.</p></div></li>
						<li><img src="photos/bb80268e8fc17e3b5eba4b672a7d7b58.jpeg" alt="отзывы ирригатор aquajet Фен Valera Swiss Nano 6100 Light Avant" title="отзывы ирригатор aquajet Фен Valera Swiss Nano 6100 Light Avant"><div class="box" page="fen-valera-swiss-nano-light-avant-2880r"><span class="title">отзывы ирригатор aquajet Фен Valera Swiss Nano 6100 Light Avant</span><p>от <span class="price">2880</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vypryamitel-valera-flexa-2950r.php", 0, -4); if (file_exists("comments/vypryamitel-valera-flexa-2950r.php")) require_once "comments/vypryamitel-valera-flexa-2950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vypryamitel-valera-flexa-2950r.php" method="post" onsubmit="return checkForm(this)">
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