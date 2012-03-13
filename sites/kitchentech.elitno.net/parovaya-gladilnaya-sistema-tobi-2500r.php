<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("parovaya-gladilnaya-sistema-tobi-2500r.php","горбуша в пароварке рецепты");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("parovaya-gladilnaya-sistema-tobi-2500r.php", $nick, $comment);
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
		<title>горбуша в пароварке рецепты Паровая гладильная система TOBI  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="горбуша в пароварке рецепты, magic pot мультиварка, пылесос lg с контейнером, рожок для кофеварки, купить вертикальный утюг, аэрогриль поларис отзывы, кофеварка эспрессо для дома, panasonic мясорубка отзывы, взбить блендером яйца, сладкая выпечка в хлебопечке, продажа мультиварок, мультиварки в минске, блендер braun mx 2050, работа парогенератора,  пылесос самсунг sc отзывы">
		<meta name="description" content="горбуша в пароварке рецепты Глажение одежды зачастую отнимает много времени и не дает быстрого результата. В...">
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
						<a class="photo" href="photos/7988dddbd843f4e2d125562952a86736.jpeg" title="горбуша в пароварке рецепты Паровая гладильная система TOBI"><img src="photos/7988dddbd843f4e2d125562952a86736.jpeg" alt="горбуша в пароварке рецепты Паровая гладильная система TOBI" title="горбуша в пароварке рецепты Паровая гладильная система TOBI -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-mikser-krasnyy-bodum-bistro-euro-2740r.php"><img src="photos/be6b78c2525e9286d015556c4db7013b.jpeg" alt="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO" title="magic pot мультиварка Электрический миксер красный Bodum BISTRO 11151-294EURO"></a><h2>Электрический миксер красный Bodum BISTRO 11151-294EURO</h2></li>
							<li><a href="http://kitchentech.elitno.net/sokovyzhimalka-moulinex-juae-juice-machine-4300r.php"><img src="photos/d78a5eb7926a57e3a6daeb54a8fc1659.jpeg" alt="пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine" title="пылесос lg с контейнером Соковыжималка Moulinex JU599A3E Juice Machine"></a><h2>Соковыжималка Moulinex JU599A3E Juice Machine</h2></li>
							<li><a href="http://kitchentech.elitno.net/zauber-citrusovaya-sokovyzhimalka-x-1000r.php"><img src="photos/5fe7a070a54ac64269e20fb9f52ff92c.jpeg" alt="рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850" title="рожок для кофеварки Zauber Цитрусовая соковыжималка  X 850"></a><h2>Zauber Цитрусовая соковыжималка  X 850</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>горбуша в пароварке рецепты Паровая гладильная система TOBI</h1>
						<div class="tb"><p>Цена: от <span class="price">2500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_2437.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Глажение одежды зачастую отнимает много времени и не дает быстрого результата. Вспомните, как долго вы мучались, наводили стрелки на брюках или разглаживали сладки на льняной рубашке, не говоря уже о шторах и постельном белье.<strong>Паровая система TOBI</strong> справляется с этим в считанные минуты. Вы можете забыть о гладильной доске и даже не снимать вещи с вешалки. TOBI быстро справиться с задачей. Современный отпариватель с легкостью обработает шелковые изделия, разгладит льняные ткани, придаст опрятный вид вещам из хлопка, полиэстера, шерсти.</p><p>Отпаривание на сегодняшний день - наиболее эффективный способ разгладить складки. Но, к сожалению, утюг справляется с этой задачей не так быстро, как хотелось бы.<strong>Система TOBI</strong>расправляет ткань значительно быстрее. При этом изделия не пригорают и не лоснятся. Вертикальный отпариватель с легкостью справляется с обработкой рукавов, карманов и других труднодоступных обыкновенному утюгу участков. Пар глубоко проникает в волокна ткани и смягчает их. В течение 30 секунд вода нагревается в резервуаре<strong>TOBI</strong>, и прибор готов к работе. Буквально за один проход<strong>TOBI</strong>разглаживает складки.</p><p>Кроме своей основной функции<strong>TOBI</strong>эффективно удаляет неприятные запахи, с помощью него можно обрабатывать подушки, игрушки, постельные принадлежности, уничтожая при этом клещей и аллергенные вещества. Пар способен проникать на глубину до 15 см, благодаря этому можно сэкономить на химчистке, с легкостью обрабатывая мягкую мебель и матрасы самостоятельно.</p><p>С помощью новейшей<strong>гладильной системы TOBI</strong>можно отпарить шторы, не снимая их с карниза, а также придать опрятный вид постельному белью прямо на кровати.</p><p>Для удобства разработчики<strong>гладильной системы TOBI</strong>предусмотрели специальный крюк, для того чтобы повесить одежду и отпарить ее вертикальным способом.</p><p>С паровой системой TOBI домашние хлопоты покажутся вам приятным времяпровождением!</p><p><strong>Особенности:</strong></p><ul type=\disc\><li>Удобная рукоятка</li><li>Время разогрева 30 секунд</li><li>30 минут непрерывного отпаривания</li><li>Легкий и гибкий шланг</li><li>Прочный бак для воды</li><li>Автоматическое отключение</li><li>Лёгко вращающиеся ролики для подвижности</li><li>Удаляет запахи</li><li>Регулируемая по высоте вешалка</li><li>Насадка для обивки</li><li>Насадка для шерсти животных</li><li>Сумка для перевозки – в ней умещается основной агрегат, шланг и ремень для переноски</li></ul><p><strong>Технические характеристики:</strong></p><ul type=\disc\><li>Питание: напряжение 220-240 В, частота 50-60 Гц</li><li>Номинальная мощность: 1500 Вт</li><li>Время разогрева прибора: 30 секунд</li><li>Время непрерывного отпаривания: до полного расхода воды в одном резервуаре - 30 минут</li><li>Объем резервуара для воды: 800 мл</li><li>Габаритные размеры прибора в сложенном виде: 44 х 26 х 30 см</li><li>Длина шланга: 1,5 м</li><li>Вес (без воды): 4,2 кг</li><li>Размеры в упаковке (длина/ширина/высота): 0,42x0,26x0,32 м</li><li>Вес в упаковке: 5,6 кг</li></ul> горбуша в пароварке рецепты</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d50e72b2ec5f0dd45f81986f6b14d95a.jpeg" alt="купить вертикальный утюг Тостер Russell Hobbs Jungle Green, арт. 18338-56" title="купить вертикальный утюг Тостер Russell Hobbs Jungle Green, арт. 18338-56"><div class="box"><a href="http://kitchentech.elitno.net/toster-russell-hobbs-jungle-green-art-1890r.php"><h3 class="title">купить вертикальный утюг Тостер Russell Hobbs Jungle Green, арт. 18338-56</h3><p>от <span class="price">1890</span> руб.</p></a></div></li>
						<li><img src="photos/601488d11fe95f07b0e7e96c29a4ca5c.jpeg" alt="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White" title="аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-magic-white-1100r"><span class="title">аэрогриль поларис отзывы Чайник электрический Binatone CEJ-1745 Magic White</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/50b32a99f8069aa25115dc1163e0b555.jpeg" alt="кофеварка эспрессо для дома Чайник электрический Tefal VitesseS BF66234 1,7 л" title="кофеварка эспрессо для дома Чайник электрический Tefal VitesseS BF66234 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1760r"><span class="title">кофеварка эспрессо для дома Чайник электрический Tefal VitesseS BF66234 1,7 л</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735" title="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-450r"><span class="title">panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li class="large"><img src="photos/a42c720a2044c4a70ca880342e1aa3f1.jpeg" alt="взбить блендером яйца Чайник дисковый керамический 1,7л, розовые цветы Zauber ECO-350" title="взбить блендером яйца Чайник дисковый керамический 1,7л, розовые цветы Zauber ECO-350"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-rozovye-cvety-zauber-eco-1750r"><span class="title">взбить блендером яйца Чайник дисковый керамический 1,7л, розовые цветы Zauber ECO-350</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li class="large"><img src="photos/70eaaca49bbd014982b9856679d5c7e6.jpeg" alt="сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO" title="сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO"><div class="box" page="elektricheskiy-chaynik-l-bodum-bistro-euro-2740r"><span class="title">сладкая выпечка в хлебопечке Электрический чайник 1,5л Bodum BISTRO 11138-01EURO</span><p>от <span class="price">2740</span> руб.</p></div></li>
						<li class="large"><img src="photos/08f854ed7155a317d7f9ee53182183f6.jpeg" alt="продажа мультиварок Парогенератор Lelit PS21" title="продажа мультиварок Парогенератор Lelit PS21"><div class="box" page="parogenerator-lelit-ps-12650r-2"><span class="title">продажа мультиварок Парогенератор Lelit PS21</span><p>от <span class="price">12650</span> руб.</p></div></li>
						<li><img src="photos/5bb6cca83f88fe60dd20ef1d2af8e3f6.jpeg" alt="мультиварки в минске Пылесос Dyson origin dB DC 29" title="мультиварки в минске Пылесос Dyson origin dB DC 29"><div class="box" page="pylesos-dyson-origin-db-dc-17990r"><span class="title">мультиварки в минске Пылесос Dyson origin dB DC 29</span><p>от <span class="price">17990</span> руб.</p></div></li>
						<li><img src="photos/508d5d97fb58fc95875b08492316946f.jpeg" alt="блендер braun mx 2050 Пылесос Dyson allergy dB DC 29" title="блендер braun mx 2050 Пылесос Dyson allergy dB DC 29"><div class="box" page="pylesos-dyson-allergy-db-dc-19990r"><span class="title">блендер braun mx 2050 Пылесос Dyson allergy dB DC 29</span><p>от <span class="price">19990</span> руб.</p></div></li>
						<li><img src="photos/1075d3353fd91819c5405594beb1237b.jpeg" alt="работа парогенератора Пылесос Dyson motorhead DC 23" title="работа парогенератора Пылесос Dyson motorhead DC 23"><div class="box" page="pylesos-dyson-motorhead-dc-36990r"><span class="title">работа парогенератора Пылесос Dyson motorhead DC 23</span><p>от <span class="price">36990</span> руб.</p></div></li>
						<li><img src="photos/ec7faf951c2854afe4a3aed647e65436.jpeg" alt="пылесос triathlon Пылесос Dyson origin extra DC 37" title="пылесос triathlon Пылесос Dyson origin extra DC 37"><div class="box" page="pylesos-dyson-origin-extra-dc-22990r"><span class="title">пылесос triathlon Пылесос Dyson origin extra DC 37</span><p>от <span class="price">22990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("parovaya-gladilnaya-sistema-tobi-2500r.php", 0, -4); if (file_exists("comments/parovaya-gladilnaya-sistema-tobi-2500r.php")) require_once "comments/parovaya-gladilnaya-sistema-tobi-2500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="parovaya-gladilnaya-sistema-tobi-2500r.php" method="post" onsubmit="return checkForm(this)">
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