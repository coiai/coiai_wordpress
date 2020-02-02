<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'coiai_wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4DrLqxYCEo}U7-?E2(KB*G|VT+]L:GQlUINpX([3<kJ3tKzT^tnhK2,v`9}&`| y' );
define( 'SECURE_AUTH_KEY',  'KvM4^&CPyDa-%PR<YCccBf2CNsfrY4heQIj19v[&$L.(d6C5ZpRU%%FOTcOU|C-T' );
define( 'LOGGED_IN_KEY',    'f!<nzss2EY,9aNyv*w89`5#>t#bS_lF0er#UbjR32=#H&q`^G*bAcoZf5l}Qh&C6' );
define( 'NONCE_KEY',        'fiG,v w]5++xwD!FbryW=o>x(YQLv_[E8kV]vQ*qN$_nGr=9SAw*ylSlMD%Ilj2s' );
define( 'AUTH_SALT',        'Lvzk}yF$a5HMo<I-c4XEJGCHj1#`G,XRnLT]! K&kz7ae+%Z&Y2e-y.EHfRaBQY[' );
define( 'SECURE_AUTH_SALT', '9B(e^pH-SP:hP m9g4JD5q[u/To+{~U]S|qmFk=uJCoDk$kJEPwZ!xn/}ACd<Di2' );
define( 'LOGGED_IN_SALT',   '&Ue>guCK]:|wgE$`Ok)`vy%wKf0kG$1r^yn5WE_<SFk4fg[ }K-n/NHF@g_H$!m~' );
define( 'NONCE_SALT',       'kjki3C*L0Qi6p(,`]-j]xWwo0FfOyiI$<2IN;vyR!}=3D|w:-e8J7MrK}iGW2ec7' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'coiai';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
