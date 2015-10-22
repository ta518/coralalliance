<?php

/* Template Name: Home */

get_header();

/* Get Fields */
$logo = get_field('logo');
$introBg = get_field('intro_background');
$introContent = get_field('intro_content');
$actNowBg = get_field('act_now_background');
$actNowContent = get_field('act_now_content');
$beAHeroContent1 = get_field('be_a_hero_conent_1');
$beAHeroContent2 = get_field('be_a_hero_conent_2');
$beAHeroContent3 = get_field('be_a_hero_conent_3');
$form = get_field('form');


?>

<main role="main">
	<section id="intro" style="background:url(<?php echo $introBg['url']; ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
		<div class="container clearfix">
			<div class="intro">
				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
				<?php echo $introContent; ?>
			</div>
		</div>
	</section>
	<section id="act-now" style="background:url(<?php echo $actNowBg['url']; ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
		<div class="container clearfix">
			<div class="act-now">
				<?php echo $actNowContent; ?>
			</div>
		</div>
	</section>
	<section id="be-a-hero">
		<div class="container clearfix">
			<div class="be-a-hero">
				<div class="be-a-hero-content">
					<?php echo $beAHeroContent1; ?>
				</div>
				<div class="be-a-hero-content">
					<?php echo $beAHeroContent2; ?>
				</div>
				<div class="be-a-hero-content">
					<?php echo $beAHeroContent3; ?>
				</div>
				<div class="form">
					<h1>Be a Hero,<br> Add Your Name</h1>
					<form id="form">
						<?php echo do_shortcode( '[contact-form-7 id="24" title="Sign the Petition"]' ); ?>
					</form>
				</div>
				<div class="recents">
					<div class="recent">
						<p class="minutes">3 MINUTES AGO</p>
						<p class="joined">Tom became a reef legend.</p>
					</div>
					<div class="recent">
						<p class="minutes">3 MINUTES AGO</p>
						<p class="joined">Sarah swept in and saved the reef.</p>
					</div>
					<div class="recent">
						<p class="minutes">3 MINUTES AGO</p>
						<p class="joined">Jess joined the reef defenders.</p>
					</div>
					<div class="recent">
						<p class="minutes">3 MINUTES AGO</p>
						<p class="joined">Tom became a reef legend.</p>
					</div>
					<div class="recent">
						<p class="minutes">3 MINUTES AGO</p>
						<p class="joined">Sarah swept in and saved the reef.</p>
					</div>
					<div class="recent">
						<p class="minutes">3 MINUTES AGO</p>
						<p class="joined">Jess joined the reef defenders.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
