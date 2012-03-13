<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-moulinex-by-l-2650r.php","миксеры в москве");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-moulinex-by-l-2650r.php", $nick, $comment);
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
		<title>миксеры в москве Чайник электрический Moulinex BY5200 2 л  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="миксеры в москве, электрочайники из нержавейки, блендер bosch msm 6150, электрочайник braun, tupperware миксер, джем в хлебопечке рецепт, мясорубка binatone, пылесосы с аквафильтром soteco, мясорубки в санкт петербурге, делонги кофемашина примадонна, запчасти пылесос томас, индукционная плита вредна, соковыжималка сатурн, рецепты для мультиварки dex,  кофемашины verobar">
		<meta name="description" content="миксеры в москве Электрический чайник Moulinex вскипятит большой объем воды за считанные секунды....">
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
						<a class="photo" href="photos/9fa2c66d96aa7d709453ef3a635c60c2.jpeg" title="миксеры в москве Чайник электрический Moulinex BY5200 2 л"><img src="photos/9fa2c66d96aa7d709453ef3a635c60c2.jpeg" alt="миксеры в москве Чайник электрический Moulinex BY5200 2 л" title="миксеры в москве Чайник электрический Moulinex BY5200 2 л -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2080r.php"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="электрочайники из нержавейки Блендер Redmond RHB-2907" title="электрочайники из нержавейки Блендер Redmond RHB-2907"></a><h2>Блендер Redmond RHB-2907</h2></li>
							<li><a href="http://kitchentech.elitno.net/ruchnoy-blender-russell-hobbs-allure-art-2790r.php"><img src="photos/422d665429610f080e15aaf4bb75409d.jpeg" alt="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56" title="блендер bosch msm 6150 Ручной блендер Russell Hobbs Allure, арт. 18273-56"></a><h2>Ручной блендер Russell Hobbs Allure, арт. 18273-56</h2></li>
							<li><a href="http://kitchentech.elitno.net/chopper-vitek-vt-1790r.php"><img src="photos/ab6d4d55ecf241ffc9d0ef81c9ea44bc.jpeg" alt="электрочайник braun Чоппер Vitek VT-1641" title="электрочайник braun Чоппер Vitek VT-1641"></a><h2>Чоппер Vitek VT-1641</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>миксеры в москве Чайник электрический Moulinex BY5200 2 л</h1>
						<div class="tb"><p>Цена: от <span class="price">2650</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_12024.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Электрический чайник Moulinex</b> вскипятит большой объем воды за считанные секунды. Он обладает мощностью 3000 Вт, рассчитан на 2 л, снабжен скрытым нагревательным элементом, защищенным диском из нержавеющей стали, что сокращает образование накипи и продлевает срок службы устройства. Центральное включение и вращение на подставке на 360° позволяет легко установить прибор в любом положении.</p><p>Чайник не только прост и удобен в использовании, но и красиво выглядит: он станет отличным дополнением к любому интерьеру. Модель имеет две шкалы уровня жидкости, световую индикацию в процессе работы, оснащена съемным фильтром от накипи. Корпус прибора выполнен из полированной нержавеющей стали, отсек для хранения шнура расположен в подставке.</p><p><b>Характеристики:</b></p><ul type=disc><li>Мощность: 3000 Вт; <li>Объем: 2 л; <li>Тип нагревательного элемента: закрытая спираль (центральный контакт); <li>Вращение на подставке 360°; <li>Съемный фильтр от накипи; <li>2 индикатора уровня воды; <li>Подсветка воды в процессе работы; <li>Клавиша вкл/выкл со световым индикатором; <li>Корпус, подставка, крышка из полированной нержавеющей стали; <li>Автоматическое открывание крышки; <li>Автоотключение при закипании; <li>Блокировка крышки; <li>Отсек для шнура в подставке.</li></ul><p><b>Производитель:</b> Moulinex.</p><p><b>Страна:</b> Франция.</p><p><b>Гарантия:</b> 2 года.</p> миксеры в москве</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/701c1fd8791de13ef3fc3b11f131d4a2.jpeg" alt="tupperware миксер Вспениватель Melitta Cremio белый" title="tupperware миксер Вспениватель Melitta Cremio белый"><div class="box" page="vspenivatel-melitta-cremio-belyy-4155r"><span class="title">tupperware миксер Вспениватель Melitta Cremio белый</span><p>от <span class="price">4155</span> руб.</p></div></li>
						<li><img src="photos/8dac9aeadde6a6d95b71abb890265199.jpeg" alt="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB" title="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB"><div class="box" page="mikser-atlanta-ath-wb-630r"><span class="title">джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/cf93342053e92b125e6f4adca7e47bbe.jpeg" alt="мясорубка binatone Пароварка Tefal Simply Invents VC1017" title="мясорубка binatone Пароварка Tefal Simply Invents VC1017"><div class="box" page="parovarka-tefal-simply-invents-vc-3990r"><span class="title">мясорубка binatone Пароварка Tefal Simply Invents VC1017</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/03d6a39216ccd97c8a662a35f965b076.jpeg" alt="пылесосы с аквафильтром soteco Соковыжималка VITEK VT-1611" title="пылесосы с аквафильтром soteco Соковыжималка VITEK VT-1611"><div class="box" page="sokovyzhimalka-vitek-vt-600r"><span class="title">пылесосы с аквафильтром soteco Соковыжималка VITEK VT-1611</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li class="large"><img src="photos/54c54bed2f103aac514687168a05cb1f.jpeg" alt="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56" title="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56"><div class="box" page="toster-russell-hobbs-cottage-floral-art-2790r"><span class="title">мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li class="large"><img src="photos/46a5120709bf99f581bc7ea7569bd649.png" alt="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902" title="делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902"><div class="box" page="hlebopech-redmond-rbmm-3990r"><span class="title">делонги кофемашина примадонна Хлебопечь Redmond RBM-M1902</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li class="large"><img src="photos/140994d3679b87017beef134272baa56.jpeg" alt="запчасти пылесос томас Чайник дисковый керамический 1,7л, цветы Zauber ECO-340" title="запчасти пылесос томас Чайник дисковый керамический 1,7л, цветы Zauber ECO-340"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-cvety-zauber-eco-1790r"><span class="title">запчасти пылесос томас Чайник дисковый керамический 1,7л, цветы Zauber ECO-340</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/f508d547808db2bce707d6b2135eb926.jpeg" alt="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter" title="индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-prestige-s-aquafilter-10800r"><span class="title">индукционная плита вредна Пылесос моющий Thomas Prestige 20 S Aquafilter</span><p>от <span class="price">10800</span> руб.</p></div></li>
						<li><img src="photos/c760072d30fa7e68aaaf26403c36f72a.jpeg" alt="соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter" title="соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter"><div class="box" page="pylesos-thomas-genius-s-aquafilter-10840r"><span class="title">соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter</span><p>от <span class="price">10840</span> руб.</p></div></li>
						<li><img src="photos/1eb6f76381a5fb4cda553623ce90ead6.jpeg" alt="рецепты для мультиварки dex Пылесос с аквафильтром Vitek VT-1832 красный" title="рецепты для мультиварки dex Пылесос с аквафильтром Vitek VT-1832 красный"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-krasnyy-6900r"><span class="title">рецепты для мультиварки dex Пылесос с аквафильтром Vitek VT-1832 красный</span><p>от <span class="price">6900</span> руб.</p></div></li>
						<li><img src="photos/b81f4815d2a9df868070af2d7b1533ee.jpeg" alt="парогенератор aeg Утюг Vitek VT-1209" title="парогенератор aeg Утюг Vitek VT-1209"><div class="box" page="utyug-vitek-vt-1100r"><span class="title">парогенератор aeg Утюг Vitek VT-1209</span><p>от <span class="price">1100</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-moulinex-by-l-2650r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-moulinex-by-l-2650r.php")) require_once "comments/chaynik-elektricheskiy-moulinex-by-l-2650r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-moulinex-by-l-2650r.php" method="post" onsubmit="return checkForm(this)">
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