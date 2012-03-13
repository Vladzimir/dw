<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("parovarka-vitek-vt-1400r.php","мультиварка скороварка landlife");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("parovarka-vitek-vt-1400r.php", $nick, $comment);
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
		<title>мультиварка скороварка landlife Пароварка Vitek VT-1555  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мультиварка скороварка landlife, трубочки в вафельнице, кофеварка delonghi eco 310, соковыжималки выбор, фритюрница philips отзывы, что можно делать блендером, пельменное тесто в хлебопечке, мультиварка куку 1054, кофеварка полуавтомат, мультиварка sinbo отзывы, пылесос thomas genius s2, brand аэрогриль, пылесос ролсен, мясорубка moulinex 2051,  хлебопечки в новосибирске">
		<meta name="description" content="мультиварка скороварка landlife Пароварка Vitek VT-1555 – отличная недорогая модель с двумя ярусами и углубления...">
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
						<a class="photo" href="photos/a8857bffd481b9dda4b86f6d3c6ed123.jpeg" title="мультиварка скороварка landlife Пароварка Vitek VT-1555"><img src="photos/a8857bffd481b9dda4b86f6d3c6ed123.jpeg" alt="мультиварка скороварка landlife Пароварка Vitek VT-1555" title="мультиварка скороварка landlife Пароварка Vitek VT-1555 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-tefal-prepline-hb-1860r.php"><img src="photos/6fb862aaf5b6b711f34b689e2d685231.jpeg" alt="трубочки в вафельнице Блендер погружной Tefal Prepline HB7151" title="трубочки в вафельнице Блендер погружной Tefal Prepline HB7151"></a><h2>Блендер погружной Tefal Prepline HB7151</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-2400r.php"><img src="photos/c875beb952f9d6580895bee02e6ce554.jpeg" alt="кофеварка delonghi eco 310 Блендер Braun MX-2000" title="кофеварка delonghi eco 310 Блендер Braun MX-2000"></a><h2>Блендер Braun MX-2000</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-solomilk-chernaya-26999r.php"><img src="photos/3c4c438093f284e24176255dd4b7658c.jpeg" alt="соковыжималки выбор Автоматическая кофемашина Melitta CAFFEO Solo&milk, черная" title="соковыжималки выбор Автоматическая кофемашина Melitta CAFFEO Solo&milk, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO Solo&milk, черная</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мультиварка скороварка landlife Пароварка Vitek VT-1555</h1>
						<div class="tb"><p>Цена: от <span class="price">1400</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_11221.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Пароварка Vitek </b><b>VT-1555</b> – отличная недорогая модель с двумя ярусами и углублениями для варки яиц. Она может стать превосходным подарком друзьям и родным или просто полезным приобретением. Корпус прибора выполнен из пластика белого цвета, паровые корзины – из прозрачного пластика. Управление осуществляется механически, предусмотрено наличие таймера на 60 минут с отключением, звуковой сигнал, индикатор уровня воды, а также индикатор включения.</p><p><b>Характеристики:</b></p><ul type=disc><li>Максимальная потребляемая мощность: 825 Вт; <li>Количество ярусов: 2; <li>Объем резервуара для воды: 1 л; <li>Чаша для риса; <li>Углубления для варки яиц; <li>Механическое управление; <li>Таймер: на 60 мин, с отключением; <li>Материал корпуса: пластик; <li>Материал паровых корзин: прозрачный пластик; <li>Звуковой сигнал; <li>Индикация включения; <li>Индикатор уровня воды; <li>Долив воды во время приготовления; <li>Цвет: белый.</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна:</b> Россия.</p> мультиварка скороварка landlife</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/cd757289d24d4d7e98d5fef52b1c314b.jpeg" alt="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)" title="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)"><div class="box" page="mikrovolnovaya-pech-vitek-sr-3990r"><span class="title">фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/060f95312423ba3e968eaf23618bd36d.jpeg" alt="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White" title="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White"><div class="box" page="myasorubka-elektricheskaya-binatone-mgr-white-3700r"><span class="title">что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White</span><p>от <span class="price">3700</span> руб.</p></div></li>
						<li><img src="photos/83b963fc4661f051cc9c631952fa196f.jpeg" alt="пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212" title="пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212"><div class="box" page="myasorubka-maxima-mmg-2690r"><span class="title">пельменное тесто в хлебопечке Мясорубка Maxima MMG-0212</span><p>от <span class="price">2690</span> руб.</p></div></li>
						<li><img src="photos/f12c67c091dc7674e75925e27c6ee910.jpeg" alt="мультиварка куку 1054 Чайник электрический Vitek VT-1101 черный" title="мультиварка куку 1054 Чайник электрический Vitek VT-1101 черный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-chernyy-2150r"><span class="title">мультиварка куку 1054 Чайник электрический Vitek VT-1101 черный</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li class="large"><img src="photos/8964576110671ffcda667fca45b4c191.jpeg" alt="кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л" title="кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1560r"><span class="title">кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л</span><p>от <span class="price">1560</span> руб.</p></div></li>
						<li class="large"><img src="photos/8944f8fffe785f4fd9884d354ff925ed.jpeg" alt="мультиварка sinbo отзывы Электрический чайник 1л белый Bodum BISTRO 11154-913EURO" title="мультиварка sinbo отзывы Электрический чайник 1л белый Bodum BISTRO 11154-913EURO"><div class="box" page="elektricheskiy-chaynik-l-belyy-bodum-bistro-euro-2270r"><span class="title">мультиварка sinbo отзывы Электрический чайник 1л белый Bodum BISTRO 11154-913EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li class="large"><img src="photos/94de14730b416ab6939a25c5af76e14e.jpeg" alt="пылесос thomas genius s2 Парогенератор Lelit PS11N" title="пылесос thomas genius s2 Парогенератор Lelit PS11N"><div class="box" page="parogenerator-lelit-psn-12000r"><span class="title">пылесос thomas genius s2 Парогенератор Lelit PS11N</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li><img src="photos/26befd04ebef6df7b3db2c4e6ee2357f.jpeg" alt="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)" title="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r-2"><span class="title">brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/b423fb6caec639a7de8db20512fac098.jpeg" alt="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas" title="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r"><span class="title">пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/b1991ec2a1e595341a5229ac67f9d69a.jpeg" alt="мясорубка moulinex 2051 Пылесос моющий Thomas Pet and Friends T1 Aquafilter" title="мясорубка moulinex 2051 Пылесос моющий Thomas Pet and Friends T1 Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-pet-and-friends-t-aquafilter-14260r"><span class="title">мясорубка moulinex 2051 Пылесос моющий Thomas Pet and Friends T1 Aquafilter</span><p>от <span class="price">14260</span> руб.</p></div></li>
						<li><img src="photos/f7d34d9031a1da8552cb5d880691212c.jpeg" alt="купить капельную кофеварку Пылесос Redmond RV-312" title="купить капельную кофеварку Пылесос Redmond RV-312"><div class="box" page="pylesos-redmond-rv-8990r"><span class="title">купить капельную кофеварку Пылесос Redmond RV-312</span><p>от <span class="price">8990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("parovarka-vitek-vt-1400r.php", 0, -4); if (file_exists("comments/parovarka-vitek-vt-1400r.php")) require_once "comments/parovarka-vitek-vt-1400r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="parovarka-vitek-vt-1400r.php" method="post" onsubmit="return checkForm(this)">
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