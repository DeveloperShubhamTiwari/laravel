<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

class CMS
{
    public function index()
    {
        $data = [];
        AdminView('add-cms',$data);
    }

    public function view()
    {
        $data = [];
        AdminView('view-cms',$data);
    }

}
