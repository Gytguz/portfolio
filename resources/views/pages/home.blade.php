<x-layout>
    @include('partials._hero')
    <h1>Home Page</h1>
    <div id="app">
    </div>
    @foreach ($products as $product)
        <div>name:{{$product->name}}</div>
    @endforeach
</x-layout>