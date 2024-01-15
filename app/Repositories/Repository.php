<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Repository {

    /**
     * @var Model
     */
    protected $model;


    public function __construct(Model $model) {
       $this->model = $model;
    }


    public function create(Array $data){
        return $this->model->create($data);
    }


    public function list():Collection{
        return $this->model->orderBy('name')->get();
    }


    public function delete($id):bool{

        if($this->model->delete($id)){
            return true;
        }
        return false;
    }

}