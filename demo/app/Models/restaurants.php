<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurants extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'restaurants';
   protected $fillable = [
    'id',
    'name',
    'address',
    'image',
    'description',
];
}
