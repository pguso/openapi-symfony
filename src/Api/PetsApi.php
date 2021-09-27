<?php

namespace App\Api;

use App\Entity\PetEntity;
use App\OpenApiBundle\Api\PetsApiInterface;
use App\OpenApiBundle\Controller\Controller;

class PetsApi extends Controller implements PetsApiInterface
{

    public function createPets(&$responseCode, array &$responseHeaders)
    {
        return $this->getDoctrine()
            ->getRepository(PetEntity::class)
            ->create();
    }

    public function listPets($limit = null, &$responseCode, array &$responseHeaders)
    {
        return $this->getDoctrine()
            ->getRepository(PetEntity::class)
            ->list($limit);
    }

    public function showPetById($petId, &$responseCode, array &$responseHeaders)
    {
        return $this->getDoctrine()
            ->getRepository(PetEntity::class)
            ->findById($petId);
    }
}
