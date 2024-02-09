<?php

namespace App\Http\Controllers\Homes;

use App\Http\Controllers\Controller;
use App\Models\Vacant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $vacants = Vacant::all();

        return view('home.index', [
            'vacants' => $vacants
        ]);
    }
}
