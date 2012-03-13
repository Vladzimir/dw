<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("ruchnoy-blender-v-russell-hobbs-allure-art-3490r.php","вакуумный миксер");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("ruchnoy-blender-v-russell-hobbs-allure-art-3490r.php", $nick, $comment);
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
		<title>вакуумный миксер Ручной блендер 3в1 Russell Hobbs Allure, арт. 18274-56  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="вакуумный миксер, panasonic пароварка, пылесос bosch logo, соковыжималки выбор, купить кофеварку krups, купить кофемашину bosch, мясорубки в санкт петербурге, фильтр для пылесоса thomas twin, хлебопечка panasonic 256, мультиварка киев купить, пароварки в минске, сварить кофе в кофеварке, мультиварка мэджик пот, кашеварка panasonic,  аэрогриль vitesse vs 408">
		<meta name="description" content="вакуумный миксер Ручной блендер Allure, мощностью 650 Вт, полностью выполнен из металла, что  обе...">
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
						<a class="photo" href="photos/8eb90b2c93f90da38a9a78776cb9380e.jpeg" title="вакуумный миксер Ручной блендер 3в1 Russell Hobbs Allure, арт. 18274-56"><img src="photos/8eb90b2c93f90da38a9a78776cb9380e.jpeg" alt="вакуумный миксер Ручной блендер 3в1 Russell Hobbs Allure, арт. 18274-56" title="вакуумный миксер Ручной блендер 3в1 Russell Hobbs Allure, арт. 18274-56 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/filtry-bumazhnye-brigitta-razmer-sht-korichnevye-90r.php"><img src="photos/3f307bdf7da72b9732c65cb87ddaad55.jpeg" alt="panasonic пароварка Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые" title="panasonic пароварка Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые"></a><h2>Фильтры бумажные Brigitta, размер 2, 100 шт., коричневые</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-bistro-42000r.php"><img src="photos/dd8035ed578a002d9a18bf964fac9dd9.jpeg" alt="пылесос bosch logo Эспрессо-кофемашина Melitta Caffeo Bistro (4.0008.66)" title="пылесос bosch logo Эспрессо-кофемашина Melitta Caffeo Bistro (4.0008.66)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Bistro (4.0008.66)</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-solomilk-chernaya-26999r.php"><img src="photos/3c4c438093f284e24176255dd4b7658c.jpeg" alt="соковыжималки выбор Автоматическая кофемашина Melitta CAFFEO Solo&milk, черная" title="соковыжималки выбор Автоматическая кофемашина Melitta CAFFEO Solo&milk, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO Solo&milk, черная</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>вакуумный миксер Ручной блендер 3в1 Russell Hobbs Allure, арт. 18274-56</h1>
						<div class="tb"><p>Цена: от <span class="price">3490</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21522.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Ручной блендер Allure, мощностью 650 Вт, полностью выполнен из металла, что  обеспечивает надежность и долговечность устройства. Управление механическое,  восемь возможных скоростей работы. В комплекте венчик для взбивания,  измельчитель и мерный стакан.</p><p><strong>Характеристики:</strong></p><ul><li>Тип: погружной;</li><li>Мощность: 650 Вт;</li><li>Управление механическое;</li><li>Число скоростей: 8;</li><li>Измельчитель: объем 1 л.;</li><li>Мерный стакан: объем 1 л.;</li><li>Венчик для взбивания</li><li>Материал корпуса: металл;</li><li>Материал погружной части: металл.</li></ul><p><strong>Производитель:</strong><strong>Russell</strong><strong>Hobbs (Англия)</strong></p> вакуумный миксер</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/50077cb721bf68554cfd92d5a37bd83d.jpeg" alt="купить кофеварку krups Микроволновая печь Vitek VT-1686" title="купить кофеварку krups Микроволновая печь Vitek VT-1686"><div class="box" page="mikrovolnovaya-pech-vitek-vt-3250r"><span class="title">купить кофеварку krups Микроволновая печь Vitek VT-1686</span><p>от <span class="price">3250</span> руб.</p></div></li>
						<li><img src="photos/60dff82992355ef436c4e763a78c1f99.jpeg" alt="купить кофемашину bosch Соковыжималка для цитрусовых" title="купить кофемашину bosch Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-760r"><span class="title">купить кофемашину bosch Соковыжималка для цитрусовых</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/54c54bed2f103aac514687168a05cb1f.jpeg" alt="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56" title="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56"><div class="box" page="toster-russell-hobbs-cottage-floral-art-2790r"><span class="title">мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li><img src="photos/c737b54864f365f17a12fbd2acc0e1ac.jpeg" alt="фильтр для пылесоса thomas twin Чайник электрический Vitek VT-1134" title="фильтр для пылесоса thomas twin Чайник электрический Vitek VT-1134"><div class="box" page="chaynik-elektricheskiy-vitek-vt-900r"><span class="title">фильтр для пылесоса thomas twin Чайник электрический Vitek VT-1134</span><p>от <span class="price">900</span> руб.</p></div></li>
						<li class="large"><img src="photos/f5d552f595352df6a881129a694e04b1.jpeg" alt="хлебопечка panasonic 256 Чайник электрический Redmond RK-M112" title="хлебопечка panasonic 256 Чайник электрический Redmond RK-M112"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-990r"><span class="title">хлебопечка panasonic 256 Чайник электрический Redmond RK-M112</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/1b3cfce3fc4c2602ab4206bda1961e7d.jpeg" alt="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный" title="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belolazurnyy-920r"><span class="title">мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li class="large"><img src="photos/70e82a3bba6b14786d891ffcea703881.jpeg" alt="пароварки в минске Электрический чайник Atlanta АТН-611" title="пароварки в минске Электрический чайник Atlanta АТН-611"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-700r"><span class="title">пароварки в минске Электрический чайник Atlanta АТН-611</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/0e343e4ed2bc192a59c6c92535860524.jpeg" alt="сварить кофе в кофеварке Электрический чайник Atlanta АТН-633" title="сварить кофе в кофеварке Электрический чайник Atlanta АТН-633"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-750r"><span class="title">сварить кофе в кофеварке Электрический чайник Atlanta АТН-633</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li><img src="photos/51ac41098d88811e7ab3241e4fa31a8c.jpeg" alt="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA" title="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aaahcuc-petgaaa-300r"><span class="title">мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/f9a55510217a53f128abac36303fad21.jpeg" alt="кашеварка panasonic Пылесос Dyson all floors DC 22" title="кашеварка panasonic Пылесос Dyson all floors DC 22"><div class="box" page="pylesos-dyson-all-floors-dc-26990r"><span class="title">кашеварка panasonic Пылесос Dyson all floors DC 22</span><p>от <span class="price">26990</span> руб.</p></div></li>
						<li><img src="photos/9ae1fe09fe7308adffccf86c925a5fca.jpeg" alt="мясорубка 6061 Пылесос Thomas Inox 20 Professional" title="мясорубка 6061 Пылесос Thomas Inox 20 Professional"><div class="box" page="pylesos-thomas-inox-professional-6220r"><span class="title">мясорубка 6061 Пылесос Thomas Inox 20 Professional</span><p>от <span class="price">6220</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("ruchnoy-blender-v-russell-hobbs-allure-art-3490r.php", 0, -4); if (file_exists("comments/ruchnoy-blender-v-russell-hobbs-allure-art-3490r.php")) require_once "comments/ruchnoy-blender-v-russell-hobbs-allure-art-3490r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="ruchnoy-blender-v-russell-hobbs-allure-art-3490r.php" method="post" onsubmit="return checkForm(this)">
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