<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("minipechkaduhovka-atlanta-atn-2200r.php","блендер braun mr 320");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("minipechkaduhovka-atlanta-atn-2200r.php", $nick, $comment);
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
		<title>блендер braun mr 320 Минипечка-духовка Atlanta АТН-1401  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="блендер braun mr 320, блюда на пару в мультиварке, преимущества мультиварки, пылесос sc 4760h33, кофеварка clatronic, джем в хлебопечке рецепт, где купить пароварку, профессиональные утюги, блендер в одессе, испечь черный хлеб в хлебопечке, тесто в хлебопечке kenwood, сколько стоит фритюрница, утюг для волос профессиональный, мясорубка kenwood mg510,  как приготовить хлеб в хлебопечке">
		<meta name="description" content="блендер braun mr 320 Минипечка-духовка Atlanta АТН-1401 черного цвета объемом 30 литров и мощностью 1...">
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
						<a class="photo" href="photos/c6ad3fad9605570f18884e29f3616e94.jpeg" title="блендер braun mr 320 Минипечка-духовка Atlanta АТН-1401"><img src="photos/c6ad3fad9605570f18884e29f3616e94.jpeg" alt="блендер braun mr 320 Минипечка-духовка Atlanta АТН-1401" title="блендер braun mr 320 Минипечка-духовка Atlanta АТН-1401 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-vitek-vt-krasnyy-2500r.php"><img src="photos/f0cf14852d6125070feba5c77deecf93.jpeg" alt="блюда на пару в мультиварке Блендер Vitek VT-1458 красный" title="блюда на пару в мультиварке Блендер Vitek VT-1458 красный"></a><h2>Блендер Vitek VT-1458 красный</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-tefal-blde-2660r.php"><img src="photos/a169e670a3a2eab3dd68bb002270cf0f.jpeg" alt="преимущества мультиварки Блендер Tefal BL522D3E" title="преимущества мультиварки Блендер Tefal BL522D3E"></a><h2>Блендер Tefal BL522D3E</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mx-3910r.php"><img src="photos/5a6cc5c274d661a65ab52201c3f36a5e.jpeg" alt="пылесос sc 4760h33 Блендер Braun MX-2050" title="пылесос sc 4760h33 Блендер Braun MX-2050"></a><h2>Блендер Braun MX-2050</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>блендер braun mr 320 Минипечка-духовка Atlanta АТН-1401</h1>
						<div class="tb"><p>Цена: от <span class="price">2200</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19642.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Минипечка-духовка Atlanta АТН-1401 черного цвета объемом 30 литров и мощностью 1600 Вт. Она предлагает вам выбор из нескольких комбинаций работы нагревательных элементов. Абсолютно безопасна, так как защищена от перегрева. Имеет световой индикатор работы и 60-минутный таймер времени приготовления. Благодаря своему небольшому размеру и весу служит прекрасной заменой духовому шкафу там, где установить его сложно, например, на даче.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Объем 30 литров; <li>Выбор различных комбинаций работы нагревательных элементов; <li>Регулятор температуры приготовления; <li>Защита от перегрева; <li>Световой индикатор работы; <li>60-минутный таймер времени приготовления; <li>1600 Вт, 230В, 50 Гц. <li>Соответствует европейским и американским нормам безопасности; <li>Изделие сертифицировано Госстандартом РФ; </li></ul><p><strong>Производитель: США</strong></p> блендер braun mr 320</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9249d045a56a8d6e38902f959401f604.jpeg" alt="кофеварка clatronic Zauber Кофемолка  Z-490" title="кофеварка clatronic Zauber Кофемолка  Z-490"><div class="box"><a href="http://kitchentech.elitno.net/zauber-kofemolka-z-1310r.php"><h3 class="title">кофеварка clatronic Zauber Кофемолка  Z-490</h3><p>от <span class="price">1310</span> руб.</p></a></div></li>
						<li><img src="photos/8dac9aeadde6a6d95b71abb890265199.jpeg" alt="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB" title="джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB"><div class="box" page="mikser-atlanta-ath-wb-630r"><span class="title">джем в хлебопечке рецепт Миксер Atlanta ATH-263 WB</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/1a39977506779af8e80d3d2045a86d6b.jpeg" alt="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001" title="где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001"><div class="box" page="myasorubka-elektricheskaya-tefal-le-hachoir-me-5100r"><span class="title">где купить пароварку Мясорубка электрическая Tefal Le Hachoir ME7001</span><p>от <span class="price">5100</span> руб.</p></div></li>
						<li><img src="photos/8d898eca4e96ee4a2fd539403a61a2e7.jpeg" alt="профессиональные утюги Соковыжималка для цитрусовых" title="профессиональные утюги Соковыжималка для цитрусовых"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-1500r"><span class="title">профессиональные утюги Соковыжималка для цитрусовых</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/64a1e17046b7c97f3413bb1bcacb4f30.jpeg" alt="блендер в одессе Чайник экспресс Binatone EEJ-1555 White" title="блендер в одессе Чайник экспресс Binatone EEJ-1555 White"><div class="box" page="chaynik-ekspress-binatone-eej-white-2600r"><span class="title">блендер в одессе Чайник экспресс Binatone EEJ-1555 White</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li class="large"><img src="photos/388c2880498e546d8fcebc787f1cf894.jpeg" alt="испечь черный хлеб в хлебопечке Электрический чайник 1л черный Bodum BISTRO 11154-01EURO" title="испечь черный хлеб в хлебопечке Электрический чайник 1л черный Bodum BISTRO 11154-01EURO"><div class="box" page="elektricheskiy-chaynik-l-chernyy-bodum-bistro-euro-2270r"><span class="title">испечь черный хлеб в хлебопечке Электрический чайник 1л черный Bodum BISTRO 11154-01EURO</span><p>от <span class="price">2270</span> руб.</p></div></li>
						<li class="large"><img src="photos/4c770d02fca0640e0452b9df7c46a9e0.jpeg" alt="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)" title="тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)"><div class="box" page="zaryadnoe-ustroystvo-gp-batteries-pbbshaah-1550r"><span class="title">тесто в хлебопечке kenwood Зарядное устройство GP Batteries PB27-BС4+(4х270AAH)</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/49901359ef2b43e118be22a24f1caa05.jpeg" alt="сколько стоит фритюрница Minamoto R6 (AA)" title="сколько стоит фритюрница Minamoto R6 (AA)"><div class="box" page="minamoto-r-aa-3r"><span class="title">сколько стоит фритюрница Minamoto R6 (AA)</span><p>от <span class="price">3</span> руб.</p></div></li>
						<li><img src="photos/ae6aa53dcc9eb32133541922b9ec3b16.jpeg" alt="утюг для волос профессиональный Мини весы Tanita 1579" title="утюг для волос профессиональный Мини весы Tanita 1579"><div class="box" page="mini-vesy-tanita-3900r"><span class="title">утюг для волос профессиональный Мини весы Tanita 1579</span><p>от <span class="price">3900</span> руб.</p></div></li>
						<li><img src="photos/ebd6fc853a788b316468033f41ae3864.jpeg" alt="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22" title="мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22"><div class="box" page="pylesos-dyson-motorhead-dc-34990r"><span class="title">мясорубка kenwood mg510 Пылесос Dyson motorhead DC 22</span><p>от <span class="price">34990</span> руб.</p></div></li>
						<li><img src="photos/c97072b686d00422f9e5b9490c04caab.jpeg" alt="кофеварка espresso Пылесос Thomas Inox 1545 Sfe" title="кофеварка espresso Пылесос Thomas Inox 1545 Sfe"><div class="box" page="pylesos-thomas-inox-sfe-13350r"><span class="title">кофеварка espresso Пылесос Thomas Inox 1545 Sfe</span><p>от <span class="price">13350</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("minipechkaduhovka-atlanta-atn-2200r.php", 0, -4); if (file_exists("comments/minipechkaduhovka-atlanta-atn-2200r.php")) require_once "comments/minipechkaduhovka-atlanta-atn-2200r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="minipechkaduhovka-atlanta-atn-2200r.php" method="post" onsubmit="return checkForm(this)">
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