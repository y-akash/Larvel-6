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
        $pizza = Pizza::findOrFail($id);
        return view('details', ["pizza" => $pizza]);  // returning view
      }


    public function create() {
        return view('create');
    }

    public function store() {
        // here we created an instance of Pizza Model bcoz Pizza Model represents the pizza table in DB
        // so if we create an instance so it will be programmatic version of a record in that table
        $pizza = new Pizza();

        $pizza->name = request("name");
        $pizza->type = request("type");
        $pizza->base = request("base");
        $pizza->toppings = request("toppings");

        $pizza->save();

        return redirect("/")->with("mssg", "Thanks for your order"); // ->("key", "value")
    }
}
