<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'logo',
        'category_id'
    ];
}
