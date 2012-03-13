<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitek-vt-900r.php","миксеры профессиональные");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitek-vt-900r.php", $nick, $comment);
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
		<title>миксеры профессиональные Чайник электрический Vitek VT-1134  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="миксеры профессиональные, микроволновая печь вред, микроволновая печь польза, аэрогриль форум, кофеварка нескафе дольче густо, смазочный утюг, купить капельную кофеварку, что можно сделать из пылесоса, соковыжималка садовая, пылесос циклонного типа, мультиварка sinbo отзывы, сравнение блендеров, мясорубка помощница, диски для кухонного комбайна,  кубань 8 вафельница">
		<meta name="description" content="миксеры профессиональные Компактный полулитровый электрический чайник Vitek VT-1134 в симпатичном пластик...">
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
						<a class="photo" href="photos/c737b54864f365f17a12fbd2acc0e1ac.jpeg" title="миксеры профессиональные Чайник электрический Vitek VT-1134"><img src="photos/c737b54864f365f17a12fbd2acc0e1ac.jpeg" alt="миксеры профессиональные Чайник электрический Vitek VT-1134" title="миксеры профессиональные Чайник электрический Vitek VT-1134 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-omelette-hc-1960r.php"><img src="photos/9b2c766be9aca21d9cbe5748b263718f.jpeg" alt="микроволновая печь вред Блендер Braun MR-120 Omelette HC" title="микроволновая печь вред Блендер Braun MR-120 Omelette HC"></a><h2>Блендер Braun MR-120 Omelette HC</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-krasnaya-29530r.php"><img src="photos/39e04c91cf56d7c949379d4f2e2d6076.jpeg" alt="микроволновая печь польза Автоматическая кофемашина Melitta CAFFEO Lattea, красная" title="микроволновая печь польза Автоматическая кофемашина Melitta CAFFEO Lattea, красная"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea, красная</h2></li>
							<li><a href="http://kitchentech.elitno.net/parovarka-vitek-vtn-sr-2200r.php"><img src="photos/8c0aa6f2022172974ae917a715c05f94.jpeg" alt="аэрогриль форум Пароварка Vitek VT-1550N SR" title="аэрогриль форум Пароварка Vitek VT-1550N SR"></a><h2>Пароварка Vitek VT-1550N SR</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>миксеры профессиональные Чайник электрический Vitek VT-1134</h1>
						<div class="tb"><p>Цена: от <span class="price">900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8394.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Компактный полулитровый электрический чайник <b>V</b><b>itek</b><b> VT-1134 </b>в симпатичном пластиковом корпусе прекрасно дополнит интерьер вашей кухни. Среди особенностей модели можно отметить: скрытый нагревательный элемент, систему автоотключения при закипании воды и защиту от перегрева.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 1000Вт </li><li>Нагревательный элемент: скрытый </li><li>Объем: 0,5л </li><li>Материал корпуса: пластик </li><li>Автоотключение при закипании воды: есть </li><li>Защита от перегрева: есть </li><li>Электропитание двойное: 120В ~60Гц и 230В~50Гц</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> миксеры профессиональные</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5ddb7c0074c19c7852a8997f3b296d03.jpeg" alt="кофеварка нескафе дольче густо Порционные весы NP-5001S" title="кофеварка нескафе дольче густо Порционные весы NP-5001S"><div class="box" page="porcionnye-vesy-nps-5260r"><span class="title">кофеварка нескафе дольче густо Порционные весы NP-5001S</span><p>от <span class="price">5260</span> руб.</p></div></li>
						<li><img src="photos/53d96832eb34bb57a7f20e415ffd59f8.jpeg" alt="смазочный утюг Тостер Russell Hobbs Cottage, арт. 18260-57" title="смазочный утюг Тостер Russell Hobbs Cottage, арт. 18260-57"><div class="box" page="toster-russell-hobbs-cottage-art-2690r"><span class="title">смазочный утюг Тостер Russell Hobbs Cottage, арт. 18260-57</span><p>от <span class="price">2690</span> руб.</p></div></li>
						<li><img src="photos/65194d520ec7c4edb8d9ad44bcaa26a1.jpeg" alt="купить капельную кофеварку Чайник электрический Maxima MК-105" title="купить капельную кофеварку Чайник электрический Maxima MК-105"><div class="box" page="chaynik-elektricheskiy-maxima-mk-550r"><span class="title">купить капельную кофеварку Чайник электрический Maxima MК-105</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/537c78beb6320fe2c86004c22681bdc6.jpeg" alt="что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)" title="что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-l-760r"><span class="title">что можно сделать из пылесоса Чайник электрический Maxima MК- M221 (1,5л)</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/a73fe1f79d4e2459d6da89e07445f626.jpeg" alt="соковыжималка садовая Электрический чайник Atlanta АТН-738" title="соковыжималка садовая Электрический чайник Atlanta АТН-738"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-520r"><span class="title">соковыжималка садовая Электрический чайник Atlanta АТН-738</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li class="large"><img src="photos/0207c29eb474672a9dc7b75c9efd4bab.jpeg" alt="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360" title="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-golubye-cvety-zauber-eco-1760r-2"><span class="title">пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li class="large"><img src="photos/8944f8fffe785f4fd9884d354ff925ed.jpeg" alt="мультиварка sinbo отзывы Электрический чайник 1л белый Bodum BISTRO 11154-913EURO" title="мультиварка sinbo отзывы Электрический чайник 1л белый Bodum BISTRO 11154-913EURO"><div class="box" page="elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2270r"><span class="title">мультиварка sinbo отзывы Электрический чайник 1л белый Bodum BISTRO 11154-913EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/41efedb38089aeb46a210ce7ff30eedc.jpeg" alt="сравнение блендеров Детектор жучков BugHunter Professional BH-01" title="сравнение блендеров Детектор жучков BugHunter Professional BH-01"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-7990r"><span class="title">сравнение блендеров Детектор жучков BugHunter Professional BH-01</span><p>от <span class="price">7990</span> руб.</p></div></li>
						<li><img src="photos/0cd736da9ac10dc7bbde0f3b6049ff52.jpeg" alt="мясорубка помощница Воздушный фильтр Redmond H10RV-308" title="мясорубка помощница Воздушный фильтр Redmond H10RV-308"><div class="box" page="vozdushnyy-filtr-redmond-hrv-390r"><span class="title">мясорубка помощница Воздушный фильтр Redmond H10RV-308</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/6eaac51c54fbf44dce471193ec6d5c18.jpeg" alt="диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail" title="диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail"><div class="box" page="nabor-dlya-udaleniya-pyaten-s-kovrovyh-pokrytiy-i-myagkoy-mebeli-dyson-party-cleanup-kit-ir-cl-retail-2490r"><span class="title">диски для кухонного комбайна Набор для удаления пятен с ковровых покрытий и мягкой мебели Dyson Party Clean-Up Kit Ir Cl Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/6f1dc0aa11d1eda2d816fefb2df4a739.jpeg" alt="горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2" title="горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2"><div class="box" page="pylesos-moyuschiy-thomas-hygiene-plus-t-19460r"><span class="title">горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2</span><p>от <span class="price">19460</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitek-vt-900r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitek-vt-900r.php")) require_once "comments/chaynik-elektricheskiy-vitek-vt-900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitek-vt-900r.php" method="post" onsubmit="return checkForm(this)">
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