<?php
get_header();
?>
<main class="flex-default flex-justify-center width-total width-max-large center-horizontally flex-align-center gap-m">
  <img class="project-image-1" src="<?php echo get_field('project_image')['url'] ?>" width="500">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      ?>
      <div class="flex-default flex-column">
        <?php
        the_content();
        ?>
        <img class="project-image-2" src="<?php echo get_field('project_image_2')['url'] ?>" width="500">

      </div>
      <?php
    }
  }

  ?>
</main>

<?php get_footer() ?>