<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("trimmer-babyliss-exe-1790r.php","студия маникюра и педикюра");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("trimmer-babyliss-exe-1790r.php", $nick, $comment);
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
		<title>студия маникюра и педикюра Триммер BaByliss E830XE  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="студия маникюра и педикюра, дарсонваль ультратек, производители фенов, модели фенов, массаж коломенская, массаж медом антицеллюлитный, фен щетка bosch pha, массаж с минетом, куплю триммер в москве, модели фенов, массаж при гайморите, увеличивающее зеркало, курсы массажа в екатеринбурге, зеркала f1 цена,  отзывы тайский массаж">
		<meta name="description" content="студия маникюра и педикюра BaByliss E830XE – триммер, настоящий уникальный набор для  бритья, созданный спе...">
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
						<a class="photo" href="photos/ce51f4efb2afc504cf5b3a55b1bc269e.jpeg" title="студия маникюра и педикюра Триммер BaByliss E830XE"><img src="photos/ce51f4efb2afc504cf5b3a55b1bc269e.jpeg" alt="студия маникюра и педикюра Триммер BaByliss E830XE" title="студия маникюра и педикюра Триммер BaByliss E830XE -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-bc-15000r-2.php"><img src="photos/4102f727f07b1b2f0dfaeb86657755b6.jpeg" alt="дарсонваль ультратек Профессиональные электронные весы Tanita BC-601" title="дарсонваль ультратек Профессиональные электронные весы Tanita BC-601"></a><h2>Профессиональные электронные весы Tanita BC-601</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-valera-digital-ceramic-nanosilver-2470r.php"><img src="photos/65295d452583f16a109ca092e4c4f41f.jpeg" alt="производители фенов Выпрямитель Valera Digital Ceramic Nanosilver 638.01" title="производители фенов Выпрямитель Valera Digital Ceramic Nanosilver 638.01"></a><h2>Выпрямитель Valera Digital Ceramic Nanosilver 638.01</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-600r.php"><img src="photos/9a620fdb399918000af975e9d69559f4.jpeg" alt="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838" title="модели фенов Электрощипцы для выпрямления волос Atlanta АТН-838"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-838</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>студия маникюра и педикюра Триммер BaByliss E830XE</h1>
						<div class="tb"><p>Цена: от <span class="price">1790</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_25372.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>BaByliss E830XE – триммер, настоящий уникальный набор для  бритья, созданный специально для мужчин, которые ценят не только качество  стрижки, но и комфорт. Триммер BaByliss E830XE имеет 5 насадок, 10 установок  длины, автономное питание, индикатор зарядки и функцию влажной очистки. Кроме  того, в комплекте с данным триммером прилагается прецизионная насадка (7мм),  насадка для бритья и щеточка для чистки.                                         </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:  набор для стрижки;</li>   <li>Число установок длины: 10;</li>   <li>Количество насадок: 5;</li>   <li>Время автономной работы: 30 минут;</li>   <li>Индикатор зарядки;</li>   <li>Питание: автономное/от сети;</li>   <li>Влажная  очистка;</li>   <li>Длина стрижки: 0,5-15 мм;</li>   <li>Ширина ножа: 32 мм;</li>   <li>В  комплекте:<strong> </strong>прецизионная насадка  (7мм), насадка для бритья (18 мм), триммер для стрижки в носу и ушах, щеточка для  чистки.</li> </ul> <p><strong>Производитель:  BaByliss (Франция)</strong></p> студия маникюра и педикюра</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/f55d8efc38dd27166eefe179a3e555a4.jpeg" alt="массаж коломенская Зеркало настольное Rosenberg S-2084" title="массаж коломенская Зеркало настольное Rosenberg S-2084"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-890r"><span class="title">массаж коломенская Зеркало настольное Rosenberg S-2084</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/15986a54082f98b80f57966a0faabc05.jpeg" alt="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"><div class="box" page="standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r"><span class="title">массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/5fa952e080e3e36a9d80c7732a2a4665.png" alt="фен щетка bosch pha Массажное кресло Anatomico Amerigo" title="фен щетка bosch pha Массажное кресло Anatomico Amerigo"><div class="box" page="massazhnoe-kreslo-anatomico-amerigo-114000r"><span class="title">фен щетка bosch pha Массажное кресло Anatomico Amerigo</span><p>от <span class="price">114000</span> руб.</p></div></li>
						<li><img src="photos/4a1e873cdf57ae191c8f0f6d017d095d.jpeg" alt="массаж с минетом Массажер Beurer MG240 для тела" title="массаж с минетом Массажер Beurer MG240 для тела"><div class="box" page="massazher-beurer-mg-dlya-tela-9000r"><span class="title">массаж с минетом Массажер Beurer MG240 для тела</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li class="large"><img src="photos/5d92120d3065dfcf7d5f91af9dd4ca58.jpeg" alt="куплю триммер в москве Массажная накидка ZENET TL-2007-Z" title="куплю триммер в москве Массажная накидка ZENET TL-2007-Z"><div class="box" page="massazhnaya-nakidka-zenet-tlz-4950r"><span class="title">куплю триммер в москве Массажная накидка ZENET TL-2007-Z</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/d6d662f1051663df0b15aa06e33f4f63.jpeg" alt="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365" title="модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365"><div class="box" page="pribor-dlya-uhoda-za-kozhey-lica-gezatone-ionicultratonic-m-2100r"><span class="title">модели фенов Прибор для ухода за кожей лица Gezatone Ionic-Ultratonic m365</span><p>от <span class="price">2100</span> руб.</p></div></li>
						<li class="large"><img src="photos/80e1549e8ba52d130ff6ca8cfae7cb7f.jpeg" alt="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035" title="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035"><div class="box" page="massazher-ultrazvukovoy-impulsnyy-gezatone-ultratonik-m-3900r"><span class="title">массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035</span><p>от <span class="price">3900</span> руб.</p></div></li>
						<li><img src="photos/da557fd8c72326816c1e82e04db95a69.jpeg" alt="увеличивающее зеркало Машинка для стрижки Atlanta АТН-851" title="увеличивающее зеркало Машинка для стрижки Atlanta АТН-851"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-550r"><span class="title">увеличивающее зеркало Машинка для стрижки Atlanta АТН-851</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/475a7571d5ae1be1f11a4e598ccf651c.jpeg" alt="курсы массажа в екатеринбурге Держатель Corioliss Holders" title="курсы массажа в екатеринбурге Держатель Corioliss Holders"><div class="box" page="derzhatel-corioliss-holders-1070r"><span class="title">курсы массажа в екатеринбурге Держатель Corioliss Holders</span><p>от <span class="price">1070</span> руб.</p></div></li>
						<li><img src="photos/68c438037ddd527386c787c1ada0d392.jpeg" alt="зеркала f1 цена Держатель-штатив для стайлера Corioliss черный" title="зеркала f1 цена Держатель-штатив для стайлера Corioliss черный"><div class="box" page="derzhatelshtativ-dlya-staylera-corioliss-chernyy-1010r"><span class="title">зеркала f1 цена Держатель-штатив для стайлера Corioliss черный</span><p>от <span class="price">1010</span> руб.</p></div></li>
						<li><img src="photos/48311533a55ee855ad27521330f06278.jpeg" alt="вакансии маникюр педикюр Фен Atlanta АТН-866" title="вакансии маникюр педикюр Фен Atlanta АТН-866"><div class="box" page="fen-atlanta-atn-950r"><span class="title">вакансии маникюр педикюр Фен Atlanta АТН-866</span><p>от <span class="price">950</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("trimmer-babyliss-exe-1790r.php", 0, -4); if (file_exists("comments/trimmer-babyliss-exe-1790r.php")) require_once "comments/trimmer-babyliss-exe-1790r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="trimmer-babyliss-exe-1790r.php" method="post" onsubmit="return checkForm(this)">
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