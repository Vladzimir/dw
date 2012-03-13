<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("elektricheskiy-chaynik-atlanta-atn-690r.php","миксер электрический");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("elektricheskiy-chaynik-atlanta-atn-690r.php", $nick, $comment);
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
		<title>миксер электрический Электрический чайник Atlanta АТН-623  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="миксер электрический, кофеварки для дома отзывы, сломалась мясорубка, кофеварка френч пресс, пароварка scarlett is 550, купить электрическую кофеварку, пылесос для сбора стружки, кофемашина rowenta, курица в микроволновой печи, тостер philips hd, кофеварка полуавтомат, разборка утюга tefal, как блендером сделать пюре, дозиметр соэкс,  бесплатные рецепты для пароварки">
		<meta name="description" content="миксер электрический Электрический чайник Atlanta АТН-623 – стильный кухонный прибор выполненный из с...">
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
						<a class="photo" href="photos/89368a4d8b53495528b047bf143af4e5.jpeg" title="миксер электрический Электрический чайник Atlanta АТН-623"><img src="photos/89368a4d8b53495528b047bf143af4e5.jpeg" alt="миксер электрический Электрический чайник Atlanta АТН-623" title="миксер электрический Электрический чайник Atlanta АТН-623 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blenderkuhonnyy-kombayn-braun-mr-buffet-fp-hc-5300r.php"><img src="photos/eed05177e5879fb2667291616f216d32.jpeg" alt="кофеварки для дома отзывы Блендер-кухонный комбайн Braun MR-550 Buffet FP HC" title="кофеварки для дома отзывы Блендер-кухонный комбайн Braun MR-550 Buffet FP HC"></a><h2>Блендер-кухонный комбайн Braun MR-550 Buffet FP HC</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rbp-1490r.php"><img src="photos/54c015da9ba000a4c33278978300bae5.jpeg" alt="сломалась мясорубка Блендер Redmond RB-P1301" title="сломалась мясорубка Блендер Redmond RB-P1301"></a><h2>Блендер Redmond RB-P1301</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-redmond-rfp-5390r.php"><img src="photos/eeb9eab6db603b9616a92fc025537c6c.jpeg" alt="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903" title="кофеварка френч пресс Кухонный комбайн Redmond  RFP-3903"></a><h2>Кухонный комбайн Redmond  RFP-3903</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>миксер электрический Электрический чайник Atlanta АТН-623</h1>
						<div class="tb"><p>Цена: от <span class="price">690</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19889.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Электрический чайник Atlanta АТН-623 – стильный кухонный прибор выполненный из серого прозрачного пластика мощностью 2000 Вт. За раз может кипятить до 1,7 литра воды. Может поворачиваться на подставке на 360 градусов. Имеет фильтр от накипи и функцию быстрого закипания. Используется защищенный закрытый нагревательный элемент, который гораздо проще мыть, чем открытую спираль. Безопасен, т. к. имеет защиту от перегрева, а также блокировку крышки и блокировку включения без воды. Предусмотрено место для электрошнура в цокольной подставке. </p><p><strong>Характеристики:</strong></p><ul type=disc><li>Объем 1.7 л <li>мощность 2000 Вт <li>закрытая спираль <li>установка на подставку в любом положении <li>пластиковый корпус. <li>блокировка крышки <li>блокировка включения без воды. <li>нейлоновый фильтр <li>индикатор уровня воды <li>отсек для шнура <li>питание: ~ 220 В </li></ul><p><strong>Производитель: США</strong></p> миксер электрический</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/08c15d1f7a465f949f829449dc3e88eb.jpeg" alt="пароварка scarlett is 550 Блендер Maxima MHB-0429" title="пароварка scarlett is 550 Блендер Maxima MHB-0429"><div class="box" page="blender-maxima-mhb-870r"><span class="title">пароварка scarlett is 550 Блендер Maxima MHB-0429</span><p>от <span class="price">870</span> руб.</p></div></li>
						<li><img src="photos/197b288168a6454a97f75d0fce3ea362.jpeg" alt="купить электрическую кофеварку Электросушка Maxima MFD-0155" title="купить электрическую кофеварку Электросушка Maxima MFD-0155"><div class="box" page="elektrosushka-maxima-mfd-990r"><span class="title">купить электрическую кофеварку Электросушка Maxima MFD-0155</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/25bac4b45e0e97c9b045c0e23eb08977.jpeg" alt="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»" title="пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»"><div class="box" page="hlebopechka-binatone-bm-black-s-funkciey-«domashniy-pekar»-4500r"><span class="title">пылесос для сбора стружки Хлебопечка Binatone BM-2169 Black с функцией «Домашний пекарь»</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/65ddf318df091ecf01e6a4b331f1492d.jpeg" alt="кофемашина rowenta Чайник электрический Tefal VitesseS BF663440 1,7 л" title="кофемашина rowenta Чайник электрический Tefal VitesseS BF663440 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1950r"><span class="title">кофемашина rowenta Чайник электрический Tefal VitesseS BF663440 1,7 л</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/79f71cb685066d8f2b6475b4d2f70156.jpeg" alt="курица в микроволновой печи Чайник электрический Atlanta ATH-757" title="курица в микроволновой печи Чайник электрический Atlanta ATH-757"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-990r"><span class="title">курица в микроволновой печи Чайник электрический Atlanta ATH-757</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li class="large"><img src="photos/0e0d48622ca21267b7347abd2a6edbfa.jpeg" alt="тостер philips hd Redmond RK-M120D Чайник электрический" title="тостер philips hd Redmond RK-M120D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-4950r"><span class="title">тостер philips hd Redmond RK-M120D Чайник электрический</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/8964576110671ffcda667fca45b4c191.jpeg" alt="кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л" title="кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1560r"><span class="title">кофеварка полуавтомат Чайник электрический  Vitesse VS-140 1,8л</span><p>от <span class="price">1560</span> руб.</p></div></li>
						<li><img src="photos/05e1cbbaa69c29b12d76f08b9352b558.jpeg" alt="разборка утюга tefal Электрический чайник Atlanta АТН-630" title="разборка утюга tefal Электрический чайник Atlanta АТН-630"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-600r"><span class="title">разборка утюга tefal Электрический чайник Atlanta АТН-630</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/8a7e2a46651bfb4c8fa5108f6af45161.jpeg" alt="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02" title="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-9990r"><span class="title">как блендером сделать пюре Детектор жучков BugHunter Professional BH-02</span><p>от <span class="price">9990</span> руб.</p></div></li>
						<li><img src="photos/0c61c04ea066965d61b957c776ac9e0d.jpeg" alt="дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White" title="дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White"><div class="box" page="vertikalnyy-ciklonicheskiy-pylesos-montiss-cvc-white-4850r"><span class="title">дозиметр соэкс Вертикальный циклонический пылесос Montiss CVC5667 White</span><p>от <span class="price">4850</span> руб.</p></div></li>
						<li><img src="photos/709ff92fce8d072f9f56d948427a4843.jpeg" alt="скороварка мультиварка cuckoo Пылесос Thomas Genius S1 Aquafilter" title="скороварка мультиварка cuckoo Пылесос Thomas Genius S1 Aquafilter"><div class="box" page="pylesos-thomas-genius-s-aquafilter-10000r"><span class="title">скороварка мультиварка cuckoo Пылесос Thomas Genius S1 Aquafilter</span><p>от <span class="price">10000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("elektricheskiy-chaynik-atlanta-atn-690r.php", 0, -4); if (file_exists("comments/elektricheskiy-chaynik-atlanta-atn-690r.php")) require_once "comments/elektricheskiy-chaynik-atlanta-atn-690r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="elektricheskiy-chaynik-atlanta-atn-690r.php" method="post" onsubmit="return checkForm(this)">
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