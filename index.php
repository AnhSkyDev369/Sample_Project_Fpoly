<?php

// Require tất cả các file có trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';

// Require tất cả các file có trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// homeIndex();
// echo '<br>';
// abcIndex();
// echo '<br>';
// getAllUser();

//Điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => homeIndex(),
    'dssp' => 'Đây là Danh Sách Sản Phẩm',
};

require_once './commons/disconnect-db.php';
