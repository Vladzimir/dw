<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kosmeticheskiy-pincet-beurer-hl-380r.php","правильный антицеллюлитный массаж");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kosmeticheskiy-pincet-beurer-hl-380r.php", $nick, $comment);
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
		<title>правильный антицеллюлитный массаж Косметический пинцет Beurer HL05  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="правильный антицеллюлитный массаж, обучение массажу в москве, техника медового массажа, виды завивки волос фото, зеркало соната, электронное зеркало, массаж саратов, чистое зеркало, бразильское выпрямление волос отзывы, кузя заколдованное зеркало, машинка для стрижки интимных мест, отзывы ирригатор aquajet, массаж в поликлинике, работа администратором в солярии,  ремонт машинок для стрижки">
		<meta name="description" content="правильный антицеллюлитный массаж Косметический пинцет Beurer HL05 предназначен для удаления нежелательных волоско...">
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
						<a class="photo" href="photos/5fe1b3879e0ad158c0d900c3d9d6ac85.jpeg" title="правильный антицеллюлитный массаж Косметический пинцет Beurer HL05"><img src="photos/5fe1b3879e0ad158c0d900c3d9d6ac85.jpeg" alt="правильный антицеллюлитный массаж Косметический пинцет Beurer HL05" title="правильный антицеллюлитный массаж Косметический пинцет Beurer HL05 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/zerkalo-kosmeticheskoe-beurer-bs-2500r.php"><img src="photos/4cce361b40cf14037f52cd99cec2d14c.jpeg" alt="обучение массажу в москве Зеркало косметическое Beurer BS70" title="обучение массажу в москве Зеркало косметическое Beurer BS70"></a><h2>Зеркало косметическое Beurer BS70</h2></li>
							<li><a href="http://hometech.elitno.net/gel-dlya-domashnego-uhoda-ftorida-olova-home-care-540r.php"><img src="photos/ca3cac97732e962cf09778cd2b8d779d.jpeg" alt="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care." title="техника медового массажа Гель для домашнего ухода. 0,4 % фторида олова. Home care."></a><h2>Гель для домашнего ухода. 0,4 % фторида олова. Home care.</h2></li>
							<li><a href="http://hometech.elitno.net/irrigator-polosti-rta-bremed-bd-2300r.php"><img src="photos/bd4f4a0171189fffb9c852e095d9e936.jpeg" alt="виды завивки волос фото Ирригатор полости рта Bremed BD 7200" title="виды завивки волос фото Ирригатор полости рта Bremed BD 7200"></a><h2>Ирригатор полости рта Bremed BD 7200</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>правильный антицеллюлитный массаж Косметический пинцет Beurer HL05</h1>
						<div class="tb"><p>Цена: от <span class="price">380</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_8937.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Косметический пинцет </b><b>Beurer </b><b>HL05</b> предназначен для удаления нежелательных волосков и заноз. Им очень приятно и удобно работать, благодаря яркой светодиодной подсветке и небольшому встроенному зеркалу. Модель обладает оригинальным дизайном, удобной конструкцией и высоким качеством исполнения. Пинцет хранится в стильном компактном футляре, который без труда поместится даже в самой маленькой женской сумочке. Батарейки для устройства идут в комплекте.</p><p><b>Характеристики:</b></p><ul type=disc><li>Предназначен для удаления волосков и заноз; <li>Яркая светодиодная подсветка; <li>Встроенное зеркало; <li>Компактный футляр для хранения; <li>Поместится даже в маленькой сумочке; <li>Батарейки в комплекте; <li>Размеры: 9,5х2,7 см; <li>Вес: 28 г.</li></ul><p><b></b></p><p><b>Производитель:</b> Beurer.</p><p><b>Страна: </b>Германия.</p><p><b>Гарантия:</b> 1 год.</p> правильный антицеллюлитный массаж</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/8599b1c1b0dc418f3853c3b1676d22a5.jpeg" alt="зеркало соната Массажер Супербол" title="зеркало соната Массажер Супербол"><div class="box" page="massazher-superbol-600r"><span class="title">зеркало соната Массажер Супербол</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/e3a813514433641f393edfdb0982bd86.jpeg" alt="электронное зеркало Массажер для тела Beurer MG80" title="электронное зеркало Массажер для тела Beurer MG80"><div class="box" page="massazher-dlya-tela-beurer-mg-2550r"><span class="title">электронное зеркало Массажер для тела Beurer MG80</span><p>от <span class="price">2550</span> руб.</p></div></li>
						<li><img src="photos/04903c082d5df734adcc169f980fc2f0.jpeg" alt="массаж саратов Прибор для лечения болей в спине Backlife" title="массаж саратов Прибор для лечения болей в спине Backlife"><div class="box" page="pribor-dlya-lecheniya-boley-v-spine-backlife-9000r"><span class="title">массаж саратов Прибор для лечения болей в спине Backlife</span><p>от <span class="price">9000</span> руб.</p></div></li>
						<li><img src="photos/162e8aba5b7c2b6e04d42b21cc7de697.jpeg" alt="чистое зеркало Массажер Beurer MG130 для шеи" title="чистое зеркало Массажер Beurer MG130 для шеи"><div class="box" page="massazher-beurer-mg-dlya-shei-3200r"><span class="title">чистое зеркало Массажер Beurer MG130 для шеи</span><p>от <span class="price">3200</span> руб.</p></div></li>
						<li class="large"><img src="photos/b0a6b1ca9fba7303a8eb561892d4f43d.jpeg" alt="бразильское выпрямление волос отзывы Машинка для стрижки  Atlanta АТН-841" title="бразильское выпрямление волос отзывы Машинка для стрижки  Atlanta АТН-841"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-590r"><span class="title">бразильское выпрямление волос отзывы Машинка для стрижки  Atlanta АТН-841</span><p>от <span class="price">590</span> руб.</p></div></li>
						<li class="large"><img src="photos/e1f8df1d0cae6e5bc21336622bf3ba88.jpeg" alt="кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850" title="кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-450r"><span class="title">кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li class="large"><img src="photos/042e8c83842b5051a47ae5ba07dd8b37.jpeg" alt="машинка для стрижки интимных мест Триммер Beauty Hair Trimmer" title="машинка для стрижки интимных мест Триммер Beauty Hair Trimmer"><div class="box" page="trimmer-beauty-hair-trimmer-200r"><span class="title">машинка для стрижки интимных мест Триммер Beauty Hair Trimmer</span><p>от <span class="price">200</span> руб.</p></div></li>
						<li><img src="photos/bb80268e8fc17e3b5eba4b672a7d7b58.jpeg" alt="отзывы ирригатор aquajet Фен Valera Swiss Nano 6100 Light Avant" title="отзывы ирригатор aquajet Фен Valera Swiss Nano 6100 Light Avant"><div class="box" page="fen-valera-swiss-nano-light-avant-2880r"><span class="title">отзывы ирригатор aquajet Фен Valera Swiss Nano 6100 Light Avant</span><p>от <span class="price">2880</span> руб.</p></div></li>
						<li><img src="photos/5d0c7a567b016f4e3ff09ccc2536795c.jpeg" alt="массаж в поликлинике Фен Atlanta АТН-884" title="массаж в поликлинике Фен Atlanta АТН-884"><div class="box" page="fen-atlanta-atn-390r"><span class="title">массаж в поликлинике Фен Atlanta АТН-884</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li><img src="photos/2759455ed639692131a50c9cd34b38e6.jpeg" alt="работа администратором в солярии Зубная щетка звуковая Omron Sonic Style 458 красная" title="работа администратором в солярии Зубная щетка звуковая Omron Sonic Style 458 красная"><div class="box" page="zubnaya-schetka-zvukovaya-omron-sonic-style-krasnaya-4500r"><span class="title">работа администратором в солярии Зубная щетка звуковая Omron Sonic Style 458 красная</span><p>от <span class="price">4500</span> руб.</p></div></li>
						<li><img src="photos/57f3d365b7fef295495b26d502528449.jpeg" alt="регулировка машинки для стрижки Насадка для щёток OMRON Triple Cleaning Head SB-070" title="регулировка машинки для стрижки Насадка для щёток OMRON Triple Cleaning Head SB-070"><div class="box" page="nasadka-dlya-schetok-omron-triple-cleaning-head-sb-300r"><span class="title">регулировка машинки для стрижки Насадка для щёток OMRON Triple Cleaning Head SB-070</span><p>от <span class="price">300</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kosmeticheskiy-pincet-beurer-hl-380r.php", 0, -4); if (file_exists("comments/kosmeticheskiy-pincet-beurer-hl-380r.php")) require_once "comments/kosmeticheskiy-pincet-beurer-hl-380r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kosmeticheskiy-pincet-beurer-hl-380r.php" method="post" onsubmit="return checkForm(this)">
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