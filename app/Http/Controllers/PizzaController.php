<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        $name = request("name");

        $pizza = [
            "type" => "hawaiian",
            "base" => "cheesy crust",
            "price" => 10,
            "name" => $name
        ];
        return view('pizzas', $pizza);  // returning view
    }
    
      public function show($id) {
        return view('details', ["id" => $id]);  // returning view
      }
}
