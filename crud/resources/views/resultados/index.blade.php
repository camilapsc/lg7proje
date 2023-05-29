@extends('layouts.app')

@section('title', 'testelg7')
@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-6">
    <h1>CRUD ESCOLAS</h1>
    </div>
    <div class="col-sm-6">
      <a href="{{route('resultados-create')}}"class="btn btn-sucess">Adicionar</a>
  </div>
  </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Escola</th>
      <th scope="col">Turma</th>
      <th scope="col">Professor</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    @foreach($resultados as $resultado)
    <tr>
      <th>{{$$resultado -> id}} </th>
      <th>{{$$resultado -> escola}} </th>
      <th>{{$$resultado -> turma}} </th>
      <th>{{$$resultado -> professor}} </th>
      <th>
        <a href="#">Editar</a>
    </th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection