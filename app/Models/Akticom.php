<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akticom extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'code',
        'name',
        'level_1',
        'level_2',
        'level_3',
        'price',
        'price_sp',
        'count',
        'field_properties',
        'joint_shopping',
        'unit_measure',
        'image',
        'view_main',
        'description',
    ];
}
