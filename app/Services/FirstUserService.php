<?php

namespace App\Services;

use App\Repositories\FirstUserRepository;

Class FirstUserService {

    function __construct(protected FirstUserRepository $repo){}
        
    public function list(){
        return $this->repo->list();
    }


    public function create($data){
        return $this->repo->create($data);
    }
    
}