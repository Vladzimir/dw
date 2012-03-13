<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("kaminelektropech-dimplex-cube-8764r.php","проточный водонагреватель отзывы");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("kaminelektropech-dimplex-cube-8764r.php", $nick, $comment);
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
		<title>проточный водонагреватель отзывы Камин-электропечь Dimplex Cube  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="проточный водонагреватель отзывы, скорость вентилятора видеокарты, радиатор кондиционера на калину, регулировка скорости вентилятора, технология кондиционеров, как почистить вентилятор в ноутбуке, муфта привода вентилятора, крышка вентилятора, термовыключатель вентилятор радиатора, шум вентилятора печки, метеостанция домашняя отзывы, электросхема тепловентилятора, тепловентилятор макар, газовый конвектор принцип работы,  где купить тепловую пушку">
		<meta name="description" content="проточный водонагреватель отзывы Все мы стремимся к комфорту и уюту, особенно если это  касается нашего дома. Как...">
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
						<a class="photo" href="photos/78d3841353eaa77d4ab2cc0ce552b82b.jpeg" title="проточный водонагреватель отзывы Камин-электропечь Dimplex Cube"><img src="photos/78d3841353eaa77d4ab2cc0ce552b82b.jpeg" alt="проточный водонагреватель отзывы Камин-электропечь Dimplex Cube" title="проточный водонагреватель отзывы Камин-электропечь Dimplex Cube -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-ewh-3750r.php"><img src="photos/aeb291a43491375be6474e281a07e1e2.jpeg" alt="скорость вентилятора видеокарты Водонагреватель Neoclima EWH 25" title="скорость вентилятора видеокарты Водонагреватель Neoclima EWH 25"></a><h2>Водонагреватель Neoclima EWH 25</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-slim-8550r.php"><img src="photos/cc9dc1afc36d712bcc3a6fb443d9c2b2.jpeg" alt="радиатор кондиционера на калину Водонагреватель Neoclima Slim 100" title="радиатор кондиционера на калину Водонагреватель Neoclima Slim 100"></a><h2>Водонагреватель Neoclima Slim 100</h2></li>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-zenet-nskta-3290r.php"><img src="photos/aab944bccfece59f51b95869a53e055a.jpeg" alt="регулировка скорости вентилятора Карбоновый обогреватель ZENET NSKT-90A" title="регулировка скорости вентилятора Карбоновый обогреватель ZENET NSKT-90A"></a><h2>Карбоновый обогреватель ZENET NSKT-90A</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>проточный водонагреватель отзывы Камин-электропечь Dimplex Cube</h1>
						<div class="tb"><p>Цена: от <span class="price">8764</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_26409.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Все мы стремимся к комфорту и уюту, особенно если это  касается нашего дома. Как же создать уютную атмосферу в своей квартире и  превратить домашний интерьер в настоящее произведение искусства? Отличное  решение – приобретение настоящего камина! Камин-электропечь Dimplex Cube не  только согреет вас в холодное время, но и привнесет в вашу домашнюю обстановку  элемент классической роскоши. Камин-электропечь Dimplex Cube имеет  отличные технические характеристики и удобные габариты. Кроме того,  камин-электропечь Dimplex Cube с легкостью может стать настоящим украшением вашего дома –  за счет элегантного белого цвета корпуса.               </p> <p><strong>Характеристики:</strong></p> <ul type=disc>   <li>Мощность:       2.00 кВт;</li>   <li>Эффект       топлива – дрова;</li>   <li>Размеры       (ВxШxГ): 49х47х26 см;</li>   <li>Цвет:       белый.</li> </ul>  <p><strong>Производитель:</strong> <strong>Dimplex (Ирландия)</strong></p> проточный водонагреватель отзывы</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/fa85dda66f5e6e8c0e413d3d9959f6e7.jpeg" alt="технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4" title="технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4"><div class="box" page="splitsistema-neoclima-nsnuhahinr-21900r"><span class="title">технология кондиционеров Сплит-система NeoClima NS/NU-HAH12INR4</span><p>от <span class="price">21900</span> руб.</p></div></li>
						<li><img src="photos/5a722243fe0d4bdaed6d1be8e66a9f23.jpeg" alt="как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I" title="как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I"><div class="box" page="maslyanyy-radiator-timberk-tor-mg-i-1850r"><span class="title">как почистить вентилятор в ноутбуке Масляный радиатор Timberk  TOR 21.1206 MG I</span><p>от <span class="price">1850</span> руб.</p></div></li>
						<li><img src="photos/eaa9d36d06605b97c43cac0412f52c2b.jpeg" alt="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873" title="муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873"><div class="box" page="barometr-futbolnyy-myach-rst-art-1750r"><span class="title">муфта привода вентилятора Барометр  Футбольный мяч RST, арт. 07873</span><p>от <span class="price">1750</span> руб.</p></div></li>
						<li><img src="photos/e576fcb2cb03509d293e70696e451674.jpeg" alt="крышка вентилятора Барометр RST 05295 Роза ветров" title="крышка вентилятора Барометр RST 05295 Роза ветров"><div class="box" page="barometr-rst-roza-vetrov-1500r"><span class="title">крышка вентилятора Барометр RST 05295 Роза ветров</span><p>от <span class="price">1500</span> руб.</p></div></li>
						<li class="large"><img src="photos/1418840f41ef0b23f3d9fa7e2a1e1156.jpeg" alt="термовыключатель вентилятор радиатора Метеостанция Meteoscan PRO 925, арт. 01925" title="термовыключатель вентилятор радиатора Метеостанция Meteoscan PRO 925, арт. 01925"><div class="box" page="meteostanciya-meteoscan-pro-art-18150r"><span class="title">термовыключатель вентилятор радиатора Метеостанция Meteoscan PRO 925, арт. 01925</span><p>от <span class="price">18150</span> руб.</p></div></li>
						<li class="large"><img src="photos/bba52d000c0ded20d7489586f37c2237.jpeg" alt="шум вентилятора печки Тепловентилятор керамический Vitesse VS-852" title="шум вентилятора печки Тепловентилятор керамический Vitesse VS-852"><div class="box" page="teploventilyator-keramicheskiy-vitesse-vs-1740r"><span class="title">шум вентилятора печки Тепловентилятор керамический Vitesse VS-852</span><p>от <span class="price">1740</span> руб.</p></div></li>
						<li class="large"><img src="photos/0b4f7257f9ff3795bc881b7bf735b777.jpeg" alt="метеостанция домашняя отзывы Увлажнитель воздуха ультразвуковой|паровой Vitek VT-1764" title="метеостанция домашняя отзывы Увлажнитель воздуха ультразвуковой|паровой Vitek VT-1764"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoyparovoy-vitek-vt-3600r"><span class="title">метеостанция домашняя отзывы Увлажнитель воздуха ультразвуковой|паровой Vitek VT-1764</span><p>от <span class="price">3600</span> руб.</p></div></li>
						<li><img src="photos/9f4b604d4597cda63c396ad6fe9ea881.jpeg" alt="электросхема тепловентилятора Ультразвуковой увлажнитель воздуха Neoclima NHL-712M (Механика)" title="электросхема тепловентилятора Ультразвуковой увлажнитель воздуха Neoclima NHL-712M (Механика)"><div class="box" page="ultrazvukovoy-uvlazhnitel-vozduha-neoclima-nhlm-mehanika-3700r"><span class="title">электросхема тепловентилятора Ультразвуковой увлажнитель воздуха Neoclima NHL-712M (Механика)</span><p>от <span class="price">3700</span> руб.</p></div></li>
						<li><img src="photos/ad594edcc30f90b13b1c901fc9da569a.jpeg" alt="тепловентилятор макар Ультразвуковой увлажнитель Electrolux EHU 5525D" title="тепловентилятор макар Ультразвуковой увлажнитель Electrolux EHU 5525D"><div class="box" page="ultrazvukovoy-uvlazhnitel-electrolux-ehu-d-7050r-2"><span class="title">тепловентилятор макар Ультразвуковой увлажнитель Electrolux EHU 5525D</span><p>от <span class="price">7050</span> руб.</p></div></li>
						<li><img src="photos/762fe07a49c5c6da0289dc8a7e721d0e.jpeg" alt="газовый конвектор принцип работы Камин Классический очаг Dimplex Kansas Black" title="газовый конвектор принцип работы Камин Классический очаг Dimplex Kansas Black"><div class="box" page="kamin-klassicheskiy-ochag-dimplex-kansas-black-8921r"><span class="title">газовый конвектор принцип работы Камин Классический очаг Dimplex Kansas Black</span><p>от <span class="price">8921</span> руб.</p></div></li>
						<li><img src="photos/4acc8907a54a10e6935d700303b44f52.jpeg" alt="кондиционер при минусовой температуре Камин Классический очаг Dimplex Lydon Brass" title="кондиционер при минусовой температуре Камин Классический очаг Dimplex Lydon Brass"><div class="box" page="kamin-klassicheskiy-ochag-dimplex-lydon-brass-10955r"><span class="title">кондиционер при минусовой температуре Камин Классический очаг Dimplex Lydon Brass</span><p>от <span class="price">10955</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("kaminelektropech-dimplex-cube-8764r.php", 0, -4); if (file_exists("comments/kaminelektropech-dimplex-cube-8764r.php")) require_once "comments/kaminelektropech-dimplex-cube-8764r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="kaminelektropech-dimplex-cube-8764r.php" method="post" onsubmit="return checkForm(this)">
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