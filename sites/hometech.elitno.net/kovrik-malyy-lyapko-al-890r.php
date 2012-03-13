<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kovrik-malyy-lyapko-al-890r.php","электронная ложка весы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kovrik-malyy-lyapko-al-890r.php", $nick, $comment);
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
		<title>электронная ложка весы Коврик малый Ляпко АЛ  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="электронная ложка весы, боковое зеркало на тойоту, успенская зеркала, лицензия на массаж, массаж пальчиков, массаж медом антицеллюлитный, электробритва philips at750, боковое зеркало шкода, зеркало обновлений nod32, солярий великий новгород, массаж 2 года, авто зеркало купить, бумажные полотенца в рулонах, солярий для лица philips,  машинка для стрижки ровента">
		<meta name="description" content="электронная ложка весы Вы много работаете за компьютером, и к вечеру ваши глаза  сильно устают? В таком...">
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
						<a class="photo" href="photos/2cb4e8a91d245f53ceebe70f42a3b86c.jpeg" title="электронная ложка весы Коврик малый Ляпко АЛ"><img src="photos/2cb4e8a91d245f53ceebe70f42a3b86c.jpeg" alt="электронная ложка весы Коврик малый Ляпко АЛ" title="электронная ложка весы Коврик малый Ляпко АЛ -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/nasadka-nosovaya-dlya-karat-de-darsonval-300r.php"><img src="photos/b6bb344823584f3fea6f0061dd2edab6.jpeg" alt="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль" title="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка носовая для КАРАТ ДЕ-212 Дарсонваль</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-nastolnoe-rosenberg-s-970r.php"><img src="photos/e273f348f6c5708fd82a881f65351988.jpeg" alt="успенская зеркала Зеркало настольное Rosenberg S-2338" title="успенская зеркала Зеркало настольное Rosenberg S-2338"></a><h2>Зеркало настольное Rosenberg S-2338</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-nastolnoe-rosenberg-s-1050r.php"><img src="photos/3cb8fb7617e327ab1de4f64923d896d1.jpeg" alt="лицензия на массаж Зеркало настольное Rosenberg S-2339" title="лицензия на массаж Зеркало настольное Rosenberg S-2339"></a><h2>Зеркало настольное Rosenberg S-2339</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>электронная ложка весы Коврик малый Ляпко АЛ</h1>
						<div class="tb"><p>Цена: от <span class="price">890</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_25728.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вы много работаете за компьютером, и к вечеру ваши глаза  сильно устают? В таком случае универсальный компактный АЛ «Коврик малый» Ляпко  станет для вас по-настоящему ценным приобретением. АЛ «Коврик малый» Ляпко  имеет оптимальный размер (242х140 см) и шаг игл (6); иглы данного малого  коврика изготовлены из самых качественных материалов: цинка, меди, железа,  никеля и серебра. Обратите внимание: применение данного прибора имеет  противопоказания. Перед использованием внимательно читайте инструкцию.</p> <p>Заботьтесь о своем здоровье! </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Шаг игл: 6;</li>   <li>Размер:  242х140 см;</li>   <li>Материал игл: цинк, медь, железо, никель, серебро;</li>   <li>Время сеанса: 7-10 минут;</li>   <li>Противопоказания: острые инфекционные заболевания, повышенная температура, болезни крови,       нарушения целостности кожных покровов.</li> </ul> <p><strong>Производитель: Ляпко  (Россия)</strong></p> электронная ложка весы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0891aaac96a9696aa1419e17da073bfe.jpeg" alt="массаж пальчиков Осеребритель воды Георгий" title="массаж пальчиков Осеребритель воды Георгий"><div class="box" page="oserebritel-vody-georgiy-2880r"><span class="title">массаж пальчиков Осеребритель воды Георгий</span><p>от <span class="price">2880</span> руб.</p></div></li>
						<li><img src="photos/15986a54082f98b80f57966a0faabc05.jpeg" alt="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"><div class="box" page="standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r"><span class="title">массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/e83780f442fe720f2b4d56bdd2221d0b.jpeg" alt="электробритва philips at750 Валик усеченный круг L64D14 USM-007" title="электробритва philips at750 Валик усеченный круг L64D14 USM-007"><div class="box" page="valik-usechennyy-krug-ld-usm-1200r"><span class="title">электробритва philips at750 Валик усеченный круг L64D14 USM-007</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/e8ce6906fe484bd61dc8b90eb5a3df4a.jpeg" alt="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S" title="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S"><div class="box" page="poyasmiostimulyator-slendertone-flex-s-1500r"><span class="title">боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/204ba8d6c75baeef17b6e79f51f1b650.jpeg" alt="зеркало обновлений nod32 Массажер роликовый Юниор" title="зеркало обновлений nod32 Массажер роликовый Юниор"><div class="box" page="massazher-rolikovyy-yunior-200r"><span class="title">зеркало обновлений nod32 Массажер роликовый Юниор</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li class="large"><img src="photos/131e52acd4018df8f469d0b420949fb3.jpeg" alt="солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L" title="солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L"><div class="box" page="vibromassazher-clear-fit-life-beauty-cf-l-7490r"><span class="title">солярий великий новгород Вибромассажер Clear Fit Life Beauty CF 120 L</span><p>от <span class="price">7490</span> руб.</p></div></li>
						<li class="large"><img src="photos/f5800fd3cb018e4ce2e878a7829b57fe.jpeg" alt="массаж 2 года Массажер для ног US Medica Angel Feet" title="массаж 2 года Массажер для ног US Medica Angel Feet"><div class="box" page="massazher-dlya-nog-us-medica-angel-feet-13500r"><span class="title">массаж 2 года Массажер для ног US Medica Angel Feet</span><p>от <span class="price">13500</span> руб.</p></div></li>
						<li><img src="photos/9c7a489ceaec081c9dd5b77cb7fc7ab6.jpeg" alt="авто зеркало купить Массажная накидка US-Medica Combo LMC-050" title="авто зеркало купить Массажная накидка US-Medica Combo LMC-050"><div class="box" page="massazhnaya-nakidka-usmedica-combo-lmc-12000r"><span class="title">авто зеркало купить Массажная накидка US-Medica Combo LMC-050</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li><img src="photos/51e9a6eaf948832c451cdbbf4a286b50.jpeg" alt="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл" title="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r"><span class="title">бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/8490dc8415f0687c14c5a68af1ed5b29.jpeg" alt="солярий для лица philips Фен Atlanta АТН-87" title="солярий для лица philips Фен Atlanta АТН-87"><div class="box" page="fen-atlanta-atn-480r"><span class="title">солярий для лица philips Фен Atlanta АТН-87</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/1a210244749be72407427b614ce3bd69.jpeg" alt="колледж курсы массажа Зубная щетка-ирригатор AMEE ORAL JET BRAUN MD-18 (MD-20)" title="колледж курсы массажа Зубная щетка-ирригатор AMEE ORAL JET BRAUN MD-18 (MD-20)"><div class="box" page="zubnaya-schetkairrigator-amee-oral-jet-braun-md-md-5600r"><span class="title">колледж курсы массажа Зубная щетка-ирригатор AMEE ORAL JET BRAUN MD-18 (MD-20)</span><p>от <span class="price">5600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kovrik-malyy-lyapko-al-890r.php", 0, -4); if (file_exists("comments/kovrik-malyy-lyapko-al-890r.php")) require_once "comments/kovrik-malyy-lyapko-al-890r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kovrik-malyy-lyapko-al-890r.php" method="post" onsubmit="return checkForm(this)">
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