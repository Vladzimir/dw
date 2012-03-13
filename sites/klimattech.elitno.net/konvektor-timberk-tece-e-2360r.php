<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("konvektor-timberk-tece-e-2360r.php","контроль вентиляторов");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("konvektor-timberk-tece-e-2360r.php", $nick, $comment);
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
		<title>контроль вентиляторов Конвектор Timberk TEC.E1 E 1000  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="контроль вентиляторов, вентилятор накладной, замена датчика включения вентилятора, кондиционеры обучение, кондиционеры в зеленограде, вакуумирование кондиционера, водонагреватели термекс неисправности, маркировка вентиляторов, объявления монтаж кондиционеров, гудит вентилятор печки, вентилятор отопителя 2108, трубки для кондиционеров, кондиционера обозначение, водонагреватели накопительные отзывы,  медицинский кондиционер">
		<meta name="description" content="контроль вентиляторов Timberk TEC.E1 M 1000 – недорогой конвектор мощностью 1000 Вт с электронным терм...">
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
						<a class="photo" href="photos/7630b1e6dccadaf1f4a39299c06f31be.jpeg" title="контроль вентиляторов Конвектор Timberk TEC.E1 E 1000"><img src="photos/7630b1e6dccadaf1f4a39299c06f31be.jpeg" alt="контроль вентиляторов Конвектор Timberk TEC.E1 E 1000" title="контроль вентиляторов Конвектор Timberk TEC.E1 E 1000 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/karbonovyy-obogrevatel-zenet-smbt-2890r.php"><img src="photos/7083061770ff56bfe4b02a345dcc2c47.jpeg" alt="вентилятор накладной Карбоновый обогреватель ZENET SMB-60T" title="вентилятор накладной Карбоновый обогреватель ZENET SMB-60T"></a><h2>Карбоновый обогреватель ZENET SMB-60T</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-timberk-tecps-m-2550r.php"><img src="photos/fcad3e5278faf77d6e029ba9d4a486e0.jpeg" alt="замена датчика включения вентилятора Конвектор Timberk TEC.PS2 M 1500" title="замена датчика включения вентилятора Конвектор Timberk TEC.PS2 M 1500"></a><h2>Конвектор Timberk TEC.PS2 M 1500</h2></li>
							<li><a href="http://klimattech.elitno.net/splitsistema-neoclima-nsnuhahinr-25750r.php"><img src="photos/97697bb3263129cd29c4f8016bca5075.jpeg" alt="кондиционеры обучение Сплит-система NeoClima NS/NU-HAH09INR4" title="кондиционеры обучение Сплит-система NeoClima NS/NU-HAH09INR4"></a><h2>Сплит-система NeoClima NS/NU-HAH09INR4</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>контроль вентиляторов Конвектор Timberk TEC.E1 E 1000</h1>
						<div class="tb"><p>Цена: от <span class="price">2360</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18174.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Timberk TEC.E1 M 1000 – недорогой конвектор мощностью 1000 Вт с электронным термостатом специально разработанный как экономичный вариант с минимальным использованием электронных плат управления. Но, не смотря на это, конвектор защищен от перегрева и совершенно безопасен в использовании. Он не накапливает пыль и не выжигает кислород, а высокий класс защиты от влаги IP24 позволяет использовать конвектор даже во влажных помещениях. </p><p><b>Характеристики:</b></p><ul type=disc><li>Напряжение-частота: 220-240/50 <li>Мощность: 1000 Вт <li>Размеры с ножками: 540х340х330 <li>Ососбенности: Три режима нагрева </li></ul><p><b>Производитель: Швеция</b></p> контроль вентиляторов</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/a33dead31777e2b36156a508b30befd0.jpeg" alt="кондиционеры в зеленограде Радиатор масляный Timberk TOR 51.2811 EZ I" title="кондиционеры в зеленограде Радиатор масляный Timberk TOR 51.2811 EZ I"><div class="box"><a href="http://klimattech.elitno.net/radiator-maslyanyy-timberk-tor-ez-i-3640r.php"><h3 class="title">кондиционеры в зеленограде Радиатор масляный Timberk TOR 51.2811 EZ I</h3><p>от <span class="price">3640</span> руб.</p></a></div></li>
						<li><img src="photos/c9386d59c1539e6337f9db268ce3bbb6.jpeg" alt="вакуумирование кондиционера Обогреватель NY 17LF" title="вакуумирование кондиционера Обогреватель NY 17LF"><div class="box" page="obogrevatel-ny-lf-1950r"><span class="title">вакуумирование кондиционера Обогреватель NY 17LF</span><p>от <span class="price">1950</span> руб.</p></div></li>
						<li><img src="photos/6dfe798b3326bf9977da25b7994dc82f.jpeg" alt="водонагреватели термекс неисправности Барометр Морской  Погодникъ, арт. 07295" title="водонагреватели термекс неисправности Барометр Морской  Погодникъ, арт. 07295"><div class="box" page="barometr-morskoy-pogodnik-art-1390r"><span class="title">водонагреватели термекс неисправности Барометр Морской  Погодникъ, арт. 07295</span><p>от <span class="price">1390</span> руб.</p></div></li>
						<li><img src="photos/069f9035158c301188c327ecd3113c46.jpeg" alt="маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX" title="маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX"><div class="box" page="teploventilyator-elektricheskiy-napolnyy-timberk-tfh-tfshlx-3120r"><span class="title">маркировка вентиляторов Тепловентилятор электрический напольный Timberk TFH T20FSH.LX</span><p>от <span class="price">3120</span> руб.</p></div></li>
						<li class="large"><img src="photos/051d7dedae25fb49a0d213f9e7739d36.jpeg" alt="объявления монтаж кондиционеров Тепловентилятор Vitek VT-1735GY" title="объявления монтаж кондиционеров Тепловентилятор Vitek VT-1735GY"><div class="box" page="teploventilyator-vitek-vtgy-950r"><span class="title">объявления монтаж кондиционеров Тепловентилятор Vitek VT-1735GY</span><p>от <span class="price">950</span> руб.</p></div></li>
						<li class="large"><img src="photos/6979b1afba03d302c00e31baabc61d13.jpeg" alt="гудит вентилятор печки Очиститель-ионизатор воздуха Атмос Мини" title="гудит вентилятор печки Очиститель-ионизатор воздуха Атмос Мини"><div class="box" page="ochistitelionizator-vozduha-atmos-mini-1190r"><span class="title">гудит вентилятор печки Очиститель-ионизатор воздуха Атмос Мини</span><p>от <span class="price">1190</span> руб.</p></div></li>
						<li class="large"><img src="photos/84b0b05cf769ebedabf2bba53955e7e8.jpeg" alt="вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue" title="вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-boneco-blue-3630r"><span class="title">вентилятор отопителя 2108 Увлажнитель воздуха ультразвуковой Boneco 7131 Blue</span><p>от <span class="price">3630</span> руб.</p></div></li>
						<li><img src="photos/2c1b8774e591d0ea8ba0f99b789d4590.jpeg" alt="трубки для кондиционеров Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха" title="трубки для кондиционеров Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха"><div class="box" page="timberk-thu-ul-a-uvlazhnitel-i-aromatizator-vozduha-1600r-2"><span class="title">трубки для кондиционеров Timberk THU UL 03 A1 Увлажнитель и ароматизатор воздуха</span><p>от <span class="price">1600</span> руб.</p></div></li>
						<li><img src="photos/177e3fa5fe31531a3d3e70a31e2bd093.jpeg" alt="кондиционера обозначение Уличный газовый обогреватель ITM Sunny 950" title="кондиционера обозначение Уличный газовый обогреватель ITM Sunny 950"><div class="box" page="ulichnyy-gazovyy-obogrevatel-itm-sunny-23650r"><span class="title">кондиционера обозначение Уличный газовый обогреватель ITM Sunny 950</span><p>от <span class="price">23650</span> руб.</p></div></li>
						<li><img src="photos/a5f8fe566b61ce24e2379ab4a0ae140e.jpeg" alt="водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC" title="водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC"><div class="box" page="elektrokamin-nastennyy-electrolux-efp-w-urc-13030r"><span class="title">водонагреватели накопительные отзывы Электрокамин настенный  Electrolux  EFP W - 1100URC</span><p>от <span class="price">13030</span> руб.</p></div></li>
						<li><img src="photos/c9b408f036711361bf334bb6f666fa50.jpeg" alt="вентилятор не крутится Камин Комплект Dimplex Verona угловая CFP3674WN" title="вентилятор не крутится Камин Комплект Dimplex Verona угловая CFP3674WN"><div class="box" page="kamin-komplekt-dimplex-verona-uglovaya-cfpwn-25666r"><span class="title">вентилятор не крутится Камин Комплект Dimplex Verona угловая CFP3674WN</span><p>от <span class="price">25666</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("konvektor-timberk-tece-e-2360r.php", 0, -4); if (file_exists("comments/konvektor-timberk-tece-e-2360r.php")) require_once "comments/konvektor-timberk-tece-e-2360r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="konvektor-timberk-tece-e-2360r.php" method="post" onsubmit="return checkForm(this)">
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