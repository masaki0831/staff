<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
        'tel' => 'required',
    );

}
