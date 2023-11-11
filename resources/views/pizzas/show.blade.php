<div>
    <h1>
        <p>Order for: {{ $pizza->name }}</p>
        <p>Pizza type: {{ $pizza->type }}</p>
        <p>Pizza base: {{ $pizza->base }}</p>
    </h1>
<div>
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Confirm order</button>
    </form>
</div>
    <div>
        <a href="/pizzas">Back to all pizzas</a>
    </div>
</div>
