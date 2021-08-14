@extends('layout.app')

@section('title', 'edit')

@section('content')
   
    
    <div class="container">

        <div class="row mt-4">
            <div class="col-md-12">

                {{-- form start --}}
                <form action="{{ route('productUpdate', $product->id) }}" method="POST">
                    @csrf
                   

                    <div class="mb-3">
                        <label for="">Product Name</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control" required="required" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" value="" class="form-control" cols="10" rows="5">
                            {{$product->description}}
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">CatagoryName</label>  
                        <input name="categoryName" value="{{$product->categories->categoryName}}" class="form-control" >
                        
                    </div>
                        
                    <div class="mb-3">
                        <input type="submit" name="save" class="btn btn-info btn-block mg-b-10" value="Update">
                    </div>
                </form>

                {{-- Form end --}}
            </div>
        </div>
        </div>    
           
        
@endsection



















