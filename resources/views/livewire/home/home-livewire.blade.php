@section('title', 'Home')
<div class="card">
    <div class="card-header">
        <strong>Card Header</strong>
    </div>
    <div class="card-body">
        <p class="m-0">A simple Livewire example of Increment and Decrement. Try it!</p>
        <div class="border text-center my-2 p-3">
            <button class="btn btn-sm btn-primary" wire:click="increment">+</button>
            <h1 class="my-0">{{ $count }}</h1>
            <button class="btn btn-sm btn-secondary" wire:click="decrement">+</button>
        </div>
        <p class="m-0">Cool, isn't it? Now let's try some basic CRUD, shal we?</p>
    </div>
</div>