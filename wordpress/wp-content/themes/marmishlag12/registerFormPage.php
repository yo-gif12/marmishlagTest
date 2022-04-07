<?php /* Template Name: registerFormPage */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="https://images.unsplash.com/photo-1562059390-a761a084768e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1419&q=80" alt="" class="w-full h-full object-cover">
  </div>

  <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">


      <h1 class="text-xl md:text-2xl mt-12">Inscription</h1>

      <form class="mt-6" action="<?php echo admin_url('admin-post.php'); ?>" method="post">
            <label class="block text-gray-700 mt-4" for="user_email">Adresse de messagerie</label>
            <input class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" name="user_email" placeholder="Email" type="text">
            <label class="block text-gray-700 mt-4" for="user_login">Pseudo</label>
            <input class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" name="user_login" placeholder="Nom d'utilisateur" type="text">
            <label class="block text-gray-700 mt-4" for="user_pass">Mot de passe</label>
            <input class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
            focus:bg-white focus:outline-none" required name="user_pass" placeholder="Mot de passe" type="pwd">
            <?php wp_referer_field(); ?>
            <input type="hidden" name="action" value="wpregister_marmishlag_form">
            <button class="w-full block bg-fuchsia-700 hover:bg-fuchsia-400 focus:bg-fuchsia-400 text-white rounded-lg
              px-4 py-3 mt-6" type="submit">
                S'inscrire
            </button>
        </form>

      <hr class="my-6 border-gray-300 w-full">


      <p class="mt-8 text-sm">Déjà inscrit ? <a href="/connexion" class="text-fuchsia-700 hover:text-fuchsia-800 font-semibold">Connectez-vous</a></p>


    </div>
  </div>

</section>

<?php wp_footer() ?>
</body>
</html>