<?php

namespace App\Controller;

use App\Model\GeneralMessage;

class HomeController
{
    public function index(): GeneralMessage
    {
        return new GeneralMessage("Hello World");
    }
}
