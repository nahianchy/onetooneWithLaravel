@extends('layout.app')

@section('title', 'show')

@section('content')

<div class="container-fluid bg-dark">
    <div class="row p-5">
        <div class="col-md-12 text-center">
            <h4 class="text-white">One to one</h4>
        </div>
    </div>
</div>
<div class="container mt-5">

    <dt>Id</dt>
    <dt> {{ $product->id }}</dt>

    <dt>Name</dt>
    <dt>{{ $product->name}}</dt>

    <dt>Description</dt>
    <dt> {{ $product->description }}</dt>

    <dt>Product Category</dt>
    <dt> {{ $product->categories->categoryName }} </dt>



</div>


@endsection
