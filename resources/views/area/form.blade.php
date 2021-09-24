@extends('layout')
@section('title', 'Nueva Area')
@section('header', 'Nueva Area')
@section('content')

<form action="{{route('area.save')}}"method="post">
    @csrf

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name(user)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name"value="">
        </div>
        @error('name')
        <p class="text-danger">
            {{$message}}
        </p>
        @enderror
    </div>
    <div class="row mb-3">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/areas" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>

   
</form>

@endsection