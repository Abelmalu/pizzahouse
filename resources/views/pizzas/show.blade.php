
@extends("layouts.layout")


@section("content")
<div class="wrapper pizza-details">
    <h1>Order for {{$lam->name}}</h1>
<p class="type">Type-{{$lam->type}}</p>
<p class="base">base-{{$lam->base}}</p>
<p class="toppings">Extra toppings</p>
<ul>
    @foreach($lam->toppings as $topping)
    <li>{{$topping}}</li>
@endforeach
</ul>
<form action="/pizzas/{{$lam->id}}" method='POST'>
@csrf
@method('DELETE')
<button>Complete Order</button>

</form>

</div>
<a href="/pizzas" class="back"><--Back to all pizzas</a>
 
@endsection