<?php get_header() ?>

<main class="p-4">
  <section class="main flex-default flex-justify-around">
    <div class="width-total width-max-medium">
      <p>Hello! I am</p>
      <p>Uroš Žikić</p>
      <p>Web Developer</p>
      <p>I'm a passionate web developer with a knack for crafting dynamic, UI-rich websites. With expertise in both
        front-end and back-end programming, I bring a creative edge to every project. I'm excited to join a
        collaborative team environment to both contribute and advance my skills.
      </p>
      <a href="<?php echo get_theme_file_uri('/zikic-resume.pdf') ?>">Get my resume</a>
    </div>
    <div class="main-image"
      style="background-image: url(<?php echo get_theme_file_uri('/screenshot.jpg') ?>);  background-size: cover;"
      width="300" height="300">
    </div>
  </section>
</main>

<?php get_footer() ?>