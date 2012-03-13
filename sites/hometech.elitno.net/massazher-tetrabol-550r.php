<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-tetrabol-550r.php","чародеи зеркало");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-tetrabol-550r.php", $nick, $comment);
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
		<title>чародеи зеркало Массажер Тетрабол  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="чародеи зеркало, триммер philips отзывы, зеркало заднего вида мерседес, лампы для солярия купить, маски блески бигуди азбука красоты, массаж инструкция, косметология массаж, массаж пальцев рук, подглядывание в солярии, где купить бигуди, институт массажа и косметологии, триммер браун, курсы массажа в минске, самостоятельный массаж лица,  оборудование для массажа">
		<meta name="description" content="чародеи зеркало В основе работы простого, ручного массажера Тетрабол – точеный массаж по китайск...">
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
						<a class="photo" href="photos/a8543d64cd722ca1a2055d5dba2188d4.jpeg" title="чародеи зеркало Массажер Тетрабол"><img src="photos/a8543d64cd722ca1a2055d5dba2188d4.jpeg" alt="чародеи зеркало Массажер Тетрабол" title="чародеи зеркало Массажер Тетрабол -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-babyliss-ste-1520r.php"><img src="photos/3da7d41a61386c53690f58157cda6dc4.jpeg" alt="триммер philips отзывы Выпрямитель для волос BaByliss ST227E" title="триммер philips отзывы Выпрямитель для волос BaByliss ST227E"></a><h2>Выпрямитель для волос BaByliss ST227E</h2></li>
							<li><a href="http://hometech.elitno.net/ployka-professionalnyy-stilist-vitesse-vs-1100r.php"><img src="photos/16b9d005139a5fe78fcd77455b12971a.jpeg" alt="зеркало заднего вида мерседес Плойка Профессиональный стилист Vitesse VS-922" title="зеркало заднего вида мерседес Плойка Профессиональный стилист Vitesse VS-922"></a><h2>Плойка Профессиональный стилист Vitesse VS-922</h2></li>
							<li><a href="http://hometech.elitno.net/lozhka-dlya-chistki-yazyka-tce-k-irrigatoru-waterpik-wpe-wpe-sht-400r.php"><img src="photos/2329dcbac292ecd0d78d4e254bf209df.jpeg" alt="лампы для солярия купить Ложка для чистки языка TC-100E к ирригатору Waterpik WP100E, WP360E (2 шт.)" title="лампы для солярия купить Ложка для чистки языка TC-100E к ирригатору Waterpik WP100E, WP360E (2 шт.)"></a><h2>Ложка для чистки языка TC-100E к ирригатору Waterpik WP100E, WP360E (2 шт.)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>чародеи зеркало Массажер Тетрабол</h1>
						<div class="tb"><p>Цена: от <span class="price">550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1157.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>В основе работы простого, ручного <strong>массажера Тетрабол </strong>– точеный массаж по китайской методике Шиацу. Четыре вращающихся шара направляют свое действие на биологически активные точки тела, возвращая мышцам нормальный тонус и оказывая успокаивающее действие на нервную систему. Расположение массажных шаров распространяется на все группы мыщц. Массажер Тетрабол при регулярном использовании эффективно убирает целлюлитные образования. Массажер помогает справиться с усталостью, а также имеет лечебный эффект при остеохондрозе, артрозе, радикулите, головной боли. Благодаря небольшим размерам прибор может сопровождать вас в дороге.</p><p>Массажер ТЕТРАБОЛ поможет:</p><ul type=disc><li>устранить мышечные боли, невралгии, усталость; <li>улучшить циркуляцию крови, нормализовать обмен веществ; <li>избавить от целлюлита и жировых отложений, подкорректировать контуры тела;</li></ul><p><b>Производитель:</b> ООО «Дельта-Терм» (Россия, Москва)</p> чародеи зеркало</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/053285d569e1ae555817f73299eae874.jpeg" alt="маски блески бигуди азбука красоты Раскладной массажный стол US Medica Osaka линейка Sumo Line" title="маски блески бигуди азбука красоты Раскладной массажный стол US Medica Osaka линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-osaka-lineyka-sumo-line-21900r"><span class="title">маски блески бигуди азбука красоты Раскладной массажный стол US Medica Osaka линейка Sumo Line</span><p>от <span class="price">21900</span> руб.</p></div></li>
						<li><img src="photos/b4819229f946baeab966fd9fb7bf8470.jpeg" alt="массаж инструкция Массажное кресло Yamaguchi YA-2800" title="массаж инструкция Массажное кресло Yamaguchi YA-2800"><div class="box" page="massazhnoe-kreslo-yamaguchi-ya-270000r"><span class="title">массаж инструкция Массажное кресло Yamaguchi YA-2800</span><p>от <span class="price">270000</span> руб.</p></div></li>
						<li><img src="photos/68240754aaa9a8e7ebed1c19d1521df0.png" alt="косметология массаж Массажное кресло Fujiiryoki Cyber-Relax EC-3700" title="косметология массаж Массажное кресло Fujiiryoki Cyber-Relax EC-3700"><div class="box" page="massazhnoe-kreslo-fujiiryoki-cyberrelax-ec-337500r"><span class="title">косметология массаж Массажное кресло Fujiiryoki Cyber-Relax EC-3700</span><p>от <span class="price">337500</span> руб.</p></div></li>
						<li><img src="photos/a1b381333fae64349d21756cbea5ef5a.jpeg" alt="массаж пальцев рук Электроды к EM40 - EM80  - 4 шт." title="массаж пальцев рук Электроды к EM40 - EM80  - 4 шт."><div class="box" page="elektrody-k-em-em-sht-750r"><span class="title">массаж пальцев рук Электроды к EM40 - EM80  - 4 шт.</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li class="large"><img src="photos/92c16d267d16556f4f9df2ed4ab4d8db.jpeg" alt="подглядывание в солярии Аппликатор Ляпко Шанс 4,9" title="подглядывание в солярии Аппликатор Ляпко Шанс 4,9"><div class="box" page="applikator-lyapko-shans-760r"><span class="title">подглядывание в солярии Аппликатор Ляпко Шанс 4,9</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li class="large"><img src="photos/b8fa68534bca726355bda362e43ac70b.jpeg" alt="где купить бигуди Массажер-подушка Gezatone AMG390 1301099" title="где купить бигуди Массажер-подушка Gezatone AMG390 1301099"><div class="box" page="massazherpodushka-gezatone-amg-3290r"><span class="title">где купить бигуди Массажер-подушка Gezatone AMG390 1301099</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/364f57c9bbd57d63831a2d87ac4fd285.jpeg" alt="институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190" title="институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190"><div class="box" page="pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r"><span class="title">институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/0915015c954509bbff766b4be4039b0b.jpeg" alt="триммер браун Разогреватель для воска Gezatone с базой" title="триммер браун Разогреватель для воска Gezatone с базой"><div class="box" page="razogrevatel-dlya-voska-gezatone-s-bazoy-1490r"><span class="title">триммер браун Разогреватель для воска Gezatone с базой</span><p>от <span class="price">1490</span> руб.</p></div></li>
						<li><img src="photos/d881128511cd03aa90feb76747b82b80.jpeg" alt="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл" title="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-apelsinovyy-v-kartridzhe-ml-140r"><span class="title">курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл</span><p>от <span class="price">140</span> руб.</p></div></li>
						<li><img src="photos/ae9da361619c92f9a8cf3fb8e35d98ca.jpeg" alt="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг" title="самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг"><div class="box" page="corioliss-brush-collection-ionnyy-termobrashing-630r"><span class="title">самостоятельный массаж лица Corioliss Brush Collection Ионный Термо-Брашинг</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/53f8d91f5957e6c5723fee1b3f141a53.jpeg" alt="подарочный сертификат на массаж Лосьон после депиляции Rica Золотое Сияние 250мл" title="подарочный сертификат на массаж Лосьон после депиляции Rica Золотое Сияние 250мл"><div class="box" page="loson-posle-depilyacii-rica-zolotoe-siyanie-ml-780r"><span class="title">подарочный сертификат на массаж Лосьон после депиляции Rica Золотое Сияние 250мл</span><p>от <span class="price">780</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-tetrabol-550r.php", 0, -4); if (file_exists("comments/massazher-tetrabol-550r.php")) require_once "comments/massazher-tetrabol-550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-tetrabol-550r.php" method="post" onsubmit="return checkForm(this)">
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