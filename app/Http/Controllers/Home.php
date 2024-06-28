<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Home
{
    public function index()
    {
        $data = [];
        WebView('index',$data);
    }

    public function index2()
    {
        $data = [];
        WebView('index-2',$data);
    }


    public function project()
    {
        $data = [];
        WebView('project',$data);
    }

    public function blog()
    {
        $data = [];
        WebView('blog',$data);
    }


    public function contact()
    {
        $data = [];
        WebView('contact',$data);
    }


    

    public function portfolio()
    {
        $data = [];
        WebView('portfolio',$data);
    }

    public function prices()
    {
        $data = [];
        WebView('prices',$data);
    }


    public function publication()
    {
        $data = [];
        WebView('publication',$data);
    }
}
