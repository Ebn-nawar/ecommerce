@extends('layouts.admin')
@section('title') all user @endsection
@section('content')
<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All user!</h1>
                </div>
                <a href="{{route('user.create')}}" class="btn btn-primary"> create user </a>
      </div>
    </div>
    <div class="row">
        @if(Session::has('success'))
      <div class="card col-ig-12 mb-4 py-6 border-left-success">
        <div class="card-body">
            {{Session::get('success')}}
        </div>
      </div>
        @endif
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">username</th>
            <th scope="col">email</th>
            <th scope="col">control</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
              <th>{{$user->name}}</th>
              <td>{{$user->email}}</td>
              <td class="d-flex">
                  <a class="btn btn-info m-1" href="{{route('user.show', $user->id )}}">Show</a>
                  <a class="btn btn-warning m-1 pt-2" href="{{route('user.edit', $user->id )}}">Edit</a>
                  {{-- <a class="btn btn-danger" href="">Delete</a> --}}
                  <form action="{{route('user.destroy', $user->id )}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete" class="btn btn-danger m-1">
                  </form>
              </td>
            <tr>
            @endforeach
            {{$users->links()}}
        </tbody>
      </table>
</div>
@endsection