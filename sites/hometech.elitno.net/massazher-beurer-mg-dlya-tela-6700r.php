<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-beurer-mg-dlya-tela-6700r.php","линии массажа");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-beurer-mg-dlya-tela-6700r.php", $nick, $comment);
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
		<title>линии массажа Массажер Beurer MG200 для тела  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="линии массажа, пришла на массаж смотреть, эпилятор braun 7280, для маникюра и педикюра купить, солярий для мужчин, авторы кривого зеркала, экзотический массаж, эпилятор ровента отзывы, дренажный массаж, зеркало на опель астра, триммер для женщин, массаж обертывание, завивка волос отзывы, подглядывание в солярии,  массаж приморская">
		<meta name="description" content="линии массажа Массажер Beurer MG200 специально создан для качественного массажа различных част...">
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
						<a class="photo" href="photos/b5c5192b3e547bda1e0dd8bffdebfdad.jpeg" title="линии массажа Массажер Beurer MG200 для тела"><img src="photos/b5c5192b3e547bda1e0dd8bffdebfdad.jpeg" alt="линии массажа Массажер Beurer MG200 для тела" title="линии массажа Массажер Beurer MG200 для тела -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/professionalnye-elektronnye-vesy-tanita-wb-155000r.php"><img src="photos/74f96d002c7070932c6bf46bfe207b40.jpeg" alt="пришла на массаж смотреть Профессиональные электронные весы Tanita WB-630" title="пришла на массаж смотреть Профессиональные электронные весы Tanita WB-630"></a><h2>Профессиональные электронные весы Tanita WB-630</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-professionalnye-tanita-wb-17550r.php"><img src="photos/fc4f3b7aa860ded2b292910d886fca02.jpeg" alt="эпилятор braun 7280 Весы профессиональные Tanita WB-3000" title="эпилятор braun 7280 Весы профессиональные Tanita WB-3000"></a><h2>Весы профессиональные Tanita WB-3000</h2></li>
							<li><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-professionalnyy-stilist-vitesse-vs-1100r.php"><img src="photos/75d902ae8807f03207b39389f629860a.jpeg" alt="для маникюра и педикюра купить Щипцы для выпрямления волос Профессиональный стилист Vitesse VS-932" title="для маникюра и педикюра купить Щипцы для выпрямления волос Профессиональный стилист Vitesse VS-932"></a><h2>Щипцы для выпрямления волос Профессиональный стилист Vitesse VS-932</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>линии массажа Массажер Beurer MG200 для тела</h1>
						<div class="tb"><p>Цена: от <span class="price">6700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19379.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Массажер Beurer MG200 специально создан для качественного массажа различных частей тела в домашних условиях. Данный массажер представляет собой накидку на сиденья, сделанную из искусственной кожи, мягкого велюра и «дышащей» ткани Mesh. С помощью этой модели вы можете выбрать определенную зону для массажа – верхний отдел спины, нижний отдел или всю спину целиком. Массажер Beurer MG200 достаточно прост в использовании – управление прибором производится с помощью специального пульта. Кроме того, прочный корпус этой модели гарантирует ее надежность и долговечность. </p><p><b>Характеристики:</b></p><ul type=disc><li>Функция установки таймера (на 5/10/15 минут); <li>Возможность выбора массажной зоны: верхний отдел спины, нижний отдел спины, вся спина; <li>Легкое управление с помощью пульта; <li>Чехол для области спины и шеи из велюра, можно стирать в машинке при 40°; <li>Съемная подушка для сидения; <li>Удобная вешалка для размещения в шкафу; <li>Цвет: черный, кремовый; </li></ul><p><b>Производитель: Германия</b></p><p><b>Гарантия: 2 года</b></p> линии массажа</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/e2ac51ffcae3a37ef4e6be1787c2bf43.jpeg" alt="солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль" title="солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-rektalnaya-dlya-karat-de-darsonval-300r"><span class="title">солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/2e502c7a468088eb3eb54a35696bc7db.jpeg" alt="авторы кривого зеркала Бальзам для ирригатора DONFEEL Комплексная защита. Ежедневный уход" title="авторы кривого зеркала Бальзам для ирригатора DONFEEL Комплексная защита. Ежедневный уход"><div class="box" page="balzam-dlya-irrigatora-donfeel-kompleksnaya-zaschita-ezhednevnyy-uhod-180r"><span class="title">авторы кривого зеркала Бальзам для ирригатора DONFEEL Комплексная защита. Ежедневный уход</span><p>от <span class="price">180</span> руб.</p></div></li>
						<li><img src="photos/2d366b96963f05922aa6b4a18209076a.jpeg" alt="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"><div class="box" page="parodontologicheskie-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r"><span class="title">экзотический массаж Пародонтологические насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li><img src="photos/73a821d3ad225325ed956d5e193b7846.jpeg" alt="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line" title="эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-sakura-lineyka-sumo-line-24900r"><span class="title">эпилятор ровента отзывы Раскладной массажный стол US Medica Sakura линейка Sumo Line</span><p>от <span class="price">24900</span> руб.</p></div></li>
						<li class="large"><img src="photos/8e0d56e9d9bc332ca7666fce73e0922e.jpeg" alt="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line" title="дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line"><div class="box" page="raskladnoy-massazhnyy-stol-us-medica-panda-lineyka-sumo-line-35000r"><span class="title">дренажный массаж Раскладной массажный стол US Medica Panda линейка Sumo Line</span><p>от <span class="price">35000</span> руб.</p></div></li>
						<li class="large"><img src="photos/234e7f009134ec4e716a50e2c790eb7e.jpeg" alt="зеркало на опель астра Аппликатор Ляпко Коврик 6,8" title="зеркало на опель астра Аппликатор Ляпко Коврик 6,8"><div class="box" page="applikator-lyapko-kovrik-2720r"><span class="title">зеркало на опель астра Аппликатор Ляпко Коврик 6,8</span><p>от <span class="price">2720</span> руб.</p></div></li>
						<li class="large"><img src="photos/009fd98d06242ce12bfb8e391acb85ea.jpeg" alt="триммер для женщин Массажер-подушка Gezatone AMG392 1301100" title="триммер для женщин Массажер-подушка Gezatone AMG392 1301100"><div class="box" page="massazherpodushka-gezatone-amg-2490r"><span class="title">триммер для женщин Массажер-подушка Gezatone AMG392 1301100</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/5dd95fcbd77902411af3599387a4ddf5.jpeg" alt="массаж обертывание Массажер для головы Мурашка Антистресс" title="массаж обертывание Массажер для головы Мурашка Антистресс"><div class="box" page="massazher-dlya-golovy-murashka-antistress-200r"><span class="title">массаж обертывание Массажер для головы Мурашка Антистресс</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li><img src="photos/e017b0d2d9ea317c7c27cd62e8804f5a.jpeg" alt="завивка волос отзывы Массажная накидка BODYKRAFT К 51" title="завивка волос отзывы Массажная накидка BODYKRAFT К 51"><div class="box" page="massazhnaya-nakidka-bodykraft-k-6590r"><span class="title">завивка волос отзывы Массажная накидка BODYKRAFT К 51</span><p>от <span class="price">6590</span> руб.</p></div></li>
						<li><img src="photos/0cb3f14d82c590ca1830a52fdee51586.jpeg" alt="подглядывание в солярии BAMPITS 057A Заколка для придания объема" title="подглядывание в солярии BAMPITS 057A Заколка для придания объема"><div class="box" page="bampits-a-zakolka-dlya-pridaniya-obema-400r"><span class="title">подглядывание в солярии BAMPITS 057A Заколка для придания объема</span><p>от <span class="price">400</span> руб.</p></div></li>
						<li><img src="photos/1b8045a8b00517a46ef7bcbf121b878d.jpeg" alt="произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл" title="произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл"><div class="box" page="loson-posle-depilyacii-rica-ochischayuschiy-s-maslom-avokado-ml-600r"><span class="title">произведение зеркало Лосьон после депиляции Rica, очищающий с маслом авокадо, 100мл</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-beurer-mg-dlya-tela-6700r.php", 0, -4); if (file_exists("comments/massazher-beurer-mg-dlya-tela-6700r.php")) require_once "comments/massazher-beurer-mg-dlya-tela-6700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-beurer-mg-dlya-tela-6700r.php" method="post" onsubmit="return checkForm(this)">
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