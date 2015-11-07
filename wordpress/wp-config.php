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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'yR?3)pJ3bNJZ)Uq2np_r/Bu~)M%WqH-;BEHKQBqL=Y$au%8oGQc:(*|ET63rZW]<');
define('SECURE_AUTH_KEY', '%H+f9N&|U4XO2_3Yb^FWE X_u)[bxbw43[f8vFs/h3xh!W]UZ37T&^.pLjM*gMR&');
define('LOGGED_IN_KEY', 'rn-Aj0g,|JyaFoV@WN/unX~br%YI I{tN-Ggq;2;bdf89!)NXipj8UHQ?l !@a<4');
define('NONCE_KEY', ')$f#(hsOG>^Ac-QsF(&w_bG<TJrnA+a29F|UjxQn|Ibbj;BiU#ZUOf,,537^wFv-');
define('AUTH_SALT', 'oXw|b#lPHc,5bG[FhT%OQ:<O+3``w6[u0f+{pn4f&J;)KM 3P?ckLe58_XE+QZ q');
define('SECURE_AUTH_SALT', 'O|jDbZlW+ VJ4 _eOrZ[+vuC/G?7+brUcAs[/w]!x.pYb~[cJc-3^Y*.C[DW?WI6');
define('LOGGED_IN_SALT', 'J1|$>-]v~I|F[SH0);p-z6L-;Ximw2A%[Aa9|X?|u-+|W/I7&>yD|h5)FJcPTy|G');
define('NONCE_SALT', 'R?fR]f1~4)b3TDw{3 FLvjv[<[#*a++le8HEN/ue!C},u;.W^+6yDQmcs:Zf<jdU');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

