<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['category_id','product_name','buy_price','sell_price','stock'])]

class Product extends Model
{
    protected function casts()
    {
        return [
            'buy_price' => 'decimal:2',
            'sell_price' => 'decimal:2',
            'stock' => 'integer',
        ];
    }

    //relasi ke Category
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    //relasi ke DetailTransaksi
    public function detailTransaction(): HasMany {
        return $this->hasMany(DetailTransaction::class);
    }
}
