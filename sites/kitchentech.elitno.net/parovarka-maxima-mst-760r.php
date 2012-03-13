<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("parovarka-maxima-mst-760r.php","микроволновая печь с духовкой");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("parovarka-maxima-mst-760r.php", $nick, $comment);
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
		<title>микроволновая печь с духовкой Пароварка Maxima MST-0511  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="микроволновая печь с духовкой, мультиварка виконте купить, кофеварка clatronic, рецепты для хлебопечки с сыром, насадки для мясорубки zelmer, приготовление майонеза в блендере, как выбрать утюг отзывы, блендер philips hr 1617, аэрогриль hotter economy, пылесос thomas s1, моющий пылесос для дома, таблетки для очистки кофемашины, карандаш для чистки утюга, рецепт печенья в вафельнице,  возможности блендера">
		<meta name="description" content="микроволновая печь с духовкой Пароварка Maxima,  мощностью 400 Вт, придется по вкусу любителям здоровой пищи, ...">
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
						<a class="photo" href="photos/014eea2e4ace248a80b3ce72354f4315.jpeg" title="микроволновая печь с духовкой Пароварка Maxima MST-0511"><img src="photos/014eea2e4ace248a80b3ce72354f4315.jpeg" alt="микроволновая печь с духовкой Пароварка Maxima MST-0511" title="микроволновая печь с духовкой Пароварка Maxima MST-0511 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-lattea-violet-35700r.php"><img src="photos/2c16cbe8f56a0f4bc3c211204b3a9f27.jpeg" alt="мультиварка виконте купить Эспрессо-кофемашина Melitta Caffeo Lattea Violet (4.0009.93)" title="мультиварка виконте купить Эспрессо-кофемашина Melitta Caffeo Lattea Violet (4.0009.93)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Lattea Violet (4.0009.93)</h2></li>
							<li><a href="http://kitchentech.elitno.net/zauber-kofemolka-z-1310r.php"><img src="photos/9249d045a56a8d6e38902f959401f604.jpeg" alt="кофеварка clatronic Zauber Кофемолка  Z-490" title="кофеварка clatronic Zauber Кофемолка  Z-490"></a><h2>Zauber Кофемолка  Z-490</h2></li>
							<li><a href="http://kitchentech.elitno.net/multivarka-moulinex-mk-4170r.php"><img src="photos/f522dce957deccc1ec8ad4658577e80b.jpeg" alt="рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330" title="рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330"></a><h2>Мультиварка Moulinex MK700330</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>микроволновая печь с духовкой Пароварка Maxima MST-0511</h1>
						<div class="tb"><p>Цена: от <span class="price">760</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_20504.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Пароварка Maxima,  мощностью 400 Вт, придется по вкусу любителям здоровой пищи, приготовленной на  пару. Два прозрачных резервуара для приготовления вкусной и полезной пищи.  Через 30 секунд после включения активируется функция «Быстрый пар».  Максимальное время работы 60 минут, при недостаточном количестве воды пароварка  автоматически отключается. Управление механическое. Корпус и паровые корзины  выполнены из пластика (корзины из прозрачного). Есть чаша для приготовления  риса.</p><p><br><strong>Характеристики:</strong></p><ul><li>Количество ярусов: 2;</li><li>Тип управления: механическое;</li><li>Мощность: 400 Вт;</li><li>Таймер: на 60 мин, с отключением;</li><li>Индикация включения;</li><li>Отключение при недостатке воды;</li><li>Материал: пластик;</li><li>Чаша для риса;</li><li>Режим «Быстрый пар».</li></ul><p><strong>Производитель:</strong><strong> Maxima (Китай)</strong><br><strong>Изготовитель: Китай</strong><br><strong>Гарантия: 12 месяцев</strong></p> микроволновая печь с духовкой</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7476c2912d4d9c99682e7b20dcc24385.jpeg" alt="насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192" title="насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192"><div class="box" page="elektroplita-indukcionnaya-atlanta-ath-1900r"><span class="title">насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/4aba59e656a62396ee01dc9ed0a83fa8.jpeg" alt="приготовление майонеза в блендере Соковыжималка TURBO" title="приготовление майонеза в блендере Соковыжималка TURBO"><div class="box" page="sokovyzhimalka-turbo-7790r"><span class="title">приготовление майонеза в блендере Соковыжималка TURBO</span><p>от <span class="price">7790</span> руб.</p></div></li>
						<li><img src="photos/7d63a182df07dd9be547ac2724aeed46.jpeg" alt="как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO" title="как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-krasnaya-bodum-bistro-euro-3340r"><span class="title">как выбрать утюг отзывы Электрическая соковыжималка красная Bodum BISTRO 11149-294EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li><img src="photos/c4c3375bd5e900bb92cb2c5b9021e247.jpeg" alt="блендер philips hr 1617 Термопот  Redmond RTP-M801" title="блендер philips hr 1617 Термопот  Redmond RTP-M801"><div class="box" page="termopot-redmond-rtpm-3290r"><span class="title">блендер philips hr 1617 Термопот  Redmond RTP-M801</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/31a34f17d596d6c34798e2946dbbde29.jpeg" alt="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный" title="аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-krasnyy-1790r"><span class="title">аэрогриль hotter economy Чайник электрический Vitek VT-1140 красный</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li class="large"><img src="photos/c73e008984140d52a15fd324bddeb59f.jpeg" alt="пылесос thomas s1 Чайник электрический Vitek VT-1141" title="пылесос thomas s1 Чайник электрический Vitek VT-1141"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r-2"><span class="title">пылесос thomas s1 Чайник электрический Vitek VT-1141</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/b6d12be4b9eb96a31c69e83c45163c6c.jpeg" alt="моющий пылесос для дома Чайник электрический Atlanta ATH-751" title="моющий пылесос для дома Чайник электрический Atlanta ATH-751"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-1600r"><span class="title">моющий пылесос для дома Чайник электрический Atlanta ATH-751</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/ed1507cb4c766d544261d1f0cc2c6466.jpeg" alt="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764" title="таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764"><div class="box" page="chayniktermos-atlanta-atn-1570r"><span class="title">таблетки для очистки кофемашины Чайник-термос  Atlanta АТН-764</span><p>от <span class="price">1570</span> руб.</p></div></li>
						<li><img src="photos/ab7fd4cacdc88b690decc0d20bd53770.jpeg" alt="карандаш для чистки утюга Чайник-термос Atlanta АТН-768" title="карандаш для чистки утюга Чайник-термос Atlanta АТН-768"><div class="box" page="chayniktermos-atlanta-atn-1700r"><span class="title">карандаш для чистки утюга Чайник-термос Atlanta АТН-768</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li><img src="photos/75de77ac7d47967464a4abeb2e9a64d1.jpeg" alt="рецепт печенья в вафельнице Чайник Melitta Look Aqua (Basic)" title="рецепт печенья в вафельнице Чайник Melitta Look Aqua (Basic)"><div class="box" page="chaynik-melitta-look-aqua-basic-2190r"><span class="title">рецепт печенья в вафельнице Чайник Melitta Look Aqua (Basic)</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/c760072d30fa7e68aaaf26403c36f72a.jpeg" alt="соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter" title="соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter"><div class="box" page="pylesos-thomas-genius-s-aquafilter-10840r"><span class="title">соковыжималка сатурн Пылесос Thomas Genius S2 Aquafilter</span><p>от <span class="price">10840</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("parovarka-maxima-mst-760r.php", 0, -4); if (file_exists("comments/parovarka-maxima-mst-760r.php")) require_once "comments/parovarka-maxima-mst-760r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="parovarka-maxima-mst-760r.php" method="post" onsubmit="return checkForm(this)">
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