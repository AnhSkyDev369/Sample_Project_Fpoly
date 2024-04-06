<?php

// echo 'Đây là trang admin';

require_once '../commons/env.php';
require_once '../commons/helper.php';
require_once '../commons/connect-db.php';
require_once '../commons/model.php';

// Require tất cả các file có trong controllers và models
require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

//Điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => dashboard(),
};

require_once '../commons/disconnect-db.php';
