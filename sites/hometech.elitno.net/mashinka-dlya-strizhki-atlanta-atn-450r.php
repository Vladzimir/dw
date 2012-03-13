<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mashinka-dlya-strizhki-atlanta-atn-450r.php","весы медицинские электронные");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mashinka-dlya-strizhki-atlanta-atn-450r.php", $nick, $comment);
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
		<title>весы медицинские электронные Машинка для стрижки Atlanta АТН-850  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="весы медицинские электронные, к чему бьется зеркало, солярий для лица купить, зеркало войны, фен для собак, эпилятор philips hp 6576, массаж для младенцев, косметика из индии, эпилятор philips hp 6570, где научиться массажу, вакуумный массаж купить, зеркала с подогревом 2110, бумажные полотенца в рулонах, электрическая зубная щетка орал би,  вакансии маникюр педикюр">
		<meta name="description" content="весы медицинские электронные Atlanta АТН-850 – доступная машинка серебристо-черного цвета для стрижки волос в...">
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
						<a class="photo" href="photos/e1f8df1d0cae6e5bc21336622bf3ba88.jpeg" title="весы медицинские электронные Машинка для стрижки Atlanta АТН-850"><img src="photos/e1f8df1d0cae6e5bc21336622bf3ba88.jpeg" alt="весы медицинские электронные Машинка для стрижки Atlanta АТН-850" title="весы медицинские электронные Машинка для стрижки Atlanta АТН-850 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-2450r.php"><img src="photos/fc6f1a57986f092efd97a2c2ca581b49.jpeg" alt="к чему бьется зеркало Весы бытовые Tanita HD-366" title="к чему бьется зеркало Весы бытовые Tanita HD-366"></a><h2>Весы бытовые Tanita HD-366</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3500r.php"><img src="photos/bf6add516a2c682a354892d59e1c1b1a.jpeg" alt="солярий для лица купить Весы электронные напольные с анализатором жира Tanita BC-543" title="солярий для лица купить Весы электронные напольные с анализатором жира Tanita BC-543"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-543</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-napolnye-s-analizatorom-zhira-i-vody-gezatone-esga-1200r.php"><img src="photos/43a957bd80b6ff4e3954c5f31015c90c.jpeg" alt="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501" title="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501"></a><h2>Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>весы медицинские электронные Машинка для стрижки Atlanta АТН-850</h1>
						<div class="tb"><p>Цена: от <span class="price">450</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19809.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Atlanta АТН-850 – доступная машинка серебристо-черного цвета для стрижки волос в домашних условиях с 4 насадками мощностью 15 Вт. Имеет нескользящую ручку со специальной накладкой. Есть возможность регулировать длину ножей. Предусмотрена регулировка длины. Корпус изготовлен из пластика, лезвия из стали. Вместе с машинкой идет щеточка для очистки, ножницы, масло и адаптер питания. </p><p>Характеристики:</p><ul type=disc><li>Полный парикмахерский комплект <li>Удобная нескользящая ручка со специальной накладкой <li>Возможность регулировки ножей <li>Четыре насадки для создания причесок разной длины <li>Прецизионные ножи из стали высокой прочности <li>Мощность 15 Вт <li>220-240 В, 50-60 Гц <li>18.3 x 6.2 x 24 см </li></ul><p><strong>Производитель: США</strong></p> весы медицинские электронные</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/54851ee54bf22158b2c9520830c25070.jpeg" alt="фен для собак Электроды для миостимуляторов Omron" title="фен для собак Электроды для миостимуляторов Omron"><div class="box" page="elektrody-dlya-miostimulyatorov-omron-1250r"><span class="title">фен для собак Электроды для миостимуляторов Omron</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li><img src="photos/d74d7c30f76ca3dc8493a83104fd72b9.jpeg" alt="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8" title="эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8"><div class="box" page="applikator-lyapko-odinarnyy-780r"><span class="title">эпилятор philips hp 6576 Аппликатор Ляпко Одинарный 5,8</span><p>от <span class="price">780</span> руб.</p></div></li>
						<li><img src="photos/a3fdb4f3f35476641171d44c065fe679.jpeg" alt="массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)" title="массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)"><div class="box" page="al-volshebnaya-lenta-zdorove-segmenta-2600r"><span class="title">массаж для младенцев АЛ Волшебная  Лента Здоровье (3 сегмента)</span><p>от <span class="price">2600</span> руб.</p></div></li>
						<li><img src="photos/9465b0dca2e8fe2c49ae1e6021d20f1e.gif" alt="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)" title="косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)"><div class="box" page="al-volshebnaya-lenta-zdorove-segmentov-5230r"><span class="title">косметика из индии АЛ Волшебная  Лента Здоровье (7 сегментов)</span><p>от <span class="price">5230</span> руб.</p></div></li>
						<li class="large"><img src="photos/c2c64becf445fe1abeaa76be59229b33.jpeg" alt="эпилятор philips hp 6570 Массажер Nozomi MH-103" title="эпилятор philips hp 6570 Массажер Nozomi MH-103"><div class="box" page="massazher-nozomi-mh-1700r"><span class="title">эпилятор philips hp 6570 Массажер Nozomi MH-103</span><p>от <span class="price">1700</span> руб.</p></div></li>
						<li class="large"><img src="photos/921b5abf5fd22743c43409e559d706e6.jpeg" alt="где научиться массажу Гидромассажер для ванны Sanitas SLS 30" title="где научиться массажу Гидромассажер для ванны Sanitas SLS 30"><div class="box" page="gidromassazher-dlya-vanny-sanitas-sls-3500r"><span class="title">где научиться массажу Гидромассажер для ванны Sanitas SLS 30</span><p>от <span class="price">3500</span> руб.</p></div></li>
						<li class="large"><img src="photos/e30becce6238c35820065daabf81bee7.jpeg" alt="вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19" title="вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19"><div class="box" page="massazhnaya-podushka-usmedica-apple-smp-4500r"><span class="title">вакуумный массаж купить Массажная подушка US-Medica Apple SMP-19</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/ab29ac873813211495d6ce68e3940399.jpeg" alt="зеркала с подогревом 2110 Массажная накидка с 12 роликами" title="зеркала с подогревом 2110 Массажная накидка с 12 роликами"><div class="box" page="massazhnaya-nakidka-s-rolikami-4500r"><span class="title">зеркала с подогревом 2110 Массажная накидка с 12 роликами</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/51e9a6eaf948832c451cdbbf4a286b50.jpeg" alt="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл" title="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r"><span class="title">бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/604fac3d6bc90d1a626b6fb1f84938bc.jpeg" alt="электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383" title="электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383"><div class="box" page="mashinka-dlya-strizhki-vitesse-vs-700r"><span class="title">электрическая зубная щетка орал би Машинка для стрижки Vitesse VS-383</span><p>от <span class="price">700</span> руб.</p></div></li>
						<li><img src="photos/7dce7c4f266661e0b89628817a4f4d5e.jpeg" alt="массаж черкассы Фен Valera Swiss Nano 6000 Light" title="массаж черкассы Фен Valera Swiss Nano 6000 Light"><div class="box" page="fen-valera-swiss-nano-light-2490r"><span class="title">массаж черкассы Фен Valera Swiss Nano 6000 Light</span><p>от <span class="price">2490</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mashinka-dlya-strizhki-atlanta-atn-450r.php", 0, -4); if (file_exists("comments/mashinka-dlya-strizhki-atlanta-atn-450r.php")) require_once "comments/mashinka-dlya-strizhki-atlanta-atn-450r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mashinka-dlya-strizhki-atlanta-atn-450r.php" method="post" onsubmit="return checkForm(this)">
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