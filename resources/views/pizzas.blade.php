<?php
    /*
    if we have common code on all the pages like header and footer will be same on different pages
    if any changes is require on header or footer than we have to change it on all the pages which is very hectic and time consuming
    so to avoid that we can place that part of code in on file and than use them everywhere
    we can use @extends to get the which layout we want to use  & here layouts. layout is like layouts/layout here we have used . instead of
    three main thing is here @extends, @section, @yield for yield check layout file
    */
?>
@extends("layouts.layout")

<!-- 'content' is name of this section so you can write any name you want -->
@section("content")
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        @foreach($pizzas as $pizza)
        <div>
            <!--    both are printing the values so bcause Model gives the object that's why use -> but the second also working fine        -->
            {{ $pizza->name }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
        </div>
        @endforeach
    </div>
</div>
@endsection
