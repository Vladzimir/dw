<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-zauber-r-1830r.php","овсянка в пароварке");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-zauber-r-1830r.php", $nick, $comment);
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
		<title>овсянка в пароварке Электрический чайник  Zauber R-380  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="овсянка в пароварке, купить водяной пылесос, конвейер мясорубки сканворд, рецепты для хлебопечки sd 2500, миксер bosch mfq 4020, лампа для аэрогриля, рисование утюгом, соковыжималка садовая, пылесос циклонного типа, аэрогриль рецепты картофель, мультиварка скороварка moulinex, пылесос zelmer цена, блендер рецепты видео, чайник или термопот,  трубка для пылесоса">
		<meta name="description" content="овсянка в пароварке Чайник R-380 от шведской компании Zauber. Основательная конструкция вкупе с нена...">
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
						<a class="photo" href="photos/b3fae48615963478f00e0c05f3baa485.jpeg" title="овсянка в пароварке Электрический чайник  Zauber R-380"><img src="photos/b3fae48615963478f00e0c05f3baa485.jpeg" alt="овсянка в пароварке Электрический чайник  Zauber R-380" title="овсянка в пароварке Электрический чайник  Zauber R-380 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-snake-n-take-900r.php"><img src="photos/3a6f8f5bcd6b4c656110981eb9f3285b.jpeg" alt="купить водяной пылесос Блендер Snake n Take" title="купить водяной пылесос Блендер Snake n Take"></a><h2>Блендер Snake n Take</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-braun-mr-multiquick-3360r.php"><img src="photos/94a68ac1086ff8fbedebcd6e22667c94.jpeg" alt="конвейер мясорубки сканворд Блендер Braun MR-7 730 Multiquick" title="конвейер мясорубки сканворд Блендер Braun MR-7 730 Multiquick"></a><h2>Блендер Braun MR-7 730 Multiquick</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-maxima-mhb-1190r.php"><img src="photos/84ca91dc781f0bf5092809f8f5c5bf57.jpeg" alt="рецепты для хлебопечки sd 2500 Блендер Maxima MHB-0529" title="рецепты для хлебопечки sd 2500 Блендер Maxima MHB-0529"></a><h2>Блендер Maxima MHB-0529</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>овсянка в пароварке Электрический чайник  Zauber R-380</h1>
						<div class="tb"><p>Цена: от <span class="price">1830</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_17274.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Чайник R-380 от шведской компании Zauber. Основательная конструкция вкупе с ненавязчивой подсветкой внутри прозрачного корпуса будет радовать вас каждое утро. Аккуратный носик не даст пролиться лишнему. Удобно наливать воду, ведь при нажатии кнопки крышка автоматически встаёт в вертикальное положение. Поверхности соприкосновения с водой выполнены из пищевой гигиенической стали Food-Friend</p><p><b>Технические характеристики:</b></p><ul><li>Объём: 1,7 литра</li><li>Потребляемая мощность 2000 Ватт</li><li>Материал корпуса металл/ закалённое термо-стекло</li><li>Тип нагревательного элемента дисковый нагреватель</li><li>Шкала уровня воды: Есть</li><li>Автоотключение: Есть</li></ul><p><strong>Особенности:</strong></p><ul><li>Запатентованный механизм открывания, съёмный фильтр от накипи</li><li>Система шумоподавления</li><li>Пищевая гигиеническая сталь Food-Friend</li></ul><p><b>Производитель:</b>Швеция</p><p><b>Гарантия:</b>25 месяцев</p> овсянка в пароварке</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/30122165cbc4e4755f8a550e028ecb69.jpeg" alt="миксер bosch mfq 4020 Микроволновая печь с грилем Moulinex MW221031 20 л, серебро" title="миксер bosch mfq 4020 Микроволновая печь с грилем Moulinex MW221031 20 л, серебро"><div class="box" page="mikrovolnovaya-pech-s-grilem-moulinex-mw-l-serebro-4430r"><span class="title">миксер bosch mfq 4020 Микроволновая печь с грилем Moulinex MW221031 20 л, серебро</span><p>от <span class="price">4430</span> руб.</p></div></li>
						<li><img src="photos/c2ec0f6a659b8874d2e6e8a30149501a.jpeg" alt="лампа для аэрогриля Мультиварка Maruchi  RW-FZ45F" title="лампа для аэрогриля Мультиварка Maruchi  RW-FZ45F"><div class="box" page="multivarka-maruchi-rwfzf-2700r"><span class="title">лампа для аэрогриля Мультиварка Maruchi  RW-FZ45F</span><p>от <span class="price">2700</span> руб.</p></div></li>
						<li><img src="photos/1f7b9f216facd163cc074eb10bad1faf.jpeg" alt="рисование утюгом Соковыжималка Moulinex BKA1" title="рисование утюгом Соковыжималка Moulinex BKA1"><div class="box" page="sokovyzhimalka-moulinex-bka-2400r"><span class="title">рисование утюгом Соковыжималка Moulinex BKA1</span><p>от <span class="price">2400</span> руб.</p></div></li>
						<li><img src="photos/a73fe1f79d4e2459d6da89e07445f626.jpeg" alt="соковыжималка садовая Электрический чайник Atlanta АТН-738" title="соковыжималка садовая Электрический чайник Atlanta АТН-738"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-520r"><span class="title">соковыжималка садовая Электрический чайник Atlanta АТН-738</span><p>от <span class="price">520</span> руб.</p></div></li>
						<li class="large"><img src="photos/0207c29eb474672a9dc7b75c9efd4bab.jpeg" alt="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360" title="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-golubye-cvety-zauber-eco-1760r-2"><span class="title">пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li class="large"><img src="photos/7bfc4f4031d68720fdce5209cf8c8c0d.jpeg" alt="аэрогриль рецепты картофель Мини-весы Tanita 1479V" title="аэрогриль рецепты картофель Мини-весы Tanita 1479V"><div class="box" page="minivesy-tanita-v-3000r"><span class="title">аэрогриль рецепты картофель Мини-весы Tanita 1479V</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li class="large"><img src="photos/96ed77acce770bf04afcf29723d61326.jpeg" alt="мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas" title="мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1000r-2"><span class="title">мультиварка скороварка moulinex Бумажные фильтры-мешки 300 (787-102) для Thomas</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/fdcb89c9c94f7f3223bb9f8f472f7a54.jpeg" alt="пылесос zelmer цена Пятновыводитель Dyson Dyzolv" title="пылесос zelmer цена Пятновыводитель Dyson Dyzolv"><div class="box" page="pyatnovyvoditel-dyson-dyzolv-790r"><span class="title">пылесос zelmer цена Пятновыводитель Dyson Dyzolv</span><p>от <span class="price">790</span> руб.</p></div></li>
						<li><img src="photos/7e736b7b32dea00ff19d5eefa59427b8.jpeg" alt="блендер рецепты видео Пылесос Thomas Power Pack 1620" title="блендер рецепты видео Пылесос Thomas Power Pack 1620"><div class="box" page="pylesos-thomas-power-pack-4300r"><span class="title">блендер рецепты видео Пылесос Thomas Power Pack 1620</span><p>от <span class="price">4300</span> руб.</p></div></li>
						<li><img src="photos/aedfc5d509b81412081451eb51f176f9.jpeg" alt="чайник или термопот Утюг Vitek VT-1206" title="чайник или термопот Утюг Vitek VT-1206"><div class="box" page="utyug-vitek-vt-1330r"><span class="title">чайник или термопот Утюг Vitek VT-1206</span><p>от <span class="price">1330</span> руб.</p></div></li>
						<li><img src="photos/9c44667cf58b669d98b20d3675bbd856.jpeg" alt="дорогая мультиварка Утюг Vitek VT-1221 серый" title="дорогая мультиварка Утюг Vitek VT-1221 серый"><div class="box" page="utyug-vitek-vt-seryy-1680r"><span class="title">дорогая мультиварка Утюг Vitek VT-1221 серый</span><p>от <span class="price">1680</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-zauber-r-1830r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-zauber-r-1830r.php")) require_once "comments/elektricheskiy-chaynik-zauber-r-1830r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-zauber-r-1830r.php" method="post" onsubmit="return checkForm(this)">
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