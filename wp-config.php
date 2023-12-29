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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress_estudo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '12345678' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'RwFw|#n,4:$BcQtp(aC$%f`~4g;X`iXq]yy.gv`Pz4EQy^~BIrQ6g2MDF:/:2NX*' );
define( 'SECURE_AUTH_KEY',  'vKhRv@pNUe!g&v}h*[awD(|qtBD_tp/I]VD/sL2h`*8<i{xzJ{OmI;~P}8v0-+J?' );
define( 'LOGGED_IN_KEY',    'gAeF}BV8P//DBe@+cN&%FeUR u_jY=(-W%ttSW@,@`&a@Cte?=e9RD./sC }y{Gl' );
define( 'NONCE_KEY',        ':J~1&0odI _/7noszQ/,k[;ixX;Kacd8+Y_HVNZo9dC0oS.)/?J[1K*5@dsuelA9' );
define( 'AUTH_SALT',        '`m6[^T80YTsm OQ<L1g>[nPv#R~R=w(vGJ>5)g8?}amL%-].fPw/>&G&R>i*Fb]b' );
define( 'SECURE_AUTH_SALT', 'fhuP^l15oe/.T>I6,{n@&Rwb`H}7QY=u iv8TNYTvZVc<e~:N4F38bhMH]Qt4vd=' );
define( 'LOGGED_IN_SALT',   '+M $q{]3jK2]P3Qw8}EoE5KQuTYO$dA58%u%lFB*8g4f0D0=8$sA|tWh*4`ppd9a' );
define( 'NONCE_SALT',       '##8Tms.YsnAi&0F` mGqFQ/VAaj^w~)rhY}Ys/02$dfRv$!`]$[l<,K;Y^mik~fi' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
