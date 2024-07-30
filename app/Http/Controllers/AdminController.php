<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {

        $token = $request->cookie('token');


        $envToken = env('TOKEN');


        if ($token !== $envToken) {

            return response()->json(['message' => 'Access denied'], 403);
        }


        $quotes = Quote::orderBy('reports', 'desc')->paginate(10);


        return view('dashboard', compact('token', 'quotes'));
    }

    public function deleteQuote(Request $request, $id)
    {

        $token = $request->cookie('token');


        $envToken = env('TOKEN');


        if ($token !== $envToken) {

            return response()->json(['message' => 'Access denied'], 403);
        }


        $quote = Quote::find($id);
        if ($quote) {
            $quote->delete();
            return response()->json(['message' => 'Quote deleted successfully']);
        } else {
            return response()->json(['message' => 'Quote not found'], 404);
        }
    }
}
