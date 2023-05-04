<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class PageController extends Controller
{
    public function index() {
        
        $Movies = Movie::all();
        
        return view('home', compact('Movies'));
    }

    public function detail($id) {
        
        $Movie = Movie::findOrFail($id);
        
        return view('movie', compact('Movie'));
    }
}
