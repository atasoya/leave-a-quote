<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::orderBy('created_at', 'desc')->paginate(10);
    
        return view('welcome', ['quotes' => $quotes])
            ->with('success', session('success'));
    }
    

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'writer' => 'required|string|max:255',
            'quote' => 'required|string',
            'likes' => 'integer',
            'reports' => 'integer',
        ]);


        Quote::create([
            'writer' => $request->writer,
            'quote' => $request->quote,
            'likes' => $request->likes ?? 0,
            'reports' => $request->reports ?? 0,
        ]);


        return redirect()->route('quotes.index')->with('success', 'Quote created successfully.');
    }

    public function handleInteraction(Request $request)
    {
        $id = $request->input('id');
        $action = $request->input('action');
    
        if ($action === 'like') {

            $quote = Quote::find($id);
            $quote->likes += 1;
            $quote->save();
            return response()->json(['success' => true]);
        } elseif ($action === 'flag') {

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid action']);
        }
    }
}
