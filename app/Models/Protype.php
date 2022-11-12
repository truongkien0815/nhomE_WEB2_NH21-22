<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    use HasFactory;
    protected $primaryKey = 'manu_id';
    public function products()
    {
        return $this->hasMany(Product::class, 'manu_id');
    }
}
