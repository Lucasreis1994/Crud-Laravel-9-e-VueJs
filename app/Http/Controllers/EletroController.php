<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Interfaces\EletroRepositoryInterface;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreEletroRequest;

class EletroController extends Controller
{
    private EletroRepositoryInterface $eletroRepository;

    public function __construct(EletroRepositoryInterface $eletroRepository) 
    {
        $this->eletroRepository = $eletroRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->eletroRepository->getAllEletros()
        ]);
        // return 'ok';
    }

    public function store(StoreEletroRequest $request): JsonResponse 
    {
        $form = $request->all();

        return response()->json(
            [
                'data' => $this->eletroRepository->createEletro($form)
            ],
            Response::HTTP_CREATED
        );
    }

    public function update(Request $request): JsonResponse 
    {
        $eletroId = $request->route('id');
        $eletroForm = $request->all();

        return response()->json([
            'data' => $this->eletroRepository->updateEletro($eletroId, $eletroForm)
        ]);
    }

    public function delete(Request $request): JsonResponse 
    {
        $eletroId = $request->route('id');
        $this->eletroRepository->deleteEletro($eletroId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
