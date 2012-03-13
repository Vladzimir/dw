<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-dlya-glaz-gezatone-breeze-2000r.php","дарсонваль лучший");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-dlya-glaz-gezatone-breeze-2000r.php", $nick, $comment);
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
		<title>дарсонваль лучший Массажер для глаз Gezatone Breeze  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="дарсонваль лучший, вакансии маникюр педикюр, гадание на зеркале отзывы, солярий для лица купить, успенская зеркала, техника массажа сердца, эпилятор для лица, массаж саратов, массаж русской девушки, ионизатор воды купить, индийский массаж, скульптурирующий массаж, зеркала для спален, купить машинку для стрижки животных,  купить фен в киеве">
		<meta name="description" content="дарсонваль лучший Уникальный расслабляющий массажер для глаз Gezatone Breeze представляет собой ма...">
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
						<a class="photo" href="photos/ce5c28be2477a14562f122d5df10bc7e.jpeg" title="дарсонваль лучший Массажер для глаз Gezatone Breeze"><img src="photos/ce5c28be2477a14562f122d5df10bc7e.jpeg" alt="дарсонваль лучший Массажер для глаз Gezatone Breeze" title="дарсонваль лучший Массажер для глаз Gezatone Breeze -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-bmi-2600r.php"><img src="photos/09cdbe94dd4282881ebf10408413f6e1.jpeg" alt="вакансии маникюр педикюр Весы электронные напольные Beurer GS49 BMI" title="вакансии маникюр педикюр Весы электронные напольные Beurer GS49 BMI"></a><h2>Весы электронные напольные Beurer GS49 BMI</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hs-2300r.php"><img src="photos/e1b0e790950b801f1a1ef7304886b7ad.jpeg" alt="гадание на зеркале отзывы Весы бытовые Tanita HS-302" title="гадание на зеркале отзывы Весы бытовые Tanita HS-302"></a><h2>Весы бытовые Tanita HS-302</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3500r.php"><img src="photos/bf6add516a2c682a354892d59e1c1b1a.jpeg" alt="солярий для лица купить Весы электронные напольные с анализатором жира Tanita BC-543" title="солярий для лица купить Весы электронные напольные с анализатором жира Tanita BC-543"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-543</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>дарсонваль лучший Массажер для глаз Gezatone Breeze</h1>
						<div class="tb"><p>Цена: от <span class="price">2000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_11666.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Уникальный расслабляющий <b>массажер для глаз Gezatone </b><b>Breeze</b> представляет собой маску с гелевым наполнителем, которая поможет Вам снять усталость глаз, устранить мигрень. Если поместить маску на 20 минут в холодильник, можно использовать ее для снятия отеков и припухлостей под глазами. Также маска может применяться и горячей для снятия спазма глазных мышц. Для того чтобы ее нагреть, необходимо поместить массажер под струю горячей воды на 2-3 минуты.</p><p><b>Характеристики:</b></p><ul type=disc><li>Наполнитель: гель.</li></ul><p><b>Производитель:</b> Gezanne.</p><p><b>Страна:</b> Франция.</p><p><b></b></p> дарсонваль лучший</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/e273f348f6c5708fd82a881f65351988.jpeg" alt="успенская зеркала Зеркало настольное Rosenberg S-2338" title="успенская зеркала Зеркало настольное Rosenberg S-2338"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-970r"><span class="title">успенская зеркала Зеркало настольное Rosenberg S-2338</span><p>от <span class="price">970</span> руб.</p></div></li>
						<li><img src="photos/7bf9d94bef7f7d982ce7407ebebbc6e0.jpeg" alt="техника массажа сердца Сменный картридж к осеребрителю Георгий" title="техника массажа сердца Сменный картридж к осеребрителю Георгий"><div class="box" page="smennyy-kartridzh-k-oserebritelyu-georgiy-430r"><span class="title">техника массажа сердца Сменный картридж к осеребрителю Георгий</span><p>от <span class="price">430</span> руб.</p></div></li>
						<li><img src="photos/ab88833e4637905c1c689b34620dfa36.gif" alt="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко" title="эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко"><div class="box" page="applikatorpoyas-universalnyy-shag-igl-mm-segmenta-lyapko-1670r"><span class="title">эпилятор для лица Аппликатор-пояс Универсальный (шаг игл 4,3 мм; 3 сегмента) Ляпко</span><p>от <span class="price">1670</span> руб.</p></div></li>
						<li><img src="photos/04903c082d5df734adcc169f980fc2f0.jpeg" alt="массаж саратов Прибор для лечения болей в спине Backlife" title="массаж саратов Прибор для лечения болей в спине Backlife"><div class="box" page="pribor-dlya-lecheniya-boley-v-spine-backlife-9000r"><span class="title">массаж саратов Прибор для лечения болей в спине Backlife</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li class="large"><img src="photos/80f522fd41a08647e0c5b4392d78118e.jpeg" alt="массаж русской девушки Массажер для шеи Wrap Neck & Shoulder" title="массаж русской девушки Массажер для шеи Wrap Neck & Shoulder"><div class="box" page="massazher-dlya-shei-wrap-neck-shoulder-2550r"><span class="title">массаж русской девушки Массажер для шеи Wrap Neck & Shoulder</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li class="large"><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li class="large"><img src="photos/a036b414251fcfbd54d138ec8a643417.jpeg" alt="индийский массаж Машинка для стрижки и подравнивания бороды Gezatone BP101" title="индийский массаж Машинка для стрижки и подравнивания бороды Gezatone BP101"><div class="box" page="mashinka-dlya-strizhki-i-podravnivaniya-borody-gezatone-bp-990r"><span class="title">индийский массаж Машинка для стрижки и подравнивания бороды Gezatone BP101</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/48d9ef47ef8da57d09b8d291f9053e9c.jpeg" alt="скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос" title="скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-660r"><span class="title">скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос</span><p>от <span class="price">660</span> руб.</p></div></li>
						<li><img src="photos/7f2ce257a271953a7408284d4ab7a314.jpeg" alt="зеркала для спален Машинка для стрижки Atlanta АТН-849" title="зеркала для спален Машинка для стрижки Atlanta АТН-849"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-400r"><span class="title">зеркала для спален Машинка для стрижки Atlanta АТН-849</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/f3a25c0d4d73e98ed67714c2162eaf84.jpeg" alt="купить машинку для стрижки животных Расческа Corioliss Straightening Comb" title="купить машинку для стрижки животных Расческа Corioliss Straightening Comb"><div class="box" page="rascheska-corioliss-straightening-comb-480r"><span class="title">купить машинку для стрижки животных Расческа Corioliss Straightening Comb</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/7f172dccdb7126c4af36384b087444bb.jpeg" alt="тайский массаж фото Фен Valera Excel Pro 2000 561.08-I" title="тайский массаж фото Фен Valera Excel Pro 2000 561.08-I"><div class="box" page="fen-valera-excel-pro-i-1860r"><span class="title">тайский массаж фото Фен Valera Excel Pro 2000 561.08-I</span><p>от <span class="price">1860</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-dlya-glaz-gezatone-breeze-2000r.php", 0, -4); if (file_exists("comments/massazher-dlya-glaz-gezatone-breeze-2000r.php")) require_once "comments/massazher-dlya-glaz-gezatone-breeze-2000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-dlya-glaz-gezatone-breeze-2000r.php" method="post" onsubmit="return checkForm(this)">
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