<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-dlya-spiny-beurer-mg-12000r.php","солярий со скидкой");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-dlya-spiny-beurer-mg-12000r.php", $nick, $comment);
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
		<title>солярий со скидкой Массажер для спины Beurer MG 230  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="солярий со скидкой, косметическое зеркало купить, вакансии маникюр педикюр, триммер для бритья, гадание на зеркале отзывы, расческа триммер, массаж в хабаровске, сайбер зеркало, каталог зеркал, зеркало задней двери, фен самара, бумажные полотенца в рулонах, куплю зеркало в ванную, массаж скрытая смотреть,  купить триммер электрический">
		<meta name="description" content="солярий со скидкой Вы кладете массажер на кровать, ложитесь и расслабляется. Приятный массаж спины ...">
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
						<a class="photo" href="photos/109ab999609bcd7a247d413a4e6a9ec7.jpeg" title="солярий со скидкой Массажер для спины Beurer MG 230"><img src="photos/109ab999609bcd7a247d413a4e6a9ec7.jpeg" alt="солярий со скидкой Массажер для спины Beurer MG 230" title="солярий со скидкой Массажер для спины Beurer MG 230 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-ps-2100r.php"><img src="photos/d9264ad16a0de4ef44c572b9c1a57a33.jpeg" alt="косметическое зеркало купить Весы электронные напольные Beurer PS24" title="косметическое зеркало купить Весы электронные напольные Beurer PS24"></a><h2>Весы электронные напольные Beurer PS24</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-bmi-2600r.php"><img src="photos/09cdbe94dd4282881ebf10408413f6e1.jpeg" alt="вакансии маникюр педикюр Весы электронные напольные Beurer GS49 BMI" title="вакансии маникюр педикюр Весы электронные напольные Beurer GS49 BMI"></a><h2>Весы электронные напольные Beurer GS49 BMI</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-napolnye-maxima-ms-990r.php"><img src="photos/36e8e5437c77b529d6c4c22e7845aa5f.jpeg" alt="триммер для бритья Весы напольные Maxima MS-017" title="триммер для бритья Весы напольные Maxima MS-017"></a><h2>Весы напольные Maxima MS-017</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>солярий со скидкой Массажер для спины Beurer MG 230</h1>
						<div class="tb"><p>Цена: от <span class="price">12000</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1517.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Вы кладете массажер на кровать, ложитесь и расслабляется. Приятный массаж спины осуществляют четыре массажные головки, которые имитируют давящие и разминающие движения. Работа накидки осуществляется по методике точеного древневосточного массажа шиацу. Вы можете выбрать область интенсивного воздействия на спину, а также включить опцию подогрева. Таким образом<strong> массажер Beurer MG 230 </strong>помогает не только расслабиться и получить свою долю удовольствия, но и служит прекрасным лечебно-профилактическим средством.</p><p><b></b></p><p><b>Особенности:</b></p><p><b></b></p><ul type=disc><li>Выбор области спины для массажа <li>Точечный и продольный массаж <li>Функция подогрева <li>4 массажные головки <li>Автоматическое отключение через 15 мин <li>Съемный чехол и подушка для шеи <li>Массажер складывается в форму кейса с ручкой для переноски</li></ul><p><b>Технические характеристики:</b></p><p><b></b></p><ul type=disc><li>Мощность: 60 Вт <li>Вес: 11 кг</li></ul><p><b>Производитель:</b> Beurer (Германия)</p><p><b>Гарантия: </b>2 года</p> солярий со скидкой</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/e1b0e790950b801f1a1ef7304886b7ad.jpeg" alt="гадание на зеркале отзывы Весы бытовые Tanita HS-302" title="гадание на зеркале отзывы Весы бытовые Tanita HS-302"><div class="box"><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hs-2300r.php"><h3 class="title">гадание на зеркале отзывы Весы бытовые Tanita HS-302</h3><p>от <span class="price">2300</span> руб.</p></a></div></li>
						<li><img src="photos/6ae208b49a66164eadf1ef675193d7aa.jpeg" alt="расческа триммер Миостимулятор Omron E2 Elite" title="расческа триммер Миостимулятор Omron E2 Elite"><div class="box" page="miostimulyator-omron-e-elite-2810r"><span class="title">расческа триммер Миостимулятор Omron E2 Elite</span><p>от <span class="price">2810</span> руб.</p></div></li>
						<li><img src="photos/998a84ed0d8ea6a3195b7d8a076be01d.jpeg" alt="массаж в хабаровске Массажный матрас FitStudio" title="массаж в хабаровске Массажный матрас FitStudio"><div class="box" page="massazhnyy-matras-fitstudio-2490r"><span class="title">массаж в хабаровске Массажный матрас FitStudio</span><p>от <span class="price">2490</span> руб.</p></div></li>
						<li><img src="photos/be181278ce9e9fb11b74a0b43f3149c0.jpeg" alt="сайбер зеркало Гидромассажер для ванны Montiss WBS6230M (эффект джакузи) с функцией озонирования" title="сайбер зеркало Гидромассажер для ванны Montiss WBS6230M (эффект джакузи) с функцией озонирования"><div class="box" page="gidromassazher-dlya-vanny-montiss-wbsm-effekt-dzhakuzi-s-funkciey-ozonirovaniya-3480r"><span class="title">сайбер зеркало Гидромассажер для ванны Montiss WBS6230M (эффект джакузи) с функцией озонирования</span><p>от <span class="price">3480</span> руб.</p></div></li>
						<li class="large"><img src="photos/2bafeeb3a10bb6c208d12092d2b70718.jpeg" alt="каталог зеркал Массажер ZENET TL-MHT-A" title="каталог зеркал Массажер ZENET TL-MHT-A"><div class="box" page="massazher-zenet-tlmhta-1850r"><span class="title">каталог зеркал Массажер ZENET TL-MHT-A</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/75cde016b01871ff8d9976da31b77fd1.jpeg" alt="зеркало задней двери Массажер ZENET TL-MHT-C" title="зеркало задней двери Массажер ZENET TL-MHT-C"><div class="box" page="massazher-zenet-tlmhtc-2050r"><span class="title">зеркало задней двери Массажер ZENET TL-MHT-C</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li class="large"><img src="photos/9294f52350ef235ecf04b9e5bd203c2c.jpeg" alt="фен самара Массажер для лица c функцией брашинга Gezatone AMG106 1301101" title="фен самара Массажер для лица c функцией брашинга Gezatone AMG106 1301101"><div class="box" page="massazher-dlya-lica-c-funkciey-brashinga-gezatone-amg-600r"><span class="title">фен самара Массажер для лица c функцией брашинга Gezatone AMG106 1301101</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/51e9a6eaf948832c451cdbbf4a286b50.jpeg" alt="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл" title="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r"><span class="title">бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
						<li><img src="photos/d8f63990242e9c9f3d5c4cfc322b0bcb.jpeg" alt="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции" title="куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции"><div class="box" page="beurer-hl-pribor-svetovoy-epilyacii-18500r"><span class="title">куплю зеркало в ванную Beurer HL100 Прибор световой эпиляции</span><p>от <span class="price">18500</span> руб.</p></div></li>
						<li><img src="photos/ce51f4efb2afc504cf5b3a55b1bc269e.jpeg" alt="массаж скрытая смотреть Триммер BaByliss E830XE" title="массаж скрытая смотреть Триммер BaByliss E830XE"><div class="box" page="trimmer-babyliss-exe-1790r"><span class="title">массаж скрытая смотреть Триммер BaByliss E830XE</span><p>от <span class="price">1790</span> руб.</p></div></li>
						<li><img src="photos/b4125ac25898fc0a0ddba303502b0286.jpeg" alt="электронные весы bosch Фен-щетка Binatone HAS-450 Purple" title="электронные весы bosch Фен-щетка Binatone HAS-450 Purple"><div class="box" page="fenschetka-binatone-has-purple-600r"><span class="title">электронные весы bosch Фен-щетка Binatone HAS-450 Purple</span><p>от <span class="price">600</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-dlya-spiny-beurer-mg-12000r.php", 0, -4); if (file_exists("comments/massazher-dlya-spiny-beurer-mg-12000r.php")) require_once "comments/massazher-dlya-spiny-beurer-mg-12000r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-dlya-spiny-beurer-mg-12000r.php" method="post" onsubmit="return checkForm(this)">
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