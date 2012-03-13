<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("atlanta-atn-mashinka-dlya-strizhki-590r.php","массаж верхних конечностей");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("atlanta-atn-mashinka-dlya-strizhki-590r.php", $nick, $comment);
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
		<title>массаж верхних конечностей Atlanta АТН-842 Машинка для стрижки  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж верхних конечностей, лосьон для для солярия, акупунктурный массаж, девочки в солярии, камеди клаб кривые зеркала, укладка волос на бигуди, институт массажа и косметологии, массаж для младенцев, солярий великий новгород, зеркало заднего вида 2110, машинка для стрижки andis, массаж нижних конечностей, зеркала заднего вида bmw, ножи для электробритвы,  завивка волос утюжком">
		<meta name="description" content="массаж верхних конечностей Atlanta АТН-842 – доступная машинка для стрижки волос в домашних условиях выполн...">
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
						<a class="photo" href="photos/369fa02b2fd1e0a8a6d3480c85fe998d.jpeg" title="массаж верхних конечностей Atlanta АТН-842 Машинка для стрижки"><img src="photos/369fa02b2fd1e0a8a6d3480c85fe998d.jpeg" alt="массаж верхних конечностей Atlanta АТН-842 Машинка для стрижки" title="массаж верхних конечностей Atlanta АТН-842 Машинка для стрижки -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-mateca-m-besprovodnoy-2400r.php"><img src="photos/54daa8c422694960a4b932dac99e46ae.jpeg" alt="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной" title="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной"></a><h2>Выпрямитель Mateca M 769 беспроводной</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-professionalnyy-stilist-vitesse-vs-1130r.php"><img src="photos/95f83d2fc77a8c1038cbf28dc7b115c0.jpeg" alt="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933" title="акупунктурный массаж Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933"></a><h2>Щипцы для выпрямления волос, Профессиональный стилист, Vitesse VS-933</h2></li>
							<li><a href="http://hometech.elitno.net/babyliss-e-zerkalo-s-i-kratnym-uvelicheniem-1340r.php"><img src="photos/77f53115128928974f2537ac5528713b.jpeg" alt="девочки в солярии Babyliss 8435Е Зеркало с 5-и кратным увеличением" title="девочки в солярии Babyliss 8435Е Зеркало с 5-и кратным увеличением"></a><h2>Babyliss 8435Е Зеркало с 5-и кратным увеличением</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж верхних конечностей Atlanta АТН-842 Машинка для стрижки</h1>
						<div class="tb"><p>Цена: от <span class="price">590</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19797.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Atlanta АТН-842 – доступная машинка для стрижки волос в домашних условиях выполненная в черно-белой цветовой гамме. Умеет работать как от сети, так и от долговечного аккумулятора. На корпусе есть индикатор заряда батареи. В комплекте идет одна насадка. Предусмотрена регулировка длины. Корпус изготовлен из пластика, лезвия из стали. Мощность машинки 9 Вт. Вместе с машинкой идет щеточка для очистки, подставка для зарядки, ножницы, масло и адаптер питания. </p><p>Характеристики:</p><ul type=disc><li>Питание от аккумулятора и от адаптера <li>Адаптер со специальной подставкой в комплекте <li>Регулируемая насадка для стрижки волос <li>Индикатор зарядки <li>Долговечная батарея <li>Прецизионные ножи из стали высокой прочности <li>Мощность 9 Вт <li>220-240 В, 50-60 Гц <li>22.7 x 19 x 6.2 см </li></ul><p><strong>Производитель: США</strong></p> массаж верхних конечностей</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/699c71eb95474070f11b71a4c8de6691.jpeg" alt="камеди клаб кривые зеркала Ирригатор полости рта DONFEEL OR-820M Комплектация 1" title="камеди клаб кривые зеркала Ирригатор полости рта DONFEEL OR-820M Комплектация 1"><div class="box" page="irrigator-polosti-rta-donfeel-orm-komplektaciya-2890r"><span class="title">камеди клаб кривые зеркала Ирригатор полости рта DONFEEL OR-820M Комплектация 1</span><p>от <span class="price">2890</span> руб.</p></div></li>
						<li><img src="photos/3ccd3a7a537feb526e26b8db85765ae5.jpeg" alt="укладка волос на бигуди Маникюрный набор Sanitas SMA-70" title="укладка волос на бигуди Маникюрный набор Sanitas SMA-70"><div class="box" page="manikyurnyy-nabor-sanitas-sma-2500r"><span class="title">укладка волос на бигуди Маникюрный набор Sanitas SMA-70</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/048943609504ddde8243936e65522ddb.jpeg" alt="институт массажа и косметологии Аппликатор Ляпко Одинарный 6,2" title="институт массажа и косметологии Аппликатор Ляпко Одинарный 6,2"><div class="box" page="applikator-lyapko-odinarnyy-720r"><span class="title">институт массажа и косметологии Аппликатор Ляпко Одинарный 6,2</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/a3fdb4f3f35476641171d44c065fe679.jpeg" alt="массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)" title="массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)"><div class="box" page="al-volshebnaya-lenta-zdorove-segmenta-2600r"><span class="title">массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li class="large"><img src="photos/131e52acd4018df8f469d0b420949fb3.jpeg" alt="солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L" title="солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L"><div class="box" page="vibromassazher-clear-fit-life-beauty-cf-l-7490r"><span class="title">солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L</span><p>от <span class="price">7490</span> руб.</p></div></li>
						<li class="large"><img src="photos/efecfdd903b36bfb57ecf33e62da8ced.jpeg" alt="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E" title="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E"><div class="box" page="vibromassazher-clear-fit-extra-beauty-cf-e-9490r"><span class="title">зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E</span><p>от <span class="price">9490</span> руб.</p></div></li>
						<li class="large"><img src="photos/f791dc6b11479bf957d60c3bc019bbc7.jpeg" alt="машинка для стрижки andis Массажер для мытья и массажа головы Nozomi MH-105" title="машинка для стрижки andis Массажер для мытья и массажа головы Nozomi MH-105"><div class="box" page="massazher-dlya-mytya-i-massazha-golovy-nozomi-mh-4450r"><span class="title">машинка для стрижки andis Массажер для мытья и массажа головы Nozomi MH-105</span><p>от <span class="price">4450</span> руб.</p></div></li>
						<li><img src="photos/a3331b51ae07cba95c43ef802a9f621a.jpeg" alt="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61" title="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61"><div class="box" page="massazher-dlya-nog-bodykraft-fm-12990r"><span class="title">массаж нижних конечностей Массажер для ног BODYKRAFT FM-61</span><p>от <span class="price">12990</span> руб.</p></div></li>
						<li><img src="photos/257d5cc5ea2f5b29c6970128a18fb88b.jpeg" alt="зеркала заднего вида bmw Фен-щетка Babyliss 2715E 700 Вт" title="зеркала заднего вида bmw Фен-щетка Babyliss 2715E 700 Вт"><div class="box" page="fenschetka-babyliss-e-vt-1520r"><span class="title">зеркала заднего вида bmw Фен-щетка Babyliss 2715E 700 Вт</span><p>от <span class="price">1520</span> руб.</p></div></li>
						<li><img src="photos/6b329b59e2c95c28766254ced4d923f8.jpeg" alt="ножи для электробритвы Фен Valera Action 1800 542.08" title="ножи для электробритвы Фен Valera Action 1800 542.08"><div class="box" page="fen-valera-action-1300r"><span class="title">ножи для электробритвы Фен Valera Action 1800 542.08</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/c5e2bf42df677be8977a7aa9b1c1ff98.jpeg" alt="можно в солярий кормящей маме Фен-щетка Valera Turbo Style 1000 Ionic 603.01-I" title="можно в солярий кормящей маме Фен-щетка Valera Turbo Style 1000 Ionic 603.01-I"><div class="box" page="fenschetka-valera-turbo-style-ionic-i-2080r"><span class="title">можно в солярий кормящей маме Фен-щетка Valera Turbo Style 1000 Ionic 603.01-I</span><p>от <span class="price">2080</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("atlanta-atn-mashinka-dlya-strizhki-590r.php", 0, -4); if (file_exists("comments/atlanta-atn-mashinka-dlya-strizhki-590r.php")) require_once "comments/atlanta-atn-mashinka-dlya-strizhki-590r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="atlanta-atn-mashinka-dlya-strizhki-590r.php" method="post" onsubmit="return checkForm(this)">
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