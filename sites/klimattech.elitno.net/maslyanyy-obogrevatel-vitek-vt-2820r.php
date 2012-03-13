<?php
	session_start();
	
	error_reporting(0);
	
	require_once "comments.php";

	$go = new Comments(); 
	$go->AutoComment("maslyanyy-obogrevatel-vitek-vt-2820r.php","каталог вентиляторов");

	if (!empty($_POST["author"]) && !empty($_POST["comment"]) && !empty($_POST["captcha"]))
	{
		$nick = $_POST["author"];
		$comment = $_POST["comment"];
		
		if ($_SESSION["captcha"] == $_POST["captcha"])
		{
			$go->UserComment("maslyanyy-obogrevatel-vitek-vt-2820r.php", $nick, $comment);
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
		<title>каталог вентиляторов Масляный обогреватель Vitek VT-1723  </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="каталог вентиляторов, электрокамины в минске, мощность двигателя вентилятора, кондиционеры медея, запчасти для вентиляторов, обогреватель с вентилятором, двигатель отопителя вентилятора, самостоятельная установка кондиционера, кондиционер моноблок, теплоотдача конвекторов, водонагреватель реал, обогреватель инфракрасный ик, заправка кондиционера цена, кондиционер ауди,  кондиционер поло седан">
		<meta name="description" content="каталог вентиляторов Качественный обогреватель Vitek VT-1723 белого цвета мощностью 2500 Вт будет нез...">
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
						<a class="photo" href="photos/5e1acb133dee7908889f7853f02ceb0a.jpeg" title="каталог вентиляторов Масляный обогреватель Vitek VT-1723"><img src="photos/5e1acb133dee7908889f7853f02ceb0a.jpeg" alt="каталог вентиляторов Масляный обогреватель Vitek VT-1723" title="каталог вентиляторов Масляный обогреватель Vitek VT-1723 -  "></a>
						<ul>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-timberk-swh-fs-h-9750r.php"><img src="photos/b405c02d82b4f7d5c2689a1ba0995b00.jpeg" alt="электрокамины в минске Водонагреватель Timberk SWH FS2 80 H" title="электрокамины в минске Водонагреватель Timberk SWH FS2 80 H"></a><h2>Водонагреватель Timberk SWH FS2 80 H</h2></li>
							<li><a href="http://klimattech.elitno.net/vodonagrevatel-neoclima-fast-7250r.php"><img src="photos/f62dcfa9fec6ccc31545eb1579fb9e85.jpeg" alt="мощность двигателя вентилятора Водонагреватель Neoclima FAST 50" title="мощность двигателя вентилятора Водонагреватель Neoclima FAST 50"></a><h2>Водонагреватель Neoclima FAST 50</h2></li>
							<li><a href="http://klimattech.elitno.net/konvektor-elektricheskiy-timberk-tecpf-m-in-2140r.php"><img src="photos/5d7d89a1625889d24c0e54577aff3f32.jpeg" alt="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN" title="кондиционеры медея Конвектор электрический Timberk TEC.PF1 М IN"></a><h2>Конвектор электрический Timberk TEC.PF1 М IN</h2></li>
						</ul>
					</div>
					<div class="rs">
						<h1>каталог вентиляторов Масляный обогреватель Vitek VT-1723</h1>
						<div class="tb"><p>Цена: от <span class="price">2820</span> руб. <a href="go.php?url=http://profit-shop.ru/shop/UID_18452.html" target="_blank"><span class="button"></span></a></p></div>
						<div class="description"><p>Качественный обогреватель Vitek VT-1723 белого цвета мощностью 2500 Вт будет незаменим в самые лютые мозоры! Он сможет согреть своим теплом целую квартиру: площадь обогрева составляет 38 квадратных метров. А нейтральный дизайн позволит ему стать частью любого интерьера. <br>Обладает тремя уровнями мощностями - 1000, 1500 и 2500 Вт. <br>Оснащен световым индикатором работы, термостатом. <br>Преимущество данной модели в автоматическом отключении при перегреве и специальном отделении для шнура внутри корпуса.<br><strong>Характеристики:</strong></p><ul type=disc><li>13 секций; <li>Мощность 2500 Вт; <li>3 уровня мощности: (1000 Вт/1500 Вт/2500 Вт ); <li>Площадь обогрева до 38 м2; <li>Управление: механическое; <li>Выключатель со световым индикатором; <li>Отключение при перегреве; <li>Термостат; <li>Отделение для шнура. </li></ul><p><strong>Производитель: </strong><strong>Vitek (Россия)</strong><br><strong>Гарантия: 1 год</strong></p> каталог вентиляторов</div>
					</div>
					<div class="end"></div>
				</div>

				<?php require_once "reclame.php"; ?>
				<div class="see-also">
					<h2>Похожие товары</h2>
					<ul>
						<li><img src="photos/07bf4a882204122da512e5a23fa24df7.jpeg" alt="запчасти для вентиляторов Масляный радиатор Timberk TOR 21.1206 BT I" title="запчасти для вентиляторов Масляный радиатор Timberk TOR 21.1206 BT I"><div class="box" page="maslyanyy-radiator-timberk-tor-bt-i-1860r"><span class="title">запчасти для вентиляторов Масляный радиатор Timberk TOR 21.1206 BT I</span><p>от <span class="price">1860</span> руб.</p></div></li>
						<li><img src="photos/d7bb7ba0387c2b78ce872333ecc5b5b3.jpeg" alt="обогреватель с вентилятором Термометр цифровой RST, арт. 02100" title="обогреватель с вентилятором Термометр цифровой RST, арт. 02100"><div class="box" page="termometr-cifrovoy-rst-art-550r"><span class="title">обогреватель с вентилятором Термометр цифровой RST, арт. 02100</span><p>от <span class="price">550</span> руб.</p></div></li>
						<li><img src="photos/aca66a50e90ffa9820f492ddf3cc3047.jpeg" alt="двигатель отопителя вентилятора Инфракрасный тепловентилятор Neoclima NCH-1.2B" title="двигатель отопителя вентилятора Инфракрасный тепловентилятор Neoclima NCH-1.2B"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-nchb-1920r"><span class="title">двигатель отопителя вентилятора Инфракрасный тепловентилятор Neoclima NCH-1.2B</span><p>от <span class="price">1920</span> руб.</p></div></li>
						<li><img src="photos/07be9912d91dc60bfafc0da4fada6376.jpeg" alt="самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04" title="самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04"><div class="box" page="infrakrasnyy-teploventilyator-neoclima-nqh-390r"><span class="title">самостоятельная установка кондиционера Инфракрасный тепловентилятор Neoclima NQH-04</span><p>от <span class="price">390</span> руб.</p></div></li>
						<li class="large"><img src="photos/25043930107e9bee6e7f233a02c84477.jpeg" alt="кондиционер моноблок Тепловая пушка Ballu BPH-9.000C" title="кондиционер моноблок Тепловая пушка Ballu BPH-9.000C"><div class="box" page="teplovaya-pushka-ballu-bphc-6200r"><span class="title">кондиционер моноблок Тепловая пушка Ballu BPH-9.000C</span><p>от <span class="price">6200</span> руб.</p></div></li>
						<li class="large"><img src="photos/66e0aa1057db078ec30260e7078f7d70.jpeg" alt="теплоотдача конвекторов Очиститель воздуха Neoclima NAP" title="теплоотдача конвекторов Очиститель воздуха Neoclima NAP"><div class="box" page="ochistitel-vozduha-neoclima-nap-7000r"><span class="title">теплоотдача конвекторов Очиститель воздуха Neoclima NAP</span><p>от <span class="price">7000</span> руб.</p></div></li>
						<li class="large"><img src="photos/8715a2f096ad000778af417d553ba5fd.jpeg" alt="водонагреватель реал Увлажнитель воздуха ультразвуковой Черепаха B.Well WH-100" title="водонагреватель реал Увлажнитель воздуха ультразвуковой Черепаха B.Well WH-100"><div class="box" page="uvlazhnitel-vozduha-ultrazvukovoy-cherepaha-bwell-wh-1650r"><span class="title">водонагреватель реал Увлажнитель воздуха ультразвуковой Черепаха B.Well WH-100</span><p>от <span class="price">1650</span> руб.</p></div></li>
						<li><img src="photos/529d01653dbf042175d64e352c3bb2e4.jpeg" alt="обогреватель инфракрасный ик Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель" title="обогреватель инфракрасный ик Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель"><div class="box" page="timberk-tms-hd-uvlazhnitel-vozduha-i-polotencesushitel-240r"><span class="title">обогреватель инфракрасный ик Timberk TMS 07.HD2 Увлажнитель воздуха и полотенцесушитель</span><p>от <span class="price">240</span> руб.</p></div></li>
						<li><img src="photos/e7e905bc6a32503c02bab2534a7c54ae.jpeg" alt="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)" title="заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)"><div class="box" page="elektricheskiy-zhilet-inkor-razmerom-h-sm-moschnost-vt-900r"><span class="title">заправка кондиционера цена Электрический жилет ИНКОР размером 40х70 см (мощность 60Вт)</span><p>от <span class="price">900</span> руб.</p></div></li>
						<li><img src="photos/05fb981329cf37f4c742262b007a5585.jpeg" alt="кондиционер ауди Камин Комплект Dimplex Liszt" title="кондиционер ауди Камин Комплект Dimplex Liszt"><div class="box" page="kamin-komplekt-dimplex-liszt-20502r"><span class="title">кондиционер ауди Камин Комплект Dimplex Liszt</span><p>от <span class="price">20502</span> руб.</p></div></li>
						<li><img src="photos/72bd5d61389f28ec059157d4c0834c56.jpeg" alt="телефон метеостанции Камин Комплект Dimplex Grenada угловой DFP3696O" title="телефон метеостанции Камин Комплект Dimplex Grenada угловой DFP3696O"><div class="box" page="kamin-komplekt-dimplex-grenada-uglovoy-dfpo-25666r"><span class="title">телефон метеостанции Камин Комплект Dimplex Grenada угловой DFP3696O</span><p>от <span class="price">25666</span> руб.</p></div></li>
			
					</ul>
				</div>
				<div class="comments">
					<h2>Отзывы покупателей</h2>
					<ul>
						<?php $page = substr("maslyanyy-obogrevatel-vitek-vt-2820r.php", 0, -4); if (file_exists("comments/maslyanyy-obogrevatel-vitek-vt-2820r.php")) require_once "comments/maslyanyy-obogrevatel-vitek-vt-2820r.php"; if (file_exists("$page-comments.php")) require_once "$page-comments.php";?>					</ul>
					<script>$("div.comments li:odd").css("background-color", "#1A1A1A");</script>
					<h2>Оставить отзыв</h2>
					<form action="maslyanyy-obogrevatel-vitek-vt-2820r.php" method="post" onsubmit="return checkForm(this)">
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