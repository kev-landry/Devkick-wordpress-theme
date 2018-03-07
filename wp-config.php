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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '4{!R&+]$TKzSi6/Mgq^S e^3w$^<s~>kE%S< UI65Dwbe[:6tlmL[h_%/DQtFP]k');
define('SECURE_AUTH_KEY',  'h`-~@CM`DSRV(!$ izZkT/s0^UetyK~QaZa]<ka&cn4bfuI=h`C{P{4SibvnjxDn');
define('LOGGED_IN_KEY',    '})(4_.z,dB~>}YSii$IOc26I8&?hbW<4poTp0}[$I3_SwE)o;dqYkSWGq$V+ybHP');
define('NONCE_KEY',        'JzgM(9T]-TS;`l])({[^>9E-yv4]}Tkt6v r.G%hm=,3/v4bp=UKtpZ[KaC;|o}]');
define('AUTH_SALT',        'xK0y5FiLknu?t2Lj7Y6IA-=V?P#rq]q4Z&rEDsQ>$Xj3LI`5_sjQ%mTDx2E-S)Kb');
define('SECURE_AUTH_SALT', ':9/:nhB1sP%OSwYu|gd,Plo5M$<UO32I|z[*R`CDE3Pf>;EdwUxv[+SX;):;NbW+');
define('LOGGED_IN_SALT',   ')P}WV!%D+ftc.!$9QehS{(VY|szyFv,^9H#+y)bOve_`k,GdQA:fXl6/+`(S[rWd');
define('NONCE_SALT',       '{bsfwLlUd[(*Z&KCf@O!*L0Te4,F+JNunkWTF{YA@ku!6_2(G@J&|rF7)Z+fcF$%');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
