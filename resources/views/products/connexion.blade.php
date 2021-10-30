@extends('products.layout');

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>INSCRIPTION</h2>
        </div>
        <div class="float-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>whoop</strong> there were some problems whit your input <br><br>
        <ul>
            @foreach ($errors->all() as $errors )
                <li>{{ $errors }}</li>
            @endforeach              
        </ul>
    </div>
@endif
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prenom:</strong>
                    <input type="text" name="prenom" class="form-control" placeholder="prenom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Age:</strong>
                    <input type="text" name="age" class="form-control" placeholder="Age">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telephone:</strong>
                    <textarea name="telephone" class="form-control" style="height:150px" placeholder="Telephone" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <textarea name="email" class="form-control" style="height:150px" placeholder="Email" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">c</button>
            </div>
            
        </div>


    </form>
        
@endsection 