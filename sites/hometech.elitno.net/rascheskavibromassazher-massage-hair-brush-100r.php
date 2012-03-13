<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("rascheskavibromassazher-massage-hair-brush-100r.php","предлагаю массаж");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("rascheskavibromassazher-massage-hair-brush-100r.php", $nick, $comment);
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
		<title>предлагаю массаж Расческа-вибромассажер Massage Hair Brush  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="предлагаю массаж, зеркала в ростове, белая кожа солярий, зачем закрывают зеркала, курсы массажа в новосибирске, физиотерапия в стоматологии, массаж инструкция, пятна после солярия, массаж саратов, сочинение на тему зеркало, зеркало задней двери, резка стекла и зеркал, завивка на длинные волосы фото, использование эпилятора,  устройство зеркала">
		<meta name="description" content="предлагаю массаж Расческа-вибромассажер Massage Hair Brush – компактный беспроводной прибор, кото...">
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
						<a class="photo" href="photos/170780b58e3b6d00de22deb7936fbf1b.jpeg" title="предлагаю массаж Расческа-вибромассажер Massage Hair Brush"><img src="photos/170780b58e3b6d00de22deb7936fbf1b.jpeg" alt="предлагаю массаж Расческа-вибромассажер Massage Hair Brush" title="предлагаю массаж Расческа-вибромассажер Massage Hair Brush -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/multistayler-babyliss-ce-infinitix-1610r.php"><img src="photos/7ea653e31522aab2e52b2dbfda2e3cf7.jpeg" alt="зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix" title="зеркала в ростове Мультистайлер Babyliss 2021CE Infinitix"></a><h2>Мультистайлер Babyliss 2021CE Infinitix</h2></li>
							<li><a href="http://hometech.elitno.net/nabor-dlya-irrigatorov-replacement-jet-tips-brje-750r.php"><img src="photos/e6980300706af5c5f92d2f981ed0d61f.jpeg" alt="белая кожа солярий Набор для ирригаторов  REPLACEMENT Jet Tips BRJ-4E" title="белая кожа солярий Набор для ирригаторов  REPLACEMENT Jet Tips BRJ-4E"></a><h2>Набор для ирригаторов  REPLACEMENT Jet Tips BRJ-4E</h2></li>
							<li><a href="http://hometech.elitno.net/nabor-dlya-manikyura-i-pedikyura-s-nasadkami-gezatone-d-590r.php"><img src="photos/b335395a214a3a546c41305f7ef60066.jpeg" alt="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051" title="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051"></a><h2>Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>предлагаю массаж Расческа-вибромассажер Massage Hair Brush</h1>
						<div class="tb"><p>Цена: от <span class="price">100</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_5722.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><strong>Расческа-вибромассажер Massage Hair Brush</strong> – компактный беспроводной прибор, который осуществляет приятный массаж головы, активирует рост волос, хорошо тонизирует кожу. Если у вас частые головные боли, этот уникальный миниатюрный аппарат способен вам помочь. Внешняя поверхность расчески с выпуклыми полусферами специально спроектирована в соответствии со всеми особенностями строения шеи и плеч человека. Постоянное использование Massage Hair Brush увеличивает приток крови к голове, что эффективно сказывается на умственной деятельности и помогает оптимизировать внутренние резервы организма. Питание прибора осуществляется от двух батареек типа АА (приобретаются отдельно), которых хватает на долгое время. предлагаю массаж</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/bbbfd04b81d31947d9e57fb11bf3d7a4.jpeg" alt="курсы массажа в новосибирске Стационарный массажный стол US Medica Bali" title="курсы массажа в новосибирске Стационарный массажный стол US Medica Bali"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-bali-47000r"><span class="title">курсы массажа в новосибирске Стационарный массажный стол US Medica Bali</span><p>от <span class="price">47000</span> руб.</p></div></li>
						<li><img src="photos/565c863a758e1bc3e5c28686264c8804.jpeg" alt="физиотерапия в стоматологии Валик круглый L61D15 USM-003" title="физиотерапия в стоматологии Валик круглый L61D15 USM-003"><div class="box" page="valik-kruglyy-ld-usm-1200r-2"><span class="title">физиотерапия в стоматологии Валик круглый L61D15 USM-003</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/b4819229f946baeab966fd9fb7bf8470.jpeg" alt="массаж инструкция Массажное кресло Yamaguchi YA-2800" title="массаж инструкция Массажное кресло Yamaguchi YA-2800"><div class="box" page="massazhnoe-kreslo-yamaguchi-ya-270000r"><span class="title">массаж инструкция Массажное кресло Yamaguchi YA-2800</span><p>от <span class="price">270000</span> руб.</p></div></li>
						<li><img src="photos/85862bf798272aba1c20426529f6a0e7.jpeg" alt="пятна после солярия Массажное кресло Anatomico Verdi" title="пятна после солярия Массажное кресло Anatomico Verdi"><div class="box" page="massazhnoe-kreslo-anatomico-verdi-175000r"><span class="title">пятна после солярия Массажное кресло Anatomico Verdi</span><p>от <span class="price">175000</span> руб.</p></div></li>
						<li class="large"><img src="photos/04903c082d5df734adcc169f980fc2f0.jpeg" alt="массаж саратов Прибор для лечения болей в спине Backlife" title="массаж саратов Прибор для лечения болей в спине Backlife"><div class="box" page="pribor-dlya-lecheniya-boley-v-spine-backlife-9000r"><span class="title">массаж саратов Прибор для лечения болей в спине Backlife</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li class="large"><img src="photos/e1856897eeea415e6cba2ceb17732435.jpeg" alt="сочинение на тему зеркало Обруч-тренажер  FITNESS HOOP Evo Gezatone 131101" title="сочинение на тему зеркало Обруч-тренажер  FITNESS HOOP Evo Gezatone 131101"><div class="box" page="obruchtrenazher-fitness-hoop-evo-gezatone-850r"><span class="title">сочинение на тему зеркало Обруч-тренажер  FITNESS HOOP Evo Gezatone 131101</span><p>от <span class="price">850</span> руб.</p></div></li>
						<li class="large"><img src="photos/75cde016b01871ff8d9976da31b77fd1.jpeg" alt="зеркало задней двери Массажер ZENET TL-MHT-C" title="зеркало задней двери Массажер ZENET TL-MHT-C"><div class="box" page="massazher-zenet-tlmhtc-2050r"><span class="title">зеркало задней двери Массажер ZENET TL-MHT-C</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li><img src="photos/32653bc15e232e434b4131f9b427cfdf.jpeg" alt="резка стекла и зеркал Массажер для профилактики варикоза Aviafit" title="резка стекла и зеркал Массажер для профилактики варикоза Aviafit"><div class="box" page="massazher-dlya-profilaktiki-varikoza-aviafit-2000r"><span class="title">резка стекла и зеркал Массажер для профилактики варикоза Aviafit</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/cae249c48fcfeacbbf7bd176d817de70.jpeg" alt="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл" title="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r"><span class="title">завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/2fd87a77eb352ca0621f915c1a9b541b.jpeg" alt="использование эпилятора Фен Atlanta АТН-882" title="использование эпилятора Фен Atlanta АТН-882"><div class="box" page="fen-atlanta-atn-2930r"><span class="title">использование эпилятора Фен Atlanta АТН-882</span><p>от <span class="price">2930</span> руб.</p></div></li>
						<li><img src="photos/903db6a8dda8fc3e969d37c0855d0ace.jpeg" alt="косметология массаж Фен Vitesse VS-944" title="косметология массаж Фен Vitesse VS-944"><div class="box" page="fen-vitesse-vs-640r-2"><span class="title">косметология массаж Фен Vitesse VS-944</span><p>от <span class="price">640</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("rascheskavibromassazher-massage-hair-brush-100r.php", 0, -4); if (file_exists("comments/rascheskavibromassazher-massage-hair-brush-100r.php")) require_once "comments/rascheskavibromassazher-massage-hair-brush-100r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="rascheskavibromassazher-massage-hair-brush-100r.php" method="post" onsubmit="return checkForm(this)">
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