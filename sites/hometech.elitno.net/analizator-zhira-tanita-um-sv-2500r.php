<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("analizator-zhira-tanita-um-sv-2500r.php","массаж в сочи");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("analizator-zhira-tanita-um-sv-2500r.php", $nick, $comment);
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
		<title>массаж в сочи Анализатор жира Tanita UM-030 (SV)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="массаж в сочи, зеркала бмв х5, что значит зеркало, зеркала альбом, зеркалом блестит река, триммер для зоны бикини, электробритва philips at750, зеркало заднего вида мерседес, хорошие электронные весы, паспарту купить, зеркало и обезьяна, расческа триммер, купить машинку для стрижки животных, ножи для электробритвы,  быстрый солярий">
		<meta name="description" content="массаж в сочи Вы следите за своим весом и хотите иметь стройную фигуру и  хорошее здоровье? В ...">
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
						<a class="photo" href="photos/d6db423a639701cbcc72448f073ae3bd.jpeg" title="массаж в сочи Анализатор жира Tanita UM-030 (SV)"><img src="photos/d6db423a639701cbcc72448f073ae3bd.jpeg" alt="массаж в сочи Анализатор жира Tanita UM-030 (SV)" title="массаж в сочи Анализатор жира Tanita UM-030 (SV) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-babyliss-ste-1790r.php"><img src="photos/56fca94770a317afac3ae4c5325c2d17.jpeg" alt="зеркала бмв х5 Выпрямитель для волос BaByliss ST229E" title="зеркала бмв х5 Выпрямитель для волос BaByliss ST229E"></a><h2>Выпрямитель для волос BaByliss ST229E</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-volos-atlanta-atn-500r.php"><img src="photos/d3b4eb483f82d34f6a33d99e454414ea.jpeg" alt="что значит зеркало Электрощипцы для волос Atlanta АТН-833" title="что значит зеркало Электрощипцы для волос Atlanta АТН-833"></a><h2>Электрощипцы для волос Atlanta АТН-833</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-550r.php"><img src="photos/453dcbd53e683e2622b408d4ea19e1cc.jpeg" alt="зеркала альбом Зеркало Beurer BS05 косметическое" title="зеркала альбом Зеркало Beurer BS05 косметическое"></a><h2>Зеркало Beurer BS05 косметическое</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>массаж в сочи Анализатор жира Tanita UM-030 (SV)</h1>
						<div class="tb"><p>Цена: от <span class="price">2500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_25668.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вы следите за своим весом и хотите иметь стройную фигуру и  хорошее здоровье? В таком случае полезным приобретением для вас несомненно  станет анализатор жира. Анализатор жира (состава тела) Tanita UM-030 (SV) определяет вес, содержание воды и  содержание жировой ткани в организме, а также имеет оптимальную максимальную  нагрузку. Точность измерений составляет 10 гр! Приятным дополнением также  служит привлекательный дизайн прибора – модель имеет изящный прозрачный корпус.     </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Тип:       электронные;</li>   <li>Материал       платформы: металл, стекло;</li>   <li>Максимальная       нагрузка: 150 кг;</li>   <li>Точность       измерения: 0,01 кг;</li>   <li>Единицы       измерения: кг/фунты;</li>   <li>Измерения:       содержание воды, содержание жировой ткани;</li>   <li>Цвет:       прозрачные.</li> </ul> <p><strong>Производитель: Tanita  (Япония)</strong><br>     <strong>Гарантия: 3 года</strong></p> массаж в сочи</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c31991b00bf6f0f8d0461c8a88e7db13.jpeg" alt="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением" title="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением"><div class="box" page="zerkalo-dvustoronnee-babyliss-e-s-mi-kratnym-uvelicheniem-3190r"><span class="title">зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением</span><p>от <span class="price">3190</span> руб.</p></div></li>
						<li><img src="photos/ca66537608944cd4881ffac56a0a3e8e.jpeg" alt="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита" title="триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита"><div class="box" page="balzam-dlya-irrigatora-donfeel-profilaktika-parodontoza-i-gingivita-180r"><span class="title">триммер для зоны бикини Бальзам для ирригатора DONFEEL Профилактика пародонтоза и гингивита</span><p>от <span class="price">180</span> руб.</p></div></li>
						<li><img src="photos/e83780f442fe720f2b4d56bdd2221d0b.jpeg" alt="электробритва philips at750 Валик усеченный круг L64D14 USM-007" title="электробритва philips at750 Валик усеченный круг L64D14 USM-007"><div class="box" page="valik-usechennyy-krug-ld-usm-1200r"><span class="title">электробритва philips at750 Валик усеченный круг L64D14 USM-007</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/4672e333a6bf6781c5b059e098066f46.jpeg" alt="зеркало заднего вида мерседес Аппликатор Кузнецова" title="зеркало заднего вида мерседес Аппликатор Кузнецова"><div class="box" page="applikator-kuznecova-200r"><span class="title">зеркало заднего вида мерседес Аппликатор Кузнецова</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li class="large"><img src="photos/20c4dce42cd699155467e91509a5235b.jpeg" alt="хорошие электронные весы Массажер для шеи Beurer MG150" title="хорошие электронные весы Массажер для шеи Beurer MG150"><div class="box" page="massazher-dlya-shei-beurer-mg-4500r"><span class="title">хорошие электронные весы Массажер для шеи Beurer MG150</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li class="large"><img src="photos/b873fdbadf195aed2e807dd6c213c186.jpeg" alt="паспарту купить Вибромассажер HOUSE FIT НМ-3004" title="паспарту купить Вибромассажер HOUSE FIT НМ-3004"><div class="box" page="vibromassazher-house-fit-nm-6000r"><span class="title">паспарту купить Вибромассажер HOUSE FIT НМ-3004</span><p>от <span class="price">6000</span> руб.</p></div></li>
						<li class="large"><img src="photos/15b245e4c99a3ad164830ab7215e451b.jpeg" alt="зеркало и обезьяна Массажер медицинский Nozomi MH-102 ICST" title="зеркало и обезьяна Массажер медицинский Nozomi MH-102 ICST"><div class="box" page="massazher-medicinskiy-nozomi-mh-icst-1550r"><span class="title">зеркало и обезьяна Массажер медицинский Nozomi MH-102 ICST</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/ddeceb0933fcd3947d8b9a4bd8a25da2.jpeg" alt="расческа триммер Подушка массажная BODYKRAFT С-33" title="расческа триммер Подушка массажная BODYKRAFT С-33"><div class="box" page="podushka-massazhnaya-bodykraft-s-4950r"><span class="title">расческа триммер Подушка массажная BODYKRAFT С-33</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li><img src="photos/f3a25c0d4d73e98ed67714c2162eaf84.jpeg" alt="купить машинку для стрижки животных Расческа Corioliss Straightening Comb" title="купить машинку для стрижки животных Расческа Corioliss Straightening Comb"><div class="box" page="rascheska-corioliss-straightening-comb-480r"><span class="title">купить машинку для стрижки животных Расческа Corioliss Straightening Comb</span><p>от <span class="price">480</span> руб.</p></div></li>
						<li><img src="photos/6b329b59e2c95c28766254ced4d923f8.jpeg" alt="ножи для электробритвы Фен Valera Action 1800 542.08" title="ножи для электробритвы Фен Valera Action 1800 542.08"><div class="box" page="fen-valera-action-1300r"><span class="title">ножи для электробритвы Фен Valera Action 1800 542.08</span><p>от <span class="price">1300</span> руб.</p></div></li>
						<li><img src="photos/4fffcb2bc314de3650ec3df67e99237a.jpeg" alt="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E" title="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E"><div class="box" page="fen-babyliss-de-980r"><span class="title">домашние лазерные эпиляторы отзывы Фен BABYLISS D221E</span><p>от <span class="price">980</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("analizator-zhira-tanita-um-sv-2500r.php", 0, -4); if (file_exists("comments/analizator-zhira-tanita-um-sv-2500r.php")) require_once "comments/analizator-zhira-tanita-um-sv-2500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="analizator-zhira-tanita-um-sv-2500r.php" method="post" onsubmit="return checkForm(this)">
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