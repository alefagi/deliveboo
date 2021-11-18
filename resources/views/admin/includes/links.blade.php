<div class="user">
    <div id="logo">
        <img class="img-fluid" src="@foreach($user as $item){{{$item->cover}}}@endforeach">
    </div>
    <ul class="navbar-nav m-auto">
        {{-- <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else --}}
        <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-center" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
    
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
         </li>
        {{-- @endguest --}}
    </ul>
</div>
<hr>
<div class="link"><i class="far fa-chart-bar fa-2x"></i><a href="{{route('admin.home')}}">Statistics</a></div>
<div class="link"><i class="fas fa-utensils fa-2x"></i><a href="{{route('admin.dishes.index')}}">All your dishes</a></div>
<div class="link"><i class="fas fa-plus fa-2x"></i><a href="{{route('admin.dishes.create')}}">Add a new dish</a></div>
<div class="link"><i class="fas fa-shopping-cart fa-2x"></i><a href="{{route('admin.orders.index')}}">Your orders</a></div>
<div class="link"><i class="fas fa-home fa-2x"></i><a href="{{url('/')}}">Back to home</a></div>