<!-- account nav -->
<div class="user-nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="container">
                <span class="navbar-text">
                  free shopping on All orders over $75!
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{route('user.show' , Auth::user()->id)}}">Account</a>
                    </li> --}}
                    
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.show' , Auth::user()->id)}}">Account</a>
                    </li>
                    <li class="nav-item dropdown">
                        {{-- <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"> --}}
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " style="color: #fff; background-color: #dc3545; border-color: #dc3545;" 
                            href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('card.show')}}">MyCard({{session()->has('card') ? session()->get('card')->totalQty : '0'}})</a>
                    </li>
                @endguest
                    
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- search -->
<div class="search">
    <div class="container">
        <form action="{{route('search')}}" method="GET" class="navbar-search__form">
            <input type="text" class="search-txt" placeholder="search">
            <a href="" class="search-btn"><i class="fas fa-search"></i></a>
        </form>
    </div>
</div>
<!-- main bar -->
<div class="main-bar">
    <div class="container-fulid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="">Fashion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Footwear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Seles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
</div>