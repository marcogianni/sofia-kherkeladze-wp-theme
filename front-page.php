<?php
/** Template Name: Frontpage */
?>

<?php get_header(); ?>

<div data-router-wrapper>
	<div data-router-view="home_page">
		<?php partial('nav'); ?>
		<div id="scrollbar">
			<main role="main">
				<div class="container-fluid c-hero-home">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="c-hero-home__title">Port<br/>folio</h1>
							<img class="c-hero-home__img" src="<?php the_field('intro_image'); ?>" />
						</div>
					</div>
				</div>

				<div class="container-fluid home-intro">
					<div class="row">
						<div class="col-sm-12">
							<p class="home-intro__text"><?php the_field('intro_text'); ?></p>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="c-section-title">
								<span class="c-section-title__slash">/</span>
								<span class="c-section-title__num">01</span>
								<h3 class="c-section-title__title"><?php the_field('first_section_title'); ?></h3>
							</div>
						</div>
					</div>
				</div>

				<section class="c-section-block">
					<div class="container-fluid">
						<div class="row">
							<span class="c-section-block__placeholder">Family</span>
							<div class="col-sm-6 offset-sm-6 c-section-block__c-text">
								<?php
									$firstSection = get_field('first_section');
									if (!empty($firstSection)) {
										foreach ($firstSection as $item) {
											echo '<p class="c-section-block__text">'.$item['text'].'</p>';
										}
									}
								?> 
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid c-large-bg">
					<div class="row">
						<div class="col-sm-12">
							<img src="<?php the_field('big_image');?>" />
							<span class="gallery-item-title"><?php the_field('big_image_name');?><span class="gallery-item-title__slash">/</span><span class="gallery-item-title__year"><?php the_field('big_image_year');?></span></span>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="c-section-title">
								<span class="c-section-title__slash">/</span>
								<span class="c-section-title__num">02</span>
								<h3 class="c-section-title__title"><?php the_field('second_section_title'); ?></h3>
							</div>
						</div>
					</div>
				</div>

				<section class="c-section-block">
					<div class="container-fluid">
						<div class="row">
							<span class="c-section-block__placeholder">Growth</span>
							<div class="col-sm-6 offset-sm-6 c-section-block__c-text">
								<?php
									$secondSection = get_field('second_section');
									if (!empty($secondSection)) {
										foreach ($secondSection as $item) {
											echo '<p class="c-section-block__text">'.$item['text'].'</p>';
										}
									}
								?> 
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="container-fluid c-section-images">
						<div class="row">
							<?php 
								$imageSection = get_field('image_section');
								if (!empty($imageSection)){
									$counter = 0;
									foreach ($imageSection as $item) {
										$counter++;
										if ($counter <= 3){
											echo '<div class="col-sm-4"><div style="background-image: url('.$item['image'].')"></div><span class="gallery-item-title">'.$item['name'].'<span class="gallery-item-title__slash">/</span><span class="gallery-item-title__year">'.$item['year'].'</span></span></div>';
										}else {
											echo '<div class="col-sm-12"><div style="background-image: url('.$item['image'].')"></div><span class="gallery-item-title">'.$item['name'].'<span class="gallery-item-title__slash">/</span><span class="gallery-item-title__year">'.$item['year'].'</span></span></div>';
										}
									}
								}
							?>
						</div>
					</div>
				</section>

				<div class="container-fluid c-cta">
					<div class="row">
						<div class="col-sm-12">
							<a title="Explore the Gallery" class="black-button" href="<?php echo esc_url( get_page_link( 7 ) ); ?>"><span class="black-button__title">Explore gallery</span><svg class="black-button__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 22"><path d="M1.75.62L.617 1.784a.412.412 0 00-.116.288v.002c0 .11.044.213.12.289L9.266 11 .62 19.636a.412.412 0 00-.12.289v.002c0 .108.042.212.116.288l1.135 1.166c.153.157.401.159.556.003l10.074-10.093a.412.412 0 000-.582L2.307.616a.388.388 0 00-.556.003z" fill="#FFF" fill-rule="nonzero"/></svg></a>
						</div>
					</div>
				</div>
				<?php partial("footer");?>
			</main>
		</div>
	</div>
</div>

<?php get_footer();?>