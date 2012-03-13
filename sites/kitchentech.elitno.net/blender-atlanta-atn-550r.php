<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-atlanta-atn-550r.php","термопот toshiba plk");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-atlanta-atn-550r.php", $nick, $comment);
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
		<title>термопот toshiba plk Блендер Atlanta АТН-338  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="термопот toshiba plk, фильтр для кофемашины, bullet express кухонный комбайн, чем отличаются кофеварки, фритюрница philips отзывы, мультиварка рецепты картофель, ремонт аэрогриля ves, насадки для мясорубки zelmer, как выбрать утюг отзывы, принцип микроволновой печи, купить пылесос с контейнером, взбить сливки блендером, panasonic мясорубка отзывы, как варить гречку в пароварке,  мини пылесос для дома">
		<meta name="description" content="термопот toshiba plk Ручной блендер Atlanta ATH-338 погружного типа мощностью 240 Вт с удобной анатом...">
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
						<a class="photo" href="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" title="термопот toshiba plk Блендер Atlanta АТН-338"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="термопот toshiba plk Блендер Atlanta АТН-338" title="термопот toshiba plk Блендер Atlanta АТН-338 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/bio-ochistitel-ot-nakipi-swirl-hg-90r.php"><img src="photos/08ef4a223c3f3825df8de9b118c05908.jpeg" alt="фильтр для кофемашины Био - очиститель от накипи Swirl, 2х20г" title="фильтр для кофемашины Био - очиститель от накипи Swirl, 2х20г"></a><h2>Био - очиститель от накипи Swirl, 2х20г</h2></li>
							<li><a href="http://kitchentech.elitno.net/aerogril-maxima-mag-1970r.php"><img src="photos/04a8e0ddae201f494a4dc0f24ca2a85c.jpeg" alt="bullet express кухонный комбайн Аэрогриль Maxima MAG-0147" title="bullet express кухонный комбайн Аэрогриль Maxima MAG-0147"></a><h2>Аэрогриль Maxima MAG-0147</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-lattea-red-35700r.php"><img src="photos/0c7c7a9daf3721e5976f772ebe4ae9e2.jpeg" alt="чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)" title="чем отличаются кофеварки Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Lattea Red (4.0009.92)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>термопот toshiba plk Блендер Atlanta АТН-338</h1>
						<div class="tb"><p>Цена: от <span class="price">550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19618.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Ручной блендер Atlanta ATH-338 погружного типа мощностью 240 Вт с удобной анатомической ручкой. Он имеет компактные размеры, поэтому вы всегда сможете взять его с собой, например, на дачу. Имеет нож из нержавеющей стали и петлю для подвешивания на стену. Соответствует европейским и американским нормам безопасности.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Тип погружной <li>Ручной блендер <li>Компактные размеры <li>Нож из нержавеющей стали <li>Петля для подвешивания <li>Соответствует европейским и американским нормам безопасности <li>Мощность 240 Вт <li>220-240 В, 50-60 Гц </li></ul><p><strong>Производитель: США</strong></p> термопот toshiba plk</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/cd757289d24d4d7e98d5fef52b1c314b.jpeg" alt="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)" title="фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)"><div class="box"><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-sr-3990r.php"><h3 class="title">фритюрница philips отзывы Микроволновая печь Vitek 1652 (SR)</h3><p>от <span class="price">3990</span> руб.</p></a></div></li>
						<li><img src="photos/65e8a544a49b70285af00e3f7637c4af.jpeg" alt="мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная" title="мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная"><div class="box" page="myasorubka-meat-grinder-f-sverhlegkaya-udaroprochnaya-500r"><span class="title">мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/076c9c98f1af9b02a64dd68bf22e26cd.jpeg" alt="ремонт аэрогриля ves Пароварка Binatone FS-302 White Blue" title="ремонт аэрогриля ves Пароварка Binatone FS-302 White Blue"><div class="box" page="parovarka-binatone-fs-white-blue-1760r"><span class="title">ремонт аэрогриля ves Пароварка Binatone FS-302 White Blue</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li><img src="photos/7476c2912d4d9c99682e7b20dcc24385.jpeg" alt="насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192" title="насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192"><div class="box" page="elektroplita-indukcionnaya-atlanta-ath-1900r"><span class="title">насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li class="large"><img src="photos/7d63a182df07dd9be547ac2724aeed46.jpeg" alt="как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO" title="как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-krasnaya-bodum-bistro-euro-3340r"><span class="title">как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li class="large"><img src="photos/3db103a42b99a0a770887670f28f5ba2.jpeg" alt="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л" title="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-1950r"><span class="title">принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/296e5671e5f65168bbfd694532a2c751.jpeg" alt="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной" title="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-stalnoy-1850r"><span class="title">купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/3a6317b1e5aa0207019da754f6c2351b.jpeg" alt="взбить сливки блендером Электрический чайник Atlanta АТН-673" title="взбить сливки блендером Электрический чайник Atlanta АТН-673"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-560r"><span class="title">взбить сливки блендером Электрический чайник Atlanta АТН-673</span><p>от <span class="price">560</span> руб.</p></div></li>
						<li><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735" title="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-450r"><span class="title">panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/c8d95936ceb77257c40da032828b68b2.jpeg" alt="как варить гречку в пароварке Батарейка GP Batteries Super alkaline 6LF22 1604A-BC1" title="как варить гречку в пароварке Батарейка GP Batteries Super alkaline 6LF22 1604A-BC1"><div class="box" page="batareyka-gp-batteries-super-alkaline-lf-abc-100r"><span class="title">как варить гречку в пароварке Батарейка GP Batteries Super alkaline 6LF22 1604A-BC1</span><p>от <span class="price">100</span> руб.</p></div></li>
						<li><img src="photos/fdcb89c9c94f7f3223bb9f8f472f7a54.jpeg" alt="пылесос zelmer цена Пятновыводитель Dyson Dyzolv" title="пылесос zelmer цена Пятновыводитель Dyson Dyzolv"><div class="box" page="pyatnovyvoditel-dyson-dyzolv-790r"><span class="title">пылесос zelmer цена Пятновыводитель Dyson Dyzolv</span><p>от <span class="price">790</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-atlanta-atn-550r.php", 0, -4); if (file_exists("comments/blender-atlanta-atn-550r.php")) require_once "comments/blender-atlanta-atn-550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-atlanta-atn-550r.php" method="post" onsubmit="return checkForm(this)">
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