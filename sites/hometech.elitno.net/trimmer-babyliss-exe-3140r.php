<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("trimmer-babyliss-exe-3140r.php","круглое зеркало");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("trimmer-babyliss-exe-3140r.php", $nick, $comment);
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
		<title>круглое зеркало Триммер BaByliss E852XE  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="круглое зеркало, художественные зеркала, лучшая электрическая зубная щетка, замена бокового зеркала, лицензия на массаж, массаж медом антицеллюлитный, choco выпрямление волос, физиотерапия в стоматологии, купить хороший эпилятор, карат де 212 дарсонваль насадки, после солярия нельзя, институт массажа и косметологии, авто зеркало купить, курсы массажа в минске,  ремонт боковых зеркал">
		<meta name="description" content="круглое зеркало BaByliss E852XE – универсальный триммер, созданный  специально для мужчин, котор...">
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
						<a class="photo" href="photos/3e4f87cc3e841e1eba9cd7b8719190ef.jpeg" title="круглое зеркало Триммер BaByliss E852XE"><img src="photos/3e4f87cc3e841e1eba9cd7b8719190ef.jpeg" alt="круглое зеркало Триммер BaByliss E852XE" title="круглое зеркало Триммер BaByliss E852XE -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-and-ms-personalnyy-trener-2400r.php"><img src="photos/271898957e95aad64e9df31797f32e2e.png" alt="художественные зеркала Весы электронные AND MS-101 (персональный тренер)" title="художественные зеркала Весы электронные AND MS-101 (персональный тренер)"></a><h2>Весы электронные AND MS-101 (персональный тренер)</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-dlya-snizheniya-vesa-and-uc-3640r.php"><img src="photos/94c2cfbe1c9fd99ef2bfe885e1ad802a.jpeg" alt="лучшая электрическая зубная щетка Весы электронные напольные для снижения веса AND UC-322" title="лучшая электрическая зубная щетка Весы электронные напольные для снижения веса AND UC-322"></a><h2>Весы электронные напольные для снижения веса AND UC-322</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-tanita-um-sv-2000r.php"><img src="photos/5fe7b8cbed1da4a369915cce43684931.jpeg" alt="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)" title="замена бокового зеркала Анализатор жира Tanita UM-071 (SV)"></a><h2>Анализатор жира Tanita UM-071 (SV)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>круглое зеркало Триммер BaByliss E852XE</h1>
						<div class="tb"><p>Цена: от <span class="price">3140</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_25373.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>BaByliss E852XE – универсальный триммер, созданный  специально для мужчин, которые ценят не только качество стрижки, но и комфорт.  Триммер BaByliss E852XE имеет 2 насадки, 74 (!) установки длины, автономное  питание (время работы – 30 минут) и индикатор зарядки. Кроме того, в комплекте  с данным триммером прилагается подвижный нож, щеточка для чистки, насадка для  бритья, футляр для хранения и перевозки.                                           </p> <p><strong>Характеристики:</strong></p>  <ul type=disc>   <li>Тип:       универсальная;</li>    <li>Число       установок длины: 74;</li>   <li>Количество       насадок: 2;</li>   <li>Время       автономной работы: 30 минут;</li>   <li>Индикатор       зарядки;</li>   <li>Питание:       автономное/от сети;</li>   <li>Длина       стрижки: 0,4-15 мм;</li>   <li>Ширина       ножа: 32 мм;</li>   <li>В       комплекте: подвижный нож, щеточка для чистки, насадка для бритья, футляр       для хранения и перевозки.</li> </ul>  <strong>Производитель:  BaByliss (Франция)</strong> круглое зеркало</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/3cb8fb7617e327ab1de4f64923d896d1.jpeg" alt="лицензия на массаж Зеркало настольное Rosenberg S-2339" title="лицензия на массаж Зеркало настольное Rosenberg S-2339"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-1050r"><span class="title">лицензия на массаж Зеркало настольное Rosenberg S-2339</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/15986a54082f98b80f57966a0faabc05.jpeg" alt="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"><div class="box" page="standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r"><span class="title">массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/3395fdaa99fb854700bcbb6a8b93c9c4.jpeg" alt="choco выпрямление волос Beurer MP60 Profiset Маникюрно-педикюрные аксессуары" title="choco выпрямление волос Beurer MP60 Profiset Маникюрно-педикюрные аксессуары"><div class="box" page="beurer-mp-profiset-manikyurnopedikyurnye-aksessuary-950r"><span class="title">choco выпрямление волос Beurer MP60 Profiset Маникюрно-педикюрные аксессуары</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li><img src="photos/565c863a758e1bc3e5c28686264c8804.jpeg" alt="физиотерапия в стоматологии Валик круглый L61D15 USM-003" title="физиотерапия в стоматологии Валик круглый L61D15 USM-003"><div class="box" page="valik-kruglyy-ld-usm-1200r-2"><span class="title">физиотерапия в стоматологии Валик круглый L61D15 USM-003</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/bdf8de6c43fee60b8e439a0c6ac204b1.jpeg" alt="купить хороший эпилятор Массажное кресло US Medica Cardio" title="купить хороший эпилятор Массажное кресло US Medica Cardio"><div class="box" page="massazhnoe-kreslo-us-medica-cardio-150000r"><span class="title">купить хороший эпилятор Массажное кресло US Medica Cardio</span><p>от <span class="price">150000</span> руб.</p></div></li>
						<li class="large"><img src="photos/9af88bf8f0a341b5c9eda8033fc64175.jpeg" alt="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo" title="карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo"><div class="box" page="massazhnoe-kreslo-us-medica-indigo-95000r"><span class="title">карат де 212 дарсонваль насадки Массажное кресло US Medica Indigo</span><p>от <span class="price">95000</span> руб.</p></div></li>
						<li class="large"><img src="photos/443ea533b0dac6c448826c56d4beed62.jpeg" alt="после солярия нельзя Массажер для глаз с тепловой и вибромассажной функцией Gezatone BEM-III" title="после солярия нельзя Массажер для глаз с тепловой и вибромассажной функцией Gezatone BEM-III"><div class="box" page="massazher-dlya-glaz-s-teplovoy-i-vibromassazhnoy-funkciey-gezatone-bemiii-3300r"><span class="title">после солярия нельзя Массажер для глаз с тепловой и вибромассажной функцией Gezatone BEM-III</span><p>от <span class="price">3300</span> руб.</p></div></li>
						<li><img src="photos/364f57c9bbd57d63831a2d87ac4fd285.jpeg" alt="институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190" title="институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190"><div class="box" page="pribor-dlya-liftinga-v-oblasti-glaz-gezatone-m-2000r"><span class="title">институт массажа и косметологии Прибор для лифтинга в области глаз Gezatone m190</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/a988f6b179dab67cec02b51dcf3c6687.jpeg" alt="авто зеркало купить Массажная накидка ZENET TL-2007-В" title="авто зеркало купить Массажная накидка ZENET TL-2007-В"><div class="box" page="massazhnaya-nakidka-zenet-tlv-2950r"><span class="title">авто зеркало купить Массажная накидка ZENET TL-2007-В</span><p>от <span class="price">2950</span> руб.</p></div></li>
						<li><img src="photos/d881128511cd03aa90feb76747b82b80.jpeg" alt="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл" title="курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-apelsinovyy-v-kartridzhe-ml-140r"><span class="title">курсы массажа в минске Воск для депиляции Rica, апельсиновый в картридже 100 мл</span><p>от <span class="price">140</span> руб.</p></div></li>
						<li><img src="photos/f7395d4197ba0df70a0fe34cb51f6f70.jpeg" alt="машинка для интимной стрижки Зубная нить DONFEEL Mini dental floss, 11м" title="машинка для интимной стрижки Зубная нить DONFEEL Mini dental floss, 11м"><div class="box" page="zubnaya-nit-donfeel-mini-dental-floss-m-49r"><span class="title">машинка для интимной стрижки Зубная нить DONFEEL Mini dental floss, 11м</span><p>от <span class="price">49</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("trimmer-babyliss-exe-3140r.php", 0, -4); if (file_exists("comments/trimmer-babyliss-exe-3140r.php")) require_once "comments/trimmer-babyliss-exe-3140r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="trimmer-babyliss-exe-3140r.php" method="post" onsubmit="return checkForm(this)">
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