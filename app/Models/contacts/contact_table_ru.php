<?php

namespace App\Models\contacts;


use Illuminate\Database\Eloquent\Model;

class contact_table_ru extends Model
{

    protected $table ="contact_table_ru";
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
