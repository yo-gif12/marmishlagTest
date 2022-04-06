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

<!-- component -->
<div tabindex="0" class="focus:outline-none">
            <!-- Remove py-8 -->
            <div class="mx-auto container py-8">
                <div class="flex flex-wrap items-center lg:justify-between justify-center">
                    <!-- Cards -->
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8 shadow-xl">
                                <div>
                                    <!-- <img alt="person capturing an image" src="<?php the_post_thumbnail_url() ?>" tabindex="0" class="" /> -->
                                    <?php the_post_thumbnail('post-thumbnail-crop', ['class' => 'focus:outline-none w-full h-44', 'alt' => '', 'tabindex' => '0']) ?>
                                </div>
                                <div class="bg-white">
                                    <div class="flex items-center justify-between px-4 pt-4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                            </svg>
                                        </div>
                                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center">
                                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold"><?php the_title() ?></h2>
                                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5"><?php the_time( get_option( 'date_format' ) ); ?></p>
                                        </div>
                                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2"><?php the_excerpt() ?></p>
                                        <div class="flex mt-4">
                                            <div>
                                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                            </div>
                                            <div class="pl-2">
                                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between py-4">
                                            <a href="<?php the_permalink() ?>" tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Lire plus</a>
                                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 Ends -->
                        <?php endwhile ?>

                        

                    <?php else : ?>
                        <h2>Pas de posts</h2>
                    <?php endif ?>
                </div>
                
                <!-- <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px">
                        <li>
                            <a href="#"
                                class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>

                        <li>
                            <a href="#"
                                class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>     

                        <li>
                            <a href="#" aria-current="page"
                                class="bg-blue-50 border border-gray-300 text-blue-600 hover:bg-blue-100 hover:text-blue-700  py-2 px-3 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>

                        <li>
                            <a href="#"
                                class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 rounded-r-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav> -->

                <?php montheme_pagination() ?>
                
                
                

            </div>
        </div>
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    </div>
</div>

<?php the_content() ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>