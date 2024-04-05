<?php
function getAllUser()
{
    try {
        //code...
        $sql = 'SELECT * FROM Users';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getUserByID($id){
    try {
        //code...
        $sql = 'SELECT * FROM Users WHERE id = :id';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}
