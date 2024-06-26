@extends('tasks.layout')

@section('content')



<div class='container'>
<h1 style="color:blue;">Crear una tarea</h1>
<hr>
<form action="/tasks" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" style="color: red;" class="form-label">Nombre</label>
        <input type="text" style="color: red;" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="description" style="color: red;" class="form-label">Descripción</label>
        <textarea style="color: red;" class="form-control" id="description" name="description"></textarea>
    </div>
    <button  type="submit" class="btn btn-secondary">Crear</button>
</div>


@endsection