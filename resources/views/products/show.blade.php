@extends('products.layout')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Show product</h2>
        </div>
        <div class="pull-left">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Detail:</strong>
            {{ $product->detail }}
         </div>
    </div>
     
    
</div>

@endsection