<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("vesy-elektronnye-napolnye-beurer-ps-2100r.php","массаж коррекция фигуры");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("vesy-elektronnye-napolnye-beurer-ps-2100r.php", $nick, $comment);
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
		<title>массаж коррекция фигуры Весы электронные напольные Beurer PS24  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж коррекция фигуры, триммер champion, книги массаж бесплатно, триммер для бритья, массаж октябрьская, массаж в ярославле, солярий для мужчин, техника медового массажа, тайский массаж ног, эпилятор ровента отзывы, физиотерапия в стоматологии, подглядывание в солярии, подогрев зеркал калина, массаж при гайморите,  фен ровента с вращающейся щеткой">
		<meta name="description" content="массаж коррекция фигуры Говорящие весы Beurer PS24 – оригинальный и в тоже время функциональный предмет....">
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
						<a class="photo" href="photos/d9264ad16a0de4ef44c572b9c1a57a33.jpeg" title="массаж коррекция фигуры Весы электронные напольные Beurer PS24"><img src="photos/d9264ad16a0de4ef44c572b9c1a57a33.jpeg" alt="массаж коррекция фигуры Весы электронные напольные Beurer PS24" title="массаж коррекция фигуры Весы электронные напольные Beurer PS24 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-wbpma-35000r.php"><img src="photos/d7ec75485f093187b978e38d5d2724a5.jpeg" alt="триммер champion Профессиональные электронные весы Tanita WB-100PMA" title="триммер champion Профессиональные электронные весы Tanita WB-100PMA"></a><h2>Профессиональные электронные весы Tanita WB-100PMA</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-ps-1100r.php"><img src="photos/030cdb8b5d05bee1309d2a22263708df.jpeg" alt="книги массаж бесплатно Весы электронные напольные Beurer PS06" title="книги массаж бесплатно Весы электронные напольные Beurer PS06"></a><h2>Весы электронные напольные Beurer PS06</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-napolnye-maxima-ms-990r.php"><img src="photos/36e8e5437c77b529d6c4c22e7845aa5f.jpeg" alt="триммер для бритья Весы напольные Maxima MS-017" title="триммер для бритья Весы напольные Maxima MS-017"></a><h2>Весы напольные Maxima MS-017</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж коррекция фигуры Весы электронные напольные Beurer PS24</h1>
						<div class="tb"><p>Цена: от <span class="price">2100</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1027.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><strong>Говорящие весы Beurer PS24 </strong>– оригинальный и в тоже время функциональный предмет. После того как вы встаете на платформу весов умный прибор тут же отчитывается о результатах. Голосовое сообщение можно выбрать на английском, так и на немецком языке. Современный дизайн весов впишется в любой интерьер. А голосовая память порадует пользователей со слабым зрением и детей.</p><p><b>Особенности:</b></p><ul type=\disc\><li>Речевой вывод на немецком и английском языке </li><li>Регулируемая громкость звука </li><li>ЖК-дисплей </li><li>Технология Tap-on </li><li>Индикатор заряда батарейки </li><li>Перенастройка индикации веса в кг/фунтах </li><li>Автоматическое отключение</li></ul><p><b>Технические характеристики:</b></p><ul><li>Размер платформы: 320 x 320 мм </li><li>Высота цифр: 32 мм </li><li>Питание: 1 батарейка 9 В </li><li>Цена деления: 100 г </li><li>Предел взвешивания: 180 кг</li></ul><p><b>Производитель:</b> Beurer (Германия)</p><p><b>Гарантия:</b> 3 года</p> массаж коррекция фигуры</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7cc3da826513a2ff00ab64d42d081c24.jpeg" alt="массаж октябрьская Весы электронные напольные диагностические  Beurer BG 75" title="массаж октябрьская Весы электронные напольные диагностические  Beurer BG 75"><div class="box" page="vesy-elektronnye-napolnye-diagnosticheskie-beurer-bg-2000r"><span class="title">массаж октябрьская Весы электронные напольные диагностические  Beurer BG 75</span><p>от <span class="price">2000</span> руб.</p></div></li>
						<li><img src="photos/25ef57ddaf2ca71d16b13307acd93725.jpeg" alt="массаж в ярославле Анализатор жировой массы Tanita MC-980MA" title="массаж в ярославле Анализатор жировой массы Tanita MC-980MA"><div class="box" page="analizator-zhirovoy-massy-tanita-mcma-669000r"><span class="title">массаж в ярославле Анализатор жировой массы Tanita MC-980MA</span><p>от <span class="price">669000</span> руб.</p></div></li>
						<li><img src="photos/e2ac51ffcae3a37ef4e6be1787c2bf43.jpeg" alt="солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль" title="солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-rektalnaya-dlya-karat-de-darsonval-300r"><span class="title">солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/ca3cac97732e962cf09778cd2b8d779d.jpeg" alt="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care." title="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care."><div class="box" page="gel-dlya-domashnego-uhoda-ftorida-olova-home-care-540r"><span class="title">техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li class="large"><img src="photos/b065bebb64de8f2c346a89fd812de718.jpeg" alt="тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive." title="тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive."><div class="box" page="vosstanovlenie-remineralizuyuschiy-gel-s-ftorom-revive-540r"><span class="title">тайский массаж ног Восстановление. Реминерализующий гель с фтором. Revive.</span><p>от <span class="price">540</span> руб.</p></div></li>
						<li class="large"><img src="photos/73a821d3ad225325ed956d5e193b7846.jpeg" alt="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line" title="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-sakura-lineyka-sumo-line-24900r"><span class="title">эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line</span><p>от <span class="price">24900</span> руб.</p></div></li>
						<li class="large"><img src="photos/565c863a758e1bc3e5c28686264c8804.jpeg" alt="физиотерапия в стоматологии Валик круглый L61D15 USM-003" title="физиотерапия в стоматологии Валик круглый L61D15 USM-003"><div class="box" page="valik-kruglyy-ld-usm-1200r-2"><span class="title">физиотерапия в стоматологии Валик круглый L61D15 USM-003</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/92c16d267d16556f4f9df2ed4ab4d8db.jpeg" alt="подглядывание в солярии Аппликатор Ляпко Шанс 4,9" title="подглядывание в солярии Аппликатор Ляпко Шанс 4,9"><div class="box" page="applikator-lyapko-shans-760r"><span class="title">подглядывание в солярии Аппликатор Ляпко Шанс 4,9</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/8524c9a81149ced5afefd960c059f93e.jpeg" alt="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T" title="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T"><div class="box" page="vibromassazher-clear-fit-top-beauty-cf-t-10490r"><span class="title">подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T</span><p>от <span class="price">10490</span> руб.</p></div></li>
						<li><img src="photos/80e1549e8ba52d130ff6ca8cfae7cb7f.jpeg" alt="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035" title="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035"><div class="box" page="massazher-ultrazvukovoy-impulsnyy-gezatone-ultratonik-m-3900r"><span class="title">массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035</span><p>от <span class="price">3900</span> руб.</p></div></li>
						<li><img src="photos/3e07c9c76543509eb7330cd46f97b553.jpeg" alt="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01" title="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01"><div class="box" page="mashinka-dlya-strizhki-volos-valera-absolut-3480r"><span class="title">электробритва харьков Машинка для стрижки волос Valera Absolut 648.01</span><p>от <span class="price">3480</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("vesy-elektronnye-napolnye-beurer-ps-2100r.php", 0, -4); if (file_exists("comments/vesy-elektronnye-napolnye-beurer-ps-2100r.php")) require_once "comments/vesy-elektronnye-napolnye-beurer-ps-2100r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="vesy-elektronnye-napolnye-beurer-ps-2100r.php" method="post" onsubmit="return checkForm(this)">
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