<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'nama_product',
        'deskripsi',
        'harga',
        'published_at',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/products/'.$this->getKey());
    }
}
