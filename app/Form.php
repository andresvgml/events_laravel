<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $primaryKey = 'id_form';

    protected $fillable = [
        'name', 'phone', 'identification',
    ];
}
