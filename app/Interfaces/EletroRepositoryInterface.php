<?php

namespace App\Interfaces;

interface EletroRepositoryInterface 
{
    public function getAllEletros();
    public function getEletroById($eletroId);
    public function deleteEletro($eletroId);
    public function createEletro(array $eletroDetails);
    public function updateEletro($eletroId, array $newDetails);
    public function getFulfilledEletros();
}