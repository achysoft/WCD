<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthenticationController extends BaseController
{
    public function forgotPassword() 
    {
        return view('authentication/forgotPassword');
    }

    public function signin() 
    {
        return view('authentication/signin');
    }
    
    public function signup() 
    {
        return view('authentication/signup');
    }
}
