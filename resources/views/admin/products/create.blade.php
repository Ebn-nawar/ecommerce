@extends('layouts.admin')
@section('title') craete product @endsection
@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create a product!</h1>
                        </div>
                        <form method="POST" action="{{route('products.store')}}" class="user">
                            <div class="row">
                                @if(Session::has('success'))
                               <div class="card col-ig-12 mb-4 py-6 border-left-success">
                                <div class="card-body">
                                    {{Session::get('success')}}
                                </div>
                               </div>
                                @endif
                            </div>
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="file" class="form-control form-control-user" 
                                        placeholder="img" name="img">
                                    @error('img')
                                    <small class="text-danger"> {{$message}} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" 
                                        placeholder="name_product" name="name_product">
                                    @error('name_product')
                                    <small class="text-danger"> {{$message}} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" 
                                    placeholder="Description about product" name="description">
                                @error('description')
                                    <small class=" text-danger"> {{$message}} </small>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                       placeholder="cost of product" name="price">
                                    @error('price')
                                    <small class=" text-danger"> {{$message}} </small>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit"  value="add product" class="btn btn-primary btn-user btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection