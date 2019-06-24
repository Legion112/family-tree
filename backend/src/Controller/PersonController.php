<?php

namespace App\Controller;

use App\Entity\Person;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PersonController
{
    /**
     * @Route("/person/create/", name="person_create")
     */
    public function create(Request $request, EntityManagerInterface $entityManager)
    {
        $data = $this->getData($request);

        $person = new Person();

        $person->setLastName($data['last_name']);
        $person->setFirstName($data['first_name']);
        $person->setDateBirth(new DateTime($data['date_birth']));

        $entityManager->persist($person);
        $entityManager->flush();

        return new JsonResponse($person->getId());
    }


    public function getData(Request $request)
    {
        return json_decode($request->getContent(), true);
    }
}