<?php

namespace App\Controllers;
use App\Models\UserModel;

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

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } 
        
        $userModel = model(UserModel::class);

       $email = $this->request->getPost('email');
       $password = $this->request->getPost('password');
       $name = $this->request->getPost('name');

       $data = [
            'email'=> $email,
            'name'=> $name,
            'role'=> 'student',
            'password_hash' =>password_hash($password, PASSWORD_BCRYPT)
       ];

       $userModel->insert(
        $data
       );


        return redirect()->back()->withInput()->with('success','Bienvenido seria');

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

