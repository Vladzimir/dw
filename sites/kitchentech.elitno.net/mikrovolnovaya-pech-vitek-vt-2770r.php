<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikrovolnovaya-pech-vitek-vt-2770r.php","кофеварка эленберг");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikrovolnovaya-pech-vitek-vt-2770r.php", $nick, $comment);
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
		<title>кофеварка эленберг Микроволновая печь Vitek VT-1681  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кофеварка эленберг, электрочайники из нержавейки, сервисный центр пылесосов, smart cleaner робот пылесос, измельчитель сучьев, кофемашина rowenta, куриное филе в пароварке, купить пылесос с контейнером, сварить кофе в кофеварке, средство от накипи для утюга, как блендером сделать пюре, ремонт хлебопечки мулинекс, кофеварка форум, moulinex mk7003 мультиварка,  пылесосы филлипс">
		<meta name="description" content="кофеварка эленберг С помощью микроволновой печи Vitek VT-1681 вы легко можете разогреть и приготови...">
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
						<a class="photo" href="photos/4a49eabd132fa073a575c3edfbe7b80b.jpeg" title="кофеварка эленберг Микроволновая печь Vitek VT-1681"><img src="photos/4a49eabd132fa073a575c3edfbe7b80b.jpeg" alt="кофеварка эленберг Микроволновая печь Vitek VT-1681" title="кофеварка эленберг Микроволновая печь Vitek VT-1681 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2080r.php"><img src="photos/f1ec794f7123a5cfc892f85d1cd7e4e0.jpeg" alt="электрочайники из нержавейки Блендер Redmond RHB-2907" title="электрочайники из нержавейки Блендер Redmond RHB-2907"></a><h2>Блендер Redmond RHB-2907</h2></li>
							<li><a href="http://kitchentech.elitno.net/blender-atlanta-atn-550r.php"><img src="photos/7911abad6905c53ed2ad855d9cc4e2e1.jpeg" alt="сервисный центр пылесосов Блендер Atlanta АТН-338" title="сервисный центр пылесосов Блендер Atlanta АТН-338"></a><h2>Блендер Atlanta АТН-338</h2></li>
							<li><a href="http://kitchentech.elitno.net/sokovyzhimalka-redmond-rj-m-4390r.php"><img src="photos/b6ecb843a4a7a272dfd585351250b4a8.jpeg" alt="smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901" title="smart cleaner робот пылесос Соковыжималка  Redmond RJ -M901"></a><h2>Соковыжималка  Redmond RJ -M901</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кофеварка эленберг Микроволновая печь Vitek VT-1681</h1>
						<div class="tb"><p>Цена: от <span class="price">2770</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8265.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>С помощью микроволновой печи <strong>Vitek VT-1681</strong> вы легко можете разогреть и приготовить себе пищу. Модель имеет 6 уровней мощности, режим размораживания, цифровой таймер на 30 минут и сигнал завершения приготовления. Прекрасное сочетание цены и качества.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Объем: 17л <li>Столик: 270мм <li>Режимы мощности: 6 уровней <li>Режим размораживания: есть <li>Таймер с ручной установкой на 30 мин <li>Сигнал завершения приготовления: есть <li>Потребляемая мощность: 700/1050Вт <li>Электропитание: 230В, ~50Гц</li></ul><p><b>Производитель:</b> Vitek.</p><p><b>Страна:</b> Россия.</p> кофеварка эленберг</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/7b0ef0b12e5f66ec7582c9396725bc92.jpeg" alt="измельчитель сучьев Чайник электрический Vitek VT-1120" title="измельчитель сучьев Чайник электрический Vitek VT-1120"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1150r"><span class="title">измельчитель сучьев Чайник электрический Vitek VT-1120</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li><img src="photos/65ddf318df091ecf01e6a4b331f1492d.jpeg" alt="кофемашина rowenta Чайник электрический Tefal VitesseS BF663440 1,7 л" title="кофемашина rowenta Чайник электрический Tefal VitesseS BF663440 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesses-bf-l-1950r"><span class="title">кофемашина rowenta Чайник электрический Tefal VitesseS BF663440 1,7 л</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/c75538a0a02b722bb4d5b9c47eb925e7.jpeg" alt="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л" title="куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-vitesse-inox-bi-l-2570r"><span class="title">куриное филе в пароварке Чайник электрический Tefal Vitesse Inox BI7625 1,7 л</span><p>от <span class="price">2570</span> руб.</p></div></li>
						<li><img src="photos/296e5671e5f65168bbfd694532a2c751.jpeg" alt="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной" title="купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной"><div class="box" page="chaynik-elektricheskiy-vitesse-vs-l-stalnoy-1850r"><span class="title">купить пылесос с контейнером Чайник электрический  Vitesse VS-107 1,7л, стальной</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/0e343e4ed2bc192a59c6c92535860524.jpeg" alt="сварить кофе в кофеварке Электрический чайник Atlanta АТН-633" title="сварить кофе в кофеварке Электрический чайник Atlanta АТН-633"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-750r"><span class="title">сварить кофе в кофеварке Электрический чайник Atlanta АТН-633</span><p>от <span class="price">750</span> руб.</p></div></li>
						<li class="large"><img src="photos/05c48dbba69cff2727e6c1b6d1112395.jpeg" alt="средство от накипи для утюга Батарейки GP Batteries Super alkaline LR20 13A-BC2" title="средство от накипи для утюга Батарейки GP Batteries Super alkaline LR20 13A-BC2"><div class="box" page="batareyki-gp-batteries-super-alkaline-lr-abc-170r"><span class="title">средство от накипи для утюга Батарейки GP Batteries Super alkaline LR20 13A-BC2</span><p>от <span class="price">170</span> руб.</p></div></li>
						<li class="large"><img src="photos/8a7e2a46651bfb4c8fa5108f6af45161.jpeg" alt="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02" title="как блендером сделать пюре Детектор жучков BugHunter Professional BH-02"><div class="box" page="detektor-zhuchkov-bughunter-professional-bh-9990r"><span class="title">как блендером сделать пюре Детектор жучков BugHunter Professional BH-02</span><p>от <span class="price">9990</span> руб.</p></div></li>
						<li><img src="photos/f16a6ea5caecf1d914f1d403108995e6.jpeg" alt="ремонт хлебопечки мулинекс Насадка утюг Thomas Steam-Iron для Vaporo Trolley" title="ремонт хлебопечки мулинекс Насадка утюг Thomas Steam-Iron для Vaporo Trolley"><div class="box" page="nasadka-utyug-thomas-steamiron-dlya-vaporo-trolley-2660r"><span class="title">ремонт хлебопечки мулинекс Насадка утюг Thomas Steam-Iron для Vaporo Trolley</span><p>от <span class="price">2660</span> руб.</p></div></li>
						<li><img src="photos/e53e12ffaa33b8893df2fec4f59e9123.jpeg" alt="кофеварка форум Пылесос Vitek VT-1838" title="кофеварка форум Пылесос Vitek VT-1838"><div class="box" page="pylesos-vitek-vt-3400r"><span class="title">кофеварка форум Пылесос Vitek VT-1838</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li><img src="photos/63eadb71b95851c3e7f26e5885bd43ae.jpeg" alt="moulinex mk7003 мультиварка Пылесос с аквафильтром Vitek VT-1832" title="moulinex mk7003 мультиварка Пылесос с аквафильтром Vitek VT-1832"><div class="box" page="pylesos-s-akvafiltrom-vitek-vt-6900r"><span class="title">moulinex mk7003 мультиварка Пылесос с аквафильтром Vitek VT-1832</span><p>от <span class="price">6900</span> руб.</p></div></li>
						<li><img src="photos/e1389eb03e943fe040843f1f9d6c693c.jpeg" alt="центральный пылесос Утюг Vitek VT-1251 синий" title="центральный пылесос Утюг Vitek VT-1251 синий"><div class="box" page="utyug-vitek-vt-siniy-1500r"><span class="title">центральный пылесос Утюг Vitek VT-1251 синий</span><p>от <span class="price">1500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikrovolnovaya-pech-vitek-vt-2770r.php", 0, -4); if (file_exists("comments/mikrovolnovaya-pech-vitek-vt-2770r.php")) require_once "comments/mikrovolnovaya-pech-vitek-vt-2770r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikrovolnovaya-pech-vitek-vt-2770r.php" method="post" onsubmit="return checkForm(this)">
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