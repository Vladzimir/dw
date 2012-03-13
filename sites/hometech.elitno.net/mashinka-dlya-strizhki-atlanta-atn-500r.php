<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mashinka-dlya-strizhki-atlanta-atn-500r.php","держатели для зеркал");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mashinka-dlya-strizhki-atlanta-atn-500r.php", $nick, $comment);
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
		<title>держатели для зеркал Машинка для стрижки Atlanta АТН-844  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="держатели для зеркал, массаж 2 года, массаж подглядывание, эпиляторы браун цены, чувственный массаж, дренажный массаж, зеркала с подогревом ваз 2110, аллергия на солярий, бразильское выпрямление волос цена, вакансии маникюр педикюр, ожог в солярии, зеркала с подогревом 2110, боковые зеркала на ваз 2114, старый фен,  массаж в пятигорске">
		<meta name="description" content="держатели для зеркал Atlanta АТН-844 – доступная машинка для стрижки волос в домашних условиях выполн...">
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
						<a class="photo" href="photos/36d6f16e06cc1d8986837d6c2ad71500.jpeg" title="держатели для зеркал Машинка для стрижки Atlanta АТН-844"><img src="photos/36d6f16e06cc1d8986837d6c2ad71500.jpeg" alt="держатели для зеркал Машинка для стрижки Atlanta АТН-844" title="держатели для зеркал Машинка для стрижки Atlanta АТН-844 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-2800r.php"><img src="photos/b12e567910272f340a2968fe97934736.jpeg" alt="массаж 2 года Весы электронные напольные с анализатором жира Tanita BC-532" title="массаж 2 года Весы электронные напольные с анализатором жира Tanita BC-532"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-532</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-s-analizatorom-zhira-tanita-bc-3000r.php"><img src="photos/fecc03dbb56fe547a8ffb39898e3559d.jpeg" alt="массаж подглядывание Весы электронные напольные с анализатором жира Tanita BC-570" title="массаж подглядывание Весы электронные напольные с анализатором жира Tanita BC-570"></a><h2>Весы электронные напольные с анализатором жира Tanita BC-570</h2></li>
							<li><a href="http://hometech.elitno.net/pribor-dlya-polucheniya-«zhivoy»-i-«mertvoy»-vody-melesta-1190r.php"><img src="photos/5a23805b006653a6cc417fee14de0eae.jpeg" alt="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста" title="эпиляторы браун цены Прибор для получения «Живой» и «Мертвой» воды Мелеста"></a><h2>Прибор для получения «Живой» и «Мертвой» воды Мелеста</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>держатели для зеркал Машинка для стрижки Atlanta АТН-844</h1>
						<div class="tb"><p>Цена: от <span class="price">500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19800.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Atlanta АТН-844 – доступная машинка для стрижки волос в домашних условиях выполненная серебристом цвете. Умеет работать как от сети, так и от долговечного аккумулятора. На корпусе есть индикатор заряда батареи. В комплекте идет одна насадка. Предусмотрена регулировка длины. Корпус изготовлен из пластика, лезвия из стали. Мощность машинки 9 Вт. Вместе с машинкой идет щеточка для очистки, подставка для зарядки, ножницы, масло и адаптер питания. </p><p>Характеристики:</p><ul type=disc><li>Питание от аккумулятора и от адаптера <li>Адаптер со специальной подставкой в комплекте <li>Регулируемая насадка для стрижки волос <li>Индикатор зарядки <li>Долговечная батарея <li>Прецизионные ножи из стали высокой прочности <li>Мощность 9 Вт <li>220-240 В, 50-60 Гц <li>18.9 x 6 x 28.8 см </li></ul><p><strong>Производитель: США</strong></p> держатели для зеркал</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c225afb28f1b6e082ea5b6d0dfd8a7ac.jpeg" alt="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)" title="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)"><div class="box" page="beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r"><span class="title">чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li><img src="photos/8e0d56e9d9bc332ca7666fce73e0922e.jpeg" alt="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line" title="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-panda-lineyka-sumo-line-35000r"><span class="title">дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line</span><p>от <span class="price">35000</span> руб.</p></div></li>
						<li><img src="photos/9af68fa97f261647a9429865197ba1c3.jpeg" alt="зеркала с подогревом ваз 2110 Универсальная полка под стол USM-012" title="зеркала с подогревом ваз 2110 Универсальная полка под стол USM-012"><div class="box" page="universalnaya-polka-pod-stol-usm-1150r"><span class="title">зеркала с подогревом ваз 2110 Универсальная полка под стол USM-012</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li><img src="photos/d183c7f387a6a16832dcadb30c5c244b.jpeg" alt="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)" title="аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)"><div class="box" page="massazher-omron-e-tensmiostimulyator-4100r"><span class="title">аллергия на солярий Массажер OMRON E4 (TENS-миостимулятор)</span><p>от <span class="price">4100</span> руб.</p></div></li>
						<li class="large"><img src="photos/ef10884f9e80a4171170846108539bb4.jpeg" alt="бразильское выпрямление волос цена Спа-массажер Gezatone AMG107 1301102" title="бразильское выпрямление волос цена Спа-массажер Gezatone AMG107 1301102"><div class="box" page="spamassazher-gezatone-amg-890r"><span class="title">бразильское выпрямление волос цена Спа-массажер Gezatone AMG107 1301102</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li class="large"><img src="photos/75b05ae33b613e40ffe8181cdc09a99b.jpeg" alt="вакансии маникюр педикюр Массажер ZENET TL-MHT-H" title="вакансии маникюр педикюр Массажер ZENET TL-MHT-H"><div class="box" page="massazher-zenet-tlmhth-1250r"><span class="title">вакансии маникюр педикюр Массажер ZENET TL-MHT-H</span><p>от <span class="price">1250</span> руб.</p></div></li>
						<li class="large"><img src="photos/2da10774211f671836a3e448d640220b.png" alt="ожог в солярии Массажер для стоп US-Medica Omega" title="ожог в солярии Массажер для стоп US-Medica Omega"><div class="box" page="massazher-dlya-stop-usmedica-omega-4500r"><span class="title">ожог в солярии Массажер для стоп US-Medica Omega</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/ab29ac873813211495d6ce68e3940399.jpeg" alt="зеркала с подогревом 2110 Массажная накидка с 12 роликами" title="зеркала с подогревом 2110 Массажная накидка с 12 роликами"><div class="box" page="massazhnaya-nakidka-s-rolikami-4500r"><span class="title">зеркала с подогревом 2110 Массажная накидка с 12 роликами</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/e55a588272299395301209d6bb27009d.jpeg" alt="боковые зеркала на ваз 2114 Машинка для стрижки Atlanta АТН-846" title="боковые зеркала на ваз 2114 Машинка для стрижки Atlanta АТН-846"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-560r"><span class="title">боковые зеркала на ваз 2114 Машинка для стрижки Atlanta АТН-846</span><p>от <span class="price">560</span> руб.</p></div></li>
						<li><img src="photos/cd97bcc69bc590d53dc7bb400d4a398b.jpeg" alt="старый фен Разогреватель для воска Gezatone без базы" title="старый фен Разогреватель для воска Gezatone без базы"><div class="box" page="razogrevatel-dlya-voska-gezatone-bez-bazy-1090r"><span class="title">старый фен Разогреватель для воска Gezatone без базы</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li><img src="photos/adcc575e5bacc1acddf4cec685c7f5b7.jpeg" alt="фен щетка babyliss отзывы Vitek VT–1377 Электробритва" title="фен щетка babyliss отзывы Vitek VT–1377 Электробритва"><div class="box" page="vitek-vt–-elektrobritva-1200r"><span class="title">фен щетка babyliss отзывы Vitek VT–1377 Электробритва</span><p>от <span class="price">1200</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mashinka-dlya-strizhki-atlanta-atn-500r.php", 0, -4); if (file_exists("comments/mashinka-dlya-strizhki-atlanta-atn-500r.php")) require_once "comments/mashinka-dlya-strizhki-atlanta-atn-500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mashinka-dlya-strizhki-atlanta-atn-500r.php" method="post" onsubmit="return checkForm(this)">
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