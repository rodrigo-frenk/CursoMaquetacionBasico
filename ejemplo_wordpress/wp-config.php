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
define('DB_NAME', 'ejemplowp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'ejemplowp');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY', 'BQV+xQ[;hvr}!.81SD7Fy20On|Nlw&@&h85+Jtl`>]OG5`8Yoi)A@N?,TNZ?|(wu');
define('SECURE_AUTH_KEY', 'W`jK)+79I.XRsc{%O`hMhLS<uV~-[<)>_,,ytrs/m1psHQ+Q]Q,CXXqJHLbu08-g');
define('LOGGED_IN_KEY', ' GyMj e(~(c/Q &R{K$XV?VkLI^g]p-{_*CMZb=RY}8GrQ$av!/(G4.45J2~L 1H');
define('NONCE_KEY', '=-}N.D^<1sN(PsLH.Q{BrLiUyK,#!<Jq:#O0WZ]]$]4rm*F]&0+E)Asg<@CrP&1.');
define('AUTH_SALT', 'V,t15>hkCpx;<EON4p>@yygD M4K%8JC_%<lfGT;[D2tkFACo|)t;!t}>Yt1ts&*');
define('SECURE_AUTH_SALT', 'AvI 0c6$}OZPgx5,!T1QGIM^EPb`~K5.qTNCT zdNl!Jy_y*evU&DN|9rqzOC|28');
define('LOGGED_IN_SALT', ' S,0jR`78lPtIKykH=zujA5B_#qm1[^6j=iI%+=Q@udI=96J^=U!Ka qmJLddi51');
define('NONCE_SALT', 'Z(CM=G~p^Bh1bi7xlEu&kzk;nu1*B7nnbceZmAic(b,2U@%:6/v2]sQvz[7%6/Qk');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'ejemplowp_';


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


