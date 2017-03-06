<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
