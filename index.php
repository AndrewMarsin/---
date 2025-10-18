<!DOCTYPE html>
<html lang="ru">

<?php

//include 'assets/php/sp.php';

$canonical = "https://drevdom-ekb.ru";
$ogtitle = "ДревДом | Деревянное домостроение. Дома и бани";
$description = "Строительство деревянных домов и бань. Строительная компания ДревДом строит Дома и Бани из бруса. Является офицальным застройщиком на рынке деревянного домостроения. Выставка готовых домов. Брусовое строительство.";
include 'head.php' ?>

<body oncontextmenu="return false;" id="top">

	<?php include 'assets/components/nav/nav.php';
	include 'assets/components/header/header.php' ?>

	<script>
		// FADE IN
		if (window.innerWidth > 979) {
			FadeInElem(document.querySelector('h1'))

			function FadeInElem(elem) {
				document.fonts.ready.then(function() {
					elem.style.opacity = 1;
					elem.style.transform = 'scaleY(1)';
				})
			}
		}

		//УТМ МЕТКА. ЗАМЕНА ЗАГОЛОВКА
		var utm = /utm_replace=dacha/.exec(document.URL);
		if (utm && utm[0] == "utm_replace=dacha") {
			document.querySelector('h1 .utm').innerHTML = "ДАЧНЫХ"
		}
	</script>

	<hr class="style">

	<section class="sec_one" style="position: relative">
		<?php include 'assets/components/invite/invite.php';
		include 'assets/components/contacts/contacts.php' ?>

		<hr class="style">

		<div id="video">
			<?php include 'assets/components/video/video.php' ?>
		</div>
	</section>

	<hr class="style">

	<section id="doma_title" class="examples">
		<?php include 'assets/components/examples/examples.php' ?>
	</section>

	<section id="advice" class="about">
		<?php include 'assets/components/advice/advice.php';
		include 'assets/components/contacts/contacts.php' ?>
	</section>

	<hr class="style">

	<section id="qwiz" class="qwiz" style="width:100%">
		<?php include 'assets/components/check/check.php' ?>
	</section>

	<hr id="spec" class="style">

	<section id="special">
		<?php include 'assets/components/special/special.php' ?>
	</section>

	<hr class="style">

	<section id="vibor">
		<?php include 'assets/components/vibor/vibor.php' ?>
	</section>

<!-- 	<hr class="style">

	<section id="winter">
		<?//php include 'assets/components/winter/winter.php'
		?>
	</section> -->

	<hr class="style">

	<section id="about">
		<?php include 'assets/components/about/about.php' ?>
	</section>

	<!-- 	ОТЗЫВЫ -->
	<div class="desc_version">
		<hr id="otzivi" class="style observ_otzivi">
		<section id="cont_otzivi">
			<script src=" assets/components/otzivi/otzivi.js"></script>
		</section>
	</div>

	<!-- 	ГОТОВЫЕ ДОМА -->
	<div class="desc_version">
		<hr id="ready" class=" style observ_ready">
		<section id="cont_ready">
			<script src="assets/components/ready/ready.js"></script>
		</section>
	</div>

	<hr class="style">

	<footer id="cont_footer">

		<div class="foot_wraper" style="max-width: 1280px;
    background: linear-gradient(to bottom, #171d11b3, #131108d1), url(assets/img/wood.jpg);
    /* justify-self: center; */
    align-self: center;">
			<div id="map" style="text-align: center;">
				<h2 class="examples_title">СХЕМА ПРОЕЗДА</h2>
				<h3 style="margin-top:0">г.Екатеринбург, <span class="no_wrap">ул.Амундсена 125</span></h3>
				<h3 class="adv_sp">(Предварительно звоните! <span class="no_wrap">Можем находится на объекте.)</span></h3>
				<div style="height: 400px;margin-bottom: 2em;" id="map_contaner">
					<meta property="og:image" content="<?php echo "https://" . $host . "/assets/img/map.jpg"; ?>">
				</div>
			</div>
			<hr class="style mob_version">
			<div class="desc_version foot_cont">
				<?php include 'assets/components/contacts/contacts.php' ?>
			</div>
		</div>

		<hr style="margin: 2em 0" class="style">

		<div style="display: flex;justify-content: space-around;flex-wrap: wrap; gap: 1em">
			<?php include 'assets/components/share/share.php' ?>

			<h4 style=" margin: 1.5em;">ДревДом Екатеринбург | 2001-<?php echo date("Y"); ?></h4>

		</div>

	</footer>

	<!-- 	<div class="stick_wrap"><? //php include 'assets/components/stick/stick.php'
																	?></div> -->

	<div class="chevron_up"><a href="#top" aria-label="Деревянное строительство домов и бань"><span class="chevron up"></span></a></div>


	<link rel="preload" href="assets/components/bot/bot.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<link rel="preload" href="assets/components/modal/modal.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

	<?php
	//include "assets/php/utm_data.php";
	//include "assets/php/weather.php";

	include "assets/components/modal/modal.php";
	include "assets/components/modal/qr_code.php";
	include "assets/components/modal/garant.php";
	include "assets/components/modal/inviteModal.php";

	include 'assets/components/bot/bot_form_price.php';
	include 'assets/components/bot/bot_form.php';
	include 'assets/js/schema.php'
	// include 'assets/js/utm.php'
	?>

	<!-- <script src="assets/js/ancor.js"></script> -->
	<script src="assets/js/main.js" defer></script>
	<script src="assets/js/swipe-min.js" defer></script>
	<script src="assets/js/phone_mask.js" defer></script>
	<script src="assets/js/metrica.js" defer></script>

</body>

</html>