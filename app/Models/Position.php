<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Position extends Model
{

    protected $table = "position_p";
    public $timestamps = false;
    public function setUpdatedAt($value)
    {
        return NULL;
    }


    public function setCreatedAt($value)
    {
        return NULL;
    }
}
