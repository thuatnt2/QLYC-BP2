<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Contracts\Repositories;

/**
 *
 * @author MyPC
 */
interface OrderRepositoryInterface  {
    //put your code here
    public function orderPaginate($limit, $condition = '', $columns = ['*'], $method = 'paginate');
}
