<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'longboard');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[7e(4)o=<(07x48?eFeRk0>U*>myyavp>kng`LOBLilu,2wQby%/`~b>It>rWsA>');
define('SECURE_AUTH_KEY',  '<.:6-!i=bfVS%l}jP$ (.la;g#TfffHXraJUP%`hQ(%D7q>GKGMpf?yHCrFe7 hk');
define('LOGGED_IN_KEY',    'ckJWAZ64p.Vt?Wn$K#1GH2rQ,uEkm[w~sV}1|9sq[~qW@Ep5{[-pj;$ Z!Lx]#wT');
define('NONCE_KEY',        't i.?,1#D6`nOG9$zj@/6+,+ZR;9m34Pd1NL^82M: }C1i6Lys.Sy]mrx;5o`B)I');
define('AUTH_SALT',        '0|x/v6ZG(I]HfR,~Bg$:Y@cH%*wk/(VX2YxjL;~iSZ*/rU|KecBP:QqXCG^^N)a7');
define('SECURE_AUTH_SALT', 'oGMav4~`/);_ORpI>Yu=1BNg/R-u[cWcs1Q*j.+l~<6(Ts?#O<%xP//SX:/N,VSq');
define('LOGGED_IN_SALT',   '$Z$T,4Fta+,jsWKlVaaxmdEWqaUF`9m>%hcH:9l?7t_aUX2g)?AtrToYIjx@*g$0');
define('NONCE_SALT',       '^mEw3{kh^`h,QH]m-W<_xgkn^V2GE(a5; FaQ,E<7nP$Gld,[ms!lE)KvTVI-hi1');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'lbd_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');