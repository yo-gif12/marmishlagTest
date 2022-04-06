<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'marmishlag' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tIyR=c`dOhJ=9u;Sh56vUzKFpa-D#LJv*Uq6zkTly9T1*@al|Z5F+}Yj?whGD08{' );
define( 'SECURE_AUTH_KEY',  'P>Y(/J.(F_P1F_K>]NDQ.$%,,PQ=lsPim##&zw`pO+~:rv7rgsf@!f=0Yl](+6{:' );
define( 'LOGGED_IN_KEY',    'IBuN(s=f[=?Qg*_pGi*_ARe$f@J;<y.C7OA^DAQ:kr8>@4X1+Rrh9Jf4{x)pyp#g' );
define( 'NONCE_KEY',        '^v;Cl;caKCz/U1n#smF++yXs8ARMNt|f$#YLZgkKQl4AwKjgQ8gxT3tZz1AW^lv~' );
define( 'AUTH_SALT',        '/p9DU6pgFe218));Qi- l=bs_  =dXn-ZenFr,gG71-PYTK#.(8*DG2X=Er`TqQ$' );
define( 'SECURE_AUTH_SALT', ']T)w@{Zj}8cbAN?s&cAo:cHiG(S(J{>3<B$_M2xONT)l5&AU#|O@B+:]JnjS+xj[' );
define( 'LOGGED_IN_SALT',   '/.!dA<5wzj*a9q-9ck%asU_(qfH63RycJYZc,<^v]0o@zT|L3o5{U&m;b,GNA/xu' );
define( 'NONCE_SALT',       'u_n,Ua 37Uudh^x#MI:h~n*h($[JZJ3LY^$e81`g{Tz;Sp}1pV(I*BUpoYIsKdQ1' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
