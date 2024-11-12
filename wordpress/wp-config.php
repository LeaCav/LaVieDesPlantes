<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'LCPkb?P[Oor%9]+hDogQt<BDIP^K[inl#xAnc5oyF,eV:gD{_mdUD8T.wBA^@@Wc' );
define( 'SECURE_AUTH_KEY',  'l[g75)+Oml2{Q|hcaR@; K5[(98%[OFC+ziK5M=n`:`2CiUqRfiXy}6UP/>>~r6N' );
define( 'LOGGED_IN_KEY',    'bAmDbh%GeG>q=H!6;1L`fflemyAtZ64+}8KvEzyxWkR9nw3nK60jz?q6]_e/[cvl' );
define( 'NONCE_KEY',        'yM]:^I:E}*J(:lP1  bKo?*?t7e9T0z$UyMnz+;M?~3w.>6-eqT,8oOu<4NefjyN' );
define( 'AUTH_SALT',        'HR6Z+a-tl*j]95MqY*(u3Zwvw14]K?XACQq*CirJ+=129aUOAjSBu6N3.ubv[SXq' );
define( 'SECURE_AUTH_SALT', 'WPC}2+J-T+(U/TvL1I0)1ujF6?wHX3BnjVahWbj0uXB~akpK&v[X@D0U242oqp9a' );
define( 'LOGGED_IN_SALT',   'HBK,OOy*XI5OyoR`dFVZ!3hIanA[0{AoTAo,[n`p&T>9W}O&$VV?^;0ml{%^@L_[' );
define( 'NONCE_SALT',       'j:rMGJ},qxI)5KzY*6m _/<:|5(g}h?VFUGoZD^=8_K`kZBTCA SpxPCfNv!sIYU' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
