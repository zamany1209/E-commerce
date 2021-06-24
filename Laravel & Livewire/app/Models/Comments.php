<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table = 'product_comments';
    protected $fillable = [
        'id',
        'family',
        'product_id',
        'user_id',
        'com_id',
        'content',
        'confirmed',
        'created_at'
    ];
}
