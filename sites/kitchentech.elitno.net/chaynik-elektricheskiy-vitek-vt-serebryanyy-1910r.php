<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r.php","эльдорадо миксер");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r.php", $nick, $comment);
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
		<title>эльдорадо миксер Чайник электрический Vitek VT-1138 серебряный  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="эльдорадо миксер, хорошая кухня мультиварка, контрольная закупка пылесос, соковыжималка ангел, кухня микроволновой печи, самоочистка аэрогриля, каша на воде в мультиварке, измельчитель kenwood, mini пылесос, хлебопечка кефир, горошница в мультиварке, утюг braun 18895, мультиварка телефункен, пылесос компрессор отзывы,  многоразовые мешки для пылесоса">
		<meta name="description" content="эльдорадо миксер Чайник электрический Vitek VT-1138 в стильном металлическом корпусе на дисковой ...">
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
						<a class="photo" href="photos/7c9f70f739cded90e6e6da5bcbc9e960.jpeg" title="эльдорадо миксер Чайник электрический Vitek VT-1138 серебряный"><img src="photos/7c9f70f739cded90e6e6da5bcbc9e960.jpeg" alt="эльдорадо миксер Чайник электрический Vitek VT-1138 серебряный" title="эльдорадо миксер Чайник электрический Vitek VT-1138 серебряный -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-dd-3350r.php"><img src="photos/b48d978d3a6e9e560ddd3f28a86214f1.jpeg" alt="хорошая кухня мультиварка Блендер погружной Moulinex DD906143" title="хорошая кухня мультиварка Блендер погружной Moulinex DD906143"></a><h2>Блендер погружной Moulinex DD906143</h2></li>
							<li><a href="http://kitchentech.elitno.net/bodum-bistro-euro-elektricheskiy-mikser-2740r.php"><img src="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" alt="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер" title="контрольная закупка пылесос Bodum BISTRO 11151-01EURO Электрический миксер"></a><h2>Bodum BISTRO 11151-01EURO Электрический миксер</h2></li>
							<li><a href="http://kitchentech.elitno.net/parovarka-maxima-mst-1290r.php"><img src="photos/21689be9dc7c8e66c7cb248c7b6f5f86.jpeg" alt="соковыжималка ангел Пароварка Maxima MST-1102" title="соковыжималка ангел Пароварка Maxima MST-1102"></a><h2>Пароварка Maxima MST-1102</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>эльдорадо миксер Чайник электрический Vitek VT-1138 серебряный</h1>
						<div class="tb"><p>Цена: от <span class="price">1910</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8397.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Чайник электрический Vitek VT-1138</b> в стильном металлическом корпусе на дисковой подставке, со скрытым нагревательным элементом внутри – это прекрасное сочетание цены и качества. Модель имеет съемный фильтр от накипи, а также оснащена системой автоотключения при закипании воды и защитой от перегрева. Объем резервуара 1,7л.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 1850-2200Вт </li><li>Нагревательный элемент: скрытый </li><li>Поворачивающийся корпус: 360° </li><li>Объем: 1,7л </li><li>Материал корпуса: нержавеющая сталь </li><li>Фильтр: съемный фильтр от накипи </li><li>Индикатор уровня воды: есть </li><li>Автоотключение при закипании воды: есть </li><li>Защита от перегрева: есть </li><li>Световой индикатор работы: есть </li><li>Место для хранения шнура: есть</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> эльдорадо миксер</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d13e770b0f20ea7295762dcccfd88ddd.jpeg" alt="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда" title="кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда"><div class="box" page="elektroplitka-indukcionnaya-maxima-mic-posuda-1790r"><span class="title">кухня микроволновой печи Электроплитка индукционная Maxima MIC-0146 + Посуда</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/948f1a9b44ef51dbbf106577d1753c25.jpeg" alt="самоочистка аэрогриля Соковыжималка" title="самоочистка аэрогриля Соковыжималка"><div class="box" page="sokovyzhimalka-3320r"><span class="title">самоочистка аэрогриля Соковыжималка</span><p>от <span class="price">3320</span> руб.</p></div></li>
						<li><img src="photos/480398a0d650a7b1a9641ca193d5ca18.jpeg" alt="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л" title="каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-2350r"><span class="title">каша на воде в мультиварке Чайник электрический Vitek VT-1156 1,7 л</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li><img src="photos/d221c08cbc7532258ec107ff315e3516.jpeg" alt="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)" title="измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)"><div class="box" page="personalnyy-dozimetr-dkgd-«grach»-attestovan-v-mchs-rossii-20500r"><span class="title">измельчитель kenwood Персональный дозиметр ДКГ-03Д «Грач» (аттестован в МЧС России)</span><p>от <span class="price">20500</span> руб.</p></div></li>
						<li class="large"><img src="photos/28da988d46134dfe1236e7598e0579cc.jpeg" alt="mini пылесос Турбощетка Redmond  RV-308" title="mini пылесос Турбощетка Redmond  RV-308"><div class="box" page="turboschetka-redmond-rv-390r"><span class="title">mini пылесос Турбощетка Redmond  RV-308</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li class="large"><img src="photos/54b10604c01ad075cc189094150a1393.jpeg" alt="хлебопечка кефир Щетка с мягкой щетиной в упаковке Dyson Soft Dusting Brush Assy Retail NP" title="хлебопечка кефир Щетка с мягкой щетиной в упаковке Dyson Soft Dusting Brush Assy Retail NP"><div class="box" page="schetka-s-myagkoy-schetinoy-v-upakovke-dyson-soft-dusting-brush-assy-retail-np-1390r"><span class="title">хлебопечка кефир Щетка с мягкой щетиной в упаковке Dyson Soft Dusting Brush Assy Retail NP</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li class="large"><img src="photos/6f1dc0aa11d1eda2d816fefb2df4a739.jpeg" alt="горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2" title="горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2"><div class="box" page="pylesos-moyuschiy-thomas-hygiene-plus-t-19460r"><span class="title">горошница в мультиварке Пылесос моющий Thomas Hygiene Plus T2</span><p>от <span class="price">19460</span> руб.</p></div></li>
						<li><img src="photos/6a73d6f5ed044b39207ab31ca41595f1.jpeg" alt="утюг braun 18895 Пылесос моющий Thomas Bravo 20" title="утюг braun 18895 Пылесос моющий Thomas Bravo 20"><div class="box" page="pylesos-moyuschiy-thomas-bravo-8050r"><span class="title">утюг braun 18895 Пылесос моющий Thomas Bravo 20</span><p>от <span class="price">8050</span> руб.</p></div></li>
						<li><img src="photos/2e3efb1596b4e1a5bf1803f0fd03710f.jpeg" alt="мультиварка телефункен Пылесос Thomas Inox 30 Professional" title="мультиварка телефункен Пылесос Thomas Inox 30 Professional"><div class="box" page="pylesos-thomas-inox-professional-7740r"><span class="title">мультиварка телефункен Пылесос Thomas Inox 30 Professional</span><p>от <span class="price">7740</span> руб.</p></div></li>
						<li><img src="photos/28ebbb0322a7eac61313d0d41391d394.jpeg" alt="пылесос компрессор отзывы Пылесос с аквафильтром Vitek VT-1832 синий" title="пылесос компрессор отзывы Пылесос с аквафильтром Vitek VT-1832 синий"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-siniy-6900r"><span class="title">пылесос компрессор отзывы Пылесос с аквафильтром Vitek VT-1832 синий</span><p>от <span class="price">6900</span> руб.</p></div></li>
						<li><img src="photos/cd428dd5a0d9bc6681acf973ed19ada0.jpeg" alt="какие есть хлебопечки Утюг Atlanta ATH-470" title="какие есть хлебопечки Утюг Atlanta ATH-470"><div class="box" page="utyug-atlanta-ath-520r-2"><span class="title">какие есть хлебопечки Утюг Atlanta ATH-470</span><p>от <span class="price">520</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r.php")) require_once "comments/chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r.php" method="post" onsubmit="return checkForm(this)">
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