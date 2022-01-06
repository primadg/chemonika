<?php

namespace App\Models\filters;


use Illuminate\Database\Eloquent\Model;

class FieldOfUsages extends Model
{


    protected $table = "field_of_usages";
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
