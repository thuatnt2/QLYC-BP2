<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories\Eloquent;

/**
 * Description of UserRepositoryEloquent
 *
 * @author TNT
 */
use App\Repositories\Eloquent\BaseRepository;
use App\Contracts\Repositories\UserRepositoryInterface;

class UserRepositoryEloquent extends BaseRepository implements UserRepositoryInterface{
    //put your code here
    public function model() {
        return \App\User::class;
    }

}
