<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
//        to get all the record from pizzas table
        $pizzas = Pizza::all();
        return view('pizzas', ["pizzas" => $pizzas]);  // returning view
    }

      public function show($id) {
        return view('details', ["id" => $id]);  // returning view
      }
}
