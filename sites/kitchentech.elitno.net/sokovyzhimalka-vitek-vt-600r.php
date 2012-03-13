<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("sokovyzhimalka-vitek-vt-600r.php","кофеварка nescafe dolce gusto");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("sokovyzhimalka-vitek-vt-600r.php", $nick, $comment);
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
		<title>кофеварка nescafe dolce gusto Соковыжималка VITEK VT-1611  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофеварка nescafe dolce gusto, пароварка на газу, чалдовые кофеварки, готовим в аэрогриле видео, капсулы для кофемашины купить, купить хлебопечку мулинекс, стоит ли покупать мультиварку, сравнить пароварки, пылесос mediclean, мультиварка супра инструкция, купить капельную кофеварку, хлебопечка мистери, mini пылесос, микроволновые печи в москве,  мультиварка кенвуд">
		<meta name="description" content="кофеварка nescafe dolce gusto Для всех любителей натурального  свежего сока ценным приобретением несомненно ст...">
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
						<a class="photo" href="photos/03d6a39216ccd97c8a662a35f965b076.jpeg" title="кофеварка nescafe dolce gusto Соковыжималка VITEK VT-1611"><img src="photos/03d6a39216ccd97c8a662a35f965b076.jpeg" alt="кофеварка nescafe dolce gusto Соковыжималка VITEK VT-1611" title="кофеварка nescafe dolce gusto Соковыжималка VITEK VT-1611 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/ruchnoy-blender-russell-hobbs-desire-art-1290r.php"><img src="photos/1872b2cfd6b28fbd32d0f1258c786690.jpeg" alt="пароварка на газу Ручной блендер Russell Hobbs Desire, арт. 18508-56" title="пароварка на газу Ручной блендер Russell Hobbs Desire, арт. 18508-56"></a><h2>Ручной блендер Russell Hobbs Desire, арт. 18508-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-gourmet-chernaya-43999r.php"><img src="photos/a59c30a3b2d8957f43e9fce5f7b6e0f5.jpeg" alt="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная" title="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO GOURMET, черная</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskaya-nozhevaya-kofemolka-krasnaya-bodum-bistro-euro-1830r.php"><img src="photos/9902f4713a14989fcafcf26ed7445abc.jpeg" alt="готовим в аэрогриле видео Электрическая ножевая кофемолка красная Bodum BISTRO 11160-294EURO" title="готовим в аэрогриле видео Электрическая ножевая кофемолка красная Bodum BISTRO 11160-294EURO"></a><h2>Электрическая ножевая кофемолка красная Bodum BISTRO 11160-294EURO</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофеварка nescafe dolce gusto Соковыжималка VITEK VT-1611</h1>
						<div class="tb"><p>Цена: от <span class="price">600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26594.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Для всех любителей натурального  свежего сока ценным приобретением несомненно станет практичная современная  соковыжималка. Универсальная соковыжималка VITEK 1611 от российской  компании-производителя изготовлена из качественных материалов (пластик,  нержавеющая сталь) имеет две скорости, систему прямой подачи сока и функцию  защиты от случайного включения. Внешнюю привлекательность данной модели  соковыжималки придает насыщенный зеленый цвет корпуса.&nbsp;&nbsp; </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:       универсальная;</li>   <li>Мощность:       200 Вт;</li>   <li>Материал       корпуса: пластик;</li>   <li>Материал       сетки центрифуги: нержавеющая сталь;</li>   <li>Количество       скоростей: 2;</li>   <li>Система       прямой подачи сока; </li>   <li>Сбор       мякоти автоматический выброс мякоти;</li>   <li>Защитные       функции: защита от случайного включения;</li>   <li>Прорезиненные       ножки;</li>   <li>Отсек       для сетевого шнура; </li>   <li>Цвет:       зеленый.</li> </ul> <p><strong>Производитель: </strong><strong>VITEK (Россия)</strong><br>     <strong>Гарантия: 1 год</strong></p> кофеварка nescafe dolce gusto</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/35e035621354934f31343d7d8a4fd49b.jpeg" alt="капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф" title="капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф"><div class="box"><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-moulinex-fp-master-shef-4350r.php"><h3 class="title">капсулы для кофемашины купить Кухонный комбайн Moulinex FP3141 Мастер шеф</h3><p>от <span class="price">4350</span> руб.</p></a></div></li>
						<li><img src="photos/42b635368f5179e970d08ec7c08cbc10.jpeg" alt="купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей" title="купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей"><div class="box" page="multivarka-maruchi-rwfz-v-komplekte-s-keramicheskoy-kastryuley-4500r"><span class="title">купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/5bf48f17b0c0a7ecdd4b2ccc867e6baf.jpeg" alt="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191" title="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191"><div class="box" page="elektroplita-indukcionnaya-atlanta-ath-1300r"><span class="title">стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/a5a944903050174bbca074a40d4e65fa.jpeg" alt="сравнить пароварки Соковыжималка Atlanta ATH-325" title="сравнить пароварки Соковыжималка Atlanta ATH-325"><div class="box" page="sokovyzhimalka-atlanta-ath-520r"><span class="title">сравнить пароварки Соковыжималка Atlanta ATH-325</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li class="large"><img src="photos/4f7eae7926bb1b2816625b5940a25b78.jpeg" alt="пылесос mediclean Чайник электрический Vitek VT-1157" title="пылесос mediclean Чайник электрический Vitek VT-1157"><div class="box" page="chaynik-elektricheskiy-vitek-vt-2150r"><span class="title">пылесос mediclean Чайник электрический Vitek VT-1157</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li class="large"><img src="photos/5a34cc2772e0feae9df6932b7f043259.jpeg" alt="мультиварка супра инструкция Чайник электрический Atlanta ATH-758" title="мультиварка супра инструкция Чайник электрический Atlanta ATH-758"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-940r"><span class="title">мультиварка супра инструкция Чайник электрический Atlanta ATH-758</span><p>от <span class="price">940</span> руб.</p></div></li>
						<li class="large"><img src="photos/65194d520ec7c4edb8d9ad44bcaa26a1.jpeg" alt="купить капельную кофеварку Чайник электрический Maxima MК-105" title="купить капельную кофеварку Чайник электрический Maxima MК-105"><div class="box" page="chaynik-elektricheskiy-maxima-mk-550r"><span class="title">купить капельную кофеварку Чайник электрический Maxima MК-105</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/aa004256b858fb51c2e43e9faff2b9a8.jpeg" alt="хлебопечка мистери Чайник электрический Maxima MК-113" title="хлебопечка мистери Чайник электрический Maxima MК-113"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r-3"><span class="title">хлебопечка мистери Чайник электрический Maxima MК-113</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/28da988d46134dfe1236e7598e0579cc.jpeg" alt="mini пылесос Турбощетка Redmond  RV-308" title="mini пылесос Турбощетка Redmond  RV-308"><div class="box" page="turboschetka-redmond-rv-390r"><span class="title">mini пылесос Турбощетка Redmond  RV-308</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/11c7c6ddf93edcdf0c5e620d5363815f.jpeg" alt="микроволновые печи в москве Пылесос Vitek VT-1844" title="микроволновые печи в москве Пылесос Vitek VT-1844"><div class="box" page="pylesos-vitek-vt-3250r"><span class="title">микроволновые печи в москве Пылесос Vitek VT-1844</span><p>от <span class="price">3250</span> руб.</p></div></li>
						<li><img src="photos/a5307e77bbd77d05fd1bf891a3eeb5d0.jpeg" alt="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный" title="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-4590r"><span class="title">хлебопечки в новосибирске Пылесос Vitek VT-1845 красный</span><p>от <span class="price">4590</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("sokovyzhimalka-vitek-vt-600r.php", 0, -4); if (file_exists("comments/sokovyzhimalka-vitek-vt-600r.php")) require_once "comments/sokovyzhimalka-vitek-vt-600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="sokovyzhimalka-vitek-vt-600r.php" method="post" onsubmit="return checkForm(this)">
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