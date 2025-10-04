<h2>Inventory List</h2>
<a href="{{ route('inventory.create') }}" class="btn btn-primary mb-3">Add New</a>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($inventories as $key => $inventory)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $inventory->name }}</td>
            <td>{{ $inventory->qty }}</td>
            <td>RM {{ $inventory->price }}</td>
            <td>
                <a href="{{ route('inventory.show', $inventory) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('inventory.edit', $inventory) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('inventory.destroy', $inventory) }}" method="POST" style="display: inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>