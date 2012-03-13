<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazhnaya-podushka-usmedica-apple-smp-4500r.php","медовый массаж для похудения");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazhnaya-podushka-usmedica-apple-smp-4500r.php", $nick, $comment);
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
		<title>медовый массаж для похудения Массажная подушка US-Medica Apple SMP-19  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="медовый массаж для похудения, лосьон для для солярия, фен хуан дань цун, камера в зеркале, стихи на фене, солярий для мужчин, зеркало туарег, весы электронные ювелирные, лукьяненко зеркала, зеркало задней двери, зеркало заднего вида 2110, весы порционные электронные, голая в зеркале, дарсонваль противопоказания,  можно в солярий кормящей маме">
		<meta name="description" content="медовый массаж для похудения Массажная подушка US-Medica Apple – это удобный и компактный массажер для шеи, п...">
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
						<a class="photo" href="photos/e30becce6238c35820065daabf81bee7.jpeg" title="медовый массаж для похудения Массажная подушка US-Medica Apple SMP-19"><img src="photos/e30becce6238c35820065daabf81bee7.jpeg" alt="медовый массаж для похудения Массажная подушка US-Medica Apple SMP-19" title="медовый массаж для похудения Массажная подушка US-Medica Apple SMP-19 -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vypryamitel-mateca-m-besprovodnoy-2400r.php"><img src="photos/54daa8c422694960a4b932dac99e46ae.jpeg" alt="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной" title="лосьон для для солярия Выпрямитель Mateca M 769 беспроводной"></a><h2>Выпрямитель Mateca M 769 беспроводной</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-es-3030r.php"><img src="photos/ed07bb00209565173c6a467ccac26ddc.jpeg" alt="фен хуан дань цун Выпрямитель для волос Braun ES2" title="фен хуан дань цун Выпрямитель для волос Braun ES2"></a><h2>Выпрямитель для волос Braun ES2</h2></li>
							<li><a href="http://hometech.elitno.net/vypryamitel-dlya-volos-braun-esc-3290r.php"><img src="photos/df863701f3cd17b55cc8ae2e380269e1.jpeg" alt="камера в зеркале Выпрямитель для волос Braun ES3-C" title="камера в зеркале Выпрямитель для волос Braun ES3-C"></a><h2>Выпрямитель для волос Braun ES3-C</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>медовый массаж для похудения Массажная подушка US-Medica Apple SMP-19</h1>
						<div class="tb"><p>Цена: от <span class="price">4500</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_13592.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Массажная подушка </b><b>US-</b><b>Medica </b><b>Apple</b> – это удобный и компактный массажер для шеи, поясничного и плечевого отделов. Эта вещь незаменима для снятия усталости, стресса и напряжения. Особенно полезна <b>подушка </b><b>US-</b><b>Medica </b><b>Apple</b> тем, кто ведет неподвижный образ жизни, у кого сидячая работа. Благодаря эффективному массажу, в организме улучшается кровообращение, в клетки поступает больше кислорода, Вы чувствуете прилив сил, энергии и хорошего настроения. </p><p><b>Характеристики</b>:</p><ul type=disc><li>Разминающий массаж – имитация рук массажиста; <li>Можно использовать дома, в офисе, в автомобиле; <li>Работает как от обычной розетки, так и от прикуривателя; <li>4 массажных ролика; <li>2 направления движения массажных роликов; <li>Удобное управление; <li>Режим прогревания.</li></ul><p><b>Производитель</b>: US Medica LLC</p><p><b>Страна</b>: США</p> медовый массаж для похудения</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/c13cfae2d70d4aeb7439f115424821b8.jpeg" alt="стихи на фене Щипцы для выпрямления волос Vitesse VS-906" title="стихи на фене Щипцы для выпрямления волос Vitesse VS-906"><div class="box"><a href="http://hometech.elitno.net/schipcy-dlya-vypryamleniya-volos-vitesse-vs-850r.php"><h3 class="title">стихи на фене Щипцы для выпрямления волос Vitesse VS-906</h3><p>от <span class="price">850</span> руб.</p></a></div></li>
						<li><img src="photos/e2ac51ffcae3a37ef4e6be1787c2bf43.jpeg" alt="солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль" title="солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль"><div class="box" page="nasadka-rektalnaya-dlya-karat-de-darsonval-300r"><span class="title">солярий для мужчин Насадка ректальная для КАРАТ ДЕ-212 Дарсонваль</span><p>от <span class="price">300</span> руб.</p></div></li>
						<li><img src="photos/1bc9774e2ae258c55927e4dda6fdf2e1.jpeg" alt="зеркало туарег Donfeel Бальзам для полости рта &quot;Укрепление и реминерализация зубной эмали&quot;" title="зеркало туарег Donfeel Бальзам для полости рта &quot;Укрепление и реминерализация зубной эмали&quot;"><div class="box" page="donfeel-balzam-dlya-polosti-rta-quotukreplenie-i-remineralizaciya-zubnoy-emaliquot-195r"><span class="title">зеркало туарег Donfeel Бальзам для полости рта &quot;Укрепление и реминерализация зубной эмали&quot;</span><p>от <span class="price">195</span> руб.</p></div></li>
						<li><img src="photos/b22e40d494cd6893112bef0e9fe9ab49.jpeg" alt="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt" title="весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt"><div class="box" page="termopoyas-vulkan-vulkan-belt-350r"><span class="title">весы электронные ювелирные Термопояс ВУЛКАН  VULKAN Belt</span><p>от <span class="price">350</span> руб.</p></div></li>
						<li class="large"><img src="photos/988207ea3c9688d138379e5f40a3f196.jpeg" alt="лукьяненко зеркала Стационарный массажный стол US Medica Atlant" title="лукьяненко зеркала Стационарный массажный стол US Medica Atlant"><div class="box" page="stacionarnyy-massazhnyy-stol-us-medica-atlant-37000r"><span class="title">лукьяненко зеркала Стационарный массажный стол US Medica Atlant</span><p>от <span class="price">37000</span> руб.</p></div></li>
						<li class="large"><img src="photos/75cde016b01871ff8d9976da31b77fd1.jpeg" alt="зеркало задней двери Массажер ZENET TL-MHT-C" title="зеркало задней двери Массажер ZENET TL-MHT-C"><div class="box" page="massazher-zenet-tlmhtc-2050r"><span class="title">зеркало задней двери Массажер ZENET TL-MHT-C</span><p>от <span class="price">2050</span> руб.</p></div></li>
						<li class="large"><img src="photos/efecfdd903b36bfb57ecf33e62da8ced.jpeg" alt="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E" title="зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E"><div class="box" page="vibromassazher-clear-fit-extra-beauty-cf-e-9490r"><span class="title">зеркало заднего вида 2110 Вибромассажер Clear Fit Extra Beauty CF 135 E</span><p>от <span class="price">9490</span> руб.</p></div></li>
						<li><img src="photos/bf89764b2aa6c696f3c1950d65523b3a.jpeg" alt="весы порционные электронные Массажер Beurer MG220 для тела" title="весы порционные электронные Массажер Beurer MG220 для тела"><div class="box" page="massazher-beurer-mg-dlya-tela-8200r"><span class="title">весы порционные электронные Массажер Beurer MG220 для тела</span><p>от <span class="price">8200</span> руб.</p></div></li>
						<li><img src="photos/0247c938b69c64f973b5b1fe26680c59.jpeg" alt="голая в зеркале Массажер для ухода за кожей лица Gezatone m708" title="голая в зеркале Массажер для ухода за кожей лица Gezatone m708"><div class="box" page="massazher-dlya-uhoda-za-kozhey-lica-gezatone-m-5000r"><span class="title">голая в зеркале Массажер для ухода за кожей лица Gezatone m708</span><p>от <span class="price">5000</span> руб.</p></div></li>
						<li><img src="photos/935fc905a1cb4968deda57e9f3d264e8.jpeg" alt="дарсонваль противопоказания Машинка для стрижки волос и бороды Babyliss E930XE" title="дарсонваль противопоказания Машинка для стрижки волос и бороды Babyliss E930XE"><div class="box" page="mashinka-dlya-strizhki-volos-i-borody-babyliss-exe-1890r"><span class="title">дарсонваль противопоказания Машинка для стрижки волос и бороды Babyliss E930XE</span><p>от <span class="price">1890</span> руб.</p></div></li>
						<li><img src="photos/be5252022170b85ea15c275b961b75f2.jpeg" alt="амфетамин последствия Фен Valera Swiss Nano 6000RC Rotocord" title="амфетамин последствия Фен Valera Swiss Nano 6000RC Rotocord"><div class="box" page="fen-valera-swiss-nano-rc-rotocord-2960r"><span class="title">амфетамин последствия Фен Valera Swiss Nano 6000RC Rotocord</span><p>от <span class="price">2960</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazhnaya-podushka-usmedica-apple-smp-4500r.php", 0, -4); if (file_exists("comments/massazhnaya-podushka-usmedica-apple-smp-4500r.php")) require_once "comments/massazhnaya-podushka-usmedica-apple-smp-4500r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazhnaya-podushka-usmedica-apple-smp-4500r.php" method="post" onsubmit="return checkForm(this)">
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