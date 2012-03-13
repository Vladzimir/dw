<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-braun-mr-spaghetti-2450r.php","мясорубка нарезка кубиками");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-braun-mr-spaghetti-2450r.php", $nick, $comment);
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
		<title>мясорубка нарезка кубиками Блендер Braun MR-320 Spaghetti  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мясорубка нарезка кубиками, манник в мультиварке панасоник, отважный тостер скачать, контрольная закупка пылесос, гречневая каша в мультиварке, мультиварка рецепты картофель, пельменное тесто в хлебопечке, фиксики смотреть пылесос, как выбрать утюг отзывы, соковыжималка philips 1866, кофемашины оптом, brand аэрогриль, хлебопечки в новосибирске, держатель для пылесоса,  микроволновая печь vitek">
		<meta name="description" content="мясорубка нарезка кубиками Погружной блендер отлично подходит для быстрого измельчения достаточно плотных п...">
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
						<a class="photo" href="photos/ae05bc52a7dd4b3b98e890b98083a84b.jpeg" title="мясорубка нарезка кубиками Блендер Braun MR-320 Spaghetti"><img src="photos/ae05bc52a7dd4b3b98e890b98083a84b.jpeg" alt="мясорубка нарезка кубиками Блендер Braun MR-320 Spaghetti" title="мясорубка нарезка кубиками Блендер Braun MR-320 Spaghetti -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/elektricheskaya-nozhevaya-kofemolka-bodum-bistro-euro-belaya-1830r.php"><img src="photos/9ea12f3963a660c25496afb70c846d6f.jpeg" alt="манник в мультиварке панасоник Электрическая ножевая кофемолка Bodum BISTRO 11160-913EURO белая" title="манник в мультиварке панасоник Электрическая ножевая кофемолка Bodum BISTRO 11160-913EURO белая"></a><h2>Электрическая ножевая кофемолка Bodum BISTRO 11160-913EURO белая</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-4150r.php"><img src="photos/09368438bc3c0f6d8d6445abd5f08674.jpeg" alt="отважный тостер скачать Микроволновая печь Vitek VT-1693" title="отважный тостер скачать Микроволновая печь Vitek VT-1693"></a><h2>Микроволновая печь Vitek VT-1693</h2></li>
							<li><a href="http://kitchentech.elitno.net/bodum-bistro-euro-elektricheskiy-mikser-2740r.php"><img src="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" alt="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер" title="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер"></a><h2>Bodum BISTRO 11151-01EURO Электрический миксер</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мясорубка нарезка кубиками Блендер Braun MR-320 Spaghetti</h1>
						<div class="tb"><p>Цена: от <span class="price">2450</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_11970.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Погружной блендер отлично подходит для быстрого измельчения достаточно плотных продуктов. Мощный мотор и 2 скорости работы значительно ускорят процесс приготовления пищи. Современные материалы позволяют готовить кипящие на плите блюда, при этом, не разбрызгивая их содержимое.</p><p>В комплект входят: чаша-измельчитель, венчик и насадка-блендер. Модель идеально подходит для приготовления соусов и начинок, для взбивания и приготовления пышных десертов, взбитых сливок, омлетов и многого другого.</p><p><b>Характеристики: </b></p><ul type=\disc\><li>Тип: погружной </li><li>Мощность: 450Вт </li><li>Управление: механическое </li><li>Число скоростей: 2 </li><li>Измельчитель: есть </li><li>Венчик для взбивания: есть</li></ul><p><b>Производитель:</b> Braun.</p><p><b>Страна:</b> Германия.</p> мясорубка нарезка кубиками</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8472253b416100a0ed111bb9484a2b5a.jpeg" alt="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л" title="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л"><div class="box" page="morozhenica-montiss-kimm-l-1900r"><span class="title">гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/65e8a544a49b70285af00e3f7637c4af.jpeg" alt="мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная" title="мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная"><div class="box" page="myasorubka-meat-grinder-f-sverhlegkaya-udaroprochnaya-500r"><span class="title">мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/83b963fc4661f051cc9c631952fa196f.jpeg" alt="пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212" title="пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212"><div class="box" page="myasorubka-maxima-mmg-2690r"><span class="title">пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212</span><p>от <span class="price">2690</span> руб.</p></div></li>
						<li><img src="photos/acf412ca70279cda1dfad07d522f7e3c.jpeg" alt="фиксики смотреть пылесос Пароварка Vitesse VS-507" title="фиксики смотреть пылесос Пароварка Vitesse VS-507"><div class="box" page="parovarka-vitesse-vs-1290r"><span class="title">фиксики смотреть пылесос Пароварка Vitesse VS-507</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li class="large"><img src="photos/7d63a182df07dd9be547ac2724aeed46.jpeg" alt="как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO" title="как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-krasnaya-bodum-bistro-euro-3340r"><span class="title">как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li class="large"><img src="photos/ba65472be620113b82aa055e0f7c89a6.jpeg" alt="соковыжималка philips 1866 Чайник электрический  Vitesse VS-135 1,7л красный" title="соковыжималка philips 1866 Чайник электрический  Vitesse VS-135 1,7л красный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-krasnyy-1510r"><span class="title">соковыжималка philips 1866 Чайник электрический  Vitesse VS-135 1,7л красный</span><p>от <span class="price">1510</span> руб.</p></div></li>
						<li class="large"><img src="photos/78965fa03e391297ff5141e1ed5d2961.jpeg" alt="кофемашины оптом Электрический чайник Atlanta АТН-721" title="кофемашины оптом Электрический чайник Atlanta АТН-721"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r"><span class="title">кофемашины оптом Электрический чайник Atlanta АТН-721</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/26befd04ebef6df7b3db2c4e6ee2357f.jpeg" alt="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)" title="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r-2"><span class="title">brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/a5307e77bbd77d05fd1bf891a3eeb5d0.jpeg" alt="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный" title="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-4590r"><span class="title">хлебопечки в новосибирске Пылесос Vitek VT-1845 красный</span><p>от <span class="price">4590</span> руб.</p></div></li>
						<li><img src="photos/d9b92094264662e2a4b171c525a4ead7.jpeg" alt="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter" title="держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter"><div class="box" page="pylesos-thomas-biovac-c-aquafilter-8430r"><span class="title">держатель для пылесоса Пылесос Thomas Biovac 1620 C Aquafilter</span><p>от <span class="price">8430</span> руб.</p></div></li>
						<li><img src="photos/2784b5cdf9478bbd2439685d61179e80.jpeg" alt="блендер vita mix Сушилка для рук AEG Haustehnik HE 181" title="блендер vita mix Сушилка для рук AEG Haustehnik HE 181"><div class="box" page="sushilka-dlya-ruk-aeg-haustehnik-he-5900r"><span class="title">блендер vita mix Сушилка для рук AEG Haustehnik HE 181</span><p>от <span class="price">5900</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-braun-mr-spaghetti-2450r.php", 0, -4); if (file_exists("comments/blender-braun-mr-spaghetti-2450r.php")) require_once "comments/blender-braun-mr-spaghetti-2450r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-braun-mr-spaghetti-2450r.php" method="post" onsubmit="return checkForm(this)">
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