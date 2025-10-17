<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function register_attempt()
    {
        $rules = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
            ],
            'name' => [
                'label' => 'Name',
                'rules' => 'required',
            ],
            'password_confirm' => [
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]',
            ],
        ];
        
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        

    }
    public function showForm(): string
    {
        $blade = service(name: "blade");
        return $blade->render('register');
    }
    public function showFormLogin(): string
    {
        $blade = service(name: "blade");
        return $blade->render('login');
    }
}

