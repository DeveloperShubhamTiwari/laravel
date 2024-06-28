<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class Dashboard{
    public function index()
    {
        $data = [];
        AdminView('dashboard',$data);
    }
}
