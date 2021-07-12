@extends('layouts.admin')
@section('title') all product @endsection
@section('content')

<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All products!</h1>
                </div>
                <a href="{{route('products.create')}}" class="btn btn-primary"> create product </a>
      </div>

     
      <table class="table">
        <thead>
          <tr>
            <th scope="col">product name</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
          </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
              <th>{{$product->name_product}}</th>
              <td>{{$product->description}}</td>
              <td>{{$product->price}}</td>
              <td class="d-flex">
                 <a class="btn btn-info m-1" href="{{route('products.show', $product->id )}}">Show</a>
                  <a class="btn btn-warning m-1 pt-2" href="{{route('products.edit', $product->id )}}">Edit</a> 
                 {{-- <a class="btn btn-danger" href="">Delete</a> --}}
                  <form action="{{route('products.destroy', $product->id )}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete" class="btn btn-danger m-1">
                  </form>
              </td>
            <tr>
            @endforeach
            {{-- {{$products->links()}} --}}
        </tbody>
      </table>
      

@endsection