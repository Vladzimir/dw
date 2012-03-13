<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mashinka-dlya-strizhki-atlanta-atn-560r.php","массаж пальчиков");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mashinka-dlya-strizhki-atlanta-atn-560r.php", $nick, $comment);
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
		<title>массаж пальчиков Машинка для стрижки Atlanta АТН-846  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж пальчиков, купить бигуди для волос, зеркала в ростове, весы электронные торговые цена, таро зеркало судьбы, зачем закрывают зеркала, косметология массаж, массаж в хабаровске, зеркало стальное, купить солярий вертикальный, институт массажа и косметологии, даньков зеркала, массаж пальчиков, массаж для дам,  зеркала толщина">
		<meta name="description" content="массаж пальчиков Atlanta АТН-846 – доступная машинка для стрижки волос в домашних условиях выполн...">
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
						<a class="photo" href="photos/e55a588272299395301209d6bb27009d.jpeg" title="массаж пальчиков Машинка для стрижки Atlanta АТН-846"><img src="photos/e55a588272299395301209d6bb27009d.jpeg" alt="массаж пальчиков Машинка для стрижки Atlanta АТН-846" title="массаж пальчиков Машинка для стрижки Atlanta АТН-846 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-650r-2.php"><img src="photos/72e31f815353916e5103653f2d2b6374.jpeg" alt="купить бигуди для волос Электрощипцы для выпрямления волос Atlanta АТН-834" title="купить бигуди для волос Электрощипцы для выпрямления волос Atlanta АТН-834"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-834</h2></li>
							<li><a href="http://hometech.elitno.net/multistayler-babyliss-ce-infinitix-1610r.php"><img src="photos/7ea653e31522aab2e52b2dbfda2e3cf7.jpeg" alt="зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix" title="зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix"></a><h2>Мультистайлер Babyliss 2021CE Infinitix</h2></li>
							<li><a href="http://hometech.elitno.net/ortodonticheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php"><img src="photos/dd826d0b620eb6766b31d8f68c57fcdb.jpeg" alt="весы электронные торговые цена Ортодонтические насадки для ирригатора Waterpik WP100E, WP360E (2шт.)" title="весы электронные торговые цена Ортодонтические насадки для ирригатора Waterpik WP100E, WP360E (2шт.)"></a><h2>Ортодонтические насадки для ирригатора Waterpik WP100E, WP360E (2шт.)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж пальчиков Машинка для стрижки Atlanta АТН-846</h1>
						<div class="tb"><p>Цена: от <span class="price">560</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19803.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Atlanta АТН-846 – доступная машинка для стрижки волос в домашних условиях выполненная серебристом цвете. Умеет работать как от сети, так и от долговечного аккумулятора. На корпусе есть индикатор заряда батареи. В комплекте идет одна насадка. Предусмотрена регулировка длины. Корпус изготовлен из пластика, лезвия из стали. Вместе с машинкой идет щеточка для очистки, стильная серебристая подставка для зарядки, ножницы, масло и адаптер питания. </p><p>Характеристики:</p><ul type=disc><li>Питание от аккумулятора и от адаптера <li>Адаптер со специальной подставкой в комплекте <li>Регулируемая насадка для стрижки волос <li>Индикатор зарядки <li>Долговечная батарея <li>Прецизионные ножи из стали высокой прочности <li>230 В, 50-60 Гц <li>22.7 x 19 x 6.2 см </li></ul><p><strong>Производитель: США</strong></p> массаж пальчиков</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9f4d1e4a07cba1591e2c0c9fd27f1538.jpeg" alt="таро зеркало судьбы Ирригатор полости рта Waterpik WP-360" title="таро зеркало судьбы Ирригатор полости рта Waterpik WP-360"><div class="box" page="irrigator-polosti-rta-waterpik-wp-2700r"><span class="title">таро зеркало судьбы Ирригатор полости рта Waterpik WP-360</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/b335395a214a3a546c41305f7ef60066.jpeg" alt="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051" title="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051"><div class="box" page="nabor-dlya-manikyura-i-pedikyura-s-nasadkami-gezatone-d-590r"><span class="title">зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/68240754aaa9a8e7ebed1c19d1521df0.png" alt="косметология массаж Массажное кресло Fujiiryoki Cyber-Relax EC-3700" title="косметология массаж Массажное кресло Fujiiryoki Cyber-Relax EC-3700"><div class="box" page="massazhnoe-kreslo-fujiiryoki-cyberrelax-ec-337500r"><span class="title">косметология массаж Массажное кресло Fujiiryoki Cyber-Relax EC-3700</span><p>от <span class="price">337500</span> руб.</p></div></li>
						<li><img src="photos/998a84ed0d8ea6a3195b7d8a076be01d.jpeg" alt="массаж в хабаровске Массажный матрас FitStudio" title="массаж в хабаровске Массажный матрас FitStudio"><div class="box" page="massazhnyy-matras-fitstudio-2490r"><span class="title">массаж в хабаровске Массажный матрас FitStudio</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li class="large"><img src="photos/a4b82820664bbbaf6613208e966c74f1.jpeg" alt="зеркало стальное Пояс массажный Вибро шейп Vibro Shape" title="зеркало стальное Пояс массажный Вибро шейп Vibro Shape"><div class="box" page="poyas-massazhnyy-vibro-sheyp-vibro-shape-1550r"><span class="title">зеркало стальное Пояс массажный Вибро шейп Vibro Shape</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li class="large"><img src="photos/aca1d35fc1577b5f5c3bf95fe2236e75.jpeg" alt="купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50" title="купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-4950r"><span class="title">купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/364f57c9bbd57d63831a2d87ac4fd285.jpeg" alt="институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190" title="институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190"><div class="box" page="pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r"><span class="title">институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/991e5918a98c4f174a34a2f80873edbd.jpeg" alt="даньков зеркала Массажная накидка шиатсу  Beurer MG190" title="даньков зеркала Массажная накидка шиатсу  Beurer MG190"><div class="box" page="massazhnaya-nakidka-shiatsu-beurer-mg-5500r"><span class="title">даньков зеркала Массажная накидка шиатсу  Beurer MG190</span><p>от <span class="price">5500</span> руб.</p></div></li>
						<li><img src="photos/d2b7ff9e11c72a7ec42a2c10d5296088.jpeg" alt="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт" title="массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт"><div class="box" page="fenschetka-babyliss-ase-vt-2060r"><span class="title">массаж пальчиков Фен-щетка BaByliss AS130E 700 Вт</span><p>от <span class="price">2060</span> руб.</p></div></li>
						<li><img src="photos/1809b9060c9eea16ab484d459d97c115.jpeg" alt="массаж для дам Фен Atlanta АТН-868" title="массаж для дам Фен Atlanta АТН-868"><div class="box" page="fen-atlanta-atn-800r"><span class="title">массаж для дам Фен Atlanta АТН-868</span><p>от <span class="price">800</span> руб.</p></div></li>
						<li><img src="photos/d009ee0c8929a1169edf954acf3fac69.jpeg" alt="подогрев зеркала схема Зубная щетка звуковая Omron Sonic Style 201" title="подогрев зеркала схема Зубная щетка звуковая Omron Sonic Style 201"><div class="box" page="zubnaya-schetka-zvukovaya-omron-sonic-style-1500r"><span class="title">подогрев зеркала схема Зубная щетка звуковая Omron Sonic Style 201</span><p>от <span class="price">1500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mashinka-dlya-strizhki-atlanta-atn-560r.php", 0, -4); if (file_exists("comments/mashinka-dlya-strizhki-atlanta-atn-560r.php")) require_once "comments/mashinka-dlya-strizhki-atlanta-atn-560r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mashinka-dlya-strizhki-atlanta-atn-560r.php" method="post" onsubmit="return checkForm(this)">
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