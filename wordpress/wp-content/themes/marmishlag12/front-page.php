<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>

<?php while(have_posts()) : the_post() ?>

    <div class="relative w-full">
        <div class="relative bg-yellow-50">
            <div class="container m-auto px-6 pt-32 md:px-12 lg:pt-[4.8rem] lg:px-7">
                <div class="flex items-center flex-wrap px-2 md:px-0">
                    <div class="relative lg:w-6/12 lg:py-24 xl:py-32">
                        <h1 class="font-bold text-4xl text-yellow-900 md:text-5xl lg:w-10/12">Marmishlag</h1>
                        <form action="" class="w-full mt-12">
                            <div class="relative flex p-1 rounded-full bg-white border border-yellow-200 shadow-md md:p-2">
                                <select class="hidden p-3 rounded-full bg-transparent md:block md:p-4" name="domain" id="domain">
                                    <option value="design">FastFood</option>
                                    <option value="development">Restaurant</option>
                                    <option value="marketing">Marketing</option>
                                </select>
                                <?php get_search_form(); ?>
                            </div>
                        </form>
                        <p class="mt-8 text-gray-700 lg:w-10/12">Sit amet consectetur adipisicing elit. <a href="#" class="text-yellow-700">connection</a> tenetur nihil quaerat suscipit, sunt dignissimos.</p>
                    </div>
                    <div class="ml-auto -mb-24 lg:-mb-56 lg:w-6/12">
                        <img src="https://tailus.io/sources/blocks/food-delivery/preview/images/food.webp" class="relative" alt="food illustration" loading="lazy" width="4500" height="4500">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php the_content() ?>
    <a href="<?= get_post_type_archive_link('post') ?>">Liste des recettes</a>

<?php endwhile; ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>