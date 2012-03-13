<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("mashinka-dlya-strizhki-vitesse-vs-700r.php","триммер для носа и ушей");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("mashinka-dlya-strizhki-vitesse-vs-700r.php", $nick, $comment);
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
		<title>триммер для носа и ушей Машинка для стрижки Vitesse VS-383  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="триммер для носа и ушей, массаж пальцев рук, лосьон для для солярия, ирригатор waterpik отзывы, стихи на фене, зеркала содержание, фен щетка цена, зеркалом блестит река, фен щетка bosch pha, весы электронные настольные, солярий шоколад, накладки на зеркала 2114, полный массаж, накладки на зеркала 2110,  массаж после родов">
		<meta name="description" content="триммер для носа и ушей Профессиональная универсальная машинка для стрижки Vitesse  VS-383 обеспечит отл...">
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
						<a class="photo" href="photos/604fac3d6bc90d1a626b6fb1f84938bc.jpeg" title="триммер для носа и ушей Машинка для стрижки Vitesse VS-383"><img src="photos/604fac3d6bc90d1a626b6fb1f84938bc.jpeg" alt="триммер для носа и ушей Машинка для стрижки Vitesse VS-383" title="триммер для носа и ушей Машинка для стрижки Vitesse VS-383 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/tanita-um-analizator-zhira-1200r.php"><img src="photos/4ecee0d42afb7bc25bfb59b8bf1d1a58.jpeg" alt="массаж пальцев рук Tanita UM-073 Анализатор жира" title="массаж пальцев рук Tanita UM-073 Анализатор жира"></a><h2>Tanita UM-073 Анализатор жира</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-mateca-m-besprovodnoy-2400r.php"><img src="photos/54daa8c422694960a4b932dac99e46ae.jpeg" alt="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной" title="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной"></a><h2>Выпрямитель Mateca M 769 беспроводной</h2></li>
							<li><a href="http://hometech.elitno.net/elektroschipcy-dlya-vypryamleniya-volos-atlanta-atn-400r.php"><img src="photos/136e687ab7caf7ea2792cd39cf43a22a.jpeg" alt="ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839" title="ирригатор waterpik отзывы Электрощипцы для выпрямления волос Atlanta АТН-839"></a><h2>Электрощипцы для выпрямления волос Atlanta АТН-839</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>триммер для носа и ушей Машинка для стрижки Vitesse VS-383</h1>
						<div class="tb"><p>Цена: от <span class="price">700</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_21127.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Профессиональная универсальная машинка для стрижки Vitesse  VS-383 обеспечит отличный результат без лишних усилий с вашей стороны. Машинка  для стрижки Vitesse VS-383 имеет 4 насадки и 5 установок длины, что позволит  выбрать формат стрижки. нужный именно вам. Прибор работает от сети. В комплект  с машинкой для стрижки Vitesse VS-383   входит футляр для хранения и перевозки, щеточка для чистки, масло, петля  для подвешивания и ножницы.</p><p><strong>Характеристики:</strong></p><ul type=\disc\><li>Тип: универсальная;</li><li>Питание: от сети;</li><li>Число установок длины: 5;</li><li>Количество насадок: 4;</li><li>В комплекте: ножницы, футляр для хранения и перевозки, щеточка для чистки, масло, петля для подвешивания;</li></ul><p><strong>Производитель: Франция</strong></p> триммер для носа и ушей</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c13cfae2d70d4aeb7439f115424821b8.jpeg" alt="стихи на фене Щипцы для выпрямления волос Vitesse VS-906" title="стихи на фене Щипцы для выпрямления волос Vitesse VS-906"><div class="box"><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-vitesse-vs-850r.php"><h3 class="title">стихи на фене Щипцы для выпрямления волос Vitesse VS-906</h3><p>от <span class="price">850</span> руб.</p></a></div></li>
						<li><img src="photos/752941af4eaf49d0a8ab980390b78c28.jpeg" alt="зеркала содержание Зеркало  Beurer BS 69 косметическое" title="зеркала содержание Зеркало  Beurer BS 69 косметическое"><div class="box" page="zerkalo-beurer-bs-kosmeticheskoe-2500r"><span class="title">зеркала содержание Зеркало  Beurer BS 69 косметическое</span><p>от <span class="price">2500</span> руб.</p></div></li>
						<li><img src="photos/c27a4d89a2f0dd3ef16052fa67829ba2.jpeg" alt="фен щетка цена Зеркало Beurer BS 29  косметическое" title="фен щетка цена Зеркало Beurer BS 29  косметическое"><div class="box" page="zerkalo-beurer-bs-kosmeticheskoe-600r"><span class="title">фен щетка цена Зеркало Beurer BS 29  косметическое</span><p>от <span class="price">600</span> руб.</p></div></li>
						<li><img src="photos/c31991b00bf6f0f8d0461c8a88e7db13.jpeg" alt="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением" title="зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением"><div class="box" page="zerkalo-dvustoronnee-babyliss-e-s-mi-kratnym-uvelicheniem-3190r"><span class="title">зеркалом блестит река Зеркало двустороннее Babyliss 8438Е с 8-ми кратным увеличением</span><p>от <span class="price">3190</span> руб.</p></div></li>
						<li class="large"><img src="photos/5fa952e080e3e36a9d80c7732a2a4665.png" alt="фен щетка bosch pha Массажное кресло Anatomico Amerigo" title="фен щетка bosch pha Массажное кресло Anatomico Amerigo"><div class="box" page="massazhnoe-kreslo-anatomico-amerigo-114000r"><span class="title">фен щетка bosch pha Массажное кресло Anatomico Amerigo</span><p>от <span class="price">114000</span> руб.</p></div></li>
						<li class="large"><img src="photos/b840670e7655c80242a9697a1d40b297.jpeg" alt="весы электронные настольные Аппликатор Ляпко Спутник 5,8" title="весы электронные настольные Аппликатор Ляпко Спутник 5,8"><div class="box" page="applikator-lyapko-sputnik-330r"><span class="title">весы электронные настольные Аппликатор Ляпко Спутник 5,8</span><p>от <span class="price">330</span> руб.</p></div></li>
						<li class="large"><img src="photos/3f058fca0af13e434cdaba91b5eca059.jpeg" alt="солярий шоколад Шарф массажный NAP Massage Wrap" title="солярий шоколад Шарф массажный NAP Massage Wrap"><div class="box" page="sharf-massazhnyy-nap-massage-wrap-670r"><span class="title">солярий шоколад Шарф массажный NAP Massage Wrap</span><p>от <span class="price">670</span> руб.</p></div></li>
						<li><img src="photos/a98d9154ffd23dc6de7d9ef0755c16c9.jpeg" alt="накладки на зеркала 2114 Массажер ZENET TL-FMQ-D" title="накладки на зеркала 2114 Массажер ZENET TL-FMQ-D"><div class="box" page="massazher-zenet-tlfmqd-11900r"><span class="title">накладки на зеркала 2114 Массажер ZENET TL-FMQ-D</span><p>от <span class="price">11900</span> руб.</p></div></li>
						<li><img src="photos/644518c616a9d636ff9cb53435672d46.jpeg" alt="полный массаж Подушка массажная" title="полный массаж Подушка массажная"><div class="box" page="podushka-massazhnaya-3000r"><span class="title">полный массаж Подушка массажная</span><p>от <span class="price">3000</span> руб.</p></div></li>
						<li><img src="photos/4a6d7ab9cfe83a738906064801e96855.jpeg" alt="накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S" title="накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S"><div class="box" page="parovaya-sauna-dlya-lica-gezatone-s-1200r"><span class="title">накладки на зеркала 2110 Паровая сауна для лица Gezatone 105S</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li><img src="photos/f98698f167b448092a3ab477739f68fd.jpeg" alt="солярий в новосибирске Фен Braun HD710" title="солярий в новосибирске Фен Braun HD710"><div class="box" page="fen-braun-hd-2240r"><span class="title">солярий в новосибирске Фен Braun HD710</span><p>от <span class="price">2240</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("mashinka-dlya-strizhki-vitesse-vs-700r.php", 0, -4); if (file_exists("comments/mashinka-dlya-strizhki-vitesse-vs-700r.php")) require_once "comments/mashinka-dlya-strizhki-vitesse-vs-700r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="mashinka-dlya-strizhki-vitesse-vs-700r.php" method="post" onsubmit="return checkForm(this)">
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