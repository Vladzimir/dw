<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-maxima-mk-m-990r.php","пароварка обычная");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-maxima-mk-m-990r.php", $nick, $comment);
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
		<title>пароварка обычная Чайник электрический Maxima MK- M191  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="пароварка обычная, микроволновая печь вред, сервисный центр пылесосов, рецепт батона для хлебопечки, промышленный пылесос цена, купить хлебопечку мулинекс, мультиварка рецепты картофель, маленькие мультиварки, грибы в мультиварке, рецепты для мультиварки viconte, аэрогриль поларис отзывы, книга рецептов для хлебопечки, лучший пылесос с аквафильтром, мясорубка помощница отзывы,  микроволновая печь электросхема">
		<meta name="description" content="пароварка обычная Электрический чайник MК- M191 потрясающего ультрасовременного дизайна может стат...">
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
						<a class="photo" href="photos/46f63d5550ab774c363b5ff4ba202c31.jpeg" title="пароварка обычная Чайник электрический Maxima MK- M191"><img src="photos/46f63d5550ab774c363b5ff4ba202c31.jpeg" alt="пароварка обычная Чайник электрический Maxima MK- M191" title="пароварка обычная Чайник электрический Maxima MK- M191 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-omelette-hc-1960r.php"><img src="photos/9b2c766be9aca21d9cbe5748b263718f.jpeg" alt="микроволновая печь вред Блендер Braun MR-120 Omelette HC" title="микроволновая печь вред Блендер Braun MR-120 Omelette HC"></a><h2>Блендер Braun MR-120 Omelette HC</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-550r.php"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="сервисный центр пылесосов Блендер Atlanta АТН-338" title="сервисный центр пылесосов Блендер Atlanta АТН-338"></a><h2>Блендер Atlanta АТН-338</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektroplitka-maxima-mes-880r.php"><img src="photos/2e2056e7ef45f5df85840ea8253e7c4c.jpeg" alt="рецепт батона для хлебопечки Электроплитка Maxima MES-0252-2" title="рецепт батона для хлебопечки Электроплитка Maxima MES-0252-2"></a><h2>Электроплитка Maxima MES-0252-2</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>пароварка обычная Чайник электрический Maxima MK- M191</h1>
						<div class="tb"><p>Цена: от <span class="price">990</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18607.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник MК- M191 потрясающего ультрасовременного дизайна может стать отличным подарком и вписаться даже в самый строгий хай-тек интерьер.<br>В стильном стальном корпусе за считанные минуты вскипит 1,8 литра, специальный съемный фильтр защитит от накипи, а автоматика заблокирует включение при отсутствии воды, а за счет надежной конструкции блокировки кнопки можно не бояться облиться кипятком при случайном открытии крышки.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Мощность 2000 Вт; <li>Емкость: 1,8 л; <li>Корпус из нержавеющей стали; <li>Нагревательный элемент: спираль из нержавеющей стали; <li>Автоматическое выключение при закипании; <li>Угол вращения на подставке 360; <li>Световой индикатор работы; <li>Съемный фильтр против накипи; <li>Шкала уровня воды; <li>Внутренняя подсветка; <li>Автоматическое отключение при недостаточном количестве воды; <li>Удобное хранение шнура.. </li></ul><p><strong>Производитель: MAXIMA (Англия)</strong><br><strong>Гарантия: 1 год</strong></p> пароварка обычная</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5b5325f46d1563794a5b9b1bbec3af49.jpeg" alt="промышленный пылесос цена Йогуртница Moulinex JC1" title="промышленный пылесос цена Йогуртница Moulinex JC1"><div class="box" page="yogurtnica-moulinex-jc-1650r"><span class="title">промышленный пылесос цена Йогуртница Moulinex JC1</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/42b635368f5179e970d08ec7c08cbc10.jpeg" alt="купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей" title="купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей"><div class="box" page="multivarka-maruchi-rwfz-v-komplekte-s-keramicheskoy-kastryuley-4500r"><span class="title">купить хлебопечку мулинекс Мультиварка Maruchi RW-FZ47 в комплекте с керамической кастрюлей</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/65e8a544a49b70285af00e3f7637c4af.jpeg" alt="мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная" title="мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная"><div class="box" page="myasorubka-meat-grinder-f-sverhlegkaya-udaroprochnaya-500r"><span class="title">мультиварка рецепты картофель Мясорубка Meat Grinder F-701 сверхлегкая, ударопрочная</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/ab8e324f37683fb482e2239bd528b88e.jpeg" alt="маленькие мультиварки Мясорубка Redmond RMG-1203" title="маленькие мультиварки Мясорубка Redmond RMG-1203"><div class="box" page="myasorubka-redmond-rmg-4990r"><span class="title">маленькие мультиварки Мясорубка Redmond RMG-1203</span><p>от <span class="price">4990</span> руб.</p></div></li>
						<li class="large"><img src="photos/07f90c95ce6a7ffe3129c0eb4bb8942c.jpeg" alt="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146" title="грибы в мультиварке Электроплитка индукционная Maxima MIC-0146"><div class="box" page="elektroplitka-indukcionnaya-maxima-mic-1590r"><span class="title">грибы в мультиварке Электроплитка индукционная Maxima MIC-0146</span><p>от <span class="price">1590</span> руб.</p></div></li>
						<li class="large"><img src="photos/602afbefdc154f32c668e628ed57301c.jpeg" alt="рецепты для мультиварки viconte Соковыжималка Maxima MJ-M903" title="рецепты для мультиварки viconte Соковыжималка Maxima MJ-M903"><div class="box" page="sokovyzhimalka-maxima-mjm-1850r"><span class="title">рецепты для мультиварки viconte Соковыжималка Maxima MJ-M903</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/601488d11fe95f07b0e7e96c29a4ca5c.jpeg" alt="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White" title="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-magic-white-1100r"><span class="title">аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" alt="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118" title="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1999r"><span class="title">книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118</span><p>от <span class="price">1999</span> руб.</p></div></li>
						<li><img src="photos/d509d0771406a8c20b2506d316fad0aa.jpeg" alt="лучший пылесос с аквафильтром Чайник Melitta Look Aqua Vario" title="лучший пылесос с аквафильтром Чайник Melitta Look Aqua Vario"><div class="box" page="chaynik-melitta-look-aqua-vario-2838r"><span class="title">лучший пылесос с аквафильтром Чайник Melitta Look Aqua Vario</span><p>от <span class="price">2838</span> руб.</p></div></li>
						<li><img src="photos/457d4b7f3e82f96ca3e9bfa507402a8c.jpeg" alt="мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)" title="мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r"><span class="title">мясорубка помощница отзывы Фильтры для пылесоса Vitek VT-1859 (VT-1829)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/5b6e97489c13c0ebf62894fa7e5889c2.jpeg" alt="мини пылесос для дома Пылесос Dyson animal turbine DC 37" title="мини пылесос для дома Пылесос Dyson animal turbine DC 37"><div class="box" page="pylesos-dyson-animal-turbine-dc-27990r"><span class="title">мини пылесос для дома Пылесос Dyson animal turbine DC 37</span><p>от <span class="price">27990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-maxima-mk-m-990r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-maxima-mk-m-990r.php")) require_once "comments/chaynik-elektricheskiy-maxima-mk-m-990r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-maxima-mk-m-990r.php" method="post" onsubmit="return checkForm(this)">
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