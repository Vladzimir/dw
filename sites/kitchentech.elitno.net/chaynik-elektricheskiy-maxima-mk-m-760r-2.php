<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-maxima-mk-m-760r-2.php","голубцы в пароварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-maxima-mk-m-760r-2.php", $nick, $comment);
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
		<title>голубцы в пароварке Чайник электрический Maxima MК- M291  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="голубцы в пароварке, мультиварки киев, рецепт пиццы в хлебопечке, выбор кофемашины, отзывы мультиварка kromax, манник в мультиварке панасоник, пылесос энергия, quigg хлебопечка, вафельница орешек 4, куриное филе в пароварке, бумажные мешки для пылесоса, кофеварка полуавтомат, пароварки в минске, как варить гречку в пароварке,  трубка для пылесоса">
		<meta name="description" content="голубцы в пароварке Матово-белый электрический чайник Maxima MK-291 выполнен из высококачественного ...">
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
						<a class="photo" href="photos/9886fb8aa4d27a4c0947d702e96f79ee.jpeg" title="голубцы в пароварке Чайник электрический Maxima MК- M291"><img src="photos/9886fb8aa4d27a4c0947d702e96f79ee.jpeg" alt="голубцы в пароварке Чайник электрический Maxima MК- M291" title="голубцы в пароварке Чайник электрический Maxima MК- M291 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-ci-black-76390r.php"><img src="photos/4c9f6fc7185095b9ee0e389df903b9c9.jpeg" alt="мультиварки киев Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)" title="мультиварки киев Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)"></a><h2>Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskaya-kofemolka-bodum-bistro-euro-belaya-5730r.php"><img src="photos/7182cc256e7e3343e3aec4d550f1f314.jpeg" alt="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая" title="рецепт пиццы в хлебопечке Электрическая кофемолка Bodum BISTRO 10903-913EURO белая"></a><h2>Электрическая кофемолка Bodum BISTRO 10903-913EURO белая</h2></li>
							<li><a href="http://kitchentech.elitno.net/pribor-dlya-vakuumnoy-upakovki-vacuum-sealer-v-1100r.php"><img src="photos/4f2572ea69a163b235386a6893a52b4a.jpeg" alt="выбор кофемашины Прибор для вакуумной упаковки Vacuum Sealer 024V" title="выбор кофемашины Прибор для вакуумной упаковки Vacuum Sealer 024V"></a><h2>Прибор для вакуумной упаковки Vacuum Sealer 024V</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>голубцы в пароварке Чайник электрический Maxima MК- M291</h1>
						<div class="tb"><p>Цена: от <span class="price">760</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18625.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Матово-белый электрический чайник Maxima MK-291 выполнен из высококачественного гигиенического пластика. Спираль из нержавеющей стали, мощность 2000Вт – 2 литра воды вскипит за пару минут, а специальный фильтр защитит от накипи. <br>Дополнительными плюсами являются красивая внутренняя подсветка и градуированная шкала воды.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Мощность: 1850-2200 Вт; <li>Емкость: 2 л; <li>Нагревательный элемент из нержавеющей стали; <li>Корпус из гигиенического жаропрочного пластика; <li>Фильтр от накипи; <li>Открытие крышки одним нажатием; <li>Индикация: внутренняя подсветка <li>Градуированная шкала уровня воды </li></ul><p><strong>Производитель: MAXIMA</strong></p><p><strong>Гарантия: 1 год</strong> </p> голубцы в пароварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/6fe5b4190ebaf728c4d5f2d1788f453b.jpeg" alt="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670" title="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670"><div class="box"><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-vitek-vt-2950r.php"><h3 class="title">отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670</h3><p>от <span class="price">2950</span> руб.</p></a></div></li>
						<li><img src="photos/1f738d1ec8329b2501736d61b71f3914.jpeg" alt="манник в мультиварке панасоник Пароварка Tefal Invent VC1014" title="манник в мультиварке панасоник Пароварка Tefal Invent VC1014"><div class="box" page="parovarka-tefal-invent-vc-3930r"><span class="title">манник в мультиварке панасоник Пароварка Tefal Invent VC1014</span><p>от <span class="price">3930</span> руб.</p></div></li>
						<li><img src="photos/236219e0f937d3aff2a413880136e4e3.jpeg" alt="пылесос энергия Соковыжималка G 299-WN" title="пылесос энергия Соковыжималка G 299-WN"><div class="box" page="sokovyzhimalka-g-wn-6150r"><span class="title">пылесос энергия Соковыжималка G 299-WN</span><p>от <span class="price">6150</span> руб.</p></div></li>
						<li><img src="photos/ba4426ec9ff105596978c39d5f7ff4de.jpeg" alt="quigg хлебопечка Соковыжималка для цитрусовых 304-CP" title="quigg хлебопечка Соковыжималка для цитрусовых 304-CP"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-cp-1300r"><span class="title">quigg хлебопечка Соковыжималка для цитрусовых 304-CP</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li class="large"><img src="photos/d7869500a03daf3749520ba97157adc1.jpeg" alt="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno" title="вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno"><div class="box" page="hlebopechka-moulinex-ow-uno-4990r"><span class="title">вафельница орешек 4 Хлебопечка Moulinex OW310130 Uno</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li class="large"><img src="photos/c75538a0a02b722bb4d5b9c47eb925e7.jpeg" alt="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л" title="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesse-inox-bi-l-2570r"><span class="title">куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л</span><p>от <span class="price">2570</span> руб.</p></div></li>
						<li class="large"><img src="photos/977fa3b86531dce2d95f99f061a78e23.jpeg" alt="бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л" title="бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1550r"><span class="title">бумажные мешки для пылесоса Чайник электрический  Vitesse VS-133 1,7л</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/8964576110671ffcda667fca45b4c191.jpeg" alt="кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л" title="кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1560r"><span class="title">кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л</span><p>от <span class="price">1560</span> руб.</p></div></li>
						<li><img src="photos/70e82a3bba6b14786d891ffcea703881.jpeg" alt="пароварки в минске Электрический чайник Atlanta АТН-611" title="пароварки в минске Электрический чайник Atlanta АТН-611"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-700r"><span class="title">пароварки в минске Электрический чайник Atlanta АТН-611</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/c8d95936ceb77257c40da032828b68b2.jpeg" alt="как варить гречку в пароварке Батарейка GP Batteries Super alkaline 6LF22 1604A-BC1" title="как варить гречку в пароварке Батарейка GP Batteries Super alkaline 6LF22 1604A-BC1"><div class="box" page="batareyka-gp-batteries-super-alkaline-lf-abc-100r"><span class="title">как варить гречку в пароварке Батарейка GP Batteries Super alkaline 6LF22 1604A-BC1</span><p>от <span class="price">100</span> руб.</p></div></li>
						<li><img src="photos/6a73d6f5ed044b39207ab31ca41595f1.jpeg" alt="утюг braun 18895 Пылесос моющий Thomas Bravo 20" title="утюг braun 18895 Пылесос моющий Thomas Bravo 20"><div class="box" page="pylesos-moyuschiy-thomas-bravo-8050r"><span class="title">утюг braun 18895 Пылесос моющий Thomas Bravo 20</span><p>от <span class="price">8050</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-maxima-mk-m-760r-2.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-maxima-mk-m-760r-2.php")) require_once "comments/chaynik-elektricheskiy-maxima-mk-m-760r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-maxima-mk-m-760r-2.php" method="post" onsubmit="return checkForm(this)">
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