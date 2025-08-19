<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Example JSON response
        return response()->json([
            'books' => [
                ['id' => 1, 'title' => 'Book One'],
                ['id' => 2, 'title' => 'Book Two'],
            ],
            'status' => 'success'
        ]);
    }
}
