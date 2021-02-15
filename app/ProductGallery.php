<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = [
        'photos', 'products_id'
    ];

    protected $hidden = [
        
    ];

    public function product()
    {
        return $this->belongsTo(product::class, 'products_id', 'id');
    }
}
