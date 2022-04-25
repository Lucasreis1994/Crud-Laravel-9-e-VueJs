<?php

namespace App\Repositories;

use App\Interfaces\EletroRepositoryInterface;
use App\Models\Eletro;

class EletroRepository implements EletroRepositoryInterface 
{
    public function getAllEletros() 
    {
        return Eletro::all();
    }

    public function getEletroById($eletroId) 
    {
        return Eletro::findOrFail($eletroId);
    }

    public function deleteEletro($eletroId) 
    {
        Eletro::destroy($eletroId);
    }

    public function createEletro(array $eletroDetails) 
    {
        return Eletro::create($eletroDetails);
    }

    public function updateEletro($eletroId, array $newDetails) 
    {
        return Eletro::whereId($eletroId)->update($newDetails);
    }

    public function getFulfilledEletros() 
    {
        return Eletro::where('is_fulfilled', true);
    }
}