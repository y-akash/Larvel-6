@extends("layouts.layout")

@section("content")
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <!-- this is session data which is send by the store method -->
        <!-- if we land direct to this page than session data will not available to us -->
        <!-- if we redirect from store method to this page than only this session value will available to us. -->
        {{ session("mssg") }}<br>
        <a href="{{route("pizzas.create")}}">oreder a pizza</a>
    </div>
</div>
@endsection
