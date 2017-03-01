<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories\Eloquent;

/**
 * Description of KindRepositoryEloquent
 *
 * @author TNT
 */
use App\Repositories\Eloquent\BaseRepository;
use App\Contracts\Repositories\KindRepositoryInterface;

class KindRepositoryEloquent extends BaseRepository implements KindRepositoryInterface
{
    //put your code here
    public function model()
    {
        return \App\Kind::class;
    }

}
