<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("filtry-dlya-chaya-cilia-sht-165r.php","шашлык из свинины в аэрогриле");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("filtry-dlya-chaya-cilia-sht-165r.php", $nick, $comment);
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
		<title>шашлык из свинины в аэрогриле Фильтры для чая Cilia, 80шт.  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="шашлык из свинины в аэрогриле, пылесос для ногтей, манник в мультиварке панасоник, эльдорадо кофемашины, кофемолка bosch, как приготовить мясо в пароварке, пылесос с водным фильтром, рецепты для миксера, продам вафельницу, пароварки в минске, пылесос ролсен, купить рецепты для мультиварки, утюг braun texstyle control, держатель для пылесоса,  утюг в туле">
		<meta name="description" content="шашлык из свинины в аэрогриле Фильтры для чая Cilia созданы специально для того, чтобы вы  могли наслаждаться ...">
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
						<a class="photo" href="photos/64f0438800499aa2b0b34a17318e934a.jpeg" title="шашлык из свинины в аэрогриле Фильтры для чая Cilia, 80шт."><img src="photos/64f0438800499aa2b0b34a17318e934a.jpeg" alt="шашлык из свинины в аэрогриле Фильтры для чая Cilia, 80шт." title="шашлык из свинины в аэрогриле Фильтры для чая Cilia, 80шт. -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-lounge-white-45500r.php"><img src="photos/45055ec55f153a8a82f9cf1191933a0c.jpeg" alt="пылесос для ногтей Эспрессо-кофемашина Melitta Caffeo Lounge White (4.0008.67)" title="пылесос для ногтей Эспрессо-кофемашина Melitta Caffeo Lounge White (4.0008.67)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Lounge White (4.0008.67)</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskaya-nozhevaya-kofemolka-bodum-bistro-euro-belaya-1830r.php"><img src="photos/9ea12f3963a660c25496afb70c846d6f.jpeg" alt="манник в мультиварке панасоник Электрическая ножевая кофемолка Bodum BISTRO 11160-913EURO белая" title="манник в мультиварке панасоник Электрическая ножевая кофемолка Bodum BISTRO 11160-913EURO белая"></a><h2>Электрическая ножевая кофемолка Bodum BISTRO 11160-913EURO белая</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3870r.php"><img src="photos/5e475c33aea662be8e01a1f2443fb6c0.jpeg" alt="эльдорадо кофемашины Микроволновая печь Vitek VT-1684" title="эльдорадо кофемашины Микроволновая печь Vitek VT-1684"></a><h2>Микроволновая печь Vitek VT-1684</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>шашлык из свинины в аэрогриле Фильтры для чая Cilia, 80шт.</h1>
						<div class="tb"><p>Цена: от <span class="price">165</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26585.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фильтры для чая Cilia созданы специально для того, чтобы вы  могли наслаждаться естественным насыщенным вкусом свежего чая. Фильтры для чая  Cilia изготовлены из специальной фильтровальной бумаги, не дают вкуса. В  упаковке 80 шт.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Материал:       специальная фильтровальная бумага;</li> </ul> <ul type=disc>   <li>В       упаковке 80 шт.</li> </ul> <strong>Производитель:  Melitta (Германия)</strong> шашлык из свинины в аэрогриле</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5ac0b374c54627e297ebdd1a47a1cc62.jpeg" alt="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро" title="кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро"><div class="box" page="mikrovolnovaya-pech-s-konvekciey-moulinex-mw-hlebopechka-l-serebro-12050r"><span class="title">кофемолка bosch Микроволновая печь с конвекцией Moulinex MW700131 хлебопечка, 28 л, серебро</span><p>от <span class="price">12050</span> руб.</p></div></li>
						<li><img src="photos/f500afce51554d4e8ccaedd379d383c4.jpeg" alt="как приготовить мясо в пароварке Рисоварка электрическая ATLANTA АТН-590" title="как приготовить мясо в пароварке Рисоварка электрическая ATLANTA АТН-590"><div class="box" page="risovarka-elektricheskaya-atlanta-atn-1500r"><span class="title">как приготовить мясо в пароварке Рисоварка электрическая ATLANTA АТН-590</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/a8857bffd481b9dda4b86f6d3c6ed123.jpeg" alt="пылесос с водным фильтром Пароварка Vitek VT-1555" title="пылесос с водным фильтром Пароварка Vitek VT-1555"><div class="box" page="parovarka-vitek-vt-1400r"><span class="title">пылесос с водным фильтром Пароварка Vitek VT-1555</span><p>от <span class="price">1400</span> руб.</p></div></li>
						<li><img src="photos/c1dcbf2233d55738f171a0b13874cec2.jpeg" alt="рецепты для миксера Соковыжималка Moulinex JU40013E Frutti Pro XL" title="рецепты для миксера Соковыжималка Moulinex JU40013E Frutti Pro XL"><div class="box" page="sokovyzhimalka-moulinex-jue-frutti-pro-xl-2650r"><span class="title">рецепты для миксера Соковыжималка Moulinex JU40013E Frutti Pro XL</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/47745aa09108a6bfabc67b839ea476bd.jpeg" alt="продам вафельницу Чайник электрический Vitek VT-1114" title="продам вафельницу Чайник электрический Vitek VT-1114"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1030r"><span class="title">продам вафельницу Чайник электрический Vitek VT-1114</span><p>от <span class="price">1030</span> руб.</p></div></li>
						<li class="large"><img src="photos/70e82a3bba6b14786d891ffcea703881.jpeg" alt="пароварки в минске Электрический чайник Atlanta АТН-611" title="пароварки в минске Электрический чайник Atlanta АТН-611"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-700r"><span class="title">пароварки в минске Электрический чайник Atlanta АТН-611</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li class="large"><img src="photos/b423fb6caec639a7de8db20512fac098.jpeg" alt="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas" title="пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r"><span class="title">пылесос ролсен Бумажные фильтры-мешки 200 (787-100) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/c4ed1ed9a910d5dd5d3b4d4cba707112.jpeg" alt="купить рецепты для мультиварки Насадка для матрасов в упаковке Dyson Mattress Tool Assy Retail NP" title="купить рецепты для мультиварки Насадка для матрасов в упаковке Dyson Mattress Tool Assy Retail NP"><div class="box" page="nasadka-dlya-matrasov-v-upakovke-dyson-mattress-tool-assy-retail-np-1090r"><span class="title">купить рецепты для мультиварки Насадка для матрасов в упаковке Dyson Mattress Tool Assy Retail NP</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/a9173acd4bbfab2975fc7d7fd7dd2bd2.jpeg" alt="утюг braun texstyle control Пылесос моющий Thomas Twin T1 Aquafilter" title="утюг braun texstyle control Пылесос моющий Thomas Twin T1 Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-t-aquafilter-13080r"><span class="title">утюг braun texstyle control Пылесос моющий Thomas Twin T1 Aquafilter</span><p>от <span class="price">13080</span> руб.</p></div></li>
						<li><img src="photos/edc4236e3a4947da96211057e15ad9d5.jpeg" alt="держатель для пылесоса Пылесос Vitek VT-1847 красный" title="держатель для пылесоса Пылесос Vitek VT-1847 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-3650r"><span class="title">держатель для пылесоса Пылесос Vitek VT-1847 красный</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li><img src="photos/709ff92fce8d072f9f56d948427a4843.jpeg" alt="скороварка мультиварка cuckoo Пылесос Thomas Genius S1 Aquafilter" title="скороварка мультиварка cuckoo Пылесос Thomas Genius S1 Aquafilter"><div class="box" page="pylesos-thomas-genius-s-aquafilter-10000r"><span class="title">скороварка мультиварка cuckoo Пылесос Thomas Genius S1 Aquafilter</span><p>от <span class="price">10000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("filtry-dlya-chaya-cilia-sht-165r.php", 0, -4); if (file_exists("comments/filtry-dlya-chaya-cilia-sht-165r.php")) require_once "comments/filtry-dlya-chaya-cilia-sht-165r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="filtry-dlya-chaya-cilia-sht-165r.php" method="post" onsubmit="return checkForm(this)">
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