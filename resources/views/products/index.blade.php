@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>LISTE DES ETUDIANTS</h2>
            
        </div>
        <div class="float-right">
            <a href="{{ route('products.create') }}" class="btn btn-success">NOUVEAU ETUDIANT</a>

        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    
@endif

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Age</th>
    <th>Telephone</th>
    <th>Email</th>
    <th width="280px">Action</th>


</tr>
@foreach ($products as $product )

<tr>
    <td>{{ $product->id }}</td>
    <td>{{ $product->nom }}</td>
    <td>{{ $product->prenom }}</td>
    <td>{{ $product->age }}</td>
    <td>{{ $product->telephone }}</td>
    <td>{{ $product->email }}</td>
    <td>
        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a href="{{ route('products.show',$product->id) }}" class="btn btn-info">Show</a>
                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-info">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
</tr>
    
@endforeach

</table>

{{ $products->links() }}



@endsection