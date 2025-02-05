<?php get_header() ?>
<main class="main main-project grid-default grid-duo gap-m width-total width-max-large center-horizontally">
  <?php
  while (have_posts()) {
    the_post();
    ?>
    <div class="main-project-item flex-default gap-xs">
      <img src="<?php echo get_field('project_image') ?>">
      <div class="flex-default flex-column flex-justify-center ">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p><?php the_excerpt() ?></p>
      </div>

    </div>
    <?php
  }
  ?>
</main>
<?php get_footer() ?>