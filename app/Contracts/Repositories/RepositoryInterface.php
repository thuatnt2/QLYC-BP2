<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Contracts\Repositories;

/**
 *
 * @author TNT
 */
interface RepositoryInterface {
    /**
     * Retrieve data array for populate field select
     * 
     * @param string $columns
     * @param string|null $key
     * 
     * @return \Illuminate\Support\Collection|array
     */
    public function lists($columns, $key = null) ;
    /**
     * Retrieve all data of repository
     * 
     * @param array $columns
     * 
     * @return mixed
     */
    public function all( array $columns = ['*'] );
    /**
     * Retrieve data by Id
     * 
     * @param       $id
     * @param array $columns
     * 
     * @return mixed
     */
    public function find($id);
    /**
     * Save new entity in repository
     * 
     * @param array $attributes
     * 
     * @return mixed
     */
    public function create(array $attributes);
    /**
     * 
     * @param type $id
     * @param array $attributes
     */
    public function update($id, array $attributes);
    /**
     * 
     * @param type $id
     */
    public function delete($id);
    
}
