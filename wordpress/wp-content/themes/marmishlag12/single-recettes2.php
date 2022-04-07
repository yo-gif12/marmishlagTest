<?php get_header(); ?>

<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
<main class="relative bg-white py-32 rounded-3xl shadow-xl mt-20 mb-32">
   <figure> 
      <img class="single-post-image" src="<?php the_post_thumbnail_url(); ?>" class="mx-auto" alt="">
    </figure>

    <h1 class="single-post-title"><?php the_title() ?></h1>

    <div class="flex justify-between mt-4 mb-4 text-black">
      <div class="flex mx-3 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="rgb(162 28 175)">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span class="ml-1 lg:text-md"><?= get_field('temps_de_preparation') ?> minutes</span>
      </div>
      <div class="flex mx-3 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="rgb(162 28 175)">
          <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
          </svg>
          <span class="ml-1 lg:text-md"><?= get_field('pour_combien_de_personnes') ?> personne(s)</span>
      </div>
      <div class="flex mx-3 items-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="rgb(162 28 175)">
        <path d="M17.728 20.517c-3.488 0-5.613-2.461-6.443-5.517h6.715l.333-2h-7.398c-.059-.664-.064-1.335-.014-2h7.746l.333-2h-7.755c.786-3.106 2.855-5.626 6.154-5.626 1.133 0 2.391.203 3.836.62l.765-3.162c-1.854-.552-3.616-.832-5.244-.832-5.959 0-9.541 4.152-10.594 9h-2.162l-.333 2h2.203c-.049.666-.051 1.334-.007 2h-2.53l-.333 2h3.145c1.033 4.848 4.664 9 11.085 9 1.5 0 3.004-.276 4.476-.821l-.883-3.23c-1.048.378-2.088.568-3.095.568z"/>
      </svg>
          <span class="ml-1 lg:text-md">Budget : <?= get_field('pour_combien_de_personnes') ?> </span>
      </div>
      <div class="flex mx-3 items-center">
      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24" fill="rgb(162 28 175)">
        <path d="M0 1h24v22h-24v-22zm22 20v-15h-20v15h20zm-5.455-10.48l-4.143 3.579c-.675-.138-1.401.068-1.894.618-.735.824-.665 2.088.159 2.824.823.736 2.088.665 2.824-.158.492-.551.616-1.296.402-1.951l3.107-4.507-.455-.405zm-9.545 6.48h-3c0-4.415 3.585-8 8-8 1.163 0 2.269.249 3.267.696l-2.79 2.326-.477-.022c-2.759 0-5 2.24-5 5zm13 0h-3c0-.864-.219-1.676-.605-2.385l1.729-2.761c1.17 1.392 1.876 3.187 1.876 5.146z"/>
      </svg>
          <span class="ml-1 lg:text-md">Difficulté : <?= get_field('difficulte') ?></span>
      </div>
    </div>

  <h2 class="text-xl mt-8 mb-4 text-bold">Ingrédients : </h2>
  <?= get_field('ingredients') ?>

  <p class="mt-8 text-lg"><?= get_field('description') ?></p>

  <div class="mt-8 instructions"><?= get_field('instructions') ?></div>

  <div class="flex justify-between mt-4 text-black">
      <div class="flex mx-3 items-center">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="rgb(162 28 175)" clip-rule="evenodd">
        <path d="M7.467 0c1.102.018 5.555 2.549 6.386 8.558.905-.889 1.409-3.664 1.147-4.843 3.952 2.969 6 6.781 6 11.034 0 5.094-3.43 9.251-8.963 9.251-5.728 0-9.037-3.753-9.037-8.276 0-6.26 5.052-7.62 4.467-15.724zm3.262 19.743c-.749.848-.368 1.945.763 2.045 1.035.093 1.759-.812 2.032-1.792.273-.978.09-2.02-.369-2.893-.998 1.515-1.52 1.64-2.426 2.64zm4.42 1.608c2.49-1.146 3.852-3.683 3.852-6.58 0-2.358-.94-4.977-2.5-7.04-.743 2.867-2.924 3.978-4.501 4.269.05-3.219-.318-6.153-2.602-8.438-.296 4.732-4.321 7.63-4.398 12.114-.029 1.511.514 3.203 1.73 4.415.491.489 1.054.871 1.664 1.16-.121-.608-.062-1.254.195-1.848.911-2.106 3.333-2.321 4.202-5.754.952.749 3.275 3.503 2.778 6.358-.082.469-.224.923-.42 1.344z"/>
      </svg>
          <span class="ml-1 lg:text-md"><?= get_field('calorie') ?> kcal</span>
      </div>
</div>
<?php comments_template(); ?>

<a class="flex flex-row items-center cursor-pointer absolute top-0 left-0 mt-8 left-8 text-fuchsia-700 text-lg uppercase" onclick="history.back();">
<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="rgb(162 28 175)">
  <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/>
</svg>
  Retour
</a>

</main>

<?php endwhile; ?>
    <?php endif; ?>


<?php get_footer(); ?>