<?php /* Template Name: LoginFormPage */ ?>
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
    <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" alt="" class="w-full h-full object-cover">
  </div>

  <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-100">


      <h1 class="text-xl md:text-2xl mt-12">Connexion</h1>

      <form action="<?php echo home_url('wp-login.php'); ?>" method="post">
        <label class="block text-gray-700 mt-4" for="log">Identifiant ou adresse de messagerie</label>
        <input type="text" placeholder="Entrez votre email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-fuchsia-700 focus:bg-white focus:outline-none" autofocus autocomplete required name="log">
        <label class="block text-gray-700 mt-4" for="pwd">Mot de passe</label>
        <input type="password" placeholder="Entrez votre Mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-fuchsia-700
        focus:bg-white focus:outline-none" required name="pwd">
        <input type="hidden" name="redirect_to", value="<?= home_url() ?>">
        <button type="submit" class="w-full block bg-fuchsia-700 hover:bg-fuchsia-400 focus:bg-fuchsia-400 text-white rounded-lg
              px-4 py-3 mt-6">Connexion</button>
    </form>

    <hr class="my-6 border-gray-300 w-full">

    <p class="mt-8 text-sm">Vous n'êtes pas inscrit ? <a href="/inscription" class="text-fuchsia-700 hover:text-fuchsia-800 font-semibold">Créer mon compte</a></p>


    </div>
</div>

</section>
<?php wp_footer() ?>
</body>
</html>