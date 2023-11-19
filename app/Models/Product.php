<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $table = 'product';
    //since Laravel 9 we can use model factories for testing
    //use HasFactory;
}
