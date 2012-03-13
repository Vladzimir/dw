<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-atlanta-atn-380r.php","зеркало стальное");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-atlanta-atn-380r.php", $nick, $comment);
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
		<title>зеркало стальное Фен Atlanta АТН-883  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="зеркало стальное, триммер champion, купить бигуди для волос, успенская зеркала, стайлер для завивки волос braun, замена зеркала 2110, установка зеркала заднего вида, ирригатор цена, массаж головы ребенка, американское выпрямление волос, скульптурирующий массаж, курсы массажа в минске, ремонт фенов в москве, купить машинку для стрижки животных,  эпиляторы применение">
		<meta name="description" content="зеркало стальное Фен Atlanta АТН-883 – доступный прибор с эргономичным дизайном бело-голубого цве...">
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
						<a class="photo" href="photos/ab76ce58be7faa3b2bb322663097fd26.jpeg" title="зеркало стальное Фен Atlanta АТН-883"><img src="photos/ab76ce58be7faa3b2bb322663097fd26.jpeg" alt="зеркало стальное Фен Atlanta АТН-883" title="зеркало стальное Фен Atlanta АТН-883 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-wbpma-35000r.php"><img src="photos/d7ec75485f093187b978e38d5d2724a5.jpeg" alt="триммер champion Профессиональные электронные весы Tanita WB-100PMA" title="триммер champion Профессиональные электронные весы Tanita WB-100PMA"></a><h2>Профессиональные электронные весы Tanita WB-100PMA</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-650r-2.php"><img src="photos/72e31f815353916e5103653f2d2b6374.jpeg" alt="купить бигуди для волос Электрощипцы для выпрямления волос Atlanta АТН-834" title="купить бигуди для волос Электрощипцы для выпрямления волос Atlanta АТН-834"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-834</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-nastolnoe-rosenberg-s-970r.php"><img src="photos/e273f348f6c5708fd82a881f65351988.jpeg" alt="успенская зеркала Зеркало настольное Rosenberg S-2338" title="успенская зеркала Зеркало настольное Rosenberg S-2338"></a><h2>Зеркало настольное Rosenberg S-2338</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>зеркало стальное Фен Atlanta АТН-883</h1>
						<div class="tb"><p>Цена: от <span class="price">380</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19884.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Фен Atlanta АТН-883 – доступный прибор с эргономичным дизайном бело-голубого цвета для сушки волос мощностью 1200 Вт. Имеет два уровня интенсивности сушки и шнур с защитой от выкручивания. Не скользит в руках, благодаря специальному покрытию. Абсолютно безопасен, т. к. защищен от перегрева. Получил сертификат Госстандара РФ и соответствует европейским нормам безопасности. Снабжен петлей для подвешивания.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Защита от перегрева; <li>Два уровня интенсивности сушки; <li>Специальное противоскользящие покрытие; <li>Соответствует американским и европейским нормам безопасности; <li>Мощность 1200W; <li>230V, 50Hz <li>12 x 7.5 x 18 см </li></ul><p><strong>Производитель: США</strong></p> зеркало стальное</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/13b08c422e5d93db5b02db2f9f4cebf3.jpeg" alt="стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)" title="стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)"><div class="box" page="manikyurnopedikyurnyy-nabor-beurer-mp-nasadok-2650r"><span class="title">стайлер для завивки волос braun Маникюрно-педикюрный набор Beurer MP60 (9 насадок)</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li><img src="photos/3d4ff223442431b121dd91ae8e45e929.jpeg" alt="замена зеркала 2110 Beurer MC5000 Массажное кресло" title="замена зеркала 2110 Beurer MC5000 Массажное кресло"><div class="box" page="beurer-mc-massazhnoe-kreslo-95000r"><span class="title">замена зеркала 2110 Beurer MC5000 Массажное кресло</span><p>от <span class="price">95000</span> руб.</p></div></li>
						<li><img src="photos/6032832465abb70306c5ea0aedd085a5.jpeg" alt="установка зеркала заднего вида Аппликатор Ляпко Ромашка" title="установка зеркала заднего вида Аппликатор Ляпко Ромашка"><div class="box" page="applikator-lyapko-romashka-2350r"><span class="title">установка зеркала заднего вида Аппликатор Ляпко Ромашка</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li><img src="photos/ce1d55bfc4c54022422846b14975fcfd.jpeg" alt="ирригатор цена Массажер Beurer MG 310" title="ирригатор цена Массажер Beurer MG 310"><div class="box" page="massazher-beurer-mg-14000r"><span class="title">ирригатор цена Массажер Beurer MG 310</span><p>от <span class="price">14000</span> руб.</p></div></li>
						<li class="large"><img src="photos/bd43b02490b7b213cfdadf5f9ffcb1e0.jpeg" alt="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024" title="массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024"><div class="box" page="vakuumnyy-massazher-gezatone-vacu-2990r"><span class="title">массаж головы ребенка Вакуумный массажер Gezatone VACU 1301024</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li class="large"><img src="photos/bfb97ea41a55921176d4a3d6c4a2b006.jpeg" alt="американское выпрямление волос Массажная подушка Sanitas SMG141" title="американское выпрямление волос Массажная подушка Sanitas SMG141"><div class="box" page="massazhnaya-podushka-sanitas-smg-3300r"><span class="title">американское выпрямление волос Массажная подушка Sanitas SMG141</span><p>от <span class="price">3300</span> руб.</p></div></li>
						<li class="large"><img src="photos/48d9ef47ef8da57d09b8d291f9053e9c.jpeg" alt="скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос" title="скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-660r"><span class="title">скульптурирующий массаж Vitek VT–1350 Машинка для стрижки волос</span><p>от <span class="price">660</span> руб.</p></div></li>
						<li><img src="photos/d881128511cd03aa90feb76747b82b80.jpeg" alt="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл" title="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-apelsinovyy-v-kartridzhe-ml-140r"><span class="title">курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл</span><p>от <span class="price">140</span> руб.</p></div></li>
						<li><img src="photos/94d139f73d58b1e6125c92b3eccea25e.jpeg" alt="ремонт фенов в москве Горячая бритва Corioliss Heat Razor" title="ремонт фенов в москве Горячая бритва Corioliss Heat Razor"><div class="box" page="goryachaya-britva-corioliss-heat-razor-5400r"><span class="title">ремонт фенов в москве Горячая бритва Corioliss Heat Razor</span><p>от <span class="price">5400</span> руб.</p></div></li>
						<li><img src="photos/f3a25c0d4d73e98ed67714c2162eaf84.jpeg" alt="купить машинку для стрижки животных Расческа Corioliss Straightening Comb" title="купить машинку для стрижки животных Расческа Corioliss Straightening Comb"><div class="box" page="rascheska-corioliss-straightening-comb-480r"><span class="title">купить машинку для стрижки животных Расческа Corioliss Straightening Comb</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/4f91a9a11655bfb69a31e66d275bcd6b.jpeg" alt="укрепляющий массаж Заколки для придания объема Бампит (Bumpits) 057A (черная)" title="укрепляющий массаж Заколки для придания объема Бампит (Bumpits) 057A (черная)"><div class="box" page="zakolki-dlya-pridaniya-obema-bampit-bumpits-a-chernaya-400r"><span class="title">укрепляющий массаж Заколки для придания объема Бампит (Bumpits) 057A (черная)</span><p>от <span class="price">400</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-atlanta-atn-380r.php", 0, -4); if (file_exists("comments/fen-atlanta-atn-380r.php")) require_once "comments/fen-atlanta-atn-380r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-atlanta-atn-380r.php" method="post" onsubmit="return checkForm(this)">
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