<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YourModel; // Add this line to import YourModel

class CrudController extends Controller
{
    public function index()
    {
        // Fetch all records and pass them to the view
        $data = YourModel::all();
        return view('your-model.index', compact('data'));
    }

    public function create()
    {
        // Show the form to create a new record
        return view('your-model.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new record
        YourModel::create($request->all());
        return redirect()->route('your-model.index');
    }

    public function show($id)
    {
        // Show details of a specific record
        $item = YourModel::findOrFail($id);
        return view('your-model.show', compact('item'));
    }

    public function edit($id)
    {
        // Show the form to edit a specific record
        $item = YourModel::findOrFail($id);
        return view('your-model.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the specific record
        $item = YourModel::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('your-model.index');
    }

    public function destroy($id)
    {
        // Delete a specific record
        YourModel::destroy($id);
        return redirect()->route('your-model.index');
    }
}
