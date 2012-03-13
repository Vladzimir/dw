<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("multivarka-elektricheskaya-atlanta-atn-3490r.php","хлебопечка кенвуд вм 250");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("multivarka-elektricheskaya-atlanta-atn-3490r.php", $nick, $comment);
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
		<title>хлебопечка кенвуд вм 250 Мультиварка электрическая ATLANTA АТН-592  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка кенвуд вм 250, пылесосы в гродно, мотор пылесоса самсунг, отзывы мультиварка kromax, smart cleaner робот пылесос, мясорубки в санкт петербурге, электрические чайники скарлет, пылесос thomas s1, аэрогриль pag 1205d, книга рецептов для хлебопечки, фритюрница philips, кофеварка vitek 1513, какая мощность у пылесоса, мультиварки в минске,  хлебопечка клатроник">
		<meta name="description" content="хлебопечка кенвуд вм 250 Мультиварка ATLANTA АТН-592 – это модель высочайшего класса, совмещающая в себе ...">
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
						<a class="photo" href="photos/50ba0f1ba21fa51f038f164ecd16fe2c.jpeg" title="хлебопечка кенвуд вм 250 Мультиварка электрическая ATLANTA АТН-592"><img src="photos/50ba0f1ba21fa51f038f164ecd16fe2c.jpeg" alt="хлебопечка кенвуд вм 250 Мультиварка электрическая ATLANTA АТН-592" title="хлебопечка кенвуд вм 250 Мультиварка электрическая ATLANTA АТН-592 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-vitek-vt-850r.php"><img src="photos/5b1e4d04b939e3a2c1573152ff3f29b5.jpeg" alt="пылесосы в гродно Блендер Vitek VT-1452" title="пылесосы в гродно Блендер Vitek VT-1452"></a><h2>Блендер Vitek VT-1452</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektroplitka-maxima-mes-550r.php"><img src="photos/99f24579a4151d885006823a70346b26.jpeg" alt="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1" title="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1"></a><h2>Электроплитка Maxima MES-0152-1</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-vitek-vt-2950r.php"><img src="photos/6fe5b4190ebaf728c4d5f2d1788f453b.jpeg" alt="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670" title="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670"></a><h2>Мясорубка электрическая Vitek VT-1670</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка кенвуд вм 250 Мультиварка электрическая ATLANTA АТН-592</h1>
						<div class="tb"><p>Цена: от <span class="price">3490</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20672.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Мультиварка ATLANTA АТН-592 – это модель высочайшего класса, совмещающая в себе широчайшую функциональность и изящный демократичный дизайн. Данная модель обладает значительной вместимостью (5 литров), что позволит готовить еду на целую семью, а функция защиты от перегрева гарантирует безопасность работы устройства. Внешне электрическая мультиварка ATLANTA АТН-592 выполнена в строгом и в то же время изящном стиле – с сочетанием черного и темно-серого цветов. Безусловно, эта модель станет не только незаменимым помощником для хозяйки на кухне, но и настоящим украшением интерьера. </p><p><b>Характеристики:</b></p><ul type=disc><li>Тип: электрическая; <li>Вместимость: 5 л.; <li>Полезная вместимость чаши: 1,8 л.; <li>Мощность: 860 Вт.; <li>Защита от перегрева; <li>230V; 50Hz <li>Цвет: серый/черный; </li> <li>Размеры: 43 x 33 x 28,5 см; <li>Вес 5,12 кг.</li>  </ul><p><b>Производитель: США</b></p> хлебопечка кенвуд вм 250</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b6ecb843a4a7a272dfd585351250b4a8.jpeg" alt="smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901" title="smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901"><div class="box" page="sokovyzhimalka-redmond-rj-m-4390r"><span class="title">smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901</span><p>от <span class="price">4390</span> руб.</p></div></li>
						<li><img src="photos/54c54bed2f103aac514687168a05cb1f.jpeg" alt="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56" title="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56"><div class="box" page="toster-russell-hobbs-cottage-floral-art-2790r"><span class="title">мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li><img src="photos/c48020be535a5770584db54e47af400d.jpeg" alt="электрические чайники скарлет Чайник электрический Vitek VT-1115 желтый" title="электрические чайники скарлет Чайник электрический Vitek VT-1115 желтый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-zheltyy-1090r"><span class="title">электрические чайники скарлет Чайник электрический Vitek VT-1115 желтый</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/c73e008984140d52a15fd324bddeb59f.jpeg" alt="пылесос thomas s1 Чайник электрический Vitek VT-1141" title="пылесос thomas s1 Чайник электрический Vitek VT-1141"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r-2"><span class="title">пылесос thomas s1 Чайник электрический Vitek VT-1141</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/823ffa497493bf85b62e76ddeebc1296.jpeg" alt="аэрогриль pag 1205d Чайник электрический Redmond  RK-М117 white" title="аэрогриль pag 1205d Чайник электрический Redmond  RK-М117 white"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-white-1190r"><span class="title">аэрогриль pag 1205d Чайник электрический Redmond  RK-М117 white</span><p>от <span class="price">1190</span> руб.</p></div></li>
						<li class="large"><img src="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" alt="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118" title="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1999r"><span class="title">книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118</span><p>от <span class="price">1999</span> руб.</p></div></li>
						<li class="large"><img src="photos/9b828fe53dfca2c4781201b615fd512e.jpeg" alt="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий" title="фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belosiniy-920r"><span class="title">фритюрница philips Чайник электрический  Vitesse VS-137 1,7л бело-синий</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/565e52ebc108aee0062c9aab0f314cab.jpeg" alt="кофеварка vitek 1513 Парогенератор Lelit PG024N" title="кофеварка vitek 1513 Парогенератор Lelit PG024N"><div class="box" page="parogenerator-lelit-pgn-16700r"><span class="title">кофеварка vitek 1513 Парогенератор Lelit PG024N</span><p>от <span class="price">16700</span> руб.</p></div></li>
						<li><img src="photos/eb7760a68b0b3e85f39c2160100a5731.jpeg" alt="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008" title="какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008"><div class="box" page="moyuschiy-koncentrat-thomas-profloor-l-sht-700r"><span class="title">какая мощность у пылесоса Моющий концентрат Thomas Profloor 1 л (2 шт) 790-008</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/5bb6cca83f88fe60dd20ef1d2af8e3f6.jpeg" alt="мультиварки в минске Пылесос Dyson origin dB DC 29" title="мультиварки в минске Пылесос Dyson origin dB DC 29"><div class="box" page="pylesos-dyson-origin-db-dc-17990r"><span class="title">мультиварки в минске Пылесос Dyson origin dB DC 29</span><p>от <span class="price">17990</span> руб.</p></div></li>
						<li><img src="photos/dcfd8cc55439cd877d074c0e060c75d4.jpeg" alt="качество пылесосов Пылесос Vitek VT-1809 красный" title="качество пылесосов Пылесос Vitek VT-1809 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-2600r"><span class="title">качество пылесосов Пылесос Vitek VT-1809 красный</span><p>от <span class="price">2600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("multivarka-elektricheskaya-atlanta-atn-3490r.php", 0, -4); if (file_exists("comments/multivarka-elektricheskaya-atlanta-atn-3490r.php")) require_once "comments/multivarka-elektricheskaya-atlanta-atn-3490r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="multivarka-elektricheskaya-atlanta-atn-3490r.php" method="post" onsubmit="return checkForm(this)">
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