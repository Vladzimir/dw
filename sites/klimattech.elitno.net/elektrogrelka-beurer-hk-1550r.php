<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektrogrelka-beurer-hk-1550r.php","резистор вентилятора печки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektrogrelka-beurer-hk-1550r.php", $nick, $comment);
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
		<title>резистор вентилятора печки Электрогрелка Beurer HK35  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="резистор вентилятора печки, комплектация кондиционера, конвектор видео в mp4 бесплатно, кондиционеры руководство, кондиционеры dantex, конвектор с вентилятором, водонагреватель баня, кондиционеры panasonic cs yw9mkd, водонагреватель electrolux ewh 50 centurio, регулятор оборотов вентилятора, скачать конвектор для psp, контроль вентиляторов, номера кондиционеров, водонагреватели baxi,  вентилятор с подогревом">
		<meta name="description" content="резистор вентилятора печки Электрогрелка Beurer HK35 обогреет зимой, вылечит от простуд и внесет толику уют...">
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
						<a class="photo" href="photos/6954189b05aa4e95df5af4cf0242d5ed.jpeg" title="резистор вентилятора печки Электрогрелка Beurer HK35"><img src="photos/6954189b05aa4e95df5af4cf0242d5ed.jpeg" alt="резистор вентилятора печки Электрогрелка Beurer HK35" title="резистор вентилятора печки Электрогрелка Beurer HK35 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-mega-max-mh-r-2950r.php"><img src="photos/99ed66418716ef7bad7c268317c699d0.jpeg" alt="комплектация кондиционера Карбоновый обогреватель Mega Max MH 9100R" title="комплектация кондиционера Карбоновый обогреватель Mega Max MH 9100R"></a><h2>Карбоновый обогреватель Mega Max MH 9100R</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-led-r-in-3220r.php"><img src="photos/de56a071ca1190260819c688068be1ef.jpeg" alt="конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN" title="конвектор видео в mp4 бесплатно Конвектор Timberk LED R12.20 IN"></a><h2>Конвектор Timberk LED R12.20 IN</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-e-2200r.php"><img src="photos/d482449dfe96b336d6abb1c349b28838.jpeg" alt="кондиционеры руководство Конвектор Timberk TEC.E1 E 500" title="кондиционеры руководство Конвектор Timberk TEC.E1 E 500"></a><h2>Конвектор Timberk TEC.E1 E 500</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>резистор вентилятора печки Электрогрелка Beurer HK35</h1>
						<div class="tb"><p>Цена: от <span class="price">1550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_269.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Электрогрелка Beurer HK35</b> обогреет зимой, вылечит от простуд и внесет толику уюта в вашу жизнь. Три температурных режима грелки позволяют контролировать процесс, выставив уровень нагрева максимально комфортным лично для вас. Температурный предохранитель защищает аппарат от перегревания – вы можете не беспокоится за своевременное отключение электрогрелки. А возможность тканевого покрытия позволяет стирать грелку в машине-автомат. </p><p><b>Электрогрелка Beurer HK35</b> –хороший практичный подарок своим близким.</p><p><strong>Технические характеристики: </strong></p><ul type=disc><li>Количество температурных режимов: 3 <li>Защита от перегрева BSS <li>Стирающийся чехол из хлопка <li>Питание: напряжение 220 В <li>Быстрый нагрев <li>Автоматическое отключение через 90 минут <li>Размер: 300 х 400 мм</li></ul><p><strong>В комплект входит: </strong>основное устройство, инструкция.</p><p><strong>Производство: </strong>Германия</p><p><strong>Гарантия:</strong> 2 года</p> резистор вентилятора печки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ffe9b7c6d5e2ad4da69baee60d1e3e57.jpeg" alt="кондиционеры dantex Радиатор масляный Timberk TOR 21.1507 ER I" title="кондиционеры dantex Радиатор масляный Timberk TOR 21.1507 ER I"><div class="box"><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-er-i-2000r.php"><h3 class="title">кондиционеры dantex Радиатор масляный Timberk TOR 21.1507 ER I</h3><p>от <span class="price">2000</span> руб.</p></a></div></li>
						<li><img src="photos/70a147d8cce26e099ee8d5c87f11d19c.jpeg" alt="конвектор с вентилятором Масляный радиатор Timberk TOR 41.2009 FH" title="конвектор с вентилятором Масляный радиатор Timberk TOR 41.2009 FH"><div class="box" page="maslyanyy-radiator-timberk-tor-fh-2700r"><span class="title">конвектор с вентилятором Масляный радиатор Timberk TOR 41.2009 FH</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/055ebba3bd14161bb9de9bf4750fdd50.jpeg" alt="водонагреватель баня Обогреватель NY 15LA" title="водонагреватель баня Обогреватель NY 15LA"><div class="box" page="obogrevatel-ny-la-1500r"><span class="title">водонагреватель баня Обогреватель NY 15LA</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/30e3747ae57d55f1cc069b2c64e38e68.jpeg" alt="кондиционеры panasonic cs yw9mkd Термометр цифровой автомобильный RST, арт. 02178" title="кондиционеры panasonic cs yw9mkd Термометр цифровой автомобильный RST, арт. 02178"><div class="box" page="termometr-cifrovoy-avtomobilnyy-rst-art-580r"><span class="title">кондиционеры panasonic cs yw9mkd Термометр цифровой автомобильный RST, арт. 02178</span><p>от <span class="price">580</span> руб.</p></div></li>
						<li class="large"><img src="photos/e1065c959ee5e044b7f65dfc9d025d14.jpeg" alt="водонагреватель electrolux ewh 50 centurio Гигрометр Boneco (механ.) 7057" title="водонагреватель electrolux ewh 50 centurio Гигрометр Boneco (механ.) 7057"><div class="box" page="gigrometr-boneco-mehan-220r"><span class="title">водонагреватель electrolux ewh 50 centurio Гигрометр Boneco (механ.) 7057</span><p>от <span class="price">220</span> руб.</p></div></li>
						<li class="large"><img src="photos/a4148559f490674cd7474e066dba51ac.jpeg" alt="регулятор оборотов вентилятора Проекционная погодная станция RST 32707" title="регулятор оборотов вентилятора Проекционная погодная станция RST 32707"><div class="box" page="proekcionnaya-pogodnaya-stanciya-rst-5550r"><span class="title">регулятор оборотов вентилятора Проекционная погодная станция RST 32707</span><p>от <span class="price">5550</span> руб.</p></div></li>
						<li class="large"><img src="photos/8c0dbfa87212eb427e3b8a222777f9a8.jpeg" alt="скачать конвектор для psp Очиститель-увлажнитель воздуха Атмос Аква-2800" title="скачать конвектор для psp Очиститель-увлажнитель воздуха Атмос Аква-2800"><div class="box" page="ochistiteluvlazhnitel-vozduha-atmos-akva-3370r"><span class="title">скачать конвектор для psp Очиститель-увлажнитель воздуха Атмос Аква-2800</span><p>от <span class="price">3370</span> руб.</p></div></li>
						<li><img src="photos/2b4391db10a68fe6aa7d6bd5452d399a.jpeg" alt="контроль вентиляторов Уличный газовый обогреватель Neoclima 09HW-B" title="контроль вентиляторов Уличный газовый обогреватель Neoclima 09HW-B"><div class="box" page="ulichnyy-gazovyy-obogrevatel-neoclima-hwb-10250r"><span class="title">контроль вентиляторов Уличный газовый обогреватель Neoclima 09HW-B</span><p>от <span class="price">10250</span> руб.</p></div></li>
						<li><img src="photos/f08421488a7bd6f20d3e09733f279f3d.jpeg" alt="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04" title="номера кондиционеров Уличный газовый обогреватель ITM Sunny 04"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-23800r"><span class="title">номера кондиционеров Уличный газовый обогреватель ITM Sunny 04</span><p>от <span class="price">23800</span> руб.</p></div></li>
						<li><img src="photos/2bd1980a72871036d26bc3eed4104d46.jpeg" alt="водонагреватели baxi Камин Комплект Dimplex Milan CFP 3873C" title="водонагреватели baxi Камин Комплект Dimplex Milan CFP 3873C"><div class="box" page="kamin-komplekt-dimplex-milan-cfp-c-26605r"><span class="title">водонагреватели baxi Камин Комплект Dimplex Milan CFP 3873C</span><p>от <span class="price">26605</span> руб.</p></div></li>
						<li><img src="photos/cba623b151c2cc395aeabb1dde5e459f.jpeg" alt="кондиционер поло седан Камин Классический очаг Dimplex Truscott Black" title="кондиционер поло седан Камин Классический очаг Dimplex Truscott Black"><div class="box" page="kamin-klassicheskiy-ochag-dimplex-truscott-black-13772r"><span class="title">кондиционер поло седан Камин Классический очаг Dimplex Truscott Black</span><p>от <span class="price">13772</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektrogrelka-beurer-hk-1550r.php", 0, -4); if (file_exists("comments/elektrogrelka-beurer-hk-1550r.php")) require_once "comments/elektrogrelka-beurer-hk-1550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektrogrelka-beurer-hk-1550r.php" method="post" onsubmit="return checkForm(this)">
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