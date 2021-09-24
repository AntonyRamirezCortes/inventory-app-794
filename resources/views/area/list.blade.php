@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a href="{{ route('area.form')}}" class="btn btn-primary">Nueva Area</a>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>name(user)</th>
            <th>User created_at</th>
            

            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($areas as $area)
            <tr>
                <td>{{ $area->id }}</td>
                <td>{{ $area->name }}</td>
                <td>{{ $area->created_at }}</td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>
                    <a href="" class="btn btn-danger">Borrar</a>
                    
                </td>
                
            </tr>
            
        @endforeach
    </table>
@endsection