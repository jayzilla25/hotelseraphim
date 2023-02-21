<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        return view('logs.logs', ['logs' => Log::latest()->filter(request(['search']))->simplePaginate(20)]);
    }
}
