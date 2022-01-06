<?php

namespace App\Models\filters;


use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{

    protected $table = "groups_f";
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
