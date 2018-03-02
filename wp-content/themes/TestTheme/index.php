<?php get_header() ?>
<div class="container">
  <h1>Home Page</h1>
  <div class="main">
    <?php if(have_posts()) { while(have_posts()) { the_post(); ?>
      <div class="post">
        <div class="post__image">
          <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
        </div>
        <div class="post__body">
          <div class="post__header">
          <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
            <span><?php echo get_the_date(); ?></span>
          </div>
          <div class="post__content">
            <?php the_content('<span>Read More...</span>'); ?>
          </div>
      </div>
    <?php }} else { ?>
        <p>Записей нет</p>
    <?php } ?>
    
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer() ?>

