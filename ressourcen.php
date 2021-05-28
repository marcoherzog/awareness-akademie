<?php
/**
 * Template Name: Ressourcen
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Awareness_Akademie
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if( have_rows('header') ): ?>
			<?php while( have_rows('header') ): the_row(); ?>
				<?php if( get_row_layout() == 'title' ): ?>
					<section class="col-2">
						<div class="left"><small><?php the_sub_field('left'); ?></small></div>
						<div class="right"><h1><?php the_sub_field('right'); ?></h1></div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'paragraph' ): ?>
					<section class="col-2">
						<div class="left"><small><?php the_sub_field('left'); ?></small></div>
						<div class="right"><?php the_sub_field('right'); ?></div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'intro' ): ?>
					<section class="intro row-2">
						<div class="big"><h3><?php the_sub_field('big'); ?></h3></div>
						<div class="small"><?php the_sub_field('small'); ?></div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'call_to_action' ): ?>
					<section class="call-to-action row-2">
						<h1><?php the_sub_field('header'); ?></h1>
						<p><?php the_sub_field('sub_header'); ?></p>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'boxes' ): ?>
					<section class="box-2">
						<div class="left">
							<div class="inner">
								<article class="header element"><?php the_sub_field('left_header'); ?></article>
								<?php
								$link = get_sub_field('left_title');
								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button title element" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h1><?php echo esc_html( $link_title ); ?></h1></a>
								<?php endif; ?>
								<p class="subtitle element"><?php the_sub_field('left_subtitle'); ?></p>
								<div class="buttons element">
									<p class="reservation"><?php the_sub_field('left_button_reservation'); ?></p>
									<?php
									$link = get_sub_field('left_button_redirect');
									if( $link ):
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button to-page" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><small><?php echo esc_html( $link_title ); ?></small></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="inner">
								<article class="header element"><?php the_sub_field('right_header'); ?></article>
								<?php
								$link = get_sub_field('right_title');
								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button title element" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h1><?php echo esc_html( $link_title ); ?></h1></a>
								<?php endif; ?>
								<p class="subtitle element"><?php the_sub_field('right_subtitle'); ?></p>
								<div class="buttons element">
									<?php
									$link = get_sub_field('right_button_redirect');
									if( $link ):
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button to-page" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><small><?php echo esc_html( $link_title ); ?></small></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'contact' ): ?>
					<section class="col-3">
						<div>
							<small><?php the_sub_field('left_title'); ?></small>
							<?php the_sub_field('left'); ?>
						</div>
						<div>
							<small><?php the_sub_field('center_title'); ?></small>
							<?php the_sub_field('center'); ?>
						</div>
						<div>
							<small><?php the_sub_field('right_title'); ?></small>
							<?php the_sub_field('right'); ?>
						</div>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'swiper' ): ?>
					<section class="swiper">
						<!-- Swiper -->
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php if( have_rows('slideshow') ): ?>
									<?php while( have_rows('slideshow') ): the_row();

										// Load sub field value.
										$image = get_sub_field('image');
										?>

											<div class="swiper-slide">
												<img src="<?php echo esc_url( $image['url'] ); ?>" alt="">
											</div>

									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<!-- Add Arrows -->
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
						<!-- Swiper -->
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'shortcode' ): ?>
					<section class="col-1">
						<h4><?php the_sub_field('title'); ?></h4>
						<?php the_sub_field('shortcode_text'); ?>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'hero_image' ): ?>
					<section class="hero" style="background-image: url('<?php the_sub_field('image'); ?>');"></section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="secondary">
			<div class="entry-header">
				<div class="resetFilters german">Alle</div>
				<div class="resetFilters english">All</div>
				<details class="categories">
					<summary>
						<small class="german">Thema auswählen</small>
						<small class="english">Choose topic</small>
					</summary>
					<ul class="filters">
						<?php if( have_rows('filters') ): ?>
							<?php while( have_rows('filters') ): the_row();
								$category = get_sub_field('category');
								?>
								<li class="filter">
									<input type="checkbox" class="filtercheck" id="<?php the_sub_field('category'); ?>" />
									<label for="<?php the_sub_field('category'); ?>">
										<small class="<?php the_sub_field('category'); ?>"><?php the_sub_field('category'); ?></small>
									</label>
								</li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<button class="applyFilters german">Filtern</button>
					<button class="applyFilters english">Filter</button>
				</details>
			</div><!-- .entry-header -->

			<section class="ressourcen">
				<div class="repeater">
					<?php if( have_rows('repeater') ): ?>
						<?php while( have_rows('repeater') ): the_row();
							$title = get_sub_field('title');
							$link = get_sub_field('link');
							$type = get_sub_field('type');
							$category = get_sub_field('category');
							$tags = get_sub_field('tags');
							?>
							<div class="inner <?php the_sub_field('category'); ?>">
								<article class="header">
									<small><?php the_sub_field('type'); ?></small>
									<small><?php the_sub_field('category'); ?></small>
								</article>
								<div class="title">
									<?php
									$link = get_sub_field('title');
									if( $link ):
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<h3><a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></h3>
									<?php endif; ?>
								</div>
								<?php if( get_sub_field('tags') ): ?>
								<div class="tags">
									<small><?php the_sub_field('tags'); ?></small>
								</div>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section>
		</div>

		<div class="tertiary">
			<?php if( have_rows('footer') ): ?>
				<?php while( have_rows('footer') ): the_row(); ?>
					<?php if( get_row_layout() == 'title' ): ?>
						<section class="col-2">
							<div class="left"><small><?php the_sub_field('left'); ?></small></div>
							<div class="right"><h1><?php the_sub_field('right'); ?></h1></div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'paragraph' ): ?>
						<section class="col-2">
							<div class="left"><small><?php the_sub_field('left'); ?></small></div>
							<div class="right"><?php the_sub_field('right'); ?></div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'intro' ): ?>
						<section class="intro row-2">
							<div class="big"><h3><?php the_sub_field('big'); ?></h3></div>
							<div class="small"><?php the_sub_field('small'); ?></div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'call_to_action' ): ?>
						<section class="call-to-action row-2">
							<h1><?php the_sub_field('header'); ?></h1>
							<p><?php the_sub_field('sub_header'); ?></p>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'boxes' ): ?>
						<section class="box-2">
							<div class="left">
								<div class="inner">
									<article class="header element"><?php the_sub_field('left_header'); ?></article>
									<?php 
									$link = get_sub_field('left_title');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button title element" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h1><?php echo esc_html( $link_title ); ?></h1></a>
									<?php endif; ?>
									<p class="subtitle element"><?php the_sub_field('left_subtitle'); ?></p>
									<div class="buttons element">
										<p class="reservation"><?php the_sub_field('left_button_reservation'); ?></p>
										<?php 
										$link = get_sub_field('left_button_redirect');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<a class="button to-page" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><small><?php echo esc_html( $link_title ); ?></small></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="right">
								<div class="inner">
									<article class="header element"><?php the_sub_field('right_header'); ?></article>
									<?php 
									$link = get_sub_field('right_title');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button title element" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><h1><?php echo esc_html( $link_title ); ?></h1></a>
									<?php endif; ?>
									<p class="subtitle element"><?php the_sub_field('right_subtitle'); ?></p>
									<div class="buttons element">
										<?php 
										$link = get_sub_field('right_button_redirect');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<a class="button to-page" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><small><?php echo esc_html( $link_title ); ?></small></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'contact' ): ?>
						<section class="col-3">
							<div>
								<small><?php the_sub_field('left_title'); ?></small>
								<?php the_sub_field('left'); ?>
							</div>
							<div>
								<small><?php the_sub_field('center_title'); ?></small>
								<?php the_sub_field('center'); ?>
							</div>
							<div>
								<small><?php the_sub_field('right_title'); ?></small>
								<?php the_sub_field('right'); ?>
							</div>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'swiper' ): ?>
						<section class="swiper">
							<!-- Swiper -->
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<?php if( have_rows('slideshow') ): ?>
										<?php while( have_rows('slideshow') ): the_row();

											// Load sub field value.
											$image = get_sub_field('image');
											?>

												<div class="swiper-slide">
													<img src="<?php echo esc_url( $image['url'] ); ?>" alt="">
												</div>

										<?php endwhile; ?>
									<?php endif; ?>
								</div>
								<!-- Add Arrows -->
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>
							<!-- Swiper -->
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'shortcode' ): ?>
						<section class="col-1">
							<?php the_sub_field('shortcode_text'); ?>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'contact-form' ): ?>
						<section class="contact-form">
							<?php the_sub_field('shortcode_text'); ?>
						</section>
					<?php endif; ?>
					<?php if( get_row_layout() == 'hero_image' ): ?>
						<section class="hero" style="background-image: url('<?php the_sub_field('image'); ?>');"></section>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
