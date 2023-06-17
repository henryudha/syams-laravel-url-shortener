<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShortenUrlController extends Controller
{
    public function test(): mixed {
        return response()->json(['test' => true]);
    }
}
