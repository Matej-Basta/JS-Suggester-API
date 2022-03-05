<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class SuggestionController extends Controller
{
    
    public function index()
    {
        return view("index.suggestion");
    }
    
    public function query($search = null)
    {
    
        $movies =  Movie::query()->where("name", "like", "%{$search}%")->get();

        return $movies;
    }
}
