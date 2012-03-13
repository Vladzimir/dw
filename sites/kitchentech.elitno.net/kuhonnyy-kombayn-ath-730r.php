<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kuhonnyy-kombayn-ath-730r.php","кофемашина bosh");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kuhonnyy-kombayn-ath-730r.php", $nick, $comment);
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
		<title>кофемашина bosh Кухонный комбайн  ATH-353  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофемашина bosh, пылесос thomas black ocean, капельная кофеварка инструкция, рецепт пельменей в хлебопечке, мультиварка multihotter отзывы, лучший пылесос самсунг, стоит ли покупать мультиварку, пылесосы с аквафильтром soteco, блендер vita mix, кофемашины оптом, panasonic мясорубка отзывы, какие лучше микроволновые печи, блендер бош купить, парогенератор aeg,  какие есть хлебопечки">
		<meta name="description" content="кофемашина bosh Компактный измельчитель Atlanta ATH-353 с прозрачным резервуаром и измельчителем...">
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
						<a class="photo" href="photos/d8bd47322f35143f577f4b450e121a71.jpeg" title="кофемашина bosh Кухонный комбайн  ATH-353"><img src="photos/d8bd47322f35143f577f4b450e121a71.jpeg" alt="кофемашина bosh Кухонный комбайн  ATH-353" title="кофемашина bosh Кухонный комбайн  ATH-353 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-moulinex-dd-2300r.php"><img src="photos/b0d11dfbaf618701d7d5cdf29d1db36e.jpeg" alt="пылесос thomas black ocean Блендер погружной Moulinex DD904143" title="пылесос thomas black ocean Блендер погружной Moulinex DD904143"></a><h2>Блендер погружной Moulinex DD904143</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-moulinex-fp-6140r.php"><img src="photos/59cc932c7224c4f3a91684264a52c663.jpeg" alt="капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141" title="капельная кофеварка инструкция Кухонный комбайн Moulinex FP711141"></a><h2>Кухонный комбайн Moulinex FP711141</h2></li>
							<li><a href="http://kitchentech.elitno.net/myasorubka-redmond-rmg-6690r.php"><img src="photos/d325e4ff8de4614af80db126de07173a.jpeg" alt="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8" title="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8"></a><h2>Мясорубка Redmond RMG-1203-8</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофемашина bosh Кухонный комбайн  ATH-353</h1>
						<div class="tb"><p>Цена: от <span class="price">730</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19604.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Компактный измельчитель Atlanta ATH-353 с прозрачным резервуаром и измельчителем с универсальным ножом мощностью 350 Вт – ваш недорогой помощник на кухне. Он имеет две скорости измельчения, а конструкция разработана максимально удобно для чистки и сборки. Теперь вам не нужно проводить часы на кухне, нарезая, например, овощи для салата, ведь измельчитель сделает всю работу за вас в считанные минуты. Для улучшения циркуляции продукта использована система ассиметричных ножек.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Емкость: 0,4 литра <li>Мощность: 280 Вт </li></ul><p><strong>Производитель: США</strong><strong> </strong></p> кофемашина bosh</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5463e59bde9d8697c1104a5ca7198687.jpeg" alt="мультиварка multihotter отзывы Пароварка Redmond RST-M1101" title="мультиварка multihotter отзывы Пароварка Redmond RST-M1101"><div class="box" page="parovarka-redmond-rstm-3990r"><span class="title">мультиварка multihotter отзывы Пароварка Redmond RST-M1101</span><p>от <span class="price">3990</span> руб.</p></div></li>
						<li><img src="photos/2881dd3b520a8310bcadebe542a3493a.jpeg" alt="лучший пылесос самсунг Пароварка Redmond RST-M1104" title="лучший пылесос самсунг Пароварка Redmond RST-M1104"><div class="box" page="parovarka-redmond-rstm-2950r"><span class="title">лучший пылесос самсунг Пароварка Redmond RST-M1104</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/5bf48f17b0c0a7ecdd4b2ccc867e6baf.jpeg" alt="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191" title="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191"><div class="box" page="elektroplita-indukcionnaya-atlanta-ath-1300r"><span class="title">стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/03d6a39216ccd97c8a662a35f965b076.jpeg" alt="пылесосы с аквафильтром soteco Соковыжималка VITEK VT-1611" title="пылесосы с аквафильтром soteco Соковыжималка VITEK VT-1611"><div class="box" page="sokovyzhimalka-vitek-vt-600r"><span class="title">пылесосы с аквафильтром soteco Соковыжималка VITEK VT-1611</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li class="large"><img src="photos/5698b5516003bb90b12e44c09c465d2a.jpeg" alt="блендер vita mix Чайник электрический Maxima MK-G301" title="блендер vita mix Чайник электрический Maxima MK-G301"><div class="box" page="chaynik-elektricheskiy-maxima-mkg-1390r"><span class="title">блендер vita mix Чайник электрический Maxima MK-G301</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li class="large"><img src="photos/78965fa03e391297ff5141e1ed5d2961.jpeg" alt="кофемашины оптом Электрический чайник Atlanta АТН-721" title="кофемашины оптом Электрический чайник Atlanta АТН-721"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-400r"><span class="title">кофемашины оптом Электрический чайник Atlanta АТН-721</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li class="large"><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735" title="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-450r"><span class="title">panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/27a529eb06db7d79aab6d5d214852413.jpeg" alt="какие лучше микроволновые печи Minamoto R03 (AAA)" title="какие лучше микроволновые печи Minamoto R03 (AAA)"><div class="box" page="minamoto-r-aaa-4r"><span class="title">какие лучше микроволновые печи Minamoto R03 (AAA)</span><p>от <span class="price">4</span> руб.</p></div></li>
						<li><img src="photos/ef2885939f9c24bf748f6b2d7462e40b.jpeg" alt="блендер бош купить Щетка для уборки твердых поверхностей Dyson Articulating Hard Floor Tool Retail" title="блендер бош купить Щетка для уборки твердых поверхностей Dyson Articulating Hard Floor Tool Retail"><div class="box" page="schetka-dlya-uborki-tverdyh-poverhnostey-dyson-articulating-hard-floor-tool-retail-1790r"><span class="title">блендер бош купить Щетка для уборки твердых поверхностей Dyson Articulating Hard Floor Tool Retail</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/b81f4815d2a9df868070af2d7b1533ee.jpeg" alt="парогенератор aeg Утюг Vitek VT-1209" title="парогенератор aeg Утюг Vitek VT-1209"><div class="box" page="utyug-vitek-vt-1100r"><span class="title">парогенератор aeg Утюг Vitek VT-1209</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/84ad6b2565cb0b9ff7fa82ecd0bb4600.jpeg" alt="индукционная керамическая плита Утюг Vitek VT-1252" title="индукционная керамическая плита Утюг Vitek VT-1252"><div class="box" page="utyug-vitek-vt-1800r"><span class="title">индукционная керамическая плита Утюг Vitek VT-1252</span><p>от <span class="price">1800</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kuhonnyy-kombayn-ath-730r.php", 0, -4); if (file_exists("comments/kuhonnyy-kombayn-ath-730r.php")) require_once "comments/kuhonnyy-kombayn-ath-730r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kuhonnyy-kombayn-ath-730r.php" method="post" onsubmit="return checkForm(this)">
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