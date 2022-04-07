<?php get_header(); ?>

    <!-- main container -->
    <div class="container my-20 mx-auto px-4 py-20">
        <!-- recipe card grid-->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 mb-8">

            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <!-- card -->
                <div class="bg-white rounded-xl overflow-hidden relative shadow-lg">
                <div>
                    <?php the_post_thumbnail('post-thumbnail-crop', ['class' => 'w-full', 'alt' => 'Image de la recette', 'tabindex' => '0']) ?>
                </div>
                <div class="px-4 py-6">
                    <h2 class="text-xl text-fuchsia-700 overflow-hidden" style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"><?php the_title() ?></h2>
                    <div class="flex justify-between mt-4 mb-4 text-gray-500">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="rgb(162 28 175)">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="ml-1 lg:text-md"><?= get_field('temps_de_preparation') ?> minutes</span>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="rgb(162 28 175)">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                        <span class="ml-1 lg:text-md"><?= get_field('pour_combien_de_personnes') ?> personne(s)</span>
                    </div>
                    </div>
                    <p class="w-full mb-8 text-sm overflow-hidden text-gray-500" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?= get_field('description') ?></p>
                    <a href="<?php the_permalink() ?>" class="text-white bg-fuchsia-700 py-2 px-3 rounded-md uppercase">Voir la recette</a>
                </div>
                <div class="absolute top-0 right-0 mt-4 mr-4 bg-fuchsia-700 text-white rounded-full pt-1 pb-1 pl-4 pr-5 text-xs uppercase">
                    <span><?= get_field('difficulte') ?></span>
                </div>
                </div>
            <?php endwhile ?>
            
        <?php else : ?>
            <h2>Pas de posts</h2>
        <?php endif ?>

      </div>
      <?php montheme_pagination()?>

    </div>

<?php get_footer(); ?>