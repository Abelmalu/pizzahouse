@extends("layouts.layout")


@section("content")
<div class="wrapper create-pizza">
    <h1>create a pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
      <label for="name">Your name:</label>
      <input type="text" id="name" name="name">
      <label for="type">Choose pizza type</label>
      <select name="type" id="type">

       <option value="margaritas">margaritas</option>
       <option value="hawaiian">hawaiian</option>
       <option value="veg supreme">veg supreme</option>
       <option value="volcano">volcano</option>


      </select>

     
      <select name="base" id="base">
      <label for="type">Choose pizza base</label>

       <option value="cheesy crust">cheesy crust</option>
       <option value="garlic crust">garlic crust</option>
       <option value="thin & crispy">thin &crispy</option>
       <option value="thick">thick</option>
       <input type="submit" value="order pizza" id="">
       <fieldset>
        <label for="">Extra toppings</label>
         <input type="checkbox"name="toppings[]" value="meshrooms">meshrooms <br>
         <input type="checkbox"name="toppings[]" value="peppers">peppers <br>
         <input type="checkbox"name="toppings[]" value="garlic">garlic <br>

 
       </fieldset>


      </select>




    </form>

</div>
@endsection