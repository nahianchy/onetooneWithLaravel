@extends('layout.app')

@section('title', 'create')

@section('content')
   
    
    <div class="container">

        <div class="row mb-3 mt-3">
            <div class="col-6">
                <a href="{{ route('productIndex') }}" class="btn btn-info"> Back</a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">

                {{-- form start --}}
                <form action="/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Product Name</label>
                        <input type="text" name="name" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" cols="10" rows="5">
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">CategoryName</label>
                        <input name="categoryName" class="form-control" placeholder="input your catagory">
                        
                    </div>


                    <div class="mb-3">
                        <input type="submit" name="save" class="btn btn-info btn-block mg-b-10" value="Add New Product">
                    </div>
                </form>

                {{-- Form end --}}
            </div>
        </div>
        </div>    
           
        
@endsection



















