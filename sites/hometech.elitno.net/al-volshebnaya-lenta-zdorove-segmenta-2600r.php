<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("al-volshebnaya-lenta-zdorove-segmenta-2600r.php","декорирование зеркала");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("al-volshebnaya-lenta-zdorove-segmenta-2600r.php", $nick, $comment);
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
		<title>декорирование зеркала АЛ Волшебная  Лента Здоровье (3 сегмента)  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="декорирование зеркала, утреннее солнце массаж, соблазнил массажем, шкафчик для ванной с зеркалом, массаж лица соболь, массаж саратов, сетчатая электробритва, массаж русской девушки, каталог зеркал, купить солярий вертикальный, мебельное зеркало, электробритва харьков, общий массаж тела, машинка для стрижки ровента,  зеркала мебель">
		<meta name="description" content="декорирование зеркала Хотите почувствовать себя заново родившимся? Снять усталость, восстановить силы?...">
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
						<a class="photo" href="photos/a3fdb4f3f35476641171d44c065fe679.jpeg" title="декорирование зеркала АЛ Волшебная  Лента Здоровье (3 сегмента)"><img src="photos/a3fdb4f3f35476641171d44c065fe679.jpeg" alt="декорирование зеркала АЛ Волшебная  Лента Здоровье (3 сегмента)" title="декорирование зеркала АЛ Волшебная  Лента Здоровье (3 сегмента) -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/nasadka-rascheska-dlya-karat-de-darsonval-300r.php"><img src="photos/3b1d3a2501150f3525f392072fa66671.jpeg" alt="утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль" title="утреннее солнце массаж Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка Расческа для КАРАТ ДЕ-212 Дарсонваль</h2></li>
							<li><a href="http://hometech.elitno.net/zerkalo-beurer-bs-kosmeticheskoe-1900r.php"><img src="photos/ed0c34c7ee29ed14f07ab5b9a731bbc5.jpeg" alt="соблазнил массажем Зеркало Beurer BS 59 косметическое" title="соблазнил массажем Зеркало Beurer BS 59 косметическое"></a><h2>Зеркало Beurer BS 59 косметическое</h2></li>
							<li><a href="http://hometech.elitno.net/dental-resources-neytralnaya-ftoristaya-zubnaya-pasta-neutral-rx-540r.php"><img src="photos/547f3143a4cadabab99b7c9561803f70.jpeg" alt="шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX." title="шкафчик для ванной с зеркалом Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX."></a><h2>Dental Resources. 1,1 % нейтральная фтористая зубная паста. Neutral RX.</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>декорирование зеркала АЛ Волшебная  Лента Здоровье (3 сегмента)</h1>
						<div class="tb"><p>Цена: от <span class="price">2600</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1965.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Хотите почувствовать себя заново родившимся? Снять усталость, восстановить силы? <strong>Аппликатор Волшебная лента </strong>вполне отвечает своему названию, поскольку способен творить настоящие чудеса. Вы просто накладываете ленту вдоль всего туловища и начинаете оздоравливать организм. Секрет действия устройства кроется в целебных свойствах аккупунктурного массажа.</p><p>Лента представляет собой полоски резиновых жгутов, в которые впаяны тысячи крошечных иголок. Состав иголок включает в себя медь, железо, цинк, никель, серебро.</p><p>За счет удобной формы Волшебную ленту можно накладывать как местно, на определенный участок тела, так и обмотать вокруг всего туловища.</p><p>Этот своеобразный массажер вы можете приложить к болевому очагу в качестве обезболивающего средства. <strong>Волшебная лента </strong>используется в мануальной терапии. Она может притушить боль в позвоночнике и суставах. Аппликатор ускоряет восстановление после травм, операций, дает заряд новой энергии, повышает работоспособность.</p><p><b>Технические характеристики:</b></p><ul type=disc><li>Состав: медь, железо, цинк, никель, серебро (12,5 %), резина медицинского назначения <li>Ширина однополосной ленты: 22 мм <li>Ширина двуполостной ленты: 44 мм <li>3 сегмента <li>Длина сегмента ленты: 45 см <li>Длина ленты: 135 мм <li>Шаг игл: 4,3 мм</li></ul><p><b>Производитель:</b> ООО Ляпко (Украина)</p> декорирование зеркала</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a96ae3566c75021eb37743cc8caf6ff5.jpeg" alt="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5" title="массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5"><div class="box"><a href="http://hometech.elitno.net/applikator-lyapko-valik-licevoy-720r.php"><h3 class="title">массаж лица соболь Аппликатор Ляпко Валик Лицевой 3,5</h3><p>от <span class="price">720</span> руб.</p></a></div></li>
						<li><img src="photos/04903c082d5df734adcc169f980fc2f0.jpeg" alt="массаж саратов Прибор для лечения болей в спине Backlife" title="массаж саратов Прибор для лечения болей в спине Backlife"><div class="box" page="pribor-dlya-lecheniya-boley-v-spine-backlife-9000r"><span class="title">массаж саратов Прибор для лечения болей в спине Backlife</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li><img src="photos/9e7afdd39e338260a0720575049d5039.jpeg" alt="сетчатая электробритва Массажер для ухода за телом Дельфин Gezatone AMG 6093 1301043" title="сетчатая электробритва Массажер для ухода за телом Дельфин Gezatone AMG 6093 1301043"><div class="box" page="massazher-dlya-uhoda-za-telom-delfin-gezatone-amg-1600r"><span class="title">сетчатая электробритва Массажер для ухода за телом Дельфин Gezatone AMG 6093 1301043</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/80f522fd41a08647e0c5b4392d78118e.jpeg" alt="массаж русской девушки Массажер для шеи Wrap Neck & Shoulder" title="массаж русской девушки Массажер для шеи Wrap Neck & Shoulder"><div class="box" page="massazher-dlya-shei-wrap-neck-shoulder-2550r"><span class="title">массаж русской девушки Массажер для шеи Wrap Neck & Shoulder</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li class="large"><img src="photos/2bafeeb3a10bb6c208d12092d2b70718.jpeg" alt="каталог зеркал Массажер ZENET TL-MHT-A" title="каталог зеркал Массажер ZENET TL-MHT-A"><div class="box" page="massazher-zenet-tlmhta-1850r"><span class="title">каталог зеркал Массажер ZENET TL-MHT-A</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li class="large"><img src="photos/aca1d35fc1577b5f5c3bf95fe2236e75.jpeg" alt="купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50" title="купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-4950r"><span class="title">купить солярий вертикальный Гидромассажная ванночка для ног Beurer FB50</span><p>от <span class="price">4950</span> руб.</p></div></li>
						<li class="large"><img src="photos/08f3884e56446c62ad73af91ace63c80.jpeg" alt="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20" title="мебельное зеркало Гидромассажная ванночка для ног Beurer FB20"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2350r"><span class="title">мебельное зеркало Гидромассажная ванночка для ног Beurer FB20</span><p>от <span class="price">2350</span> руб.</p></div></li>
						<li><img src="photos/3e07c9c76543509eb7330cd46f97b553.jpeg" alt="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01" title="электробритва харьков Машинка для стрижки волос Valera Absolut 648.01"><div class="box" page="mashinka-dlya-strizhki-volos-valera-absolut-3480r"><span class="title">электробритва харьков Машинка для стрижки волос Valera Absolut 648.01</span><p>от <span class="price">3480</span> руб.</p></div></li>
						<li><img src="photos/2c7a77c230be7b8e97a075b819c83be5.jpeg" alt="общий массаж тела Солярий для лица Efbe-Schott 836" title="общий массаж тела Солярий для лица Efbe-Schott 836"><div class="box" page="solyariy-dlya-lica-efbeschott-5000r"><span class="title">общий массаж тела Солярий для лица Efbe-Schott 836</span><p>от <span class="price">5000</span> руб.</p></div></li>
						<li><img src="photos/d9d4dc3f414993bdfe85b748c627ab41.jpeg" alt="машинка для стрижки ровента Зубная щетка звуковая Omron Sonic Style 458" title="машинка для стрижки ровента Зубная щетка звуковая Omron Sonic Style 458"><div class="box" page="zubnaya-schetka-zvukovaya-omron-sonic-style-4500r"><span class="title">машинка для стрижки ровента Зубная щетка звуковая Omron Sonic Style 458</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/833169d23c220fec90ad222e16ab5963.jpeg" alt="спиральная завивка волос Эпилятор Valera Comfort-epil Set Cordless 650.01" title="спиральная завивка волос Эпилятор Valera Comfort-epil Set Cordless 650.01"><div class="box" page="epilyator-valera-comfortepil-set-cordless-3270r"><span class="title">спиральная завивка волос Эпилятор Valera Comfort-epil Set Cordless 650.01</span><p>от <span class="price">3270</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("al-volshebnaya-lenta-zdorove-segmenta-2600r.php", 0, -4); if (file_exists("comments/al-volshebnaya-lenta-zdorove-segmenta-2600r.php")) require_once "comments/al-volshebnaya-lenta-zdorove-segmenta-2600r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="al-volshebnaya-lenta-zdorove-segmenta-2600r.php" method="post" onsubmit="return checkForm(this)">
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