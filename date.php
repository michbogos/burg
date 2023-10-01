<!-- Add cahing later -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
<body>
	<?php get_header()?>
	<div class="grid lg:grid-cols-4 md:grid-cols-1 justify-center">
		<div>
			<?php get_sidebar("left")?>
		</div>
		<div class="lg:col-span-2 md:col-span-1 flex flex-col justify-center gap-4">
			<?php while (have_posts()) : the_post(); ?>
				<div class="flex flex-col">
					<h1 class="text-3xl"><?php the_title()?></h1>
					<div>
						<?php the_content()?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<div>
			<?php get_sidebar("right") ?>
		</div>
	</div>
</body>