<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-maxima-mkg-990r.php","кофеварка vitek 1513");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-maxima-mkg-990r.php", $nick, $comment);
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
		<title>кофеварка vitek 1513 Чайник электрический Maxima МК-G114  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофеварка vitek 1513, купить кофеварку krups, ремонт мясорубок мулинекс, сепараторный пылесос, каталог мясорубок, мясорубки в санкт петербурге, пылесос томас твин т1, описание пылесоса, хлебопечка германия, бамбуковая пароварка, фритюрница philips, пароварка газовая купить, фильтр для пылесоса самсунг, moulinex mk7003 мультиварка,  печенье через мясорубку рецепт">
		<meta name="description" content="кофеварка vitek 1513 Электрический чайник МК-G114 в стильном стеклянном корпусе легко вскипятит 1,5 л...">
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
						<a class="photo" href="photos/10b8ffb3398d2d300d11c2e37221e09e.jpeg" title="кофеварка vitek 1513 Чайник электрический Maxima МК-G114"><img src="photos/10b8ffb3398d2d300d11c2e37221e09e.jpeg" alt="кофеварка vitek 1513 Чайник электрический Maxima МК-G114" title="кофеварка vitek 1513 Чайник электрический Maxima МК-G114 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3250r.php"><img src="photos/50077cb721bf68554cfd92d5a37bd83d.jpeg" alt="купить кофеварку krups Микроволновая печь Vitek VT-1686" title="купить кофеварку krups Микроволновая печь Vitek VT-1686"></a><h2>Микроволновая печь Vitek VT-1686</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-moulinex-me-3820r.php"><img src="photos/dc407a1e2a485cfa91965baf93f3d5ba.jpeg" alt="ремонт мясорубок мулинекс Мясорубка электрическая Moulinex ME6051" title="ремонт мясорубок мулинекс Мясорубка электрическая Moulinex ME6051"></a><h2>Мясорубка электрическая Moulinex ME6051</h2></li>
							<li><a href="http://kitchentech.elitno.net/indukcionnaya-plita-kitfort-kt-3000r.php"><img src="photos/df340437daa709a0dfc3dc87ab1880bc.jpeg" alt="сепараторный пылесос Индукционная плита Kitfort KT-102" title="сепараторный пылесос Индукционная плита Kitfort KT-102"></a><h2>Индукционная плита Kitfort KT-102</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофеварка vitek 1513 Чайник электрический Maxima МК-G114</h1>
						<div class="tb"><p>Цена: от <span class="price">990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18605.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник МК-G114 в стильном стеклянном корпусе легко вскипятит 1,5 литра воды всего на пару минут, автоматически выключится при закипании или при недостаточном уровне воды.<br>Классический белый цвет, нагревательный диск из нержавеющей стали, градуированная шкала воды и оригинальная светодиодная индикация работы несомненно делают этот чайник прекрасным решением для любой кухни.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Мощность 1500-1800 Вт; <li>Емкость: 1,5 л; <li>Дисковый нагревательный элемент из нержавеющей стали; <li>Стеклянный корпус; <li>Автоматическое выключение при закипании; <li>Автоматическое отключение при недостаточном количестве воды; <li>Светодиодная индикация работы <li>Градуированная шкала уровня воды; <li>Открытие крышки одним нажатием. </li></ul><p><strong>Производитель: MAXIMA (Англия)</strong><br><strong>Гарантия: 1 год</strong></p> кофеварка vitek 1513</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/e07564a5fe71e20051b3b21f0806536a.jpeg" alt="каталог мясорубок Соковыжималка Moulinex JU32013E Tom Yam" title="каталог мясорубок Соковыжималка Moulinex JU32013E Tom Yam"><div class="box"><a href="http://kitchentech.elitno.net/sokovyzhimalka-moulinex-jue-tom-yam-1850r.php"><h3 class="title">каталог мясорубок Соковыжималка Moulinex JU32013E Tom Yam</h3><p>от <span class="price">1850</span> руб.</p></a></div></li>
						<li><img src="photos/54c54bed2f103aac514687168a05cb1f.jpeg" alt="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56" title="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56"><div class="box" page="toster-russell-hobbs-cottage-floral-art-2790r"><span class="title">мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li><img src="photos/58caa49e2e5c4bf06cfbf9dcdde29448.jpeg" alt="пылесос томас твин т1 Чайник электрический Vitek VT-1142" title="пылесос томас твин т1 Чайник электрический Vitek VT-1142"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1950r"><span class="title">пылесос томас твин т1 Чайник электрический Vitek VT-1142</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/cfef38cef319ef880fc0959319ecdb34.jpeg" alt="описание пылесоса Чайник электрический Vitek VT-1154" title="описание пылесоса Чайник электрический Vitek VT-1154"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1010r"><span class="title">описание пылесоса Чайник электрический Vitek VT-1154</span><p>от <span class="price">1010</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3fae48615963478f00e0c05f3baa485.jpeg" alt="хлебопечка германия Электрический чайник  Zauber R-380" title="хлебопечка германия Электрический чайник  Zauber R-380"><div class="box" page="elektricheskiy-chaynik-zauber-r-1830r"><span class="title">хлебопечка германия Электрический чайник  Zauber R-380</span><p>от <span class="price">1830</span> руб.</p></div></li>
						<li class="large"><img src="photos/3e5de65e23113a4dedb018c90159e3df.jpeg" alt="бамбуковая пароварка Чайник электрический  Vitesse VS-115 1,7л стальной" title="бамбуковая пароварка Чайник электрический  Vitesse VS-115 1,7л стальной"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-stalnoy-1360r"><span class="title">бамбуковая пароварка Чайник электрический  Vitesse VS-115 1,7л стальной</span><p>от <span class="price">1360</span> руб.</p></div></li>
						<li class="large"><img src="photos/9b828fe53dfca2c4781201b615fd512e.jpeg" alt="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий" title="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belosiniy-920r"><span class="title">фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/e754a7b0b0a20443433494bbd5f5ba8d.jpeg" alt="пароварка газовая купить Пылесборник Vitek VT-1851 5шт." title="пароварка газовая купить Пылесборник Vitek VT-1851 5шт."><div class="box" page="pylesbornik-vitek-vt-sht-190r"><span class="title">пароварка газовая купить Пылесборник Vitek VT-1851 5шт.</span><p>от <span class="price">190</span> руб.</p></div></li>
						<li><img src="photos/db8d0d28b1b05f19385269d855039f58.jpeg" alt="фильтр для пылесоса самсунг Пылесос с аквафильтром Vitek VT-1833" title="фильтр для пылесоса самсунг Пылесос с аквафильтром Vitek VT-1833"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-5580r"><span class="title">фильтр для пылесоса самсунг Пылесос с аквафильтром Vitek VT-1833</span><p>от <span class="price">5580</span> руб.</p></div></li>
						<li><img src="photos/63eadb71b95851c3e7f26e5885bd43ae.jpeg" alt="moulinex mk7003 мультиварка Пылесос с аквафильтром Vitek VT-1832" title="moulinex mk7003 мультиварка Пылесос с аквафильтром Vitek VT-1832"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-6900r"><span class="title">moulinex mk7003 мультиварка Пылесос с аквафильтром Vitek VT-1832</span><p>от <span class="price">6900</span> руб.</p></div></li>
						<li><img src="photos/5de427df249cca428db0963f8867058e.jpeg" alt="плов в мультиварке супра Утюг паровой Tefal Ultimate Autoclean FV9430E2" title="плов в мультиварке супра Утюг паровой Tefal Ultimate Autoclean FV9430E2"><div class="box" page="utyug-parovoy-tefal-ultimate-autoclean-fve-3300r"><span class="title">плов в мультиварке супра Утюг паровой Tefal Ultimate Autoclean FV9430E2</span><p>от <span class="price">3300</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-maxima-mkg-990r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-maxima-mkg-990r.php")) require_once "comments/chaynik-elektricheskiy-maxima-mkg-990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-maxima-mkg-990r.php" method="post" onsubmit="return checkForm(this)">
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