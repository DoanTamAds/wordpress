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
define('DB_NAME', 'learnwp');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'uL3 X`ZS`)r49r/.7`Cn&[+S+5Q2Yp&[C4cy R;q#+-g@e&dBgbhJv)F9q<sE?,4');
define('SECURE_AUTH_KEY',  '61Az;QO3S*dd?S]Uaj1)THhG^l_UvK2I}@`=C~PVaVhn>r%Z1ILh,|r{(}hKG|v+');
define('LOGGED_IN_KEY',    'z*L(`E]&_]M@gzS@~d=D+[]EJsc24G6iWno#Hp#k:Oyo@i$FX^B!ORG9+1vR1W9N');
define('NONCE_KEY',        'iW?Fy%e!o:7;JwYZqmMqDwLl3 gUtZmqz-Av>,;o3L[+4[}nHC?^BOH@L11Ln<[v');
define('AUTH_SALT',        '+(M&lyi8b5{D`QP+B >LG+[C146OyuZ@Hnx%?| 4Y45AC/-{B{G2lwbpTzaS|_n8');
define('SECURE_AUTH_SALT', 'KE!v xZZ&[*XkkQqCD0piOxE9UG&tw&?evUJuN=5C^_9tZ&JC^vYcpm]t067:~4 ');
define('LOGGED_IN_SALT',   'pM9xg9%OD7RA`jXsJ=vC~P(|@8CFK@=8o8EB{1ZQs4Cpp,P9&EMLH}N<WfuxYUHL');
define('NONCE_SALT',       '3+DPvCxS)-rs;rd%-u-@qFlmaOAV@$T:X^1gN)7*j=.vs]LJJaa$5{$*q?7u!_tv');

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

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
