@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a href="{{route('product.form')}}" class="btn btn-primary">Nuevo Producto</a>
    </div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cost</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Brand</th>
            <th></th>
        </tr>

    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->cost}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->brand}}</td>
                <td>
                    <a href="#" class="btn btn-warning">Editar</a>
                    <a href="{{route('product.delete',['id'=>$product->id])}}" class="btn btn-danger">Borrar</a>
                    
                </td>

            </tr>
        @endforeach



    </tbody>  


</table>
@endsection


