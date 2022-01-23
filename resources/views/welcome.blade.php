@extends("layouts.layout")

@section("content")
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <!-- this is session data which is send by the store method -->
        <!-- if we land direct to this page than session data will not available to us -->
        <!-- if we redirect from store method to this page than only this session value will available to us. -->
        {{ session("mssg") }}<br>
        <a href="pizzas/create">oreder a pizza</a>
    </div>
</div>
@endsection
