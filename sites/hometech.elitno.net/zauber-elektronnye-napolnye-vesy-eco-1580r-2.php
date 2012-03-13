<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zauber-elektronnye-napolnye-vesy-eco-1580r-2.php","массаж тазобедренного сустава");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zauber-elektronnye-napolnye-vesy-eco-1580r-2.php", $nick, $comment);
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
		<title>массаж тазобедренного сустава Zauber Электронные напольные весы  ECO-150  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж тазобедренного сустава, массаж пальцев рук, читать книгу зеркало, фен щетка цена, тайский массаж в самаре, успенская зеркала, триммер для зоны бикини, камеди клаб кривые зеркала, эпилятор с охлаждающим эффектом, эпилятор ровента отзывы, боковое зеркало шкода, зеркало заднего вида 2110, ионизатор воды купить, электробритвы мужские купить,  купить сетку для электробритвы">
		<meta name="description" content="массаж тазобедренного сустава Электронные напольные весы ECO-150 от шведской компании Zauber работают от солне...">
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
						<a class="photo" href="photos/3b8c8a335cc3e56920ea3baf010f9e39.jpeg" title="массаж тазобедренного сустава Zauber Электронные напольные весы  ECO-150"><img src="photos/3b8c8a335cc3e56920ea3baf010f9e39.jpeg" alt="массаж тазобедренного сустава Zauber Электронные напольные весы  ECO-150" title="массаж тазобедренного сустава Zauber Электронные напольные весы  ECO-150 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/tanita-um-analizator-zhira-1200r.php"><img src="photos/4ecee0d42afb7bc25bfb59b8bf1d1a58.jpeg" alt="массаж пальцев рук Tanita UM-073 Анализатор жира" title="массаж пальцев рук Tanita UM-073 Анализатор жира"></a><h2>Tanita UM-073 Анализатор жира</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-ess-2530r.php"><img src="photos/6320dccf20857c12aa3b605bb831003f.jpeg" alt="читать книгу зеркало Выпрямитель для волос Braun ESS" title="читать книгу зеркало Выпрямитель для волос Braun ESS"></a><h2>Выпрямитель для волос Braun ESS</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-600r.php"><img src="photos/c27a4d89a2f0dd3ef16052fa67829ba2.jpeg" alt="фен щетка цена Зеркало Beurer BS 29  косметическое" title="фен щетка цена Зеркало Beurer BS 29  косметическое"></a><h2>Зеркало Beurer BS 29  косметическое</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж тазобедренного сустава Zauber Электронные напольные весы  ECO-150</h1>
						<div class="tb"><p>Цена: от <span class="price">1580</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_17271.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электронные напольные весы ECO-150 от шведской компании Zauber работают от солнечной батареи Solar. Особенность этих весов в приятном на ощупь, светлом деревянном корпусе Trad Naturliga и в современном энергосберегающем LCD-дисплее.</p><p><b>Технические характеристики:</b></p><ul><li>Тип: Электронные <li>Материал платформы: Дерево <li>Элементы питания: солнечная батареяx <li>Максимальная нагрузка: 150 кг <li>Точность измерения: 0,1 кг <li>Автоматическое выключение: Есть <li>Автоматическое включение: Есть <li>Размер: 5,5x33,5x34,5см <li>Вес: 1,14 кг </li></ul><p><b>Производитель:Швеция</b></p> массаж тазобедренного сустава</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/2f9a3ffb10b1f6db25db2e1360f39b48.jpeg" alt="тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое" title="тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое"><div class="box" page="zerkalo-dvustoronnee-valera-kosmeticheskoe-1530r"><span class="title">тайский массаж в самаре Зеркало двустороннее Valera 618.01 косметическое</span><p>от <span class="price">1530</span> руб.</p></div></li>
						<li><img src="photos/e273f348f6c5708fd82a881f65351988.jpeg" alt="успенская зеркала Зеркало настольное Rosenberg S-2338" title="успенская зеркала Зеркало настольное Rosenberg S-2338"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-970r"><span class="title">успенская зеркала Зеркало настольное Rosenberg S-2338</span><p>от <span class="price">970</span> руб.</p></div></li>
						<li><img src="photos/ca66537608944cd4881ffac56a0a3e8e.jpeg" alt="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита" title="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита"><div class="box" page="balzam-dlya-irrigatora-donfeel-profilaktika-parodontoza-i-gingivita-180r"><span class="title">триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита</span><p>от <span class="price">180</span> руб.</p></div></li>
						<li><img src="photos/699c71eb95474070f11b71a4c8de6691.jpeg" alt="камеди клаб кривые зеркала Ирригатор полости рта DONFEEL OR-820M Комплектация 1" title="камеди клаб кривые зеркала Ирригатор полости рта DONFEEL OR-820M Комплектация 1"><div class="box" page="irrigator-polosti-rta-donfeel-orm-komplektaciya-2890r"><span class="title">камеди клаб кривые зеркала Ирригатор полости рта DONFEEL OR-820M Комплектация 1</span><p>от <span class="price">2890</span> руб.</p></div></li>
						<li class="large"><img src="photos/5d711d5eed018cbd13b88e17524fc23f.jpeg" alt="эпилятор с охлаждающим эффектом Массажный матрас US-Medica Ocean MA-190" title="эпилятор с охлаждающим эффектом Массажный матрас US-Medica Ocean MA-190"><div class="box" page="massazhnyy-matras-usmedica-ocean-ma-30000r"><span class="title">эпилятор с охлаждающим эффектом Массажный матрас US-Medica Ocean MA-190</span><p>от <span class="price">30000</span> руб.</p></div></li>
						<li class="large"><img src="photos/73a821d3ad225325ed956d5e193b7846.jpeg" alt="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line" title="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-sakura-lineyka-sumo-line-24900r"><span class="title">эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line</span><p>от <span class="price">24900</span> руб.</p></div></li>
						<li class="large"><img src="photos/e8ce6906fe484bd61dc8b90eb5a3df4a.jpeg" alt="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S" title="боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S"><div class="box" page="poyasmiostimulyator-slendertone-flex-s-1500r"><span class="title">боковое зеркало шкода Пояс-миостимулятор Slendertone Flex 023 S</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/efecfdd903b36bfb57ecf33e62da8ced.jpeg" alt="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E" title="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E"><div class="box" page="vibromassazher-clear-fit-extra-beauty-cf-e-9490r"><span class="title">зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E</span><p>от <span class="price">9490</span> руб.</p></div></li>
						<li><img src="photos/b90cb28c59b4b83e0ed4774137db931c.jpeg" alt="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775" title="ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775"><div class="box" page="pribor-kosmeticheskiy-mnogofunkcionalnyy-gezatone-galvanic-beauty-spa-m-2240r"><span class="title">ионизатор воды купить Прибор косметический многофункциональный Gezatone Galvanic Beauty SPA M775</span><p>от <span class="price">2240</span> руб.</p></div></li>
						<li><img src="photos/e01d2dae2f575f567f13f00f34017217.jpeg" alt="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья" title="электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья"><div class="box" page="mashinka-dlya-bikini-dizayna-gezatone-dp-s-nasadkoy-dlya-britya-1500r"><span class="title">электробритвы мужские купить Машинка для бикини дизайна Gezatone DP501 с насадкой для бритья</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/d8f63990242e9c9f3d5c4cfc322b0bcb.jpeg" alt="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции" title="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции"><div class="box" page="beurer-hl-pribor-svetovoy-epilyacii-18500r"><span class="title">куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции</span><p>от <span class="price">18500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zauber-elektronnye-napolnye-vesy-eco-1580r-2.php", 0, -4); if (file_exists("comments/zauber-elektronnye-napolnye-vesy-eco-1580r-2.php")) require_once "comments/zauber-elektronnye-napolnye-vesy-eco-1580r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zauber-elektronnye-napolnye-vesy-eco-1580r-2.php" method="post" onsubmit="return checkForm(this)">
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