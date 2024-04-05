<?php
function homeIndex()
{
   $users = getAllUser();
   // debug($dataUser);
   require_once PATH_VIEW . 'home.php';
}


//Luồng MVC 1: Vào index
//            -> được điều hướng đến hàm xử lý logic trong controller tương ứng
//                -> Hàm sẽ trả view luôn vì không có tương tác với model


// Luồng MVC 2: Vào index
//             -> được điều hướng đến hàm xử lý logic trong controller tương ứng
//                -> Hàm sẽ tương tác với hàm xử lý dữu liệu trong model
//                   -> Dữ liệu này sẽ được trả về view