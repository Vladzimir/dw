<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mikser-atlanta-ath-670r.php","посоветуйте хлебопечку");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mikser-atlanta-ath-670r.php", $nick, $comment);
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
		<title>посоветуйте хлебопечку Миксер Atlanta ATH-290  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="посоветуйте хлебопечку, пылесос thomas genius s2, купить утюг для волос, рецепты для хлебопечки с сыром, рецепт пельменей в хлебопечке, как правильно выбрать пароварку, scarlett утюг отзывы, мультиварка панасоник sr tmh18, мультиварка супра инструкция, рейтинг пылесосов 2011, покупать ли мультиварку, кекс в хлебопечке панасоник, мясорубка gorenje, дозиметр радиоактивности,  блендер braun mx 2050">
		<meta name="description" content="посоветуйте хлебопечку Ручной миксер Atlanta ATH-290 черного цвета с 5 скоростями и 2 насадками. Он объ...">
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
						<a class="photo" href="photos/78465bcfeecb4716f9891b6cf30f9b2b.jpeg" title="посоветуйте хлебопечку Миксер Atlanta ATH-290"><img src="photos/78465bcfeecb4716f9891b6cf30f9b2b.jpeg" alt="посоветуйте хлебопечку Миксер Atlanta ATH-290" title="посоветуйте хлебопечку Миксер Atlanta ATH-290 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/blender-redmond-rhb-2180r.php"><img src="photos/a1f8cd769afd06226b32e6fb44474c86.jpeg" alt="пылесос thomas genius s2 Блендер Redmond RHB-2908" title="пылесос thomas genius s2 Блендер Redmond RHB-2908"></a><h2>Блендер Redmond RHB-2908</h2></li>
							<li><a href="http://kitchentech.elitno.net/kofemolka-vitesse-vs-1100r.php"><img src="photos/3bdb5a7ebf59a397ed1b6263ffa77483.jpeg" alt="купить утюг для волос Кофемолка Vitesse VS-271" title="купить утюг для волос Кофемолка Vitesse VS-271"></a><h2>Кофемолка Vitesse VS-271</h2></li>
							<li><a href="http://kitchentech.elitno.net/multivarka-moulinex-mk-4170r.php"><img src="photos/f522dce957deccc1ec8ad4658577e80b.jpeg" alt="рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330" title="рецепты для хлебопечки с сыром Мультиварка Moulinex MK700330"></a><h2>Мультиварка Moulinex MK700330</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>посоветуйте хлебопечку Миксер Atlanta ATH-290</h1>
						<div class="tb"><p>Цена: от <span class="price">670</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_19610.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Ручной миксер Atlanta ATH-290 черного цвета с 5 скоростями и 2 насадками. Он объединяет в себе хорошее качество, современный дизайн, удобство и комфорт. С таким миксером вы откроете для себя много новых разнообразных блюд. Он компактный, поэтому не займет много места на кухне. Имеет 5 скоростей и кнопку для легкого извлечения насадок, а также ручку со специальным нескользящим покрытием. Обладает мощностью 150 Вт. Поставляется с двумя комплектами металлических насадок. Выполнен из пластика.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Эргономичный дизайн <li>Удобная нескользящая ручка <li>2 комплекта металлических насадок <li>Кнопка легкого извлечения насадок <li>5 скоростей <li>Мощность 150W <li>230V, 50Hz. <li>20 x 9.8 x 17.5 см<br></li></ul><p><strong>Производитель: США</strong></p> посоветуйте хлебопечку</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/d325e4ff8de4614af80db126de07173a.jpeg" alt="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8" title="рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8"><div class="box"><a href="http://kitchentech.elitno.net/myasorubka-redmond-rmg-6690r.php"><h3 class="title">рецепт пельменей в хлебопечке Мясорубка Redmond RMG-1203-8</h3><p>от <span class="price">6690</span> руб.</p></a></div></li>
						<li><img src="photos/966c1a147ae7eedce6463b74d364fbff.jpeg" alt="как правильно выбрать пароварку Пароварка Atlanta АТН-602" title="как правильно выбрать пароварку Пароварка Atlanta АТН-602"><div class="box" page="parovarka-atlanta-atn-1050r"><span class="title">как правильно выбрать пароварку Пароварка Atlanta АТН-602</span><p>от <span class="price">1050</span> руб.</p></div></li>
						<li><img src="photos/3eefca7b285e5c7425033f0997c9145b.jpeg" alt="scarlett утюг отзывы Чайник электрический Vitek VT-1104" title="scarlett утюг отзывы Чайник электрический Vitek VT-1104"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1350r"><span class="title">scarlett утюг отзывы Чайник электрический Vitek VT-1104</span><p>от <span class="price">1350</span> руб.</p></div></li>
						<li><img src="photos/85911164b0086dda5108661c861dc16a.jpeg" alt="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л" title="мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л"><div class="box" page="chaynik-elektricheskiy-tefal-delfina-be-l-950r"><span class="title">мультиварка панасоник sr tmh18 Чайник электрический Tefal Delfina BE531040 1,5 л</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/5a34cc2772e0feae9df6932b7f043259.jpeg" alt="мультиварка супра инструкция Чайник электрический Atlanta ATH-758" title="мультиварка супра инструкция Чайник электрический Atlanta ATH-758"><div class="box" page="chaynik-elektricheskiy-atlanta-ath-940r"><span class="title">мультиварка супра инструкция Чайник электрический Atlanta ATH-758</span><p>от <span class="price">940</span> руб.</p></div></li>
						<li class="large"><img src="photos/ea47296a93804ab77bc9f5e5af614a8b.jpeg" alt="рейтинг пылесосов 2011 Батарейка GP Batteries Super alkaline LR14 14A-BC2" title="рейтинг пылесосов 2011 Батарейка GP Batteries Super alkaline LR14 14A-BC2"><div class="box" page="batareyka-gp-batteries-super-alkaline-lr-abc-130r"><span class="title">рейтинг пылесосов 2011 Батарейка GP Batteries Super alkaline LR14 14A-BC2</span><p>от <span class="price">130</span> руб.</p></div></li>
						<li class="large"><img src="photos/0d3ac15ed04e0206963b9102f5ef309b.jpeg" alt="покупать ли мультиварку Парогенератор Lelit PG018" title="покупать ли мультиварку Парогенератор Lelit PG018"><div class="box" page="parogenerator-lelit-pg-24500r"><span class="title">покупать ли мультиварку Парогенератор Lelit PG018</span><p>от <span class="price">24500</span> руб.</p></div></li>
						<li><img src="photos/95ee2f83dd665559125032ef461af475.jpeg" alt="кекс в хлебопечке панасоник Фильтры для пылесоса Vitek VT-1866 (VT-1836)" title="кекс в хлебопечке панасоник Фильтры для пылесоса Vitek VT-1866 (VT-1836)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-175r"><span class="title">кекс в хлебопечке панасоник Фильтры для пылесоса Vitek VT-1866 (VT-1836)</span><p>от <span class="price">175</span> руб.</p></div></li>
						<li><img src="photos/ebeb61ea1ddcbebc4d0a7ed9a625842f.jpeg" alt="мясорубка gorenje Бумажные фильтры-мешки 450 (787-114) для Thomas" title="мясорубка gorenje Бумажные фильтры-мешки 450 (787-114) для Thomas"><div class="box" page="bumazhnye-filtrymeshki-dlya-thomas-1150r"><span class="title">мясорубка gorenje Бумажные фильтры-мешки 450 (787-114) для Thomas</span><p>от <span class="price">1150</span> руб.</p></div></li>
						<li><img src="photos/c0a2e2be0cab06fcd64d43478c95622c.jpeg" alt="дозиметр радиоактивности Пылесос моющий Thomas Twin TT Aquafilter" title="дозиметр радиоактивности Пылесос моющий Thomas Twin TT Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-twin-tt-aquafilter-14900r"><span class="title">дозиметр радиоактивности Пылесос моющий Thomas Twin TT Aquafilter</span><p>от <span class="price">14900</span> руб.</p></div></li>
						<li><img src="photos/7660e64f2f5c029aab5d6fad25c29084.jpeg" alt="бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843" title="бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843"><div class="box" page="pylesos-vitek-3990r"><span class="title">бездрожжевой хлеб в хлебопечке Пылесос Vitek 1843</span><p>от <span class="price">3990</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mikser-atlanta-ath-670r.php", 0, -4); if (file_exists("comments/mikser-atlanta-ath-670r.php")) require_once "comments/mikser-atlanta-ath-670r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mikser-atlanta-ath-670r.php" method="post" onsubmit="return checkForm(this)">
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