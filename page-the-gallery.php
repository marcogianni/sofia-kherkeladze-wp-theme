<?php
/** Template Name: The Gallery */
?>

<?php get_header(); ?>

<div data-router-wrapper>
	<div data-router-view="the_gallery_page">

		<div class="gallery-slider-container gallery-slider-container-invisible">
			<div class="close-gallery-slider">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g fill="#FFF" fill-rule="evenodd"><path d="M1.754 10.234a6 6 0 010-8.48 6 6 0 018.48 0l88.012 88.012a6 6 0 010 8.48 6 6 0 01-8.48 0L1.754 10.234z"/><path d="M89.766 1.754a6 6 0 018.48 0 6 6 0 010 8.48L10.234 98.246a6 6 0 01-8.48 0 6 6 0 010-8.48L89.766 1.754z"/></g></svg>
			</div>
			<div class="gallery-slider">
				<?php 
				$firstGalleryImages = get_field('first_gallery');
				$a = 0;
				if( $firstGalleryImages ): ?>
					<?php foreach( $firstGalleryImages as $image ): $a++;?>
						<div class="gallery-slider__item">
							<img src="<?php echo $image['url']; ?>" alt="immagine<?php echo $a;?>" />
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

		<?php partial('nav'); ?>
		<div id="scrollbar">
			<main role="main">
				<section class="c-hero-the-gallery" style="background-image: url('<?php the_field('hero_background');?>')">
					<h1 class="c-hero-the-gallery__title">The Gallery</h1>
				</section>
				
				<section class="paintings-container">
					<div class="container-fluid first-gallery-title">
						<div class="row">
							<div class="col-sm-12">
								<div class="c-section-title">
									<span class="c-section-title__slash">/</span>
									<span class="c-section-title__num">01</span>
									<h3 class="c-section-title__title"><?php echo get_field('first_gallery_title')?></h3>
								</div>
							</div>
						</div>
					</div>
	
					<div class="first-gallery container-fluid" itemscope itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">
						<div class="row">
							<?php 
							$firstGalleryImages = get_field('first_gallery');
							$b = 0;
							if( $firstGalleryImages ): ?>
								<?php foreach( $firstGalleryImages as $image ): $b++;?>	
									<div class="col-sm-4">
										<div class="first-gallery__item item-number-<?php echo $b;?>" style="background-image: url('<?php echo $image['url']; ?>')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53"><path d="M52 14c.55 0 1-.45 1-1V1a1.019 1.019 0 00-1-1H40c-.55 0-1 .45-1 1s.45 1 1 1h9.59l-15.7 15.7a11.463 11.463 0 00-14.78 0L3.41 2H13c.55 0 1-.45 1-1s-.45-1-1-1H1a1.019 1.019 0 00-1 1v12c0 .55.45 1 1 1s1-.45 1-1V3.41l15.7 15.7a11.463 11.463 0 000 14.78L2 49.59V40c0-.55-.45-1-1-1s-1 .45-1 1v12a1.019 1.019 0 001 1h12c.55 0 1-.45 1-1s-.45-1-1-1H3.41l15.7-15.7a11.463 11.463 0 0014.78 0L49.59 51H40c-.55 0-1 .45-1 1s.45 1 1 1h12a1.019 1.019 0 001-1V40c0-.55-.45-1-1-1s-1 .45-1 1v9.59l-15.7-15.7a11.463 11.463 0 000-14.78L51 3.41V13c0 .55.45 1 1 1zM26.5 36c-5.24 0-9.5-4.26-9.5-9.5s4.26-9.5 9.5-9.5 9.5 4.26 9.5 9.5-4.26 9.5-9.5 9.5z" fill="#FFF" fill-rule="nonzero"/></svg></div>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
					</div>
	
					<div class="container-fluid second-gallery-title">
						<div class="row">
							<div class="col-sm-12">
								<div class="c-section-title">
									<span class="c-section-title__slash">/</span>
									<span class="c-section-title__num">02</span>
									<h3 class="c-section-title__title"><?php echo get_field('second_gallery_title')?></h3>
								</div>
							</div>
						</div>
					</div>
	
					<div class="second-gallery container-fluid" itemscope itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">
						<div class="row">
							<div class="slider">
								<?php 
								$secondGalleryImages = get_field('second_gallery');
								$c = 0;
								if( $secondGalleryImages ): ?>
									<?php foreach( $secondGalleryImages as $img ): $c++;?>	
										<div class="col-sm-3 second-gallery__slide-size">
											<div class="second-gallery__item item-number-<?php echo $c;?>" style="background-image: url('<?php echo $img['url']; ?>')"></div>
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
	
					<div class="container-fluid third-gallery-title">
						<div class="row">
							<div class="col-sm-12">
								<div class="c-section-title">
									<span class="c-section-title__slash">/</span>
									<span class="c-section-title__num">03</span>
									<h3 class="c-section-title__title"><?php echo get_field('third_gallery_title')?></h3>
								</div>
							</div>
						</div>
					</div>

					<div class="second-gallery third-gallery container-fluid" itemscope itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">
						<div class="row">
							<div class="slider">
								<?php 
								$thirdGalleryImages = get_field('third_gallery');
								$d = 0;
								if( $thirdGalleryImages ): ?>
									<?php foreach( $thirdGalleryImages as $img ): $d++;?>	
										<div class="col-sm-3 second-gallery__slide-size">
											<div class="second-gallery__item item-number-<?php echo $d;?>" style="background-image: url('<?php echo $img['url']; ?>')"></div>
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
	
					<div class="container-fluid c-cta">
						<div class="row">
							<div class="col-sm-12">
								<a title="Visit Falezze website" class="black-button" target="_blank" rel="noopener noreferrer" href="https://www.falezze.it/"><span class="black-button__title">Falezze Website</span><svg class="black-button__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 22"><path d="M1.75.62L.617 1.784a.412.412 0 00-.116.288v.002c0 .11.044.213.12.289L9.266 11 .62 19.636a.412.412 0 00-.12.289v.002c0 .108.042.212.116.288l1.135 1.166c.153.157.401.159.556.003l10.074-10.093a.412.412 0 000-.582L2.307.616a.388.388 0 00-.556.003z" fill="#FFF" fill-rule="nonzero"/></svg></a>
							</div>
						</div>
					</div>
	
					<div class="container-fluid third-gallery-title">
						<div class="row">
							<div class="col-sm-12">
								<div class="c-section-title">
									<span class="c-section-title__slash">/</span>
									<span class="c-section-title__num">04</span>
									<h3 class="c-section-title__title">Contact me</h3>
								</div>
							</div>
						</div>
					</div>
					<?php partial("form") ?>
				</section>
			</main>
			<?php partial("footer");?>
		</div>
	</div>
</div>

<?php get_footer();?>
