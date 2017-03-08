<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories\Eloquent;

/**
 * Description of PurposeRepositoryEloquent
 *
 * @author TNT
 */
use App\Repositories\Eloquent\BaseRepository;
use App\Contracts\Repositories\PurposeRepositoryInterface;

class PurposeRepositoryEloquent extends BaseRepository implements PurposeRepositoryInterface{
    //put your code here
    public function model() {
        return \App\Purpose::class;
    }

}
