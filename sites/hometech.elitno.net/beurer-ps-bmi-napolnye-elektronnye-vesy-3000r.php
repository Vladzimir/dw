<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("beurer-ps-bmi-napolnye-elektronnye-vesy-3000r.php","магазин зеркал для ванной");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("beurer-ps-bmi-napolnye-elektronnye-vesy-3000r.php", $nick, $comment);
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
		<title>магазин зеркал для ванной Beurer PS41 BMI Напольные электронные весы  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="магазин зеркал для ванной, виды химической завивки волос фото, массаж октябрьская, весы cas электронные, аппарат для вакуумного массажа, крем для солярия отзывы, камеди клаб кривые зеркала, эксплуатация электронных весов, массаж в россии, зеркало психология, зеркало задней двери, хромированные зеркала, где купить ирригатор, после солярия нельзя,  двигатель фена">
		<meta name="description" content="магазин зеркал для ванной Beurer PS41 BMI – напольные электронные весы с индикацией индекса массы тела (BM...">
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
						<a class="photo" href="photos/39daed3d50fe3fa87078060cfa01e362.jpeg" title="магазин зеркал для ванной Beurer PS41 BMI Напольные электронные весы"><img src="photos/39daed3d50fe3fa87078060cfa01e362.jpeg" alt="магазин зеркал для ванной Beurer PS41 BMI Напольные электронные весы" title="магазин зеркал для ванной Beurer PS41 BMI Напольные электронные весы -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/zauber-elektronnye-napolnye-vesy-eco-1580r-3.php"><img src="photos/b98fd66435dfbeabe9e3e25e0195a774.jpeg" alt="виды химической завивки волос фото Zauber Электронные напольные весы  ECO-170" title="виды химической завивки волос фото Zauber Электронные напольные весы  ECO-170"></a><h2>Zauber Электронные напольные весы  ECO-170</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-diagnosticheskie-beurer-bg-2000r.php"><img src="photos/7cc3da826513a2ff00ab64d42d081c24.jpeg" alt="массаж октябрьская Весы электронные напольные диагностические  Beurer BG 75" title="массаж октябрьская Весы электронные напольные диагностические  Beurer BG 75"></a><h2>Весы электронные напольные диагностические  Beurer BG 75</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-2750r.php"><img src="photos/7dbc33322e4439b0f562bbaf80476cbb.jpeg" alt="весы cas электронные Анализатор жира (состава тела) Tanita BC-575" title="весы cas электронные Анализатор жира (состава тела) Tanita BC-575"></a><h2>Анализатор жира (состава тела) Tanita BC-575</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>магазин зеркал для ванной Beurer PS41 BMI Напольные электронные весы</h1>
						<div class="tb"><p>Цена: от <span class="price">3000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18271.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Beurer PS41 BMI – напольные электронные весы с индикацией индекса массы тела (BMI) со средним значением и интерпретацией. Они оснащены большим двухстрочным ЖК-дисплеем и эффективной синей подсветкой. Весы автоматически обновляют данные о возрасте и записывают в 5 ячеек памяти последние изменения для 10 пользователей. Максимальный допустимый вес: 180 кг. Функция автоматического отключения сэкономит заряд батареи.</p><p><strong>Характеристики:</strong></p><ul type=disc><li>Максимально допустимый вес 180 кг <li>Большой ЖК-дисплей <li>Индикация перегрузки <li>Гарантия 3 года </li></ul><p><strong>Производитель: Beurer (Германия)</strong></p> магазин зеркал для ванной</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/5c5fbc08f4578545307c561d516fe2c8.jpeg" alt="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand" title="аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand"><div class="box" page="glamurnaya-palochka-dlya-zavivki-volos-corioliss-glamour-wand-3080r"><span class="title">аппарат для вакуумного массажа Гламурная палочка для завивки волос Corioliss Glamour Wand</span><p>от <span class="price">3080</span> руб.</p></div></li>
						<li><img src="photos/a49bb22ab9b1c7c4501855c8942e6cde.jpeg" alt="крем для солярия отзывы Ирригатор полости рта Aquajet LD-A7" title="крем для солярия отзывы Ирригатор полости рта Aquajet LD-A7"><div class="box" page="irrigator-polosti-rta-aquajet-lda-2500r"><span class="title">крем для солярия отзывы Ирригатор полости рта Aquajet LD-A7</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/699c71eb95474070f11b71a4c8de6691.jpeg" alt="камеди клаб кривые зеркала Ирригатор полости рта DONFEEL OR-820M Комплектация 1" title="камеди клаб кривые зеркала Ирригатор полости рта DONFEEL OR-820M Комплектация 1"><div class="box" page="irrigator-polosti-rta-donfeel-orm-komplektaciya-2890r"><span class="title">камеди клаб кривые зеркала Ирригатор полости рта DONFEEL OR-820M Комплектация 1</span><p>от <span class="price">2890</span> руб.</p></div></li>
						<li><img src="photos/80751e023e3ff12de485090c14fbecdd.jpeg" alt="эксплуатация электронных весов Валик под шею L35D9 USM-010" title="эксплуатация электронных весов Валик под шею L35D9 USM-010"><div class="box" page="valik-pod-sheyu-ld-usm-1000r"><span class="title">эксплуатация электронных весов Валик под шею L35D9 USM-010</span><p>от <span class="price">1000</span> руб.</p></div></li>
						<li class="large"><img src="photos/2cb4e8a91d245f53ceebe70f42a3b86c.jpeg" alt="массаж в россии Коврик малый Ляпко АЛ" title="массаж в россии Коврик малый Ляпко АЛ"><div class="box" page="kovrik-malyy-lyapko-al-890r"><span class="title">массаж в россии Коврик малый Ляпко АЛ</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li class="large"><img src="photos/4aca7dd74af44ac0b4f6a79b9df1a999.jpeg" alt="зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057" title="зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057"><div class="box" page="mnogofunkcionalnyy-pribor-poyas-zdorovya-gezatone-m-2300r"><span class="title">зеркало психология Многофункциональный прибор Пояс Здоровья Gezatone m142 1301057</span><p>от <span class="price">2300</span> руб.</p></div></li>
						<li class="large"><img src="photos/75cde016b01871ff8d9976da31b77fd1.jpeg" alt="зеркало задней двери Массажер ZENET TL-MHT-C" title="зеркало задней двери Массажер ZENET TL-MHT-C"><div class="box" page="massazher-zenet-tlmhtc-2050r"><span class="title">зеркало задней двери Массажер ZENET TL-MHT-C</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li><img src="photos/eb869f90a5f3f5c904615d9c1da045f4.jpeg" alt="хромированные зеркала Гидромассажная ванночка с турбо-массажем Laica BF2011" title="хромированные зеркала Гидромассажная ванночка с турбо-массажем Laica BF2011"><div class="box" page="gidromassazhnaya-vannochka-s-turbomassazhem-laica-bf-4000r"><span class="title">хромированные зеркала Гидромассажная ванночка с турбо-массажем Laica BF2011</span><p>от <span class="price">4000</span> руб.</p></div></li>
						<li><img src="photos/ef4ef6c6f5e00f1d9e72c25d1c37f61e.jpeg" alt="где купить ирригатор Гидромассажная ванна для ног Maxima MFM-3101" title="где купить ирригатор Гидромассажная ванна для ног Maxima MFM-3101"><div class="box" page="gidromassazhnaya-vanna-dlya-nog-maxima-mfm-2190r"><span class="title">где купить ирригатор Гидромассажная ванна для ног Maxima MFM-3101</span><p>от <span class="price">2190</span> руб.</p></div></li>
						<li><img src="photos/443ea533b0dac6c448826c56d4beed62.jpeg" alt="после солярия нельзя Массажер для глаз с тепловой и вибромассажной функцией Gezatone BEM-III" title="после солярия нельзя Массажер для глаз с тепловой и вибромассажной функцией Gezatone BEM-III"><div class="box" page="massazher-dlya-glaz-s-teplovoy-i-vibromassazhnoy-funkciey-gezatone-bemiii-3300r"><span class="title">после солярия нельзя Массажер для глаз с тепловой и вибромассажной функцией Gezatone BEM-III</span><p>от <span class="price">3300</span> руб.</p></div></li>
						<li><img src="photos/7e9947d6fb09feafff538d8cade1a9ad.jpeg" alt="массаж википедия Массажер для глаз Gezatone iSee360 Air Tracktion" title="массаж википедия Массажер для глаз Gezatone iSee360 Air Tracktion"><div class="box" page="massazher-dlya-glaz-gezatone-isee-air-tracktion-4000r"><span class="title">массаж википедия Массажер для глаз Gezatone iSee360 Air Tracktion</span><p>от <span class="price">4000</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("beurer-ps-bmi-napolnye-elektronnye-vesy-3000r.php", 0, -4); if (file_exists("comments/beurer-ps-bmi-napolnye-elektronnye-vesy-3000r.php")) require_once "comments/beurer-ps-bmi-napolnye-elektronnye-vesy-3000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="beurer-ps-bmi-napolnye-elektronnye-vesy-3000r.php" method="post" onsubmit="return checkForm(this)">
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