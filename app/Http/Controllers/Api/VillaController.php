<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Villa;

class VillaController extends Controller
{
    public function show()
    {
        $villa = Villa::with('gambar')->get();

        return response()->json(['data' => $villa], 200);
    }
}
