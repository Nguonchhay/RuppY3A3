<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // List
    public function index()
    {
        $categories = Category::get();
        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    // Show create form
    public function create() {}

    // Store new record
    public function store() {}

    // Show detail
    public function show() {}

    // Show edit form
    public function edit() {}

    // Update existing record
    public function update() {}

    // Remove existing record
    public function destroy() {}
}
