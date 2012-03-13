<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vitek-vt–-elektrobritva-1200r.php","весы напольные электронные отзывы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vitek-vt–-elektrobritva-1200r.php", $nick, $comment);
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
		<title>весы напольные электронные отзывы Vitek VT–1377 Электробритва  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="весы напольные электронные отзывы, продам солярий бу, зеркало войны, солярий купить дешево, триммер для зоны бикини, девушка пришла на массаж, установка зеркала заднего вида, зеркало заднего вида мерседес, массаж для младенцев, что делать в солярии, массаж нижних конечностей, модели фенов, зеркало ниссан альмера, ирригатор waterpik ultra,  ремонт боковых зеркал">
		<meta name="description" content="весы напольные электронные отзывы Vitek VT-1377 – роторная электробритва для сухого бритья с тремя бритвенными гол...">
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
						<a class="photo" href="photos/adcc575e5bacc1acddf4cec685c7f5b7.jpeg" title="весы напольные электронные отзывы Vitek VT–1377 Электробритва"><img src="photos/adcc575e5bacc1acddf4cec685c7f5b7.jpeg" alt="весы напольные электронные отзывы Vitek VT–1377 Электробритва" title="весы напольные электронные отзывы Vitek VT–1377 Электробритва -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-napolnye-maxima-ms-650r.php"><img src="photos/b25e6da3b6b377c8cb0346ec6d749cd4.jpeg" alt="продам солярий бу Весы напольные Maxima MS-047" title="продам солярий бу Весы напольные Maxima MS-047"></a><h2>Весы напольные Maxima MS-047</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-napolnye-s-analizatorom-zhira-i-vody-gezatone-esga-1200r.php"><img src="photos/43a957bd80b6ff4e3954c5f31015c90c.jpeg" alt="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501" title="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501"></a><h2>Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501</h2></li>
							<li><a href="http://hometech.elitno.net/corioliss-sxe-stayler-s-dinamikom-5400r.php"><img src="photos/3236b8d5698a5c7c266d5f8f0d9d1ca6.jpeg" alt="солярий купить дешево Corioliss SXE Стайлер с динамиком" title="солярий купить дешево Corioliss SXE Стайлер с динамиком"></a><h2>Corioliss SXE Стайлер с динамиком</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>весы напольные электронные отзывы Vitek VT–1377 Электробритва</h1>
						<div class="tb"><p>Цена: от <span class="price">1200</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18362.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Vitek VT-1377 – роторная электробритва для сухого бритья с тремя бритвенными головками работающая от аккумулятора. Есть триммер для комбинированного бритья или стрижки длинных волос. Для безопасной перевозки предусмотрена дорожная блокировка, а также защитная крышка и дорожный чехол. В комплект входит щеточка для чистка.</p><p><b>Характеристики:</b></p><ul type=disc><li>Система бритья: роторная <li>Способ бритья: сухое <li>Система питания: от аккумулятора <li>Количество бритвенных головок: 3 <li>Триммер <li>Индикация зарядки <li>Дорожная блокировка <li>Комплектация: защитная крышка, дорожный чехол, щеточка для чистки </li></ul><p><b>Проиводитель: Австрия</b></p> весы напольные электронные отзывы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ca66537608944cd4881ffac56a0a3e8e.jpeg" alt="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита" title="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита"><div class="box"><a href="http://hometech.elitno.net/balzam-dlya-irrigatora-donfeel-profilaktika-parodontoza-i-gingivita-180r.php"><h3 class="title">триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита</h3><p>от <span class="price">180</span> руб.</p></a></div></li>
						<li><img src="photos/45f6a3a7c98373d30c8ccb69b3f4f008.jpeg" alt="девушка пришла на массаж Многофункциональный педикюрный набор Bario" title="девушка пришла на массаж Многофункциональный педикюрный набор Bario"><div class="box" page="mnogofunkcionalnyy-pedikyurnyy-nabor-bario-1650r"><span class="title">девушка пришла на массаж Многофункциональный педикюрный набор Bario</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/6032832465abb70306c5ea0aedd085a5.jpeg" alt="установка зеркала заднего вида Аппликатор Ляпко Ромашка" title="установка зеркала заднего вида Аппликатор Ляпко Ромашка"><div class="box" page="applikator-lyapko-romashka-2350r"><span class="title">установка зеркала заднего вида Аппликатор Ляпко Ромашка</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li><img src="photos/4672e333a6bf6781c5b059e098066f46.jpeg" alt="зеркало заднего вида мерседес Аппликатор Кузнецова" title="зеркало заднего вида мерседес Аппликатор Кузнецова"><div class="box" page="applikator-kuznecova-200r"><span class="title">зеркало заднего вида мерседес Аппликатор Кузнецова</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li class="large"><img src="photos/a3fdb4f3f35476641171d44c065fe679.jpeg" alt="массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)" title="массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)"><div class="box" page="al-volshebnaya-lenta-zdorove-segmenta-2600r"><span class="title">массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li class="large"><img src="photos/12b08f535454eb45912e69bb12756cf3.jpeg" alt="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070" title="что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070"><div class="box" page="anticellyulitnyy-vibromassazher-gezatone-skulptor-tela-amg-2000r"><span class="title">что делать в солярии Антицеллюлитный вибромассажер Gezatone Скульптор Тела AMG114 1301070</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li class="large"><img src="photos/a3331b51ae07cba95c43ef802a9f621a.jpeg" alt="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61" title="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61"><div class="box" page="massazher-dlya-nog-bodykraft-fm-12990r"><span class="title">массаж нижних конечностей Массажер для ног BODYKRAFT FM-61</span><p>от <span class="price">12990</span> руб.</p></div></li>
						<li><img src="photos/d6d662f1051663df0b15aa06e33f4f63.jpeg" alt="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365" title="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-ionicultratonic-m-2100r"><span class="title">модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365</span><p>от <span class="price">2100</span> руб.</p></div></li>
						<li><img src="photos/c1e44ae0346cc39b27bb78d6ca139c3e.jpeg" alt="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл" title="зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл"><div class="box" page="loson-posle-depilyacii-rica-mentolovyy-ml-600r"><span class="title">зеркало ниссан альмера Лосьон после депиляции Rica, ментоловый 250мл</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/0339a99d9db607aa03bad2eea7d85456.jpeg" alt="ирригатор waterpik ultra Фен Corioliss Neon" title="ирригатор waterpik ultra Фен Corioliss Neon"><div class="box" page="fen-corioliss-neon-5350r"><span class="title">ирригатор waterpik ultra Фен Corioliss Neon</span><p>от <span class="price">5350</span> руб.</p></div></li>
						<li><img src="photos/1ad6a3b32c59fb28206bf73e4dc30b08.jpeg" alt="почему закрывают зеркала Фен Atlanta АТН-86" title="почему закрывают зеркала Фен Atlanta АТН-86"><div class="box" page="fen-atlanta-atn-450r"><span class="title">почему закрывают зеркала Фен Atlanta АТН-86</span><p>от <span class="price">450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vitek-vt–-elektrobritva-1200r.php", 0, -4); if (file_exists("comments/vitek-vt–-elektrobritva-1200r.php")) require_once "comments/vitek-vt–-elektrobritva-1200r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vitek-vt–-elektrobritva-1200r.php" method="post" onsubmit="return checkForm(this)">
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