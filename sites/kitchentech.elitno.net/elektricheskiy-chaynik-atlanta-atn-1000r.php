<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-atlanta-atn-1000r.php","соковыжималка для яблок");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-atlanta-atn-1000r.php", $nick, $comment);
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
		<title>соковыжималка для яблок Электрический чайник Atlanta АТН-781  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="соковыжималка для яблок, блюда на пару в мультиварке, сломалась мясорубка, видео приготовление в аэрогриле, язык в аэрогриле, мотор пылесоса самсунг, тканевый мешок для пылесоса, картофельный хлеб в хлебопечке, продам вафельницу, пылесос mediclean, стоит ли покупать мультиварку, хлебопечки донецк, сервисный центр кофемашин, покупать ли мультиварку,  дорогая мультиварка">
		<meta name="description" content="соковыжималка для яблок Электрический чайник Atlanta АТН-781 – стильный кухонный прибор из нержавеющей с...">
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
						<a class="photo" href="photos/4aa517f040bb8f7cdf25d41fea297b7f.jpeg" title="соковыжималка для яблок Электрический чайник Atlanta АТН-781"><img src="photos/4aa517f040bb8f7cdf25d41fea297b7f.jpeg" alt="соковыжималка для яблок Электрический чайник Atlanta АТН-781" title="соковыжималка для яблок Электрический чайник Atlanta АТН-781 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-vitek-vt-krasnyy-2500r.php"><img src="photos/f0cf14852d6125070feba5c77deecf93.jpeg" alt="блюда на пару в мультиварке Блендер Vitek VT-1458 красный" title="блюда на пару в мультиварке Блендер Vitek VT-1458 красный"></a><h2>Блендер Vitek VT-1458 красный</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rbp-1490r.php"><img src="photos/54c015da9ba000a4c33278978300bae5.jpeg" alt="сломалась мясорубка Блендер Redmond RB-P1301" title="сломалась мясорубка Блендер Redmond RB-P1301"></a><h2>Блендер Redmond RB-P1301</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-36590r.php"><img src="photos/c26c66e7052b7c7adfb4026bf7ee1ec7.jpeg" alt="видео приготовление в аэрогриле Кофемашина Nivona NICR750 CafeRomatica" title="видео приготовление в аэрогриле Кофемашина Nivona NICR750 CafeRomatica"></a><h2>Кофемашина Nivona NICR750 CafeRomatica</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>соковыжималка для яблок Электрический чайник Atlanta АТН-781</h1>
						<div class="tb"><p>Цена: от <span class="price">1000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19995.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta АТН-781 – стильный кухонный прибор из нержавеющей стали синего, коричневого, белого или розового цвета. Его мощность составляет 1090 Вт при объеме 1 литр. Используется защищенный закрытый нагревательный элемент, который гораздо проще мыть, чем открытую спираль. Безопасен, т. к. имеет защиту от перегрева, а также блокировку включения без воды. Предусмотрено место для электрошнура в цокольной подставке. Обладает низким уровнем электропотребления. Соответствует европейским и американским нормам безопасности. Изделие сертифицировано Госстандартом РФ.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Фильтр от накипи <li>Закрытый нагревательный элемент <li>Защита от перегрева без воды <li>Корпус из нержавеющей стали <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует американским и европейским нормам безопасности <li>1,0 л, Мощность 1090W <li>230V, 50Hz <li>22 x 17.3 x 23 см </li></ul><p><strong>Производитель: США</strong></p> соковыжималка для яблок</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/eb4618ce7491ec77cbaa3b4b7dd675cb.jpeg" alt="язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)" title="язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)"><div class="box" page="espressokofemashina-melitta-caffeo-solo-pure-white-28530r"><span class="title">язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)</span><p>от <span class="price">28530</span> руб.</p></div></li>
						<li><img src="photos/99f24579a4151d885006823a70346b26.jpeg" alt="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1" title="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1"><div class="box" page="elektroplitka-maxima-mes-550r"><span class="title">мотор пылесоса самсунг Электроплитка Maxima MES-0152-1</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/56cb596182a024c5be877e612e6462d8.jpeg" alt="тканевый мешок для пылесоса Пароварка Atlanta АТН-605" title="тканевый мешок для пылесоса Пароварка Atlanta АТН-605"><div class="box" page="parovarka-atlanta-atn-1050r-2"><span class="title">тканевый мешок для пылесоса Пароварка Atlanta АТН-605</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/9187d3c933faddcbcce7af0525ae7732.jpeg" alt="картофельный хлеб в хлебопечке Весы электронные AND SK-20KD" title="картофельный хлеб в хлебопечке Весы электронные AND SK-20KD"><div class="box" page="vesy-elektronnye-and-skkd-7100r"><span class="title">картофельный хлеб в хлебопечке Весы электронные AND SK-20KD</span><p>от <span class="price">7100</span> руб.</p></div></li>
						<li class="large"><img src="photos/47745aa09108a6bfabc67b839ea476bd.jpeg" alt="продам вафельницу Чайник электрический Vitek VT-1114" title="продам вафельницу Чайник электрический Vitek VT-1114"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1030r"><span class="title">продам вафельницу Чайник электрический Vitek VT-1114</span><p>от <span class="price">1030</span> руб.</p></div></li>
						<li class="large"><img src="photos/4f7eae7926bb1b2816625b5940a25b78.jpeg" alt="пылесос mediclean Чайник электрический Vitek VT-1157" title="пылесос mediclean Чайник электрический Vitek VT-1157"><div class="box" page="chaynik-elektricheskiy-vitek-vt-2150r"><span class="title">пылесос mediclean Чайник электрический Vitek VT-1157</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li class="large"><img src="photos/5a4405159d0c690183630df2cbdbbd36.jpeg" alt="стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л" title="стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1620r"><span class="title">стоит ли покупать мультиварку Чайник электрический Tefal VitesseS BF66224 1,7 л</span><p>от <span class="price">1620</span> руб.</p></div></li>
						<li><img src="photos/9fa2c66d96aa7d709453ef3a635c60c2.jpeg" alt="хлебопечки донецк Чайник электрический Moulinex BY5200 2 л" title="хлебопечки донецк Чайник электрический Moulinex BY5200 2 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-2650r"><span class="title">хлебопечки донецк Чайник электрический Moulinex BY5200 2 л</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li><img src="photos/e19a6a84ed749d263503c61eb89d253b.jpeg" alt="сервисный центр кофемашин Батарейка GP Batteries Super alkaline LR6 15A-BC4" title="сервисный центр кофемашин Батарейка GP Batteries Super alkaline LR6 15A-BC4"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-80r"><span class="title">сервисный центр кофемашин Батарейка GP Batteries Super alkaline LR6 15A-BC4</span><p>от <span class="price">80</span> руб.</p></div></li>
						<li><img src="photos/0d3ac15ed04e0206963b9102f5ef309b.jpeg" alt="покупать ли мультиварку Парогенератор Lelit PG018" title="покупать ли мультиварку Парогенератор Lelit PG018"><div class="box" page="parogenerator-lelit-pg-24500r"><span class="title">покупать ли мультиварку Парогенератор Lelit PG018</span><p>от <span class="price">24500</span> руб.</p></div></li>
						<li><img src="photos/916a75c3d4cbc8ec64d3ba505b733ba5.jpeg" alt="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312" title="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312"><div class="box" page="vozdushnyy-filtr-redmond-hepafiltr-rv-390r"><span class="title">баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312</span><p>от <span class="price">390</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-atlanta-atn-1000r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-atlanta-atn-1000r.php")) require_once "comments/elektricheskiy-chaynik-atlanta-atn-1000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-atlanta-atn-1000r.php" method="post" onsubmit="return checkForm(this)">
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