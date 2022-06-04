<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['price','description_ar','description_en','photo','type_id'];

    public function product_type()
    {
        return $this->belongsTo(ProductType::class);
    }
}
