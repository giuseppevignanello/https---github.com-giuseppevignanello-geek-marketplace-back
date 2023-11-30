<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypologies extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function productos()
    {
        return $this->belongsToMany(Product::class);
    }
}
