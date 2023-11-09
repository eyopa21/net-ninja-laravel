

@extends('layouts.default')
@section('page')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    <p>{{ $name }}</p><br>
    <p>{{ $age }}</p>
  <div class="bg-white border ">

      @foreach ( $pizzas as $pizza )
      <h1> {{ $loop->index }} {{ $pizza['name'] }}-{{ $pizza['type'] }}-{{ $pizza['base'] }}</h1>
      @endforeach
    </div>

</div>
      @endsection


