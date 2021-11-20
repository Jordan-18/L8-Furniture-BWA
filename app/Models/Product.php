<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name','deskripsi','price','slug'
    ];

    public function galleries(){
        return $this->hasMany(ProdukGallery::class,'product_id','id');
    }

}
