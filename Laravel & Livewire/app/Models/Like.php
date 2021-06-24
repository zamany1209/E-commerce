<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'product_like';
    protected $fillable = [
        'id',
        'product_id',
        'user_id'
    ];
}
