<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-atlanta-ath-950r.php","кухонная вытяжка bosch");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-atlanta-ath-950r.php", $nick, $comment);
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
		<title>кухонная вытяжка bosch Чайник электрический Atlanta ATH-755  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кухонная вытяжка bosch, пылесос thomas black ocean, печенье песочное через мясорубку, мультиварка multihotter отзывы, вафельница кубань отзывы, чайник электрический bork, вафельница орешек 4, ребра в аэрогриле, bamix блендер отзывы, panasonic мясорубка отзывы, кофеварка ровента инструкция, утюг для волос профессиональный, продажа мультиварок, покупать ли мультиварку,  запчасти для кофемашины">
		<meta name="description" content="кухонная вытяжка bosch Электрический чайник Atlanta ATH-755 белого цвета объемом 1,7 литра, мощностью 2...">
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
						<a class="photo" href="photos/d23d3c42279f2a4fe0ce1702af341b90.jpeg" title="кухонная вытяжка bosch Чайник электрический Atlanta ATH-755"><img src="photos/d23d3c42279f2a4fe0ce1702af341b90.jpeg" alt="кухонная вытяжка bosch Чайник электрический Atlanta ATH-755" title="кухонная вытяжка bosch Чайник электрический Atlanta ATH-755 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-dd-2300r.php"><img src="photos/b0d11dfbaf618701d7d5cdf29d1db36e.jpeg" alt="пылесос thomas black ocean Блендер погружной Moulinex DD904143" title="пылесос thomas black ocean Блендер погружной Moulinex DD904143"></a><h2>Блендер погружной Moulinex DD904143</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-hrom-3290r.php"><img src="photos/34e123d55d60377ab16c1ebb8978b506.jpeg" alt="печенье песочное через мясорубку Блендер Redmond RHB-2904 (хром)" title="печенье песочное через мясорубку Блендер Redmond RHB-2904 (хром)"></a><h2>Блендер Redmond RHB-2904 (хром)</h2></li>
							<li><a href="http://kitchentech.elitno.net/parovarka-redmond-rstm-3990r.php"><img src="photos/5463e59bde9d8697c1104a5ca7198687.jpeg" alt="мультиварка multihotter отзывы Пароварка Redmond RST-M1101" title="мультиварка multihotter отзывы Пароварка Redmond RST-M1101"></a><h2>Пароварка Redmond RST-M1101</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кухонная вытяжка bosch Чайник электрический Atlanta ATH-755</h1>
						<div class="tb"><p>Цена: от <span class="price">950</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18119.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta ATH-755 белого цвета объемом 1,7 литра, мощностью 2000 Вт с открытой спиралью в качестве нагревательного элемента и фильтром от накипи. Абсолютно безопасен: выключается при закипании и не включается при отсутствии воды. </p><p><b>Характеристики:</b></p><ul type=disc><li>Объем: 1,7 л <li>Мощность: 2000 Вт <li>Нагревательный элемент: открытая спираль <li>Блокировка включения без воды <li>Автоматическое выключение </li></ul><p><b>Производитель: Китай</b></p> кухонная вытяжка bosch</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9b7eb1a537ab681974ef9f5deafc988d.jpeg" alt="вафельница кубань отзывы Соковыжималка Moulinex JU5001" title="вафельница кубань отзывы Соковыжималка Moulinex JU5001"><div class="box" page="sokovyzhimalka-moulinex-ju-3100r"><span class="title">вафельница кубань отзывы Соковыжималка Moulinex JU5001</span><p>от <span class="price">3100</span> руб.</p></div></li>
						<li><img src="photos/cba9fd30236faeadb264f6621c9544f6.jpeg" alt="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер" title="чайник электрический bork Соковыжималка Maxima MJ-049 + блендер"><div class="box" page="sokovyzhimalka-maxima-mj-blender-2190r"><span class="title">чайник электрический bork Соковыжималка Maxima MJ-049 + блендер</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/d7869500a03daf3749520ba97157adc1.jpeg" alt="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno" title="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno"><div class="box" page="hlebopechka-moulinex-ow-uno-4990r"><span class="title">вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li><img src="photos/1a5872ce4a924d71272e9d8aacab1a34.jpeg" alt="ребра в аэрогриле Чайник электрический Maxima MК-103" title="ребра в аэрогриле Чайник электрический Maxima MК-103"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r"><span class="title">ребра в аэрогриле Чайник электрический Maxima MК-103</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/795752aa9995ffddbd65e841f9d26c51.jpeg" alt="bamix блендер отзывы Чайник электрический  Vitesse VS-139 1,7л" title="bamix блендер отзывы Чайник электрический  Vitesse VS-139 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1820r"><span class="title">bamix блендер отзывы Чайник электрический  Vitesse VS-139 1,7л</span><p>от <span class="price">1820</span> руб.</p></div></li>
						<li class="large"><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735" title="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-450r"><span class="title">panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li class="large"><img src="photos/b30a9264a94da2d2b2a0829021bb7fab.jpeg" alt="кофеварка ровента инструкция Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)" title="кофеварка ровента инструкция Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)"><div class="box" page="ekotester-soeks-v-dozimetr-radiacii-i-nitrat-tester-8600r"><span class="title">кофеварка ровента инструкция Экотестер СоЭкс (2 в 1: дозиметр радиации и нитрат тестер)</span><p>от <span class="price">8600</span> руб.</p></div></li>
						<li><img src="photos/ae6aa53dcc9eb32133541922b9ec3b16.jpeg" alt="утюг для волос профессиональный Мини весы Tanita 1579" title="утюг для волос профессиональный Мини весы Tanita 1579"><div class="box" page="mini-vesy-tanita-3900r"><span class="title">утюг для волос профессиональный Мини весы Tanita 1579</span><p>от <span class="price">3900</span> руб.</p></div></li>
						<li><img src="photos/08f854ed7155a317d7f9ee53182183f6.jpeg" alt="продажа мультиварок Парогенератор Lelit PS21" title="продажа мультиварок Парогенератор Lelit PS21"><div class="box" page="parogenerator-lelit-ps-12650r-2"><span class="title">продажа мультиварок Парогенератор Lelit PS21</span><p>от <span class="price">12650</span> руб.</p></div></li>
						<li><img src="photos/0d3ac15ed04e0206963b9102f5ef309b.jpeg" alt="покупать ли мультиварку Парогенератор Lelit PG018" title="покупать ли мультиварку Парогенератор Lelit PG018"><div class="box" page="parogenerator-lelit-pg-24500r"><span class="title">покупать ли мультиварку Парогенератор Lelit PG018</span><p>от <span class="price">24500</span> руб.</p></div></li>
						<li><img src="photos/2fefc92a511ec2a4cec4d67efd9d8253.jpeg" alt="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter" title="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter"><div class="box" page="pylesos-thomas-genius-s-eco-aquafilter-9660r"><span class="title">аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter</span><p>от <span class="price">9660</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-atlanta-ath-950r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-atlanta-ath-950r.php")) require_once "comments/chaynik-elektricheskiy-atlanta-ath-950r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-atlanta-ath-950r.php" method="post" onsubmit="return checkForm(this)">
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