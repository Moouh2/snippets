<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Snippet;

class SnippetController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('category')) {
            return Snippet::where('category', $request->category)->latest()->get();
        }
        return Snippet::latest()->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required|in:PHP,HTML,CSS',
            'code' => 'required'
        ]);

        return Snippet::create($validated);
    }

}
