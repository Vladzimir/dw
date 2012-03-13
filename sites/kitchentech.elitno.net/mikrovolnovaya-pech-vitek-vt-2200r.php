<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikrovolnovaya-pech-vitek-vt-2200r.php","измельчитель дробилка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikrovolnovaya-pech-vitek-vt-2200r.php", $nick, $comment);
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
		<title>измельчитель дробилка Микроволновая печь Vitek VT-1680  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="измельчитель дробилка, кофеварки для дома отзывы, блендер philips hr1615, крышка для микроволновой печи, рецепт курицы в мультиварке, картофель во фритюрнице, профессиональный дозиметр, мультиварка ярославль, рецепты для миксера, марки микроволновых печей, утюг с тефлоновым покрытием, посоветуйте хлебопечку, утюг с парогенератором delonghi, сладкая выпечка в хлебопечке,  многоразовые мешки для пылесоса">
		<meta name="description" content="измельчитель дробилка Современная жизнь не мыслима без бытовой техники. С помощью микроволновой печи V...">
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
						<a class="photo" href="photos/131f031076f016a5b0e85b06b57d0206.jpeg" title="измельчитель дробилка Микроволновая печь Vitek VT-1680"><img src="photos/131f031076f016a5b0e85b06b57d0206.jpeg" alt="измельчитель дробилка Микроволновая печь Vitek VT-1680" title="измельчитель дробилка Микроволновая печь Vitek VT-1680 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blenderkuhonnyy-kombayn-braun-mr-buffet-fp-hc-5300r.php"><img src="photos/eed05177e5879fb2667291616f216d32.jpeg" alt="кофеварки для дома отзывы Блендер-кухонный комбайн Braun MR-550 Buffet FP HC" title="кофеварки для дома отзывы Блендер-кухонный комбайн Braun MR-550 Buffet FP HC"></a><h2>Блендер-кухонный комбайн Braun MR-550 Buffet FP HC</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-cc-4920r.php"><img src="photos/0c50b7e39e50ca19abd7fa5476ddc943.jpeg" alt="блендер philips hr1615 Блендер Braun MR-730 CC" title="блендер philips hr1615 Блендер Braun MR-730 CC"></a><h2>Блендер Braun MR-730 CC</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-1090r.php"><img src="photos/23396bca502057564018abfebb4d84d5.jpeg" alt="крышка для микроволновой печи Блендер Redmond RHB-2910" title="крышка для микроволновой печи Блендер Redmond RHB-2910"></a><h2>Блендер Redmond RHB-2910</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>измельчитель дробилка Микроволновая печь Vitek VT-1680</h1>
						<div class="tb"><p>Цена: от <span class="price">2200</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8264.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Современная жизнь не мыслима без бытовой техники. С помощью микроволновой печи <b>Vitek VT-1680</b> вы легко можете разогреть и приготовить пищу. Модель имеет 10 уровней мощности, режим размораживания, цифровой таймер и сигнал завершения приготовления. Специальная защита от детей не даст вашему чаду использовать прибор в отсутствии взрослых.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Объем: 17л; <li>Режимы мощности: 10 уровней; <li>Режим размораживания: есть; <li>Функция предустановки: есть; <li>Сигнал завершения приготовления: есть; <li>Защита от доступа детей: есть; <li>Потребляемая мощность: 700-1150Вт; <li>Электропитание: 230В, ~50Гц.</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна:</b> Россия.</p> измельчитель дробилка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/4a8644a2c29f22e2d9c92389f96ff2ab.jpeg" alt="рецепт курицы в мультиварке Кухонный комбайн ATH-350" title="рецепт курицы в мультиварке Кухонный комбайн ATH-350"><div class="box"><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-ath-750r.php"><h3 class="title">рецепт курицы в мультиварке Кухонный комбайн ATH-350</h3><p>от <span class="price">750</span> руб.</p></a></div></li>
						<li><img src="photos/d1b139f63086ad817c04622c294f1224.jpeg" alt="картофель во фритюрнице Кофеварка  ATH-278" title="картофель во фритюрнице Кофеварка  ATH-278"><div class="box" page="kofevarka-ath-560r"><span class="title">картофель во фритюрнице Кофеварка  ATH-278</span><p>от <span class="price">560</span> руб.</p></div></li>
						<li><img src="photos/0b78d91a105ad11353549e33ee928e3e.jpeg" alt="профессиональный дозиметр Щетка силиконовая Giza Vitesse VS-1819" title="профессиональный дозиметр Щетка силиконовая Giza Vitesse VS-1819"><div class="box" page="schetka-silikonovaya-giza-vitesse-vs-500r"><span class="title">профессиональный дозиметр Щетка силиконовая Giza Vitesse VS-1819</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/9b1d673d9b457ad6c9a587ce93c1d42a.jpeg" alt="мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003" title="мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003"><div class="box" page="parovarka-tefal-vitacuisine-compact-vc-3530r"><span class="title">мультиварка ярославль Пароварка Tefal VitaCuisine Compact VC4003</span><p>от <span class="price">3530</span> руб.</p></div></li>
						<li class="large"><img src="photos/c1dcbf2233d55738f171a0b13874cec2.jpeg" alt="рецепты для миксера Соковыжималка Moulinex JU40013E Frutti Pro XL" title="рецепты для миксера Соковыжималка Moulinex JU40013E Frutti Pro XL"><div class="box" page="sokovyzhimalka-moulinex-jue-frutti-pro-xl-2650r"><span class="title">рецепты для миксера Соковыжималка Moulinex JU40013E Frutti Pro XL</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/d6db045bcfab03ae142ac160811c2a0a.jpeg" alt="марки микроволновых печей Чайник электричесукий Atlanta ATH-756" title="марки микроволновых печей Чайник электричесукий Atlanta ATH-756"><div class="box" page="chaynik-elektrichesukiy-atlanta-ath-950r"><span class="title">марки микроволновых печей Чайник электричесукий Atlanta ATH-756</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/9886fb8aa4d27a4c0947d702e96f79ee.jpeg" alt="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291" title="утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-760r-2"><span class="title">утюг с тефлоновым покрытием Чайник электрический Maxima MК- M291</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/0b3cd91064942c75434bb396eaa4e0d2.jpeg" alt="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический" title="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-1990r"><span class="title">посоветуйте хлебопечку Redmond RK-M121D Чайник электрический</span><p>от <span class="price">1990</span> руб.</p></div></li>
						<li><img src="photos/89368a4d8b53495528b047bf143af4e5.jpeg" alt="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623" title="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-690r"><span class="title">утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/70eaaca49bbd014982b9856679d5c7e6.jpeg" alt="сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO" title="сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO"><div class="box" page="elektricheskiy-chaynik-l-bodum-bistro-euro-2740r"><span class="title">сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/ee03f1721014fcaa8f40d146634cc194.jpeg" alt="мясорубка с овощерезкой Утюг Vitek VT-1210" title="мясорубка с овощерезкой Утюг Vitek VT-1210"><div class="box" page="utyug-vitek-vt-850r"><span class="title">мясорубка с овощерезкой Утюг Vitek VT-1210</span><p>от <span class="price">850</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikrovolnovaya-pech-vitek-vt-2200r.php", 0, -4); if (file_exists("comments/mikrovolnovaya-pech-vitek-vt-2200r.php")) require_once "comments/mikrovolnovaya-pech-vitek-vt-2200r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikrovolnovaya-pech-vitek-vt-2200r.php" method="post" onsubmit="return checkForm(this)">
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