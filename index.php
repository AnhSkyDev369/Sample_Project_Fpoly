<?php

// Require tất cả các file có trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';

// Require tất cả các file có trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);


// homeIndex();
// echo '<br>';
// abcIndex();
// echo '<br>';
// getAllUser();

// insert('users' , [
//     'name' => 'anhnt',
//     'email' => 'anhntph36206@fpt.edu.vn',
//     'password' => 'Anhnt123',
//     'type' => 1
// ]);
// die;

// $users = listAll('users');
// debug($users);


// $users = showOne('users', 20);
// debug($users);
// var_dump($users);

// update('users' , 1,  [
//     'name' => 'anhnt',
//     'email' => 'anhntph36206@fpt.edu.vn',
//     'password' => 'Anhnt4556',
//     'type' => 1
// ]);
// die;

// delete('users', 7, [
//     'name' => 'anhnt',
//     'email' => 'anhntph36206@fpt.edu.vn',
//     'password' => 'Anhnt4556',
//     'type' => 1
// ]);
// die;


//Điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => homeIndex(),
    'user-detail' => userDetail($_GET['id']),
};

require_once './commons/disconnect-db.php';
