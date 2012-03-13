<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("bodum-bistro-euro-elektricheskaya-sokovyzhimalka-belaya-3340r.php","кофемашина saeco xsmall black");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("bodum-bistro-euro-elektricheskaya-sokovyzhimalka-belaya-3340r.php", $nick, $comment);
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
		<title>кофемашина saeco xsmall black Bodum BISTRO 11149-913EURO Электрическая соковыжималка белая  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофемашина saeco xsmall black, пылесос для ковролина, аэрогриль сервисный центр, мотор пылесоса самсунг, утюг philips 4420, мультиварка скороварка landlife, что приготовить в мультиварке, соковыжималка ангел, купить кофеварку для дома, мультиварка киев купить, пылесос циклонного типа, для чего нужен блендер, купить мультиварку панасоник, ремонт хлебопечки мулинекс,  слоеное тесто в аэрогриле">
		<meta name="description" content="кофемашина saeco xsmall black Для всех любителей здорового и вкусного питания ценным  приобретением несомненно...">
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
						<a class="photo" href="photos/451a747bf2e464db6624d3824215adbf.jpeg" title="кофемашина saeco xsmall black Bodum BISTRO 11149-913EURO Электрическая соковыжималка белая"><img src="photos/451a747bf2e464db6624d3824215adbf.jpeg" alt="кофемашина saeco xsmall black Bodum BISTRO 11149-913EURO Электрическая соковыжималка белая" title="кофемашина saeco xsmall black Bodum BISTRO 11149-913EURO Электрическая соковыжималка белая -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-990r.php"><img src="photos/096e72471ef2ac122b04cd03d0d34b33.jpeg" alt="пылесос для ковролина Блендер Atlanta АТН-343" title="пылесос для ковролина Блендер Atlanta АТН-343"></a><h2>Блендер Atlanta АТН-343</h2></li>
							<li><a href="http://kitchentech.elitno.net/zauber-kuhonnyy-kombayn-z-4250r.php"><img src="photos/dbd2c7c20aaeedc830453cfd862f3b68.jpeg" alt="аэрогриль сервисный центр Zauber Кухонный комбайн  Z-890" title="аэрогриль сервисный центр Zauber Кухонный комбайн  Z-890"></a><h2>Zauber Кухонный комбайн  Z-890</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektroplitka-maxima-mes-550r.php"><img src="photos/99f24579a4151d885006823a70346b26.jpeg" alt="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1" title="мотор пылесоса самсунг Электроплитка Maxima MES-0152-1"></a><h2>Электроплитка Maxima MES-0152-1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофемашина saeco xsmall black Bodum BISTRO 11149-913EURO Электрическая соковыжималка белая</h1>
						<div class="tb"><p>Цена: от <span class="price">3340</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26382.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Для всех любителей здорового и вкусного питания ценным  приобретением несомненно станет практичная современная соковыжималка.  Электрическая соковыжималка BISTRO  11149-913EURO от швейцарской компании Bodum изготовлена из качественного  пластика и предназначена для цитрусовых. Соковыжималка Bodum BISTRO 11149-913EURO имеет одну скорость, функцию подачи  сока в стакан, а также специальную противокапельную систему. Внешнюю  привлекательность данной модели соковыжималки придает элегантный белый цвет  корпуса. </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:       для цитрусовых;</li>   <li>Мощность:       100 Вт;</li>   <li>Количество       скоростей: 1;</li>   <li>Материал       корпуса: пластик;</li>   <li>Подача       сока сразу в стакан;</li>   <li>Противокапельная       система;</li>   <li>Прорезиненные       ножки;</li>   <li>Цвет:       белый.</li> </ul> <p><strong>Производитель: Bodum  (Швейцария)</strong></p> кофемашина saeco xsmall black</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8e06126566eae5ed349414b3b9cfd8ea.jpeg" alt="утюг philips 4420 Мультиварка Maruchi RB-FC46" title="утюг philips 4420 Мультиварка Maruchi RB-FC46"><div class="box" page="multivarka-maruchi-rbfc-2500r"><span class="title">утюг philips 4420 Мультиварка Maruchi RB-FC46</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/b61be34fe70b570a69e06c3fa76d4fff.jpeg" alt="мультиварка скороварка landlife Мясорубка Redmond RMG-1201" title="мультиварка скороварка landlife Мясорубка Redmond RMG-1201"><div class="box" page="myasorubka-redmond-rmg-3490r"><span class="title">мультиварка скороварка landlife Мясорубка Redmond RMG-1201</span><p>от <span class="price">3490</span> руб.</p></div></li>
						<li><img src="photos/bd86985191b900e717a6f18b17266152.jpeg" alt="что приготовить в мультиварке Пароварка Binatone FS-404 White Green" title="что приготовить в мультиварке Пароварка Binatone FS-404 White Green"><div class="box" page="parovarka-binatone-fs-white-green-1895r"><span class="title">что приготовить в мультиварке Пароварка Binatone FS-404 White Green</span><p>от <span class="price">1895</span> руб.</p></div></li>
						<li><img src="photos/21689be9dc7c8e66c7cb248c7b6f5f86.jpeg" alt="соковыжималка ангел Пароварка Maxima MST-1102" title="соковыжималка ангел Пароварка Maxima MST-1102"><div class="box" page="parovarka-maxima-mst-1290r"><span class="title">соковыжималка ангел Пароварка Maxima MST-1102</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3ff9d6ec8fde71796646bd977ae1927.jpeg" alt="купить кофеварку для дома Чайник электрический Vitek VT-1147 белый" title="купить кофеварку для дома Чайник электрический Vitek VT-1147 белый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-belyy-1380r"><span class="title">купить кофеварку для дома Чайник электрический Vitek VT-1147 белый</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li class="large"><img src="photos/1b3cfce3fc4c2602ab4206bda1961e7d.jpeg" alt="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный" title="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belolazurnyy-920r"><span class="title">мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li class="large"><img src="photos/0207c29eb474672a9dc7b75c9efd4bab.jpeg" alt="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360" title="пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-golubye-cvety-zauber-eco-1760r-2"><span class="title">пылесос циклонного типа Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-360</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li><img src="photos/14e5114315c1928323477764da917a61.jpeg" alt="для чего нужен блендер Парогенератор Lelit PS20" title="для чего нужен блендер Парогенератор Lelit PS20"><div class="box" page="parogenerator-lelit-ps-12650r"><span class="title">для чего нужен блендер Парогенератор Lelit PS20</span><p>от <span class="price">12650</span> руб.</p></div></li>
						<li><img src="photos/0c7359cf223fcc5ee81c11e13e2fdc99.jpeg" alt="купить мультиварку панасоник Парогенератор Maxima MSC-2001 желтый" title="купить мультиварку панасоник Парогенератор Maxima MSC-2001 желтый"><div class="box" page="parogenerator-maxima-msc-zheltyy-1650r"><span class="title">купить мультиварку панасоник Парогенератор Maxima MSC-2001 желтый</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/f16a6ea5caecf1d914f1d403108995e6.jpeg" alt="ремонт хлебопечки мулинекс Насадка утюг Thomas Steam-Iron для Vaporo Trolley" title="ремонт хлебопечки мулинекс Насадка утюг Thomas Steam-Iron для Vaporo Trolley"><div class="box" page="nasadka-utyug-thomas-steamiron-dlya-vaporo-trolley-2660r"><span class="title">ремонт хлебопечки мулинекс Насадка утюг Thomas Steam-Iron для Vaporo Trolley</span><p>от <span class="price">2660</span> руб.</p></div></li>
						<li><img src="photos/1075d3353fd91819c5405594beb1237b.jpeg" alt="работа парогенератора Пылесос Dyson motorhead DC 23" title="работа парогенератора Пылесос Dyson motorhead DC 23"><div class="box" page="pylesos-dyson-motorhead-dc-36990r"><span class="title">работа парогенератора Пылесос Dyson motorhead DC 23</span><p>от <span class="price">36990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("bodum-bistro-euro-elektricheskaya-sokovyzhimalka-belaya-3340r.php", 0, -4); if (file_exists("comments/bodum-bistro-euro-elektricheskaya-sokovyzhimalka-belaya-3340r.php")) require_once "comments/bodum-bistro-euro-elektricheskaya-sokovyzhimalka-belaya-3340r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="bodum-bistro-euro-elektricheskaya-sokovyzhimalka-belaya-3340r.php" method="post" onsubmit="return checkForm(this)">
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