<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// here i have created a Pizza model which represents pizzas table
// larvel will know which table wants to represent by class name
// if you explicitly want to tell so you can write
//protected $table = "tableName";
class Pizza extends Model
{
    use HasFactory;
}
