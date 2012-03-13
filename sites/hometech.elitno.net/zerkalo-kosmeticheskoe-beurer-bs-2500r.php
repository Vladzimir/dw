<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("zerkalo-kosmeticheskoe-beurer-bs-2500r.php","девушка пришла на массаж");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("zerkalo-kosmeticheskoe-beurer-bs-2500r.php", $nick, $comment);
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
		<title>девушка пришла на массаж Зеркало косметическое Beurer BS70  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="девушка пришла на массаж, боковое зеркало на тойоту, авторы кривого зеркала, таро зеркало судьбы, триммер champion, лифтинг массаж, массаж 2 года, зеркало стальное, дарсонваль купить минск, завивка волос отзывы, накладки на зеркала 2110, индийский массаж, кузя заколдованное зеркало, электронные весы дешево,  заточка ножей машинки для стрижки">
		<meta name="description" content="девушка пришла на массаж Настольное косметическое зеркало Beurer идеально для нанесения макияжа и соверше...">
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
						<a class="photo" href="photos/4cce361b40cf14037f52cd99cec2d14c.jpeg" title="девушка пришла на массаж Зеркало косметическое Beurer BS70"><img src="photos/4cce361b40cf14037f52cd99cec2d14c.jpeg" alt="девушка пришла на массаж Зеркало косметическое Beurer BS70" title="девушка пришла на массаж Зеркало косметическое Beurer BS70 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/nasadka-nosovaya-dlya-karat-de-darsonval-300r.php"><img src="photos/b6bb344823584f3fea6f0061dd2edab6.jpeg" alt="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль" title="боковое зеркало на тойоту Насадка носовая для КАРАТ ДЕ-212 Дарсонваль"></a><h2>Насадка носовая для КАРАТ ДЕ-212 Дарсонваль</h2></li>
							<li><a href="http://hometech.elitno.net/balzam-dlya-irrigatora-donfeel-kompleksnaya-zaschita-ezhednevnyy-uhod-180r.php"><img src="photos/2e502c7a468088eb3eb54a35696bc7db.jpeg" alt="авторы кривого зеркала Бальзам для ирригатора DONFEEL Комплексная защита. Ежедневный уход" title="авторы кривого зеркала Бальзам для ирригатора DONFEEL Комплексная защита. Ежедневный уход"></a><h2>Бальзам для ирригатора DONFEEL Комплексная защита. Ежедневный уход</h2></li>
							<li><a href="http://hometech.elitno.net/irrigator-polosti-rta-waterpik-wp-2700r.php"><img src="photos/9f4d1e4a07cba1591e2c0c9fd27f1538.jpeg" alt="таро зеркало судьбы Ирригатор полости рта Waterpik WP-360" title="таро зеркало судьбы Ирригатор полости рта Waterpik WP-360"></a><h2>Ирригатор полости рта Waterpik WP-360</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>девушка пришла на массаж Зеркало косметическое Beurer BS70</h1>
						<div class="tb"><p>Цена: от <span class="price">2500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_15527.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Настольное косметическое зеркало Beurer идеально для нанесения макияжа и совершения различных косметических процедур. Оно имеет две зеркальные поверхности, одна из которых с пятикратным увеличением. Модель изготовлена с высококачественным покрытием, снабжено светодиодной подсветкой, питается от сети. Практичное приобретение для Вашего комфорта.</p><p><b>Характеристики:</b></p><ul type=disc><li>С высококачественным покрытием; <li>Со светодиодной подсветкой; <li>2 зеркальные поверхности; <li>5-кратное увеличение; <li>Диаметр: 17 см; <li>Питание: от сети.</li></ul><p><b>Производитель:</b> Beurer.</p><p><b>Страна:</b> Германия.</p><p><b>Гарантия:</b> 1 год.</p> девушка пришла на массаж</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/6117c27bb4abbcf9770fbc1a16077f34.jpeg" alt="триммер champion Массажер Beurer MG260 для тела" title="триммер champion Массажер Beurer MG260 для тела"><div class="box"><a href="http://hometech.elitno.net/massazher-beurer-mg-dlya-tela-12500r.php"><h3 class="title">триммер champion Массажер Beurer MG260 для тела</h3><p>от <span class="price">12500</span> руб.</p></a></div></li>
						<li><img src="photos/1cd3b762effe11ede74f59ecb96b91a5.jpeg" alt="лифтинг массаж Массажер для ног Beurer FM 16" title="лифтинг массаж Массажер для ног Beurer FM 16"><div class="box" page="massazher-dlya-nog-beurer-fm-630r"><span class="title">лифтинг массаж Массажер для ног Beurer FM 16</span><p>от <span class="price">630</span> руб.</p></div></li>
						<li><img src="photos/f5800fd3cb018e4ce2e878a7829b57fe.jpeg" alt="массаж 2 года Массажер для ног US Medica Angel Feet" title="массаж 2 года Массажер для ног US Medica Angel Feet"><div class="box" page="massazher-dlya-nog-us-medica-angel-feet-13500r"><span class="title">массаж 2 года Массажер для ног US Medica Angel Feet</span><p>от <span class="price">13500</span> руб.</p></div></li>
						<li><img src="photos/5c6f38767cbe78cc7cf3904289557c01.jpeg" alt="зеркало стальное Гидромассажная ванночка для ног Beurer FB25" title="зеркало стальное Гидромассажная ванночка для ног Beurer FB25"><div class="box" page="gidromassazhnaya-vannochka-dlya-nog-beurer-fb-2650r"><span class="title">зеркало стальное Гидромассажная ванночка для ног Beurer FB25</span><p>от <span class="price">2650</span> руб.</p></div></li>
						<li class="large"><img src="photos/907dcd2af7058aef19fefe857a6583b5.jpeg" alt="дарсонваль купить минск Гидромассажная ванна для ног BaByliss 8033E" title="дарсонваль купить минск Гидромассажная ванна для ног BaByliss 8033E"><div class="box" page="gidromassazhnaya-vanna-dlya-nog-babyliss-e-3050r"><span class="title">дарсонваль купить минск Гидромассажная ванна для ног BaByliss 8033E</span><p>от <span class="price">3050</span> руб.</p></div></li>
						<li class="large"><img src="photos/e017b0d2d9ea317c7c27cd62e8804f5a.jpeg" alt="завивка волос отзывы Массажная накидка BODYKRAFT К 51" title="завивка волос отзывы Массажная накидка BODYKRAFT К 51"><div class="box" page="massazhnaya-nakidka-bodykraft-k-6590r"><span class="title">завивка волос отзывы Массажная накидка BODYKRAFT К 51</span><p>от <span class="price">6590</span> руб.</p></div></li>
						<li class="large"><img src="photos/4a6d7ab9cfe83a738906064801e96855.jpeg" alt="накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S" title="накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S"><div class="box" page="parovaya-sauna-dlya-lica-gezatone-s-1200r"><span class="title">накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/a036b414251fcfbd54d138ec8a643417.jpeg" alt="индийский массаж Машинка для стрижки и подравнивания бороды Gezatone BP101" title="индийский массаж Машинка для стрижки и подравнивания бороды Gezatone BP101"><div class="box" page="mashinka-dlya-strizhki-i-podravnivaniya-borody-gezatone-bp-990r"><span class="title">индийский массаж Машинка для стрижки и подравнивания бороды Gezatone BP101</span><p>от <span class="price">990</span> руб.</p></div></li>
						<li><img src="photos/e1f8df1d0cae6e5bc21336622bf3ba88.jpeg" alt="кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850" title="кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850"><div class="box" page="mashinka-dlya-strizhki-atlanta-atn-450r"><span class="title">кузя заколдованное зеркало Машинка для стрижки Atlanta АТН-850</span><p>от <span class="price">450</span> руб.</p></div></li>
						<li><img src="photos/68c5ed4efd2baf3bd4ba5079f66017fc.jpeg" alt="электронные весы дешево Солярий для лица Efbe-Schott 826" title="электронные весы дешево Солярий для лица Efbe-Schott 826"><div class="box" page="solyariy-dlya-lica-efbeschott-4800r"><span class="title">электронные весы дешево Солярий для лица Efbe-Schott 826</span><p>от <span class="price">4800</span> руб.</p></div></li>
						<li><img src="photos/51e9a6eaf948832c451cdbbf4a286b50.jpeg" alt="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл" title="бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл"><div class="box" page="vosk-dlya-depilyacii-rica-azulenovyy-v-kartridzhe-ml-150r"><span class="title">бумажные полотенца в рулонах Воск для депиляции Rica, азуленовый в картридже 100 мл</span><p>от <span class="price">150</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("zerkalo-kosmeticheskoe-beurer-bs-2500r.php", 0, -4); if (file_exists("comments/zerkalo-kosmeticheskoe-beurer-bs-2500r.php")) require_once "comments/zerkalo-kosmeticheskoe-beurer-bs-2500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="zerkalo-kosmeticheskoe-beurer-bs-2500r.php" method="post" onsubmit="return checkForm(this)">
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