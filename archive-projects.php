<?php get_header() ?>
<main class="main main-project grid-default grid-duo gap-m width-total width-max-large center-horizontally">
  <?php
  while (have_posts()) {
    the_post();
    ?>
    <a class="main-project-item flex-default gap-xs" href="<?php the_permalink(); ?>">
      <img src="<?php echo get_field('project_image')['url'] ?>" alt="<?php echo $alt = get_field('project_image')['alt'];
         ?>">

      <div class="flex-default flex-column flex-justify-center ">
        <?php the_title(); ?>
        <p><?php the_excerpt() ?></p>
      </div>
    </a>
    <?php
  }
  ?>
</main>
<?php get_footer() ?>