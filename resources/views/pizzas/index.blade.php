

@extends('layouts.default')
@section('page')
<div>

    <p>{{ $name }}</p><br>
    <p>{{ $age }}</p>
  <div class="bg-white border ">

      @foreach ( $pizzas as $pizza )
      <h1> Id: {{ $loop->index }}</h1>
      <div class="card">
        <img width="50" height="100" src="/img/bdu.jpg" alt="Avatar" style="width:100%;">
        <div class="container">
          <h4><b>{{ $pizza['name'] }}</b></h4>
          <p>{{ $pizza['type'] }}-{{ $pizza['base'] }}</p>
        </div>
        @role('editor'|'admin')
        <button>Edit</button>
        @endrole
      </div>
      @endforeach
    </div>

</div>
      @endsection


