<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-redmond-rkm-1999r.php","где можно купить аэрогриль");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-redmond-rkm-1999r.php", $nick, $comment);
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
		<title>где можно купить аэрогриль Чайник электрический Redmond   RK-М118  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="где можно купить аэрогриль, тыква в мультиварке, рецепт курицы в мультиварке, вафельница кубань отзывы, приготовление майонеза в блендере, профессиональные утюги, пылесос thomas s1, пылесос томас твин т1, куриное филе в пароварке, чайник электрический тефаль, купить пылесос зелмер, продажа мультиварок, кофеварка vitek 1513, мультиварки в минске,  какие есть хлебопечки">
		<meta name="description" content="где можно купить аэрогриль Яркий модный чайник Redmond RK-М118 – это стиль и функциональность в корпусе из ...">
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
						<a class="photo" href="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" title="где можно купить аэрогриль Чайник электрический Redmond   RK-М118"><img src="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" alt="где можно купить аэрогриль Чайник электрический Redmond   RK-М118" title="где можно купить аэрогриль Чайник электрический Redmond   RK-М118 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-maxima-mhb-1290r.php"><img src="photos/6dd18dbc3abd740bf749993f0923000d.jpeg" alt="тыква в мультиварке Блендер Maxima MHB-0329" title="тыква в мультиварке Блендер Maxima MHB-0329"></a><h2>Блендер Maxima MHB-0329</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-750r.php"><img src="photos/4a8644a2c29f22e2d9c92389f96ff2ab.jpeg" alt="рецепт курицы в мультиварке Кухонный комбайн ATH-350" title="рецепт курицы в мультиварке Кухонный комбайн ATH-350"></a><h2>Кухонный комбайн ATH-350</h2></li>
							<li><a href="http://kitchentech.elitno.net/sokovyzhimalka-moulinex-ju-3100r.php"><img src="photos/9b7eb1a537ab681974ef9f5deafc988d.jpeg" alt="вафельница кубань отзывы Соковыжималка Moulinex JU5001" title="вафельница кубань отзывы Соковыжималка Moulinex JU5001"></a><h2>Соковыжималка Moulinex JU5001</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>где можно купить аэрогриль Чайник электрический Redmond   RK-М118</h1>
						<div class="tb"><p>Цена: от <span class="price">1999</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18655.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Яркий модный чайник Redmond RK-М118 – это стиль и функциональность в корпусе из нержавеющей стали. Спираль из высококачественной стали, мощность 2000Вт – 1,7 литра воды вскипит за пару минут, а специальный фильтр защитит от накипи. Дополнительными плюсами являются многоуровневая система автоматического отключения, открытие крышки одним нажатием, внутренняя подсветка, удобное хранение шнура. Также в этой модели была использована контактная группа фирмы Otter (Германия), которая обеспечивает не менее 3 тысяч циклов закипания и не менее 10 тысяч снятий-постановок работоспособности.</p><p><b>Характеристики:</b></p><ul type=disc><li>Мощность: 2000 Вт; <li>Емкость: 1.7 л; <li>Нагревательный элемент: высококачественная сталь; <li>Корпус: нержавеющая сталь; <li>Многоуровневая система автоматического отключения; <li>Шкала уровня воды; <li>Внутренняя подсветка; <li>Контакт Otter <li>Открытие крышки одним нажатием <li>Специальный фильтр от накипи; <li>Отсек для шнура. </li></ul><p><b>Производитель: США</b></p><p><b>Гарантия: 1 год</b></p> где можно купить аэрогриль</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/4aba59e656a62396ee01dc9ed0a83fa8.jpeg" alt="приготовление майонеза в блендере Соковыжималка TURBO" title="приготовление майонеза в блендере Соковыжималка TURBO"><div class="box" page="sokovyzhimalka-turbo-7790r"><span class="title">приготовление майонеза в блендере Соковыжималка TURBO</span><p>от <span class="price">7790</span> руб.</p></div></li>
						<li><img src="photos/8d898eca4e96ee4a2fd539403a61a2e7.jpeg" alt="профессиональные утюги Соковыжималка для цитрусовых" title="профессиональные утюги Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-1500r"><span class="title">профессиональные утюги Соковыжималка для цитрусовых</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/c73e008984140d52a15fd324bddeb59f.jpeg" alt="пылесос thomas s1 Чайник электрический Vitek VT-1141" title="пылесос thomas s1 Чайник электрический Vitek VT-1141"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r-2"><span class="title">пылесос thomas s1 Чайник электрический Vitek VT-1141</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li><img src="photos/58caa49e2e5c4bf06cfbf9dcdde29448.jpeg" alt="пылесос томас твин т1 Чайник электрический Vitek VT-1142" title="пылесос томас твин т1 Чайник электрический Vitek VT-1142"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1950r"><span class="title">пылесос томас твин т1 Чайник электрический Vitek VT-1142</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/c75538a0a02b722bb4d5b9c47eb925e7.jpeg" alt="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л" title="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesse-inox-bi-l-2570r"><span class="title">куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л</span><p>от <span class="price">2570</span> руб.</p></div></li>
						<li class="large"><img src="photos/396dcef56ae58a2fdd710c34b32d6011.jpeg" alt="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)" title="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r-2"><span class="title">чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/67898b31f2a00b51820f96bc789fed43.jpeg" alt="купить пылесос зелмер Чайник электрический Maxima MК- M281" title="купить пылесос зелмер Чайник электрический Maxima MК- M281"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-760r"><span class="title">купить пылесос зелмер Чайник электрический Maxima MК- M281</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/08f854ed7155a317d7f9ee53182183f6.jpeg" alt="продажа мультиварок Парогенератор Lelit PS21" title="продажа мультиварок Парогенератор Lelit PS21"><div class="box" page="parogenerator-lelit-ps-12650r-2"><span class="title">продажа мультиварок Парогенератор Lelit PS21</span><p>от <span class="price">12650</span> руб.</p></div></li>
						<li><img src="photos/565e52ebc108aee0062c9aab0f314cab.jpeg" alt="кофеварка vitek 1513 Парогенератор Lelit PG024N" title="кофеварка vitek 1513 Парогенератор Lelit PG024N"><div class="box" page="parogenerator-lelit-pgn-16700r"><span class="title">кофеварка vitek 1513 Парогенератор Lelit PG024N</span><p>от <span class="price">16700</span> руб.</p></div></li>
						<li><img src="photos/5bb6cca83f88fe60dd20ef1d2af8e3f6.jpeg" alt="мультиварки в минске Пылесос Dyson origin dB DC 29" title="мультиварки в минске Пылесос Dyson origin dB DC 29"><div class="box" page="pylesos-dyson-origin-db-dc-17990r"><span class="title">мультиварки в минске Пылесос Dyson origin dB DC 29</span><p>от <span class="price">17990</span> руб.</p></div></li>
						<li><img src="photos/aedfc5d509b81412081451eb51f176f9.jpeg" alt="чайник или термопот Утюг Vitek VT-1206" title="чайник или термопот Утюг Vitek VT-1206"><div class="box" page="utyug-vitek-vt-1330r"><span class="title">чайник или термопот Утюг Vitek VT-1206</span><p>от <span class="price">1330</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-redmond-rkm-1999r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-redmond-rkm-1999r.php")) require_once "comments/chaynik-elektricheskiy-redmond-rkm-1999r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-redmond-rkm-1999r.php" method="post" onsubmit="return checkForm(this)">
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