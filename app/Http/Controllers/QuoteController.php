<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::paginate(10);
    
        return view('welcome', ['quotes' => $quotes])
            ->with('success', session('success'));
    }
    

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'writer' => 'required|string|max:255',
            'quote' => 'required|string',
            'likes' => 'integer',
            'reports' => 'integer',
        ]);

        // Create a new quote
        Quote::create([
            'writer' => $request->writer,
            'quote' => $request->quote,
            'likes' => $request->likes ?? 0,
            'reports' => $request->reports ?? 0,
        ]);

        // Redirect to a relevant page, e.g., the list of quotes
        return redirect()->route('quotes.index')->with('success', 'Quote created successfully.');
    }
}
