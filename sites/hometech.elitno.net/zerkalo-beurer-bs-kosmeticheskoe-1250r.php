<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zerkalo-beurer-bs-kosmeticheskoe-1250r.php","весы электронные ручные");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zerkalo-beurer-bs-kosmeticheskoe-1250r.php", $nick, $comment);
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
		<title>весы электронные ручные Зеркало  Beurer BS 49 косметическое  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="весы электронные ручные, зеркало войны, триммер bosch, массаж медом антицеллюлитный, утюжки для завивки волос, ведьма в зеркале бесплатно, массаж сергиев посад, каталог зеркал, осмотр гинекологическим зеркалом, массаж нижних конечностей, установка боковых зеркал, завивка на длинные волосы фото, домашние лазерные эпиляторы отзывы, завивка волос утюжком,  зеркало левое форд фокус">
		<meta name="description" content="весы электронные ручные Безупречный макияж обеспечивается не только искусными руками визажиста, но и усл...">
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
						<a class="photo" href="photos/9f9dc0e1195bb1adbadd2a8107ad8de9.jpeg" title="весы электронные ручные Зеркало  Beurer BS 49 косметическое"><img src="photos/9f9dc0e1195bb1adbadd2a8107ad8de9.jpeg" alt="весы электронные ручные Зеркало  Beurer BS 49 косметическое" title="весы электронные ручные Зеркало  Beurer BS 49 косметическое -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-napolnye-s-analizatorom-zhira-i-vody-gezatone-esga-1200r.php"><img src="photos/43a957bd80b6ff4e3954c5f31015c90c.jpeg" alt="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501" title="зеркало войны Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501"></a><h2>Весы напольные с анализатором жира и воды Gezatone ESG2804А 1301501</h2></li>
							<li><a href="http://hometech.elitno.net/analizator-zhira-sostava-tela-tanita-bc-sv-3000r.php"><img src="photos/5e9b4cd093153df88b137e4b04257a76.jpeg" alt="триммер bosch Анализатор жира (состава тела) Tanita BC-542 (SV)" title="триммер bosch Анализатор жира (состава тела) Tanita BC-542 (SV)"></a><h2>Анализатор жира (состава тела) Tanita BC-542 (SV)</h2></li>
							<li><a href="http://hometech.elitno.net/standartnye-nasadki-dlya-irrigatora-waterpik-wpe-wpe-sht-350r.php"><img src="photos/15986a54082f98b80f57966a0faabc05.jpeg" alt="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)" title="массаж медом антицеллюлитный Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)"></a><h2>Стандартные насадки для ирригатора Waterpik WP100E, WP360E (2 шт.)</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>весы электронные ручные Зеркало  Beurer BS 49 косметическое</h1>
						<div class="tb"><p>Цена: от <span class="price">1250</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1271.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Безупречный макияж обеспечивается не только искусными руками визажиста, но и условиями для его создания. <strong>Косметическое зеркало Beurer BS 49</strong> понравится любой женщине. Для создания идеальных линий зеркало имеет пятикратное увеличение и подсвечивается по краям. Компактный размер и возможность работы от батареек позволяют брать <strong>Зеркало Beurer BS 49 </strong>в любое путешествие.</p><p><b></b></p><p><b>Особенности:</b></p><ul type=disc><li>Двухстороннее <li>Имеет обычную и увеличивающую в 5 раз поверхность <li>Подсветка <li>Диаметр 11 см <li>Батарейки в комплекте</li></ul><p><b>Производитель: </b>Beurer (Германия)</p><p><b>Гарантия:</b> 1 год</p> весы электронные ручные</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/0771169db5e24831fbf44ff7fabc016d.jpeg" alt="утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)" title="утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)"><div class="box" page="manikyurnyy-nabor-beurer-mp-nasadok-1550r"><span class="title">утюжки для завивки волос Маникюрный набор Beurer MP30 (7 насадок)</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li><img src="photos/9fadb3bc1b0070c759f3914e2beceea5.jpeg" alt="ведьма в зеркале бесплатно Миостимулятор цифровой 3 в 1 Beurer EM 41" title="ведьма в зеркале бесплатно Миостимулятор цифровой 3 в 1 Beurer EM 41"><div class="box" page="miostimulyator-cifrovoy-v-beurer-em-2750r"><span class="title">ведьма в зеркале бесплатно Миостимулятор цифровой 3 в 1 Beurer EM 41</span><p>от <span class="price">2750</span> руб.</p></div></li>
						<li><img src="photos/109ab999609bcd7a247d413a4e6a9ec7.jpeg" alt="массаж сергиев посад Массажер для спины Beurer MG 230" title="массаж сергиев посад Массажер для спины Beurer MG 230"><div class="box" page="massazher-dlya-spiny-beurer-mg-12000r"><span class="title">массаж сергиев посад Массажер для спины Beurer MG 230</span><p>от <span class="price">12000</span> руб.</p></div></li>
						<li><img src="photos/2bafeeb3a10bb6c208d12092d2b70718.jpeg" alt="каталог зеркал Массажер ZENET TL-MHT-A" title="каталог зеркал Массажер ZENET TL-MHT-A"><div class="box" page="massazher-zenet-tlmhta-1850r"><span class="title">каталог зеркал Массажер ZENET TL-MHT-A</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/1ac6b469cdeb6921a5e0268ec37a3b66.jpeg" alt="осмотр гинекологическим зеркалом Пояс массажный BODYKRAFT B2-12" title="осмотр гинекологическим зеркалом Пояс массажный BODYKRAFT B2-12"><div class="box" page="poyas-massazhnyy-bodykraft-b-3290r"><span class="title">осмотр гинекологическим зеркалом Пояс массажный BODYKRAFT B2-12</span><p>от <span class="price">3290</span> руб.</p></div></li>
						<li class="large"><img src="photos/a3331b51ae07cba95c43ef802a9f621a.jpeg" alt="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61" title="массаж нижних конечностей Массажер для ног BODYKRAFT FM-61"><div class="box" page="massazher-dlya-nog-bodykraft-fm-12990r"><span class="title">массаж нижних конечностей Массажер для ног BODYKRAFT FM-61</span><p>от <span class="price">12990</span> руб.</p></div></li>
						<li class="large"><img src="photos/f7810eeae3245b2809b14907b94ee4e0.jpeg" alt="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос" title="установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос"><div class="box" page="vitek-vt–-mashinka-dlya-strizhki-volos-1240r"><span class="title">установка боковых зеркал Vitek VT–1361 Машинка для стрижки волос</span><p>от <span class="price">1240</span> руб.</p></div></li>
						<li><img src="photos/cae249c48fcfeacbbf7bd176d817de70.jpeg" alt="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл" title="завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-medovyy-v-kartridzhe-ml-150r"><span class="title">завивка на длинные волосы фото Воск для депиляции Rica, медовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/4fffcb2bc314de3650ec3df67e99237a.jpeg" alt="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E" title="домашние лазерные эпиляторы отзывы Фен BABYLISS D221E"><div class="box" page="fen-babyliss-de-980r"><span class="title">домашние лазерные эпиляторы отзывы Фен BABYLISS D221E</span><p>от <span class="price">980</span> руб.</p></div></li>
						<li><img src="photos/9f7c56363d95b3f8ad1c9e5826358cb8.jpeg" alt="завивка волос утюжком Электрическая зубная щетка HealthyWhite НХ 6731-02" title="завивка волос утюжком Электрическая зубная щетка HealthyWhite НХ 6731-02"><div class="box" page="elektricheskaya-zubnaya-schetka-healthywhite-nh-3400r"><span class="title">завивка волос утюжком Электрическая зубная щетка HealthyWhite НХ 6731-02</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li><img src="photos/57f3d365b7fef295495b26d502528449.jpeg" alt="регулировка машинки для стрижки Насадка для щёток OMRON Triple Cleaning Head SB-070" title="регулировка машинки для стрижки Насадка для щёток OMRON Triple Cleaning Head SB-070"><div class="box" page="nasadka-dlya-schetok-omron-triple-cleaning-head-sb-300r"><span class="title">регулировка машинки для стрижки Насадка для щёток OMRON Triple Cleaning Head SB-070</span><p>от <span class="price">300</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zerkalo-beurer-bs-kosmeticheskoe-1250r.php", 0, -4); if (file_exists("comments/zerkalo-beurer-bs-kosmeticheskoe-1250r.php")) require_once "comments/zerkalo-beurer-bs-kosmeticheskoe-1250r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zerkalo-beurer-bs-kosmeticheskoe-1250r.php" method="post" onsubmit="return checkForm(this)">
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