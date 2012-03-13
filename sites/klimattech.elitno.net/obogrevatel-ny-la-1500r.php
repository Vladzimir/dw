<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("obogrevatel-ny-la-1500r.php","лучший кондиционер для белья");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("obogrevatel-ny-la-1500r.php", $nick, $comment);
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
		<title>лучший кондиционер для белья Обогреватель NY 15LA  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="лучший кондиционер для белья, как использовать кондиционер, очиститель увлажнитель воздуха sharp, водонагреватель проточной воды, бытовые инфракрасные обогреватели, водонагреватели газовые котлы, очистка кондиционера, газовые обогреватели бытовые, аренда кондиционеров, типы осевых вентиляторов, маркировка вентиляторов, контроль скорости вентиляторов, вентилятор процессора программа, отзывы о кондиционерах,  кондиционер на фольксваген">
		<meta name="description" content="лучший кондиционер для белья Масляный обогреватель NY 15LA быстро нагреет воздух в помещении, сделав его уютн...">
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
						<a class="photo" href="photos/055ebba3bd14161bb9de9bf4750fdd50.jpeg" title="лучший кондиционер для белья Обогреватель NY 15LA"><img src="photos/055ebba3bd14161bb9de9bf4750fdd50.jpeg" alt="лучший кондиционер для белья Обогреватель NY 15LA" title="лучший кондиционер для белья Обогреватель NY 15LA -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/infrakrasnyy-obogrevatel-neoclima-2400r.php"><img src="photos/682d503f2c4b2e3e1fd33b985785ee9f.jpeg" alt="как использовать кондиционер Инфракрасный обогреватель Neoclima" title="как использовать кондиционер Инфракрасный обогреватель Neoclima"></a><h2>Инфракрасный обогреватель Neoclima</h2></li>
							<li><a href="http://klimattech.elitno.net/infrakrasnyy-obogrevatel-sinbo-1900r.php"><img src="photos/78a4770ecd1d41fed364230526a418a5.jpeg" alt="очиститель увлажнитель воздуха sharp Инфракрасный обогреватель Sinbo" title="очиститель увлажнитель воздуха sharp Инфракрасный обогреватель Sinbo"></a><h2>Инфракрасный обогреватель Sinbo</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tece-m-2800r.php"><img src="photos/90d8d7517ead95b1e1e49971103b31a0.jpeg" alt="водонагреватель проточной воды Конвектор Timberk TEC.E1 M 2000" title="водонагреватель проточной воды Конвектор Timberk TEC.E1 M 2000"></a><h2>Конвектор Timberk TEC.E1 M 2000</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>лучший кондиционер для белья Обогреватель NY 15LA</h1>
						<div class="tb"><p>Цена: от <span class="price">1500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_17444.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Масляный обогреватель NY 15LA быстро нагреет воздух в помещении, сделав его уютным, и защитит вас от холода морозными зимними вечерами. При нагревании NY 15LA не появляются посторонние запахи в отличие от электрических нагревателей, которые сжигают скопившуюся на нагревательном элементе пыль. Он не сжигает кислород, осуществляя мягкий нагрев воздуха в помещении, постепенно отдавая тепло окружающему воздуху, тем самым не создавая в квартире душную атмосферу. Семь секций дают оптимальный уровень передачи тепла окружающему воздуху. Кстати, это соотношение теплопередачи и количества секций, так же делает его компактным.Он удобен в эксплуатации, имеет отделение для шнура, ручку для переноски и колёсики, а с помощью механического управления можно регулировать температуру.</p><p><b>Характеристики: </b></p><ul type=disc><li>Уровни мощности: 1500/900/600 Вт <li>Площадь обогрева: 15 кв.м. <li>Тип нагревательного элемента: масляный нагреватель <li>Количество секций: 7 <li>Управление: механическое, регулировка температуры, выключатель со световым индикатором <li>Форм-фактор: Напольный <li>Особенности: Защита от мороза </li></ul><p><b>Изготовитель: Китай</b></p> лучший кондиционер для белья</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7c8bd16774bf9fee3455010ae392ebb1.jpeg" alt="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I" title="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I"><div class="box" page="radiator-maslyanyy-timberk-tor-bt-i-1950r"><span class="title">бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/d08a3769d6472d1c5dcfdd9b96e9984a.jpeg" alt="водонагреватели газовые котлы Масляный обогреватель  Atlanta АТН-2001" title="водонагреватели газовые котлы Масляный обогреватель  Atlanta АТН-2001"><div class="box" page="maslyanyy-obogrevatel-atlanta-atn-1700r"><span class="title">водонагреватели газовые котлы Масляный обогреватель  Atlanta АТН-2001</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li><img src="photos/d9533390ba896bf45695025ab63ff288.jpeg" alt="очистка кондиционера Термогигрометр цифровой RST, арт. 06012" title="очистка кондиционера Термогигрометр цифровой RST, арт. 06012"><div class="box" page="termogigrometr-cifrovoy-rst-art-895r"><span class="title">очистка кондиционера Термогигрометр цифровой RST, арт. 06012</span><p>от <span class="price">895</span> руб.</p></div></li>
						<li><img src="photos/53eee9f3ea1d2998974c72bc653021ed.jpeg" alt="газовые обогреватели бытовые Термометр оконный RST, арт. 02090" title="газовые обогреватели бытовые Термометр оконный RST, арт. 02090"><div class="box" page="termometr-okonnyy-rst-art-220r"><span class="title">газовые обогреватели бытовые Термометр оконный RST, арт. 02090</span><p>от <span class="price">220</span> руб.</p></div></li>
						<li class="large"><img src="photos/278ddc7c355ad8910b60d6367af136aa.jpeg" alt="аренда кондиционеров Тепловентилятор керамический Vitesse VS-865" title="аренда кондиционеров Тепловентилятор керамический Vitesse VS-865"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-2200r"><span class="title">аренда кондиционеров Тепловентилятор керамический Vitesse VS-865</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li class="large"><img src="photos/9047019d859c516eaff7f68bcdf19600.jpeg" alt="типы осевых вентиляторов Timberk TIH R1 5M Переносная тепловая пушка" title="типы осевых вентиляторов Timberk TIH R1 5M Переносная тепловая пушка"><div class="box" page="timberk-tih-r-m-perenosnaya-teplovaya-pushka-3940r"><span class="title">типы осевых вентиляторов Timberk TIH R1 5M Переносная тепловая пушка</span><p>от <span class="price">3940</span> руб.</p></div></li>
						<li class="large"><img src="photos/f7b651727c936b973e40b0fd646bb983.jpeg" alt="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703" title="маркировка вентиляторов Воздухоочиститель Redmond RAC-3703"><div class="box" page="vozduhoochistitel-redmond-rac-8990r"><span class="title">маркировка вентиляторов Воздухоочиститель Redmond RAC-3703</span><p>от <span class="price">8990</span> руб.</p></div></li>
						<li><img src="photos/f95f1f590bff20e345147b7932efb228.jpeg" alt="контроль скорости вентиляторов Очиститель воздуха Ballu AP-430 F5" title="контроль скорости вентиляторов Очиститель воздуха Ballu AP-430 F5"><div class="box" page="ochistitel-vozduha-ballu-ap-f-6450r"><span class="title">контроль скорости вентиляторов Очиститель воздуха Ballu AP-430 F5</span><p>от <span class="price">6450</span> руб.</p></div></li>
						<li><img src="photos/19096f1a55ac4134787bff919f82a090.jpeg" alt="вентилятор процессора программа Ультразвуковой увлажнитель Electrolux EHU 5515D" title="вентилятор процессора программа Ультразвуковой увлажнитель Electrolux EHU 5515D"><div class="box" page="ultrazvukovoy-uvlazhnitel-electrolux-ehu-d-7050r"><span class="title">вентилятор процессора программа Ультразвуковой увлажнитель Electrolux EHU 5515D</span><p>от <span class="price">7050</span> руб.</p></div></li>
						<li><img src="photos/28872bf4a200912283403ccfcdb3c796.jpeg" alt="отзывы о кондиционерах Увлажнитель Atlanta АТН-160" title="отзывы о кондиционерах Увлажнитель Atlanta АТН-160"><div class="box" page="uvlazhnitel-atlanta-atn-700r"><span class="title">отзывы о кондиционерах Увлажнитель Atlanta АТН-160</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/0d6a9a2d5d0b8548fdcc53e2a36f2ef1.jpeg" alt="вентилятор для жесткого диска Увлажнитель ZENET 2728" title="вентилятор для жесткого диска Увлажнитель ZENET 2728"><div class="box" page="uvlazhnitel-zenet-4650r"><span class="title">вентилятор для жесткого диска Увлажнитель ZENET 2728</span><p>от <span class="price">4650</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("obogrevatel-ny-la-1500r.php", 0, -4); if (file_exists("comments/obogrevatel-ny-la-1500r.php")) require_once "comments/obogrevatel-ny-la-1500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="obogrevatel-ny-la-1500r.php" method="post" onsubmit="return checkForm(this)">
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