<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("pylesos-atlanta-atn-3400r.php","филипс ручной блендер");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("pylesos-atlanta-atn-3400r.php", $nick, $comment);
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
		<title>филипс ручной блендер Пылесос Atlanta АТН-3400  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="филипс ручной блендер, мясорубка в посудомойке, сравнить пылесосы, электрочайник braun, соковыжималка для моркови, микроволновые печи elenberg, капельная кофеварка инструкция, запчасти пылесос томас, стоит ли покупать мультиварку, картофельный хлеб в хлебопечке, вафельница кубань отзывы, мультиварка sr tmh 10, ребра в аэрогриле, ремень для хлебопечки,  купить рецепты для мультиварки">
		<meta name="description" content="филипс ручной блендер Пылесос Atlanta АТН-3400 циклонного типа емкостью 2,3 л и мощностью 1800 Вт выпо...">
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
						<a class="photo" href="photos/d53c2ed7dc8f0cab982dc0b1633d551f.jpeg" title="филипс ручной блендер Пылесос Atlanta АТН-3400"><img src="photos/d53c2ed7dc8f0cab982dc0b1633d551f.jpeg" alt="филипс ручной блендер Пылесос Atlanta АТН-3400" title="филипс ручной блендер Пылесос Atlanta АТН-3400 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/aerogril-maxima-mag-2290r.php"><img src="photos/50504b425a4036964e7c0cdd2137107c.jpeg" alt="мясорубка в посудомойке Аэрогриль Maxima MAG-0247" title="мясорубка в посудомойке Аэрогриль Maxima MAG-0247"></a><h2>Аэрогриль Maxima MAG-0247</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-900r.php"><img src="photos/fdaa728b5765994d8f9d4b5b1575efcd.jpeg" alt="сравнить пылесосы Блендер Atlanta АТН-333" title="сравнить пылесосы Блендер Atlanta АТН-333"></a><h2>Блендер Atlanta АТН-333</h2></li>
							<li><a href="http://kitchentech.elitno.net/chopper-vitek-vt-1790r.php"><img src="photos/ab6d4d55ecf241ffc9d0ef81c9ea44bc.jpeg" alt="электрочайник braun Чоппер Vitek VT-1641" title="электрочайник braun Чоппер Vitek VT-1641"></a><h2>Чоппер Vitek VT-1641</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>филипс ручной блендер Пылесос Atlanta АТН-3400</h1>
						<div class="tb"><p>Цена: от <span class="price">3400</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19652.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Пылесос Atlanta АТН-3400 циклонного типа емкостью 2,3 л и мощностью 1800 Вт выполненный в современном дизайне с плавной регулировкой мощности на корпусе для сухой уборки. Имеет 5 ступеней фильтрации и сетевой шнур длиной 4 метра. Оснащен системой шумопонижения. Соответствует европейским и американским нормам безопасности.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Сухая уборка <li>Потребляемая мощность: 1800 Вт <li>Пылесборник циклонный фильтр, емкостью 2.30 л <li>Регулятор мощности на корпусе <li>5 ступеней фильтрации <li>Длина сетевого шнура 4 метра <li>Пятиуровневая система фильтрации <li>Без мешка для сбора пыли <li>Контейнер для пыли емкостью 2,3 литра <li>Система шумопонижения <li>Шнур длиной 4 метра с системой автоматической смотки <li>Плавная регулировка мощности </li></ul><p><strong>Производитель: США</strong></p> филипс ручной блендер</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/6e844ec2051132de84c89f71f9ba6d6a.jpeg" alt="соковыжималка для моркови Кухонный комбайн ATH-360" title="соковыжималка для моркови Кухонный комбайн ATH-360"><div class="box" page="kuhonnyy-kombayn-ath-680r"><span class="title">соковыжималка для моркови Кухонный комбайн ATH-360</span><p>от <span class="price">680</span> руб.</p></div></li>
						<li><img src="photos/a5bbc6e64af24877cdab95c62f91247a.jpeg" alt="микроволновые печи elenberg Кофемолка ATH-276" title="микроволновые печи elenberg Кофемолка ATH-276"><div class="box" page="kofemolka-ath-450r"><span class="title">микроволновые печи elenberg Кофемолка ATH-276</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/59cc932c7224c4f3a91684264a52c663.jpeg" alt="капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141" title="капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141"><div class="box" page="kuhonnyy-kombayn-moulinex-fp-6140r"><span class="title">капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141</span><p>от <span class="price">6140</span> руб.</p></div></li>
						<li><img src="photos/a9b561236bfa7747af43043cb7d43b52.jpeg" alt="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро" title="запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро"><div class="box" page="mikrovolnovaya-pech-s-grilem-moulinex-mw-parovarka-l-serebro-6110r"><span class="title">запчасти пылесос томас Микроволновая печь с грилем Moulinex MW531030 пароварка, 23 л, серебро</span><p>от <span class="price">6110</span> руб.</p></div></li>
						<li class="large"><img src="photos/5bf48f17b0c0a7ecdd4b2ccc867e6baf.jpeg" alt="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191" title="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191"><div class="box" page="elektroplita-indukcionnaya-atlanta-ath-1300r"><span class="title">стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li class="large"><img src="photos/9187d3c933faddcbcce7af0525ae7732.jpeg" alt="картофельный хлеб в хлебопечке Весы электронные AND SK-20KD" title="картофельный хлеб в хлебопечке Весы электронные AND SK-20KD"><div class="box" page="vesy-elektronnye-and-skkd-7100r"><span class="title">картофельный хлеб в хлебопечке Весы электронные AND SK-20KD</span><p>от <span class="price">7100</span> руб.</p></div></li>
						<li class="large"><img src="photos/9b7eb1a537ab681974ef9f5deafc988d.jpeg" alt="вафельница кубань отзывы Соковыжималка Moulinex JU5001" title="вафельница кубань отзывы Соковыжималка Moulinex JU5001"><div class="box" page="sokovyzhimalka-moulinex-ju-3100r"><span class="title">вафельница кубань отзывы Соковыжималка Moulinex JU5001</span><p>от <span class="price">3100</span> руб.</p></div></li>
						<li><img src="photos/b18048af79224983f1e624ba7e264cff.jpeg" alt="мультиварка sr tmh 10 Чайник электрический Vitek VT-1144 серебряный" title="мультиварка sr tmh 10 Чайник электрический Vitek VT-1144 серебряный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-serebryanyy-1550r"><span class="title">мультиварка sr tmh 10 Чайник электрический Vitek VT-1144 серебряный</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/1a5872ce4a924d71272e9d8aacab1a34.jpeg" alt="ребра в аэрогриле Чайник электрический Maxima MК-103" title="ребра в аэрогриле Чайник электрический Maxima MК-103"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r"><span class="title">ребра в аэрогриле Чайник электрический Maxima MК-103</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/46f63d5550ab774c363b5ff4ba202c31.jpeg" alt="ремень для хлебопечки Чайник электрический Maxima MK- M191" title="ремень для хлебопечки Чайник электрический Maxima MK- M191"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-990r"><span class="title">ремень для хлебопечки Чайник электрический Maxima MK- M191</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/2beb3280efeae27110a6ae9f09b4d8e5.jpeg" alt="принцип гейзерной кофеварки Электрический чайник Atlanta АТН-678" title="принцип гейзерной кофеварки Электрический чайник Atlanta АТН-678"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-560r-2"><span class="title">принцип гейзерной кофеварки Электрический чайник Atlanta АТН-678</span><p>от <span class="price">560</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("pylesos-atlanta-atn-3400r.php", 0, -4); if (file_exists("comments/pylesos-atlanta-atn-3400r.php")) require_once "comments/pylesos-atlanta-atn-3400r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="pylesos-atlanta-atn-3400r.php" method="post" onsubmit="return checkForm(this)">
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