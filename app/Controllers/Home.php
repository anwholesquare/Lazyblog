<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('LandingPage/index.php');
    }

    public function signup(): string
    {
        return view('Auth/signup.php');
    }
    
    public function show($symlink = ''): string
    {
        $data = [
            'symlink' => $symlink,
        ];
        return view('Post/show.php', $data);
    }
}
