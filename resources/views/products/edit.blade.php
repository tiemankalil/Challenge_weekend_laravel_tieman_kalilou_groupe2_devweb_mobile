@extends('products.layout')

@section('content')



<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Edit student</h2>
        </div>
        <div class="float-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>whoop</strong> there were some problems whith your input <br><br>
        <ul>
            @foreach ($errors->all() as $errors )
                <li>{{ $errors }}</li>
            @endforeach              
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="nom" value="{{ $product->nom }}" class="form-control" placeholder="Nom">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom:</strong>
                <input type="text" name="prenom" value="{{ $product->prenom }}" class="form-control" placeholder="Prenom">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age:</strong>
                <input type="number" name="age" value="{{ $product->age }}" class="form-control" placeholder="Age">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone:</strong>
                <input type="number" name="telephone" value="{{ $product->telephone }}" class="form-control" placeholder="telephone">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $product->email }}" class="form-control" placeholder="email">
            </div>
        </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
             <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </div>


</form>


@endsection