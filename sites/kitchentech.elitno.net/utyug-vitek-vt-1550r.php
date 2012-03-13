<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("utyug-vitek-vt-1550r.php","микроволновые печи ariston");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("utyug-vitek-vt-1550r.php", $nick, $comment);
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
		<title>микроволновые печи ariston Утюг Vitek VT-1222  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="микроволновые печи ariston, мясорубка moulinex hv, пылесос прессующий, промышленный пылесос цена, отзывы мультиварка kromax, пылесосы с аквафильтром soteco, мясорубки в санкт петербурге, купить вертикальный утюг, продам вафельницу, принцип микроволновой печи, хлебопечка мистери, brand аэрогриль, кофемашина saeco xsmall, пылесос bosch 82425,  лучшая вафельница">
		<meta name="description" content="микроволновые печи ariston Утюг Vitek,  мощностью 2200 Вт, оснащен подошвой UniCera, которая представляет с...">
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
						<a class="photo" href="photos/4858b49091b3b0bfb6539a9c55078713.jpeg" title="микроволновые печи ariston Утюг Vitek VT-1222"><img src="photos/4858b49091b3b0bfb6539a9c55078713.jpeg" alt="микроволновые печи ariston Утюг Vitek VT-1222" title="микроволновые печи ariston Утюг Vitek VT-1222 -  "></a>
						<ul>
							<li><a href="http://kitchentech.elitno.net/espressokofemashina-melitta-caffeo-solo-pure-silverblack-27000r.php"><img src="photos/e049963f26559d8e89e28ab3a3213f10.jpeg" alt="мясорубка moulinex hv Эспрессо-кофемашина Melitta Caffeo Solo Pure Silver-Black (4.0009.95)" title="мясорубка moulinex hv Эспрессо-кофемашина Melitta Caffeo Solo Pure Silver-Black (4.0009.95)"></a><h2>Эспрессо-кофемашина Melitta Caffeo Solo Pure Silver-Black (4.0009.95)</h2></li>
							<li><a href="http://kitchentech.elitno.net/kuhonnyy-kombayn-maxima-mfp-2190r.php"><img src="photos/3ee610b7cf277344aaeccda38d02c2fc.jpeg" alt="пылесос прессующий Кухонный комбайн Maxima MFP-0139" title="пылесос прессующий Кухонный комбайн Maxima MFP-0139"></a><h2>Кухонный комбайн Maxima MFP-0139</h2></li>
							<li><a href="http://kitchentech.elitno.net/yogurtnica-moulinex-jc-1650r.php"><img src="photos/5b5325f46d1563794a5b9b1bbec3af49.jpeg" alt="промышленный пылесос цена Йогуртница Moulinex JC1" title="промышленный пылесос цена Йогуртница Moulinex JC1"></a><h2>Йогуртница Moulinex JC1</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>микроволновые печи ariston Утюг Vitek VT-1222</h1>
						<div class="tb"><p>Цена: от <span class="price">1550</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21043.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Утюг Vitek,  мощностью 2200 Вт, оснащен подошвой UniCera, которая представляет собой двойное керамическое покрытие  для сверхлегкого скольжения. Жидкокристаллический дисплей, удобная ручка и  подошва с керамическим покрытием превращают глажку в приятное времяпрепровождение.  Функция вертикального отпаривания позволяет гладить пальто и рубашки, не снимая  с вешалки. Также функция вертикального отпаривания позволяет гладить шторы и  обивку мебели. Функция «антикапля»   предотвратит поступление воды из резервуара при низкотемпературной  глажке.</p><p><strong>Характеристики:</strong></p><ul><li>Мощность: 2200 Вт;</li><li>Подошва UniCera;</li><li>Автоматическое отключение;</li><li>Вертикальное отпаривание;</li><li>Функция «Антикапля»;</li><li>ЖК-дисплей.</li></ul><p><strong>Производитель:</strong><strong>Vitek (Россия)</strong></p> микроволновые печи ariston</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/6fe5b4190ebaf728c4d5f2d1788f453b.jpeg" alt="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670" title="отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670"><div class="box"><a href="http://kitchentech.elitno.net/myasorubka-elektricheskaya-vitek-vt-2950r.php"><h3 class="title">отзывы мультиварка kromax Мясорубка электрическая Vitek VT-1670</h3><p>от <span class="price">2950</span> руб.</p></a></div></li>
						<li><img src="photos/78e004a504b51dca5b370513a73854ac.jpeg" alt="пылесосы с аквафильтром soteco Мясорубка  Atlanta ATH-373" title="пылесосы с аквафильтром soteco Мясорубка  Atlanta ATH-373"><div class="box" page="myasorubka-atlanta-ath-2150r"><span class="title">пылесосы с аквафильтром soteco Мясорубка  Atlanta ATH-373</span><p>от <span class="price">2150</span> руб.</p></div></li>
						<li><img src="photos/54c54bed2f103aac514687168a05cb1f.jpeg" alt="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56" title="мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56"><div class="box" page="toster-russell-hobbs-cottage-floral-art-2790r"><span class="title">мясорубки в санкт петербурге Тостер Russell Hobbs Cottage Floral, арт. 18513-56</span><p>от <span class="price">2790</span> руб.</p></div></li>
						<li><img src="photos/d50e72b2ec5f0dd45f81986f6b14d95a.jpeg" alt="купить вертикальный утюг Тостер Russell Hobbs Jungle Green, арт. 18338-56" title="купить вертикальный утюг Тостер Russell Hobbs Jungle Green, арт. 18338-56"><div class="box" page="toster-russell-hobbs-jungle-green-art-1890r"><span class="title">купить вертикальный утюг Тостер Russell Hobbs Jungle Green, арт. 18338-56</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li class="large"><img src="photos/47745aa09108a6bfabc67b839ea476bd.jpeg" alt="продам вафельницу Чайник электрический Vitek VT-1114" title="продам вафельницу Чайник электрический Vitek VT-1114"><div class="box" page="chaynik-elektricheskiy-vitek-vt-1030r"><span class="title">продам вафельницу Чайник электрический Vitek VT-1114</span><p>от <span class="price">1030</span> руб.</p></div></li>
						<li class="large"><img src="photos/3db103a42b99a0a770887670f28f5ba2.jpeg" alt="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л" title="принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л"><div class="box" page="chaynik-elektricheskiy-moulinex-by-l-1950r"><span class="title">принцип микроволновой печи Чайник электрический Moulinex BY5101 1,5 л</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li class="large"><img src="photos/aa004256b858fb51c2e43e9faff2b9a8.jpeg" alt="хлебопечка мистери Чайник электрический Maxima MК-113" title="хлебопечка мистери Чайник электрический Maxima MК-113"><div class="box" page="chaynik-elektricheskiy-maxima-mk-760r-3"><span class="title">хлебопечка мистери Чайник электрический Maxima MК-113</span><p>от <span class="price">760</span> руб.</p></div></li>
						<li><img src="photos/26befd04ebef6df7b3db2c4e6ee2357f.jpeg" alt="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)" title="brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)"><div class="box" page="filtry-dlya-pylesosa-vitek-vt-vt-215r-2"><span class="title">brand аэрогриль Фильтры для пылесоса Vitek VT-1864 (VT-1844)</span><p>от <span class="price">215</span> руб.</p></div></li>
						<li><img src="photos/20a6a481b9a3a072fa1293146dcb1ec9.jpeg" alt="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter" title="кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter"><div class="box" page="pylesos-moyuschiy-thomas-super-s-aquafilter-10520r"><span class="title">кофемашина saeco xsmall Пылесос моющий Thomas Super 30 S Aquafilter</span><p>от <span class="price">10520</span> руб.</p></div></li>
						<li><img src="photos/53cb90a2ebb4ca3e913558aa9650be1d.jpeg" alt="пылесос bosch 82425 Пылесос Thomas Inox 1520 Plus" title="пылесос bosch 82425 Пылесос Thomas Inox 1520 Plus"><div class="box" page="pylesos-thomas-inox-plus-4730r"><span class="title">пылесос bosch 82425 Пылесос Thomas Inox 1520 Plus</span><p>от <span class="price">4730</span> руб.</p></div></li>
						<li><img src="photos/709ff92fce8d072f9f56d948427a4843.jpeg" alt="скороварка мультиварка cuckoo Пылесос Thomas Genius S1 Aquafilter" title="скороварка мультиварка cuckoo Пылесос Thomas Genius S1 Aquafilter"><div class="box" page="pylesos-thomas-genius-s-aquafilter-10000r"><span class="title">скороварка мультиварка cuckoo Пылесос Thomas Genius S1 Aquafilter</span><p>от <span class="price">10000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("utyug-vitek-vt-1550r.php", 0, -4); if (file_exists("comments/utyug-vitek-vt-1550r.php")) require_once "comments/utyug-vitek-vt-1550r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="utyug-vitek-vt-1550r.php" method="post" onsubmit="return checkForm(this)">
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