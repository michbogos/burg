<!-- Add cahing later -->
<!DOCTYPE html>
<html class="m-0 p-0" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body class="min-h-screen flex flex-col backdrop-blur-sm bg-schloss bg-no-repeat m-0 p-0 overflow-x-hidden">
      <?php get_header()?>
      <div class="flex flex-row flex-1 justify-center w-full">
        <div class="lg:gap-4 sm:gap-1 grid w-11/12 lg:grid-cols-5 md:grid-cols-1 lg:m-5 sm:m-0">
          <div class="lg:col-span-4 md:col-span-1 flex flex-col bg-white rounded-xl drop-shadow-lg p-5">
          <?php foreach (get_posts() as $post):?>
            <div class="flex flex-col relative z-0">
              <h1 class="text-3xl"><?php echo $post->post_title?></h1>
              <div>
                <?php echo $post->post_content?>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
          <?php get_sidebar("left")?>
        </div>
      </div>
      <?php get_footer()?>
  </body>
</html>