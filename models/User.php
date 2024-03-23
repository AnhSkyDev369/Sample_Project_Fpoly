<?php
function getAllUser()
{
    try {
        //code...
        $sql = 'SELECT * FROM Users';
        $stmt = $GLOBALS['conn']->prepare($sql);
    } catch (Exception $e) {

    }
}
