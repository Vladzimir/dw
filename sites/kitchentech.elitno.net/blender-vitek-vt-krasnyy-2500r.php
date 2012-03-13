<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-vitek-vt-krasnyy-2500r.php","мультиварка хоттер отзывы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-vitek-vt-krasnyy-2500r.php", $nick, $comment);
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
		<title>мультиварка хоттер отзывы Блендер Vitek VT-1458 красный  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="мультиварка хоттер отзывы, шарлотка в мультиварке панасоник, кухонный комбайн tefal, электрическая мультиварка, каталог мясорубок, хлебопечка мистери, запеканка в хлебопечке, аэрогриль pag 1205d, тостер philips hd, утюг с парогенератором delonghi, panasonic мясорубка отзывы, карандаш для чистки утюга, бездрожжевой хлеб в хлебопечке, хлебопечки в новосибирске,  робот пылесос deebot">
		<meta name="description" content="мультиварка хоттер отзывы Блендер Vitek VT-1458 – прибор, который обладает не только богатством функций, н...">
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
						<a class="photo" href="photos/f0cf14852d6125070feba5c77deecf93.jpeg" title="мультиварка хоттер отзывы Блендер Vitek VT-1458 красный"><img src="photos/f0cf14852d6125070feba5c77deecf93.jpeg" alt="мультиварка хоттер отзывы Блендер Vitek VT-1458 красный" title="мультиварка хоттер отзывы Блендер Vitek VT-1458 красный -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/kofemashina-nivona-nicr-caferomatica-33650r.php"><img src="photos/3298e4cbe4a01ff3e30b40e0178e9164.jpeg" alt="шарлотка в мультиварке панасоник Кофемашина Nivona NICR730 CafeRomatica" title="шарлотка в мультиварке панасоник Кофемашина Nivona NICR730 CafeRomatica"></a><h2>Кофемашина Nivona NICR730 CafeRomatica</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-tefal-storeinn-do-eae-3570r.php"><img src="photos/33b43228a18b1110c1c8a14516611c99.jpeg" alt="кухонный комбайн tefal Кухонный комбайн Tefal Storeinn DO302 EAE" title="кухонный комбайн tefal Кухонный комбайн Tefal Storeinn DO302 EAE"></a><h2>Кухонный комбайн Tefal Storeinn DO302 EAE</h2></li>
							<li><a href="http://kitchentech.elitno.net/yogurtnica-maxima-mym-990r.php"><img src="photos/35ebdf1eb3139cf89fe5f6240c399711.jpeg" alt="электрическая мультиварка Йогуртница Maxima MYM-0154" title="электрическая мультиварка Йогуртница Maxima MYM-0154"></a><h2>Йогуртница Maxima MYM-0154</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>мультиварка хоттер отзывы Блендер Vitek VT-1458 красный</h1>
						<div class="tb"><p>Цена: от <span class="price">2500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8260.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Блендер V</b><b>itek VT-1458</b> – прибор, который обладает не только богатством функций, но и отличается своей компактностью. В комплект входит погружной блендер, с которым вы сможете перемешивать ингредиенты даже в плоской посуде, чоппер и венчик для взбивания. Модель удобно использовать и чистить. Съемные части можно мыть в посудомоечной машине.</p><p>Компания Vitek – известный производитель бытовой техники и электроники, который сочетает в своей продукции новейшие технологии, европейское качество и надежность по доступной цене. </p><p><b>Технические характеристики:</b></p><ul type=disc><li>Тип: погружной <li>Мощность: 700Вт <li>Материал погружной части: металл <li>Измельчитель: объем 1л <li>Венчик для взбивания: есть <li>Чоппер: есть </li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна:</b> Россия.</p> мультиварка хоттер отзывы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/e07564a5fe71e20051b3b21f0806536a.jpeg" alt="каталог мясорубок Соковыжималка Moulinex JU32013E Tom Yam" title="каталог мясорубок Соковыжималка Moulinex JU32013E Tom Yam"><div class="box" page="sokovyzhimalka-moulinex-jue-tom-yam-1850r"><span class="title">каталог мясорубок Соковыжималка Moulinex JU32013E Tom Yam</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/aa004256b858fb51c2e43e9faff2b9a8.jpeg" alt="хлебопечка мистери Чайник электрический Maxima MК-113" title="хлебопечка мистери Чайник электрический Maxima MК-113"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r-3"><span class="title">хлебопечка мистери Чайник электрический Maxima MК-113</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/5ccb08af67b9142dd99b94ec6317943c.jpeg" alt="запеканка в хлебопечке Чайник электрический Maxima MK-G311" title="запеканка в хлебопечке Чайник электрический Maxima MK-G311"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-1650r"><span class="title">запеканка в хлебопечке Чайник электрический Maxima MK-G311</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/823ffa497493bf85b62e76ddeebc1296.jpeg" alt="аэрогриль pag 1205d Чайник электрический Redmond  RK-М117 white" title="аэрогриль pag 1205d Чайник электрический Redmond  RK-М117 white"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-white-1190r"><span class="title">аэрогриль pag 1205d Чайник электрический Redmond  RK-М117 white</span><p>от <span class="price">1190</span> руб.</p></div></li>
						<li class="large"><img src="photos/0e0d48622ca21267b7347abd2a6edbfa.jpeg" alt="тостер philips hd Redmond RK-M120D Чайник электрический" title="тостер philips hd Redmond RK-M120D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-4950r"><span class="title">тостер philips hd Redmond RK-M120D Чайник электрический</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/89368a4d8b53495528b047bf143af4e5.jpeg" alt="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623" title="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-690r"><span class="title">утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li class="large"><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735" title="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-450r"><span class="title">panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/ab7fd4cacdc88b690decc0d20bd53770.jpeg" alt="карандаш для чистки утюга Чайник-термос Atlanta АТН-768" title="карандаш для чистки утюга Чайник-термос Atlanta АТН-768"><div class="box" page="chayniktermos-atlanta-atn-1700r"><span class="title">карандаш для чистки утюга Чайник-термос Atlanta АТН-768</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li><img src="photos/7660e64f2f5c029aab5d6fad25c29084.jpeg" alt="бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843" title="бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843"><div class="box" page="pylesos-vitek-3990r"><span class="title">бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/a5307e77bbd77d05fd1bf891a3eeb5d0.jpeg" alt="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный" title="хлебопечки в новосибирске Пылесос Vitek VT-1845 красный"><div class="box" page="pylesos-vitek-vt-krasnyy-4590r"><span class="title">хлебопечки в новосибирске Пылесос Vitek VT-1845 красный</span><p>от <span class="price">4590</span> руб.</p></div></li>
						<li><img src="photos/e1389eb03e943fe040843f1f9d6c693c.jpeg" alt="центральный пылесос Утюг Vitek VT-1251 синий" title="центральный пылесос Утюг Vitek VT-1251 синий"><div class="box" page="utyug-vitek-vt-siniy-1500r"><span class="title">центральный пылесос Утюг Vitek VT-1251 синий</span><p>от <span class="price">1500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-vitek-vt-krasnyy-2500r.php", 0, -4); if (file_exists("comments/blender-vitek-vt-krasnyy-2500r.php")) require_once "comments/blender-vitek-vt-krasnyy-2500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-vitek-vt-krasnyy-2500r.php" method="post" onsubmit="return checkForm(this)">
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