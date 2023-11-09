<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;


class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('foods.index', compact('foods'));
    }

    public function create()
    {
        return view('foods.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Food::create($request->all());

        return redirect()->route('foods.index')->with('success', 'Food created successfully');
    }

    public function show(Food $food)
    {
        return view('foods.show', compact('food'));
    }

    public function edit(Food $food)
    {
        return view('foods.edit', compact('food'));
    }

    public function update(Request $request, Food $food)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $food->update($request->all());

        return redirect()->route('foods.index')->with('success', 'Food updated successfully');
    }

    public function destroy(Food $food)
    {
        $food->delete();

        return redirect()->route('foods.index')->with('success', 'Food deleted successfully');
    }
}
