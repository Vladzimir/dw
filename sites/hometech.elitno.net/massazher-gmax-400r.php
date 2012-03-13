<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("massazher-gmax-400r.php","электронные весы для продуктов");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("massazher-gmax-400r.php", $nick, $comment);
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
		<title>электронные весы для продуктов Массажер G-MAX  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="электронные весы для продуктов, солярий купить дешево, солярий челябинск, зеркала torrent, зеркало кто ты сегодня, солярий в твери, массаж коломенская, ирригатор braun, чувственный массаж, дополнительное зеркало, мягкий массаж, подогрев зеркал калина, соблазнил массажем, массаж при гайморите,  машинка для стрижки ровента">
		<meta name="description" content="электронные весы для продуктов Справиться с накопившимся напряжением, убрать жировые отложения, разгладить кожу...">
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
						<a class="photo" href="photos/2b473b1ef7f8b3fad007a0920d670276.jpeg" title="электронные весы для продуктов Массажер G-MAX"><img src="photos/2b473b1ef7f8b3fad007a0920d670276.jpeg" alt="электронные весы для продуктов Массажер G-MAX" title="электронные весы для продуктов Массажер G-MAX -  "></a>
						<ul>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-napolnye-beurer-gs-1500r.php"><img src="photos/46a258cf502663e3d7c0b8854b757ddf.jpeg" alt="солярий купить дешево Весы электронные напольные Beurer GS28" title="солярий купить дешево Весы электронные напольные Beurer GS28"></a><h2>Весы электронные напольные Beurer GS28</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-bytovye-tanita-hd-1000r.php"><img src="photos/f6d7768111f2b2d1a629e5ad58787f64.jpeg" alt="солярий челябинск Весы бытовые Tanita HD-386" title="солярий челябинск Весы бытовые Tanita HD-386"></a><h2>Весы бытовые Tanita HD-386</h2></li>
							<li><a href="http://hometech.elitno.net/vesy-elektronnye-diagnosticheskie-beurer-bf-5900r.php"><img src="photos/680c415f1a8f04e6d0fb6380807493f2.jpeg" alt="зеркала torrent Весы электронные диагностические Beurer BF100" title="зеркала torrent Весы электронные диагностические Beurer BF100"></a><h2>Весы электронные диагностические Beurer BF100</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>электронные весы для продуктов Массажер G-MAX</h1>
						<div class="tb"><p>Цена: от <span class="price">400</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_1156.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Справиться с накопившимся напряжением, убрать жировые отложения, разгладить кожу, усилить кровообращение поможет массажер G-MAX. Действие этого массажера сочетает практически все виды массажа: простой, обхватывающий, щипкообразное поглаживание, вибрирование, разминание, растирание и антицеллюлитный массаж. </p><p>Массажер G-MAX имеет две массажные поверхности, состоящие из четырех колец, которые вращаются вокруг своей оси. Эти поверхности расположены под определенным углом. Таким образом достигается эффект обхвата и подъема кожи и подкожной клетчатки. Как результат действия массажера – очищение кожи от отмерших клеток, придание ей мягкости, эластичности. Ткани насыщаются кислородом, вредные вещества выводятся из организма, появляется ощущение бодрости и обновленности тела.</p><p>С помощью <strong>массажера G-MAX</strong> вы сможете освободить протоки потовых и сальных желез, улучшить кожное дыхание, усилить лимфо- и кровообращение. Кроме этого <strong>G-MAX </strong>предупредит появление целлюлита и может использоваться в качестве обезболивающего средства.</p><p><b>Противопоказания:</b></p><p><b></b></p><ul type=disc><li>высокая температура, острые воспалительные процессы; <li>онкологические заболевания; <li>некоторые заболевания стенки сосудов (аневризмы и др.); <li>нарушения свертываемости крови и повышенная кровоточивость.</li></ul><p><b>Производитель:</b> ООО «Дельта-Терм» (Россия, Москва)</p> электронные весы для продуктов</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/f23e4b3a148ea379394985b1c52b15da.jpeg" alt="зеркало кто ты сегодня Жироанализатор (Определение общего содержания жира) OMRON BF-306" title="зеркало кто ты сегодня Жироанализатор (Определение общего содержания жира) OMRON BF-306"><div class="box"><a href="http://hometech.elitno.net/zhiroanalizator-opredelenie-obschego-soderzhaniya-zhira-omron-bf-3200r.php"><h3 class="title">зеркало кто ты сегодня Жироанализатор (Определение общего содержания жира) OMRON BF-306</h3><p>от <span class="price">3200</span> руб.</p></a></div></li>
						<li><img src="photos/227e997e0d3487f61648f09e43d5fd98.jpeg" alt="солярий в твери Выпрямитель Binatone HS-4180 B White Nacre" title="солярий в твери Выпрямитель Binatone HS-4180 B White Nacre"><div class="box" page="vypryamitel-binatone-hs-b-white-nacre-1100r"><span class="title">солярий в твери Выпрямитель Binatone HS-4180 B White Nacre</span><p>от <span class="price">1100</span> руб.</p></div></li>
						<li><img src="photos/f55d8efc38dd27166eefe179a3e555a4.jpeg" alt="массаж коломенская Зеркало настольное Rosenberg S-2084" title="массаж коломенская Зеркало настольное Rosenberg S-2084"><div class="box" page="zerkalo-nastolnoe-rosenberg-s-890r"><span class="title">массаж коломенская Зеркало настольное Rosenberg S-2084</span><p>от <span class="price">890</span> руб.</p></div></li>
						<li><img src="photos/3025b33574a5012cbf58b0e574fda6d1.jpeg" alt="ирригатор braun Косметический набор Beurer MP05+HL05+BS05" title="ирригатор braun Косметический набор Beurer MP05+HL05+BS05"><div class="box" page="kosmeticheskiy-nabor-beurer-mphlbs-1550r"><span class="title">ирригатор braun Косметический набор Beurer MP05+HL05+BS05</span><p>от <span class="price">1550</span> руб.</p></div></li>
						<li class="large"><img src="photos/c225afb28f1b6e082ea5b6d0dfd8a7ac.jpeg" alt="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)" title="чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)"><div class="box" page="beurer-mp-manikyurnopedikyurnyy-nabor-nasadok-2900r"><span class="title">чувственный массаж Beurer MP61 Маникюрно-педикюрный набор (9 насадок)</span><p>от <span class="price">2900</span> руб.</p></div></li>
						<li class="large"><img src="photos/4d3c7f0a4c5455cbe6d588bf75bcfd09.jpeg" alt="дополнительное зеркало Валик полукруглый US-Medica GREEN L52" title="дополнительное зеркало Валик полукруглый US-Medica GREEN L52"><div class="box" page="valik-polukruglyy-usmedica-green-l-1200r"><span class="title">дополнительное зеркало Валик полукруглый US-Medica GREEN L52</span><p>от <span class="price">1200</span> руб.</p></div></li>
						<li class="large"><img src="photos/582bcb29ca20130c2748b22d513bbded.jpeg" alt="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)" title="мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)"><div class="box" page="poyasmiostimulyator-dvuhkanalnyy-abtronic-x-bez-gelya-1500r"><span class="title">мягкий массаж Пояс-миостимулятор двухканальный AbTronic X2 (без геля)</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li><img src="photos/8524c9a81149ced5afefd960c059f93e.jpeg" alt="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T" title="подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T"><div class="box" page="vibromassazher-clear-fit-top-beauty-cf-t-10490r"><span class="title">подогрев зеркал калина Вибромассажер Clear Fit Top Beauty CF 135 T</span><p>от <span class="price">10490</span> руб.</p></div></li>
						<li><img src="photos/f5a755710fa8038f441e31fb91fe98e3.jpeg" alt="соблазнил массажем Массажер BODYKRAFT M-42" title="соблазнил массажем Массажер BODYKRAFT M-42"><div class="box" page="massazher-bodykraft-m-430r"><span class="title">соблазнил массажем Массажер BODYKRAFT M-42</span><p>от <span class="price">430</span> руб.</p></div></li>
						<li><img src="photos/80e1549e8ba52d130ff6ca8cfae7cb7f.jpeg" alt="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035" title="массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035"><div class="box" page="massazher-ultrazvukovoy-impulsnyy-gezatone-ultratonik-m-3900r"><span class="title">массаж при гайморите Массажер ультразвуковой импульсный Gezatone Ultra-Tonik m115 1301035</span><p>от <span class="price">3900</span> руб.</p></div></li>
						<li><img src="photos/f98698f167b448092a3ab477739f68fd.jpeg" alt="солярий в новосибирске Фен Braun HD710" title="солярий в новосибирске Фен Braun HD710"><div class="box" page="fen-braun-hd-2240r"><span class="title">солярий в новосибирске Фен Braun HD710</span><p>от <span class="price">2240</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("massazher-gmax-400r.php", 0, -4); if (file_exists("comments/massazher-gmax-400r.php")) require_once "comments/massazher-gmax-400r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="massazher-gmax-400r.php" method="post" onsubmit="return checkForm(this)">
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