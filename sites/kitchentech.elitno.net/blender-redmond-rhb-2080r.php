<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("blender-redmond-rhb-2080r.php","сименс кофеварка");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("blender-redmond-rhb-2080r.php", $nick, $comment);
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
		<title>сименс кофеварка Блендер Redmond RHB-2907  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="сименс кофеварка, соковыжималка bosh, продажа моющих пылесосов, джем в хлебопечке, маленькие соковыжималки, кофемашина krups dolce gusto, пылесос karcher цена, описание пылесоса, пылесос mediclean, утюг с парогенератором delonghi, шампунь для пылесоса, panasonic мясорубка отзывы, покрытие микроволновой печи, кофеварки домашние,  лучшая вафельница">
		<meta name="description" content="сименс кофеварка Функциональность и удобство стильного блендера Redmond RHB-2907 позволят Вам зна...">
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
						<a class="photo" href="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" title="сименс кофеварка Блендер Redmond RHB-2907"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="сименс кофеварка Блендер Redmond RHB-2907" title="сименс кофеварка Блендер Redmond RHB-2907 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-krasnyy-3780r.php"><img src="photos/cba8b4b1e5c8fd0ccc541a5e43233a90.jpeg" alt="соковыжималка bosh Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный" title="соковыжималка bosh Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный"></a><h2>Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный</h2></li>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-bar-44180r.php"><img src="photos/c9a7a5b3ad41669087cce987bbc510ac.jpeg" alt="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)" title="продажа моющих пылесосов Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Bar (4.0008.68)</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskaya-sokovyzhimalka-chernaya-bodum-bistro-euro-3340r.php"><img src="photos/395739893470046928b7502ebf2a09eb.jpeg" alt="джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO" title="джем в хлебопечке Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO"></a><h2>Электрическая соковыжималка черная Bodum BISTRO 11149-01EURO</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>сименс кофеварка Блендер Redmond RHB-2907</h1>
						<div class="tb"><p>Цена: от <span class="price">2080</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18850.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Функциональность и удобство стильного блендера Redmond RHB-2907 позволят Вам значительно сэкономить время уходящее на приготовление блюд. </p><ul type=disc><li>Кол-во оборотов в минуту: 14000 - 17500 об/мин; <li>Металлическая насадка-блендер; <li>Венчик из нержавеющей стали для взбивания; <li>Нож из нержавеющей стали; <li>Чаша для измельчения: 500 мл; <li>Чаша для смешивания: 600 мл; <li>Плавная регулировка скорости; <li>\Турбо\ режим; <li>Низкий уровень шума. </li></ul><p><strong>Производитель: США</strong><br><strong>Гарантия: 1 год</strong></p> сименс кофеварка</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/fe37fe3249ac15c2c7299f94675336f3.jpeg" alt="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO" title="маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO"><div class="box"><a href="http://kitchentech.elitno.net/toster-chernyy-bodum-bistro-euro-3660r.php"><h3 class="title">маленькие соковыжималки Тостер черный Bodum BISTRO 10709-01EURO</h3><p>от <span class="price">3660</span> руб.</p></a></div></li>
						<li><img src="photos/10045e221774030a9f06ef65dc2f63de.jpeg" alt="кофемашина krups dolce gusto Фритюрница Tefal Minute snack FF1024" title="кофемашина krups dolce gusto Фритюрница Tefal Minute snack FF1024"><div class="box" page="frityurnica-tefal-minute-snack-ff-2220r"><span class="title">кофемашина krups dolce gusto Фритюрница Tefal Minute snack FF1024</span><p>от <span class="price">2220</span> руб.</p></div></li>
						<li><img src="photos/6572a3244fa07fc4dc4c915b3dd0a9ff.jpeg" alt="пылесос karcher цена Хлебопечка Moulinex OW200033" title="пылесос karcher цена Хлебопечка Moulinex OW200033"><div class="box" page="hlebopechka-moulinex-ow-3800r"><span class="title">пылесос karcher цена Хлебопечка Moulinex OW200033</span><p>от <span class="price">3800</span> руб.</p></div></li>
						<li><img src="photos/cfef38cef319ef880fc0959319ecdb34.jpeg" alt="описание пылесоса Чайник электрический Vitek VT-1154" title="описание пылесоса Чайник электрический Vitek VT-1154"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1010r"><span class="title">описание пылесоса Чайник электрический Vitek VT-1154</span><p>от <span class="price">1010</span> руб.</p></div></li>
						<li class="large"><img src="photos/4f7eae7926bb1b2816625b5940a25b78.jpeg" alt="пылесос mediclean Чайник электрический Vitek VT-1157" title="пылесос mediclean Чайник электрический Vitek VT-1157"><div class="box" page="chaynik-elektricheskiy-vitek-vt-2150r"><span class="title">пылесос mediclean Чайник электрический Vitek VT-1157</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li class="large"><img src="photos/89368a4d8b53495528b047bf143af4e5.jpeg" alt="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623" title="утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-690r"><span class="title">утюг с парогенератором delonghi Электрический чайник Atlanta АТН-623</span><p>от <span class="price">690</span> руб.</p></div></li>
						<li class="large"><img src="photos/52100c33edc3ca0743ca02e24c7f8dba.jpeg" alt="шампунь для пылесоса Электрический чайник Atlanta АТН-720" title="шампунь для пылесоса Электрический чайник Atlanta АТН-720"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-550r"><span class="title">шампунь для пылесоса Электрический чайник Atlanta АТН-720</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/0f99b07bf5e19dab36f8028f75c48889.jpeg" alt="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735" title="panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-450r"><span class="title">panasonic мясорубка отзывы Электрический чайник Atlanta АТН-735</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/e60d974a9eb12d238a3e8bae6f4ce905.jpeg" alt="покрытие микроволновой печи Сопло для пенной чистки Karcher (упаковка 0,3 л)" title="покрытие микроволновой печи Сопло для пенной чистки Karcher (упаковка 0,3 л)"><div class="box" page="soplo-dlya-pennoy-chistki-karcher-upakovka-l-670r"><span class="title">покрытие микроволновой печи Сопло для пенной чистки Karcher (упаковка 0,3 л)</span><p>от <span class="price">670</span> руб.</p></div></li>
						<li><img src="photos/f08bd4abc7ad4c0cc84da510e6f6c4d3.jpeg" alt="кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт." title="кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт."><div class="box" page="filtr-dlya-pylesosa-vitek-vt-vt-sht-215r"><span class="title">кофеварки домашние Фильтр для пылесоса Vitek VT-1858 (VT-1847) 1 шт.</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/2fefc92a511ec2a4cec4d67efd9d8253.jpeg" alt="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter" title="аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter"><div class="box" page="pylesos-thomas-genius-s-eco-aquafilter-9660r"><span class="title">аэрогриль vitesse vs 408 Пылесос Thomas Genius S1 Eco Aquafilter</span><p>от <span class="price">9660</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("blender-redmond-rhb-2080r.php", 0, -4); if (file_exists("comments/blender-redmond-rhb-2080r.php")) require_once "comments/blender-redmond-rhb-2080r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="blender-redmond-rhb-2080r.php" method="post" onsubmit="return checkForm(this)">
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