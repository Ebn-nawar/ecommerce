@extends('layouts.admin')
@section('title') create user @endsection
@section('content') 

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an user!</h1>
                        </div>
                        <form method="POST" action="{{route('user.store')}}" class="user">
                            <div class="row">
                                @if(Session::has('success'))
                               <div class="card col-ig-12 mb-4 py-6 border-left-success">
                                <div class="card-body">
                                    {{Session::get('success')}}
                                </div>
                               </div>
                                @endif
                            </div>
                            {{-- <input name="_token" value="{{csrf_token()}}"> --}}
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" 
                                        placeholder="UserName" name="name">
                                    @error('name')
                                    <small class="text-danger"> {{$message}} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" 
                                    placeholder="Email Address" name="email">
                                @error('email')
                                    <small class=" text-danger"> {{$message}} </small>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                       placeholder="Password" name="password">
                                    @error('password')
                                    <small class=" text-danger"> {{$message}} </small>
                                    @enderror
                                </div>
                                
                            </div>
                            <input type="submit"  value="Register Account" class="btn btn-primary btn-user btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
