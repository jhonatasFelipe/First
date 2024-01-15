<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\FirstUserRequest;
use App\Services\FirstUserService;

class FirstUserController extends Controller
{
    public function __construct(protected FirstUserService $service){}

    public function index(){

        try{
            $users = $this->service->list();
            return response()->json($users, Response::HTTP_OK);
        }catch(\Exception){
            return response()->json(['message' => 'Erro , Entre em contato com o suporte'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    public function create(FirstUserRequest $req){
        try{
            $users = $this->service->create($req->all());
            return response()->json($users, Response::HTTP_CREATED);
        }catch(\Exception){
            return response()->json(['message' => 'Erro , Entre em contato com o suporte'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    
}
