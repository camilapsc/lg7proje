<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use App\Models\Professor;
use App\Models\Turma;
use Illuminate\Http\Request;

class ResultadosController extends Controller
{
 public function index()
    {
        $escolas =  Escola::all();
     //dd($escolas);
        $turmas = Turma::all();
       //dd($turmas);
        $professores = Professor::all();
        //dd($professores);
    return view('resultados.index',['escolas'=>$escolas]);
    }
    public function create(){
     return view('resultados.create');
   
    }
    
    public function store(Request $request){
       Escola::create($request->all());
      return redirect() -> route('resultados-index');
       }

       public function edition($id){
      $resultado::
       
        }
        
   


}
