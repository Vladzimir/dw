<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-maxima-mk-m-v-cvete-990r.php","соковыжималка для твердых");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-maxima-mk-m-v-cvete-990r.php", $nick, $comment);
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
		<title>соковыжималка для твердых Чайник электрический Maxima MК- M191 (в цвете)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="соковыжималка для твердых, bullet express кухонный комбайн, пылесос tomas twin, сервисный центр пылесосов, соковыжималка bosh, грудка в пароварке, рецепт пиццы в хлебопечке, купить пароварку в интернете, хлебопечка германия, бытовые микроволновые печи, кофеварка дольче густо отзывы, баклажаны в пароварке, хлебопечка кефир, соковыжималка tefal отзывы,  мультиварка телефункен">
		<meta name="description" content="соковыжималка для твердых Матовый электрический чайник MК- M191 сдержанного или яркого дизайна – на Ваш вы...">
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
						<a class="photo" href="photos/90ff0542b35952759822563a08374b1f.jpeg" title="соковыжималка для твердых Чайник электрический Maxima MК- M191 (в цвете)"><img src="photos/90ff0542b35952759822563a08374b1f.jpeg" alt="соковыжималка для твердых Чайник электрический Maxima MК- M191 (в цвете)" title="соковыжималка для твердых Чайник электрический Maxima MК- M191 (в цвете) -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/aerogril-maxima-mag-1970r.php"><img src="photos/04a8e0ddae201f494a4dc0f24ca2a85c.jpeg" alt="bullet express кухонный комбайн Аэрогриль Maxima MAG-0147" title="bullet express кухонный комбайн Аэрогриль Maxima MAG-0147"></a><h2>Аэрогриль Maxima MAG-0147</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-ddg-click-and-mix-2900r.php"><img src="photos/795ef5ec8b21fcb23efce51ba4b9959a.jpeg" alt="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix" title="пылесос tomas twin Блендер погружной Moulinex DD406G42 Click and Mix"></a><h2>Блендер погружной Moulinex DD406G42 Click and Mix</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-550r.php"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="сервисный центр пылесосов Блендер Atlanta АТН-338" title="сервисный центр пылесосов Блендер Atlanta АТН-338"></a><h2>Блендер Atlanta АТН-338</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>соковыжималка для твердых Чайник электрический Maxima MК- M191 (в цвете)</h1>
						<div class="tb"><p>Цена: от <span class="price">990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18608.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Матовый электрический чайник MК- M191 сдержанного или яркого дизайна – на Ваш выбор - вскипятит за считанные минуты 1,8 литра, специальный съемный фильтр защитит от накипи, а автоматика заблокирует включение при отсутствии воды, а за счет надежной конструкции блокировки кнопки можно не бояться облиться кипятком при случайном открытии крышки.<br>В наличии цвета: черный, синий, красный, фиолетовый</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Мощность 2000 Вт; <li>Емкость: 1,8 л; <li>Корпус из нержавеющей стали; <li>Нагревательный элемент: спираль из нержавеющей стали; <li>Автоматическое выключение при закипании; <li>Угол вращения на подставке 360; <li>Световой индикатор работы; <li>Съемный фильтр против накипи; <li>Автоматическое отключение при недостаточном количестве воды; </li></ul><p><strong>Производитель: MAXIMA (Англия)</strong><br><strong>Гарантия: 1 год</strong></p> соковыжималка для твердых</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/cba8b4b1e5c8fd0ccc541a5e43233a90.jpeg" alt="соковыжималка bosh Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный" title="соковыжималка bosh Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный"><div class="box" page="elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-krasnyy-3780r"><span class="title">соковыжималка bosh Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный</span><p>от <span class="price">3780</span> руб.</p></div></li>
						<li><img src="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" alt="грудка в пароварке Кофемолка  ATH-272" title="грудка в пароварке Кофемолка  ATH-272"><div class="box" page="kofemolka-ath-600r"><span class="title">грудка в пароварке Кофемолка  ATH-272</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/7182cc256e7e3343e3aec4d550f1f314.jpeg" alt="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая" title="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая"><div class="box" page="elektricheskaya-kofemolka-bodum-bistro-euro-belaya-5730r"><span class="title">рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая</span><p>от <span class="price">5730</span> руб.</p></div></li>
						<li><img src="photos/e00b2c7020a116b6823146ca3337e357.jpeg" alt="купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S" title="купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S"><div class="box" page="mikrovolnovka-zigmund-shtain-bmo-s-5960r"><span class="title">купить пароварку в интернете Микроволновка Zigmund & Shtain BMO 01.232 S</span><p>от <span class="price">5960</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3fae48615963478f00e0c05f3baa485.jpeg" alt="хлебопечка германия Электрический чайник  Zauber R-380" title="хлебопечка германия Электрический чайник  Zauber R-380"><div class="box" page="elektricheskiy-chaynik-zauber-r-1830r"><span class="title">хлебопечка германия Электрический чайник  Zauber R-380</span><p>от <span class="price">1830</span> руб.</p></div></li>
						<li class="large"><img src="photos/4fcdbef1e4068bc4641fdad47e086ca6.jpeg" alt="бытовые микроволновые печи Парогенератор Maxima MSC-2001" title="бытовые микроволновые печи Парогенератор Maxima MSC-2001"><div class="box" page="parogenerator-maxima-msc-1650r"><span class="title">бытовые микроволновые печи Парогенератор Maxima MSC-2001</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li class="large"><img src="photos/d360b8a0c7da5c2048584c84686650a7.jpeg" alt="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)" title="кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-55r"><span class="title">кофеварка дольче густо отзывы Фильтры для пылесоса Vitek VT-1868 (VT-1838)</span><p>от <span class="price">55</span> руб.</p></div></li>
						<li><img src="photos/916a75c3d4cbc8ec64d3ba505b733ba5.jpeg" alt="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312" title="баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312"><div class="box" page="vozdushnyy-filtr-redmond-hepafiltr-rv-390r"><span class="title">баклажаны в пароварке Воздушный фильтр Redmond  HEPA-фильтр RV-312</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/54b10604c01ad075cc189094150a1393.jpeg" alt="хлебопечка кефир Щетка с мягкой щетиной в упаковке Dyson Soft Dusting Brush Assy Retail NP" title="хлебопечка кефир Щетка с мягкой щетиной в упаковке Dyson Soft Dusting Brush Assy Retail NP"><div class="box" page="schetka-s-myagkoy-schetinoy-v-upakovke-dyson-soft-dusting-brush-assy-retail-np-1390r"><span class="title">хлебопечка кефир Щетка с мягкой щетиной в упаковке Dyson Soft Dusting Brush Assy Retail NP</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li><img src="photos/93023d88a25f41b8fefb8504a248a750.jpeg" alt="соковыжималка tefal отзывы Пылесос Vitek VT-1814" title="соковыжималка tefal отзывы Пылесос Vitek VT-1814"><div class="box" page="pylesos-vitek-vt-2200r"><span class="title">соковыжималка tefal отзывы Пылесос Vitek VT-1814</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/c97072b686d00422f9e5b9490c04caab.jpeg" alt="кофеварка espresso Пылесос Thomas Inox 1545 Sfe" title="кофеварка espresso Пылесос Thomas Inox 1545 Sfe"><div class="box" page="pylesos-thomas-inox-sfe-13350r"><span class="title">кофеварка espresso Пылесос Thomas Inox 1545 Sfe</span><p>от <span class="price">13350</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-maxima-mk-m-v-cvete-990r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-maxima-mk-m-v-cvete-990r.php")) require_once "comments/chaynik-elektricheskiy-maxima-mk-m-v-cvete-990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-maxima-mk-m-v-cvete-990r.php" method="post" onsubmit="return checkForm(this)">
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