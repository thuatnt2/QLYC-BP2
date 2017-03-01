<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories\Eloquent;

/**
 * Description of AbstractRepository
 *
 * @author TNT
 */

use App\Contracts\Repositories\RepositoryInterface;
use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface {
    
    /**
     *
     * @var Application
     */
    protected $app;
    /**
     *
     * @var Model
     */
    protected $model;
    /**
     * 
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->makeModel();
        
    }
    abstract public function model();
    
    public function makeModel() 
    {
        $model = $this->app->make($this->model());
        
        if(!$model instanceof Model) {
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        
        return $this->model = $model;
    }
    public function all(array $columns = ['*'])
    {
        return $this->model->all($columns);
    }

    public function create(array $attributes) {
        
    }

    public function delete($id) {
        
    }

    public function find($id) {
        
    }

    public function lists($columns, $key = null) {
        
    }

    public function update($id, array $attributes) {
        
    }

}
