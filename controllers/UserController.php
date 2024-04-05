<?php

function userDetail($id) {
    $user = getUserByID($id);
    // debug($user);

    require_once PATH_VIEW . 'users/detail.php';
}