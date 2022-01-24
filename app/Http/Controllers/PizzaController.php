<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
// if we try to protect rout using constructor than it will apply for every route or
// every method of this class
//    public function __construct() {
//        $this->middleware("auth");
//    }


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
        $pizza = new Pizza();

        $pizza->name = request("name");
        $pizza->type = request("type");
        $pizza->base = request("base");
        $pizza->toppings = request("toppings");

        $pizza->save();

        return redirect("/")->with("mssg", "Thanks for your order"); // ->("key", "value")
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
