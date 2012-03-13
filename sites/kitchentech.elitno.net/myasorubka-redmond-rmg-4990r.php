<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("myasorubka-redmond-rmg-4990r.php","запеченная рыба в аэрогриле");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("myasorubka-redmond-rmg-4990r.php", $nick, $comment);
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
		<title>запеченная рыба в аэрогриле Мясорубка Redmond RMG-1203  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="запеченная рыба в аэрогриле, пылесосы в гродно, пылесос sc 4760h33, видео приготовление в аэрогриле, соковыжималки выбор, готовим в аэрогриле видео, контрольная закупка пылесос, мультиварка скороварка landlife, мясорубка binatone, сравнить пароварки, измельчитель сучьев, фильтр для пылесоса thomas twin, форум микроволновая печь, купить пылесос с контейнером,  самые популярные пылесосы">
		<meta name="description" content="запеченная рыба в аэрогриле Качественная мясорубка Redmond RMG-1203 с защитой от перегрузки. Изюминка данной...">
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
						<a class="photo" href="photos/ab8e324f37683fb482e2239bd528b88e.jpeg" title="запеченная рыба в аэрогриле Мясорубка Redmond RMG-1203"><img src="photos/ab8e324f37683fb482e2239bd528b88e.jpeg" alt="запеченная рыба в аэрогриле Мясорубка Redmond RMG-1203" title="запеченная рыба в аэрогриле Мясорубка Redmond RMG-1203 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-vitek-vt-850r.php"><img src="photos/5b1e4d04b939e3a2c1573152ff3f29b5.jpeg" alt="пылесосы в гродно Блендер Vitek VT-1452" title="пылесосы в гродно Блендер Vitek VT-1452"></a><h2>Блендер Vitek VT-1452</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-3910r.php"><img src="photos/5a6cc5c274d661a65ab52201c3f36a5e.jpeg" alt="пылесос sc 4760h33 Блендер Braun MX-2050" title="пылесос sc 4760h33 Блендер Braun MX-2050"></a><h2>Блендер Braun MX-2050</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-36590r.php"><img src="photos/c26c66e7052b7c7adfb4026bf7ee1ec7.jpeg" alt="видео приготовление в аэрогриле Кофемашина Nivona NICR750 CafeRomatica" title="видео приготовление в аэрогриле Кофемашина Nivona NICR750 CafeRomatica"></a><h2>Кофемашина Nivona NICR750 CafeRomatica</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>запеченная рыба в аэрогриле Мясорубка Redmond RMG-1203</h1>
						<div class="tb"><p>Цена: от <span class="price">4990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19681.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Качественная мясорубка Redmond RMG-1203 с защитой от перегрузки. Изюминка данной модели – особенные насадки: теперь готовить колбасу Вы можете у себя дома без всяких хлопот! </p><ul type=disc><li>Мощность: 500 Ватт (Макс. мощность: 3000 Вт); <li>DC двигатель. Лоток из нержавеющей стали; <li>Сверхпрочный нож из легированной стали; <li>3 перфорированных диска разного диаметра; <li>Насадки кебе; <li>Насадки для приготовления колбасы; <li>Разборный толкатель с отсеком для хранения насадок; <li>Функция реверса; <li>Защита от перегрузки. </li></ul><p><b>Производитель: США</b></p><p><b>Гарантия: 1 год</b></p> запеченная рыба в аэрогриле</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3c4c438093f284e24176255dd4b7658c.jpeg" alt="соковыжималки выбор Автоматическая кофемашина Melitta CAFFEO Solo&milk, черная" title="соковыжималки выбор Автоматическая кофемашина Melitta CAFFEO Solo&milk, черная"><div class="box"><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-solomilk-chernaya-26999r.php"><h3 class="title">соковыжималки выбор Автоматическая кофемашина Melitta CAFFEO Solo&milk, черная</h3><p>от <span class="price">26999</span> руб.</p></a></div></li>
						<li><img src="photos/9902f4713a14989fcafcf26ed7445abc.jpeg" alt="готовим в аэрогриле видео Электрическая ножевая кофемолка красная Bodum BISTRO 11160-294EURO" title="готовим в аэрогриле видео Электрическая ножевая кофемолка красная Bodum BISTRO 11160-294EURO"><div class="box" page="elektricheskaya-nozhevaya-kofemolka-krasnaya-bodum-bistro-euro-1830r"><span class="title">готовим в аэрогриле видео Электрическая ножевая кофемолка красная Bodum BISTRO 11160-294EURO</span><p>от <span class="price">1830</span> руб.</p></div></li>
						<li><img src="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" alt="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер" title="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер"><div class="box" page="bodum-bistro-euro-elektricheskiy-mikser-2740r"><span class="title">контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li><img src="photos/b61be34fe70b570a69e06c3fa76d4fff.jpeg" alt="мультиварка скороварка landlife Мясорубка Redmond RMG-1201" title="мультиварка скороварка landlife Мясорубка Redmond RMG-1201"><div class="box" page="myasorubka-redmond-rmg-3490r"><span class="title">мультиварка скороварка landlife Мясорубка Redmond RMG-1201</span><p>от <span class="price">3490</span> руб.</p></div></li>
						<li class="large"><img src="photos/cf93342053e92b125e6f4adca7e47bbe.jpeg" alt="мясорубка binatone Пароварка Tefal Simply Invents VC1017" title="мясорубка binatone Пароварка Tefal Simply Invents VC1017"><div class="box" page="parovarka-tefal-simply-invents-vc-3990r"><span class="title">мясорубка binatone Пароварка Tefal Simply Invents VC1017</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li class="large"><img src="photos/a5a944903050174bbca074a40d4e65fa.jpeg" alt="сравнить пароварки Соковыжималка Atlanta ATH-325" title="сравнить пароварки Соковыжималка Atlanta ATH-325"><div class="box" page="sokovyzhimalka-atlanta-ath-520r"><span class="title">сравнить пароварки Соковыжималка Atlanta ATH-325</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li class="large"><img src="photos/7b0ef0b12e5f66ec7582c9396725bc92.jpeg" alt="измельчитель сучьев Чайник электрический Vitek VT-1120" title="измельчитель сучьев Чайник электрический Vitek VT-1120"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1150r"><span class="title">измельчитель сучьев Чайник электрический Vitek VT-1120</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li><img src="photos/c737b54864f365f17a12fbd2acc0e1ac.jpeg" alt="фильтр для пылесоса thomas twin Чайник электрический Vitek VT-1134" title="фильтр для пылесоса thomas twin Чайник электрический Vitek VT-1134"><div class="box" page="chaynik-elektricheskiy-vitek-vt-900r"><span class="title">фильтр для пылесоса thomas twin Чайник электрический Vitek VT-1134</span><p>от <span class="price">900</span> руб.</p></div></li>
						<li><img src="photos/b4a95c8a4ccd80ea8dd5b10c9fcfd32c.jpeg" alt="форум микроволновая печь Чайник электрический Maxima MК-112" title="форум микроволновая печь Чайник электрический Maxima MК-112"><div class="box" page="chaynik-elektricheskiy-maxima-mk-790r"><span class="title">форум микроволновая печь Чайник электрический Maxima MК-112</span><p>от <span class="price">790</span> руб.</p></div></li>
						<li><img src="photos/296e5671e5f65168bbfd694532a2c751.jpeg" alt="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной" title="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-stalnoy-1850r"><span class="title">купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/08f854ed7155a317d7f9ee53182183f6.jpeg" alt="продажа мультиварок Парогенератор Lelit PS21" title="продажа мультиварок Парогенератор Lelit PS21"><div class="box" page="parogenerator-lelit-ps-12650r-2"><span class="title">продажа мультиварок Парогенератор Lelit PS21</span><p>от <span class="price">12650</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("myasorubka-redmond-rmg-4990r.php", 0, -4); if (file_exists("comments/myasorubka-redmond-rmg-4990r.php")) require_once "comments/myasorubka-redmond-rmg-4990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="myasorubka-redmond-rmg-4990r.php" method="post" onsubmit="return checkForm(this)">
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