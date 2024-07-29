<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        // Fetching all quotes from the database
        $quotes = Quote::all();

        // Returning the view and passing the quotes data
        return view('welcome', ['quotes' => $quotes]);
    }
}
