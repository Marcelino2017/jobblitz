<?php

namespace App\Http\Controllers\Candidates;

use App\Http\Controllers\Controller;
use App\Models\Vacant;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index(Vacant $vacant)
    {
        return view('candidates.index', [
            'vacant' => $vacant
        ]);
    }
}
