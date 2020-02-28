<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'snowball_shop' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'snowball_daniel' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'Daniel10.' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', '10.55.121.167' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'V E`+oE]+;aTq%7R?hc-p#%NvAU=py>Td%[$VOIw:n}J0t+g2LTl<1mmPzGB1FfX' );
define( 'SECURE_AUTH_KEY', '_>{b0l%~P,OObV0Y+x9)&=8 Z~#}5FrausGB`UE)@;l72Kh4j]UGl87DUz:273wd' );
define( 'LOGGED_IN_KEY', ',GI^yXceI=$#>/=,)GtYTVtWP%Ey,VXyTh.]!zul_h5lHw=A$VE<Kun$mrPNj+9y' );
define( 'NONCE_KEY', '%BYCBsXFHHw9}*~$DcWa-d.OZYPhBZ7b8fr9murgto|T>v}>/PA9i]c!2D_r9f9<' );
define( 'AUTH_SALT', '~m:Aw4:F-t899t?w<jZmRJ7}xJi!K*n?O<bH-D-+Li@k44lF&4}E/e~R]b>>4h.F' );
define( 'SECURE_AUTH_SALT', 'fU`vD@M3UABy^%:brP^RSq7QD;si58)t45n,ih8cz_(,]uoIm*>E{6th0iA 5qv7' );
define( 'LOGGED_IN_SALT', 'T[Pys,?+p.X<qS-5g*zak o6VQ2y3A@yD#z%s[:G5Decm]TzEIg(3.>[:>^K]Hmv' );
define( 'NONCE_SALT', 'tU6B OYRAX`GJ_!zj~Jw*zlCBEzFFeZo,yG,N]J+Dv666U(s|P9)elBHYlXb47kr' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

