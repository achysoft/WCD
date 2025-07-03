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
    helper(['form']);

    if ($this->request->isAJAX()) {
        $response = ['status' => 'error', 'message' => 'Something went wrong'];

        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[4]',
        ];

        if (! $this->validate($rules)) {
            $response['message'] = implode('<br>', $this->validator->getErrors());
            return $this->response->setJSON($response);
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        // ✅ Use SHA1 hash for comparison
        if ($user && sha1($password) === $user['password']) {
            session()->set([
                'user_id'    => $user['id'],
                'email'      => $user['email'],
                'username'   => $user['username'],
                'role'       => $user['rolecode'],
                'isLoggedIn' => true
            ]);
            session()->regenerate();

            return $this->response->setJSON([
                'status'   => 'success',
                'redirect' => route_to('adminDashboard')
            ]);
        }

        $response['message'] = 'Invalid email or password.';
        return $this->response->setJSON($response);
    }

    // fallback for non-AJAX
    return view('authentication/signin');
}


   public function signup()
{
    helper(['form']);

    if ($this->request->getMethod() === 'post') {
        $rules = [
            'username' => 'required|min_length[3]',
            'email'    => 'required|valid_email|is_unique[sysusers.email]',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'matches[password]'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        $userModel = new \App\Models\UserModel();

        $userModel->save([
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'rolecode' => 'user', // or assign another default role
        ]);

        return redirect()->route('signin')->with('success', 'Registration successful. You can now log in.');
    }

    return view('authentication/signup');
}
public function logout()
{
    session()->destroy(); // Clears all session data
    return redirect()->route('signin')->with('success', 'You have been logged out.');
}
}
