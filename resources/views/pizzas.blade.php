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

        <h1>Pizzas</h1>     
        <p>{{$type}}</p>    <!-- here we are using values passed in the view for that use doubl curly braces -->
        <p>{{$base}} - {{$price}}</p>   

        <!-- if else in blade -->
        @if($price > 15) -->
            <p>Expensive</p>
        @elseif($price < 5)
            <p>Cheap</p>
        @else
            <p>Normal Price</p>
        @endif

        <!-- for loop in blade -->
        @for($i=0; $i < 5; $i++)
            <p>{{$i}}</p>
        @endfor

        <!-- we can use this to write vanilla php -->
        @php
            $name = "inside this @php we can write vanilla php";
            echo($name);
        @endphp
    </div>
</div>
@endsection