<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $blade = service(name: "blade");
        return $blade->render('Usuarios');
    }
}