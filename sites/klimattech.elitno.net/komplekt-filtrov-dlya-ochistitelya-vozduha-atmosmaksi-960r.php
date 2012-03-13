<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-960r.php","кондиционеры волгоград");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-960r.php", $nick, $comment);
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
		<title>кондиционеры волгоград Комплект фильтров для очистителя воздуха Атмос-Макси  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="кондиционеры волгоград, конвектор файлов скачать, вентилятор для процессора, регулировка скорости вентилятора, scarlett инфракрасный обогреватель, бытовые инфракрасные обогреватели, кондиционер ваз приора, очиститель увлажнитель воздуха для дома, купить инфракрасный газовый обогреватель, обороты вентилятора видеокарты, газовые обогреватели гии, промышленные тепловые завесы, конвектор видео для psp, видео конвектор movavi,  хороший вентилятор">
		<meta name="description" content="кондиционеры волгоград Комплект фильтров для очистителя воздуха Атмос-Макси включает в себя фотокаталит...">
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
						<a class="photo" href="photos/ebd821f20caa9cb3fffbcb55a472e7fe.jpeg" title="кондиционеры волгоград Комплект фильтров для очистителя воздуха Атмос-Макси"><img src="photos/ebd821f20caa9cb3fffbcb55a472e7fe.jpeg" alt="кондиционеры волгоград Комплект фильтров для очистителя воздуха Атмос-Макси" title="кондиционеры волгоград Комплект фильтров для очистителя воздуха Атмос-Макси -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-11900r.php"><img src="photos/69516428b1279d869d177dc66914662a.jpeg" alt="конвектор файлов скачать Водонагреватель Timberk SWH FS6 80 H" title="конвектор файлов скачать Водонагреватель Timberk SWH FS6 80 H"></a><h2>Водонагреватель Timberk SWH FS6 80 H</h2></li>
							<li><a href="http://klimattech.elitno.net/timberk-tgh-sm-gazovyy-obogrevatel-3350r.php"><img src="photos/f3246275eec08979f9b2a0c787db4136.jpeg" alt="вентилятор для процессора Timberk TGH 4200 SM1 Газовый обогреватель" title="вентилятор для процессора Timberk TGH 4200 SM1 Газовый обогреватель"></a><h2>Timberk TGH 4200 SM1 Газовый обогреватель</h2></li>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-zenet-nskta-3290r.php"><img src="photos/aab944bccfece59f51b95869a53e055a.jpeg" alt="регулировка скорости вентилятора Карбоновый обогреватель ZENET NSKT-90A" title="регулировка скорости вентилятора Карбоновый обогреватель ZENET NSKT-90A"></a><h2>Карбоновый обогреватель ZENET NSKT-90A</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>кондиционеры волгоград Комплект фильтров для очистителя воздуха Атмос-Макси</h1>
						<div class="tb"><p>Цена: от <span class="price">960</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_4877.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p><b>Комплект фильтров для очистителя воздуха Атмос-Макси </b>включает в себя фотокаталитический, угольный и хлопчатобумажный нано-серебряный фильтр<b>. </b>Используется в очистителях воздуха Атмос-Макси и Атмос-Макси LED.<b> </b>Все фильтры изготовлены из высококачественных материалов, имеют увеличенный срок эксплуатации и устанавливаются в прибор отдельно, что существенно повышает качество очистки воздуха.<b></b></p><p><b></b></p><p><b>Комплект:</b></p><ul><li>Хлопчатобумажный нано-серебряный фильтр; <li>Угольный фильтр; <li>Фотокаталитический нано-фильтр.</li></ul> кондиционеры волгоград</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/760071ee7145929fec75dc82c8e21e40.jpeg" alt="scarlett инфракрасный обогреватель Конвектор электрический Timberk TEC.PS2 LE" title="scarlett инфракрасный обогреватель Конвектор электрический Timberk TEC.PS2 LE"><div class="box" page="konvektor-elektricheskiy-timberk-tecps-le-2250r"><span class="title">scarlett инфракрасный обогреватель Конвектор электрический Timberk TEC.PS2 LE</span><p>от <span class="price">2250</span> руб.</p></div></li>
						<li><img src="photos/7c8bd16774bf9fee3455010ae392ebb1.jpeg" alt="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I" title="бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I"><div class="box" page="radiator-maslyanyy-timberk-tor-bt-i-1950r"><span class="title">бытовые инфракрасные обогреватели Радиатор масляный Timberk TOR 21.1507 BT I</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/5e2e6155fa93a73389d35af4c02cfb37.jpeg" alt="кондиционер ваз приора Цифровой термометр для пластиковых окон RST Comfort link S413" title="кондиционер ваз приора Цифровой термометр для пластиковых окон RST Comfort link S413"><div class="box" page="cifrovoy-termometr-dlya-plastikovyh-okon-rst-comfort-link-s-1195r"><span class="title">кондиционер ваз приора Цифровой термометр для пластиковых окон RST Comfort link S413</span><p>от <span class="price">1195</span> руб.</p></div></li>
						<li><img src="photos/2746ac7c037d59e79673bb047b5379e9.jpeg" alt="очиститель увлажнитель воздуха для дома Обогреватель Бархатный сезон «Котенок 2»" title="очиститель увлажнитель воздуха для дома Обогреватель Бархатный сезон «Котенок 2»"><div class="box" page="obogrevatel-barhatnyy-sezon-«kotenok-»-880r"><span class="title">очиститель увлажнитель воздуха для дома Обогреватель Бархатный сезон «Котенок 2»</span><p>от <span class="price">880</span> руб.</p></div></li>
						<li class="large"><img src="photos/c35fa3f98dfe8950c7663d96b0b841fd.jpeg" alt="купить инфракрасный газовый обогреватель Инфракрасный тепловентилятор Neoclima HH10" title="купить инфракрасный газовый обогреватель Инфракрасный тепловентилятор Neoclima HH10"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-hh-950r"><span class="title">купить инфракрасный газовый обогреватель Инфракрасный тепловентилятор Neoclima HH10</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/2c7942395b1748c90ff5b7a79b70f229.jpeg" alt="обороты вентилятора видеокарты Тепловая пушка Ballu BPH-3.000" title="обороты вентилятора видеокарты Тепловая пушка Ballu BPH-3.000"><div class="box" page="teplovaya-pushka-ballu-bph-3400r"><span class="title">обороты вентилятора видеокарты Тепловая пушка Ballu BPH-3.000</span><p>от <span class="price">3400</span> руб.</p></div></li>
						<li class="large"><img src="photos/792201d3e2f79a8dc6ba14e6ea302138.jpeg" alt="газовые обогреватели гии Климатический комплекс Boneco Air-O-Swiss 2071" title="газовые обогреватели гии Климатический комплекс Boneco Air-O-Swiss 2071"><div class="box" page="klimaticheskiy-kompleks-boneco-airoswiss-18300r"><span class="title">газовые обогреватели гии Климатический комплекс Boneco Air-O-Swiss 2071</span><p>от <span class="price">18300</span> руб.</p></div></li>
						<li><img src="photos/a062675111bea25f0b877b32fa91ef2d.jpeg" alt="промышленные тепловые завесы Очиститель воздуха Boneco P2261" title="промышленные тепловые завесы Очиститель воздуха Boneco P2261"><div class="box" page="ochistitel-vozduha-boneco-p-4200r"><span class="title">промышленные тепловые завесы Очиститель воздуха Boneco P2261</span><p>от <span class="price">4200</span> руб.</p></div></li>
						<li><img src="photos/70b6fc4efe029a501ff466b524513770.jpeg" alt="конвектор видео для psp Увлажнитель воздуха Maxima MHF-3301" title="конвектор видео для psp Увлажнитель воздуха Maxima MHF-3301"><div class="box" page="uvlazhnitel-vozduha-maxima-mhf-1190r"><span class="title">конвектор видео для psp Увлажнитель воздуха Maxima MHF-3301</span><p>от <span class="price">1190</span> руб.</p></div></li>
						<li><img src="photos/344f068a3cddce171f547a26cf89a0f9.jpeg" alt="видео конвектор movavi Мойка воздуха Boneco 1355N" title="видео конвектор movavi Мойка воздуха Boneco 1355N"><div class="box" page="moyka-vozduha-boneco-n-9300r"><span class="title">видео конвектор movavi Мойка воздуха Boneco 1355N</span><p>от <span class="price">9300</span> руб.</p></div></li>
						<li><img src="photos/e76dfeadd933803037b175a3b2975d0d.jpeg" alt="тепловая пушка для натяжных потолков Мойка воздуха с цифровым дисплеем Boneco Air-O-Swiss 2055DR" title="тепловая пушка для натяжных потолков Мойка воздуха с цифровым дисплеем Boneco Air-O-Swiss 2055DR"><div class="box" page="moyka-vozduha-s-cifrovym-displeem-boneco-airoswiss-dr-16500r"><span class="title">тепловая пушка для натяжных потолков Мойка воздуха с цифровым дисплеем Boneco Air-O-Swiss 2055DR</span><p>от <span class="price">16500</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-960r.php", 0, -4); if (file_exists("comments/komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-960r.php")) require_once "comments/komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-960r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="komplekt-filtrov-dlya-ochistitelya-vozduha-atmosmaksi-960r.php" method="post" onsubmit="return checkForm(this)">
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