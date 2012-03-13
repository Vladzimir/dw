<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("chaynik-elektricheskiy-vitek-vt-1150r.php","моющий пылесос томас отзывы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("chaynik-elektricheskiy-vitek-vt-1150r.php", $nick, $comment);
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
		<title>моющий пылесос томас отзывы Чайник электрический Vitek VT-1120  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="моющий пылесос томас отзывы, кофеварка делонги отзывы, мясорубки белорусские, распродажа пылесосов, что можно делать блендером, белоруссия соковыжималка, измельчитель сена, соковыжималка филипс, купить кофеварку для дома, пылесос биматек, доска для парогенератора, ремонт хлебопечки мулинекс, мини соковыжималка, стимер для аэрогриля,  мясорубки отечественные">
		<meta name="description" content="моющий пылесос томас отзывы Чайник электрический Vitek VT-1120 с двухсторонней шкалой уровня воды обладает в...">
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
						<a class="photo" href="photos/7b0ef0b12e5f66ec7582c9396725bc92.jpeg" title="моющий пылесос томас отзывы Чайник электрический Vitek VT-1120"><img src="photos/7b0ef0b12e5f66ec7582c9396725bc92.jpeg" alt="моющий пылесос томас отзывы Чайник электрический Vitek VT-1120" title="моющий пылесос томас отзывы Чайник электрический Vitek VT-1120 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/izmelchitel-ritter-mc-2700r.php"><img src="photos/b329bc8334f65653dc9ef4683c170e62.jpeg" alt="кофеварка делонги отзывы Измельчитель Ritter MC 800" title="кофеварка делонги отзывы Измельчитель Ritter MC 800"></a><h2>Измельчитель Ritter MC 800</h2></li>
							<li><a href="http://kitchentech.elitno.net/zauber-melnica-dlya-speciy-s-1100r.php"><img src="photos/e3db19fdd8b8e08a389b3566088c9ffc.jpeg" alt="мясорубки белорусские Zauber Мельница для специй  S-450" title="мясорубки белорусские Zauber Мельница для специй  S-450"></a><h2>Zauber Мельница для специй  S-450</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3550r.php"><img src="photos/7b88076a90f90c4718597a4ab977cb0a.jpeg" alt="распродажа пылесосов Микроволновая печь Vitek VT-1682" title="распродажа пылесосов Микроволновая печь Vitek VT-1682"></a><h2>Микроволновая печь Vitek VT-1682</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>моющий пылесос томас отзывы Чайник электрический Vitek VT-1120</h1>
						<div class="tb"><p>Цена: от <span class="price">1150</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8390.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Чайник электрический V</b><b>itek</b><b> VT-1120 </b>с двухсторонней шкалой уровня воды обладает всеми необходимыми качествами современных устройств подобного типа. Среди достоинств модели можно отметить: наличие съемного фильтра от накипи, систему автоотключения при закипании, отключение при отсутствии жидкости и защиту от перегрева. Скрытый нагревательный элемент находится в дисковой подставке.</p><p><b>Технические характеристики:</b></p><p><b></b></p><ul><li>Мощность: 2200Вт (максимальная) </li><li>Нагревательный элемент: скрытый </li><li>Поворачивающийся корпус: 360° </li><li>Объем: 1,8л </li><li>Материал корпуса: пластик </li><li>Фильтр: съемный нейлоновый фильтр для воды </li><li>Двухсторонняя шкала уровня воды </li><li>Автоотключение при закипании воды: есть </li><li>Отключение при отсутствии воды </li><li>Световой индикатор работы: есть </li><li>Место для хранения шнура: есть</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна: </b>Россия.</p> моющий пылесос томас отзывы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/060f95312423ba3e968eaf23618bd36d.jpeg" alt="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White" title="что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White"><div class="box" page="myasorubka-elektricheskaya-binatone-mgr-white-3700r"><span class="title">что можно делать блендером Мясорубка электрическая Binatone MGR-3040 White</span><p>от <span class="price">3700</span> руб.</p></div></li>
						<li><img src="photos/32c26854e293b25040685f60b879a50b.jpeg" alt="белоруссия соковыжималка Мясорубка  Atlanta ATH-370" title="белоруссия соковыжималка Мясорубка  Atlanta ATH-370"><div class="box" page="myasorubka-atlanta-ath-2500r"><span class="title">белоруссия соковыжималка Мясорубка  Atlanta ATH-370</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/b563c2d22903c88ab1496d97329bc5bf.jpeg" alt="измельчитель сена Тостер Atlanta ATH-234" title="измельчитель сена Тостер Atlanta ATH-234"><div class="box" page="toster-atlanta-ath-690r"><span class="title">измельчитель сена Тостер Atlanta ATH-234</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li><img src="photos/e3e70209e76fc59518f6178cf23e1266.jpeg" alt="соковыжималка филипс Тостер Redmond RT-M401" title="соковыжималка филипс Тостер Redmond RT-M401"><div class="box" page="toster-redmond-rtm-1850r"><span class="title">соковыжималка филипс Тостер Redmond RT-M401</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/b3ff9d6ec8fde71796646bd977ae1927.jpeg" alt="купить кофеварку для дома Чайник электрический Vitek VT-1147 белый" title="купить кофеварку для дома Чайник электрический Vitek VT-1147 белый"><div class="box" page="chaynik-elektricheskiy-vitek-vt-belyy-1380r"><span class="title">купить кофеварку для дома Чайник электрический Vitek VT-1147 белый</span><p>от <span class="price">1380</span> руб.</p></div></li>
						<li class="large"><img src="photos/d23d3c42279f2a4fe0ce1702af341b90.jpeg" alt="пылесос биматек Чайник электрический Atlanta ATH-755" title="пылесос биматек Чайник электрический Atlanta ATH-755"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-950r"><span class="title">пылесос биматек Чайник электрический Atlanta ATH-755</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/b29beb2174e6fe7aaeffea7945e79604.jpeg" alt="доска для парогенератора Аккумуляторы GP Batteries Rechargeable 2700 мАч 270AAHC-UC2 PET-G" title="доска для парогенератора Аккумуляторы GP Batteries Rechargeable 2700 мАч 270AAHC-UC2 PET-G"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aahcuc-petg-480r"><span class="title">доска для парогенератора Аккумуляторы GP Batteries Rechargeable 2700 мАч 270AAHC-UC2 PET-G</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/f16a6ea5caecf1d914f1d403108995e6.jpeg" alt="ремонт хлебопечки мулинекс Насадка утюг Thomas Steam-Iron для Vaporo Trolley" title="ремонт хлебопечки мулинекс Насадка утюг Thomas Steam-Iron для Vaporo Trolley"><div class="box" page="nasadka-utyug-thomas-steamiron-dlya-vaporo-trolley-2660r"><span class="title">ремонт хлебопечки мулинекс Насадка утюг Thomas Steam-Iron для Vaporo Trolley</span><p>от <span class="price">2660</span> руб.</p></div></li>
						<li><img src="photos/8201fb734cec793db96d43f2e27a6cc4.jpeg" alt="мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail" title="мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail"><div class="box" page="nabor-dlya-doma-dyson-home-cleaning-kit-retail-2490r"><span class="title">мини соковыжималка Набор для дома Dyson Home Cleaning Kit Retail</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/127daa75b6d910b9f123f08316795848.png" alt="стимер для аэрогриля Пылесос Dyson allergy musclehead DC 37" title="стимер для аэрогриля Пылесос Dyson allergy musclehead DC 37"><div class="box" page="pylesos-dyson-allergy-musclehead-dc-24590r"><span class="title">стимер для аэрогриля Пылесос Dyson allergy musclehead DC 37</span><p>от <span class="price">24590</span> руб.</p></div></li>
						<li><img src="photos/93023d88a25f41b8fefb8504a248a750.jpeg" alt="соковыжималка tefal отзывы Пылесос Vitek VT-1814" title="соковыжималка tefal отзывы Пылесос Vitek VT-1814"><div class="box" page="pylesos-vitek-vt-2200r"><span class="title">соковыжималка tefal отзывы Пылесос Vitek VT-1814</span><p>от <span class="price">2200</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("chaynik-elektricheskiy-vitek-vt-1150r.php", 0, -4); if (file_exists("comments/chaynik-elektricheskiy-vitek-vt-1150r.php")) require_once "comments/chaynik-elektricheskiy-vitek-vt-1150r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="chaynik-elektricheskiy-vitek-vt-1150r.php" method="post" onsubmit="return checkForm(this)">
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