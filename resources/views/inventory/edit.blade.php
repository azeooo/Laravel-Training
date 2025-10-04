<h2>Edit Item</h2>
<form action="{{ route('inventory.update', $inventory) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $inventory->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantity</label>
        <input type="number" name="qty" value="{{ $inventory->qty }}" class="form-control" min="1" required>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" step="0.01" name="price" value="{{ $inventory->price }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required>{{ $inventory->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('inventory.index') }}" class="btn btn-secondary">Cancel</a>
</form>