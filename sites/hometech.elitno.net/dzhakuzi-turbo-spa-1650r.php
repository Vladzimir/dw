<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("dzhakuzi-turbo-spa-1650r.php","бигуди ремингтон");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("dzhakuzi-turbo-spa-1650r.php", $nick, $comment);
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
		<title>бигуди ремингтон Джакузи Turbo Spa  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="бигуди ремингтон, стоимость солярия, солярий челябинск, массаж верхних конечностей, массаж тазобедренный, зеркало соната, шампунь для выпрямления волос, магазин соляриев, электробритвы мужские купить, общий массаж тела, старый фен, зеркало ниссан альмера, сонник зеркало разбитое, обогрев зеркал заднего вида,  купить сетку для электробритвы">
		<meta name="description" content="бигуди ремингтон Вы любите принимать ванну? А ароматическую или с пеной? Или с пузырьками как в д...">
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
						<a class="photo" href="photos/a0465b697a2a6890876c9206b6c3df81.jpeg" title="бигуди ремингтон Джакузи Turbo Spa"><img src="photos/a0465b697a2a6890876c9206b6c3df81.jpeg" alt="бигуди ремингтон Джакузи Turbo Spa" title="бигуди ремингтон Джакузи Turbo Spa -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-3700r.php"><img src="photos/07ef3c12017d28c1e6e84a22589adc62.jpeg" alt="стоимость солярия Весы бытовые Tanita HD-357" title="стоимость солярия Весы бытовые Tanita HD-357"></a><h2>Весы бытовые Tanita HD-357</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-1000r.php"><img src="photos/f6d7768111f2b2d1a629e5ad58787f64.jpeg" alt="солярий челябинск Весы бытовые Tanita HD-386" title="солярий челябинск Весы бытовые Tanita HD-386"></a><h2>Весы бытовые Tanita HD-386</h2></li>
							<li><a href="http://hometech.elitno.net/komplekt-nasadok-dlya-karat-de-darsonval-1200r.php"><img src="photos/56ea5198cf9112db4bd99627fd631c61.jpeg" alt="массаж верхних конечностей Комплект насадок для КАРАТ ДЕ-212 Дарсонваль" title="массаж верхних конечностей Комплект насадок для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Комплект насадок для КАРАТ ДЕ-212 Дарсонваль</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>бигуди ремингтон Джакузи Turbo Spa</h1>
						<div class="tb"><p>Цена: от <span class="price">1650</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1017.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вы любите принимать ванну? А ароматическую или с пеной? Или с пузырьками как в джакузи? Для большинства людей приобретение огромной ванны с джакузи довольно дорогостоящее удовольствие, к тому же она требует большого пространства и особых условий ухода. Но времена изменились, и <strong>массажер для ванны Turbo Spa </strong>, все что нужно, чтобы прочувствовать те же моменты наслаждения. </p><p><b>Джакузи </b><b>Turbo </b><b>Spa </b>представляет собой небольшой прибор, который крепится к самой обыкновенной ванне. Вы просто включаете его и ложитесь в теплую воду, предвкушая момент блаженства.</p><p>Два режима <strong>массажера Turbo Spa </strong>– пузырьковый и струйный – делают процесс гидромассажа разнообразным и таким образом еще более приятным. Только представьте, как тысячи пузырьков разбегаются по воде, обволакивая ваше тело, а потом, после того как вы переключите режим, журчащие струи приятно разминают кожу. Поднятое настроение, ощущение бодрости гарантировано. К тому же массажер Turbo Spa способствует снижению веса и борется с целлюлитом. Он улучшает работу венозной и лимфатической систем, активизирует процесс кровообращения, обмена веществ. </p><p>Процедура проведения гидромассажа хорошо сказывается на оздоровлении кожи: структура ее выравнивается, цвет становится ровный. Это происходит за счет насыщения клеток эпидермиса кислородом, а вместе с ним питательными веществами. Одновременно пузырьки воздуха и теплые струи воды выводят из организма шлаки и токсины, укрепляя иммунитет.</p><p>Удобное крепление в ванной и безопасность в использовании является для <b>Джакузи </b><b>Turbo </b><b>Spa </b>дополнительным преимуществом.</p><p>Получайте удовольствие от гидромассажа дома, умейте баловать себя! С массажером <b>Джакузи </b><b>Turbo </b><b>Spa </b>это стало проще и дешевле.</p><p><b>Технические характеристики:</b><br><br></p><ul type=disc><li>Безопасное напряжение: 13 В <li>Питание: напряжение 220 В, частота 50-60 Гц AC-13 В <li>Потребляемая мощность: 60 Вт <li>Режим работы: время использования 20 минут/перерыв 5 минут <li>Вес: 2 кг</li></ul><p><b>Производитель:</b> Китай</p><p><b>Гарантия:</b> 1 год</p> бигуди ремингтон</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/1c249153c440530c851d6e7c7521cfb0.jpeg" alt="массаж тазобедренный Ирригатор полости рта CS Medica AquaPulsar OS-1" title="массаж тазобедренный Ирригатор полости рта CS Medica AquaPulsar OS-1"><div class="box" page="irrigator-polosti-rta-cs-medica-aquapulsar-os-2150r"><span class="title">массаж тазобедренный Ирригатор полости рта CS Medica AquaPulsar OS-1</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li><img src="photos/8599b1c1b0dc418f3853c3b1676d22a5.jpeg" alt="зеркало соната Массажер Супербол" title="зеркало соната Массажер Супербол"><div class="box" page="massazher-superbol-600r"><span class="title">зеркало соната Массажер Супербол</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/5b0a15855c4bd59fbf1a99dbfb7421f3.jpeg" alt="шампунь для выпрямления волос Массажер для тела Beurer MG250" title="шампунь для выпрямления волос Массажер для тела Beurer MG250"><div class="box" page="massazher-dlya-tela-beurer-mg-10500r"><span class="title">шампунь для выпрямления волос Массажер для тела Beurer MG250</span><p>от <span class="price">10500</span> руб.</p></div></li>
						<li><img src="photos/bf7091b51f9b18fac68640a374cc7836.jpeg" alt="магазин соляриев Импульсный массажер для лица Gezatone BT-101 4 сменных насадки" title="магазин соляриев Импульсный массажер для лица Gezatone BT-101 4 сменных насадки"><div class="box" page="impulsnyy-massazher-dlya-lica-gezatone-bt-smennyh-nasadki-2800r"><span class="title">магазин соляриев Импульсный массажер для лица Gezatone BT-101 4 сменных насадки</span><p>от <span class="price">2800</span> руб.</p></div></li>
						<li class="large"><img src="photos/e01d2dae2f575f567f13f00f34017217.jpeg" alt="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья" title="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья"><div class="box" page="mashinka-dlya-bikini-dizayna-gezatone-dp-s-nasadkoy-dlya-britya-1500r"><span class="title">электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/2c7a77c230be7b8e97a075b819c83be5.jpeg" alt="общий массаж тела Солярий для лица Efbe-Schott 836" title="общий массаж тела Солярий для лица Efbe-Schott 836"><div class="box" page="solyariy-dlya-lica-efbeschott-5000r"><span class="title">общий массаж тела Солярий для лица Efbe-Schott 836</span><p>от <span class="price">5000</span> руб.</p></div></li>
						<li class="large"><img src="photos/cd97bcc69bc590d53dc7bb400d4a398b.jpeg" alt="старый фен Разогреватель для воска Gezatone без базы" title="старый фен Разогреватель для воска Gezatone без базы"><div class="box" page="razogrevatel-dlya-voska-gezatone-bez-bazy-1090r"><span class="title">старый фен Разогреватель для воска Gezatone без базы</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/c1e44ae0346cc39b27bb78d6ca139c3e.jpeg" alt="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл" title="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл"><div class="box" page="loson-posle-depilyacii-rica-mentolovyy-ml-600r"><span class="title">зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/e69da6f2452895f2eb5bd226ad7e5f3c.jpeg" alt="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord" title="сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord"><div class="box" page="fen-valera-swiss-turbo-rc-rotocord-2920r"><span class="title">сонник зеркало разбитое Фен Valera Swiss Turbo 7000RC Rotocord</span><p>от <span class="price">2920</span> руб.</p></div></li>
						<li><img src="photos/c2cf0bf512fa2b305c7aafb76cac52bb.jpeg" alt="обогрев зеркал заднего вида Фен Braun SPI C2000" title="обогрев зеркал заднего вида Фен Braun SPI C2000"><div class="box" page="fen-braun-spi-c-2540r"><span class="title">обогрев зеркал заднего вида Фен Braun SPI C2000</span><p>от <span class="price">2540</span> руб.</p></div></li>
						<li><img src="photos/903db6a8dda8fc3e969d37c0855d0ace.jpeg" alt="косметология массаж Фен Vitesse VS-944" title="косметология массаж Фен Vitesse VS-944"><div class="box" page="fen-vitesse-vs-640r-2"><span class="title">косметология массаж Фен Vitesse VS-944</span><p>от <span class="price">640</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("dzhakuzi-turbo-spa-1650r.php", 0, -4); if (file_exists("comments/dzhakuzi-turbo-spa-1650r.php")) require_once "comments/dzhakuzi-turbo-spa-1650r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="dzhakuzi-turbo-spa-1650r.php" method="post" onsubmit="return checkForm(this)">
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