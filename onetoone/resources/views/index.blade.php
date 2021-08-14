@extends('layout.app')

@section('title', 'About')

@section('content')


<div class="container-fluid bg-dark">
    <div class="row p-5">
        <div class="col-md-12 text-center">
            <h4 class="text-white">One to one</h4>
        </div>


        <div class="col-4">

        </div>
    </div>
</div>



<div class="container mt-5">
    <div class="row mb-3 mt-3">
        <div class="col-6">
            <a href="{{ route('productCreate') }}" class="btn btn-primary"> Add Product</a>
        </div>
    </div>


    <div class="row">

        <div class="col-sm-12">
            <table class="table">

                @if ($msg = Session::get('delete'))
                    <div class="alert alert-danger" role="alert">
                        {{ $msg }}
                    </div>
                @endif

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Product Category</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            @php $i=1 @endphp
                            <td>{{ $i }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->categories->categoryName }}</td>
                            <td><a href="{{ route('productEdit', $product->id) }}"
                                    class="btn btn-sm btn-success">Edit</a>|
                                <a href="{{ route('productShow', $product->id) }}"
                                    class="btn btn-sm btn-secondary">Show</a>|
                                <a href="{{ route('productEdit', $product->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>

                            @php $i++ @endphp
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
