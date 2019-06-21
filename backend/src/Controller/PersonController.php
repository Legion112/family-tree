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
        $data = $this->getData($request);

        // TODO something

        $response = new JsonResponse($data);
        return $response;
    }


    public function getData(Request $request)
    {
        return json_decode($request->getContent(), true);
    }
}