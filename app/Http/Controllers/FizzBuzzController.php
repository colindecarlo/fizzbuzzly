<?php

namespace App\Http\Controllers;

use App\FizzBuzz;
use App\Http\Requests;

class FizzBuzzController extends Controller
{
    public function index()
    {
        return response()->json(collect(range(1, 100))->map(function ($id) { return new FizzBuzz($id); }));
    }

    public function show($id)
    {
        return response()->json(new FizzBuzz($id));
    }
}
