@extends('layouts.user')
@section('content')
@section('title')  Ecommerce  @endsection
 
 <!-- carousel -->
 <div class="carousel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{URL::asset('userpanel/img/cor-1.jpg')}}" class="d-block w-100" alt="men clothes">
        </div>
        <div class="carousel-item">
            <img src="{{URL::asset('userpanel/img/cor-2.jpg')}}" class="d-block w-100" alt="men clothes">
        </div>
        <div class="carousel-item">
            <img src="{{URL::asset('userpanel/img/cor-3.jpg')}}" class="d-block w-100" alt="women clothes">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    <div class="hot-collection">
    <div class="container">
        <div class="collection">
            <div class="container">
                <div class="part-a">
                    <img src="{{URL::asset('userpanel/img/coll.jpg')}}" class="w-100" alt="">
                    <div class="coll-articale">
                        <p>Hot collection</p>
                        <h2>New trend</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Earum, laborum natus. A aspernatur nemo rerum sit nihil 
                            natus omnis quod, necessitatibus dolor laudantium eum 
                            perspiciatis tenetur alias odit beatae tempore!
                        </p>
                        <button type="button" class="btn btn-outline-secondary btn-last" style="width: 50%;">shop now</button>
                    </div>
                </div>
            </div>
            <div class="part-b">
                <div class="container">
                    <img src="{{URL::asset('userpanel/img/coll-2.jpg')}}" class="w-100" alt="">
                    <img src="{{URL::asset('userpanel/img/coll-1.jpg')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- feature itemes -->
    <div class="feature-items">
        <div class="container">
            <div class="top-feat">
                <h3>feature items</h3>
                <hr>
                <div class="top-feat-link">
                    <a href="">All</a>
                    <a href="">Men</a>
                    <a href="">Boys</a>
                    <a href="">Women</a>
                </div>
            </div>
            <div class="feat-cards">
                <div class="container">
                    <div class="cards">
                        @foreach ($products as $product)
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('uploads/products/' . $product->img)}}" alt="">
                            <div class="card-body">
                                <h2>{{$product->name_product}}</h2>
                                <p>
                                    {{$product->description}}
                                </p>
                                <h5 style="color:#fff; background-color: #000; width: 25%; text-align: center">{{$product->price}}</h5>
                                <div class="card-flute">
                                    <a href="{{route('card.add' , $product->id)}}" class="icon"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="" class="icon-1"><i class="fas fa-heart"></i></a>
                                    <a href="" class="icon"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="card" style="width: 18rem;">
                            <img src="img/card.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/card.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/card.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card" style="width: 18rem;">
                            <img src="img/card.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/card.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/card.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/card.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- off -->
    <div class="off">
        <div class="container-fulid">
            <img src="{{URL::asset('userpanel/img/off.png')}}" class="w-100" alt="">
        </div>
    </div>
    <!-- trending item -->
    <div class="feature-items">
        <div class="container">
            <div class="top-feat">
                <h3>trending items</h3>
                <hr>
            </div>
            <div class="feat-cards">
                <div class="container">
                    <div class="cards">
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h2>clothes.</h2>
                            <div class="card-flute">
                                <a href=""><div class="icon"><i class="fas fa-shopping-cart"></i></div></a>
                                    <a href=""><div class="icon-1"><i class="fas fa-heart"></i></div></a>
                                    <a href=""><div class="icon"><i class="fas fa-share-alt"></i></div></a>
                            </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <a href=""><div class="icon"><i class="fas fa-shopping-cart"></i></div></a>
                                    <a href=""><div class="icon-1"><i class="fas fa-heart"></i></div></a>
                                    <a href=""><div class="icon"><i class="fas fa-share-alt"></i></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <a href=""><div class="icon"><i class="fas fa-shopping-cart"></i></div></a>
                                    <a href=""><div class="icon-1"><i class="fas fa-heart"></i></div></a>
                                    <a href=""><div class="icon"><i class="fas fa-share-alt"></i></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <a href=""><div class="icon"><i class="fas fa-shopping-cart"></i></div></a>
                                    <a href=""><div class="icon-1"><i class="fas fa-heart"></i></div></a>
                                    <a href=""><div class="icon"><i class="fas fa-share-alt"></i></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <a href=""><div class="icon"><i class="fas fa-shopping-cart"></i></div></a>
                                    <a href=""><div class="icon-1"><i class="fas fa-heart"></i></div></a>
                                    <a href=""><div class="icon"><i class="fas fa-share-alt"></i></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <a href=""><div class="icon"><i class="fas fa-shopping-cart"></i></div></a>
                                    <a href=""><div class="icon-1"><i class="fas fa-heart"></i></div></a>
                                    <a href=""><div class="icon"><i class="fas fa-share-alt"></i></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <a href=""><div class="icon"><i class="fas fa-shopping-cart"></i></div></a>
                                    <a href=""><div class="icon-1"><i class="fas fa-heart"></i></div></a>
                                    <a href=""><div class="icon"><i class="fas fa-share-alt"></i></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <div class="card-flute">
                                    <a href=""><div class="icon"><i class="fas fa-shopping-cart"></i></div></a>
                                    <a href=""><div class="icon-1"><i class="fas fa-heart"></i></div></a>
                                    <a href=""><div class="icon"><i class="fas fa-share-alt"></i></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttom">
                        <button type="button" class="btn btn-outline-secondary">LOAD MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slid -->
    <div class="slid">
        <div class="container-fulid">
            <img src="{{URL::asset('userpanel/img/SLIDE.png')}}" class="w-100" alt="">
        </div>
    </div>
    <!-- latest blog -->
    <div class="feature-items">
        <div class="container">
            <div class="top-feat">
                <h3>latest blog</h3>
                <hr>
            </div>
            <div class="feat-cards">
                <div class="container">
                    <div class="cards">
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h2>clothes.</h2>
                              <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet illum consequatur ut! Cupiditate vel veritatis, a nulla 
                                omnis praesentium deleniti, corrupti natus nostrum est minima 
                                eveniet unde facilis expedita veniam?
                              </p>
                              <button type="button" class="btn btn-outline-secondary btn-last" style="width: 90%;">READ MORE</button>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Amet illum consequatur ut! Cupiditate vel veritatis, a nulla 
                                    omnis praesentium deleniti, corrupti natus nostrum est minima 
                                    eveniet unde facilis expedita veniam?
                                </p>
                                <button type="button" class="btn btn-outline-secondary btn-last" style="width: 90%;">READ MORE</button>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="{{URL::asset('userpanel/img/card-1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2>clothes.</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Amet illum consequatur ut! Cupiditate vel veritatis, a nulla 
                                    omnis praesentium deleniti, corrupti natus nostrum est minima 
                                    eveniet unde facilis expedita veniam?
                                </p>
                                <button type="button" class="btn btn-outline-secondary btn-last" style="width: 90%;">READ MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop brand -->
    <div class="feature-items">
        <div class="container">
            <div class="top-feat">
                <h3>Shop by brand</h3>
                <hr>
                <div class="branding">
                    <img src="{{URL::asset('userpanel/img/brand.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection