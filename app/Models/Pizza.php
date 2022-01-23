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
    // in laravel we cant pass array directly so we have to change it jsonstring so
    // in Model we can do that by using $casts
    // protected $casts = ["columnName" => "DataType"];
    // so if we store in db it will change the array to string or you can say stringyfy
    // and when we retrieve from db it will chnage it from string to array you can say ParseJSON
    protected $casts = ["toppings" => "array"];
}
