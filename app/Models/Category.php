<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['category_code','category_name'])]

class Category extends Model
{
    public function products() {
        return $this->hasMany(Product::class);
    }
}
