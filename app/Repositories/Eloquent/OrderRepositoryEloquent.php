<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories\Eloquent;

/**
 * Description of OrderRepositoryEloquent
 *
 * @author TNT
 */
use App\Contracts\Repositories\OrderRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class OrderRepositoryEloquent extends BaseRepository implements OrderRepositoryInterface 
{ 
    /**
     * Specify Model class name
     * 
     * @return string
     */
    public function model() {
        return \App\Order::class;
    }

}
