<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'binh' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Seswt]L@sm@m0&|U[8%PHyQmcB|qyiPNji:6)g7@]X[GaBH*=bul5]7!4,:ZYFt}' );
define( 'SECURE_AUTH_KEY',  '?ck?a5`Y-`st.+j2W+$nLJMy6|51GCu3@k_Pv~aHmT@!]?*AaQkU{m3*[=?otv_(' );
define( 'LOGGED_IN_KEY',    '_L=ag~8O @:()covB.iF:5L$iS9p(@=yTXr07i3aMP2ATf_ pXRp$}N5BM(BYYfr' );
define( 'NONCE_KEY',        '}?Tke(yR3T Y4dnK[NB(+`+Zj|,kDOR$4I;$r:UR7MMg]d/x6GO=hGbV<TW+6RAP' );
define( 'AUTH_SALT',        'v;~C?U27h`hs5;/nwJ1d.7p#G:t#4/V%oC:O$S<pxKyOG3?:AR9RS`JIgMkHvz(`' );
define( 'SECURE_AUTH_SALT', 'C/`]|P?Pr lwCNSrq?PbaX9ZCEM|0cdn>~(1duB}i$+d;!sm 3E,RaKh;f#)(:dM' );
define( 'LOGGED_IN_SALT',   '/%#!)W8oz6*N?Wg`b(E9?[-B39K@V325]3QWX9 MJ+]E(o1>qn1!E1/<):5(!n_y' );
define( 'NONCE_SALT',       ',,E.Sh~FBn;}C55}_Yw:K3=,{t)(6EmiVtekp:)0v]LpIlrmk~S7>CPQ=X3P:Yp#' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

