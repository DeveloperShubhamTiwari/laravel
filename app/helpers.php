<?php
use Illuminate\Support\Facades\File;
if (!function_exists('WebView')) {
    function WebView($view, $data = [])
    {
        echo view('website.layouts.header', $data)->render();
        echo view('website.'.$view, $data)->render();
        echo view('website.layouts.footer', $data)->render();
    }
}


if (!function_exists('AdminView')) {
    function AdminView($view, $data = [])
    {
        echo view('admin.layouts.header', $data)->render();
        echo view('admin.layouts.sidebar', $data)->render();
        echo view('admin.'.$view, $data)->render();
        echo view('admin.layouts.footer', $data)->render();
    }
}

if (!function_exists('ununlinkImagelink')) {
     function unlinkImage($path)
    {
        if (file_exists(public_path('uploads/' .$path))) {
            unlink(public_path('uploads/' .$path));
            return true;
        }
        return false;
    }
}






?>