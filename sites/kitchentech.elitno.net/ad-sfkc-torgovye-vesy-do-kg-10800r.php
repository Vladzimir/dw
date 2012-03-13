<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("ad-sfkc-torgovye-vesy-do-kg-10800r.php","пылесос стакан");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("ad-sfkc-torgovye-vesy-do-kg-10800r.php", $nick, $comment);
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
		<title>пылесос стакан A&D SF-15KC Торговые весы до 15кг  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="пылесос стакан, пылесос samsung sc 4326, блендер bosch msm 6150, аппараты для педикюра с пылесосом, мешки для пылесоса vax, пакеты для пылесоса, кухня микроволновой печи, quigg хлебопечка, хлебопечка мистери, лучший пылесос с аквафильтром, рейтинг пылесосов 2011, хлебопечка ow 5004, как блендером сделать пюре, панасоник соковыжималка,  утюг с парогенератором купить">
		<meta name="description" content="пылесос стакан Торговые весы SF-15KC помогут быстро рассчитать массу товара, подсчитать его сто...">
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
						<a class="photo" href="photos/86f0983e51433a2aeee203a14fbe12b2.jpeg" title="пылесос стакан A&D SF-15KC Торговые весы до 15кг"><img src="photos/86f0983e51433a2aeee203a14fbe12b2.jpeg" alt="пылесос стакан A&D SF-15KC Торговые весы до 15кг" title="пылесос стакан A&D SF-15KC Торговые весы до 15кг -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-maxima-mhb-1090r.php"><img src="photos/c18872267b9c6c7f4de2b2c0d2d5e8a8.jpeg" alt="пылесос samsung sc 4326 Блендер Maxima MHB-0229" title="пылесос samsung sc 4326 Блендер Maxima MHB-0229"></a><h2>Блендер Maxima MHB-0229</h2></li>
							<li><a href="http://kitchentech.elitno.net/ruchnoy-blender-russell-hobbs-allure-art-2790r.php"><img src="photos/422d665429610f080e15aaf4bb75409d.jpeg" alt="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56" title="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56"></a><h2>Ручной блендер Russell Hobbs Allure, арт. 18273-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-chernyy-4155r.php"><img src="photos/4e6a1db3aa397f67ece5fe8079d3244b.jpeg" alt="аппараты для педикюра с пылесосом Вспениватель Melitta Cremio черный" title="аппараты для педикюра с пылесосом Вспениватель Melitta Cremio черный"></a><h2>Вспениватель Melitta Cremio черный</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>пылесос стакан A&D SF-15KC Торговые весы до 15кг</h1>
						<div class="tb"><p>Цена: от <span class="price">10800</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_912.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><strong>Торговые весы SF-15KC </strong>помогут быстро рассчитать массу товара, подсчитать его стоимость и отпустить покупателю. Среди полезных функций прибора – расчет цены, вычет тары, расчет сдачи. Весы оборудованы широким вакуум-флюоресцентным дисплеем и встроенным ЖК-дисплеем. Также электроникой прибора предусмотрена возможность хранения в памяти 30 цен, а также возможность подключения интерфейса RS - 232C. Удобны и практичные <strong>весы SF-15KC (до 15кг) </strong>не заменимы в розничной торговле, в магазинах, на рынке и других подобных местах. </p><p><strong>Особенности: </strong></p><ul type=disc><li>Тип калибровки: внешняя <li>Тип весов: платформенные <li>Возможность подключения интерфейса RS - 232C <li>Память SF-15KC на 30 цен (SF), на 12 цен (SG) <li>Большой вакуум-флюоресцентный дисплей (модели KA и KC) <li>Встроенный жидкокристаллический дисплей (SG) <li>Автоматический расчет стоимости <li>Подсчет итоговой стоимости, включая штучный товар <li>Расчет сдачи <li>Ввод веса тары с клавиатуры </li></ul><p><b>Технические характеристики:</b></p><ul type=disc><li>Питание: сеть, аккумуляторные батарейки <li>Предел взвешивания: 15000 г <li>Цена деления: 5 г <li>Внешний интерфейс RS - 232C (не входит в комплект) <li>Класс точности: Средний-III (ГОСТ 29329-92) <li>Размер платформы: 300 х 280 мм </li></ul><p><strong>В комплект входит:</strong> основное устройство, сетевой адаптер, инструкция.</p><p><strong>Производитель: </strong>A&D (Япония)</p><p><strong>Гарантия:</strong> 1 год</p> пылесос стакан</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/4a49eabd132fa073a575c3edfbe7b80b.jpeg" alt="мешки для пылесоса vax Микроволновая печь Vitek VT-1681" title="мешки для пылесоса vax Микроволновая печь Vitek VT-1681"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2770r"><span class="title">мешки для пылесоса vax Микроволновая печь Vitek VT-1681</span><p>от <span class="price">2770</span> руб.</p></div></li>
						<li><img src="photos/2cdb40f493d1b8360833641d1048d5de.jpeg" alt="пакеты для пылесоса Мясорубка Braun G1300 MN WH" title="пакеты для пылесоса Мясорубка Braun G1300 MN WH"><div class="box" page="myasorubka-braun-g-mn-wh-4980r"><span class="title">пакеты для пылесоса Мясорубка Braun G1300 MN WH</span><p>от <span class="price">4980</span> руб.</p></div></li>
						<li><img src="photos/d13e770b0f20ea7295762dcccfd88ddd.jpeg" alt="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда" title="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда"><div class="box" page="elektroplitka-indukcionnaya-maxima-mic-posuda-1790r"><span class="title">кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/ba4426ec9ff105596978c39d5f7ff4de.jpeg" alt="quigg хлебопечка Соковыжималка для цитрусовых 304-CP" title="quigg хлебопечка Соковыжималка для цитрусовых 304-CP"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-cp-1300r"><span class="title">quigg хлебопечка Соковыжималка для цитрусовых 304-CP</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li class="large"><img src="photos/aa004256b858fb51c2e43e9faff2b9a8.jpeg" alt="хлебопечка мистери Чайник электрический Maxima MК-113" title="хлебопечка мистери Чайник электрический Maxima MК-113"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r-3"><span class="title">хлебопечка мистери Чайник электрический Maxima MК-113</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/d509d0771406a8c20b2506d316fad0aa.jpeg" alt="лучший пылесос с аквафильтром Чайник Melitta Look Aqua Vario" title="лучший пылесос с аквафильтром Чайник Melitta Look Aqua Vario"><div class="box" page="chaynik-melitta-look-aqua-vario-2838r"><span class="title">лучший пылесос с аквафильтром Чайник Melitta Look Aqua Vario</span><p>от <span class="price">2838</span> руб.</p></div></li>
						<li class="large"><img src="photos/ea47296a93804ab77bc9f5e5af614a8b.jpeg" alt="рейтинг пылесосов 2011 Батарейка GP Batteries Super alkaline LR14 14A-BC2" title="рейтинг пылесосов 2011 Батарейка GP Batteries Super alkaline LR14 14A-BC2"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-130r"><span class="title">рейтинг пылесосов 2011 Батарейка GP Batteries Super alkaline LR14 14A-BC2</span><p>от <span class="price">130</span> руб.</p></div></li>
						<li><img src="photos/7988dddbd843f4e2d125562952a86736.jpeg" alt="хлебопечка ow 5004 Паровая гладильная система TOBI" title="хлебопечка ow 5004 Паровая гладильная система TOBI"><div class="box" page="parovaya-gladilnaya-sistema-tobi-2500r"><span class="title">хлебопечка ow 5004 Паровая гладильная система TOBI</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/8a7e2a46651bfb4c8fa5108f6af45161.jpeg" alt="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02" title="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-9990r"><span class="title">как блендером сделать пюре Детектор жучков BugHunter Professional BH-02</span><p>от <span class="price">9990</span> руб.</p></div></li>
						<li><img src="photos/ab56eb3e56d0f0d6cbcdc267b86f71a7.jpeg" alt="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257" title="панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257"><div class="box" page="utyug-parovoy-tefal-aquaspeed-ultracord-fv-2800r"><span class="title">панасоник соковыжималка Утюг паровой Tefal Aquaspeed Ultracord FV5257</span><p>от <span class="price">2800</span> руб.</p></div></li>
						<li><img src="photos/c63cd71f0f3bdf494b47ddb76e88865f.jpeg" alt="мясорубка для столовой Утюг паровой Tefal Ultimate Autoclean FV9447E2" title="мясорубка для столовой Утюг паровой Tefal Ultimate Autoclean FV9447E2"><div class="box" page="utyug-parovoy-tefal-ultimate-autoclean-fve-4100r"><span class="title">мясорубка для столовой Утюг паровой Tefal Ultimate Autoclean FV9447E2</span><p>от <span class="price">4100</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("ad-sfkc-torgovye-vesy-do-kg-10800r.php", 0, -4); if (file_exists("comments/ad-sfkc-torgovye-vesy-do-kg-10800r.php")) require_once "comments/ad-sfkc-torgovye-vesy-do-kg-10800r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="ad-sfkc-torgovye-vesy-do-kg-10800r.php" method="post" onsubmit="return checkForm(this)">
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