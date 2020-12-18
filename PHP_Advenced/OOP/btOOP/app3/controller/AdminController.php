<?php


class AdminController
{
    // load file view tuong ung voi controller...
    public function render($file, $data)
    {
        $path ='../view/'. $file .'.php';
//cache ;; cookie, session;;
        if (file_exists($path)) {
             extract($data);
//            ob_start();
//            require_once($view_file);
//            $content = ob_get_clean();
//            // Sau khi có kết quả đã được lưu vào biến $content, gọi ra template chung của hệ thống đế hiển thị ra cho người dùng
//            require_once('views/layouts/application.php');
//            ob_start();

            require_once $path;
            // dd($data);
//            ob_get_clean();
//
//            require_once 'main-template.php';
            // require
        }else {
            echo "404 NOT FOUND";
        }
    }
}