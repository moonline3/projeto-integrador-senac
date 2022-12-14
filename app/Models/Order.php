<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =
    [
      'menu_id',
      'menus',
      'product_id',
      'products',
    ];

    public function establishment()
    {
      return $this->belongsTo(Establishment::class);
    }

}
