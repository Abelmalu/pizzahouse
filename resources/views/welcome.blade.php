
@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">

        </div>
    @endif

    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <div class="mine">
         <a href="/login">Login</a>
         <a href="/register">register</a>
         
        </div>

        <p class="mssg">{{session('mssg')}}</p>
        <a href="/pizzas/create">Order a pizza</a>
    </div>
</div>
@endsection
