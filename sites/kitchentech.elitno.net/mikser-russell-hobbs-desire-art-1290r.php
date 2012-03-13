<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikser-russell-hobbs-desire-art-1290r.php","рис на пару в пароварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikser-russell-hobbs-desire-art-1290r.php", $nick, $comment);
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
		<title>рис на пару в пароварке Миксер Russell Hobbs Desire, арт. 18507-56  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="рис на пару в пароварке, блендер bosch msm 6150, компактная микроволновая печь, язык в аэрогриле, тесто для мантов в хлебопечке, чалдовые кофеварки, тольятти мультиварка, распродажа пылесосов, измельчитель хэппи чоп, видео мясорубки мулинекс, купить хлебопечку мулинекс, как разобрать кофемолку, какую купить мясорубку, пылесосы в гродно,  пароварка chicco">
		<meta name="description" content="рис на пару в пароварке Современный миксер Desire, мощностью 300 Вт, выполнен из прочного черного пласти...">
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
						<a class="photo" href="photos/7e647600a38b01c48fb301e5b6c41520.jpeg" title="рис на пару в пароварке Миксер Russell Hobbs Desire, арт. 18507-56"><img src="photos/7e647600a38b01c48fb301e5b6c41520.jpeg" alt="рис на пару в пароварке Миксер Russell Hobbs Desire, арт. 18507-56" title="рис на пару в пароварке Миксер Russell Hobbs Desire, арт. 18507-56 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/ruchnoy-blender-russell-hobbs-allure-art-2790r.php"><img src="photos/422d665429610f080e15aaf4bb75409d.jpeg" alt="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56" title="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56"></a><h2>Ручной блендер Russell Hobbs Allure, арт. 18273-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-3780r.php"><img src="photos/a7593a9ae0c3505a2632ee9e30dcbbe0.jpeg" alt="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO" title="компактная микроволновая печь Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO"></a><h2>Электрический блендер с аксессуарами Bodum BISTRO K11179-01EURO</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-solo-pure-white-28530r.php"><img src="photos/eb4618ce7491ec77cbaa3b4b7dd675cb.jpeg" alt="язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)" title="язык в аэрогриле Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Solo Pure White (4.0009.91)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>рис на пару в пароварке Миксер Russell Hobbs Desire, арт. 18507-56</h1>
						<div class="tb"><p>Цена: от <span class="price">1290</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21521.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Современный миксер Desire, мощностью 300 Вт, выполнен из прочного черного пластика.  Миксер Desire станет незаменимым помощником на Вашей кухне! Пять режимов  скоростей и режим турбо. Две насадки в комплекте (венчик для взбивания и крюки  для теста). Управление ручное. Предусмотрена кнопка отсоединения насадок.</p><p><strong>Характеристики:</strong></p><ul><li>Тип: ручной;</li><li>Мощность: 300 Вт;</li><li>Число скоростей: 5;</li><li>Режим турбо;</li><li>Количество насадок: 2;</li><li>Венчик для взбивания;</li><li>Крюки для теста;</li><li>Материал корпуса: пластик;</li><li>Кнопка отсоединения насадок.</li></ul><p><strong>Производитель:</strong><strong>Russell</strong><strong>Hobbs (Англия)</strong></p> рис на пару в пароварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/26f6130b768cf990fa9fa11bd1f16cb3.jpeg" alt="тесто для мантов в хлебопечке Автоматическая кофемашина Melitta CAFFEO Solo&milk, серебристая" title="тесто для мантов в хлебопечке Автоматическая кофемашина Melitta CAFFEO Solo&milk, серебристая"><div class="box" page="avtomaticheskaya-kofemashina-melitta-caffeo-solomilk-serebristaya-26999r"><span class="title">тесто для мантов в хлебопечке Автоматическая кофемашина Melitta CAFFEO Solo&milk, серебристая</span><p>от <span class="price">26999</span> руб.</p></div></li>
						<li><img src="photos/a59c30a3b2d8957f43e9fce5f7b6e0f5.jpeg" alt="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная" title="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная"><div class="box" page="avtomaticheskaya-kofemashina-melitta-caffeo-gourmet-chernaya-43999r"><span class="title">чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная</span><p>от <span class="price">43999</span> руб.</p></div></li>
						<li><img src="photos/833ae77791168206a3b151985fda9a0b.jpeg" alt="тольятти мультиварка Кофемолка Maxima MCG-0316" title="тольятти мультиварка Кофемолка Maxima MCG-0316"><div class="box" page="kofemolka-maxima-mcg-650r"><span class="title">тольятти мультиварка Кофемолка Maxima MCG-0316</span><p>от <span class="price">650</span> руб.</p></div></li>
						<li><img src="photos/7b88076a90f90c4718597a4ab977cb0a.jpeg" alt="распродажа пылесосов Микроволновая печь Vitek VT-1682" title="распродажа пылесосов Микроволновая печь Vitek VT-1682"><div class="box" page="mikrovolnovaya-pech-vitek-vt-3550r"><span class="title">распродажа пылесосов Микроволновая печь Vitek VT-1682</span><p>от <span class="price">3550</span> руб.</p></div></li>
						<li class="large"><img src="photos/d4a3d850ff4d12f0511b4f02c450fad7.jpeg" alt="измельчитель хэппи чоп Микроволновая печь Vitek VT-1692" title="измельчитель хэппи чоп Микроволновая печь Vitek VT-1692"><div class="box" page="mikrovolnovaya-pech-vitek-vt-2870r"><span class="title">измельчитель хэппи чоп Микроволновая печь Vitek VT-1692</span><p>от <span class="price">2870</span> руб.</p></div></li>
						<li class="large"><img src="photos/4e7490247492c7ab40236e7400fed0df.jpeg" alt="видео мясорубки мулинекс Мультиварка Redmond RMC-M4503" title="видео мясорубки мулинекс Мультиварка Redmond RMC-M4503"><div class="box" page="multivarka-redmond-rmcm-2990r"><span class="title">видео мясорубки мулинекс Мультиварка Redmond RMC-M4503</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li class="large"><img src="photos/42b635368f5179e970d08ec7c08cbc10.jpeg" alt="купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей" title="купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей"><div class="box" page="multivarka-maruchi-rwfz-v-komplekte-s-keramicheskoy-kastryuley-4500r"><span class="title">купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/dd1f2c3f8afff6bfc6d7833a3fe581f3.jpeg" alt="как разобрать кофемолку Чайник электрический  Vitesse VS-108 1,7л" title="как разобрать кофемолку Чайник электрический  Vitesse VS-108 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1970r"><span class="title">как разобрать кофемолку Чайник электрический  Vitesse VS-108 1,7л</span><p>от <span class="price">1970</span> руб.</p></div></li>
						<li><img src="photos/b36e4518839f5476ba18891a0416843e.jpeg" alt="какую купить мясорубку Чайник электрический  Vitesse VS-110 1,7л" title="какую купить мясорубку Чайник электрический  Vitesse VS-110 1,7л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1950r"><span class="title">какую купить мясорубку Чайник электрический  Vitesse VS-110 1,7л</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/759cc36b06e68665280825b9c45b38c7.jpeg" alt="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO" title="пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO"><div class="box" page="elektricheskiy-chaynik-l-krasnyy-bodum-bistro-euro-2270r"><span class="title">пылесосы в гродно Электрический чайник 1л красный Bodum BISTRO 11154-294EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li><img src="photos/dcfd8cc55439cd877d074c0e060c75d4.jpeg" alt="качество пылесосов Пылесос Vitek VT-1809 красный" title="качество пылесосов Пылесос Vitek VT-1809 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-2600r"><span class="title">качество пылесосов Пылесос Vitek VT-1809 красный</span><p>от <span class="price">2600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikser-russell-hobbs-desire-art-1290r.php", 0, -4); if (file_exists("comments/mikser-russell-hobbs-desire-art-1290r.php")) require_once "comments/mikser-russell-hobbs-desire-art-1290r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikser-russell-hobbs-desire-art-1290r.php" method="post" onsubmit="return checkForm(this)">
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