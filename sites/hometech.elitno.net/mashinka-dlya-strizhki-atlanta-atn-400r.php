<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mashinka-dlya-strizhki-atlanta-atn-400r.php","абонемент в солярий скидки");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mashinka-dlya-strizhki-atlanta-atn-400r.php", $nick, $comment);
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
		<title>абонемент в солярий скидки Машинка для стрижки Atlanta АТН-849  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="абонемент в солярий скидки, косметика из индии, зеркало войны, зеркало кто ты сегодня, лучшие электробритвы мужские, купить дарсонваль карат, зачем закрывают зеркала, солярий тюмень, польза массажа, комплект зеркал, набор для выпрямления волос, зеркало телевизор, даньков зеркала, электронные весы дешево,  массаж медведково">
		<meta name="description" content="абонемент в солярий скидки Atlanta АТН-849 – доступная машинка для стрижки волос в домашних условиях с 4 на...">
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
						<a class="photo" href="photos/7f2ce257a271953a7408284d4ab7a314.jpeg" title="абонемент в солярий скидки Машинка для стрижки Atlanta АТН-849"><img src="photos/7f2ce257a271953a7408284d4ab7a314.jpeg" alt="абонемент в солярий скидки Машинка для стрижки Atlanta АТН-849" title="абонемент в солярий скидки Машинка для стрижки Atlanta АТН-849 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/beurer-ps-bmi-napolnye-elektronnye-vesy-3000r.php"><img src="photos/39daed3d50fe3fa87078060cfa01e362.jpeg" alt="косметика из индии Beurer PS41 BMI Напольные электронные весы" title="косметика из индии Beurer PS41 BMI Напольные электронные весы"></a><h2>Beurer PS41 BMI Напольные электронные весы</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-napolnye-s-analizatorom-zhira-i-vody-gezatone-esga-1200r.php"><img src="photos/43a957bd80b6ff4e3954c5f31015c90c.jpeg" alt="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501" title="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501"></a><h2>Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501</h2></li>
							<li><a href="http://hometech.elitno.net/zhiroanalizator-opredelenie-obschego-soderzhaniya-zhira-omron-bf-3200r.php"><img src="photos/f23e4b3a148ea379394985b1c52b15da.jpeg" alt="зеркало кто ты сегодня Жироанализатор (Определение общего содержания жира) OMRON BF-306" title="зеркало кто ты сегодня Жироанализатор (Определение общего содержания жира) OMRON BF-306"></a><h2>Жироанализатор (Определение общего содержания жира) OMRON BF-306</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>абонемент в солярий скидки Машинка для стрижки Atlanta АТН-849</h1>
						<div class="tb"><p>Цена: от <span class="price">400</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19804.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Atlanta АТН-849 – доступная машинка для стрижки волос в домашних условиях с 4 насадками мощностью 15 Вт. Имеет нескользящую ручку со специальной накладкой. Есть возможность регулировать длину ножей. Предусмотрена регулировка длины. Корпус изготовлен из пластика, лезвия из стали. Вместе с машинкой идет щеточка для очистки, ножницы, масло и адаптер питания. </p><p>Характеристики:</p><ul type=disc><li>Полный парикмахерский комплект <li>Удобная нескользящая ручка со специальной накладкой <li>Возможность регулировки ножей <li>Четыре насадки для создания причесок разной длины <li>Прецизионные ножи из стали высокой прочности <li>Мощность 15 Вт <li>220-240 В, 50-60 Гц <li>18.3 x 6.2 x 24 см </li></ul><p><strong>Производитель: США</strong></p> абонемент в солярий скидки</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/dded430ece486ae43997cb46bb2e8368.jpeg" alt="лучшие электробритвы мужские Пародонтологические насадки для ирригатора Waterpik WP70E (2 шт.)" title="лучшие электробритвы мужские Пародонтологические насадки для ирригатора Waterpik WP70E (2 шт.)"><div class="box" page="parodontologicheskie-nasadki-dlya-irrigatora-waterpik-wpe-sht-350r"><span class="title">лучшие электробритвы мужские Пародонтологические насадки для ирригатора Waterpik WP70E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/db70e4caed6a14bdf471de2cc1b8511a.jpeg" alt="купить дарсонваль карат Насадки для ирригаторов серии AquaPulsar (4шт.) OMRON CS Medica AP-40" title="купить дарсонваль карат Насадки для ирригаторов серии AquaPulsar (4шт.) OMRON CS Medica AP-40"><div class="box" page="nasadki-dlya-irrigatorov-serii-aquapulsar-sht-omron-cs-medica-ap-360r"><span class="title">купить дарсонваль карат Насадки для ирригаторов серии AquaPulsar (4шт.) OMRON CS Medica AP-40</span><p>от <span class="price">360</span> руб.</p></div></li>
						<li><img src="photos/b335395a214a3a546c41305f7ef60066.jpeg" alt="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051" title="зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051"><div class="box" page="nabor-dlya-manikyura-i-pedikyura-s-nasadkami-gezatone-d-590r"><span class="title">зачем закрывают зеркала Набор для маникюра и педикюра с 5 насадками Gezatone 116D 1301051</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li><img src="photos/daee302fef3f111d46577290c7b50aa9.jpeg" alt="солярий тюмень Аппликатор Ляпко Спутник 6,2" title="солярий тюмень Аппликатор Ляпко Спутник 6,2"><div class="box" page="applikator-lyapko-sputnik-360r"><span class="title">солярий тюмень Аппликатор Ляпко Спутник 6,2</span><p>от <span class="price">360</span> руб.</p></div></li>
						<li class="large"><img src="photos/24a1f98b96076ea10a4940039bfafbfb.jpeg" alt="польза массажа Аппликатор Стелька-скороход, размер 37-40" title="польза массажа Аппликатор Стелька-скороход, размер 37-40"><div class="box" page="applikator-stelkaskorohod-razmer-1350r"><span class="title">польза массажа Аппликатор Стелька-скороход, размер 37-40</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li class="large"><img src="photos/741c2a17d20645ac77bf0cd8e2974fe0.jpeg" alt="комплект зеркал Массажер роликовый Мастер" title="комплект зеркал Массажер роликовый Мастер"><div class="box" page="massazher-rolikovyy-master-290r"><span class="title">комплект зеркал Массажер роликовый Мастер</span><p>от <span class="price">290</span> руб.</p></div></li>
						<li class="large"><img src="photos/782aa0f31386fb09629ab9ef5d11ebc4.jpeg" alt="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)" title="набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)"><div class="box" page="massazher-dlya-profilaktiki-varikoza-aviafit-sht-3000r"><span class="title">набор для выпрямления волос Массажер для профилактики варикоза Aviafit (2 шт)</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/a29c87a6d37c3c1c350b3ca5da030cb3.jpeg" alt="зеркало телевизор Гидромассажная ванночка для ног BREMED BD 7500" title="зеркало телевизор Гидромассажная ванночка для ног BREMED BD 7500"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-bremed-bd-2450r"><span class="title">зеркало телевизор Гидромассажная ванночка для ног BREMED BD 7500</span><p>от <span class="price">2450</span> руб.</p></div></li>
						<li><img src="photos/991e5918a98c4f174a34a2f80873edbd.jpeg" alt="даньков зеркала Массажная накидка шиатсу  Beurer MG190" title="даньков зеркала Массажная накидка шиатсу  Beurer MG190"><div class="box" page="massazhnaya-nakidka-shiatsu-beurer-mg-5500r"><span class="title">даньков зеркала Массажная накидка шиатсу  Beurer MG190</span><p>от <span class="price">5500</span> руб.</p></div></li>
						<li><img src="photos/68c5ed4efd2baf3bd4ba5079f66017fc.jpeg" alt="электронные весы дешево Солярий для лица Efbe-Schott 826" title="электронные весы дешево Солярий для лица Efbe-Schott 826"><div class="box" page="solyariy-dlya-lica-efbeschott-4800r"><span class="title">электронные весы дешево Солярий для лица Efbe-Schott 826</span><p>от <span class="price">4800</span> руб.</p></div></li>
						<li><img src="photos/64a5504595f82bd1747433288ef7e72a.jpeg" alt="зеркало заднего вида 2107 Электрическая зубная щетка FlexCare HX 6902-02" title="зеркало заднего вида 2107 Электрическая зубная щетка FlexCare HX 6902-02"><div class="box" page="elektricheskaya-zubnaya-schetka-flexcare-hx-4750r"><span class="title">зеркало заднего вида 2107 Электрическая зубная щетка FlexCare HX 6902-02</span><p>от <span class="price">4750</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mashinka-dlya-strizhki-atlanta-atn-400r.php", 0, -4); if (file_exists("comments/mashinka-dlya-strizhki-atlanta-atn-400r.php")) require_once "comments/mashinka-dlya-strizhki-atlanta-atn-400r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mashinka-dlya-strizhki-atlanta-atn-400r.php" method="post" onsubmit="return checkForm(this)">
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