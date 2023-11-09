<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //

    public function index() {
        $name= request('name');

        $pizzas = Pizza::all();
        $pizzas = Pizza::orderBy('type')->get();
        $pizzas = Pizza::where('type', 'margarita')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas'=>$pizzas,
            'name'=> $name,
            'age' => request('age')
        ]);
    }
    public function show ($id) {

        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }
    public function create () {
        return view('pizzas.create');
    }
    public function store () {

        $pizza= new Pizza();

        $pizza->name=request('name');
        $pizza->type=request('type');
        $pizza->base=request('base');
        $pizza->price=request('price');

        $pizza->save();

        return redirect('/') -> with('message', 'Thanks for your order');
    }
    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
