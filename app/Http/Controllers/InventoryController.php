<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    // READ - List all items
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventory.index', compact('inventories'));
    }

    // CREATE - Show creation form
    public function create()
    {
        return view('inventory.create');
    }

    // CREATE - Store new item
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|min:5'
        ]);

        $validated['user_id'] = Auth::id();
        Inventory::create($validated);

        return redirect()->route('inventory.index');
    }

    // READ - Show single item
    public function show(Inventory $inventory)
    {
        return view('inventory.show', compact('inventory'));
    }

    // UPDATE - Show edit form
    public function edit(Inventory $inventory)
    {
        return view('inventory.edit', compact('inventory'));
    }

    // UPDATE - Process edit
    public function update(Request $request, Inventory $inventory)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|min:5'
        ]);

        $inventory->update($validated);
        return redirect()->route('inventory.index');
    }

    // DELETE - Remove item
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventory.index');
    }
}