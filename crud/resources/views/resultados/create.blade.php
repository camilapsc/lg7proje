@extends('layouts.app')

@section('title', 'testelg7')
@section('content')
<div class="container mt-5">
    <h1>Adicionar</h1>
    <form action="{{ route('resultados-store')}}" method="POST">
        @csrf
       <div class="form-group" >
            <div class="form-group" >
                 <label for="nome">Colegio: </label>
                <input type= "text" name="colegio" placeholder="Insira a Escola:">
                </div>
                <br>
                <div class="form-group" >
                    <label for="turma">Turma: </label>
                    <input type= "text" name="turma" placeholder="Insira uma turma:">
                 </div>
                 <br>  
             <div class="form-group" >
                    <label for="professor">Professor: </label>
                    <input type= "text" name="professor" placeholder="Insira o nome do Professor(a):">
            </div>
            <br>
            <div class="form-group" >
                    <input type= "submit" name="submit" class="btn btn-primary">
       </div>
       </div>
    </form>
</div>
@endsection