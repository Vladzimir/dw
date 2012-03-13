<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-atlanta-atn-450r.php","мультиварка декс");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-atlanta-atn-450r.php", $nick, $comment);
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
		<title>мультиварка декс Электрический чайник Atlanta АТН-735  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мультиварка декс, похудеть с пароваркой, пароварка магазин, чалдовые кофеварки, выбор микроволновой печи, пылесос прессующий, купить кофемашину bosch, кофеварка via veneto, принцип микроволновой печи, блендер vita mix, пылесос витек с аквафильтром, борк мешки для пылесоса, дозиметр соэкс, пылесос вертикальный,  видео хлебопечка панасоник">
		<meta name="description" content="мультиварка декс Электрический чайник Atlanta АТН-735 – стильный и доступный кухонный прибор из с...">
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
						<a class="photo" href="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" title="мультиварка декс Электрический чайник Atlanta АТН-735"><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="мультиварка декс Электрический чайник Atlanta АТН-735" title="мультиварка декс Электрический чайник Atlanta АТН-735 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofeynoe-zerno-v-gorkom-shokolade-melitta-60r.php"><img src="photos/fb507058255502712acd55f26151d977.png" alt="похудеть с пароваркой Кофейное зерно в горьком шоколаде Melitta" title="похудеть с пароваркой Кофейное зерно в горьком шоколаде Melitta"></a><h2>Кофейное зерно в горьком шоколаде Melitta</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-beloserebristaya-29530r.php"><img src="photos/5b2c06d57a572404f45fc75e65b42e87.jpeg" alt="пароварка магазин Автоматическая кофемашина Melitta CAFFEO Lattea, бело-серебристая" title="пароварка магазин Автоматическая кофемашина Melitta CAFFEO Lattea, бело-серебристая"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea, бело-серебристая</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-gourmet-chernaya-43999r.php"><img src="photos/a59c30a3b2d8957f43e9fce5f7b6e0f5.jpeg" alt="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная" title="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO GOURMET, черная</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мультиварка декс Электрический чайник Atlanta АТН-735</h1>
						<div class="tb"><p>Цена: от <span class="price">450</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19990.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta АТН-735 – стильный и доступный кухонный прибор из синего или серого пластика с прозрачной вставкой. Его мощность составляет 2000 Вт при объеме 1,7 л. Имеет фильтр от накипи и функцию быстрого закипания. В качестве нагревательного элемента установлена открытая спираль из нержавеющей стали. Безопасен, т. к. имеет защиту от перегрева, а также блокировку включения без воды. Предусмотрено место для электрошнура в цокольной подставке. Обладает низким уровнем электропотребления. Соответствует европейским и американским нормам безопасности. Изделие сертифицировано Госстандартом РФ.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Современный дизайн <li>Автоматическое отключение при закипании <li>Защита от перегрева без воды <li>Объем 1,7 литра <li>Световой индикатор работы <li>Удобный фиксатор крышки <li>Быстрое закипание <li>Электрошнур в цокольной подставке <li>Мощность 2000 Вт <li>220-240 В, 50-60 Гц <li>21.6 x 14.5 x 23.5 см </li></ul><p><strong>Производитель: США</strong></p> мультиварка декс</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0b57a5fa2564b3001e847ebdd45ce976.jpeg" alt="выбор микроволновой печи Вспениватель Melitta Cremio красный" title="выбор микроволновой печи Вспениватель Melitta Cremio красный"><div class="box"><a href="http://kitchentech.elitno.net/vspenivatel-melitta-cremio-krasnyy-4155r.php"><h3 class="title">выбор микроволновой печи Вспениватель Melitta Cremio красный</h3><p>от <span class="price">4155</span> руб.</p></a></div></li>
						<li><img src="photos/3ee610b7cf277344aaeccda38d02c2fc.jpeg" alt="пылесос прессующий Кухонный комбайн Maxima MFP-0139" title="пылесос прессующий Кухонный комбайн Maxima MFP-0139"><div class="box" page="kuhonnyy-kombayn-maxima-mfp-2190r"><span class="title">пылесос прессующий Кухонный комбайн Maxima MFP-0139</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/60dff82992355ef436c4e763a78c1f99.jpeg" alt="купить кофемашину bosch Соковыжималка для цитрусовых" title="купить кофемашину bosch Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-760r"><span class="title">купить кофемашину bosch Соковыжималка для цитрусовых</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/99e95702b63a74224f733264159dce15.jpeg" alt="кофеварка via veneto Тостер Redmond RT-402" title="кофеварка via veneto Тостер Redmond RT-402"><div class="box" page="toster-redmond-rt-2490r"><span class="title">кофеварка via veneto Тостер Redmond RT-402</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li class="large"><img src="photos/3db103a42b99a0a770887670f28f5ba2.jpeg" alt="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л" title="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-1950r"><span class="title">принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/5698b5516003bb90b12e44c09c465d2a.jpeg" alt="блендер vita mix Чайник электрический Maxima MK-G301" title="блендер vita mix Чайник электрический Maxima MK-G301"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-1390r"><span class="title">блендер vita mix Чайник электрический Maxima MK-G301</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li class="large"><img src="photos/5693cfb54e3dd38a9bb80b0d7d894cdb.jpeg" alt="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)" title="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)"><div class="box" page="otkryvalka-hand-free-opener-can-opener-470r"><span class="title">пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li><img src="photos/6d6e50224259e87ee797b3ec79edf80e.jpeg" alt="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP" title="борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP"><div class="box" page="ploskaya-universalnaya-nasadka-v-upakovke-dyson-flat-out-head-retail-np-2190r"><span class="title">борк мешки для пылесоса Плоская универсальная насадка в упаковке Dyson Flat Out Head Retail NP</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/0c61c04ea066965d61b957c776ac9e0d.jpeg" alt="дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White" title="дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White"><div class="box" page="vertikalnyy-ciklonicheskiy-pylesos-montiss-cvc-white-4850r"><span class="title">дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White</span><p>от <span class="price">4850</span> руб.</p></div></li>
						<li><img src="photos/08939404bc185a897cf2a335ea28842f.jpeg" alt="пылесос вертикальный Пылесос Redmond RV-308" title="пылесос вертикальный Пылесос Redmond RV-308"><div class="box" page="pylesos-redmond-rv-7990r"><span class="title">пылесос вертикальный Пылесос Redmond RV-308</span><p>от <span class="price">7990</span> руб.</p></div></li>
						<li><img src="photos/127daa75b6d910b9f123f08316795848.png" alt="стимер для аэрогриля Пылесос Dyson allergy musclehead DC 37" title="стимер для аэрогриля Пылесос Dyson allergy musclehead DC 37"><div class="box" page="pylesos-dyson-allergy-musclehead-dc-24590r"><span class="title">стимер для аэрогриля Пылесос Dyson allergy musclehead DC 37</span><p>от <span class="price">24590</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-atlanta-atn-450r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-atlanta-atn-450r.php")) require_once "comments/elektricheskiy-chaynik-atlanta-atn-450r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-atlanta-atn-450r.php" method="post" onsubmit="return checkForm(this)">
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