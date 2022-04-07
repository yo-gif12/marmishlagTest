<?php get_header(); ?>

<?php while(have_posts()) : the_post() ?>

    <div class="relative w-full">
        <div class="relative">
            <div class="container m-auto px-6 pt-32 md:px-12 lg:pt-[4.8rem] lg:px-7">
                <div class="flex items-center flex-wrap px-2 md:px-0">
                    <div class="relative lg:w-6/12 lg:py-24 xl:py-32">
                        <h1 class="font-bold text-8xl text-yellow-900 md:text-6xl lg:w-10/12 text-fuchsia-700">Marmishlag</h1>
                        <form action="" class="w-full mt-12">
                            <div class="relative flex p-1 rounded-full bg-white border border-fuchsia-200 shadow-md md:p-2">
                                <?php get_search_form(); ?>
                            </div>
                        </form>
                        <p class="mt-8 text-black lg:w-10/12">
                            Vous voulez flex devant vos invités ? Votre Date ? Venez rechercher la recette qui vous convient, adapté aux shlag comme au flexeur !<br>
                            Envi de partager vos recettes ? 
                            <?php if ( is_user_logged_in() ) : ?>
                                <a href="/wp-admin/post-new.php?post_type=recettes2" class="text-fuchsia-700">Partagez les !</a>
                            <?php else : ?>
                                <a href="/connexion" class="text-fuchsia-700">Connectez-vous !</a>
                            <?php endif; ?>
                        </p>
                        
                    </div>
                    <div class="ml-auto -mb-24 lg:-mb-56 lg:w-6/12">
                        <img src="https://tailus.io/sources/blocks/food-delivery/preview/images/food.webp" class="relative" alt="food illustration" loading="lazy" width="4500" height="4500">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>