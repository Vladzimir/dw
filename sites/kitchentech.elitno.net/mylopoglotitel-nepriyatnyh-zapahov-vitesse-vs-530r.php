<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mylopoglotitel-nepriyatnyh-zapahov-vitesse-vs-530r.php","аэрогрили в москве");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mylopoglotitel-nepriyatnyh-zapahov-vitesse-vs-530r.php", $nick, $comment);
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
		<title>аэрогрили в москве Мыло-поглотитель неприятных запахов Vitesse VS-1293  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="аэрогрили в москве, кофемолка moulinex, микроволновая печь польза, чалдовые кофеварки, рецепт пельменей в хлебопечке, насадки для мясорубки zelmer, блюда в хлебопечке, щетка для пылесоса electrolux, мультиварка описание, посоветуйте хлебопечку, clatronic хлебопечка, мультиварки в минске, соковыжималка tefal отзывы, запчасти для пароварки,  центральный пылесос">
		<meta name="description" content="аэрогрили в москве Мыло Vitesse VS-1293 из специального сплава  высококачественной нержавеющей стал...">
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
						<a class="photo" href="photos/b3484386aa5de93840c27e2c8187adfa.jpeg" title="аэрогрили в москве Мыло-поглотитель неприятных запахов Vitesse VS-1293"><img src="photos/b3484386aa5de93840c27e2c8187adfa.jpeg" alt="аэрогрили в москве Мыло-поглотитель неприятных запахов Vitesse VS-1293" title="аэрогрили в москве Мыло-поглотитель неприятных запахов Vitesse VS-1293 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-3290r.php"><img src="photos/77a7b9eee8f1b767f7912a55eb9e902b.jpeg" alt="кофемолка moulinex Блендер Redmond RHB-2904" title="кофемолка moulinex Блендер Redmond RHB-2904"></a><h2>Блендер Redmond RHB-2904</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-lattea-krasnaya-29530r.php"><img src="photos/39e04c91cf56d7c949379d4f2e2d6076.jpeg" alt="микроволновая печь польза Автоматическая кофемашина Melitta CAFFEO Lattea, красная" title="микроволновая печь польза Автоматическая кофемашина Melitta CAFFEO Lattea, красная"></a><h2>Автоматическая кофемашина Melitta CAFFEO Lattea, красная</h2></li>
							<li><a href="http://kitchentech.elitno.net/avtomaticheskaya-kofemashina-melitta-caffeo-gourmet-chernaya-43999r.php"><img src="photos/a59c30a3b2d8957f43e9fce5f7b6e0f5.jpeg" alt="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная" title="чалдовые кофеварки Автоматическая кофемашина Melitta CAFFEO GOURMET, черная"></a><h2>Автоматическая кофемашина Melitta CAFFEO GOURMET, черная</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>аэрогрили в москве Мыло-поглотитель неприятных запахов Vitesse VS-1293</h1>
						<div class="tb"><p>Цена: от <span class="price">530</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19710.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Мыло Vitesse VS-1293 из специального сплава  высококачественной нержавеющей стали предназначено для удаления неприятных  запахов (рыбы, чеснока, бензина и тому подобного) – его не надо намыливать,  просто вымойте руки с ним и вытрите полотенцем.</p> аэрогрили в москве</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d325e4ff8de4614af80db126de07173a.jpeg" alt="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8" title="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8"><div class="box" page="myasorubka-redmond-rmg-6690r"><span class="title">рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8</span><p>от <span class="price">6690</span> руб.</p></div></li>
						<li><img src="photos/7476c2912d4d9c99682e7b20dcc24385.jpeg" alt="насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192" title="насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192"><div class="box" page="elektroplita-indukcionnaya-atlanta-ath-1900r"><span class="title">насадки для мясорубки zelmer Электроплита индукционная Atlanta ATH-192</span><p>от <span class="price">1900</span> руб.</p></div></li>
						<li><img src="photos/b5363272b3a3c59d4980ee7e84a0ecd1.jpeg" alt="блюда в хлебопечке Соковыжималка для цитрусовых (6020120/21) 307-CP" title="блюда в хлебопечке Соковыжималка для цитрусовых (6020120/21) 307-CP"><div class="box" page="sokovyzhimalka-dlya-citrusovyh-cp-1430r"><span class="title">блюда в хлебопечке Соковыжималка для цитрусовых (6020120/21) 307-CP</span><p>от <span class="price">1430</span> руб.</p></div></li>
						<li><img src="photos/d0af4bd740dd75cf948a8f00224c2bee.jpeg" alt="щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White" title="щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White"><div class="box" page="chaynik-elektricheskiy-binatone-cej-white-1080r"><span class="title">щетка для пылесоса electrolux Чайник электрический Binatone CEJ-1777 White</span><p>от <span class="price">1080</span> руб.</p></div></li>
						<li class="large"><img src="photos/01e798cd02e35629810cab1b511976bc.jpeg" alt="мультиварка описание Чайник электрический Tefal Reminisce KI201540 1,7 л" title="мультиварка описание Чайник электрический Tefal Reminisce KI201540 1,7 л"><div class="box" page="chaynik-elektricheskiy-tefal-reminisce-ki-l-2370r"><span class="title">мультиварка описание Чайник электрический Tefal Reminisce KI201540 1,7 л</span><p>от <span class="price">2370</span> руб.</p></div></li>
						<li class="large"><img src="photos/0b3cd91064942c75434bb396eaa4e0d2.jpeg" alt="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический" title="посоветуйте хлебопечку Redmond RK-M121D Чайник электрический"><div class="box" page="redmond-rkmd-chaynik-elektricheskiy-1990r"><span class="title">посоветуйте хлебопечку Redmond RK-M121D Чайник электрический</span><p>от <span class="price">1990</span> руб.</p></div></li>
						<li class="large"><img src="photos/1bbdc32e5167c3f95a77515679aaf9df.jpeg" alt="clatronic хлебопечка Электрический чайник Atlanta АТН-700" title="clatronic хлебопечка Электрический чайник Atlanta АТН-700"><div class="box" page="elektricheskiy-chaynik-atlanta-atn-1280r"><span class="title">clatronic хлебопечка Электрический чайник Atlanta АТН-700</span><p>от <span class="price">1280</span> руб.</p></div></li>
						<li><img src="photos/5bb6cca83f88fe60dd20ef1d2af8e3f6.jpeg" alt="мультиварки в минске Пылесос Dyson origin dB DC 29" title="мультиварки в минске Пылесос Dyson origin dB DC 29"><div class="box" page="pylesos-dyson-origin-db-dc-17990r"><span class="title">мультиварки в минске Пылесос Dyson origin dB DC 29</span><p>от <span class="price">17990</span> руб.</p></div></li>
						<li><img src="photos/93023d88a25f41b8fefb8504a248a750.jpeg" alt="соковыжималка tefal отзывы Пылесос Vitek VT-1814" title="соковыжималка tefal отзывы Пылесос Vitek VT-1814"><div class="box" page="pylesos-vitek-vt-2200r"><span class="title">соковыжималка tefal отзывы Пылесос Vitek VT-1814</span><p>от <span class="price">2200</span> руб.</p></div></li>
						<li><img src="photos/eb12162abf9f68b1f020c54d55eeb406.jpeg" alt="запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM" title="запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM"><div class="box" page="sushilka-dlya-ruk-aeg-haustehnik-he-tm-7800r"><span class="title">запчасти для пароварки Сушилка для рук AEG Haustehnik HE 260 TM</span><p>от <span class="price">7800</span> руб.</p></div></li>
						<li><img src="photos/b19d13e15e623a65d384ae31dfb72492.jpeg" alt="мясорубки отечественные Утюг Vitek VT-1203 серый" title="мясорубки отечественные Утюг Vitek VT-1203 серый"><div class="box" page="utyug-vitek-vt-seryy-940r"><span class="title">мясорубки отечественные Утюг Vitek VT-1203 серый</span><p>от <span class="price">940</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mylopoglotitel-nepriyatnyh-zapahov-vitesse-vs-530r.php", 0, -4); if (file_exists("comments/mylopoglotitel-nepriyatnyh-zapahov-vitesse-vs-530r.php")) require_once "comments/mylopoglotitel-nepriyatnyh-zapahov-vitesse-vs-530r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mylopoglotitel-nepriyatnyh-zapahov-vitesse-vs-530r.php" method="post" onsubmit="return checkForm(this)">
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