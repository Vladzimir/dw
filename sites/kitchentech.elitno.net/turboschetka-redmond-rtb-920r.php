<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("turboschetka-redmond-rtb-920r.php","марки микроволновых печей");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("turboschetka-redmond-rtb-920r.php", $nick, $comment);
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
		<title>марки микроволновых печей Турбощетка Redmond  RTB-4801  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="марки микроволновых печей, трубочки в вафельнице, крышка для микроволновой печи, обслуживание пылесоса, белоруссия соковыжималка, фиксики смотреть пылесос, стоит ли покупать мультиварку, микроволновая печь daewoo koc, smart cleaner робот пылесос, пылесос karcher цена, кофеварка эспрессо krups, мультиварка киев купить, кофеварка в киеве, мультиварка мэджик пот,  какие дрожжи лучше для хлебопечки">
		<meta name="description" content="марки микроволновых печей Турбощетка Redmond RTB-4801 – одна из насадок к пылесосу Redmond RV-308, купить ...">
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
						<a class="photo" href="photos/b8e20b7d51cc5f25b0392815fadedf6e.jpeg" title="марки микроволновых печей Турбощетка Redmond  RTB-4801"><img src="photos/b8e20b7d51cc5f25b0392815fadedf6e.jpeg" alt="марки микроволновых печей Турбощетка Redmond  RTB-4801" title="марки микроволновых печей Турбощетка Redmond  RTB-4801 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-pogruzhnoy-tefal-prepline-hb-1860r.php"><img src="photos/6fb862aaf5b6b711f34b689e2d685231.jpeg" alt="трубочки в вафельнице Блендер погружной Tefal Prepline HB7151" title="трубочки в вафельнице Блендер погружной Tefal Prepline HB7151"></a><h2>Блендер погружной Tefal Prepline HB7151</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-1090r.php"><img src="photos/23396bca502057564018abfebb4d84d5.jpeg" alt="крышка для микроволновой печи Блендер Redmond RHB-2910" title="крышка для микроволновой печи Блендер Redmond RHB-2910"></a><h2>Блендер Redmond RHB-2910</h2></li>
							<li><a href="http://kitchentech.elitno.net/mikrovolnovaya-pech-vitek-vt-3650r.php"><img src="photos/b6481108ed00fa262329eb9b4a9a7836.jpeg" alt="обслуживание пылесоса Микроволновая печь Vitek VT-1694" title="обслуживание пылесоса Микроволновая печь Vitek VT-1694"></a><h2>Микроволновая печь Vitek VT-1694</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>марки микроволновых печей Турбощетка Redmond  RTB-4801</h1>
						<div class="tb"><p>Цена: от <span class="price">920</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19662.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Турбощетка Redmond RTB-4801 – одна из насадок к пылесосу Redmond RV-308, купить которую можно и отдельно. Характерная черта данной турбощетки – высокая скорость вращения вала, что обеспечивает идеальную чистку ковровых покрытий и эффективное удаление шерсти животных.</p><p><b>Характеристики:</b></p><ul type=disc><li>Цвет: черный; </li></ul><p><b>Изготовитель: США</b></p><p><b>Производитель: Китай</b></p> марки микроволновых печей</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/32c26854e293b25040685f60b879a50b.jpeg" alt="белоруссия соковыжималка Мясорубка  Atlanta ATH-370" title="белоруссия соковыжималка Мясорубка  Atlanta ATH-370"><div class="box" page="myasorubka-atlanta-ath-2500r"><span class="title">белоруссия соковыжималка Мясорубка  Atlanta ATH-370</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/acf412ca70279cda1dfad07d522f7e3c.jpeg" alt="фиксики смотреть пылесос Пароварка Vitesse VS-507" title="фиксики смотреть пылесос Пароварка Vitesse VS-507"><div class="box" page="parovarka-vitesse-vs-1290r"><span class="title">фиксики смотреть пылесос Пароварка Vitesse VS-507</span><p>от <span class="price">1290</span> руб.</p></div></li>
						<li><img src="photos/5bf48f17b0c0a7ecdd4b2ccc867e6baf.jpeg" alt="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191" title="стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191"><div class="box" page="elektroplita-indukcionnaya-atlanta-ath-1300r"><span class="title">стоит ли покупать мультиварку Электроплита индукционная Atlanta ATH-191</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/82af66b2cc61bc47984a0dc33b3b0565.jpeg" alt="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310" title="микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310"><div class="box" page="sokovyzhimalka-atlanta-ath-1050r"><span class="title">микроволновая печь daewoo koc Соковыжималка Atlanta ATH-310</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li class="large"><img src="photos/b6ecb843a4a7a272dfd585351250b4a8.jpeg" alt="smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901" title="smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901"><div class="box" page="sokovyzhimalka-redmond-rj-m-4390r"><span class="title">smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901</span><p>от <span class="price">4390</span> руб.</p></div></li>
						<li class="large"><img src="photos/6572a3244fa07fc4dc4c915b3dd0a9ff.jpeg" alt="пылесос karcher цена Хлебопечка Moulinex OW200033" title="пылесос karcher цена Хлебопечка Moulinex OW200033"><div class="box" page="hlebopechka-moulinex-ow-3800r"><span class="title">пылесос karcher цена Хлебопечка Moulinex OW200033</span><p>от <span class="price">3800</span> руб.</p></div></li>
						<li class="large"><img src="photos/0fb0d4eda0d01d4692f2fbd689f6f46f.jpeg" alt="кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л" title="кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitek-vt-l-1890r"><span class="title">кофеварка эспрессо krups Чайник электрический Vitek VT-1112 1,7 л</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li><img src="photos/1b3cfce3fc4c2602ab4206bda1961e7d.jpeg" alt="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный" title="мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-belolazurnyy-920r"><span class="title">мультиварка киев купить Чайник электрический  Vitesse VS-136 2л бело-лазурный</span><p>от <span class="price">920</span> руб.</p></div></li>
						<li><img src="photos/ef5f34c264e9ba8f2acfacd6c8c1863a.jpeg" alt="кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330" title="кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330"><div class="box" page="chaynik-diskovyy-keramicheskiy-l-golubye-cvety-zauber-eco-1760r"><span class="title">кофеварка в киеве Чайник дисковый керамический 1,7л, голубые цветы Zauber ECO-330</span><p>от <span class="price">1760</span> руб.</p></div></li>
						<li><img src="photos/51ac41098d88811e7ab3241e4fa31a8c.jpeg" alt="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA" title="мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA"><div class="box" page="akkumulyatory-gp-batteries-rechargeable-mach-aaahcuc-petgaaa-300r"><span class="title">мультиварка мэджик пот Аккумуляторы GP Batteries Rechargeable 1000 мАч 100AAAHC-UC2 PET-GAAA</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/41efedb38089aeb46a210ce7ff30eedc.jpeg" alt="сравнение блендеров Детектор жучков BugHunter Professional BH-01" title="сравнение блендеров Детектор жучков BugHunter Professional BH-01"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-7990r"><span class="title">сравнение блендеров Детектор жучков BugHunter Professional BH-01</span><p>от <span class="price">7990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("turboschetka-redmond-rtb-920r.php", 0, -4); if (file_exists("comments/turboschetka-redmond-rtb-920r.php")) require_once "comments/turboschetka-redmond-rtb-920r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="turboschetka-redmond-rtb-920r.php" method="post" onsubmit="return checkForm(this)">
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