<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
      'cnpj',
      'trading_name',
      'company_name',
      'adress',
      'phone',
    ];

public function users()
{
 return $this->hasMany(User::class);
}

public function menus()
{
  return $this->hasMany(Menu::class);
}

public function products()
{
  return $this->hasMany(Product::class);
}

public function orders()
{
  return $this->hasMany(Order::class);
}
}
