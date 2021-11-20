<div class="user">
    <div id="logo">
        <img class="img-fluid" src="@foreach($user as $item){{{$item->cover}}}@endforeach">
    </div>
    <div class="text-center">
        <div class="user-name">{{ Auth::user()->name }}</div>
    </div>
</div>
<hr>
<a class="link {{ request()->routeIs('admin.home') ? 'active' : '' }}" href="{{route('admin.home')}}"> <i class="far fa-chart-bar fa-2x"></i>Statistics</a>
<a class="link {{ request()->routeIs('admin.dishes.show') ? 'active' : '' }}{{ request()->routeIs('admin.dishes.index') ? 'active' : '' }}" href="{{route('admin.dishes.index')}}"><i class="fas fa-utensils fa-2x"></i>All your dishes</a>
<a  class="link {{ request()->routeIs('admin.dishes.create') ? 'active' : '' }}" href="{{route('admin.dishes.create')}}"><i class="fas fa-plus fa-2x"></i> Add a new dish</a>
<a  class="link {{ request()->routeIs('admin.orders.show') ? 'active' : '' }} {{ request()->routeIs('admin.orders.index') ? 'active' : '' }}" href="{{route('admin.orders.index')}}"><i class="fas fa-shopping-cart fa-2x"></i>Your orders</a>
<a  class="link" href="{{url('/')}}"><i class="fas fa-home fa-2x"></i>Back to home</a>
<a class="link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fas fa-sign-out-alt fa-2x"></i></i>Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>