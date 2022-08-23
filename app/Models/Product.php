<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'name', 'article', 'status', 'data', 'tdata'
    ];
	
	 protected $casts = [ // автоматически преобразовать data из JSON формата в массив:
        'data' => 'array'
    ];
	
	
	public function scopeAvailable($query)
    {
        return $query->where('status', '=', 'available');
    }
	
}