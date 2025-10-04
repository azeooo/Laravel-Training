<h2>Item Details</h2>
<div class="card">
    <div class="card-body">
        <p><strong>Name:</strong> {{ $inventory->name }}</p>
        <p><strong>Quantity:</strong> {{ $inventory->qty }}</p>
        <p><strong>Price:</strong> RM {{ $inventory->price }}</p>
        <p><strong>Description:</strong> {{ $inventory->description }}</p>
    </div>
</div>
<a href="{{ route('inventory.index') }}" class="btn btn-secondary mt-3">Back</a>