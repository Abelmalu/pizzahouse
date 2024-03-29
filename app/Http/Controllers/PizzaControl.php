<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaControl extends Controller
{

  
    public function index(){

      $pizzas=Pizza::orderBy('name')->get();
       

          return view('pizzas.index', ['pizzas' => $pizzas]);
    
    
     }
    
    
     public function show($id){
    
        $lam=Pizza::findOrFail($id);
    
    
        return view('pizzas.show',['lam'=>$lam]); 
    
    
    
    
     }
     public function create(){


return view('pizzas.create');


     }
     public function store(){
   
      $pizza=new pizza();
      $pizza->name=request('name') ;
      $pizza->type =request('type') ;
      $pizza->base=request('base') ;
      $pizza->toppings=request('toppings');
      $pizza->save();

     return redirect('/')->with('mssg',"thanks for ordering the pizza");


     }
     public function destroy($id){



                  $pizza=Pizza::findOrFail($id);
               $pizza->delete();
                  return redirect('/pizzas');

     }
}
