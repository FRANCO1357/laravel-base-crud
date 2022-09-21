<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
    ];
}
