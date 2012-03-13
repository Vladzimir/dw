<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("bikinitrimmer-s-funkciey-britvy-vitesse-vs-1730r.php","бигуди для химической завивки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("bikinitrimmer-s-funkciey-britvy-vitesse-vs-1730r.php", $nick, $comment);
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
		<title>бигуди для химической завивки Бикини-триммер с функцией бритвы Vitesse VS-961  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="бигуди для химической завивки, бразильское выпрямление волос отзывы, массаж при пневмонии, боковое зеркало на тойоту, триммер для зоны бикини, зачем закрывают зеркала, эпилятор с охлаждающим эффектом, консультации трихолога, солярий для дома, массаж пальцев рук, зеркала одесса, зеркало с навигатором, ионизатор воды купить, индийский массаж,  массаж рекомендации">
		<meta name="description" content="бигуди для химической завивки Бикини-триммер Vitesse VS-961 – прибор, созданный специально  для женской красот...">
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
						<a class="photo" href="photos/8d407214430de224e31012888584fda6.jpeg" title="бигуди для химической завивки Бикини-триммер с функцией бритвы Vitesse VS-961"><img src="photos/8d407214430de224e31012888584fda6.jpeg" alt="бигуди для химической завивки Бикини-триммер с функцией бритвы Vitesse VS-961" title="бигуди для химической завивки Бикини-триммер с функцией бритвы Vitesse VS-961 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-2550r.php"><img src="photos/bc34e86f6dd75e28bd33d7c27b3a7f2b.jpeg" alt="бразильское выпрямление волос отзывы Весы электронные напольные с анализатором жира Tanita BC-531" title="бразильское выпрямление волос отзывы Весы электронные напольные с анализатором жира Tanita BC-531"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-531</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-6000r.php"><img src="photos/843527b44b33c6dc8e59ed2e3a62ce10.jpeg" alt="массаж при пневмонии Анализатор жира (состава тела) Tanita BC-587" title="массаж при пневмонии Анализатор жира (состава тела) Tanita BC-587"></a><h2>Анализатор жира (состава тела) Tanita BC-587</h2></li>
							<li><a href="http://hometech.elitno.net/nasadka-nosovaya-dlya-karat-de-darsonval-300r.php"><img src="photos/b6bb344823584f3fea6f0061dd2edab6.jpeg" alt="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль" title="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка носовая для КАРАТ ДЕ-212 Дарсонваль</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>бигуди для химической завивки Бикини-триммер с функцией бритвы Vitesse VS-961</h1>
						<div class="tb"><p>Цена: от <span class="price">1730</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21126.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Бикини-триммер Vitesse VS-961 – прибор, созданный специально  для женской красоты, при этом удачно сочетающий в себе функции триммера и  бритвы. Бикини-триммер Vitesse VS-961 имеет оптимальные габариты и может  использоваться как дома, так и на отдыхе. Прибор подзаряжается от сети или  аакумулятора и имеет возможность работать автономно в течение 30 минут. В  комплекте с бикини-триммером Vitesse VS-961 идет насадка-триммер и щетка для  очистки.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Число скоростей: 1;</li><li>Питание: от аккумулятора/сети;</li><li>Аккумулятор: NiMH;</li><li>Время автономной работы: 30 мин;</li><li>В комплекте: щетка для очистки, насадка-триммер;</li></ul><p><strong>Производитель: Франция</strong></p> бигуди для химической завивки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/ca66537608944cd4881ffac56a0a3e8e.jpeg" alt="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита" title="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита"><div class="box" page="balzam-dlya-irrigatora-donfeel-profilaktika-parodontoza-i-gingivita-180r"><span class="title">триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита</span><p>от <span class="price">180</span> руб.</p></div></li>
						<li><img src="photos/b335395a214a3a546c41305f7ef60066.jpeg" alt="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051" title="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051"><div class="box" page="nabor-dlya-manikyura-i-pedikyura-s-nasadkami-gezatone-d-590r"><span class="title">зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/5d711d5eed018cbd13b88e17524fc23f.jpeg" alt="эпилятор с охлаждающим эффектом Массажный матрас US-Medica Ocean MA-190" title="эпилятор с охлаждающим эффектом Массажный матрас US-Medica Ocean MA-190"><div class="box" page="massazhnyy-matras-usmedica-ocean-ma-30000r"><span class="title">эпилятор с охлаждающим эффектом Массажный матрас US-Medica Ocean MA-190</span><p>от <span class="price">30000</span> руб.</p></div></li>
						<li><img src="photos/28b4768c3cdb0ef358b594b4e291437d.jpeg" alt="консультации трихолога Стационарный массажный стол US-Medica Sumo Professional" title="консультации трихолога Стационарный массажный стол US-Medica Sumo Professional"><div class="box" page="stacionarnyy-massazhnyy-stol-usmedica-sumo-professional-29500r"><span class="title">консультации трихолога Стационарный массажный стол US-Medica Sumo Professional</span><p>от <span class="price">29500</span> руб.</p></div></li>
						<li class="large"><img src="photos/ce6a955d13728ae3fcdf117ddcdd8d60.jpeg" alt="солярий для дома Массажное кресло Yamaguchi YA-2500" title="солярий для дома Массажное кресло Yamaguchi YA-2500"><div class="box" page="massazhnoe-kreslo-yamaguchi-ya-210000r"><span class="title">солярий для дома Массажное кресло Yamaguchi YA-2500</span><p>от <span class="price">210000</span> руб.</p></div></li>
						<li class="large"><img src="photos/a1b381333fae64349d21756cbea5ef5a.jpeg" alt="массаж пальцев рук Электроды к EM40 - EM80  - 4 шт." title="массаж пальцев рук Электроды к EM40 - EM80  - 4 шт."><div class="box" page="elektrody-k-em-em-sht-750r"><span class="title">массаж пальцев рук Электроды к EM40 - EM80  - 4 шт.</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li class="large"><img src="photos/2b473b1ef7f8b3fad007a0920d670276.jpeg" alt="зеркала одесса Массажер G-MAX" title="зеркала одесса Массажер G-MAX"><div class="box" page="massazher-gmax-400r"><span class="title">зеркала одесса Массажер G-MAX</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/72310b366259e325ba7e2f2664841d6e.jpeg" alt="зеркало с навигатором Вибромассажер с инфракрасным излучением BODYKRAFT M-40W" title="зеркало с навигатором Вибромассажер с инфракрасным излучением BODYKRAFT M-40W"><div class="box" page="vibromassazher-s-infrakrasnym-izlucheniem-bodykraft-mw-1750r"><span class="title">зеркало с навигатором Вибромассажер с инфракрасным излучением BODYKRAFT M-40W</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/a036b414251fcfbd54d138ec8a643417.jpeg" alt="индийский массаж Машинка для стрижки и подравнивания бороды Gezatone BP101" title="индийский массаж Машинка для стрижки и подравнивания бороды Gezatone BP101"><div class="box" page="mashinka-dlya-strizhki-i-podravnivaniya-borody-gezatone-bp-990r"><span class="title">индийский массаж Машинка для стрижки и подравнивания бороды Gezatone BP101</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/1b8045a8b00517a46ef7bcbf121b878d.jpeg" alt="произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл" title="произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл"><div class="box" page="loson-posle-depilyacii-rica-ochischayuschiy-s-maslom-avokado-ml-600r"><span class="title">произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("bikinitrimmer-s-funkciey-britvy-vitesse-vs-1730r.php", 0, -4); if (file_exists("comments/bikinitrimmer-s-funkciey-britvy-vitesse-vs-1730r.php")) require_once "comments/bikinitrimmer-s-funkciey-britvy-vitesse-vs-1730r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="bikinitrimmer-s-funkciey-britvy-vitesse-vs-1730r.php" method="post" onsubmit="return checkForm(this)">
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