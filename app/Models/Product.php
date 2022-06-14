<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id'); // категорія
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function scopeFilter( Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
