<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitek-vt-1350r-2.php","чоппер измельчитель");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitek-vt-1350r-2.php", $nick, $comment);
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
		<title>чоппер измельчитель Чайник электрический Vitek VT-1141  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="чоппер измельчитель, аэрогриль сервисный центр, мультиварки киев, грудка в пароварке, картофель во фритюрнице, купить утюг для волос, куриные грудки в мультиварке, сепараторный пылесос, утюг philips 9220, продам хлебопечку, книга рецептов для хлебопечки, как блендером сделать пюре, блюда с помощью блендера, принцип работы кофемашины,  трубка для пылесоса">
		<meta name="description" content="чоппер измельчитель Чайник электрический Vitek VT-1141 в полупрозрачном корпусе с приятным с цветочн...">
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
						<a class="photo" href="photos/c73e008984140d52a15fd324bddeb59f.jpeg" title="чоппер измельчитель Чайник электрический Vitek VT-1141"><img src="photos/c73e008984140d52a15fd324bddeb59f.jpeg" alt="чоппер измельчитель Чайник электрический Vitek VT-1141" title="чоппер измельчитель Чайник электрический Vitek VT-1141 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/zauber-kuhonnyy-kombayn-z-4250r.php"><img src="photos/dbd2c7c20aaeedc830453cfd862f3b68.jpeg" alt="аэрогриль сервисный центр Zauber Кухонный комбайн  Z-890" title="аэрогриль сервисный центр Zauber Кухонный комбайн  Z-890"></a><h2>Zauber Кухонный комбайн  Z-890</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-ci-black-76390r.php"><img src="photos/4c9f6fc7185095b9ee0e389df903b9c9.jpeg" alt="мультиварки киев Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)" title="мультиварки киев Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)"></a><h2>Эспрессо-кофемашина Melitta Caffeo CI Black (4.0009.97)</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-ath-600r.php"><img src="photos/0e305c07a6dd83a006dadb83e537663e.jpeg" alt="грудка в пароварке Кофемолка  ATH-272" title="грудка в пароварке Кофемолка  ATH-272"></a><h2>Кофемолка  ATH-272</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>чоппер измельчитель Чайник электрический Vitek VT-1141</h1>
						<div class="tb"><p>Цена: от <span class="price">1350</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8400.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Чайник электрический V</b><b>itek</b><b> VT-1141 </b>в полупрозрачном корпусе с приятным с цветочным стемпингом станет отличным помощником на вашей кухне. Среди достоинств модели можно отметить: автоотключение при закипании, съемный фильтр от накипи, защиту от перегрева и световой индикатор работы. Внутренняя подсветка резервуара воды смотрится очень стильно.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 1850-2200Вт </li><li>Нагревательный элемент: скрытый </li><li>Поворачивающийся корпус: 360° </li><li>Объем: 1,8л </li><li>Материал корпуса: пластик </li><li>Фильтр: съемный фильтр от накипи </li><li>Индикатор уровня воды: есть </li><li>Автоотключение при закипании воды: есть </li><li>Защита от перегрева: есть </li><li>Световой индикатор работы: есть </li><li>Подсветка корпуса: внутренняя подсветка резервуара для воды </li><li>Место для хранения шнура: есть </li><li>Полупрозрачный корпус с цветочным стемпингом</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> чоппер измельчитель</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d1b139f63086ad817c04622c294f1224.jpeg" alt="картофель во фритюрнице Кофеварка  ATH-278" title="картофель во фритюрнице Кофеварка  ATH-278"><div class="box" page="kofevarka-ath-560r"><span class="title">картофель во фритюрнице Кофеварка  ATH-278</span><p>от <span class="price">560</span> руб.</p></div></li>
						<li><img src="photos/3bdb5a7ebf59a397ed1b6263ffa77483.jpeg" alt="купить утюг для волос Кофемолка Vitesse VS-271" title="купить утюг для волос Кофемолка Vitesse VS-271"><div class="box" page="kofemolka-vitesse-vs-1100r"><span class="title">купить утюг для волос Кофемолка Vitesse VS-271</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/b8600793aec4a8059c2de0136a79b6b1.jpeg" alt="куриные грудки в мультиварке Пароварка Redmond RST-1103" title="куриные грудки в мультиварке Пароварка Redmond RST-1103"><div class="box" page="parovarka-redmond-rst-2390r"><span class="title">куриные грудки в мультиварке Пароварка Redmond RST-1103</span><p>от <span class="price">2390</span> руб.</p></div></li>
						<li><img src="photos/df340437daa709a0dfc3dc87ab1880bc.jpeg" alt="сепараторный пылесос Индукционная плита Kitfort KT-102" title="сепараторный пылесос Индукционная плита Kitfort KT-102"><div class="box" page="indukcionnaya-plita-kitfort-kt-3000r"><span class="title">сепараторный пылесос Индукционная плита Kitfort KT-102</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li class="large"><img src="photos/f99ea88369bed621a6594f78c2508e9a.jpeg" alt="утюг philips 9220 Электрическая соковыжималка лимонная Bodum BISTRO 11149-565EURO" title="утюг philips 9220 Электрическая соковыжималка лимонная Bodum BISTRO 11149-565EURO"><div class="box" page="elektricheskaya-sokovyzhimalka-limonnaya-bodum-bistro-euro-3340r"><span class="title">утюг philips 9220 Электрическая соковыжималка лимонная Bodum BISTRO 11149-565EURO</span><p>от <span class="price">3340</span> руб.</p></div></li>
						<li class="large"><img src="photos/357a4e7af6a4eca2e30275a2d5d14351.jpeg" alt="продам хлебопечку Чайник электрический Binatone CEJ-1744 White" title="продам хлебопечку Чайник электрический Binatone CEJ-1744 White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-white-880r"><span class="title">продам хлебопечку Чайник электрический Binatone CEJ-1744 White</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" alt="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118" title="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1999r"><span class="title">книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118</span><p>от <span class="price">1999</span> руб.</p></div></li>
						<li><img src="photos/8a7e2a46651bfb4c8fa5108f6af45161.jpeg" alt="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02" title="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-9990r"><span class="title">как блендером сделать пюре Детектор жучков BugHunter Professional BH-02</span><p>от <span class="price">9990</span> руб.</p></div></li>
						<li><img src="photos/b8e20b7d51cc5f25b0392815fadedf6e.jpeg" alt="блюда с помощью блендера Турбощетка Redmond  RTB-4801" title="блюда с помощью блендера Турбощетка Redmond  RTB-4801"><div class="box" page="turboschetka-redmond-rtb-920r"><span class="title">блюда с помощью блендера Турбощетка Redmond  RTB-4801</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/e961b6308ccdf7d3b60d75fd50d3cfe9.jpeg" alt="принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU" title="принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU"><div class="box" page="poroshok-dlya-suhoy-chistki-kovrovyh-pokrytiy-dyson-zorb-pouch-uk-eu-890r"><span class="title">принцип работы кофемашины Порошок для сухой чистки ковровых покрытий Dyson Zorb Pouch UK EU</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/3d9d2c7ca3e38790501e4b18a444f72f.jpeg" alt="работа аэрогриля Vitesse VS-692 Отпариватель для одежды" title="работа аэрогриля Vitesse VS-692 Отпариватель для одежды"><div class="box" page="vitesse-vs-otparivatel-dlya-odezhdy-2650r"><span class="title">работа аэрогриля Vitesse VS-692 Отпариватель для одежды</span><p>от <span class="price">2650</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitek-vt-1350r-2.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitek-vt-1350r-2.php")) require_once "comments/chaynik-elektricheskiy-vitek-vt-1350r-2.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitek-vt-1350r-2.php" method="post" onsubmit="return checkForm(this)">
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