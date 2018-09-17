<?php

namespace App\Controller;

use App\Service\Lolilol;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(Lolilol $lolilol)
    {
        $lolilol->laugh('oizehgzoiehg zoeih');

        return new Response();
    }
}
