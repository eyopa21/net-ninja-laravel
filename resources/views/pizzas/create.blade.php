@extends('layouts.default')
@section('page')
    <div style="margin: 200px">
        <h1 class="underline">
            creating pizzas
            <form action="/pizzas" method="POST">
                @csrf
                <div class="imgcontainer">
                    <img src="/img/bdu.jpg" alt="Avatar" class="avatar">
                  </div>

                  <div class="container">
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter name" name="name" required>

                    <label for="type"><b>Type</b></label>
                    <input type="text" placeholder="Enter type" name="type" required>
                    <label for="base"><b>Base</b></label>
                    <input type="text" placeholder="Enter base" name="base" required>
                    <label for="price"><b>Price</b></label>
                    <input type="number" placeholder="Enter price" name="price" required>

                    <button type="submit">Order</button>

                  </div>


            </form>

        </h1>
    </div>
@endsection
