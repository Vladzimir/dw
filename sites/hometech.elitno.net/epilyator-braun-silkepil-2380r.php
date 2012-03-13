<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("epilyator-braun-silkepil-2380r.php","зеркало оригинала");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("epilyator-braun-silkepil-2380r.php", $nick, $comment);
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
		<title>зеркало оригинала Эпилятор Braun 3380 Silkepil  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="зеркало оригинала, смотреть в зеркало ночью, массаж при гайморите, весы карманные электронные, аппаратный маникюр и педикюр, вконтакте зеркало вход, соблазнил массажем, сауна баня массаж, установка зеркала заднего вида, лифтинг массаж, купить солярий вертикальный, фен на аккумуляторах, машинка для стрижки интимных мест, косметология массаж,  фен щетка babyliss отзывы">
		<meta name="description" content="зеркало оригинала Эпилятор с двойной массажной системой для более мягкой эпиляции позволит вам доб...">
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
						<a class="photo" href="photos/c0d6d03f1d9a5ef4a18d3e8bb4c3941f.jpeg" title="зеркало оригинала Эпилятор Braun 3380 Silkepil"><img src="photos/c0d6d03f1d9a5ef4a18d3e8bb4c3941f.jpeg" alt="зеркало оригинала Эпилятор Braun 3380 Silkepil" title="зеркало оригинала Эпилятор Braun 3380 Silkepil -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-diagnosticheskie-beurer-bf-3950r.php"><img src="photos/7deb3c43d421becd353bfd38cffd8fa1.jpeg" alt="смотреть в зеркало ночью Весы электронные диагностические Beurer BF66" title="смотреть в зеркало ночью Весы электронные диагностические Beurer BF66"></a><h2>Весы электронные диагностические Beurer BF66</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-2400r.php"><img src="photos/2b0830cb971a08fbcbc59104f1b6f567.jpeg" alt="массаж при гайморите Анализатор жира (состава тела) Tanita BC-540" title="массаж при гайморите Анализатор жира (состава тела) Tanita BC-540"></a><h2>Анализатор жира (состава тела) Tanita BC-540</h2></li>
							<li><a href="http://hometech.elitno.net/utyuzhok-dlya-volos-instyler-2350r.php"><img src="photos/a9f8087c2a5bba14dbcad3c2841b1390.jpeg" alt="весы карманные электронные Утюжок для волос InStyler" title="весы карманные электронные Утюжок для волос InStyler"></a><h2>Утюжок для волос InStyler</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>зеркало оригинала Эпилятор Braun 3380 Silkepil</h1>
						<div class="tb"><p>Цена: от <span class="price">2380</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12028.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Эпилятор с двойной массажной системой для более мягкой эпиляции позволит вам добиться идеальной гладкости кожи ног в течение длительного времени. 20 пинцетов деликатно удаляют волоски прямо у корня, а пальчики SoftLift приподнимают и удаляют их, даже когда они очень короткие и расположены близко друг к другу. </p><p>Специальная насадка EfficiencyPro позволяет обрабатывать большой участок кожи за один проход, а другая насадка идеально подходит для подмышек и области бикини.</p><p><b>Характеристики: </b></p><ul type=disc><li>Тип: эпилятор <li>Число скоростей: 2 <li>Питание: от сети <li>Количество пинцетов: 20 <li>Подсветка: нет <li>Насадка SoftLift: есть <li>Насадка EfficiencyPro: есть <li>Использование с применением пены: нет <li>Насадки: массажер, для точечного удаления волос, насадка-ограничитель <li>В комплекте футляр</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> зеркало оригинала</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/1cc2c813d2f9aee1e50ca25851e9cff6.jpeg" alt="аппаратный маникюр и педикюр Насадка ушная для КАРАТ ДЕ-212 Дарсонваль" title="аппаратный маникюр и педикюр Насадка ушная для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-ushnaya-dlya-karat-de-darsonval-300r"><span class="title">аппаратный маникюр и педикюр Насадка ушная для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/ac3c60f4ec3044e4c2c5250cb4b2650e.jpeg" alt="вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль" title="вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-borodavchataya-dlya-karat-de-darsonval-300r"><span class="title">вконтакте зеркало вход Насадка бородавчатая для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/ed0c34c7ee29ed14f07ab5b9a731bbc5.jpeg" alt="соблазнил массажем Зеркало Beurer BS 59 косметическое" title="соблазнил массажем Зеркало Beurer BS 59 косметическое"><div class="box" page="zerkalo-beurer-bs-kosmeticheskoe-1900r"><span class="title">соблазнил массажем Зеркало Beurer BS 59 косметическое</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/06d523dd34a2cdda28a645a220259d39.jpeg" alt="сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29" title="сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29"><div class="box" page="manikyurnopedikyurnyy-nabor-beurer-mp-nasadok-bs-2000r"><span class="title">сауна баня массаж Маникюрно-педикюрный набор Beurer MP40 (7 насадок) + BS29</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/6032832465abb70306c5ea0aedd085a5.jpeg" alt="установка зеркала заднего вида Аппликатор Ляпко Ромашка" title="установка зеркала заднего вида Аппликатор Ляпко Ромашка"><div class="box" page="applikator-lyapko-romashka-2350r"><span class="title">установка зеркала заднего вида Аппликатор Ляпко Ромашка</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li class="large"><img src="photos/1cd3b762effe11ede74f59ecb96b91a5.jpeg" alt="лифтинг массаж Массажер для ног Beurer FM 16" title="лифтинг массаж Массажер для ног Beurer FM 16"><div class="box" page="massazher-dlya-nog-beurer-fm-630r"><span class="title">лифтинг массаж Массажер для ног Beurer FM 16</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li class="large"><img src="photos/aca1d35fc1577b5f5c3bf95fe2236e75.jpeg" alt="купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50" title="купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-4950r"><span class="title">купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/9eba2371b26d150a840e7f4a6794703c.jpeg" alt="фен на аккумуляторах Солярий для лица Efbe-Schott 834" title="фен на аккумуляторах Солярий для лица Efbe-Schott 834"><div class="box" page="solyariy-dlya-lica-efbeschott-4300r"><span class="title">фен на аккумуляторах Солярий для лица Efbe-Schott 834</span><p>от <span class="price">4300</span> руб.</p></div></li>
						<li><img src="photos/042e8c83842b5051a47ae5ba07dd8b37.jpeg" alt="машинка для стрижки интимных мест Триммер Beauty Hair Trimmer" title="машинка для стрижки интимных мест Триммер Beauty Hair Trimmer"><div class="box" page="trimmer-beauty-hair-trimmer-200r"><span class="title">машинка для стрижки интимных мест Триммер Beauty Hair Trimmer</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li><img src="photos/903db6a8dda8fc3e969d37c0855d0ace.jpeg" alt="косметология массаж Фен Vitesse VS-944" title="косметология массаж Фен Vitesse VS-944"><div class="box" page="fen-vitesse-vs-640r-2"><span class="title">косметология массаж Фен Vitesse VS-944</span><p>от <span class="price">640</span> руб.</p></div></li>
						<li><img src="photos/249ba2f65a0c23549126bf59f65e62f2.jpeg" alt="заточка ножей машинки для стрижки Зубная щетка BRAUN VITALITY D12.013DW" title="заточка ножей машинки для стрижки Зубная щетка BRAUN VITALITY D12.013DW"><div class="box" page="zubnaya-schetka-braun-vitality-ddw-1040r"><span class="title">заточка ножей машинки для стрижки Зубная щетка BRAUN VITALITY D12.013DW</span><p>от <span class="price">1040</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("epilyator-braun-silkepil-2380r.php", 0, -4); if (file_exists("comments/epilyator-braun-silkepil-2380r.php")) require_once "comments/epilyator-braun-silkepil-2380r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="epilyator-braun-silkepil-2380r.php" method="post" onsubmit="return checkForm(this)">
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