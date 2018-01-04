<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3Wo!4 .d.JHxYl06R*p/!|fz@J#u26bJ&42jW5on+_[FH-KizU5MAib1^Q?/n&:A');
define('SECURE_AUTH_KEY',  'ZbL,`%y:KDl]:t}wE!3{B~)=*J1)JDO/09D`4];o0*;O28ZccaTPYE8VR9:~_Ytg');
define('LOGGED_IN_KEY',    'QdAb?l9LMv+vr<{*rL#_#x jSaJsrLi~&B@4%T*ff[S7t($!c;f>2XJz6yZN#mFc');
define('NONCE_KEY',        'Y-mL7NumQ=4cp*Q};sX5G40)W8cuO^&$/U~.k]I@ydvw-77(yTM;k_uAf/4x@~A3');
define('AUTH_SALT',        'aLpUeN GsYw<(9b<G.Od175=UrB=/H4DLm[}CkD]e%A``CznQ0cA|{{<tQug>u]!');
define('SECURE_AUTH_SALT', 'b:?4$W)VZ72? 0,aLe>%.[_?]q<y>]?l4ue}Ox-nx9FKS/L=)2>U1u3[ZiMChqrQ');
define('LOGGED_IN_SALT',   'TwVe+B:1=*IkZ>Jn:)RA%RmKB&g1DFQ%eF;n{0I7P5H+.(B.7|wD^/Ity{J(>*j>');
define('NONCE_SALT',       'S!5wH@KCn!jYTt/5Q*x1tj9thv^5DgAg5 fGFm4B2uI/v Z%US]D#[9BM$frJsz(');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
