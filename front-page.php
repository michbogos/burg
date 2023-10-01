<!-- Add cahing later -->
<!DOCTYPE html>
<html class="m-0 p-0" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body class="min-h-screen flex flex-col backdrop-blur-xl bg-schloss bg-center bg-no-repeat m-0 p-0 overflow-x-hidden">
      <?php get_header()?>
      <div class="flex flex-row flex-1 justify-center w-full">
        <div class="lg:gap-4 sm:gap-1 grid w-11/12 lg:grid-cols-5 md:grid-cols-1 sm:grid-cols-1 lg:m-5 sm:m-0 justify-around">
          <?php get_sidebar("left")?>
          <h1 class="lg:col-span-3 sm:col-span-1">Front page</h1>
          <?php get_sidebar("right")?>
        </div>
      </div>
      <?php get_footer()?>
  </body>
</html>