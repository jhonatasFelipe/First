<?php

namespace App\Http\Controllers\Web;

use App\Repositories\FirstUserRepository;
use App\Http\Requests\FirstUserRequest;
use App\Http\Controllers\Controller;
use App\Services\FirstUserService;

class FirstUserController extends Controller
{
    public function __construct(protected FirstUserService $service){}

    public function index(){
        $users = $this->service->list();
        return view('first-user.index',['users' => $users]);
    }

    public function show(){
        return view('first-user.show');
    }


    public function create(FirstUserRequest $req){
        $req->flash();
        $this->service->create($req->all());
       return redirect('/users');
    }

    
}
