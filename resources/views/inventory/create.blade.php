<h2>Add New Item</h2>
<form action="{{ route('inventory.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantity</label>
        <input type="number" name="qty" class="form-control" min="1" required>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" step="0.01" name="price" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('inventory.index') }}" class="btn btn-secondary">Cancel</a>
</form>