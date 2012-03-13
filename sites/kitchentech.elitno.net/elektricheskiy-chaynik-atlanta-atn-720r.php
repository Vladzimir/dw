<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-atlanta-atn-720r.php","какую мультиварку лучше купить");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-atlanta-atn-720r.php", $nick, $comment);
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
		<title>какую мультиварку лучше купить Электрический чайник Atlanta АТН-663  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="какую мультиварку лучше купить, купить кофеварку krups, разборка кофемашины, что приготовить в мультиварке, куриные грудки в мультиварке, дозиметр рентгеновского излучения, блендер в одессе, кофеварка tefal express, хлебопечка германия, сколько стоит пылесос, книга рецептов для хлебопечки, посоветуйте хлебопечку, кофеварка vitek 1513, купить мультиварку панасоник,  рецепты для мультиварки dex">
		<meta name="description" content="какую мультиварку лучше купить Электрический чайник Atlanta АТН-663 – стильный кухонный прибор, выполненный из ...">
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
						<a class="photo" href="photos/2e4cd4da907bfa0983f22c5ac1875ffe.jpeg" title="какую мультиварку лучше купить Электрический чайник Atlanta АТН-663"><img src="photos/2e4cd4da907bfa0983f22c5ac1875ffe.jpeg" alt="какую мультиварку лучше купить Электрический чайник Atlanta АТН-663" title="какую мультиварку лучше купить Электрический чайник Atlanta АТН-663 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3250r.php"><img src="photos/50077cb721bf68554cfd92d5a37bd83d.jpeg" alt="купить кофеварку krups Микроволновая печь Vitek VT-1686" title="купить кофеварку krups Микроволновая печь Vitek VT-1686"></a><h2>Микроволновая печь Vitek VT-1686</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovka-zigmund-shtain-bmo-b-14900r.php"><img src="photos/f21bb6b475177e08f0f09714d9a7c1cf.jpeg" alt="разборка кофемашины Микроволновка Zigmund & Shtain BMO 10.342 B" title="разборка кофемашины Микроволновка Zigmund & Shtain BMO 10.342 B"></a><h2>Микроволновка Zigmund & Shtain BMO 10.342 B</h2></li>
							<li><a href="http://kitchentech.elitno.net/parovarka-binatone-fs-white-green-1895r.php"><img src="photos/bd86985191b900e717a6f18b17266152.jpeg" alt="что приготовить в мультиварке Пароварка Binatone FS-404 White Green" title="что приготовить в мультиварке Пароварка Binatone FS-404 White Green"></a><h2>Пароварка Binatone FS-404 White Green</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>какую мультиварку лучше купить Электрический чайник Atlanta АТН-663</h1>
						<div class="tb"><p>Цена: от <span class="price">720</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19948.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta АТН-663 – стильный кухонный прибор, выполненный из белого пластика, мощностью 2000 Вт и объемом 1,7 л. воды. Может поворачиваться на подставке на 360 градусов. Имеет фильтр от накипи и функцию быстрого закипания. Используется защищенный закрытый нагревательный элемент, который гораздо проще мыть, чем открытую спираль. Безопасен, т. к. имеет защиту от перегрева, а также блокировку крышки и блокировку включения без воды. Предусмотрено место для электрошнура в цокольной подставке. Снабжен функцией «100% готовность». </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Функция \100% готовность\ <li>Поворот на подставке на 360  <li>Быстрое закипание <li>Фильтр от накипи <li>Закрытый нагревательный элемент <li>Автоматическое отключение <li>Защита от перегрева без воды <li>Электрошнур в цокольной подставке <li>Мощность 2000W <li>230V, 50Hz <li>19.5 x 18 x 22.5 см </li></ul><p><strong>Производитель: США</strong></p> какую мультиварку лучше купить</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/b8600793aec4a8059c2de0136a79b6b1.jpeg" alt="куриные грудки в мультиварке Пароварка Redmond RST-1103" title="куриные грудки в мультиварке Пароварка Redmond RST-1103"><div class="box" page="parovarka-redmond-rst-2390r"><span class="title">куриные грудки в мультиварке Пароварка Redmond RST-1103</span><p>от <span class="price">2390</span> руб.</p></div></li>
						<li><img src="photos/316a6aef2ce50d76bdf9280d8e11dad1.jpeg" alt="дозиметр рентгеновского излучения Хлебопечка Moulinex OW302230" title="дозиметр рентгеновского излучения Хлебопечка Moulinex OW302230"><div class="box" page="hlebopechka-moulinex-ow-4790r"><span class="title">дозиметр рентгеновского излучения Хлебопечка Moulinex OW302230</span><p>от <span class="price">4790</span> руб.</p></div></li>
						<li><img src="photos/64a1e17046b7c97f3413bb1bcacb4f30.jpeg" alt="блендер в одессе Чайник экспресс Binatone EEJ-1555 White" title="блендер в одессе Чайник экспресс Binatone EEJ-1555 White"><div class="box" page="chaynik-ekspress-binatone-eej-white-2600r"><span class="title">блендер в одессе Чайник экспресс Binatone EEJ-1555 White</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li><img src="photos/7c9f70f739cded90e6e6da5bcbc9e960.jpeg" alt="кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный" title="кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-serebryanyy-1910r"><span class="title">кофеварка tefal express Чайник электрический Vitek VT-1138 серебряный</span><p>от <span class="price">1910</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3fae48615963478f00e0c05f3baa485.jpeg" alt="хлебопечка германия Электрический чайник  Zauber R-380" title="хлебопечка германия Электрический чайник  Zauber R-380"><div class="box" page="elektricheskiy-chaynik-zauber-r-1830r"><span class="title">хлебопечка германия Электрический чайник  Zauber R-380</span><p>от <span class="price">1830</span> руб.</p></div></li>
						<li class="large"><img src="photos/463a93164abee7f214102b8fe77a244c.jpeg" alt="сколько стоит пылесос Чайник электрический Atlanta ATH-690" title="сколько стоит пылесос Чайник электрический Atlanta ATH-690"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-1280r"><span class="title">сколько стоит пылесос Чайник электрический Atlanta ATH-690</span><p>от <span class="price">1280</span> руб.</p></div></li>
						<li class="large"><img src="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" alt="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118" title="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1999r"><span class="title">книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118</span><p>от <span class="price">1999</span> руб.</p></div></li>
						<li><img src="photos/0b3cd91064942c75434bb396eaa4e0d2.jpeg" alt="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический" title="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-1990r"><span class="title">посоветуйте хлебопечку Redmond RK-M121D Чайник электрический</span><p>от <span class="price">1990</span> руб.</p></div></li>
						<li><img src="photos/565e52ebc108aee0062c9aab0f314cab.jpeg" alt="кофеварка vitek 1513 Парогенератор Lelit PG024N" title="кофеварка vitek 1513 Парогенератор Lelit PG024N"><div class="box" page="parogenerator-lelit-pgn-16700r"><span class="title">кофеварка vitek 1513 Парогенератор Lelit PG024N</span><p>от <span class="price">16700</span> руб.</p></div></li>
						<li><img src="photos/0c7359cf223fcc5ee81c11e13e2fdc99.jpeg" alt="купить мультиварку панасоник Парогенератор Maxima MSC-2001 желтый" title="купить мультиварку панасоник Парогенератор Maxima MSC-2001 желтый"><div class="box" page="parogenerator-maxima-msc-zheltyy-1650r"><span class="title">купить мультиварку панасоник Парогенератор Maxima MSC-2001 желтый</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/f28310ee75a9df657677f0b868a24f8b.jpeg" alt="хлебопечка камерон Гибкая телескопическая щелевая насадка в упаковке Dyson Flexi Crevice Tool Assy Retail NP" title="хлебопечка камерон Гибкая телескопическая щелевая насадка в упаковке Dyson Flexi Crevice Tool Assy Retail NP"><div class="box" page="gibkaya-teleskopicheskaya-schelevaya-nasadka-v-upakovke-dyson-flexi-crevice-tool-assy-retail-np-1090r"><span class="title">хлебопечка камерон Гибкая телескопическая щелевая насадка в упаковке Dyson Flexi Crevice Tool Assy Retail NP</span><p>от <span class="price">1090</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-atlanta-atn-720r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-atlanta-atn-720r.php")) require_once "comments/elektricheskiy-chaynik-atlanta-atn-720r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-atlanta-atn-720r.php" method="post" onsubmit="return checkForm(this)">
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