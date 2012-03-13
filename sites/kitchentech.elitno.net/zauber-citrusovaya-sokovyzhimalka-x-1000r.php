<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zauber-citrusovaya-sokovyzhimalka-x-1000r.php","ножи для кухонного комбайна");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zauber-citrusovaya-sokovyzhimalka-x-1000r.php", $nick, $comment);
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
		<title>ножи для кухонного комбайна Zauber Цитрусовая соковыжималка  X 850  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="ножи для кухонного комбайна, сервисный центр пылесосов, соковыжималка bosh, курица во фритюрнице, кофемашины jura отзывы, гречневая каша в мультиварке, кофеварка via veneto, микроволновая печь работа, мультиварка sr tmh 10, как разобрать утюг, книга рецептов для хлебопечки, устройство блендера, самодельный пылесос, пылесос вертикальный,  картофельное пюре в блендере">
		<meta name="description" content="ножи для кухонного комбайна Цитрусовая соковыжималка X 850 Morning Fresh от шведской компании Zauber отлично...">
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
						<a class="photo" href="photos/5fe7a070a54ac64269e20fb9f52ff92c.jpeg" title="ножи для кухонного комбайна Zauber Цитрусовая соковыжималка  X 850"><img src="photos/5fe7a070a54ac64269e20fb9f52ff92c.jpeg" alt="ножи для кухонного комбайна Zauber Цитрусовая соковыжималка  X 850" title="ножи для кухонного комбайна Zauber Цитрусовая соковыжималка  X 850 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-550r.php"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="сервисный центр пылесосов Блендер Atlanta АТН-338" title="сервисный центр пылесосов Блендер Atlanta АТН-338"></a><h2>Блендер Atlanta АТН-338</h2></li>
							<li><a href="http://kitchentech.elitno.net/elektricheskiy-blender-s-aksessuarami-bodum-bistro-keuro-krasnyy-3780r.php"><img src="photos/cba8b4b1e5c8fd0ccc541a5e43233a90.jpeg" alt="соковыжималка bosh Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный" title="соковыжималка bosh Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный"></a><h2>Электрический блендер с аксессуарами Bodum BISTRO K11179-294EURO красный</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-vitek-vt-2750r.php"><img src="photos/d3bcfc3d08cc302406de89eb814d0d80.jpeg" alt="курица во фритюрнице Кухонный комбайн Vitek VT-1622" title="курица во фритюрнице Кухонный комбайн Vitek VT-1622"></a><h2>Кухонный комбайн Vitek VT-1622</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>ножи для кухонного комбайна Zauber Цитрусовая соковыжималка  X 850</h1>
						<div class="tb"><p>Цена: от <span class="price">1000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_17428.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Цитрусовая соковыжималка X 850 Morning Fresh от шведской компании Zauber отлично подходит, что бы начать утро со стакана свежего сока. Эта соковыжималка даст вам на 25% больше сока благодаря подвижному механизму отжима Pulp Squeezer. Вы сможете выжимать сок прямо в стакан с помощью системы прямой подачи сока, а благодаря анти-капельной системе No-mess ничего не прольётся на стол. Поверхности соприкосновения с пищей выполнены из пищевой гигиенической стали Food-Friend. </p><p><b>Технические характеристики:</b></p><ul type=\disc\><li>Потребляемая мощность: 25 Ватт </li><li>Тип: Для цитрусовых </li><li>Особенности: Защитная блокировка, Пищевая гигиеническая сталь Food-Friend </li><li>Электропитание: 220В, 50 Гц </li><li>Гарантия: 25 мес. </li></ul><p><b>Производитель: Швеция</b></p> ножи для кухонного комбайна</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/09b400ad2ab5ec6d74c116d61dc967fc.jpeg" alt="кофемашины jura отзывы Миксер Russell Hobbs Allure, арт. 18275-56" title="кофемашины jura отзывы Миксер Russell Hobbs Allure, арт. 18275-56"><div class="box" page="mikser-russell-hobbs-allure-art-2990r"><span class="title">кофемашины jura отзывы Миксер Russell Hobbs Allure, арт. 18275-56</span><p>от <span class="price">2990</span> руб.</p></div></li>
						<li><img src="photos/8472253b416100a0ed111bb9484a2b5a.jpeg" alt="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л" title="гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л"><div class="box" page="morozhenica-montiss-kimm-l-1900r"><span class="title">гречневая каша в мультиварке Мороженица Montiss KIM5405M 1,1 л</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/99e95702b63a74224f733264159dce15.jpeg" alt="кофеварка via veneto Тостер Redmond RT-402" title="кофеварка via veneto Тостер Redmond RT-402"><div class="box" page="toster-redmond-rt-2490r"><span class="title">кофеварка via veneto Тостер Redmond RT-402</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/ac081ce5674939d79667b2759a2f84a8.jpeg" alt="микроволновая печь работа Bodum BISTRO 10709-913EURO Тостер белый" title="микроволновая печь работа Bodum BISTRO 10709-913EURO Тостер белый"><div class="box" page="bodum-bistro-euro-toster-belyy-3660r"><span class="title">микроволновая печь работа Bodum BISTRO 10709-913EURO Тостер белый</span><p>от <span class="price">3660</span> руб.</p></div></li>
						<li class="large"><img src="photos/b18048af79224983f1e624ba7e264cff.jpeg" alt="мультиварка sr tmh 10 Чайник электрический Vitek VT-1144 серебряный" title="мультиварка sr tmh 10 Чайник электрический Vitek VT-1144 серебряный"><div class="box" page="chaynik-elektricheskiy-vitek-vt-serebryanyy-1550r"><span class="title">мультиварка sr tmh 10 Чайник электрический Vitek VT-1144 серебряный</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li class="large"><img src="photos/c094c1a0c632dcd5f1edee8671f05107.jpeg" alt="как разобрать утюг Чайник электрический Maxima MК- M211" title="как разобрать утюг Чайник электрический Maxima MК- M211"><div class="box" page="chaynik-elektricheskiy-maxima-mk-m-1090r"><span class="title">как разобрать утюг Чайник электрический Maxima MК- M211</span><p>от <span class="price">1090</span> руб.</p></div></li>
						<li class="large"><img src="photos/24f877fd5e1c25786c4be92fe1684b56.jpeg" alt="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118" title="книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118"><div class="box" page="chaynik-elektricheskiy-redmond-rkm-1999r"><span class="title">книга рецептов для хлебопечки Чайник электрический Redmond   RK-М118</span><p>от <span class="price">1999</span> руб.</p></div></li>
						<li><img src="photos/0c8f8180d11bb1b314126b1e547c3319.jpeg" alt="устройство блендера Чайник электрический  Vitesse VS-131 1,7 л" title="устройство блендера Чайник электрический  Vitesse VS-131 1,7 л"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-1220r"><span class="title">устройство блендера Чайник электрический  Vitesse VS-131 1,7 л</span><p>от <span class="price">1220</span> руб.</p></div></li>
						<li><img src="photos/168b510551b7b82d928917487d7b9c68.jpeg" alt="самодельный пылесос Батарейка GP Batteries Super alkaline LR03 24A-BC2" title="самодельный пылесос Батарейка GP Batteries Super alkaline LR03 24A-BC2"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-45r-2"><span class="title">самодельный пылесос Батарейка GP Batteries Super alkaline LR03 24A-BC2</span><p>от <span class="price">45</span> руб.</p></div></li>
						<li><img src="photos/08939404bc185a897cf2a335ea28842f.jpeg" alt="пылесос вертикальный Пылесос Redmond RV-308" title="пылесос вертикальный Пылесос Redmond RV-308"><div class="box" page="pylesos-redmond-rv-7990r"><span class="title">пылесос вертикальный Пылесос Redmond RV-308</span><p>от <span class="price">7990</span> руб.</p></div></li>
						<li><img src="photos/93023d88a25f41b8fefb8504a248a750.jpeg" alt="соковыжималка tefal отзывы Пылесос Vitek VT-1814" title="соковыжималка tefal отзывы Пылесос Vitek VT-1814"><div class="box" page="pylesos-vitek-vt-2200r"><span class="title">соковыжималка tefal отзывы Пылесос Vitek VT-1814</span><p>от <span class="price">2200</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zauber-citrusovaya-sokovyzhimalka-x-1000r.php", 0, -4); if (file_exists("comments/zauber-citrusovaya-sokovyzhimalka-x-1000r.php")) require_once "comments/zauber-citrusovaya-sokovyzhimalka-x-1000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zauber-citrusovaya-sokovyzhimalka-x-1000r.php" method="post" onsubmit="return checkForm(this)">
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