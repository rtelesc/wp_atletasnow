<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9qqu]]x;jPF)ldOzr<{&pj)C~l;6rR/k}&8R/o%dGb:Gl*XyF~D w29Y^Tz>FXO$' );
define( 'SECURE_AUTH_KEY',  'EA.n94NR>YN1>y$+PAg@x~N<4-BOm=!JPDx.EwldYeZ[|~Q$kH*gMZG?Vw+=<i*U' );
define( 'LOGGED_IN_KEY',    '0Av?IbdS#vy(jx^EHD(nw^=wNE]CX&l*]]SkK}q|/SDTh>$~e4Wmnmf257v%0lsq' );
define( 'NONCE_KEY',        '$<9!dFz=39fs%2~G|(T$dUFd3qBq:1R$0#elo<GD{;J9z,<::m!OGs!^StMdo,Jk' );
define( 'AUTH_SALT',        'Fmy)__bRjYtl.O+ZEfh5d1`17o8TU{^aO~ &audJb*)(8<5oe/o&!<<+_O=AI/@K' );
define( 'SECURE_AUTH_SALT', '*.2onZHLbgs|8:ZA9^}B6YXKke+P.%-zMKiIFjD!nun^)%a%]^apZ_NFr.KaX.~_' );
define( 'LOGGED_IN_SALT',   'p/>[w aW&>)n8yoJ,:hUP!X!1k:=t3njNw! ul5bjcyabp?-yK@Xl4m+ekUYe[hB' );
define( 'NONCE_SALT',       '0|JB*s`/z-fxaK:#IBL.O[R,AVMrn*(tJx{Gsm,gY^u<@|eU=3eD/KSeIxb%RpCZ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
