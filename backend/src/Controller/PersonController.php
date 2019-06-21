<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PersonController
{
    /**
     * @Route("/person/create/", name="person_create")
     */
    public function create(Request $request)
    {
        $response = new JsonResponse('ok');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}