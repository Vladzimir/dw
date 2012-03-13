<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("konvektor-timberk-tece-m-2080r.php","вентилятор не крутится");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("konvektor-timberk-tece-m-2080r.php", $nick, $comment);
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
		<title>вентилятор не крутится Конвектор Timberk TEC.E1 M 1000  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вентилятор не крутится, технология кондиционеров, водонагреватель накопительный 100, официальный дилер кондиционеров, замена масляного радиатора, маркировка вентиляторов, электрическая схема вентилятора, водонагреватель 100 л, кондиционеры для микроавтобусов, отсек для кондиционера, водонагреватель газовый vektor, домашние метеостанции rst, вентилятор на материнскую, ремень привода вентилятора,  программа подбора вентиляторов">
		<meta name="description" content="вентилятор не крутится Timberk TEC.E1 M 1000 – недорогой конвектор мощностью 1000 Вт с механическим тер...">
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
						<a class="photo" href="photos/ddc0aab203cdce31375d769ac0564ff3.jpeg" title="вентилятор не крутится Конвектор Timberk TEC.E1 M 1000"><img src="photos/ddc0aab203cdce31375d769ac0564ff3.jpeg" alt="вентилятор не крутится Конвектор Timberk TEC.E1 M 1000" title="вентилятор не крутится Конвектор Timberk TEC.E1 M 1000 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/splitsistema-neoclima-nsnuhahinr-21900r.php"><img src="photos/fa85dda66f5e6e8c0e413d3d9959f6e7.jpeg" alt="технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4" title="технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4"></a><h2>Сплит-система NeoClima NS/NU-HAH12INR4</h2></li>
							<li><a href="http://klimattech.elitno.net/maslyanyy-radiator-timberk-tor-rr-2480r.php"><img src="photos/79514781a11ae1df868b3cf1ab95da61.jpeg" alt="водонагреватель накопительный 100 Масляный радиатор Timberk TOR 31.2309 RR" title="водонагреватель накопительный 100 Масляный радиатор Timberk TOR 31.2309 RR"></a><h2>Масляный радиатор Timberk TOR 31.2309 RR</h2></li>
							<li><a href="http://klimattech.elitno.net/pogodnaya-proekcionnaya-stanciya-rst-meteo-projection-art-5300r.php"><img src="photos/65f5d6c60dd9473e2de6182113280455.jpeg" alt="официальный дилер кондиционеров Погодная проекционная станция RST Meteo projection 705, арт. 32705" title="официальный дилер кондиционеров Погодная проекционная станция RST Meteo projection 705, арт. 32705"></a><h2>Погодная проекционная станция RST Meteo projection 705, арт. 32705</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вентилятор не крутится Конвектор Timberk TEC.E1 M 1000</h1>
						<div class="tb"><p>Цена: от <span class="price">2080</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18166.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Timberk TEC.E1 M 1000 – недорогой конвектор мощностью 1000 Вт с механическим термостатом специально разработанный как экономичный вариант с минимальным использованием электронных плат управления. Но, не смотря на это, конвектор защищен от перегрева и совершенно безопасен в использовании. Он не накапливает пыль и не выжигает кислород, а высокий класс защиты от влаги IP24 позволяет использовать конвектор даже во влажных помещениях.</p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220-240/50 <li>Мощность: 1000 Вт <li>Размеры с ножками: 540х340х330 <li>Ососбенности: Три режима нагрева </li></ul><p><b>Производитель: Швеция</b></p> вентилятор не крутится</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/2e7eaee61cf998d8e7f977231e61dee7.jpeg" alt="замена масляного радиатора Тепловентилятор NEOCLIMA NCTN-5L" title="замена масляного радиатора Тепловентилятор NEOCLIMA NCTN-5L"><div class="box" page="teploventilyator-neoclima-nctnl-3200r"><span class="title">замена масляного радиатора Тепловентилятор NEOCLIMA NCTN-5L</span><p>от <span class="price">3200</span> руб.</p></div></li>
						<li><img src="photos/069f9035158c301188c327ecd3113c46.jpeg" alt="маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX" title="маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfshlx-3120r"><span class="title">маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX</span><p>от <span class="price">3120</span> руб.</p></div></li>
						<li><img src="photos/3f74405f4008f8791249a19f5ed24fa4.jpeg" alt="электрическая схема вентилятора Тепловая пушка Ballu BPH-3.000C" title="электрическая схема вентилятора Тепловая пушка Ballu BPH-3.000C"><div class="box" page="teplovaya-pushka-ballu-bphc-3250r"><span class="title">электрическая схема вентилятора Тепловая пушка Ballu BPH-3.000C</span><p>от <span class="price">3250</span> руб.</p></div></li>
						<li><img src="photos/b8f26fb8089fd535d1b75c7490f71704.jpeg" alt="водонагреватель 100 л Тепловая пушка Ballu BPH-5.000C" title="водонагреватель 100 л Тепловая пушка Ballu BPH-5.000C"><div class="box" page="teplovaya-pushka-ballu-bphc-4200r"><span class="title">водонагреватель 100 л Тепловая пушка Ballu BPH-5.000C</span><p>от <span class="price">4200</span> руб.</p></div></li>
						<li class="large"><img src="photos/1ec83e9cb7df4ee11f0d144649ef201f.jpeg" alt="кондиционеры для микроавтобусов Переносная тепловая пушка Timberk TIH R1 3M" title="кондиционеры для микроавтобусов Переносная тепловая пушка Timberk TIH R1 3M"><div class="box" page="perenosnaya-teplovaya-pushka-timberk-tih-r-m-2970r"><span class="title">кондиционеры для микроавтобусов Переносная тепловая пушка Timberk TIH R1 3M</span><p>от <span class="price">2970</span> руб.</p></div></li>
						<li class="large"><img src="photos/bd6d0623b7469a7fd12ea78624452923.jpeg" alt="отсек для кондиционера Очиститель воздуха Neoclima NAP-300 белый" title="отсек для кондиционера Очиститель воздуха Neoclima NAP-300 белый"><div class="box" page="ochistitel-vozduha-neoclima-nap-belyy-5500r"><span class="title">отсек для кондиционера Очиститель воздуха Neoclima NAP-300 белый</span><p>от <span class="price">5500</span> руб.</p></div></li>
						<li class="large"><img src="photos/cb2bd36e5b426ebd6b01cac1b1667c9e.jpeg" alt="водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H" title="водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-ballu-uhbh-4170r"><span class="title">водонагреватель газовый vektor Увлажнитель воздуха ультразвуковой Ballu UHB-910H</span><p>от <span class="price">4170</span> руб.</p></div></li>
						<li><img src="photos/e3833aec18ff0ce36dee7820ee2149ac.jpeg" alt="домашние метеостанции rst Мойка воздуха Electrolux EHAW 6525" title="домашние метеостанции rst Мойка воздуха Electrolux EHAW 6525"><div class="box" page="moyka-vozduha-electrolux-ehaw-12750r-2"><span class="title">домашние метеостанции rst Мойка воздуха Electrolux EHAW 6525</span><p>от <span class="price">12750</span> руб.</p></div></li>
						<li><img src="photos/b9fbd87998ff3aa9fa70bd463b409be7.jpeg" alt="вентилятор на материнскую Мойка воздуха Electrolux EHAW 7510D" title="вентилятор на материнскую Мойка воздуха Electrolux EHAW 7510D"><div class="box" page="moyka-vozduha-electrolux-ehaw-d-15450r"><span class="title">вентилятор на материнскую Мойка воздуха Electrolux EHAW 7510D</span><p>от <span class="price">15450</span> руб.</p></div></li>
						<li><img src="photos/dcbf0b1a09446b0768f079fe16310b82.jpeg" alt="ремень привода вентилятора Timberk TMS TEC 05.HM Увлажнитель" title="ремень привода вентилятора Timberk TMS TEC 05.HM Увлажнитель"><div class="box" page="timberk-tms-tec-hm-uvlazhnitel-220r"><span class="title">ремень привода вентилятора Timberk TMS TEC 05.HM Увлажнитель</span><p>от <span class="price">220</span> руб.</p></div></li>
						<li><img src="photos/c7f39ca4ae7ab043ae60cf2c5864767f.jpeg" alt="вентиляторы для сушильных камер Уличный газовый обогреватель ITM Sunny 950 Inbox" title="вентиляторы для сушильных камер Уличный газовый обогреватель ITM Sunny 950 Inbox"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-inbox-26350r"><span class="title">вентиляторы для сушильных камер Уличный газовый обогреватель ITM Sunny 950 Inbox</span><p>от <span class="price">26350</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("konvektor-timberk-tece-m-2080r.php", 0, -4); if (file_exists("comments/konvektor-timberk-tece-m-2080r.php")) require_once "comments/konvektor-timberk-tece-m-2080r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="konvektor-timberk-tece-m-2080r.php" method="post" onsubmit="return checkForm(this)">
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