<?php
//Khai báo các hàm, biến môi trường dùng Global
// Đây là cú pháp khai báo hằng
//Viết in hoa và phân cách nhau giữa các từ có nghĩa = dấu gạch dưới
//__DIR__ là magic function của PHP, có ý nghĩa khi sử dụng sẽ lấy ra đường dẫn đến thưu mục chưa file hiện tại.
// Sử dụng dấu . trong  define('PATH_CONTROLLER', __DIR__ . './controllers'); có tác dụng giúp file env lùi ra 1 cấp khỏi folders commons và cùng cấp với controllers
define('PATH_CONTROLLER',       __DIR__ . '/../controllers/');
define('PATH_MODEL',            __DIR__ . '/../models/');
define('PATH_VIEW',             __DIR__ . '/../views/');

define('BASE_URL', 'http://localhost/mvc_basic/');

//C:\laragon\www\MVC_BASIC\commons/../controllers ~ C:\laragon\www\MVC_BASIC\commons

define('DB_HOST',       'localhost');
define('DB_PORT',       ' 3306');
define('DB_USERNAME',   'root');
define('DB_PASSWORD' ,  '');
define('DB_NAME',       'MVC_BASIC');