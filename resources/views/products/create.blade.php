@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="">
        <div class="">
            <div class="text-3xl font-bold underline">
                <h2>Add New Product</h2>
            </div>
            @component('layouts._components.go_back')

            @endcomponent
        </div>
    </div>

    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

    <form action="{{route('products.store')}}" method="POST" >
        @csrf

        <div class="row">
            <div class="mt-2 col-xs-12 col-sm-12 col-md-12">
                <div class="mb-0">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Name">
                </div>
                @error('name')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description">{{old('description')}}</textarea>
                </div>
                @error('description')
                   <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" value="{{old('price')}}" class="form-control" placeholder="Put the price">
                </div>
                @error('price')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    </div>
</div>
@endsection
