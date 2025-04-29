<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_description',
        'logo',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
