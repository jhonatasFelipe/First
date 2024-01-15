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
        $users = $this->service->list();
        return response()->json($users, Response::HTTP_OK);
    }

    public function create(FirstUserRequest $req){
        $users = $this->service->create($req->all());
        return response()->json($users, Response::HTTP_CREATED);
    }

    
}
