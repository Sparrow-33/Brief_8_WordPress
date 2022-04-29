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
define( 'DB_NAME', 'brief8' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '@Rdi>1I^vlj`eYe&nEn40pe@)inDLZM~+&30O@]aOfNFRu}(2ndQaz[6MXM9O!JJ' );
define( 'SECURE_AUTH_KEY',  'h0Nm.JOovR<}}hr&laEw_wd8KY7@%.cog1_P3mLxERw/_[}s>CzPvpx!%s<T+-Y[' );
define( 'LOGGED_IN_KEY',    '=xk,HGwcFBlK!efhq:_%lYyYn dEAZ0P.b8Wc|3rD1Dp3tS`VoA%ivC5XSu72&f+' );
define( 'NONCE_KEY',        'Q#jM|~Vaacy+x,nWQ)5 /_lb(rWtDg=5Iwt-IUVL=C$hEa3lOJ {.Gid;r2?X_)<' );
define( 'AUTH_SALT',        'G-to`pR |y G&@@$=K5o/gHBlbSIhm(+]H K=^z~=t2T|IlV<WjdX]!|}b):~Iy2' );
define( 'SECURE_AUTH_SALT', 'Q3,l|[a0&[X0k!f:N$lSLA$vYP6.uKh0Gw6m!G$@{EANYno^9i;To9GhQJcIdiSh' );
define( 'LOGGED_IN_SALT',   '+8)+=rJCAr@YjzR+,}))#buft)B*cTYq@isES$BQF>&TG!I<!n bbJ__{Kws!(`Q' );
define( 'NONCE_SALT',       ',k]@mq{1N+VoC8?I>EwWB55I$K9epI%XUFRiG|SECQnz=86|_6H{hL%rPgNMBjHt' );
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
