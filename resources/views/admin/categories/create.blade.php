@extends('layouts.admin')
@section('title') create categories @endsection
@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create a category !</h1>
                        </div>
                        <form method="POST" action="{{route('categories.store')}}" class="user">
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
                                    <input type="text" class="form-control form-control-user" 
                                        placeholder="name_category" name="name_category">
                                    @error('name_category')
                                    <small class="text-danger"> {{$message}} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" 
                                    placeholder=" Kind of category " name="kind">
                                @error('kind')
                                    <small class=" text-danger"> {{$message}} </small>
                                @enderror
                            </div>
                            <input type="submit"  value="add category" class="btn btn-primary btn-user btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection