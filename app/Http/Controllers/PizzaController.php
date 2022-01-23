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

        // $pizza is an instance of Pizza model & the Pizza Model inherits all of those methods
        // available to us which interact with database. and save is one of them.
        // and $pizza is an instance of Pizza Model so it know which table to go to save it.
        $pizza->save();

        // after saving we want to show any msg to redirected page than
        // we dont have option to send an extra argument
        // so here we use a method name with to pass a message
        // and these value will act as a session data
        return redirect("/")->with("mssg", "Thanks for your order"); // ->("key", "value")
    }
}
