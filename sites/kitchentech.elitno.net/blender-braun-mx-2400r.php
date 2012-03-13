<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-braun-mx-2400r.php","какую мультиварку выбрать");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-braun-mx-2400r.php", $nick, $comment);
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
		<title>какую мультиварку выбрать Блендер Braun MX-2000  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="какую мультиварку выбрать, тыква в мультиварке, tupperware миксер, утюг какой фирмы лучше, пылесос samsung sc4520, аэрогриль форум, хлебопечка moulinex ow 6002, пылесос lg с контейнером, куриное филе в пароварке, чайник электрический тефаль, купить пылесос с контейнером, таблетки для очистки кофемашины, пылесосы в гродно, микроволновые печи с духовкой,  соковыжималка прессового отжима">
		<meta name="description" content="какую мультиварку выбрать Стационарный блендер от немецкого производителя Braun - профессиональное устройс...">
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
						<a class="photo" href="photos/c875beb952f9d6580895bee02e6ce554.jpeg" title="какую мультиварку выбрать Блендер Braun MX-2000"><img src="photos/c875beb952f9d6580895bee02e6ce554.jpeg" alt="какую мультиварку выбрать Блендер Braun MX-2000" title="какую мультиварку выбрать Блендер Braun MX-2000 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-maxima-mhb-1290r.php"><img src="photos/6dd18dbc3abd740bf749993f0923000d.jpeg" alt="тыква в мультиварке Блендер Maxima MHB-0329" title="тыква в мультиварке Блендер Maxima MHB-0329"></a><h2>Блендер Maxima MHB-0329</h2></li>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-belyy-4155r.php"><img src="photos/701c1fd8791de13ef3fc3b11f131d4a2.jpeg" alt="tupperware миксер Вспениватель Melitta Cremio белый" title="tupperware миксер Вспениватель Melitta Cremio белый"></a><h2>Вспениватель Melitta Cremio белый</h2></li>
							<li><a href="http://kitchentech.elitno.net/bodum-bistro-euro-elektricheskiy-mikser-zelenyy-2740r.php"><img src="photos/ff295724863185ff22e2c85236f25515.jpeg" alt="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый" title="утюг какой фирмы лучше Bodum BISTRO 11151-565EURO Электрический миксер зеленый"></a><h2>Bodum BISTRO 11151-565EURO Электрический миксер зеленый</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>какую мультиварку выбрать Блендер Braun MX-2000</h1>
						<div class="tb"><p>Цена: от <span class="price">2400</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_11978.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Стационарный блендер от немецкого производителя Braun - профессиональное устройство с элегантным дизайном и мощным мотором в 525 Вт. Три варианта скорости позволят вам обработать большое количество продуктов за небольшое время.</p><p>В модели предусмотрена система двойной защиты, которая делает работу с устройством максимально безопасной. Среди достоинств блендера можно отметить: наличие импульсного режима, а также простоту в работе и уходе за устройством.</p><p><b>Характеристики: </b></p><ul type=disc><li>Тип: стационарный <li>Мощность: 525 Вт <li>Управление число скоростей: 3 <li>Материал кувшина: пластик <li>Отверстие для ингредиентов: есть <li>Дополнительные режимы: импульсный <li>Дополнительная информация: система двойной защиты</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> какую мультиварку выбрать</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7c640af98399cc1caf99796cb169cc20.jpeg" alt="пылесос samsung sc4520 Мясорубка электрическая Vitek VT-1672 серебряная" title="пылесос samsung sc4520 Мясорубка электрическая Vitek VT-1672 серебряная"><div class="box" page="myasorubka-elektricheskaya-vitek-vt-serebryanaya-3650r"><span class="title">пылесос samsung sc4520 Мясорубка электрическая Vitek VT-1672 серебряная</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li><img src="photos/8c0aa6f2022172974ae917a715c05f94.jpeg" alt="аэрогриль форум Пароварка Vitek VT-1550N SR" title="аэрогриль форум Пароварка Vitek VT-1550N SR"><div class="box" page="parovarka-vitek-vtn-sr-2200r"><span class="title">аэрогриль форум Пароварка Vitek VT-1550N SR</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/014eea2e4ace248a80b3ce72354f4315.jpeg" alt="хлебопечка moulinex ow 6002 Пароварка Maxima MST-0511" title="хлебопечка moulinex ow 6002 Пароварка Maxima MST-0511"><div class="box" page="parovarka-maxima-mst-760r"><span class="title">хлебопечка moulinex ow 6002 Пароварка Maxima MST-0511</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/d78a5eb7926a57e3a6daeb54a8fc1659.jpeg" alt="пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine" title="пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine"><div class="box" page="sokovyzhimalka-moulinex-juae-juice-machine-4300r"><span class="title">пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine</span><p>от <span class="price">4300</span> руб.</p></div></li>
						<li class="large"><img src="photos/c75538a0a02b722bb4d5b9c47eb925e7.jpeg" alt="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л" title="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesse-inox-bi-l-2570r"><span class="title">куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л</span><p>от <span class="price">2570</span> руб.</p></div></li>
						<li class="large"><img src="photos/396dcef56ae58a2fdd710c34b32d6011.jpeg" alt="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)" title="чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r-2"><span class="title">чайник электрический тефаль Чайник электрический Maxima MК- M221 (1,8л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/296e5671e5f65168bbfd694532a2c751.jpeg" alt="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной" title="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-stalnoy-1850r"><span class="title">купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/ed1507cb4c766d544261d1f0cc2c6466.jpeg" alt="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764" title="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764"><div class="box" page="chayniktermos-atlanta-atn-1570r"><span class="title">таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764</span><p>от <span class="price">1570</span> руб.</p></div></li>
						<li><img src="photos/759cc36b06e68665280825b9c45b38c7.jpeg" alt="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO" title="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO"><div class="box" page="elektricheskiy-chaynik-l-krasnyy-bodum-bistro-euro-2270r"><span class="title">пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/06055c0461eed094ac9207cd105de4ec.jpeg" alt="микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO" title="микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO"><div class="box" page="elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2740r"><span class="title">микроволновые печи с духовкой Электрический чайник 1.5л белый Bodum Bistro 11138-913EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/14e5114315c1928323477764da917a61.jpeg" alt="для чего нужен блендер Парогенератор Lelit PS20" title="для чего нужен блендер Парогенератор Lelit PS20"><div class="box" page="parogenerator-lelit-ps-12650r"><span class="title">для чего нужен блендер Парогенератор Lelit PS20</span><p>от <span class="price">12650</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-braun-mx-2400r.php", 0, -4); if (file_exists("comments/blender-braun-mx-2400r.php")) require_once "comments/blender-braun-mx-2400r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-braun-mx-2400r.php" method="post" onsubmit="return checkForm(this)">
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