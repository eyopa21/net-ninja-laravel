@extends('layouts.default')
@section('page')
    <div style="margin: 200px">
        <h1 class="underline">
            creating pizzas
            <form action="/pizzas" method="POST">
                @csrf
                <div style="margin: 32px">
                    <div>

                        name:
                        <input type="text" name="name">
                    </div>

                    <div>
                        type: <input type="text" name="type">

                    </div>
                    <div>

                        base:
                        <input type="text" name="base">
                    </div>
                    <div>

                        Price:
                        <input type="number" name="price">
                    </div>
                    <input type="submit" name="Add pizza">
            </form>
            div>
        </h1>
    </div>
@endsection
