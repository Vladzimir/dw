<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-atlanta-atn-750r.php","встраиваемая кофемашина siemens");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-atlanta-atn-750r.php", $nick, $comment);
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
		<title>встраиваемая кофемашина siemens Электрический чайник Atlanta АТН-633  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="встраиваемая кофемашина siemens, пароварка магазин, микроволновая печь рейтинг, рецепт пельменей в хлебопечке, аэрогриль форум, профессиональные утюги, электрические чайники скарлет, куриное филе в пароварке, кофеварка эспрессо для дома, марки микроволновых печей, покупка пылесоса, hyla пылесос цена, купить мясорубку панасоник, brand аэрогриль,  соковыжималка россошанка">
		<meta name="description" content="встраиваемая кофемашина siemens Электрический чайник Atlanta АТН-633 – стильный кухонный прибор, выполненный из ...">
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
						<a class="photo" href="photos/0e343e4ed2bc192a59c6c92535860524.jpeg" title="встраиваемая кофемашина siemens Электрический чайник Atlanta АТН-633"><img src="photos/0e343e4ed2bc192a59c6c92535860524.jpeg" alt="встраиваемая кофемашина siemens Электрический чайник Atlanta АТН-633" title="встраиваемая кофемашина siemens Электрический чайник Atlanta АТН-633 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-beloserebristaya-29530r.php"><img src="photos/5b2c06d57a572404f45fc75e65b42e87.jpeg" alt="пароварка магазин Автоматическая кофемашина Melitta CAFFEO Lattea, бело-серебристая" title="пароварка магазин Автоматическая кофемашина Melitta CAFFEO Lattea, бело-серебристая"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea, бело-серебристая</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-540r.php"><img src="photos/7189b59307d880db0fc6d320b1efc4f4.jpeg" alt="микроволновая печь рейтинг Кофемолка ATH-277" title="микроволновая печь рейтинг Кофемолка ATH-277"></a><h2>Кофемолка ATH-277</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-redmond-rmg-6690r.php"><img src="photos/d325e4ff8de4614af80db126de07173a.jpeg" alt="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8" title="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8"></a><h2>Мясорубка Redmond RMG-1203-8</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>встраиваемая кофемашина siemens Электрический чайник Atlanta АТН-633</h1>
						<div class="tb"><p>Цена: от <span class="price">750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19891.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta АТН-633 – стильный кухонный прибор, выполненный из пластика, мощностью 2000 Вт. За раз может кипятить до 1,7 л. воды. Может поворачиваться на подставке на 360 градусов. Имеет фильтр от накипи и функцию быстрого закипания. Используется защищенный закрытый нагревательный элемент, который гораздо проще мыть, чем открытую спираль. Безопасен, т. к. имеет защиту от перегрева, а также блокировку крышки и блокировку включения без воды. Предусмотрено место для электрошнура в цокольной подставке. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Объем чайника 1.7 литра <li>Поворот на подставке на 360 <li>Быстрое закипание <li>Фильтр от накипи <li>Закрытый нагревательный элемент <li>Автоматическое отключение <li>Защита от перегрева без воды <li>Электрошнур в цокольной подставке <li>Мощность 2000W <li>230V, 50Hz <li>19.5 x 18 x 24.5 см </li></ul><p><strong>Производитель: США</strong></p> встраиваемая кофемашина siemens</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8c0aa6f2022172974ae917a715c05f94.jpeg" alt="аэрогриль форум Пароварка Vitek VT-1550N SR" title="аэрогриль форум Пароварка Vitek VT-1550N SR"><div class="box"><a href="http://kitchentech.elitno.net/parovarka-vitek-vtn-sr-2200r.php"><h3 class="title">аэрогриль форум Пароварка Vitek VT-1550N SR</h3><p>от <span class="price">2200</span> руб.</p></a></div></li>
						<li><img src="photos/8d898eca4e96ee4a2fd539403a61a2e7.jpeg" alt="профессиональные утюги Соковыжималка для цитрусовых" title="профессиональные утюги Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-1500r"><span class="title">профессиональные утюги Соковыжималка для цитрусовых</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/c48020be535a5770584db54e47af400d.jpeg" alt="электрические чайники скарлет Чайник электрический Vitek VT-1115 желтый" title="электрические чайники скарлет Чайник электрический Vitek VT-1115 желтый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-zheltyy-1090r"><span class="title">электрические чайники скарлет Чайник электрический Vitek VT-1115 желтый</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/c75538a0a02b722bb4d5b9c47eb925e7.jpeg" alt="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л" title="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesse-inox-bi-l-2570r"><span class="title">куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л</span><p>от <span class="price">2570</span> руб.</p></div></li>
						<li class="large"><img src="photos/50b32a99f8069aa25115dc1163e0b555.jpeg" alt="кофеварка эспрессо для дома Чайник электрический Tefal VitesseS BF66234 1,7 л" title="кофеварка эспрессо для дома Чайник электрический Tefal VitesseS BF66234 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1760r"><span class="title">кофеварка эспрессо для дома Чайник электрический Tefal VitesseS BF66234 1,7 л</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li class="large"><img src="photos/d6db045bcfab03ae142ac160811c2a0a.jpeg" alt="марки микроволновых печей Чайник электричесукий Atlanta ATH-756" title="марки микроволновых печей Чайник электричесукий Atlanta ATH-756"><div class="box" page="chaynik-elektrichesukiy-atlanta-ath-950r"><span class="title">марки микроволновых печей Чайник электричесукий Atlanta ATH-756</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/a6fb3c6ce325a3d2e51b29fc0035a27d.jpeg" alt="покупка пылесоса Чайник электрический Redmond RK-M107" title="покупка пылесоса Чайник электрический Redmond RK-M107"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1790r"><span class="title">покупка пылесоса Чайник электрический Redmond RK-M107</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/d50a3dd0a5055f1b90b2cf35609b3ff0.jpeg" alt="hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС" title="hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС"><div class="box" page="nitrattester-nitratomer-soeks-5290r"><span class="title">hyla пылесос цена Нитрат-тестер (нитратомер) СоЭкС</span><p>от <span class="price">5290</span> руб.</p></div></li>
						<li><img src="photos/35040f2562bad52e53caa0b063a02983.jpeg" alt="купить мясорубку панасоник Автошампунь Karcher RM 806 (5 л) RU" title="купить мясорубку панасоник Автошампунь Karcher RM 806 (5 л) RU"><div class="box" page="avtoshampun-karcher-rm-l-ru-1000r"><span class="title">купить мясорубку панасоник Автошампунь Karcher RM 806 (5 л) RU</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/26befd04ebef6df7b3db2c4e6ee2357f.jpeg" alt="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)" title="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r-2"><span class="title">brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/aedfc5d509b81412081451eb51f176f9.jpeg" alt="чайник или термопот Утюг Vitek VT-1206" title="чайник или термопот Утюг Vitek VT-1206"><div class="box" page="utyug-vitek-vt-1330r"><span class="title">чайник или термопот Утюг Vitek VT-1206</span><p>от <span class="price">1330</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-atlanta-atn-750r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-atlanta-atn-750r.php")) require_once "comments/elektricheskiy-chaynik-atlanta-atn-750r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-atlanta-atn-750r.php" method="post" onsubmit="return checkForm(this)">
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