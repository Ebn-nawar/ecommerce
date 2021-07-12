@extends('layouts.admin')
@section('title') all categories @endsection
@section('content')
<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All categories!</h1>
                </div>
                <a href="{{route('categories.create')}}" class="btn btn-primary"> create category </a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">category name</th>
            <th scope="col">kind</th>
          </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
              <th>{{$category->name_category}}</th>
              <td>{{$category->kind}}</td>
              <td class="d-flex">
                  <a class="btn btn-info m-1" href="{{route('category.show', $category->id )}}">Show</a>
                  <a class="btn btn-warning m-1 pt-2" href="{{route('category.edit', $category->id )}}">Edit</a>
                  {{-- <a class="btn btn-danger" href="">Delete</a> --}}
                  <form action="{{route('category.destroy', $category->id )}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete" class="btn btn-danger m-1">
                  </form>
              </td>
            <tr>
            @endforeach
            {{-- {{$users->links()}} --}}
        </tbody>
      </table>
            


@endsection