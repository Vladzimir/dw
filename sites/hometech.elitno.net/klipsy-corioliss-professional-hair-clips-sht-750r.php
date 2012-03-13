<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("klipsy-corioliss-professional-hair-clips-sht-750r.php","кабина для солярия");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("klipsy-corioliss-professional-hair-clips-sht-750r.php", $nick, $comment);
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
		<title>кабина для солярия Клипсы Corioliss Professional Hair Clips 8 шт  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кабина для солярия, триммер екатеринбург, соблазнил массажем, книга маникюр и педикюр, карат де 212 дарсонваль насадки, зеркало напротив входной двери, антирадар зеркало, массаж саратов, боковые зеркала 2106, зеркала лорак песня, аппарат дарсонваль отзывы, купить фен в минске, камера с кривым зеркалом, бигуди своими руками,  фен makita">
		<meta name="description" content="кабина для солярия Надежная конструкция и эффективность клипс Professional Hair Clips от Corioliss ...">
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
						<a class="photo" href="photos/d9208946e2e1dbc0a6fe02e91ec3f7ff.jpeg" title="кабина для солярия Клипсы Corioliss Professional Hair Clips 8 шт"><img src="photos/d9208946e2e1dbc0a6fe02e91ec3f7ff.jpeg" alt="кабина для солярия Клипсы Corioliss Professional Hair Clips 8 шт" title="кабина для солярия Клипсы Corioliss Professional Hair Clips 8 шт -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-es-estraightener-1820r.php"><img src="photos/f3ed2f2a457bc3c47d247e9bbfe87664.jpeg" alt="триммер екатеринбург Выпрямитель для волос Braun ES1 E-Straightener" title="триммер екатеринбург Выпрямитель для волос Braun ES1 E-Straightener"></a><h2>Выпрямитель для волос Braun ES1 E-Straightener</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-1900r.php"><img src="photos/ed0c34c7ee29ed14f07ab5b9a731bbc5.jpeg" alt="соблазнил массажем Зеркало Beurer BS 59 косметическое" title="соблазнил массажем Зеркало Beurer BS 59 косметическое"></a><h2>Зеркало Beurer BS 59 косметическое</h2></li>
							<li><a href="http://hometech.elitno.net/irrigator-polosti-rta-waterpik-wp-3500r.php"><img src="photos/641d3cc1404ad4cab325411237f51a54.jpeg" alt="книга маникюр и педикюр Ирригатор полости рта Waterpik WP-70" title="книга маникюр и педикюр Ирригатор полости рта Waterpik WP-70"></a><h2>Ирригатор полости рта Waterpik WP-70</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кабина для солярия Клипсы Corioliss Professional Hair Clips 8 шт</h1>
						<div class="tb"><p>Цена: от <span class="price">750</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_14422.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Надежная конструкция и эффективность клипс Professional Hair Clips от Corioliss покоряет, а их ультрасовременный дизайн не оставит равнодушным не только самого мастера, но и его клиента. Клипсы крепко держат любой объем волос, они не скользят, не ржавеют (даже в стальной части). В комплект входит восемь клипс.</p><p><b>Особенности и преимущества:</b></p><ul type=disc><li>Способны крепко держать любой объем волос; <li>Не скользят и не ржавеют - даже стальная часть; <li>Эффектный дизайн; <li>В комплекте входят 8 клипс.</li></ul><p><b>Производитель:</b> Corioliss.</p><p><b>Страна:</b> Англия.</p> кабина для солярия</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9af88bf8f0a341b5c9eda8033fc64175.jpeg" alt="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo" title="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo"><div class="box" page="massazhnoe-kreslo-us-medica-indigo-95000r"><span class="title">карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo</span><p>от <span class="price">95000</span> руб.</p></div></li>
						<li><img src="photos/0028121fe8b92eb1330cfdeab7a690b7.jpeg" alt="зеркало напротив входной двери Аппликатор Ляпко Квадро 5,8" title="зеркало напротив входной двери Аппликатор Ляпко Квадро 5,8"><div class="box" page="applikator-lyapko-kvadro-1460r"><span class="title">зеркало напротив входной двери Аппликатор Ляпко Квадро 5,8</span><p>от <span class="price">1460</span> руб.</p></div></li>
						<li><img src="photos/99c6930539a5dbb19e5a1ae959e6833b.jpeg" alt="антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)" title="антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)"><div class="box" page="vakuumnyy-massazher-celluless-anticellyulit-1600r"><span class="title">антирадар зеркало Вакуумный массажер Celluless (Антицеллюлит)</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/04903c082d5df734adcc169f980fc2f0.jpeg" alt="массаж саратов Прибор для лечения болей в спине Backlife" title="массаж саратов Прибор для лечения болей в спине Backlife"><div class="box" page="pribor-dlya-lecheniya-boley-v-spine-backlife-9000r"><span class="title">массаж саратов Прибор для лечения болей в спине Backlife</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li class="large"><img src="photos/cf91897ff59703e8e13711725a1fccfc.jpeg" alt="боковые зеркала 2106 Массажный набор Beurer MG30" title="боковые зеркала 2106 Массажный набор Beurer MG30"><div class="box" page="massazhnyy-nabor-beurer-mg-1950r"><span class="title">боковые зеркала 2106 Массажный набор Beurer MG30</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/7027adb71f2155ad74bf69c108416d64.jpeg" alt="зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии" title="зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-superlifting-m-s-funkciey-svetoterapii-3650r"><span class="title">зеркала лорак песня Прибор для ухода за кожей лица Gezatone Superlifting m355 с функцией светотерапии</span><p>от <span class="price">3650</span> руб.</p></div></li>
						<li class="large"><img src="photos/616ba570246d7cf4f5151a66514ad3cf.jpeg" alt="аппарат дарсонваль отзывы Заколки для волос в наборе Bradex Beauty and Health" title="аппарат дарсонваль отзывы Заколки для волос в наборе Bradex Beauty and Health"><div class="box" page="zakolki-dlya-volos-v-nabore-bradex-beauty-and-health-500r"><span class="title">аппарат дарсонваль отзывы Заколки для волос в наборе Bradex Beauty and Health</span><p>от <span class="price">500</span> руб.</p></div></li>
						<li><img src="photos/06a7400bd6489ecdebf0a840f4cfdc3f.jpeg" alt="купить фен в минске Триммер Vitesse VS-382" title="купить фен в минске Триммер Vitesse VS-382"><div class="box" page="trimmer-vitesse-vs-440r"><span class="title">купить фен в минске Триммер Vitesse VS-382</span><p>от <span class="price">440</span> руб.</p></div></li>
						<li><img src="photos/456587fb45bdda7592a0d89b7eb8e4c1.jpeg" alt="камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт" title="камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт"><div class="box" page="fen-babyliss-e-vt-2780r"><span class="title">камера с кривым зеркалом Фен Babyliss 6612E 2200 Вт</span><p>от <span class="price">2780</span> руб.</p></div></li>
						<li><img src="photos/88894b08c861cb5305303cf8ba8908c8.jpeg" alt="бигуди своими руками Фен Babyliss D121E 1900 Вт" title="бигуди своими руками Фен Babyliss D121E 1900 Вт"><div class="box" page="fen-babyliss-de-vt-1000r"><span class="title">бигуди своими руками Фен Babyliss D121E 1900 Вт</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/1ad6a3b32c59fb28206bf73e4dc30b08.jpeg" alt="почему закрывают зеркала Фен Atlanta АТН-86" title="почему закрывают зеркала Фен Atlanta АТН-86"><div class="box" page="fen-atlanta-atn-450r"><span class="title">почему закрывают зеркала Фен Atlanta АТН-86</span><p>от <span class="price">450</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("klipsy-corioliss-professional-hair-clips-sht-750r.php", 0, -4); if (file_exists("comments/klipsy-corioliss-professional-hair-clips-sht-750r.php")) require_once "comments/klipsy-corioliss-professional-hair-clips-sht-750r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="klipsy-corioliss-professional-hair-clips-sht-750r.php" method="post" onsubmit="return checkForm(this)">
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