<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        
        // If user is not logged in, redirect to login
        if (!$session->get('isLoggedIn')) {
            return redirect()->route('signin'); // assumes 'signin' route exists
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // You can leave this empty if you don't need post-response filtering
    }
}
