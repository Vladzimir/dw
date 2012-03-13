<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("stul-dlya-massazhista-us-medica-rio-4900r.php","триммер для бровей");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("stul-dlya-massazhista-us-medica-rio-4900r.php", $nick, $comment);
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
		<title>триммер для бровей Стул для массажиста US Medica Rio  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="триммер для бровей, массаж подглядывание, зеркала на ауди а6, массаж пальчиков, книга маникюр и педикюр, эксплуатация электронных весов, массаж в россии, даньков зеркала, ионизатор воды купить, efbe schott солярий, электронные весы дешево, игры делаем маникюр и педикюр, дарсонваль купить в спб, зеркало левое форд фокус,  зеркало горизонтальное">
		<meta name="description" content="триммер для бровей Стул для массажиста US Medica Rio – это отличный табурет для косметологов и масс...">
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
						<a class="photo" href="photos/e67346f45fbf78ddf94a46d69440b8ed.jpeg" title="триммер для бровей Стул для массажиста US Medica Rio"><img src="photos/e67346f45fbf78ddf94a46d69440b8ed.jpeg" alt="триммер для бровей Стул для массажиста US Medica Rio" title="триммер для бровей Стул для массажиста US Medica Rio -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3000r.php"><img src="photos/fecc03dbb56fe547a8ffb39898e3559d.jpeg" alt="массаж подглядывание Весы электронные напольные с анализатором жира Tanita BC-570" title="массаж подглядывание Весы электронные напольные с анализатором жира Tanita BC-570"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-570</h2></li>
							<li><a href="http://hometech.elitno.net/stayler-corioliss-mini-root-lifter-chernyy-2650r.php"><img src="photos/793f5e34425900f9f8cb0286c947d677.jpeg" alt="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный" title="зеркала на ауди а6 Стайлер Corioliss Mini Root Lifter черный"></a><h2>Стайлер Corioliss Mini Root Lifter черный</h2></li>
							<li><a href="http://hometech.elitno.net/oserebritel-vody-georgiy-2880r.php"><img src="photos/0891aaac96a9696aa1419e17da073bfe.jpeg" alt="массаж пальчиков Осеребритель воды Георгий" title="массаж пальчиков Осеребритель воды Георгий"></a><h2>Осеребритель воды Георгий</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>триммер для бровей Стул для массажиста US Medica Rio</h1>
						<div class="tb"><p>Цена: от <span class="price">4900</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_13638.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Стул для массажиста US Medica R</b><b>io </b>– это отличный табурет для косметологов и массажистов. Удобный и функциональный, он сделает ежедневную работу гораздо удобнее и приятнее. Сиденье отличается особой мягкостью, обито прочной искусственной кожей, которая легко моется и не требует особого ухода. Высота стула регулируется, и может быть 44 – 58 см. Табурет <b>R</b><b>io </b>от американской компании <b>US Medica</b> – это прочность, надежность и гарантия качества. </p><p><b>Характеристики</b>:</p><ul type=disc><li>Максимальная нагрузка: 140 кг; <li>Вес: 4.5 кг; <li>Высота: 44 см - 58 см; <li>Диаметр сиденья: 38 см; <li>Толщина сиденья: 10 см; <li>Наполнитель: многослойная система SemiFirm; <li>Прочная искусственная кожа; <li>Цвет: бежевый.</li></ul><p><b>Производитель</b>: US Medica LLC</p><p><b>Страна</b>: США</p> триммер для бровей</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/641d3cc1404ad4cab325411237f51a54.jpeg" alt="книга маникюр и педикюр Ирригатор полости рта Waterpik WP-70" title="книга маникюр и педикюр Ирригатор полости рта Waterpik WP-70"><div class="box" page="irrigator-polosti-rta-waterpik-wp-3500r"><span class="title">книга маникюр и педикюр Ирригатор полости рта Waterpik WP-70</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li><img src="photos/80751e023e3ff12de485090c14fbecdd.jpeg" alt="эксплуатация электронных весов Валик под шею L35D9 USM-010" title="эксплуатация электронных весов Валик под шею L35D9 USM-010"><div class="box" page="valik-pod-sheyu-ld-usm-1000r"><span class="title">эксплуатация электронных весов Валик под шею L35D9 USM-010</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/2cb4e8a91d245f53ceebe70f42a3b86c.jpeg" alt="массаж в россии Коврик малый Ляпко АЛ" title="массаж в россии Коврик малый Ляпко АЛ"><div class="box" page="kovrik-malyy-lyapko-al-890r"><span class="title">массаж в россии Коврик малый Ляпко АЛ</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/991e5918a98c4f174a34a2f80873edbd.jpeg" alt="даньков зеркала Массажная накидка шиатсу  Beurer MG190" title="даньков зеркала Массажная накидка шиатсу  Beurer MG190"><div class="box" page="massazhnaya-nakidka-shiatsu-beurer-mg-5500r"><span class="title">даньков зеркала Массажная накидка шиатсу  Beurer MG190</span><p>от <span class="price">5500</span> руб.</p></div></li>
						<li class="large"><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li class="large"><img src="photos/78dcc0183deafce2449388d025ca7df3.jpeg" alt="efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01" title="efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01"><div class="box" page="mashinka-dlya-strizhki-volos-i-borody-valera-contour-x-ceramic-2190r"><span class="title">efbe schott солярий Машинка для стрижки волос и бороды Valera Contour X Ceramic 625.01</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li class="large"><img src="photos/68c5ed4efd2baf3bd4ba5079f66017fc.jpeg" alt="электронные весы дешево Солярий для лица Efbe-Schott 826" title="электронные весы дешево Солярий для лица Efbe-Schott 826"><div class="box" page="solyariy-dlya-lica-efbeschott-4800r"><span class="title">электронные весы дешево Солярий для лица Efbe-Schott 826</span><p>от <span class="price">4800</span> руб.</p></div></li>
						<li><img src="photos/9b24354d91fc7d0efe4ae6ea4a04db99.jpeg" alt="игры делаем маникюр и педикюр Фен Atlanta АТН-864" title="игры делаем маникюр и педикюр Фен Atlanta АТН-864"><div class="box" page="fen-atlanta-atn-720r"><span class="title">игры делаем маникюр и педикюр Фен Atlanta АТН-864</span><p>от <span class="price">720</span> руб.</p></div></li>
						<li><img src="photos/90fa21a88e7efe788816cbd3a61d1a96.jpeg" alt="дарсонваль купить в спб Фен Vitesse VS-926" title="дарсонваль купить в спб Фен Vitesse VS-926"><div class="box" page="fen-vitesse-vs-1010r"><span class="title">дарсонваль купить в спб Фен Vitesse VS-926</span><p>от <span class="price">1010</span> руб.</p></div></li>
						<li><img src="photos/2ed61f756f2046ea228b3ced521be510.jpeg" alt="зеркало левое форд фокус Бритва электрическая Vitesse VS-362" title="зеркало левое форд фокус Бритва электрическая Vitesse VS-362"><div class="box" page="britva-elektricheskaya-vitesse-vs-1400r"><span class="title">зеркало левое форд фокус Бритва электрическая Vitesse VS-362</span><p>от <span class="price">1400</span> руб.</p></div></li>
						<li><img src="photos/88f089fba3994b2424571c824d4df2f4.jpeg" alt="массаж медведково Электробритва Vitesse VS-365" title="массаж медведково Электробритва Vitesse VS-365"><div class="box" page="elektrobritva-vitesse-vs-910r"><span class="title">массаж медведково Электробритва Vitesse VS-365</span><p>от <span class="price">910</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("stul-dlya-massazhista-us-medica-rio-4900r.php", 0, -4); if (file_exists("comments/stul-dlya-massazhista-us-medica-rio-4900r.php")) require_once "comments/stul-dlya-massazhista-us-medica-rio-4900r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="stul-dlya-massazhista-us-medica-rio-4900r.php" method="post" onsubmit="return checkForm(this)">
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