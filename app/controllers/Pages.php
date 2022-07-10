<?php

class Pages extends Controller
{
    private Post $postModel;

    public function __construct()
    {
    }

    public function index()
    {


        $data = [
            'title' => 'MVC framework'
        ];


        $this->view('pages/index', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About US'
        ];
        $this->view('pages/about', $data);
    }
}

