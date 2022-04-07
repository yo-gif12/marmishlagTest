<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <div class="w-full z-10 w-screen flex flex-row items-center p-1 justify-between bg-white shadow-xs">
      <a href="<?= home_url() ?>">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>" alt="Logo" width="200px" height="auto" />
    </a>
    <div class="flex flex-row-reverse mr-4 ml-4 md:hidden">
      <i class="fas fa-bars"></i>
    </div >
      <div class="flex flex-row items-center mr-8 hidden md:flex">
        <a href="<?= get_post_type_archive_link('recettes2'); ?>" class="m-3 max-w-sm text-md">
			<span class="link link-underline link-underline-black text-black">Liste des recettes</span>
		</a>
        <?php if ( is_user_logged_in() ) : ?>
        <a href="/wp-admin/post-new.php?post_type=recettes2" class="m-3 max-w-sm text-md">
			<span class="link link-underline link-underline-black text-black">Ajouter une recette</span>
		</a>
        <a href="/wp-admin/profile.php" class="m-3 max-w-sm text-md">
			<span class="link link-underline link-underline-black text-black">Profil</span>
		</a>
        <a href="/wp-login.php?action=logout" class="ml-2 border-2 border-fuchsia-700 text-fuchsia-700 px-4 py-2 rounded overflow-visible">
			Déconnexion
		</a>
        <?php else : ?>    
        <a href="/connexion" class="ml-2 mr-1 border-2 border-fuchsia-700 text-fuchsia-700 px-4 py-2 rounded overflow-visible">
			Connexion
		</a>
        <a href="/inscription" class="ml-1 border-2 border-fuchsia-700 bg-fuchsia-700 text-white px-4 py-2 rounded overflow-visible">
			Inscription
		</a>
        <?php endif; ?>
      </div>
  </div>