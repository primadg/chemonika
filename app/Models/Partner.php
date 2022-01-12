<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    protected $table = "partners";
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
