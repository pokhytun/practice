<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $appends = ['total'];

    use HasFactory;

    protected $fillable = ['user_id', 'total_price'];

    public function products(){
        return $this->belongsToMany(Product::class,  'product_order')->withPivot('quantity');
    }

}
