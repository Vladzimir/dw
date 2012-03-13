<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("parovarka-atlanta-atn-1050r-2.php","покрытие чаши мультиварки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("parovarka-atlanta-atn-1050r-2.php", $nick, $comment);
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
		<title>покрытие чаши мультиварки Пароварка Atlanta АТН-605  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="покрытие чаши мультиварки, пылесос thomas black ocean, электрочайники из нержавейки, мультиварки киев, чем отличаются кофеварки, рецепт индейки в мультиварке, обслуживание пылесоса, портативный дозиметр, мультиварка sinbo отзывы, пылесос витек с аквафильтром, кофемашина incanto de luxe, пылесосы филипс отзывы, утюг braun texstyle control, бездрожжевой хлеб в хлебопечке,  соковыжималка сатурн">
		<meta name="description" content="покрытие чаши мультиварки Трехъярусная пароварка Atlanta АТН-605 общей емкостью 9 литров и мощностью 700 В...">
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
						<a class="photo" href="photos/56cb596182a024c5be877e612e6462d8.jpeg" title="покрытие чаши мультиварки Пароварка Atlanta АТН-605"><img src="photos/56cb596182a024c5be877e612e6462d8.jpeg" alt="покрытие чаши мультиварки Пароварка Atlanta АТН-605" title="покрытие чаши мультиварки Пароварка Atlanta АТН-605 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-dd-2300r.php"><img src="photos/b0d11dfbaf618701d7d5cdf29d1db36e.jpeg" alt="пылесос thomas black ocean Блендер погружной Moulinex DD904143" title="пылесос thomas black ocean Блендер погружной Moulinex DD904143"></a><h2>Блендер погружной Moulinex DD904143</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2080r.php"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="электрочайники из нержавейки Блендер Redmond RHB-2907" title="электрочайники из нержавейки Блендер Redmond RHB-2907"></a><h2>Блендер Redmond RHB-2907</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-ci-black-76390r.php"><img src="photos/4c9f6fc7185095b9ee0e389df903b9c9.jpeg" alt="мультиварки киев Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)" title="мультиварки киев Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)"></a><h2>Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>покрытие чаши мультиварки Пароварка Atlanta АТН-605</h1>
						<div class="tb"><p>Цена: от <span class="price">1050</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19650.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Трехъярусная пароварка Atlanta АТН-605 общей емкостью 9 литров и мощностью 700 Вт имеет таймер на часовой таймер и шкалу уровня воды. Снабжена тремя прозрачными контейнерами, а также световым индикатором работы. Имеет сертификацию Госстандарта РФ, а также соответствует Европейским нормам безопасности. Выполнена из пластика и имеет механический тип управления. Не занимает много места при хранении благодаря съемным решеткам.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Таймер на 60 минут <li>Шкала уровня воды <li>Три прозрачных контейнера общей емкостью 9 Л <li>Дополнительная чаша для риса <li>Световой индикатор работы <li>Изделие сертифицировано Госстандартом РФ <li>Соответствует Европейским нормам безопасности <li>Мощность 700W <li>230V, 50Hz <li>27.5 x 22.5 x 22.5 см </li></ul><p><strong>Производитель: США</strong></p> покрытие чаши мультиварки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0c7c7a9daf3721e5976f772ebe4ae9e2.jpeg" alt="чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)" title="чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)"><div class="box" page="espressokofemashina-melitta-caffeo-lattea-red-35700r"><span class="title">чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)</span><p>от <span class="price">35700</span> руб.</p></div></li>
						<li><img src="photos/1c87b1da99c709915f1f2bf9d89b2035.jpeg" alt="рецепт индейки в мультиварке Zauber Кофемолка  X-470" title="рецепт индейки в мультиварке Zauber Кофемолка  X-470"><div class="box" page="zauber-kofemolka-x-850r"><span class="title">рецепт индейки в мультиварке Zauber Кофемолка  X-470</span><p>от <span class="price">850</span> руб.</p></div></li>
						<li><img src="photos/b6481108ed00fa262329eb9b4a9a7836.jpeg" alt="обслуживание пылесоса Микроволновая печь Vitek VT-1694" title="обслуживание пылесоса Микроволновая печь Vitek VT-1694"><div class="box" page="mikrovolnovaya-pech-vitek-vt-3650r"><span class="title">обслуживание пылесоса Микроволновая печь Vitek VT-1694</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li><img src="photos/ac8f90b072b89e29e700b07839541017.jpeg" alt="портативный дозиметр Миксер Atlanta ATH-293" title="портативный дозиметр Миксер Atlanta ATH-293"><div class="box" page="mikser-atlanta-ath-480r"><span class="title">портативный дозиметр Миксер Atlanta ATH-293</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li class="large"><img src="photos/8944f8fffe785f4fd9884d354ff925ed.jpeg" alt="мультиварка sinbo отзывы Электрический чайник 1л белый Bodum BISTRO 11154-913EURO" title="мультиварка sinbo отзывы Электрический чайник 1л белый Bodum BISTRO 11154-913EURO"><div class="box" page="elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2270r"><span class="title">мультиварка sinbo отзывы Электрический чайник 1л белый Bodum BISTRO 11154-913EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li class="large"><img src="photos/5693cfb54e3dd38a9bb80b0d7d894cdb.jpeg" alt="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)" title="пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)"><div class="box" page="otkryvalka-hand-free-opener-can-opener-470r"><span class="title">пылесос витек с аквафильтром Открывалка Hand Free Opener (Can Opener)</span><p>от <span class="price">470</span> руб.</p></div></li>
						<li class="large"><img src="photos/56eef2b8f5929fc5948323a8a5a2e051.jpeg" alt="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)" title="кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbs-haah-1220r"><span class="title">кофемашина incanto de luxe Зарядное устройство GP Batteries PB25-BС2 + (2х270AAH)</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li><img src="photos/20c033d3c85583b2e6a71a21254a84f6.jpeg" alt="пылесосы филипс отзывы Щетка для твердых поверхностей в упаковке Dyson Hard Floor Tool Assy Retail" title="пылесосы филипс отзывы Щетка для твердых поверхностей в упаковке Dyson Hard Floor Tool Assy Retail"><div class="box" page="schetka-dlya-tverdyh-poverhnostey-v-upakovke-dyson-hard-floor-tool-assy-retail-1590r"><span class="title">пылесосы филипс отзывы Щетка для твердых поверхностей в упаковке Dyson Hard Floor Tool Assy Retail</span><p>от <span class="price">1590</span> руб.</p></div></li>
						<li><img src="photos/a9173acd4bbfab2975fc7d7fd7dd2bd2.jpeg" alt="утюг braun texstyle control Пылесос моющий Thomas Twin T1 Aquafilter" title="утюг braun texstyle control Пылесос моющий Thomas Twin T1 Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-t-aquafilter-13080r"><span class="title">утюг braun texstyle control Пылесос моющий Thomas Twin T1 Aquafilter</span><p>от <span class="price">13080</span> руб.</p></div></li>
						<li><img src="photos/e0fdfa431cfe6b47b04ad11ff4f6a218.jpeg" alt="бездрожжевой хлеб в хлебопечке Пылесос Vitek VT-1805" title="бездрожжевой хлеб в хлебопечке Пылесос Vitek VT-1805"><div class="box" page="pylesos-vitek-vt-1870r"><span class="title">бездрожжевой хлеб в хлебопечке Пылесос Vitek VT-1805</span><p>от <span class="price">1870</span> руб.</p></div></li>
						<li><img src="photos/2bc01cf0e5d557324370d108b991f168.jpeg" alt="бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional" title="бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional"><div class="box" page="pylesos-thomas-inox-s-professional-11290r"><span class="title">бытовая техника пылесосы Пылесос Thomas Inox 45 S Professional</span><p>от <span class="price">11290</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("parovarka-atlanta-atn-1050r-2.php", 0, -4); if (file_exists("comments/parovarka-atlanta-atn-1050r-2.php")) require_once "comments/parovarka-atlanta-atn-1050r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="parovarka-atlanta-atn-1050r-2.php" method="post" onsubmit="return checkForm(this)">
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