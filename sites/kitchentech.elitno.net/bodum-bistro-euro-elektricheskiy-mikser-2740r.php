<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("bodum-bistro-euro-elektricheskiy-mikser-2740r.php","хлебопечка германия");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("bodum-bistro-euro-elektricheskiy-mikser-2740r.php", $nick, $comment);
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
		<title>хлебопечка германия Bodum BISTRO 11151-01EURO Электрический миксер  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="хлебопечка германия, мультиварка паларис, мультиварка supra mcs 4511 рецепты, обслуживание пылесоса, джем в хлебопечке рецепт, спагетти в мультиварке, соковыжималка ангел, капсульные кофемашины bosch, пылесосы с аквафильтром soteco, пылесос karcher цена, покупка пылесоса, panasonic мясорубка отзывы, средство от накипи для утюга, сервисный центр кофемашин,  микроволновые печи в москве">
		<meta name="description" content="хлебопечка германия Незаменимым помощником для любой хозяйки на кухне станет  современный функционал...">
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
						<a class="photo" href="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" title="хлебопечка германия Bodum BISTRO 11151-01EURO Электрический миксер"><img src="photos/b6c05d69ce9bf94410c78acce4c5e9cb.jpeg" alt="хлебопечка германия Bodum BISTRO 11151-01EURO Электрический миксер" title="хлебопечка германия Bodum BISTRO 11151-01EURO Электрический миксер -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-bistro-erp-serebristaya-36999r.php"><img src="photos/9fea21248e7566db156b2a08dbe43d4c.jpeg" alt="мультиварка паларис Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая" title="мультиварка паларис Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая"></a><h2>Автоматическая кофемашина Melitta Caffeo Bistro ERP, серебристая</h2></li>
							<li><a href="http://kitchentech.elitno.net/marinator-food-mixer-minute-marinator-1500r.php"><img src="photos/14254c1054a9b51ad0f6053cc6836580.jpeg" alt="мультиварка supra mcs 4511 рецепты Маринатор Food Mixer 9 Minute Marinator" title="мультиварка supra mcs 4511 рецепты Маринатор Food Mixer 9 Minute Marinator"></a><h2>Маринатор Food Mixer 9 Minute Marinator</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3650r.php"><img src="photos/b6481108ed00fa262329eb9b4a9a7836.jpeg" alt="обслуживание пылесоса Микроволновая печь Vitek VT-1694" title="обслуживание пылесоса Микроволновая печь Vitek VT-1694"></a><h2>Микроволновая печь Vitek VT-1694</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>хлебопечка германия Bodum BISTRO 11151-01EURO Электрический миксер</h1>
						<div class="tb"><p>Цена: от <span class="price">2740</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26375.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Незаменимым помощником для любой хозяйки на кухне станет  современный функциональный миксер. Электрический миксер BISTRO 11151-01EURO от швейцарской компании  Bodum сочетает в себя высокое качество, отличную мощность и привлекательный  дизайн. Электрический миксер BISTRO  K11179-294EURO изготовлен из качественных материалов (пластик, нержавеющая  сталь, резина) и имеет оптимальный размер (9,5х21х15,5 см). Кроме того, миксер  обладает и внешней привлекательностью – модель выполнена в практичном и изящном  черном цвете.</p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:       электрический;</li>   <li>Материал:       пластик, нержавеющая сталь, резина;</li>   <li>Размер:       9,5х21х15,5 см;</li>   <li>Цвет:       черный.</li> </ul> <p><strong>Производитель: Bodum  (Швейцария)</strong></p> хлебопечка германия</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8dac9aeadde6a6d95b71abb890265199.jpeg" alt="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB" title="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB"><div class="box" page="mikser-atlanta-ath-wb-630r"><span class="title">джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/b4972945a0247403022f6df03f16440c.jpeg" alt="спагетти в мультиварке Пароварка-блендер Philips Avent 85300" title="спагетти в мультиварке Пароварка-блендер Philips Avent 85300"><div class="box" page="parovarkablender-philips-avent-5600r"><span class="title">спагетти в мультиварке Пароварка-блендер Philips Avent 85300</span><p>от <span class="price">5600</span> руб.</p></div></li>
						<li><img src="photos/21689be9dc7c8e66c7cb248c7b6f5f86.jpeg" alt="соковыжималка ангел Пароварка Maxima MST-1102" title="соковыжималка ангел Пароварка Maxima MST-1102"><div class="box" page="parovarka-maxima-mst-1290r"><span class="title">соковыжималка ангел Пароварка Maxima MST-1102</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li><img src="photos/151cdbb0e55d78748fdd51a7bbe40bf0.jpeg" alt="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329" title="капсульные кофемашины bosch Соковыжималка Atlanta ATH-329"><div class="box" page="sokovyzhimalka-atlanta-ath-2990r"><span class="title">капсульные кофемашины bosch Соковыжималка Atlanta ATH-329</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li class="large"><img src="photos/03d6a39216ccd97c8a662a35f965b076.jpeg" alt="пылесосы с аквафильтром soteco Соковыжималка VITEK VT-1611" title="пылесосы с аквафильтром soteco Соковыжималка VITEK VT-1611"><div class="box" page="sokovyzhimalka-vitek-vt-600r"><span class="title">пылесосы с аквафильтром soteco Соковыжималка VITEK VT-1611</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li class="large"><img src="photos/6572a3244fa07fc4dc4c915b3dd0a9ff.jpeg" alt="пылесос karcher цена Хлебопечка Moulinex OW200033" title="пылесос karcher цена Хлебопечка Moulinex OW200033"><div class="box" page="hlebopechka-moulinex-ow-3800r"><span class="title">пылесос karcher цена Хлебопечка Moulinex OW200033</span><p>от <span class="price">3800</span> руб.</p></div></li>
						<li class="large"><img src="photos/a6fb3c6ce325a3d2e51b29fc0035a27d.jpeg" alt="покупка пылесоса Чайник электрический Redmond RK-M107" title="покупка пылесоса Чайник электрический Redmond RK-M107"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1790r"><span class="title">покупка пылесоса Чайник электрический Redmond RK-M107</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735" title="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-450r"><span class="title">panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/05c48dbba69cff2727e6c1b6d1112395.jpeg" alt="средство от накипи для утюга Батарейки GP Batteries Super alkaline LR20 13A-BC2" title="средство от накипи для утюга Батарейки GP Batteries Super alkaline LR20 13A-BC2"><div class="box" page="batareyki-gp-batteries-super-alkaline-lr-abc-170r"><span class="title">средство от накипи для утюга Батарейки GP Batteries Super alkaline LR20 13A-BC2</span><p>от <span class="price">170</span> руб.</p></div></li>
						<li><img src="photos/e19a6a84ed749d263503c61eb89d253b.jpeg" alt="сервисный центр кофемашин Батарейка GP Batteries Super alkaline LR6 15A-BC4" title="сервисный центр кофемашин Батарейка GP Batteries Super alkaline LR6 15A-BC4"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-80r"><span class="title">сервисный центр кофемашин Батарейка GP Batteries Super alkaline LR6 15A-BC4</span><p>от <span class="price">80</span> руб.</p></div></li>
						<li><img src="photos/1075d3353fd91819c5405594beb1237b.jpeg" alt="работа парогенератора Пылесос Dyson motorhead DC 23" title="работа парогенератора Пылесос Dyson motorhead DC 23"><div class="box" page="pylesos-dyson-motorhead-dc-36990r"><span class="title">работа парогенератора Пылесос Dyson motorhead DC 23</span><p>от <span class="price">36990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("bodum-bistro-euro-elektricheskiy-mikser-2740r.php", 0, -4); if (file_exists("comments/bodum-bistro-euro-elektricheskiy-mikser-2740r.php")) require_once "comments/bodum-bistro-euro-elektricheskiy-mikser-2740r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="bodum-bistro-euro-elektricheskiy-mikser-2740r.php" method="post" onsubmit="return checkForm(this)">
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