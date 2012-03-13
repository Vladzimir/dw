<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("fen-vitesse-vs-zelenyy-640r.php","гимнастика и массаж для детей");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("fen-vitesse-vs-zelenyy-640r.php", $nick, $comment);
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
		<title>гимнастика и массаж для детей Фен Vitesse VS-943 зеленый  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="гимнастика и массаж для детей, солярий в твери, купить бигуди для волос, солярий сан сити, курсы массажа в нижнем, комплект зеркал, триммер champion, машинки для стрижки эльдорадо, лифтинг массаж, весы электронные до 200 кг, ожог в солярии, для беременных массаж, курсы массажа в минске, лосьон для для солярия,  массаж после родов">
		<meta name="description" content="гимнастика и массаж для детей Vitesse VS-943 – это компактный фен, который вы можете не  только использовать в...">
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
						<a class="photo" href="photos/bddc6e6efaf0b03c628143bf9a4ec50d.jpeg" title="гимнастика и массаж для детей Фен Vitesse VS-943 зеленый"><img src="photos/bddc6e6efaf0b03c628143bf9a4ec50d.jpeg" alt="гимнастика и массаж для детей Фен Vitesse VS-943 зеленый" title="гимнастика и массаж для детей Фен Vitesse VS-943 зеленый -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-binatone-hs-b-white-nacre-1100r.php"><img src="photos/227e997e0d3487f61648f09e43d5fd98.jpeg" alt="солярий в твери Выпрямитель Binatone HS-4180 B White Nacre" title="солярий в твери Выпрямитель Binatone HS-4180 B White Nacre"></a><h2>Выпрямитель Binatone HS-4180 B White Nacre</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-650r-2.php"><img src="photos/72e31f815353916e5103653f2d2b6374.jpeg" alt="купить бигуди для волос Электрощипцы для выпрямления волос Atlanta АТН-834" title="купить бигуди для волос Электрощипцы для выпрямления волос Atlanta АТН-834"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-834</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-700r.php"><img src="photos/a4916afed5e89e4f7b9b3539fdd5dbae.jpeg" alt="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835" title="солярий сан сити Электрощипцы для выпрямления волос Atlanta АТН-835"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-835</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>гимнастика и массаж для детей Фен Vitesse VS-943 зеленый</h1>
						<div class="tb"><p>Цена: от <span class="price">640</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_22965.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Vitesse VS-943 – это компактный фен, который вы можете не  только использовать в домашних условиях, но и носить в сумочке в любое время.  Фен Vitesse VS-943 обладает функцией подачи холодного воздуха и 2 режимами  интенсивности воздушного потока, что обеспечивает не только быструю, но и  комфортную сушку волос. Кроме того, данная модель включает в себя функцию  защиты от перегрева, которая препятствует повреждению волос горячим воздухом. Кстати,  всех ценительниц прекрасного порадует и стильный дизайн этой модели фена. Также  в комплекте с феном Vitesse VS-943 идет концентратор и насадки.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Тип: компактный фен;</li><li>Мощность: 1350 Вт;</li><li>Складная ручка;</li><li>Количество режимов: 2;</li><li>Дополнительные режимы: подача холодного воздуха;</li><li>Особенности: защита от перегрева;</li><li>В комплекте: концентратор, насадки;</li></ul><p><strong>Производитель:  Франция</strong></p> гимнастика и массаж для детей</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/9b4398884aa836c0acb140840fd7df60.jpeg" alt="курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01" title="курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01"><div class="box" page="nabor-dlya-ukladki-valera-ionic-multistyle-professional-4390r"><span class="title">курсы массажа в нижнем Набор для укладки Valera Ionic Multistyle Professional 640.01</span><p>от <span class="price">4390</span> руб.</p></div></li>
						<li><img src="photos/741c2a17d20645ac77bf0cd8e2974fe0.jpeg" alt="комплект зеркал Массажер роликовый Мастер" title="комплект зеркал Массажер роликовый Мастер"><div class="box" page="massazher-rolikovyy-master-290r"><span class="title">комплект зеркал Массажер роликовый Мастер</span><p>от <span class="price">290</span> руб.</p></div></li>
						<li><img src="photos/6117c27bb4abbcf9770fbc1a16077f34.jpeg" alt="триммер champion Массажер Beurer MG260 для тела" title="триммер champion Массажер Beurer MG260 для тела"><div class="box" page="massazher-beurer-mg-dlya-tela-12500r"><span class="title">триммер champion Массажер Beurer MG260 для тела</span><p>от <span class="price">12500</span> руб.</p></div></li>
						<li><img src="photos/54c062a60377c846855d76f8df46eba9.jpeg" alt="машинки для стрижки эльдорадо Массажер Beurer FM38 для ног" title="машинки для стрижки эльдорадо Массажер Beurer FM38 для ног"><div class="box" page="massazher-beurer-fm-dlya-nog-2300r"><span class="title">машинки для стрижки эльдорадо Массажер Beurer FM38 для ног</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li class="large"><img src="photos/1cd3b762effe11ede74f59ecb96b91a5.jpeg" alt="лифтинг массаж Массажер для ног Beurer FM 16" title="лифтинг массаж Массажер для ног Beurer FM 16"><div class="box" page="massazher-dlya-nog-beurer-fm-630r"><span class="title">лифтинг массаж Массажер для ног Beurer FM 16</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li class="large"><img src="photos/e19b318cb6be30f4f50f5be72b000917.jpeg" alt="весы электронные до 200 кг Массажер для пальцев ног Pampered Toes" title="весы электронные до 200 кг Массажер для пальцев ног Pampered Toes"><div class="box" page="massazher-dlya-palcev-nog-pampered-toes-250r"><span class="title">весы электронные до 200 кг Массажер для пальцев ног Pampered Toes</span><p>от <span class="price">250</span> руб.</p></div></li>
						<li class="large"><img src="photos/2da10774211f671836a3e448d640220b.png" alt="ожог в солярии Массажер для стоп US-Medica Omega" title="ожог в солярии Массажер для стоп US-Medica Omega"><div class="box" page="massazher-dlya-stop-usmedica-omega-4500r"><span class="title">ожог в солярии Массажер для стоп US-Medica Omega</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/556cecd1e2f27d03b7762d25fe40880d.jpeg" alt="для беременных массаж Vitek VT–1362 Машинка для стрижки волос" title="для беременных массаж Vitek VT–1362 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-760r"><span class="title">для беременных массаж Vitek VT–1362 Машинка для стрижки волос</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/d881128511cd03aa90feb76747b82b80.jpeg" alt="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл" title="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-apelsinovyy-v-kartridzhe-ml-140r"><span class="title">курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл</span><p>от <span class="price">140</span> руб.</p></div></li>
						<li><img src="photos/0ff1174e61bcb91c5f3021393311d686.jpeg" alt="лосьон для для солярия Фен Vitek VT-2263 серый" title="лосьон для для солярия Фен Vitek VT-2263 серый"><div class="box" page="fen-vitek-vt-seryy-1000r"><span class="title">лосьон для для солярия Фен Vitek VT-2263 серый</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li><img src="photos/90fa21a88e7efe788816cbd3a61d1a96.jpeg" alt="дарсонваль купить в спб Фен Vitesse VS-926" title="дарсонваль купить в спб Фен Vitesse VS-926"><div class="box" page="fen-vitesse-vs-1010r"><span class="title">дарсонваль купить в спб Фен Vitesse VS-926</span><p>от <span class="price">1010</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("fen-vitesse-vs-zelenyy-640r.php", 0, -4); if (file_exists("comments/fen-vitesse-vs-zelenyy-640r.php")) require_once "comments/fen-vitesse-vs-zelenyy-640r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="fen-vitesse-vs-zelenyy-640r.php" method="post" onsubmit="return checkForm(this)">
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