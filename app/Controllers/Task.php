<?php

namespace App\Controllers;

class Task extends BaseController
{
    public function index(): string
    {
        $blade = service(name: "blade");
        return $blade->render('task');
    }
}